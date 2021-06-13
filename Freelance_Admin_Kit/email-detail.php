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

            <div class="col"></div>

            <div class="col"></div>

            <div class="col-sm-4">
                
                <table class="table" style="cursor: pointer;">
                    
                    <tbody>
                        
                        <tr>

                            <td class="text-right">
                                <button class="btn btn-outline-dark"><span class="ti-trash"></span></button>
                                <button class="btn btn-outline-dark"><span class="ti-star"></span></button>
                                <button class="btn btn-outline-dark"><span class="ti-lock"></span></button>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

        <div class="row">

            <?php include "includes/mail_nav.php"; ?>

            <div class="col">

                <h3>Message Title Here</h3><br>

                <p>Richard Altre (monterorichard09@gmail.com)</p>
                <p>to: admin@gmail.com</p><br>

                <p class="text-justify" style="white-space: pre-wrap; ">Lorem Ipsum Dolor Sit Amet Con EstasLorem Ipsum Dolor Sit Amet Con EstasLorem Ipsum Dolor Sit Amet Con EstasLorem Ipsum Dolor Sit Amet Con EstasLorem Ipsum Dolor Sit Amet Con EstasLorem Ipsum Dolor Sit Amet Con EstasLorem Ipsum Dolor Sit Amet Con EstasLorem Ipsum Dolor Sit Amet Con EstasLorem Ipsum Dolor Sit Amet Con EstasLorem Ipsum Dolor Sit Amet Con EstasLorem Ipsum Dolor Sit Amet Con EstasLorem Ipsum Dolor Sit Amet Con Estas</p>

                <hr>

                <h4>Attachments (3)</h4>

                <table class="table">
                    
                    <tbody>
                        <tr>
                            <td><button class="btn btn-outline-dark" style="width: 100%;"><span class="ti-comment-alt"></span> Reply</button></td>
                            <td><button class="btn btn-outline-dark" style="width: 100%;"><span class="ti-control-forward"></span> Forward</button>	</td>
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