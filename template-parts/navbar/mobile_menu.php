<button class="p-2 bg-blue-600 text-white flex lg:hidden" id="menu-toggle">
    <div class="flex justify-center items-center">
        <?php include get_template_directory() . "/assets/svg/menu_bars.php"; ?>
    </div>
</button>
<!-- Sidebar (inicialmente escondido) -->
<aside id="sidebar" class="fixed top-0 left-0 h-full w-3/4 md:w-64 bg-gray-800 text-white transform -translate-x-full transition-transform duration-300 z-50 lg:hidden">
  <button id="close-menu" class="font-semibold px-2 py-4">< Fechar</button>
    <?php
        wp_nav_menu([
            'theme-location' => "main-menu",
            "container" => "nav",
            "menu_class" => "space-y-2",
            'link_before' => '<span class="mx-4 text-white font-semibold p-6">',  // opcional
            'link_after' => '</span>',     
        ])
?>
</aside>