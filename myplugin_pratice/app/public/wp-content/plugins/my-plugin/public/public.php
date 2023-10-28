<?php
/**
 * Init Styles & scripts
 * 
 * @return void
 */

function myplugin_admin_styles_scripts(){
    wp_enqueue_style('public-style',MYPLUGIN_URL . 'public/css/public.css', '', rand());
    wp_enqueue_script('public-script',MYPLUGIN_URL.'public/js/public.js',array('jquery'),rand(),true);
}
add_action('wp_enqueue_scripts','myplugin_admin_styles_scripts');