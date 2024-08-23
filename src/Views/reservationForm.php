<?php
include_once __DIR__ . '/Includes/header.php';
?>

<script src="./assets/js/seatsAvailability.js"></script>
<div class="reservation-form-contact-container">
  <?php if (isset($success))
  {
    echo '<p style="color:green; text-align:center; font-weight:bold">' . $success . '</p>';
  } ?>
  <form action="<?php echo HOME_URL; ?>reservation" method="post">
    <span class="yellow-text ntr-title">Réservation</span>
    <h2 class="ntr-title">Réserver une table</h2>
    <div class="form-group">
      <label for="nom">Nom*</label>
      <input type="text" id="nom" name="nom" value="<?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : ''; ?>">

      <label for="email">Email*</label>
      <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">

      <label for="date">Date*</label>
      <input type="date" id="date" name="date" value="<?php echo isset($_POST['date']) ? htmlspecialchars($_POST['date']) : ''; ?>">

      <label for="time">Heure*</label>
      <input type="time" id="time" name="time" value="<?php echo isset($_POST['time']) ? htmlspecialchars($_POST['time']) : ''; ?>">

      <label for="number">Nombre de convives*</label>
      <div><span id="available-seats"></span></div>
      <input type="number" id="number" name="number" value="<?php echo isset($_POST['number']) ? htmlspecialchars($_POST['number']) : ''; ?>">
    </div>
    <button type="submit" id="form-reservation-button-final" disabled>Réserver</button>

    <?php if (isset($error)) : ?>
      <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

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