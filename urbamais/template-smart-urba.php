<?php
/*
Template Name: Smart Urba
Template Post Type: page, loteamento
*/
?>
<?php get_header(); ?>
<style>
  .lotes-smarturba {
    display: block;
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: linear-gradient(45deg, #006b3f, #079d56);
    background-image: url('<?= get_stylesheet_directory_uri() ?>/images/smart-urba/pattern.png'), url('<?= get_stylesheet_directory_uri() ?>/images/smart-urba/pattern2.png'), linear-gradient(45deg, #006b3f, #079d56);
    background-position: 100% 50%, 0% 50%, 0px 0px;
    background-size: 30%, 30%, auto;
    background-repeat: no-repeat, no-repeat, repeat;
    height: 600px;
  }

  .tag-breve-lan-amento {
      position: absolute;
      left: auto;
      top: 0%;
      right: 0%;
      bottom: auto;
      overflow: hidden;
      width: 250px;
      height: 200px;
      margin-top: 100px;
  }

  .escolha-qual-smart {
    border-style: none none solid;
    border-width: 1px;
    border-color: #000 #000 #079d56;
    border-radius: 3px;
    box-shadow: 0 0 12px -3px rgb(0 0 0 / 15%);
    color: #079d56;
    font-weight: 300;
  }

  @media screen and (max-width: 479px) {
    .hero {
      height: auto;
      padding-top: 20px;
      padding-bottom: 60px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(55, 20, 73, 0.66)), to(rgba(55, 20, 73, 0.66))), url('<?= get_stylesheet_directory_uri() ?>/images/smart-urba/hero.jpg');
      background-image: linear-gradient(180deg, rgba(55, 20, 73, 0.66), rgba(55, 20, 73, 0.66)), url('<?= get_stylesheet_directory_uri() ?>/images/smart-urba/hero.jpg');
      background-position: 0px 0px, 60% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
    }

    .section-form {
      padding-top: 60px;
      padding-bottom: 120px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.5))), url('<?= get_stylesheet_directory_uri() ?>/images/smart-urba/form-smart-urba.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= get_stylesheet_directory_uri() ?>/images/smart-urba/form-smart-urba.jpg');
      background-position: 0px 0px, 10% 100%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
      background-attachment: scroll, fixed;
    }

    .lotes-smarturba {
      background-position: 180px, -230px, 0px 0px;
      background-size: 110%, 110%, auto;
      height: auto;
    }

    .div-empreendimento {
      width: 90% !important;
    }

    .breve-lancamento.boxx.laranja, .breve-lancamento.boxx {
      display: none;
    }

    .heading-3 {
        font-size: 15px;
    }

  }
</style>
<div class="hero">
  <div class="container-padrao extend"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-urba-logo.png" loading="lazy" data-w-id="b693ade1-9bf2-6bb7-43bd-4f1edf36053b" width="350" alt="Smart Urba" class="image-18">
    <div data-w-id="670d8cd0-739e-1cbd-a8da-398aa49fbc91" class="div-text-hero smart-urba">
      <h1 class="heading-25"><strong class="bold-text-38">Smart Urba:</strong> um jeito inteligente de morar!</h1>
      <h2 class="heading-26">Um projeto da Urba para você.</h2>
      <p class="paragraph-32"><strong>Realize seu sonho, vivendo em um bairro inteligente</strong>, sustentável e planejado para proporcionar uma experiência que integra praticidade e conforto, aliados a uma infraestrutura segura, tecnológica e com gestão social.</p>
      <a href="#video" class="button-11 smarturba w-button">Veja como funciona o Smart Urba</a>
    </div>
  </div>
  <!--<div class="tag-breve-lan-amento"><div class="breve-lancamento" style="font-size: 18px !important;"> &nbsp;&nbsp;Em Breve</div></div>-->
