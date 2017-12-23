<?php

$title = "Reset Password";

include_once "../Shared/header_main.php";
require_once "../Private/functions.php";

$requestStatus;
$error = null;
$success = null;
if(isset($_POST['action'])) {
    $action = $_POST['action'];

    $requestStatus = requestOperation("register", $_POST);
	$requestStatus = json_decode($requestStatus, true);
    if($requestStatus['status'] == "success"){
        $success = $requestStatus['message'];
    }else if($requestStatus['status'] == "failed"){
        $error = $requestStatus['message'];
    }
}

?>
<!-- /.container -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="forgotpwd-panel panel panel-default">
                <div class="panel-body">
                    <?php
                    if(!is_null($error)){
                        echo "<div class=\"alert alert-danger alert-dismissible\">
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                              <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>$error</div>";
                    }else if(!is_null($success)){
                        echo "<div class=\"alert alert-success alert-dismissible\">
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                              <h4><i class=\"icon fa fa-check\"></i> Success!</h4>$success</div>";
                    }
                    ?>
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Forgot Password?</h2>
                        <p>You can reset your password here.</p>
                        <div class="panel-body">
                            <form class="form" method="POST">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i aria-hidden="true" class="fa fa-envelope  fa-lg"></i></span>
                                            <input type="email" autofocus="" placeholder="E-mail" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block" name="action" value="reset">Send My Password</button>
                                        <button type="button" class="btn btn-link btn-grey" onclick="location.href = '../index.php'" >Back to Login</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../Shared/footer_main.php"; ?>
