<?php

$uid = $_GET['uid'];
$eid = $_GET['eid'];

require_once 'inputoutput/db_connect.php';
// connecting to db
$db = new DB_CONNECT();
$result = mysql_query("SELECT * FROM event_register_table WHERE user_id='$uid' AND event_id='$eid'");
//echo $result;
$row = mysql_num_rows($result);
//echo $row;
if ($row == 0) {
    $result2 = mysql_query("INSERT INTO event_register_table(event_id, user_id) VALUES('$eid','$uid')");
    if ($result2) {
        echo'Your registration is successful. Thank You !!!';
    } else {
        echo'Error try again !!!';
    }
} else {
    echo'you are already registered !!!';
    
}
?>