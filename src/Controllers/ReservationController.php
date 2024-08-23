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
    if (!isset($_POST['nom']) || !isset($_POST['email']) || !isset($_POST['date']) || !isset($_POST['time']) || !isset($_POST['number']))
    {
      $this->render('reservationForm');
    }
    else
    {
      // $reservation = new Reservation(null, $_POST['lastName'], $_POST['mail'], $_POST['resaDate'], $_POST['resaTime'], 1, 0);
      // $reservationRepository = new ReservationRepository();
      // $reservationRepository->addReservation($reservation);
      // $this->render('formulaireReservation');
      echo "Processing reservation...";
      var_dump($_POST);
    }
  }
}
