<?php

namespace src\Repositories;

use PDO;
use src\Models\Database;
use src\Models\Dish;

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
      $sql = "SELECT * FROM rest_dish WHERE id_types=1 AND `isAvailable`=1 AND `isRobot`=0 LIMIT 3;";
      $query = $this->DB->query($sql);
      $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
      return $demandes;
    }

    public function recupererEntreesRobot()
    {
      $sql = "SELECT * FROM rest_dish WHERE id_types=1 AND `isAvailable`=1 AND `isRobot`=1 LIMIT 3;";
      $query = $this->DB->query($sql);
      $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
      return $demandes;
    }

    public function recupererPlats()
    {
      $sql = "SELECT * FROM rest_dish WHERE id_types=2 AND `isAvailable`=1 AND `isRobot`=0 LIMIT 3;";
      $query = $this->DB->query($sql);
      $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
      return $demandes;
    }

    public function recupererPlatsRobot()
    {
      $sql = "SELECT * FROM rest_dish WHERE id_types=2 AND `isAvailable`=1 AND `isRobot`=1 LIMIT 3;";
      $query = $this->DB->query($sql);
      $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
      return $demandes;
    }

    public function recupererDesserts()
    {
      $sql = "SELECT * FROM rest_dish WHERE id_types=3 AND `isAvailable`=1 AND `isRobot`=0 LIMIT 3;";
      $query = $this->DB->query($sql);
      $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
      return $demandes;
    }

    public function recupererDessertsRobot()
    {
      $sql = "SELECT * FROM rest_dish WHERE id_types=3 AND `isAvailable`=1 AND `isRobot`=1 LIMIT 3;";
      $query = $this->DB->query($sql);
      $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
      return $demandes;
    }

    public function ajouterPlats(Dish $dish) {
      $sql = "INSERT INTO rest_dish (TITLE, DESCRIPTION, ISROBOT, ISAVAILABLE, PRICE, ID_TYPES) VALUES (:title, :description, :isRobot, :isAvailable, :price, :idTypes)";
  
      $statement = $this->DB->prepare($sql);
  
      $statement->execute([
          ':title'       => $dish->getTitle(),    
          ':description' => $dish->getDescription(), 
          ':isRobot'     => $dish->getIsRobot(),    
          ':isAvailable' => $dish->getIsAvailable(), 
          ':price'       => $dish->getPrice(),       
          ':idTypes'     => $dish->getTypeOfDish() 
      ]);
  
      $id = $this->DB->lastInsertId();
      $dish->setId($id);
      return $dish;
  }

public function supprimerDish($idDishASup)
{
  $sql = "DELETE FROM rest_dish WHERE id_dish = :id";
  $query = $this->DB->prepare($sql);
  return $query->execute(['id' => $idDishASup]);
}


}


  