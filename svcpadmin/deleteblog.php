<?php

    $blogid = $_GET['blogid'];
    //echo $eid;
        require_once 'database/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
        
    
        $result1 = mysql_query("DELETE FROM comment_table WHERE blog_id ='$blogid'");

    $result = mysql_query("DELETE FROM blog_table WHERE blog_id ='$blogid'");
    if($result){
        
        header("Location: Blogs.php?blogdeletemsg=Blog Deleted !!!");
    }else{
         header("Location: Blogs.php?blogdeletemsg=Error try again !!!");
    }
?>
