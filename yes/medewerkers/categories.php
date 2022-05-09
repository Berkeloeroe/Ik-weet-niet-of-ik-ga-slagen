<?php include "includes/admin_header.php"; ?>
<?php include "includes/admin_navigation.php"; ?>

<div class="container">
    <h1 class="page-header">
        Schepen bewerken 
        </h1>

                        <div class="col-xs-6">
                            <!-- Add categories -->
                            <?php insert_categories(); ?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title">Schip toevoegen</label>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Toevoegen ">
                                </div>
                            </form>
                            
                            <!-- Update & include -->
                            <?php 
                             
                            if(isset($_GET['edit'])) {

                                $cat_id = $_GET['edit'];

                                include "includes/update_categories.php"; 

                            }
                            
                            ?>

                            <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Schepen</th>
                                    <th>Verwijderen</th>
                                    <th>Bewerken</th>
                                </tr>
                                </thead>  
                            <tbody>
                                <!-- Find all categories -->
                                <?php findAllCategories(); ?>
                                <!-- Delete categories -->
                                <?php delete_categories(); ?>
                            </tbody
                            
<!-- footer -->
<?php include "includes/admin_footer.php" ?>