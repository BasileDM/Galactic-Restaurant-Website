<?php
include_once __DIR__ . '/Includes/header.php';
?>

<main>
    <div class="ContainerGlobal">
        <div class="containerMenu">
            <div class="tailleContainerMenu">
                <h3>ENTREES</h3>
                <div class="ligneJaune"></div>
                <?php
                $i = 0;
                foreach ($entrees as $entree)
                {
                    $i++; ?>
                    <div>
                        <h4 class="josefin letterSpace"> <?= $entree['title'] ?></h4>
                        <div class="flexRow signika">
                            <div class="w-desc"> <?= $entree['description'] ?></div>
                            <div class="priceMenu"> <?= $entree['price'] ?> $</div>
                        </div>
                        <?php if ($i < 3)
                        {
                            echo "<div class='ligneBlanche'></div>";
                        } ?>
                    </div>

                <?php } ?>
            </div>
            <div class="centerFlex tailleContainerMenu">
                <img class="imagePlatBulle" src="assets/imgs/Plats/Entrees/SaladedeComètesetÉtoiles.png" alt="photo de la salade comètes et étoiles">
            </div>
        </div>

        <div class="containerMenu inverse">
            <div class="tailleContainerMenu">
                <h3>PLATS PRINCIPAUX</h3>
                <div class="ligneJaune"></div>
                <?php
                $i = 0;
                foreach ($plats as $plat)
                {
                    $i++; ?>
                    <div>
                        <h4 class="josefin letterSpace"> <?= $plat['title'] ?></h4>
                        <div class="flexRow signika">
                            <div class="w-desc"> <?= $plat['description'] ?></div>
                            <div class="priceMenu"> <?= $plat['price'] ?> $</div>
                        </div>
                        <?php if ($i < 3)
                        {
                            echo "<div class='ligneBlanche'></div>";
                        } ?>
                    </div>

                <?php } ?> 
             </div>
                <div class="centerFlex tailleContainerMenu">
                    <img class="imagePlatBulle" src="assets/imgs/Plats/PlatsChauds/FiletdExoplanèteauxÉclatsdeSupernova.png" alt="photo de la salade comètes et étoiles">
                </div>
          
        </div>

        <div class="containerMenu">
            <div class="tailleContainerMenu">
            <h3>DESSERTS</h3>
            <div class="ligneJaune"></div>
            <?php
            $i = 0;
            foreach ($desserts as $dessert)
            {
                $i++; ?>
                <div>
                    <h4 class="josefin letterSpace"> <?= $dessert['title'] ?></h4>
                    <div class="flexRow signika">
                        <div class="w-desc"> <?= $dessert['description'] ?></div>
                        <div class="priceMenu"> <?= $dessert['price'] ?> $</div>
                    </div>
                    <?php if ($i < 3)
                    {
                        echo "<div class='ligneBlanche'></div>";
                    } ?>
                </div>

            <?php } ?>
        </div>
            <div class="centerFlex tailleContainerMenu">
                <img class="imagePlatBulle" src="assets/imgs/Plats/Desserts/GelatoNebulaireàlaVanilledOrion.png" alt="photo de la salade comètes et étoiles">
            </div>
        </div>

        <div class="centerFlex">
            <p class="vietnam boxMenu">PARCE QUE TOUS NOS CLIENTS SONT IMPORTANTS POUR NOUS, NOUS VOUS PROPOSONS DES REPAS
                SPECIFIQUES POUR NOTRE CLIENTELE ROBOTIQUE
            </p>
        </div>



        <div class="containerMenu inverse">
            <div class="tailleContainerMenu">
                <h3>MENU ROBOTIQUE</h3>
                <div class="ligneJaune"></div>

                <!-- Afficher une entrée -->
                <?php
                if (!empty($entreesRobot))
                {
                    $entree = $entreesRobot[0];
                ?>
                    <div>
                        <h4 class="josefin letterSpace"> <?= $entree['title'] ?></h4>
                        <div class="flexRow signika">
                            <div class="w-desc"> <?= $entree['description'] ?></div>
                            <div class="priceMenu"> <?= $entree['price'] ?> $</div>
                        </div>
                        <div class='ligneBlanche'></div>
                    </div>
                <?php } ?>

                <!-- Afficher un plat -->
                <?php
                if (!empty($platsRobot))
                {
                    $plat = $platsRobot[0];
                ?>
                    <div>
                        <h4 class="josefin letterSpace"> <?= $plat['title'] ?></h4>
                        <div class="flexRow signika">
                            <div class="w-desc"> <?= $plat['description'] ?></div>
                            <div class="priceMenu"> <?= $plat['price'] ?> $</div>
                        </div>
                        <div class='ligneBlanche'></div>
                    </div>
                <?php } ?>

                <!-- Afficher un dessert -->
                <?php
                if (!empty($dessertsRobot))
                {
                    $dessert = $dessertsRobot[0];
                ?>
                    <div>
                        <h4 class="josefin letterSpace"> <?= $dessert['title'] ?></h4>
                        <div class="flexRow signika">
                            <div class="w-desc"> <?= $dessert['description'] ?></div>
                            <div class="priceMenu"> <?= $dessert['price'] ?> $</div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="centerFlex tailleContainerMenu">
                <img class="imagePlatBulle" src="assets/imgs/Plats/PlatsChauds/MorceauxdeMécanochromeenFusion.png" alt="photo de la salade comètes et étoiles">
            </div>
        </div>


    </div>
</main>

<?php
include_once __DIR__ . '/Includes/footer.php';
?>