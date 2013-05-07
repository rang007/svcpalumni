<?php

    $nid = $_GET['nid'];
    //echo $eid;
        require_once 'database/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
        
    
        $result = mysql_query("DELETE FROM news_table WHERE news_id ='$nid'");
        if($result){
           header("Location: News.php?newsdeletemsg=News Deleted !!!");
    }else{
         header("Location: News.php?newsdeletemsg=Error try again !!!");
    }
?>
