<?php
/*
Template Name: LP Santa Iria
*/
?>
<?php get_header(); ?>
<style>
  .unico {
    display: block !important;
  }

  @media(max-width: 480px) {
    .hero-landing.sta-iria {
      height: auto;
    }
  }
</style>
<section id="hero-form" class="hero-landing sta-iria" style="background-image: linear-gradient(90deg, rgba(3, 3, 3, 0.5), rgba(49, 49, 49, 0) 57%), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= get_field('imagem_de_fundo_hero', get_the_id()) ?>)">
  <div class="tag-breve-lan-amento comercial dunlop">

    <div class="text-block-47 dunlop unico" style="background-image: linear-gradient(
45deg,  #7e3f9f ,  #7e3f9f );"><span style="font-size: 14px;position: relative;    top: 13px;">EM OBRAS</span></div>
  </div>
  <div class="container-padrao">
    <div class="div-logos-hero sta-iria" style="padding: 15px;">
      <img src="<?= get_stylesheet_directory_uri() ?>/images/logo-santa-iria-novo-2.png" width="125" heigth="100" alt="" class="image-13">
    </div>
    <div class="div-info-hero">
      <div class="w-row">
        <div class="col-text w-col w-col-6">
          <div class="box sta-iria">
            <?php $titulo_hero = get_field('titulo_hero', get_the_id()); ?>
            <h1 class="heading-lp"><strong class="destaque-lp"><?= $titulo_hero['destaque'] ?></strong> <?= $titulo_hero['complemento'] ?><br></h1>
          </div>
          <div class="div-tags">
            <div>
              <?php $tags = get_field('tags', get_the_id()); ?>
              <div class="tag-hero sta-iria"><?= $tags['tag_1'] ?></div>
              <div class="tag-hero sta-iria"><?= $tags['tag_2'] ?></div>
              <div class="tag-hero sta-iria"><?= $tags['tag_3'] ?></div>
            </div>
            <div class="tag-hero destaque"><?= $tags['tag_roxa'] ?></div>
          </div>
        </div>
        <div class="col-forms w-col w-col-6">
          <div class="div-forms-hero">
            <h3 class="heading-21"><?= get_field('titulo_formulario', get_the_id()) ?></h3>
            <form id="interesse-loteamento-lp" name="email-form" data-name="Email Form" class="form-7">
              <input type="hidden" id="idempreendimento" name="idempreendimento" value="<?php the_field('id_loteamentos'); ?>">
              <label for="name" class="label-form-lp">Nome</label><input type="text" class="campo-form-lp w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name" required>
              <label for="E-mail-2" class="label-form-lp">E-mail</label><input type="email" class="campo-form-lp w-input" maxlength="256" name="E-mail" data-name="E-mail" id="E-mail-2" required>
              <label for="Telefone" class="label-form-lp">WhatsApp</label><input type="tel" class="campo-form-lp w-input" minlength="15" maxlength="15" onkeypress="MascaraTelefone(this);" name="Telefone" data-name="Telefone" id="Telefone" required>
              <label for="Segmento-em-que-atua" class="label-form-lp">Segmento em que atua</label>
              <select id="Segmento-em-que-atua" name="Segmento-em-que-atua" data-name="Segmento em que atua" class="select-field-4 w-select" required>
                <option value="Alimentação">Alimentação</option>
                <option value="Beleza e estética">Beleza e estética</option>
                <option value="Construção civil">Construção civil</option>
                <option value="Educação">Educação</option>
                <option value="Escritório">Escritório</option>
                <option value="Esportes">Esportes</option>
                <option value="Hotelaria">Hotelaria</option>
                <option value="Prestação de serviços">Prestação de serviços</option>
                <option value="Saúde">Saúde</option>
                <option value="Supermercado">Supermercado</option>
                <option value="Outro">Outro</option>
              </select>
              <div class="w-row bloco_consentimento">
                <div class="w-col">
                  <p class="texto-politica">Aceito receber via WhatsApp, ligação, e-mail e SMS, o contato da marca MRV&CO com novidades sobre este loteamento, bem como outras ações de marketing, ofertas de produto e serviços. Estou de acordo com as formas de tratamento de dados realizados pela marca MRV&CO, conforme sua <a href="https://www.mrv.com.br/institucional/pt/politica-de-privacidade" class="link-politica">Política de Privacidade</a>.</p>
                  <label class="checkbox-button-field-2 w-checkbox"><input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" value="Ok, entendi!" class="w-form-formcheckboxinput w-checkbox-input" required><span for="Proprietário" class="checkbox-button-label w-form-label" id="texto-politica">Ok, entendi!</span>
                  </label>
                </div>
              </div>
              <input type="submit" value="falar com um consultor" data-wait="Aguarde..." class="enviar-form-lp w-button">
            </form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<div class="traga-seu-negocio">
  <div class="container-padrao">
    <?php $titulo_segunda_dobra = get_field('titulo_segunda_dobra', get_the_id()); ?>
    <h2 class="heading-2 center"><strong class="destaque-h2"><?= $titulo_segunda_dobra['destaque'] ?></strong> <?= $titulo_segunda_dobra['complemento'] ?></h2>
    <div class="columns-17 w-row">
      <div class="column-50 w-col w-col-5">
        <?php $texto_segunda_dobra = get_field('texto_segunda_dobra', get_the_id()); ?>
        <p class="paragraph-28 lp"><?= $texto_segunda_dobra ?><br></p>
        <?php $tags_segunda_dobra = get_field('tags_segunda_dobra', get_the_id()); ?>
        <div class="tag-hero section2"><?= $tags_segunda_dobra['tag_1'] ?></div>
        <div class="tag-hero section2"><?= $tags_segunda_dobra['tag_2'] ?></div>
      </div>
      <div class="column-53 w-col w-col-7">
        <div data-delay="3000" data-animation="slide" class="slider-5 w-slider" data-autoplay="1" data-easing="ease-in" data-hide-arrows="1" data-nav-spacing="5" data-duration="300" data-infinite="1">
          <div class="w-slider-mask">
            <?php while (have_rows('slider')) : the_row();
              $image = get_sub_field('foto');
            ?>
              <div class="w-slide" style="background-image: url(<?= $image ?>);"></div>
            <?php endwhile; ?>

          </div>
          <div class="w-slider-arrow-left">
            <div class="icon-7 _2 w-icon-slider-left"></div>
          </div>
          <div class="w-slider-arrow-right">
            <div class="icon-7 w-icon-slider-right"></div>
          </div>
          <div class="slide-nav-4 w-slider-nav w-shadow w-round"></div>
        </div>
      </div>
    </div>
    <?php $titulo_terceira_dobra = get_field('titulo_terceira_dobra', get_the_id()); ?>
    <h3 class="heading-22"><?= $titulo_terceira_dobra ?></h3>
    <div class="imagem-loteamento">
      <span class='zoom' id='implantacao_img'>
        <!--<img src="<?= get_stylesheet_directory_uri() ?>/images/santa_iria-implantação-1920x1080.jpg" width="600" srcset="<?= get_stylesheet_directory_uri() ?>/images/santa_iria-implantação-500x313.jpg 500w, <?= get_stylesheet_directory_uri() ?>/images/santa_iria-implantação-800x500.jpg 800w" sizes="(max-width: 767px) 92vw, 600px" alt="">-->
        <img src="<?= get_stylesheet_directory_uri() ?>/images/santa-iria-1920x1080.png" width="600" srcset="<?= get_stylesheet_directory_uri() ?>/images/santa-iria-500x333.png 500w, <?= get_stylesheet_directory_uri() ?>/images/santa-iria-800x533.png 800w" sizes="(max-width: 767px) 92vw, 600px" alt="">
      </span>
    </div>
  </div>
