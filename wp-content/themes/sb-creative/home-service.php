<?php $wl_theme_options = creative_general_options();
if($wl_theme_options['home_service_enabled']=='on'){ ?>
<div class="row">
	<div class="col-lg-12 col-md-12 text-center">
	<?php if($wl_theme_options['home_service_title']){ ?>
		<h2 class="wow bounceIn"><?php echo esc_attr($wl_theme_options['home_service_title']); ?></h2>
	<?php } if($wl_theme_options['home_service_description']){ ?>
		<h4 class="wow fadeInRight"><?php echo esc_attr($wl_theme_options['home_service_description']); ?></h4>
	<?php } ?>
	</div>
</div>
<!-- /Services -->
<!-- Main Content -->
<div class="main-content">
	<div class="container">
		<div class="row">
		<?php for($i=1; $i<=3; $i++ ) {
		?>
			<div class="col-lg-4 col-md-4 col-sm-4 wow swing">
				<div class="content-box big ch-item bottom-pad-small">
					<div class="ch-info-wrap">
						<div class="ch-info">
							<div class="ch-info-front ch-img-1"><i class="<?php echo esc_attr($wl_theme_options['service_icon_'.$i]); ?>"></i></div>
								<div class="ch-info-back">
									<i class="<?php echo esc_attr($wl_theme_options['service_icon_'.$i]); ?>"></i>
								</div>
						</div>
					</div>
					<div class="content-box-info">
						<h3><?php echo esc_attr($wl_theme_options['service_title_'.$i]); ?></h3>
						<p><?php echo wp_trim_words(esc_attr($wl_theme_options['service_description_'.$i],12,null)); ?></p>
						<a href="<?php echo esc_url($wl_theme_options['service_link_'.$i]); ?>" <?php if($wl_theme_options['service_target_'.$i]=="on"){ echo "target='_blank'"; } ?>><?php _e('Read More','creative'); ?> <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
					</div>
					<div class="border-bottom margin-top30">
					</div>
					<div class="border-bottom">
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php } ?>