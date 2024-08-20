<?php

use src\controllers\AdminController;
use src\controllers\DishController;
use src\controllers\HomeController;

$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$homeController = new HomeController;
$adminController = new AdminController;
$dishController = new DishController;

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
        exit;

    //FIN 
    // METTRE DEFAULT 
  
}
