
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

	<body class="single-post">
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
		      <li class="menu-item">
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

		        <ul class="sub-menu current-menu-item">
		          <li class="menu-item">
		            <a href="news-all.html">All News<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>

		          <li class="menu-item current-menu-item">
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
    		      <li class="menu-item">
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

    		      <li class="menu-item menu-item-has-children current-menu-item">
    		        <a href="#">News</a>

    		        <ul class="sub-menu">
    		          <li class="menu-item">
    		            <a href="news-all.html">All News</a>
    		          </li>

    		          <li class="menu-item current-menu-item">
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
			<!-- Page Title Start -->
			<section class="single-cover-image bg-parallax" data-parallax-speed="0.4" data-parallax-type="scroll" style="background-image: url(assets/img/fin-blog-post-bg.jpg); height: 500px;">
			</section><!-- Page Title Start END -->

			<section class="fw-section">
			  <div class="container padding-top-3x">
			    <div class="row">
			    	<!-- Posts Column -->
			      <div class="col-lg-9 col-md-8 col-sm-8 padding-bottom-2x">

			      	<!-- Post Section Start -->
			        <article>
			        	<!-- Section Start -->
			          <div class="container">
			            <header class="post-header">
			              <div class="column">
			                <a class="post-date" href="#">October 27, 2016</a>by
			                <a href="#">8guild</a>&nbsp;in
			                <a href="#">Banks</a>,
			                <a href="#">Investment</a>
			              </div>

			              <div class="column"></div>
			            </header>

			            <h1 class="post-title">
			              News Single
			            </h1>

			            <div class="featured-image padding-bottom-1x">
			              <img alt="" src="assets/img/fin-blog-post-bg.jpg">
			            </div>
			          </div><!-- Section END -->

			          <!-- Section Start -->
			          <section class="fw-section">
			            <div class="container">
	                  <div class="text-block">
	                    <h4>
	                      3&nbsp;Maecenas Lobortis, Lorem At Commodo Tincidunt, Elit Arcu Dictum Erat, Nec Pulvinar Mi Augue a Purus
	                    </h4>

	                    <p>
	                      Sed finibus fringilla ante sed semper. Sed sit amet ultricies eros, in interdum eros. Suspendisse vitae porta dolor, eget auctor nulla. Phasellus varius velit sed ex ultrices, id consequat sem posuere. Quisque non nulla vitae lectus dictum rutrum eu id mi. Donec urna neque, viverra eget sapien in, maximus lobortis ipsum. Cras pretium nec nisl nec dapibus. Fusce et leo sed dui auctor dignissim sit amet at magna. Nam in tincidunt nibh, at hendrerit lorem. Praesent pulvinar risus ac velit imperdiet tincidunt. Maecenas lobortis, lorem at commodo tincidunt, elit arcu dictum erat, nec pulvinar mi augue a purus. Integer sapien justo, laoreet eu posuere quis, sodales nec purus. Proin sollicitudin, eros venenatis ullamcorper auctor, ipsum metus dignissim metus, ac commodo ante risus at orci. Proin ac libero nec mi dictum tempor. Aliquam vestibulum aliquam risus vel finibus. Maecenas aliquet efficitur lorem a bibendum.
	                    </p>

	                    <p>
	                      Sed finibus fringilla ante sed semper. Sed sit amet ultricies eros, in interdum eros. Suspendisse vitae porta dolor, eget auctor nulla. Phasellus varius velit sed ex ultrices, id consequat sem posuere. Quisque non nulla vitae lectus dictum rutrum eu id mi. Donec urna neque, viverra eget sapien in, maximus lobortis ipsum. Cras pretium nec nisl nec dapibus. Fusce et leo sed dui auctor dignissim sit amet at.
	                    </p>
	                  </div>
			            </div>
			          </section><!-- Section END -->

			          <!-- Section Start -->
			          <section class="fw-section">
			            <div class="container">
	                  <figure class="single-image wp-caption">
	                    <img alt="" src="assets/img/fin-blog-post-1.jpg">

	                    <figcaption class="wp-caption-text">
	                      Developed by the Intel Corporation, HDCP stands for high-bandwidth digital content protection
	                    </figcaption>
	                  </figure>

	                  <div class="text-block">
	                    <p>
	                      Sed finibus fringilla ante sed semper. Sed sit amet ultricies eros, in interdum eros. Suspendisse vitae porta dolor, eget auctor nulla. Phasellus varius velit sed ex ultrices, id consequat sem posuere. Quisque non nulla vitae lectus dictum rutrum eu id mi. Donec urna neque, viverra eget sapien in, maximus lobortis ipsum. Cras pretium nec nisl nec dapibus. Fusce et leo sed dui auctor dignissim sit amet at magna.
	                    </p>
	                  </div>
			            </div>
			          </section><!-- Section END -->

			          <!-- Section Start -->
			          <section class="fw-section">
			            <div class="container">
	                  <div class="text-block">
	                    <h4>
	                      Sed Finibus Fringilla Ante Sed Semper
	                    </h4>

	                    <p>
	                      Sed finibus fringilla ante sed semper. Sed sit amet ultricies eros, in interdum eros. Suspendisse vitae porta dolor, eget auctor nulla. Phasellus varius velit sed ex ultrices, id consequat sem posuere. Quisque non nulla vitae lectus dictum rutrum eu id mi. Donec urna neque, viverra eget sapien in, maximus lobortis ipsum. Cras pretium nec nisl nec dapibus. Fusce et leo sed dui auctor dignissim sit amet at magna. Nam in tincidunt nibh, at hendrerit lorem. Praesent pulvinar risus ac velit imperdiet tincidunt. Maecenas lobortis, lorem at commodo tincidunt, elit arcu dictum erat, nec pulvinar mi augue a purus. Integer sapien justo, laoreet eu posuere quis, sodales nec purus:
	                    </p>
	                  </div>

	                  <ul class="list-unordered text-lg text-dark">
	                    <li>“raesent pulvinar risus ac velit imperdiet tincidunt?”</li>
	                    <li>“roin sollicitudin, eros venenatis ullamcorper auctor?”</li>
	                    <li>“lectus dictum rutrum eu id?”</li>
	                    <li>“onec urna neque, viverra eget sapien in"</li>
	                  </ul>

	                  <figure class="single-image wp-caption">
	                    <img alt="" src="assets/img/fin-blog-post-2.jpg">
	                    <figcaption class="wp-caption-text">
	                      Maintain Your Pc S Performance With Pc Programs
	                    </figcaption>
	                  </figure>

	                  <div class="text-block">
	                    <h4>
	                      Sed Finibus Fringilla Ante
	                    </h4>

	                    <p>
	                      Sed finibus fringilla ante sed semper. Sed sit amet ultricies eros, in interdum eros. Suspendisse vitae porta dolor, eget auctor nulla. Phasellus varius velit sed ex ultrices, id consequat sem posuere. Quisque non nulla vitae lectus dictum rutrum eu id mi. Donec urna neque, viverra eget sapien in, maximus lobortis ipsum. Cras pretium nec nisl nec dapibus. Fusce et leo sed dui auctor dignissim sit amet at magna. Nam in tincidunt nibh, at hendrerit lorem.
	                    </p>

	                    <blockquote>
	                      <p>
	                        Fusce et leo sed dui auctor dignissim sit amet at magna. Nam in tincidunt nibh, at hendrerit lorem. Praesent pulvinar risus ac velit imperdiet tincidunt. Maecenas lobortis, lorem at commodo tincidunt, elit arcu dictum erat, nec pulvinar mi augue a purus.
	                      </p>
	                    </blockquote>
			              </div>
			            </div>
			          </section><!-- Section END -->

			          <!-- Post Footer -->
			          <div class="container">
			            <footer class="post-footer">
			              <div class="tags-links">
			                <a href="#" rel="tag">Business</a>
			                <a href="#" rel="tag">Investment</a>
			                <a href="#" rel="tag">Remote</a>
			              </div>
			            </footer>

			            <div class="post-share-buttons">
			              <div class="column">
			                <a class="startapp-share-twitter" href="#"><i class="socicon-twitter"></i> Share on Twitter</a>
			              </div>

			              <div class="column">
			                <a class="startapp-share-facebook" href="#"><i class="socicon-facebook"></i> Share on Facebook</a>
			              </div>

			              <div class="column">
			                <a class="startapp-share-googleplus" href="#"><i class="socicon-googleplus"></i> Share on Google+</a>
			              </div>

			              <div class="column">
			                <a class="startapp-share-pinterest" href="#"><i class="socicon-pinterest"></i> Share on Pinterest</a>
			              </div>
			            </div>

			            <!-- Widget Start -->
			            <section class="post-author">
			              <div class="post-author-thumb">
			                <a href="#">
			                	<img alt="" src="assets/img/fin-author.jpg">
			                </a>
			              </div>

			              <div class="post-author-info">
			                <h3 class="post-author-name">
			                  <a href="#">8guild</a>
			                </h3>

			                <p>
			                  SaaS &amp; Enterprise, Finance and Payments, “Intelligent Software”, Consumer<br>
			                  Palo Alto
			                </p>

			                <div class="social-bar sb-border sb-rounded sb-dark-skin inline">
			                  <a class="social-btn" href="#"><i class="socicon-instagram"></i></a>
			                  <a class="social-btn" href="#"><i class="socicon-linkedin"></i></a>
			                  <a class="social-btn" href="#"><i class="socicon-odnoklassniki"></i></a>
			                  <a class="social-btn" href="#"><i class="socicon-facebook"></i></a>
			                </div>
			              </div>
			            </section><!-- Widget END -->

			            <!-- Widget Start -->
			            <section class="related-posts">
			              <h4 class="text-gray margin-bottom-2x">
			                Related Posts
			              </h4>

			              <div class="related-post-entry">
			                <header class="post-header">
			                  <div class="column">
			                    <a class="post-date" href="#">October 29, 2016</a>by
			                    <a href="#">8guild</a>&nbsp;in
			                    <a href="#" rel="category tag">Investment</a>
			                  </div>

			                  <div class="column"></div>
			                </header>

			                <h3 class="post-title">
			                  <a href="#">3 Easy Ways to Be Creative</a>
			                </h3>
			              </div>

			              <div class="related-post-entry">
			                <header class="post-header">
			                  <div class="column">
			                    <a class="post-date" href="#">October 29, 2016</a>by
			                    <a href="#">8guild</a>&nbsp;in
			                    <a href="#">Investment</a>
			                  </div>

			                  <div class="column"></div>
			                </header>

			                <h3 class="post-title">
			                  <a href="#">How Online Banks Work</a>
			                </h3>
			              </div>

			              <div class="related-post-entry">
			                <header class="post-header">
			                  <div class="column">
			                    <a class="post-date" href="#">October 29, 2016</a>by
			                    <a href="#">8guild</a>&nbsp;in
			                    <a href="#">Business</a>,
			                    <a href="#">Investment</a>
			                  </div>

			                  <div class="column"></div>
			                </header>

			                <h3 class="post-title">
			                  <a href="#">Choose the Right Way</a>
			                </h3>
			              </div>
			            </section><!-- Widget END -->
			          </div><!-- Post Footer END -->

			          <!-- Comments Area Start -->
			          <div class="comments-area">
			            <h4 class="text-gray margin-bottom-2x">
			              Comments <sup>4</sup>
			            </h4>

			            <div class="comment thread-depth-1 parent">
			              <div class="inner">
			                <div class="author-ava">
			                  <img alt="" class="avatar avatar-60" src="assets/img/0202020.jpg">
			                </div>

			                <div class="comment-body">
			                  <h4 class="author-name">
			                    Den Brave
			                  </h4>

			                  <span class="comment-date">October 28, 2016</span>

			                  <p>
			                    Hi! Great first level comment. Like it, guys!
			                  </p>
			                </div>
			              </div>

			              <div class="reply-link">
			                <a class="comment-reply-login" href="#" rel="nofollow">Log in to Reply</a>
			              </div>

			              <div class="comment odd alt depth-2">
			                <div class="inner">
			                  <div class="author-ava">
			                    <img alt="" class="avatar avatar-60" src="assets/img/0202020.jpg">
			                  </div>

			                  <div class="comment-body">
			                    <h4 class="author-name">
			                      8guild
			                    </h4>

			                    <span class="comment-date">October 28, 2016</span>

			                    <p>
			                      Thank you so much. We also have incredible design for a second level comment. Check it out!
			                    </p>
			                  </div>
			                </div>

			                <div class="reply-link">
			                  <a class="comment-reply-login" href="#" rel="nofollow">Log in to Reply</a>
			                </div>
			              </div>
			            </div>

			            <div class="comment depth-1 parent">
			              <div class="inner">
			                <div class="author-ava">
			                	<img alt="" class="avatar avatar-60" src="assets/img/0202020.jpg">
			                </div>

			                <div class="comment-body">
			                  <h4 class="author-name">
			                    Jennys Jiplon
			                  </h4>

			                  <span class="comment-date">October 28, 2016</span>

			                  <p>
			                    Wow, incredible theme! Like it so much!
			                  </p>
			                </div>
			              </div>

			              <div class="reply-link">
			                <a class="comment-reply-login" href="#" rel="nofollow">Log in to Reply</a>
			              </div>

			              <div class="comment odd alt depth-2">
			                <div class="inner">
			                  <div class="author-ava">
			                    <img alt="" class="avatar avatar-60" src="assets/img/0202020.jpg">
			                  </div>

			                  <div class="comment-body">
			                    <h4 class="author-name">
			                      8guild
			                    </h4>

			                    <span class="comment-date">October 28, 2016</span>

			                    <p>
			                      Wow! So sweet from you!
			                    </p>
			                  </div>
			                </div>

			                <div class="reply-link">
			                  <a class="comment-reply-login" href="#" rel="nofollow">Log in to Reply</a>
			                </div>
			              </div>
			            </div>

			            <div class="comment-respond">
			              <div class="reply-title">
			                <h4>
			                  Comment
			                </h4>

			                <small class="cancel-reply"><a href="#" rel="nofollow" style="display:none;">Cancel reply</a></small>
			              </div>

			              <form>
			              	<textarea name="comment" rows="6" placeholder="Enter your comment" required=""></textarea>
			              	<div class="row">
				              	<div class="col-sm-9">
					              	<div class="row">
			              	      <div class="col-sm-6">
			              	        <input name="author" placeholder="Name" type="text" value="">
			              	      </div>

			              	      <div class="col-sm-6">
			              	        <input name="email" placeholder="Email" type="email" value="">
			              	      </div>
			              	    </div>
			              	   </div>
		              	    <div class="col-sm-3 form-submit">
	              	        <button class="btn btn-ghost btn-primary btn-block" id="submit" name="submit" type="submit">Comment&nbsp;<i class="material-icons reply"></i></button> <input id="comment_post_ID" name="comment_post_ID" type="hidden" value="1"> <input id="comment_parent" name="comment_parent" type="hidden" value="0">
	              	      </div>
	              	     </div>
			              </form>
			            </div>
			          </div><!-- Comme	nts Area Start END -->
			        </article><!-- Post Section END -->
			      </div><!-- Posts Column END -->

			      <!-- Sidebar Column -->
			      <div class="col-lg-3 col-md-4 col-sm-4 padding-bottom-2x">
			      	<!-- Widget Start -->
              <section class="widget widget_search">
                <form autocomplete="off" class="search-box" method="get">
                  <input name="s" placeholder="Search" type="text" value="">
                  <button type="submit"><i class="material-icons search"></i></button>
                </form>
              </section><!-- Widget END -->

              <!-- Widget Start -->
              <section class="widget widget_startapp_author"">
                <h2 class="widget-title">
                  Blog Author
                </h2>

                <div class="startapp-author text-left">
                  <img alt="demo-avatar" src="assets/img/fin-author.jpg">

                  <p>
                    SaaS &amp; Enterprise, Finance and Payments, “Intelligent Software”, ConsumerPalo Alto
                  </p>

                  <div class="social-bar sb-border sb-rounded sb-dark-skin inline">
                    <a class="social-btn" href="#"><i class="socicon-instagram"></i></a>
                    <a class="social-btn" href="#"><i class="socicon-linkedin"></i></a>
                    <a class="social-btn" href="#"><i class="socicon-odnoklassniki"></i></a>
                    <a class="social-btn" href="#"><i class="socicon-facebook"></i></a>
                  </div>
                </div>
              </section><!-- Widget END -->

              <!-- Widget Start -->
              <section class="widget widget_categories"">
                <h2 class="widget-title">
                  Categories
                </h2>

                <ul>
                  <li class="cat-item">
                    <a href="#">Banks</a> (2)
                  </li>

                  <li class="cat-item">
                    <a href="#">Business</a> (1)
                  </li>

                  <li class="cat-item">
                    <a href="#">CEO Talks</a> (2)
                  </li>

                  <li class="cat-item">
                    <a href="#">Investment</a> (13)
                  </li>

                  <li class="cat-item">
                    <a href="#">IT Thoughts</a> (5)
                  </li>

                  <li class="cat-item">
                    <a href="#">Office</a> (4)
                  </li>

                  <li class="cat-item">
                    <a href="#">Podcasts</a> (1)
                  </li>

                  <li class="cat-item">
                    <a href="#">Technology</a> (2)
                  </li>
                </ul>
              </section><!-- Widget END -->

              <!-- Widget Start -->
              <section class="widget widget_startapp_recent_posts"">
                <h2 class="widget-title">
                  Recent Posts
                </h2>

                <div class="post-item">
                  <a class="post-item-thumb" href="blog-single-post-right-sidebar.html">
                  	<img alt="" src="assets/img/fin-blog-post-bg-150x150.jpg"">
                  </a>

                  <div class="post-item-info">
                    <span class="post-item-date">October 29</span>
                    <h3 class="post-item-title">
                      <a href="blog-single-post-right-sidebar.html" rel="bookmark">Incredible City View</a>
                    </h3>
                  </div>
                </div>

                <div class="post-item">
                  <a class="post-item-thumb" href="blog-single-post-right-sidebar.html">
                  	<img alt="" src="assets/img/fin-blog-post-4-150x150.jpg">
                  </a>

                  <div class="post-item-info">
                    <span class="post-item-date">October 29</span>
                    <h3 class="post-item-title">
                      <a href="blog-single-post-right-sidebar.html" rel="bookmark">Thoughts About Car Concepts</a>
                    </h3>
                  </div>
                </div>

                <div class="post-item">
                  <a class="post-item-thumb" href="blog-single-post-right-sidebar.html">
                  	<img alt="" src="assets/img/fin-blog-post-3-150x150.jpg">
                  </a>

                  <div class="post-item-info">
                    <span class="post-item-date">October 29</span>
                    <h3 class="post-item-title">
                      <a href="blog-single-post-right-sidebar.html" rel="bookmark">Drones and Delivery</a>
                    </h3>
                  </div>
                </div>
              </section><!-- Widget END -->

              <!-- Widget Start -->
              <section class="widget widget_recent_comments"">
                <h2 class="widget-title">
                  Recent Comments
                </h2>

                <ul>
                  <li class="recentcomments">
                    <span class="comment-author-link">8guild</span> on <a href="#">Withings Camera</a>
                  </li>

                  <li class="recentcomments">
                    <span class="comment-author-link">8guild</span> on <a href="#">Drones and Delivery</a>
                  </li>

                  <li class="recentcomments">
                    <span class="comment-author-link">8guild</span> on <a href="#">Pretty Watches</a>
                  </li>
                </ul>
              </section><!-- Widget END -->
		        </div><!-- Sidebar Column END -->
			    </div>
			  </div>
			</section>

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
			
			<!-- Vendor Script Section END-->
			<!-- *************************************************************************************** -->
		<script type='text/javascript' src='assets/js/startapp-theme.js'></script>
		<!-- **************************************************************************************************************************** -->
		<!-- Scripts section END -->
	</body>
</html>
