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

                <?php include "includes/mail_nav.php"; ?>

                <div class="col">
                    
                    <form method="POST">
                            
                        <div class="form-group">
                            <input type="text" id="" placeholder="To" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" id="" placeholder="Subject" class="form-control">
                        </div>

                        <textarea class="form-control" rows="5"></textarea>

                        <hr>

                        <h4>Attachment</h4>

                        <div class="well">
                            <center>Drop files here</center>
                        </div><br>

                        <button type="submit" class="btn btn-success btn-lg">Send</button>
                        <button type="button" class="btn btn-outline-dark btn-lg" onclick="location.href='email.php';">Discard</button>

                    </form>

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