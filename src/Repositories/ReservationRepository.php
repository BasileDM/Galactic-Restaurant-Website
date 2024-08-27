<?php

namespace src\Repositories;

use PDO;
use PDOException;
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

  public function save(Reservation $reservation)
  {

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

  public function getAllReservation()
  {
    $sql = "SELECT * FROM rest_reservation;";
    $query = $this->DB->query($sql);
    $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
    return $demandes;
  }

  public function getTodaysReservations($selectedDate)
  {

    $sql = "SELECT * FROM rest_reservation WHERE resaDate = :selectedDate;";
    $query = $this->DB->prepare($sql);
    $query->execute([
      ':selectedDate' => $selectedDate
    ]);
    $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
    return $demandes;
  }

  public function delete($id)
  {
    $sql = "DELETE FROM rest_reservation WHERE id_resa = :id;";
    $query = $this->DB->prepare($sql);
    $query->execute([
      ':id' => $id
    ]);
  }

  public function validateReservation($id)
  {
    try
    {
      $sql = "UPDATE rest_reservation SET isValide = 1 WHERE id_resa = :id;";
      $query = $this->DB->prepare($sql);
      $query->execute([
        ':id' => $id
      ]);

      return true;
    }
    catch (PDOException $e)
    {
      echo $e->getMessage();
    }
  }
}
