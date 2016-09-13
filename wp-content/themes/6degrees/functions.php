<?php 

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
// add_theme_support('woocommerce');

function wpMss_excerpt_length( $length ) {
	return 32;
}
add_filter( 'excerpt_length', 'wpMss_excerpt_length', 999 );

function register_theme_menus() {
	
	register_nav_menus(
		array(
			'main_nav' => __( 'Main Menu' ),
			'page_nav' => __( 'Page Nav' ),
			'page_mob_nav' => __( 'Page Mobile Nav' ),
			'footer-menu' =>__( 'Footer Menu' )
		)
	);
	
}

add_action( 'init', 'register_theme_menus' );


function wpMss_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

wpMss_create_widget( 'Blog Sidebar', 'blog-sidebar', 'Displays on the side of pages with a sidebar' );
// wpMss_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );


function wpMss_theme_styles() {
	
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'hover_css', get_template_directory_uri() . '/css/hover.css' );
	wp_enqueue_style( 'googleFonts_css', 'https://fonts.googleapis.com/css?family=Montserrat' );
	wp_enqueue_style( 'googleFonts2_css', 'https://fonts.googleapis.com/css?family=Exo+2:200,300,400,700|Lobster+Two' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	
}

add_action( 'wp_enqueue_scripts', 'wpMss_theme_styles' );

function wpMss_theme_js() {

	wp_enqueue_script( 'foundation_js', get_template_directory() . '/js/foundation.min.js', array('jquery'), '', true);

}

add_action( 'wp_enqueue_scripts', 'wpMss_theme_js' );

remove_image_size('large');
remove_image_size('medium');
remove_image_size('thumbnail');

?>