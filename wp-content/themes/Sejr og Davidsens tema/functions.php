<?php
function customThemeFiles()
{
    wp_enqueue_style('globalStyles', get_theme_file_uri('/css/globalStyle.css'));
    wp_enqueue_script('index.js', get_theme_file_uri('/JS/index.js'), array(), null, true);
    wp_enqueue_script('adoptAnimal.js', get_theme_file_uri('/JS/adoptAnimal.js'), array(), null, true);
    wp_enqueue_script('bookOphold.js', get_theme_file_uri('/JS/bookOphold.js'), array(), null, true);
}

add_action('wp_enqueue_scripts', 'customThemeFiles');
