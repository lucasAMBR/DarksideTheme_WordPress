<?php get_header(); ?>

<main class="flex flex-col box-border">

    <section 
        style="background-image: url('<?php the_field('banner_image'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 90vh;"
        class="w-full text-white overflow-hidden"
    >
        <div class="w-full h-full bg-black bg-opacity-70 flex flex-col p-4 lg:px-12 justify-center items-center lg:items-start text-center lg:text-left">
            <h1 class="text-5xl font-bold text-blue-600"><?php the_field('banner_title'); ?></h1>
            <p class="mt-4 text-lg max-w-3xl"><?php the_field('banner_text'); ?></p>
            <a href="<?php the_field('button_url'); ?>" 
               class="flex justify-center items-center mt-6 bg-blue-600 hover:bg-white hover:text-blue-600 transition-colors duration-200 text-white px-6 py-2 rounded max-w-xs">
                <?php the_field('button_text'); ?>
            </a>
        </div>
    </section>

    <section>
        <div class="text-gray-300 p-6 px-12">
            <h2 class="text-center text-3xl lg:text-5xl font-bold mb-8"><?php the_field('about_title'); ?></h2>
            <div class="flex lg:flex-row  flex-col-reverse items-center">
            <p class="lg:mr-4 lg:text-lg text-justify"><?php the_field('about_text'); ?></p>
            <img src="<?php the_field('about_image'); ?>" alt="Sobre nós" class="mx-auto max-w-full h-auto rounded-lg shadow-md lg:ml-4 mb-4" />
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
