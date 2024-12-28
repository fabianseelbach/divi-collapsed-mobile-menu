<?php
/*
 * Plugin Name:       Divi Collapsed Menu on Mobile
 * Plugin URI:        https://github.com/fabianseelbach/divi-collapsed-mobile-menu
 * Description:       Wordpress Plugin to create a collapsed Mobile Menu
 * Version:           1.0.2
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Fabian Seelbach
 * Author URI:        https://fsdevzone.de/
 * License:           GPL v3
 * License URI:       https://github.com/fabianseelbach/divi-barrierefei/blob/production/LICENSE
 * Text Domain:       divi-collapsed-mobile-menu
 */

define("DIVI_COLLAPSED_MENU_VERSION", "1.0.0");

function divi_collapsed_menu_script() {
    wp_register_script('divi-collapsed-mobile-menu-js', plugins_url('divi-collapsed-mobile-menu/divi-collapsed-mobile-menu.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('divi-collapsed-mobile-menu-js');

    wp_register_style("divi-collapsed-mobile-menu-css", plugins_url( 'divi-collapsed-mobile-menu/divi-collapsed-mobile-menu.css' ));
    wp_enqueue_style('divi-collapsed-mobile-menu-css');
}
add_action('wp_enqueue_scripts', 'divi_collapsed_menu_script');

require_once("updater.php");
$update = new Updater();
$update->create(DIVI_COLLAPSED_MENU_VERSION);
?>