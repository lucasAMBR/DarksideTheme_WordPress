<section 
        style="background-image: url('<?php the_field('banner_image'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 90vh;"
        class="w-full text-white overflow-hidden"
    >
        <div class="w-full h-full bg-black bg-opacity-70 flex flex-col p-4 lg:px-12 justify-center items-center lg:items-center text-center lg:text-left">
            <div class="flex flex-col w-full max-w-[1280px] justify-center items-center lg:items-start text-center lg:text-left">
                <h1 style="max-width: 600px" class="text-3xl lg:text-5xl font-bold text-blue-600"><?php the_field('banner_title'); ?></h1>
                <p class="mt-4 text-lg max-w-3xl"><?php the_field('banner_text'); ?></p>
                <a href="<?php the_field('banner_button_url'); ?>" 
                class="flex justify-center items-center mt-6 bg-blue-600 hover:bg-white hover:text-blue-600 transition-colors duration-200 text-white px-6 py-2 rounded max-w-xs">
                    <?php the_field('button_text'); ?>
                </a>
            </div>
        </div>
    </section>