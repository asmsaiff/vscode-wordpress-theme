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
                'id'        =>  'id',
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