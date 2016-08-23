<?php

/**
 * @package SearchTap
 * @version 1.6
 */
/*
  Plugin Name: SearchTap WP Integration
  Plugin URI: http://techmarbles.com
  Description: SearchTap integration for wordpress.
  Author: SearchTap
  Version: 1.6
  Author URI: http://techmarbles.com
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

final class SearchTap {

    protected static $_instance = null;

    function __construct() {
        add_filter('plugin_action_links_' . plugin_basename(__FILE__), array($this, 'plugin_action_links'));
        $this->Includes();
    }

    public static function plugin_action_links($links) {
        $action_links = array(
            'settings' => '<a href="' . admin_url('admin.php?page=searchtap.php') . '" title="' . esc_attr(__('View WooCommerce Settings', 'woocommerce')) . '">' . __('Settings', 'woocommerce') . '</a>',
        );

        return array_merge($action_links, $links);
    }

    // Debugging function

    public function pr($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    // include files
    public function Includes() {
        require_once ("inc/class-main.php"); // main.php
        if (class_exists('Main')) {
            $main_file = new Main;
        }
    }

    public static function instance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

}

function SearchTap() {
    return SearchTap::instance();
}

// Global for backwards compatibility.
$GLOBALS['tabs'] = SearchTap();
