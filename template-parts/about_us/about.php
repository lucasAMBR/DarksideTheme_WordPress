<section class="mt-6">
    <div class="text-gray-300 p-6 px-4 flex flex-col items-center">
        <h2 class="text-center text-3xl lg:text-5xl font-bold mb-8"><?php the_field('about_title'); ?></h2>
        <div class="flex lg:flex-row-reverse md:flex-col-reverse flex-col-reverse items-center max-w-[1280px]">
            <p class="lg:ml-4 lg:text-lg text-justify flex-1"><?php the_field('about_text'); ?></p>
            <img src="<?php the_field('about_image'); ?>" alt="Sobre nós" class="w-full lg:max-w-[600px] h-auto rounded-lg lg:mr-4 mb-4" />
        </div>
    </div>
</section>