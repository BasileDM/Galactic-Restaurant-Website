<?php

namespace src\controllers;

use src\Models\Reservation;
use src\Repositories\ReservationRepository;
use src\Services\HelperService;
use src\Services\Reponse;

class ReservationController
{
  use Reponse;

  public function viewRGPD()
  {
    $this->render('RGPD');
  }

  public function processReservation()
  {
    $name = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $date = htmlspecialchars(trim($_POST['date']));
    $time = htmlspecialchars(trim($_POST['time']));
    $number = filter_var(trim($_POST['number']), FILTER_SANITIZE_NUMBER_INT);
    $terms = (isset($_POST['terms-conds']));

    if (empty($name) || strlen($name) > 50)
    {
      $this->render('reservationForm', ['error' => 'Le nom doit avoir entre 1 et 50 caractères.']);
      return;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 100)
    {
      $this->render('reservationForm', ['error' => 'Le mail doit avoir entre 1 et 100 caractères et avoir un format valide.']);
      return;
    }

    if (empty($date))
    {
      $this->render('reservationForm', ['error' => 'La date est requise.']);
      return;
    }

    if (empty($time))
    {
      $this->render('reservationForm', ['error' => 'Une heure est requise.']);
      return;
    }

    if ($number <= 0 || $number > 20 || !filter_var($number, FILTER_VALIDATE_INT))
    {
      $this->render('reservationForm', ['error' => 'Le nombre de convives doit être compris entre 1 et 20.']);
      return;
    }

    if ($number % 2 != 0)
    {
      $number += 1;
    }

    if ($this->getAvailableSeats($date) < $number)
    {
      $this->render('reservationForm', ['error' => 'Il n\'y a pas assez de places disponibles.']);
      return;
    }

    if (!$terms)
    {
      $this->render('reservationForm', ['error' => 'Accepter les termes et conditions avant de continuer']);
    }

    else
    {
      $reservation = new Reservation(
        null,
        $_POST['nom'],
        $_POST['email'],
        $_POST['date'],
        $_POST['time'],
        $_POST['number'],
        0
      );

      $reservationRepository = new ReservationRepository();
      $newID = $reservationRepository->save($reservation);

      if ($newID)
      {
        $reservation->setId($newID);
        $_POST['nom'] = $_POST['email'] = $_POST['date'] = $_POST['time'] = $_POST['number'] = null;

        $helperService = new HelperService();
        $sentMail = $helperService->sendMail(
          $reservation->getName(),
          $reservation->getMail(),
          $reservation->getDate(),
          $reservation->getTime(),
          $reservation->getNumberOfGuests()
        );

        if (!$sentMail)
        {
          $this->render('reservationForm', ['error' => 'Une erreur est survenue lors de l\'envoi du mail...']);
          return;
        }

        $this->render('reservationForm', [
          'reservation' => $reservation,
          'success' => 'Votre réservation a bien été enregistrée ! Vérifiez votre boite mail.'
        ]);
      }
      else
      {
        $this->render('reservationForm', ['error' => 'Une erreur est survenue...']);
      }
    }
  }

  public function getAvailableSeats($selectedDate)
  {
    $helperService = new HelperService();
    $availableSeats = $helperService->calculateAvailableSeats($selectedDate);
    return $availableSeats;
  }

  public function cancelReservation()
  {
    $mailHash = base64_decode($_GET['id']);
    $reservationRepository = new ReservationRepository();
    $allReservations = $reservationRepository->getAllReservation();

    foreach ($allReservations as $reservation)
    {
      if (password_verify($reservation['mail'], $mailHash))
      {
        $reservationRepository->delete($reservation['id_resa']);
        $this->render('reservationForm', ['success' => 'Votre réservation a bien été annulée !']);
      }
    }
  }
}
