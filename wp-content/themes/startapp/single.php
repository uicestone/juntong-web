<?php get_header(); the_post(); ?>

	<!-- Page Title Start -->
	<section class="single-cover-image bg-parallax" data-parallax-speed="0.4" data-parallax-type="scroll"
			 style="background-image: url(<?php the_post_thumbnail_url(); ?>); height: 500px;">
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
								<!--<div class="column">
									<a class="post-date" href="#">October 27, 2016</a>by
									<a href="#">8guild</a>&nbsp;in
									<a href="#">Banks</a>,
									<a href="#">Investment</a>
								</div>-->

								<div class="column"></div>
							</header>

							<h1 class="post-title">
								<?php the_title(); ?>
							</h1>

                            <hr>

						</div><!-- Section END -->

						<!-- Section Start -->
						<section class="fw-section">
							<div class="container text-block">
								<?php the_content(); ?>
							</div>
						</section><!-- Section END -->

						<!-- Post Footer -->
						<div class="container">
							<footer class="post-footer">
								<div class="tags-links">
									<!--<a href="#" rel="tag">Business</a>
									<a href="#" rel="tag">Investment</a>
									<a href="#" rel="tag">Remote</a>-->
								</div>
							</footer>

							<div class="post-share-buttons">
								<div class="column">
									<a class="startapp-share-wechat" href="#"><i class="fa fa-wechat"></i> 分享到微信</a>
								</div>
                                <div class="column">
                                    <a class="startapp-share-weibo" href="#"><i class="fa fa-weibo"></i> 分享到微博</a>
                                </div>
                            </div>

							<!-- Widget Start -->
							<!--<section class="post-author">
								<div class="post-author-thumb">
									<a href="#">
										<img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-author.jpg">
									</a>
								</div>

								<div class="post-author-info">
									<h3 class="post-author-name">
										<a href="#">8guild</a>
									</h3>

									<p>
										SaaS &amp; Enterprise, Finance and Payments, “Intelligent Software”,
										Consumer<br>
										Palo Alto
									</p>

									<div class="social-bar sb-border sb-rounded sb-dark-skin inline">
										<a class="social-btn" href="#"><i class="socicon-instagram"></i></a>
										<a class="social-btn" href="#"><i class="socicon-linkedin"></i></a>
										<a class="social-btn" href="#"><i class="socicon-odnoklassniki"></i></a>
										<a class="social-btn" href="#"><i class="socicon-facebook"></i></a>
									</div>
								</div>
							</section>--><!-- Widget END -->

							<!-- Widget Start -->
							<section class="related-posts">
								<h4 class="text-gray margin-bottom-2x">
									相关新闻
								</h4>

								<div class="related-post-entry">
									<header class="post-header">
										<!--<div class="column">
											<a class="post-date" href="#">October 29, 2016</a>by
											<a href="#">8guild</a>&nbsp;in
											<a href="#" rel="category tag">Investment</a>
										</div>-->

										<div class="column"></div>
									</header>

									<h3 class="post-title">
										<a href="">相关新闻标题</a>
									</h3>
								</div>

							</section><!-- Widget END -->
						</div><!-- Post Footer END -->

					</article><!-- Post Section END -->
				</div><!-- Posts Column END -->

				<!-- Sidebar Column -->
				<div class="col-lg-3 col-md-4 col-sm-4 padding-bottom-2x">
					<!-- Widget Start -->
					<section class="widget widget_search">
						<form autocomplete="off" class="search-box" method="get">
							<input name="s" placeholder="搜索" type="text" value="">
							<button type="submit"><i class="material-icons search"></i></button>
						</form>
					</section><!-- Widget END -->

                    <!-- Widget Start -->
                    <section class="widget widget_categories">
                        <h2 class="widget-title">
                            文章分类
                        </h2>
                        <ul>
                            <?php wp_list_categories(array('title_li' => null, 'exclude' => array(get_category_by_slug('uncategorized')->term_id,get_category_by_slug('home-banner')->term_id))); ?>
                        </ul>
                    </section><!-- Widget END -->

                    <!-- Widget Start -->
                    <section class="widget widget_startapp_recent_posts">
                        <h2 class="widget-title">
                            最近文章
                        </h2>

                        <?php foreach (get_posts(array('posts_per_page' => 3)) as $recent_post): ?>
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
	            </div><!-- Sidebar Column END -->
	        </div>
	    </div>
	</section>

<?php get_footer(); ?>