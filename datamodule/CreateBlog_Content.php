<?php
if(isset($_GET['createblogmsg']))
{
    echo'<script>
            alert("New blog created and posted");
        </script>
        ';
}
?>
<div id="content">

    <div class="content_item">
        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Blogs.php">Back</a></h3>
        <h2><b>Create Blog</b></h2>
        <h2>If you want to post only a photo in your blog then select photo and leave title and detail fields blank ...</h2> 
    </div>

    <div class="content_item">
        <form method="post" action="newblog.php" enctype="multipart/form-data">
        <div style="width:120px; float:left;"><p>Image</p></div>
        <div style="width:430px; float:right;"><p><input type="file" name="file" id="file"></p></div>
        <br style="clear:both;"/>
        <div style="width:120px; float:left;"><p>Title</p></div>
        <div style="width:430px; float:right;"><p><input class="contact" type="text" name="title" size="40" value="" /></p></div>
        <br style="clear:both;"/>
        <div style="width:120px; float:left;"><p>View in detail</p></div>
        <div style="width:430px; float:right;"><p><textarea class="contact_textarea" rows="8" cols="50" name="blog_detail"></textarea></p></div>
        <br style="clear:both;"/>
        <div style="width:430px; float:right;"><p style="padding-top: 15px"><input class="submit" type="submit" name="contact_submitted" value="Create" />&nbsp;<a href="Blogs.php">Back</a></p></div>
       </form>         
     </div><!--close content_item-->
               
</div><!--content-->
               