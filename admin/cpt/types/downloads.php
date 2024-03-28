<?php

// Register Custom Post Type
function create_download_post_type() {

	$labels = array(
		'name'                  => 'Downloads',
		'singular_name'         => 'Download',
		'menu_name'             => 'Downloads',
		'name_admin_bar'        => 'Downloads',
		'archives'              => 'Download Archives',
		'attributes'            => 'Download Attributes',
		'parent_item_colon'     => 'Parent Download:',
		'all_items'             => 'All Downloads',
		'add_new_item'          => 'Add New Download',
		'add_new'               => 'Add New Download',
		'new_item'              => 'New Download',
		'edit_item'             => 'Edit Download',
		'update_item'           => 'Update Download',
		'view_item'             => 'View Download',
		'view_items'            => 'View Downloads',
		'search_items'          => 'Search Download',
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
		'label'                 => 'Download',
		'description'           => 'MAWEO Page for Downloads',
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-open-folder',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest' 			=> true,
		'show_in_graphql' 		=> true,
		'graphql_single_name' 	=> 'download',
		'graphql_plural_name' 	=> 'downloads'
	);
	register_post_type( 'downloads', $args );

}
add_action( 'init', 'create_download_post_type', 0 );