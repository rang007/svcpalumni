<?php
session_start();
if (isset($_SESSION['svcpuser_name'])&& isset($_SESSION['svcpuser_id']) && isset($_SESSION['svcpuser_id'])) {
    $username = $_SESSION['svcpuser_name'];
    $uid = $_SESSION['svcpuser_id'];
    $lastname = $_SESSION['svcplastname'];
    $gender = $_SESSION['svcpgender'];
    $email = $_SESSION['svcpemail'];
    $bday = $_SESSION['svcpbirth_date'];
    $mobno = $_SESSION['svcpmobile_no'];
    $address = $_SESSION['svcpaddress'];
    $branch = $_SESSION['svcpbranch'];
    $pass_year = $_SESSION['svcppass_year'];
    $current_emp = $_SESSION['svcpcurrent_employer'];
    $current_pos = $_SESSION['svcpcurrent_possition'];
    $approved_status = $_SESSION['svcpapproved_status'];
    $image = $_SESSION['svcpprofile_image'];
}
echo '<html xmlns="http://www.w3.org/1999/xhtml">';
echo '<head>';
   include_once 'master/Header.php';  
echo '</head>';

echo '<body>';
  
echo '<div id="main">';   
echo '<div id="header">';
        $current="profile"; 
        include 'master/Banner.php';
        include 'master/Menubar.php';
        include 'master/Contact_Icon.php';
echo '</div>';
    
echo '<div id="site_content">';
 include 'master/Sidebar.php';
if(isset($_SESSION['svcpuser_name']) && isset($_SESSION['svcpuser_id']))
{
    include 'datamodule/Profile_Content.php';
}
else{
   echo '<br><br><h1>You are not logged in.<br>To see your Profile Log in first !!!</h1>'; 
 }
 include 'master/Likebox.php';
 

echo '</div>';    

    include 'master/Footer.php';

echo '</body>';
echo '</html>'; 

?>

