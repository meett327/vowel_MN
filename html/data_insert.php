<?php
include 'connection.php';
session_start();
// Process the form data and insert into the database
if (isset($_POST['recipient_name'])) {
    // Collect and sanitize the form data
    $recipient_name = $_POST['recipient_name'];
    $company_name = $_POST['company_name'];
    $contact_person = $_POST['contact_person'];
    $mobile_number = $_POST['mobile_number'];
    $pan_number = $_POST['pan_number'];
    $landline_number = $_POST['landline_number'];
    $email_1 = $_POST['email_1'];
    $password = $_POST['password'];
    $email_2 = $_POST['email_2'];
    $email_address_1 = $_POST['email_address_1'];
    $email_address_2 = $_POST['email_address_2'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $bank_account_number = $_POST['bank_account_number'];
    $ifsc_code = $_POST['ifsc_code'];
    $bank_name = $_POST['bank_name'];
    $branch_code = $_POST['branch_code'];
    $gst_number = $_POST['gst_number'];
    $other_description = $_POST['other_description'];
    $previous_balance = $_POST['previous_balance'];
    $advance_balance = $_POST['advance_balance'];
    $psp_vle_id = $_POST['psp_vle_id'];
    $cin = $_POST['cin'];
    $fees_received = $_POST['fees_received'];
    $taxation_allows = $_POST['taxation_allows'];
    $nsdl_allows = $_POST['nsdl_allows'];
    $dsc_allows = $_POST['dsc_allows'];
    $otherServices_allows = $_POST['otherServices_allows'];
    $uti_allows = $_POST['uti_allows'];
    if (isset($_POST['dsc_company'])) {
        // $dsc_company = implode(',', $_POST['dsc_company']);
    } else {
        $dsc_company = '';
    }
    $dsc_subscriber = 0;
    $dsc_reseller = 0;
    $pan = 0;
    $tan = 0;
    $it_returns = 0;
    $e_tds = 0;
    $twenty4g = 0;
    $gst = 0;
    $other_services = 0;
    $trading = 0;
    $psp = 0;
    $psp_coupon_consumption = 0;
    $audit = 0;

    if (isset($_POST['dsc_allows'])) {
        foreach ($_POST['dsc_allows'] as $key => $value) {
            if ($_POST['dsc_allows'][$key] == "DSC Applicant") {
                $dsc_subscriber = 1;
            }
            if ($_POST['dsc_allows'][$key] == "DSC Partner") {
                $dsc_reseller = 1;
            }
        }
    }
    if (isset($_POST['nsdl_allows'])) {
        foreach ($_POST['nsdl_allows'] as $key => $value) {
            if ($_POST['nsdl_allows'][$key] == "PAN") {
                $pan = 1;
            }
            if ($_POST['nsdl_allows'][$key] == "TAN") {
                $tan = 1;
            }
            if ($_POST['nsdl_allows'][$key] == "e-TDS") {
                $e_tds = 1;
            }
            if ($_POST['nsdl_allows'][$key] == "24G") {
                $twenty4g = 1;
            }
        }
    }
    if (isset($_POST['taxation_allows'])) {
        foreach ($_POST['taxation_allows'] as $key => $value) {
            if ($_POST['taxation_allows'][$key] == "IT Returns") {
                $it_returns = 1;
            }
            if ($_POST['taxation_allows'][$key] == "GST") {
                $gst = 1;
            }
            if ($_POST['taxation_allows'][$key] == "Audit") {
                $audit = 1;
            }
        }
    }
    if (isset($_POST['otherServices_allows'])) {
        foreach ($_POST['otherServices_allows'] as $key => $value) {
            if ($_POST['otherServices_allows'][$key] == "Other Services") {
                $other_services = 1;
            }
            if ($_POST['otherServices_allows'][$key] == "Trading") {
                $trading = 1;
            }
        }
    }
    if (isset($_POST['uti_allows'])) {
        foreach ($_POST['uti_allows'] as $key => $value) {
            if ($_POST['uti_allows'][$key] == "PSP") {
                $psp = 1;
            }
            /*if ($_POST['uti_allows'][$key] == "PSP Coupon Consumption") {
            $psp_coupon_consumption = 1;
            }*/
            //echo nl2br("\n".$_POST['transaction_allows'][$key]);
        }
    }
    $dsc_company = $_POST['dsc_company'];

    $gst_no = $_POST['gst_number'];
    if (!isset($_POST['gst'])) {
        // $gst = 0;
        //  $gst_no = '';
    } else {
        // $gst = $_POST['gst'];
    }

    if (!isset($_POST['previous_balance']) || empty($_POST['previous_balance'])) {
        $previous_balance = 0;
    } else {
        $previous_balance = $_POST['previous_balance'];
    }
    //$previous_balance = $_POST['previous_balance'];
    $advance_balance = $_POST['advance_balance'];
    if ($psp == 1) {
        //$psp = $_POST['psp'];
        $psp_vle_id = $_POST['psp_vle_id'];
    } else {
        //$psp = 0;
        $psp_vle_id = '';
    }

    if ($audit == 1) {
        $cin = $_POST['cin'];
    } else {
        $cin = '';
    }
    $fetchLastTransactionId = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = '" . $DBName . "' AND TABLE_NAME = 'client_master'";
	$run_fetchLastTransactionId = mysqli_query($con, $fetchLastTransactionId);
    $transaction_id = "VE_CLM_954";
    if (mysqli_num_rows($run_fetchLastTransactionId) > 0) {
        $FetchlastTransactionID_row = mysqli_fetch_array($run_fetchLastTransactionId);
        $transaction_id = "VE_CLM_" . ($FetchlastTransactionID_row['AUTO_INCREMENT'] * 954);
    }
    // "insert into client_master (company)";
    $insert_query = "INSERT INTO `client_master` (transaction_id, company_id, 
    client_name, company_name,
    contact_person, mobile_no, pan_no, landline_no, email_1,
    password, email_2, address, state, city, pincode, bank_account_no,
    ifsc_code, bank_name, branch_code, dsc_subscriber, dsc_reseller, pan,
    tan, it_returns,
    e_tds,24g, gst, other_services, trading, psp, psp_coupon_consumption,
    audit, gst_no, other_description, psp_vle_id, cin,
    previous_balance,advance_balance,
    dsc_reseller_company,modify_by,modify_date) VALUES
    ('" . $transaction_id . "', '" . $_SESSION['company_id'] . "',
    '" . $recipient_name . "','" . $company_name . "',
    '" . $contact_person . "','" . $mobile_number . "',
    '" . $pan_number . "','" . $landline_number . "',
    '" . $email_1 . "','" . $password . "','" . $email_2 . "',
    '" . $address . "','" . $state . "','" . $city . "',
    '" . $pincode . "','" . $bank_account_number . "','" . $ifsc_code . "',
    '" . $bank_name . "','" . $branch_code . "','" . $dsc_subscriber . "',
    '" . $dsc_reseller . "','" . $pan . "','" . $tan . "',
    '" . $it_returns . "','" . $e_tds . "','" . $twenty4g . "',
    '" . $gst_number . "','" . $other_services . "','" . $trading . "',
    '" . $psp . "','" . $psp_coupon_consumption . "','" . $audit . "','" . $gst_no . "',
    '" . $other_description . "', '" . $psp_vle_id . "',
    '" . $cin . "','" . $previous_balance . "','" . $advance_balance . "','" . $dsc_company . "',
    '" . $_SESSION['username'] . "','" . date('Y-m-d H:i:sa') . "')";

    $run_client_add = mysqli_query($con, $insert_query);
    if($run_client_add){
        echo "Done";
    }else{
        echo "Error";
    }
}
