<?php

use src\controllers\AdminController;
use src\controllers\HomeController;

$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$homeController = new HomeController;
$adminController = new AdminController;

switch ($route)
{
  case HOME_URL:
    $homeController->affichePageAccueil();
    break;

    case HOME_URL . 'menu':
      $homeController->affichePageMenu();
      break;

      case HOME_URL . 'pageAccueilAdmin':
        $adminController->affichePageAdmin();
        break;
  
}
