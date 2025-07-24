<?php
get_header();
?>

<?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      the_title('<h1 class="text-3xl font-bold mb-4">', '</h1>');
      the_content();
    endwhile;
  else :
    echo '<p>Conteúdo não encontrado.</p>';
  endif;
?>

<?php
get_footer();