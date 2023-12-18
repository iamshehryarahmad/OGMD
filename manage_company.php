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
        <title>Manage Companies OGMD</title>
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
                        <div class="module">
                            <div class="module-head">
                                <h3>Manage Companies <a class="btn btn-info btn-md pull-right" href="add_company.php">Add Company</a></h3>
                            </div>
                            <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Logo</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                            <th>Profile</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "php/conn.php";
                                        $uid = $_SESSION['userId'];
                                        if ($_SESSION['userType'] == 1) {
                                            $q = "SELECT * FROM `company`";
                                            $query = mysqli_query($conn, $q);
                                        } else {
                                            $q = "SELECT * FROM `company` WHERE `user_id` = '$uid'";
                                            $query = mysqli_query($conn, $q);
                                        }
                                        while ($result_com = (mysqli_fetch_array($query))) {
                                            ?>
                                            <tr>
                                                <td><?php echo $result_com['name']; ?></td>
                                                <td><?php echo $result_com['contact']; ?></td>
                                                <td><?php echo $result_com['address']; ?></td>
                                                <td><img src="uploads/<?php echo $result_com['companyimage']; ?>" height="50px" width="50px"></td>
                                                <td>
                                                    <form method="POST" action="edit_company.php">
                                                        <input type="hidden" value="<?php echo $result_com['company_id']; ?>" name="company_id"/>
                                                        <input type="hidden" value="<?php echo $result_com['name']; ?>" name="name" />
                                                        <input type="hidden" value="<?php echo $result_com['contact']; ?>" name="contact" />
                                                        <input type="hidden" value="<?php echo $result_com['address']; ?>" name="address" />
                                                        <input type="submit" id="company_update" name="company_update" value="Update" class="btn btn-info"/>
                                                    </form>
                                                </td>
                                                <td class="center"><a href="php/del_company.php?id=<?php echo $result_com['company_id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
                                                <td class="center"><a href="company_profile.php?id=<?php echo $result_com['company_id']; ?>"><button class="btn btn-inverse">Profile</button></a></td>

                                            </tr>
                                        <?php } ?>
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