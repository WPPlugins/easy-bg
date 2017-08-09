<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php
function ebg_settings(){
register_setting('ebg_settings_group','ebg_color');
}

function ebg_register_settings(){
register_setting('ebg_settings_group','ebg_color');
}

register_activation_hook(__FILE__,'ebg_install');
register_deactivation_hook(__FILE__,'ebg_deactivate');
add_action('wp_footer','ebg_footer');
add_action('admin_menu','ebg_menu');
add_action('admin_init','ebg_settings');