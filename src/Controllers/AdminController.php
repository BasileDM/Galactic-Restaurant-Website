<?php

namespace src\controllers;

use src\Repositories\AdminRepository;
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

    public function traiterLogin() 
    {
        if(isset($_POST['username']) && isset($_POST['password'])) 
        {
            $username = $_POST['username'];
            $mdp = $_POST['password'];
    
            $adminRepository = new AdminRepository(); 
    
            // Verify the user with the correct logic inside the repository
            $admin = $adminRepository->verifyUser($username, $mdp);
    
            if($admin) {
                // session_start();
    
                $_SESSION['connecte'] = true;
                $_SESSION['utilisateur'] = $admin;
                
                
                header('location:' . HOME_URL . 'admin');
                die();
            } else {
                header('location:' . HOME_URL . 'login');
                die();
            }
        }
    }
    

    public function affichePageAdmin()
    {
        $dishRepo = new DishRepository();
        $reservationRepo = new ReservationRepository();
        $entrees = $dishRepo->recupererToutesLesEntrees();
        $plats = $dishRepo->recupererTousLesPlats();
        $desserts = $dishRepo->recupererTousLesDesserts();
        $reservations = $reservationRepo->getAllReservation();
        $this->render("accueilAdmin", ['entrees' => $entrees, 'plats' => $plats, 'desserts' => $desserts, 'reservations' => $reservations]);
        exit;
    }

    public function affichePageCreationPlats($id=0)
    {
        if($id !=0){
            $dishRepo = new DishRepository;
            $dish = $dishRepo->getDishById($id);
            $this->render("formulaireCreationPlats", ['dish' => $dish]);
            exit;
        }
        $this->render("formulaireCreationPlats");
        exit;
    }


}

