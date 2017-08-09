<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
function ebg_install(){
add_option('ebg_color','ffffff');

}

function ebg_deactivate(){
delete_option('ebg_color');
}