<?php

if(isset($_GET['email']))
{
if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/",$_GET['email'])) {
    echo "error";
}
    
}
?>