<?php //Template Name:HOME
get_header();
	$wl_theme_options = creative_general_options();
	if ($wl_theme_options['front_page_enabled']=='on' && is_front_page())
	{
	// Front page content
	get_template_part('home','slider');
	//****** get home callout ********
	get_template_part('footer','callout');
	//****** get home project ********
	get_template_part('home', 'portfolio');
	//****** get home service ********
	get_template_part('home','service');
	//****** get home  blog ********
	get_template_part('home', 'blog');
	get_footer();
	}else if(is_page()){
		get_template_part('page');
	} else {
		get_template_part('index');
	}
?>