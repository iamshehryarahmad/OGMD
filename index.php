<?php
session_start();
?>
﻿<!DOCTYPE html>
<html lang="en">
    <head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OGMD</title>
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
                            if (isset($_SESSION['loggedin'])) {
                                include 'php/sidebar.php';
                            }
                            ?>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span12-->
                    <?php
                    if (isset($_SESSION['loggedin'])) {
                        ?>
                        <div class="span9">
                        <?php } else {
                            ?>
                            <div class="span12">
                            <?php }
                            ?>
                            <div class="module">
                                <div class="module-head">
                                    <h1 class="te">Search Medicines</h1>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Company Name</th>
                                                <th>Formula</th>
                                                <th>ALternative</th>
                                                <th>Picture</th>
                                                <th>Profile</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'php/conn.php';

                                            $q = "SELECT * FROM `medicine`";
                                            $query = mysqli_query($conn, $q);
                                            while ($result = (mysqli_fetch_array($query))) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $result['name']; ?></td>
                                                    <td><?php echo $result['company_name']; ?></td>
                                                    <td><?php echo $result['formula']; ?></td>
                                                    <td><?php echo $result['alternative']; ?></td>
                                                    <td><img src="uploads/<?php echo $result['med_image']; ?>" height="50px" width="50px"></td>
                                                    <td class="center"><a href="search_medicine.php?id=<?php echo $result['med_id']; ?>"><button class="btn btn-info">Profile</button></a></td>
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