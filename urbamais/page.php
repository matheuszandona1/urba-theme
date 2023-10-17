<?php get_header(); ?>
<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post(); ?>
			<div class="hero-internas padrao" style="max-height:460px; background:url(<?=get_the_post_thumbnail_url()?>) no-repeat top right; background-size:contain;">
			    <div class="container-padrao">
			      <div class="div-text-hero">
			        <h1 class="heading sobre"><?=get_the_title()?></h1>
			      </div>
			    </div>
			</div>
			<div class="conteudo">
    			<div class="container-padrao">
    				<?php the_content() ?>
    			</div>
    		</div>
			<?php
		}
	}

	?>
<?php get_footer(); ?>