<?php
// include('link_sr.php');
session_start();
include('../connection.php');

if (isset($_POST['loginUserBtn'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $fetchAdminSQL = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '" . sha1($password) . "'";
        $runAdmin = mysqli_query($con, $fetchAdminSQL);
        $rows = mysqli_num_rows($runAdmin);
        $userdata = mysqli_fetch_array($runAdmin);

        $fetchClientSQL = "SELECT * FROM `client_master` WHERE `email_1` = '$username' AND `password` = '$password'";
        $runClient = mysqli_query($con, $fetchClientSQL);
        $rowsClient = mysqli_num_rows($runClient);
        $clientdata = mysqli_fetch_array($runClient);

        if ($rows > 0) {
            if ($userdata['user_status'] != '0') {
                $msg = "You Can't Login without Approve Your Company by Admin!";
                $class = "alert alert-danger";
                $_SESSION['user_type'] = 'system_user';
                $_SESSION['login_type'] = $userdata['type'];
                if ($userdata['user_type'] == 'company') {
                    $fetchCompanyApprove = "SELECT * FROM `company_profile` WHERE `email_id` = '" . $_POST['username'] . "'";
                    $runApprovedSQL = mysqli_query($con, $fetchCompanyApprove);
                    $rowsApproved = mysqli_num_rows($runApprovedSQL);
                    $ApprovedData = mysqli_fetch_array($runApprovedSQL);
                    if ($ApprovedData['approved'] != '1') {
                        $msg = "You Can't Login without Approve Your Company by Admin!";
                        $class = "alert alert-danger";
                    } else if ($ApprovedData['approved'] == '1') {
                        if (!empty($_POST['user_remember'])) {
                            setcookie("login_VowelUser", $_POST['username'], time() + (10 * 365 * 24 * 60 * 60));
                            setcookie("password_VowelUser", $_POST['password'], time() + (10 * 365 * 24 * 60 * 60));
                            //echo "user_remember";
                        } else {
                            if (isset($_COOKIE['login_VowelUser'])) {
                                setcookie("login_VowelUser", "");
                            }
                            if (isset($_COOKIE['password_VowelUser'])) {
                                setcookie("password_VowelUser", "");
                            }
                            //echo "Not user_remember";
                        }
                        $_SESSION['user_id'] = $userdata['id'];
                        //$_SESSION['user_email'] = $userdata['username'];
                        if ($userdata['firstname'] == "") {
                            $_SESSION['username'] = $userdata['username'];
                        } else {
                            $_SESSION['username'] = $userdata['firstname'];
                        }
                        if ($userdata['admin_status'] == "") {
                            $_SESSION['admin_status'] = "0";
                        } else {
                            $_SESSION['admin_status'] = $userdata['admin_status'];
                        }

                        $_SESSION['company_id'] = $userdata['company_id'];
                        $_SESSION['verified'] = $userdata['verified'];
                        if (isset($_SESSION['user_id'])) {
                            $fetch_company_data = "SELECT * FROM `company_profile` WHERE `user_id` = '" . $_SESSION['user_id'] . "'";
                            $run_fetch_company_data = mysqli_query($con, $fetch_company_data);
                            $row = mysqli_fetch_array($run_fetch_company_data);
                            //$_SESSION['company_id'] = $row['id'];

                            $fetch_user_data = "SELECT * FROM `users` WHERE `id` = '" . $_SESSION['user_id'] . "'";
                            $run_fetch_user_data = mysqli_query($con, $fetch_user_data);
                            $row = mysqli_fetch_array($run_fetch_user_data);
                            if ($row['reports']) {
                                $_SESSION['page'] = "reports";
                            } else if ($row['client_master']) {
                                $_SESSION['page'] = "client_master";
                            } else if ($row['dsc_subscriber']) {
                                $_SESSION['page'] = "dsc_subscriber";
                            } else if ($row['dsc_reseller']) {
                                $_SESSION['page'] = "dsc_reseller";
                            } else if ($row['tax_invoice']) {
                                $_SESSION['page'] = "tax_invoice";
                            } else if ($row['pan']) {
                                $_SESSION['page'] = "pan";
                            } else if ($row['tan']) {
                                $_SESSION['page'] = "tan";
                            } else if ($row['it_returns']) {
                                $_SESSION['page'] = "it_returns";
                            } else if ($row['e_tds']) {
                                $_SESSION['page'] = "e_tds";
                            } else if ($row['gst']) {
                                $_SESSION['page'] = "gst";
                            } else if ($row['other_services']) {
                                $_SESSION['page'] = "other_services";
                            } else if ($row['psp']) {
                                $_SESSION['page'] = "psp";
                            } else if ($row['psp_coupon_consumption']) {
                                $_SESSION['page'] = "psp_coupon_consumption";
                            } else if ($row['payment']) {
                                $_SESSION['page'] = "payment";
                            } else if ($row['e_tender']) {
                                $_SESSION['page'] = "e_tender";
                            } else if ($row['tender']) {
                                $_SESSION['page'] = "tender";
                            }
                        }
                        //echo $_SESSION['page'];
                        //$array = array('data' => 'Valid User', 'page' => $_SESSION['page']);
                        //echo json_encode($array);
                        header("Location: Dashboard");
                        // echo "Meet";
                        exit();
                    }
                } else {
                    //$fetchAdminSQL = "SELECT * FROM `users` WHERE `username` = '".$_POST['username']."' AND `password` = '".sha1($_POST['password'])."'";
                    //$runAdmin = mysqli_query($con,$fetchAdminSQL);
                    //$rows = mysqli_num_rows($runAdmin);
                    //echo '<span class="text-danger">Username Already Exists..!</span>';

                    if (!empty($_POST['user_remember'])) {
                        setcookie("login_VowelUser", $_POST['username'], time() + (10 * 365 * 24 * 60 * 60));
                        setcookie("password_VowelUser", $_POST['password'], time() + (10 * 365 * 24 * 60 * 60));
                        //echo "user_remember";
                    } else {
                        if (isset($_COOKIE['login_VowelUser'])) {
                            setcookie("login_VowelUser", "");
                        }
                        if (isset($_COOKIE['password_VowelUser'])) {
                            setcookie("password_VowelUser", "");
                        }
                        //echo "Not user_remember";
                    }
                    $_SESSION['user_id'] = $userdata['id'];
                    if ($userdata['firstname'] == "") {
                        $_SESSION['username'] = $userdata['username'];
                    } else {
                        $_SESSION['username'] = $userdata['firstname'];
                    }
                    if ($userdata['admin_status'] == "") {
                        $_SESSION['admin_status'] = "0";
                    } else {
                        $_SESSION['admin_status'] = $userdata['admin_status'];
                    }

                    $_SESSION['company_id'] = $userdata['company_id'];
                    $_SESSION['verified'] = $userdata['verified'];
                    if (isset($_SESSION['user_id'])) {
                        $fetch_company_data = "SELECT * FROM `company_profile` WHERE `user_id` = '" . $_SESSION['user_id'] . "'";
                        $run_fetch_company_data = mysqli_query($con, $fetch_company_data);
                        $row = mysqli_fetch_array($run_fetch_company_data);
                        //$_SESSION['company_id'] = $row['id'];

                        $fetch_user_data = "SELECT * FROM `users` WHERE `id` = '" . $_SESSION['user_id'] . "'";
                        $run_fetch_user_data = mysqli_query($con, $fetch_user_data);
                        $row = mysqli_fetch_array($run_fetch_user_data);
                        if ($row['reports']) {
                            $_SESSION['page'] = "reports";
                        } else if ($row['client_master']) {
                            $_SESSION['page'] = "client_master";
                        } else if ($row['dsc_subscriber']) {
                            $_SESSION['page'] = "dsc_subscriber";
                        } else if ($row['dsc_reseller']) {
                            $_SESSION['page'] = "dsc_reseller";
                        } else if ($row['pan']) {
                            $_SESSION['page'] = "pan";
                        } else if ($row['tan']) {
                            $_SESSION['page'] = "tan";
                        } else if ($row['it_returns']) {
                            $_SESSION['page'] = "it_returns";
                        } else if ($row['tax_invoice']) {
                            $_SESSION['page'] = "tax_invoice";
                        } else if ($row['e_tds']) {
                            $_SESSION['page'] = "e_tds";
                        } else if ($row['gst']) {
                            $_SESSION['page'] = "gst";
                        } else if ($row['other_services']) {
                            $_SESSION['page'] = "other_services";
                        } else if ($row['psp']) {
                            $_SESSION['page'] = "psp";
                        } else if ($row['psp_coupon_consumption']) {
                            $_SESSION['page'] = "psp_coupon_consumption";
                        } else if ($row['payment']) {
                            $_SESSION['page'] = "payment";
                        } else if ($row['e_tender']) {
                            $_SESSION['page'] = "e_tender";
                        } else if ($row['tender']) {
                            $_SESSION['page'] = "tender";
                        }
                    }
                    //echo $_SESSION['page'];
                    //$array = array('data' => 'Valid User', 'page' => $_SESSION['page']);
                    //echo json_encode($array);
                    header("Location: Dashboard");
                    exit();
                    //}
                } //Simpale User End Block
            }
        } else if ($rowsClient > 0) {
            $tempLoginPushed = false;
            if ($tempLoginPushed == false) {
                $_SESSION['user_type'] = 'client_user';
                if (!empty($_POST['user_remember'])) {
                    setcookie("login_VowelUser", $_POST['username'], time() + (10 * 365 * 24 * 60 * 60));
                    setcookie("password_VowelUser", $_POST['password'], time() + (10 * 365 * 24 * 60 * 60));
                    //echo "user_remember";
                } else {
                    if (isset($_COOKIE['login_VowelUser'])) {
                        setcookie("login_VowelUser", "");
                    }
                    if (isset($_COOKIE['password_VowelUser'])) {
                        setcookie("password_VowelUser", "");
                    }
                    //echo "Not user_remember";
                }
                $_SESSION['user_id'] = $clientdata['id'];
                if ($clientdata['client_name'] == "") {
                    $_SESSION['username'] = $clientdata['email_1'];
                } else {
                    $_SESSION['username'] = $clientdata['client_name'];
                }
                /*if ($clientdata['admin_status'] == "") {
                    $_SESSION['admin_status'] = "0";
                }else{
                    $_SESSION['admin_status'] = $clientdata['admin_status'];
                }*/
                $_SESSION['company_id'] = $clientdata['company_id'];
                $_SESSION['service_id'] = $clientdata['transaction_id'];

                if ($rowsClient['reports']) {
                    $_SESSION['page'] = "reports";
                } else if ($rowsClient['client_master']) {
                    $_SESSION['page'] = "client_master";
                } else if ($rowsClient['dsc_subscriber']) {
                    $_SESSION['page'] = "dsc_subscriber";
                } else if ($rowsClient['dsc_reseller']) {
                    $_SESSION['page'] = "dsc_reseller";
                } else if ($rowsClient['tax_invoice']) {
                    $_SESSION['page'] = "tax_invoice";
                } else if ($rowsClient['pan']) {
                    $_SESSION['page'] = "pan";
                } else if ($rowsClient['tan']) {
                    $_SESSION['page'] = "tan";
                } else if ($rowsClient['it_returns']) {
                    $_SESSION['page'] = "it_returns";
                } else if ($rowsClient['e_tds']) {
                    $_SESSION['page'] = "e_tds";
                } else if ($rowsClient['gst']) {
                    $_SESSION['page'] = "gst";
                } else if ($rowsClient['other_services']) {
                    $_SESSION['page'] = "other_services";
                } else if ($rowsClient['psp']) {
                    $_SESSION['page'] = "psp";
                } else if ($rowsClient['psp_coupon_consumption']) {
                    $_SESSION['page'] = "psp_coupon_consumption";
                } else if ($rowsClient['payment']) {
                    $_SESSION['page'] = "payment";
                } else if ($rowsClient['tender']) {
                    $_SESSION['page'] = "tender";
                } else if ($rowsClient['e_tender']) {
                    $_SESSION['page'] = "e_tender";
                }
                header("Location: Dashboard");
                exit();
            } else {
                $msg = "Client login is in under maintenance";
                $class = "alert alert-danger";
            }
        } else {
            //echo "Invalid User";
            //$array = array('data' => 'Invalid User');
            //echo json_encode($array);
         echo   $msg = "Invalid Username or Password";
          echo  $class = "alert alert-danger";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <!-- Title -->
    <title>Modern | Login - Sign in</title>

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
    <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
    <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />

    <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
    <!-- Styles -->

</head>

<body class="page-login">
    <main class="page-content">
        <div class="page-inner">
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-3 center">
                        <div class="login-box">
                            <a href="index.html" class="logo-name text-lg text-center">Modern</a>
                            <p class="text-center m-t-md">Please login into your account.</p>
                            <form class="m-t-md" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="username" placeholder="Email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        required>
                                </div>
                                <button type="submit" name="loginUserBtn" id="loginUserBtn"
                                    class="btn btn-success btn-block">Loginfvhcvxh</button>
                                <a href="forgot.html" class="display-block text-center m-t-md text-sm">Forgot
                                    Password?</a>
                                <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                <a href="register.html" class="btn btn-default btn-block m-t-md">Create an account</a>
                            </form>
                            <p class="text-center m-t-xs text-sm">2015 &copy; Modern by Steelcoders.</p>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
        </div><!-- Page Inner -->
    </main><!-- Page Content -->





</body>

</html>