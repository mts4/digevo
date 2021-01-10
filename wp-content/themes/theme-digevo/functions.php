<?php

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'menu_title'	=> 'Globales',
		'menu_slug' 	=> 'globales',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'globales',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'globales',
	));
}