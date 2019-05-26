<?php
/**
 * Plugin Name: Jankx Plugin Manager
 * Plugin URI: https://puleeno.com
 * Author: Puleeno Nguyen
 * Author URI: https://puleeno.com
 * Version: 0.0.1
 * Description: Manage plugin the lightway to require and recommended plugins for WordPress.
 * Tags: plugin manager, recommended, require, dependences
 *
 * @package Jankx\Plugin
 */


if (! function_exists('load_Manager')) {
    /**
     * Ensure only one instance of the class is ever invoked.
     *
     * @since 2.5.0
     */
    function load_Manager()
    {
        $GLOBALS['tgmpa'] = Manager::get_instance();
    }
}

if (did_action('plugins_loaded')) {
    load_Manager();
} else {
    add_action('plugins_loaded', 'load_Manager');
}