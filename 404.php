<?php get_header(); ?>

<div class="flex flex-col items-center justify-center text-center min-h-screen bg-gray-100 p-8">
  <h1 class="text-6xl font-bold text-blue-600 mb-4">404</h1>
  <p class="text-xl text-gray-700 mb-6">Oops! A página que você está procurando não foi encontrada.</p>
  <a href="<?php echo home_url(); ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded transition">
    Voltar para a página inicial
  </a>
</div>

<?php get_footer(); ?>
