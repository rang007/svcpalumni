<?php
/*
 * Following code will list all the products
 */
 
// array for JSON response
$response = array();
$response2 = array();
// include db connect class
require_once 'db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();


/*
//accessing test id

if (isset($_GET['testname'])) {
    $tname = $_GET['testname'];
		//$tname= "71:rangtesf";
	// get a product from products table
    $result2 = mysql_query("SELECT * FROM test_table WHERE test_name ='$tname'") or die(mysql_error());
	if($row = mysql_fetch_array($result2))
	{
		$tid = $row["test_id"];
			echo $tid;

	}
	else
	{
		echo "tid not found";
	}	
}
else
{
    $response2["success"] = 0;
    $response2["message"] = "No testname found";
 
    // echo no users JSON
    echo json_encode($response2);


}

*/
 // check for post data
//if (isset($_GET['testname'])) {
    //$tid = $_GET['testname'];
	//$tid=71;
// get all products from products table

$tid = $_GET['tid'];
$result = mysql_query("SELECT *FROM question_table where test_id = '$tid'") or die(mysql_error());
 
// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["products"] = array();
 
    while ($row2 = mysql_fetch_array($result)) {
        // temp user array
        $product = array();
        $product["q_id"] = $row2["q_id"];
        $product["test_id"] = $row2["test_id"];
        $product["q_name"] = $row2["q_name"];
        $product["op1"] = $row2["op1"];
		$product["op2"] = $row2["op2"];
		$product["op3"] = $row2["op3"];
		$product["op4"] = $row2["op4"];
		$product["ans1"] = $row2["ans1"];
		$product["ans2"] = $row2["ans2"];
		$product["ans3"] = $row2["ans3"];
		$product["ans4"] = $row2["ans4"];
		
        // push single product into final response array
        array_push($response["products"], $product);
    }
    // success
    $response["success"] = 1;
	
    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No products found";
 
    // echo no users JSON
    echo json_encode($response);
}

?>