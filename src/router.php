<?php

use src\controllers\AdminController;
use src\controllers\DishController;
use src\controllers\HomeController;
use src\controllers\ReservationController;

$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$homeController = new HomeController;
$adminController = new AdminController;
$dishController = new DishController;
$resaController = new ReservationController;

switch ($route)
{
  case HOME_URL:
    $homeController->affichePageAccueil();
    break;

  case HOME_URL . 'menu':
    $homeController->affichePageMenu();
    break;

  // APRES AUTHENTIFICATION 
  case HOME_URL . 'pageAccueilAdmin':
    $adminController->affichePageAdmin();
    break;

  case HOME_URL . 'ajoutPlat':
    $adminController->affichePageCreationPlats();
    break;

  case HOME_URL . 'traiterFormulaireDish':
    $dishController->traiterFormulaireDish();
    break;
  
  case HOME_URL . 'reservation':
    $homeController->displayReservationPage();
    break;
  
  case HOME_URL . 'processReservation':
    $_SERVER['REQUEST_METHOD'] === 'POST' ? 
    $resaController->processReservation() : 
    $homeController->displayReservationPage();
    break;

  default:
    $homeController->affichePageAccueil();
    break;
  
}
