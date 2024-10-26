<?php
function twentytwentyfour_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Catamaran:wght@100..900&display=swap', false);

    wp_enqueue_script('faq-js', get_stylesheet_directory_uri() . '/js/faq-toggle.js', array('jquery'), false, true);

    wp_enqueue_script('slider-js', get_stylesheet_directory_uri() . '/js/slider.js', array('jquery'), false, true);

    wp_enqueue_script('video-js', get_stylesheet_directory_uri() . '/js/video-slider.js', array('jquery'), false, true);

}
add_action('wp_enqueue_scripts', 'twentytwentyfour_child_enqueue_styles');



//this function will show the menu option under the apperance tag in wordpress dashboard
function primary_menu(){
    register_nav_menu(array(
        'primary' => __('Primary Menu', 'textdomain'),
    ));
    add_action('init', 'primary_menu');
}


//allow svg in wordpress media

function add_svg_upload_support($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'add_svg_upload_support');
