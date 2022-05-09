<?php include "includes/header.php"; ?>
<?php  include "includes/navigation.php"; ?>
<!-- Login form -->
<div class="container" id="test">
  <div class="row">
    <div class="col">
     </div>
        <div class="col-5">
            <h1 class="text-center">Inloggen medewerker</h1>
            <form action="includes/loginmedewerker.php" method="post">

            <div class="form-group">
            <label for="naam">Naam</label>
            <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
            <label for="password">Wachtwoord</label>
            <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
            <input type="submit" name="login" id="btn-login" class="btn btn-primary  btn-lg btn-block" value="Login">
            </div>
            </form>
      </div>
    <div class="col-sm">
  </div>
</div>
           
<?php include "includes/footer.php"; ?>