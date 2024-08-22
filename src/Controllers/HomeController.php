<?php

namespace src\controllers;

use src\Repositories\CookRepository;
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

    public function affichePage404()
    {
      $this->render("404");
      exit;
    }
  
    public function affichePagePropos()
    {
        $cookRepo = new CookRepository;
        $cook = $cookRepo->getAllCook();
        $this->render("propos", ['cook' => $cook]);
        exit;
    }

    public function affichePageMenu()
    {
        $dishRepo = new DishRepository();
        $entrees = $dishRepo->recupererEntrees();
        $plats = $dishRepo->recupererPlats();
        $desserts = $dishRepo->recupererDesserts();
        $entreesRobot = $dishRepo->recupererEntreesRobot();
        $platsRobot = $dishRepo->recupererPlatsRobot();
        $dessertsRobot = $dishRepo->recupererDessertsRobot();
        $this->render("menu", ['entrees' => $entrees, 'plats' => $plats, 'desserts' => $desserts, 'entreesRobot' => $entreesRobot, 'platsRobot' => $platsRobot, 'dessertsRobot' => $dessertsRobot]);
        exit;
    }

    public function displayReservationPage() {
        $this->render("reservationForm");
        exit;
    }
}
