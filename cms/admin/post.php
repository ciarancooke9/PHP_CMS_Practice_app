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
                        Welcome to Admin
                        <small>Author</small>
                    </h1>
                    <?php


                    if (isset($_GET['source'])){
                        $source = $_GET['source'];

                    } else {
                        $source = '';
                    }
                    switch ($source) {
                        case 'add_post';
                        include "includes/add_post.php";
                        break;

                        case '100';
                        echo "nice 100";
                        break;

                        case '40';
                        echo "nice 40";
                        break;

                        default:
                            include "includes/view_all_posts.php";
                            break;
                    }



                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /#page-wrapper -->

<?php include "includes/footer.php"; ?>