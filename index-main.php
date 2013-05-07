<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>SVCP Alumini</title>
  
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  

  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>

  
    
  
<!-- required for this demo -->
<link rel="stylesheet" href="css/slideshows.css" />
<!--<script src="js/jquery.min.js"></script>-->

<script src="js/jquery.cycle.all.js"></script>

<script src="js/jquery.easing.1.3.js"></script>

<script>
$(function() {
	


// ---------------------------------------------------
// Slideshow 1

    $('#slideshow_1').cycle({
        fx: 'scrollHorz',		
		easing: 'easeInOutCirc',
		speed:  700, 
		timeout: 5000, 
		pager: '.ss1_wrapper .slideshow_paging', 
        prev: '.ss1_wrapper .slideshow_prev',
        next: '.ss1_wrapper .slideshow_next',
		before: function(currSlideElement, nextSlideElement) {
			var data = $('.data', $(nextSlideElement)).html();
			$('.ss1_wrapper .slideshow_box .data').fadeOut(300, function(){
				$('.ss1_wrapper .slideshow_box .data').remove();
				$('<div class="data">'+data+'</div>').hide().appendTo('.ss1_wrapper .slideshow_box').fadeIn(600);
			});
		}
    });
	
	// not using the 'pause' option. instead make the slideshow pause when the mouse is over the whole wrapper
	$('.ss1_wrapper').mouseenter(function(){
		$('#slideshow_1').cycle('pause');
    }).mouseleave(function(){
		$('#slideshow_1').cycle('resume');
    });
	


// ---------------------------------------------------
// Slideshow 2

    $('#slideshow_2').cycle({
        fx: 'fade',		
		speed:  900, 
		timeout: 5000, 
		pager: '.ss2_wrapper .slideshow_paging', 
        prev: '.ss2_wrapper .slideshow_prev',
        next: '.ss2_wrapper .slideshow_next',
		before: function(currSlideElement, nextSlideElement) {
			var data = $('.data', $(nextSlideElement)).html();
			$('.ss2_wrapper .slideshow_box').stop(true, true).animate({ bottom:'-110px'}, 400, function(){
				$('.ss2_wrapper .slideshow_box .data').html(data);
			});
			$('.ss2_wrapper .slideshow_box').delay(100).animate({ bottom:'0'}, 400);
		}
    });

	$('.ss2_wrapper').mouseenter(function(){
		$('#slideshow_2').cycle('pause');
		$('.ss2_wrapper .slideshow_prev').stop(true, true).animate({ left:'20px'}, 200);
		$('.ss2_wrapper .slideshow_next').stop(true, true).animate({ right:'20px'}, 200);
    }).mouseleave(function(){
		$('#slideshow_2').cycle('resume');
		$('.ss2_wrapper .slideshow_prev').stop(true, true).animate({ left:'-40px'}, 200);
		$('.ss2_wrapper .slideshow_next').stop(true, true).animate({ right:'-40px'}, 200);
    });
	


// ---------------------------------------------------
// Slideshow 3

    $('#slideshow_3').cycle({
        fx: 'uncover',		
		speed:  700, 
		timeout: 5000, 
		pager: '.ss3_wrapper .slideshow_paging', 
		pagerAnchorBuilder: pager_create,
        prev: '.ss3_wrapper .slideshow_prev',
        next: '.ss3_wrapper .slideshow_next',
		before: function(currSlideElement, nextSlideElement) {
			var data = $('.data', $(nextSlideElement)).html();
			$('.ss3_wrapper .slideshow_box .data').fadeOut(300, function(){
				$('.ss3_wrapper .slideshow_box .data').remove();
				$('<div class="data">'+data+'</div>').hide().appendTo('.ss3_wrapper .slideshow_box').fadeIn(600);
			});
		}
    });
	
	function pager_create(id, slide) {
		var thumb = $('.thumb', $(slide)).html();
		var title = $('h4 a', $(slide)).html();
		var add_first = (id==0)?' class="first"':'';
		return '<li><a href="#" title="'+title+'"'+add_first+'>'+thumb+'</a></li>';
    };
	
	// not using the 'pause' option. instead make the slideshow pause when the mouse is over the whole wrapper
	$('.ss3_wrapper').mouseenter(function(){
		$('#slideshow_3').cycle('pause');
    }).mouseleave(function(){
		$('#slideshow_3').cycle('resume');
    });
	
	
	
	
// ---------------------------------------------------
	
	$('a[href="#"]').click(function(event){ 
		event.preventDefault(); // for this demo disable all links that point to "#"
	});
	
});
</script>

