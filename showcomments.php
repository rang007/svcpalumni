<?php
session_start();
$username = $_SESSION['user_name'];
$userimage = $_SESSION['profile_image'];
$userid = $_SESSION['user_id']; 
$blogid = $_GET['blogid'];
$comment= $_GET['comment'];

   require_once 'inputoutput/db_connect.php';
// connecting to db
    $db = new DB_CONNECT();

    $result = mysql_query(
            "INSERT INTO comment_table(
            com_detail, 
            blog_id,
            user_id,
            user_image,
            user_name
            ) 
            VALUES(
                '$comment', 
                '$blogid',    
                '$userid', 
                '$userimage',
                '$username'     
            )");


// check if row inserted or not
    if ($result) {
                 echo' <table class="fixed">';
                      $result1 = mysql_query("SELECT *FROM comment_table where blog_id = '$blogid'");
                      while ($row = mysql_fetch_array($result1)) {
                        echo' <tr>
                            <td><img src="'.$row['user_image'].'" height="50" width="50"/>  <h3>'.$row['user_name'].'  </h3></td>
                            <td>:</td>
                            <td class="fixed">'.$row['com_detail'].'</td></tr>';
                      }
                      echo '</table>
                          





<h3>Post your comment : </h3>
                    
                    &nbsp;<textarea name="" id="comid'.$blogid.'" cols="60" rows="2" maxlength=100></textarea> &nbsp;<a href="#" onclick=postcomment(1,'.$blogid.')> <input type="button" value="POST"></a></input>
                ';     
    }else{
        echo'Error in posting comment ';
    }
?>