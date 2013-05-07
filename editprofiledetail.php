<?php
session_start();
$uid= $_SESSION['svcpuser_id'];
if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['gender']) && isset($_POST['email']) &&  isset($_POST['mob_no']) && isset($_POST['address']) && isset($_POST['branch']) && isset($_POST['passing_year']) && isset($_POST['current_employer']) && isset($_POST['current_possition']) && isset($_POST['birth_day']) && isset($_POST['birth_month']) && isset($_POST['birth_year'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mob_no = $_POST['mob_no'];
    $address = $_POST['address'];
    $branch = $_POST['branch'];
    $passing_year = $_POST['passing_year'];
    $current_employee = $_POST['current_employer'];
    $current_possition = $_POST['current_possition'];
    
    $birth_day = $_POST['birth_day'];
    $birth_month = $_POST['birth_month'];
    $birth_year = $_POST['birth_year'];


    require_once 'inputoutput/db_connect.php';
    // connecting to db
    $db = new DB_CONNECT();
    
    //"update user_table set user_profile_image='$path' WHERE user_id='$uid'
    $result = mysql_query(
            "UPDATE user_table SET
            user_first_name='$first_name',
            user_last_name='$last_name', 
            user_gender='$gender', 
            user_birth_day='$birth_day',
            user_birth_month='$birth_month',
            user_birth_year='$birth_year',
            user_mobile_no='$mob_no',
            user_address='$address', 
            user_email='$email', 
            user_branch_name='$branch', 
            user_passing_year='$passing_year',
            user_current_employer='$current_employee', 
            user_current_possition='$current_possition' 
            WHERE user_id='$uid'");
    
    $result5 = mysql_query("update blog_table set author_name='$first_name' WHERE user_id='$uid'");
    $result4 = mysql_query("update comment_table set user_name='$first_name' WHERE user_id='$uid'");
    
    $result2 = mysql_query("SELECT *FROM user_table WHERE user_id='$uid'");
    if (mysql_num_rows($result2) == 1) {
        $row = mysql_fetch_array($result2);


//            header("Location: index.php?loginmsg=Login Successfull&user_name=" . $row['user_first_name'] . "&user_id=" . $row['user_id']);
//            exit();
        $bday= $row['user_birth_day'].'-'.$row['user_birth_month'].'-'.$row['user_birth_year'];
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
    
    }      
               
    
// check if row inserted or not
    if ($result) {

        //echo 'Record Inserted';
        $message = "Registration Successful and please login with this ID  " . $login_name . " and password " . $password;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers = $headers . "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        $headers = $headers . "From: svcpalumnisite@gmail.com";
        $subject = "SVCP Alumni Registration successful";
        if (mail($email, $subject, $message, $headers)) {
            header("Location: Profile.php?profilemsg=Profile updated Successfully");
            exit();
        } else {
            header("Location: Profile.php?profilemsg=Profile updated Successfully");
            exit();
        }



        header("Location: Profile.php?profilemsg=Profile updated Successfully");
            exit();
    } else {

        header("Location: Profile.php?profilemsg=Profile not updated Try Again !");
            exit();// failed to insert row
    }
} else {
     header("Location: Profile.php?profilemsg=Profile not updated Try Again !");
       exit();
}
?>

