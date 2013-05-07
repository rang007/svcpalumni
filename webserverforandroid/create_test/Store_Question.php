<?php
session_start();
//$tname = $_SESSION['test_name'];
//echo $tname;


/*
 * Following code will get single product details
 * A product is identified by product id (pid)
*/ 
// array for JSON response
$response = array();

	

   // include db connect class
    require_once 'db_connect.php'; 
    // connecting to db
    $db = new DB_CONNECT();

	
	$tname = $_SESSION['test_name'];
	echo $tname." ";
	
	$result1 = mysql_query("SELECT *FROM test_table WHERE test_name ='$tname'")or die(mysql_error());
	echo $result1;
// check for empty result
	if (mysql_num_rows($result1) > 0) {
    
    while ($row = mysql_fetch_array($result1)) {
        // temp user array
        $tid = $row["test_id"];
        }
	}
	else
	{
	
		header("Location: AddQuestion.php?msg=Question Not Added. Try Again!!!");
        
	}
	
	
	
	
	
	
	
	
	
	
	
	//$result1 = mysql_query("SELECT *FROM test_table WHERE test_name ='$tname'")or die(mysql_error());
	//echo " ".mysql_fetch_array($result1);
	//$row = mysql_fetch_array($result1);
	//if ($row > 0) {
 
           
      //      $tid = $row["test_id"];         
		//} 
		//else
		//{
			//echo "error to access Tid:".$tid;
		//}
		

if (isset($_POST['qname1']) && isset($_POST['opt1']) && isset($_POST['opt2']) && isset($_POST['opt3']) && isset($_POST['opt4'])) {

 
if(isset($_POST['ch1']) &&
   $_POST['ch1'] == 'yes')
{
		$ans1=1;
		$ans2=0;
		$ans3=0;
		$ans4=0;

}
else
if(isset($_POST['ch2']) &&
   $_POST['ch2'] == 'yes')
{
		$ans1=0;
		$ans2=1;
		$ans3=0;
		$ans4=0;

}

else
if(isset($_POST['ch3']) &&
   $_POST['ch3'] == 'yes')
{
		$ans1=0;
		$ans2=0;
		$ans3=3;
		$ans4=0;

}
else
if(isset($_POST['ch4']) &&
   $_POST['ch4'] == 'yes')
{
		$ans1=0;
		$ans2=0;
		$ans3=0;
		$ans4=1;

}
else
{
 echo " not selecting any checkbox";
}
 

echo " ans1= ".$ans1." ans2= ".$ans2." ans3= ".$ans3." ans4= ".$ans4;

					$test_id = $tid;
					$qname1 = $_POST['qname1'];
 				    $opt1 = $_POST['opt1'];
				    $opt2 = $_POST['opt2'];
				    $opt3 = $_POST['opt3'];
				    $opt4 = $_POST['opt4'];
					//echo "After Getting Test id, Qname is :".$_POST['qname1']." And test_id is :".$test_id;
    // mysql inserting a new row
    //$result = mysql_query("INSERT INTO test_table(user_id,test_name,toq,user_name) VALUES('$name', '$price', '$description')");
	
    $result = mysql_query("INSERT INTO question_table(test_id,q_name,op1,op2,op3,op4,ans1,ans2,ans3,ans4) VALUES('$test_id','$qname1','$opt1','$opt2','$opt3','$opt4','$ans1','$ans2','$ans3','$ans4')");
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        //$response["success"] = 1;
		
        $response["message"] = "Product successfully created.";
		header("Location: AddQuestion.php?msg=$cnt Question added successfully");
        
		// echoing JSON response
        //echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
		header("Location: AddQuestion.php?msg=Question Not Added. Try Again!!!");
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