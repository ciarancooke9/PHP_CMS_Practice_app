<?php
include "includes/header.php";

?>

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
                            <?php

                            insert_categories();

                            ?>

                            <form action="" method="post"> <!-- ADD form -->
                                <div class="form-group">
                                    <label for="cat_title">Add Category</label>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>

                            <?php
                            if (isset($_GET['edit'])){
                                $cat_id = $_GET['edit'];
                                include "includes/update_categories.php";
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
               <?php

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
                        findAllCategories();

                        ?>
                        <?php

                        delete_categories();

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