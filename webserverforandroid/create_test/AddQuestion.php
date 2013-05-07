<?php
session_start();
$uname = $_SESSION['user_name'];
$msg= $_GET['msg'];
//echo $tname;
?>

<html>
<body bgcolor="#DEB887">
<center>
<font color="red"><h1> Wel-Come <?php echo $uname;?></h1></font>
<form name="create_test" action="Store_Question.php" method="post">
<table  background="bgimage.jpg">
<tr><th><font color="blue"> <h2><center>Add Question</center></h2></font></th></tr>
<tr><td>Enter Question :</td><td> <input type="text" name="qname1" size=40></td></tr>
<tr><td>Option A):</td><td> <input type="text" name="opt1" size=20><input type="checkbox" name="ch1" value="yes"></td></tr>
<tr><td>Option B):</td><td> <input type="text" name="opt2" size=20><input type="checkbox" name="ch2" value="yes"></td></tr>
<tr><td>Option C):</td><td> <input type="text" name="opt3" size=20><input type="checkbox" name="ch3" value="yes"></td></tr>
<tr><td>Option D):</td><td> <input type="text" name="opt4" size=20><input type="checkbox" name="ch4" value="yes"></td></td>
<!--<tr><td>Correct Option:</td><td><input type="text" name="ans" size=5></td></tr>-->
<tr>
<td>&nbsp;</td>
<td><input type="submit" value=" Add "><?php echo $msg;?></center></td>
<td><a href="sign-out.php">End</a></td>
</tr>
</table>
</form>
</center>
<?php 
//if (isset($_POST['submit'])) { 
//$_session['test_name'] = $_POST['testname'];
//} 
?> 

</body>
</html>