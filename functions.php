<?php
//* Code goes here


// This grabs styles from parent theme
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/library/css/style.css' );
}

?>