<?php
/*
Plugin Name: WP Watchdog
Plugin URI:  http://wp-watchdog.dev
Description: Wordpress plugin for logging debug messages just like Drupal's Watchdog.
Version:     1.1
Author:      VInaykumar Shetty
Author URI:  http://wp-watchdog.dev
License:     GPL2
 
WP Watchdog is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
WP Watchdog is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with WP Watchdog. If not, see {License URI}.
*/

if ( !class_exists( 'WP_Watchdog' ) ) {
  class WP_Watchdog {
    // Static property to hold our singleton instance
    static $instance = false;

    
    function __construct() {
      $this->register_hooks();
    }
    
    public static function getInstance() {
      if ( !self::$instance )
        self::$instance = new self;
      return self::$instance;
    }

    public function register_hooks() {
      // plugin activation and deactivation hooks
      register_activation_hook( __FILE__, array( $this, 'init' ) );
      register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );
    }

    /**************************************************
    ****************   Hook callbacks *****************
    ***************************************************
    */
    public function init() {
    }

    public function deactivate() {
    }
  }
  
  $wp_watchdog = WP_Watchdog::getInstance();
}