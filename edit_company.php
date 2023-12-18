<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
}
?>
<?php
include 'php/conn.php';

if (isset($_POST['edit_com'])) {

    $com_id = $_POST['com_id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $q = "UPDATE `company` SET `name`='$name',`contact`='$contact',`address`='$address' WHERE `company_id` = $com_id";


    $run = mysqli_query($conn, $q);

    if ($run) {
        echo "<script>alert('Company Details Has Been Updated Successfully' )</script>";
        echo "<script>window.open('manage_company.php','_self')</script>";
    } else {
        echo "<script>alert('Company Details Not Updated Successfully' )</script>";
        echo "<script>window.open('manage_company.php','_self')</script>";
    }
} else if (isset($_POST['company_id'])) {

    $company_id = $_POST['company_id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
}
?>
﻿<!DOCTYPE html>
<html lang="en">
    <head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Company OGMD</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
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
                    <div class="span6 offset2">
                        <div class="module-body">
                            <form class="form-inline" method="post" action="">
                                <div class="module-head">
                                    <h3>Edit Company</h3>
                                </div>
                                <div class="module-body">
                                    <div class="control-group">
                                        <div class="controls row-fluid">
                                            <label class="label">Company Name</label>
                                            <input class="span12" type="text" id="name" name="name" value="<?php echo $name; ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls row-fluid">
                                            <label class="label">Company Contact</label>
                                            <input class="span12" type="text" id="contact" name="contact" value="<?php echo $contact; ?>" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls row-fluid">
                                            <label class="label">Company Address</label>
                                            <input class="span12" type="text" id="address" name="address" value="<?php echo $address; ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" name="com_id" value="<?php echo $company_id; ?>">
                                </div>
                                <div class="module-foot">
                                    <div class="control-group">
                                        <div class="controls clearfix">
                                            <button type="submit" name="edit_com" id="edit_com" class="btn btn-success pull-left">Update Company</button>
                                            <input type="hidden" name="edit_com" id="edit_user">
                                        </div>
                                    </div>
                                </div>
                            </form>
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