</div>
<div class="entenda">
  <div class="container-padrao">
    <h2 class="heading-2 smarturba-mobile">Entenda o que é <strong class="destaque-h2">Smart Urba</strong></h2>
    <div class="columns-21 w-row">
      <div class="column-61 w-col w-col-5">
        <p class="paragraph-33">Smart Urba é um jeito inteligente de viver, inspirado no conceito de Smart Cities, que busca democratizar o acesso à tendência de <strong class="bold-text-4">morar no futuro</strong>. Assim, você vive com mais inclusão, conexão com o mundo e com a natureza.</p>
        <p class="paragraph-33">Ainda, o Smart Urba proporciona maior cuidado com o meio ambiente, uma convivência mais segura e harmônica e um <strong class="bold-text-4">planejamento inteligente</strong> além dos metros quadrados do seu lote.</p>
        <p class="paragraph-33">Por isso, nossos bairros inteligentes serão capazes de oferecer a comodidade e praticidade que você precisa para ter uma vida mais tranquila no dia a dia.</p>
        <a href="#formulario" class="button-11 smarturba _2 w-button">Quero viver de forma inteligente</a>
      </div>
      <div class="column-60 w-col w-col-7">
        <div class="w-layout-grid grid-3">
          <div data-w-id="af744dc1-fcf2-9824-309a-437219712560" class="box-entenda"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/planejamento-inteligente.png" loading="lazy" width="50" alt="Planejamento Inteligente">
            <div class="text-block-48">Planejamento Inteligente</div>
          </div>
          <div data-w-id="5abb58fb-d357-89b9-8dcd-d99f9668f81d" class="box-entenda"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/mobilidade-acessibilidade.png" loading="lazy" width="50" alt="Mobilidade e Acessibilidade">
            <div class="text-block-48">Mobilidade e acessibilidade</div>
          </div>
          <div data-w-id="2ebc9116-a289-775a-4879-2f335dab265a" class="box-entenda"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/gestao-social.png" loading="lazy" width="50" alt="Gestão Social">
            <div class="text-block-48">Gestão social<br>‍</div>
          </div>
          <div data-w-id="a9008b68-6e19-bfcf-1990-f3e5043853d1" class="box-entenda"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/qualidade-ambiental.png" loading="lazy" width="50" alt="Qualidade Ambiental">
            <div class="text-block-48">Qualidade <br>ambiental</div>
          </div>
          <div data-w-id="3dbefabe-fb19-55fa-588d-8294008cd55d" class="box-entenda"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/convivencia-harmonica.png" loading="lazy" width="50" alt="Convivência Harmônica">
            <div class="text-block-48">Convivência<br>harmônica</div>
          </div>
          <div data-w-id="ef323bb5-3ce1-9d67-39a0-0cf81e7e08c3" class="box-entenda"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/tecnologia-inovacao.png" loading="lazy" width="50" alt="Tecnologia e Inovação">
            <div class="text-block-48">Tecnologia e inovação aliada ao seu cotidiano</div>
          </div>
        </div>
        <a href="#formulario" class="button-11 smarturba _2 mobile w-button">Quero viver de forma inteligente</a>
      </div>
    </div>
  </div>
</div>
<section id="video" class="video">
  <div class="container-padrao">
    <h2 class="heading-2 smarturba-mobile"><strong class="destaque-h2">Viva o seu sonho</strong> no Smart Urba</h2>
    <div data-w-id="b0e999ab-24f5-df03-6f2b-3214b8f0c914" class="div-video">
      <div style="padding-top:56.17021276595745%" id="w-node-32e20dc69f5d-75a08b58" class="w-embed-youtubevideo">
      <!--<iframe src="https://www.youtube.com/embed/F-uEdxLZI-Y?rel=0&amp;controls=1&amp;autoplay=0&amp;mute=0&amp;start=0" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>-->
      <!--<iframe src="https://www.youtube.com/embed/1Uxsuh2h1Yk?rel=0&amp;controls=1&amp;autoplay=0&amp;mute=0&amp;start=0" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>-->
        <iframe src="https://www.youtube.com/embed/GkoXg3-oBUc" title="YouTube video player" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
