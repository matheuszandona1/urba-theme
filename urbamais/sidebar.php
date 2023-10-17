<?php if ( ((is_home() && !is_front_page()) || is_search() || is_archive()) && is_active_sidebar( 'banlat' )  ) : ?>
	<aside class="column-48 w-col w-col-4" id="banner-lateral">
		<?php dynamic_sidebar( 'banlat' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>

<?php if ( is_single() && is_active_sidebar( 'latpos' )  ) : ?>
	<aside class="column-3 w-col w-col-4" id="lateral-posts">
		<div class="div-siganos">
            <div class="text-block-32">Acompanhe a Urba nas redes sociais!</div>
            <div><a href="https://www.linkedin.com/company/urbaoficial" target="_blank" class="link-block w-inline-block"><img src="<?= get_stylesheet_directory_uri() ?>/images/redes-sociais_linkedin.png" width="40" alt=""></a><a href="https://www.instagram.com/urba.oficial/" target="_blank" class="link-block w-inline-block"><img src="<?= get_stylesheet_directory_uri() ?>/images/redes-sociais_instagram.png" width="40" alt=""></a><a href="https://www.facebook.com/urba.oficial/" target="_blank" class="link-block w-inline-block"><img src="<?= get_stylesheet_directory_uri() ?>/images/redes-sociais_facebook.png" width="40" alt=""></a><a href="https://twitter.com/oficial_urba" target="_blank" class="link-block w-inline-block"><img src="<?= get_stylesheet_directory_uri() ?>/images/redes-sociais_twitter.png" width="40" alt=""></a><a href="https://www.youtube.com/channel/UCt1EMsb15lZR9MUN2D_O9GA" target="_blank" class="link-block w-inline-block"><img src="<?= get_stylesheet_directory_uri() ?>/images/redes-sociais_youtube.png" width="40" alt=""></a></div>
        </div>
		<?php dynamic_sidebar( 'latpos' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>