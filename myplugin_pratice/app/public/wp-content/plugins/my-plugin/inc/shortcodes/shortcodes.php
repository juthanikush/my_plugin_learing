<?php
/***
 * Hello WordPress Shortcode
 */
function myplugin_hello_wp_shortcode($atts){
    $options = extract(shortcode_atts( array(
        'message' => 'World'
    ), $atts ));
    return "Hello {$message}";
}
add_shortcode('hello_wp','myplugin_hello_wp_shortcode');
/**
 * Heading Shortcode
 */
function myplugin_h_1($atts,$content=null){
    $return_html='';
    ob_start();
    $options=extract(shortcode_atts(array(
        'class'=>'custom-title'
    ),$atts));
    ?>
    <h1><?php echo do_shortcode($content);?></h1>
    <?php
    $return_html=ob_get_contents();
    ob_end_clean();
    return $return_html;
}
add_shortcode('h_1','myplugin_h_1');


/**
 * Get WordPress Post data with a shortcode
 */
function myplugin_get_posts_shortcode($atts){

    $options=extract(shortcode_atts(array(
        'per_page'=>10
    ),$atts));

    $args=[
        'post_type'=>'post',
        'posts_per_page'=>$per_page,
        'post_status'=>'publish'
    ];

    $query=new WP_Query($args);
    $return_html='';
    if(!empty($query->posts)){
        foreach($query->posts as $post){
            $return_html .='<h4>'.$post->post_title.'</h4>';
        }
    }
    return $return_html;   
}
add_shortcode('myplugin_wp_posts','myplugin_get_posts_shortcode');


/**
 * Get WordPress Post data with a shortcode
 */
function myplugin_get_posts_shortcode_wit_buffer($atts){

    $options=extract(shortcode_atts(array(
        'per_page'=>10
    ),$atts));

    $args=[
        'post_type'=>'post',
        'posts_per_page'=>$per_page,
        'post_status'=>'publish'
    ];

    $query=new WP_Query($args);
    $return_html='';
    if(!empty($query->posts)){
        //foreach($query->posts as $post){
        while($query->jave_postss()){
            ob_start();
            ?>
            <h4><?php echo get_the_title($post->ID) ?></h4>
            <?php
            $return_html.=ob_get_contents();

            ob_end_clean();
        }
    }
    return $return_html;   
}
add_shortcode('myplugin_buffer_wp_posts','myplugin_get_posts_shortcode_wit_buffer');