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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css" />

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
            <div class="page-title" style="position: relative;">
                <!-- <h4>Client Master</h4> -->
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <!-- <li><a href="#">Layouts</a></li> -->
                        <li class="active">Client Master</li>
                    </ol>
                    <button id="showTableButton" class="btn btn-primary"
                        style="position: absolute; top: 0; right: 0; margin-top: 11px;">Show Data</button>
                    <!-- <button type="button" class="btn btn-primary">Primary</button> -->

                </div>
            </div>
            <div id="main-wrapper">

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <!-- <div class="panel-heading"> -->
                            <div class="panel-heading"
                                style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                                <h4 class="panel-title" style="font-size:17px">Recipient Master</h4>
                            </div>
                            <div id="dataTableContainer" style="display: none;">
                                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>$385,750</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>$198,500</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>$725,000</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    const showTableButton = document.getElementById("showTableButton");
                                    const dataTableContainer = document.getElementById("dataTableContainer");
                                    const dataTableContainer1 = document.getElementById("form_id");

                                    showTableButton.addEventListener("click", function () {
                                        if (dataTableContainer.style.display === "none") {
                                            dataTableContainer.style.display = "block";
                                            dataTableContainer1.style.display = "none";
                                        } else {
                                            dataTableContainer.style.display = "none";
                                            dataTableContainer1.style.display = "block";
                                        }
                                    });
                                });

                            </script>

                            <div class="panel-body">
                                <form id="form_id" style="display: block;">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="recipient_name">Recipient Name</label>
                                            <input type="text" class="form-control" id="recipient_name"
                                                name="recipient_name" placeholder="Enter Recipient Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="company_name">Company Name</label>
                                            <input type="text" class="form-control" id="company_name"
                                                name="company_name" placeholder="Enter Company Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="contact_person">Contact Person</label>
                                            <input type="email" class="form-control" id="contact_person"
                                                name="contact_person" placeholder="Enter Contact Person">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="mobile_number">Mobile Number</label>
                                            <input type="email" class="form-control" id="mobile_number"
                                                name="mobile_number" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="pan_number">Pan Number</label>
                                            <input type="email" maxlength="10" pattern="[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}"
                                                class="form-control" id="pan_number" name="pan_number"
                                                placeholder="Enter Pan Number">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="landline_number">Landline Number</label>
                                            <input type="email" class="form-control" id="landline_number"
                                                name="landline_number" placeholder="Enter Landline Number">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="email_1">E-Mail ID - 1</label>
                                            <input type="email" class="form-control" id="email_1" name="email_1"
                                                placeholder="Enter Email">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="password">Password</label>
                                            <input type="email" class="form-control" id="password" name="password"
                                                placeholder="Enter Password">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="email_2">E-Mail ID - 2</label>
                                            <input type="email" class="form-control" id="email_2" name="email_2"
                                                placeholder="Enter Email">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="email_address_1">Email Address 1</label>
                                            <input type="email" class="form-control" id="email_address_1"
                                                name="email_address_1" placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="email_address_2">Email Address 2</label>
                                            <input type="email" class="form-control" id="email_address_2"
                                                name="email_address_2" placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="address">Address</label>
                                            <input type="email" class="form-control" id="address" name="address"
                                                placeholder="Enter Address">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="state">State</label>
                                            <input type="email" class="form-control" id="state" name="state"
                                                placeholder="Enter State">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="city">City</label>
                                            <input type="email" class="form-control" id="city" name="city"
                                                placeholder="Enter City">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="pincode">Pincode</label>
                                            <input type="email" class="form-control" id="pincode" name="pincode"
                                                placeholder="Enter Pincode">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="bank_account_number">Bank Account Number</label>
                                            <input type="email" class="form-control" id="bank_account_number"
                                                name="bank_account_number" placeholder="Enter Bank Account Number">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="ifsc_code">IFSC Code</label>
                                            <input type="email" class="form-control" id="ifsc_code" name="ifsc_code"
                                                placeholder="Enter IFSC Code">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="bank_name">Bank Name</label>
                                            <input type="email" class="form-control" id="bank_name" name="bank_name"
                                                placeholder="Enter Bank Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="branch_code">Branch Code</label>
                                            <input type="email" class="form-control" id="branch_code" name="branch_code"
                                                placeholder="Enter Branch Code">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="gst_number">GST Number</label>
                                            <input type="email" class="form-control" id="gst_number" name="gst_number"
                                                placeholder="Enter GST Number">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="other_description">Other Description</label>
                                            <input type="email" class="form-control" id="other_description"
                                                name="other_description" placeholder="Enter Other Description">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="previous_balance">Previous Balance</label>
                                            <input type="email" class="form-control" id="previous_balance"
                                                name="previous_balance" placeholder="Enter Previous Balance">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="advance_balance">Advance Balance</label>
                                            <input type="email" class="form-control" id="advance_balance"
                                                name="advance_balance" placeholder="Enter Advance Balance">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="psp_vle_id">PSP VLE ID</label>
                                            <input type="email" class="form-control" id="psp_vle_id" name="psp_vle_id"
                                                placeholder="Enter PSP VLE ID">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="cin">CIN</label>
                                            <input type="email" class="form-control" id="cin" name="cin"
                                                placeholder="Enter CIN">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="fees_received">Fees Received</label>
                                            <input type="email" class="form-control" id="fees_received"
                                                name="fees_received" placeholder="Enter Fees Received">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="branch_code">Branch Code</label>
                                            <input type="email" class="form-control" id="branch_code" name="branch_code"
                                                placeholder="Enter Branch Code">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="gst_number">GST Number</label>
                                            <input type="email" class="form-control" id="gst_number" name="gst_number"
                                                placeholder="Enter GST Number">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group d-block col-md-3">
                                            <label for="taxation_allows" class="float-left p-2">Taxation</label>
                                            <div class="d-block">
                                                <select name="taxation_allows[]" multiple
                                                    class="form-control taxation_allows w-100 h-100"
                                                    id="taxation_allows">
                                                    <option value="GST">GST</option>
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
                                            <label for="otherServices_allows" class="float-left p-2">Other
                                                Services</label>
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
                                                    <!-- <option value="PSP Coupon Consumption">PSP Coupon Consumption</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group d-none col-md-3" id="dsc_companyDIV">
                                            <label for="dsc_company" class="float-left p-2">DSC Company <span
                                                    style="color: red;" class="pl-1">*</span></label>
                                            <div class="d-block">
                                                <select name="dsc_company[]" multiple
                                                    class="form-control dsc_company w-100" id="dsc_company">
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary" id="save_client_recode"
                                            name="save_client_recode">Save</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
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


    <script>
        $(document).ready(function() {
            // Handle form submission
            $('#save_client_recode').click(function(){
                // alert("Yes");
                var recipient_name=$('#recipient_name').val();
                var company_name=$('#company_name').val();
                var contact_person=$('#contact_person').val();
                var mobile_number=$('#mobile_number').val();
                var pan_number=$('#pan_number').val();
                var landline_number=$('#landline_number').val();
                var email_1=$('#email_1').val();
                var password=$('#password').val();
                var email_2=$('#email_2').val();
                var email_address_1=$('#email_address_1').val();
                var email_address_2=$('#email_address_2').val();
                var address=$('#address').val();
                var state=$('#state').val();
                var city=$('#city').val();
                var pincode=$('#pincode').val();
                var bank_account_number=$('#bank_account_number').val();
                var ifsc_code=$('#ifsc_code').val();
                var bank_name=$('#bank_name').val();
                var branch_code=$('#branch_code').val();
                var gst_number=$('#gst_number').val();
                var other_description=$('#other_description').val();
                var previous_balance=$('#previous_balance').val();
                var advance_balance=$('#advance_balance').val();
                var psp_vle_id=$('#psp_vle_id').val();
                var cin=$('#cin').val();
                var fees_received=$('#fees_received').val();
                var taxation_allows=$('#taxation_allows').val();
                var nsdl_allows=$('#nsdl_allows').val();
                var dsc_allows=$('#dsc_allows').val();
                var otherServices_allows=$('#otherServices_allows').val();
                var uti_allows=$('#uti_allows').val();
                var dsc_company=$('#dsc_company').val();
                // alert(dsc_allows);
                $.ajax({
                    url:"html/data_insert.php",
                    method:"post",
                    data : {
                        recipient_name: recipient_name,
                        company_name: company_name,
                        contact_person: contact_person,
                        mobile_number: mobile_number,
                        pan_number: pan_number,
                        landline_number: landline_number,
                        email_1: email_1,
                        password: password,
                        email_2: email_2,
                        email_address_1: email_address_1,
                        email_address_2: email_address_2,
                        address: address,
                        state: state,
                        city: city,
                        pincode: pincode,
                        bank_account_number: bank_account_number,
                        ifsc_code: ifsc_code,
                        bank_name: bank_name,
                        branch_code: branch_code,
                        gst_number: gst_number,
                        other_description: other_description,
                        previous_balance: previous_balance,
                        advance_balance: advance_balance,
                        psp_vle_id: psp_vle_id,
                        cin: cin,
                        fees_received: fees_received,
                        taxation_allows: taxation_allows,
                        nsdl_allows: nsdl_allows,
                        dsc_allows: dsc_allows,
                        otherServices_allows: otherServices_allows,
                        uti_allows: uti_allows,
                        dsc_company: dsc_company
                        },
                    dataType:"text",
                    success:function(data){
                        if(data=="Done"){
                            alert("Added");
                            $('#save_client_recode').prop('disabled', false);
                        
                            // Reset form fields
                            // $('input[type="text"]').val('');
                            // $('select').val('');
                            $('#form_id')[0].reset();
                            // $('#uti_allows').val('');
                            // $('#otherServices_allows').val([]);
                            // $('#otherServices_allows option:selected').prop('selected', false);
                            // $('#otherServices_allows option:selected').each(function() {
                            //     $(this).prop('selected', false);
                            // });
                            var originalSelect = $('#otherServices_allows');
                            var newSelect = originalSelect.clone();
                            originalSelect.replaceWith(newSelect);
                            
                        }else{
                            alert("Error");
                            // Command: toastr["success"]("Have fun storming the castle!")

                            // toastr.options = {
                            // "closeButton": true,
                            // "debug": false,
                            // "newestOnTop": false,
                            // "progressBar": true,
                            // "positionClass": "toast-top-right",
                            // "preventDuplicates": false,
                            // "onclick": null,
                            // "showDuration": "300",
                            // "hideDuration": "1000",
                            // "timeOut": "5000",
                            // "extendedTimeOut": "1000",
                            // "showEasing": "swing",
                            // "hideEasing": "linear",
                            // "showMethod": "fadeIn",
                            // "hideMethod": "fadeOut"
                            // }
                        }

                    }
                });
            });
        });
    </script>

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
<script src="assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
<script src="assets/plugins/moment/moment.js"></script>
<script src="assets/plugins/datatables/js/jquery.datatables.min.js"></script>
<script src="assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/js/modern.min.js"></script>
<script src="assets/js/pages/table-data.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/js/pages/form-select2.js"></script>
<script src="assets/js/pages/notifications.js"></script>


</html>
