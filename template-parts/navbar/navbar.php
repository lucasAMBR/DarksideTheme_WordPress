<div class="w-full p-4 flex flex-row justify-between items-center lg:py-4 max-w-[1280px]">
    <span class="text-blue-600 font-bold text-xl flex-1 lg:flex-none"><?php bloginfo("name"); ?></span>
    <?php get_template_part("template-parts/navbar/components/mobile_menu"); ?>
    <?php get_template_part("template-parts/navbar/components/desktop_menu"); ?>
    <a href="<?php the_field('nav_button_url'); ?>"><button type="button" class="bg-blue-600 p-2 text-white font-semibold border-blue-600 rounded-sm hover:bg-white hover:text-blue-600 transition-colors  duration-200 hidden lg:flex"><?php the_field('nav_button_text'); ?></button></a>
</div>