<?php
function customPostTypes()
{

    // Her registrere vi vores custom post type for alle dyr
    register_post_type('dyr', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'dyr'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Dyr',
            'add_new_item' => 'Tilføj nyt dyr',
            'edit_item' => 'Rediger dyr',
            'all_items' => 'Alle dyr',
            'singular_name' => 'Dyr'
        ),
        'menu_icon' => 'dashicons-pets'
    ));

    // Her registrere vi vores custom post type for alle dyr
    register_post_type('race', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'race'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Racer',
            'add_new_item' => 'Tilføj ny race',
            'edit_item' => 'Rediger race',
            'all_items' => 'Alle racer',
            'singular_name' => 'Race'
        ),
        'menu_icon' => 'dashicons-list-view'
    ));
}

function dyrFeatures()
{
    add_theme_support('post-thumbnails');
    add_image_size('dyrImg', 500, 400, true);
    add_image_size('dyrCard', 200, 200, true);
}

add_action('init', 'customPostTypes');

add_action('after_setup_theme', 'dyrFeatures');
