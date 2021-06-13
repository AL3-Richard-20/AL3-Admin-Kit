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
                        <h5 class="header-title">Cards</h5>
                    </div>
                </div>
            </div>
            
            <hr>

            <div class="row">

                <!-- <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row p-t-10 p-b-10">
                                <div class="col p-r-0">
                                    <h1 class="font-light">86</h1>
                                    <h6 class="text-muted">New Clients</h6></div>
                                <div class="col text-right align-self-center">
                                    <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20"><i class="ti-user"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-3">
                    <div class="card bg-primary" style="color: white;">
                        <div class="card-body text-center">
                            <h2><b>0</b></h2>
                            <p>Total User/s</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                
                    <div class="card bg-white text-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h2>56%</h2>
                                            <h6 class="card-subtitle">Selling</h6>
                                        </div>
                                        <div class="ml-auto">
                                            <span style="font-size: 25px;"><i class="ti-notepad"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" style="margin-top: 7px;">
                                    <div class="progress" style="height: 6px; ">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 70%; height: 6px; " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3">
                    <div class="card bg-white text-dark border-bottom border-info">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h2>120</h2>
                                    <h6 class="text-info">News Feed</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="text-info display-6" style="font-size: 25px;"><i class="ti-notepad"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card bg-info">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <div class="text-white">
                                    <h2>120</h2>
                                    <h6>News Feed</h6>
                                </div>
                                <div class="ml-auto">
                                    <span class="text-white display-6" style="font-size: 25px;"><i class="ti-notepad"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <hr>

            <div class="row">

                <div class="col-lg-6">
                    <div class="card bg-white text-dark">
                        <div class="d-flex flex-row align-items-center">
                            <div class="p-10 bg-info">
                                <h3 class="text-white box m-b-0" style="padding: 35px;"><i class="ti-themify-favicon-alt"></i></h3>
                            </div>
                            <div style="margin: 10px">
                                <h3 class="text-info m-b-0">$980</h3>
                                <span class="text-muted">Free Messages</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card bg-white text-dark">
                        <div class="d-flex flex-row align-items-center">
                            <div class="p-10 bg-warning">
                                <h3 class="text-white box m-b-0" style="padding: 35px;"><i class="ti-harddrives"></i></h3>
                            </div>
                            <div style="margin: 10px">
                                <h3>70%</h3>
                                <span>Storage Capacity</span>
                                <div class="progress" style="height: 6px; margin-top: 10px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%; height: 6px; " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <hr>

            <div class="row">

                <div class="col-lg-6">
                    <div class="card bg-white text-dark">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-success" style="margin: 17px"><i class="ti-wallet" style="font-size: 30px;"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h4 class="m-b-0">Total Income</h4>
                                    <span>Income</span>
                                </div>
                                <div class="ml-auto align-self-center">
                                    <h2 class="font-medium m-b-0">$2900</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card bg-white text-dark">
                        <div class="d-flex flex-row align-items-center">
                            <div class="p-10 bg-primary">
                                <h3 class="text-white box m-b-0" style="padding: 35px;"><i class="ti-themify-favicon-alt"></i></h3></div>
                            <div style="margin: 10px">
                                <h3 class="text-primary m-b-0">$980</h3>
                                <span class="text-muted">Free Messages</span>
                            </div>
                            <div class="align-self-center m-r-20 ml-auto " style="margin: 10px">
                                <h2 class="text-primary m-b-0">250</h2>
                            </div>
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