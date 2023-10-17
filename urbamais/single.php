<?php get_header(); ?>
  <div class="section">
    <?= get_search_form(); ?>
    <div class="container-padrao-2">
      <div class="post-main-info">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="text-block-31">
          <?php $categories = get_the_category();
          if ( ! empty( $categories ) ) {
              echo esc_html( $categories[0]->name );   
          }?>
        </div>
        <h1 class="heading-17"><?php the_title();?></h1>
        <p class="paragraph-27"><?= the_excerpt_first_line() ?></p>
        <div class="div-autor-data w-clearfix"><img src="<?= get_author_image_url( get_the_author_meta('ID'), '50' ); ?>" width="50" alt="" class="img-autor">
          <div class="autor interna"><?= get_the_author() ?></div>
          <div class="data-publicacao interna">Postado em <?= get_the_date() . modificado_em() ?></div>
        </div>
      </div>
      <?php $post_thumbnail_id = intval(get_post_thumbnail_id(get_the_id() ));
        $array_thumbnail = wp_get_attachment_image_src( $post_thumbnail_id, 'full');      
        if($array_thumbnail == ''){
          $thumbn = get_option('img_NE');
        } else {
          $thumbn = $array_thumbnail[0];
        }   ?>
      <div class="div-img-postinterna" style="background-image: url('<?=$thumbn;?>');"></div>
      <div class="content-cta w-row">
        <div class="column-4 w-col w-col-8">
          <?php
          switch (get_the_ID()){
            case 653:
              include 'ponto-de-conversao-01.php';
            break;
            case 510:
              include 'ponto-de-conversao-02.php';
            break;
            case 417:
              include 'ponto-de-conversao-03.php';
            break;
          }
            ?>
          <div id="post-content">
            <?= get_the_content() ?>
          </div>
        <?php endwhile; ?>
          <div class="posts-relacionados">
            <h2 class="heading-16 relacionados">Posts <strong class="destaque-h2">Relacionados</strong></h2>
            <div class="posts">
              <?php
              $orig_post = $post;
              global $post;
              if ($categories) {
                $category_ids = array();
                foreach($categories as $individual_category) { $category_ids[] = $individual_category->term_id; }
                $args=array(
                  'category__in' => $category_ids,
                  'post__not_in' => array($post->ID),
                  'posts_per_page'=> 3, // Number of related posts that will be shown.
                  'ignore_sticky_posts'=>1
                );
                $my_query = new wp_query( $args );
                if( $my_query->have_posts() ) {
                  while( $my_query->have_posts() ) {
                    $my_query->the_post();
                    
                    $post_thumbnail_id = intval(get_post_thumbnail_id(get_the_ID()));
                    $array_thumbnail = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail_size');  
                    if($array_thumbnail == '') {
                      $thumbn = get_stylesheet_directory_uri().'/images/placeholder.png';
                    } else {
                      $thumbn = $array_thumbnail[0];
                    }   ?>
                    <div class="post-relacionado w-clearfix">                      
                      <div class="div-img-postrelacionado" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?= $thumbn; ?>');">
                        <h1 class="heading-18 _02 relacionado"><?php the_title(); ?></h1>
                      </div>
                      <div class="autor relacionados"><?= get_the_author(); ?></div>
                      <div class="data-publicacao relacionados"><?= get_the_date(); ?></div><a href="<?= the_permalink(); ?>" class="button-9 relacionados w-button">leia agora</a>
                    </div>
                    <?php
                  }
                } else {
                  echo "<p>Nenhum post relacionado até o momento</p>";
                }
              }
              $post = $orig_post;
              wp_reset_query(); ?>
            </div>
          </div>
          <div class="w-embed">
            <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="940px" data-numposts="5"></div>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
    <div class="w-embed w-script">
      <!--  Go to www.addthis.com/dashboard to customize your tools  -->
      <script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d794d3de4aec9ae"></script>
    </div>
  </div>
<?php get_footer(); ?>