<?php 
if(isset($_GET['registermsg'])){
echo '
        <script>alert("'.$_GET['registermsg'].'");</script>
';
}

?>      
<div id="content">
  <form action="register.php" method="post">
    <center>
        <table background="transperent">
            <tr>
                <td>
                     Name *
                </td>
                <td>
                    :&nbsp;<input type="text" name="adminname" size="30">
                </td>
            </tr>
            <tr>
                <td>
                &nbsp; 
                </td>
                <td>
                 &nbsp;
                </td>
            </tr>
            <tr>
                <td>
                    Password *
                </td>
                <td>
                    :&nbsp;<input type="password" name="password" size="30">
                </td>
            </tr>
             <tr>
                <td>
                &nbsp; 
                </td>
                <td>
                 &nbsp;
                </td>
            </tr>
            <tr>
                <td>
                  Conform Password * 
                </td>
                <td>
                    :&nbsp;<input type="password" name="password2" size="30">
                </td>
            </tr>
             <tr>
                <td>
                &nbsp; 
                </td>
                <td>
                 &nbsp;
                </td>
            </tr>
            <tr>
                <td>
                  Mobile no. * 
                </td>
                <td>
                    :&nbsp;<input type="text" name="mobno" maxsize="10">
                </td>
            </tr>
             <tr>
                <td>
                &nbsp; 
                </td>
                <td>
                 &nbsp;
                </td>
            </tr>
            <tr>
                <td>
                  Email *
                </td>
                <td>
                    :&nbsp;<input type="text" name="email" size="30">
                </td>
            </tr>
             <tr>
                <td>
                &nbsp; 
                </td>
                <td>
                 &nbsp;
                </td>
            </tr>
            <tr>
                <td>
                  Address *
                </td>
                <td>
                    &nbsp;<textarea name="address" id="textarea2" cols="25" rows="3"></textarea>
                </td>
            </tr>
             <tr>
                <td>
                &nbsp; 
                </td>
                <td>
                 &nbsp;
                </td>
            </tr>
            <tr>
                <td>
                  College name *
                </td>
                <td>
                    :&nbsp;<input type="text" name="college_name" size="30">
                </td>
            </tr>
             <tr>
                <td>
                &nbsp; 
                </td>
                <td>
                 &nbsp;
                </td>
            </tr>
            <tr>
                <td>
                  Department *
                </td>
                <td>
                    :&nbsp;<input type="text" name="department" size="30">
                </td>
            </tr>
            <tr>
                <td>
                &nbsp; 
                </td>
                <td>
                 &nbsp;
                </td>
            </tr>
            <tr>
                <td>
                 </td>
                <td>
                    <input type="submit" value="SUBMIT"> &nbsp; &nbsp; <a href="index.php"> Back</a>
                </td>
            </tr>
        </table>
    </center>
</form>
</div>


