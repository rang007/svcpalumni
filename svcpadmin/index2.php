<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if(isset($_SESSION['SVCPadmin_id']))
{
echo '<html xmlns="http://www.w3.org/1999/xhtml">';
echo '<head>';
   include_once 'master/Header.php';  
echo '</head>';

echo '<body>';
  
echo '<div id="main">';   
echo '<div id="header">';
        $current="index2"; 
        include 'master/Banner.php';
        include 'master/Menubar.php';
        include 'master/Contact_Icon.php';
echo '</div>';
    
echo '<div id="site_content">';
    include 'master/Sidebar.php'; 

 include 'datamodule/Index_Content_2.php';
 
 include 'master/Likebox.php';
echo '</div>';    

    include 'master/Footer.php';

echo '</body>';
echo '</html>'; 
}else{
    
    echo 'Your are not authorized person';

    
}
?>


