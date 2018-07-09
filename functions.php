<?php

function register_content_scripts(){
    wp_enqueue_style( "fonts", get_stylesheet_directory_uri() . "/assets/css/font-awesome.min.css" );
    wp_enqueue_style( "style1", get_stylesheet_directory_uri() . "/assets/css/style.css" );
    wp_enqueue_style( "media1", get_stylesheet_directory_uri() . "/assets/css/media.css" );

    wp_enqueue_script( 'jquery1', get_stylesheet_directory_uri() . '/assets/libs/jquery/jquery-3.2.1.min.js'  );
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js'  );
}
add_action( 'wp_enqueue_scripts', 'register_content_scripts' );


add_theme_support( 'post-thumbnails' );
