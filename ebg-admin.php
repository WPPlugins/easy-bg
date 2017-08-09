<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function ebg_color_script(){
wp_enqueue_script( 'colorScript', plugins_url('js/jscolor.js',__FILE__) ); 
}
function ebg_table_style(){
wp_enqueue_style( 'tableStyle', plugins_url('css/ts.css',__FILE__) ); 
}
add_action( 'admin_enqueue_scripts', 'ebg_color_script' );
add_action( 'admin_enqueue_scripts', 'ebg_table_style' );
function ebg_menu(){
add_menu_page('Easy BG','Easy BG','manage_options','ebgmenu','ebg_settings_page',plugins_url('imgs/menuicon.png',__FILE__));
}
function ebg_settings_page(){
?>
<h2 style="text-align:center; font-weight:bold;">Easy BG</h2>
<form method="post" action="options.php">
<?php
wp_nonce_field('update-options');
settings_fields('ebg_settings_group');
?>
<div style="width:98.5%;">
	<table  class="widefat" style="width:100% !important;">
		<thead>
			<tr>
				<th colspan="5">
					<span style=" font-size:16px;">Easy BG Settings</span>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row" style="border-bottom-width:0px !important; width:125px;">
					Background Color
				</th>
				<td colspan="4">
					<input style="border:1px solid #ccc; width:53%;" name="ebg_color" class="color" value="<?php echo get_option('ebg_color'); ?>"> 
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="5" >
					<input type="submit" class="button-primary"  value="Save Changes">
				</th>
			</tr>
		</tfoot>
	</table>
</div>
<?php
}