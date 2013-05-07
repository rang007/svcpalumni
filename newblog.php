<?php
session_start();
if (isset($_POST['title']) && isset($_POST['blog_detail']) )
{
    $title = $_POST['title'];
    $blog_detail = $_POST['blog_detail'];
    
    $author_name =$_SESSION['svcpuser_name']; 
    $author_image=$_SESSION['svcpprofile_image'];
    $user_id = $_SESSION['svcpuser_id'];
    $login_name = $author_name.  rand(1, 999);
     
     

    if (!empty($_FILES['file']['name'])) {
        $allowedExts = array("gif", "jpeg", "jpg", "png");
        //if (($_FILES["file"]["type"] != "gif") || ($_FILES["file"]["type"] != "jpeg") || ($_FILES["file"]["type"] != "jpg") || ($_FILES["file"]["type"] != //"png")) {
            //header("Location: Registration.php?msg=select image file only");
            //echo $_FILES["file"]["type"];
            //exit();
        //}
        $extension = end(explode(".", $_FILES["file"]["name"]));

        if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 20000000) && in_array($extension, $allowedExts)) {
            if ($_FILES["file"]["error"] > 0) {
                //echo "invalid extention" . $_FILE['file']['error'];
                //header("Location: Registration.php?msg=Select Correct Picture");
                exit();
            } else {
                //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
                //echo "Type: " . $_FILES["file"]["type"] . "<br>";
                //echo "Size: " . ($_FILES["file"]["size"] / 8024) . " kB<br>";
                //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

                //make folder
                //$album = $_POST['album'];
                if (!is_dir('blogimages/' . $login_name)) {
                    mkdir('blogimages' . '/' . $login_name);
                    chmod('blogimages/' . $login_name, 0777);
                } else {
                    //return 'invalid';
                }

                move_uploaded_file($_FILES["file"]["tmp_name"], "blogimages/" . $login_name . '/' . $_FILES["file"]["name"]);
                
                
                $path = "blogimages/" . $login_name . "/" . $_FILES["file"]["name"];
            }
        } else {
            //return "invalid";
            $path="image not uploaded!";
        }
    } else {
        //header("Location: upload.php?msg=please select image");
        $path="image not uploaded!";
    }

    $blog_image = $path;
   

    require_once 'inputoutput/db_connect.php';
// connecting to db
    $db = new DB_CONNECT();

    $result = mysql_query(
            "INSERT INTO blog_table(
            blog_title, 
            blog_detail,
            author_name,
            author_image, 
            blog_image, 
            user_id
            ) 
            VALUES(
                '$title', 
                '$blog_detail',    
                '$author_name', 
                '$author_image',
                '$blog_image',
                '$user_id' 
            )");


// check if row inserted or not
    if ($result) {

        //header("Location: index.php?registermsg=Registration Successfull&login_name=".$login_name);
        //exit();
        
        header("Location: CreateBlog.php?createblogmsg=blog created");
        exit();
        
    } else {

        header("Location: CreateBlog.php?createblogmsg=blog not created");
        exit();
    }
} else {
    
        header("Location: CreateBlog.php?createblogmsg=Error Try Again");
        exit();
}
?>