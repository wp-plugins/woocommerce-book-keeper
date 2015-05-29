<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function register_mw_wae_settings() {
//register our settings

add_option( 'mw_wae_generic_tax_accounting_account');
add_option( 'mw_wae_generic_fdp_accounting_account');
add_option( 'mw_wae_generic_cust_accounting_account');
add_option( 'mw_wae_generic_prod_accounting_account');
add_option( 'mw_wae_book_code_order');

register_setting( 'mw-wae-settings-group', 'mw_wae_generic_tax_accounting_account', 'sanitize_text_field' );
register_setting( 'mw-wae-settings-group', 'mw_wae_generic_fdp_accounting_account', 'sanitize_text_field' );
register_setting( 'mw-wae-settings-group', 'mw_wae_generic_cust_accounting_account', 'sanitize_text_field' );
register_setting( 'mw-wae-settings-group', 'mw_wae_generic_prod_accounting_account', 'sanitize_text_field' );
register_setting( 'mw-wae-settings-group', 'mw_wae_book_code_order', 'sanitize_text_field');
}

function register_mw_wae_export_settings() {
//register our export settings
add_option( 'mw_wae_export_start_date');
add_option( 'mw_wae_export_end_date');
add_option( 'mw_wae_export_separator');
register_setting( 'mw-wae-export-settings-group', 'mw_wae_export_start_date','sanitize_text_field' );
register_setting( 'mw-wae-export-settings-group', 'mw_wae_export_end_date','sanitize_text_field' );
register_setting( 'mw-wae-export-settings-group', 'mw_wae_export_separator','sanitize_text_field' );
//enqueue Jquery

wp_enqueue_script('jquery-ui-datepicker');
wp_register_style('jquery-ui-css', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
wp_enqueue_style('jquery-ui-css');
} 

?>