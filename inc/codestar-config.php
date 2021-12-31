<?php
    if( class_exists( 'CSF' ) ) {
        $prefix = 'diww';
      
        CSF::createOptions( $prefix, array(
            'menu_title'    =>  'DIWW Options',
            'menu_slug'     =>  'diww_options',
            'menu_icon'     =>  'dashicons-screenoptions'
        ));
      
        CSF::createSection( $prefix, array(
            'title'           => 'General',
            'fields'            =>  array(
                array(
                    'title'             =>  __('Title', 'diww'),
                    'id'                =>  'title',
                    'type'              =>  'text'
                )
            ),
        ));
      
        include_once get_template_directory().'/inc/options/side-panel.php';
        include_once get_template_directory().'/inc/options/home-hero.php';
        include_once get_template_directory().'/inc/options/footer-options.php';
    }