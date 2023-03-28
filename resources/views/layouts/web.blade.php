<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Adidas Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('css/form.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$(".dropdown img.flag").addClass("flagvisibility");

			$(".dropdown dt a").click(function () {
				$(".dropdown dd ul").toggle();
			});

			$(".dropdown dd ul li a").click(function () {
				var text = $(this).html();
				$(".dropdown dt a span").html(text);
				$(".dropdown dd ul").hide();
				$("#result").html("Selected value is: " + getSelectedValue("sample"));
			});

			function getSelectedValue(id) {
				return $("#" + id).find("dt a span.value").html();
			}

			$(document).bind('click', function (e) {
				var $clicked = $(e.target);
				if (!$clicked.parents().hasClass("dropdown"))
					$(".dropdown dd ul").hide();
			});


			$("#flagSwitcher").click(function () {
				$(".dropdown img.flag").toggleClass("flagvisibility");
			});
		});
	</script>
	<!-- start menu -->
	<link href="{{ asset('css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="{{ asset('js/megamenu')}}.js"></script>
	<script>$(document).ready(function () { $(".megamenu").megamenu(); });</script>
	<!-- end menu -->
	<script type="text/javascript" src="{{ asset('js/jquery.jscrollpane.min.js')}}"></script>
	<script type="text/javascript" id="sourcecode">
		$(function () {
			$('.scroll-pane').jScrollPane();
		});
	</script>
	<!----details-product-slider--->
	<!-- Include the Etalage files -->
	<link rel="stylesheet" href="{{ asset('css/etalage.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="{{ asset('js/jquery.etalage.min.js')}}"></script>
	<!-- Include the Etalage files -->
	<script>
		jQuery(document).ready(function ($) {

			$('#etalage').etalage({
				thumb_image_width: 300,
				thumb_image_height: 400,

				show_hint: true,
				click_callback: function (image_anchor, instance_id) {
					alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
				}
			});
			// This is for the dropdown list example:
			$('.dropdownlist').change(function () {
				etalage_show($(this).find('option:selected').attr('class'));
			});

		});
	</script>
	<!----//details-product-slider--->
	<!-- top scrolling -->
	<script type="text/javascript" src="{{ asset('js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/easing.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1200);
			});
		});
	</script>
</head>
<body>
    @include('layouts.header')


       
            
         @yield('content')
       <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
        @include('layouts.footer')
</body>
</html>