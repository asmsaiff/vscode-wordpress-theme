<?php
    require_once(get_theme_file_path( '/lib/codestar-framework/codestar-framework.php' ));
    require_once(get_theme_file_path( '/inc/codestar-config.php' ));

    function diww_theme_setup() {
        load_theme_textdomain('diww');
        add_theme_support('custom-logo');
        add_theme_support('custom-header');
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'diww_theme_setup');

    function diww_assets_enqueue() {
        wp_enqueue_style('style-stylesheet', get_template_directory_uri().'/assets/css/style.css');
        wp_enqueue_style('responsive-stylesheet', get_template_directory_uri().'/assets/css/responsive.css');
        wp_enqueue_style('main-stylesheet', get_stylesheet_uri());

        wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), time(), true);
    }
    add_action('wp_enqueue_scripts', 'diww_assets_enqueue');

    if ( ! function_exists( 'diww_get_option' ) ) {
        function diww_get_option( $option = '', $default = null ) {
          $options = get_option( 'diww' ); // Attention: Set your unique id of the framework
          return ( isset( $options[$option] ) ) ? $options[$option] : $default;
        }
    }

    remove_filter ('the_content', 'wpautop');
    remove_filter ('the_content', 'wpautop');