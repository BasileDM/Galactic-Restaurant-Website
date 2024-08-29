<!DOCTYPE html>
<html lang="en">

<?php
$current_page = basename($_SERVER['REQUEST_URI'], ".php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Étoile Dorée</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="module" defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script defer src="./assets/js/script.js"></script>
    <?php
    if (isset($_SESSION['connecte']) && $_SESSION['connecte'])
    { ?>
        <link rel="stylesheet" href="assets/css/admin.css">
    <?php }
    ?>

</head>
<script>
    const HOME_URL = "<?= HOME_URL ?>";
</script>
<script defer src="assets/js/script.js"></script>

<body>
    <header>
        <div class="backgroundHeader">
            <div class="containerImage">
                <img class="LogoHeader" src="assets/imgs/Logo.png" alt="logo du restaurant galactic">
            </div>
            <div>
                <h1 class="titrePrincipal"> L'etoile Doree </h1>
                <nav class="backgroundNav">
                    <a class="navLink <?php echo $current_page == '' ? 'active' : ''; ?>" href=<?php echo HOME_URL; ?>>Accueil</a>
                    <a class="navLink <?php echo $current_page == 'menu' ? 'active' : ''; ?>" href=<?php echo HOME_URL . 'menu'; ?>> Menu</a>
                    <a class="navLink <?php echo $current_page == 'reservation' ? 'active' : ''; ?>" href=<?php echo HOME_URL . 'reservation'; ?>> Réserver</a>
                    <a class="navLink <?php echo $current_page == 'aPropos' ? 'active' : ''; ?>" href=<?php echo HOME_URL . 'aPropos'; ?>>À propos</a>
                    <?php if (isset($_SESSION['connecte']) && $_SESSION['connecte'])
                    {

                    ?>
                        <a class="navLink <?php echo $current_page == 'admin' ? 'active' : ''; ?>" href=<?php echo HOME_URL . 'admin'; ?>>Admin</a>
                    <?php }
                    else
                    { ?> <a id="contact" class="navLink <?php echo $current_page == 'contact' ? 'active' : ''; ?>"> Contact</a><?php } ?>
                    <a class="navLink" id="deconnexion-btn" href=<?php echo HOME_URL . 'logout'; ?>>Déconnexion</a>
                </nav>
            </div>
        </div>
    </header>


    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.getElementById('deconnexion-btn').style.display = 'none';

            <?php if (isset($_SESSION['connecte']) && $_SESSION['connecte'] === true): ?>
                document.getElementById('deconnexion-btn').style.display = 'inline-block'
            <?php endif; ?>
        });

        document.getElementById('deconnexion-btn').style.display = 'none';
    </script>
</body>

</html>