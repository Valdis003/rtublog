<?php

function reg (){
	wp_register_style('home', get_template_directory_uri().'/css/home.css');
	wp_enqueue_style('home');

	wp_register_style('font-awesome.min', get_template_directory_uri().'/libs/font-awesome-4.2.0/css/font-awesome.min.css');
	wp_enqueue_style('font-awesome.min');


	wp_register_style('bootstrap-grid-3.3.1.min', get_template_directory_uri().'/libs/bootstrap/bootstrap-grid-3.3.1.min.css');
	wp_enqueue_style('bootstrap-grid-3.3.1.min');

	// wp_enqueue_script('jquery');
	wp_enqueue_script('jQ', get_template_directory_uri().'/js/jquery-2.2.3.js');
	wp_enqueue_script('headhesive.min', get_template_directory_uri().'/libs/headhesive/headhesive.min.js');
	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js');
}
add_action('wp_enqueue_scripts', 'reg');

add_theme_support( 'post-thumbnails' );