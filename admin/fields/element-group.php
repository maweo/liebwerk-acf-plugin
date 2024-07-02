<?php

require_once ('subfields/single-text-block.php');
require_once ('subfields/link-banner.php');
require_once ('subfields/accordion.php');
require_once ('subfields/image-text-default.php');
require_once ('subfields/image-text-brush-layout.php');
require_once ('subfields/downloads.php');
require_once ('subfields/text-only.php');
require_once ('subfields/hero.php');
require_once ('subfields/contact.php');
require_once ('subfields/media-slider.php');
require_once ('subfields/contact-person.php');
require_once ('subfields/person-grid.php');
require_once ('subfields/logo-repeater.php');
require_once ('subfields/testimonials.php');
require_once ('subfields/sales-arguments.php');
require_once ('subfields/grid.php');
require_once ('subfields/post-grid-teaser.php');
require_once ('subfields/post-grid.php');
require_once ('subfields/product-grid.php');
require_once ('subfields/google-map.php');
require_once ('subfields/hero-small.php');

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
					'single-text-block' => $single_text_block,
					'link-banner' => $linkbanner_cta,
					'accordion' => $accordion,
					'image-text-default' => $image_text_default,
					'image-text-brush-layout' => $image_text_brush_layout,
					'product-grid' => $product_grid,
					'downloads' => $downloads,
					'text-only' => $text_only,
					'hero' => $hero,
					'hero-small' => $hero_small,
					'contact' => $contact,
					'media-slider' => $media_slider,
					'contact-person' => $contact_person,
					'person-grid' => $person_grid,
					'logo-repeater' => $logo_repeater,
					'testimonials' => $testimonials,
					'sales-arguments' => $sales_arguments,
					'grid' => $grid,
					'post-grid-teaser' => $post_grid_teaser,
					'post-grid' => $post_grid,
					'google-map' => $google_map,
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