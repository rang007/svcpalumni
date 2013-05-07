<?php

if(isset($_GET['fname']))
{
if(!preg_match("/^[a-zA-Z]+$/",$_GET['fname'])) {
    echo "Invalid name";
}
    
}


?>
