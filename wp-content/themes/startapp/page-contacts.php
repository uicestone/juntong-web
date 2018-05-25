<?php get_header(); ?>

	<div class="page-title title-size-lg text-light bg-parallax" data-parallax-speed="0.4"
		 data-parallax-type="scroll-opacity" style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/img/shanghai.jpg);">
		<span class="overlay" style="background-color: #000000; opacity: 0.35;"></span>

		<div class="container">
			<div class="inner">
				<div class="column">
					<h1>
						联系我们
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
		          		<span property="name">联系我们</span>
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
                    <div class="row">
                        <h3 class="col-sm-6">

                        </h3>
                    </div>

				</div>
			</div>
		</section>

		<section class="fw-section">
			<div class="container">
				<div class="row">
                    <div class="col-sm-4">
                        <div class="contacts-tile">
                            <div class="contacts-tile-body">
                                <div class="contacts-tile-country">
									<span class="country-flag"><img alt="" height="47" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-map-2.png"
                                                                    width="70"></span><span
                                            class="country-name">中国</span>
                                </div>

                                <h3 class="contacts-tile-title">
                                    上海市浦东新区
                                </h3>

                                <div class="contacts-tile-content">
                                    <p style="text-align: left;">
                                        春晓路439号14号楼
                                    </p>

                                    <p style="text-align: left;">
                                        T: 021-68635068
                                    </p>
                                </div>
                            </div>

                            <div class="google-map"
                                 data-address="Unit 2202, Plaza 66 1266 Nanjing West Road, Shanghai 200040"
                                 data-disable-controls="true" data-height="230" data-marker-title="StartApp"
                                 data-scrollwheel="false" data-zoom="14">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row padding-top-3x padding-bottom-3x">
					<div class="col-sm-4">
						<div class="text-block">
							<h4>
								投资者关系
							</h4>

							<h5>
								<span class="text-gray">既有投资人或洽谈中的合作伙伴相关咨询</span>
							</h5>
						</div>

						<hr class="hr-solid hr-primary"
							style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">

						<div class="text-block">
							<h6>
								<span class="text-default"><a href="#">investor@juntong-capital.com</a></span>
							</h6>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="text-block">
							<h4>
								公共关系
							</h4>

							<h5>
								<span class="text-gray">与媒体、演讲和市场相关的咨询</span>
							</h5>
						</div>

						<hr class="hr-solid hr-primary"
							style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">

						<div class="text-block">
							<h6>
								<a href="#">pr@juntong-capital.com</a>
							</h6>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<hr class="hr-solid hr-primary"
							style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">
					</div>
				</div>
			</div>
		</section>

		<section class="fw-section padding-top-2x padding-bottom-3x">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="block-title text-dark text-center">
							<small class="h4">给我们留言</small>
						</h2>

						<form>
							<p>
								<textarea cols="40" name="message" placeholder="留言内容" rows="4"></textarea>
							</p>

							<div class="row">
								<div class="col-md-3 col-sm-6">
									<input name="name" placeholder="您的姓名" size="40" type="text" value="">
								</div>

								<div class="col-md-3 col-sm-6 padding-bottom-1x">
									<input name="phone" placeholder="您的电话" size="40" type="text"
										   value="">
								</div>

								<div class="col-md-3 col-sm-6 padding-bottom-1x">
									<input name="email" placeholder="您的邮箱" size="40" type="email" value="">
								</div>

								<div class="col-md-3 col-sm-6 padding-bottom-1x">
									<button class="btn btn-block btn-transparent btn-primary"
											style="margin-top: 0; outline: none;" type="submit">发送消息 <i
												class="material-icons send"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</article>

<?php get_footer(); ?>