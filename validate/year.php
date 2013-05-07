<?php

if(isset($_GET['byear']))
{
    if($_GET['byear']>1995){
        echo 'Invalid';
        exit();
    }
        if( $_GET['byear']<1965){
        echo 'Invalid';
        exit();    
        }
    
   if(!preg_match("/^[0-9]+$/",$_GET['byear'])) {
    echo "error";
 }
    if (strlen($_GET['byear'])< 4 ) {
    echo "Enter year in 4 digits (Eg.1990)";
 }
}
?>
