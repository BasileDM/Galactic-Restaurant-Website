<?php

namespace src\Services;

use src\Repositories\ReservationRepository;

class SeatsManagement
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
}
