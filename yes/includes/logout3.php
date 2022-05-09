<?php session_start();?>

<?php

    $_SESSION['naam'] = null;
    $_SESSION['wachtwoord'] = null;

    header("Location: ../index.php");

?>