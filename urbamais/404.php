<?php
/*
Template Name: Página 404
*/
?>
<?php get_header(); ?>
  <div class="hero-internas venda" style="background-image: url(<?=get_stylesheet_directory_uri()?>/images/404.jpg);">
    <div class="container-padrao">
      <div class="div-text-hero venda">
        <h1 class="heading venda">Erro 404<br><strong class="bold-text-17">Página não encontrada</strong>.<br></h1><a href="<?php echo home_url( '/' ); ?>" class="button-5 w-button">Acesse nossa home</a></div>
    </div>
  </div>
  <?php get_footer(); ?>