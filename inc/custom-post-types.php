<?php

function bw_register_cpts_reviews()
{
    /**
     * Post Type: Reviews.
     */
    $labels = array(
        'name' => __('Reviews', 'brainworks'),
        'singular_name' => __('Review', 'brainworks'),
    );

    $args = array(
        'label' => __('Reviews', 'brainworks'),
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'delete_with_user' => false,
        'show_in_rest' => false,
        'rest_base' => 'reviews',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'has_archive' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'reviews', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('reviews', $args);
}

add_action('init', 'bw_register_cpts_reviews');

function bw_register_cpts_instructors()
{
    /**
     * Post Type: Instructors.
     */
    $labels = array(
        'name' => __('Instructors', 'brainworks'),
        'singular_name' => __('Instructor', 'brainworks'),
    );

    $args = array(
        'label' => __('Instructors', 'brainworks'),
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'delete_with_user' => false,
        'show_in_rest' => true,
        'rest_base' => '',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'has_archive' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'instructors', 'with_front' => true),
        'query_var' => true,
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('instructors', $args);
}

add_action('init', 'bw_register_cpts_instructors');

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_5ce4f264e479b',
        'title' => 'Additional Information',
        'fields' => array(
            array(
                'key' => 'field_5ce4f2db9e177',
                'label' => 'Experience',
                'name' => 'instructor_experience',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5ce4f3739e178',
                'label' => 'Car Brand',
                'name' => 'instructor_car_brand',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5ce4f3b69e179',
                'label' => 'Price',
                'name' => 'instructor_price',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'instructors',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
}
