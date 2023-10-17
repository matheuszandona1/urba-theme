<?php get_header(); ?>
  <?php $material = array();
  $terms = get_terms('categoria_material');
   foreach ( $terms as $i=>$term ) { 
    $material[$i]['id'] = $term->term_id;
    $material[$i]['nome'] = $term->name;
    $material[$i]['count'] = $term->count;
    $material[$i]['link'] = get_category_link( $term->term_id);                
   }  ?>
  <div class="secao-material-destaque busca-materiais">
    <div class="conteiner-padrao-2 selecao-categoria-material">
      <div class="w-row">
        <div class="coluna-busca w-col w-col-6 w-col-stack">
          <div data-delay="0" class="pai-dropdown-categoria-materiais w-dropdown">
            <div class="dropdown-categoria w-dropdown-toggle">
              <div class="text-block-33">Selecione a categoria</div>
              <div class="icon-4 w-icon-dropdown-toggle"></div>
            </div>
            <nav class="dropdown-list w-dropdown-list">
              <?php foreach($material as $categoria){ ?>      
                <a class="dropdown-link w-dropdown-link" href="<?=$categoria['link'];?>"><?=$categoria['nome'];?></a>
              <?php } ?>
            </nav>
          </div>
        </div>
        <div class="column-5 w-col w-col-6 w-col-stack">
          <div class="form-block-4 w-form">
             <form id="email-form" name="email-form" action="<?php echo home_url( '/' ); ?>" class="w-clearfix"><img src="images/59f9ff9601b9500001e8a8a5_search-icon-png-20.png" width="37" srcset="images/59f9ff9601b9500001e8a8a5_search-icon-png-20-p-500.png 500w, images/59f9ff9601b9500001e8a8a5_search-icon-png-20.png 600w" sizes="37px" alt="" class="image-8"><input type="hidden" name="post_type" value="materiais" /><input type="text" id="name-4" name="s" maxlength="256" placeholder="Qual assunto você deseja encontrar materiais?" class="campo-pesquisa w-input"></form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="materias-secundarios">
    <div class="conteiner-padrao">  
      <h2 class="titulo-categoria-materiais">Resultados da busca por: '<?php the_search_query();?>'</h2>
      <div class="w3-content">
        <?php $pp_page = $wp_query->query_vars['posts_per_page'];
        $args = array_merge($wp_query->query, array( 'post_type'=>'materiais', 'post_status'=>'publish','posts_per_page'=> $pp_page));
        $page = (get_query_var('paged')) ? get_query_var('paged') : 1;    
        $total_pages = $wp_query->max_num_pages;     
        $my_query = new wp_query($args);     
        $i = 0;      
        if( $my_query->have_posts() ) {      
          while ($my_query->have_posts()) {
            $my_query->the_post();      
            if (( $i % 3 ) == 0 ){ echo '<div class="colunas-materiais w-row">'; }
            $val = get_post_meta( $post->ID, 'material_meta_value_link', true );  
            $link = get_field('url_material'); ?>          
            <div class="coluna-individual-material w-col w-col-4">
              <div class="imagem-material-segundario" style="background-image: url(<?= ( has_post_thumbnail() ? the_post_thumbnail_url() : get_stylesheet_directory_uri().'/images/placeholder.png');?>);"></div>
              <h3 class="titulo-material-secundario"><?php the_title();?></h3>
              <p class="texto-material"><?=get_the_content();?></p>
              <a class="botao-material-secundario w-button" href="<?=$link;?>" target="_blank" >BAIXAR AGORA</a>
            </div>    
            <?php if ((( $i % 3 ) -2 ) == 0 ){ echo '</div>';}            
            $i++;      
          }   
        } else { ?>
          <p>Nenhum resultado para '<?php the_search_query(); ?>'</p>
        <?php }
        if (( $i % 3 ) != 0 ){echo '</div>';} ?>      
        <?php wp_reset_query();
        wp_reset_postdata(); ?>   
      </div>
    </div>
  </div>
<?php get_footer(); ?>