</div>
<div class="condicoes">
  <div class="container-padrao">
    <!?php $titulo_quarta_dobra=get_field('titulo_quarta_dobra', get_the_id()); ?>
      <h2 class="heading-2 center white">
        <!?=$titulo_quarta_dobra ?><br>
      </h2>
      <div class="div-condicoes">
        <div data-w-id="bf19c09d-adef-141f-f1f3-b881262411f5" style="opacity:0" class="box-condicoes"><img src="<?= get_stylesheet_directory_uri() ?>/images/01.svg" width="95" alt="">
          <div class="text-block-36">Financiamento direto com a loteadora<br></div>
        </div>
        <div data-w-id="e0c951ed-d73b-0f07-d52d-9e46b2ac9331" style="opacity:0" class="box-condicoes end"><img src="<?= get_stylesheet_directory_uri() ?>/images/02.svg" width="95" alt="">
          <div class="text-block-36">Parcelamento em até 48x com juros 0,80%*<br>
            <p>(*Corrigido pelo IPCA)</p>
          </div>
        </div>
        <!-- <div data-w-id="e491aadc-88f8-b7a7-e003-727f7cc7f5f0" style="opacity:0" class="box-condicoes end"><img src="<?= get_stylesheet_directory_uri() ?>/images/03.svg" width="95" alt="">
          <div class="text-block-36">Entrada parcelada no cartão de crédito<br></div>
        </div> -->
      </div>
      <div class="div-cta"><a href="#hero-form" class="cta-condicoes w-button">QUERO SABER MAIS</a></div>
  </div>
