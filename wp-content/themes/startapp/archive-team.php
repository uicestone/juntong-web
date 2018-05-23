<?php get_header(); ?>

	<div class="page-title title-size-normal text-dark">
		<div class="container">
			<div class="inner">
				<div class="column">
					<h1>
						我们的团队
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
		          		<span property="name">团队</span>
		          	</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<article class="page">
		<section class="fw-section section-no-gap">
			<div class="container-fluid">
				<img alt="" class="single-image attachment-full size-full" data-aos="" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-team-4.jpg">
			</div>
		</section>

		<section class="fw-section padding-top-1x">
			<div class="container">
				<div class="text-block">
					<h2>
						<?php the_excerpt(); ?>
					</h2>
				</div>
			</div>
		</section>

		<section class="fw-section padding-top-2x padding-bottom-3x">
			<div class="container">
				<div class="tabs tabs-horizontal tabs-horizontal-left" id="tta-fadd44ec">
					<!--<ul class="nav-tabs nav-tabs-dark text-left" role="tablist">
						<li class="active">
							<a data-toggle="tab" href="#1475772230478-95ae7783-7c6d" role="tab">London</a>
						</li>

						<li>
							<a data-toggle="tab" href="#1475831512451-1e30a798-467b" role="tab">New York</a>
						</li>
					</ul>-->

					<div class="tab-content text-dark">
						<div class="tab-pane transition fade in active" id="1475772230478-95ae7783-7c6d">
							<div class="row padding-top-1x padding-bottom-2x">
								<div class="col-sm-12">
									<hr class="hr-solid hr-primary"
										style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4">
									<h2 class="block-title text-dark text-left mobile-center">
										投顾团队
										<small class="h4"></small>
									</h2>
								</div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <?php foreach (get_posts(array('post_type' => 'team', 'posts_per_page' => -1, 'orderby' => 'ID', 'order' => 'asc')) as $member): ?>
                                        <div class="col-sm-6">
                                            <div class="teammate teammate-dark-skin teammate-horizontal teammate-rounded">
                                                <div class="teammate-thumb">
                                                    <a href="<?=get_the_permalink($member->ID)?>"><?=get_the_post_thumbnail($member->ID)?></a>
                                                </div>

                                                <div class="teammate-info-wrap">
                                                    <h3 class="teammate-name">
                                                        <a href="<?=get_the_permalink($member->ID)?>"><?=get_the_title($member->ID)?></a>
                                                    </h3>
                                                    <span class="teammate-info"><?=get_the_subtitle($member->ID)?></span>
                                                    <span class="teammate-info"><?=$member->post_content?></span>
                                                    <div class="social-bar sb-border sb-rounded sb-dark-skin text-left"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

							</div>

							<div class="row padding-bottom-3x">
								<div class="col-sm-12">
									<hr class="hr-solid hr-primary"
										style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</article>

<?php get_footer(); ?>