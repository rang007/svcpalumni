<div class="sidebar_container">
    <div class="sidebar">
        <div class="sidebar_item">

            <!--<h2>Latest Blog</h2>-->
            <table width="95%" cellspacing="0" cellpadding="0">
                <tr>
                    <td height="35" colspan="2">
                        <div class="button_small">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="">Menu</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="17%" height="30" align="center" valign="middle"><img src="images/arrow_1.gif" width="13" height="14" /></td>
                    <td width="83%" height="30"><a href="#" class="sai_link">Alumni Association </a></td>
                </tr>
                <tr>
                    <td height="30" align="center" valign="middle"  ><img src="images/arrow_1.gif" alt="" width="13" height="14" /></td>
                    <td height="30"><a href="Profile.php">Profile</a></td>
                </tr>
                <tr>
                    <td height="30" align="center" valign="middle" ><img src="images/arrow_1.gif" width="13" height="14" /></td>
                    <td height="30" ><a href="AlumniStudents.php" >Alumni Students</a></td>
                </tr>
                <tr>
                    <td height="30" align="center" valign="middle" ><img src="images/arrow_1.gif" width="13" height="14" /></td>
                    <td height="30"><a href="News.php" >News</a></td>
                </tr>
                <tr>
                    <td height="30" align="center" valign="middle" ><img src="images/arrow_1.gif" width="13" height="14" /></td>
                    <td height="30"  ><a href="Events.php" >Events</a></td>
                </tr>
                <tr>
                    <td height="30" align="center" valign="middle" ><img src="images/arrow_1.gif" width="13" height="14" /></td>
                    <td height="30" ><a href="Blogs.php" >Blogs </a></td>
                </tr>
                <tr>
                    <td height="30" align="center" valign="middle" ><img src="images/arrow_1.gif" width="13" height="14" /></td>
                    <td height="30" ><a href="SocialMedias.php" >Social Media's </a></td>
                </tr>
            </table>
            <br>

            <div class="button_small">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#">Latest News</a>
            </div><!--close button_small-->

        </div><!--close sidebar_item-->
    </div><!--close sidebar-->

    <!--News side Bar-->
    <div class="sidebar">
        <div class="sidebar_item">
             <?php
            require_once 'inputoutput/db_connect.php';
            
        // connecting to db
        $db = new DB_CONNECT();
        $myresult = mysql_query("SELECT *FROM news_table ORDER by created_at DESC");
        echo'<marquee height="300" direction="up" onmouseover="this.stop();" onmouseout="this.start();">';
             while ($row = mysql_fetch_array($myresult)) {

            $date=substr($row['created_at'],0,-3);
            $year= substr($row['created_at'],0,-15);
            $month= substr($row['created_at'],5,-12);
            $day=  substr($row['created_at'],8,-9);
            $hour= substr($row['created_at'],11,-6);
            $min= substr($row['created_at'],14,-3);
            if($hour=="00")
            {
                $hour="12";
            }
            $date=$hour.":".$min."&nbsp; &nbsp; &nbsp; ".$day."-".$month."-".$year;
              echo'
                <table width="200" border="0" cellspacing="4" cellpadding="4">
                    <tr>
                        <td align="left" valign="top">
                           <h4><b>'.$row['news_title'].'</b></h4></td>
                    </tr>
                    <tr>
                        <td align="left" valign="top">

                           '.substr($row['news_detail'],0,60).' <br />
                            <a href="News.php?nid='.$row['news_id'].'" >More..</a></td>
                    </tr>
                </table>';
          }
         echo ' </marquee>';
        ?>

            <div class="button_small">
                &nbsp;
                <a href="#">Facebook Updates</a>

            </div><!--close button_small-->
        </div><!--close sidebar_item-->
    </div><!--close sidebar-->

    <div class="sidebar">
        <div class="sidebar_item">
            <p><iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FSVCPALUMNI&amp;width=221&amp;height=300&amp;show_faces=false&amp;colorscheme=light&amp;stream=true&amp;border_color&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:220px; height:300px;" allowTransparency="true"></iframe>
           </p>
        </div><!--close sidebar_item-->
    </div><!--close sidebar-->
</div>