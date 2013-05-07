<?php
session_start();
echo '<html xmlns="http://www.w3.org/1999/xhtml">';
echo '<head>';
   include_once 'master/Header.php';  
echo '</head>';

echo '<body>';
  
echo '<div id="main">';   
echo '<div id="header">';
        $current="gallery"; 
        include 'master/Banner.php';
        include 'master/Menubar.php';
        include 'master/Contact_Icon.php';
echo '</div>';
    
echo '<div id="site_content">';
 include 'master/Sidebar.php';
 if(!isset($_SESSION['user_name']) && !isset($_SESSION['svcpuser_id']))
{
   echo'<div id="content">
        <div class="content_item">
            <br><br><h1>Please login First !!!</h1>
        </div>
        </div>';
}else{
 include 'datamodule/Gallery_Content.php';
}
include 'master/Likebox.php';
echo '</div>';    

    include 'master/Footer.php';

echo '</body>';
echo '</html>'; 

?>

