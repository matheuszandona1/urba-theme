<?php
/*
Template Name: Reserva Regatas Residencial
*/
?>
  <?php get_header(); ?>
  <section id="hero-form" class="hero-landing regatas" style="background-image: linear-gradient(90deg, rgba(3, 3, 3, 0.5), rgba(49, 49, 49, 0) 57%), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= get_stylesheet_directory_uri()?>/images/residencial/hero.jpg);">
    <div class="container-padrao">
      <div class="div-logos-hero regatas"><img src="<?= get_stylesheet_directory_uri()?>/images/reserva-regatas-logo.png" width="125" alt="" class="image-13"></div>
      <div class="div-info-hero">
        <div class="w-row">
          <div class="col-text w-col w-col-6">
            <div class="box">
            	<?php $titulo_hero = get_field('titulo_hero', get_the_id()); ?>
              <h1 class="heading-lp"><strong class="destaque-lp">Vem aí o bairro planejado</strong> mais completo de Ribeirão Preto<br></h1>
            </div>
            <div class="div-tags">
              <div>
              	<?php $tags = get_field('tags', get_the_id()); ?>
                <div class="tag-hero">AMPLA ÁREA VERDE</div>
                <div class="tag-hero">LAZER E ACESSIBILIDADE</div>
                <div class="tag-hero">COMÉRCIO E SERVIÇOS</div>
              </div>
            </div>
          </div>
          <div class="col-forms w-col w-col-6">
            <div class="div-forms-hero">
              <h3 class="heading-21"><?= get_field('titulo_formulario', get_the_id()) ?></h3>
                <form id="interesse-loteamento-lp" name="email-form" data-name="Email Form" class="form-7">
                  <label for="name" class="label-form-lp">Nome</label><input type="text" class="campo-form-lp w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name" required>
                  <label for="E-mail-2" class="label-form-lp">E-mail</label><input type="email" class="campo-form-lp w-input" maxlength="256" name="E-mail" data-name="E-mail" id="E-mail-2" required>
                  <label for="Telefone" class="label-form-lp">WhatsApp</label><input type="tel" class="campo-form-lp w-input" minlength="15" maxlength="15" onkeypress="MascaraTelefone(this);" name="Telefone" data-name="Telefone" id="Telefone" required>
                  <label for="Tempo" class="label-form-lp">Em quanto tempo você tem interesse em comprar seu terreno?</label>
                  <select id="tempo-regatas" name="tempo" data-name="tempo" class="select-field-4 w-select" required>
                    <option value="Esse mês">Esse mês</option>
                    <option value="Nos próximos 3 meses">Nos próximos 3 meses</option>
                    <option value="Entre os próximos 3 e 12 meses">Entre os próximos 3 e 12 meses</option>
                    <option value="Não tenho interesse, estou apenas pesquisando">Não tenho interesse, estou apenas pesquisando</option>
                  </select>
                  <div class="w-row bloco_consentimento">
                    <div class="w-col">
                    <p class="texto-politica">Precisamos dos seus dados para manter contato com você e prosseguir com seu atendimento, de acordo com nossa <a href="https://mrv.com.br/institucional/pt/politica-de-privacidade" class="link-politica">Política de Privacidade</a>.</p>
                    <label class="checkbox-button-field-2 w-checkbox"><input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" value="Ok, entendi!" class="w-form-formcheckboxinput w-checkbox-input" required><span for="Proprietário" class="checkbox-button-label w-form-label" id="texto-politica">Ok, entendi!</span>
                    </label>
                    </div>
                  </div>
                    <input type="submit" value="falar com um consultor" data-wait="Aguarde..." class="enviar-form-lp w-button"></form>
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
      <div class="tag-breve-lan-amento comercial"><div class="breve-lancamento"> &nbsp;&nbsp;breve lançamento</div></div>
    </div>
  </section>
  <div class="infos-terreno">
    <div class="container-padrao">
      <?php $destaques = get_field('destaques_desc'); ?>
      <div class="div-infos-terreno">
        <div data-w-id="5b2e0ec8-6296-3122-3294-a25915ec3bb0" style="opacity:0" class="div-info-terreno"><img src="<?= get_stylesheet_directory_uri()?>/images/residencial/icone1.png" width="130" alt="Icone" class="image-4">
          <div class="text-block-8">Terrenos a partir de 171 m²</div>
        </div>
        <div data-w-id="4a19bfba-b099-a58b-e082-bfaf50dccdf2" style="opacity:0" class="div-info-terreno end-mobile"><img src="<?= get_stylesheet_directory_uri()?>/images/residencial/icone2.png" width="130" alt="Icone" class="image-4">
          <div class="text-block-8">Bairro planejado</div>
        </div>
        <div data-w-id="45bedf70-5e9e-57cf-dcb3-a650222eb2a2" style="opacity:0" class="div-info-terreno"><img src="<?= get_stylesheet_directory_uri()?>/images/residencial/icone3.png" width="130" alt="Icone" class="image-4">
          <div class="text-block-8">Qualidade ambiental e acessibilidade</div>
        </div>
        <div data-w-id="f1192464-aabc-97e5-e8a8-87e07178f88d" style="opacity:0" class="div-info-terreno end"><img src="<?= get_stylesheet_directory_uri()?>/images/residencial/icone4.png" width="130" alt="Icone" class="image-4">
          <div class="text-block-8">Breve lançamento</div>
        </div>
      </div>
      <div class="div-text-terreno">
          <p class="paragraph-16">Fruto da parceria de sucesso entre o Grupo WTB, a Urba e a MRV, o Reserva Regatas é um bairro totalmente planejado, com um mix de produtos composto por lotes residenciais, comerciais e industriais. Qualidade de vida é viver em uma localização estratégica, próximo às Rodovias Anhanguera e Cândido Portinari, em um novo bairro com área de lazer acessível para toda a família e mais de 145 mil m² de área verde.</p>
          <a href="#formulario" class="button-3 w-button">mude de vida agora</a>
        </div>
    </div>
  </div>
  <div class="caracteristicas">
    <div class="container-padrao">
      <h2 class="heading-2 center"><strong class="destaque-h2">Características</strong> do Loteamento</h2>
      <div class="div-caracteristicas">
        <div data-w-id="86641039-24a1-7300-0730-6636ef260df0" style="opacity: 1;" class="div-caracteristica regatas">
          <div class="imagem-caracteristica" style="background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url(<?= get_stylesheet_directory_uri()?>/images/residencial/infraestrutura.jpg)">
            <h3 class="heading-7">INFRAESTRUTURA</h3>
          </div>
          <div class="texto-caracteristica">
            <p>
            Um bairro <strong class="bold-text-4">desenvolvido de forma inteligente</strong> para você morar com muita qualidade de vida. 
            <br><br>
            Com infraestrutura planejada, o Reserva Regatas conta com 424 lotes, 100% das ruas asfaltadas, paisagismo em todo o loteamento, rede de água e esgoto, energia e mobiliário urbano.
            </p>
          </div>
        </div>
        <div data-w-id="86641039-24a1-7300-0730-6636ef260df0" style="opacity:0" class="div-caracteristica regatas">
          <div class="imagem-caracteristica" style="background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url(<?= get_stylesheet_directory_uri()?>/images/residencial/areas-verdes.jpg)">
            <h3 class="heading-7">ÁREAS VERDES</h3>
          </div>
          <div class="texto-caracteristica">
            <p>
            Para uma <strong class="bold-text-4">vida mais conectada com a natureza</strong>, nosso bairro conta com mais de 145 mil m² de áreas verdes de bosques com trilhas ecológicas, espaço das flores, praças e pomar.
            <br><br>
            Além de fauna e flora preservadas, tudo bem pertinho de casa para toda a família.
            </p>
          </div>
        </div>
        <div data-w-id="58f694a6-e2ea-5a2d-81ce-444659efc478" style="opacity:0" class="div-caracteristica regatas">
          <div class="imagem-caracteristica _2" style="background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url(<?= get_stylesheet_directory_uri()?>/images/residencial/lazer.jpg)">
            <h3 class="heading-7">LAZER E ACESSIBILIDADE</h3>
          </div>
          <div class="texto-caracteristica">
            <p>
            Contamos com <strong class="bold-text-4">mais de 92 mil m² de lazer</strong> para deixar o seu dia a dia e de sua família mais divertido com quadra gramada, pista de cooper, ciclovia, espaço de relaxamento e espaço pet.
            <br><br>
            Preparamos também <strong class="bold-text-4">espaços para pessoas com mobilidade reduzida</strong> como playground acessível, espaço fitness e ilhas de convívio dentro do bosque.
            </p>
          </div>
        </div>
        <div data-w-id="48b6015e-7755-3c2e-600a-aca4e030d055" style="opacity:0" class="div-caracteristica regatas">
          <div class="imagem-caracteristica _3" style="background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url(<?= get_stylesheet_directory_uri()?>/images/residencial/comercial.jpg)">
            <h3 class="heading-7">ÁREA COMERCIAL</h3>
          </div>
          <div class="texto-caracteristica">
            <p>
            Pensando em <strong class="bold-text-4">facilitar o seu dia a dia</strong> preparamos uma área de lotes <strong class="bold-text-4">comerciais e industriais</strong> bem pertinho de casa, com acesso rápido a bens e serviços. 
            <br><br>
            <strong class="bold-text-4">Empreendedor, contamos com lotes de 170 m² até 1.500 m²</strong> às margens da Rodovia Anhanguera. Traga seu negócio para o Reserva Regatas e aproveite um público potencial de mais de 6.200 pessoas. <a style="color: #ff8b22;" href="https://urba.com.br/loteamentos-comerciais/reserva-regatas">Clique aqui</a> e saiba mais.
            </p>
          </div>
        </div>
      </div>
    </div>
    <?php if ($areaslazer) { ?>
      <div class="div-itens-lazer" style="transition: height 300ms ease-out 0s; height: 0px;"><div class="div-close" data-ix="close-lazer"><div class="text-block-13">x</div></div>
        <div class="div-elementos _1">
        <?php foreach( $areaslazer as $area ): ?>
          <div class="div-elemento-lazer"><img src="<?=get_stylesheet_directory_uri()?>/images/icons_lazer-<?=$area['value']?>.png" width="80" alt="Icone"><div class="text-block-14"><?= $area['label']; ?></div></div>
        <?php endforeach; ?>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="galeria-de-fotos">
    <div class="columns-5 w-row">
      <div class="column-25 w-col w-col-6">
        <div class="seta"></div>
        <div class="div-title-info-galeria">
          <h2 class="heading-2 galeria"><strong class="bold-text-23">Explore</strong> o Loteamento na Galeria</h2><img src="<?=get_stylesheet_directory_uri()?>/images/arrow.png" data-w-id="3f3833b2-2016-5988-f5db-9daaa9e2fb2c" alt="Seta" class="image-9"><a href="#formulario" class="button-3 galeria w-button">Adquira já esse terreno</a></div>
      </div>
      <?php $images = acf_photo_gallery('galeria', $post->ID);?>
      <div class="column-26 w-col w-col-6"><a href="#" class="lightbox-link w-inline-block w-lightbox"><img src="<?php echo $images[0]['full_image_url']; ?>" height="400" width="640" alt="Ver galeria" class="image-5"><script type="application/json" class="w-json">{
  "items": [
  <?php if( $images ) { ?>
    <?php foreach( $images as $key => $image ) {
      if ($key !== 0) {echo ',';}?>
      {
        "caption": "<?php echo $image['caption']; ?>",
        "url": "<?php echo $image['full_image_url']; ?>",
        "_id": "<?php echo $image['id']; ?>",
        "type": "image"
      }
    <?php } ?>
  <?php } ?>
  ]
}</script></a></div>
    </div>
  </div>
  <div class="localizacao">
    <div class="columns-6 w-row">
      <div class="column-27 w-col w-col-5">
        <div class="div-title-info-localizacao">
          <h2 class="heading-2 localiz">Localização</h2>
          <p class="paragraph-16 localiz">O Reserva Regata se encontra em uma localização estratégica, na confluência das <strong class="bold-text-4">Rodovias Anhanguera</strong> e Cândido Portinari, com fácil acesso ao <strong class="bold-text-4">Aeroporto Leite Lopes</strong>, às demais regiões de Ribeirão Preto e dos estados de São Paulo e Minas Gerais.</p>
        </div>
      </div>
      <div class="column-28 w-col w-col-7">
        <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
          <div class="tabs-menu w-tab-menu">
            <a data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link w--current">
              <div>Mapa</div>
            </a>
            <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link w--current">
              <div>Foto Aérea</div>
            </a>
          </div>
          <div class="w-tab-content">
            <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--tab-active">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.88563102567!2d-47.799382685065105!3d-21.156949285929063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9bfb1e0d40001%3A0x8e04a135335d2428!2sAv.%20Saudade%2C%201931%20-%20Campos%20El%C3%ADsios%2C%20Ribeir%C3%A3o%20Preto%20-%20SP%2C%2014080-000!5e0!3m2!1spt-BR!2sbr!4v1605208659864!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <!--<div class="teste_mapa">
                  <?php 
                    $location = get_field('teste_mapa');
                    if( !empty($location) ):
                    ?>
                    <div class="acf-map">
                      <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                    </div>
                    <?php endif; ?>
                </div>-->
            </div>
            <div data-w-tab="Tab 2" class="tab-pane-tab-2 w-tab-pane w--tab-active"><a href="#" class="lightbox-link-2 w-inline-block w-lightbox"><img src="<?php the_field('foto_aerea'); ?>" alt="Foto aérea" class="image-6"><script type="application/json" class="w-json">{
  "items": [
    {
      "type": "image",
      "url": "<?php the_field('foto_aerea'); ?>"
    }
  ]
}</script></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="planta">
    <div class="container-padrao">
      <h2 class="heading-2 center">Sua Casa dos Sonhos <strong class="destaque-h2">Pode ser Assim</strong></h2>
      <p class="paragraph-16">A Urba preparou essa sugestão de projeto para a sua futura casa. Fique à vontade para se inspirar!<strong class="bold-text-2"></strong><br></p>
      <div class="text-block-11">*Projeto não comercializado pela Urba</div>
      <div class="columns-7 w-row">
        <div class="column-29 w-col w-col-8">
          <a href="#" data-w-id="c426b8fb-a8ab-f5fd-14fc-4df463ae0ee1" style="opacity:0" class="lightbox-link-4 w-inline-block w-lightbox">
            <div class="div-img-casa" style="background-image: url('<?php the_field('imagem_casasonhos'); ?>')"></div>
            <script type="application/json" class="w-json">{
  "items": [
    {
      "type": "image",
      "url": "<?php the_field('imagem_casasonhos'); ?>"
    }
  ]
}</script>
          </a>
        </div>
        <div class="column-30 w-col w-col-2">
          <a href="#" data-w-id="2ba8ffd4-19cf-22a7-5f66-00feef640ffd" style="opacity:0" class="lightbox-link-3 w-inline-block w-lightbox">
            <div class="div-planta-01" style="background-image: url('<?php the_field('planta_1_casasonhos'); ?>')"></div>
            <script type="application/json" class="w-json">{
  "items": [
    {
      "type": "image",
      "url": "<?php the_field('planta_1_casasonhos'); ?>"
    }
  ]
}</script>
          </a>
        </div>
        <div class="column-31 w-col w-col-2">
          <a href="#" data-w-id="15041d83-fed3-e9e7-68c3-6a3f2bf2b2b6" style="opacity:0" class="lightbox-link-5 w-inline-block w-lightbox">
            <div class="div-planta-02" style="background-image: url('<?php the_field('planta_2_casasonhos'); ?>')"></div>
            <script type="application/json" class="w-json">{
  "items": [
    {
      "type": "image",
      "url": "<?php the_field('planta_2_casasonhos'); ?>"
    }
  ]
}</script>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php if (get_field('drenagem') || get_field('paisagismo') || get_field('pavimentacao') || get_field('muro') || get_field('terraplanagem') || get_field('agua_e_esgoto') || get_field('eletrica') || get_field('passeios_e_calcadas') || get_field('areas_edificaveis') || get_field('avenida_de_acesso')) { ?>
  <div class="andamento-obra">
    <div class="container-padrao">
      <h2 class="heading-2 center"><strong class="destaque-h2">Andamento</strong> da Obra</h2>
      <p class="paragraph-16">Acompanhe por aqui o andamento da construção do loteamento em detalhes<br></p>
      <div class="div-andamento">
        <?php if (get_field('drenagem') || get_field('drenagem') === '0') { ?>
        <div id="w-node-3b024f14cf8a-c488da31" class="div-etapa">
          <div class="div-grafico"><img src="<?=get_stylesheet_directory_uri()?>/images/icone-pag_empreendimentos-drenagem.png" width="80" alt="Icone" class="image-7">
            <div data-w-id="0a78eb64-b467-5d9e-5e86-3b024f14cf8d" style="opacity:0; height: <?=the_field('drenagem')?>%;" class="div-evolucao areas-edificaveis"></div>
          </div>
          <div class="text-block-12">Drenagem<br><strong class="bold-text-3"><?=the_field('drenagem')?>%</strong></div>
        </div>
        <?php } ?>
        <?php if (get_field('paisagismo') || get_field('paisagismo') === '0') { ?>
        <div id="w-node-c80dbdc2c761-c488da31" class="div-etapa">
          <div class="div-grafico"><img src="<?=get_stylesheet_directory_uri()?>/images/icone-pag_empreendimentos-paisagismo.png" width="80" alt="Icone" class="image-7">
            <div data-w-id="a7cac5fe-a770-58d2-8fe4-92021111dc2c" style="opacity:0; height: <?=the_field('paisagismo')?>%;" class="div-evolucao paisagismo"></div>
          </div>
          <div class="text-block-12">Paisagismo<br><strong class="bold-text-3"><?=the_field('paisagismo')?>%</strong></div>
        </div>
        <?php } ?>
        <?php if (get_field('pavimentacao') || get_field('pavimentacao') === '0') { ?>
        <div id="w-node-1dce1ffae6ac-c488da31" class="div-etapa">
          <div class="div-grafico"><img src="<?=get_stylesheet_directory_uri()?>/images/icone-pag_empreendimentos-pavimentacao.png" width="80" alt="Icone" class="image-7">
            <div data-w-id="85a3680c-d7b6-e02a-6a0e-1dce1ffae6af" style="opacity:0; height: <?=the_field('pavimentacao')?>%;" class="div-evolucao pavimentacao"></div>
          </div>
          <div class="text-block-12">Pavimentação<br><strong class="bold-text-3"><?=the_field('pavimentacao')?>%</strong></div>
        </div>
        <?php } ?>
        <?php if (get_field('muro') || get_field('muro') === '0') { ?>
        <div id="w-node-3b024f14cf8a-c488da31" class="div-etapa">
          <div class="div-grafico"><img src="<?=get_stylesheet_directory_uri()?>/images/icone-pag_empreendimentos-muro.png" width="80" alt="Icone" class="image-7">
            <div data-w-id="0a78eb64-b467-5d9e-5e86-3b024f14cf8d" style="opacity:0; height: <?=the_field('muro')?>%;" class="div-evolucao areas-edificaveis"></div>
          </div>
          <div class="text-block-12">Muro<br><strong class="bold-text-3"><?=the_field('muro')?>%</strong></div>
        </div>
        <?php } ?>
        <?php if (get_field('terraplanagem') || get_field('terraplanagem') === '0') { ?>
        <div id="w-node-196d89487d94-c488da31" class="div-etapa">
          <div class="div-grafico"><img src="<?=get_stylesheet_directory_uri()?>/images/icone-pag_empreendimentos-terraplanagem.png" width="80" alt="Icone" class="image-7">
            <div data-w-id="becaf4aa-22bf-6395-f491-196d89487d97" style="opacity:0; height: <?=the_field('terraplanagem')?>%;" class="div-evolucao terraplanagem"></div>
          </div>
          <div class="text-block-12">Terraplanagem<br><strong class="bold-text-3"><?=the_field('terraplanagem')?>%</strong></div>
        </div>
        <?php } ?>
        <?php if (get_field('agua_e_esgoto') || get_field('agua_e_esgoto') === '0') { ?>
        <div id="w-node-fd257c06e2f2-c488da31" class="div-etapa">
          <div class="div-grafico"><img src="<?=get_stylesheet_directory_uri()?>/images/icone-pag_empreendimentos-agua-esgoto.png" width="80" alt="Icone" class="image-7">
            <div data-w-id="33ff7a00-029d-371e-a001-fd257c06e2f5" style="opacity:0; height: <?=the_field('agua_e_esgoto')?>%;" class="div-evolucao agua-e-esgoto"></div>
          </div>
          <div class="text-block-12">Água e Esgoto<br><strong class="bold-text-3"><?=the_field('agua_e_esgoto')?>%</strong></div>
        </div>
        <?php } ?>
        <?php if (get_field('eletrica') || get_field('eletrica') === '0') { ?>
        <div id="w-node-3c3663ec4719-c488da31" class="div-etapa">
          <div class="div-grafico"><img src="<?=get_stylesheet_directory_uri()?>/images/icone-pag_empreendimentos-eletrica.png" width="80" alt="Icone" class="image-7">
            <div data-w-id="a078d2ae-fdf4-a339-e708-3c3663ec471c" style="opacity:0; height: <?=the_field('eletrica')?>%;" class="div-evolucao eletrica"></div>
          </div>
          <div class="text-block-12">Elétrica<br><strong class="bold-text-3"><?=the_field('eletrica')?>%</strong></div>
        </div>
        <?php } ?>
        <?php if (get_field('passeios_e_calcadas') || get_field('passeios_e_calcadas') === '0') { ?>
        <div id="w-node-ef53cf54d303-c488da31" class="div-etapa">
          <div class="div-grafico"><img src="<?=get_stylesheet_directory_uri()?>/images/icone-pag_empreendimentos-passeios-e-calcadas.png" width="80" alt="Icone" class="image-7">
            <div data-w-id="863f6c4e-0442-b4a0-dd15-ef53cf54d306" style="opacity:0; height: <?=the_field('passeios_e_calcadas')?>%;" class="div-evolucao passeios-calcadas"></div>
          </div>
          <div class="text-block-12">Passeios e Calçadas<br><strong class="bold-text-3"><?=the_field('passeios_e_calcadas')?>%</strong></div>
        </div>
        <?php } ?>
        <?php if (get_field('areas_edificaveis') || get_field('areas_edificaveis') === '0') { ?>
        <div id="w-node-3b024f14cf8a-c488da31" class="div-etapa">
          <div class="div-grafico"><img src="<?=get_stylesheet_directory_uri()?>/images/icone-pag_empreendimentos-areas-edificaveis.png" width="80" alt="Icone" class="image-7">
            <div data-w-id="0a78eb64-b467-5d9e-5e86-3b024f14cf8d" style="opacity:0; height: <?=the_field('areas_edificaveis')?>%;" class="div-evolucao areas-edificaveis"></div>
          </div>
          <div class="text-block-12">Áreas Edificáveis<br><strong class="bold-text-3"><?=the_field('areas_edificaveis')?>%</strong></div>
        </div>
        <?php } ?>
        <?php if (get_field('avenida_de_acesso') || get_field('avenida_de_acesso') === '0') { ?>
        <div id="w-node-3b024f14cf8a-c488da31" class="div-etapa">
          <div class="div-grafico"><img src="<?=get_stylesheet_directory_uri()?>/images/icone-pag_empreendimentos-avenidas-de-acesso.png" width="80" alt="Icone" class="image-7">
            <div data-w-id="0a78eb64-b467-5d9e-5e86-3b024f14cf8d" style="opacity:0; height: <?=the_field('avenida_de_acesso')?>%;" class="div-evolucao areas-edificaveis"></div>
          </div>
          <div class="text-block-12">Avenida de Acesso<br><strong class="bold-text-3"><?=the_field('avenida_de_acesso')?>%</strong></div>
        </div>
        <?php } ?>
      </div>
      <div class="div-lightbox-andamento">
        <a href="#" class="lightbox-link-6 w-inline-block w-lightbox">
          <div class="text-block-25">confira as fotos da obra</div>
          <script type="application/json" class="w-json">{
  "items": [
  <?php $fotos_da_obra = acf_photo_gallery('fotos_da_obra', $post->ID);
   if( $fotos_da_obra ) { ?>
    <?php foreach( $fotos_da_obra as $key => $image ) {
      if ($key !== 0) {echo ',';}?>
      {
        "caption": "<?php echo $image['caption']; ?>",
        "url": "<?php echo $image['full_image_url']; ?>",
        "_id": "<?php echo $image['id']; ?>",
        "type": "image"
      }
    <?php } ?>
  <?php } ?>
  ]
}</script>
        </a>
      </div>
    </div>
  </div>
  <?php } ?>
  <?php if (get_field('texto_pagamento')) { ?>
    <div class="andamento-obra forma-de-pagamento">
      <div class="container-padrao">
        <h2 class="heading-2 center"><strong class="destaque-h2">Formas de Pagamento</strong> e Pacotes</h2>
        <div id="texto_pagamento"><?=get_field('texto_pagamento')?></div>
        <div class="div-button _2" data-ix="open-formbox"><a href="#" class="button-2 _2 w-button">saiba mais</a></div>
        <div class="text-block-34 _2"><?=get_field('observacao_pagamento')?><br></div>
      </div>
    </div>
  <?php } 
  $cidade_lot = get_the_terms( get_the_ID() , array( 'cidade_loteamentos') );?>
  <section id="formulario" class="formulario regatas" style="background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url(<?= the_field('background-form') ?>)">
    <div class="container-padrao">
      <div class="div-forms interna">
        <h2 class="heading-2 forms">Gostou? Entre em <strong class="destaque-h2">Contato Conosco</strong></h2>
        <div class="">
          <form id="interesse-loteamento" name="interesse-loteamento" class="form-2">
              <input type="hidden" id="idempreendimento" name="idempreendimento" value="<?php the_field('id_loteamentos'); ?>">
              <input type="hidden" id="cidade-il" name="cidade" value="<?= $cidade_lot[0]->name ?>">
              <input type="hidden" name="loteamento" id="loteamento-il" value="<?= the_title() ?>">
            <div class="columns-9 w-row" style="max-width:550px; margin:0 auto 10px;">
              <div class="w-col w-col-12"><input type="text" class="text-field-2 w-input" maxlength="256" name="nome" data-name="Nome" placeholder="Nome" id="nome-il" required=""></div>
              <div class="w-col w-col-6"><input type="email" class="text-field-2 w-input" maxlength="256" name="email" data-name="E-mail" placeholder="E-mail" id="email-il" required=""></div>
              <div class="w-col w-col-6"><input type="tel" class="text-field-2 w-input"  minlength="15" maxlength="15" onkeypress="MascaraTelefone(this);" name="telefone" data-name="Telefone" placeholder="Telefone" id="telefone-il" required=""></div>
              <div class="w-col w-col-12 "><select id="tempo-il" name="tempo" data-name="tempo" class="escolha-cidade uf w-select"><option value="" disabled="" selected="">Em quanto tempo você tem interesse em comprar seu terreno?</option><option value="Esse mês">Esse mês</option><option value="Nos próximos 3 meses">Nos próximos 3 meses</option><option value="Entre os próximos 3 e 12 meses">Entre os próximos 3 e 12 meses</option><option value="Não tenho interesse, estou apenas pesquisando">Não tenho interesse, estou apenas pesquisando</option></select></div>
              <div class="w-row bloco_consentimento">
                <div class="w-col">
                <p><br>Precisamos dos seus dados para manter contato com você e prosseguir com seu atendimento, de acordo com nossa <a href="https://mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>
                <label class="checkbox-button-field-2 w-checkbox"><input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" value="Ok, entendi!" class="w-form-formcheckboxinput w-checkbox-input" required><span for="Proprietário" class="checkbox-button-label w-form-label">Ok, entendi!</span>
                </label>
                </div>
              </div>
            </div>

            <input type="submit" value="Enviar" data-wait="Aguarde..." class="submit-button-2 w-button" id="<?= $post->post_name ?>"></form>
        </div>
      </div>
    </div>
  </section>
  <?php if (get_field('video')) { ?>
  <div class="multimidia">
    <div class="container-padrao">
      <h2 class="heading-2 forms">Sessão <strong class="destaque-h2">Multimídia</strong></h2>
      <div class="div-midia">
        <div id="w-node-dbadbb53007f-2efac005" class="w-embed-youtubevideo">
          <?php the_field('video'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <style>
    .visite {
      background-color: #ec8515;
      padding: 80px 0;
    }

    .visite a {
      color: #fff;
      display: block;
      text-align: center;
      margin-bottom: 15px;
    }
  </style>
  <div class="visite wf-section">
    <div class="container-padrao-3 w-container">
      <svg width="42" height="70" viewBox="0 0 42 70" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin: 0 auto; display:block; margin-bottom: 10px;">
        <path d="M21 0C9.68939 0 0.487671 9.20172 0.487671 20.5123C0.487671 23.5969 1.15581 26.5613 2.47299 29.3253C2.4995 29.3845 2.52734 29.4425 2.55704 29.5006L18.0551 59.5081C18.6241 60.6095 19.7602 61.3015 20.9997 61.3015C22.2395 61.3015 23.3756 60.6098 23.9443 59.5081L39.4382 29.5088C39.4649 29.4571 39.4899 29.4049 39.5137 29.3521C40.8396 26.5802 41.5118 23.6067 41.5118 20.5123C41.5123 9.20172 32.3106 0 21 0ZM21 31.2489C15.0798 31.2489 10.2634 26.4325 10.2634 20.5123C10.2634 14.5924 15.0798 9.776 21 9.776C26.9201 9.776 31.7366 14.5924 31.7366 20.5123C31.7366 26.4325 26.9201 31.2489 21 31.2489Z" fill="white" />
        <path d="M28.9012 66.0229H13.0987C12.0003 66.0229 11.1102 66.913 11.1102 68.0115C11.1102 69.1099 12.0003 70 13.0987 70H28.9012C29.9997 70 30.8897 69.1099 30.8897 68.0115C30.8897 66.913 29.9994 66.0229 28.9012 66.0229Z" fill="white" />
      </svg>

      <h2 style="font-weight:600" class="h1-2 verde-claro center">Visite nossa loja:</h2>
      <a href="https://goo.gl/maps/24fsnwE1q7LQ38sX7" target="_blank">Av. Presidente Vargas, nº 2035 – Jd. Sta Ângela, Ribeirão Preto - SP| CEP: 14.020-525 </a>
    </div>
  </div>
  <div class="ficha-tecnica">
    <div class="container-padrao">
      <h2 class="heading-2 forms">Ficha Técnica</h2>
      <div class="columns-11 w-row">
        <div class="column-46 w-col w-col-6">
          <ul class="list-5">
            <li class="list-item"><strong>Nome do empreendimento: </strong>Reserva Regatas</li>
            <li class="list-item"><strong>Tipo de empreendimento: </strong>Loteamento aberto</li>
            <li class="list-item"><strong>Incorporadora: </strong>Grupo WTB, Urba e MRV</li>
            <li class="list-item"><strong>Total de lotes: </strong>729</li>
            <li class="list-item"><strong>Metragem dos lotes: </strong>171m² a 1.504 m²</li>
            <li class="list-item"><strong>Quantidade de quadras: </strong>21</li>
          </ul>
        </div>
        <div class="column-46 w-col w-col-6">
          <ul class="list-5">
            <li class="list-item"><strong>Infraestrutura: </strong>Terraplenagem, Drenagem, Rede de água e esgoto, elétrica, pavimentação, praças e revegetação e recuperação de 109.320,26 m² de áreas verdes</li>
            <li class="list-item"><strong>Área total: </strong>575.909,01 m²</li>
            <li class="list-item"><strong>Área de lazer: </strong>92.262,68 m²</li>
            <li class="list-item"><strong>Itens da área de lazer: </strong>Quadra gramada, playground, pista de cooper, espaço fitness, trilha ecológica, ciclovia, espaço pet, espaço de relaxamento e praça das flores e dos aromas.</li>
            <li class="list-item"><strong>Área verde: </strong>109mil m²</li>
            <!--<li class="list-item"><strong>Registro: </strong></li>-->
          </ul>
        </div>
      </div>
    </div>
  </div><?php get_footer(); ?>


  <script>
  jQuery('#interesse-loteamento-lp').submit(function(e){
    e.preventDefault();
    jQuery('#interesse-loteamento-lp input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#E-mail-2').val() && regex.test(jQuery('#E-mail-2').val()) && jQuery('#name').val() && jQuery('#Telefone').val() && jQuery('input[name=consentimento-de-comunicacao]:checked').length>0) {
        var data_array = [
            { name: 'loteamento', value:"Reserva Regatas"},
            { name: 'nome', value: jQuery('#interesse-loteamento-lp #name').val() },
            { name: 'telefone', value: jQuery('#interesse-loteamento-lp #Telefone').val() },
            { name: 'email', value: jQuery('#interesse-loteamento-lp #E-mail-2').val() },
            { name: 'tempo', value: jQuery('#interesse-loteamento-lp #tempo-regatas option:selected' ).val() },
            { name: 'consentimento-de-comunicacao', value: 'granted' }, 
            { name: 'idempreendimento', value: jQuery('#interesse-loteamento-lp #idempreendimento').val() },
            { name: 'identificador', value: "Interesse Residencial - Reserva Regatas" }, //descobrir o valor da identificação
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
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
.acf-map {width: 100%; height: 680px; border: #ccc solid 1px; margin: 0px 0;}
.acf-map img {max-width: inherit !important;}
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrzRGSxTLOp6uekQFsyYXbUSOPA42Yv98"></script>
<script type="text/javascript">
(function($) {
function new_map( $el ) {  
  var $markers = $el.find('.marker');
  var args = {
    zoom    : 10,
    center    : new google.maps.LatLng(0, 0),
    mapTypeId : google.maps.MapTypeId.ROADMAP
  };      
  var map = new google.maps.Map( $el[0], args);
  map.markers = [];  
  $markers.each(function(){
      add_marker( $(this), map );
  });
  center_map( map );
  return map;
}
function add_marker( $marker, map ) {
  var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
  var marker = new google.maps.Marker({
    position  : latlng,
    map     : map
  });
  map.markers.push( marker );
  if( $marker.html() ) {
    var infowindow = new google.maps.InfoWindow({
      content   : $marker.html()
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open( map, marker );
    });
  }
}
function center_map( map ) {
  var bounds = new google.maps.LatLngBounds();
  $.each( map.markers, function( i, marker ){
    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
    bounds.extend( latlng );
  });
  if( map.markers.length == 1 ) {
      map.setCenter( bounds.getCenter() );
      map.setZoom( 16 );
  } else  {
    map.fitBounds( bounds );
  }
}

var map = null;
$(document).ready(function(){
  $('.acf-map').each(function(){
    map = new_map( $(this) );
  });
});
})(jQuery);
</script>