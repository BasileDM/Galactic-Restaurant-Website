<?php

namespace src\Repositories;

use PDO;
use src\Models\Database;

class DishRepository{
    private $DB;

    public function __construct()
    {
        $database = new Database;
        $this->DB = $database->getDB();

        require_once __DIR__ . '/../../config.local.php';
    }

    public function recupererEntrees()
    {
      $sql = "SELECT * FROM rest_dish WHERE id_types=1";
      $query = $this->DB->query($sql);
      $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
      return $demandes;
    }

    public function recupererPlats()
    {
      $sql = "SELECT * FROM rest_dish WHERE id_types=2";
      $query = $this->DB->query($sql);
      $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
      return $demandes;
    }

    public function recupererDesserts()
    {
      $sql = "SELECT * FROM rest_dish WHERE id_types=3";
      $query = $this->DB->query($sql);
      $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
      return $demandes;
    }

}