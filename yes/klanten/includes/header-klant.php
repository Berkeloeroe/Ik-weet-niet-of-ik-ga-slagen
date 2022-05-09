<?php include "../includes/db.php"; ?>
<?php include "../medewerkers/includes/functions.php"; ?>
<?php ob_start(); ?>
<?php session_start();?>

<?php

if(!isset($_SESSION['naam'])) {

        header("Location: ../index.php");
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Boten website</title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="../css/styles.css" rel="stylesheet">
    <!-- Website Icon -->
    <link rel="icon" type="image/x-icon" href="../media/ph.png"/>
</head>
<body>