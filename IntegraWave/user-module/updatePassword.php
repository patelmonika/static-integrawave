<?php

$title = "Update Password";

include_once "../Shared/header_main.php";
require_once "../Private/functions.php";

?>
<!-- /.container -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="forgotpwd-panel panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Update Password</h2>
                        <p>You can update your password here.</p>
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
                                        <div class="input-group">
                                            <span class="input-group-addon"><i aria-hidden="true" class="fa fa-lock fa-lg"></i></span>
                                            <input type="text" autofocus="" placeholder="Security Pin" name="pin" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i aria-hidden="true" class="fa fa-lock fa-lg"></i></span>
                                            <input type="password" autofocus="" placeholder="New Password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block" name="action" value="reset">Update</button>
                                        <button type="button" class="btn btn-default btn-block" onclick="location.href = '../index.php'" >Cancel</button>
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
