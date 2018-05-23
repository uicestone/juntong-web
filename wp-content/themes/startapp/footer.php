		<!-- Main Footer -->
		<footer class="site-footer footer-dark" style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/fin-bg-footer.jpg);">
			<div class="footer-row">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<!-- Widget Start -->
							<section class="widget widget_startapp_site_info">
								<a href="index.html">
									<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/logo-light.png"></a>

								<p>
                                    上海君桐股权投资管理有限公司（简称“君桐资本”）于2015年5月成立，是一家专注于电子信息等高新技术产业（以半导体集成电路领域为主）的私募股权投资服务机构。目前已在基金业协会完成私募基金管理人备案，完成逾10个产品的发行及设立，直接管理规模逾10亿元。
                                </p>
							</section><!-- Widget END -->
						</div>

						<div class="col-md-3 col-sm-6">
							<!-- Widget Start -->
							<section class="widget widget_nav_menu">
								<h3 class="widget-title">
									快速链接
								</h3>

								<div class="menu-footer-menu-1-container">
									<ul class="menu">
										<li class="menu-item">
											<a href="http://www.amac.org.cn/" target="_blank">基金业协会</a>
										</li>

										<li class="menu-item">
											<a href="http://www.csrc.gov.cn/pub/newsite/" target="_blank">证监会</a>
										</li>

										<li class="menu-item">
											<a href="http://www.cbrc.gov.cn/chinese/newIndex.html" target="_blank">银保监会</a>
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
									最近文章
								</h3>

                                <?php foreach (get_posts(array('posts_per_page' => 2)) as $recent_post): ?>
								<div class="post-item">
									<a class="post-item-thumb" href="<?=get_the_permalink($recent_post->ID)?>">
										<?=get_the_post_thumbnail($recent_post->ID, 'small')?>
									</a>

									<div class="post-item-info">
										<span class="post-item-date"><?=get_the_date('Y-m-d', $recent_post->ID)?></span>
										<h3 class="post-item-title">
											<a href="<?=get_the_permalink($recent_post->ID)?>" rel="bookmark"><?=get_the_title($recent_post->ID)?></a>
										</h3>
									</div>
								</div>
                                <?php endforeach; ?>

							</section><!-- Widget END -->
						</div>

						<div class="col-md-3 col-sm-6">
							<!-- Widget Start -->
							<section class="widget widget_startapp_contacts">
								<h3 class="widget-title">
									建立联络
								</h3>

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
										<i class="material-icons smartphone"></i>
									</div>

									<div class="contact-info">
										<span><a href="tel:021-68635068">021-68635068</a></span>
									</div>
								</div>

								<div class="contact-item">
									<div class="contact-icon">
										<i class="socicon-mail"></i>
									</div>

									<div class="contact-info">
										<span><a href="mailto:info@juntong-capital.com">info@juntong-capital.com</a></span>
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
									关注微信公众号
								</h3>
                                <p class="widget-description">
                                    保持行业嗅觉，紧跟投资风向
                                </p>

                                <div class="social-bar sb-solid-bg sb-rounded sb-dark-skin text-left">
                                    <a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip"
                                       href="#" title="微信公众号"><i class="fa fa-wechat"></i></a>
                                </div>
							</section>
						</div>

						<div class="col-sm-6">
							<section class="widget widget_startapp_image_carousel">
								<h3 class="widget-title">
									合作机构
								</h3>

								<p class="widget-description">
									海纳百川，大气谦和
								</p>

								<div class="widget-carousel-navs">
									<button class="slick-prev slick-arrow" type="button"></button>
									<button class="slick-next slick-arrow" type="button"></button>
								</div>

								<div class="widget-inner"
									 data-slick='{"slidesToShow":4,"arrows":true,"autoplay":true,"autoplaySpeed":4000}'>
									<div class="carousel-item">
										<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-footer-1.png">
									</div>

									<div class="carousel-item">
										<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-footer-2.png">
									</div>

									<div class="carousel-item">
										<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-footer-3.png">
									</div>

									<div class="carousel-item">
										<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-footer-4.png">
									</div>

									<div class="carousel-item">
										<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-footer-5.png">
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
								君桐资本 2018 版权所有
                                <a href="http://www.miibeian.gov.cn/">沪ICP备15029885号-1</a>
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
	<?php wp_footer(); ?>
</body>
</html>
