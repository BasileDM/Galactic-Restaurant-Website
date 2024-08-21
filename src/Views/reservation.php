<?php include_once __DIR__ . '/Includes/header.php'; ?>

<div class="reservation-form-contact-container">
  <form action="#" method="post">
    <span class="yellow-text ntr-title">Réservation</span>
    <h2 class="ntr-title">Réserver une table</h2>
    <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email">
      <label for="date">Date</label>
      <input type="date" class="form-control" id="date" name="date">
      <label for="time">Heure</label>
      <input type="time" class="form-control" id="time" name="time">
      <label for="number">Nombre de convives</label>
      <input type="number" class="form-control" id="number" name="number">
    </div>
    <div id="form-reservation-button-final" onclick="location.href='ProcessReservation'">Réserver</div>
  </form>
  <section>
    <span class="yellow-text ntr-title">L'Étoile dorée</span>
    <h2 class="ntr-title">La destination ultime pour une cuisine de qualité.</h2>
    <p>Aliquet egestas gravida orci nulla lacus suspendisse. Vel ullamcorper ultrices volutpat enim dignissim id purus. </p>
    <span class="yellow-text ntr-title">Téléphone</span>
    <p>+33 1 23 45 67 89</p>
    <span class="yellow-text ntr-title">Email</span>
    <p>contact@letoiledoree.com</p>
    <span class="yellow-text ntr-title">Adresse</span>
    <p>8911 Tanglewood Ave.Capitol Heights, MD 20743</p>
  </section>
</div>

<?php include_once __DIR__ . '/Includes/footer.php'; ?>