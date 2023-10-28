<?php
/**
 * Custom Admin Menu
 */
function myplugin_custom_admin_menu(){
    add_menu_page(
        __('Custom Menu','my-plugin'),
        __('Custom Menu','my-plugin'),
        'manage_options',
        'custom-menu',
        'myplugin_custom_submenu_template_callback',
        MYPLUGIN_URL . 'admin/img/plugins.png',
        10
    );
    add_submenu_page(
        'custom-menu',
        __('Custom SubMenu 2','my-plugin'),
        __('Custom SubMenu 2','my-plugin'),
        'manage_options',
        'custom-submenu-2',
        'myplugin_custom_submenu_template_callback_2'
    );
    
    add_submenu_page(
        'admin.php',
        __('Custom Link','my-plugin'),
        __('Custom Link','my-plugin'),
        'manage_options',
        'custom-link',
        'myplugin_custom_link_template_callback'
    );

    add_submenu_page(
        'tools.php',
        __('Custom Link','my-plugin'),
        __('Custom Link','my-plugin'),
        'manage_options',
        'custom-tool-link',
        'myplugin_custom_tool_link_template_callback',
    );

    add_submenu_page(
        'options-general.php',
        __('Custom Link','my-plugin'),
        __('Custom Link','my-plugin'),
        'manage_options',
        'custom-options-link',
        'myplugin_custom_options_link_template_callback',
    );

    add_submenu_page(
        'themes.php',
        __('Custom Link','my-plugin'),
        __('Custom Link','my-plugin'),
        'manage_options',
        'custom-theme-link',
        'myplugin_custom_options_link_template_callback',
    );
}
add_action('admin_menu','myplugin_custom_admin_menu');

/**
 * Custom SubMenu Callback Function
 */
function myplugin_custom_submenu_template_callback(){
    ?>
    <h2>Custom SubMenu</h2>
    <?php
}

/**
 * Custom SubMenu 2 Callback Function
 */
function myplugin_custom_submenu_template_callback_2(){
    ?>
    <h2>Custom Sub Menu 2</h2>
    <a href="<?php echo admin_url('/admin.php?page=custom-link'); ?>">Custom Link</a>
    <?php
}

/**
 * Custom Link Temaplate  Callback Function
 */
function myplugin_custom_link_template_callback(){
    ?>
    <h4>Link Template</h4>
    <?php
}
/**
 * Custom Tool Link Template Callback
 */
function myplugin_custom_tool_link_template_callback(){
    ?>
        <h2>Hey I am Form the Custom Tool link !!</h2>
    <?php
}


/**
 * Custom Settings Link Template Callback
 */
function myplugin_custom_options_link_template_callback(){
    ?>
        <h2>Hey I am Form the Options link !!</h2>
    <?php
}

/**
 * Add Custom Menus Admin Toolbar
 */
function myplugin_custom_admin_toolbar_links($admin_bar){
    $admin_bar->add_menu(array(
        'id'=>'my-item',
        'title'=>'My Item',
        'href'=>'#',
        'meta'=>array(
            'title'=>'My Title'
        )
    ));

    $admin_bar->add_menu(array(
        'id'=>'my-first-item',
        'parent'=>'my-item',
        'title'=>'My submenu Item',
        'href'=>'#',
        'meta'=>array(
            'title'=>'My submenu Title',
            'target'=>'_blank',
            'class'=>'my_custom_class'

        )
    ));
}
add_action('admin_bar_menu','myplugin_custom_admin_toolbar_links',100);