<?php

$title = "Login";

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
        <div class="col-md-8 col-md-offset-1">
            <div class="registration-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                    <div class="right-link"><a href="help.html"  data-toggle="modal" data-target="#help">Help</a></div>
                </div>
                <div class="panel-body">
                    <form role="form" class="">
                        <fieldset>
                            <!-- First Name/Last Name -->
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="firstname" class="required">First Name</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user  fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
<!--                                    <p class="error-message">Please enter First Name.</p>-->
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="lastname" class="required">Last Name</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user  fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
<!--                                    <p class="error-message">Please enter Last Name.</p>-->
                                </div>
                            </div>
                            <!-- Name and gender -->
                            <div class="row">
                                <div class="col-sm-8 form-group">
                                    <label for="name" class="required">Select Username</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control">
                                        <option value="0">Select</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Passwords -->
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="password_one" class="required">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="password_one" placeholder="Password"/>
                                    </div>
<!--                                    <p class="error-message">At least 6 characters long.</p>-->
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="password_two" class="required">Re-enter Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="password_two" placeholder="Password"/>
                                    </div>
<!--                                    <p class="error-message">Passwords do not match.</p>-->
                                </div>
                            </div>
                            <!-- DOB -->
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label for="birthdate" class="required">Birthdate</label>
                                    <select class="form-control">
                                        <option value="0">Day</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="teltype">&nbsp;</label>
                                    <select class="form-control">
                                        <option value="0">Month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="teltype">&nbsp;</label>
                                    <select class="form-control">
                                        <option value="0">Year</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Address Line 1/Address Line 2 -->
                            <div class="form-group">
                                <label for="address_one" class="required">Address Line 1</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker  fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="address_one" placeholder="Address Line 1">
                                </div>
<!--                                <p class="error-message">Please enter Address Line 1.</p>-->
                            </div>
                            <div class="form-group">
                                <label for="address_two" class="required">Address Line 2</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="address_two" placeholder="Address Line 2">
                                </div>
<!--                                <p class="error-message">Please enter Address Line 2.</p>-->
                            </div>
                            <!-- Telephone Number -->
                            <div class="row">
                                <div class="col-sm-8 form-group">
                                    <label for="Telephone" class="required">Telephone</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="Telephone" placeholder="Telephone"/>
                                    </div>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="teltype">Telephone Type</label>
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>Work</option>
                                        <option>Home</option>
                                        <option>Mobile</option>
                                    </select>
                                </div>
                            </div>
                            <!-- City / State / Country -->
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label for="City" class="required">City</label>
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>City 1</option>
                                        <option>City 2</option>
                                        <option>City 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="State" class="required">State</label>
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>State 1</option>
                                        <option>State 2</option>
                                        <option>State 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="country" class="required">Country</label>
                                    <select class="form-control">
                                        <option value="0">Select</option>
                                        <option value="1">Germany</option>
                                        <option value="2">France</option>
                                        <option value="3">USA</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Pincode -->
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label for="Pincode" class="required">Pincode</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-o fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="Pincode" placeholder="Pincode"/>
                                    </div>
                                </div>
                            </div>
                            <!-- CAPTCHA -->
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label for="captcha" class="required">Captcha</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-puzzle-piece fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="captcha" placeholder="Captcha"/>
                                    </div>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>&nbsp;</label>
                                    <div class="input-group">
                                        <img src="dist/img/captcha.png" class="captcha-img" alt="CAPTCHA Image"/>
                                        <button type="button" class="btn btn-link captcha-img-btn">Show a different image</button>
                                    </div>
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
                                <button onclick="location.href = 'login.php'" class="btn btn-link btn-grey " type="button">Cancel</button>
                                <button type="button" class="btn btn-primary">Agree and Create Account</button>
                            </div>
                        </fieldset>
                    </form>
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
