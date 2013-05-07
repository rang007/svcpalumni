<?php

/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */
 
 
// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['test_id']) && isset($_POST['qname1']) && isset($_POST['opt1']) && isset($_POST['opt2']) && isset($_POST['opt3']) && isset($_POST['opt4']) && isset($_POST['ans1']) && isset($_POST['ans2']) && isset($_POST['ans3']) && isset($_POST['ans4'])) {
 
    //$username = $_POST['username'];
	//$testname = $_POST['testname'];
    //$toq = $_POST['toq'];
    //$uid = $_POST['uid'];
					$test_id = $_POST['test_id'];
					$qname1 = $_POST['qname1'];
 				    $opt1 = $_POST['opt1'];
				    $opt2 = $_POST['opt2'];
				    $opt3 = $_POST['opt3'];
				    $opt4 = $_POST['opt4'];
					$ans1 = $_POST['ans1'];
					$ans2 = $_POST['ans2'];
					$ans3 = $_POST['ans3'];
					$ans4 = $_POST['ans4'];
    // include db connect class
    require_once 'db_connect.php';
 
    // connecting to db
    $db = new DB_CONNECT();
 
    // mysql inserting a new row
    //$result = mysql_query("INSERT INTO test_table(user_id,test_name,toq,user_name) VALUES('$name', '$price', '$description')");
 
    $result = mysql_query("INSERT INTO question_table(test_id,q_name,op1,op2,op3,op4,ans1,ans2,ans3,ans4) VALUES('$test_id','$qname1','$opt1','$opt2','$opt3','$opt4','$ans1','$ans2','$ans3','$ans4')");
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Product successfully created.";
 
        // echoing JSON response
        echo json_encode($response);
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

