<?php

use src\controllers\AdminController;
use src\controllers\api\ReviewController;
use src\controllers\DishController;
use src\controllers\HomeController;
use src\controllers\ReservationController;

$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$homeController = new HomeController;
$adminController = new AdminController;
$dishController = new DishController;
$resaController = new ReservationController;
$reviewController = new ReviewController;

switch ($route)
{
  case HOME_URL:
    $homeController->affichePageAccueil();
    break;

  case HOME_URL . 'menu':
    $homeController->affichePageMenu();
    break;

    //AUTHENTICATION PAGE
  case HOME_URL . 'login':
    if ($_SESSION && $_SESSION['connecte'] && $_SESSION['connecte'] === true)
    {
      header('location: ' . HOME_URL . 'admin');
      exit;
    }
    else
    {
      $adminController->afficheLogin();
    }
    break;

  case HOME_URL . 'admin':
    if ($_SESSION && $_SESSION['connecte'] && $_SESSION['connecte'] === true)
    {
      $adminController->affichePageAdmin();
    }
    else
    {
      header('location: ' . HOME_URL . 'login');
      exit;
    }
    break;

  case HOME_URL . 'traitementLogin':
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
      $adminController->traiterLogin();
    }
    else
    {
      header('location: ' . HOME_URL . 'login');
      exit;
    }
    break;

  case HOME_URL . 'aPropos':
    $homeController->affichePagePropos();
    break;

  case HOME_URL . 'logout':
    $adminController->logout();
    break;

  case HOME_URL . 'ajoutPlat':
    if (isset($_SESSION['connecte']) && $_SESSION['connecte'])
    {
      if (isset($_GET['id']))
      {
        $id = htmlspecialchars($_GET['id']);
        $adminController->affichePageCreationPlats($id);
      }
      else
      {
        $adminController->affichePageCreationPlats();
      }
    }
    else
    {
      $homeController->affichePage404();
    }
    break;

  case HOME_URL . 'traiterFormulaireDish':
    if ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
      header('location: ' . HOME_URL . 'menu');
      exit;
    }
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

  case HOME_URL . 'RGPD':
    $resaController->viewRGPD();
    break;

  case HOME_URL . 'supprimerDish':
    if (isset($_SESSION['connecte']) && $_SESSION['connecte'])
    {
      $dishController->supprimerDish();
      break;
    }
    else
    {
      $homeController->affichePage404();
      break;
    }

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

  case HOME_URL . 'api/GetReviews':
    $reviewController->GetReviews();
    break;

  case HOME_URL . 'validateReservation':
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
      $data = json_decode(file_get_contents('php://input'), true);
      $result = $resaController->validateReservation($data['idResa']);
      echo json_encode($result);
    }
    break;

  default:
    $homeController->affichePage404();
    break;
}
