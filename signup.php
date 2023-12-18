<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up OGMD</title>
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
                    <div class="module module- span6 offset3">
                        <form class="form-actions" method="post" action="php/signup.php" enctype="multipart/form-data">
                            <div class="module-head">
                                <h3>Sign Up</h3>
                            </div>
                            <div class="module-body">
                                <div class="control-group">
                                    <div class="controls row-fluid">
                                        <input class="span12" type="text" id="fname" name="fname" placeholder="First Name*" required="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls row-fluid">
                                        <input class="span12" type="text" id="lname" name="lname" placeholder="Last Name*" required="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls row-fluid">
                                        <input class="span12" type="email" id="email" name="email" placeholder="Email*" required="">
                                    </div>
                                </div>
                                <div><input type="hidden" name="user_type" id="user_type" value="2"></div>
                                <div class="control-group">
                                    <div class="controls row-fluid">
                                        <input class="span12" type="password" minlength="8" id="pass" name="pass" placeholder="Password*" required="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" id="gender" value="male">
                                            Male
                                        </label> 
                                        <label class="radio inline">
                                            <input type="radio" name="gender" id="gender" value="female">
                                            Female
                                        </label> 
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls row-fluid">
                                        <input class="span12" type="file" id="user_profile" name="user_profile" placeholder="Password*" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="module-foot">
                                <div class="control-group">
                                    <div class="controls clearfix">
                                        <button type="submit" name="signup" id="signup" class="btn btn-primary pull-right">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/.wrapper-->

        <div class="footer">
            <div class="container">
                <b class="copyright"> Copyright &copy; 2020 - Online Global Medicine Directory</b>            
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>