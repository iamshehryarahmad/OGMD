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
        <title>Manage Medicines OGMD</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>
    <body>
        <?php
        require 'php/navbar.php';
        ?>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <?php
                            require 'php/sidebar.php';
                            ?>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span12-->
                    <div class="span9">
                        <div class="module">
                            <div class="module-head">
                                <h3>Manage Medicines <a class="btn btn-info btn-md pull-right" href="add_medicine.php">Add Medicine</a></h3>
                            </div>
                            <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Company Name</th>
                                            <th>Formula</th>
                                            <th>ALternative</th>
                                            <th>Disease</th>
                                            <th>Picture</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Profile</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "php/conn.php";
                                        $umid = $_SESSION['userId'];
                                        if ($_SESSION['userType'] == 1) {
                                            $q = "SELECT * FROM `medicine`";
                                            $query = mysqli_query($conn, $q);
                                        } else {
                                            $q = "SELECT * FROM `medicine` WHERE `user_id` = '$umid'";
                                            $query = mysqli_query($conn, $q);
                                        }
                                        while ($result = (mysqli_fetch_array($query))) {
                                            ?>

                                            <tr>
                                                <td><?php echo $result['name']; ?></td>
                                                <td><?php echo $result['company_name']; ?></td>
                                                <td><?php echo $result['formula']; ?></td>
                                                <td><?php echo $result['alternative']; ?></td>
                                                <td><?php echo $result['disease']; ?></td>
                                                <td><img src="uploads/<?php echo $result['med_image']; ?>" height="50px" width="50px"></td>
                                                <td>
                                                    <form method="POST" action="edit_medicine.php">
                                                        <input type="hidden" value="<?php echo $result['med_id']; ?>" name="med_id" />
                                                        <input type="hidden" value="<?php echo $result['name']; ?>" name="name" />
                                                        <input type="hidden" value="<?php echo $result['company_name']; ?>" name="company_name" />
                                                        <input type="hidden" value="<?php echo $result['formula']; ?>" name="formula" />
                                                        <input type="hidden" value="<?php echo $result['disease']; ?>" name="disease" />
                                                        <input type="hidden" value="<?php echo $result['alternative']; ?>" name="alternative" />
                                                        <input type="hidden" value="<?php echo $result['precautions']; ?>" name="precautions" />
                                                        <input type="hidden" value="<?php echo $result['side_effects']; ?>" name="side_effects" />
                                                        <input type="hidden" value="<?php echo $result['usage_details']; ?>" name="usage_details" />
                                                        <input type="submit" id="medicine_update" name="medicine_update" value="Update" class="btn btn-info"/>
                                                    </form>
                                                </td>
                                                <td><a href="php/del_medicine.php?id=<?php echo $result['med_id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                                                <td class="center"><a href="medicine_details.php?id=<?php echo $result['med_id']; ?>"><button class="btn btn-inverse">Details</button></a></td>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!--/.module-->
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