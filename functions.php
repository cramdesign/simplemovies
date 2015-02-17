<?php


/* Load needed files
-------------------------------------------------------------- */
require 'functions/taxonomies.php';




/* Register javascript and stylesheets
-------------------------------------------------------------- */
if ( !function_exists( 'theme_scripts' ) ) : function theme_scripts() {


	// load comments stylesheet and javascript only if it is needed
	if ( comments_open() or 0 != get_comments_number() ) :
	
		wp_enqueue_style ( 'comments', get_template_directory_uri() . '/css/comments.css' );
		if ( get_option('thread_comments') ) wp_enqueue_script( 'comment-reply' );
		
	endif;
	
	
	// Stylesheets
	// load stylesheets the WordPress way
	wp_enqueue_style ( 'norm', get_template_directory_uri() . '/css/norm.css' );
	wp_enqueue_style ( 'base', get_template_directory_uri() . '/css/base.css' );
	wp_enqueue_style ( 'html', get_template_directory_uri() . '/css/html.css' );
	wp_enqueue_style ( 'menu', get_template_directory_uri() . '/css/menu.css' );
	wp_enqueue_style ( 'main', get_template_directory_uri() . '/css/main.css' );


} endif;
add_action( 'wp_enqueue_scripts', 'theme_scripts', 5 );



/* Register Theme Features 
-------------------------------------------------------------- */
function custom_theme_features()  {


	// Menus
	register_nav_menu( 'primary', 'Primary menu' );


	// Editor stylesheet
	add_editor_style ( 'css/html.css' );


	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'comment-form',
		'search-form',
		'comment-form',
		'gallery',
	) );
	
	
	// allow featured images
	add_theme_support( 'post-thumbnails' );


	// allow WordPress to control the title tag
	add_theme_support( 'title-tag' );


}
add_action( 'after_setup_theme', 'custom_theme_features' );



/* Register widget areas
-------------------------------------------------------------- */
function theme_widgets_init() {


	register_sidebar( array(
		'name'			=> 'Sidebar Widgets',
		'id'			=> 'sidebar',
		'description'	=> 'These are widgets for all sidebars.',
		'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</div><!-- widget -->',
		'before_title'	=> '<h3 class="title">',
		'after_title'	=> '</h3>'
	));


}
add_action( 'widgets_init', 'theme_widgets_init' );
