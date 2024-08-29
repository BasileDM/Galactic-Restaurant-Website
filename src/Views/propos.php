<?php
include_once __DIR__ . '/Includes/header.php';

?>

<div>
    <div class="containerProposCreativity">
        <div class="boxImagePropos centerFlex">
            <img class="tailleImageTarte" src="assets/imgs/Plats/PlatsChauds/photoCumulee.jpg" alt="photo de la tarte de plutonaux framboises cosmiques">
        </div>
        <div class="boxImagePropos boxtextPropos">
            <h2>Creativity is always on our menu</h2>
            <p>Aliquet egestas gravida orci nulla lacus suspendisse. Vel ullamcorper ultrices volutpat enim dignissim id purus. Urna quam massa urna dolor enim dui lectus id.
                Tristique dignissim pharetra feugiat mattis non. Vivamus libero feugiat odio eget potenti.</p>
        </div>
    </div>
    <div>
        <h2 class="equipe"> Notre équipe </h2>
        <div class="containerEvent">
        <div>
            <img class="tailleImageCuistots" src="assets/imgs/Equipe/Cuistots.png" alt="photo de l'équipe">
        </div>
        <div class="divEvent">
            <h3 class="titreEvent">Votre Aventure Culinaire, Notre Mission Stellaire</h3>
            <p>Dans notre cuisine, nos chefs unissent leurs talents pour concocter des mets venus de toute la galaxie. Bob le Terrien est notre maître des épices terrestres, Emma la Terrienne prépare des desserts qui vous envoient sur orbite, et Alex l’Astronaute excelle dans les grillades terrestres. Ils sont rejoints par Zorg le Zylonnien, expert en sauces célestes, Lila de la Lune, virtuose des légumes lunaires, et Glorp de Mars, spécialiste des fruits de mer martiens. Ensemble, ils forment une équipe culinaire aussi vari </p>
        </div>
    </div>
    </div>
    <div class="grandContainerCuistots">
        <?php
        foreach ($cook as $coo)
        {
        ?>
            <div class="containerCuistot">
                <img class="imageCuistot" src="assets/imgs/silhouette/Img<?= $coo['id'] ?>.jpg" alt="silhouette d'un chef cuisine">
                <div class="NomGras">
                    <?= $coo['firstName'] . ' ' . $coo['lastName'] ?>
                </div>
                <p> <?= $coo['role'] ?> </p>
                <div>
                    <a class="LienssStyle" href="<?= $coo['facebook'] ?>">
                        <img src="assets/imgs/icones/fb.jpg" alt="icone de facebook">
                    </a>
                    <a class="LienssStyle" href="<?= $coo['twitter'] ?>">
                        <img src="assets/imgs/icones/twitter.jpg" alt="icone de twitter">
                    </a>
                    <a class="LienssStyle" href="<?= $coo['insta'] ?>">
                        <img src="assets/imgs/icones/insta.jpg" alt="icone d'instagram">
                    </a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
include_once __DIR__ . '/Includes/footer.php';
?>