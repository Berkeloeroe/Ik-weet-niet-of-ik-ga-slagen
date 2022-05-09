<?php

// Insert categories
function insert_categories() {

    global $connection;

    if(isset($_POST['submit'])) {

        $cat_title = $_POST['cat_title'];

        if($cat_title == "" || empty($cat_title)) {

        echo "This field should be not be empty";

        } else {

        $query = "INSERT INTO categories(cat_title) ";
        $query .= "VALUE('{$cat_title}') ";
                                
        $create_category_query = mysqli_query($connection, $query);

        if(!$create_category_query) {

            die('Query Gefaald ' . mysqli_error($connection));

            }
        }
    }
}

// Delete categories
function delete_categories() {

    global $connection;

    if(isset($_GET['delete'])) {

    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
    $delete_query = mysqli_query($connection,$query);

    header("Location: categories.php");

    }
}

// Find all categories
function findAllCategories() {

    global $connection;

    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_categories)) {

    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
                            
    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a href='categories.php?delete={$cat_id}'>Verwijder</a></td>";
    echo "<td><a href='categories.php?edit={$cat_id}'>Bewerk</a></td>";
    echo "</tr>";
                        
    }
}

// Delete users
function delete_users() {

    global $connection;

    if(isset($_GET['delete'])) {

    $user_id = $_GET['delete'];
    $query = "DELETE FROM users WHERE user_id = {$user_id} ";
    $delete_query = mysqli_query($connection,$query);

    header("Location: users.php");

    }
}

// Insert users
function test() {

    global $connection;

    if(isset($_POST['test'])) {

     $username = $_POST['username'];
     $password = $_POST['password'];

     $username = mysqli_real_escape_string($connection, $username);
     $password = mysqli_real_escape_string($connection, $password);

     $query =  "INSERT INTO users(username,password)";
     $query .= "VALUES ('$username', '$password')";

     $result = mysqli_query($connection, $query);

     if(!$result) {

        die('Query Gefaald' . mysqli_error());

        } else {

        echo '<script type="text/javascript">window.onload = function () { alert("Medewerker toegevoegd"); } </script>';

    }

 }
}

// contact
function contact() {
    
    global $connection;
    
    if(isset($_POST['verzend'])) {

     $naam = $_POST['naam'];
     $email = $_POST['email'];
     $telefoon = $_POST['telefoon'];
     $bericht = $_POST['bericht'];

     $naam = mysqli_real_escape_string($connection, $naam);
     $email = mysqli_real_escape_string($connection, $email);
     $telefoon = mysqli_real_escape_string($connection, $telefoon);
     $bericht = mysqli_real_escape_string($connection, $bericht);

     $query =  "INSERT INTO contact(naam,email,telefoon,bericht)";
     $query .= "VALUES ('$naam', '$email', '$telefoon', '$bericht')";

     $result = mysqli_query($connection, $query);

     if(!$result) {

        die('Query Gefaald' . mysqli_error());

        } else {

        echo '<script type="text/javascript">window.onload = function () { alert("Succesvol verzonden"); } </script>';

    }

 }
}



// Find all users
function testen() {

    global $connection;

    $query = "SELECT * FROM users";
    $select_categories = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_categories)) {

    $user_id = $row['user_id'];
    $username = $row['username'];
    $password = $row['password'];
                            
    echo "<tr>";
    echo "<td>{$user_id}</td>";
    echo "<td>{$username}</td>";
    echo "<td>{$password}</td>";
    echo "<td><a href='users.php?delete={$user_id}'>Verwijder</a></td>";
    echo "<td><a href='users.php?edit={$user_id}'>Bewerk</a></td>";
    echo "</tr>";
                        
    }
}





// Show error if query doesn't work
function confirmQuery($result) {

    global $connection;

    if(!$result) {

        die("Query gefaald ." . mysqli_error($connection));
    }

}

?>