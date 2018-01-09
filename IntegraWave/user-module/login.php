<?php

$title = "Login";

include_once "../Shared/header_main.php";

?>
<!-- /.container -->
<div class="container">
    <div class="row">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Sign In</h3>
                <div class="right-link"><a href="resetPassword.php">Forgot password?</a></div>
            </div>
            <div class="panel-body">
                <form role="form" method="post">
                    <fieldset>
                        <div class="form-group ">
                            <label for="username" class="required">Username</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-lg"
                                                                   aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" placeholder="Registered Email"
                                       autofocus>
                            </div>
                            <!--                                <p class="error-message">Please enter Username.</p>-->
                        </div>
                        <div class="form-group">
                            <label for="password" class="required">Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg"
                                                                   aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <button href="index.html" class="btn btn-primary btn-block" name="action" value="login">Login
                        </button>
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
                        &nbsp;<a href="register.php">
                            Sign Up Here
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../Shared/footer_main.php"; ?>
