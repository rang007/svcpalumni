<?php
if(isset($_GET['loginmsg'])){
echo '
        <script>alert("'.$_GET['loginmsg'].'");</script>
';
}

?>
<div id="content">
    <form action="login.php" method="post">
    <center>

        <table background="transperent">
            <tr>
                <td>
                    Name 
                </td>
                <td>
                    :&nbsp;<input type="text" name="adminname" id="search_box">
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
                    Password 
                </td>
                <td>
                    :&nbsp;<input type="password" name="password" id="search_box">
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
                    <input type="submit" value="Login">
                </td>
            </tr>
        </table>
    </center>
    </form>
</div>

