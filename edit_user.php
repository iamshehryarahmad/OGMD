<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
}
?>
<?php
include 'php/conn.php';
if (isset($_POST['edit_user'])){

    $uid = $_POST['uid'];

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];


    $q = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`useremail`='$email' WHERE user_id = $uid";
    $query = mysqli_query($conn, $q);

    if ($query) {
        echo "<script>alert('User Details Has Been Updated Successfully' )</script>";
        echo "<script>window.open('manage_user.php','_self')</script>";
    } else {
        echo "<script>alert('User Details Not Updated Successfully' )</script>";
        echo "<script>window.open('manage_user.php','_self')</script>";
    }
} else if (isset($_POST['user_id'])) {

    $user_id = $_POST['user_id'];

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
}
?>
﻿<!DOCTYPE html>
<html lang="en">
    <head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit User OGMD</title>
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
                        <div class="module  ">
                            <form class="form-search" method="post" action="" >
                                <div class="module-head">
                                    <h3>Edit User</h3>
                                </div>
                                <div class="module-body">
                                    <div class="control-group">
                                        <div class="controls row-fluid">
                                            <label class="label">First Name</label>
                                            <input class="span12" type="text" id="fname" name="fname" value="<?php echo $firstname; ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls row-fluid">
                                            <label class="label">Last Name</label>
                                            <input class="span12" type="text" id="lname" name="lname" value="<?php echo $lastname; ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls row-fluid">
                                            <label class="label">Email</label>
                                            <input class="span12" type="text" id="email" name="email" value="<?php echo $email; ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" name="uid" value="<?php echo $user_id ?>"
                                           </div>
                                    <div class="module-foot">
                                        <div class="control-group">
                                            <div class="controls clearfix">
                                                <button type="submit" name="eidt_user" id="edit_user" class="btn btn-success">Update</button>
                                                <input type="hidden" name="edit_user" id="edit_user">
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