<?php
include 'connection.php';
include 'ltr/header.php';
// include('ltr/link_sr.php');
include 'ltr/nav.php';
?>
<!DOCTYPE html>
<html>

<head>

    <!-- Title -->
    <title>Client Master</title>

    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet" />
    <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="page-header-fixed">
    <div class="overlay"></div>

    <form class="search-form" action="#" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control search-input" placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i
                        class="fa fa-times"></i></button>
            </span>
        </div><!-- Input Group -->
    </form><!-- Search Form -->
    <main class="page-content content-wrap">


        <div class="page-inner">
            <div class="page-title">
                <h4>Blank Page</h4>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Layouts</a></li>
                        <li class="active">Blank Page</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading">
                                <h4 class="panel-title">Recipient Master</h4>
                            </div>
                            <div class="panel-body">

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Recipient Name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Recipient Name">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Company Name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Company Name">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Contact Person</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Contact Person">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Mobile Number</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Mobile Number">
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Pan Number</label>
                                        <input type="email" maxlength="10" pattern="[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}"
                                            class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Landline number</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Landline number">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">E-Mail ID - 1</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Password">
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">E-Mail ID - 2</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Address">
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">State</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">City</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Pincode</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Bank Account Number</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Address">
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">IFSC Code</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter IFSC Code">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Bank Name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Bank Name">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Branch Code</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Branch Code">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">GST Number</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Address">
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Other Description</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Previous Balance</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Advance Balance</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">PSP VLE ID</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Address">
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">CIN</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter IFSC Code">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Fees Received</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Bank Name">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">Branch Code</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Branch Code">
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <div class="form-group"> -->
                                        <label for="exampleInputEmail1">GST Number</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Address">
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group d-block col-md-3">
                                        <label for="taxation_allows" class="float-left p-2">Taxation</label>
                                        <div class="d-block">
                                            <select name="taxation_allows[]" multiple
                                                class="form-control taxation_allows w-100 h-100" id="taxation_allows">
                                                <option value="GST"</option>
                                                <option value="IT Returns">IT Returns</option>
                                                <option value="Audit">Audit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group d-block col-md-3">
                                        <label for="nsdl_allows" class="float-left p-2">NSDL</label>
                                        <div class="d-block">
                                            <select name="nsdl_allows[]" multiple
                                                class="form-control nsdl_allows w-100 h-100" id="nsdl_allows">
                                                <option value="PAN">PAN</option>
                                                <option value="TAN">TAN</option>
                                                <option value="e-TDS">e-TDS</option>
                                                <option value="24G">24G</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group d-block col-md-3">
                                        <label for="dsc_allows" class="float-left p-2">DSC</label>
                                        <div class="d-block">
                                            <select name="dsc_allows[]" multiple
                                                class="form-control dsc_allows w-100 h-100" id="dsc_allows">
                                                <option value="DSC Applicant">DSC Applicant</option>
                                                <option value="DSC Partner">DSC Partner</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group d-block col-md-3">
                                        <label for="otherServices_allows" class="float-left p-2">Other Services</label>
                                        <div class="d-block">
                                            <select name="otherServices_allows[]" multiple
                                                class="form-control otherServices_allows w-100 h-100"
                                                id="otherServices_allows">
                                                <option value="Other Services">Other Service</option>
                                                <option value="Trading">Trading</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group d-block col-md-3">
                                        <label for="uti_allows" class="float-left p-2">UTI</label>
                                        <div class="d-block">
                                            <select name="uti_allows[]" multiple
                                                class="form-control uti_allows w-100 h-100" id="uti_allows">
                                                <option value="PSP">PSP</option>
                                                <!-- <option value="PSP Coupon Consumption" <?php //if (isset($_POST['editClient_Masterbtn'])) {if ($psp_coupon_consumption == 1 ) echo 'selected' ;}
?>>PSP Coupon Consumption</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group d-none col-md-3" id="dsc_companyDIV">
                                        <label for="ClientNameSelect1" class="float-left p-2">DSC Company <span
                                                style="color: red;" class="pl-1">*</span></label>
                                        <div class="d-block">


                                            <select name="dsc_company[]" multiple class="form-control dsc_company w-100"
                                                id="dsc_company">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
            <!-- <div class="page-footer">
                    <p class="no-s">2015 &copy; Modern by Steelcoders.</p>
                </div> -->
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
    <nav class="cd-nav-container" id="cd-nav">
        <header>
            <h3>Navigation</h3>
            <a href="#0" class="cd-close-nav">Close</a>
        </header>
        <ul class="cd-nav list-unstyled">
            <li class="cd-selected" data-menu="index">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-home"></i>
                    </span>
                    <p>Dashboard</p>
                </a>
            </li>
            <li data-menu="profile">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <p>Profile</p>
                </a>
            </li>
            <li data-menu="inbox">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-envelope"></i>
                    </span>
                    <p>Mailbox</p>
                </a>
            </li>
            <li data-menu="#">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-tasks"></i>
                    </span>
                    <p>Tasks</p>
                </a>
            </li>
            <li data-menu="#">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-cog"></i>
                    </span>
                    <p>Settings</p>
                </a>
            </li>
            <li data-menu="calendar">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-calendar"></i>
                    </span>
                    <p>Calendar</p>
                </a>
            </li>
        </ul>
    </nav>
    <div class="cd-overlay"></div>




</body>
<!-- Javascripts -->
<script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/plugins/pace-master/pace.min.js"></script>
<script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
<script src="assets/plugins/offcanvasmenueffects/js/main.js"></script>
<script src="assets/plugins/waves/waves.min.js"></script>
<script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/js/modern.min.js"></script>
<script src="assets/js/pages/form-select2.js"></script>

</html>