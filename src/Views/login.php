<?php 
//  echo password_verify("admin", "$2y$10$QdO5JWhZIyJqzht8qNbrj.zNzCxluu4z.d4FrxZlYp/v0Bpce0L1C");
    
include_once __DIR__ . '/Includes/header.php';
?>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4" id="login-form">
        <form action="<?php echo HOME_URL . 'traitementLogin'; ?>" method="POST">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom d’utilisateur</label>
            <input name="username" type="username" class="form-control" id="input-email-admin" placeholder="name@example.com">
            </div>
            <label for="inputPassword5" class="form-label">Mot de passe</label>
            <input name="password" type="password" id="input-password-admin" class="form-control" aria-describedby="passwordHelpBlock">
            <button type="submit" class="btn" id="button-connect-admin">Connexion</button>
        </form>
    </div>
</div>

<?php 
include_once __DIR__ . '/Includes/footer.php'; 
?>