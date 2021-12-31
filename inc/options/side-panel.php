<?php
    CSF::createSection( $prefix, array(
        'title'     =>  'Side Panel',
        'id'        =>  'side_panel_option',
    ));

    CSF::createSection($prefix, array(
        'title'         =>  'Top Section',
        'parent'        =>  'side_panel_option',
        'fields'        =>  array(
            array(
                'title'     =>  'Page List',
                'id'        =>  'page_list',
                'type'      =>  'repeater',
                'min'       =>  1,
                'fields'    =>  array(
                    array(
                        'title'         =>  __('Page Name', 'diww'),
                        'id'            =>  'page_name',
                        'type'          =>  'text'
                    ),
                    array(
                        'title'         =>  __('Remix Icon Class Name', 'diww'),
                        'id'            =>  'remix_icon_class',
                        'type'          =>  'text'
                    ),
                    array(
                        'title'         =>  __('Page Link', 'diww'),
                        'id'            =>  'page_link',
                        'type'          =>  'link'
                    ),
                ),
            )
        )
    ));

    CSF::createSection($prefix, array(
        'title'         =>  'Bottom Section',
        'parent'        =>  'side_panel_option',
        'fields'        =>  array(
            array(
                'title'     =>  'Social Media',
                'id'        =>  'social_media',
                'type'      =>  'repeater',
                'min'       =>  1,
                'fields'    =>  array(
                    array(
                        'title'         =>  __('Social Media Name', 'diww'),
                        'id'            =>  'social_media_name',
                        'type'          =>  'text'
                    ),
                    array(
                        'title'         =>  __('Remix Social Icon Class Name', 'diww'),
                        'id'            =>  'remix_social_icon_class',
                        'type'          =>  'text'
                    ),
                    array(
                        'title'         =>  __('Social Media Link', 'diww'),
                        'id'            =>  'social_media_link',
                        'type'          =>  'link'
                    ),
                ),
            )
        )
    ));