<?php

$day = $_GET['day'];
$month=$_GET['month'];
$year=$_GET['year'];
$time=$_GET['time'];
$detail=$_GET['detail'];
$eid=$_GET['eid'];

//echo $day.'<br>';
//echo $month.'<br>';
//echo $year.'<br>';
//echo $time.'<br>';
//echo $detail.'<br>';
//echo $eid.'<br>';
require_once 'database/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
        $result = mysql_query(
        "INSERT INTO schedule_table(
            event_id, 
            schedule_day,
            schedule_month,
            schedule_year,
            time,
            schedule_detail
            ) 
            VALUES(
                '$eid', 
                '$day',    
                '$month',
                '$year',
                '$time',
                '$detail'
               )");
if($result)
{
    echo'Schedule added Successfully !!!';
}
?>