</div>
<div class="localizacao-lp">
  <div class="container-padrao">
    <?php $titulo_quinta_dobra = get_field('titulo_quinta_dobra', get_the_id()); ?>
    <h2 class="heading-2 center"><?= $titulo_quinta_dobra ?></h2>
    <?php $subtitulo_quinta_dobra = get_field('subtitulo_quinta_dobra', get_the_id()); ?>
    <div class="text-block-37"><?= $subtitulo_quinta_dobra ?></div>
    <div class="columns-18 w-row">
      <div class="column-51 w-col w-col-6">
        <?php $texto_quinta_dobra = get_field('texto_quinta_dobra', get_the_id()); ?>
        <p class="paragraph-28 lp"><?= $texto_quinta_dobra['texto1'] ?><br></p>
        <div class="div-grupo-proximidades">
          <div data-w-id="a7f1de5b-ac25-7dfc-af70-891340435070" style="opacity:0" class="div-proximidade"><img src="<?= get_stylesheet_directory_uri() ?>/images/via.svg" width="75" alt="" class="image-15">
            <!--<div class="text-block-38">5 minutos da Av. Henri Nestlé e da Av. Castelo Branco</div>-->
            <div class="text-block-38">3 minutos da Rodovia Anhanguera</div>
          </div>
          <div data-w-id="b1d575f8-b4d6-dd44-229c-9fedfc747119" style="opacity:0" class="div-proximidade"><img src="<?= get_stylesheet_directory_uri() ?>/images/proximidades-01.svg" width="75" alt="" class="image-15">
            <div class="text-block-38">Fácil acesso à diversas cidades da região</div>
          </div>
          <div data-w-id="25c80125-465d-b488-cc22-cf6c12080e2b" style="opacity:0" class="div-proximidade"><img src="<?= get_stylesheet_directory_uri() ?>/images/proximidades-02.svg" width="75" alt="" class="image-15">
            <div class="text-block-38">Vetor Leste de Ribeirão Preto</div>
          </div>
        </div>
        <?php $texto_quinta_dobra = get_field('texto_quinta_dobra', get_the_id()); ?>
        <p class="paragraph-28 lp"><?= $texto_quinta_dobra['texto2'] ?><br></p>
      </div>
      <div class="column-54 w-col w-col-6">
        <div class="tabs w-tabs">
          <div class="tabs-menu w-tab-menu" style="font-size: 14px;">
            <a data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link w--current">
              <div>Mapa</div>
            </a>
            <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link w--current">
              <div>Foto Aérea</div>
            </a>
          </div>
          <div class="w-tab-content">
            <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--tab-active">
              <div class="teste_mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7439.139298876425!2d-47.7265785!3d-21.2092481!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9c742362906d7%3A0xa6b06c50db8c0837!2sSanta%20Iria%20MRV!5e0!3m2!1spt-BR!2sbr!4v1628082102251!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
            <div data-w-tab="Tab 2" class="tab-pane-tab-2 w-tab-pane w--tab-active">
              <a href="#" class="lightbox-link-2 w-inline-block w-lightbox">
                <img src="<?php the_field('foto_aerea'); ?>" alt="Foto aérea" class="image-6">
                <script type="application/json" class="w-json">
                  {
                    "items": [{
                      "type": "image",
                      "url": "<?php the_field('foto_aerea'); ?>"
                    }]
                  }
                </script>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="institucional">
  <div class="container-padrao">
    <div class="columns-19 w-row">
      <div class="column-52 w-col w-col-5">
        <?php $titulo_sexta_dobra = get_field('titulo_sexta_dobra', get_the_id()); ?>
        <h2 class="heading-2 side"><?= $titulo_sexta_dobra ?></h2>
        <?php $texto_sexta_dobra = get_field('texto_sexta_dobra', get_the_id()); ?>
        <p class="paragraph-28 lp"><?= $texto_sexta_dobra['texto1'] ?><br></p>
        <p class="paragraph-28 lp _2"><?= $texto_sexta_dobra['texto2'] ?><br></p>
      </div>
      <div class="column-55 w-col w-col-7">
        <div class="div-marcas">
          <div data-w-id="b66fb8f0-be0a-df2f-0267-55e243054e60" style="opacity:0" class="div-logo"><img src="<?= get_stylesheet_directory_uri() ?>/images/urba-logo.png" width="150" alt=""></div>
          <div data-w-id="062e573a-c5ee-58d5-341c-d804a240d4f2" style="opacity:0" class="div-logo"><img src="<?= get_stylesheet_directory_uri() ?>/images/mrvgrupo.png" width="150" alt=""></div>
          <div data-w-id="9ad905a3-7601-8128-8549-d57294c171eb" style="opacity:0" class="div-logo"><img src="<?= get_stylesheet_directory_uri() ?>/images/wtb.png" width="150" alt=""></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if (get_field('drenagem') || get_field('paisagismo') || get_field('pavimentacao') || get_field('lazer') || get_field('sinalizacao') || get_field('muro') || get_field('terraplanagem') || get_field('agua_e_esgoto') || get_field('eletrica') || get_field('passeios_e_calcadas') || get_field('areas_edificaveis') || get_field('avenida_de_acesso')) { ?>
  <div class="andamento-obra">
    <div class="container-padrao">
      <h2 class="heading-2 center"><strong class="destaque-h2">Andamento</strong> da Obra</h2>
      <p class="paragraph-16">Acompanhe por aqui o andamento da construção do loteamento em detalhes<br></p>
      <div class="div-andamento">
        <?php if (get_field('drenagem') || get_field('drenagem') === '0') { ?>
          <div id="w-node-3b024f14cf8a-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-drenagem.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('drenagem') ?>%;" class="div-evolucao areas-edificaveis"></div>
            </div>
            <div class="text-block-12">Drenagem<br><strong class="bold-text-3"><?= the_field('drenagem') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('terraplanagem') || get_field('terraplanagem') === '0') { ?>
          <div id="w-node-196d89487d94-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="https://urba.com.br/wp-content/uploads/2022/10/icons_terraplanagem.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('terraplanagem') ?>%;" class="div-evolucao terraplanagem"></div>
            </div>
            <div class="text-block-12">Terraplanagem<br><strong class="bold-text-3"><?= the_field('terraplanagem') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('agua') || get_field('agua') === '0') { ?>
          <div id="w-node-fd257c06e2f2-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="https://urba.com.br/wp-content/uploads/2022/10/6350644948dbe91134ef8290_Site.png" width="36" alt="Icone" class="image-7">
              <div style="height: <?= the_field('agua') ?>%;" class="div-evolucao agua-e-esgoto"></div>
            </div>
            <div class="text-block-12">Rede de Água<br><strong class="bold-text-3"><?= the_field('agua') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('esgoto') || get_field('esgoto') === '0') { ?>
          <div id="w-node-fd257c06e2f2-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-agua-esgoto.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('esgoto') ?>%;" class="div-evolucao agua-e-esgoto"></div>
            </div>
            <div class="text-block-12">Rede de Esgoto<br><strong class="bold-text-3"><?= the_field('esgoto') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('lazer') || get_field('lazer') === '0') { ?>
          <div id="w-node-c80dbdc2c761-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="https://urba.com.br/wp-content/uploads/2022/10/icons_lazer_2.png" width="80" alt="Icone" class="image-7">
              <div style=" height: calc(<?= the_field('lazer') ?>% - 10%);" class="div-evolucao lazer"></div>
            </div>
            <div class="text-block-12">Lazer<br><strong class="bold-text-3"><?= the_field('lazer') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('paisagismo') || get_field('paisagismo') === '0') { ?>
          <div id="w-node-c80dbdc2c761-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-paisagismo.png" width="80" alt="Icone" class="image-7">
              <div style=" height: <?= the_field('paisagismo') ?>%;" class="div-evolucao paisagismo"></div>
            </div>
            <div class="text-block-12">Paisagismo<br><strong class="bold-text-3"><?= the_field('paisagismo') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('pavimentacao') || get_field('pavimentacao') === '0') { ?>
          <div id="w-node-1dce1ffae6ac-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-pavimentacao.png" width="80" alt="Icone" class="image-7">
              <div style="height: calc(<?= the_field('pavimentacao') ?>% - 10%);" class="div-evolucao pavimentacao"></div>
            </div>
            <div class="text-block-12">Pavimentação<br><strong class="bold-text-3"><?= the_field('pavimentacao') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('muro') || get_field('muro') === '0') { ?>
          <div id="w-node-3b024f14cf8a-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-muro.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('muro') ?>%;" class="div-evolucao areas-edificaveis"></div>
            </div>
            <div class="text-block-12">Muro<br><strong class="bold-text-3"><?= the_field('muro') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('eletrica') || get_field('eletrica') === '0') { ?>
          <div id="w-node-3c3663ec4719-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-eletrica.png" width="80" alt="Icone" class="image-7">
              <div style="height: calc(<?= the_field('eletrica') ?>% - 10%);" class="div-evolucao eletrica"></div>
            </div>
            <div class="text-block-12">Elétrica<br><strong class="bold-text-3"><?= the_field('eletrica') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('passeios_e_calcadas') || get_field('passeios_e_calcadas') === '0') { ?>
          <div id="w-node-ef53cf54d303-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-passeios-e-calcadas.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('passeios_e_calcadas') ?>%;" class="div-evolucao passeios-calcadas"></div>
            </div>
            <div class="text-block-12">Passeios e Calçadas<br><strong class="bold-text-3"><?= the_field('passeios_e_calcadas') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('areas_edificaveis') || get_field('areas_edificaveis') === '0') { ?>
          <div id="w-node-3b024f14cf8a-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-areas-edificaveis.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('areas_edificaveis') ?>%;" class="div-evolucao areas-edificaveis"></div>
            </div>
            <div class="text-block-12">Áreas Edificáveis<br><strong class="bold-text-3"><?= the_field('areas_edificaveis') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('sinalizacao') || get_field('sinalizacao') === '0') { ?>
          <div id="w-node-3b024f14cf8b-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-passeios-e-calcadas.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('sinalizacao') ?>%;" class="div-evolucao sinalizacao"></div>
            </div>
            <div class="text-block-12">Sinalização<br><strong class="bold-text-3"><?= the_field('sinalizacao') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('avenida_de_acesso') || get_field('avenida_de_acesso') === '0') { ?>
          <div id="w-node-3b024f14cf8a-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-avenidas-de-acesso.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('avenida_de_acesso') ?>%;" class="div-evolucao areas-edificaveis"></div>
            </div>
            <div class="text-block-12">Avenida de Acesso<br><strong class="bold-text-3"><?= the_field('avenida_de_acesso') ?>%</strong></div>
          </div>
        <?php } ?>
      </div>
      <div class="div-lightbox-andamento">
        <a href="#" class="lightbox-link-6 w-inline-block w-lightbox">
          <div class="text-block-25">confira as fotos da obra</div>
          <script type="application/json" class="w-json">
            {
              "items": [
                <?php $fotos_da_obra = acf_photo_gallery('fotos_da_obra', $post->ID);
                if ($fotos_da_obra) { ?>
                  <?php foreach ($fotos_da_obra as $key => $image) {
                    if ($key !== 0) {
                      echo ',';
                    } ?> {
                      "caption": "<?php echo $image['caption']; ?>",
                      "url": "<?php echo $image['full_image_url']; ?>",
                      "_id": "<?php echo $image['id']; ?>",
                      "type": "image"
                    }
                  <?php } ?>
                <?php } ?>
              ]
            }
          </script>
        </a>
      </div>
    </div>
  </div>
<?php } ?>

