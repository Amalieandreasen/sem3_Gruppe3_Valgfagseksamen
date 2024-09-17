<?php
function customPostTypes()
{

    // Her registrere vi vores custom post type for alle dyr
    register_post_type('dyr', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'dyr'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'dyr',
            'add_new_item' => 'Tilføj nyt dyr',
            'edit_item' => 'Rediger dyr',
            'all_items' => 'Alle dyr',
            'singular_name' => 'dyr'
        ),
        'menu_icon' => 'dashicons-pets'
    ));
}

add_action('init', 'customPostTypes');
