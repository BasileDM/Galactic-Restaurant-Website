<?php

namespace src\controllers;

use src\Models\Dish;
use src\Repositories\DishRepository;
use src\Repositories\LogRepository;
use src\Services\Reponse;

class DishController
{
    use Reponse;
    public function traiterFormulaireDish()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST")
        {
            $isAvailable = 0;
            $isRobot = 0;
            if (isset($_POST['isAvailable']))
            {
                $isAvailable = 1;
            }

            if (isset($_POST['isRobot']))
            {
                $isRobot = 1;
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

                if (empty($title) || strlen($title) > 30 || strlen($title) < 5)
                {
                    $this->render('formulaireCreationPlats', ['errorDish' => 'Le nom doit avoir entre 6 et 30 caractères.']);
                    return;
                }

                if (empty($description) || strlen($description) > 250 || strlen($description) < 9)
                {
                    $this->render('formulaireCreationPlats', ['errorDish' => 'La description doit contenir entre 10 et 250 caractères.']);
                    return;
                }

                if (empty($price) || !ctype_digit($price) || (int)$price <= 0)
                {
                    $this->render('formulaireCreationPlats', ['errorDish' => 'Le prix doit être un nombre entier supérieur à 0']);
                    return;
                }

                $dishRepo = new DishRepository();

                if (isset($_POST['id_dish']) && !empty($_POST['id_dish']))
                {
                    $id_dish = intval($_POST['id_dish']);
                    $dish = $dishRepo->getDishById($id_dish);

                    if ($dish)
                    {
                        // Mettre à jour le plat existant
                        $dishRepo->editerDish(
                            $id_dish,
                            $title,
                            $description,
                            $isRobot,
                            $isAvailable,
                            $price,
                            $type
                        );
                        $logRepository = new LogRepository();
                        $logRepository->addLog($_SESSION['id'], 'dish', $id_dish);
                        header('Location: ' . HOME_URL . 'admin');
                    }
                    else
                    {
                        echo "Plat non trouvé.";
                    }
                }
                else
                {
                    $dish = new Dish(null, $type, $isRobot, $isAvailable, $price, $title, $description, 1);
                    $dishRepo->ajouterPlats($dish);
                    header('Location: ' . HOME_URL . 'admin');
                }
            }
        }
    }

    public function supprimerDish()
    {
        $json_data = file_get_contents('php://input');

        if (!empty($json_data))
        {
            $data = json_decode($json_data, true);
            if ($data !== null)
            {
                $idDishASup = $data['idDishASup'];
                $dishRepo = new DishRepository();
                $success = $dishRepo->supprimerDish($idDishASup);

                if ($success)
                {
                    echo json_encode(['success' => true]);
                }
                else
                {
                    echo json_encode(['success' => false, 'message' => 'Erreur lors de la suppression du plat']);
                }
            }
            else
            {
                echo json_encode(['success' => false, 'message' => 'Données JSON invalides.']);
            }
        }
        else
        {
            echo json_encode(['success' => false, 'message' => 'Aucune donnée reçue.']);
        }
    }
}
