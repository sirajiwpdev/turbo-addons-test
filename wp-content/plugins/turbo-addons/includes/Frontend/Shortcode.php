<?php
namespace turbo\addons\Frontend;

/**
 * 
 * ShortCode Handle Calss
 */


 class Shortcode{

    /**
     * 
     * Initializes the class
     */

  function __construct(){

    add_shortcode('turbo-addons', [$this, 'render_shrotcode']);
  }

  /**
   * ShortCode handler Class
   * 
   * @param array $atts
   * @param string $content
   * 
   * @return string
   * 
   */

   public function render_shrotcode($atts, $content = ' '){
    return "Hello from Turbo Addons Shortcode";

   }
 }
?>