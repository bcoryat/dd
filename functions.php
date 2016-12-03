<?php

add_editor_style();

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
	wp_enqueue_style('dd-css', get_template_directory_uri() . '/css/dd.css?v1.1', array('bootstrap-css'));


}

add_action('wp_enqueue_scripts', 'dd_common_styles');
add_action('wp_enqueue_scripts', 'dd_common_scripts');

if ( ! function_exists( 'my_pagination' ) ) :
	function my_pagination() {
		global $wp_query;

		$big = 999999999; // need an unlikely integer
		
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
	}
endif;

add_theme_support( 'post-thumbnails' );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function dd_widgets_init() {



	register_sidebar(array(
	'name' => __( 'Home  Sidebar' ),
	'id' => 'home',
	'description' => __( 'Widgets in this area will be shown on the homepage ' ),
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	'before_widget' => '<li>',
	'after_widget'  => '</li>',
	));



}
add_action( 'widgets_init', 'dd_widgets_init' );

?>