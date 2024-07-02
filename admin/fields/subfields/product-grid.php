<?php

$product_grid = array(
    'key' => 'layout_625c8513873v9',
    'name' => 'product_grid',
    'label' => 'Product Grid',
    'display' => 'block',
    'sub_fields' => array(
        array(
            'key' => 'field_6s548c558235b',
            'label' => 'Heading',
            'name' => 'heading',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '80',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        array(
            'key' => 'field_6524855fc7s5c',
            'label' => 'Heading Tag',
            'name' => 'heading_tag',
            'aria-label' => '',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '20',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'choices' => array(
                'h1' => 'h1',
                'h2' => 'h2',
                'h3' => 'h3',
                'h4' => 'h4',
                'h5' => 'h5',
                'h6' => 'h6',
                'span' => 'Text',
            ),
            'default_value' => false,
            'return_format' => 'value',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
        ),
        array(
            'key' => 'field_6c548s7b8715d',
            'label' => 'Text',
            'name' => 'text',
            'aria-label' => '',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 0,
            'delay' => 0,
        ),
        array(
            'key' => 'field_648833b3b982c',
            'label' => 'Type',
            'name' => 'type',
            'aria-label' => '',
            'type' => 'radio',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'select' => 'Select Products',
                'favourites' => 'Favourite Products',
                'random' => 'Random Products'
            ),
            'default_value' => '',
            'return_format' => 'value',
            'allow_null' => 0,
            'other_choice' => 0,
            'layout' => 'vertical',
            'save_other_choice' => 0
        ),
        array(
            'key' => 'field_6488349722433',
            'label' => 'Products',
            'name' => 'products',
            'aria-label' => '',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_648833b3b982c',
                        'operator' => '==',
                        'value' => 'select'
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            ),
            'layout' => 'table',
            'min' => 4,
            'max' => 0,
            'collapsed' => '',
            'button_label' => 'Add product',
            'rows_per_page' => 20,
            'sub_fields' => array(
                array(
                    'key' => 'field_648834a422434',
                    'label' => 'Products',
                    'name' => 'products',
                    'aria-label' => '',
                    'type' => 'post_object',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => ''
                    ),
                    'post_type' => array(
                        0 => 'product',
                    ),
                    'post_status' => '',
                    'taxonomy' => '',
                    'return_format' => 'id',
                    'multiple' => 0,
                    'allow_null' => 0,
                    'ui' => 1,
                    'parent_repeater' => 'field_6488349722433'
                )
            ),
        ),
        array(
            'key' => 'field_6488346eb9831',
            'label' => 'Count',
            'name' => 'count',
            'aria-label' => '',
            'type' => 'number',
            'instructions' => 'If count is larger than 4, slider will be activated - mobile we slide always',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_648833b3b982c',
                        'operator' => '==',
                        'value' => 'favourites'
                    ),
                    array(
                        'field' => 'field_648833b3b982c',
                        'operator' => '==',
                        'value' => 'random'
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            ),
            'default_value' => '',
            'min' => 4,
            'max' => '',
            'placeholder' => '',
            'step' => '',
            'prepend' => '',
            'append' => ''
        ),
        array(
            'key' => 'field_6154x69727364',
            'label' => 'Link',
            'name' => 'link',
            'aria-label' => '',
            'type' => 'link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'show_in_graphql' => 1,
            'return_format' => 'array',
        ),
    ),
    'min' => '',
    'max' => '',
);


?>