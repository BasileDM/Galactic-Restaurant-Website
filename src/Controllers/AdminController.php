<?php

namespace src\controllers;

use src\Repositories\DishRepository;
use src\Repositories\ReservationRepository;
use src\Services\Reponse;

class AdminController
{
    use Reponse;

    public function afficheLogin() 
    {
        $this->render("login");
        exit;
    }

    public function affichePageAdmin()
    {
        $dishRepo = new DishRepository();
        $reservationRepo = new ReservationRepository();
        $entrees = $dishRepo->recupererEntrees();
        $plats = $dishRepo->recupererPlats();
        $desserts = $dishRepo->recupererDesserts();
        $reservations = $reservationRepo->getAllReservation();
        $this->render("accueilAdmin", ['entrees' => $entrees, 'plats' => $plats, 'desserts' => $desserts, 'reservations' => $reservations]);
        exit;
    }

    public function affichePageCreationPlats()
    {
        $this->render("formulaireCreationPlats");
        exit;
    }


}
