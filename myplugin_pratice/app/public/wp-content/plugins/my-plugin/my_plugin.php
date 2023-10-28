<?php
/**
 * Plugin Name: My Plugin
 * Plugin URI: http://my-plugin.com
 * Author: kush
 * Author URI: http://kush.me
 * Version: 1.0.0
 * Text Domain: my-plugin
 * Description: this is my plugin
 */

 if(!defined('ABSPATH')) : exit(); endif; //No direct access allowed

 /**
  * Define plugin Costants
  */
  define('MYPLUGIN_PATH',trailingslashit(plugin_dir_path(__FILE__)));
  define('MYPLUGIN_URL',trailingslashit(plugins_url('/',__FILE__)));

  /**
   * Include admin.php
   */
  if( is_admin()){
    require_once MYPLUGIN_PATH . '/admin/admin.php';
  }

  /**
   * Include public.php
   */
  if( !is_admin()){
    require_once MYPLUGIN_PATH . '/public/public.php';
  }

  /**
   * Include Post Types
   */
  require_once MYPLUGIN_PATH . '/inc/post-types/movie.php';

  /**
   * Inclide Taxonomies
   */
  require_once MYPLUGIN_PATH . '/inc/taxonomies/movie-taxonomy.php';

  /**
   * Include Metaboxes
   */
  require_once MYPLUGIN_PATH . '/inc/metaboxes/movie-metaboxes.php';

  /**
   * Include Data Tables
   */
  require_once MYPLUGIN_PATH . '/inc/data-tables/movie-data-table.php';

  /**
   * Include Admin Menus
   */
  require_once MYPLUGIN_PATH .'/inc/menus/menus.php';

  /**
   * Include Settings Menus
   */
  require_once MYPLUGIN_PATH .'/inc/settings/settings.php';

  /**
   * Include ShortCodes
   */
  require_once MYPLUGIN_PATH .'/inc/shortcodes/shortcodes.php';

  /**
   * Include Custom Dashboard Widgets
   */
  require_once MYPLUGIN_PATH .'/inc/dashboard/widgets.php';
  /**
   * Include WordPress Custom Custom Widgets
   */
  require_once MYPLUGIN_PATH .'/inc/widgets/movie-widget.php';
?>
