<?php

/**Theme Functions.
 * 
 * @package Fireflies
 */


function fireflies_enqueue_scripts()
{
    /**REGISTER THE STYLES */
    wp_register_style('style-css', get_stylesheet_uri(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', false, 'all');


    /**REGISTER THE SCRIPTS*/
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

    /**QUEUE UP THE STYLE AND SCRIPTS */

    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'fireflies_enqueue_scripts');

add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});
