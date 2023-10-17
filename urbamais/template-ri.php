<?php
/*
Template Name: Página RI
*/
?>
<?php get_header(); ?>
<div class="hero-internas relatorios" style="background-image:url(<?=get_the_post_thumbnail_url()?>);">
    <div class="container-padrao">
      <div class="div-text-hero">
        <h1 class="heading">Relações com <br><strong class="bold-text-16">Investidores</strong></h1>
      </div>
    </div>
  </div>


  <div class="section-texto-relatorios">
    <div class="container-padrao">
    <?php $titulo_governanca = get_field('titulo_governanca', get_the_id()); ?>
      <p class="paragraph-31"><?= $titulo_governanca ?></p>
      <div class="div-categorias">
        <div class="div-questao invest" data-ix="open-resposta">
          <div class="div-duvida w-clearfix">
          <?php $titulo_estatuto_codigo_de_etica_e_politicas = get_field('titulo_estatuto_codigo_de_etica_e_politicas', get_the_id()); ?>
            <div class="duvida-3"><?= $titulo_estatuto_codigo_de_etica_e_politicas ?></div>
            <div class="div-seta-3"></div>
          </div>
          <div class="div-resposta">
            <div class="recurso">
              <ul role="list" class="list-8">
              <?php
                if( have_rows('estatuto_social') ):
                    while ( have_rows('estatuto_social') ) : the_row();
                      $titulo_estatuto_social = get_sub_field('titulo_estatuto_social');
                      $doc_estatuto_social = get_sub_field('doc_estatuto_social'); ?>
                        <li class="list-item-8"><a href="<?= $doc_estatuto_social?>" target="_blank" class="link-7"><?= $titulo_estatuto_social ?></a></li>
                        <?php
                    endwhile;
                else : ?>
                  Nenhum documento cadastrado no momento!
                  <?php
                endif;
                ?>
                <?php
                if( have_rows('codigo_de_etica') ):
                    while ( have_rows('codigo_de_etica') ) : the_row();
                      $titulo_codigo_de_etica = get_sub_field('titulo_codigo_de_etica');
                      $doc_codigo_de_etica = get_sub_field('doc_codigo_de_etica'); ?>
                        <li class="list-item-8"><a href="<?= $doc_codigo_de_etica?>" target="_blank" class="link-7"><?= $titulo_codigo_de_etica?></a></li>
                        <?php
                    endwhile;
                else : ?>
                  Nenhum documento cadastrado no momento!
                  <?php
                endif;
                ?>
                <?php $titulo_politicas = get_field('titulo_politicas', get_the_id()); ?>
                <li class="list-item-8"><a href="#" class="link-7"><?= $titulo_politicas ?></a></li>
                    <ul role="list" class="list-8">
                    <?php
                      if (have_rows('politicas_doc')) :
                        while (have_rows('politicas_doc') ) : the_row();
                        $titulo_doc = get_sub_field('titulo_doc');
                        $doc = get_sub_field('doc');?>
                      <li class="list-item-8"><a href="<?= $doc?>" class="link-7"><?= $titulo_doc?></a></li>
                    <?php
                      endwhile;
                      ?></ul>
                      <? else : ?>
                      Nenhum documento cadastrado no momento!
                    <?php endif; ?>
                    </ul>
            </div>
          </div>
        </div>
        <div class="div-questao invest" data-ix="open-resposta">
          <div class="div-duvida w-clearfix">
            <?php $titulo_administracao = get_field('titulo_administracao', get_the_id()); ?>
            <div class="duvida-3"><?= $titulo_administracao?></div>
            <div class="div-seta-3"></div>
          </div>
          <div class="div-resposta">
            <div class="recurso">
            <?php $conselho_administracao = get_field('conselho_administracao', get_the_id()); ?>
              <div class="text-block-39"><?= $conselho_administracao?></div>
              <?php
                if (have_rows('conteudo_conselho_administracao')) :
                  while (have_rows('conteudo_conselho_administracao') ) : the_row();
                  $nome = get_sub_field('nome');
                  $cargo = get_sub_field('cargo');
                  $mandato = get_sub_field('mandato');?>
                <div class="div-conselheiro">
                  <div class="text-block-40"><?=$nome?></div>
                    <div class="w-row">
                      <div class="column-58 w-col w-col-8">
                        <div class="text-block-41">cargo: <strong class="bold-text-35"><?=$cargo?></strong></div>
                      </div>
                      <div class="column-59 w-col w-col-4">
                        <div class="text-block-41">mandato: <strong class="bold-text-35"><?=$mandato?></strong></div>
                      </div>
                    </div>
                </div>
              <?php
                endwhile;
                ?>
                <? else : ?>
                Nenhuma informação cadastrada no momento!
              <?php endif; ?>

              <?php $documento_conselho_administracao = get_field('documento_conselho_administracao', get_the_id()); ?>
              <p>Para visualizar regimento interno, <a href="<?=$documento_conselho_administracao?>"> clique aqui</a>.</p>


              <?php $diretoria_executiva = get_field('diretoria_executiva', get_the_id()); ?>
              <div class="text-block-39 _2"><?=$diretoria_executiva?></div>
              <?php
                if (have_rows('conteudo_diretoria_executiva')) :
                  while (have_rows('conteudo_diretoria_executiva') ) : the_row();
                  $nome = get_sub_field('nome');
                  $cargo = get_sub_field('cargo');
                  $mandato = get_sub_field('mandato');?>
                  <div class="div-conselheiro">
                    <div class="text-block-40"><?=$nome?></div>
                      <div class="w-row">
                        <div class="column-58 w-col w-col-8">
                          <div class="text-block-41">cargo: <strong class="bold-text-35"><?=$cargo?></strong></div>
                        </div>
                        <div class="column-59 w-col w-col-4">
                          <div class="text-block-41">mandato: <strong class="bold-text-35"><?=$mandato?></strong></div>
                        </div>
                      </div>
                  </div>
              <?php
                endwhile;
                ?>
                <? else : ?>
                Nenhuma informação cadastrada no momento!
              <?php endif; ?>

              <?php $comite_de_financas = get_field('comite_de_financas', get_the_id()); ?>
              <div class="text-block-39 _2"><?=$comite_de_financas?></div>
              <ul role="list" class="list-10">
              <?php
                if (have_rows('conteudo_comite_de_financas')) :
                  while (have_rows('conteudo_comite_de_financas') ) : the_row();
                  $nome = get_sub_field('nome');?>
                  <li class="list-item-9"><?=$nome?></li>
                <?php
                endwhile;
                ?> </ul>
                <? else : ?>
                Nenhuma informação cadastrada no momento!
              <?php endif; ?>

              <?php $documento_comite_de_financas = get_field('documento_comite_de_financas', get_the_id()); ?>
              <p>Para visualizar regimento interno, <a href="<?=$documento_comite_de_financas?>"> clique aqui</a>.</p>

              <?php $comite_de_pessoas = get_field('comite_de_pessoas', get_the_id()); ?>
              <div class="text-block-39 _2"><?=$comite_de_pessoas?></div>
              <ul role="list" class="list-9">
              <?php
                if (have_rows('conteudo_comite_de_pessoas')) :
                  while (have_rows('conteudo_comite_de_pessoas') ) : the_row();
                  $nome = get_sub_field('nome');?>
                  <li class="list-item-9"><?=$nome?></li>
                <?php
                endwhile;
                ?> </ul>
                <? else : ?>
                Nenhuma informação cadastrada no momento!
              <?php endif; ?>

              <?php $documento_comite_de_pessoas = get_field('documento_comite_de_pessoas', get_the_id()); ?>
              <p>Para visualizar regimento interno, <a href="<?=$documento_comite_de_pessoas?>"> clique aqui</a>.</p>


              <?php $comite_estrategia_e_inteligencia = get_field('comite_estrategia_e_inteligencia', get_the_id()); ?>
              <div class="text-block-39 _2"><?=$comite_estrategia_e_inteligencia?></div>
              <ul role="list" class="list-11">
              <?php
                if (have_rows('conteudo_comite_de_estrategia_e_inteligencia')) :
                  while (have_rows('conteudo_comite_de_estrategia_e_inteligencia') ) : the_row();
                  $nome = get_sub_field('nome');?>
                  <li class="list-item-9"><?=$nome?></li>
                <?php
                endwhile;
                ?> </ul>
                <? else : ?>
                Nenhuma informação cadastrada no momento!
              <?php endif; ?>

              <?php $documento_comite_de_estrategia_e_inteligencia = get_field('documento_comite_de_estrategia_e_inteligencia', get_the_id()); ?>
              <p>Para visualizar regimento interno, <a href="<?=$documento_comite_de_estrategia_e_inteligencia?>"> clique aqui</a>.</p>


              <?php $comite_governanca_e_etica = get_field('comite_governanca_e_etica', get_the_id()); ?>
              <div class="text-block-39 _2"><?=$comite_governanca_e_etica?></div>
              <ul role="list" class="list-11">
              <?php
                if (have_rows('conteudo_comite_de_governanca_e_etica')) :
                  while (have_rows('conteudo_comite_de_governanca_e_etica') ) : the_row();
                  $nome = get_sub_field('nome');?>
                  <li class="list-item-9"><?=$nome?></li>
                <?php
                endwhile;
                ?> </ul>
                <? else : ?>
                Nenhuma informação cadastrada no momento!
              <?php endif; ?>

              <?php $documento_comite_de_governanca_e_etica = get_field('documento_comite_de_governanca_e_etica', get_the_id()); ?>
              <p>Para visualizar regimento interno, <a href="<?=$documento_comite_de_governanca_e_etica?>"> clique aqui</a>.</p>
            </div>
          </div>
        </div>
      </div>
      <?php $titulo_informacoes_acionistas = get_field('titulo_informacoes_acionistas', get_the_id()); ?>
      <p class="paragraph-31"><?=$titulo_informacoes_acionistas?></p>
      <div class="div-categorias">
        <div class="div-questao invest" data-ix="open-resposta">
          <div class="div-duvida w-clearfix">
            <?php $fatos_relevantes_e_comunicado_ao_mercado = get_field('fatos_relevantes_e_comunicado_ao_mercado', get_the_id()); ?>
            <div class="duvida-3"><?=$fatos_relevantes_e_comunicado_ao_mercado?></div>
            <div class="div-seta-3"></div>
          </div>
          <div class="div-resposta">
            <div class="recurso">
              <ul role="list" class="list-8">
              <?php
                if (have_rows('conteudo_fatos_relevantes_e_comunicado_ao_mercado')) :
                  while (have_rows('conteudo_fatos_relevantes_e_comunicado_ao_mercado') ) : the_row();
                  $titulo = get_sub_field('titulo');
                  $documento = get_sub_field('documento');?>
                  <li class="list-item-8"><a href="<?=$documento?>" class="link-7"><?=$titulo?></a></li>
                <?php
                endwhile;
                ?> </ul>
                <? else : ?>
                Nenhuma informação cadastrada no momento!
              <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="div-questao invest" data-ix="open-resposta">
          <div class="div-duvida w-clearfix">
            <?php $titulo_demonstracoes_financeiras_e_itrs = get_field('titulo_demonstracoes_financeiras_e_itrs', get_the_id()); ?>
            <div class="duvida-3"><?=$titulo_demonstracoes_financeiras_e_itrs?></div>
            <div class="div-seta-3"></div>
          </div>
          <div class="div-resposta">
            <div class="recurso">
            <ul role="list" class="list-8">
            <?php
                if (have_rows('conteudo_demonstracoes_financeiras')) :
                  while (have_rows('conteudo_demonstracoes_financeiras') ) : the_row();
                  $titulo = get_sub_field('titulo');
                  $documento = get_sub_field('documento');?>
                  <li class="list-item-8"><a href="<?=$documento?>" class="link-7"><?=$titulo?></a></li>
                <?php
                endwhile;
                ?>
                <? else : ?>
                Nenhuma informação cadastrada no momento!
              <?php endif; ?>
            </ul>
            <ul role="list" class="list-8">
              <?php $titulo_informacoes_trimestrais = get_field('titulo_informacoes_trimestrais', get_the_id()); ?>
              <li class="list-item-8"><a href="#" class="link-7"><?=$titulo_informacoes_trimestrais?></a></li>
                <ul role="list" class="list-8">
                  <?php
                    if (have_rows('conteudo_informacoes_trimestrais')) :
                      while (have_rows('conteudo_informacoes_trimestrais') ) : the_row();
                      $titulo = get_sub_field('titulo');
                      $documento = get_sub_field('documento');?>
                      <li class="list-item-8"><a href="<?=$documento?>" class="link-7"><?=$titulo?></a></li>
                    <?php
                    endwhile;
                    ?> 
                    <? else : ?>
                    Nenhuma informação cadastrada no momento!
                  <?php endif; ?>
                </ul>
            </ul>
            </div>
          </div>
        </div>
        <div class="div-questao invest" data-ix="open-resposta">
          <div class="div-duvida w-clearfix">
            <?php $titulo_formulario_de_referencia = get_field('titulo_formulario_de_referencia', get_the_id()); ?>
            <div class="duvida-3"><?=$titulo_formulario_de_referencia?></div>
            <div class="div-seta-3"></div>
          </div>
          <div class="div-resposta">
            <div class="recurso">
              <ul role="list" class="list-8">
              <?php
                if (have_rows('conteudo_formulario_de_referencia')) :
                  while (have_rows('conteudo_formulario_de_referencia') ) : the_row();
                  $titulo = get_sub_field('titulo');
                  $documento = get_sub_field('documento');?>
                  <li class="list-item-8"><a href="<?=$documento?>" class="link-7"><?=$titulo?></a></li>
                <?php
                endwhile;
                ?>
                <? else : ?>
                Nenhuma informação cadastrada no momento!
              <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="div-questao invest" data-ix="open-resposta">
          <div class="div-duvida w-clearfix">
            <?php $titulo_assembleias_e_reunioes = get_field('titulo_assembleias_e_reunioes', get_the_id()); ?>
            <div class="duvida-3"><?=$titulo_assembleias_e_reunioes?></div>
            <div class="div-seta-3"></div>
          </div>
          <div class="div-resposta">
            <div class="recurso">
              <ul role="list" class="list-8">
              <?php
                if (have_rows('conteudo_assembleias_e_reunioes')) :
                  while (have_rows('conteudo_assembleias_e_reunioes') ) : the_row();
                  $titulo = get_sub_field('titulo');
                  $documento = get_sub_field('documento');?>
                  <li class="list-item-8"><a href="<?=$documento?>" class="link-7"><?=$titulo?></a></li>
                <?php
                endwhile;
                ?>
                <? else : ?>
                Nenhuma informação cadastrada no momento!
              <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="div-questao invest" data-ix="open-resposta">
          <div class="div-duvida w-clearfix">
            <?php $outros = get_field('outros', get_the_id()); ?>
            <div class="duvida-3"><?=$outros?></div>
            <div class="div-seta-3"></div>
          </div>
          <div class="div-resposta">
            <div class="recurso">
              <ul role="list" class="list-8">
              <?php
                if (have_rows('conteudo_outros')) :
                  while (have_rows('conteudo_outros') ) : the_row();
                  $titulo = get_sub_field('titulo');
                  $documento = get_sub_field('documento');?>
                  <li class="list-item-8"><a href="<?=$documento?>" class="link-7"><?=$titulo?></a></li>
                <?php
                endwhile;
                ?>
                <? else : ?>
                Nenhuma informação cadastrada no momento!
              <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <p class="paragraph-31 fale-com-ri">Fale com o RI: <a href="mailto:ri.urba@vivaurba.com.br" class="link-8">ri.urba@vivaurba.com.br</a></p>
    </div>
  </div>
  </div>
</div>
<?php get_footer(); ?>