<?php
session_start();
$blogid = $_GET['blogid'];
require_once 'inputoutput/db_connect.php';
        // connecting to db
        $db = new DB_CONNECT();
  
//posting comment
if(isset($_GET['comment'])){
$username = $_SESSION['svcpuser_name'];
$userimage = $_SESSION['svcpprofile_image'];
$userid = $_SESSION['svcpuser_id']; 
$comment= $_GET['comment'];
    $result = mysql_query(
            "INSERT INTO comment_table(
            com_detail, 
            blog_id,
            user_id,
            user_image,
            user_name
            ) 
            VALUES(
                '$comment', 
                '$blogid',    
                '$userid', 
                '$userimage',
                '$username'     
            )");


    if ($result) {
                       echo'<table> <tr>
                            <td><img src="'.$userimage.'" height="50" width="50"/>  <h3>'.$username.'  </h3></td>
                            <td>&nbsp;</td>
                            <td class="fixed">'.$comment.'</td></tr></table>';
    }
    else{
        
    }
}else{
        $no=1;
        $result = mysql_query("SELECT *FROM blog_table where blog_id = '$blogid'");
        $row=  mysql_fetch_array($result);
        $image=$row['blog_image'];
        if ($image== "image not uploaded!" || $image== "" ||$image== "invalid" )
            {
                $image="blogimages/noimage.jpg";
            }
        echo'<table border="2" width="100%" class="showblogtable">'; 
        //while ($row = mysql_fetch_array($result)) {
       $authorimage=$row['author_image'];
       
            echo '<tr>   
                <td>                                     
                    <h3><img src="'.$authorimage.'" height="30" width="30"/>' .$row['author_name'].'s Bloggs</h3><br>
                    <h2>'.$row['blog_title'].'</h2><br>';    
                    if($row['blog_detail']==" " || $row['blog_detail']=="" && $row['blog_title']=="")
                    {
                        echo'<div style ="float:left; padding-right:10px;"><img src="'.$image.'" width="600" height="600" alt="Image" /></div>';
                    }else{
                     echo'<div style ="float:left; padding-right:10px;"><img src="'.$image.'" width="300" height="300" alt="Image" /></div>
                    <p>&ldquo; '.$row['blog_detail'].' &rdquo;</p>';
                     
                    }
                echo'</td>   
            </tr>
            </table>                                    
            <table class="showcommenttable">
            <tr>
                <td>
                    <h3>Comments:</h3>
                    
                    <div id=comments'.$row['blog_id'].'>';
                      //echo' <table class="fixed">';
                      $result1 = mysql_query("SELECT *FROM comment_table where blog_id = '$blogid'");
                      while ($row2 = mysql_fetch_array($result1)) {
						echo"<hr>";
						$comdate = substr($row2['com_created_at'], 0, -3);
							$comyear = substr($row2['com_created_at'], 0, -15);
							$commonth = substr($row2['com_created_at'], 5, -12);
							if($commonth=="1"){$commonth = "Jan";}
							if($commonth=="2"){$commonth = "Feb";}
							if($commonth=="3"){$commonth = "Mar";}
							if($commonth=="4"){$commonth = "Apr";}
							if($commonth=="5"){$commonth = "May";}
							if($commonth=="6"){$commonth = "Jun";}
							if($commonth=="7"){$commonth = "Jul";}
							if($commonth=="8"){$commonth = "Aug";}
							if($commonth=="9"){$commonth = "Sep";}
							if($commonth=="10"){$commonth = "Oct";}
							if($commonth=="11"){$commonth = "Nov";}
							if($commonth=="12"){$commonth = "Dec";}
							$comday = substr($row2['com_created_at'], 8, -9);
							$comhour = substr($row2['com_created_at'], 11, -6);
							$commin = substr($row2['com_created_at'], 14, -3);
							if ($comhour == "00") {
								$comhour = "12";
							}
							$comdate = $comhour . ":" . $commin . "&nbsp;&nbsp;&nbsp;" . $comday . "th " . $commonth . " " . $comyear;
                          echo '<h5>'.$comdate.'</h5>';
						 
						 echo'<table> <tr>
                            <td><img src="'.$row2['user_image'].'" height="50" width="50"/><br>  <h3><font color="blue"><b>'.$row2['user_name'].'</b></font></h3></td>
                            <td>&nbsp;</td>
                            <td class="fixed">'.$row2['com_detail'].'</td></tr></table>';
//                       echo' <tr>
//                            <td><img src="'.$row2['user_image'].'" height="50" width="50"/>  <h3>'.$row2['user_name'].'  </h3></td>
//                            <td></td>
//                            <td class="fixed" valign="top" >'.$row2['com_detail'].'</td></tr>';
                      }
                      //echo '</table>
                    echo '</div><hr>
                    <h3>Post your comment :</h3>
                    <table><tr>
                   <td><textarea name="com" id="comid'.$row['blog_id'].'" cols="60" rows="3"></textarea></td>
                   <td><input type="button" value="POST" class="post_button" onclick="postcomment(1,'.$blogid.');"></input></td>
                   </tr></table>    
                
               </td>      
            </tr>';
            //}
       echo '</table>';
 }       
       
       
       
?>