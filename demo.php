<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
  <?php 
    if (isset($_GET['album'])) {
	  echo $_GET['album'];
	} else {
	  echo 'Photo Gallery';
	}
  ?>
</title>

<!-- start gallery header --> 
<link rel="stylesheet" type="text/css" href="folio-gallery.css" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>

<link rel="stylesheet" type="text/css" href="fancybox/fancybox.css" />
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.min.js"></script>
<script type="text/javascript">
// fancy box settings
$(document).ready(function() {	
	$("a.albumpix").fancybox({
		'autoScale	'		: true, 
		'hideOnOverlayClick': true,
		'hideOnContentClick': true
	});
});
</script>
<!-- end gallery header -->
</head>
<body>

<div align="center" style="font-size:13px;font-weight:bold;">
  <a href="http://www.foliopages.com/php-photo-gallery-without-database">&laquo; Back to FolioPages.com</a>
</div>

<p>&nbsp;</p>

<div class="gallery">  
  <?php include "folio-gallery.php"; ?>
</div>   

</body>
</html>