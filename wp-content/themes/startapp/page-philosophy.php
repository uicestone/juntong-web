<?php get_header(); ?>

	<div class="page-title title-size-xl text-light bg-parallax" data-parallax-speed="0.4"
		 data-parallax-type="scroll-opacity" style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/chip-black.jpg);">
		<span class="overlay" style="background-color: #000000; opacity: 0.35;"></span>

		<div class="container">
			<div class="inner">
				<div class="column">
					<h1>
						关于我们
					</h1>
				</div>

				<div class="column">
					<div class="breadcrumbs">
			          <span>
			          	<a href="<?=site_url()?>">
			          		<span property="name">首页</span>
			          	</a>
			          </span>

						<i class="material-icons keyboard_arrow_right"></i>

						<span property="itemListElement" typeof="ListItem">
		          		<span property="name">关于我们</span>
		          	</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<article class="page">
		<section class="fw-section padding-top-3x padding-bottom-3x"
				 style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/chip.jpg); background-size: 55%; background-position: 100% 50%;">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h2 class="block-title text-dark text-left">
							君桐资本概况
							<small class="h4">
                                上海君桐股权投资管理有限公司（简称“君桐资本”）于2015年5月成立，是一家专注于电子信息等高新技术产业（以半导体集成电路领域为主）的私募股权投资服务机构。
							</small>
                            <small class="h4">
                                已在基金业协会完成私募基金管理人备案，目前完成逾10个产品的发行及设立，直接管理规模逾10亿元。
                            </small>
						</h2>

						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-10">
								<div class="portfolio-posts masonry-grid col-2 filter-grid"
									 id="portfolio-04395476-grid">
									<div class="gutter-sizer">
									</div>

									<div class="grid-sizer">
									</div>
                                    <?php foreach (get_posts(array('category_name' => '产品', 'posts_per_page' => 4)) as $product): ?>
									<div class="grid-item devices media">
										<article class="portfolio-tile">
											<a class="portfolio-thumb" href="<?=get_the_permalink($product->ID)?>">
                                                <?=get_the_post_thumbnail($product->ID, 'small')?>
                                            </a>
										</article>
									</div>
                                    <?php endforeach; ?>
								</div>
								<a class="btn btn-ghost btn-rounded btn-primary btn-nl btn-block waves-effect waves-light"
								   href="<?=site_url()?>/service/">业务介绍&nbsp;<i class="material-icons trending_flat"></i></a>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section with-overlay bg-parallax padding-top-3x padding-bottom-1x" data-parallax-speed="0.4"
				 data-parallax-type="scroll" style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/fin-bg-9.jpg);">
			<span class="overlay" style="opacity: 0.6; background-color: #000000;"></span>

			<div class="container">
				<div class="row">
					<div class="col-sm-6 padding-bottom-2x">
						<h2 class="block-title text-light text-left">
							我们投资的细分领域
						</h2>

						<div class="progress-bars with-units animated">
							<div class="progress progress-light progress-animated" data-current-value="46">
								<div class="progress-bar">
									<span class="value text-light"><i>46</i> %</span> <span class="bar bg-light"></span>
									<span class="rails"></span>
								</div>

								<h4 class="text-white">
									IC设计、IC测试
								</h4>
							</div>

							<div class="progress progress-light progress-animated" data-current-value="36">
								<div class="progress-bar">
									<span class="value text-light"><i>36</i> %</span> <span class="bar bg-light"></span>
									<span class="rails"></span>
								</div>

								<h4 class="text-white">
									半导体装备、半导体制造、半导体材料
								</h4>
							</div>

							<div class="progress progress-light progress-animated" data-current-value="18">
								<div class="progress-bar">
									<span class="value text-light"><i>18</i> %</span> <span class="bar bg-light"></span>
									<span class="rails"></span>
								</div>

								<h4 class="text-white">
									光学显示
								</h4>
							</div>
						</div>
					</div>

					<div class="col-sm-6 padding-bottom-2x">
						<h2 class="block-title text-light text-left">
							我们的核心竞争力
							<small class="h4">君桐资本结合自身优势，通过专业的服务，与业内许多企业和机构建立了深度合作关系，积累了丰富的人脉资源。</small>
						</h2>

						<ul class="list-unordered list-bordered text-lg text-light">
							<li>
								<small>
                                    聚集了行业内一批投资平台和产业平台
                                </small>
							</li>

							<li>
								<small>
                                    和产业顶级投资机构具有良好的合作关系
                                </small>
							</li>

                            <li>
                                <small>
                                    在投资界的广泛合作及协同
                                </small>
                            </li>

                            <li>
                                <small>
                                    政府关系深厚，和协会、媒体保持密切联系
                                </small>
                            </li>
                        </ul>
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section padding-top-3x">
			<div class="container">
                <h2 class="block-title text-center">
                    集成电路（IC）行业背景
                </h2>

                <div class="row">
					<div class="col-sm-6">
						<figure class="single-image wp-caption">
							<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/industry-tianshi-2.png">
							<figcaption class="wp-caption-text">

							</figcaption>
						</figure>
					</div>

					<div class="col-sm-6 mobile-center">
						<div class="wpb_raw_code wpb_content_element wpb_raw_html">
							<div class="wpb_wrapper">
								<div class="padding-top-3x visible-lg visible-md"></div>
								<div class="padding-top-1x visible-sm visible-xs"></div>
							</div>
						</div>

						<div class="text-block">
							<h3>
                                天时
                            </h3>

							<p>
								<span class="text-gray">中国正在由资源消耗型向发展高科技转型，集成电路产业上升到国家战略产业高度，史上力度最大的集成电路产业扶持政策密集出台。</span>
							</p>
						</div>
						<!--<a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light" href="#">Learn
							More</a>-->
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section padding-top-3x">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 mobile-center">
						<div class="wpb_raw_code wpb_content_element wpb_raw_html">
							<div class="wpb_wrapper">
								<div class="padding-top-3x visible-lg visible-md">
								</div>

								<div class="padding-top-1x visible-sm">
								</div>

								<div class="padding-top-3x visible-xs">
								</div>
							</div>
						</div>

						<div class="text-block">
							<h3>
                                地利
							</h3>

							<p>
                                从本世纪初至今，中国领跑全球半导体市场，其增速高达21.4%。同期全球半导体年均增速是3.6%，美国近5%，亚太13%。中国半导体市场份额占到全球50%以上，成为全球最大的半导体市场。
							</p>
						</div>
						<!--<a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light" href="#">Learn
							More</a>-->
						<div class="wpb_raw_code wpb_content_element wpb_raw_html">
							<div class="wpb_wrapper">
								<div class="padding-bottom-2x visible-xs">
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						<figure class="single-image wp-caption">
							<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/industry-dili-2.jpg">
							<figcaption class="wp-caption-text">
                                中国是全球最大的半导体市场，2017年进口额为2600亿美元。
                            </figcaption>
						</figure>
					</div>
				</div>
			</div>
		</section>

        <section class="fw-section padding-top-3x">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <figure class="single-image wp-caption">
                            <img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/industry-renhe-2.png">
                            <figcaption class="wp-caption-text">

                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-sm-6 mobile-center">
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                            <div class="wpb_wrapper">
                                <div class="padding-top-3x visible-lg visible-md"></div>
                                <div class="padding-top-1x visible-sm visible-xs"></div>
                            </div>
                        </div>

                        <div class="text-block">
                            <h3>
                                人和
                            </h3>

                            <p>
                                <span class="text-gray">IC 的技术和人才的转移为国内集成电路产业的成长提供了巨大的空间和投资机会。</span>
                            </p>
                        </div>
                        <!--<a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light" href="#">Learn
                            More</a>-->
                    </div>
                </div>
            </div>
        </section>
	</article>

<?php get_footer(); ?>