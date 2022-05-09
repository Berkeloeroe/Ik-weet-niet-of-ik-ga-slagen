<?php include "db.php"; ?>

<?php session_start(); ?>

<?php

if (isset($_POST["logink"])) {

$naam = $_POST['naam'];
$wachtwoord = $_POST['wachtwoord'];

$naam = mysqli_real_escape_string($connection, $naam);
$wachtwoord = mysqli_real_escape_string($connection, $wachtwoord);

$query ="SELECT * FROM kankersukkels WHERE naam = '{$naam}' ";
$select_user_ = mysqli_query($connection, $query);

if(!$select_user_) {

  die("Query gefaald". mysqli_error($connection));

}

while($row = mysqli_fetch_array($select_user_)) {

    $db_id = $row['id'];
    $db_naam = $row['naam'];
    $db_wachtwoord = $row['wachtwoord'];

    }

    $wachtwoord = crypt($wachtwoord,$db_wachtwoord);


    if($naam === $db_naam && $wachtwoord === $db_wachtwoord) {

    $_SESSION['naam'] = $db_naam;
    $_SESSION['wachtwoord'] = $db_wachtwoord;

    header("Location: ../klanten/index.php ");

    } else {

    echo '<script type="text/javascript">window.onload = function () { alert("Incorrect gebruikersnaam of wachtwoord"); } </script>';
    
    }

}

?>