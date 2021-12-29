<?php
    CSF::createSection( $prefix, array(
        'title' => 'Home Hero',
        'fields'                =>  array(
            array(
                'title'         =>  __('Home Hero Title', 'diww'),
                'id'            =>  'home_hero_title',
                'type'          =>  'text'
            ),
            array(
                'title'         =>  __('Home Hero Description', 'diww'),
                'id'            =>  'home_hero_description',
                'type'          =>  'wp_editor',
                'height'        =>  '100px',
                'media_buttons' =>  false,
            ),
            array(
                'title'         =>  __('Home Hero Description', 'diww'),
                'id'            =>  'home_hero_image',
                'type'          =>  'media',
            ),
        ),
    ));