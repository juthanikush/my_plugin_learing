<?php

/**
 * 
 */
function myplugin_movie_taxonomy(){
    $labels=array(
        'name'=>_x('Categories','taxonomy general name','my-plugin'),
        'singular_name'=>_x('Category','taxonomy singular name','my-plugin'),
        'menu_name'=>__('Categories','my-plugin'),
        'search_items'=>__('Search Categories','my-plugin'),
        'all_items'=>__('All Categories','my-plugin'),
        'parent_items'=>__('Parent Categories','my-plugin'),
        'parent_item_colon'=>__('Parent Categories','my-plugin'),
        'edit_items'=>__('Edit Categories','my-plugin'),
        'update_items'=>__('Update Categories','my-plugin'),
        'add_new_items'=>__('Add Categories','my-plugin'),
        'new_item_name'=>__('New Categories','my-plugin'),
    );
    $args = array(
        'hierarchical'=>true,
        'labels'=>$labels,
        'show_ui'=>true,
        'show_admin_columns'=>true,
        'query_var'=>true,
        'show_in_rest'=>true,
        'rewrite'=>array('slug'=>'movie_cat'),
    );


    register_taxonomy('movie_cat',array('movie'), $args);
}
add_action('init','myplugin_movie_taxonomy')

?>