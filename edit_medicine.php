<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
}
?>
<?php
include 'php/conn.php';

if (isset($_POST['edit_save'])) {

    $medicine_id = $_POST['medicine_id'];

    $medicine = $_POST['name'];
    $company = $_POST['company_name'];
    $formula = $_POST['formula'];
    $alternative = $_POST['alternative'];
    $sideeffects = $_POST['side_effects'];
    $precautions = $_POST['precautions'];
    $usagedetails = $_POST['usage_details'];
    $disease = $_POST['disease'];


    $q = "UPDATE `medicine` SET `name`='$medicine',`company_name`='$company',`formula`='$formula',`alternative`='$alternative',`side_effects`='$sideeffects',`precautions`='$precautions',`usage_Details`='$usagedetails',`disease`='$disease' WHERE med_id = $medicine_id";
    $run = mysqli_query($conn, $q);

    if ($run) {
        echo "<script>alert('Medicine Details Has Been Updated Successfully' )</script>";
        echo "<script>window.open('manage_medicine.php','_self')</script>";
    } else {
        echo "<script>alert('Medicine Details Not Updated Successfully' )</script>";
        echo "<script>window.open('manage_medicine.php','_self')</script>";
    }
} else if (isset($_POST['med_id'])) {

    $med_id = $_POST['med_id'];

    $medicine = $_POST['name'];
    $company = $_POST['company_name'];
    $formula = $_POST['formula'];
    $alternative = $_POST['alternative'];
    $sideeffects = $_POST['side_effects'];
    $precautions = $_POST['precautions'];
    $usagedetails = $_POST['usage_details'];
    $disease = $_POST['disease'];
}
?>

﻿<!DOCTYPE html>
<html lang="en">
    <head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Medicine OGMD</title>
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
                    <div class="span9">
                        <div class="module  ">
                            <form class="form-vertical" method="post" action="" enctype="multipar/form-data" >
                                <div class="module-head">
                                    <h3>Edit Medicine</h3>
                                </div>
                                <div class="module-body">
                                    <div class="control-group">
                                        <label class="label">Name</label>
                                        <div class="controls row-fluid">
                                            <input class="span12" type="text" id="name" name="name" value="<?php echo $medicine; ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="label">Company Name</label>
                                        <div class="controls row-fluid">
                                            <input class="span12" type="text" id="company_name" name="company_name" value="<?php echo $company; ?>" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="label">Formula</label>
                                        <div class="controls row-fluid">
                                            <input class="span12" type="text" id="formula" name="formula" value="<?php echo $formula; ?>" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="label">Disease</label>
                                        <div class="controls row-fluid">
                                            <input class="span12" type="text" id="disease" name="disease" value="<?php echo $disease; ?>" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="label">Alternative</label>
                                        <div class="controls row-fluid">
                                            <input class="span12" type="text" id="alternative" name="alternative" value="<?php echo $alternative; ?>" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="label">Side Effects</label>
                                        <div class="controls row-fluid">
                                            <textarea class="span12" id="side_effects" name="side_effects"><?php echo $sideeffects; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="label">Usage Details</label>
                                        <div class="controls row-fluid">
                                            <textarea class="span12" id="usage_details" name="usage_details"><?php echo $usagedetails; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="label">Precautions</label>
                                        <div class="controls row-fluid">
                                            <textarea class="span12" id="Precautions" name="precautions"><?php echo $precautions; ?></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="medicine_id" value="<?php echo $med_id; ?>"
                                           </div>
                                    <div class="module-foot">
                                        <div class="control-group">
                                            <div class="controls clearfix">
                                                <button type="submit" name="edit_medicine" id="edit_medicine" class="btn btn-success pull-left">Update Medicine</button>
                                            </div>
                                        </div>
                                        <input type="hidden" name="edit_save" id="edit_save">
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