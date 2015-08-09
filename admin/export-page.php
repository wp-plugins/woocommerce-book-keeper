<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div class="wrap">
<h2><?php _e( 'Meow Woocommerce Book Keeper' , 'mw-wae-i18n'); ?></h2>

<h3><?php _e( 'Export settings' , 'mw-wae-i18n'); ?></h3>
<p><?php _e( 'More features ? ' , 'mw-wae-i18n'); ?><a href="http://woocommerce-book-keeper.com/shop/woocommerce-book-keeper-expert/" target="_blank"><?php _e( 'Check our Expert version !' , 'mw-wae-i18n'); ?></a></p>
<p><?php _e( 'Configure your export and export completed orders.' , 'mw-wae-i18n'); ?></p>

<!--Permet de transformer les champs avec la class custom_date en datepicker.-->
<script type="text/javascript">
jQuery(document).ready(function($) {
$(' .custom_date').datepicker({
dateFormat :'yy-mm-dd'
});
});
</script>
<!--Formulaire-->
<form method="post" action="admin-post.php">
<!--triggering for action-->
<input type="hidden" name="action" value="mw_wae_export" />
<!-- Ajoute Nonce -->
<?php wp_nonce_field('check_nonce_export','_check_export'); ?>

<table width="90%">
<tr>
<td width="200">
<h3><?php _e( 'Period to be exported' , 'mw-wae-i18n'); ?></h3>
<tr valign="middle">
<td width="50">
<input type="text" class="custom_date" name="mw_wae_export_start_date" id="mw_wae_export_start_date" placeholder="<?php _e( 'Start', 'mw-wae-i18n'); ?>" value="<?php echo esc_attr(get_option('mw_wae_export_start_date')); ?>"/>
</td>
<td width="50">
<input type="text" class="custom_date" name="mw_wae_export_end_date" id="mw_wae_export_end_date" placeholder="<?php _e( 'End', 'mw-wae-i18n'); ?>" value="<?php echo esc_attr(get_option('mw_wae_export_end_date')); ?>"/>
</td>
<tr></tr>
<td width="200">
<h3><?php _e( 'Separator' , 'mw-wae-i18n'); ?></h3>
</td>
<tr valign="middle">
<td width="50">
<select name="mw_wae_export_separator" id="mw_wae_export_separator"/>
<option value="," <?php $check_mw_wae_sep = get_option('mw_wae_export_separator'); if ($check_mw_wae_sep == ",") {echo 'selected';}?> > <?php _e( 'Comma' , 'mw-wae-i18n'); ?> </option>
<option value=";" <?php $check_mw_wae_sep = get_option('mw_wae_export_separator'); if ($check_mw_wae_sep == ";") {echo 'selected';}?> > <?php _e( 'Semi-Colon' , 'mw-wae-i18n'); ?> </option>
<option value="t" <?php $check_mw_wae_sep = get_option('mw_wae_export_separator'); if ($check_mw_wae_sep == "t") {echo 'selected';}?> > <?php _e( 'Tab' , 'mw-wae-i18n'); ?> </option>
</select>
<td width="200">
<?php submit_button( __( 'Export!' , 'mw-wae-i18n' ) ); ?>

</td>
</tr>
</table>
</div>
</form>