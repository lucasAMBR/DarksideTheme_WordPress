<?php
function meu_tema_enqueue_styles() {
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'meu_tema_enqueue_styles');
