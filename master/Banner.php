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
             
             
//$('#zoom_01').elevateZoom();
   
</script>

<div id="banner">
    
                              
    <?php
    if(isset($_GET['registermsg']) && isset($_GET['svcplogin_name'])){
        echo'<span id="login">
                    '.$_GET['registermsg'].'&nbsp;<br> Your Login ID is <h2>'.$_GET['login_name'].' and Waiting For Approval! </h2>'.   
                    '<form action="login.php" method="post">
                            <table>
                                 <tr><td></td>    <td> <input type="text" name="login_id" id="username" value=Name onclick="clearname()"></td>
                                    <td></td> 
                                    <td><input type="password" name="password" id="password" value=password onclick="clearpassword()"></td>
                                    <td><input type="submit" value="Login"></td> </tr>
                            </table>
                        </form>
             </span>';
   
    }else if(isset($_SESSION['svcpuser_name']) && isset($_SESSION['svcpuser_id']) && isset($_SESSION['svcpprofile_image'])){
        $name = $_SESSION['svcpuser_name'];
        echo'<span id="login">';
                        //echo"<script>  $('#zoom_01').elevateZoom();</script>";
                      //echo'<img src="'.$_SESSION['profile_image'].'" width="50" height="50"/>'; 
                       //echo 'Welcome  ';
                       //echo 'Mr. '.$_SESSION['user_name'].'&nbsp;&nbsp;';
					   			
                        $path= explode('/',$_SESSION['svcpprofile_image']);
                        //echo '<h1>'.print_r($path).'</h1>';
                        
                        $thumb_image=$path[0]."/".$path[1]."/thumb/".$path[2];
                        if($thumb_image=="//thumb/"){
							$thumb_image= $_SESSION['svcpprofile_image'];
						}
						$big_image=$_SESSION['svcpprofile_image'];
                        
                       echo'<table>
                              <tr><td><a href=Profile.php><img id="zoom_04b" src="'.$thumb_image.'" data-zoom-image="'.$big_image.'" hieght=100 width=100/></a>
                                  </td>
                                  <td>&nbsp;&nbsp;</td><td valign=top> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=signout.php><img src="images/icons/exit.png" height="40"/><br>&nbsp;&nbsp;Sign out</a></td></tr>
                              <tr><td halign=middle><a href=Profile.php>'.$_SESSION['svcpuser_name'].'</a></td>
                                  <td></td></tr>    
                              </table>';
                       
                       
//					   echo'<table>
//                              <tr><td><a href="'.$big_image.'" class="MagicZoom" rel="zoom-width:490px; zoom-height:450px"><img src="'.$thumb_path.'" width="100" height="100"/></a></td>
//                                  <td>&nbsp;&nbsp;</td><td valign=top> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=signout.php><img src="images/icons/exit.png" height="40"/><br>&nbsp;&nbsp;Sign out</a></td></tr>
//                              <tr><td halign=middle><a href=Profile.php>'.$_SESSION['svcpuser_name'].'</a></td>
//                                  <td></td></tr>    
//                              </table>';
//                       
                       echo '</span>';
    
        
        
    }else{
        if(isset($_GET['loginmsg']))
        {
            $loginerror=$_GET['loginmsg'];
        }
        else{
            $loginerror="";
        }
        echo'<span id="login">
                    
                    New user <a href="Registration.php">Sign Up!</a><br>'.   
                    '<form action="login.php" method="post">
                            <table>
                                <tr>
                                    <td></td>   
                                    <td><input type="text" name="login_id" id="username" value=Name onclick="clearname()"></td>
                                    <td></td> 
                                    <td><input type="password" name="password" id="password" value=password onclick="clearpassword()"></td>
                                    <td><input type="submit" value="Login"></td> 
                                </tr>
                            </table>
                        </form>
                        <h3>'.$loginerror.'</h3>
             </span>';
        
    }
    
   ?> 
    <table>
        
        <tr><td> <img src="images/logo.jpg"  width="200" height="145"/></td>
            <td> <h1><font color="white">SVCP ALUMNI </font><br>Sou. Venutai Chavan Polytechnic </h1> 
            </td>
        </tr>
    </table>
</div><!--</div>close banner-->
