<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'braingears-style', get_stylesheet_uri(), array( 'seo-basic-style' ), wp_get_theme()->get('Version') );
}
?>