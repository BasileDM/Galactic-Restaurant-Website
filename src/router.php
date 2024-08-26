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

    //AUTHENTICATION PAGE
  case HOME_URL . 'login':
    $adminController->afficheLogin();
    break;

  case HOME_URL . 'traitementLogin':
    $adminController->traiterLogin();
    break;


  case HOME_URL . 'aPropos':
    $homeController->affichePagePropos();
    break;

    // APRES AUTHENTIFICATION 
  case HOME_URL . 'admin':
    $adminController->affichePageAdmin();
    break;

    case HOME_URL . 'logout':
      $adminController->logout();
      break;

  case HOME_URL . 'ajoutPlat':
    $adminController->affichePageCreationPlats();
    break;

  case HOME_URL . 'traiterFormulaireDish':
    $dishController->traiterFormulaireDish();
    break;

  case HOME_URL . 'reservation':
    if ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
      $data['error'] = null;
      $homeController->displayReservationPage();
    }
    else if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
      $resaController->processReservation();
    }
    break;

  case HOME_URL . 'supprimerDish':
    $dishController->supprimerDish();
    break;

  case HOME_URL . 'getSeatsAvailability':
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['date']))
    {
      $seats = $resaController->getAvailableSeats($_GET['date']);
      echo json_encode($seats);
    }
    break;

  case HOME_URL . 'cancel':
    $resaController->cancelReservation();
    $homeController->render("reservationForm", ['success' => 'Votre réservation a bien été annulée !']);
    break;

  default:
    $homeController->affichePage404();
    break;
}
