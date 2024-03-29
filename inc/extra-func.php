<?php
add_action( 'init', 'facilities_init' );
function facilities_init() {
	$labels = array(
		'name'               => _x( 'facilities', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'facilities', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'facilities', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'facilities', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'facilities', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New facilities', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New facilities', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit facilities', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View facilities', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All facilities', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search facilities', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent facilities:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No facilities found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No facilities found in Trash.', 'your-plugin-textdomain' )
	);


	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'facilities' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	

	register_post_type( 'facilities', $args );
}