<div class="section-cta">
  <div class="container-padrao">
    <h2 class="heading-2 center white call"><?= get_field('titulo_setima_dobra', get_the_id()) ?><br></h2>
    <div class="div-cta _2"><a href="#hero-form" class="button-10 w-button">QUERO CONVERSAR COM UM CONSULTOR</a></div>
  </div>
</div>
<div class="texto-legal">
  <div class="container-padrao">
    <!--<p class="paragraph-29">Este material tem caráter meramente ilustrativo por se tratar de bem a ser construído. Os materiais e cores representados poderão sofrer pequenas alterações sem prévio aviso em função da disponibilidade dos mesmos no mercado. Contrato padrão e demais condições estão disponíveis em nosso plantão de vendas. As condições ora indicadas poderão sofrer alterações sem prévia comunicação ou anuência dos interessados, para adequação ao mercado. Oferta válidas enquanto durarem os estoques. Loteamento Reserva Macaúba, Ribeirão Preto/SP, registrado no R. 7, mat. 180.372, em 07/06/18, do 1° Registro de Imóveis local. Aprovado no GRAPROHAB, certificado n°434/17, em 21/11/17 e pela Prefeitura pelo ato de aprovação nº 037/18,publicado no Diário Oficial do Município N° 10.386 em 09/02/18</p>-->
    <p class="paragraph-29">
      Este material tem caráter meramente ilustrativo por se tratar de bem a ser construído. Contrato padrão e demais condições estão disponíveis em nosso plantão de vendas. As condições ora indicadas poderão sofrer alterações sem prévia comunicação ou anuência dos interessados, para adequação ao mercado. Oferta válidas enquanto durarem os estoques. Loteamento Santa Iria Place na Cidade e Comarca de Ribeirão Preto/SP, aprovado pela Prefeitura Municipal de Ribeirão Preto/SP nos termos do Decreto Municipal nº 153, de 10 de julho de 2020, publicado no Diário Oficial do Município de Ribeirão Preto em 13 de julho de 2020, com Certificado de Aprovação e Termo de Compromisso emitidos pelo Grupo de Análise e Aprovação de Projetos Habitacionais - GRAPROHAB, ambos sob o nº 091/2019, datados de 13 de agosto de 2019. Loteamento registrado na matrícula nº 179.063 do 2º Oficial de Registro de Imóveis de Ribeirão Preto/SP sob o nº R07/179.083.
    </p>
  </div>
