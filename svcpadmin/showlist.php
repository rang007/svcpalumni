<?php 
   $eid = $_GET['eid'];
    require_once 'database/db_connect.php';
// connecting to db
    $db = new DB_CONNECT();
        $result = mysql_query("SELECT *FROM event_register_table where event_id = '$eid'");
        //$row=  mysql_fetch_array($result);
       echo '<table width="100%" border=1>
                <tr><th>Sr. No. <th> Name </th><th> Contact No.</th> <th> E-mail </th> <th> Branch </th> <th> Passing year </th></tr>';
            $cntr=1;    
        while ($row = mysql_fetch_array($result)) {
            
            $uid = $row['user_id'];
            $result2 = mysql_query("SELECT *FROM user_table where user_id = '$uid'");
            $row2=  mysql_fetch_array($result2);
            echo'<tr><td  align="center">'.$cntr.'</td><td  align="center">'.$row2['user_first_name'].'&nbsp;'.$row2['user_last_name'].'</td><td  align="center">'.$row2['user_mobile_no'].'</td><td  align="center">'.$row2['user_email'].'</td><td  align="center">'.$row2['user_branch_name'].'</td><td align="center">'.$row2['user_passing_year'].'</td></tr>';           
              $cntr++;
        }
        echo '</table>';
        
        
        
        ?>
