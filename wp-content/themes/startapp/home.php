<?php get_header(); ?>

	<article class="page">
		<section class="fw-section section-no-gap">
			<div class="container-fluid">

				<div class="rev_slider_wrapper">

					<div class="rev_slider revo-slider-financial" style="display:none;">

						<ul>
                            <?php foreach (get_posts(array('category_name' => 'home-banner')) as $banner): ?>
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
									data-index="rs-<?=$banner->ID?>"
									data-masterspeed="300"
									data-rotate="0"
									data-saveperformance="off"
									data-slotamount="default"
									data-thumb="<?=get_the_post_thumbnail_url($banner->ID, 'small')?>"
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
										src="<?=get_the_post_thumbnail_url($banner->ID, 'headline')?>"
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
										data-width="['100%','100%','100%','100%']"
										data-x="['center','center','center','center']"
										data-y="['350','350','350','100']"
                                        data-textalign="center"
										id="slide-<?=$banner->ID?>-layer-2"
										style="z-index: 5; min-width: 606px; max-width: 606px; max-width: 73px; max-width: 73px; white-space: normal; font-size: 24px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:Titillium Web;text-align:center;">

									<?=get_the_excerpt($banner->ID)?>
								</div>

								<!-- LAYER NR. 2 -->
								<div
                                        class="tp-caption"
                                        data-fontsize="['48','48','48','36']"
                                        data-height="['73','none','112','none']"
                                        data-hoffset="['0','0','0','0']"
                                        data-lineheight="['36','36','36','27']"
                                        data-responsive="off"
                                        data-responsive_offset="on"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-start="1150"
                                        data-transform_idle="o:1;"
                                        data-transform_in="y:20px;opacity:0;s:800;e:Power4.easeOut;"
                                        data-transform_out="y:-20px;opacity:0;s:300;e:Power2.easeInOut;"
                                        data-voffset="['3','3','21','8']"
                                        data-whitespace="normal"
                                        data-width="['100%','100%','100%','100%']"
                                        data-x="['center','center','center','center']"
                                        data-y="['300','300','300','50']"
                                        data-textalign="center"
                                        id="slide-<?=$banner->ID?>-layer-2"
                                        style="z-index: 5; min-width: 606px; max-width: 606px; max-width: 73px; max-width: 73px; white-space: normal; font-size: 24px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:Titillium Web;text-align:center;">

                                    <?=get_the_title($banner->ID)?>
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
										data-voffset="['50','98','98','333']"
										data-whitespace="nowrap"
										data-width="none"
										data-x="['center','center','center','center']"
										data-y="['bottom','bottom','bottom','bottom']"
										id="slide-<?=$banner->ID?>-layer-12"
										style="z-index: 7; white-space: nowrap; font-size: 18px; line-height: 18px; font-weight: 600; color: rgba(255, 255, 255, 1.00);font-family:Titillium Web;background-color:rgba(255, 255, 255, 0.25);padding:15px 12px 15px 12px;border-color:rgba(0, 0, 0, 1.00);border-radius:4px 4px 4px 4px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">

									查看详情
								</div>
							</li>
                            <?php endforeach; ?>
						</ul>
					</div>
				</div>
				<!-- END REVOLUTION SLIDER -->
			</div>
		</section>

		<section class="fw-section padding-top-3x padding-bottom-3x" style="background-color: #f50000;">
			<div class="container">
				<div class="row">
                    <?php foreach (get_posts(array('category_name' => 'service')) as $index => $service): ?>
					<div class="col-sm-4">
						<div class="icon-box icon-box-vertical icon-box-light icon-box-bg-enabled icon-box-type-image bg-hover hover-from-left text-center"
							 data-aos="zoom-in">
							<span class="icon-box-backdrop" style="background-color: #fff;"></span>

							<div class="icon-box-icon">
								<img alt="" class="attachment-full size-full" height="144"
									 src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-icon-<?=$index+1?>.png" width="144">
							</div>

							<h3 class="icon-box-title">
								<?=get_the_title($service->ID)?>
							</h3>

							<div class="icon-box-description">
                                <p><span class="opacity-50 text-light"><?=strip_tags(get_the_excerpt($service->ID))?></span></p>
							</div>
						</div>
					</div>
                    <?php endforeach; ?>
				</div>
			</div>
		</section>

		<section class="fw-section section-no-gap">
			<div class="container-fluid">
				<div class="testimonials-slider carousel-light text-left text-light carousel-dots-inside carousel-dots-left carousel-effect-slide carousel-autoplay-disable"
					 data-slick='{"arrows":false,"dots":true,"infinite":false,"fade":false,"autoplay":false,"autoplaySpeed":3000}'>
					<div class="testimonial-slide padding-top-3x padding-bottom-5x"
						 style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/fin-testim-slider-1.jpg);">
						<div class="container">
							<div class="inner">
								<a class="testimonial-logo" href="#"></a>

								<h3 class="h2">
									Medicine’s Transistor Moment
								</h3>

								<blockquote>
									<p>
										Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis in faucibus
										orci luctus et ultrices posuere cubilia Curae; Sed tempor dapibus magna, a
										commodo neque tempus ut. Sed at lacus id mauris viverra volutpat ornare ut
										risus. Sed at lacus id mauris viverra volutpat ornare ut risus.
									</p>
									<cite>Sue Price, CEO <a href="#">Cunfluence</a></cite>
								</blockquote>

								<a class="btn btn-transparent btn-rounded btn-light btn-default waves-effect waves-light"
								   href="#">Read All</a>
							</div>
						</div>
					</div>

					<div class="testimonial-slide padding-top-3x padding-bottom-5x"
						 style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/fin-testim-slider-2.jpg);">
						<div class="container">
							<div class="inner">
								<div class="testimonial-logo">
								</div>

								<h3 class="h2">
									How To Make Money
								</h3>

								<blockquote>
									<p>
										Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis in faucibus
										orci luctus et ultrices posuere cubilia Curae; Sed tempor dapibus magna, a
										commodo neque tempus ut. Sed at lacus id mauris viverra volutpat ornare ut
										risus. Sed at lacus id mauris viverra volutpat ornare ut risus.
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

		<section class="fw-section bg-parallax vc_custom_1479024795475 padding-top-3x padding-bottom-3x"
				 data-parallax-speed="0.4" data-parallax-type="scroll-opacity"
				 style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/fin-bg-1.jpg);">
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
							<li>Thinking Globally
								<small>Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis.</small>
							</li>

							<li>Growing up on Both Coasts
								<small>Duis congue quis magna quis eleifend. Vestibulum ante ipsum primis in faucibus
									orci luctus et ultrices posuere cubilia Curae; Sed tempor dapibus magna, a commodo
									neque tempus ut.
								</small>
							</li>
						</ul>

						<a class="btn btn-solid btn-rounded btn-primary btn-nl waves-effect waves-light" href="#">Submit
							a business plan</a>
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section padding-top-3x">
			<div class="container">
				<div class="row" data-aos="fade-up">
					<div class="col-lg-8 col-md-8 col-sm-12">
						<h2 class="block-title text-dark text-left tablet-center">
							Investment Team
							<small class="h4">Maecenas mattis lorem massa, nec condimentum nulla pretium eu...</small>
						</h2>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 hidden-sm hidden-xs">
						<div class="text-right">
							<a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light"
							   href="team-all.html">See full team&nbsp;<i class="material-icons trending_flat"></i></a>
						</div>
					</div>
				</div>

				<div class="row" data-aos="fade-up">
					<div class="col-sm-4">
						<div class="teammate teammate-dark-skin teammate-tile">
							<a class="teammate-thumb" href="#"><img alt="" class="attachment-large size-large"
																	height="590" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-team-1.jpg"
																	width="539"></a>
							<div class="teammate-info-wrap">
								<span class="teammate-info">CEO, <a href="#">8Guild</a></span>
								<h3 class="teammate-name">
									<a href="#">Katharine Wells</a>
								</h3>

								<div class="hidden-info">
									<span class="teammate-info">SaaS &amp; Enterprise, Finance and Payments, “Intelligent Software”, Consumer Palo Alto</span>
									<div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
										<a class="social-btn waves-effect waves-light" href="#"><i
													class="socicon-twitter"></i></a><a
												class="social-btn waves-effect waves-light" href="#"><i
													class="socicon-linkedin"></i></a><a
												class="social-btn waves-effect waves-light" href="#"><i
													class="socicon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="teammate teammate-dark-skin teammate-tile">
							<a class="teammate-thumb" href="#"><img alt="" class="attachment-large size-large"
																	height="590" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-team-2.jpg"
																	width="539"></a>
							<div class="teammate-info-wrap">
								<span class="teammate-info">CEO, <a href="#">ZurApp</a></span>
								<h3 class="teammate-name">
									<a href="#">Ray Singleton</a>
								</h3>

								<div class="hidden-info">
									<span class="teammate-info">SaaS &amp; Enterprise, Finance and Payments, “Intelligent Software”, Consumer</span>
									<div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
										<a class="social-btn waves-effect waves-light" href="#"><i
													class="socicon-facebook"></i></a><a
												class="social-btn waves-effect waves-light" href="#"><i
													class="socicon-telegram"></i></a><a
												class="social-btn waves-effect waves-light" href="#"><i
													class="socicon-dribbble"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="teammate teammate-dark-skin teammate-tile">
							<a class="teammate-thumb" href="#"><img alt="" class="attachment-large size-large"
																	height="590" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-team-3.jpg"
																	width="539"></a>
							<div class="teammate-info-wrap">
								<span class="teammate-info">Product Designer, <a href="#">Appica</a></span>
								<h3 class="teammate-name">
									<a href="#">Amelia Powers</a>
								</h3>

								<div class="hidden-info">
									<span class="teammate-info">SaaS &amp; Enterprise, Finance and Payments, “Intelligent Software”, Consumer Palo Alto</span>
									<div class="social-bar sb-border sb-rounded sb-dark-skin text-left">
										<a class="social-btn" href="#"><i class="socicon-twitter"></i></a><a
												class="social-btn" href="#"><i class="socicon-pinterest"></i></a><a
												class="social-btn" href="#"><i class="socicon-stackoverflow"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row padding-top-2x">
					<div class="col-sm-12">
						<hr class="hr-solid hr-primary"
							style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section padding-top-2x padding-top-3x" data-aos="fade-up">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12">
						<h2 class="block-title text-dark text-left tablet-center">
							News
							<small class="h4">StartApp news</small>
						</h2>
					</div>

					<div class="col-sm-4 hidden-sm hidden-xs">
						<div class="text-right">
							<a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light"
							   href="news-all.html">Read more news&nbsp;<i class="material-icons trending_flat"></i></a>
						</div>
					</div>

					<div class="col-sm-12" data-aos="fade-up">
						<div class="blog-posts grid-layout masonry-grid col-3">
							<div class="gutter-sizer">
							</div>

							<div class="grid-sizer">
							</div>

							<div class="grid-item">
								<article
										class="post-tile post-1 post type-post format-standard category-investment tag-business tag-investment tag-iot">
									<div class="post-body">
										<header class="post-header">
											<div class="column">
												<a class="post-date" href="#">October 11, 2016</a>by
												<a href="#">8guild</a>&nbsp;in
												<a href="#" rel="category tag">Investment</a>
											</div>

											<div class="column">
												<a class="post-comments" href="#">3&nbsp;<i
															class="material-icons chat_bubble"></i></a>
											</div>
										</header>

										<h3 class="post-title">
											<a href="news-single.html">Are You Ready To Buy A Home</a>
										</h3>

										<p class="post-excerpt">
											Nulla finibus sit amet turpis et ullamcorper. Proin sit amet accumsan elit,
											quis finibus arcu. Morbi pretium velit non
										</p>

										<footer class="post-footer">
											<div class="tags-links">
												<a href="#" rel="tag">Business</a>
												<a href="#" rel="tag">Investment</a>
												<a href="#" rel="tag">IOT</a>
											</div>
										</footer>
									</div>

									<a class="post-thumb" href="news-single.html"><img alt=""
																					   src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-blog-post-bg.jpg"></a>
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
											Nulla finibus sit amet turpis et ullamcorper. Proin sit amet accumsan elit,
											quis finibus arcu. Morbi pretium velit non
										</p>

										<footer class="post-footer">
											<div class="tags-links">
												<a href="#" rel="tag">Business</a><a href="#" rel="tag">Investment</a>
											</div>
										</footer>
									</div>

									<a class="post-thumb" href="news-single.html"><img alt=""
																					   src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-blog-post-4.jpg"></a>
								</article>
							</div>

							<div class="grid-item">
								<article class="post-tile">
									<div class="post-body">
										<header class="post-header">
											<div class="column">
												<a class="post-date" href="#">October 10, 2016</a>by
												<a href="#">8guild</a>&nbsp;in <a href="#"
																				  rel="category tag">Technology</a>
											</div>

											<div class="column">
											</div>
										</header>

										<h3 class="post-title">
											<a href="news-single.html">How To Put Movies On Iphone</a>
										</h3>

										<p class="post-excerpt">
											Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec id ante
											augue. Sed augue ipsum, varius et ligula eu
										</p>

										<footer class="post-footer">
											<div class="tags-links">
												<a href="#" rel="tag">Investment</a><a href="#" rel="tag">IOT</a>
											</div>
										</footer>
									</div>

									<a class="post-thumb" href="news-single.html"><img alt="" height="1280"
																					   src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-blog-post-3.jpg"
																					   width="1920"></a>
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
					Proven Customer Benefits
					<small class="h4">Closing In On Effective Advertising</small>
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
							<a class="btn btn-solid btn-rounded btn-primary btn-nl waves-effect waves-light" href="#"><i
										class="material-icons file_download"></i>&nbsp;Download report</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section with-overlay bg-parallax padding-top-5x padding-bottom-5x" data-parallax-speed="0.4"
				 data-parallax-type="scroll" style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/fin-bg-2.jpg);">
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
							<a class="btn btn-transparent btn-rounded btn-light btn-nl waves-effect waves-light"
							   href="page-contacts.html">Contact Us</a>
						</div>
					</div>

					<div class="col-sm-3">
					</div>
				</div>
			</div>
		</section>
	</article>

<?php get_footer(); ?>