<?php include "includes/admin_header.php"; ?>
<?php include "includes/admin_navigation.php"; ?>

<div class="container">
    <h1 class="page-header">
        users  
        </h1>

                        <div class="col-xs-6">
                            <!-- Add user -->
                            <?php test(); ?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title">User toevoegen</label>
                                    <input type="text" class="form-control" name="username">
                                    <label for="cat-title">Password</label>
                                    <input type="password" class="form-control" name="password" value="wxctwrd">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="test" value="Toevoegen ">
                                </div>
                            </form>
                            
                            <!-- Update & include -->
                            <?php 
                             
                            if(isset($_GET['edit'])) {

                                $cat_id = $_GET['edit'];

                                include "includes/testen.php"; 

                            }
                            
                            ?>

                            <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Naam</th>
                                    <th>Wachtwoord</th>
                                    <th>verwijderen</th>
                                    <th>Bewerken</th>

                                </tr>
                                </thead>  
                            <tbody>
                                <!-- Find all categories -->
                                <?php testen(); ?>
                                <!-- Delete categories -->
                                <?php delete_users(); ?>
                            </tbody
                            
<!-- footer -->
