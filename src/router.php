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
//AUTHETICATION PAGE
      case HOME_URL . 'login':
        $adminController->afficheLogin();
        break;

      case HOME_URL . 'aPropos':
        $homeController->affichePagePropos();
        break;

      // APRES AUTHENTIFICATION 
      case HOME_URL . 'admin':
        $adminController->affichePageAdmin();
        break;

    case HOME_URL . 'ajoutPlat':
      $adminController->affichePageCreationPlats();
      break;

      case HOME_URL . 'traiterFormulaireDish':
        $dishController->traiterFormulaireDish();
        exit;

        case HOME_URL . 'supprimerDish':
          $dishController->supprimerDish();
          exit;

          default:
          $homeController->affichePage404();
          break;
  
  
}
