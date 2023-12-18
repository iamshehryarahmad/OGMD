<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>
    <body>
        <ul class="widget widget-usage unstyled">
            <li class="active">
                <a href="index.php"><i class="menu-icon icon-home"></i>OGMD</a>
            </li>
            <li class="active">
                <a href="admin.php"><i class="menu-icon icon-dashboard"></i>Dashboard</a>
            </li>
            <?php if ($_SESSION['userType'] == 1) { ?>
                <li class="active">
                    <a href="manage_user.php"><i class="menu-icon icon-user"></i>Manage User</a>
                </li>
            <?php } ?>
            <li class="active">
                <a href="manage_medicine.php"><i class="menu-icon icon-medkit"></i>Manage Medicine</a>
            </li>
            <li class="active">
                <a href="manage_company.php"><i class="menu-icon icon-building"></i>Manage Companies</a>
            </li>
        </ul>

        <!--/.widget-nav-->
        <ul class="widget widget-usage unstyled">
            <li><a href="php/logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
        </ul>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
    </body>
</html>