</div>

<?php get_footer(); ?>


<script>
  jQuery('#interesse-loteamento-lp').submit(function(e) {
    e.preventDefault();
    jQuery('#interesse-loteamento-lp input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#E-mail-2').val() && regex.test(jQuery('#E-mail-2').val()) && jQuery('#name').val() && jQuery('#Telefone').val() && jQuery('input[name=consentimento-de-comunicacao]:checked').length > 0) {
      var data_array = [{
          name: 'loteamento',
          value: "Santa Iria"
        },
        {
          name: 'nome',
          value: jQuery('#interesse-loteamento-lp #name').val()
        },
        {
          name: 'telefone',
          value: jQuery('#interesse-loteamento-lp #Telefone').val()
        },
        {
          name: 'email',
          value: jQuery('#interesse-loteamento-lp #E-mail-2').val()
        },
        {
          name: 'Segmento em que atua',
          value: jQuery('#interesse-loteamento-lp #Segmento-em-que-atua option:selected').val()
        },
        {
          name: 'consentimento-de-comunicacao',
          value: 'granted'
        },
        {
          name: 'idempreendimento',
          value: jQuery('#interesse-loteamento-lp #idempreendimento').val()
        },
        {
          name: 'identificador',
          value: "Interesse Comercial - Santa Iria"
        }, //descobrir o valor da identificação
        {
          name: 'token_rdstation',
          value: 'ddd19ee74dc5eca035093f12ac6ef0d2'
        }
      ];
      RdIntegration.post(data_array, function() {
        window.location = "https://urba.com.br/obrigado/";
        return false;
      });
    } else {
      jQuery('#interesse-loteamento-lp input[type=submit]').val('Enviar');
      alert('Preencha seus dados');
    }
  });
