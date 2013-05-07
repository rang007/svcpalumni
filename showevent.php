<?phpsession_start();
if(isset($_SESSION['user_id']) || isset($_SESSION['svcpuser_id'])){
$uid=$_SESSION['user_id'];
}
$eid = $_GET['eid'];
    require_once 'inputoutput/db_connect.php';
// connecting to db
    $db = new DB_CONNECT();
        $result = mysql_query("SELECT *FROM event_table where event_id = '$eid'");
        $row=  mysql_fetch_array($result);
        echo'<table class="showblogtable" width="100%">
        <tr><td>';        
        echo'<table><tr><td><h2>Event detail:<p> '.$row['event_detail'].'</p></h2></td></tr></table>';
        echo'<br><h2>Schedule :</h2>';
        echo'<table>'; 
      
        $result1 = mysql_query("SELECT * FROM schedule_table where event_id = '$eid'");
        $cntr=1;              
        while ($row2 = mysql_fetch_array($result1)) {
                       
                          $day = $row2['schedule_day'] ;
                          $year = $row2['schedule_year'];
                          $month = $row2['schedule_month'];
                          $time = $row2['time'];
                          $detail=$row2['schedule_detail'];
                          $date= $day."-".$month."-".$year."&nbsp;&nbsp;".$time;
                          echo' <tr><td><b>Schedule :'.$cntr.'</b></td><td></td></tr> 
                                    <td>Date & time :</td><td>'.$date.'</td></tr>
                                <tr>
                                    <td>Detail :</td><td>'.$detail.'</td></tr>';
                                 $cntr++;   
                      }
                      
       echo '</table></td></tr>';
       if(isset($_SESSION['svcpuser_id'])){
       echo'<tr><td>
           <a href="#" onclick="attend('.$uid.','. $eid .')"><input type="button" id="attend" value="REGISTER"></a></td></tr>
               </table>';
       }else{
           echo'<tr><td>
                       <b> Login to register this event!!!</b></td></tr>
               </table>';			}

?>
    