<?php
require "dealer.php";

$d = new dealerData();
$dd = $d->getDealerInfo(22);
var_dump($dd);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> &nbsp; Butchers & Bicycles</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<link rel="shortcut icon" type="image/png" href="images/logo3.png"/>
<link href="style.css" rel="stylesheet" type="text/css" />
<!--slider-->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
 <script src="js/jquery-1.10.2.js"></script>
<script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">

    $(window).load(function(){
      $('.flexslider2').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<!--slider-->
<!--chat dropdown-->
 <script src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
 <script>
/* $(function() {
    $("a").on("click", function() {

      var $parent = $(this).parent();
        if ($parent.hasClass('active')) {
            $parent.removeClass('active');
        }
        else{$parent.addClass('active');}

    });
}); */
</script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");
			$(".dropdown dt#dt3 .select-button").click(function() {
                $(".dropdown dd#dd3").toggle();
            });
			$(".dropdown dd#dd3 ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt#dt3 .select-button").html(text);
                $(".dropdown dd#dd3").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
			function getSelectedValue(id) {
                return $("#" + id).find("dt#dt3 a span.value").html();
            }
			$(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd#dd3").hide();
            });

            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
<!-- Owl Carousel Assets -->
<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<script src="js/modernizr.custom.17475.js"></script>
<link rel="stylesheet" href="css/menu.css">
</head>
<body class="home common">
 <div id="wrapper">
        <div class="nav-1 nav-collapse">
 	  <div id="sidebar">
      	   <div class="sidebar_top">
           		<div class="builder_box">
                	 <div class="main-menu">
      <div class="nav-mixed menu">
        <nav id="multi-level-nav" class="multi-level-nav" role="navigation">
          <ul>
            <li class="has-children">
              <a href="#"><button class="dropdown-toggle" aria-expanded="false"></button></a>
              <ul class="sub-menu">
              	<li class="menu_title">Bike<br />builder</li>
                <li><a href="builder.html">MK1<button class="dropdown-toggle" aria-expanded="false"></button></a>
                </li>
                <li><a href="builder.html">MK1-E</a>
                </li>
                <li><a href="builder.html">MK1-E pro</a>

                </li>
              </ul>
            </li>
          </ul>
        </nav><!-- #multi-level-nav .multi-level-nav -->

      </div><!-- .mixed-menu -->
      </div>
                </div>

                <div class="cart_box">
                	 <a href="#" class="cart_icon"></a>
                     <span class="cart_quantity"></span>
                </div>
           </div><!--close sidebar_top-->
           <div class="sidebar_bottom">
           		<div class="main-menu">
      <div class="nav-mixed menu">
        <nav id="multi-level-nav" class="multi-level-nav" role="navigation">
          <ul>
            <li class="has-children">
              <a href="products.html">products<button class="dropdown-toggle" aria-expanded="false"><span class="screen-reader-text">Expand child menu</span></button></a>
              <ul class="sub-menu">
                <li><a href="productpage-mk1.html">Mk1</a></li>
                <li><a href="productpage-mk1e.html">Mk1-E</a></li>
                <li><a href="productpage-mk1e-pro.html">Mk1-E Pro</a></li>
                <li><a href="products.html">Accesories</a></li>
              </ul>
            </li>
            <li><a href="techspecs.html">tech info</a></li>
            <li><a href="dealers.html">dealers</a></li>
            <li><a href="about.html">about us</a></li>
            <li><a href="follow us.html">follow us</a></li>
            <li><a href="help.html">help</a></li>
            <li><a href="contact.html">contact</a></li>
            <li><a href="downloads.html">downloads</a></li>
          </ul>
        </nav><!-- #multi-level-nav .multi-level-nav -->

      </div><!-- .mixed-menu -->
      </div><!-- main-menu -->
           </div><!--close sidebar_bottom-->
      </div><!--close sidebar-->
      </div>

 	  <div id="header">
      	   <div class="container">
           		<div class="header_left">
                	 <dl id="sample" class="dropdown">
                        <dt id="dt3"><span class="select-button">EN</span></dt>
                        <dd id="dd3">
                           <ul>
                                <li><a href="javascript:void(0);">language1</a></li>
                                <li><a href="javascript:void(0);">language2</a></li>
                                <li><a href="javascript:void(0);">language3</a></li>
                                <li><a href="javascript:void(0);">language4</a></li>
                            </ul>
                        </dd>
                    </dl>
                </div><!--close header_left-->

                <a href="index.html" class="logo3"><img src="images/logo3.png" alt="" /></a>

                <div class="header_right">
                	 <div id="button">

                          <a href="#" class="menu_class">Chat Support</a>
                          <div class="the_menu">
                    			<div class="chat_box">
                                      <div class="chat_top">

                                      <div class="baron baron__root baron__clipper _ubuntu12">
                <div class="baron__scroller content">
                    <h5>Morten - 17.25</h5>
                                                <h6>Thanks for contacting us. My name is Morten, how can I help you?</h6>

                                                <h5>You - 17.28</h5>
                                                <h6>Jibjib</h6>

                                                <h5>You - 17.28</h5>
                                                <h6>Jibjib</h6>

                                                <h5>You - 17.28</h5>
                                                <h6>Jibjib</h6>

                                                <h5>You - 17.28</h5>
                                                <h6>Jibjib</h6>

                                                <h5>You - 17.28</h5>
                                                <h6>Jibjib</h6>

                                                <h5>You - 17.28</h5>
                                                <h6>Jibjib</h6>

                                                <h5>You - 17.28</h5>
                                                <h6>Jibjib</h6>
                </div>
                <div class="baron__track">
                    <div class="baron__control baron__up">▲</div>
                    <div class="baron__free">
                        <div class="baron__bar"></div>
                    </div>
                    <div class="baron__control baron__down">▼</div>
                </div>
            </div>

                                      </div><!--close chat_top-->

                                      <div class="chat_bottom">
                                           <span class="chat_form"><textarea name="" cols="" rows="" class="chat_textarea" value="Hello ..." onfocus="if (this.value == 'Hello ...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Hello ...';}">Hello ...</textarea></span>
                                           <span class="chat_form"><button class="button1 chat_button">send</button></span>
                                      </div><!--close chat_bottom-->
                                 </div><!--close chat_box-->
                          </div><!--close the_menu-->
                    </div><!--close button-->
                </div><!--close header_right-->
           </div><!--close container-->
      </div><!--close header-->

      <div id="header_bottom">
      	   <div class="container">
           		<div class="logo"><a href="index.html"><img src="images/logo.png" alt="" /></a></div>
                <div class="logo2"><a href="index.html"><img src="images/logo2.png" alt="" /></a></div>
           </div><!--close container-->
      </div><!--close header_bottom-->

      <div id="slider_home">
      	   <div class="container">
              <div class="flexslider2">
                <ul class="slides">
                    <li><img class="normalview" src="images/slider1.jpg" alt="" media="(min-width:480px)"/><img class="mobileview" src="images/slidermobile.jpg" alt="" media="(max-width:479px)"/></li>
                    <li><img class="normalview" src="images/slider1.jpg" alt="" media="(min-width:480px)"/><img class="mobileview" src="images/slidermobile.jpg" alt="" media="(max-width:479px)"/></li>
                    <li><img class="normalview" src="images/slider1.jpg" alt="" media="(min-width:480px)"/><img class="mobileview" src="images/slidermobile.jpg" alt="" media="(max-width:479px)"/></li>
                </ul>
              </div>
          </div>
     </div><!--close slider-->

     <div id="content">
     	  <div class="container">
          	   <div class="gray_bg">
               		<div class="home_about">
                    	 <div class="home_about_inner">
                         	  <h1>danish design. hand built in the meatpacking district of copenhagen.</h1>
                              <h6><a href="about.html">About us</a></h6>
                              <p>Same trike and the same specifications as on the standard Mk1 or Mk1-E, but mounted with a closed lockable box in front with a massive 230 liter volume. Perfect for delivery purposes.<br />
<br />
The PRO model is avaiable with or without motor assist. The MK1-E,PRO (shown below) with the powerfull Bosch Perfomance system or as MK1,PRO</p>
                         </div><!--close home_about_inner-->
                    </div><!--close home_about-->

                    <div class="home_banner"><img src="images/banner1.jpg" alt="" /></div>
                    <div class="home_banner"><img src="images/banner2.jpg" alt="" /></div>

                    <div class="home_product">

                         <div class="home_product_inner">
                         	  <div class="title_main">bikes</div>
                         	  <div class="product_box">
                              	   <div class="product_image"><a href="productpage-mk1.html"><img src="images/product1.jpg" alt="" /></a></div>
                                   <div class="product_text">
                                       <span class="product_title">Mk1</span>
                                       <span class="product_pera">Lorem ipsum dolor sit consectetu.</span>
                                   </div>
                              </div><!--close product_box-->

                              <div class="product_box">
                              	   <div class="product_image"><a href="productpage-mk1e.html"><img src="images/product2.jpg" alt="" /></a></div>
                                   <div class="product_text">
                                       <span class="product_title">Mk1-e</span>
                                       <span class="product_pera">Lorem ipsum dolor sit consectetu.</span>
                                   </div>
                              </div><!--close product_box-->

                              <div class="product_box">
                              	   <div class="product_image"><a href="productpage-mk1e-pro.html"><img src="images/product3.jpg" alt="" /></a></div>
                                   <div class="product_text">
                                       <span class="product_title">Mk1-e <span>pro</span></span>
                                       <span class="product_pera">Lorem ipsum dolor sit consectetu.</span>
                                   </div>
                              </div><!--close product_box-->
                         </div><!--close home_product_inner-->
                    </div><!--close home_product-->

                    <div class="home_social">
                         <div class="home_social_inner">
                         	  <div class="title_main">social</div>
                         </div><!--close home_social_inner-->
                         <div id="gallery">
                              <ul id="carousel" class="elastislide-list">
                                    <li>
                                    	<img src="images/g1.png" alt="" />

                                    </li>
                                    <li>
                                    	<img src="images/g2.png" alt="" />

                                    </li>
                                    <li>
                                    	<img src="images/g3.png" alt="" />

                                    </li>
                                    <li>
                                    	<img src="images/g4.png" alt="" />

                                    </li>
                                    <li>
                                    	<img src="images/g5.png" alt="" />

                                    </li>
                                    <li>
                                    	<img src="images/g1.png" alt="" />

                                    </li>
                                    <li>
                                    	<img src="images/g2.png" alt="" />

                                    </li>
                                    <li>
                                    	<img src="images/g3.png" alt="" />

                                    </li>
                                    <li>
                                    	<img src="images/g4.png" alt="" />

                                    </li>
                                    <li>
                                    	<img src="images/g5.png" alt="" />

                                    </li>
                                    <li>
                                    	<img src="images/g1.png" alt="" />

                                    </li>
                                    <li>
                                    	<img src="images/g2.png" alt="" />

                                    </li>
                                    <li>
                                    	<img src="images/g3.png" alt="" />
                                    </li>
                                    <li>
                                    	<img src="images/g4.png" alt="" />

                                    </li>
                                    <li>
                                    	<img src="images/g5.png" alt="" />
                                    </li>
                                </ul>
                         </div><!--close gallery-->
                    </div><!--close home_social-->

                    <div class="home_map">

                    	  <div class="home_social_inner">
                         	  <div class="title_main">dealers</div>
                         </div><!--close home_social_inner-->

                         <div class="map_inner">

                    	 <div class="map_left">
                       <span class="map_title_new">dealers</span>
                       <div class="map_infowindow" style="">
                         	  <div class="map_icon"><img src="mapmarker.png" alt="" /></div>
                              <h4>Denmark</h4>
                              <h5>OrangeBikeConcept</h5>
                              <h6>Slagtehusgade 5A<br />1715 Copenhagen V</h6>
                              <a href="#" class="map_link">Website</a>
                              <div class="map_logo"><img src="images/side_logo.png" alt="" /></div>
                              </div>
                         </div>
                         <div class="map_right"><div id="map"></div></div>
                         </div>
                    </div><!--close home_map-->
               </div><!--close gray_bg-->
          </div><!--close container-->
     </div><!--close content-->

     <div id="footer">
     	  <div class="container">
          	   <div class="footer_inner">
               		<div class="footer_row">
                    	 <div class="footer_box">
                         	  <h4>about</h4>
                              <ul>
                              		<li><a href="about.html">About us</a></li>
                                  <li><a href="techspecs.html">Tech Info</a></li>
                                    <li><a href="about.html#the-team">The Team</a></li>
                                    <li><a href="dealers.html">dealers</a></li>
                                    <li><a href="contact.html">contact</a></li>
                              </ul>
                         </div><!--close footer_box-->

                         <div class="footer_box">
                         	  <h4>Products</h4>
                              <ul>
                              		<li><a href="productpage-mk1.html">Mk1</a></li>
                                    <li><a href="productpage-mk1e.html">Mk1-E</a></li>
                                    <li><a href="productpage-mk1e-pro.html">Mk1-E Pro</a></li>
                                    <li><a href="products.html">Accesories</a></li>
                              </ul>
                         </div><!--close footer_box-->

                         <div class="footer_box">
                         	  <h4>help</h4>
                              <ul>
                              		<li><a href="help.html">FAQ’s</a></li>
                                    <li><a href="help.html#shipping-terms">Shipping and delivery terms</a></li>
                                    <li><a href="help.html#warranty-terms">Warranty terms</a></li>
                                    <li><a href="help.html#payment-terms">Payment terms</a></li>
                              </ul>
                         </div><!--close footer_box-->

                         <div class="footer_box">
                         	  <!--  <h4>join our mailing list</h4>
                               <span class="footer_search"><input name="" type="text" class="search_input" value="Your E-mail" onfocus="if (this.value == 'Your E-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Your E-mail';}"/></span>  -->
                              <span class="footer_social">
                              	  <a href="#" class="icon1"></a>
                                  <a href="#" class="icon2"></a>
                                  <a href="#" class="icon3"></a>
                                  <a href="#" class="icon4"></a>
                              </span>
                         </div><!--close footer_box-->

                         <div class="footer_mobile1">
                         	  <ul>
                              		<li><a href="about.html">About us</a></li>
                                  <li><a href="techspecs.html">Tech Info</a></li>
                                    <li><a href="dealers.html">Dealers</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="help.html">Help</a></li>
                              </ul>
                         </div>
                         <div class="footer_mobile2">
                         	   <a href="#" class="icon1"></a>
                               <a href="#" class="icon2"></a><br />
                               <a href="#" class="icon3"></a>
                               <a href="#" class="icon4"></a>
                         </div>
                    </div><!--close footer_row-->
               </div><!--close footer_inner-->
          </div><!--close container-->
     </div><!--close footer-->

 </div><!--close wrapper-->
<script type="text/javascript" src="js/jquerypp.custom.js"></script>
<script type="text/javascript" src="js/jquery.elastislide.js"></script>
<script type="text/javascript">
	$( '#carousel' ).elastislide( {
		minItems : 1
	} );
</script>
<script src="js/baron.js"></script>
<script src="js/script.js"></script>
<!--responsive navigation-->
<link rel="stylesheet" href="responsive-nav.css" />
<script src="js/responsive-nav.js" type="text/javascript"></script>
<!--responsive navigation-->
<script src="js/index.js"></script>

<script type="text/javascript">
var navigation1 = responsiveNav(".nav-1");
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
<script type="text/javascript" src="js/markerclusterer.js"></script>
<script type="text/javascript" src="js/gmap.js"></script>
</body>
</html>
