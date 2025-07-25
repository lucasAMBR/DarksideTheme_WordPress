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
        <?php get_template_part("template-parts/navbar/navbar"); ?>
    </header>