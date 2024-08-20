<?php

namespace src\controllers;

use src\Services\Reponse;

class AdminController
{
    use Reponse;

    public function affichePageAdmin()
    {
        $this->render("accueilAdmin");
        exit;
    }



}
