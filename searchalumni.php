<?php
$search_value=$_GET['search_word'];
       require_once 'inputoutput/db_connect.php';
        // connecting to db
       $db = new DB_CONNECT();
       
       
       $result = mysql_query("SELECT *FROM user_table where user_first_name LIKE '$search_value%' OR user_last_name LIKE '%$search_value%' OR user_passing_year LIKE  '$search_value' OR user_current_possition LIKE  '%$search_value%' OR user_branch_name LIKE  '%$search_value%' OR user_current_employer LIKE  '%$search_value%' OR user_gender LIKE  '$search_value'");
             while ($row = mysql_fetch_array($result)) {
                 
                 $image=$row['user_profile_image'];
                 if($row['user_profile_image']=="" || $row['user_profile_image']=="invalid"){
                     $image="profileimages/blankprofile.png";
                   }
               
                   echo  '<li> 
                            <table class="searchusertable">
                            <tr>
                                <td><img src='.$image.' height=100 width=100/></td>
                                <td>
                                <table width= 500px>
                                <tr><td>'.$row['user_first_name'].'&nbsp;'.$row['user_last_name'].'</td></tr>
                                <tr><td>Email :- '.$row['user_email'].'</td></tr>
                                <tr><td>Contact No.'.$row['user_mobile_no'].'</td></tr>
                                <tr><td>'.$row['user_current_possition'].'&nbsp;@&nbsp;'.$row['user_current_employer'].'</td></tr>      
                                </table>
                                </td>    
                               </tr>       
                             </table>
                        </li>';
                 
                 
             }

?>
