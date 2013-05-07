<?php
session_start();
$blogid = $_GET['blogid'];
require_once 'database/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
        $no=1;
        $result = mysql_query("SELECT *FROM blog_table where blog_id = '$blogid'");
        $row=  mysql_fetch_array($result);
        echo'<table border="2" width="100%" class="showblogtable">'; 
        //while ($row = mysql_fetch_array($result)) {
       
            echo '<tr>   
                <td>                                     
                    <h3>' .$row['author_name'].'s Bloggs</h3><br>
                    <h2>'.$row['blog_title'].'</h2><br>';    
                    if($row['blog_detail']==" " || $row['blog_detail']=="" && $row['blog_title']=="")
                    {
                        echo'<div style ="float:left; padding-right:10px;"></div>';
                    }else{
                     echo'<div style ="float:left; padding-right:10px;"></div>
                    <p>&ldquo; '.$row['blog_detail'].' &rdquo;</p>';
                     
                    }
                echo'</td>   
            </tr>
            </table>                                    
            <table class="showcommenttable">
            <tr>
                <td>
                    <h3>Comments:</h3>
                    
                    <div id=comments'.$row['blog_id'].'>';
                      echo' <table class="fixed">';
                      $result1 = mysql_query("SELECT *FROM comment_table where blog_id = '$blogid'");
                      while ($row2 = mysql_fetch_array($result1)) {
                       echo'<tr>
                            <td><h3>'.$row2['user_name'].'  </h3></td>
                            <td></td>
                            <td class="fixed" valign="top" >'.$row2['com_detail'].'</td>
                            </tr>';
                      }
                      echo '</table>
                    </div>
              </td>      
            </tr>';
    echo '</table>';
?>
