<?php get_header(); the_post(); ?>

	<article class="page">
		<section class="fw-section padding-top-1x">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 text-center">
						<?php the_post_thumbnail(); ?>
					</div>

					<div class="col-sm-6 padding-bottom-1x">
						<div class="text-block mobile-center">
							<h1>
								<?php the_title(); ?>
							</h1>

							<p>
<!--								<span class="text-gray"></span>-->
							</p>
						</div>

						<div class="social-bar sb-border sb-rounded sb-dark-skin text-left mobile-center">
							<a class="social-btn waves-effect waves-light" data-placement="top" data-toggle="tooltip"
							   href="#" title="Twitter"><i class="fa fa-wechat"></i></a>
						</div>

						<div class="tabs tabs-horizontal tabs-horizontal-left padding-top-1x" id="tta-90f58f88">
							<ul class="nav-tabs nav-tabs-dark text-left" role="tablist">
								<li class="active">
									<a data-toggle="tab" href="#1476122970489-3d19fe90-15f4" role="tab">个人简介</a>
								</li>

								<!--<li>
									<a data-toggle="tab" href="#1476122970553-25669a3b-9881" role="tab">Writings</a>
								</li>

								<li>
									<a data-toggle="tab" href="#1476123003762-574033aa-70ac" role="tab">News</a>
								</li>-->
							</ul>

							<div class="tab-content text-dark">
								<div class="tab-pane transition fade in active" id="1476122970489-3d19fe90-15f4">
									<?php the_content(); ?>
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
		</section>
	</article>

<?php get_footer(); ?>