<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
}
?>
﻿<!DOCTYPE html>
<html lang="en">
    <head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Global Medicine Directory</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    </head>
    <body>
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
                    <!--/.span12-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-contorl">
                                <div class="btn-box-row row-fluid">
                                    <a href="add_medicine.php" class="btn-box big span3"><i class="icon-medkit"></i>
                                        <p class="text-muted"> <b>Add Medicines</b></p>
                                    </a>
                                    <a href="add_company.php" class="btn-box big span3"><i class="icon-building"></i>
                                        <p class="text-muted"><b>Add Companies</b></p>
                                    </a>
                                    <?php if ($_SESSION['userType'] == 1) { ?>
                                        <a href="add_user.php" class="btn-box big span3"><i class="icon-user-md"></i>
                                            <p class="text-muted"><b>Add Users</b></p>
                                        </a>
                                        <a href="add_admin.php" class="btn-box big span3"><i class="icon-user"></i>
                                            <p class="text-muted"><b>Add Admin</b></p>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <b class="copyright"> Copyright &copy; 2020 - Online Global Medicine Directory</b>
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

    </body>
</html>
