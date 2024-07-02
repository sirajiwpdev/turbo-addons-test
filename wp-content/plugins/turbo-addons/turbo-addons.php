<?php
/*
 * Plugin Name:       Turbo Addons For Elementor
 * Plugin URI:        https://turbo-addons.com/
 * Description:       Awesome Turbo Addons For Elementor
 * Version:           1.0.0
 * Author:            Said Siraji
 * Author URI:        https://turbo-addons.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       turbo-addons
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

require_once __DIR__ . '/vendor/autoload.php';


/**
 * 
 * The Main Plugin Class
 */

final class turbo_addons {

/**
 * 
 * Plugin Version
 * @var string
 * 
 * 
 */

 const version = '1.0.0';


/**
 * 
 *  Class Constructor 
 */
    private function __construct() {
        //$this->var = $var; 
        $this->define_constants();

        register_activation_hook(__FILE__, [$this, 'activate']); 
       // var_dump(register_activation_hook());

        add_action('plugins_loaded', [$this, 'init_plugin']);

    }
    /**
     * 
     * Initializes a singleton instance
     * 
     * @return \turbo_addons
     */

    public static function init(){

        static $instance = false;
    

    if( !$instance ){

        $instance = new self();

    }
    return $instance;

    /**
     * 
     * Define the plguin master constants
     * 
     * @return Void
     */
}
    public function define_constants(){

        define('TURBO_ADDONS_VERSION', self::version);
        define ('TURBO_ADDONS_FILE', __FILE__);
        define('TURBO_ADDONS_PATH', __DIR__);
        define('TURBO_ADDONS_URL', plugins_url('',TURBO_ADDONS_FILE));
        define('TURBO_ADDONS_ASSETS',TURBO_ADDONS_URL . '/assets');

    } 
    /**
     * initialize the plugin
     * 
     * @return void
     */

    public function init_plugin(){
        if ( is_admin() ) {
            
       new turbo\addons\Admin();
     

        }else{

            new turbo\addons\Frontend();
        }


        
    }  
    /**
     * 
     * Do Some Stuff upon plugin activation
     * 
     * @return void
     * 
     *  */

    public function activate(){
        $installed = get_option('turbo_addons_installed');
        if(!$installed ){

            update_option('turbo_addons_installed',time());

        }
       
        update_option('turbo_addons_version',TURBO_ADDONS_VERSION);
    }
}

/**
 * initializex the main plugin
 * @return \turbo_addons
 * 
 * 
 */

 function turbo_addons(){
    return turbo_addons::init();


 }

 //shoot the plugin

 turbo_addons();

?>