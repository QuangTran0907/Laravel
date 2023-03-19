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
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<!-- start menu -->     
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<!-- top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
    @include('layouts.header')


       <div class="index-banner">
        <div class="wmuSlider example1" style="height: 560px;">
            <div class="wmuSlider example1" style="height: 560px;">
                <div class="wmuSliderWrapper">
                    <article style="position: relative; width: 100%; opacity: 1;"> 
                         <div class="banner-wrap">
                             <div class="slider-left">
                              <img src="img/banner1.jpg" alt=""/> 
                          </div>
                           <div class="slider-right">
                              <h1>Classic</h1>
                              <h2>White</h2>
                              <p>Lorem ipsum dolor sit amet</p>
                              <div class="btn"><a href="shop.html">Shop Now</a></div>
                           </div>
                           <div class="clear"></div>
                       </div>
                      </article>
                     <article style="position: absolute; width: 100%; opacity: 0;"> 
                          <div class="banner-wrap">
                             <div class="slider-left">
                              <img src="img/banner2.jpg" alt=""/> 
                          </div>
                           <div class="slider-right">
                              <h1>Classic</h1>
                              <h2>White</h2>
                              <p>Lorem ipsum dolor sit amet</p>
                              <div class="btn"><a href="shop.html">Shop Now</a></div>
                           </div>
                           <div class="clear"></div>
                       </div>
                     </article>
                     <article style="position: absolute; width: 100%; opacity: 0;">
                         <div class="banner-wrap">
                             <div class="slider-left">
                              <img src="img/banner1.jpg" alt=""/> 
                          </div>
                           <div class="slider-right">
                              <h1>Classic</h1>
                              <h2>White</h2>
                              <p>Lorem ipsum dolor sit amet</p>
                              <div class="btn"><a href="shop.html">Shop Now</a></div>
                           </div>
                           <div class="clear"></div>
                       </div>
                     </article>
                     <article style="position: absolute; width: 100%; opacity: 0;">
                         <div class="banner-wrap">
                             <div class="slider-left">
                              <img src="img/banner2.jpg" alt=""/> 
                          </div>
                           <div class="slider-right">
                              <h1>Classic</h1>
                              <h2>White</h2>
                              <p>Lorem ipsum dolor sit amet</p>
                              <div class="btn"><a href="shop.html">Shop Now</a></div>
                           </div>
                           <div class="clear"></div>
                       </div>
                     </article>
                     <article style="position: absolute; width: 100%; opacity: 0;"> 
                          <div class="banner-wrap">
                             <div class="slider-left">
                              <img src="img/banner1.jpg" alt=""/> 
                          </div>
                           <div class="slider-right">
                              <h1>Classic</h1>
                              <h2>White</h2>
                              <p>Lorem ipsum dolor sit amet</p>
                              <div class="btn"><a href="shop.html">Shop Now</a></div>
                           </div>
                           <div class="clear"></div>
                       </div>
                    </article>
                  </div>
                  <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                  <ul class="wmuSliderPagination">
                      <li><a href="#" class="">0</a></li>
                      <li><a href="#" class="">1</a></li>
                      <li><a href="#" class="wmuActive">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                    </ul>
                   <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a><ul class="wmuSliderPagination"><li><a href="#" class="wmuActive">0</a></li><li><a href="#" class="">1</a></li><li><a href="#" class="">2</a></li><li><a href="#" class="">3</a></li><li><a href="#" class="">4</a></li></ul></div>
                   <script src="js/jquery.wmuSlider.js"></script> 
                   <script type="text/javascript" src="js/modernizr.custom.min.js"></script> 
                          <script>
                                  $('.example1').wmuSlider();         
                             </script> 	           	      
               </div>
            
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