<script type="text/javascript">
    function clearname()
    {
        var uname = document.getElementById('username');

        if (uname.value == "Name") {

            uname.value = "";
            //pwd.value = "";
        }
    }

    function clearpassword()
    {

        var pwd = document.getElementById('password');
        if (pwd.value == "password") {

            //uname.value = "";
            pwd.value = "";
        }
    }

</script>


<div id="banner">
<!--                    <span id="login">
                        New User <a href="Registration.php"> Sign up!</a>
                        <form action="login.php" method="post">
                            <table>
                                <tr><td></td>    <td> <input type="text" value="Name" id="username" onclick="clearname();"></td>
                                    <td></td> <td><input type="password" value="password" id="password" onclick="clearpassword();"></td>
                                    <td><input type="submit" value="Login"></td> </tr>
                            </table>
                        </form>
                    </span>
    -->
    <!-- Title -->

<?php
if(isset($_SESSION['user_id']) && isset($_SESSION['name'])){
        $name = $_SESSION['name'];
                       echo'<span id=login><table>
                              <tr><td>Welcome Mr. '.$_SESSION['name'].'</td>
                                  <td>&nbsp;&nbsp;&nbsp;</td><td valign=top><a href=signout.php><img src="images/icons/exit.png" height="40"/><br>Sign out</a></td>
                              </tr>
                              </table>';
                       
                       echo '</span>';
    
        
        
    }
    

?>



    <table>
        <tr><td> <img src="images/logo.jpg" class="logo"/></td>
            <td> <h1><span>SVCP</span><br><h2>Sou. Venutai Chavan Polytechnic <br>Alumni Administrator</h2></h1> 
                </td>
        </tr>
    </table>   
</div><!--</div>close banner-->
