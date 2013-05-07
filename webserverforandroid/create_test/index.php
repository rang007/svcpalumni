<?php
session_start(); 
?> 

<html>
<body bgcolor="#DEB887">

<center>

<font color="red"><h1> Wel-Come To MOC assessment</h1></font> 
<form name="create_test" action="create_test_from_html.php" method="post">
<table  background="bgimage.jpg">
<tr>
<td>Your Name :</td><td> <input type="text" name="username"></td></tr>
<tr><td>Test Name:</td><td> <input type="text" name="testname"></td></tr>
<tr><td>Total No. of question :</td><td> <input type="text" name="toq" size=5></td></tr>
<tr><td></td><td>
<center>
<input type="submit" value="Create"></center>
</td></tr>
</table>
</form>

</center>

<?php 
if (isset($_POST['submit'])) { 
$_session['test_name'] = $_POST['testname'];
$_session['user_name'] = $_POST['username'];
} 
?> 

</body>
</html>