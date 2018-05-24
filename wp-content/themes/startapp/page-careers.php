<?php get_header(); ?>

	<div class="page-title title-size-xl text-light bg-parallax" data-parallax-speed="0.4"
		 data-parallax-type="scroll-opacity" style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/office.jpg);">
		<span class="overlay" style="background-color: #000000; opacity: 0.5;"></span>

		<div class="container">
			<div class="inner">
				<div class="column">
					<h1>
						加入我们
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
		          		<span property="name">加入我们</span>
		          	</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<article class="page">
		<section class="fw-section padding-top-3x padding-bottom-3x">
			<div class="container">
				<div class="text-block">
					<h2>与我们共同创造下一个奇迹</h2>
				</div>
			</div>
		</section>

		<section class="fw-section padding-bottom-2x">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div>
							<article class="portfolio-tile">
								<a class="portfolio-thumb padding-top-3x padding-bottom-3x">
									<img width="180px" alt="" src="<?=get_stylesheet_directory_uri()?>/assets/img/logo-portrait.png">
								</a>
							</article>
						</div>
					</div>

					<div class="col-sm-8">
						<div class="custom-links">
							<ul>
                                <?php foreach (get_posts(array('category_name' => 'career')) as $career): ?>
								<li>
                                    <h1><?=get_the_title($career->ID)?></h1>
                                    <span class="padding-top-1x"><?=wpautop($career->post_content)?></span>
								</li>
                                <?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section padding-bottom-3x">
			<div class="container">
				<hr class="hr-solid hr-primary" style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">
			</div>
		</section>
	</article>

<?php get_footer(); ?>
