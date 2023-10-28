<?php
/**
 * 
 */

 function myplugin_movie_post_type(){
    $labels = array(
        'name'               => 'Movies',
        'singular_name'      => 'Movies',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Movies',
        'edit_item'          => 'Edit Movies',
        'new_item'           => 'New Movies',
        'view_item'          => 'View Movies',
        'search_items'       => 'Search Movies',
        'not_found'          => 'No Movies found',
        'not_found_in_trash' => 'No Movies found in trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Movies'
    );
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'show_in_rest'        => true,
        'menu_position'       => 5,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'          => array(),
        'menu_icon'           => 'dashicons-movie', // Customize the menu icon if desired
        'rewrite'             => array( 'slug' => 'movie' ), // Customize the URL slug if desired
    );
  
    register_post_type( 'movie', $args );
 }
add_action( 'init','myplugin_movie_post_type');
/**
 * Update title placeholder
 */
function myplugin_update_movie_title_placeholder(){
    $screen=get_current_screen();
    if('movie'===$screen->post_type){
        $title='Add Movie Name';
    }

    return $title;
}

add_filter('enter_title_here','myplugin_update_movie_title_placeholder');
?>