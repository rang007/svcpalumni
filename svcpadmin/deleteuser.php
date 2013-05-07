<?php

    $uid=$_GET["uid"];
    
        require_once 'database/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
        

$result = mysql_query("DELETE FROM user_table WHERE user_id='$uid'");
if($result)
{
        $no=1;
        $result = mysql_query("SELECT *FROM user_table ORDER by user_id DESC");
        echo '<table width=50% border=1 background=transperent>';
        while ($row = mysql_fetch_array($result)) {
             echo '<tr>
                <td>'.$no.'&nbsp;)</td>
                    <td>'.$row['user_first_name'].'&nbsp;'.$row['user_last_name'].'</td>';
            
            if($row['user_approved_status']==0){  
                echo'<td halign=middle><a href=# onclick=approveUser('.$row['user_id'].')>Approve</a></td>
                    <td valign=middle><a href=# onclick=deleteUser('.$row['user_id'].')>Delete</a></td>
                    </tr>';
            } 
            else{
                echo'<td valign=middle><a href=#></a></td>
                    <td valign=middle><a href=# onclick=deleteUser('.$row['user_id'].')>Delete</a></td>
                     </tr>';
            }
                
            $no++;
          }
          echo '</table>';
    
}
else{
    echo'Delete';
}

?>

