<?php
session_start();
if (isset($_POST['adminname']) && isset($_POST['password'])) {
    require_once 'database/db_connect.php';
    $uid = $_POST['adminname'];
    $pass = $_POST['password'];
    // connecting to db
    $db = new DB_CONNECT();

    $result = mysql_query("SELECT *FROM admin_table WHERE admin_login_name ='$uid' and admin_password = '$pass'");
    if (mysql_num_rows($result) == 1) {
        $row = mysql_fetch_array($result);
        $_SESSION['name']=$row['admin_name'];
        $_SESSION['email'] = $row['admin_email'];
        $_SESSION['mobno'] = $row['admin_mobile_no'];
        $_SESSION['address'] = $row['admin_address'];
        $_SESSION['college'] = $row['admin_college_name'];
        $_SESSION['dept'] = $row['admin_department'];
        $_SESSION['user_id'] = $row['admin_id'];
        $_SESSION['SVCPadmin_id']= $row['admin_id'];       
        header("Location: index2.php");
             
    }else{
        header("Location: index.php?loginmsg=Error Try Again !");
    }
}  else {
         header("Location: index.php?loginmsg=Error Try Again !");
   }
?>
