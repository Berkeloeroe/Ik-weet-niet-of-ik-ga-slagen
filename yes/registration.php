<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>
<!-- Navigation -->
<?php  include "includes/navigation.php"; ?>

<?php

 if(isset($_POST['submit'])) {

     $naam = $_POST['naam'];
     $email = $_POST['email'];
     $wachtwoord = $_POST['wachtwoord'];

     $naam = mysqli_real_escape_string($connection, $naam);
     $email = mysqli_real_escape_string($connection, $email);
     $wachtwoord = mysqli_real_escape_string($connection, $wachtwoord);

    //  $hashFormat ="$2y$10$";
    //  $salt ="eensteenisnetzozwaarals";
    //  $hashF_and_salt = $hashFormat . $salt;
    //  $password = crypt($password,$hashF_and_salt);

     $query =  "INSERT INTO kankersukkels(naam,wachtwoord,email)";
     $query .= "VALUES ('$naam', '$wachtwoord', '$email')";

     $result = mysqli_query($connection, $query);

     if(!$result) {

        die('Query Gefaald' . mysqli_error());

        } else {

        echo '<script type="text/javascript">window.onload = function () { alert("Account aangemaakt. U kunt nu inloggen"); } </script>';

    }

 }

?>

<div class="container" id="test">
  <div class="row">
    <div class="col">
     </div>
        <div class="col-6">
            <h1 class="text-center">Registreren</h1>
            <form action="registration.php" method="post">

            <div class="form-group">
            <label for="naam">Gebruikersnaam</label>
            <input type="text" name="naam" class="form-control" placeholder="gebruikersnaam">
            </div>

            <div class="form-group">
            <label for="naam">E-mail</label>
            <input type="text" name="email" class="form-control" placeholder="email@mail.com">
            </div>

            <div class="form-group">
            <label for="password">Wachtwoord</label>
            <input type="password" name="wachtwoord" class="form-control" placeholder="wachtwoord">
            </div>

            <div class="form-group">
            <input type="submit" name="submit" id="btn-login" class="btn btn-primary  btn-lg btn-block" value="Registreer">
            <a class="btn btn-primary  btn-lg btn-block" href="loginform-klant.php">Al een account?</a>
            </div>
            </form>
      </div>
    <div class="col-sm">
  </div>
</div>

<?php include "includes/footer.php";?>