<?php
	
	
if ( ! function_exists( 'simple_actors' ) ) :

// Register Custom Taxonomy
function simple_actors() {

	$labels = array(
		'name'                       => 'Actors',
		'singular_name'              => 'Actor',
		'menu_name'                  => 'Actors',
		'all_items'                  => 'All Actors',
		'parent_item'                => 'Parent Actor',
		'parent_item_colon'          => 'Parent Actor:',
		'new_item_name'              => 'New Actor',
		'add_new_item'               => 'Add Actor',
		'edit_item'                  => 'Edit Actor',
		'update_item'                => 'Update Actor',
		'separate_items_with_commas' => 'Separate actors with commas',
		'search_items'               => 'Search Actors',
		'add_or_remove_items'        => 'Add or remove actors',
		'choose_from_most_used'      => 'Choose from the most used actor',
		'not_found'                  => 'Not Found',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'actors', array( 'post' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'simple_actors', 0 );

endif;	



if ( ! function_exists( 'simple_directors' ) ) :

// Register Custom Taxonomy
function simple_directors() {

	$labels = array(
		'name'                       => 'Directors',
		'singular_name'              => 'Director',
		'menu_name'                  => 'Directors',
		'all_items'                  => 'All Directors',
		'parent_item'                => 'Parent Director',
		'parent_item_colon'          => 'Parent Director:',
		'new_item_name'              => 'New Director',
		'add_new_item'               => 'Add Director',
		'edit_item'                  => 'Edit Director',
		'update_item'                => 'Update Director',
		'separate_items_with_commas' => 'Separate directors with commas',
		'search_items'               => 'Search Directors',
		'add_or_remove_items'        => 'Add or remove directors',
		'choose_from_most_used'      => 'Choose from the most used director',
		'not_found'                  => 'Not Found',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'directors', array( 'post' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'simple_directors', 0 );

endif;