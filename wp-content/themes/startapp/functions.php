<?php

show_admin_bar(false);

add_action('wp', function() {
	wp_register_style('aos', get_stylesheet_directory_uri() . '/assets/stylesheets/vendor/aos.min.css', array(), false);
	wp_register_style('material-icons', get_stylesheet_directory_uri() . '/assets/stylesheets/vendor/material-icons.min.css', array(), false);
	wp_register_style('font-awesome', get_stylesheet_directory_uri() . '/assets/stylesheets/vendor/font-awesome.min.css', array(), '4.6.3');
	wp_register_style('socicon', get_stylesheet_directory_uri() . '/assets/stylesheets/vendor/socicon.min.css', array(), false);
	wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/assets/stylesheets/vendor/bootstrap.min.css', array(), '3.3.5');
	wp_register_style('preloader', get_stylesheet_directory_uri() . '/assets/stylesheets/vendor/preloader.css', array(), false);
	wp_register_style('settings', get_stylesheet_directory_uri() . '/assets/stylesheets/vendor/revo/settings.css', array(), '5.3.1');
	wp_register_style('layers', get_stylesheet_directory_uri() . '/assets/stylesheets/vendor/revo/layers.css', array(), '5.0.0');
	wp_register_style('navigation', get_stylesheet_directory_uri() . '/assets/stylesheets/vendor/revo/navigation.css', array(), '5.0.0');
	wp_register_style('theme', get_stylesheet_directory_uri() . '/style.css', array(), false);

	wp_register_script('modernizr', get_stylesheet_directory_uri() . '/assets/js/vendor/modernizr.custom.js', array(), '2.8.3', false);
	wp_register_script('aos', get_stylesheet_directory_uri() . '/assets/js/vendor/aos.min.js', array(), false, true);
	wp_register_script('jquery.waypoints', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery.waypoints.min.js', array('jquery'), '3.2.1', true);
	wp_register_script('bootstrap', get_stylesheet_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array('jquery'), '3.3.6', true);
	wp_register_script('jarallax', get_stylesheet_directory_uri() . '/assets/js/vendor/jarallax.min.js', array(), '1.7.1', true);
	wp_register_script('velocity', get_stylesheet_directory_uri() . '/assets/js/vendor/velocity.min.js', array(), '1.2.1', true);
	wp_register_script('waves', get_stylesheet_directory_uri() . '/assets/js/vendor/waves.min.js', array(), false, true);
	wp_register_script('scrollspy', get_stylesheet_directory_uri() . '/assets/js/vendor/scrollspy.js', array(), '0.1.2', true);
	wp_register_script('slick', get_stylesheet_directory_uri() . '/assets/js/vendor/slick.min.js', array(), '1.6.0', true);
	wp_register_script('isotope', get_stylesheet_directory_uri() . '/assets/js/vendor/isotope.pkgd.min.js', array(), '3.0.1', true);
	wp_register_script('counterup', get_stylesheet_directory_uri() . '/assets/js/vendor/counterup.min.js', array(), false, true);
	wp_register_script('jquery.magnific-popup', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true);
    wp_register_script('jquery.themepunch.tools', get_stylesheet_directory_uri() . '/assets/js/vendor/revo/jquery.themepunch.tools.min.js', array('jquery'), '1.6.9', true);
    wp_register_script('jquery.themepunch.revolution', get_stylesheet_directory_uri() . '/assets/js/vendor/revo/jquery.themepunch.revolution.min.js', array('jquery'), '5.3.1.6', true);
	wp_register_script('startapp-theme', get_stylesheet_directory_uri() . '/assets/js/startapp-theme.js', array(), false, true);
});

add_action('after_setup_theme', function () {
    register_nav_menu('primary', '主导航');
    add_theme_support('post-thumbnails');
//    add_image_size('headline', 1600, 700, true);
//    add_image_size('mentor', 270, 270, true);
//    add_image_size('post-thumbnail', 1280, 720, true);
});

add_filter('nav_menu_item_args', function ($args, $item, $depth) {
    $args->link_after = '';
    if (in_array('menu-item-has-children', $item->classes)) {
        $args->link_after = '<span class="arrow"><i class="material-icons keyboard_arrow_down"></i></span>';
    }
    return $args;
}, 10, 3);

add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('aos');
    wp_enqueue_style('material-icons');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('socicon');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('preloader');
    wp_enqueue_style('settings');
    wp_enqueue_style('layers');
    wp_enqueue_style('navigation');
    wp_enqueue_style('theme');

    wp_enqueue_script('modernizr');
    wp_enqueue_script('aos');
    wp_enqueue_script('jquery.waypoints');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jarallax');
    wp_enqueue_script('velocity');
    wp_enqueue_script('waves');
    wp_enqueue_script('scrollspy');
    wp_enqueue_script('slick');
    wp_enqueue_script('isotope');
    wp_enqueue_script('counterup');
    wp_enqueue_script('jquery.magnific-popup');
    wp_enqueue_script('jquery.themepunch.tools');
    wp_enqueue_script('jquery.themepunch.revolution');
    wp_enqueue_script('startapp-theme');
});