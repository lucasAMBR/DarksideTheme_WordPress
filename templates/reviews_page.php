<?php
/*
Template Name: Reviews
*/
get_header();
?>

<main class="flex flex-col items-center">
    <h1 class="text-center text-white text-3xl lg:text-5xl font-bold mb-4 max-w-[1280px] p-4 mt-8 lg:p-0"><?php the_field('review_page_title'); ?></h1>
    <p class="lg:mx-4 lg:text-lg text-white text-justify flex-1 max-w-[1280px] p-4 lg:p-0 mb-4"><?php the_field('review_page_initial_text'); ?></p>

    <div id="avaliacoes-container" class="flex flex-wrap justify-center max-w-[1280px]"></div>

    <p class="lg:mx-4 lg:text-lg my-4 text-white text-justify flex-1 max-w-[1280px] p-4 lg:p-0"><?php the_field('review_page_final_text'); ?></p>
</main>

<?php get_footer(); ?>