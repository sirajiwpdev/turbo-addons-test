<?php
namespace turbo\addons\Admin;

/**
 * THe Menu Handeler Class
 * 
 * 
 */
class Menu {
/**
 * 
 * Initialize THe Class
 * 
 */
    function __construct(){

        add_action('admin_menu', [$this, 'admin_menu']);


    }

    /**
     * Register Admin Memu
     * 
     * 
     * @return void
     * 
     * 
     */

    public function admin_menu(){

        add_menu_page( __('Turbo Addons', 'turbo-addons'), __('Turbo Addons', 'turbo-addons'), 'manage_options','turbo-addons',[$this, 'plugin_page'],'dashicons-welcome-widgets-menus');


        }

    
    /**
     * Render the plugin
     * 
     * @return void
     * 
     */
    public function plugin_page(){
        echo "Hello From Turbo Addon Plugin";

    }

   
}


?>