</section>
<div class="cta-provisorio" style="display: none;">
  <div class="container-padrao">
    <h2 class="heading-29">Abrace o futuro em um Smart Urba!</h2>
    <div class="div-block-6">
      <a href="#formulario" class="button-11 smarturba _2 w-button">Desejo viver com mais qualidade de vida</a>
      <a href="#formulario" class="button-11 smarturba _2 mobile w-button">Desejo viver com mais qualidade de vida</a>
    </div>
  </div>
</div>
<div class="lotes-smarturba" style="display: block;">
  <div class="container-padrao">
    <h2 class="heading-2 center white">Confira os loteamentos com <strong class="bold-text-31">conceito Smart Urba</strong><br></h2>
    <div class="div-empreendimentos">
      <!-- <a href="https://urba.com.br/empreendimentos/" style="text-decoration: none;" >
        <div class="div-empreendimento" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2022/10/optimistic-woman-with-brunette-hair-in-denim-olive-clothes-smiles-and-holding-phone-outside-woman-in-light-headphones-poses-outdoors.jpg); background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important;">
          <div class="div-info w-clearfix">
            <h3 class="heading-3">Smart Urba Eldorado</h3>
            <div class="info cidade w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/pin_laranja.png" width="25" alt="Reserva Regatas" class="image-2">
              <div class="text-block-3">Uberaba - MG</div>
            </div>
            <div class="info w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/area_laranja.png" width="25" alt="" class="image-2">
              <div class="text-block-3">a partir de 300m²</div>
            </div>
            <div class="info w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/tipo-empreendimento.png" width="25" alt="" class="image-2">
              <div class="text-block-3">Bairro aberto inteligente</div>
            </div>
            <div class="info w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/obras-laranja.png" width="25" alt="" class="image-2">
              <div class="text-block-3"><strong>Status:</strong> Breve Lançamento</div>
            </div>
            <a href="https://urba.com.br/empreendimentos/" class="button-2 w-button">saiba mais</a>
          </div>
          <div class="text-block-35">Imagem meramente ilustrativa</div>
          <div class="gradient"></div>
          <style>
            .tag-breve-lan-amento.boxx {
              margin-top: 0 !important;
              left: 0% !important;
              right: 0% !important;
              width: 200px;
              height: 120px;
            }
            .breve-lancamento.boxx.laranja {
              left: -60px;
              top: 30px;
              right: auto;
              width: 230px;
              height: 30px;
              transform: rotate(-40deg);
              background-image: linear-gradient(45deg, #FF8C23, #FF8C23);
            }
          </style>
          <div class="tag-breve-lan-amento boxx">
            <div class="breve-lancamento boxx laranja">Breve Lançamento</div>
          </div>
        </div>
      </a> -->
      <a href="https://urba.com.br/urba-vila-profeta-inteligente/" style="text-decoration: none;" >
        <div class="div-empreendimento" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2021/09/Avenida-Principal-V.2.jpg); background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important;">
          <div class="div-info w-clearfix">
            <h3 class="heading-3">Smart Urba Vila Profeta</h3>
            <div class="info cidade w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/pin_laranja.png" width="25" alt="Reserva Regatas" class="image-2">
              <div class="text-block-3">Campinas - SP</div>
            </div>
            <div class="info w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/area_laranja.png" width="25" alt="" class="image-2">
              <div class="text-block-3">A partir de 126 m²</div>
            </div>
            <div class="info w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/tipo-empreendimento.png" width="25" alt="" class="image-2">
              <div class="text-block-3">Bairro aberto inteligente</div>
            </div>
            <div class="info w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/obras-laranja.png" width="25" alt="" class="image-2">
              <div class="text-block-3"><strong>Status:</strong> Em obras</div>
            </div>
            <a href="https://urba.com.br/urba-vila-profeta-inteligente/" class="button-2 w-button">saiba mais</a>
          </div>
          <div class="text-block-35">Imagem meramente ilustrativa</div>
          <div class="gradient"></div>
          <style>
            .tag-breve-lan-amento.boxx {
              margin-top: 0 !important;
              left: 0% !important;
              right: 0% !important;
              width: 200px;
              height: 120px;
            }
            .breve-lancamento.boxx.laranja {
              left: -60px;
              top: 30px;
              right: auto;
              width: 230px;
              height: 30px;
              transform: rotate(-40deg);
              background-image: linear-gradient(45deg, #ffaa22, #ff8b22);
            }
          </style>
          <div class="tag-breve-lan-amento boxx">
            <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #793f98, #793f98);">Em obras</div>
          </div>
        </div>
      </a>
      <a href="https://urba.com.br/smart-urba-dunlop/" target="_blank" style="text-decoration: none;">
        <div class="div-empreendimento" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2021/04/1-avenida-principal.jpg); background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important;">
          <div class="div-info w-clearfix">
            <h3 class="heading-3">Smart Urba Dunlop</h3>
            <div class="info cidade w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/pin_laranja.png" width="25" alt="Reserva Regatas" class="image-2">
              <div class="text-block-3">Campinas - SP</div>
            </div>
            <div class="info w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/area_laranja.png" width="25" alt="" class="image-2">
              <div class="text-block-3">A partir de 126 m²</div>
            </div>
            <div class="info w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/tipo-empreendimento.png" width="25" alt="" class="image-2">
              <div class="text-block-3">Bairro aberto inteligente</div>
            </div>
            <div class="info w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/obras-laranja.png" width="25" alt="" class="image-2">
              <div class="text-block-3"><strong>Status:</strong> Em obras </div>
            </div>
            <a href="https://urba.com.br/smart-urba-dunlop/" class="button-2 w-button">saiba mais</a>
          </div>
          <div class="text-block-35">Imagem meramente ilustrativa</div>
          <div class="gradient"></div>
          <style>
            .tag-breve-lan-amento.boxx {
              margin-top: 0 !important;
              left: 0% !important;
              right: 0% !important;
              width: 200px;
              height: 120px;
            }
            .breve-lancamento.boxx {
              left: -60px;
              top: 30px;
              right: auto;
              width: 230px;
              height: 30px;
              transform: rotate(-40deg);
              background-image: linear-gradient(45deg, #ff5aad, #f7287c);
            }
          </style>
          <div class="tag-breve-lan-amento boxx">
            <div class="breve-lancamento boxx" style="background-image: linear-gradient(45deg, #793f98, #793f98);">Em obras</div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<div class="como-funciona">
  <div class="container-padrao">
    <h2 class="heading-2 smarturba-mobile">Veja <strong class="destaque-h2">como funciona</strong> o Smart Urba</h2>
    <div class="div-features">
      <div class="imagem-smarturba"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-verde-baixo-solido.png" loading="lazy" width="200" style="opacity:0" data-w-id="39efe680-af24-a1fb-e4be-2efa08ad163c" alt="" class="image-20"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-rosa-cima.png" loading="lazy" width="200" style="opacity:0" data-w-id="7c239f2d-aade-1b9b-0797-cc3f52f6c148" alt="" class="image-21"></div>
      <div class="div-info-smarturba">
        <h1 class="heading-28">é viver <br><strong class="bold-text-37">além dos m²</strong><br>do seu lote</h1>
        <p class="paragraph-35">Já imaginou ter um espaço ao ar livre, para se conectar com pessoas, caminhar, levar as crianças para brincar ou passear com seu pet? Nos bairros inteligentes Smart Urba, você pode viver além dos m² do seu lote, <strong class="bold-text-4 _2">se sentir seguro e livre</strong> para aproveitar diariamente a natureza e todos os ambientes projetados especialmente para seu conforto.</p>
        <div data-w-id="df8c07e9-b3b1-60b6-a753-ee99c2353c72" class="topicos">
          <div class="topico">
            <div class="text-block-49">Planejamento inteligente em cada detalhe</div>
          </div>
          <div class="topico">
            <div class="text-block-49">Vida ao ar livre e conectada com pessoas</div>
          </div>
          <div class="topico">
            <div class="text-block-49">Ciclovias ao redor do bairro e bicicletário</div>
          </div>
          <div class="topico">
            <div class="text-block-49">Diversidade de usos</div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-features _2">
      <div class="imagem-smarturba _2"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-roxo-direito.png" loading="lazy" width="200" style="opacity:0" data-w-id="e4f9e900-6bf6-9a17-91c9-442877ac0aae" alt="" class="image-20 _2"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-laranja-cima.png" loading="lazy" width="200" style="opacity:0" data-w-id="e4f9e900-6bf6-9a17-91c9-442877ac0aaf" alt="" class="image-21 _2"></div>
      <div class="div-info-smarturba _2">
        <h1 class="heading-28 _2">é se conectar<br><strong class="bold-text-37 _2">com a<br>‍</strong>natureza</h1>
        <p class="paragraph-35 _2">Com áreas verdes preservadas e um projeto paisagístico, que inclui árvores frutíferas e espécies nativas, buscamos valorizar a flora local, prolongando a longevidade das plantas e manutenção do frescor dos ambientes. Assim, você pode aproveitar os espaços para ficar próximo da natureza, se exercitar e curtir a família, além de respirar um <strong class="bold-text-4 _3">ar mais leve e saudável</strong>.</p>
        <div data-w-id="e4f9e900-6bf6-9a17-91c9-442877ac0abd" class="topicos">
          <div class="topico _2">
            <div class="text-block-49">Áreas verdes preservadas</div>
          </div>
          <div class="topico _2">
            <div class="text-block-49">Plantio de novas mudas e conservação do bioma local</div>
          </div>
          <div class="topico _2">
            <div class="text-block-49">Ruas arborizadas promovendo conforto térmico</div>
          </div>
          <div class="topico _2">
            <div class="text-block-49">Projeto paisagístico exuberante</div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-features _3">
      <div class="imagem-smarturba _3"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-verde-baixo.png" loading="lazy" width="200" style="opacity:0" data-w-id="6550d8e6-fa5e-6b8b-a443-38b083822485" alt="" class="image-20"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-roxo-cima.png" loading="lazy" width="200" style="opacity:0" data-w-id="6550d8e6-fa5e-6b8b-a443-38b083822486" alt="" class="image-21"></div>
      <div class="div-info-smarturba">
        <h1 class="heading-28 _3">é <strong class="bold-text-37 _3">praticidade</strong><br>para o<br>seu dia</h1>
        <p class="paragraph-35">Quando você pensa em um espaço inteligente, espera que ele ofereça praticidade, certo? Por isso, o Smart Urba viabiliza áreas destinadas a <strong class="bold-text-4 _4">comércio e serviços</strong>, além de <strong class="bold-text-4 _4">fácil acesso à cidade</strong>, para você ter<strong> </strong>saúde, educação e alimentação ao seu alcance e aproveitar o melhor do seu bairro inteligente, sem se afastar dos grandes centros.</p>
        <div data-w-id="6550d8e6-fa5e-6b8b-a443-38b083822494" class="topicos">
          <div class="topico _3">
            <div class="text-block-49">Áreas destinadas ao comércio e serviços</div>
          </div>
          <div class="topico _3">
            <div class="text-block-49">Bairro conectado à cidade</div>
          </div>
          <div class="topico _3">
            <div class="text-block-49">Apoio ao comércio e economia local</div>
          </div>
          <div class="topico _3">
            <div class="text-block-49">Proximidade com centros urbanos</div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-features _2">
      <div class="imagem-smarturba _4"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-laranja-direita.png" loading="lazy" width="200" style="opacity:0" data-w-id="0b1c5b1a-4eab-6462-0e55-3be887064828" alt="" class="image-20 _2"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-rosa-cima.png" loading="lazy" width="200" style="opacity:0" data-w-id="0b1c5b1a-4eab-6462-0e55-3be887064829" alt="" class="image-21 _2"></div>
      <div class="div-info-smarturba _2">
        <h1 class="heading-28 _4">é se manter<br><strong class="bold-text-37 _4">conectado<br>‍</strong>com o mundo</h1>
        <p class="paragraph-35 _2">Sabendo que é indispensável manter a conexão entre as pessoas, o Smart Urba oferece bicicletários e ciclovias, para encurtar as distâncias entre você e seus amigos. Além disso, temos o <strong class="bold-text-4 _5">aplicativo do bairro</strong>, para você ter contato com a vizinhança e acessar o nosso clube de descontos, que une você aos comerciantes locais.</p>
        <div data-w-id="0b1c5b1a-4eab-6462-0e55-3be887064838" class="topicos">
          <div class="topico _4">
            <div class="text-block-49">Aplicativo do bairro</div>
          </div>
          <div class="topico _4">
            <div class="text-block-49">Clube de descontos exclusivos</div>
          </div>
          <div class="topico _4">
            <div class="text-block-49">Bicicletários e ciclovias para promover a mobilidade urbana</div>
          </div>
          <div class="topico _4">
            <div class="text-block-49">Acessos viários conectados à centros urbanos.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-features _4">
      <div class="imagem-smarturba _5"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-roxo-baixo.png" loading="lazy" width="200" data-w-id="78afea42-c37b-c6e0-626a-12b9886abb8d" alt="" class="image-20 _3"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-laranja-cima-solido.png" loading="lazy" width="200" style="opacity:0" data-w-id="78afea42-c37b-c6e0-626a-12b9886abb8e" alt="" class="image-21 _3"></div>
      <div class="div-info-smarturba">
        <h1 class="heading-28 _5">é viver com <br><strong class="bold-text-37 _5">mais inclusão</strong></h1>
        <p class="paragraph-35">O Smart Urba é um <strong class="bold-text-4">bairro pensado para ser inclusivo</strong>. Por isso, tornamos o lazer, a mobilidade e a vida saudável acessíveis para pessoas de todas as idades e com mobilidade reduzida. Afinal, nossas adaptações são para abraçar as diferenças e promover um espaço plural.</p>
        <div data-w-id="78afea42-c37b-c6e0-626a-12b9886abb9c" class="topicos">
          <div class="topico _5">
            <div class="text-block-49">Bairro inclusivo para todas as idades</div>
          </div>
          <div class="topico _5">
            <div class="text-block-49">Espaços adaptados para mobilidade reduzida</div>
          </div>
          <div class="topico _5">
            <div class="text-block-49">Áreas de lazer com equipamentos inclusivos</div>
          </div>
          <div class="topico _5">
            <div class="text-block-49">100% das calçadas acessíveis<br></div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-features _2">
      <div class="imagem-smarturba _6"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-rosa-direita.png" loading="lazy" width="200" style="opacity:0" data-w-id="600bae7b-03b0-860d-2bca-a5416a104133" alt="" class="image-20"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-roxo-cima.png" loading="lazy" width="200" style="opacity:0" data-w-id="600bae7b-03b0-860d-2bca-a5416a104134" alt="" class="image-21"></div>
      <div class="div-info-smarturba _2">
        <h1 class="heading-28 _6">é conviver<br><strong class="bold-text-37 _6">em harmonia<br></strong></h1>
        <p class="paragraph-35 _2">Para uma gestão inteligente do bairro, o Smart Urba conta com um espaço para abrigar a futura sede de <strong class="bold-text-4 _6">Associação de Moradores</strong>, onde o <strong class="bold-text-4 _6">Gestor Social</strong>, em conjunto com os representantes da Associação, promoverão a harmonia e a boa relação entre toda a vizinhança, além do bom funcionamento e o desenvolvimento do bairro.</p>
        <div data-w-id="600bae7b-03b0-860d-2bca-a5416a104143" class="topicos">
          <div class="topico _6">
            <div class="text-block-49">Sede para futura associação de moradores</div>
          </div>
          <div class="topico _6">
            <div class="text-block-49">Gestor social para formação de futuros proprietários</div>
          </div>
          <div class="topico _6">
            <div class="text-block-49">Melhorias para o bem estar de todos</div>
          </div>
          <div class="topico _6">
            <div class="text-block-49">Promoção da harmonia e boa convivência</div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-features">
      <div class="imagem-smarturba _7"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-verde-baixo-solido.png" loading="lazy" width="200" style="opacity:0" data-w-id="3f8d2fa0-f635-fd3d-5456-d19c83055f02" alt="" class="image-20"><img src="<?= get_stylesheet_directory_uri()?>/images/smart-urba/smart-laranja-cima.png" loading="lazy" width="200" style="opacity:0" data-w-id="3f8d2fa0-f635-fd3d-5456-d19c83055f03" alt="" class="image-21"></div>
      <div class="div-info-smarturba">
        <h1 class="heading-28 _7">é projetado <br><strong class="bold-text-37 _7">para ser feliz</strong><br></h1>
        <p class="paragraph-35">O Smart Urba conta com múltiplas <strong class="bold-text-4 _7">áreas de lazer criativas</strong>, projetadas para permear todo o bairro e terem equipamentos que atendam a todas as idades. Assim, você pode viver momentos especiais ao lado daqueles que ama, interagir com as pessoas e aproveitar os momentos ao ar livre do seu jeito, de forma divertida, desafiadora e inclusiva.</p>
        <div data-w-id="3f8d2fa0-f635-fd3d-5456-d19c83055f11" class="topicos">
          <div class="topico _7">
            <div class="text-block-49">Múltiplas áreas de lazer</div>
          </div>
          <div class="topico _7">
            <div class="text-block-49">Equipamentos para todas as idades</div>
          </div>
          <div class="topico _7">
            <div class="text-block-49">Áreas de lazer e fitness inclusivas</div>
          </div>
          <div class="topico _7">
            <div class="text-block-49">Espaços criativos para restauração mental</div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-button-smarturba">
      <a href="#formulario" class="button-11 smarturba _2 w-button">Desejo viver com mais qualidade de vida</a>
      <a href="#formulario" class="button-11 smarturba _2 mobile w-button">Desejo viver com mais qualidade de vida</a>
    </div>
  </div>
</div>
<section id="formulario" class="section-form">
  <div class="container-padrao">
    <h2 class="heading-2 branco"><strong class="bold-text-31">Viva o futuro</strong> em um Smart Urba!</h2>
    <p class="paragraph-34">Estar em conexão com as pessoas, viver próximo à natureza e ter praticidade no dia a dia são fatores que aumentam a sua <strong class="bold-text-39">longevidade</strong>, e isso não tem preço. Cadastre-se e fique por dentro das novidades!</p>
    <div class="div-forms interna smarturba">
      <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form-2 smarturba">
        <input type="hidden" id="idempreendimento" name="idempreendimento" value="<?php the_field('id_loteamentos'); ?>">
          <div class="columns-9 w-row">
            <div class="column-62 w-col w-col-6"><input type="text" class="text-field-6 w-input" maxlength="256" name="Nome" data-name="Nome" placeholder="Nome" id="Nome" required=""></div>
            <div class="column-63 w-col w-col-6"><input type="email" class="text-field-6 w-input" maxlength="256" name="E-mail" data-name="E Mail" placeholder="E-mail" id="E-mail" required=""></div>
          </div>
          <div class="columns-9 w-row">
            <div class="column-64 w-col w-col-6"><input type="tel" class="text-field-6 w-input" minlength="15" maxlength="15" onkeypress="MascaraTelefone(this);" name="Telefone" data-name="Telefone" placeholder="WhatsApp" id="Telefone" required=""></div>
            <div class="column-65 w-col w-col-6">
              <div class="w-row">
                <div class="w-col w-col-6" style="padding-right:10px;">
                  <select id="estados" name="Estado" data-name="Estado" class="escolha-cidade-2 uf w-select" required="">
                    <option value=""></option>
                  </select>
                </div>
                <div class="w-col w-col-6">
                  <!--<input type="text" class="text-field-6 menor w-input" maxlength="256" name="Cidade-onde-reside" data-name="Cidade Onde Reside" placeholder="Cidade onde reside" id="Cidade-onde-reside" required="">-->
                  <select id="cidades" name="Cidade-onde-reside" data-name="Cidade Onde Reside" class="escolha-cidade-2 uf w-select" required="">
                    <option value=""></option>
                  </select>
                </div>
              </div>
            </div>
            <div class="column-64 w-col w-col-12">
              <select id="smarturba" name="Smart" data-name="Smart" class="escolha-qual-smart w-select" required="">
                <option value="" disabled selected hidden>Qual o Smart Urba do seu interesse? </option>
                <option value="Smart Urba Eldorado">Smart Urba Eldorado</option>
                <option value="Smart Urba Dunlop">Smart Urba Dunlop - região do Campo Grande</option>
                <option value="Smart Urba Vila Profeta">Smart Urba Vila Profeta - região do Matão</option>
              </select>
            </div>
            <div class="w-row bloco_consentimento">
              <div class="w-col">
              <!--<p><br>Precisamos dos seus dados para manter contato com você e prosseguir com seu atendimento, de acordo com nossa <a href="https://mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>-->
              <p><br>Aceito receber via WhatsApp, ligação, e-mail e SMS, o contato da marca MRV&CO com novidades sobre este loteamento, bem como outras ações de marketing, ofertas de produto e serviços. Estou de acordo com as formas de tratamento de dados realizados pela marca MRV&CO, conforme sua <a href="https://www.mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>
              <label class="checkbox-button-field-2 w-checkbox" style="display:flex; justify-content: center;"><input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" value="Ok, entendi!" class="w-form-formcheckboxinput w-checkbox-input" required><span for="Proprietário" class="checkbox-button-label w-form-label">Ok, entendi!</span>
              </label>
              </div>
            </div>
          </div><input type="submit" value="Enviar" data-wait="Aguarde..." class="submit-button-7 w-button">
        </form>
      </div>
    </div>
  </div>
  <div class="text-block-50">O Smart Urba é um conceito criado pela Urba. As aplicações práticas podem variar de acordo com o empreendimento. <a href="https://urba.com.br/wp-content/uploads/2021/04/SMART_URBA_FOLDER_DIGITAL.pdf" target="_blank" style="color: #ff8b22;">Consulte o memorial descritivo</a>.</div>
</section>
<?php get_footer(); ?>
<script>
  jQuery('#email-form').submit(function(e){
    e.preventDefault();
    jQuery('#email-form input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#E-mail').val() && regex.test(jQuery('#E-mail').val()) && jQuery('#Nome').val() && jQuery('#Telefone').val() && jQuery('input[name=consentimento-de-comunicacao]:checked').length>0) {
        var data_array = [
            { name: 'loteamento', value:"Smart Urba"},
            { name: 'nome', value: jQuery('#email-form #Nome').val() },
            { name: 'telefone', value: jQuery('#email-form #Telefone').val() },
            { name: 'email', value: jQuery('#email-form #E-mail').val() },
            { name: 'Estado', value: jQuery('#email-form #estados option:selected' ).val() },
            { name: 'Cidade Onde Reside', value: jQuery('#email-form #cidades option:selected' ).val() },
            { name: 'Smart', value: jQuery('#email-form #smarturba option:selected' ).val() },
            { name: 'consentimento-de-comunicacao', value: 'granted' },
            { name: 'idempreendimento', value: jQuery('#email-form #idempreendimento').val() },
            { name: 'identificador', value: "Interesse - Smart Urba" }, //descobrir o valor da identificação
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = "https://urba.com.br/obrigado/";
          return false;
        });
    } else {
        jQuery('#email-form input[type=submit]').val('Enviar');
        alert('Preencha seus dados');
    }
});
</script>

<script type="text/javascript">

  $(document).ready(function () {

    $.getJSON('<?= get_stylesheet_directory_uri()?>/js/estados_cidades_2021.js', function (data) {

      var items = [];
      var options = '<option value="">UF</option>';

      $.each(data, function (key, val) {
        options += '<option value="' + val.nome + '">' + val.nome + '</option>';
      });
      $("#estados").html(options);

      $("#estados").change(function () {

        var options_cidades = '<option value="">Cidade</option>';
        var str = "";

        $("#estados option:selected").each(function () {
          str += $(this).text();
        });

        $.each(data, function (key, val) {
          if(val.nome == str) {
            $.each(val.cidades, function (key_city, val_city) {
              options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
            });
          }
        });

        $("#cidades").html(options_cidades);

      }).change();

    });

  });

</script>
</head>