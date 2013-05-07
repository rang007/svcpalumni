<?php

$loop = 1;
$album= $_POST['album'];
print $_FILES['pix']['name'][$loop];

function or_f($a, $b) {
    return $a || $b;
}

// create thumbnails from images
function make_thumb($folder,$src,$dest,$thumb_width) {

	$source_image = imagecreatefromjpeg($folder.'/'.$src);
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	
	$thumb_height = floor($height*($thumb_width/$width));
	
	$virtual_image = imagecreatetruecolor($thumb_width,$thumb_height);
	
	imagecopyresampled($virtual_image,$source_image,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
	
	imagejpeg($virtual_image,$dest,100);
	
}



function file_has_extension($fn, $ext) {
    if (is_array($ext))
        return array_reduce(array_map(create_function('$a', 'return file_has_extension(\'' . $fn . '\', $a);'), $ext), 'or_f', false);
    else
        return stripos($fn, '.' . strtolower($ext)) === strlen($fn) - strlen($ext) + 1;
}

$image_extensions = array(
    'png',
    'jpg',
    'jpeg',
    'gif',
    'bmp'
);
if (!isset($_POST['Upload'])) {
    include("Image_Gallery_Content.php");
} else {
    $loop = "-1";
    while ($loop < 5) {
        $loop++;
        if ($_FILES['pix']['name'][$loop] == "")
            continue;
        if ($_FILES['pix']['tmp_name'][$loop] == "none") {
            echo "<b>File did not successfully upload. Check the
            file size. File must be less than 500K.<br>";
            //include("picform.php");
            exit();
        }
        if (file_has_extension($_FILES['pix']['name'][$loop], $image_extensions)) {
            echo "<b>File is not a picture. Please try another
            file.</b><br>";
            include("Image_Gallery_Content.php");
            exit();
        } else {
            
            if (!is_dir('albums/'.$album)) {
              mkdir('albums'.'/'.$album);
              chmod('albums/'.$album, 0777);
            }
			else{
				echo 'Directory not found';
			}

            $destination = $_FILES['pix']['name'][$loop];
            $destination = strtolower($destination);
            $rest = substr($destination, -3, 3);
            $temp_file = $_FILES['pix']['tmp_name'][$loop];
            move_uploaded_file($temp_file, "albums/".$album."/".$destination);
            
             if (!is_dir('albums/'.$album.'/thumbs')) {
              mkdir('albums/'.$album.'/thumbs');
              chmod('albums/'.$album.'/thumbs', 0777);
              //chown($src_folder.'/thumbs', 'apache'); 
           }
		   $thumb_width   = '120';      // width of thumbnails
                   $thumb_height  = '85';       // height of thumbnails
                   //$mainFolder    = 'albums';
                   //$src_folder = $mainFolder.'/'.$album;
		   $thumb = 'albums/'.$album.'/thumbs/'.$destination;
                   
           if (!file_exists($thumb)) {
              make_thumb('albums',$destination,$thumb,$thumb_width); 
          
		   }
        }
    }
        echo'
            <script>
            alert(Gallery album Created !);
            </script>';
     //header("Location: Image_Gallery.php");
}
?> 