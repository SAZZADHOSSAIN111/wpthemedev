<?php

function firstTheme_load() {
    wp_enqueue_style('firstTheme_sytle', get_stylesheet_uri(), array(), '1.0', 'all');

    wp_enqueue_style("google_Fonts", 'https://fonts.googleapis.com/css2?family=BBH+Bogle&display=swap', array(), null, "all",);

    wp_enqueue_script( 'Js_dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );

}

add_action('wp_enqueue_scripts', 'firstTheme_load' );

register_nav_menus(
    array(
        "firstTheme_main_menu"=> "Main Menu",
        "firstTheme_footer_menu"=> "Footer Menu",
    )

)
?>