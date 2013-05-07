<?php
    $newsid = $_GET['newsid'];
  require_once 'inputoutput/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
        $no=1;
        $result = mysql_query("SELECT *FROM news_table where news_id = '$newsid'");
        $row=  mysql_fetch_array($result);
        echo'<table border=2 width="100%" class="showblogtable">'; 
        
            echo '<tr>   
                <td>                                     
                    <h2>&nbsp;&nbsp;'.$row['news_title'].'</h2><br>    
                    
                    <div style ="float:left; padding-right:10px;">
                    <p>&ldquo; '.$row['news_detail'].' &rdquo;</p>
                </td>   
            </tr>
            </table>';                                    
            
?>