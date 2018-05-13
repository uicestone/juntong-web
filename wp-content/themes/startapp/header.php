<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title><?php bloginfo('sitename'); ?></title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon Images -->
	<link rel="icon" href="<?=get_stylesheet_directory_uri()?>/assets/img/favicon/cropped-favicon-32x32.png"/>
	<link rel="icon" href="<?=get_stylesheet_directory_uri()?>/assets/img/favicon/cropped-favicon-192x192.png"/>
	<link rel="apple-touch-icon-precomposed" href="<?=get_stylesheet_directory_uri()?>/assets/img/favicon/cropped-favicon-180x180.png"/>
	<meta name="msapplication-TileImage" content="assets/img/favicon/cropped-favicon-270x270.png"/>

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

	<?php wp_head(); ?>
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
				<img src="<?=get_stylesheet_directory_uri()?>/assets/img/widgets/author-offcanvas.jpg" alt="author-offcanvas"/>

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
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/widgets/carousels/fin-client-logo-phil-7-300x200.png" alt=""/>
				</div>
				<div class="carousel-item">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/widgets/carousels/fin-client-logo-phil-6-300x200.png" alt=""/>
				</div>
				<div class="carousel-item">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/widgets/carousels/fin-client-logo-phil-4-300x200.png" alt=""/>
				</div>
				<div class="carousel-item">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/img/widgets/carousels/fin-client-logo-phil-3-300x200.png" alt=""/>
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
					<div class="column text-right">
						<nav class="topbar-menu">
							<ul class="menu">
								<li class="menu-item">
									<a href="<?=site_url()?>/philosophy/">理念</a>
								</li>

								<li class="menu-item">
									<a href="<?=site_url()?>/career/">加入我们</a>
								</li>

								<li class="menu-item">
									<a href="<?=site_url()?>/contact/">联系我们</a>
								</li>

							</ul>
						</nav>

						<div class="social-bar sb-solid-bg sb-rounded sb-dark-skin text-left">
							<a class="social-btn" href="#"><i class="fa fa-wechat"></i></a>
							<a class="social-btn" href="#"><i class="fa fa-weibo"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Topbar END -->

		<div class="site-info">
			<div class="container">
				<div class="inner">
					<div class="column">
						<a class="site-logo" href="<?=site_url()?>">
							<img alt="Financial" class="custom-logo" src="<?=get_stylesheet_directory_uri()?>/assets/img/logo.png">
						</a>
					</div>

					<div class="column text-right">
						<div class="widget widget_startapp_contacts">
							<div class="contact-item">
								<div class="contact-icon">
									<i class="material-icons smartphone"></i>
								</div>

								<div class="contact-info">
                                    <span><a href="tel:021-68635068">021-68635068</a></span><span><a href="mailto:info@juntong-capital.com">info@juntong-capital.com</a></span>
								</div>
							</div>

							<div class="contact-item">
								<div class="contact-icon">
									<i class="material-icons location_on"></i>
								</div>

								<div class="contact-info">
									<span>上海市浦东新区</span><span>春晓路439号14号楼</span>
								</div>
							</div>

							<div class="contact-item">
								<div class="contact-icon">
									<i class="material-icons access_time"></i>
								</div>

								<div class="contact-info">
									<span>9:00 - 17:00</span><span>周一至周五</span>
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