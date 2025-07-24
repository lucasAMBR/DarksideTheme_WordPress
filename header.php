<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class("bg-neutral-900"); ?>>
    <header class="flex items-center justify-center">
        <div class="w-full p-4 flex flex-row justify-between items-center lg:py-4 lg:px-8 max-w-[1280px]">
            <span class="text-blue-600 font-bold text-xl flex-1 lg:flex-none"><?php bloginfo("name"); ?></span>
            <?php get_template_part("template-parts/navbar/mobile_menu"); ?>
            <?php get_template_part("template-parts/navbar/desktop_menu"); ?>
            <button type="button" class="bg-blue-600 p-2 text-white font-semibold border-blue-600 rounded-sm hover:bg-white hover:text-blue-600 transition-colors  duration-200 hidden lg:flex">Contact us</button>
        </div>
    </header>