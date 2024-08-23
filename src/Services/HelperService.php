<?php

namespace src\Services;

use src\Repositories\ReservationRepository;

class HelperService
{
  public function __construct()
  {
  }

  public function calculateAvailableSeats($selectedDate)
  {
    $reservationRepository = new ReservationRepository();
    $allReservations = $reservationRepository->getTodaysReservations($selectedDate);
    $totalSeats = 0;
    foreach ($allReservations as $reservation)
    {
      if ($reservation['numberOfGuests'] % 2 == 0)
      {
        $totalSeats += $reservation['numberOfGuests'];
      }
      else
      {
        $totalSeats += $reservation['numberOfGuests'] + 1;
      }
    }
    $availableSeats = MAX_GUESTS - $totalSeats;
    return $availableSeats;
  }

  public function sendMail($name, $mail, $resaDate, $resaTime, $numberOfGuests)
  {
    $to = $mail . ", contact@letoiledoree.com";
    $subject = "Reservation L'Étoile Dorée";
    $message = "Bonjour " . $name . ",\n\n" . "Merci pour votre réservation pour le " . $resaDate . " à " . $resaTime . " pour " . $numberOfGuests . " invité(s).\n\n" . "Cordialement,\n" . "L'équipe de l'hôtel.";
    $hash = password_hash($mail, PASSWORD_BCRYPT);
    $encryptedMail = base64_encode($hash);
    $message = $message . "\n\n" . "Pour annuler cliquez sur ce lien : ". FULL_URL . "cancel?id=" . $encryptedMail;
    $headers = "From: L'Étoile Dorée <contact@letoiledoree.com>\r\n";
    $headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"\n";
    $headers .= "Content-Transfer-Encoding: 8bit\n";
    $sentMail = mail($to, $subject, $message, $headers);
    return $sentMail;
  }
}
