<?php include "includes/header.php"; ?>
<!-- Navigation -->
<?php  include "includes/navigation.php"; ?>

<div class="container" id="test">
  <div class="row">
    <div class="col">
     </div>
        <div class="col-6">
            <h1 class="text-center">Inloggen klant</h1>
            <form action="includes/loginklant.php" method="post">

            <div class="form-group">
            <label for="naam">Gebruikersnaam</label>
            <input type="text" name="naam" class="form-control" placeholder="gebruikersnaam">
            </div>

            <div class="form-group">
            <label for="password">Wachtwoord</label>
            <input type="password" name="wachtwoord" class="form-control" placeholder="wachtwoord">
            </div>

            <div class="form-group">
            <input type="submit" name="logink" id="btn-login" class="btn btn-primary  btn-lg btn-block" value="Login">
            <a class="btn btn-primary  btn-lg btn-block" href="registration.php">Nog geen account?</a>
            </div>
            </form>
      </div>
    <div class="col-sm">
  </div>
</div>
<!-- footer -->
<?php include "includes/footer.php"; ?>