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

  public function getAllReservation(){
    $sql = "SELECT * FROM rest_reservation;";
    $query = $this->DB->query($sql);
    $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
    return $demandes;
}
}
