<?php include "includes/header-klant.php"; ?>
<?php include "includes/navigation-klant.php"; ?>

<?php

// Show error if query doesn't work
function kut($result) {

    global $connection;

    if(!$result) {

        die("Query gefaald ." . mysqli_error($connection));
    }

}

?>

<!-- Show gegevens in input -->
<?php

    if(isset($_SESSION['naam'])) {

        $naam = $_SESSION['naam'];

        $query = "SELECT * FROM kankersukkels WHERE naam = '{$naam}' ";

        $select_user_profile_query = mysqli_query($connection, $query);

        while($row = mysqli_fetch_array($select_user_profile_query)) {

        $id = $row['id'];
        $naam = $row['naam'];
        $wachtwoord = $row['wachtwoord'];
        $email = $row['email'];
        $voornaam = $row['voornaam'];
        $achternaam = $row['achternaam'];

    }

    }

?>

<?php

if(isset($_POST["edit_user"])) {

    $naam = $_POST['naam'];
    $wachtwoord = $_POST['wachtwoord'];
    $email = $_POST['email'];
    $voornaam = $row['voornaam'];
    $achternaam = $row['achternaam'];

    $query = "UPDATE kankersukkels SET ";
    $query .="naam = '{$naam}', ";
    $query .="wachtwoord = '{$wachtwoord}', ";
    $query .="email = '{$email}', ";
    $query .="voornaam = '{$voornaam}', ";
    $query .="achternaam = '{$achternaam}' ";
    $query = "WHERE naam = '{$naam}' ";

    $edit_gegevens_query = mysqli_query($connection,$query);

    kut($edit_gegevens_query);

}

?>


<!-- form -->
<div class="container" id="test">
<form action="" method="post">
    <h1 class="page-header">
        Gegevens
        <small> <?php echo $_SESSION['naam'] ?> </small>
            </h1>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="naam" value="<?php echo $naam; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Wachtwoord</label>
                            <input type="password" class="form-control" name="wachtwoord" value="<?php echo $wachtwoord; ?>">
                        </div>
                        <div class="form-group">
                            <label for="beforename">Voornaam</label>
                            <input type="text" class="form-control" name="voornaam" value="<?php echo $voornaam; ?>">
                        </div>
                        <div class="form-group">
                            <label for="behindname">Achternaam</label>
                            <input type="text" class="form-control" name="achternaam" value="<?php echo $achternaam; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                        </div>
                        <input class="btn btn-primary" type="submit" name="edit_user" value="Update">
                        </form>

<!-- footer-->
<?php include "includes/footer-klant.php" ?>