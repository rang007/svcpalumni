<?php
session_start();
$result=0;
$row=0;
//$title= $_POST['title'];
//    $detail=$_POST['detail'];
//    $sday=$_POST['start_day'];
//    $smonth=$_POST['start_month'];
//    $syear=$_POST['start_year'];
//    $eday=$_POST['end_day'];
//    $emonth=$_POST['end_month'];
//    $eyear=$_POST['end_year'];
//    $stime=$_POST['start_time'];
//    $etime=$_POST['end_time'];
//    $place=$_POST['place'];
    
//$_SESSION['eid']="";

if(isset($_POST['title'])&& isset($_POST['detail']) && isset($_POST['start_day'])&& isset($_POST['start_month'])&& isset($_POST['start_year'])&& isset($_POST['end_day'])&& isset($_POST['end_month'])&& isset($_POST['end_year'])&& isset($_POST['place'])){
    
    $title= $_POST['title'];
    $detail=$_POST['detail'];
    $sday=$_POST['start_day'];
    $smonth=$_POST['start_month'];
    $syear=$_POST['start_year'];
    $eday=$_POST['end_day'];
    $emonth=$_POST['end_month'];
    $eyear=$_POST['end_year'];
    $stime=$_POST['start_time'];
    $etime=$_POST['end_time'];
    $place=$_POST['place'];
    $adminid=$_SESSION['user_id'];
    $gen_id=$title+ rand(1, 999);
    require_once 'database/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
        $result = mysql_query(
        "INSERT INTO event_table(
            admin_id, 
            start_day,
            start_month,    
            start_year,
            start_time,
            end_day, 
            end_month, 
            end_year, 
            end_time,
            event_title,
            event_detail,
            place,
            event_generated_id
            ) 
            VALUES(
                '$adminid', 
                '$sday',    
                '$smonth',
                '$syear',
                '$stime',
                '$eday',
                '$emonth',
                '$eyear',
                '$etime',
                '$title',
                '$detail',
                '$place',
                '$gen_id'   
               )");
if($result)
{
    $result=  mysql_query("SELECT event_id FROM event_table WHERE event_generated_id='$gen_id'");
    $row= mysql_fetch_array($result);
        $eid=$row['event_id'];
    
    $_SESSION['eid']=$eid;
    header("Location: Schedule.php?eventname=".$title."&event_id=".$eid);
    exit();
}else{
   echo $result;
}
    
}

?>
