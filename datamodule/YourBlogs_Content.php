<div id="content">

    <div class="content_item">
        <h2><b>Your Blogs </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="CreateBlog.php">Create Blog </a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="Blogs.php"> Back</a></h2>
        <br>
        <!--<div class="content_container">-->
    </div>

    <div class="content_item">
     <script>
            //0.5
            function zoomImage(divid){
                //var blog_id = $("#current_blog").val(); 
                     
					 var blog = "#zoom_04aub" + divid;
                    $(blog).elevateZoom({zoomWindowPosition: 2,tint:true, tintColour:'#F90', tintOpacity:0.2,
										zoomWindowFadeIn: 2000,
										zoomWindowFadeOut: 500,
										lensFadeIn: 500,
										
                                        easing : true,										
										lensFadeOut: 500
										});
					//$(blog).elevateZoom({
					//zoomType	: "lens",
					//lensShape : "round",
					
					//lensSize    : 200
					//});
   	
            }
			
			function zoomImage2(divid){
                //var blog_id = $("#current_blog2").val(); 
                    var blog = "#zoom_04aub2" + divid;
                    
					//$(blog).elevateZoom({
					//zoomType				: "lens",
					//lensShape : "round",
					//easing : true,
					//lensSize    : 400
					//});

							
					 //var blog = "#zoom_04aub2" + divid;
                    $(blog).elevateZoom({zoomWindowPosition: 2,tint:true, tintColour:'#000', tintOpacity:0.5,
										zoomWindowFadeIn: 2700, 
										zoomWindowFadeOut: 500,
										lensFadeIn: 500,
										
                                        easing : true,										
										lensFadeOut: 500,
										zoomWindowHeight: 400, 
										zoomWindowWidth:700,
										});
					//$(blog).elevateZoom({
					//zoomType	: "lens",
					//lensShape : "round",
					
					//lensSize    : 200
					//});
   	
            }

			
            function showblog(str, divid){
                
                    
           
//                    $("#zoom_04aub" + blog_id).mouseover(function() {
//                    var blog_id = $("#current_blog").val(); 
//                    //alert(blog_id);  
//                    var blog = "#zoom_04aub" + blog_id;
//                    alert(blog);   
//                    });
                
                //showblog(){
                if (str == "2")
                {
                    document.getElementById("blogdetail" + divid).innerHTML = "";
                    return;

                }


                if (str == "1"){
                
                    var dataString = 'blogid=' + divid;
                    $.ajax({type: "GET", url: "showblog.php", data: dataString, cache: false, beforeSend: function(html) {
                            $("#flash" + divid).show();
                            $("#flash" + divid).html('<center><img src="images/ajax_loader.gif" align="absmiddle" width=100 height=100>&nbsp;Loading Results...</center>');
                        }, success: function(html) {
                            $("#flash" + divid).hide();
                            $("#blogdetail" + divid).html(html);
                        }});
                    //document.getElementById("comments").innerHTML = "";
                    //if (window.XMLHttpRequest)
                    //{// code for IE7+, Firefox, Chrome, Opera, Safari
                    //xmlhttp = new XMLHttpRequest();
                    //}
                    //else
                    //{// code for IE6, IE5
                    //xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    //}
                    //xmlhttp.onreadystatechange = function()
                    //{
                    //if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    //{
                    //  document.getElementById("blogdetail" + divid).innerHTML = xmlhttp.responseText;
                    //}
                    //}

                    //xmlhttp.open("GET", "showblog.php?blogid=" + divid, true);
                    //xmlhttp.send();
                }
            }

        </script>

        <script type="text/javascript">
            
            

            function postcomment(str, divid)
            {
                //Var comment = document.getElementById("insert_search").innerHTML = '';
                var comment = document.getElementById("comid" + divid).value;
                var dataString = 'blogid=' + divid + '&comment=' + comment;

                $.ajax({
                    type: "GET",
                    url: "showblog.php",
                    data: dataString,
                    cache: false,
                    beforeSend: function(html) {
                        //document.getElementById("comments"+divid).innerHTML = '';
                        //$("#flash").show();
                        //$("#searchword").show();
                        //$(".searchword").html(search_word);
                        //$("#flash").html('<img src="ajax-loader.gif" align="absmiddle">&nbsp;Loading Results...');
                    },
                    success: function(msg) {
                        //$("#insert_search").show();

                        //$("#insert_search").append(html);
                        //$("#flash").hide();
                        $("#comments" + divid).show();
                        $("#comments" + divid).append(msg);
                        document.getElementById("comid" + divid).value = "";

                    }
                });

            }
        </script>

		<div id="allblog">
        </div>  
