<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div class="wrap">
<h2><?php _e( 'Meow Woocommerce Book Keeper' , 'mw-wae-i18n'); ?></h2>
<?php
  if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] == "true" )
  {
?>
   <div id='message' class='updated fade'><p><strong>Vos réglages ont bien été enregistrés.</strong></p></div>
<?php
 }
?>
<h3><?php _e( 'Settings' , 'mw-wae-i18n' ); ?></h3>
<p> <?php _e( 'Please enter the following data:' , 'mw-wae-i18n' ); ?></p>
<p><i><?php _e( 'This version of the plugin only allows to use generic accounts.' , 'mw-wae-i18n' ); ?></i></p>
<form method="post" action="options.php">

<!-- Ajoute 2 champs cachés pour savoir comment rediriger l'utilisateur -->
<?php settings_fields( 'mw-wae-settings-group' );?>
<table width="90%">
<tr>
<td width="200">
<h3><?php _e( 'Products' , 'mw-wae-i18n' ); ?></h3>
</td>
</tr>
<!--Compte pour les nouveaux produits-->
<tr valign="middle">
<th width="150" scope="row"><label for="mw_wae_generic_prod_accounting_account"><?php _e( 'Account code - Product' , 'mw-wae-i18n' ); ?></label></th>
<td width="50">
<input type="text" name="mw_wae_generic_prod_accounting_account" id="mw_wae_generic_prod_accounting_account" placeholder="ex : 707" value="<?php echo esc_attr(get_option('mw_wae_generic_prod_accounting_account')); ?>" /><br/><span class="description"></span>
</td>

</tr>
<tr>
<td width="200">
<h3><?php _e( 'Customers' , 'mw-wae-i18n' ); ?></h3>
</td>
</tr>
<!--Compte pour les nouveaux clients-->
<tr valign="middle">
<th width="150" scope="row"><label for="mw_wae_generic_cust_accounting_account"><?php _e( 'Account code - Customer' , 'mw-wae-i18n' ); ?></label></th>
<td width="50">
<input type="text" name="mw_wae_generic_cust_accounting_account" id="mw_wae_generic_cust_accounting_account" placeholder="ex : 411COM" value="<?php echo esc_attr(get_option('mw_wae_generic_cust_accounting_account')); ?>" /><br/>
</td>

</tr>
<tr valign="middle">
<tr>
<td width="200">
<h3><?php _e( 'Taxes and delivery options' , 'mw-wae-i18n' ); ?></h3>
</td>
</tr>
<!--Comptes de Taxe et Frais de Port-->
<th width="150" scope="row"><label for="mw_wae_generic_tax_accounting_account"><?php _e( 'Account code - Tax' , 'mw-wae-i18n' ); ?></label></th>
<td width="50">
<input type="text" name="mw_wae_generic_tax_accounting_account" id="mw_wae_generic_tax_accounting_account" placeholder="ex : 445" value="<?php echo esc_attr(get_option('mw_wae_generic_tax_accounting_account')); ?>" />
</td>

<th width="150" scope="row"><label for="mw_wae_generic_fdp_accounting_account"><?php _e( 'Account code - Delivery options' , 'mw-wae-i18n' ); ?></label></th>
<td width="50">
<input type="text" name="mw_wae_generic_fdp_accounting_account" id="mw_wae_generic_fdp_accounting_account" placeholder="ex : 708" value="<?php echo esc_attr(get_option('mw_wae_generic_fdp_accounting_account')); ?>" />
</td>
</tr>

<tr>
<td width="200">
<h3><?php _e( 'Journal reference number' , 'mw-wae-i18n' ); ?></h3>
</td>
</tr>
<!--Code Journal-->
<th width="150" scope="row"><label for="mw_wae_book_code_order"><?php _e( 'Sales journal reference number' , 'mw-wae-i18n' ); ?></label></th>
<td width="50">
<input type="text" name="mw_wae_book_code_order" id="mw_wae_book_code_order" placeholder="ex : VT" value="<?php echo esc_attr(get_option('mw_wae_book_code_order')); ?>" />
</td>
</tr>
<tr valign="top">
<th width="150" scope="row"></th>
<td width="50">
</td>
</tr>
<!--Préfixe de Libellé-->	
<tr valign="top">
<th width="150" scope="row"></th>
<td width="50">
</td>
</tr>
</table>
<!-- Bouton de sauvegarde -->
<p>
<?php submit_button( __( 'Save' , 'mw-wae-i18n' ) ); ?>
</p>

</form>

</div>