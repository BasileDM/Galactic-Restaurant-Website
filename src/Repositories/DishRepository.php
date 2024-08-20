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


    // ATTENTION POUR LES RECUPERATIONS : 
    // LIMITER A 3 ET CHOISIR QUE LES ISAVAILABLE
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

    public function ajouterPlats(Dish $dish) {
      // Assurez-vous que les noms des paramètres dans la requête SQL correspondent exactement à ceux passés à execute()
      $sql = "INSERT INTO rest_dish (TITLE, DESCRIPTION, ISROBOT, ISAVAILABLE, PRICE, ID_TYPES) VALUES (:title, :description, :isRobot, :isAvailable, :price, :idTypes)";
  
      $statement = $this->DB->prepare($sql);
  
      $statement->execute([
          ':title'       => $dish->getTitle(),      // Utiliser le nom du paramètre :title
          ':description' => $dish->getDescription(), // Utiliser le nom du paramètre :description
          ':isRobot'     => $dish->getIsRobot(),    // Utiliser le nom du paramètre :isRobot
          ':isAvailable' => $dish->getIsAvailable(), // Utiliser le nom du paramètre :isAvailable
          ':price'       => $dish->getPrice(),       // Utiliser le nom du paramètre :price
          ':idTypes'     => $dish->getTypeOfDish()   // Utiliser le nom du paramètre :idTypes
      ]);
  
      $id = $this->DB->lastInsertId();
      $dish->setId($id);
      return $dish;
  }}
  