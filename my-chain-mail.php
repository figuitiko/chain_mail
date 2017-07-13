<?php
/**
 * Plugin Name: My chain mail
 * Plugin URI: http://techpromux.com
 * Description: This plugin allows you to send chain email to your clients.
 * Author: Frank freeman
 * Author URI: http://techpromux.com
 * Version: 0.0.1
 * License: GPLv2
 */

namespace chain_mail;
use \My_Plugin as My_Plugin;
//Exit if accessed directly

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// function activate_my_plugin() {
//    var_dump(plugin_dir_path( __FILE__ ) . 'includes/class-my-activator.php');exit;
//     require_once plugin_dir_path( __FILE__ ) . 'includes/class-my-activator.php';
//     Class_my_Activator::my_plugin_activate();
// }
// function deactivate_my_plugin() {
//     require_once plugin_dir_path( __FILE__ ) . 'includes/class-my-deactivator.php';
//     Class_my_Deactivator::my_plugin_deactivate();
// }
// register_activation_hook( __FILE__, 'activate_my_plugin' );
// register_deactivation_hook( __FILE__, 'deactivate_my_plugin' );
//
//require plugin_dir_path( __FILE__ ) . 'includes/class-my-plugin.php';

function run_my_plugin() {
    $plugin = new My_Plugin\My_plugin();
    $plugin->run();
}
run_my_plugin();
