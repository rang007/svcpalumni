<?php
/*
 * Following code will delete a product from table
 * A product is identified by product id (pid)
 */
 
// array for JSON response
$response = array();
   // include db connect class
    require_once 'db_connect.php';
 
    // connecting to db
    $db = new DB_CONNECT();

	
// check for required fields
if (isset($_POST['testname'])) {
    $testname = $_POST['testname'];
 
 
 
    // mysql update row with matched pid
    $result1 = mysql_query("SELECT *FROM test_table WHERE test_name ='$testname'");
	if (mysql_num_rows($result1) > 0) {
 
            $result1 = mysql_fetch_array($result1);
 
            $tid = $result1["test_id"];
            
         
        } 


	
	if (mysql_affected_rows() > 0) {
	// successfully updated
		$result2 = mysql_query("DELETE FROM question_table WHERE test_id ='$tid'");
		$result = mysql_query("DELETE FROM test_table WHERE test_name = '$testname'");
		$response["success"] = 1;
        $response["message"] = "Questions are deleted";
		
        // echoing JSON response
        echo json_encode($response);
	}
	else {
        // no product found
        $response["success"] = 0;
        $response["message"] = "Questions are NOT deleted";
 
        // echo no users JSON
        echo json_encode($response);
    }
	
	
	
    // check if row deleted or not
    if (mysql_affected_rows() > 0) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "Test successfully deleted";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // no product found
        $response["success"] = 0;
        $response["message"] = "No product found";
 
        // echo no users JSON
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