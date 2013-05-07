<?php
$search_value=$_GET['search_word'];
       require_once 'database/db_connect.php';
        // connecting to db
       $db = new DB_CONNECT();
       
       $no=1;
       $result = mysql_query("SELECT *FROM user_table where user_passing_year LIKE  '$search_value' ");
       echo'<center><h1>Passing Year : <b>'.$search_value.'</b></h1>';
       echo'<table width=100% border=1 background=transperent>
            <tr><th>Sr.No.</th><th>Name </th><th>Contact No</th><th>E-mail</th><th> Branch</th> <th> passing year</th></tr>';
        while ($row = mysql_fetch_array($result)) {
             echo '<tr>
                        <td>'.$no.'</td>
                        <td align=center>'.$row['user_first_name'].'&nbsp;'.$row['user_last_name'].'</td>
                        <td align=center>'.$row['user_mobile_no'].'</td>
                        <td align=center>'.$row['user_email'].'</td>
                        <td align=center>'.$row['user_branch_name'].'</td>
                        <td align=center>'.$row['user_passing_year'].'</td>    
                   </tr>';
             $no++;
          }
          echo '</table>';
  ?>
