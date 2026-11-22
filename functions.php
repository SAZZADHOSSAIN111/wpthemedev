<?php

function firstTheme_load() {
    wp_enqueue_style('firstTheme_sytle', get_stylesheet_uri(), array(), '1.0', 'all');
}

wp_enqueue_style("google_Fonts", 'https://fonts.googleapis.com/css2?family=BBH+Bogle&display=swap', array(), null, "all",);
add_action('wp_enqueue_scripts', 'firstTheme_load' );

?>