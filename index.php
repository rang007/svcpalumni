<?php
session_start();
if(isset($_GET['registermsg']))
{	echo '<script> alert("'.$_GET['registermsg'].'")</script>';
    //$_SESSION['login_name'] = $_GET['login_name']; 
}


if(isset($_GET['loginmsg'])){
    $loginerror=$_GET['loginmsg'];
 }
 
echo '<html xmlns="http://www.w3.org/1999/xhtml">';
echo '<head>';
   include_once 'master/Header.php';  
echo '</head>';

echo '<body>';
echo '<div id="main">';   
echo '<div id="header">';
        $current="index"; 
        include 'master/Banner.php';
        include 'master/Menubar.php';
        include 'master/Contact_Icon.php';
echo '</div>';
    
echo '<div id="site_content">';
 include 'master/Sidebar.php'; 
 
 include 'datamodule/Index_Content.php';
 
 include 'master/Likebox.php';
echo '</div>';    

    include 'master/Footer.php';

echo '</body>';
echo '</html>'; 
 
     
 
?>

