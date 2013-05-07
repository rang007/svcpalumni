<?php

if(isset($_GET['mobno']))
{
   
if(!preg_match("/^[0-9]+$/",$_GET['mobno'])) {
    echo "error";
}else{
if (strlen($_GET['mobno'])< 10 ) {
    echo "Enter 10 digits mobile no.";
 }
}
}
?>