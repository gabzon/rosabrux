<?php

// Register Custom Taxonomy
function expo_year_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Years', 'Taxonomy General Name', 'rosabrux' ),
		'singular_name'              => _x( 'Year', 'Taxonomy Singular Name', 'rosabrux' ),
		'menu_name'                  => __( 'Year', 'rosabrux' ),
		'all_items'                  => __( 'All Years', 'rosabrux' ),
		'parent_item'                => __( 'Parent Year', 'rosabrux' ),
		'parent_item_colon'          => __( 'Parent Year:', 'rosabrux' ),
		'new_item_name'              => __( 'New Year Name', 'rosabrux' ),
		'add_new_item'               => __( 'Add New Year', 'rosabrux' ),
		'edit_item'                  => __( 'Edit Year', 'rosabrux' ),
		'update_item'                => __( 'Update Year', 'rosabrux' ),
		'view_item'                  => __( 'View Year', 'rosabrux' ),
		'separate_items_with_commas' => __( 'Separate Years with commas', 'rosabrux' ),
		'add_or_remove_items'        => __( 'Add or remove Years', 'rosabrux' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'rosabrux' ),
		'popular_items'              => __( 'Popular Years', 'rosabrux' ),
		'search_items'               => __( 'Search Years', 'rosabrux' ),
		'not_found'                  => __( 'Not Found', 'rosabrux' ),
	);
	$rewrite = array(
		'slug'                       => 'year',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'expo_year', array( 'post' ), $args );

}
add_action( 'init', 'expo_year_taxonomy', 0 );
