<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/*
Plugin Name: Meow Woocommerce Book Keeper
Plugin URI: http://www.meow-com.com
Text Domain: mw-mwae-exporter
Description: The basic CSV Exporter from Woocommerce Orders to accounting softwares. Does exist in other versions with more options.
Author: Ro_meow
Author URI: http://www.b-sider.fr
Version: 1.00
*/

/*  Copyright 2014  Roman CASSANAS  (email : contact@meow-com.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2 and later, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

/*******ETAPE PRELIMINAIRE : VERIFICATIONS*******/

// Vérifier la présence de Woocommerce
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	
//Create the admin pages links
function mw_wae_exporter_page() {
add_menu_page ('Book Keeper', 'Book Keeper', 'manage_options', 'mw-wae-exporter', 'mw_wae_exporter_admin','dashicons-book-alt',59.6);
add_submenu_page ('mw-wae-exporter', __( 'Export' , 'mw-wae-i18n' ), __( 'Export' , 'mw-wae-i18n' ), 'manage_options','mw_wae_exporter_export','mw_wae_exporter_export');
add_submenu_page ('mw-wae-exporter', __( 'General Settings' , 'mw-wae-i18n' ), __( 'General Settings' , 'mw-wae-i18n' ), 'manage_options', 'mw_wae_exporter_param', 'mw_wae_exporter_param');
//translation
load_plugin_textdomain( 'mw-wae-i18n', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

}

//Créer les pages et tester les droits d'accès
function mw_wae_exporter_admin() {
	if (! current_user_can('manage_options'))  {
    wp_die( __('Droits insuffisants !!!') );
  }
require( dirname(__FILE__).'/admin/welcome-page.php');
}

function mw_wae_exporter_export() {
	if (! current_user_can('manage_options')) {
	wp_die ( __('Droits insuffisants !!!') );
}
require ( dirname(__FILE__).'/admin/export-page.php');
}

function mw_wae_exporter_param() {
	if (! current_user_can('manage_options')) {
	wp_die ( __('Droits insuffisants !!!') );
}
require ( dirname(__FILE__).'/admin/admin-page.php');
}


//Call for functions
function mw_wae_inc() {
			include( plugin_dir_path( __FILE__ ) . 'admin/settings.php' );
			include( plugin_dir_path( __FILE__ ) . 'inc/export.php' );
}

//action for includes
add_action( 'admin_init', 'mw_wae_inc' );

//Add the admin menu pages
add_action ('admin_menu', 'mw_wae_exporter_page');

//actions for settings function
add_action( 'admin_init', 'register_mw_wae_settings' );
add_action( 'admin_init', 'register_mw_wae_export_settings' );

//actions for export
add_action('admin_post_mw_wae_export','mw_wae_export_data');
    
}


?>