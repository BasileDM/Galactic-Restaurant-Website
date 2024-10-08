<?php
include_once __DIR__ . '/Includes/header.php';
?>

<script src="./assets/js/seatsAvailability.js"></script>
<?php if (isset($success))
{
  echo '<p style="color:green; text-align:center; font-weight:bold; margin-top:25px">' . $success . '</p>';
} ?>
<div class="reservation-form-contact-container">
  <form action="<?php echo HOME_URL; ?>reservation" method="post">
    <span class="yellow-text ntr-title">Réservation</span>
    <h2 class="ntr-title">Réserver une table</h2>
    <div class="form-group">
      <label for="nom">Nom*</label>
      <input type="text" id="nom" name="nom" value="<?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : ''; ?>">

      <label for="email">Email*</label>
      <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">

      <label for="date">Date*</label>
      <input type="date" id="date" name="date" value="<?php echo isset($_POST['date']) ? htmlspecialchars($_POST['date']) : date('Y-m-d'); ?>">

      <label for="time">Heure*</label>
      <input type="time" id="time" name="time" value="<?php echo isset($_POST['time']) ? htmlspecialchars($_POST['time']) : ''; ?>">

      <label for="number">Nombre de convives*</label>
      <div>
        <span id="available-seats"></span>
      </div>
      <input type="number" id="number" name="number" value="<?php echo isset($_POST['number']) ? htmlspecialchars($_POST['number']) : ''; ?>">

      <div id="terms-conds">
        <label for="checkbox">I agree</label>
        <input type="checkbox" id="checkbox-RGPD" name="terms-conds" />
      </div>

      <a href=<?php echo HOME_URL . "RGPD"; ?>>Terms and conditions</a>

    </div>

    <button type="submit" id="form-reservation-button-final" disabled>Réserver</button>

    <?php if (isset($error)) : ?>
      <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

  </form>
  <section class="contact-container">
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