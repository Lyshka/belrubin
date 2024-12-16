<?php
/*
 * Plugin Name: Lyshka
 * Description: Универсальный плагин для хорошей разработки на Wordpress
 * Version: 1.0.0
 * Author: Lyshka
 * Author URI: https://t.me/Aim_Lyshka
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Text Domain: lyshka
 * Domain Path: /languages
 *
 */

define('PLUGIN_PATH', plugin_dir_path(__FILE__));

add_action('plugins_loaded', function () {
    require_once PLUGIN_PATH . 'Class/index.php';
    require_once PLUGIN_PATH . 'Filter/index.php';
    require_once PLUGIN_PATH . 'Action/index.php';
    require_once PLUGIN_PATH . 'Theme/index.php';
    require_once PLUGIN_PATH . 'Constant/index.php';
});
