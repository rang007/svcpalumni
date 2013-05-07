<?php

if(isset($_GET['password']))
{
   if (strlen($_GET['password'])< 6 ) {
    echo "password must contain minimum 6 letters";
 }
if(!preg_match("/^[A-Za-z0-9]+$/",$_GET['password'])) {
    echo "error";
}
    
}
?>