<?php

namespace src\Repositories;

use PDO;
use src\Models\Database;
use src\Models\Reservation;

class ReservationRepository
{
  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();

    require_once __DIR__ . '/../../config.local.php';
  }
  
  public function save(Reservation $reservation) {
    
    $sql = "INSERT INTO rest_reservation (lastName, mail, resaDate, resaTime, numberOfGuests, isValide) VALUES (:name, :mail, :date, :time, :number_of_guests, :is_valid)";
    $query = $this->DB->prepare($sql);
    $query->execute([
      ':name' => $reservation->getName(),
      ':mail' => $reservation->getMail(),
      ':date' => $reservation->getDate(),
      ':time' => $reservation->getTime(),
      ':number_of_guests' => $reservation->getNumberOfGuests(),
      ':is_valid' => $reservation->getIsValid()
    ]);

    $reservation->setId($this->DB->lastInsertId());
    return $reservation->getId();
  }

  public function getAllReservation(){
    $sql = "SELECT * FROM rest_reservation;";
    $query = $this->DB->query($sql);
    $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
    return $demandes;
}
}