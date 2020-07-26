<?php

add_action( 'init', 'testimonials' );

function testimonials() {
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name' ),
		'menu_name'          => _x( 'Testimonials', 'admin menu' ),
		'name_admin_bar'     => _x( 'Testimonials', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Testimonial' ),
		'add_new_item'       => __( 'Add New Testimonial' ),
		'new_item'           => __( 'New Testimonial' ),
		'edit_item'          => __( 'Edit Testimonial' ),
		'view_item'          => __( 'View Testimonial' ),
		'all_items'          => __( 'All Testimonials' ),
		'search_items'       => __( 'Search Testimonials' ),
		'parent_item_colon'  => __( 'Parent Testimonial:' ),
		'not_found'          => __( 'No Testimonial found.' ),
		'not_found_in_trash' => __( 'No Testimonials found in Trash.' )
	);

	$args = array(
		'labels'             => $labels,
    	'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		 'rewrite'           => array( 'slug' => 'testimonials', 'with_front' => false  ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-editor-quote',
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'testimonials', $args );
}





add_action( 'init', 'our_work' );

function our_work() {
	$labels = array(
		'name'               => _x( 'Our Work', 'post type general name' ),
		'singular_name'      => _x( 'Our Work', 'post type singular name' ),
		'menu_name'          => _x( 'Our Work', 'admin menu' ),
		'name_admin_bar'     => _x( 'Our Work', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'our work' ),
		'add_new_item'       => __( 'Add New Our Work' ),
		'new_item'           => __( 'New Our Work' ),
		'edit_item'          => __( 'Edit Our Work' ),
		'view_item'          => __( 'View Our Work' ),
		'all_items'          => __( 'All Our Work' ),
		'search_items'       => __( 'Search Our Work' ),
		'parent_item_colon'  => __( 'Parent Our Work:' ),
		'not_found'          => __( 'No Our Work found.' ),
		'not_found_in_trash' => __( 'No Our Work members found in Trash.' )
	);

	$args = array(
		'labels'             => $labels,
    	'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		 'rewrite'           => array( 'slug' => 'our-work', 'with_front' => false  ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-megaphone',
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'our_work', $args );
}

add_action( 'init', 'team' );

function team() {
	$labels = array(
		'name'               => _x( 'Team', 'post type general name' ),
		'singular_name'      => _x( 'Team', 'post type singular name' ),
		'menu_name'          => _x( 'Team', 'admin menu' ),
		'name_admin_bar'     => _x( 'Team', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'team' ),
		'add_new_item'       => __( 'Add New Team' ),
		'new_item'           => __( 'New Team' ),
		'edit_item'          => __( 'Edit Team' ),
		'view_item'          => __( 'View Team' ),
		'all_items'          => __( 'All Team' ),
		'search_items'       => __( 'Search Team' ),
		'parent_item_colon'  => __( 'Parent Team:' ),
		'not_found'          => __( 'No Team found.' ),
		'not_found_in_trash' => __( 'No Team members found in Trash.' )
	);

	$args = array(
		'labels'             => $labels,
    	'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		 'rewrite'           => array( 'slug' => 'team', 'with_front' => false  ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-groups',
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'team', $args );
}