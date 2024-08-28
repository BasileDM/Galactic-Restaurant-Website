<?php include_once __DIR__ . '/Includes/header.php'; ?>
<main>
    <section>
        <h2 class="hero-flavor-text"> À L'Étoile Dorée, faites une pause interstellaire et dégustez une cuisine qui transcende les galaxies. </h2>
        <div class="home-separator">
    </section>
    <section class="illustration-section">
        <img class="illustration" src="assets/imgs/Plats/Entrees/TartaredeSphèresdeNeptune.png" alt="spheres-dish-illustration">
        <p>"À L'Étoile Dorée, nous transformons chaque repas en une aventure spatiale captivante, mêlant l'art culinaire aux merveilles de l'univers pour une expérience gastronomique aussi infinie que les étoiles."</p>
    </section>
    <section class="illustration-section">
        <img class="illustration" src="assets/imgs/Equipe/ChefPoulpe.png" alt="spheres-dish-illustration">
        <p>
            "Rencontrez le chef Poulpe : un expert en gastronomie spatiale dont les tentacules agiles sont aussi talentueux pour mélanger les saveurs que pour attraper les étoiles filantes.<br><br>
            À L'Étoile Dorée, il prépare des plats qui font voyager vos papilles tout en restant gravitationnellement délicieux !"
        </p>
        <section class="illustration-section-booking">
            <div class="primary-title-back-stroke">- L'ETOILE DOREE -</div>
            <div class="big-reservation-title">Réserver une table</div>
            <p id="bottom-illustration-text">
                Aliquet egestas gravida orci nulla lacus suspendisse. Vel ullamcorper ultrices volutpat enim dignissim id purus. Urna quam massa urna dolor enim dui lectus id.
                Tristique dignissim pharetra feugiat mattis non. Vivamus libero feugiat odio eget potenti.
            </p>
            <div id="reservation-button" onclick="location.href='reservation'">Réserver</div>
        </section>
    </section>
    <section>
        <h2 id="reviews-title">Ce qu'en pensent nos clients</h2>
        <div class="carousel">
            <script src="./assets/js/carousel.js" type="module"></script>
            <div class="carousel-pictures"></div>
            <div class="carousel-review"></div>
            <div class="carousel-dots"></div>
        </div>
    </section>
</main>

<?php include_once __DIR__ . '/Includes/footer.php'; ?>