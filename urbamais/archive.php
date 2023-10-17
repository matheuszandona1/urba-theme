  <?php get_header(); ?>
  <div class="section-posts">
    <?= get_search_form(); ?>
    <div class="container-padrao-2">      
      <div class="w-row">
        <div class="column-2 w-col w-col-8">
          <h2 class="heading-14">Posts da Categoria <strong class="destaque-h2"><?php single_cat_title(); ?></strong></h2>
          <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-3 w-slider">
            <div class="w-slider-mask">
              <div class="slide-5 w-slide">
                <?php 
                  $page = (get_query_var('paged')) ? get_query_var('paged') : 1;                  
                  $pp_page = $wp_query->query_vars['posts_per_page'];                  
                  $offset = ($pp_page * ($page - 1 ));         
                  $currentCategory = get_queried_object();
                  $args = array('post_type'=>'post', 
                          'post_status'=>'publish',
                          'posts_per_page'=> $pp_page, // As per the post below you need to have a set number of posts.
                          'page' => $page,
                          'category_name' => $currentCategory->slug,
                          'offset' => $offset,
                          'ignore_sticky_posts' => true,
                      );                          
                      $wpb_all_query = new WP_Query($args); ?>
                      <?php if ( $wpb_all_query->have_posts() ){
                        while($wpb_all_query->have_posts() ){
                          $wpb_all_query->the_post();
                      ?>
                      <div class="post-anterior w-clearfix">
                        <h3 class="titulo-post-anterior"><?php the_title();?></h3><a href="<?php echo the_permalink();?>" class="button-8 w-button">leia agora</a>
                        <div class="autor"><?= get_the_author() ?></div>
                        <div class="data-publicacao"><?php echo get_the_date(); ?></div>
                      </div>                    
                    <?php   
                  }
                }                
                wp_reset_query();
                wp_reset_postdata();  
              ?>
              </div>
            </div>
            <div class="left-arrow w-slider-arrow-left">
              <?php previous_posts_link( '<div class="w-icon-slider-left"></div>' ); ?> 
            </div>
            <?php if (wp_count_posts('post')->publish > ($offset + $pp_page)){
              echo '<div class="right-arrow w-slider-arrow-right">';           
              next_posts_link( '<div class="w-icon-slider-right"></div>');
              echo '</div>';
            }?>            
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>