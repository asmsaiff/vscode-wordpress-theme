<?php
    CSF::createSection( $prefix, array(
        'title' => 'Footer',
        'fields'                =>  array(
            array(
                'title'         =>  __('Footer Credit', 'diww'),
                'id'            =>  'footer_credit',
                'type'          =>  'wp_editor',
                'height'        =>  '100px',
                'media_buttons' =>  false,
            ),
        ),
    ));