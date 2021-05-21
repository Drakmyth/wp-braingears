<?php
function enqueue_parent_styles() {
   wp_enqueue_style( 'braingears-style', get_stylesheet_uri(), array( 'seo-basic-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function inlinecode_shortcode($atts, $content = null) {
   return '<span class="inlinecode">'.$content.'</span>';
}

function note_shortcode($atts, $content = null) {
   return '<p class="post-note">'.$content.'</p>';
}

function braingears_do_shortcode_in_excerpt($excerpt) {
   return do_shortcode(wp_trim_words(get_the_content(), 55));
}

function braingears_on_init() {
   add_shortcode('il', 'inlinecode_shortcode');
   add_shortcode('note', 'note_shortcode');

   add_filter('get_the_excerpt', 'braingears_do_shortcode_in_excerpt');
}
add_action( 'init', 'braingears_on_init' );
?>