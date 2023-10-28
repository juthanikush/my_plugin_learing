<?php
/**
 * Add Meta Box
 */
function myplugin_add_movie_metaboxes(){
    add_meta_box(
        'myplugin_movie_metabox_id',
        'Movie Options',
        'myplugin_movie_metaboxes_template',
        'movie'
    );
}
add_action('add_meta_boxes','myplugin_add_movie_metaboxes'); 

/**
 * Metabox Template
 */

function myplugin_movie_metaboxes_template($post){
    $teaser_url=get_post_meta($post->ID,'_myplugin_movie_teaser_url',true);
    $release_year=get_post_meta($post->ID,'_myplugin_movie_releases_year',true);
    $actors=get_post_meta($post->ID,'_myplugin_movie_actors',true);
    $video_type=get_post_meta($post->ID,'_myplugin_movie_video_type',true);
    $is_featured=get_post_meta($post->ID,'_myplugin_movie_is_featured',true);
    ?>
    <table>
        <tr>
            <td>Tease URL: </td>
            <td>
                <input type="text" class="ragular-text" name="myplugin_movie_teaser_url" value="<?php echo myplugin_get_movie_metavalues($teaser_url)?>" />
            </td>
        </tr>
        <tr>
            <td>Release Year: </td>
            <td>
                <input type="text" class="ragular-text" name="myplugin_movie_releases_year" value="<?php echo myplugin_get_movie_metavalues($release_year)?>" />
            </td>
        </tr>
        <tr>
            <td>Actors: </td>
            <td>
                <textarea name="myplugin_movie_actors" class="ragular-text" rows="4">
                    <?php echo myplugin_get_movie_metavalues($actors)?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td>Video type: </td>
            <td>
                <select name="myplugin_movie_video_type" class="regilar-text">
                    <option value="">Select One</option>
                    <option value="HD" <?php selected('HD',myplugin_get_movie_metavalues($video_type));?>>HD</option>
                    <option value="SD" <?php selected('SD',myplugin_get_movie_metavalues($video_type));?>>SD</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Is Featured? :</td>
            <td>
                <input type="checkbox" name="myplugin_movie_is_featured" class="regular-text" value="1" <?php checked(1,myplugin_get_movie_metavalues($is_featured))?> />
            </td>
        </tr>
    </table>
    <?php
}
/**
 * Save Metabox Values
 */
function myplugin_save_move_metabox_values($post_id){
    if(isset($_POST['myplugin_movie_teaser_url'])){
        update_post_meta($post_id,'_myplugin_movie_teaser_url',esc_url_raw($_POST['myplugin_movie_teaser_url']));
    }
    if(isset($_POST['myplugin_movie_releases_year'])){
        update_post_meta($post_id,'_myplugin_movie_releases_year',sanitize_text_field($_POST['myplugin_movie_releases_year']));
    }
    if(isset($_POST['myplugin_movie_actors'])){
        update_post_meta($post_id,'_myplugin_movie_actors',sanitize_textarea_field($_POST['myplugin_movie_actors']));
    }
    if(isset($_POST['myplugin_movie_video_type'])){
        update_post_meta($post_id,'_myplugin_movie_video_type',sanitize_text_field($_POST['myplugin_movie_video_type']));
    }
    
    if(isset($_POST['myplugin_movie_is_featured'])){
        update_post_meta($post_id,'_myplugin_movie_is_featured',true);
    }
    else{
        update_post_meta($post_id,'_myplugin_movie_is_featured',false);
    }
    
}

add_action('save_post','myplugin_save_move_metabox_values');
/**
 * Get The Movie Metavalues
 */
function myplugin_get_movie_metavalues($value){
    if(isset($value) && !empty($value)){
        return $value;
    }else{
        return '';
    }
}