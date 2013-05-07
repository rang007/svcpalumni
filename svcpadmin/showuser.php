<?php

    $q=$_GET["q"];
    

    //all users
    if($q=="1")
    {
    require_once 'database/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
        $no=1;
        $result = mysql_query("SELECT *FROM user_table ORDER by user_id DESC");
        echo '<table width=50% border=1 background=transperent>
            <tr><th>Sr.No.</th><th>Name </th><th></th><th>Current Status</th></tr>';
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
                echo'<td valign=middle></td>
                    <td valign=middle><a href=# onclick=deleteUser('.$row['user_id'].')>Delete</a></td>
                     </tr>';
            }
                
            $no++;
          }
          echo '</table>';
    }
    
    //new users
    if($q=="2")
    {
    require_once 'database/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
        $no=1;
        $result = mysql_query("SELECT *FROM user_table where user_approved_status = 0");
        if(mysql_num_rows($result)<1)
        {
            echo 'New users not found';
            exit();
        }
        echo '<table width=50% border=1>
            <tr><th>Sr.No.</th><th>Name </th><th>Current Status</th><th></th></tr>';
        
        while ($row = mysql_fetch_array($result)) {
            echo '<tr>
                <td>'.$no.'&nbsp;)</td>
                    <td>'.$row['user_first_name'].'&nbsp;'.$row['user_last_name'].'</td>
                    <td halign=middle><a href=# onclick=approveUser('.$row['user_id'].')>Approve</a></td>
                    <td valign=middle><a href=# onclick=deleteUser('.$row['user_id'].')>Delete</a></td>
                </tr>';
            $no++;
          }
          echo '</table>';
    }
    //approved users
    if($q=="3")
    {
        require_once 'database/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
        $no=1;
        $result = mysql_query("SELECT *FROM user_table where user_approved_status = 1 ORDER by user_id DESC");
        echo '<table width=50% border=1>
            <tr><th>Sr.No.</th><th>Name </th><th>Current Status</th></tr>';
        while ($row = mysql_fetch_array($result)) {
            echo '<tr>
                <td>'.$no.'&nbsp;)</td>
                    <td valign=middle>'.$row['user_first_name'].'&nbsp;'.$row['user_last_name'].'</td>
                    <td valign=middle><a href=# onclick=deleteUser('.$row['user_id'].')>Delete</a></td>
                </tr>';
            $no++;
          }
          echo '</table>';
    
        
    }
    ?>
