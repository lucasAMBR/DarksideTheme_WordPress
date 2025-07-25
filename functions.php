<?php

// FUNÇÕES
function darkside_theme_enqueue_styles() {
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script(
        'menu-toggle',
        get_template_directory_uri() . '/assets/js/mobile_navbar.js',
        array(),
        false,
        true 
    );
}

function darkside_theme_custom_navbar_styles() {
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/interactive_navbar.css');
}

function darkside_theme_register_menus() {
    register_nav_menus([
        "main-menu" => "Main Menu"
    ]);
}

function corrigir_classe_menu_home($classes, $item) {

    if (is_front_page()) {
        $home_url = home_url('/');
        $item_url = $item->url;

        if ($item_url !== $home_url) {
            $classes = array_diff($classes, ['current-menu-item', 'current_page_item']);
        }
    }

    return $classes;
}

function carregar_scripts_avaliacoes() {
    wp_enqueue_script(
        'avaliacoes-fake',
        get_template_directory_uri() . '/assets/js/fake_reviews.js',
        [],
        null,
        true
    );
}

add_action('template_redirect', function () {
  if (is_404()) {
    status_header(404);
    include get_template_directory() . '/404.php';
    exit;
  }
});

// HOOKS
add_action('wp_enqueue_scripts', 'darkside_theme_enqueue_styles');
add_action('wp_enqueue_scripts', 'darkside_theme_custom_navbar_styles');
add_action("after_setup_theme", "darkside_theme_register_menus");
add_filter('nav_menu_css_class', 'corrigir_classe_menu_home', 10, 2);
add_action('wp_enqueue_scripts', 'carregar_scripts_avaliacoes');