<!--            <div id="blogdetail">


            </div>-->
            <form>
                
            <?php
            //require_once 'inputoutput/db_connect.php';
        // connecting to db
            $uid= $_SESSION['svcpuser_id'];
        //$db = new DB_CONNECT();
        $result = mysql_query("SELECT *FROM blog_table WHERE user_id = '$uid' ORDER by blog_created_at DESC");
        if(mysql_num_rows($result)==0)
        {
            
            echo '<h2> You are not posting any blog to create blog  <a href="CreateBlog.php">click here</a></h2>';
        }
         $n= mysql_num_rows($result);
         echo '<h2>You had posted <b>'.$n.'</b> blogs</h2><br>';
        while ($row = mysql_fetch_array($result)) {

                $image = $row['blog_image'];
                $authorimage = $row['author_image'];
                if ($image == "image not uploaded!" || $image == "" || $image == "invalid") {
                    $image = "blogimages/noimage.jpg";
                }
                $date = substr($row['blog_created_at'], 0, -3);
                $year = substr($row['blog_created_at'], 0, -15);
                $month = substr($row['blog_created_at'], 5, -12);
                $day = substr($row['blog_created_at'], 8, -9);
                $hour = substr($row['blog_created_at'], 11, -6);
                $min = substr($row['blog_created_at'], 14, -3);
                if ($hour == "00") {
                    $hour = "12";
                }
				$path = explode('/', $authorimage);
                //echo '<h1>'.print_r($path).'</h1>';

                $thumb_path = $path[0] . "/" . $path[1] . "/thumb/" . $path[2];
                
                $date = $hour . ":" . $min . "&nbsp; &nbsp; &nbsp; " . $day . "-" . $month . "-" . $year;
                echo'<table><tr><td>&nbsp;</td><td>&nbsp;</td><td><h5><b> New Blog Posted at :-  ' . $date . '</b></h5></td></tr>
                </table>';
                echo'<table width="100%" class="blogtable">
                <tr>
                        <td>
                        <table>
                        <tr>
                        <td><img id=zoom_04aub2'.$row['blog_id'].' src="' . $image . '" data-zoom-image="' . $image . '" onmouseover="zoomImage2('.$row['blog_id'].')" height="100" width="150"/></td>
                        </tr>
                        </table>
                        </td>

                        <td align="right">
                        <table>
                        <tr><td valign="top"><h2>' . $row['blog_title'] . '</h2></td></tr>
                        <tr><td valign="top"><img id=zoom_04aub'.$row['blog_id'].' src="' . $big_image . '" data-zoom-image="' . $big_image . '" onmouseover="zoomImage('.$row['blog_id'].')" height="50" width="50"/><h3><b>  ' . $row['author_name'] . 's </b>blog</h3></td></tr>
                        </table>
                        </td>
    
                        <td align="right">
                        <table>
                        <tr><td>' . $date . '</td><td align="right"></td></tr>
                        <tr><td align="right"><a href="#" onclick="showblog(1,' . $row['blog_id'] . ')"><input type="submit" value="Show" ></a></td>
                            <td align="right"> <a href="#" onclick="showblog(2,' . $row['blog_id'] . ')"><input type="submit" value="Hide" ></a></td></tr>
                        </table>
                        </td>


                </tr>
                </table>
           		<div id="flash' . $row['blog_id'] . '"> </div>
        <div id="blogdetail' . $row['blog_id'] . '"> </div> <br><br>';
            }
            ?>        
   
                
            </form>   
            

    </div><!--close content_item--> 
</div><!--content-->
