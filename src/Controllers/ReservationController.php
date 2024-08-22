<?php

namespace src\controllers;

use src\Models\Reservation;
use src\Repositories\ReservationRepository;
use src\Services\Reponse;

class ReservationController
{
  use Reponse;
  public function processReservation()
  {
    if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['date']) || empty($_POST['time']) || empty($_POST['number']))
    {
      $this->render('reservationForm', ['error' => 'Veuillez remplir tous les champs']);
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
        $this->render('reservationForm', ['reservation' => $reservation, 'success' => 'Votre réservation a bien été enregistrée ! Vérifiez votre boite mail.']);
      }
      else
      {
        $this->render('reservationForm', ['error' => 'Une erreur est survenue...']);
      }
    }
  }
}
