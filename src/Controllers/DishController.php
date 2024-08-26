<?php

namespace src\controllers;

use src\Models\Dish;
use src\Repositories\DishRepository;
use src\Services\Reponse;

class DishController
{
    use Reponse;
    public function traiterFormulaireDish(){
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            
            if (empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price']) || empty($_POST['type'])) {
                $this->render('formulaireCreationPlats', ['success' => false, 'message' => 'Veuillez renseigner tous les champs.']);
                return;
            }

            $isAvailable = 0;
            $isRobot=0;
            if (isset($_POST['isAvailable'])) {
                $isAvailable = 1;
            }

            if (isset($_POST['isRobot'])) {
                $isAvailable = 1;
            }
            

            if (
                isset($_POST['name'])
                && isset($_POST['description']) 
                && isset($_POST['price']) 
                && isset($_POST['type'])
            ) 
            {
                $_POST['isAvailable'] = $isAvailable;
                $_POST['isRobot'] = $isRobot;
                $title = htmlspecialchars($_POST['name']);
                $type = htmlspecialchars($_POST['type']);
                $price = htmlspecialchars($_POST['price']);
                $description = htmlspecialchars($_POST['description']);

                $dish = new Dish(null, $type, $isRobot, $isAvailable, $price, $title, $description, 1);
                $dishRepo = new DishRepository();
                $dishRepo->ajouterPlats($dish);

                header('Location: ' . HOME_URL . 'admin');
            }
        }
    }


   public function supprimerDish()
   {
    $json_data = file_get_contents('php://input');

    if (!empty($json_data)) {
        $data = json_decode($json_data, true);
        if ($data !== null) {
            $idDishASup = $data['idDishASup'];
            $dishRepo = new DishRepository();
            $success = $dishRepo->supprimerDish($idDishASup);

            if ($success) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Erreur lors de la suppression du plat']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Données JSON invalides.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Aucune donnée reçue.']);
    }
   }
}
    