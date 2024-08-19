<?php

namespace src\controllers;

use src\Services\Reponse;

class HomeController
{
    use Reponse;

    public function affichePageAccueil()
    {
        $this->render("accueil");
        exit;
    }
}
