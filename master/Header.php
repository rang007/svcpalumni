<title>
    SVCP-Alumni
</title>
<!--<link rel='stylesheet' href='js-form-validation.css' type='text/css' />-->



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

<!--<script type="text/javascript" src="js2/jquery-1.8.3.min.js"></script>-->
<script type="text/javascript" src="js2/jquery.elevateZoom-2.5.5.min.js"></script>

<script type="text/javascript">
// fancy box settings
    $(document).ready(function() {
	     //$("#zoom_07").elevateZoom({
			//zoomType				: "lens",
			//lensShape : "round",
			//lensSize    : 400
			//});
			
			$("#zoom_07").elevateZoom({
  zoomType				: "lens",
  lensShape : "round",
  easing : true,
  lensSize    : 400
});
        //var blog_id = $("#current_blog").val();  
		$("#zoom_04a").elevateZoom({zoomWindowPosition: 1});
        $("#zoom_04b").elevateZoom({zoomWindowPosition: 6,tint:true, tintColour:'#F90', easing : true, tintOpacity:0.5});
        $("#zoom_04pb").elevateZoom({zoomWindowPosition: 2,tint:true, tintColour:'#F90', easing : true, tintOpacity:0.5});
        //$("#zoom_04aub"+blog_id).elevateZoom({zoomWindowPosition: 2,tint:true, tintColour:'#F90', tintOpacity:0.5});
   		$("#zoom_04c").elevateZoom({zoomWindowPosition: "demo-container", easing : true, zoomWindowHeight: 400, zoomWindowWidth:600, borderSize: 0, easing:true});
        $("#zoom_04d").elevateZoom({zoomWindowPosition: 1, zoomWindowOffetx: 10});
        
        $("a.albumpix").fancybox({
            'autoScale	': true,
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
            speed: 800,
            timeout: 3000,
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
