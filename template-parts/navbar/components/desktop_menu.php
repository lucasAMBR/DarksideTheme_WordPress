<?php
    wp_nav_menu([
        'theme-location' => "main-menu",
        "container" => "nav",
        "menu_class" => "hidden lg:flex",
        'link_before' => '<span class="mx-4 text-white font-semibold">',  // opcional
        'link_after' => '</span>',     
    ])
?>