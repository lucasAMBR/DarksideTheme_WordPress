<section class="text-white flex flex-col items-center my-6">
        <h2 class="text-center text-3xl lg:text-5xl font-bold mb-8">Nossos Serviços</h2>
        <div class="text-gray-300 px-4 lg:px-0 flex flex-col lg:flex-row justify-between items-center items-stretch  max-w-[1280px]">
            <div style="flex: 1" class="bg-gray-800 mb-2 lg:mr-2 flex flex-col justify-center items-center p-4 rounded-lg hover:bg-gray-600">
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
            <div style="flex: 1" class="bg-gray-800 mb-2 lg:mr-2 flex flex-col justify-center items-center p-4 rounded-lg hover:bg-gray-600">
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
            <div style="flex: 1" class="bg-gray-800 mb-2 lg:mr-2 flex flex-col justify-center items-center p-4 rounded-lg hover:bg-gray-600">
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