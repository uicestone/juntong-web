
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

		        <ul class="sub-menu">
		          <li class="menu-item">
		            <a href="news-all.html">All News<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>

		          <li class="menu-item">
		            <a href="news-single.html">Single<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>
		        </ul>
		      </li>

		      <li class="menu-item menu-item-has-children current-menu-item">
		        <a href="#">Team<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>

		        <ul class="sub-menu">
		          <li class="menu-item">
		            <a href="team-all.html">All Team<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span></a>
		          </li>

		          <li class="menu-item current-menu-item">
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

    		      <li class="menu-item menu-item-has-children">
    		        <a href="#">News</a>

    		        <ul class="sub-menu">
    		          <li class="menu-item">
    		            <a href="news-all.html">All News</a>
    		          </li>

    		          <li class="menu-item">
    		            <a href="news-single.html">Single</a>
    		          </li>
    		        </ul>
    		      </li>

    		      <li class="menu-item menu-item-has-children current-menu-item">
    		        <a href="#">Team</a>

    		        <ul class="sub-menu">
    		          <li class="menu-item">
    		            <a href="team-all.html">All Team</a>
    		          </li>

    		          <li class="menu-item current-menu-item">
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
			  <section class="fw-section padding-top-1x">
			    <div class="container">
			      <div class="row">
			        <div class="col-sm-6">
			          <img alt="" src="assets/img/fin-team-15.jpg">
			        </div>

			        <div class="col-sm-6 padding-bottom-1x">
			          <div class="text-block mobile-center">
			            <h1>
			              Madge Sullivan
			            </h1>

			            <h4>
			              Managing General Partner, Menlo Park &amp; China
			            </h4>

			            <p>
			              <span class="text-gray">SaaS &amp; Enterprise, Finance and Payments, “Intelligent Software”, Consumer</span>
			            </p>
			          </div>

			          <div class="social-bar sb-border sb-rounded sb-dark-skin text-left mobile-center">
			            <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="#" title="Twitter"><i class="socicon-twitter"></i></a>
			            <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="#" title="Facebook"><i class="socicon-facebook"></i></a>
			            <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip" href="#" title="Odnoklassniki"><i class="socicon-odnoklassniki"></i></a>
			          </div>

			          <div class="tabs tabs-horizontal tabs-horizontal-left padding-top-1x" id="tta-90f58f88">
			            <ul class="nav-tabs nav-tabs-dark text-left" role="tablist">
			              <li class="active">
			                <a data-toggle="tab" href="#1476122970489-3d19fe90-15f4" role="tab">Bio</a>
			              </li>

			              <li>
			                <a data-toggle="tab" href="#1476122970553-25669a3b-9881" role="tab">Writings</a>
			              </li>

			              <li>
			                <a data-toggle="tab" href="#1476123003762-574033aa-70ac" role="tab">News</a>
			              </li>
			            </ul>

			            <div class="tab-content text-dark">
			              <div class="tab-pane transition fade in active" id="1476122970489-3d19fe90-15f4">
			                <div class="text-block">
			                  <p>
			                    <span class="text-gray">Curabitur lacinia nisl lacus, sit amet placerat tortor ultrices eget. Ut turpis eros, scelerisque ac commodo non, blandit sed elit. Aliquam ac mi et ante.</span>
			                  </p>
			                </div>

			                <ul class="list-unordered text-lg text-dark">
			                  <li>Speaking<small>Sed fermentum in felis feugiat pellentesque. Curabitur id facilisis lorem, id consequat tortor.</small>
			                  </li>

			                  <li>Growing up on Both Coasts<small>Curabitur lacinia nisl lacus, sit amet placerat tortor ultrices eget. Ut turpis eros, scelerisque ac commodo non, blandit sed elit. Aliquam ac mi et ante vestibulum convallis.</small>
			                  </li>
			                </ul>
			              </div>

			              <div class="tab-pane transition fade" id="1476122970553-25669a3b-9881">
			                <div class="custom-links">
			                  <ul>
			                    <li>
			                      <span>Publications</span><a href="#">Responding to Your Response About Continuing to Improve Responses</a>
			                    </li>
			                  </ul>
			                </div>
			              </div>

			              <div class="tab-pane transition fade" id="1476123003762-574033aa-70ac">
		                  <div class="widget widget_recent_entries">
		                    <h2 class="widgettitle">
		                      Recent Posts
		                    </h2>

		                    <ul>
		                      <li>
		                        <a href="#">Are You Ready To Buy A Home</a> <span class="post-date">October 11, 2016</span>
		                      </li>

		                      <li>
		                        <a href="#">Publikate Net</a> <span class="post-date">October 11, 2016</span>
		                      </li>

		                      <li>
		                        <a href="#">Computer Monitoring Software A Watchdog Protecting Your Interests</a> <span class="post-date">October 10, 2016</span>
		                      </li>
		                    </ul>
			                </div>
			              </div>
			            </div>
			          </div>

			          <div class="padding-bottom-1x visible-xs"></div>
			        </div>
			      </div>
			    </div>
			  </section>

			  <section class="fw-section padding-bottom-3x padding-top-3x">
			    <div class="container">
	          <h2 class="block-title text-dark text-center">
	            Experience<small class="h4">Modernize Traditional Sales</small>
	          </h2>

	          <div class="timeline timeline-dark carousel-dark carousel-navs-ghost carousel-navs-top-outside carousel-navs-rounded carousel-navs-sm" data-slick='{"infinite":false}'>
	            <div class="milestone">
	              <h3 class="milestone-label">
	                2005
	              </h3>

	              <div class="milestone-item">
	                <div class="milestone-body">
	                  <h4 class="milestone-date">
	                    5 October
	                  </h4>

	                  <section class="fw-section">
	                    <div class="container">
                        <ul class="list-unordered text-lg text-dark">
                          <li>Thinking Globally<small>Praesent convallis nibh in odio pellentesque aliquam convallis nibh.</small>
                          </li>

                          <li>Growing up on Both Coasts<small>Nulla finibus sit amet turpis et ullamcorper. Proin sit amet accumsan elit, quis finibus arcu. Morbi pretium velit non ligula lacinia, non luctus metus mattis. Maecenas viverra.</small>
                          </li>
                        </ul>
	                    </div>
	                  </section>
	                </div>
	              </div>
	            </div>

	            <div class="milestone">
	              <h3 class="milestone-label">
	                2006
	              </h3>

	              <div class="milestone-item">
	                <div class="milestone-body">
	                  <h4 class="milestone-date">
	                    13 April
	                  </h4>

	                  <section class="fw-section">
	                    <div class="container">
                        <div class="text-block">
                          <p>
                            Nulla finibus sit amet turpis et ullamcorper. Proin sit amet accumsan elit, quis finibus arcu. Morbi pretium velit non ligula lacinia, non luctus metus mattis. Maecenas viverra.
                          </p>
                        </div>
                        <img alt="" class="single-image attachment-thumbnail size-thumbnail" src="assets/img/fin-timeline-1-150x150.png">
                      </div>
	                  </section>
	                </div>
	              </div>
	            </div>

	            <div class="milestone">
	              <h3 class="milestone-label">
	                2007
	              </h3>

	              <div class="milestone-item">
	                <div class="milestone-body">
	                  <h4 class="milestone-date">
	                    15 September
	                  </h4>

	                  <section class="fw-section">
	                    <div class="container">
                        <div class="text-block">
                          <p>
                            Nulla finibus sit amet turpis et ullamcorper. Proin sit amet accumsan elit, quis finibus arcu. Morbi pretium velit non.
                          </p>
                        </div>
	                    </div>
	                  </section>
	                </div>
	              </div>

	              <div class="milestone-item">
	                <div class="milestone-body">
	                  <h4 class="milestone-date">
	                    2 May
	                  </h4>

	                  <section class="fw-section">
	                    <div class="container">
                        <div class="text-block">
                          <p>
                            Nulla finibus sit amet turpis et ullamcorper. Proin sit <a href="#">amet accumsan</a> elit, quis finibus arcu.
                          </p>

                          <p>
                            Curabitur lacinia nisl lacus, sit amet placerat tortor ultrices eget. Ut turpis eros, scelerisque ac commodo non, blandit sed elit. Aliquam ac mi et ante vestibulum convallis. Fusce non orci elementum, egestas enim ut, sodales orci.
                          </p>
                        </div>
	                    </div>
	                  </section>
	                </div>
	              </div>
	            </div>

	            <div class="milestone">
	              <h3 class="milestone-label">
	                2009
	              </h3>

	              <div class="milestone-item">
	                <div class="milestone-body">
	                  <h4 class="milestone-date">
	                    23 February
	                  </h4>

	                  <section class="fw-section">
	                    <div class="container">
                        <img alt="" src="assets/img/fin-blog-post-1.jpg">
                        <div class="text-block">
                          <p>
                            Nulla finibus sit amet turpis et ullamcorper. Proin sit amet accumsan elit, quis finibus arcu. Morbi pretium velit non.
                          </p>
	                      </div>
	                    </div>
	                  </section>
	                </div>
	              </div>
	            </div>

	            <div class="milestone">
	              <h3 class="milestone-label">
	                2010
	              </h3>

	              <div class="milestone-item">
	                <div class="milestone-body">
	                  <h4 class="milestone-date">
	                    31 May
	                  </h4>

	                  <section class="fw-section">
	                    <div class="container">
                        <div class="text-block">
                          <p>
                            Nulla finibus sit amet turpis et ullamcorper. Proin sit amet accumsan elit, quis finibus arcu. Morbi pretium velit non ligula lacinia, non luctus metus mattis. Maecenas viverra, augue in dignissim molestie, odio urna accumsan orci, vitae iaculis velit urna sed felis. Maecenas viverra, augue in dignissim molestie, odio urna accumsan orci, vitae iaculis.
                          </p>
                        </div>
	                    </div>
	                  </section>
	                </div>
	              </div>
	            </div>

	          </div>
			    </div>
			  </section>

			  <section class="fw-section padding-bottom-3x padding-top-3x">
			    <div class="container">
	          <h2 class="block-title text-dark text-center">
	            Companies<small class="h4">Handpicked StartApps</small>
	          </h2>

	          <div class="portfolio-posts masonry-grid col-6 filter-grid">
	            <div class="gutter-sizer"></div>
	            <div class="grid-sizer"></div>

	            <div class="grid-item devices media">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="#"><img alt="" src="assets/img/fin-portfolio-1.jpg"></a>
	              </article>
	            </div>

	            <div class="grid-item devices financial media">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="#"><img alt="" src="assets/img/fin-portfolio-2.jpg"></a>
	              </article>
	            </div>

	            <div class="grid-item media">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="#"><img alt="" src="assets/img/fin-portfolio-3.jpg"></a>
	              </article>
	            </div>

	            <div class="grid-item media">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="#"><img alt="" src="assets/img/fin-portfolio-4.jpg"></a>
	              </article>
	            </div>

	            <div class="grid-item marketplace">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="#"><img alt="" src="assets/img/fin-portfolio-5.jpg"></a>
	              </article>
	            </div>

	            <div class="grid-item marketplace">
	              <article class="portfolio-tile portfolio-simple">
	                <a class="portfolio-thumb" href="#"><img alt="" src="assets/img/fin-portfolio-6.jpg"></a>
	              </article>
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
			
			<!-- Vendor Script Section END-->
			<!-- *************************************************************************************** -->
		<script type='text/javascript' src='assets/js/startapp-theme.js'></script>
		<!-- **************************************************************************************************************************** -->
		<!-- Scripts section END -->
	</body>
</html>