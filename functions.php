<?php

function firstTheme_enqueustyle() {
    wp_enqueue_style('firsttheme_sytle', get_stylesheet_uri(), arrray(), '1.0', 'all');
}

add_action("wp_enqueue_style", 'firstTheme_enqueustyle' );

?>