<?php

namespace src\controllers;

use src\Repositories\AdminRepository;
use src\Repositories\DishRepository;
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
                session_start();
    
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
        $entrees = $dishRepo->recupererEntrees();
        $plats = $dishRepo->recupererPlats();
        $desserts = $dishRepo->recupererDesserts();
        $this->render("accueilAdmin", ['entrees' => $entrees, 'plats' => $plats, 'desserts' => $desserts]);
        exit;
    }

    public function affichePageCreationPlats()
    {
        $this->render("formulaireCreationPlats");
        exit;
    }


}
