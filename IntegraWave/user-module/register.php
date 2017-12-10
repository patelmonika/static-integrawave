<?php

$title = "Sign Up";

require_once "../Private/functions.php";
include_once "../Shared/header_main.php";

$countries = getAll("country");

$requestStatus;
if(isset($_POST['action'])) {
    $action = $_POST['action'];

    $requestStatus = requestOperation("register", $_POST);
}

?>
<!-- /.container -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="registration-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                    <div class="right-link"><a href="help.html"  data-toggle="modal" data-target="#help">Help</a></div>
                </div>
                <div class="panel-body">
                    <form role="form" method="post">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="name" class="required">Name</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user  fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="email" class="required">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user  fa-lg" aria-hidden="true"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                            <!-- Passwords -->
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="password_one" class="required">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password" placeholder="Password" required/>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="password_two" class="required">Re-enter Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password_two" placeholder="Password" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="dob" class="required">Date of Birth</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker" name="dob">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="country_id" class="required">Country</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker  fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="country_id">
                                        <option value="">Select</option>
                                        <?php
                                        $responseOption="";
                                        foreach ($countries as $responseArray){
                                            $responseOption = $responseOption . "<option value='$responseArray[id]'>$responseArray[name]</option>";
                                        }

                                        echo $responseOption;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <!-- Agree static text -->
                            <div class="form-group">
                                <p class="form-control-static">
                                    Do you agree to the <a href="#" data-toggle="modal" data-target="#user-agreement">User Agreement</a> and <a href="#" data-toggle="modal" data-target="#privacy-policy">Privacy Policy</a>,
                                    and terms incorporated therein?
                                </p>
                            </div>
                            <!-- Create button -->
                            <div class="form-group text-center">
                                <button class="btn btn-link btn-grey " type="reset">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="add">Agree and Create Account</button>
                            </div>
                        </fieldset>
                    </form>

                    <div class="form-group text-center">
                        <div class="sign-up">
                            Already have an account ?
                            &nbsp;<a href="../index.php">
                                Login Here
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <label class="required"></label> - required field
                </div>
            </div>
        </div>
    </div>
</div>
<!-- User Agreement Modal -->
<div class="modal fade" id="user-agreement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">User Agreement</h4>
            </div>
            <div class="modal-body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!-- User Agreement Modal -->
<div class="modal fade" id="privacy-policy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Privacy Policy</h4>
            </div>
            <div class="modal-body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!-- Helpt Modal -->
<div class="modal fade" id="help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Help</h4>
            </div>
            <div class="modal-body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<?php include "../Shared/footer_main.php"; ?>
