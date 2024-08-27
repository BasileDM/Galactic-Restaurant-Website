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

  public function addLog($adminId, $type)
  {
  }
}
