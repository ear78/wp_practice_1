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


        wp_enqueue_style( 'montserrat-font',  'https://fonts.googleapis.com/css?family=Montserrat:300,400,600', [], time(), 'all');

        wp_enqueue_style( 'main-css',  get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');

    // using custom stylesheets for different pages
    // use the array to make the css dependent on whatever file you want to cascade
    wp_enqueue_style( 'custom-css',  get_stylesheet_directory_uri() . '/assets/css/custom.css', [ 'main-css' ], time(), 'all');

    }

    // adding action to load in styles
    add_action( 'wp_enqueue_scripts', 'wppractice1_enqueue_styles');





    // Load in our js

    function wppractice1_enqueue_scripts(){
        wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', [], time(), true);

        wp_enqueue_script( 'jquery-theme-js', get_stylesheet_directory_uri() . '/assets/js/jquery.theme.js', [ 'jquery' ], time(), false);

        wp_enqueue_script( 'navigation-js', get_stylesheet_directory_uri() . '/assets/js/navigation.js', [ 'jquery' ], time(), false);
    }
    add_action( 'wp_enqueue_scripts', 'wppractice1_enqueue_scripts');

	//Enqueue the Dashicons script
	
	function load_dashicons_front_end() {
		wp_enqueue_style( 'dashicons' );
	}
	add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );



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
            'name' => esc_html__( 'Page Sidebar', 'wppractice1'),
            'id' => 'page-sidebar',
            'description' => esc_html__( 'Add widgets for page sidebar',  'wppractice1'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ]);

        register_sidebar([
            'name' => esc_html__( 'Content Sidebar', 'wppractice1'),
            'id' => 'content-sidebar',
            'description' => esc_html__( 'Add widgets for content sidebar', 'wppractice1'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ]);

        register_sidebar([
            'name' => esc_html__( 'Footer Sidebar', 'wppractice1'),
            'id' => 'footer-sidebar',
            'description' => esc_html__( 'Add widgets for footer sidebar', 'wppractice1'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ]);

        register_sidebar([
            'name' => esc_html__( 'Front Page Sidebar', 'wppractice1'),
            'id' => 'frontpage',
            'description' => esc_html__( 'Add widgets for Front Page sidebar', 'wppractice1'),
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        ]);

    }
    add_action( 'widgets_init', 'wppractice1_widgets_init')
		
	

?>