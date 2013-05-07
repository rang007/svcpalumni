<?php

    $eid = $_GET['eid'];
    echo $eid;
        require_once 'database/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
        
    //
        $result1 = mysql_query("DELETE FROM schedule_table WHERE event_id ='$eid'");

    $result = mysql_query("DELETE FROM event_table WHERE event_id ='$eid'");
    if($result){
        //echo"Event Deleted !!!";
        //echo $result;
      
        header("Location: Events.php?eventdeletemsg=Event Deleted !!!");
    }else{
         header("Location: Events.php?eventdeletemsg=Error try again !!!");
    }
?>
