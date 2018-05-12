
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>Financial</title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Favicon Images -->
		<link rel="icon" href="assets/img/favicon/cropped-favicon-32x32.png" />
		<link rel="icon" href="assets/img/favicon/cropped-favicon-192x192.png" />
		<link rel="apple-touch-icon-precomposed" href="assets/img/favicon/cropped-favicon-180x180.png" />
		<meta name="msapplication-TileImage" content="assets/img/favicon/cropped-favicon-270x270.png" />

		<!-- Google Font Import -->
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">

		<!-- Animation, Icon Fonts, Bootsrap styles -->
		<link rel='stylesheet' href='assets/stylesheets/vendor/aos.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='assets/stylesheets/vendor/material-icons.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='assets/stylesheets/vendor/font-awesome.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='assets/stylesheets/vendor/socicon.min.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='assets/stylesheets/vendor/bootstrap.min.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='assets/stylesheets/vendor/preloader.css' type='text/css' media='screen' />

		<!-- *************************************************************************************** -->
		<!-- Vendor Styles Section -->
			<link rel="stylesheet" type="text/css" href="assets/stylesheets/vendor/revo/settings.css">
			<link rel="stylesheet" type="text/css" href="assets/stylesheets/vendor/revo/layers.css">
			<link rel="stylesheet" type="text/css" href="assets/stylesheets/vendor/revo/navigation.css">
		<!-- Vendor Styles Section END-->
		<!-- *************************************************************************************** -->

		<!-- Main Theme Style -->
		<link rel='stylesheet' href='assets/stylesheets/theme.min.css' type='text/css' media='screen' />

		<!-- Modernizr Scripts -->
		<script type='text/javascript' src='assets/js/vendor/modernizr.custom.js'></script>

		<!-- Init For Page Prelodaer -->
		<script type="text/javascript">
			(function () {
		    window.onload = function () {
		      var body = document.querySelector( "body" );
		      var header = body.querySelector( ".site-header" );
		      var preloader = body.querySelector( ".loading-screen" );
		      body.style.overflowY = "auto";
		      preloader.classList.add( "loading-done" );
		      header.classList.add( "loading-done" );
		    };
		  })();
		</script>
	</head>

	<body>
		<!-- It Is Preloader Markup -->
		<div class="loading-screen"><div class="spinner-wrap"><div class="spinner" id="spinner_one"></div><div class="spinner" id="spinner_two"></div><div class="spinner" id="spinner_three"></div><div class="spinner" id="spinner_four"></div></div></div>
		

		<!-- Offcanvas Sidebar -->
		<aside class="off-canvas-sidebar right-positioned">
	    <span class="close-btn"><i class="material-icons clear"></i></span>

	    <!-- Widget Start -->
	    <section class="widget widget_startapp_author">
	      <h2 class="widget-title">Our CEO</h2>

	      <div class="startapp-author text-left">
	      	<img  src="assets/img/widgets/author-offcanvas.jpg" alt="author-offcanvas" />

	        <p>I&#039;m all around great guy who invest in other great guys and ideas.</p>

	        <div class="social-bar sb-border sb-rounded sb-dark-skin inline">
	        	<a href="#" class="social-btn"><i class="socicon-facebook"></i></a>
	        	<a href="#" class="social-btn"><i class="socicon-dribbble"></i></a>
	        	<a href="#" class="social-btn"><i class="socicon-twitter"></i></a>
	        </div>
	      </div>
	    </section><!-- Widget END -->

	    <!-- Widget Start -->
	    <section class="widget widget_startapp_subscribe">
	      <h2 class="widget-title">Newsletter</h2>

	      <form method="post" target="_blank" novalidate autocomplete="off">
		      		      <p>Subscribe to our newspaper. Be informed about all new themes and updates.</p>

		      <div class="input-group">
		        <i class="material-icons mail_outline"></i>
		        <input type="email" name="EMAIL" placeholder="Enter email">
		        <button type="submit"><i class="material-icons send"></i></button>
		      </div>
	      </form>
	    </section><!-- Widget END -->

	    <!-- Widget Start -->
	    <section class="widget widget_startapp_image_carousel">
	      <h2 class="widget-title">Latest Portfolio</h2>
	      <p class="widget-description">Latest additions to our portfolio. Companies we are proud of.</p>

	      <div class="widget-inner" data-slick='{"slidesToShow":1,"arrows":false,"autoplay":true,"autoplaySpeed":4000}'>
	        <div class="carousel-item">
	        	<img src="assets/img/widgets/carousels/fin-client-logo-phil-7-300x200.png" alt="" />
	        </div>
	        <div class="carousel-item">
	        	<img src="assets/img/widgets/carousels/fin-client-logo-phil-6-300x200.png" alt="" />
	        </div>
	        <div class="carousel-item">
	        	<img src="assets/img/widgets/carousels/fin-client-logo-phil-4-300x200.png" alt="" />
	        </div>
	        <div class="carousel-item">
	        	<img src="assets/img/widgets/carousels/fin-client-logo-phil-3-300x200.png" alt="" />
	        </div>
	      </div>
	    </section><!-- Widget END -->
		</aside><!-- Offcanvas Sidebar END -->

		<!-- Site Search Form -->
		<div class="site-search-form">
			<div class="inner">
				<span class="close-btn"><i class="material-icons clear"></i></span>

				<form method="get" class="search-box" autocomplete="off">
					<input type="text" name="s" placeholder="Search" value="">
					<button type="submit"><i class="material-icons search"></i></button>
				</form>
			</div>
		</div><!-- Site Serch Form END -->
		
		<!-- Offcanvas Sidebar Mobile Menu -->
		<aside class="off-canvas-menu">
		  <span class="close-btn"><i class="material-icons clear"></i></span>

		  <!-- Main navigation -->
		  <!-- Visible only on mobile -->
		  <nav class="vertical-navigation">
		    <ul class="menu">
		      <li class="menu-item current-menu-item">
		        <a href="index.html">Home<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		      </li>

		      <li class="menu-item menu-item-has-children">
		        <a href="#">Portfolio<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

		        <ul class="sub-menu">
		          <li class="menu-item">
		            <a href="portfolio-all.html">All Projects<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>

		          <li class="menu-item">
		            <a href="portfolio-single.html">Single Portfolio<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>
		        </ul>
		      </li>

		      <li class="menu-item menu-item-has-children">
		        <a href="#">News<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

		        <ul class="sub-menu">
		          <li class="menu-item">
		            <a href="news-all.html">All News<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>

		          <li class="menu-item">
		            <a href="news-single.html">Single Post<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>
		        </ul>
		      </li>

		      <li class="menu-item menu-item-has-children">
		        <a href="#">Team<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

		        <ul class="sub-menu">
		          <li class="menu-item">
		            <a href="team-all.html">All Team<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>

		          <li class="menu-item">
		            <a href="team-single.html">Team Member<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>
		        </ul>
		      </li>

		      <li class="menu-item menu-item-has-children">
		        <a href="#">Pages<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

		        <ul class="sub-menu">
		          <li class="menu-item">
		            <a href="page-careers.html">Careers<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>

		          <li class="menu-item">
		            <a href="page-faq.html">FAQ<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>

		          <li class="menu-item">
		            <a href="page-contacts.html">Contacts<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>

		          <li class="menu-item">
		            <a href="page-philosophy.html">Philosophy<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>
		        </ul>
		      </li>
		    </ul>
		  </nav><!-- Main navigation END -->
		</aside><!-- Offcanvas Sidebar Mobile Menu END -->

		<!-- Header -->
		<header class="site-header navbar-sticky">

			<!-- Topbar -->
		  <div class="topbar topbar-primary text-light">
		    <div class="container">
		      <div class="inner">
		        <div class="column">
		          <div class="lang-switcher">
		            <span><i class="material-icons language"></i> English</span>
		            <ul class="lang-dropdown">
		              <li>
		                <a href="#">French</a>
		              </li>

		              <li>
		                <a href="#">German</a>
		              </li>

		              <li>
		                <a href="#">Italian</a>
		              </li>
		            </ul>
		          </div>
		        </div>

		        <div class="column text-right">
		          <nav class="topbar-menu">
		            <ul class="menu">
		              <li class="menu-item">
		                <a href="#">Philosophy</a>
		              </li>

		              <li class="menu-item">
		                <a href="#">Careers</a>
		              </li>

		              <li class="menu-item">
		                <a href="#">Contacts</a>
		              </li>

		              <li class="menu-item menu-item-has-children">
		                <a href="#">New York</a>

		                <ul class="sub-menu">
		                  <li class="menu-item">
		                    <a href="#">Singapore</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">London</a>
		                  </li>

		                  <li class="menu-item">
		                    <a href="#">Odessa</a>
		                  </li>
		                </ul>
		              </li>
		            </ul>
		          </nav>

		          <div class="social-bar sb-solid-bg sb-rounded sb-dark-skin text-left">
		            <a class="social-btn" href="#"><i class="socicon-facebook"></i></a>
		            <a class="social-btn" href="#"><i class="socicon-linkedin"></i></a>
		            <a class="social-btn" href="#"><i class="socicon-twitter"></i></a>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div><!-- Topbar END -->

		  <div class="site-info">
		    <div class="container">
		      <div class="inner">
		        <div class="column">
		          <a class="site-logo" href="index.html">
		          	<img alt="Financial" class="custom-logo" src="assets/img/logo.png">
		          </a>
		        </div>

		        <div class="column text-right">
		          <div class="widget widget_startapp_contacts">
		            <div class="contact-item">
		              <div class="contact-icon">
		                <i class="material-icons smartphone"></i>
		              </div>

		              <div class="contact-info">
		                <span>001 800 8080</span><span>info@8guild.com</span>
		              </div>
		            </div>

		            <div class="contact-item">
		              <div class="contact-icon">
		                <i class="material-icons location_on"></i>
		              </div>

		              <div class="contact-info">
		                <span>1260 Broadway</span><span>New York, NY 10001</span>
		              </div>
		            </div>

		            <div class="contact-item">
		              <div class="contact-icon">
		                <i class="material-icons access_time"></i>
		              </div>

		              <div class="contact-info">
		                <span>07:30 – 19:00</span><span>Monday to Friday</span>
		              </div>
		            </div>
		          </div>

		          <div class="toolbar">
		            <a class="site-search-btn tool mobile-view" href="#"><i class="material-icons search"></i></a><a class="sidebar-btn tool mobile-view" href="#"><i class="material-icons more_vert"></i></a><a class="topbar-btn tool" href="#"><i class="material-icons more_horiz"></i></a><a class="menu-btn tool" data-toggle="offcanvas" href="#"><i class="material-icons menu"></i></a>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>

		  <!-- Main navigation -->
		  <!-- Visible only on desktop -->
		  <div class="navbar navbar-justified">
		    <div class="container">
		      <nav class="main-navigation">
    		    <ul class="menu">
    		      <li class="menu-item current-menu-item">
    		        <a href="index.html">Home</a>
    		      </li>

    		      <li class="menu-item menu-item-has-children">
    		        <a href="#">Portfolio</a>

    		        <ul class="sub-menu">
    		          <li class="menu-item">
    		            <a href="portfolio-all.html">All Projects</a>
    		          </li>

    		          <li class="menu-item">
    		            <a href="portfolio-single.html">Single Portfolio</a>
    		          </li>
    		        </ul>
    		      </li>

    		      <li class="menu-item menu-item-has-children">
    		        <a href="#">News</a>

    		        <ul class="sub-menu">
    		          <li class="menu-item">
    		            <a href="news-all.html">All News</a>
    		          </li>

    		          <li class="menu-item">
    		            <a href="news-single.html">Single Post</a>
    		          </li>
    		        </ul>
    		      </li>

    		      <li class="menu-item menu-item-has-children">
    		        <a href="#">Team</a>

    		        <ul class="sub-menu">
    		          <li class="menu-item">
    		            <a href="team-all.html">All Team</a>
    		          </li>

    		          <li class="menu-item">
    		            <a href="team-single.html">Team Member</a>
    		          </li>
    		        </ul>
    		      </li>

    		      <li class="menu-item menu-item-has-children">
    		        <a href="#">Pages</a>

    		        <ul class="sub-menu">
    		          <li class="menu-item">
    		            <a href="page-careers.html">Careers</a>
    		          </li>

    		          <li class="menu-item">
    		            <a href="page-faq.html">FAQ</a>
    		          </li>

    		          <li class="menu-item">
    		            <a href="page-contacts.html">Contacts</a>
    		          </li>

    		          <li class="menu-item">
    		            <a href="page-philosophy.html">Philosophy</a>
    		          </li>
    		        </ul>
    		      </li>
    		    </ul>
    		  </nav>

		      <div class="toolbar">
		        <a class="site-search-btn tool" href="#"><i class="material-icons search"></i></a><a class="sidebar-btn tool" href="#"><i class="material-icons more_vert"></i></a><a class="topbar-btn tool" href="#"><i class="material-icons more_horiz"></i></a><a class="menu-btn tool" data-toggle="offcanvas" href="#"><i class="material-icons menu"></i></a>
		      </div>
		    </div>
		  </div><!-- Main navigation END -->
		</header><!-- Header END -->

		<main>
			<article class="page">
			  <section class="fw-section section-no-gap">
			    <div class="container-fluid">

            <div class="rev_slider_wrapper">

              <div class="rev_slider revo-slider-financial" style="display:none;">

                <ul>

                  <!-- SLIDE  -->
                  <li
                  data-description=""
                  data-easein="default"
                  data-easeout="default"
                  data-fsmasterspeed="1000"
                  data-fsslotamount="7"
                  data-fstransition="fade"
                  data-hideafterloop="0"
                  data-hideslideonmobile="off"
                  data-index="rs-22"
                  data-masterspeed="300"
                  data-rotate="0"
                  data-saveperformance="off"
                  data-slotamount="default"
                  data-thumb="assets/img/fin-slider-control-1.jpg"
                  data-title="Slide"
                  data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img
                    alt=""
                    class="rev-slidebg"
                    data-bgparallax="5"
                    data-bgposition="center center"
                    data-duration="10000"
                    data-ease="Linear.easeNone"
                    data-kenburns="on"
                    data-no-retina=""
                    data-offsetend="0 0"
                    data-offsetstart="0 0"
                    data-rotateend="0"
                    data-rotatestart="0"
                    data-scaleend="110"
                    data-scalestart="100"
                    height="816"
                    src="assets/img/fin-slider-main-1.jpg"
                    title="fin-slider-main-1"
                    width="1920">

                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div
	                    class="tp-caption"
	                    data-fontsize="['24','24','24','18']"
	                    data-height="['73','none','112','none']"
	                    data-hoffset="['0','0','0','0']"
	                    data-lineheight="['36','36','36','27']"
	                    data-responsive="off"
	                    data-responsive_offset="on"
	                    data-splitin="none"
	                    data-splitout="none"
	                    data-start="1600"
	                    data-transform_idle="o:1;"
	                    data-transform_in="y:20px;opacity:0;s:800;e:Power4.easeOut;"
	                    data-transform_out="y:-20px;opacity:0;s:300;e:Power2.easeInOut;"
	                    data-voffset="['3','3','21','8']"
	                    data-whitespace="normal"
	                    data-width="['606','640','621','308']"
	                    data-x="['center','center','center','center']"
	                    data-y="['middle','middle','middle','middle']"
	                    id="slide-22-layer-2"
	                    style="z-index: 5; min-width: 606px; max-width: 606px; max-width: 73px; max-width: 73px; white-space: normal; font-size: 24px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:Titillium Web;text-align:center;">

	                      New Enterprise Associates is a global venture capital firm investing in technology and healthcare
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div
                    	class="tp-caption tp-resizeme"
                    	data-height="none"
                    	data-hoffset="['0','0','0','0']"
                    	data-responsive_offset="on" 
                    	data-start="1150"
                    	data-transform_idle="o:1;"
                    	data-transform_in="y:20px;opacity:0;s:800;e:Power4.easeOut;"
                    	data-transform_out="y:-20px;opacity:0;s:300;e:Power2.easeInOut;"
                    	data-voffset="['-97','-97','-97','-91']"
                    	data-whitespace="normal"
                    	data-width="none"
                    	data-x="['center','center','center','center']"
                    	data-y="['middle','middle','middle','middle']"
                    	id="slide-22-layer-10"
                    	style="z-index: 6;">

                      	<img
                      		alt=""
                      		data-hh="['53px','53px','53px','47px']"
                      		data-no-retina=""
                      		data-ww="['466px','466px','466px','430px']"
                      		height="53"
                      		src="assets/img/fin-slider-logo-2.png"
                      		width="466">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div
                    	class="tp-caption rev-btn"
                    	data-height="none"
                    	data-hoffset="['0','0','0','0']"
                    	data-responsive="off"
                    	data-responsive_offset="on"
                    	data-splitin="none"
                    	data-splitout="none"
                    	data-start="2250"
                    	data-style_hover="c:rgba(63, 107, 190, 1.00);bg:rgba(255, 255, 255, 1.00);br:3px 3px 3px 3px;"
                    	data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeIn;"
                    	data-transform_idle="o:1;"
                    	data-transform_in="y:20px;opacity:0;s:800;e:Power4.easeOut;"
                    	data-transform_out="y:-20px;opacity:0;s:300;e:Power2.easeInOut;"
                    	data-voffset="['98','98','98','333']"
                    	data-whitespace="nowrap"
                    	data-width="none"
                    	data-x="['center','center','center','center']"
                    	data-y="['middle','middle','middle','top']"
                    	id="slide-22-layer-12"
                    	style="z-index: 7; white-space: nowrap; font-size: 18px; line-height: 18px; font-weight: 600; color: rgba(255, 255, 255, 1.00);font-family:Titillium Web;background-color:rgba(255, 255, 255, 0.25);padding:15px 12px 15px 12px;border-color:rgba(0, 0, 0, 1.00);border-radius:4px 4px 4px 4px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">

                      Learn More
                    </div>
                  </li>

                  <!-- SLIDE  -->
                  <li
                  	data-description=""
                  	data-easein="default"
                  	data-easeout="default"
                  	data-hideafterloop="0"
                  	data-hideslideonmobile="off"
                  	data-index="rs-21"
                  	data-masterspeed="300"
                  	data-rotate="0"
                  	data-saveperformance="off"
                  	data-slotamount="default"
                  	data-thumb="assets/img/fin-slider-control-2.jpg"
                  	data-title="Slide"
                  	data-transition="fade">
                    		<!-- MAIN IMAGE -->
                    	<img
                    		alt=""
                    		class="rev-slidebg"
                    		data-bgparallax="5"
                    		data-bgposition="center center"
                    		data-duration="10000"
                    		data-ease="Linear.easeNone"
                    		data-kenburns="on"
                    		data-no-retina=""
                    		data-offsetend="0 0"
                    		data-offsetstart="0 0"
                    		data-rotateend="0"
                    		data-rotatestart="0"
                    		data-scaleend="110"
                    		data-scalestart="100"
                    		height="816"
                    		src="assets/img/fin-slider-main-2.jpg"
                    		title="fin-slider-main-2"
                    		width="1920">

                    		<!-- LAYERS -->
                     		<!-- LAYER NR. 1 -->

                    		<div
                    			class="tp-caption"
                    			data-fontsize="['24','24','24','18']"
                    			data-height="['73','none','112','none']"
                    			data-hoffset="['0','0','0','0']"
                    			data-lineheight="['36','36','36','27']"
                    			data-responsive="off"
                    			data-responsive_offset="on"
                    			data-splitin="none"
                    			data-splitout="none"
                    			data-start="1600"
                    			data-transform_idle="o:1;"
                    			data-transform_in="y:20px;opacity:0;s:800;e:Power4.easeOut;"
                    			data-transform_out="y:-20px;opacity:0;s:300;e:Power2.easeInOut;"
                    			data-voffset="['3','3','21','8']"
                    			data-whitespace="normal"
                    			data-width="['606','640','621','308']"
                    			data-x="['center','center','center','center']"
                    			data-y="['middle','middle','middle','middle']"
                    			id="slide-21-layer-2"
                    			style="z-index: 5; min-width: 606px; max-width: 606px; max-width: 73px; max-width: 73px; white-space: normal; font-size: 24px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:Titillium Web;text-align:center;">
                      			
                      		New Enterprise Associates is a global venture capital firm investing in technology and healthcare
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div
                    	class="tp-caption tp-resizeme"
                    	data-height="none"
                    	data-hoffset="['0','0','0','0']"
                    	data-responsive_offset="on"
                    	data-start="1150"
                    	data-transform_idle="o:1;"
                    	data-transform_in="y:20px;opacity:0;s:800;e:Power4.easeOut;"
                    	data-transform_out="y:-20px;opacity:0;s:300;e:Power2.easeInOut;"
                    	data-voffset="['-97','-97','-97','-91']"
                    	data-whitespace="normal"
                    	data-width="none"
                    	data-x="['center','center','center','center']"
                    	data-y="['middle','middle','middle','middle']"
                    	id="slide-21-layer-10"
                    	style="z-index: 6;">
                      	<img
                      		alt=""
                      		data-hh="['53px','53px','53px','47px']"
                      		data-no-retina=""
                      		data-ww="['220px','220px','220px','220px']"
                      		height="53"
                      		src="assets/img/fin-slider-logo-1.png"
                      		width="220">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div
                    	class="tp-caption rev-btn"
                    	data-height="none"
                    	data-hoffset="['0','0','0','0']"
                    	data-responsive="off"
                    	data-responsive_offset="on"
                    	data-splitin="none"
                    	data-splitout="none"
                    	data-start="2250"
                    	data-style_hover="c:rgba(63, 107, 190, 1.00);bg:rgba(255, 255, 255, 1.00);br:3px 3px 3px 3px;"
                    	data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeIn;"
                    	data-transform_idle="o:1;"
                    	data-transform_in="y:20px;opacity:0;s:800;e:Power4.easeOut;"
                    	data-transform_out="y:-20px;opacity:0;s:300;e:Power2.easeInOut;"
                    	data-voffset="['98','98','98','333']"
                    	data-whitespace="nowrap"
                    	data-width="none"
                    	data-x="['center','center','center','center']"
                    	data-y="['middle','middle','middle','top']"
                    	id="slide-21-layer-12"
                    	style="z-index: 7; white-space: nowrap; font-size: 18px; line-height: 18px; font-weight: 600; color: rgba(255, 255, 255, 1.00);font-family:Titillium Web;background-color:rgba(255, 255, 255, 0.25);padding:15px 12px 15px 12px;border-color:rgba(0, 0, 0, 1.00);border-radius:4px 4px 4px 4px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">

                      Learn More
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
          </div>
			  </section>

			  <section class="fw-section padding-top-3x padding-bottom-3x" style="background-color: #3f6bbe;">
			    <div class="container">
			      <div class="row">
			        <div class="col-sm-4">
			          <div class="icon-box icon-box-vertical icon-box-light icon-box-bg-enabled icon-box-type-image bg-hover hover-from-left text-center" data-aos="zoom-in">
			            <span class="icon-box-backdrop" style="background-color: #fff;"></span>

			            <div class="icon-box-icon">
			              <img alt="" class="attachment-full size-full" height="144" src="assets/img/fin-icon-1.png" width="144">
			            </div>

			            <h3 class="icon-box-title">
			              Global Brand, Global Reach
			            </h3>

			            <div class="icon-box-description">
			              <p>
			                <span class="opacity-50 text-light">Cras faucibus dolor vel rhoncus consequat. Suspendisse potenti. In mattis elit lectus, eget tempus lectus bibendum eu. Praesent laoreet.</span>
			              </p>
			            </div>
			          </div>
			        </div>

			        <div class="col-sm-4">
			          <div class="icon-box icon-box-vertical icon-box-light icon-box-bg-enabled icon-box-type-image bg-hover hover-from-bottom text-center" data-aos="zoom-in">
			            <span class="icon-box-backdrop" style="background-color: #fff;"></span>

			            <div class="icon-box-icon">
			              <img alt="" class="attachment-full size-full" height="144" src="assets/img/fin-icon-2.png" width="144">
			            </div>

			            <h3 class="icon-box-title">
			              Connect With Customers
			            </h3>

			            <div class="icon-box-description">
			              <p>
			                <span class="opacity-50 text-light">Cras faucibus dolor vel rhoncus consequat. Suspendisse potenti. In mattis elit lectus, eget tempus lectus bibendum eu. Praesent laoreet.</span>
			              </p>
			            </div>
			          </div>
			        </div>

			        <div class="col-sm-4">
			          <div class="icon-box icon-box-vertical icon-box-light icon-box-bg-enabled icon-box-type-image bg-hover hover-from-right text-center" data-aos="zoom-in">
			            <span class="icon-box-backdrop" style="background-color: #fff;"></span>

			            <div class="icon-box-icon">
			              <img alt="" class="attachment-full size-full" height="144" src="assets/img/fin-icon-3.png" width="144">
			            </div>

			            <h3 class="icon-box-title">
			              Experts at the Ready
			            </h3>

			            <div class="icon-box-description">
			              <p>
			                <span class="opacity-50 text-light">Cras faucibus dolor vel rhoncus consequat. Suspendisse potenti. In mattis elit lectus, eget tempus lectus bibendum eu. Praesent laoreet.</span>
			              </p>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </section>

			  <section class="fw-section padding-top-3x" data-aos="fade-up">
			    <div class="container">
			      <div class="row">
			        <div class="col-sm-12">
			          <h2 class="block-title text-dark text-center" data-aos="fade-up">
			            We Invest in Technology<small class="h4">Be early. Be insightful. Drive to consensus.</small>
			          </h2>

			          <div class="tabs tabs-horizontal tabs-horizontal-center mobile-center" data-aos="fade-up" id="tta-6c51415d">
			            <ul class="nav-tabs nav-tabs-dark text-center" role="tablist">
			              <li class="active">
			                <a data-toggle="tab" href="#1475586234305-de40fc29-5898" role="tab">Software and Cloud Services</a>
			              </li>

			              <li>
			                <a data-toggle="tab" href="#1475587635898-881bc596-c705" role="tab">Security</a>
			              </li>

			              <li>
			                <a data-toggle="tab" href="#1475587705607-28e34b09-86fa" role="tab">Healthcare IT</a>
			              </li>

			              <li>
			                <a data-toggle="tab" href="#1475587802063-502e203a-0eb5" role="tab">Consumer</a>
			              </li>
			            </ul>

			            <div class="tab-content text-dark">
			              <div class="tab-pane transition fade scale in active" id="1475586234305-de40fc29-5898">
			                <div class="row padding-top-2x">
			                  <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-8">
			                    <div class="text-block">
			                      <h3>
			                        Software and Cloud Services
			                      </h3>

			                      <p>
			                        <span class="text-gray">Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed tempor dapibus magna, a commodo neque tempus ut. Sed at lacus id mauris viverra volutpat ornare ut risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit rhoncus metus, dictum auctor quam iaculis ut.</span>
			                      </p>
			                    </div>
			                    <a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light" href="#">View Portfolio</a>
			                  </div>

			                  <div class="col-lg-3 col-lg-offset-1 col-sm-4 hidden-xs">
			                    <img alt="" class="single-image attachment-medium size-medium" src="assets/img/fin-project-tab-2-300x300.png">
			                  </div>
			                </div>
			              </div>

			              <div class="tab-pane transition fade scale" id="1475587635898-881bc596-c705">
			                <div class="row padding-top-2x">
			                  <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-8">
			                    <div class="text-block">
			                      <h3>
			                        Security
			                      </h3>

			                      <p>
			                        <span class="text-gray">Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed tempor dapibus magna, a commodo neque tempus ut. Sed at lacus id mauris viverra volutpat ornare ut risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit rhoncus metus, dictum auctor quam iaculis ut.</span>
			                      </p>
			                    </div>
			                    <a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light" href="#">View Portfolio</a>
			                  </div>

			                  <div class="col-lg-3 col-lg-offset-1 col-sm-4 hidden-xs">
			                    <img alt="" class="single-image attachment-medium size-medium" height="300" src="assets/img/fin-project-tab-1-300x300.png" width="300">
			                  </div>
			                </div>
			              </div>

			              <div class="tab-pane transition fade scale" id="1475587705607-28e34b09-86fa">
			                <div class="row padding-top-2x">
			                  <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-8">
			                    <div class="text-block">
			                      <h3>
			                        Healthcare IT
			                      </h3>

			                      <p>
			                        <span class="text-gray">Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed tempor dapibus magna, a commodo neque tempus ut. Sed at lacus id mauris viverra volutpat ornare ut risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit rhoncus metus, dictum auctor quam iaculis ut.</span>
			                      </p>
			                    </div>
			                    <a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light" href="#">View Portfolio</a>
			                  </div>

			                  <div class="col-lg-3 col-lg-offset-1 col-sm-4 hidden-xs">
			                    <img alt="" class="single-image attachment-medium size-medium" height="300" src="assets/img/fin-project-tab-3-300x300.png" width="300">
			                  </div>
			                </div>
			              </div>

			              <div class="tab-pane transition fade scale" id="1475587802063-502e203a-0eb5">
			                <div class="row padding-top-2x">
			                  <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-8">
			                    <div class="text-block">
			                      <h3>
			                        Software and Cloud Services
			                      </h3>

			                      <p>
			                        <span class="text-gray">Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed tempor dapibus magna, a commodo neque tempus ut. Sed at lacus id mauris viverra volutpat ornare ut risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit rhoncus metus, dictum auctor quam iaculis ut.</span>
			                      </p>
			                    </div>
			                    <a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light" href="#">View Portfolio</a>
			                  </div>

			                  <div class="col-lg-3 col-lg-offset-1 col-sm-4 hidden-xs">
			                    <img alt="" class="single-image attachment-medium size-medium" height="300" src="assets/img/fin-project-tab-4-300x300.png" width="300">
			                  </div>
			                </div>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </section>

			  <section class="fw-section padding-bottom-2x padding-top-2x" data-aos="fade-up">
			    <div class="container">
	          <hr class="hr-solid hr-primary" style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">

	          <h2 class="block-title text-dark text-center padding-top-3x" data-aos="fade-up">
	            The First Partner to Entrepreneurs Around the World<small class="h4">Brilliance, Dedication and Fearlessness</small>
	          </h2>

	          <nav class="nav-filters portfolio-categories text-center" data-grid-id="portfolio-ebe9e769-grid" id="portfolio-ebe9e769-filters">
	            <ul>
	              <li class="active">
	                <a data-filter="*" href="#">Show All</a>
	              </li>

	              <li>
	                <a data-filter=".devices" href="#">Devices</a>
	              </li>

	              <li>
	                <a data-filter=".financial" href="#">Financial</a>
	              </li>

	              <li>
	                <a data-filter=".healthcare" href="#">Healthcare</a>
	              </li>

	              <li>
	                <a data-filter=".marketplace" href="#">Marketplace</a>
	              </li>

	              <li>
	                <a data-filter=".media" href="#">Media</a>
	              </li>
	            </ul>
	          </nav>

	          <div class="portfolio-posts masonry-grid col-6 filter-grid" data-aos="fade-up" id="portfolio-ebe9e769-grid">
	            <div class="gutter-sizer">
	            </div>

	            <div class="grid-sizer">
	            </div>

	            <div class="grid-item devices media">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-1.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item devices financial media">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-2.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item media">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-3.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item media">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-4.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item marketplace">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-5.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item marketplace">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-6.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item healthcare">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-7.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item healthcare">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-8.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item financial">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-9.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item financial">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-10.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item devices">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-11.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item devices">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-12.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item healthcare">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-13.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item devices">
	              <article class="portfolio-tile portfolio-simple post-179">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-14.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item financial">
	              <article class="portfolio-tile portfolio-simple post-151">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-15.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item media">
	              <article class="portfolio-tile portfolio-simple post-148">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-16.jpg">
	                </a>
	              </article>
	            </div>

	            <div class="grid-item marketplace">
	              <article class="portfolio-tile portfolio-simple post-92">
	                <a class="portfolio-thumb" href="porfolio-single.html">
	                	<img alt="" src="assets/img/fin-portfolio-17.jpg">
	                </a>
	              </article>
	            </div>
	          </div>

	          <div class="text-block padding-top-2x padding-bottom-2x" data-aos="fade-up">
	            <h4 style="text-align: center;">
	              <span class="text-gray">…and discover what comes next.</span>
	            </h4>
	          </div>

	          <div class="row padding-bottom-1x" data-aos="fade-up">
	            <div class="col-sm-2 col-xs-4">
	              <img alt="" class="single-image attachment-full size-full" src="assets/img/fin-client-4.png">
	            </div>

	            <div class="col-sm-2 col-xs-4">
	              <img alt="" class="single-image attachment-full size-full" src="assets/img/fin-client-6.png">
	            </div>

	            <div class="col-sm-2 col-xs-4">
	              <img alt="" class="single-image attachment-full size-full" src="assets/img/fin-client-5.png">
	            </div>

	            <div class="col-sm-2 col-xs-4">
	              <img alt="" class="single-image attachment-full size-full" src="assets/img/fin-client-3.png">
	            </div>

	            <div class="col-sm-2 col-xs-4">
	              <img alt="" class="single-image attachment-full size-full" src="assets/img/fin-client-2.png">
	            </div>

	            <div class="col-sm-2 col-xs-4">
	              <img alt="" class="single-image attachment-full size-full" src="assets/img/fin-client-1.png">
	            </div>
	          </div>
			    </div>
			  </section>

			  <section class="fw-section section-no-gap">
			    <div class="container-fluid">
	          <div class="testimonials-slider carousel-light text-left text-light carousel-dots-inside carousel-dots-left carousel-effect-slide carousel-autoplay-disable" data-slick='{"arrows":false,"dots":true,"infinite":false,"fade":false,"autoplay":false,"autoplaySpeed":3000}'>
	            <div class="testimonial-slide padding-top-3x padding-bottom-5x" style="background-image: url(assets/img/fin-testim-slider-1.jpg);">
	              <div class="container">
	                <div class="inner">
	                  <a class="testimonial-logo" href="#"></a>

	                  <h3 class="h2">
	                    Medicine’s Transistor Moment
	                  </h3>

	                  <blockquote>
	                    <p>
	                      Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed tempor dapibus magna, a commodo neque tempus ut. Sed at lacus id mauris viverra volutpat ornare ut risus. Sed at lacus id mauris viverra volutpat ornare ut risus.
	                    </p>
	                    <cite>Sue Price, CEO <a href="#">Cunfluence</a></cite>
	                  </blockquote>

	                  <a class="btn btn-transparent btn-rounded btn-light btn-default waves-effect waves-light" href="#">Read All</a>
	                </div>
	              </div>
	            </div>

	            <div class="testimonial-slide padding-top-3x padding-bottom-5x" style="background-image: url(assets/img/fin-testim-slider-2.jpg);">
	              <div class="container">
	                <div class="inner">
	                  <div class="testimonial-logo">
	                  </div>

	                  <h3 class="h2">
	                    How To Make Money
	                  </h3>

	                  <blockquote>
	                    <p>
	                      Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed tempor dapibus magna, a commodo neque tempus ut. Sed at lacus id mauris viverra volutpat ornare ut risus. Sed at lacus id mauris viverra volutpat ornare ut risus.
	                    </p>
	                    <cite>Mark Cucerberg, CEO <a href="#">8Guild</a></cite>
	                  </blockquote>

	                  <a class="btn btn-transparent btn-rounded btn-light btn-default" href="#">Learn More</a>
	                </div>
	              </div>
	            </div>
	          </div>
			    </div>
			  </section>

			  <section class="fw-section bg-parallax vc_custom_1479024795475 padding-top-3x padding-bottom-3x" data-parallax-speed="0.4" data-parallax-type="scroll-opacity" style="background-image: url(assets/img/fin-bg-1.jpg);">
			    <div class="container">
			      <div class="row">
			        <div class="col-sm-6">
			        </div>

			        <div class="col-sm-6">
			          <div class="text-block">
			            <h3>
			              Business Plan Submissions
			            </h3>

			            <p>
			              <span class="text-gray">Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed tempor dapibus magna, a commodo neque tempus ut. Sed at lacus id mauris viverra volutpat ornare ut risus. Cras faucibus dolor vel rhoncus consequat.</span>
			            </p>
			          </div>

			          <ul class="list-unordered text-lg text-dark">
			            <li>Thinking Globally<small>Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis.</small>
			            </li>

			            <li>Growing up on Both Coasts<small>Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed tempor dapibus magna, a commodo neque tempus ut.</small>
			            </li>
			          </ul>

			          <a class="btn btn-solid btn-rounded btn-primary btn-nl waves-effect waves-light" href="#">Submit a business plan</a>
			        </div>
			      </div>
			    </div>
			  </section>

			  <section class="fw-section padding-top-3x">
			    <div class="container">
	          <div class="row" data-aos="fade-up">
	            <div class="col-lg-8 col-md-8 col-sm-12">
	              <h2 class="block-title text-dark text-left tablet-center">
	                Investment Team<small class="h4">Maecenas mattis lorem massa, nec condimentum nulla pretium eu...</small>
	              </h2>
	            </div>

	            <div class="col-lg-4 col-md-4 col-sm-12 hidden-sm hidden-xs">
	              <div class="text-right">
	                <a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light" href="team-all.html">See full team&nbsp;<i class="material-icons trending_flat"></i></a>
	              </div>
	            </div>
	          </div>

	          <div class="row" data-aos="fade-up">
	            <div class="col-sm-4">
	              <div class="teammate teammate-dark-skin teammate-tile">
	                <a class="teammate-thumb" href="#"><img alt="" class="attachment-large size-large" height="590" src="assets/img/fin-team-1.jpg" width="539"></a>
	                <div class="teammate-info-wrap">
	                  <span class="teammate-info">CEO, <a href="#">8Guild</a></span>
	                  <h3 class="teammate-name">
	                    <a href="#">Katharine Wells</a>
	                  </h3>

	                  <div class="hidden-info">
	                    <span class="teammate-info">SaaS &amp; Enterprise, Finance and Payments, “Intelligent Software”, Consumer Palo Alto</span>
	                    <div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
	                      <a class="social-btn waves-effect waves-light" href="#"><i class="socicon-twitter"></i></a><a class="social-btn waves-effect waves-light" href="#"><i class="socicon-linkedin"></i></a><a class="social-btn waves-effect waves-light" href="#"><i class="socicon-facebook"></i></a>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-sm-4">
	              <div class="teammate teammate-dark-skin teammate-tile">
	                <a class="teammate-thumb" href="#"><img alt="" class="attachment-large size-large" height="590" src="assets/img/fin-team-2.jpg" width="539"></a>
	                <div class="teammate-info-wrap">
	                  <span class="teammate-info">CEO, <a href="#">ZurApp</a></span>
	                  <h3 class="teammate-name">
	                    <a href="#">Ray Singleton</a>
	                  </h3>

	                  <div class="hidden-info">
	                    <span class="teammate-info">SaaS &amp; Enterprise, Finance and Payments, “Intelligent Software”, Consumer</span>
	                    <div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
	                      <a class="social-btn waves-effect waves-light" href="#"><i class="socicon-facebook"></i></a><a class="social-btn waves-effect waves-light" href="#"><i class="socicon-telegram"></i></a><a class="social-btn waves-effect waves-light" href="#"><i class="socicon-dribbble"></i></a>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-sm-4">
	              <div class="teammate teammate-dark-skin teammate-tile">
	                <a class="teammate-thumb" href="#"><img alt="" class="attachment-large size-large" height="590" src="assets/img/fin-team-3.jpg" width="539"></a>
	                <div class="teammate-info-wrap">
	                  <span class="teammate-info">Product Designer, <a href="#">Appica</a></span>
	                  <h3 class="teammate-name">
	                    <a href="#">Amelia Powers</a>
	                  </h3>

	                  <div class="hidden-info">
	                    <span class="teammate-info">SaaS &amp; Enterprise, Finance and Payments, “Intelligent Software”, Consumer Palo Alto</span>
	                    <div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
	                      <a class="social-btn" href="#"><i class="socicon-twitter"></i></a><a class="social-btn" href="#"><i class="socicon-pinterest"></i></a><a class="social-btn" href="#"><i class="socicon-stackoverflow"></i></a>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>

	          <div class="row padding-top-2x">
	            <div class="col-sm-12">
	              <hr class="hr-solid hr-primary" style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">
	            </div>
	          </div>
			    </div>
			  </section>

			  <section class="fw-section padding-top-2x padding-top-3x" data-aos="fade-up">
			    <div class="container">
			      <div class="row">
			        <div class="col-lg-8 col-md-8 col-sm-12">
			          <h2 class="block-title text-dark text-left tablet-center">
			            News<small class="h4">StartApp news</small>
			          </h2>
			        </div>

			        <div class="col-sm-4 hidden-sm hidden-xs">
			          <div class="text-right">
			            <a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light" href="news-all.html">Read more news&nbsp;<i class="material-icons trending_flat"></i></a>
			          </div>
			        </div>

			        <div class="col-sm-12" data-aos="fade-up">
			          <div class="blog-posts grid-layout masonry-grid col-3">
			            <div class="gutter-sizer">
			            </div>

			            <div class="grid-sizer">
			            </div>

			            <div class="grid-item">
			              <article class="post-tile post-1 post type-post format-standard category-investment tag-business tag-investment tag-iot">
			                <div class="post-body">
			                  <header class="post-header">
			                    <div class="column">
			                      <a class="post-date" href="#">October 11, 2016</a>by
			                      <a href="#">8guild</a>&nbsp;in
			                      <a href="#" rel="category tag">Investment</a>
			                    </div>

			                    <div class="column">
			                      <a class="post-comments" href="#">3&nbsp;<i class="material-icons chat_bubble"></i></a>
			                    </div>
			                  </header>

			                  <h3 class="post-title">
			                    <a href="news-single.html">Are You Ready To Buy A Home</a>
			                  </h3>

			                  <p class="post-excerpt">
			                    Nulla finibus sit amet turpis et ullamcorper. Proin sit amet accumsan elit, quis finibus arcu. Morbi pretium velit non
			                  </p>

			                  <footer class="post-footer">
			                    <div class="tags-links">
			                      <a href="#" rel="tag">Business</a>
			                      <a href="#" rel="tag">Investment</a>
			                      <a href="#" rel="tag">IOT</a>
			                    </div>
			                  </footer>
			                </div>

			                <a class="post-thumb" href="news-single.html"><img alt="" src="assets/img/fin-blog-post-bg.jpg"></a>
			              </article>
			            </div>

			            <div class="grid-item">
			              <article class="post-tile">
			                <div class="post-body">
			                  <header class="post-header">
			                    <div class="column">
			                      <a class="post-date" href="#">October 11, 2016</a>by
			                      <a href="#">8guild</a>&nbsp;in
			                      <a href="#" rel="category tag">Podcasts</a>
			                    </div>

			                    <div class="column">
			                    </div>
			                  </header>

			                  <h3 class="post-title">
			                    <a href="news-single.html">Publikate Net</a>
			                  </h3>

			                  <p class="post-excerpt">
			                    Nulla finibus sit amet turpis et ullamcorper. Proin sit amet accumsan elit, quis finibus arcu. Morbi pretium velit non
			                  </p>

			                  <footer class="post-footer">
			                    <div class="tags-links">
			                      <a href="#" rel="tag">Business</a><a href="#" rel="tag">Investment</a>
			                    </div>
			                  </footer>
			                </div>

			                <a class="post-thumb" href="news-single.html"><img alt="" src="assets/img/fin-blog-post-4.jpg"></a>
			              </article>
			            </div>

			            <div class="grid-item">
			              <article class="post-tile">
			                <div class="post-body">
			                  <header class="post-header">
			                    <div class="column">
			                      <a class="post-date" href="#">October 10, 2016</a>by
			                      <a href="#">8guild</a>&nbsp;in <a href="#" rel="category tag">Technology</a>
			                    </div>

			                    <div class="column">
			                    </div>
			                  </header>

			                  <h3 class="post-title">
			                    <a href="news-single.html">How To Put Movies On Iphone</a>
			                  </h3>

			                  <p class="post-excerpt">
			                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec id ante augue. Sed augue ipsum, varius et ligula eu
			                  </p>

			                  <footer class="post-footer">
			                    <div class="tags-links">
			                      <a href="#" rel="tag">Investment</a><a href="#" rel="tag">IOT</a>
			                    </div>
			                  </footer>
			                </div>

			                <a class="post-thumb" href="news-single.html"><img alt="" height="1280" src="assets/img/fin-blog-post-3.jpg" width="1920"></a>
			              </article>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </section>

			  <section class="fw-section padding-bottom-3x padding-top-3x" data-aos="fade-up">
			    <div class="container">
	          <h2 class="block-title text-dark text-center">
	            Proven Customer Benefits<small class="h4">Closing In On Effective Advertising</small>
	          </h2>

	          <div class="row">
	            <div class="col-sm-3">
	              <div class="animated-digit-box skin-primary">
	                <div class="animated-digit">
	                  <span class="digit">61</span><span class="unit">%</span>
	                </div>

	                <p class="description">
	                  Reduction in hadoop job failures
	                </p>
	              </div>
	            </div>

	            <div class="col-sm-3">
	              <div class="animated-digit-box skin-primary">
	                <div class="animated-digit">
	                  <span class="digit">46</span><span class="unit">%</span>
	                </div>

	                <p class="description">
	                  Maintain Your Pc S Performance
	                </p>
	              </div>
	            </div>

	            <div class="col-sm-3">
	              <div class="animated-digit-box skin-primary">
	                <div class="animated-digit">
	                  <span class="digit">78</span><span class="unit">%</span>
	                </div>

	                <p class="description">
	                  Unique Myspace Layouts Nowadays
	                </p>
	              </div>
	            </div>

	            <div class="col-sm-3">
	              <div class="animated-digit-box skin-primary">
	                <div class="animated-digit">
	                  <span class="digit">90</span>
	                </div>

	                <p class="description">
	                  Fta Keys
	                </p>
	              </div>
	            </div>
	          </div>

	          <div class="row">
	            <div class="col-sm-12">
	              <div class="text-block">
	                <p class="lead" style="text-align: center;">
	                  Forrester Report: “The Total Economic Impact of StartApp”
	                </p>
	              </div>

	              <div class="text-center">
	                <a class="btn btn-solid btn-rounded btn-primary btn-nl waves-effect waves-light" href="#"><i class="material-icons file_download"></i>&nbsp;Download report</a>
	              </div>
	            </div>
	          </div>
			    </div>
			  </section>

			  <section class="fw-section with-overlay bg-parallax padding-top-5x padding-bottom-5x" data-parallax-speed="0.4" data-parallax-type="scroll" style="background-image: url(assets/img/fin-bg-2.jpg);">
			    <span class="overlay" style="opacity: 0.25; background-color: #000000;"></span>
			    <div class="container">
			      <div class="row">
			        <div class="col-sm-3">
			        </div>

			        <div class="col-sm-6">
			          <div class="text-block">
			            <h1 style="text-align: center;">
			              <span class="text-light">Become a Partner</span>
			            </h1>

			            <p style="text-align: center;">
			              <span class="text-light opacity-50">Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed tempor dapibus magna, a commodo neque tempus ut. Sed at lacus id mauris viverra volutpat ornare ut risus. Cras faucibus dolor vel rhoncus consequat. Cras faucibus dolor vel rhoncus consequat.</span>
			            </p>
			          </div>

			          <div class="text-center">
			            <a class="btn btn-transparent btn-rounded btn-light btn-nl waves-effect waves-light" href="page-contacts.html">Contact Us</a>
			          </div>
			        </div>

			        <div class="col-sm-3">
			        </div>
			      </div>
			    </div>
			  </section>
			</article>

			<!-- Main Footer -->
			<footer class="site-footer footer-dark" style="background-image: url(assets/img/fin-bg-footer.jpg);">
			  <div class="footer-row">
			    <div class="container">
			      <div class="row">
			        <div class="col-md-3 col-sm-6">
			        	<!-- Widget Start -->
			          <section class="widget widget_startapp_site_info">
			            <a href="index.html">
			                	<img alt="" src="assets/img/logo-light.png"></a>

			            <p>
			              We are the team of web, design, programming and marketing professionals whose main aim is to create quality themes and templates, websites, tools and applications that offer a beautiful web presence and the ultimate user experience.
			            </p>

			            <div class="social-bar sb-solid-bg sb-rounded sb-dark-skin text-left">
			              <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="#" title="Facebook"><i class="socicon-facebook"></i></a>
			              <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="#" title="Instagram"><i class="socicon-instagram"></i></a>
			              <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="#" title="LinkedIn"><i class="socicon-linkedin"></i></a>
			            </div>
			          </section><!-- Widget END -->
			        </div>

			        <div class="col-md-3 col-sm-6">
			        	<!-- Widget Start -->
			          <section class="widget widget_nav_menu">
			            <h3 class="widget-title">
			              Useful Links
			            </h3>

			            <div class="menu-footer-menu-1-container">
			              <ul class="menu">
			                <li class="menu-item">
			                  <a href="#">Buy Theme</a>
			                </li>

			                <li class="menu-item">
			                  <a href="http://the8guild.com/docs/startapp-html/index.html">Documentation</a>
			                </li>

			                <li class="menu-item">
			                  <a href="https://8guild.ticksy.com/">Premium Support</a>
			                </li>

			                <li class="menu-item">
			                  <a href="https://themeforest.net/user/8guild/portfolio?ref=8guild">We are at Themeforest</a>
			                </li>
			              </ul>
			            </div>
			          </section><!-- Widget END -->
			        </div>

			        <div class="clearfix visible-sm"></div>

			        <div class="col-md-3 col-sm-6">
			        	<!-- Widget Start -->
			          <section class="widget widget_startapp_recent_posts">
			            <h3 class="widget-title">
			              Latest News
			            </h3>

			            <div class="post-item">
			              <a class="post-item-thumb" href="news-single.html">
			              	<img alt="" src="assets/img/widgets/demo-blog-list-05-150x150.jpg">
			              </a>

			              <div class="post-item-info">
			                <span class="post-item-date">October 29</span>
			                <h3 class="post-item-title">
			                  <a href="news-single.html" rel="bookmark">Incredible City View</a>
			                </h3>
			              </div>
			            </div>

			            <div class="post-item">
			              <a class="post-item-thumb" href="news-single.html">
			              	<img alt="" src="assets/img/widgets/demo-blog-list-04-150x150.jpg">
			              </a>

			              <div class="post-item-info">
			                <span class="post-item-date">October 29</span>
			                <h3 class="post-item-title">
			                  <a href="news-single.html" rel="bookmark">Thoughts About Car Concepts</a>
			                </h3>
			              </div>
			            </div>
			          </section><!-- Widget END -->
			        </div>

			        <div class="col-md-3 col-sm-6">
			        	<!-- Widget Start -->
			          <section class="widget widget_startapp_contacts">
			            <h3 class="widget-title">
			              Get In Touch
			            </h3>

			            <div class="contact-item">
			              <div class="contact-icon">
			                <i class="material-icons location_on"></i>
			              </div>

			              <div class="contact-info">
			                <span>1260 Broadway</span><span>New York, NY 10001</span>
			              </div>
			            </div>

			            <div class="contact-item">
			              <div class="contact-icon">
			                <i class="material-icons smartphone"></i>
			              </div>

			              <div class="contact-info">
			                <span>001 800 8080</span>
			              </div>
			            </div>

			            <div class="contact-item">
			              <div class="contact-icon">
			                <i class="socicon-mail"></i>
			              </div>

			              <div class="contact-info">
			                <span>info@8guild.com</span>
			              </div>
			            </div>
			          </section><!-- Widget Start -->
			        </div>
			      </div>
			    </div>
			  </div>

			  <div class="footer-row second-row">
		      <div class="container">
		        <div class="row">
		          <div class="col-sm-6">
		            <section class="widget widget_startapp_subscribe">
		              <h3 class="widget-title">
		                Subscribe For News
		              </h3>

		              <form autocomplete="off" class="subscribe-form">
		                <p>
		                  Subscribe to our newspaper. Be informed about all new themes and updates.
		                </p>

		                <div class="input-group">
		                  <i class="material-icons mail_outline"></i>
		                  <input name="EMAIL" placeholder="Enter email" type="email">

		                  <button type="submit">
		                  	<i class="material-icons send"></i>
		                  </button>
		                </div>
		              </form>
		            </section>
		          </div>

		          <div class="col-sm-6">
		            <section class="widget widget_startapp_image_carousel">
		              <h3 class="widget-title">
		                Our Clients
		              </h3>

		              <p class="widget-description">
		                Brilliance, Dedication and Fearlessness
		              </p>

		              <div class="widget-carousel-navs">
		                <button class="slick-prev slick-arrow" type="button"></button> <button class="slick-next slick-arrow" type="button"></button>
		              </div>

		              <div class="widget-inner" data-slick='{"slidesToShow":4,"arrows":true,"autoplay":true,"autoplaySpeed":4000}'>
		                <div class="carousel-item">
		                  <img alt="" src="assets/img/fin-client-footer-1.png">
		                </div>

		                <div class="carousel-item">
		                  <img alt="" src="assets/img/fin-client-footer-2.png">
		                </div>

		                <div class="carousel-item">
		                  <img alt="" src="assets/img/fin-client-footer-3.png">
		                </div>

		                <div class="carousel-item">
		                  <img alt="" src="assets/img/fin-client-footer-4.png">
		                </div>

		                <div class="carousel-item">
		                  <img alt="" src="assets/img/fin-client-footer-5.png">
		                </div>
		              </div>
		            </section>
		          </div>
		        </div>
		      </div>
		    </div>

			  <div class="copyright bg-primary text-light">
			    <div class="container">
			      <div class="row">
			        <div class="col-sm-6">
			          <p class="copyright-text">
			            StartApp. Made with <i class="material-icons favorite_border"></i> by
	                  <a href="#">8Guild</a>
			          </p>
			        </div>

			        <div class="col-sm-6 text-right"></div>
			      </div>
			    </div>
			  </div>
			</footer><!-- Main Footer END -->
		</main>

		<a class="scroll-to-top-btn" href="#"><i class="material-icons keyboard_arrow_up"></i></a>
		<div class="site-backdrop"></div>

		<!-- Scripts section -->
		<!-- **************************************************************************************************************************** -->
		<script type='text/javascript' src='assets/js/vendor/jquery.js'></script>

		<script type='text/javascript' src='assets/js/vendor/aos.min.js'></script>
		<script type='text/javascript' src='assets/js/vendor/jquery.waypoints.min.js'></script>
		<script type='text/javascript' src='assets/js/vendor/bootstrap.min.js'></script>
		<script type='text/javascript' src='assets/js/vendor/jarallax.min.js'></script>
		<script type='text/javascript' src='assets/js/vendor/velocity.min.js'></script>
		<script type='text/javascript' src='assets/js/vendor/waves.min.js'></script>
		<script type='text/javascript' src='assets/js/vendor/scrollspy.js'></script>
		<script type='text/javascript' src='assets/js/vendor/slick.min.js'></script>
		<script type='text/javascript' src='assets/js/vendor/isotope.pkgd.min.js'></script>
		<script type='text/javascript' src='assets/js/vendor/counterup.min.js'></script>
		<script type='text/javascript' src='assets/js/vendor/jquery.magnific-popup.min.js'></script>
			<!-- *************************************************************************************** -->
			<!-- Vendor Script Section -->
			<script type="text/javascript" src="assets/js/vendor/revo/jquery.themepunch.tools.min.js"></script>
			<script type="text/javascript" src="assets/js/vendor/revo/jquery.themepunch.revolution.min.js"></script>
			<!-- Vendor Script Section END-->
			<!-- *************************************************************************************** -->
		<script type='text/javascript' src='assets/js/startapp-theme.js'></script>
		<!-- **************************************************************************************************************************** -->
		<!-- Scripts section END -->
	</body>
</html>
