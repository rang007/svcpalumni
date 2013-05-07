<?php
session_start();
if (isset($_SESSION['svcpuser_name']) && isset($_SESSION['svcpuser_id'])) {
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
    $bday = $_SESSION['svcpbirth_day'];
    $bmonth = $_SESSION['svcpbirth_month'];
    $byear = $_SESSION['svcpbirth_year'];
}


if(!isset($_SESSION['svcpuser_id']) && !isset($_SESSION['svcpuser_name'])){
    echo 'login first';
}else{
echo '<html xmlns="http://www.w3.org/1999/xhtml">';
echo '<head>';
include_once 'master/Header.php';
echo '</head>';

echo '<body>';

echo '<div id="main">';
echo '<div id="header">';
$current = "profile";
include 'master/Banner.php';
include 'master/Menubar.php';
include 'master/Contact_Icon.php';
echo '</div>';

echo '<div id="site_content">';
include 'master/Sidebar.php';
include 'datamodule/EditProfile_Content.php';
include 'master/Likebox.php';
echo '</div>';

include 'master/Footer.php';

echo '</body>';
echo '</html>';
}
?>

