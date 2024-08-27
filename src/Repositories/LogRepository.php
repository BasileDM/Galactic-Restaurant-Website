<?php

namespace src\Repositories;

use PDO;
use src\Models\Database;

class LogRepository
{
  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();

    require_once __DIR__ . '/../../config.local.php';
  }

  public function addLog($adminId, $type, $itemId)
  {
    $tableName = "";
    $firstColumnName = "";
    if ($type == "dish")
    {
      $tableName = "rest_dish_logs";
      $firstColumnName = "id_dish";
    }
    elseif ($type == "reservation")
    {
      $tableName = "rest_reservation_logs";
      $firstColumnName = "id_resa";
    }

    $sql = "INSERT INTO $tableName ($firstColumnName, id_Admin, modifDate) VALUES ($itemId, $adminId, NOW())";
    $query = $this->DB->prepare($sql);
    $query->execute();
  }
}
