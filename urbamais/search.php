  
 <?php get_header(); ?>

  <div class="section-posts">

    <?= get_search_form(); ?>

    <div class="container-padrao-2">    

      <div class="w-row">

        <div class="column-2 w-col w-col-8">

          <h2 class="heading-14"><?php printf( __( 'Resultados para: %s', 'urbamais' ), '<strong class="destaque-h2">' . esc_html( get_search_query() ) . '</strong>' ); ?></strong></h2>

          <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-3 w-slider">

            <div class="w-slider-mask">

              <div class="slide-5 w-slide">

                <?php if ( have_posts()) {

                  while ( have_posts() ) : the_post(); ?>

                      <div class="post-anterior w-clearfix">

                        <h3 class="titulo-post-anterior"><?php the_title();?></h3><a href="<?php if (get_post_type() === 'documentos-urba'){                        
                        echo the_field('arquivo_do_documento');}else{echo the_permalink();}?>" class="button-8 w-button">leia agora</a>

                        <!--<div class="autor"><?= get_the_author() ?></div>

                        <div class="data-publicacao"><?php echo get_the_date(); ?></div>-->

                      </div>                    

                    <?php   

                  endwhile;

                } else {

                  echo "<p class='text-block-21'>Nenhum post até o momento</p>";

                }

              ?>

              </div>

            </div>

            <div class="left-arrow w-slider-arrow-left">

              <?php previous_posts_link( '<div class="w-icon-slider-left"></div>' ); ?> 

            </div>

            <?php 

              echo '<div class="right-arrow w-slider-arrow-right">';           

              next_posts_link( '<div class="w-icon-slider-right"></div>');

              echo '</div>';

            ?>            

          </div>

        </div>

        <?php get_sidebar(); ?>

      </div>

    </div>

  </div>

  <?php get_footer(); ?>