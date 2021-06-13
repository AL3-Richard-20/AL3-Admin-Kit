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

            <div class="card bg-white text-dark">

                <div class="card-header bg-white text-dark">

                    <div class="row">
                            
                        <div class="col d-none d-md-block">
                            <button type="button" class="btn btn-outline-dark" onclick="location.href='settings.php';"><span class="ti-arrow-left"></span></button>
                        </div>

                        <div class="col-lg-6 text-center">
                            <h5 class="header-title">Personalization</h5>
                        </div>

                        <div class="col-lg"></div>

                    </div>

                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-12">

                            <h5 class="header-title">Color</h5><br>
                            
                            <table class="table">

                                <tbody>

                                    <tr>
                                        <td>Dark Mode</td>
                                        <td><button type="button" class="btn btn-outline-dark" onclick="setdarkModeCookie()">Switch</button></td>
                                    </tr>

                                </tbody>

                            </table><hr><br>

                            <p>Choose your accent color</p>

                            <div class="row">

                                <div class="color-box" style="background: #d02737" onclick="colorCookie('sidebar-1')">

                                    <div class="color-item"></div>

                                </div>

                                <div class="color-box" style="background: #34558b" onclick="colorCookie('sidebar-2')">

                                    <div class="color-item"></div>

                                </div>

                                <div class="color-box" style="background: #d8b000" onclick="colorCookie('sidebar-3')">

                                    <div class="color-item"></div>

                                </div>

                                <div class="color-box" style="background: #1e8000" onclick="colorCookie('sidebar-4')">

                                    <div class="color-item"></div>

                                </div>

                                <div class="color-box" style="background: #940045" onclick="colorCookie('sidebar-5')">

                                    <div class="color-item"></div>

                                </div>

                                <div class="color-box" style="background: #940020" onclick="colorCookie('sidebar-6')">

                                    <div class="color-item"></div>

                                </div>

                                <div class="color-box" style="background: #e77000" onclick="colorCookie('sidebar-7')">

                                    <div class="color-item"></div>

                                </div>

                                <div class="color-box" style="background: #000" onclick="colorCookie('sidebar-8')">

                                    <div class="color-item"></div>

                                </div>

                                <div class="color-box" style="background: #fff" onclick="colorCookie('sidebar-9')">

                                    <div class="color-item"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <script src="assets/js/jquery.min.js"></script>

        <script src="assets/css/bootstrap4/bootstrap.min.js"></script>

        <script src="assets/js/sweetalert.min.js"></script>

        <script src="assets/js/dark_mode.js"></script>

        <script src="scripts/functions.js"></script>

        <script>

            function colorCookie(sdbrval){

                localStorage.setItem("sidebarcolor", sdbrval)

                var sdbrcolor = localStorage.getItem("sidebarcolor")

                var color_val = sdbrcolor.substring(8, 9)

                // $('#al3-sidebar').addClass('sidebar-'+ color_val)
                // $('#al3-navbar').addClass('al3-navbar-'+ color_val)

                location.href='personalization.php';
            }

        </script>

    </body>

</html>