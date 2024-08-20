<?php
include_once __DIR__ . '/Includes/header.php';
?>
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
        <div class="primary-title-back-stroke">- L'ETOILE DOREE -</div>
        <div class="big-reservation-title">Book a Table</div>
        <p id="bottom-illustration-text">
            Aliquet egestas gravida orci nulla lacus suspendisse. Vel ullamcorper ultrices volutpat enim dignissim id purus. Urna quam massa urna dolor enim dui lectus id.
            Tristique dignissim pharetra feugiat mattis non. Vivamus libero feugiat odio eget potenti.
        </p>
        <div id="reservation-button">Book</div>
    </section>
    <section>
        <h2 id="reviews-title">What our clients say about us</h2>
        <div class="carousel">
            <script src="assets/js/carousel.js"></script>
            <div class="carousel-pictures">
                <div class="carousel-picture" data-index="0">
                    <img src="assets/imgs/Clients/Client1.png" alt="" width="80px">
                </div>
                <div class="carousel-picture" data-index="1">
                    <img src="assets/imgs/Clients/Client2.png" alt="" width="80px">
                </div>
                <div class="carousel-main-picture" data-index="2">
                    <img src="assets/imgs/Clients/Client3.png" alt="" width="80px">
                </div>
                <div class="carousel-picture" data-index="3">
                    <img src="assets/imgs/Clients/Client4.png" alt="" width="80px">
                </div>
                <div class="carousel-picture" data-index="4">
                    <img src="assets/imgs/Clients/Client5.png" alt="" width="80px">
                </div>
            </div>
            <div class="carousel-review">
                <p class="carousel-review-text" data-index="0">"Excellent service, highly recommended!"</p>
                <p class="carousel-review-author" data-index="0">Predator</p>
                <p class="carousel-review-subtitle" data-index="0">Guest</p>

                <p class="carousel-review-text" data-index="1" style="display: none;">"Very satisfied with the quality!"</p>
                <p class="carousel-review-author" data-index="1" style="display: none;">Stellar Dogg</p>
                <p class="carousel-review-subtitle" data-index="1" style="display: none;">Guest</p>

                <p class="carousel-review-text" data-index="2" style="display: none;">"An amazing experience from start to finish."</p>
                <p class="carousel-review-author" data-index="2" style="display: none;">Alexa Johnson</p>
                <p class="carousel-review-subtitle" data-index="2" style="display: none;">Guest</p>

                <p class="carousel-review-text" data-index="3" style="display: none;">"Would definitely use this service again."</p>
                <p class="carousel-review-author" data-index="3" style="display: none;">Michael Brown</p>
                <p class="carousel-review-subtitle" data-index="3" style="display: none;">Guest</p>

                <p class="carousel-review-text" data-index="4" style="display: none;">"Professional and reliable service."</p>
                <p class="carousel-review-author" data-index="4" style="display: none;">X-22-7Z20</p>
                <p class="carousel-review-subtitle" data-index="4" style="display: none;">Guest</p>
            </div>
            <div class="carousel-dots">
                <span class="carousel-dot active" data-index="0"></span>
                <span class="carousel-dot" data-index="1"></span>
                <span class="carousel-dot" data-index="2"></span>
                <span class="carousel-dot" data-index="3"></span>
                <span class="carousel-dot" data-index="4"></span>
            </div>
        </div>
    </section>
</main>