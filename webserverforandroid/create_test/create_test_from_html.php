<?php
session_start();
/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */
	
	// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['testname']) && isset($_POST['toq']) && isset($_POST['username'])) {
	$username = $_POST['username'];
	$testname = $_POST['testname'];
    $toq = $_POST['toq'];
    $uid = 1;
    //$_SESSION['test_name']= $_POST['testname'];
    // include db connect class
    require_once 'db_connect.php';
 
    // connecting to db
    $db = new DB_CONNECT();
 
    // mysql inserting a new row
    //$result = mysql_query("INSERT INTO test_table(user_id,test_name,toq,user_name) VALUES('$name', '$price', '$description')");
	
	$tempresult = mysql_query("SELECT *FROM test_table") or die(mysql_error());
    $cnt = mysql_num_rows($tempresult);    // looping through all results
    $cnt++;
	$testname= $cnt.":".$testname;
	//echo $testname;
    $_SESSION['test_name']= $testname;
	$_SESSION['user_name']= $_POST['username'];
    $result = mysql_query("INSERT INTO test_table(user_id,test_name,toq,user_name) VALUES('$uid', '$testname', '$toq','$username')");
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        //$response["success"] = 1;
        //$response["testcnt"] = $cnt;
		//$response["message"] = "Product successfully created.";
		header("Location: AddQuestion.php");
        // echoing JSON response
        //echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        
		$response["message"] = "Oops! An error occurred.";
 
        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>