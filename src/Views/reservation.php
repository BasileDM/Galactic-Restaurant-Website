<?php include_once __DIR__ . '/Includes/header.php'; ?>

<section class="reservation-form-container">
  <form action="" method="post">
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
      <input type="number" class="form-control" id="number" name="number"></label>
    </div>
    <div id="form-reservation-button-final" onclick="location.href='ProcessReservation'">Réserver</div>
  </form>
</section>

<?php include_once __DIR__ . '/Includes/footer.php'; ?>