<?php

function firstTheme_load() {
    wp_enqueue_style('firstTheme_sytle', get_stylesheet_uri(), array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'firstTheme_load' );

?>