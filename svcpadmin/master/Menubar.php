<div id="menubar">
    <ul class="lavaLampWithImage" id="lava_menu">

        <?php
        //$current=$_GET['current'];
        //index
        if ($current == 'index2') {
            $setindex = "current";
        } else {
            $setindex = '';
        }

        //profile
        if ($current == 'profile') {
            $setprofile = "current";
        } else {
            $setprofile = '';
        }
        
        //news
        if ($current == 'news') {
            $setnews = "current";
        } else {
            $setnews = '';
        }

        //events
        if ($current == 'events') {
            $setevents = "current";
        } else {
            $setevents = '';
        }

        //blogs
        if ($current == 'blogs') {
            $setblogs = "current";
        } else {
            $setblogs = '';
        }

        //gallery
        if ($current == 'gallery') {
            $setgallery = "current";
        } else {
            $setgallery = '';
        }

        //contact
        if ($current == 'conatct') {
            $setcontact = "current";
        } else {
            $setcontact = '';
        }

        //user
        if ($current == 'users') {
            $setuser = "current";
        } else {
            $setuser = '';
        }

        //reports
        if ($current == 'reports') {
            $setreports = "current";
        } else {
            $setreports = '';
        }

//        echo '<li class="' . $setindex . '"><a href="index.php">Home</a></li>';
//        echo '<li class="' . $setnews. '"><a href="News.php">News</a></li>';
//        echo '<li class="' . $setevents . '"><a href="Events.php">Events</a></li>';
//        echo '<li class="' . $setblogs . '"><a href="Blogs.php">Blogs</a></li>';
//        echo '<li class="' . $setgallery . '"><a href="Gallery.php">Gallery</a></li>';
//        echo '<li class="' . $setuser . '"><a href="Users.php">Users</a></li>';
//        echo '<li class="' . $setreports . '"><a href="Reports.php">Reports</a></li>';
//        
        echo '<li class="' . $setindex . '"><a href="index2.php">Home</a></li>';
        echo '<li class="' . $setnews. '"><a href="News.php">News</a></li>';
        echo '<li class="' . $setevents . '"><a href="Events.php">Events</a></li>';
        echo '<li class="' . $setblogs . '"><a href="Blogs.php">Blogs</a></li>';
        echo '<li class="' . $setgallery . '"><a href="Image_Gallery.php">Gallery</a></li>';
        echo '<li class="' . $setuser . '"><a href="Users.php">Users</a></li>';
        
        
        ?>        


    </ul>

</div><!--close menubar-->
