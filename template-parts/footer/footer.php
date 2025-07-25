<div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-white">

    <div>
      <h3 class="text-xl font-semibold mb-4">Contato</h3>
      <p class="text-sm"><?php the_field('enterprise_name', get_option('page_on_front')); ?> Ltda.</p>
      <p class="text-sm"><?php the_field('complete_location', get_option('page_on_front')); ?></p>
      <p class="text-sm mt-2"><?php the_field('telephone', get_option('page_on_front')); ?></p>
      <p class="text-sm"><?php the_field('contact_email', get_option('page_on_front')); ?></p>
    </div>

    <div>
      <h3 class="text-xl font-semibold mb-4">Links</h3>
      <ul class="space-y-2 text-sm">
        <li><a target="_blank" href="<?php the_field('link_1_url', get_option('page_on_front')); ?>" class="hover:underline"><?php the_field('link_1_text', get_option('page_on_front')); ?></a></li>
        <li><a target="_blank" href="<?php the_field('link_2_url', get_option('page_on_front')); ?>" class="hover:underline"><?php the_field('link_2_text', get_option('page_on_front')); ?></a></li>
        <li><a target="_blank" href="<?php the_field('link_1_url', get_option('page_on_front')); ?>" class="hover:underline"><?php the_field('link_3_text', get_option('page_on_front')); ?></a></li>
      </ul>
    </div>

    <div>
      <h3 class="text-xl font-semibold mb-4">Redes Sociais</h3>
      <ul class="flex space-x-4">
        <li>
          <a target="_blank" href="#" aria-label="Instagram" class="hover:text-pink-400 transition">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
              <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zM12 7a5 5 0 100 10 5 5 0 000-10zm6.5-.5a1 1 0 11-2 0 1 1 0 012 0zM12 9a3 3 0 110 6 3 3 0 010-6z"/>
            </svg>
          </a>
        </li>
        <li>
          <a target="_blank" href="#" aria-label="LinkedIn" class="hover:text-blue-400 transition">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
              <path d="M19 0h-14c-2.8 0-5 2.2-5 5v14c0 2.8 2.2 5 5 5h14c2.8 0 5-2.2 5-5v-14c0-2.8-2.2-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.4c-1 0-1.8-.8-1.8-1.8S5.5 4 6.5 4s1.8.8 1.8 1.8-.8 1.8-1.8 1.8zM20 19h-3v-5.6c0-1.3-.5-2.2-1.7-2.2-.9 0-1.4.6-1.7 1.2-.1.3-.1.8-.1 1.2V19h-3v-10h3v1.2c.4-.7 1.2-1.6 2.9-1.6 2.1 0 3.6 1.4 3.6 4.4V19z"/>
            </svg>
          </a>
        </li>
        <li>
          <a target="_blank" href="#" aria-label="Facebook" class="hover:text-blue-500 transition">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
              <path d="M22.7 0H1.3C.6 0 0 .6 0 1.3v21.3C0 23.4.6 24 1.3 24H12V14.7h-3v-3.6h3V8.4c0-3 1.8-4.6 4.5-4.6 1.3 0 2.5.1 2.8.1v3.3h-1.9c-1.5 0-1.8.7-1.8 1.8v2.3h3.6l-.5 3.6h-3.1V24h6.1c.7 0 1.3-.6 1.3-1.3V1.3c0-.7-.6-1.3-1.3-1.3z"/>
            </svg>
          </a>
        </li>
      </ul>
    </div>

  </div>

  <div class="text-center text-sm text-gray-400 mt-8">
    © 2025 <?php the_field('enterprise_name', get_option('page_on_front')); ?>. Todos os direitos reservados.
  </div>

