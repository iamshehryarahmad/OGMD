<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search Medicine OGMD</title>
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
        $id = $_GET['id'];
        $q = "SELECT * FROM `medicine` WHERE med_id = $id";
        $query = mysqli_query($conn, $q);
        $result_med = mysqli_fetch_array($query);
        ?>
        <?php include 'php/navbar.php';
        ?>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <!--/.span3-->
                    <div class="span12">
                        <div class="widget">
                            <div class="module">
                                <div class="profile-head media">
                                    <div class="span4">
                                        <a href="#" class="pull-left responsive-photo">
                                            <img src="uploads/<?php echo $result_med['med_image']; ?>">
                                        </a>
                                    </div>

                                    <div class="media-body span7">
                                        <table class="table profile-tab-content">
                                            <a href="index.php"><button class=" btn btn-inverse pull-right">Back</button></a>
                                            <thead>
                                                <tr>
                                                    <td><b>Name</b></td>
                                                    <td><?php echo $result_med['name']; ?></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><b>Company Name</b></td>
                                                    <td><?php echo $result_med['company_name']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Formula</b></td>
                                                    <td><?php echo $result_med['formula']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>ALternative</b></td>
                                                    <td><?php echo $result_med['alternative']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Precautions</b></td>
                                                    <td><?php echo $result_med['precautions']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Disease</b></td>
                                                    <td><?php echo $result_med['disease']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Side Effects</b></td>
                                                    <td><?php echo $result_med['side_effects']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Usage Details</b></td>
                                                    <td><?php echo $result_med['usage_details']; ?></td>
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