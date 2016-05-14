<?php

function reg (){
	wp_register_style('home', get_template_directory_uri().'/css/home.css');
	wp_enqueue_style('home');

	wp_register_style('font-awesome.min', get_template_directory_uri().'/libs/font-awesome-4.2.0/css/font-awesome.min.css');
	wp_enqueue_style('font-awesome.min');

	wp_register_script('headhesive.min', get_template_directory_uri().'/libs/headhesive/headhesive.min.js');
	wp_enqueue_script('headhesive.min');

	wp_register_script('common', get_template_directory_uri().'/js/common.js');
	wp_enqueue_script('common');
}
add_action('wp_enqueue_scripts', 'reg');