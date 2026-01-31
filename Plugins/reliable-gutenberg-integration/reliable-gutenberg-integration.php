<?php 

/**
 * Plugin Name: Reliable Gutenberg Integration
 * Description: Reliable Gutenberg Integration Plugin is a WordPress plugin that integrates with the Gutenberg editor to display the latest five members added to your site. It helps you easily create dynamic blog sections that showcase recent user activity in a simple and efficient way.
 * Version: 1.0.0
 * License: GPLv2 or later
 * Author: Harsh Tank
 */

if ( ! defined('ABSPATH') ) {
    exit;
}

define('RGI_DIR_NAME', 'repute-gutenberg-integration');
define('RGI_DIR', plugin_dir_path(__FILE__));
define('RGI_DIR_URL', plugin_dir_url(__FILE__));

require_once RGI_DIR . "/autoload.php";
