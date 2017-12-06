<?php

$title = "Reset Password";

include_once "../Shared/header_main.php";

$requestStatus;
if(isset($_POST['action'])) {
    $action = $_POST['action'];

    $requestStatus = requestOperation("user", $_POST);
}

?>
<!-- /.container -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="forgotpwd-panel panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Forgot Password?</h2>
                        <p>You can reset your password here.</p>
                        <div class="panel-body">
                            <form class="form">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i aria-hidden="true" class="fa fa-envelope  fa-lg"></i></span>
                                            <input type="text" autofocus="" placeholder="E-mail" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Send My Password</button>
                                        <button type="button" class="btn btn-link btn-grey" onclick="location.href = 'login.php'" >Back to Login</button>
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
