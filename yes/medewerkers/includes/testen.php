                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title">Naam bewerken</label>
                                    
                            <!-- Select categories -->
                            <?php

                            if(isset($_GET['edit'])) {

                            $user_id = $_GET['edit'];

                            $query = "SELECT * FROM users WHERE user_id = $user_id ";
                            $select_categories_id = mysqli_query($connection,$query);

                            while($row = mysqli_fetch_assoc($select_categories_id)) {

                            $user_id = $row['user_id'];
                            $username = $row['username'];

                            }

                            ?>
                            <!-- Show inputfield after pressing edit -->
                            <input value="<?php if(isset($username)){echo $username;} ?>" type="text" class="form-control" name="username" class="form-control">

                            <?php } ?>

                            <!-- Update categories -->
                            <?php 

                            if(isset($_POST['update_category'])) {

                            $username = $_POST['username'];
                            $query = "UPDATE users SET username = '{$username}' WHERE user_id = {$user_id} ";
                            $update_query = mysqli_query($connection,$query);

                            }

                            ?>

                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="update_category" value="Bewerk">
                            </form>