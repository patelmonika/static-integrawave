<?php

$title = "Country";
$selectedOption = "Admin,Country";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
?>

<div class="wrapper">

      <div class="wrapper">

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  Profile
                  <small>My administrative activities</small>
               </h1>
               <ol class="breadcrumb">
                  <li class="active"><a href="#"><i class="fa fa-mobile"></i>Profile</a></li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <!-- Your Page Content Here -->
               <div class="">
                  <div class="nav-tabs-custom">
                     <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#basic" aria-expanded="true">Basic Info</a></li>
                        <li><a data-toggle="tab" href="#security" aria-expanded="false">Security</a></li>
						<li><a data-toggle="tab" href="#users" aria-expanded="false">Users</a></li>
                     </ul>
                     <div class="tab-content">
                        <div id="basic" class="tab-pane active">
                           <form class="form-horizontal">
                              <div class="form-group">
                                 <label class="col-sm-2 control-label">Name</label>
                                 <div class="col-sm-10">
                                    <input type="email" placeholder="Name"  class="form-control">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-2 control-label">Email</label>
                                 <div class="col-sm-10">
                                    <input type="email" placeholder="Email" class="form-control">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-2 control-label">Address</label>
                                 <div class="col-sm-10">
                                    <input type="text" placeholder="Address"  class="form-control">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-2 control-label" for="inputExperience">About Me</label>
                                 <div class="col-sm-10">
                                    <textarea placeholder="About Me" id="inputExperience" class="form-control"></textarea>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-2 control-label" for="inputSkills">Skills</label>
                                 <div class="col-sm-10">
                                    <input type="text" placeholder="Skills" id="inputSkills" class="form-control">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-primary pull-right" type="submit">Save</button>
									<button class="btn btn-link btn-grey pull-right" >Cancel</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div id="security" class="tab-pane">
                           <form class="form-horizontal">
                              <div class="form-group">
                                 <label class="col-sm-2 control-label">Old Password</label>
                                 <div class="col-sm-10">
                                    <input type="password" placeholder="Old Password"  class="form-control">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-2 control-label">New Password</label>
                                 <div class="col-sm-10">
                                    <input type="password" placeholder="New Password" class="form-control">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-2 control-label">Confirm New Password</label>
                                 <div class="col-sm-10">
                                    <input type="password" placeholder="Confirm New Password"  class="form-control">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-primary pull-right" type="submit">Change My Password</button>
									<button class="btn btn-link btn-grey pull-right" >Cancel</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <!-- /.tab-pane -->
						   <div id="users" class="tab-pane">
              <table id="example1" class="table table-bordered table-striped table-responsive">
                        <thead>
                           <tr>                             
                              <th>Username</th>
							  <th>First Name</th>
                              <th>Last Name</th>
                              <th>Email</th>
							  <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>davidcampbell</td>
                              <td>David</td>
                              <td>Campbell</td>
                              <td>davidcampbell@ato.com</td>
                              <td><a href="#" data-toggle="modal" data-target="#delete-user">Delete</a></td>
                           </tr>
                           <tr>
                              <td>johnsmith</td>
                              <td>John</td>
                              <td>Smith</td>
                              <td>johnsmith@ato.com</td>
                              <td><a href="#" data-toggle="modal" data-target="#delete-user">Delete</a></td>
                           </tr>
                           
                     </table>
                        </div>
                     </div>
                     <!-- /.tab-content -->
                  </div>
                  <!-- /.nav-tabs-custom -->
               </div>
			        <!-- Modal -->
               <div id="delete-user" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                     <!-- Modal content-->
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title">Delele Device</h4>
                        </div>
                        <div class="modal-body">
                           <p>Are you sure you want to delete user John Smith?</p>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-link btn-grey" data-dismiss="modal">Cancel</button>
                           <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
      </div>
</div>
         <!-- /.content-wrapper -->
         <!-- Main Footer -->


<!-- Main Footer -->

<?php include_once "../Shared/footer.php"; ?>
