<?php

require_once('subfields/link-banner.php');
require_once('subfields/accordion.php');
require_once('subfields/image-text-default.php');
require_once('subfields/image-text-brush-layout.php');
require_once('subfields/text-only.php');
require_once('subfields/hero.php');
require_once('subfields/contact.php');
require_once('subfields/testimonials.php');
require_once('subfields/sales-arguments.php');
require_once('subfields/elements-grid.php');
require_once('subfields/post-grid-teaser.php');
require_once('subfields/post-grid.php');
require_once('subfields/product-grid.php');
require_once('subfields/google-map.php');
require_once('subfields/timeline.php');
require_once('subfields/hero-small.php');
require_once('subfields/store-locator.php');
require_once('subfields/engravings.php');
require_once('subfields/video.php');

acf_add_local_field_group(
	array(
		'key' => 'group_1',
		'title' => 'Page Fields',
		'show_in_graphql' => 1,
		'graphql_field_name' => 'elements',
		'map_graphql_types_from_location_rules' => 0,
		'graphql_types' => '',
		'fields' => array(
			array(
				'key' => 'field_1',
				'label' => 'Elements',
				'name' => 'elements',
				'type' => 'flexible_content',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'show_in_graphql' => 1,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layouts' => array(
					'contact' => $contact,
					'engravings' => $engravings,
					'google-map' => $google_map,
					'accordion' => $accordion,
					'elements-grid' => $elements_grid,
					'hero' => $hero,
					'hero-small' => $hero_small,
					'image-text-default' => $image_text_default,
					'image-text-brush-layout' => $image_text_brush_layout,
					'link-banner' => $linkbanner_cta,
					'product-grid' => $product_grid,
					'text-only' => $text_only,
					'post-grid-teaser' => $post_grid_teaser,
					'post-grid' => $post_grid,
					'sales-arguments' => $sales_arguments,
					'store-locator' => $store_locator,
					'testimonials' => $testimonials,
					'timeline' => $timeline,
					'video' => $video,
				),
				'button_label' => 'Layout hinzufügen',
				'min' => '',
				'max' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			// 0 => 'the_content',
			// 1 => 'excerpt',
			2 => 'discussion',
			3 => 'comments',
			4 => 'author',
			//5 => 'format',
			// 6 => 'page_attributes',
			// 7 => 'featured_image',
			// 8 => 'categories',
			// 9 => 'tags',
		),
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	)
);