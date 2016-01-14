<?php
// Register Custom Taxonomy
function artist_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Artists', 'Taxonomy General Name', 'rosabrux' ),
		'singular_name'              => _x( 'Artist', 'Taxonomy Singular Name', 'rosabrux' ),
		'menu_name'                  => __( 'Artists', 'rosabrux' ),
		'all_items'                  => __( 'All Artists', 'rosabrux' ),
		'parent_item'                => __( 'Parent Artist', 'rosabrux' ),
		'parent_item_colon'          => __( 'Parent Artist:', 'rosabrux' ),
		'new_item_name'              => __( 'New Artist Name', 'rosabrux' ),
		'add_new_item'               => __( 'Add Artist Item', 'rosabrux' ),
		'edit_item'                  => __( 'Edit Artist', 'rosabrux' ),
		'update_item'                => __( 'Update Artist', 'rosabrux' ),
		'view_item'                  => __( 'View Artist', 'rosabrux' ),
		'separate_items_with_commas' => __( 'Separate artists with commas', 'rosabrux' ),
		'add_or_remove_items'        => __( 'Add or remove artists', 'rosabrux' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'rosabrux' ),
		'popular_items'              => __( 'Popular Artists', 'rosabrux' ),
		'search_items'               => __( 'Search Artists', 'rosabrux' ),
		'not_found'                  => __( 'Not Found', 'rosabrux' ),
	);
	$rewrite = array(
		'slug'                       => 'artist',
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
	register_taxonomy( 'artist', array( 'post' ), $args );

}
add_action( 'init', 'artist_taxonomy', 0 );
