<!-- d-none d-sm-block -->

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta name="author" content="Richard del Altre">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>AL3 | System Settings</title>

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

            <div class="card bg-white text-dark">

                <div class="card-header bg-white text-dark">
                    
                    <div class="row">
						
						<div class="col d-none d-md-block">
							<button type="button" class="btn btn-outline-dark" onclick="location.href='index.php';"><span class="ti-arrow-left"></span></button>
						</div>

						<div class="col-lg-6 text-center">
							<h5 class="header-title">System Settings</h5>
						</div>

						<div class="col-lg"></div>

					</div>

                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-4">

                            <div class="card bg-white text-dark d-flex">

                                <div class="card-body d-flex align-items-center">

                                    <div class="sett-icon" style="margin: 15px;">
                                        <span class="ti-user" style="font-size: 35px;"></span>
                                    </div>

                                    <div class="sett-info" style="width: 100%;">
                                        <h6><b>User Account</b></h6>
                                        <p style="font-size: 15px;">Change username, password</p>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4" onclick="location.href='personalization.php';">

                            <div class="card bg-white text-dark d-flex">

                                <div class="card-body d-flex align-items-center">

                                    <div class="sett-icon" style="margin: 15px;">
                                        <span class="ti-desktop" style="font-size: 35px;"></span>
                                    </div>

                                    <div class="sett-info" style="width: 100%;">
                                        <h6><b>Personalization</b></h6>
                                        <p style="font-size: 15px;">Dark mode, accent color</p>
                                    </div>

                                </div>

                            </div>

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