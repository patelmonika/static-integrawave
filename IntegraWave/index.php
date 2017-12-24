<?php

$title = "Login";

require_once "Private/initialize.php";
require_once "Private/functions.php";

$requestStatus;
$error=null;
$success = null;

if(isset($_COOKIE['email'])) {
	session_start();
	$_SESSION['email']=$_COOKIE['email'];
	$_SESSION['role']=$_COOKIE['role_id'];
	$_SESSION['name']=$_COOKIE['name'];
	header("Location: home/dashboard.php");
}

session_start();
if(isset($_SESSION['email'])){
	header("Location: home/dashboard.php");
}

if(isset($_POST['action'])) {
    $action = $_POST['action'];

    $requestStatus = requestOperation("login", $_POST);

    $userResponse = json_decode($requestStatus, true);

    if(isset($userResponse['email'])){
	    session_start();
	    $_SESSION['email']=$userResponse['email'];
	    $_SESSION['role']=$userResponse['role_id'];
	    $_SESSION['name']=$userResponse['name'];
	    if ($_POST['remember']){
		    setcookie("email", $userResponse['email'], time()+3600, "/","localhost",false,true);
		    setcookie("role", $userResponse['role_id'], time()+3600, "/","localhost",false,true);
		    setcookie("name", $userResponse['name'], time()+3600, "/","localhost",false,true);
	    }
	    header("Location: home/dashboard.php");
    }else{
        $error = $userResponse['message'];
    }
}else if(isset($_GET['status'])){
    $success = $_GET['status'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Integra Wave | <?php echo $title; ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"/>
    <!-- Custom style -->
    <link rel="stylesheet" href="dist/css/custom.css"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/skin-black.css"/>
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css"/>
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="js/operations.js"></script>

</head>
<body class="hold-transition skin-black ">
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><img src="dist/img/logo.JPG" alt="logo"/></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><img src="dist/img/logo.JPG" alt="logo"/>Integra Wave</span>
        </a>
        <!-- Header Navbar -->

    </header>
<!-- /.container -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                    <div class="right-link"><a href="<?php echo url_for('user-module/resetPassword.php'); ?>">Forgot password?</a></div>
                </div>
                <div class="panel-body">
                    <?php
                    if(!is_null($success)){
                        echo "<div class=\"alert alert-success alert-dismissible\">
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                              <h4><i class=\"icon fa fa-check\"></i> Success!</h4>$success</div>";
                    }
                    ?>

                    <?php
                        if(!is_null($error)){
                            echo "<div class=\"alert alert-danger alert-dismissible\">
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                              <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>$error</div>";
                        }
                    ?>

                    <form role="form" method="post">
                        <fieldset>
                            <div class="form-group ">
                                <label for="username" class="required">Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" placeholder="Registered Email" autofocus required>
                                </div>
                                <!-- <p class="error-message">Please enter Username.</p>-->
                            </div>
                            <div class="form-group">
                                <label for="password" class="required">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password"  placeholder="Password" required>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button href="index.html" class="btn btn-primary btn-block" name="action" value="login">Login</button>
                            <button href="index.html" class="btn btn-default btn-block">Cancel</button>
                        </fieldset>
                    </form>
                    <div class="col-md-12">
                        <div class="sign-up">
                            <a class="btn btn-block btn-social btn-xs btn-facebook">
                                <span class="fa fa-facebook"></span> Sign in with Facebook
                            </a>

                            <a class="btn btn-block btn-social btn-xs btn-google">
                                <span class="fa fa-google"></span> Sign in with Google
                            </a>

                            <a class="btn btn-block btn-social btn-xs btn-github">
                                <span class="fa fa-github"></span> Sign in with GitHub
                            </a>

                            <a class="btn btn-block btn-social btn-xs btn-linkedin">
                                <span class="fa fa-linkedin"></span> Sign in with LinkedIn
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="sign-up">
                            Don't have an account ?
                            &nbsp;<a href="<?php echo url_for('user-module/register.php'); ?>">
                                Sign Up Here
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- /.footer -->
    <footer class="footer">
        <div class="container">
            <p class="text-muted">&copy; Copyright IntegraWave, 2017. All rights reserved. </p>
        </div>
    </footer>
    <!-- jQuery -->
    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
</body>
</html>

});
</script>
</body>
</html>
