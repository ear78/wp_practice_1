<?php


    // Add Theme Support

    add_theme_support( 'title-tage');
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
    add_theme_support( 'html5');
    add_theme_support( 'automatic-feed-links');
    add_theme_support( 'custom-background', $defaults);
    add_theme_support( 'custom-header');
    add_theme_support( 'custom-logo');
    add_theme_support( 'customize-selective-refresh-widgets');
    add_theme_support( 'starter-content');

    // Load in Css

    function wppractice1_enqueue_styles(){

        // using time() to trick wordpress to use most current version, turn off when in development
        // using get_stylesheet_directory_uri() to get directory then concat the path afterwards


        wp_enqueue_style( 'main-css',  get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');

    }

    // adding action to load in styles
    add_action( 'wp_enqueue_scripts', 'wppractice1_enqueue_styles');


    // Register Menu Locations

    register_nav_menus(
        [ 'navigation' => esc_html__( 'Navigation', 'wppractice1')]
    );

    // Setup Widget Areas
    function wppractice1_widgets_init(){
        register_sidebar([
            'name' => esc_html__( 'Main Sidebar', 'wppractice1'),
            'id' => 'main-sidebar',
            'description' => esc_html__( 'Add widgets for main sidebar',  'wppractice1'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ]);

        register_sidebar([
            'name' => esc_html__( 'Content Sidebar', 'wppractice1'),
            'id' => 'content-sidebar',
            'description' => esc_html__( 'Add widgets for content sidebar', 'wppractice1'),
            'before_widget' => '<section class="content-widget">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="content-widget-title">',
            'after_title' => '</h2>'
        ]);

    }
    add_action( 'widgets_init', 'wppractice1_widgets_init')

?>