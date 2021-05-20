<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'braingears-style', get_stylesheet_uri(), array( 'seo-basic-style' ), wp_get_theme()->get('Version') );
}

function inlinecode_shortcode($atts, $content = null) {
   return '<span class="inlinecode">'.$content.'</span>';
}
add_shortcode('il', 'inlinecode_shortcode');

function note_shortcode($atts, $content = null) {
   return '<p class="post-note">'.$content.'</p>';
}
add_shortcode('note', 'note_shortcode');
?>