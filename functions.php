<?php

add_action('after_setup_theme', 'second_theme');
function second_theme(){

	register_nav_menu('main-menu', 'Main menu');
}

add_action('wp_enqueue_scripts', 'second_theme_design');

function second_theme_design(){
	wp_enqueue_style('css-style', get_stylesheet_uri());
}

define('THEME_URI', get_template_directory_uri());