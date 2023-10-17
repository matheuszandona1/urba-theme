<?php
/*
Template Name: Página Materiais
*/
?>
<?php get_header(); ?>
<style>
.page-template-template-materiais .brand{
width: 180px;
margin: 30px 0px 0 0 !important;
}
.paragraph-3 p{
  margin-bottom: 20px;
}
.imagem-material-segundario {
  height: 250px;
  border-radius: 10px;
  margin-bottom:15px;
}
.categoria-material a {
  font-size: 20px;
  color: #fff;
  background-color: #ff832d;
  border-radius: 15px;
  padding-inline: 15px;
  padding-block: 3px;
  position: absolute;
  margin-top: 15px;
  margin-left: 15px;
  text-transform: uppercase;
}
.categoria-material{
  font-size:0px;
}
.titulo-material {
  margin-bottom: 15px;
  border-bottom: 2px solid #ff8b22;
  color: #006b3f;
  font-size: 20px;
  line-height: 24px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
  min-height: 6rem;
}
.content-box.col-md-4 {
  margin-bottom: 30px;
}
.conteudo-material p {
  margin-bottom: 22px;
  font-size: 18px;
}
.content-box .entry-content {
  min-height: 47rem;
  max-height: 47rem;
}
.conteudo-material {
  min-height: 20rem;
  max-height: 20rem;
  overflow: hidden;
}
.imagem-material-destque {
  border-radius: 15px;
}
@media(max-width:468px){
.paragraph-3{
width:100% !important;
}
}
</style>



  <div class="secao-material-destaque">
  
   <?php $material = array();
  $terms = get_terms('categoria_material');
   foreach ( $terms as $i=>$term ) { 
    $material[$i]['id'] = $term->term_id;
    $material[$i]['nome'] = $term->name;
    $material[$i]['count'] = $term->count;
    $material[$i]['link'] = get_category_link( $term->term_id);                
   }  ?>
  <div class="busca-materiais">
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
            <form id="email-form" name="email-form" action="<?php echo home_url( '/' ); ?>" class="w-clearfix"><input type="text" id="name-4" name="s" maxlength="256" placeholder="Qual assunto você deseja encontrar materiais?" class="campo-pesquisa w-input" style="height: 43px;"></form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <div class="conteiner-padrao w-clearfix" style="margin-top: 30px;">
      <?php   
        $args = array( 'post_type'=>'materiais', 'post_status'=>'publish','numberposts' => '1');
            $recent_posts = wp_get_recent_posts( $args );
        if (count($recent_posts) == 0) {
              ?>
          <p class="zero-material">Nenhum material encontrado no momento!</p>
            <?php
            } else {
              foreach( $recent_posts as $recent ){    
            $val = get_post_meta( $post->ID, 'material_meta_value_link', true );        
            $link = get_field('url_material', $recent['ID']);
            $post_thumbnail_id = intval(get_post_thumbnail_id( $recent['ID'] ));
            $array_thumbnail = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail_size');        
            if ($array_thumbnail == '') {         
               $thumbn = get_stylesheet_directory_uri().'/images/placeholder.png';           
            } else {
              $thumbn = $array_thumbnail[0]; 
            }
            ?>
            <div class="imagem-material-destque" style="background-image: url('<?=$thumbn;?>');"></div>
              <div style="margin-block-start: 5%;"><h3 class="titulo-material-destaque" style="padding-bottom: 18px,width: 70%;max-width: 100%;"><?=$recent['post_title'];?></h3>
              <div class="paragraph-3" style="margin-bottom: 10px;color:#333333;width: 70%;"><?=$recent['post_content'];?></div>
            <a class="botao-materiais w-button" style="margin-bottom: 50px;" href="<?=$link;?>" <?=($link[1] ? 'target="_blank"' : '')?> >BAIXAR AGORA</a></div>
              <?php
          }
        }
      ?>
  </div>
  <!--<?php $material = array();
  $terms = get_terms('categoria_material');
   foreach ( $terms as $i=>$term ) { 
    $material[$i]['id'] = $term->term_id;
    $material[$i]['nome'] = $term->name;
    $material[$i]['count'] = $term->count;
    $material[$i]['link'] = get_category_link( $term->term_id);                
   }  ?>
  <div class="busca-materiais">
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
            <form id="email-form" name="email-form" action="<?php echo home_url( '/' ); ?>" class="w-clearfix"><input type="hidden" name="post_type" value="materiais" /><input type="text" id="name-4" name="s" maxlength="256" placeholder="Qual assunto você deseja encontrar materiais?" class="campo-pesquisa w-input"></form>
          </div>
        </div>
      </div>
    </div>
  </div>-->
  <div class="materias-secundarios">
    <div class="conteiner-padrao-2">
    <div class="row" style="margin-top: 50px;border-top: solid 2px #038759;padding-top: 68px;">
    <!--MINHA NOVA QUERY-->
 <?php

	$args = array(
    'post_type' => 'materiais',
    'posts_per_page' => -1,);
	$loop = new WP_Query($args);
	while ( $loop->have_posts() ) {
    	$loop->the_post();
   ?>
   <div class="content-box col-md-4">
    <div class="entry-content">
    	<div class="categoria-material"><?php the_taxonomies();?></div>
    	<div class="imagem-material-segundario" style="background-image: url(<?= ( has_post_thumbnail() ? the_post_thumbnail_url() : get_stylesheet_directory_uri().'/images/placeholder.png');?>);"></div>
        <div class="titulo-material"><?php the_title(); ?></div>
        <div class="conteudo-material"><?php the_content(); ?></div>
        <a class="botao-material-secundario w-button" href="<?=get_field('url_material');?>" target="_blank" >BAIXAR AGORA</a>
    </div>
    </div>
<?php
}
 ?>
 </div>
    <!--FIM DA MINHA NOVA QUERY-->
    

  </div>
  <?php get_footer(); ?>