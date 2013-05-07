<?php
function createThumbs($pathToImages, $pathToThumbs, $thumbWidth) {
    // open the directory
    $dir = opendir($pathToImages);

    // loop through it, looking for any/all JPG files:
    while (false !== ($fname = readdir($dir))) {
        // parse path for the extension
        $info = pathinfo($pathToImages . $fname);
        // continue only if this is a JPEG image
        if (strtolower($info['extension']) == 'jpg') {
            echo "Creating thumbnail for {$fname} <br />";

            // load image and get image size
            $img = imagecreatefromjpeg("{$pathToImages}{$fname}");
            $width = imagesx($img);
            $height = imagesy($img);

            // calculate thumbnail size
            $new_width = $thumbWidth;
            $new_height = floor($height * ( $thumbWidth / $width ));

            // create a new temporary image
            $tmp_img = imagecreatetruecolor($new_width, $new_height);

            // copy and resize old image into new image
            imagecopyresized($tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

            // save thumbnail into a file
            imagejpeg($tmp_img, "{$pathToThumbs}{$fname}");
        }
    }
    // close the directory
    closedir($dir);
}

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['mob_no']) && isset($_POST['address']) && isset($_POST['branch']) && isset($_POST['passing_year']) && isset($_POST['current_employer']) && isset($_POST['current_possition']) && isset($_POST['birth_day']) && isset($_POST['birth_month']) && isset($_POST['birth_year'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mob_no = $_POST['mob_no'];
    $address = $_POST['address'];
    $branch = $_POST['branch'];
    $passing_year = $_POST['passing_year'];
    $current_employee = $_POST['current_employer'];
    $current_possition = $_POST['current_possition'];
    $approved_status = 0;

    $birth_day = $_POST['birth_day'];
    $birth_month = $_POST['birth_month'];
    $birth_year = $_POST['birth_year'];
//YYYY-MM-DD
    $birth_date1 = $birth_year . $birth_month . $birth_day;
    //$birth_date = date($birth_date1);
    $birth_date = date("Y-m-d", strtotime($birth_date1));
//generate user name login name
    $login_name = $first_name . rand(1, 9999);
	print_r($_FILES);
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
                header("Location: Registration.php?msg=Select Correct Picture");
                exit();
            } else {
                //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
                //echo "Type: " . $_FILES["file"]["type"] . "<br>";
                //echo "Size: " . ($_FILES["file"]["size"] / 8024) . " kB<br>";
                //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

                //make folder
                //$album = $_POST['album'];
                if (!is_dir('profileimages/' . $login_name)) {
                    //mkdir('profileimages' . '/' . $login_name);
					mkdir('profileimages' . '/' . $login_name,0777,true);
                    //chmod('profileimages/' . $login_name, 0777);
                } else {
                    header("Location: Registration.php?msg=Select Correct Picture");
   					exit();
					//return 'invalid';
                }
				
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
            }
        } else {
            //return "invalid";
            $path="image not uploaded!";
        }
    } else {
        //header("Location: upload.php?msg=please select image");
    }


//    echo $login_name . "<br>";
//    echo $birth_date . "<br>";
//    echo $gender . '<br>';


    require_once 'inputoutput/db_connect.php';
// connecting to db
    $db = new DB_CONNECT();

    $result = mysql_query(
            "INSERT INTO user_table(
            user_login_name, 
            password,
            user_first_name,
            user_last_name, 
            user_gender, 
            user_birth_day,
            user_birth_month,
            user_birth_year,
            user_mobile_no,
            user_address, 
            user_email, 
            user_branch_name, 
            user_passing_year,
            user_current_employer, 
            user_current_possition, 
            user_approved_status,
            user_profile_image) 
            VALUES(
                '$login_name', 
                '$password',    
                '$first_name', 
                '$last_name',
                '$gender',
                '$birth_day',
                '$birth_month',
                '$birth_year',
                '$mob_no',
                '$address',
                '$email',
                '$branch',
                '$passing_year',
                '$current_employee',
                '$current_possition',
                '$approved_status',
                '$path'     
            )");


// check if row inserted or not
    if ($result) {

        //echo 'Record Inserted';
        //$message = "Welcome to SVCP ALUMNI Your ID :".$login_name." password :".$password." Please wait for approval from Admin !!!";
       // $message = '<body><h3>Congratulation! <h3><br>you are successfully registered for SVCP ALUMNI !!!<br>UserID :'.$login_name.'<br>Password : //'.$password.'<br>
		//	But you are currently not approved by admin please wait for approval
		//	</body>';
		//$headers = "MIME-Version: 1.0" . "\r\n";
        //$headers = $headers . "Content-type: text/html; charset=utf-8" . "\r\n";
        //$headers = $headers . "From: svcpalumni@gmail.com";
        //$subject = "SVCP Alumni registration successful";
       //if (mail($email, $subject, $message, $headers)) {
         //       header("Location: index.php?registermsg=Registration Successfull");
			//	exit();
		//} 
		
		
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
 
 
$body             =  '<body><h3>Congratulation! <h3><br>you are successfully registered for SVCP ALUMNI !!!<br>UserID :'.$login_name.'<br>Password : '.							$password.'<br>
						But you are currently not approved by admin please wait for approval
					</body>';
//$body             = eregi_replace("[\]",'',$body);
 
require_once('PHPMailer/class.phpmailer.php');
    //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
$mailer = new PHPMailer();

$mailer->IsSMTP();
$mailer->Host = 'relay-hosting.secureserver.net';
$mailer->SMTPSecure = 'tls';
$mailer->SMTPAuth = TRUE;

$mailer->Username = 'pbiradar@engitalk.com';  // Change this to your gmail adress
$mailer->Password = 'engitalk01';  // Change this to your gmail password
$mailer->From = 'pbiradar@engitalk.com';  // This HAVE TO be your gmail adress
$mailer->FromName = 'Pandurang'; // This is the from name in the email, you can put anything you like here
//$mailer->Body = $body;
$mailer->MsgHTML($body);
$mailer->Subject = 'Registration Successful';
$mailer->AddAddress($email);  // This is where you put the email adress of the person you want to mail
if(!$mailer->Send())
{ 
   header("Location: index.php?registermsg=Registration Successfull but mail not send");

}
else
{
header("Location: index.php?registermsg=Registration Successfull.. Check your email!!!");

}
	
		
		
		
		
		
		
		
		
		
		
		
		
        //header("Location: index.php?registermsg=Registration Successfull but mail not send&login_name=".$login_name);
        //exit();
        
	}else {
    header("Location: Registration.php?msg= Error Try again!");
    exit();
	}
	
}else{
	header("Location: Registration.php?msg= Error something you miss. Try again!");
    exit();
}
?>