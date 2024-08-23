<?php

namespace src\Services;

use src\Repositories\ReservationRepository;

class SeatsManagement
{
  public function __construct()
  {
  }

  public function calculateAvailableSeats($selectedDate) {
    $reservationRepository = new ReservationRepository();
    $allReservations = $reservationRepository->getTodaysReservations($selectedDate);
    $availableSeats = MAX_GUESTS - count($allReservations);
    return $availableSeats;
  }
}