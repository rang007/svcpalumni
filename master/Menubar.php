<div id="menubar">
    <ul class="lavaLampWithImage" id="lava_menu">
<?php 

                      //$current=$_GET['current'];
                        //index
                        if( $current=='index'){
                        $setindex="current";
                        }
                        else{
                         $setindex='';   
                        }
                        
                        //profile
                        if( $current=='profile'){
                        $setprofile="current";
                        }
                        else{
                         $setprofile='';   
                        }
                        
                        //events
                        if( $current=='events'){
                        $setevents="current";
                        }
                        else{
                         $setevents='';   
                        }
                        
                        //blogs
                        if( $current=='blogs'){
                        $setblogs="current";
                        }
                        else{
                         $setblogs='';   
                        }
                        
                        //gallery
                        if( $current=='gallery'){
                        $setgallery="current";
                        }
                        else{
                         $setgallery='';   
                        }
                        
                        //contact
                        if( $current=='conatct'){
                        $setcontact="current";
                        }
                        else{
                         $setcontact='';   
                        }
                            
       
                     
                        echo '<li class="'.$setindex.'"><a href="index.php">Home</a></li>';
                        echo '<li class="'.$setprofile.'"><a href="Profile.php">Profile</a></li>';
                        echo '<li class="'.$setevents.'"><a href="Events.php">Events</a></li>';
                        echo '<li class="'.$setblogs.'"><a href="Blogs.php">Blogs</a></li>';
                        echo '<li class="'.$setgallery.'"><a href="Gallery.php">Gallery</a></li>';
                        echo '<li><div id="demo-container"></div></li>';
                        echo '<li class="'.$setcontact.'"><a href="Contact.php">Contact Us</a>
                              </li>';
                        
//                        if( $current=='profile'){
//                                
//                        echo '<li><a href="index.php">Home</a></li>';
//                        echo '<li  class="current"><a href="Profile.php">Profile</a></li>';
//                        echo '<li><a href="Events.php">Events</a></li>';
//                        echo '<li><a href="Blogs.php">Blogs</a></li>';
//                        echo '<li><a href="Gallery.php">Gallery</a></li>';
//                        echo '<li><a href="Contact.php">Contact Us</a></li>';
//                        }
//                        
//                        if( $current=='events'){
//                                
//                        echo '<li><a href="index.php">Home</a></li>';
//                        echo '<li><a href="Profile.php">Profile</a></li>';
//                        echo '<li class="current"><a href="Events.php">Events</a></li>';
//                        echo '<li><a href="Blogs.php">Blogs</a></li>';
//                        echo '<li><a href="Gallery.php">Gallery</a></li>';
//                        echo '<li><a href="Contact.php">Contact Us</a></li>';
//                        }
//                        
//                        if( $current=='blogs'){
//                                
//                        echo '<li><a href="index.php">Home</a></li>';
//                        echo '<li><a href="Profile.php">Profile</a></li>';
//                        echo '<li><a href="Events.php">Events</a></li>';
//                        echo '<li class="current"><a href="Blogs.php">Blogs</a></li>';
//                        echo '<li><a href="Gallery.php">Gallery</a></li>';
//                        echo '<li><a href="Contact.php">Contact Us</a></li>';
//                        }
//                        
//                        if( $current=="gallery"){
//                                
//                        echo '<li><a href="index.php">Home</a></li>';
//                        echo '<li><a href="Profile.php">Profile</a></li>';
//                        echo '<li><a href="Events.php">Events</a></li>';
//                        echo '<li><a href="Blogs.php">Blogs</a></li>';
//                        echo '<li class="current"><a href="Gallery.php">Gallery</a></li>';
//                        echo '<li><a href="Contact.php">Contact Us</a></li>';
//                        }
//                        
//                        if( $current=='contact'){
//                                
//                        echo '<li><a href="index.php">Home</a></li>';
//                        echo '<li><a href="Profile.php">Profile</a></li>';
//                        echo '<li><a href="Events.php">Events</a></li>';
//                        echo '<li><a href="Blogs.php">Blogs</a></li>';
//                        echo '<li><a href="Gallery.php">Gallery</a></li>';
//                        echo '<li class="current"><a href="Contact.php">Contact Us</a></li>';
//                        }
//                        
?>        
                        
<!--                       <li class='<?php $current; ?>'><a href="Profile.php">Profile</a></li>
                        <li class='<?php $current; ?>'><a href="Events.php.">Events</a></li>
                       <li class='<?php $current; ?>'><a href="Blogs.php">Blogs</a></li>
                        <li class='<?php $current; ?>'><a href="Gallery.php">Gallery</a></li>
                        <li><a href="Contact.php">Contact Us</a></li>
                    -->
                             
                   </ul>

                </div><!--close menubar-->
