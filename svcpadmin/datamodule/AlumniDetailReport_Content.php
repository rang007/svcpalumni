<!--<div id="content">-->

    <div class="content_item">
        <h2>Alumni Detail Report &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Reports.php">Back</a></h2>
    </div>

    <!--<div class="content_item">-->


<?php
        require_once 'database/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
        $no=1;
        $result = mysql_query("SELECT *FROM user_table ORDER by user_id DESC");
        echo '<table width="100%" border="1px">
            <tr><th>Sr.No.</th><th>Name </th><th>date Of Birth</th><th>Contact No.</th><th>Email</th><th>Address</th><th>Branch</th><th>Passing Year</th><th>Current Employer</th><th>Current Possition</th></tr>';
        while ($row = mysql_fetch_array($result)) {
                $birthdate= $row['user_birth_day'].'-'.$row['user_birth_month'].'-'.$row['user_birth_year'];
                echo '<tr>
                <td>'.$no.'&nbsp;)</td>
                    <td>'.$row['user_first_name'].'&nbsp;'.$row['user_last_name'].'</td>
                    <td>'.$birthdate.'</td>
                    <td>'.$row['user_mobile_no'].'</td>
                    <td>'.$row['user_email'].'</td>
                    <td>'.$row['user_address'].'</td>
                    <td>'.$row['user_branch_name'].'</td>
                    <td>'.$row['user_passing_year'].'</td>
                    
                    <td>'.$row['user_current_employer'].'</td>
                    <td>'.$row['user_current_possition'].'</td></tr>
                    

                    ';
            $no++;
          }
          echo '</table>';
    ?>
    <!--</div>-->
<!--</div>-->