<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galactic Restaurant</title>
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/header.css">
</head>


<header>
    <div class="backgroundHeader">
        <div class="containerImage">
            <img class="LogoHeader" src="assets/imgs/Logo.png" alt="logo du restaurant galactic">
        </div>
        <div>
            <h1> L'etoile Doree </h1>
            <nav class="backgroundNav">
                <a href=<?php echo HOME_URL; ?>>Accueil</a>
                <a href=<?php echo HOME_URL . 'menu'; ?>> Menu</a>
                <a href=<?php echo HOME_URL . 'reserver'; ?>> Réserver</a>
                <a href=<?php echo HOME_URL . 'aPropos'; ?>> A propos</a>
                <a href=<?php echo HOME_URL . 'contact'; ?>> Contact</a>
            </nav>
        </div>
    </div>
</header>