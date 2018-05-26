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
									data-fsmasterspeed="1000"
									data-fsslotamount="7"
									data-index="rs-<?=$banner->ID?>"
									data-thumb="<?=get_the_post_thumbnail_url($banner->ID, 'small')?>">
								<!-- MAIN IMAGE -->
								<img
										alt=""
										class="rev-slidebg"
										data-bgparallax="5"
										data-bgposition="center center"
										data-duration="10000"
										data-ease="Linear.easeNone"
										data-kenburns="on"
										data-scaleend="110"
										data-scalestart="100"
										src="<?=get_the_post_thumbnail_url($banner->ID, 'headline')?>">

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
										id="slide-<?=$banner->ID?>-layer-1"
										style="z-index: 5; min-width: 606px; max-width: 606px; max-width: 73px; max-width: 73px; white-space: normal; font-size: 24px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);text-align:center;">

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
                                        data-y="['300','310','320','50']"
                                        data-textalign="center"
                                        id="slide-<?=$banner->ID?>-layer-2"
                                        style="z-index: 5; min-width: 606px; max-width: 73px; white-space: normal; font-size: 24px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);text-align:center;">
                                    <?=get_the_title($banner->ID)?>
								</div>

								<!-- LAYER NR. 3 -->
								<div
										class="tp-caption rev-btn"
										data-start="2250"
										data-style_hover="c:rgba(63, 107, 190, 1.00);bg:rgba(255, 255, 255, 1.00);br:3px 3px 3px 3px;"
										data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeIn;"
										data-transform_idle="o:1;"
										data-transform_in="y:20px;opacity:0;s:800;e:Power4.easeOut;"
										data-transform_out="y:-20px;opacity:0;s:300;e:Power2.easeInOut;"
										data-voffset="['50','40','30,'100']"
										data-whitespace="nowrap"
										data-width="none"
										data-x="['center','center','center','center']"
										data-y="['bottom','bottom','bottom','bottom']"
										id="slide-<?=$banner->ID?>-layer-3"
										style="z-index: 7; white-space: nowrap; font-size: 18px; line-height: 18px; font-weight: 600; color: rgba(255, 255, 255, 1.00);background-color:rgba(255, 255, 255, 0.25);padding:15px 12px 15px 12px;border-color:rgba(0, 0, 0, 1.00);border-radius:4px 4px 4px 4px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
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

		<section class="fw-section padding-top-3x padding-bottom-3x" style="background-color: #9a0909;">
			<div class="container">
				<div class="row">
                    <?php foreach (get_posts(array('category_name' => 'service', 'order' => 'asc')) as $index => $service): ?>
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

		<section class="fw-section padding-top-2x padding-top-3x" data-aos="fade-up">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12">
						<h2 class="block-title text-dark text-left tablet-center">
							新闻
							<small class="h4">行业和公司最近信息</small>
						</h2>
					</div>

					<div class="col-sm-4 hidden-sm hidden-xs">
						<div class="text-right">
							<a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light"
							   href="<?=site_url()?>/category/news/">全部新闻&nbsp;<i class="material-icons trending_flat"></i></a>
						</div>
					</div>

					<div class="col-sm-12" data-aos="fade-up">
						<div class="blog-posts grid-layout masonry-grid col-3">
							<div class="gutter-sizer">
							</div>

							<div class="grid-sizer">
							</div>
                            <?php foreach (get_posts(array('category_name' => 'news', 'posts_per_page' => 3)) as $news): ?>
							<div class="grid-item">
								<article
										class="post-tile post-1 post type-post format-standard category-investment tag-business tag-investment tag-iot">
									<div class="post-body">
										<header class="post-header">
											<div class="column">
												<a class="post-date" href="#"><?=get_the_date('Y-m-d', $news->ID)?></a>
											</div>

											<!--<div class="column">
												<a class="post-comments" href="#">3 <i class="material-icons chat_bubble"></i></a>
											</div>-->
										</header>

										<h3 class="post-title">
											<a href="<?=get_the_permalink($news->ID)?>"><?=get_the_title($news->ID)?></a>
										</h3>

										<p class="post-excerpt">
											<?=strip_tags(get_the_excerpt($news->ID))?>
										</p>

										<footer class="post-footer">
											<div class="tags-links">
                                                <?php get_the_tag_list('', '', '', $news->ID)?>
											</div>
										</footer>
									</div>

									<a class="post-thumb" href="<?=get_the_permalink($news->ID)?>"><?=get_the_post_thumbnail($news->ID)?></a>
								</article>
							</div>
                            <?php endforeach; ?>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section padding-bottom-3x padding-top-3x" data-aos="fade-up">
			<div class="container">
				<h2 class="block-title text-dark text-center">
					数据一瞥
					<small class="h4">仅仅3年来，我们达成的成就和规模</small>
				</h2>

				<div class="row">
					<div class="col-sm-4">
						<div class="animated-digit-box skin-primary">
							<div class="animated-digit">
								<span class="digit">12</span>
							</div>

							<p class="description">
								管理的产品数量
							</p>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="animated-digit-box skin-primary">
							<div class="animated-digit">
								<span class="digit">10</span><span class="unit">亿</span>
							</div>

							<p class="description">
								管理的资金规模
							</p>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="animated-digit-box skin-primary">
							<div class="animated-digit">
								<span class="digit">50</span><span class="unit">+</span>
							</div>

							<p class="description">
								合作机构
							</p>
						</div>
					</div>
				</div>

				<!--<div class="row">
					<div class="col-sm-12">
						<div class="text-block">
							<p class="lead" style="text-align: center;">
								Forrester Report: “The Total Economic Impact of StartApp”
							</p>
						</div>

						<div class="text-center">
							<a class="btn btn-solid btn-rounded btn-primary btn-nl waves-effect waves-light" href="#"><i
										class="material-icons file_download"></i>&nbsp;下载报告</a>
						</div>
					</div>
				</div>-->
			</div>
		</section>

	</article>

<?php get_footer(); ?>