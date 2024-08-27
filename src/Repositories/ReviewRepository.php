<?php

namespace src\Repositories;

use PDO;
use src\Models\Database;

class ReviewRepository
{
  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();

    require_once __DIR__ . '/../../config.local.php';
  }

  public function GetAllReviews()
  {
    $sql = "SELECT * FROM rest_customer_review;";
    $stmt = $this->DB->prepare($sql);
    $stmt->execute();
    $reviews = $stmt->fetchAll();
    return $reviews;
  }
}
