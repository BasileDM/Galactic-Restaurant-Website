<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galactic Restaurant</title>
    <link rel="stylesheet" href="assets/css/global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="module" defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        const HOME_URL = "<?= HOME_URL ?>";
    </script>
</head>

<header>
    <div class="backgroundHeader">
        <div class="containerImage">
            <img class="LogoHeader" src="assets/imgs/Logo.png" alt="logo du restaurant galactic">
        </div>
        <div>
            <h1 class="titrePrincipal"> L'etoile Doree </h1>
            <nav class="backgroundNav">
                <a class="navLink" href=<?php echo HOME_URL; ?>>Accueil</a>
                <a class="navLink" href=<?php echo HOME_URL . 'menu'; ?>> Menu</a>
                <a class="navLink" href=<?php echo HOME_URL . 'reservation'; ?>> Réserver</a>
                <a class="navLink" href=<?php echo HOME_URL . 'aPropos'; ?>> A propos</a>
                <a class="navLink" href=<?php echo HOME_URL . 'contact'; ?>> Contact</a>
            </nav>
        </div>
    </div>
</header>