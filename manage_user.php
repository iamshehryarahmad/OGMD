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
        <title>Manage Users OGMD</title>
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
                                <h3>Manage Users <a class="btn btn-info btn-md pull-right" href="add_user.php">Add User</a></h3>
                            </div>
                            <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Picture</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Profile</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'php/conn.php';

                                        $q = "select * from users";
                                        $query = mysqli_query($conn, $q);
                                        while ($result_user = (mysqli_fetch_array($query))) {
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $result_user['firstname']; ?></td>
                                                <td><?php echo $result_user['lastname']; ?></td>
                                                <td><?php echo $result_user['useremail']; ?></td>
                                                <td class="center"><?php echo $result_user['gender']; ?></td>
                                                <td class="center"><img src="uploads/<?php echo $result_user['userimage']; ?>" width="50px" height="50px"></td>
                                                <td>
                                                    <form method="POST" action="edit_user.php">
                                                        <input type="hidden" value="<?php echo $result_user['user_id']; ?>" name="user_id" />
                                                        <input type="hidden" value="<?php echo $result_user['firstname']; ?>" name="fname" />
                                                        <input type="hidden" value="<?php echo $result_user['lastname']; ?>" name="lname" />
                                                        <input type="hidden" value="<?php echo $result_user['useremail']; ?>" name="email" />
                                                        <input type="submit" id="user_update" name="user_update" value="Update" class="btn btn-info"/>
                                                    </form>
                                                </td>
                                                <td class="center">
                                                    <a href="php/del_user.php?id=<?php echo $result_user['user_id'];?>"><button class="btn btn-danger">Delete</button></a>
                                                </td>
                                                <td class="center">
                                                    <a href="user_profile.php?id=<?php echo $result_user['user_id']; ?>"><button class="btn btn-inverse">Profile</button></a>
                                                </td>
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