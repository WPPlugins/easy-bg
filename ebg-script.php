<?php

function ebg_footer(){
wp_enqueue_script( 'applyScript', plugins_url('js/apply.js',__FILE__) ); 
    $bg_color = '#' . get_option('ebg_color');
$ebgApplyData = array(
    'ebg_color' => $bg_color,
);
wp_localize_script( 'applyScript', 'ebg_php_vars', $ebgApplyData );
}