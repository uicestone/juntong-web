<?php get_header(); ?>

	<!-- Page Title Start -->
	<section class="single-cover-image bg-parallax" data-parallax-speed="0.4" data-parallax-type="scroll"
			 style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/fin-blog-post-bg.jpg); height: 500px;">
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

							<div class="featured-image padding-bottom-1x">
                                <?php the_post_thumbnail('post-thumbnail', array('alt' => '')); ?>
							</div>
						</div><!-- Section END -->

						<!-- Section Start -->
						<section class="fw-section">
							<div class="container">
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

						<!-- Comments Area Start -->
						<!--<div class="comments-area">
							<h4 class="text-gray margin-bottom-2x">
								Comments <sup>4</sup>
							</h4>

							<div class="comment thread-depth-1 parent">
								<div class="inner">
									<div class="author-ava">
										<img alt="" class="avatar avatar-60" src="<?=get_stylesheet_directory_uri()?>/assets/img/0202020.jpg">
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
											<img alt="" class="avatar avatar-60" src="<?=get_stylesheet_directory_uri()?>/assets/img/0202020.jpg">
										</div>

										<div class="comment-body">
											<h4 class="author-name">
												8guild
											</h4>

											<span class="comment-date">October 28, 2016</span>

											<p>
												Thank you so much. We also have incredible design for a second level
												comment. Check it out!
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
										<img alt="" class="avatar avatar-60" src="<?=get_stylesheet_directory_uri()?>/assets/img/0202020.jpg">
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
											<img alt="" class="avatar avatar-60" src="<?=get_stylesheet_directory_uri()?>/assets/img/0202020.jpg">
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

									<small class="cancel-reply"><a href="#" rel="nofollow" style="display:none;">Cancel
											reply</a></small>
								</div>

								<form>
									<textarea name="comment" rows="6" placeholder="Enter your comment"
											  required=""></textarea>
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
											<button class="btn btn-ghost btn-primary btn-block" id="submit"
													name="submit" type="submit">Comment&nbsp;<i
														class="material-icons reply"></i></button>
											<input id="comment_post_ID" name="comment_post_ID" type="hidden" value="1">
											<input id="comment_parent" name="comment_parent" type="hidden" value="0">
										</div>
									</div>
								</form>
							</div>
						</div>--><!-- Comme	nts Area Start END -->
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
					<!--<section class="widget widget_startapp_author">
                        <h2 class="widget-title">
                            Blog Author
                        </h2>

                        <div class="startapp-author text-left">
                            <img alt="demo-avatar" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-author.jpg">

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
                    </section>--><!-- Widget END -->

                    <!-- Widget Start -->
                    <section class="widget widget_categories">
                        <h2 class="widget-title">
                            新闻分类
                        </h2>
                        <?php wp_list_categories(); ?>
                    </section><!-- Widget END -->

                    <!-- Widget Start -->
                    <section class="widget widget_startapp_recent_posts">
                        <h2 class="widget-title">
                            Recent Posts
                        </h2>

                        <div class="post-item">
                            <a class="post-item-thumb" href="blog-single-post-right-sidebar.html">
                                <img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-blog-post-bg-150x150.jpg">
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
                                <img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-blog-post-4-150x150.jpg">
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
                                <img alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-blog-post-3-150x150.jpg">
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
                    <section class="widget widget_recent_comments">
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

<?php get_footer(); ?>