<script type="text/javascript">
         
         document.onclick = function clear()
         {
             //alert(document.getElementById('username'));
            // document.getElementsname('username').setValue("");
            var uname = document.getElementById('username');
            var pwd = document.getElementById('password');
            
            if( uname.value=="Name" && pwd.value=="password"){
                
                uname.value="";
                pwd.value="";
            }
        //document.getElementsByName('Contact0Email')[0].value = email;
         }
    
 </script>
  
  
</head>

<body>
  <div id="main">
    <div id="header">   
	  <div id="banner">
              <span id="login">
                  New User <a href="Registration.php"> Sign up!</a>
                  <form action="login.php" method="post">
                  <table>
                      <tr><td></td>    <td> <input type="text" value="Name" id="username" onClick="clear();"></td>
                          <td></td> <td><input type="password" value="password" id="password"></td>
                      <td><input type="submit" value="Login"></td> </tr>
                  </table>           
                  </form>
              </span>
           <h1><span>SVCP</span>  Alumni</h1> 
            
             </div><!--</div>close banner-->
        <div id="menubar">
            <h5><span>Sou. Venutai Chavan Polytechnic College</span></h5>   
           
            <ul class="lavaLampWithImage" id="lava_menu">
                <li class="current"><a href="index.php">Home</a></li>
                <li><a href="Profile.php">Profile</a></li>
                <li><a href="Events.php.">Events</a></li>
                <li><a href="Blogs.php">Blogs</a></li>
                <li><a href="Gallery.php">Gallery</a></li>
                <li><a href="Contact.php">Contact Us</a></li>
            </ul>

        </div><!--close menubar-->
        
        
	    <div id="contact">
	      <a href="#"><img src="images/icons/twitter5.png" alt="twitter" /></a>
		  <a href="#"><img src="images/icons/facebook2.png" alt="facebook" /></a>
		  <a href="#"><img src="images/icons/linkedin3.png" alt="linkedin" /></a>
	    </div>
	
      
    </div><!--close header-->

	<div id="site_content">	
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
                              <td width="83%" height="30"><a href="alumni_association.html" class="sai_link">Alumni Association </a></td>
                          </tr>
                          <tr>
                              <td height="30" align="center" valign="middle"  ><img src="images/arrow_1.gif" alt="" width="13" height="14" /></td>
                              <td height="30"><a href="Profile.php">Profile</a></td>
                          </tr>
                          <tr>
                              <td height="30" align="center" valign="middle" ><img src="images/arrow_1.gif" width="13" height="14" /></td>
                              <td height="30" ><a href="Students.php" >Alumni Students</a></td>
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
                              <td height="30" ><a href="Media.php" >Social Media's </a></td>
                          </tr>
                      </table>       
                  </div><!--close sidebar menu item-->
        </div><!--close sidebar-->     		
	
        <!--News side Bar-->
        <div class="sidebar">
          <div class="sidebar_item">
              <div class="button_small">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="#">Latest News</a>
              </div><!--close button_small-->

                        <marquee height="300" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                        <table width="200" border="0" cellspacing="4" cellpadding="4">
                          <tr>
                            <td align="left" valign="top">
							SVCP Alumni Meet 2013: 9th feb.2013</td>
                            </tr>
                          <tr>
                            <td align="left" valign="top">
                             
                            Sinhgad Institute Assiciation Annual Meet is on 9th feb.2013 at SVCP Campus.                            <br />
                              <a href="NewsDetails.php?nid=1" >More..</a></td>
                            </tr>
                        </table>
                        </marquee>    
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
       </div><!--close sidebar_container-->	
	<div id="slide_show_content">   
            <div class="image">
            <div class="ss3_wrapper">
		
			<a href="#" class="slideshow_prev"><span>Previous</span></a>
			<a href="#" class="slideshow_next"><span>Next</span></a>
				
			<ul class="slideshow_paging"> </ul>
			
			<div class="slideshow_box">
			<!--<div class="data"> </div>-->
			</div>
			
			<div id="slideshow_3" class="slideshow">
				
				<div class="slideshow_item">
					<div class="image"><a href="#"><img src="photos/dasara.jpg" alt="photo 2" width="690" height="400" /></a></div>
					<div class="thumb"><img src="photos/dasara.jpg" alt="photo 2" width="100" height="63" /></div>
				</div>
								
				<div class="slideshow_item">
					<div class="image"><a href="#"><img src="photos/cute.jpg" alt="photo 3" width="690" height="400" /></a></div>
					<div class="thumb"><img src="photos/cute.jpg" alt="photo 3" width="100" height="63" /></div>
					
				</div>
				
				<div class="slideshow_item">
					<div class="image"><a href="#"><img src="photos/banner.jpg" alt="photo 1" width="690" height="400" /></a></div>
					<div class="thumb"><img src="photos/banner.jpg" alt="photo 1" width="100" height="63" /></div>
					
				</div>

				
				<div class="slideshow_item">
					<div class="image"><a href="#"><img src="photos/sparkle.jpg" alt="photo 4" width="690" height="400" /></a></div>
					<div class="thumb"><img src="photos/sparkle.jpg" alt="photo 4" width="100" height="63" /></div>
					
				</div>
						
				<!--<div class="slideshow_item">

					<div class="image"><a href="#"><img src="photos/3.jpg" alt="photo 3" width="900" height="400" /></a></div>
					<div class="thumb"><img src="photos/3_thumb.jpg" alt="photo 3" width="140" height="63" /></div>
					<div class="data">
						<h4><a href="#">Pellentesque lacinia metus</a></h4>
					</div>
				</div>
				-->
			</div>
		</div><!-- .ss3_wrapper -->
            </div>
        </div>
        <!--<img src="images/home_1.jpg" alt="image" >-->
      
        <div id="content">
       
            <div class="content_item">
                <center>
                    <h1> <a href="#">Directors Messages</a></h1>
                                   
                  </center>                                    
                  <div class="content_container">
                          
                          <table width="95%" cellspacing="2" cellpadding="2" border="1">
                                <tr>
                                  <td height="25" align="center" valign="middle"><img src="images/president-photo.gif" width="101" height="130" /></td>
                                </tr>
                                <tr>
                                  <td height="25" align="center" valign="middle" >Prof.  M. N. Navale</td>
                                </tr>
                                <tr>
                                  <td height="25" align="center" valign="middle"> M.E. (Elect), MIE (I), MBA <br/>
                                        Founder President, STES</td>
                                  </tr>
                                <tr>
                                  <td height="30" valign="top">
                                  Dear Friends,
                                    <br />
                                    You may be aware about the activities of Sinhgad Institutions established with an objective to provide quality education from school to post graduation programmes in all disciplines... <a href="#">More.. </a></td>
                                
                                </tr>
                                </table>
                          
		  </div><!--close content_container-->
                 
        
        
            </div><!--close content_item-->
       
        </div>
       
       
       <div id="content">      
           <div class="content_item">
		
                <div class="content_container">
                    <h3> Click like to connect with us on facebook !!!</h3>    
                   <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FSVCPALUMNI&amp;width=600&amp;height=168&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:600px; height:168px;" allowTransparency="true"></iframe>
																   
		  </div><!--close content_container-->
                 
        
        </div><!--close content_item-->
        
        </div><!--close content-->
        </div><!--close site_content-->
  </div><!--close main-->
  
  <div id="footer">
    <a href="">Home</a> | <a href=" ">Our Social Media</a> | <a href="">About Us</a> | <a href="">Contact Us</a> | website Develope by <a href="">Pandurang</a>
  </div><!--close footer-->  
  
<div style="margin: 1em 0 3em 0; text-align: center;">
</div>
</body>
</html>