</script>
<style type="text/css">
  .acf-map {
    width: 100%;
    height: 480px;
    border: #ccc solid 1px;
    margin: 0px 0;
  }

  .acf-map img {
    max-width: inherit !important;
  }

  .text-block-25 {
    border-radius: 5px
  }
</style>

<!-- <style type="text/css">
  .zoom:after {
      content:'';
      display:block;
      width:33px;
      height:33px;
      position:absolute;
      top:0;
      right:0;
      background:url(<?= get_stylesheet_directory_uri() ?>/js/zoom/icon.png);
    }

    .zoom img {
      display: block;
    }
</style> -->
<script type="text/javascript">
  (function($) {
    $('#implantacao_img')
      .wrap('<span style="display:inline-block"></span>')
      .css('display', 'block')
      .parent()
      .zoom({
        url: '<?= get_stylesheet_directory_uri() ?>/images/santa-iria-1920x1080.png'
      });

    function new_map($el) {
      var $markers = $el.find('.marker');
      var args = {
        zoom: 10,
        center: new google.maps.LatLng(0, 0),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map($el[0], args);
      map.markers = [];
      $markers.each(function() {
        add_marker($(this), map);
      });
      center_map(map);
      return map;
    }

    function add_marker($marker, map) {
      var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
      var marker = new google.maps.Marker({
        position: latlng,
        map: map
      });
      map.markers.push(marker);
      if ($marker.html()) {
        var infowindow = new google.maps.InfoWindow({
          content: $marker.html()
        });
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map, marker);
        });
      }
    }

    function center_map(map) {
      var bounds = new google.maps.LatLngBounds();
      $.each(map.markers, function(i, marker) {
        var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
        bounds.extend(latlng);
      });
      if (map.markers.length == 1) {
        map.setCenter(bounds.getCenter());
        map.setZoom(16);
      } else {
        map.fitBounds(bounds);
      }
    }

    var map = null;
    $(document).ready(function() {
      $('.acf-map').each(function() {
        map = new_map($(this));
      });
    });
  })(jQuery);
</script>
<style>
  .enviar-form-lp {
    margin-top: -15px;
  }
</style>