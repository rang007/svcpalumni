<?php

if (isset($_POST['adminname']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['mobno']) && isset($_POST['address']) && isset($_POST['department']) && isset($_POST['college_name'])){
$login_name = $_POST['adminname'] . rand(1, 9999);
$password = $_POST['password'];
$name = $_POST['adminname'];
$email = $_POST['email'];
$mobno = $_POST['mobno'];
$address = $_POST['address'];
$department = $_POST['department'];
$college_name = $_POST['college_name'];
if($password=="" && $name=="")
{
    
        header("Location: AdminRegister.php?registermsg=Name and Password should not empty !");
        exit();
}






require_once 'database/db_connect.php';
// connecting to db
$db = new DB_CONNECT();

$result = mysql_query(
        "INSERT INTO admin_table(
            admin_login_name, 
            admin_password,
            admin_name,
            admin_mobile_no,
            admin_address, 
            admin_email, 
            admin_department, 
            admin_college_name) 
            VALUES(
                '$login_name', 
                '$password',    
                '$name',
                '$mobno',
                '$address',
                '$email',
                '$department',
                '$college_name'   
               )");
if($result)
{
    //echo 'Record Inserted';
        $message = "Administer Registration Successful and please login with this ID  " . $login_name . " and password " . $password;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers = $headers . "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        $headers = $headers . "From: svcpalumnisite@gmail.com";
        $subject = "SVCP Alumni Registration successful";
        if (mail($email, $subject, $message, $headers)) {
            header("Location: index2.php?registermsg=Registration Successfull");
            //exit();
        } else {
            header("Location: index2.php?registermsg=Registration Successfull");
            //exit();
        }



        header("Location: index2.php?registermsg=Registration Successfull");
            //exit();
}else{
        header("Location: AdminRegister.php?registermsg=Error try again !");
}
}else{
           header("Location: AdminRegister.php?registermsg=Error try again !");
    }
?>
