<?php

function jquery_cdn() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), '1.11.0', true);
		wp_enqueue_script('jquery');
	}
}

function dd_common_scripts() {

	jquery_cdn();

	wp_register_script('respond-js', get_template_directory_uri() . '/js/respond.min.js', array(), '', true);
	wp_register_script('bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array('jquery'), '3.1.1', true);
	wp_register_script('scrollTo-js', get_template_directory_uri() . '/js/jquery.scrollTo-1.4.3.1-min.js', array('jquery'), '', true);
	wp_register_script('dd-js', get_template_directory_uri() . '/js/dd.js', array('jquery', 'bootstrap-js'), '', true);

	wp_enqueue_script('respond-js');
	wp_enqueue_script('boostrap-js');
	wp_enqueue_script('scrollTo-js');
	wp_enqueue_script('dd-js');
}


function dd_common_styles() {

	wp_enqueue_style('bootstrap-css', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css');
	wp_enqueue_style('fontello-css', get_template_directory_uri() . '/css/fontello.css');
	wp_enqueue_style('media-css', get_template_directory_uri() . '/css/media-queries.css', array('bootstrap-css'));
	wp_enqueue_style('dd-css', get_template_directory_uri() . '/css/dd.css', array('bootstrap-css'));


}

add_action('wp_enqueue_scripts', 'dd_common_styles');
add_action('wp_enqueue_scripts', 'dd_common_scripts');

?>