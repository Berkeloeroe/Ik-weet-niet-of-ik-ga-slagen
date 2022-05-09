<?php include "includes/admin_header.php"; ?>
<?php include "includes/admin_navigation.php"; ?>

<!-- Show gegevens in input -->
<?php

    if(isset($_SESSION['username'])) {

        $username = $_SESSION['username'];

        $query = "SELECT * FROM users WHERE username = '{$username}' ";

        $select_user_profile_query = mysqli_query($connection, $query);

        while($row = mysqli_fetch_array($select_user_profile_query)) {

        $user_id = $row['user_id'];
        $username = $row['username'];
        $password = $row['password'];
        $email = $row['email'];
        $beforename = $row['beforename'];
        $behindname = $row['behindname'];

    }

    }

?>

<?php

    if(isset($_POST["edit_user"])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $beforename = $_POST['beforename'];
        $behindname = $_POST['behindname'];
        
        $query = "UPDATE users SET ";
        $query .="username = '{$username}', ";
        $query .="password = '{$password}', ";
        $query .="email = '{$email}', ";
        $query .="beforename = '{$beforename}', ";
        $query .="behindname = '{$behindname}' ";
        $query .= "WHERE username = '{$username}' ";

        $edit_user_query = mysqli_query($connection,$query);

        confirmQuery($edit_user_query);

    }
    
?>

    

                        <div class="container">

                        <h1 class="page-header">
                            Gegevens
                            <small> <?php echo $_SESSION['username'] ?> </small>
                        </h1>

                        <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Wachtwoord</label>
                            <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
                        </div>
                        <div class="form-group">
                            <label for="beforename">Voornaam</label>
                            <input type="text" class="form-control" name="beforename" value="<?php echo $beforename; ?>">
                        </div>
                        <div class="form-group">
                            <label for="behindname">Achternaam</label>
                            <input type="text" class="form-control" name="behindname" value="<?php echo $behindname; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                        </div>
                        <input class="btn btn-primary" type="submit" name="edit_user" value="Update">
                        </form>
        
<?php include "includes/admin_footer.php"; ?>