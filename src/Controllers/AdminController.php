<?php

namespace src\controllers;

use src\Repositories\DishRepository;
use src\Services\Reponse;

class AdminController
{
    use Reponse;

    public function affichePageAdmin()
    {
        $dishRepo = new DishRepository();
        $entrees = $dishRepo->recupererEntrees();
        $plats = $dishRepo->recupererPlats();
        $desserts = $dishRepo->recupererDesserts();
        $this->render("accueilAdmin", ['entrees' => $entrees, 'plats' => $plats, 'desserts' => $desserts]);
        exit;
    }

    public function affichePageCreationPlats()
    {
        $this->render("formulaireCreationPlats");
        exit;
    }


}
