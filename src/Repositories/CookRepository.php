<?php

namespace   src\Repositories;

use PDO;
use src\Models\Database;

class CookRepository{
    
    private $DB;

    public function __construct()
    {
        $database = new Database;
        $this->DB = $database->getDB();

        require_once __DIR__ . '/../../config.local.php';
    }

    public function getAllCook(){
        $sql = "SELECT * FROM rest_cook LIMIT 3;";
        $query = $this->DB->query($sql);
        $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
        return $demandes;
    }
}