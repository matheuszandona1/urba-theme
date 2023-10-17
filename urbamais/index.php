  <?php get_header(); ?>
  <div class="section-posts">
    <?= get_search_form(); ?>
    <div class="container-padrao-2">
      <?php
            $args = array( 'post_type'=>'post', 'post_status'=>'publish','numberposts' => '5', 'order' => 'DESC', 'orderby' => 'date');
            $recent_posts = wp_get_recent_posts( $args );
            $postsnum = count($recent_posts);
            foreach( $recent_posts as $key=>$recent ){
                $post_categories = get_the_category($recent['ID']);
                if ( ! empty( $post_categories ) ) { $post_category = esc_html( $post_categories[0]->name );} else {$post_category = "";}
                $post_thumbnail_id = intval(get_post_thumbnail_id( $recent['ID'] ));
                $array_thumbnail = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail_size');
                if($array_thumbnail == ''){$thumbn = get_stylesheet_directory_uri().'/images/placeholder.png';} else {$thumbn = $array_thumbnail[0];}
                switch ($key) {
                    case 0:
                        ?>
            <div class="w-layout-grid grid">
              <a href="<?= get_permalink($recent["ID"]) ?>" id="w-node-eb2cfccb59c5-dc4099e1" class="div-post-destaque w-inline-block" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?=$thumbn;?>');">
                <h1 class="heading-15"><?=$recent['post_title'];?></h1>
                <div class="categoria"><?=$post_category?></div>
              </a>
            <?php
            break;
          case 1:
            ?>
              <a href="<?= get_permalink($recent["ID"]) ?>" class="div-destaque-lateral w-inline-block" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?=$thumbn;?>');">
                <div class="categoria"><?=$post_category?></div>
                <h1 class="heading-15 _02"><?=$recent['post_title'];?></h1>
              </a>
            </div>     
            <?php
            break;
          case 2:
            ?>
              <div class="w-layout-grid grid-2">
                <a href="<?= get_permalink($recent["ID"]) ?>" class="div-destaque-lateral _2 w-inline-block" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?=$thumbn;?>');">
                  <div class="categoria"><?=$post_category?></div>
                  <h1 class="heading-15 _02"><?=$recent['post_title'];?></h1>
                </a>
            <?php
            break;
          case 3:
            ?>
                <a href="<?= get_permalink($recent["ID"]) ?>" class="div-destaque-lateral _3 w-inline-block" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?=$thumbn;?>');">
                  <div class="categoria"><?=$post_category?></div>
                  <h1 class="heading-15 _02"><?=$recent['post_title'];?></h1>
                </a>
            <?php
            break;
          case 4:
            ?>
                <a href="<?= get_permalink($recent["ID"]) ?>" class="div-destaque-lateral _4 w-inline-block" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?=$thumbn;?>');">
                  <div class="categoria"><?=$post_category?></div>
                  <h1 class="heading-15 _02"><?=$recent['post_title'];?></h1>
                </a>
              </div>
            <?php
            break;
        }    

      } 
      if ($postsnum < 2) {echo '</div>';}
      if ($postsnum < 5) {echo '</div>';}
      wp_reset_query();
      wp_reset_postdata();
      ?>      
      <div class="columns-16 w-row">
        <div class="column-2 w-col w-col-8">
          <h2 class="heading-14">Posts <strong class="destaque-h2">Anteriores</strong></h2>
          <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-3 w-slider">
            <div class="w-slider-mask">
              <div class="slide-5 w-slide">
                <?php 
                  $page = (get_query_var('paged')) ? get_query_var('paged') : 1;                  
                  $pp_page = $wp_query->query_vars['posts_per_page'];                  
                  $offset = 5 + ($pp_page * ($page - 1 ));                  
                  $args = array('post_type'=>'post', 
                          'post_status'=>'publish',
                          'posts_per_page'=> $pp_page, // As per the post below you need to have a set number of posts.
                          'page' => $page,
                          'offset' => $offset,
                          'orderby' => 'date', 
                          'order' => 'DESC',
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
                } else {
                  echo '<p>Nenhum post antigo, veja nossos últimos conteúdos acima!</p>';
                }       
                wp_reset_query();
                wp_reset_postdata();  
              ?>
              <div id="navegacao">                    
                  <?php next_posts_link( '<span class="navegacao" style="float:right">Posts Mais Antigos</span>', $wpb_all_query->max_num_pages );?>
                  <?php previous_posts_link( '<span class="navegacao" style="float:left">Posts Mais Recentes</span>' ); ?>
              </div> 
              </div>
            </div>                     
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>