<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>
    <body>
        <?php
        include 'conn.php';

        $id = isset($_SESSION['userId']);
        $nav = "SELECT * FROM `users`";
        $query_nav = mysqli_query($conn, $nav);
        $result_nav = mysqli_fetch_array($query_nav);
        ?>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Online Global Medicine Directory</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">

                            <?php
                            if (isset($_SESSION['loggedin'])) {

                                if ($_SESSION['loggedin'] == true) {
                                    ?>
                                    <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="uploads/<?php echo $result_nav['userimage']; ?>" class="nav-avatar" />
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="profile.php">Your Profile</a></li>
                                            <li class="divider"></li>
                                            <li><a href="php/logout.php">Logout</a></li>
                                        </ul>
                                    </li>
                                <?php } ?>

                            <?php } else { ?>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="signup.php">Sing Up</a></li>
                            <?php } ?>

                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
    </body>
</html>