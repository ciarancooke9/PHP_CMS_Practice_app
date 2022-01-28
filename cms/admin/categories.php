<?php include "includes/header.php"?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php"; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        <div class="col-xs-6">
                            <form action="">
                                <div class="form-group">
                                    <label for="cat-title">Add Category</label>
                                    <input type="text" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
               <?php
               $query = 'SELECT * FROM categories';
                    $select_categories = mysqli_query($connection, $query);
                    ?>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Title</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        while ($row = mysqli_fetch_assoc($select_categories)) {
                            $cat_id = $row['cat_id'];
                            $cat_title = $row['cat_title'];
                            echo "<tr>";
                            echo "<td>{$cat_id}</td>";
                            echo "<td>{$cat_title}</td>";
                            echo "</tr>";
                        }

                        ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php"; ?>