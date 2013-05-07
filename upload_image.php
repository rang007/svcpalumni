<?php
session_start();
$login_name = $_SESSION['svcplogin_name'];
$uid = $_GET['uid'];
function createThumbs($pathToImages, $pathToThumbs, $thumbWidth) {
    // open the directory
    $dir = opendir($pathToImages);

    // loop through it, looking for any/all JPG files:
    while (false !== ($fname = readdir($dir))) {
        // parse path for the extension
        $info = pathinfo($pathToImages . $fname);
        // continue only if this is a JPEG image
        if (strtolower($info['extension']) == 'jpg') {
            //echo "Creating thumbnail for {$fname} <br />";

            // load image and get image size
            $img = imagecreatefromjpeg("{$pathToImages}{$fname}");
            $width = imagesx($img);
            $height = imagesy($img);
            
            //**********//
//                $new_height = floor($height*($thumb_width/$width));
//                $new_width = $thumbWidth;
//           
//        	$virtual_image = imagecreatetruecolor($thumbWidth,$thumb_height);
//	
//                imagecopyresampled($virtual_image,$source_image,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
//	
//                imagejpeg($virtual_image,$dest,100);
//	
            //**********//
        
            // calculate thumbnail size
            $new_width = $thumbWidth;
            $new_height = floor($height * ( $thumbWidth / $width ));
            
            // create a new temporary image
            $tmp_img = imagecreatetruecolor($new_width, $new_height);

            // copy and resize old image into new image
            imagecopyresized($tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            //imagecopyresized($tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
             //imagecopyresampled($tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

            // save thumbnail into a file
            imagejpeg($tmp_img, "{$pathToThumbs}{$fname}");
        }
    }
    // close the directory
    closedir($dir);
}

//echo $login_name;

if (!empty($_FILES['file']['name'])) {
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    //if(($_FILES["file"]["type"] != "gif") || ($_FILES["file"]["type"] != "jpeg") || ($_FILES["file"]["type"] != "jpg") || ($_FILES["file"]["type"] != "png"))
    //{
      //      header("Location: upload.php?msg=".$_FILES["file"]["type"]);
        //    exit();
    //}
    $extension = end(explode(".", $_FILES["file"]["name"]));
    
    if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 20000000) && in_array($extension, $allowedExts)) {
        if ($_FILES["file"]["error"] > 0) {
            //echo "invalid extention" . $_FILE['file']['error'];
            header("Location: upload.php?msg=Select Correct Picture");
            exit();
        } else {
            //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            //echo "Type: " . $_FILES["file"]["type"] . "<br>";
            //echo "Size: " . ($_FILES["file"]["size"] / 3024) . " kB<br>";
            //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

            //make folder
            //$album = $_POST['album'];
            if (!is_dir('profileimages/' . $login_name)) {
				chmod('profileimages/', 0777);
                mkdir('../profileimages' . '/' . $login_name,true);
                chmod('profileimages/' . $login_name, 0777);
            } else {
                //return 'invalid';
            }

            //image already exist 
            //if (file_exists("profileimages/" . $login_name . "/" . $_FILES["file"]["name"])) {
            //return "invalid";
            //} else {

			move_uploaded_file($_FILES["file"]["tmp_name"], "profileimages/" . $login_name . '/' . $_FILES["file"]["name"]);
			$path = "profileimages/" . $login_name . "/" . $_FILES["file"]["name"];
			
			if (!is_dir('profileimages/' . $login_name.'/'.'thumb')) {
                mkdir('profileimages' . '/' . $login_name . '/' . 'thumb');
                chmod('profileimages/' . $login_name . '/thumb', 0777);
            } else {
                //return 'invalid';
            }
            // call createThumb function and pass to it as parameters the path
            // to the directory that contains images, the path to the directory
            // in which thumbnails will be placed and the thumbnail's width.
            // We are assuming that the path will be a relative path working
            // both in the filesystem, and through the web for links
            createThumbs("profileimages/" . $login_name . "/", "profileimages/" . $login_name . "/thumb/", 100);
            $path2 = "profileimages/" . $login_name . "/thumb/" . $_FILES["file"]["name"];

            //if(!move_uploaded_file($_FILES["file"]["tmp_name"], "profileimages/" . $login_name . '/' . $_FILES["file"]["name"])){
            	//$path = "profileimages/blankprofile.png";
			
			//}else{
				//$path = "profileimages/" . $login_name . "/" . $_FILES["file"]["name"];
			
			//}
            require_once 'inputoutput/db_connect.php';
// connecting to db
            $db = new DB_CONNECT();
//$uid=$_SESSION['user_id'];
            $result = mysql_query("update user_table set user_profile_image='$path' WHERE user_id='$uid'");
            $result2 = mysql_query("update blog_table set author_image='$path' WHERE user_id='$uid'");
            $result3 = mysql_query("update comment_table set user_image='$path' WHERE user_id='$uid'");
//   update users set username='JACK' and password='123' WHERE id='1';
            if ($result && $result2 && $result3) {
                
                $_SESSION['svcpprofile_image']=$path;
                header("Location: Profile.php?msg=Profile Picture change");
                exit();
              } else {
                //echo 'path=' . $path;
                //echo '<br>' . $result;
            }

            //return $path;
            //}
        }
    } else {
        //return "invalid";
    }
} else {
    header("Location: upload.php?msg=please select image");
}
?>
