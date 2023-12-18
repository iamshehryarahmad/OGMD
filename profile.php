<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
}
?>
﻿<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Profile OGMD</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>
    <body>
        <?php
        include 'php/conn.php';

        $id = $_SESSION['userId'];

        $q = "SELECT * FROM `users` WHERE user_id = $id";

        $query = mysqli_query($conn, $q);
        $result_profile = mysqli_fetch_array($query);
        ?>
        <?php include 'php/navbar.php'; ?>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <?php include 'php/sidebar.php'; ?>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="widget">
                            <div class="module">
                                <div class="profile-head media">
                                    <di class='span3'>
                                        <a href="#" class="responsive-photo pull-left">
                                            <img src="uploads/<?php echo $result_profile['userimage']; ?>">

                                        </a>
                                    </di>
                                    <div class="media-body">
                                        <table class="table profile-tab-content">
                                            <thead>
                                                <tr>
                                                    <td><b>First Name</b></td>
                                                    <td><?php echo $result_profile['firstname']; ?></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                            <form method="POST" action="edit_user.php">
                                                <input type="hidden" value="<?php echo $result_profile['user_id']; ?>" name="user_id" />
                                                <input type="hidden" value="<?php echo $result_profile['firstname']; ?>" name="fname" />
                                                <input type="hidden" value="<?php echo $result_profile['lastname']; ?>" name="lname" />
                                                <input type="hidden" value="<?php echo $result_profile['useremail']; ?>" name="email" />
                                                <input type="submit" id="user_update" name="user_update" value="Update" class="btn btn-info pull-right"/>
                                            </form>
                                            </tr>
                                            <tr>
                                                <td><b>Last Name</b></td>
                                                <td><?php echo $result_profile['lastname']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Email Address</b></td>
                                                <td><?php echo $result_profile['useremail']; ?></td>                                                    
                                            </tr>
                                            <tr>
                                                <td><b>Gender</b></td>
                                                <td><?php echo $result_profile['gender']; ?></td>                                                    
                                            </tr>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/.module-body-->
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright"> Copyright &copy; 2020 - Online Global Medicine Directory</b>
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
    </body>
</html>