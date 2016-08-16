<?php

/**
 * @package SearchTap
 * @version 1.6
 */
/*
  Plugin Name: Search Tab
  Plugin URI: http://techmarbles.com
  Description: Wordpress Tabs.
  Author: Ankush
  Version: 1.6
  Author URI: http://techmarbles.com
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

final class Tabs {

    protected static $_instance = null;

    function __construct() {
        $this->Includes();
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

function TAB() {
    return Tabs::instance();
}

// Global for backwards compatibility.
$GLOBALS['tabs'] = TAB();
