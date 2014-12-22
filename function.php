<?php
 
add_action( 'admin_head', 'cwp_admin_fav' );
 
function cwp_admin_fav() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_bloginfo('template_directory') . '/images/admin-favicon.ico" />';
}
 
 
?>
