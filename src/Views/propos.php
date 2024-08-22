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
            <h3 class="titreEvent">Your Event, Our Passion</h3>
            <p>Adipiscing nam neque hendrerit nec pellentesque diam a. Varius quisque odio mauris lectus consequat sed. Pretium purus feugiat volutpat pellentesque.
                Potenti porta mauris nec vulputate. </p>
            <img src="assets/imgs/signature.jpg" alt="signature patron">
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