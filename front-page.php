<?php get_header(); ?>

<main class="flex flex-col box-border">

    <section 
        style="background-image: url('<?php the_field('banner_image'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 90vh;"
        class="w-full text-white overflow-hidden"
    >
        <div class="w-full h-full bg-black bg-opacity-70 flex flex-col p-4 lg:px-12 justify-center items-center lg:items-center text-center lg:text-left">
            <div class="flex flex-col w-full max-w-[1280px] justify-center items-center lg:items-start text-center lg:text-left">
                <h1 style="max-width: 600px" class="text-3xl lg:text-5xl font-bold text-blue-600"><?php the_field('banner_title'); ?></h1>
                <p class="mt-4 text-lg max-w-3xl"><?php the_field('banner_text'); ?></p>
                <a href="<?php the_field('button_url'); ?>" 
                class="flex justify-center items-center mt-6 bg-blue-600 hover:bg-white hover:text-blue-600 transition-colors duration-200 text-white px-6 py-2 rounded max-w-xs">
                    <?php the_field('button_text'); ?>
                </a>
            </div>
        </div>
    </section>

    <section>
        <div class="text-gray-300 p-6 px-12 flex flex-col items-center">
            <h2 class="text-center text-3xl lg:text-5xl font-bold mb-8"><?php the_field('about_title'); ?></h2>
            <div class="flex lg:flex-row-reverse md:flex-col-reverse flex-col-reverse items-center max-w-[1280px]">
                <p class="lg:ml-4 lg:text-lg text-justify flex-1"><?php the_field('about_text'); ?></p>
                <img 
                    src="<?php the_field('about_image'); ?>" 
                    alt="Sobre nós" 
                    class="w-full lg:max-w-[600px] h-auto rounded-lg lg:mr-4 mb-4" 
                />
            </div>
        </div>
    </section>


    <section class="text-white flex flex-col items-center">
        <h2 class="text-center text-3xl lg:text-5xl font-bold mb-6">Nossos Serviços</h2>
        <div class="text-gray-300 px-4 lg:px-0 flex flex-col lg:flex-row justify-between items-center items-stretch  max-w-[1280px]">
            <div style="flex: 1" class="bg-gray-800 mb-2 lg:mr-2 flex flex-col justify-center items-center p-4">
                <div class="w-28 h-28 bg-white rounded-full flex justify-center items-center">
                    <img 
                        src="<?php echo get_field('service_icon_1'); ?>" 
                        alt="Ícone do serviço" 
                        class="w-16 h-16"
                    />
                </div>
                <h3 style="max-width: 350px" class="text-xl my-2 font-semibold text-center">
                    <?php the_field('service_title_1'); ?>
                </h3>
                <p class="text-center text-sm"> <?php the_field('service_description_1'); ?></p>
            </div>
            <div style="flex: 1" class="bg-gray-800 mb-2 lg:mr-2 flex flex-col justify-center items-center p-4">
                <div class="w-28 h-28 bg-white rounded-full flex justify-center items-center">
                    <img 
                        src="<?php echo get_field('service_icon_2'); ?>" 
                        alt="Ícone do serviço" 
                        class="w-16 h-16"
                    />
                </div>
                <h3 style="max-width: 350px" class="text-xl my-2 font-semibold text-center">
                    <?php the_field('service_title_2'); ?>
                </h3>
                <p class="text-center text-sm"> <?php the_field('service_description_2'); ?></p>
            </div>
            <div style="flex: 1" class="bg-gray-800 mb-2 lg:mr-2 flex flex-col justify-center items-center p-4">
                <div class="w-28 h-28 bg-white rounded-full flex justify-center items-center">
                    <img 
                        src="<?php echo get_field('service_icon_3'); ?>" 
                        alt="Ícone do serviço" 
                        class="w-16 h-16"
                    />
                </div>
                <h3 style="max-width: 350px" class="text-xl my-2 font-semibold text-center">
                    <?php the_field('service_title_3'); ?>
                </h3>
                <p class="text-center text-sm"> <?php the_field('service_description_3'); ?></p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
