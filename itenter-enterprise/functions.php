php
<?php

/**
 * ITENTER Enterprise Theme
 */


if(!defined('ABSPATH')){

    exit;

}


/**
 * Theme Setup
 */

function itenter_theme_setup(){


    add_theme_support(
        'title-tag'
    );


    add_theme_support(
        'post-thumbnails'
    );


    add_theme_support(
        'custom-logo',
        [
            'height'=>80,
            'width'=>250,
            'flex-height'=>true,
            'flex-width'=>true
        ]
    );
add_theme_support(
        'html5',
        [
            'search-form',
            'gallery',
            'caption',
            'style',
            'script'
        ]
    );


    register_nav_menus([

        'primary_menu'=>
        __('Primary Menu','itenter')

    ]);

}


add_action(
    'after_setup_theme',
    'itenter_theme_setup'
);



/**
 * Load Assets
 */

function itenter_assets(){


    wp_enqueue_style(

        'itenter-main',

        get_template_directory_uri()
        .'/assets/css/main.css',

        [],

        '1.0.0'
      );



    wp_enqueue_script(

        'itenter-main-js',

        get_template_directory_uri()
        .'/assets/js/main.js',

        [],

        '1.0.0',

        true

    );


}


add_action(
    'wp_enqueue_scripts',
    'itenter_assets'
);


---
