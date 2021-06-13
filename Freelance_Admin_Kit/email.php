<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta name="author" content="Richard del Altre">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>AL3 | Email</title>

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

        <div class="container-fluid">

            <div class="row">
					
                <div class="col-sm-3 d-none d-xl-block">
                    <button class="btn btn-success" style="width: 100%;" onclick="location.href='email-compose.php';">Compose</button>
                </div>

                <div class="col">
                    <h4><b>INBOX</b></h4>
                </div>

                <div class="col-sm-3"></div>

                <div class="col">
                    <input type="text" id="" class="form-control" placeholder="Search mail here">
                </div>

            </div><br>

            <div class="row">

                <?php include "includes/mail_nav.php"; ?>

                <div class="col">

                    <table class="table table-white" style="cursor: pointer;">
                        
                        <tbody>
                            
                            <tr>
                                <td><p><input type="checkbox">&nbsp&nbspCheck All</p></td>

                                <td class="text-right">
                                    <button class="btn btn-outline-dark"><span class="ti-trash"></span></button>
                                    <button class="btn btn-outline-dark"><span class="ti-star"></span></button>
                                    <button class="btn btn-outline-dark"><span class="ti-lock"></span></button>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                    <table class="table table-white table-hover" style="cursor: pointer;">
                        
                        <tbody>

                            <tr>
                                <td><input type="checkbox">&nbsp&nbspRichard Altre</td>
                                <td onclick="location.href='email-detail.php';"><p><span class="badge badge-success">New</span> Good day! Lorem Ipsum Dolor Sit........</p></td>
                                <td onclick="location.href='email-detail.php';">March 02 | 2:00 AM</td>
                            </tr>

                            <tr>
                                <td><input type="checkbox">&nbsp&nbspChristine Balmocena</td>
                                <td><p>Hello Sir! Lorem Ipsum Dolor Sit........</p></td>
                                <td>Feb 11 | 10:00 AM</td>
                            </tr>

                            <tr>
                                <td><input type="checkbox">&nbsp&nbspJapeth De Leon</td>
                                <td><p>Hello Sir! Lorem Ipsum Dolor Sit........</p></td>
                                <td>Feb 09 | 07:32 AM</td>
                            </tr>

                            <tr>
                                <td><input type="checkbox">&nbsp&nbspJoshua Sinay</td>
                                <td><p>Hello Sir! Lorem Ipsum Dolor Sit........</p></td>
                                <td>Feb 09 | 07:17 AM</td>
                            </tr>

                        </tbody>

                    </table>

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