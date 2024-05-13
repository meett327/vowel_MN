<?php
// session_start();

?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.5/css/all.min.css">
        <script src="https://kit.fontawesome.com/d3dd33a66d.js" crossorigin="anonymous"></script>
    <div class="page-sidebar sidebar">
        <div class="page-sidebar-inner slimscroll">
            <div class="sidebar-header">
                <div class="sidebar-profile">
                    <a href="javascript:void(0);" id="profile-menu-link">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/profile-menu-image.png" class="img-circle img-responsive" alt="">
                        </div>
                        <div class="sidebar-profile-details">
                            <span>
                                <?php echo $_SESSION['username']; ?><br><small>Art Director</small>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <ul class="menu accordion-menu">
                <li class="active"><a href="index.html" class="waves-effect waves-button"><span
                            class="menu-icon glyphicon glyphicon-home"></span>
                        <p>Dashboard</p>
                    </a></li>
                <!-- <li><a href="profile.html" class="waves-effect waves-button"><span
                            class="menu-icon glyphicon glyphicon-user"></span>
                        <p>Profile</p>
                    </a></li> -->
                <?php
if ($_SESSION['user_type'] == 'system_user') {
    // echo "In If Condirtion";
    $fetch_user_data_2 = "SELECT * FROM users WHERE company_id = '" . $_SESSION['company_id'] . "' AND id = '" . $_SESSION['user_id'] . "'";
    $run_fetch_user_data_2 = mysqli_query($con, $fetch_user_data_2);
    $row_2 = mysqli_fetch_array($run_fetch_user_data_2);
    if ($row_2['client_master'] == "1") {
        ?>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                                    class="menu-icon glyphicon glyphicon-envelope"></span>
                                <p>Master</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="client_master"><i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp;&nbsp;Recipient Master</a></li>
                                <li><a href="inbox-alt.html"><i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp;&nbsp;Supplier Master</a></li>
                            </ul>
                        </li>


                        <?php
}
    if ($row_2['gst'] == "1" || $row_2['it_returns'] == "1" || $row_2['audit'] == "1") {?>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                                    class="menu-icon glyphicon glyphicon-flash"></span>
                                <p>Recepient Station</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="droplink"><a href="#"><p><i class="fa-solid fa-building "></i>&nbsp;&nbsp;&nbsp;
                                        Taxation</p><span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="droplink"><a href="#"><p><i class="fa-solid fa-chart-simple"></i>&nbsp;&nbsp;&nbsp;
                                                GST</p><span class="arrow"></span>
                                            </a>
                                            <!-- <li><a href="#">GST Return</a></li> -->
                                            <ul class="sub-menu">
                                                <li><a href="#"><i class="fas fa-file-invoice-dollar"></i>&nbsp;&nbsp;&nbsp;GST Return</a></li>
                                                <li><a href="#"><i class="fas fa-file-invoice-dollar"></i>&nbsp;&nbsp;&nbsp;GST Fees</a></li>
                                            </ul>
                                        <li><a href="#"><i class="fas fa-file-contract"></i>&nbsp;&nbsp;&nbsp;It-Return</a></li>
                                        <li><a href="#"><i class="fas fa-clipboard-check"></i>&nbsp;&nbsp;&nbsp;Audit</a></li>
                                        </li>
                                    </ul>

                                </li>

                        <li class="droplink"><a href="#"> <p><i class="fas fa-file-alt"></i>&nbsp;&nbsp;&nbsp;
                               TIN/PAN</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="droplink"><a href="#"> <p><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;
                                       NSDL</p><span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="#"><i class="fas fa-id-card"></i>&nbsp;&nbsp;&nbsp;PAN</a></li>
                                        <li><a href="#"><i class="fas fa-address-card"></i>&nbsp;&nbsp;&nbsp;TAN</a></li>
                                        <li><a href="#"><i class="fas fa-file-invoice"></i>&nbsp;&nbsp;&nbsp;e-TDS</a></li>
                                        <li><a href="#"><i class="fas fa-file-alt"></i>&nbsp;&nbsp;&nbsp;Audit</a></li>
                                    </ul>
                                <li><a href="#"><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;UTI</a></li>
                            </ul>
                        <li class="droplink"><a href="#"><p><i class="fas fa-file-signature"></i>&nbsp;&nbsp;&nbsp;
                                DSC</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;DSC Applicant</a></li>
                                <li><a href="#"><i class="fas fa-handshake"></i>&nbsp;&nbsp;&nbsp;DSC Partner</a></li>
                                <li><a href="#"><i class="fas fa-credit-card"></i>&nbsp;&nbsp;&nbsp;DSC Token</a></li>
                                <!-- <li><a href="#"></a></li> -->
                                <li class="droplink"><a href="#"><p><i class="fas fa-box"></i>&nbsp;&nbsp;&nbsp;
                                        Inventory</p><span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="#"><i class="fas fa-shopping-basket"></i>&nbsp;&nbsp;&nbsp;Procured Stock</a></li>
                                        <li><a href="#"><i class="fas fa-cubes"></i>&nbsp;&nbsp;&nbsp;DSC Inventory</a></li>
                                        <li><a href="#"><i class="fas fa-exchange"></i>&nbsp;&nbsp;&nbsp;Exchange</a></li>
                                    </ul>
                                </li>
                            </ul>
                        <li><a href="#"><i class="fas fa-briefcase"></i>&nbsp;&nbsp;&nbsp;Other Services</a></li>
                        <li><a href="#"><i class="fas fa-file-contract"></i>&nbsp;&nbsp;&nbsp;E-Tender</a></li>
                        </li>
                    </ul>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                                    class="menu-icon glyphicon glyphicon-envelope"></span>
                                <p>Supplier Station</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="client_master"><i class="fas fa-file-contract"></i>&nbsp;&nbsp;&nbsp;Services Received</a></li>
                                <!-- <li><a href="inbox-alt.html">Supplier Master</a></li> -->
                            </ul>
                        </li>

                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                                    class="menu-icon glyphicon glyphicon-envelope"></span>
                                <p>Document Records</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="client_master"><i class="fas fa-file-invoice"></i>&nbsp;&nbsp;&nbsp;Tax Invoice</a></li>
                                <li><a href="client_master"><i class="fas fa-file-invoice"></i>&nbsp;&nbsp;&nbsp;Drawee</a></li>
                                <li><a href="client_master"><i class="fas fa-file-invoice"></i>&nbsp;&nbsp;&nbsp;Retail Invoice</a></li>
                                <li><a href="client_master"><i class="fas fa-file-invoice"></i>&nbsp;&nbsp;&nbsp;Credit Note</a></li>
                                <li><a href="client_master"><i class="fas fa-file-invoice"></i>&nbsp;&nbsp;&nbsp;Debit Note</a></li>
                                <li><a href="client_master"><i class="fas fa-file-invoice"></i>&nbsp;&nbsp;&nbsp;Purchase Order</a></li>
                                <li><a href="client_master"><i class="fas fa-file-invoice"></i>&nbsp;&nbsp;&nbsp;Quotation</a></li>
                                <!-- <li><a href="inbox-alt.html">Supplier Master</a></li> -->
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                                    class="menu-icon glyphicon glyphicon-envelope"></span>
                                <p>Financial Records</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="client_master"><i class="fas fa-money-check-alt"></i>&nbsp;&nbsp;&nbsp;Payment Received</a></li>
                                <li><a href="client_master"><i class="fas fa-tasks"></i>&nbsp;&nbsp;&nbsp;Service Settlement</a></li>
                                <li><a href="client_master"><i class="fas fa-file-invoice-dollar"></i>&nbsp;&nbsp;&nbsp;Expense</a></li>
                                <li><a href="client_master"><i class="fas fa-exchange-alt"></i>&nbsp;&nbsp;&nbsp;Contra Voucher</a></li>
                                <li><a href="client_master"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;&nbsp;Outstanding</a></li>
                                <!-- <li><a href="client_master">Purchase Order</a></li>
                                <li><a href="client_master">Quotation</a></li> -->
                                <!-- <li><a href="inbox-alt.html">Supplier Master</a></li> -->
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                                    class="menu-icon glyphicon glyphicon-envelope"></span>
                                <p>Task Manager</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="client_master"><i class="fa-solid fa-clipboard"></i>&nbsp;&nbsp;&nbsp;Home</a></li>
                                <li><a href="client_master"><i class="fas fa-clipboard-check"></i>&nbsp;&nbsp;&nbsp;OTO-Task</a></li>
                                <li><a href="client_master"><i class="fas fa-comments"></i>&nbsp;&nbsp;&nbsp;Group</a></li>
                                <!-- <li><a href="client_master">Contra Voucher</a></li>
                                <li><a href="client_master">Outstanding</a></li> -->
                                <!-- <li><a href="client_master">Purchase Order</a></li>
                                <li><a href="client_master">Quotation</a></li> -->
                                <!-- <li><a href="inbox-alt.html">Supplier Master</a></li> -->
                            </ul>
                        </li>

                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                                    class="menu-icon glyphicon glyphicon-envelope"></span>
                                <p>Report</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="client_master"><i class="fas fa-file-invoice-dollar"></i>&nbsp;&nbsp;&nbsp;Service Report</a></li>
                                <li><a href="client_master"><i class="fas fa-chart-line"></i>&nbsp;&nbsp;&nbsp;Bank Report</a></li>
                                <!-- <li><a href="client_master">Group</a></li> -->
                                <!-- <li><a href="client_master">Contra Voucher</a></li>
                                <li><a href="client_master">Outstanding</a></li> -->
                                <!-- <li><a href="client_master">Purchase Order</a></li>
                                <li><a href="client_master">Quotation</a></li> -->
                                <!-- <li><a href="inbox-alt.html">Supplier Master</a></li> -->
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                                    class="menu-icon glyphicon glyphicon-envelope"></span>
                                <p>Payroll</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="client_master"><i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;Employee</a></li>
                                <li><a href="client_master"><i class="fas fa-calendar-check"></i>&nbsp;&nbsp;&nbsp;Attendence</a></li>
                                <li><a href="client_master"><i class="fas fa-money-bill"></i>&nbsp;&nbsp;&nbsp;Salary</a></li>
                                <li><a href="client_master"><i class="fas fa-cog"></i>&nbsp;&nbsp;&nbsp;Setting</a></li>
                                <!-- <li><a href="client_master">Group</a></li> -->
                                <!-- <li><a href="client_master">Contra Voucher</a></li>
                                <li><a href="client_master">Outstanding</a></li> -->
                                <!-- <li><a href="client_master">Purchase Order</a></li>
                                <li><a href="client_master">Quotation</a></li> -->
                                <!-- <li><a href="inbox-alt.html">Supplier Master</a></li> -->
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                                    class="menu-icon glyphicon glyphicon-envelope"></span>
                                <p>Trading Station</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="client_master"><i class="fas fa-chart-pie"></i>&nbsp;&nbsp;&nbsp;Sales</a></li>
                                <li><a href="client_master"><i class="fas fa-shopping-bag"></i>&nbsp;&nbsp;&nbsp;Purchase</a></li>
                                <!-- <li><a href="client_master">Salary</a></li>
                                <li><a href="client_master">Setting</a></li> -->
                                <!-- <li><a href="client_master">Group</a></li> -->
                                <!-- <li><a href="client_master">Contra Voucher</a></li>
                                <li><a href="client_master">Outstanding</a></li> -->
                                <!-- <li><a href="client_master">Purchase Order</a></li>
                                <li><a href="client_master">Quotation</a></li> -->
                                <!-- <li><a href="inbox-alt.html">Supplier Master</a></li> -->
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                                    class="menu-icon glyphicon glyphicon-envelope"></span>
                                <p>Pocket Apps</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="client_master"><i class="fas fa-unlock"></i>&nbsp;&nbsp;&nbsp;Password Manager</a></li>
                                <!-- <li><a href="client_master">Purchase</a></li> -->
                                <!-- <li><a href="client_master">Salary</a></li>
                                <li><a href="client_master">Setting</a></li> -->
                                <!-- <li><a href="client_master">Group</a></li> -->
                                <!-- <li><a href="client_master">Contra Voucher</a></li>
                                <li><a href="client_master">Outstanding</a></li> -->
                                <!-- <li><a href="client_master">Purchase Order</a></li>
                                <li><a href="client_master">Quotation</a></li> -->
                                <!-- <li><a href="inbox-alt.html">Supplier Master</a></li> -->
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                                    class="menu-icon glyphicon glyphicon-envelope"></span>
                                <p>Tickets</p><span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                            <li><a href="client_master"><i class="fas fa-users"></i><i class="fas fa-comment"></i>&nbsp;&nbsp;&nbsp;Fresh Chats</a></li>
                                <li><a href="client_master"><i class="fas fa-comments"></i>&nbsp;&nbsp;&nbsp;Replied Chats</a></li>
                                <!-- <li><a href="client_master">Salary</a></li>
                                <li><a href="client_master">Setting</a></li> -->
                                <!-- <li><a href="client_master">Group</a></li> -->
                                <!-- <li><a href="client_master">Contra Voucher</a></li>
                                <li><a href="client_master">Outstanding</a></li> -->
                                <!-- <li><a href="client_master">Purchase Order</a></li>
                                <li><a href="client_master">Quotation</a></li> -->
                                <!-- <li><a href="inbox-alt.html">Supplier Master</a></li> -->
                            </ul>
                        </li>
                        <?php
}
} else {
    ?>
                    <?php
}
?>


            <!-- </ul> -->
        </div><!-- Page Sidebar Inner -->
    </div><!-- Page Sidebar -->
    <script src="../../assetsplugins/jquery/jquery-2.1.4.min.js"></script>
    <script src="../../assetsplugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="../../assetsplugins/pace-master/pace.min.js"></script>
    <script src="../../assetsplugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="../../assetsplugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assetsplugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../../assetsplugins/switchery/switchery.min.js"></script>
    <script src="../../assetsplugins/uniform/jquery.uniform.min.js"></script>
    <script src="../../assetsplugins/offcanvasmenueffects/js/classie.js"></script>
    <script src="../../assetsplugins/offcanvasmenueffects/js/main.js"></script>
    <script src="../../assetsplugins/waves/waves.min.js"></script>
    <script src="../../assetsplugins/3d-bold-navigation/js/main.js"></script>
    <script src="../../assetsplugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="../../assetsplugins/jquery-counterup/jquery.counterup.min.js"></script>
    <script src="../../assetsplugins/toastr/toastr.min.js"></script>
    <script src="../../assetsplugins/flot/jquery.flot.min.js"></script>
    <script src="../../assetsplugins/flot/jquery.flot.time.min.js"></script>
    <script src="../../assetsplugins/flot/jquery.flot.symbol.min.js"></script>
    <script src="../../assetsplugins/flot/jquery.flot.resize.min.js"></script>
    <script src="../../assetsplugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../../assetsplugins/curvedlines/curvedLines.js"></script>
    <script src="../../assetsplugins/metrojs/MetroJs.min.js"></script>
    <script src="../../assetsjs/modern.js"></script>
    <script src="../../assetsjs/pages/dashboard.js"></script>