<?php
session_start();
if (isset($_POST['login_id']) && isset($_POST['password'])) {
    $uid = $_POST['login_id'];
    $pass = $_POST['password'];
    require_once 'inputoutput/db_connect.php';
    // connecting to db
    $db = new DB_CONNECT();
    
    $result1 = mysql_query("SELECT *FROM user_table WHERE user_login_name ='$uid' and password = '$pass' and user_approved_status=0");
    if (mysql_num_rows($result1) == 1) {
     
       header("Location: index.php?loginmsg=Your currently not approved by admin please wait for approval");
       exit();
    }
    $result = mysql_query("SELECT *FROM user_table WHERE user_login_name ='$uid' and password = '$pass' and user_approved_status=1");
    if (mysql_num_rows($result) == 1) {
        $row = mysql_fetch_array($result);


//            header("Location: index.php?loginmsg=Login Successfull&user_name=" . $row['user_first_name'] . "&user_id=" . $row['user_id']);
//            exit();
        $bday= $row['user_birth_day'].'-'.$row['user_birth_month'].'-'.$row['user_birth_year'];
        $_SESSION['user_name']=$row['user_first_name'];
        $_SESSION['lastname'] = $row['user_last_name'];
        $_SESSION['gender'] = $row['user_gender'];
        $_SESSION['birth_date'] = $bday;
        $_SESSION['mobile_no'] = $row['user_mobile_no'];
        $_SESSION['address'] = $row['user_address'];
        $_SESSION['branch'] = $row['user_branch_name'];
        $_SESSION['pass_year'] = $row['user_passing_year'];
        $_SESSION['current_employer'] = $row['user_current_employer'];
        $_SESSION['current_possition'] = $row['user_current_possition'];
        $_SESSION['approved_status'] = $row['user_approved_status'];
        $_SESSION['profile_image']=$row['user_profile_image'];
        $_SESSION['email']= $row['user_email'];
        $_SESSION['login_name']=$row['user_login_name'];
        $_SESSION['user_id']= $row['user_id'];
        $_SESSION['birth_day']=$row['user_birth_day'];
        $_SESSION['birth_month']=$row['user_birth_month'];
        $_SESSION['birth_year']=$row['user_birth_year'];
        
        $_SESSION['svcpuser_name']=$row['user_first_name'];
        $_SESSION['svcplastname'] = $row['user_last_name'];
        $_SESSION['svcpgender'] = $row['user_gender'];
        $_SESSION['svcpbirth_date'] = $bday;
        $_SESSION['svcpmobile_no'] = $row['user_mobile_no'];
        $_SESSION['svcpaddress'] = $row['user_address'];
        $_SESSION['svcpbranch'] = $row['user_branch_name'];
        $_SESSION['svcppass_year'] = $row['user_passing_year'];
        $_SESSION['svcpcurrent_employer'] = $row['user_current_employer'];
        $_SESSION['svcpcurrent_possition'] = $row['user_current_possition'];
        $_SESSION['svcpapproved_status'] = $row['user_approved_status'];
        $_SESSION['svcpprofile_image']=$row['user_profile_image'];
        $_SESSION['svcpemail']= $row['user_email'];
        $_SESSION['svcplogin_name']=$row['user_login_name'];
        $_SESSION['svcpuser_id']= $row['user_id'];
        $_SESSION['svcpbirth_day']=$row['user_birth_day'];
        $_SESSION['svcpbirth_month']=$row['user_birth_month'];
        $_SESSION['svcpbirth_year']=$row['user_birth_year'];
        $_SESSION['svcpuser_id']= $row['user_id'];
        
        
        
        
        
        
        $email = $row['user_email'];
        $message = "you successfully logged in !!!";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers = $headers . "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        $headers = $headers . "From: svcpalumnisite@gmail.com";
        $subject = "SVCP Alumni login";
        //if (mail($email, $subject, $message, $headers)) {
            //header("Location: index.php?loginmsg=Login Successfull&user_name=" . $row['user_first_name'] . "&user_id=" . $row['user_id']);
            //exit();
        //} else {
             header("Location: index.php?loginmsg=");
            exit();
           // echo 'mail not sent';
        //}
    } else {
         header("Location: index.php?loginmsg=Enter correct login name and password");
            exit();
            
               }
} else {

    header("Location: index.php?loginmsg=Error Try Again!");
    exit();
}
?>