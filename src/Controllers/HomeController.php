<?php

namespace src\controllers;

use src\Repositories\DishRepository;
use src\Services\Reponse;

class HomeController
{
    use Reponse;

    public function affichePageAccueil()
    {
        $this->render("accueil");
        exit;
    }

    public function affichePageMenu()
    {
        $dishRepo = new DishRepository();
        $entrees = $dishRepo->recupererEntrees();
        $plats = $dishRepo->recupererPlats();
        $desserts = $dishRepo->recupererDesserts();
        $this->render("menu", ['entrees' => $entrees, 'plats' => $plats, 'desserts' => $desserts]);
        exit;
    }


}
