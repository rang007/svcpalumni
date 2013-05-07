<?php
session_start();
if (isset($_POST['news_title']) && isset($_POST['news_detail']) && isset($_SESSION['user_id']) && isset($_SESSION['name']) )
{
    $title = $_POST['news_title'];
    $news_deatil = $_POST['news_detail'];
    
    $admin_name =$_SESSION['name']; 
    $user_id = $_SESSION['user_id'];
   
    require_once 'database/db_connect.php';
// connecting to db
    $db = new DB_CONNECT();

    $result = mysql_query(
            "INSERT INTO news_table(
            news_title, 
            news_detail,
            admin_id,
            admin_name
            ) 
            VALUES(
                '$title', 
                '$news_deatil',    
                '$user_id', 
                '$admin_name'
             )");


// check if row inserted or not
    if ($result) {
        
//        //Send news through email
//        $message = $news_deatil;
//        $headers = "MIME-Version: 1.0" . "\r\n";
//        $headers = $headers . "Content-type: text/html; charset=iso-8859-1" . "\r\n";
//        $headers = $headers . "From: svcpalumnisite@gmail.com";
//        $subject = "SVCP Alumni News";
//       
//        if (mail($email, $subject, $message, $headers)) {
//            header("Location: index.php?registermsg=Registration Successfull&login_name=".$login_name."&msg=".$path);
//            //exit();
//        } else {
//            header("Location: index.php?registermsg=Registration Successfull&login_name=".$login_name."&msg=".$path);
//            //exit();
//        }

        header("Location: News.php?createnewsmsg=News created !!!");
        exit();
        
    } else {

        header("Location: News.php?createnewsmsg=Error Try Again !!!");
        exit();
    }
} else {
    
        header("Location: News.php?createnewsmsg=Error try Again !!!");
        exit();
}
?>

