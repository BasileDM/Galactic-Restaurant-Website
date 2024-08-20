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

                // REDIRIGER
            }
        }
    }}
    