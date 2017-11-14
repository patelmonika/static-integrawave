<?php

$title = "Country";
$selectedOption = "Admin,Country";

require_once "../Private/functions.php";

include_once "../Shared/header.php";

include_once "../Shared/left-navigation.php";
?>

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Canada's Best Places To Live

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-mobile"></i>Devices</a></li>
                <li class="active">Devices List</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            <!-- Small boxes (Stat box) -->

            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>City</th>
                                    <th>Top Features</th>
                                    <th>More Info</th></tr>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ottawa,Ont</td>
                                    <td>Transit, Health assecibility</td>
                                    <td><a href="#">More Info</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Oak Bay,B.C</td>
                                    <td>Transit, High Wealth </td>
                                    <td><a href="#">More Info</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Weyburn, Sask</td>
                                    <td>Home Affordability, Robust Economy</td>
                                    <td><a href="#">More Info</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Levis,Que</td>
                                    <td>Low Taxes, Robust economy</td>
                                    <td><a href="#">More Info</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>startford,Ont</td>
                                    <td>Transit, Health assecibility</td>
                                    <td><a href="#">More Info</a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Ottawa,Ont</td>
                                    <td>Transit, Health assecibility</td>
                                    <td><a href="#">More Info</a></td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content -->

<?php include_once "../Shared/footer.php"; ?>
