<?php

use src\controllers\HomeController;

$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$homeController = new HomeController;

switch ($route)
{
  case HOME_URL:
    $homeController->affichePageAccueil();
    break;
}
