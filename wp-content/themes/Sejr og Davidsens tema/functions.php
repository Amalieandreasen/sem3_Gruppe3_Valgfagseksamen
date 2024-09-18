<?php
function customThemeFiles()
{
    wp_enqueue_style('globalStyles', get_theme_file_uri('/css/globalStyle.css'));
}

add_action('wp_enqueue_scripts', 'customThemeFiles');
