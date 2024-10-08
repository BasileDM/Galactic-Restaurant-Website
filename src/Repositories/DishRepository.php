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
      $sql = "SELECT * FROM rest_dish WHERE id_types=1 AND `isAvailable`=1 AND `isRobot`=1 LIMIT 1;";
      $query = $this->DB->query($sql);
      $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
      return $demandes;
    }

    public function recupererToutesLesEntrees(){
      {
        $sql = "SELECT * FROM rest_dish WHERE id_types=1;";
        $query = $this->DB->query($sql);
        $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
        return $demandes;
      }
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
      $sql = "SELECT * FROM rest_dish WHERE id_types=2 AND `isAvailable`=1 AND `isRobot`=1 LIMIT 1;";
      $query = $this->DB->query($sql);
      $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
      return $demandes;
    }

    public function recupererTousLesPlats(){
      {
        $sql = "SELECT * FROM rest_dish WHERE id_types=2;";
        $query = $this->DB->query($sql);
        $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
        return $demandes;
      }
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
      $sql = "SELECT * FROM rest_dish WHERE id_types=3 AND `isAvailable`=1 AND `isRobot`=1 LIMIT 1;";
      $query = $this->DB->query($sql);
      $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
      return $demandes;
    }

    public function recupererTousLesDesserts(){
      {
        $sql = "SELECT * FROM rest_dish WHERE id_types=3;";
        $query = $this->DB->query($sql);
        $demandes = $query->fetchAll(PDO::FETCH_ASSOC);
        return $demandes;
      }
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

public function getDishById($id){
  $sql = "SELECT * FROM rest_dish WHERE id_dish=:id_dish";
  $query = $this->DB->prepare($sql);
  $query->execute(['id_dish' => $id]);
$dish = $query->fetch(PDO::FETCH_ASSOC);
return $dish;
}

public function editerDish($id_dish, $title, $description, $isRobot, $isAvailable, $price, $id_types) {
  $sql = "UPDATE rest_dish SET title = :title, description = :description, isRobot = :isRobot, isAvailable = :isAvailable, price = :price, id_types = :id_types WHERE id_dish = :id_dish";
  $query = $this->DB->prepare($sql);
  return $query->execute([
      'id_dish' => $id_dish,
      'title' => $title,
      'description' => $description,
      'isRobot' => $isRobot,
      'isAvailable' => $isAvailable,
      'price' => $price,
      'id_types' => $id_types,
  ]);
}


}


  