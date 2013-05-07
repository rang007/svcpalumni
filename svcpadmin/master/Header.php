
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
 SVCP-Alumni Administrator
</title>

<!-- start gallery header --> 
<link rel="stylesheet" type="text/css" href="folio-gallery.css" />
<link rel="stylesheet" type="text/css" href="fancybox/fancybox.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/image_slide.js"></script>
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
        <script type="text/javascript" src="js/image_fade.js"></script>
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

<!-- required for this demo -->
        <link rel="stylesheet" href="css/slideshows.css" />
        <!--<script src="js/jquery.min.js"></script>-->

        <script src="js/jquery.cycle.all.js"></script>

        <script src="js/jquery.easing.1.3.js"></script>

        <script>
            $(function() {

                $('#slideshow_3').cycle({
                    fx: 'uncover',
                    speed: 500,
                    timeout: 1000,
                    pager: '.ss3_wrapper .slideshow_paging',
                    pagerAnchorBuilder: pager_create,
                    prev: '.ss3_wrapper .slideshow_prev',
                    next: '.ss3_wrapper .slideshow_next',
                    before: function(currSlideElement, nextSlideElement) {
                        var data = $('.data', $(nextSlideElement)).html();
                        $('.ss3_wrapper .slideshow_box .data').fadeOut(300, function() {
                            $('.ss3_wrapper .slideshow_box .data').remove();
                            $('<div class="data">' + data + '</div>').hide().appendTo('.ss3_wrapper .slideshow_box').fadeIn(600);
                        });
                    }
                });

                function pager_create(id, slide) {
                    var thumb = $('.thumb', $(slide)).html();
                    var title = $('h4 a', $(slide)).html();
                    var add_first = (id == 0) ? ' class="first"' : '';
                    return '<li><a href="#" title="' + title + '"' + add_first + '>' + thumb + '</a></li>';
                }
                ;

                // not using the 'pause' option. instead make the slideshow pause when the mouse is over the whole wrapper
                $('.ss3_wrapper').mouseenter(function() {
                    $('#slideshow_3').cycle('pause');
                }).mouseleave(function() {
                    $('#slideshow_3').cycle('resume');
                });




                // ---------------------------------------------------

                $('a[href="#"]').click(function(event) {
                    event.preventDefault(); // for this demo disable all links that point to "#"
                });

            });
        </script>
     <script type="text/javascript">
            $(function() {
                $("#lava_menu").lavaLamp({
                    fx: "backout",
                    speed: 700
                });
            });
        </script>
        
        

      
