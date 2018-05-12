<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Financial</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon Images -->
	<link rel="icon" href="assets/img/favicon/cropped-favicon-32x32.png"/>
	<link rel="icon" href="assets/img/favicon/cropped-favicon-192x192.png"/>
	<link rel="apple-touch-icon-precomposed" href="assets/img/favicon/cropped-favicon-180x180.png"/>
	<meta name="msapplication-TileImage" content="assets/img/favicon/cropped-favicon-270x270.png"/>

	<!-- Google Font Import -->
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">

	<!-- Animation, Icon Fonts, Bootsrap styles -->
	<link rel='stylesheet' href='assets/stylesheets/vendor/aos.min.css' type='text/css' media='all'/>
	<link rel='stylesheet' href='assets/stylesheets/vendor/material-icons.min.css' type='text/css' media='all'/>
	<link rel='stylesheet' href='assets/stylesheets/vendor/font-awesome.min.css' type='text/css' media='all'/>
	<link rel='stylesheet' href='assets/stylesheets/vendor/socicon.min.css' type='text/css' media='screen'/>
	<link rel='stylesheet' href='assets/stylesheets/vendor/bootstrap.min.css' type='text/css' media='screen'/>
	<link rel='stylesheet' href='assets/stylesheets/vendor/preloader.css' type='text/css' media='screen'/>

	<!-- *************************************************************************************** -->
	<!-- Vendor Styles Section -->
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/vendor/revo/settings.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/vendor/revo/layers.css">
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/vendor/revo/navigation.css">
	<!-- Vendor Styles Section END-->
	<!-- *************************************************************************************** -->

	<!-- Main Theme Style -->
	<link rel='stylesheet' href='assets/stylesheets/theme.min.css' type='text/css' media='screen'/>

	<!-- Modernizr Scripts -->
	<script type='text/javascript' src='assets/js/vendor/modernizr.custom.js'></script>

	<!-- Init For Page Prelodaer -->
	<script type="text/javascript">
        (function () {
            window.onload = function () {
                var body = document.querySelector("body");
                var header = body.querySelector(".site-header");
                var preloader = body.querySelector(".loading-screen");
                body.style.overflowY = "auto";
                preloader.classList.add("loading-done");
                header.classList.add("loading-done");
            };
        })();
	</script>
</head>

<body>
<!-- It Is Preloader Markup -->
<div class="loading-screen">
	<div class="spinner-wrap">
		<div class="spinner" id="spinner_one"></div>
		<div class="spinner" id="spinner_two"></div>
		<div class="spinner" id="spinner_three"></div>
		<div class="spinner" id="spinner_four"></div>
	</div>
</div>


<!-- Offcanvas Sidebar -->
<aside class="off-canvas-sidebar right-positioned">
	<span class="close-btn"><i class="material-icons clear"></i></span>

	<!-- Widget Start -->
	<section class="widget widget_startapp_author">
		<h2 class="widget-title">Our CEO</h2>

		<div class="startapp-author text-left">
			<img src="assets/img/widgets/author-offcanvas.jpg" alt="author-offcanvas"/>

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
				<img src="assets/img/widgets/carousels/fin-client-logo-phil-7-300x200.png" alt=""/>
			</div>
			<div class="carousel-item">
				<img src="assets/img/widgets/carousels/fin-client-logo-phil-6-300x200.png" alt=""/>
			</div>
			<div class="carousel-item">
				<img src="assets/img/widgets/carousels/fin-client-logo-phil-4-300x200.png" alt=""/>
			</div>
			<div class="carousel-item">
				<img src="assets/img/widgets/carousels/fin-client-logo-phil-3-300x200.png" alt=""/>
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
				<a href="index.html">Home<span class="arrow"><i
								class="material-icons keyboard_arrow_down"></i></span></a>
			</li>

			<li class="menu-item menu-item-has-children current-menu-item">
				<a href="#">Portfolio<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

				<ul class="sub-menu">
					<li class="menu-item current-menu-item">
						<a href="portfolio-all.html">All Projects<span class="arrow"><i
										class="material-icons keyboard_arrow_down"></i></span></a>
					</li>

					<li class="menu-item">
						<a href="portfolio-single.html">Single Portfolio<span class="arrow"><i
										class="material-icons keyboard_arrow_down"></i></span></a>
					</li>
				</ul>
			</li>

			<li class="menu-item menu-item-has-children">
				<a href="#">News<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

				<ul class="sub-menu">
					<li class="menu-item">
						<a href="news-all.html">All News<span class="arrow"><i
										class="material-icons keyboard_arrow_down"></i></span></a>
					</li>

					<li class="menu-item">
						<a href="news-single.html">Single Post<span class="arrow"><i
										class="material-icons keyboard_arrow_down"></i></span></a>
					</li>
				</ul>
			</li>

			<li class="menu-item menu-item-has-children">
				<a href="#">Team<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

				<ul class="sub-menu">
					<li class="menu-item">
						<a href="team-all.html">All Team<span class="arrow"><i
										class="material-icons keyboard_arrow_down"></i></span></a>
					</li>

					<li class="menu-item">
						<a href="team-single.html">Team Member<span class="arrow"><i
										class="material-icons keyboard_arrow_down"></i></span></a>
					</li>
				</ul>
			</li>

			<li class="menu-item menu-item-has-children">
				<a href="#">Pages<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

				<ul class="sub-menu">
					<li class="menu-item">
						<a href="page-careers.html">Careers<span class="arrow"><i
										class="material-icons keyboard_arrow_down"></i></span></a>
					</li>

					<li class="menu-item">
						<a href="page-faq.html">FAQ<span class="arrow"><i
										class="material-icons keyboard_arrow_down"></i></span></a>
					</li>

					<li class="menu-item">
						<a href="page-contacts.html">Contacts<span class="arrow"><i
										class="material-icons keyboard_arrow_down"></i></span></a>
					</li>

					<li class="menu-item">
						<a href="page-philosophy.html">Philosophy<span class="arrow"><i
										class="material-icons keyboard_arrow_down"></i></span></a>
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
						<a class="site-search-btn tool mobile-view" href="#"><i class="material-icons search"></i></a><a
								class="sidebar-btn tool mobile-view" href="#"><i
									class="material-icons more_vert"></i></a><a class="topbar-btn tool" href="#"><i
									class="material-icons more_horiz"></i></a><a class="menu-btn tool"
																				 data-toggle="offcanvas" href="#"><i
									class="material-icons menu"></i></a>
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

					<li class="menu-item menu-item-has-children current-menu-item">
						<a href="#">Portfolio</a>

						<ul class="sub-menu">
							<li class="menu-item current-menu-item">
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
				<a class="site-search-btn tool" href="#"><i class="material-icons search"></i></a><a
						class="sidebar-btn tool" href="#"><i class="material-icons more_vert"></i></a><a
						class="topbar-btn tool" href="#"><i class="material-icons more_horiz"></i></a><a
						class="menu-btn tool" data-toggle="offcanvas" href="#"><i class="material-icons menu"></i></a>
			</div>
		</div>
	</div><!-- Main navigation END -->
</header><!-- Header END -->

<main>