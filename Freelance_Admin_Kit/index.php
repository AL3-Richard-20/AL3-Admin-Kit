<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta name="author" content="Richard del Altre">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>AL3 | Admin Template</title>

        <link rel="stylesheet" href="assets/icons/themify-icons/themify-icons.css">

        <link rel="stylesheet" href="assets/css/bootstrap4/bootstrap.min.css">

        <link rel="stylesheet" href="assets/css/index.css">

        <link rel="stylesheet" href="assets/css/dark-mode.css">

    </head>

    <body class="bg-white text-dark">
        
        <!-- ============================ Sidebar ============================ -->

            <?php include "includes/topbar.php"; ?>

            <?php include "includes/sidebar.php"; ?>

        <!-- ========================== Sidebar END ========================== -->

        <br><br>

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h5 class="header-title">Dashboard</h5>
                    </div>
                </div>
            </div>
            
            <hr>

            <div class="row">

                <div class="col-lg-3">
                    <div class="card bg-info" style="color: white;">
                        <div class="card-body text-center">
                            <h2><b>0</b></h2>
                            <p>Total User/s</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card bg-success" style="color: white">
                        <div class="card-body text-center">
                            <h2><b>0</b></h2>
                            <p>Total User/s</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card bg-danger" style="color: white">
                        <div class="card-body text-center">
                            <h2><b>0</b></h2>
                            <p>Total User/s</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card bg-secondary" style="color: white">
                        <div class="card-body text-center">
                            <h2><b>0</b></h2>
                            <p>Total User/s</p>
                        </div>
                    </div>
                </div>

            </div>
            
            <hr>

            <div class="row">

                <div class="col-lg-6">

                    <div class="card bg-white text-dark">

                        <div class="card-header bg-white text-dark">
                            <h6 class="header-title">Card_1</h6>
                        </div>

                        <div class="card-body">

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card bg-white text-dark">

                        <div class="card-header bg-white text-dark">
                            <h6 class="header-title">Card_2</h6>
                        </div>

                        <div class="card-body">

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <script src="assets/js/jquery.min.js"></script>

        <!-- <script src="assets/js/bootstrap.min.js"></script> -->

        <script src="assets/css/bootstrap4/bootstrap.min.js"></script>

        <script src="assets/js/sweetalert.min.js"></script>

        <script src="assets/js/dark_mode.js"></script>

        <script src="scripts/functions.js"></script>

    </body>

</html>