<?php

// Register Custom Post Type
function create_person_post_type() {

	$labels = array(
		'name'                  => 'Persons',
		'singular_name'         => 'Person',
		'menu_name'             => 'Persons',
		'name_admin_bar'        => 'Persons',
		'archives'              => 'Person Archives',
		'attributes'            => 'Person Attributes',
		'parent_item_colon'     => 'Parent Person:',
		'all_items'             => 'All Persons',
		'add_new_item'          => 'Add New Person',
		'add_new'               => 'Add New Person',
		'new_item'              => 'New Person',
		'edit_item'             => 'Edit Person',
		'update_item'           => 'Update Person',
		'view_item'             => 'View Person',
		'view_items'            => 'View Persons',
		'search_items'          => 'Search Person',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Person',
		'description'           => 'MAWEO Page for Persons',
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessperson',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest' 			=> true,
		'show_in_graphql' 		=> true,
		'graphql_single_name' 	=> 'person',
		'graphql_plural_name' 	=> 'persons'
	);
	register_post_type( 'persons', $args );

}
add_action( 'init', 'create_person_post_type', 0 );