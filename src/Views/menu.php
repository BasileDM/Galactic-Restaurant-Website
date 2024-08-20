<?php
include_once __DIR__ . '/Includes/header.php';
?>

<main>
    <div class="ContainerGlobal">
        <div class="containerMenu">
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
                        <div> <?= $entree['description'] ?></div>
                        <div class="priceMenu"> <?= $entree['price'] ?> $</div>
                    </div>
                    <?php if ($i < 3)
                    {
                        echo "<div class='ligneBlanche'></div>";
                    } ?>
                </div>

            <?php } ?>
            <div class="centerFlex">
                <img class="imagePlatBulle" src="assets/imgs/Plats/Entrees/SaladedeComètesetÉtoiles.png" alt="photo de la salade comètes et étoiles">
            </div>
        </div>

        <div class="containerMenu">
            <h3>PLATS</h3>
            <div class="ligneJaune"></div>
            <?php
            $i = 0;
            foreach ($plats as $plat)
            {
                $i++; ?>
                <div>
                    <h4 class="josefin letterSpace"> <?= $plat['title'] ?></h4>
                    <div class="flexRow signika">
                        <div> <?= $plat['description'] ?></div>
                        <div class="priceMenu"> <?= $plat['price'] ?> $</div>
                    </div>
                    <?php if ($i < 3)
                    {
                        echo "<div class='ligneBlanche'></div>";
                    } ?>
                </div>

            <?php } ?>
            <div class="centerFlex">
                <img class="imagePlatBulle" src="assets/imgs/Plats/PlatsChauds/FiletdExoplanèteauxÉclatsdeSupernova.png" alt="photo de la salade comètes et étoiles">
            </div>
        </div>

        <div class="containerMenu">
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
                        <div> <?= $dessert['description'] ?></div>
                        <div class="priceMenu"> <?= $dessert['price'] ?> $</div>
                    </div>
                    <?php if ($i < 3)
                    {
                        echo "<div class='ligneBlanche'></div>";
                    } ?>
                </div>

            <?php } ?>
            <div class="centerFlex">
                <img class="imagePlatBulle" src="assets/imgs/Plats/Desserts/GelatoNebulaireàlaVanilledOrion.png" alt="photo de la salade comètes et étoiles">
            </div>
        </div>


      
    </div>
</main>