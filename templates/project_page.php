<?php
/*
Template Name: Projetos
*/
get_header();
?>

<main>
    <section class="mt-6 flex flex-col justify-center items-center">
        <div class="text-gray-300 p-6 px-4 flex flex-col items-center max-w-[1280px]">
            <h1 class="text-center text-3xl lg:text-5xl font-bold mb-8"><?php the_field('project_page_title'); ?></h1>
            <p class="lg:mx-4 lg:text-lg text-justify flex-1"><?php the_field('project_page_initial_text'); ?></p>
        </div>
    </section>
    <section class="mt-6 bg-gray-900">
        <div class="text-gray-300 p-6 px-4 flex flex-col items-center">
            <h2 class="text-center text-3xl lg:text-5xl font-bold mb-8"><?php the_field('project_1_name'); ?></h2>
            <div class="flex lg:flex-row-reverse md:flex-col-reverse flex-col-reverse items-center max-w-[1280px]">
                <p class="lg:mx-4 lg:text-lg text-justify flex-1"><?php the_field('project_1_description'); ?></p>
                <img src="<?php the_field('project_1_image'); ?>" alt="Sobre nós" class="w-full lg:max-w-[600px] h-auto rounded-lg lg:mx-4 mb-4" />
            </div>
        </div>
    </section>
    <section class="mt-6">
        <div class="text-gray-300 p-6 px-4 flex flex-col items-center">
            <h2 class="text-center text-3xl lg:text-5xl font-bold mb-8"><?php the_field('project_2_name'); ?></h2>
            <div class="flex lg:flex-row md:flex-col-reverse flex-col-reverse items-center max-w-[1280px]">
                <p class="lg:mx-4 lg:text-lg text-justify flex-1"><?php the_field('project_2_description'); ?></p>
                <img src="<?php the_field('project_2_image'); ?>" alt="Sobre nós" class="w-full lg:max-w-[600px] h-auto rounded-lg lg:mx-4 mb-4" />
            </div>
        </div>
    </section>
        <section class="mt-6 bg-gray-900">
        <div class="text-gray-300 p-6 px-4 flex flex-col items-center">
            <h2 class="text-center text-3xl lg:text-5xl font-bold mb-8"><?php the_field('project_3_name'); ?></h2>
            <div class="flex lg:flex-row-reverse md:flex-col-reverse flex-col-reverse items-center max-w-[1280px]">
                <p class="lg:mx-4 lg:text-lg text-justify flex-1"><?php the_field('project_3_description'); ?></p>
                <img src="<?php the_field('project_3_image'); ?>" alt="Sobre nós" class="w-full lg:max-w-[600px] h-auto rounded-lg lg:mx-4 mb-4" />
            </div>
        </div>
    </section>
        <section class="mt-6 flex flex-col justify-center items-center">
        <div class="text-gray-300 p-6 px-4 flex flex-col items-center max-w-[1280px]">
            <p class="lg:mx-4 lg:text-lg text-justify flex-1"><?php the_field('project_page_final_text'); ?></p>
        </div>
    </section>
</main>

<?php get_footer(); ?>