<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title><?php bloginfo('sitename'); ?></title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon Images -->
	<link rel="shortcut icon" href="<?=get_stylesheet_directory_uri()?>/assets/img/favicon.ico"/>

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

	<!-- Site Search Form -->
	<div class="site-search-form">
		<div class="inner">
			<span class="close-btn"><i class="material-icons clear"></i></span>

			<form method="get" class="search-box" autocomplete="off">
				<input type="text" name="s" placeholder="搜索" value="">
				<button type="submit"><i class="material-icons search"></i></button>
			</form>
		</div>
	</div><!-- Site Serch Form END -->

	<!-- Offcanvas Sidebar Mobile Menu -->
	<aside class="off-canvas-menu">
		<span class="close-btn"><i class="material-icons clear"></i></span>

		<!-- Main navigation -->
		<!-- Visible only on mobile -->
        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'menu', 'container' => 'nav', 'container_class' => 'vertical-navigation')); ?>
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
									<a href="<?=site_url()?>/philosophy/">关于</a>
								</li>

								<li class="menu-item">
									<a href="<?=site_url()?>/careers/">加入</a>
								</li>

								<li class="menu-item">
									<a href="<?=site_url()?>/contact/">联络</a>
								</li>

							</ul>
						</nav>

						<div class="social-bar sb-solid-bg sb-rounded sb-dark-skin text-left">
							<a class="social-btn" href="#"><i class="fa fa-wechat"></i></a>
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
                                    <span><a href="tel:021-68635068">021-68635068</a></span>
                                    <span><a href="mailto:info@juntong-capital.com">info@juntong-capital.com</a></span>
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
									<span>9:00 - 18:00</span><span>周一至周五</span>
								</div>
							</div>
						</div>

						<div class="toolbar">
							<a class="site-search-btn tool mobile-view" href="#"><i class="material-icons search"></i></a><a class="topbar-btn tool" href="#"><i
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
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'menu', 'container' => 'nav', 'container_class' => 'main-navigation')); ?>

				<div class="toolbar">
					<a class="site-search-btn tool" href="#"><i class="material-icons search"></i></a><a
							class="topbar-btn tool" href="#"><i class="material-icons more_horiz"></i></a><a
							class="menu-btn tool" data-toggle="offcanvas" href="#"><i class="material-icons menu"></i></a>
				</div>
			</div>
		</div><!-- Main navigation END -->
	</header><!-- Header END -->

	<main>