<?php
/**
 * Init Styles & scripts
 * 
 * @return void
 */

function myplugin_admin_styles_scripts(){
    wp_register_style('myplugin-image-uplaoder',MYPLUGIN_URL.'admin/css/image-uploader.css','',rand());
    wp_enqueue_style('admin-style',MYPLUGIN_URL . 'admin/css/admin.css', '', rand());
    wp_enqueue_script('myplugin-image-uplaoderjs',MYPLUGIN_URL.'admin/js/image-uploader.js',array('jquery'),rand(),true);
    wp_enqueue_script('admin-script',MYPLUGIN_URL.'admin/js/admin.js',array('jquery'),rand(),true);
}
add_action('admin_enqueue_scripts','myplugin_admin_styles_scripts');