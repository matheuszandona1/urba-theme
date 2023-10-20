<?php
/*
Template Name: Página Home
*/
?>
<?php get_header(); ?>
<style>
  .slide {
    background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.2), transparent 20%), linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php echo site_url(); ?>/wp-content/uploads/2021/04/1-avenida-principal.jpg');
  }

  @media screen and (max-width: 479px) {

    .breve-lancamento.boxx.laranja,
    .breve-lancamento.boxx {
      display: none;
    }

    .heading-3 {
      font-size: 15px;
    }
  }
</style>

<div class="heroslider">

  <div data-delay="5000" data-animation="cross" data-autoplay="1" data-easing="ease-in" data-duration="500" data-infinite="1" class="slider w-slider">
    <div class="w-slider-mask">
      <style>
        @font-face {
          font-family: 'Averta';
          src: url('<?php get_template_directory_uri(); ?>/assets/fonts/AvertaStd-Light.ttf') format("truetype");
          font-weight: 400;
          font-style: normal;
        }

        @font-face {
          font-family: 'Averta';
          src: url('<?php get_template_directory_uri(); ?>/assets/fonts/AvertaStd-Regular.ttf') format("truetype");
          font-weight: 500;
          font-style: normal;
        }

        @font-face {
          font-family: 'Averta';
          src: url('<?php get_template_directory_uri(); ?>/assets/fonts/AvertaStd-Bold.ttf') format("truetype");
          font-weight: 800;
          font-style: normal;
        }

        @font-face {
          font-family: 'Averta';
          src: url('<?php get_template_directory_uri(); ?>/assets/fonts/AvertaStd-ExtraBold.ttf') format("truetype");
          font-weight: 900;
          font-style: normal;
        }

        .slide-mantiqueira {
          background: #fff;
          padding-top: 150px;
        }

        .imagem-right {
          position: absolute;
          right: 0;
          bottom: 0;
          height: 100%;
          max-height: calc(100% - 150px);
          object-fit: contain;
          max-width: 1000px;
        }

        @media (max-width: 1690px) {
          .imagem-right {
            max-width: 900px;
          }
        }

        @media (max-width: 1530px) {
          .imagem-right {
            max-width: 750px;
          }
        }

        .imagem-right .tag {
          position: absolute;
          right: 0;
          top: -30px;
          padding: 10px 35px;
          border-top-left-radius: 11.462px;
          border-bottom-left-radius: 11.462px;
          text-align: center;
          font-size: 1.5em;
          font-style: normal;
          font-weight: 900;
          line-height: normal;
          color: #fff;
          text-transform: uppercase;
          background: #FBBA00;
          display: block;
          z-index: 10;
        }

        .title__mantiqueira {
          color: #006C3C;
          font-size: 3em;
          font-style: normal;
          font-weight: 900;
          line-height: 104%;
          text-transform: uppercase;
          margin: 30px 0 24px 0;
        }

        .title__mantiqueira span {
          color: #AECC53;
          font-weight: 900;
        }

        .desc__mantiqueira {
          margin-bottom: 40px;
        }

        .desc__mantiqueira ul li {
          color: #009168;
          font-size: 1.5em;
          font-style: normal;
          font-weight: 400;
          line-height: normal;
        }

        .desc__mantiqueira ul li b {
          font-weight: 800;
        }

        .button--mantiqueira {
          background: #FBBA00;
          font-size: 24px;
          font-style: normal;
          font-weight: 700;
          color: #fff;
          transition: .2s all ease-in;
          text-transform: uppercase;
          padding: 16px 24px;
          border-radius: 11.462px;
        }

        @media (max-width: 480px) {
          .slide-mantiqueira {
            padding-top: 120px;
          }

          .w-col-5 {
            width: 100%;
          }

          .imagem-right .tag {
            font-size: .75em;
            line-height: 1.2em;
            padding: 10px 15px
          }

          .title__mantiqueira {
            font-size: 2em;
            line-height: 1.2em;
          }

          .desc__mantiqueira ul li {
            font-size: 1em;
            line-height: 1.2em;
          }

          .button--mantiqueira {
            font-size: 1em;
          }

          .imagem-right {
            z-index: -1;
          }

          .imagem-right img {
            display: none;
          }
        }
      </style>
      <div class="slide-mantiqueira w-slide jardins-mantiqueira">
        <div class="container-padrao container-mantiqueira">
          <div class="row">
            <div class="w-col-5">
              <div class="logo-mantiqueira">
                <img src="<?php the_field('logo_mantiqueira'); ?>" alt="Logo Jardins da Mantiqueira">
              </div>
              <h2 class="title__mantiqueira">
                Chegamos em <span>Caçapava</span> com o melhor bairro planejado!
              </h2>
              <div class="desc__mantiqueira">
                <ul>
                  <li>Infraestrutura <b>completa</b></li>
                  <li>Localização privilegiada <b>a 400 metros da Rodovia Dutra</b></li>
                  <li>Lotes <b>residenciais e comerciais</b></li>
                </ul>
              </div>
              <div class="button-container">
                <a class="button--mantiqueira" href="<?php echo site_url(); ?>/jardins-da-mantiqueira"> fale com um corretor</a>
              </div>
            </div>
          </div>
        </div>
        <div class="imagem-right">
          <span class="tag lancamento-banner">Lançamento</span>
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/imagem-mantiqueira.webp" alt="Imagem banner loteamento jardins da mantiqueira" width="100%">
        </div>
      </div>
      <style>
        .buona-vita {
          background: url("<?php echo site_url(); ?>/wp-content/uploads/2023/08/BG_inteiro.webp");
          background-size: cover;
          background-repeat: no-repeat;
          position: relative;
          z-index: 99999 !important;
        }

        .buona-vita-svg {
          position: absolute;
          top: -70px;
          left: -70px;
        }

        .buona-vita-svg svg {
          max-width: 80%;
        }

        @media(min-width: 1600px) {
          .buona-vita-svg svg {
            max-width: 100%;
          }
        }

        .container-padrao.buona-none .div-text-hero.home {
          display: none;
        }

        .title__buona-vita {
          font-size: 32px;
          line-height: 32px;
          margin: 24px auto 24px;
          color: #fff;
          font-weight: 400;
          position: relative;
        }

        .title__buona-vita::after {
          position: absolute;
          content: '';
          width: 166px;
          height: 2px;
          background: #7CC28C;
          left: 0;
          bottom: -16px;
        }

        .desc__buona-vita {
          font-size: 32px;
          line-height: 64px;
          margin: 24px auto;
          color: #fff;
          font-weight: 400;
          position: relative;
        }

        .button--buona-vita {
          background: #7CC28C;
          font-size: 24px;
          font-style: normal;
          font-weight: 700;
          color: #fff;
          transition: .2s all ease-in;
          text-transform: uppercase;
          padding: 16px 24px;
          border-radius: 8px;

        }

        .button--buona-vita:hover {
          color: #fff;
          background: #7cb28c;
        }

        .obras-iniciadas {
          color: #74B57F;
          font-size: 24px;
          font-style: normal;
          font-weight: 700;
          line-height: 100%;
          border-radius: 8px 0px 0px 8px;
          background: #FFF;
          text-transform: uppercase;
          padding: 16px 24px;
          position: absolute;
          right: 0;
          top: 190px;
        }

        @media (max-width: 480px) {
          .slide-5 .container-padrao img {
            display: block;
            margin-bottom: 75px;
          }

          .title__buona-vita {
            font-size: 24px;
            line-height: 32px;
            margin: 32px auto 16px;
          }

          .title__buona-vita:first-child {
            margin-top: 75px !important;
          }

          .obras-iniciadas {
            top: 253px;
            max-width: 315px;
            font-size: 20px;
            left: 0;
            right: 0;
            margin: 0 auto;
            border-radius: 8px;

          }

          .title__buona-vita::after {
            bottom: -24px;
          }

          .desc__buona-vita {
            font-size: 24px;
            line-height: 24px;
          }

          .button--buona-vita {
            padding: 10px 18px;
            font-size: 16px;
          }
        }
      </style>
      <div class="slide-5 w-slide buona-vita">
        <div class="buona-vita-svg">
          <svg width="1066" height="1062" viewBox="0 0 1066 1062" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M715.837 1001.82L1021.24 653.653C1080.92 585.435 1080.92 483.054 1021.24 414.848L715.837 63.9105C681.308 24.4362 631.435 2.67809e-05 579.005 2.44891e-05L186.172 7.31786e-06C85.7642 2.9289e-06 2.68115e-05 85.4669 2.2424e-05 185.84L-8.09785e-06 884.1C-1.2478e-05 984.306 85.9076 1062 186.142 1062L579.011 1062C631.441 1062 681.325 1041.29 715.837 1001.83L715.837 1001.82Z" fill="#C04C9B" fill-opacity="0.8" />
          </svg>

        </div>
        <a href="https://www.residencialbuonavita.com.br/">
          <div class="obras-iniciadas">OBRAS INICIADAS EM ITU</div>
          <div class="container-padrao buona-none" style="display:flex; flex-direction: column; align-items: starts; justify-content: center; text-align: start; padding-top:90px;">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/64ba91af6aed4662493cb03c_Logo_banner-1.png" alt="">
            <h2 class="title__buona-vita">
              <b>30 parcelas fixas</b><br> sem juros e sem correção
            </h2>
            <h3 class="title__buona-vita">
              <b>Loteamento fechado</b><br> integrado à natureza
            </h3>
            <p class="desc__buona-vita">Lotes de <b>250m²</b> a <b>500m²</b></p>

            <div class="button-container">
              <a class="button--buona-vita" href="https://www.residencialbuonavita.com.br/"> fale com um corretor</a>
            </div>
            <!-- <div class="div-info-empreendimento" data-ix="slider-info">
              <?php echo site_url(); ?>/wp-content/uploads/2023/08/BG.webp
              <?php echo site_url(); ?>/wp-content/uploads/2023/08/64ba91af6aed4662493cb03c_Logo_banner-1.png
            </div> -->
          </div>
        </a>
      </div>
      <style>
        .slide-saoroque {
          background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2023/09/bg-slide-sao-roque.webp');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          padding-top: 150px;
        }

        .logo-saoroque {
          position: absolute;
          top: 150px;
          right: 30px;
        }

        .box-saoroque {
          border-radius: 0px 50px 50px 0px;
          background: rgba(241, 136, 21, 0.85);
          padding: 80px;
          width: fit-content;
          position: relative;
        }

        .box-saoroque::before {
          content: '';
          background-image: url('https://dev.ingagedigital.com.br/urba/wp-content/uploads/2023/09/vetor-slide-saoroque.webp');
          position: absolute;
          left: 0;
          top: -10px;
          width: 100%;
          height: 100%;
          mix-blend-mode: soft-light;
          background-size: contain;
          background-repeat: no-repeat;
          background-position: left;
        }

        .box-saoroque::after {
          content: '';
          position: absolute;
          left: 0;
          top: 50%;
          transform: translateY(-50%);
          width: 105%;
          height: 90%;
          border-radius: 0px 59.157px 59.157px 0px;
          border: 4.415px solid #FFF;
          border-left: 0;
        }

        .tag-saoroque {
          border-radius: 9.712px;
          background: #FFF;
          box-shadow: 2.64883px 7.06356px 13.24417px 0px rgba(0, 0, 0, 0.25);
          padding: 10px 30px;
          width: fit-content;
          position: absolute;
          right: -100px;
          top: 60px;
          z-index: 10;
        }

        .tag-saoroque span {
          color: #009168;
          font-size: 1.5rem;
          font-style: normal;
          font-weight: 800;
          line-height: 104%;
          text-align: center;
        }

        .title__saoroque {
          color: #FFF;
          font-size: 2.5em;
          font-style: normal;
          font-weight: 400;
          line-height: 111%;
          margin-bottom: 40px;
          max-width: 400px;
          position: relative;
          z-index: 20;
        }

        .title__saoroque b {
          font-weight: 800;
        }

        .button--saoroque {
          background: #E71D73;
          font-size: 24px;
          font-style: normal;
          font-weight: 700;
          color: #fff;
          transition: .2s all ease-in;
          text-transform: uppercase;
          padding: 16px 24px;
          border-radius: 11.462px;
          position: relative;
          z-index: 20;
        }

        @media(max-width: 480px) {
          .slide-saoroque {
            padding-top: 120px;
          }

          .logo-saoroque {
            position: relative;
            top: auto;
            right: 0;
            margin-bottom: 20px;
          }

          .logo-saoroque img {
            width: 100px;
          }

          .box-saoroque {
            padding: 40px 20px 50px 20px;
            max-width: 320px;
          }

          .tag-saoroque {
            right: 0;
            top: -10px;
            z-index: 10;
          }

          .tag-saoroque span {
            font-size: 1em;
          }

          .title__saoroque {
            font-size: 2em;
            max-width: 320px;
          }

          .button--saoroque {
            font-size: 1em;
          }
        }
      </style>
      <div class="slide-saoroque w-slide">
        <div class="logo-saoroque">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/logo-jardim-sao-roque.webp" alt="Logo Jardim da São Roque">
        </div>
        <div class="box-saoroque">
          <div class="tag-saoroque">
            <span>Boituva-SP</span>
          </div>
          <h2 class="title__saoroque">
            As obras de integração dos bairros, <b>realizadas pela Prefeitura, estão aceleradas!</b>
          </h2>
          <div class="button-container">
            <a class="button--saoroque" href="<?php echo site_url(); ?>/jardim-sao-roque"> fale com um corretor</a>
          </div>
        </div>
      </div>
      <div class="slide w-slide">
        <a href="<?php echo site_url(); ?>/smart-urba-dunlop/">
          <div class="container-padrao">
            <div class="div-text-hero home">
              <h1 data-w-id="39bb2f0b-ac22-dba9-d44f-0369270e88bd" style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0" class="heading home"><strong data-w-id="1601d31c-19ed-9ebf-9f65-e5059729616b" class="bold-text-27">Loteamento planejado</strong> com tudo o que você precisa para viver os <strong data-w-id="67265963-c22f-776b-5bbc-744e7985c9a3" class="bold-text-27">melhores momentos </strong>da sua vida</h1>
            </div>
            <div class="div-info-empreendimento" data-ix="slider-info">
              <div class="text-block">Smart Urba Dunlop</div>
              <div class="div-localizacao w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/pin_laranja.png" width="25" alt="" class="image">
                <div class="text-block-2">Campinas - SP</div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="slide-2 w-slide">
        <a href="<?php echo site_url(); ?>/loteamento/giardino-bianco/">
          <div class="container-padrao">
            <div class="div-text-hero home">
              <h1 data-w-id="39bb2f0b-ac22-dba9-d44f-0369270e88bd" style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0" class="heading home"><strong data-w-id="1601d31c-19ed-9ebf-9f65-e5059729616b" class="bold-text-27">Loteamento planejado</strong> com tudo o que você precisa para viver os <strong data-w-id="67265963-c22f-776b-5bbc-744e7985c9a3" class="bold-text-27">melhores momentos </strong>da sua vida</h1>
            </div>
            <div class="div-info-empreendimento" data-ix="slider-info">
              <div class="text-block">Giardino Bianco</div>

              <div class="div-localizacao w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/pin_laranja.png" width="25" alt="" class="image">
                <div class="text-block-2">Campina Grande - PB</div>
              </div>
            </div>

          </div>
        </a>
      </div>
      <div class="slide-3 w-slide">
        <a href="<?php echo site_url(); ?>/loteamento/monte-das-araucarias/">
          <div class="container-padrao">
            <div class="div-text-hero home">
              <h1 data-w-id="39bb2f0b-ac22-dba9-d44f-0369270e88bd" style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0" class="heading home"><strong data-w-id="1601d31c-19ed-9ebf-9f65-e5059729616b" class="bold-text-27">Loteamento planejado</strong> com tudo o que você precisa para viver os <strong data-w-id="67265963-c22f-776b-5bbc-744e7985c9a3" class="bold-text-27">melhores momentos </strong>da sua vida</h1>
            </div>
            <div class="div-info-empreendimento" data-ix="slider-info">
              <div class="text-block">Monte das Araucárias</div>
              <div class="div-localizacao w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/pin_laranja.png" width="25" alt="" class="image">
                <div class="text-block-2">São Carlos - SP</div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="slide-4 w-slide">
        <a href="<?php echo site_url(); ?>/loteamento/jardim-das-tulipas/">
          <div class="container-padrao">
            <div class="div-text-hero home">
              <h1 data-w-id="39bb2f0b-ac22-dba9-d44f-0369270e88bd" style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0" class="heading home"><strong data-w-id="1601d31c-19ed-9ebf-9f65-e5059729616b" class="bold-text-27">Loteamento planejado</strong> com tudo o que você precisa para viver os <strong data-w-id="67265963-c22f-776b-5bbc-744e7985c9a3" class="bold-text-27">melhores momentos </strong>da sua vida</h1>
            </div>
            <div class="div-info-empreendimento" data-ix="slider-info">
              <div class="text-block">Jardim das Tulipas</div>
              <div class="div-localizacao w-clearfix"><img src="<?= get_stylesheet_directory_uri() ?>/images/pin_laranja.png" width="25" alt="" class="image">
                <div class="text-block-2">Feira de Santana - BA</div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="left-arrow w-slider-arrow-left">
      <div class="w-icon-slider-left"></div>
    </div>
    <div class="right-arrow w-slider-arrow-right">
      <div class="w-icon-slider-right"></div>
    </div>
    <div class="slide-nav w-slider-nav w-round"></div>
  </div>
</div>
<section id="loteamentos" class="loteamentos">
  <div class="container-padrao">
    <h2 class="heading-2">A Urba desenvolve <strong class="destaque-h2">loteamentos de alta qualidade</strong> para você ser feliz como merece no <strong class="destaque-h2">seu futuro endereço</strong></h2>
    <p class="paragraph">Confira nossos terrenos à venda, na sua região. Um deles pode ser o endereço do seu novo lar.</p>
    <div class="form-block w-form">
      <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-4">
        <select id="field" name="field" data-name="Field" class="escolha-cidade w-select">
          <option value="Escolha a cidade">Escolha a cidade...</option>
          <?php $terms = get_terms(array(
            'taxonomy' => 'cidade_loteamentos',
            'hide_empty' => false
          ));
          foreach ($terms as $term) {
            echo '<option value="' . $term->term_id . '">' . $term->name . '</option>';
          }
          ?>
        </select>
        <script type="text/javascript">
          jQuery('.escolha-cidade').change(function(e) {
            var selected = 'city_' + jQuery('.escolha-cidade').val();
            console.log(selected);
            jQuery('.div-empreendimento').show();
            jQuery('.div-empreendimento:not(.' + selected + ')').hide();
          });
        </script>
      </form>
    </div>
    <div data-animation="slide" data-hide-arrows="1" data-duration="500" data-infinite="1" class="slider-2 w-slider">
      <div class="w-slider-mask">
        <div class="w-slide">
          <div class="div-empreendimentos">

            <!-- <div class="div-empreendimento city_64" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PORTARIA-1.jpg)" onclick="window.location.href ='<?php echo site_url(); ?>/reserva-monte-mor/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Reserva Monte Mor</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Monte Mor - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">a partir de 160m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Loteamento fechado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Lançamento</div>
                </div><a href="<?php echo site_url(); ?>/reserva-monte-mor/" target="_blank" class="button-2 w-button">saiba mais</a>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #ff5aad, #f7287c);">Lançamento</div>
              </div>
            </div>
              -->

            <div class="div-empreendimento city_78" data-ix="show-info" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2023/07/URBA_JARDIM_DAS_MANTIQUEIRAS_VISTA_RUA_CASAS-1.jpg')" onclick="window.location.href ='<?php echo site_url(); ?>/jardins-da-mantiqueira';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Jardins da Mantiqueira </h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Caçapava - SP </div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">a partir de 140m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro planejado com infraestrutura completa</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong>Lançamento</div>
                </div><a href="<?php echo site_url(); ?>/jardins-da-mantiqueira" target="_blank" class="button-2 w-button">saiba mais</a>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #ff5aad, #f7287c);">Lançamento</div>
              </div>
            </div>
            <div class="div-empreendimento city_69" data-ix="show-info" style="background-image: url('<?php echo site_url('/wp-content/uploads/2023/09/hero-totem-parque-vitoria-scaled.webp'); ?>');background-position: -100px; display: block !important;" onclick="window.location.href ='<?php echo site_url(); ?>/parque-vitoria/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Parque Vitória</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Ribeirão das Neves - MG</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 250m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro planejado aberto</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Lançamento</div>
                </div><a href="<?php echo site_url(); ?>/parque-vitoria/" target="_blank" class="button-2 w-button">saiba mais</a>
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
              </style>
              <div class="tag-breve-lan-amento boxx">
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #ff5aad, #f7287c);">Lançamento</div>
              </div>
            </div>
            <div class="div-empreendimento city_21" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/10/family-lifestyle-outdoors-autumn-time.jpg)" onclick="window.location.href ='<?php echo site_url(); ?>/residencial-progresso/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Residencial Progresso</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">São Carlos - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 200m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro planejado aberto</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Em obras</div>
                </div><a href="<?php echo site_url(); ?>/residencial-progresso/" target="_blank" class="button-2 w-button">saiba mais</a>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #793F98, #793F98);">Em Obras</div>
              </div>
            </div>
            <!-- <div class="div-empreendimento city_59" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/10/optimistic-woman-with-brunette-hair-in-denim-olive-clothes-smiles-and-holding-phone-outside-woman-in-light-headphones-poses-outdoors.jpg)" onclick="window.location.href ='<?php echo site_url(); ?>/empreendimentos/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Smart Urba Eldorado </h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Uberaba - MG</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">a partir de 300m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro Aberto Inteligente</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Breve Lançamento</div>
                </div><a href="<?php echo site_url(); ?>/empreendimentos/" target="_blank" class="button-2 w-button">saiba mais</a>
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
            </div> -->

            <div class="div-empreendimento city_68" data-ix="show-info" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2023/09/box-buona-vita.webp');background-position-y: -90px;background-size: cover;background-repeat:no-repeat" onclick="window.location.href ='https://www.residencialbuonavita.com.br/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Residencial Buona Vita </h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Itu – SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">a partir de 250m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Loteamento fechado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Em obras</div>
                </div><a href="https://www.residencialbuonavita.com.br/" target="_blank" class="button-2 w-button">saiba mais</a>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #793F98, #793F98);">Em Obras</div>
              </div>
            </div>

            <div class="div-empreendimento city_63" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/11/escola-lp-jardim-sao-roque.jpg);background-position: -63px;" onclick="window.location.href ='<?php echo site_url(); ?>/jardim-sao-roque/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Jardim São Roque</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Boituva - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">a partir de 140m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro planejado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Em obras</div>
                </div><a href="<?php echo site_url(); ?>/jardim-sao-roque/" target="_blank" class="button-2 w-button">saiba mais</a>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #793F98, #793F98);">Em Obras</div>
              </div>
            </div>



            <div class="div-empreendimento city_67" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/09/bg_topo-e1662056347555.png)" onclick="window.location.href ='https://altosaofernando.com.br/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">São Fernando</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Paulínia - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">a partir de 200m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Loteamento aberto</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Em obras</div>
                </div><a href="https://altosaofernando.com.br/" target="_blank" class="button-2 w-button">saiba mais</a>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #793F98, #793F98);">Em Obras</div>
              </div>
            </div>

            <div class="div-empreendimento city_58" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/10/URBA-RECANTO-DO-MOINHO_PISCINA.png);background-position-y: -90px;background-size: cover;" onclick="window.location.href ='https://www.recantodomoinho.com.br/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Recanto do Moinho</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Cuiabá – MT</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 180m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Condomínio Fechado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Em Obras</div>
                </div><a href="https://www.recantodomoinho.com.br/" target="_blank" class="button-2 w-button">saiba mais</a>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #793F98, #793F98);">Em Obras</div>
              </div>
            </div>

            <div class="div-empreendimento city_59" data-ix="show-info" style="background-image: url(<?= get_site_url() ?>/wp-content/uploads/2022/02/IMAGEM-BOX-HOME.jpg)" onclick="window.location.href ='<?php echo site_url(); ?>/residencial-elvira/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Residencial Elvira</h3>
                <div class="info cidade w-clearfix">
                  <img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Uberaba - MG</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 250m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro planejado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Em obras</div>
                </div><a href="<?php echo site_url(); ?>/residencial-elvira/" target="_blank" class="button-2 w-button">saiba mais</a>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #793F98, #793F98);">Em Obras</div>
              </div>
            </div>
            <div class="div-empreendimento city_52" data-ix="show-info" style="background-image: url(<?= get_stylesheet_directory_uri() ?>/images/Reserva-Itapeva-01.jpg)" onclick="window.location.href = '<?php echo site_url(); ?>/reserva-itapeva/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Reserva Itapeva</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Itapeva - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 175m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro Planejado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Em obras</div>
                </div><a href="<?php echo site_url(); ?>/reserva-itapeva/" target="_blank" class="button-2 w-button">saiba mais</a>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #793F98, #793F98)">Em obras</div>
              </div>
            </div>
            <div class="div-empreendimento city_24" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2021/09/Avenida-Principal-V.2.jpg); background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important;" onclick="window.location.href = '<?php echo site_url(); ?>/smart-urba-vila-profeta-2/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Smart Urba Vila Profeta</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Campinas - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 126 m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro aberto inteligente</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Em Obras</div>
                </div><a href="<?php echo site_url(); ?>/smart-urba-vila-profeta-2/" target="_blank" class="button-2 w-button">saiba mais</a>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #793F98, #793F98);">Em Obras</div>
              </div>
            </div>
            <div class="div-empreendimento city_26" data-ix="show-info" style="background-image: url(/wp-content/uploads/2021/09/residencial-vila-america-2.jpg); background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important;" onclick="window.location.href = 'https://www.residencialvilaamerica.com.br/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Residencial Vila América</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Nova Odessa - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 300 m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Loteamento Fechado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Em Obras</div>
                </div><a href="https://www.residencialvilaamerica.com.br/" target="_blank" class="button-2 w-button">saiba mais</a>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #793f98, #793f98);">Em Obras</div>
              </div>
            </div>
            <!-- <div class="div-empreendimento city_26" data-ix="show-info" style="background-image: url(<?= get_stylesheet_directory_uri() ?>/images/photo.jpg);background-position:center;)" onclick="window.location.href = 'https://www.residencialvilaamerica.com.br/';">
                <div class="div-info w-clearfix">
                  <h3 class="heading-3">Vila América Place</h3>
                  <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                    <div class="text-block-3">Nova Odessa - SP</div>
                  </div>
                  <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                    <div class="text-block-3">A partir de 300 m²</div>
                  </div>
                  <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                    <div class="text-block-3">Terreno Comercial</div>
                  </div>
                  <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                    <div class="text-block-3"><strong>Status:</strong> Lançamento</div>
                  </div><a href="https://www.residencialvilaamerica.com.br/" target="_blank" class="button-2 w-button">saiba mais</a></div>
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
                  <div class="breve-lancamento boxx">Lançamento</div>
                </div>
              </div> -->
            <div class="div-empreendimento city_24" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2021/04/1-avenida-principal.jpg); background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important;" onclick="window.location.href = '<?= site_url() ?>/smart-urba-dunlop/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Smart Urba Dunlop</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Campinas - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 126 m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro aberto inteligente</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Em obras</div>
                </div><a href="<?php echo site_url(); ?>/smart-urba-dunlop/" target="_blank" class="button-2 w-button">saiba mais</a>
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
                <div class="breve-lancamento boxx" style="background-image: linear-gradient(45deg, #793F98, #793F98);">em obras</div>
              </div>
            </div>
            <div class="div-empreendimento city_13" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2020/09/5f62532fbfd2d3e0bdac2280_01.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/reserva-regatas';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Reserva Regatas</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Ribeirão Preto - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir 171 m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro planejado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Em obras</div>
                </div><a href="<?= site_url() ?>/loteamento/reserva-regatas" target="_blank" class="button-2 w-button">saiba mais</a>
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
                <div style="background-image: linear-gradient(45deg, #793F98, #793F98);" class="breve-lancamento boxx">Em obras</div>
              </div>
            </div>
            <!--<?php $args = array(
                  'post_type' => 'loteamento',
                  'post_status' => 'publish',
                  'meta_key'      => 'posicionamento',
                  'orderby'     => 'lancamento',
                  'order'       => 'ASC'
                );
                $wpb_all_query = new WP_Query($args); ?>
                  <?php if ($wpb_all_query->have_posts()) {
                    while ($wpb_all_query->have_posts()) {
                      $wpb_all_query->the_post();
                      $cidade_lot = get_the_terms(get_the_ID(), array('cidade_loteamentos'));
                  ?>
                      <div class="div-empreendimento city_<?= $cidade_lot[0]->term_id ?>" data-ix="show-info" style="background-image: url(<?php the_field('foto_de_capa'); ?>)" onclick="window.location.href = '<?= the_permalink(); ?>';">
                        <div class="div-info w-clearfix">
                          <h3 class="heading-3"><?php the_title(); ?></h3>
                          <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                            <div class="text-block-3"><?= $cidade_lot[0]->name ?></div>
                          </div>
                          <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                            <div class="text-block-3"><?php the_field('metragem'); ?></div>
                          </div>
                          <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                            <div class="text-block-3"><?php the_field('tipo_de_loteamento'); ?></div>
                          </div>
                          <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                            <div class="text-block-3"><strong>Status:</strong> <?php the_field('status'); ?></div>
                          </div><a href="<?= the_permalink(); ?>" class="button-2 w-button">saiba mais</a></div>
                        <div class="text-block-35"><?php the_field('observacao_da_imagem'); ?></div>
                        <div class="gradient"></div>
                      </div>
                    <?php
                    }
                  }
                  wp_reset_query();
                  wp_reset_postdata();
                    ?>-->
            <div class="div-empreendimento city_21" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2023/01/Piscina-Monte-das-Araucarias-Dez_22-scaled.jpg)" onclick="window.location.href = '<?php echo site_url(); ?>/loteamento/monte-das-araucarias/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Monte das Araucárias</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">São Carlos - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 300 m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Condomínio Fechado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Pronto para construir</div>
                </div><a href="<?php echo site_url(); ?>/loteamento/monte-das-araucarias/" target="_blank" class="button-2 w-button">saiba mais</a>
              </div>
              <!-- <div class="text-block-35">Imagem meramente ilustrativa</div> -->
              <div class="gradient"></div>
              <style>
                .tag-breve-lan-amento.boxx {
                  margin-top: 0 !important;
                  left: 0% !important;
                  right: 0% !important;
                  width: 200px;
                  height: 120px;
                }

                .breve-lancamento.boxx.branco-novo {
                  left: -60px;
                  top: 30px;
                  right: auto;
                  width: 230px;
                  height: 30px;
                  transform: rotate(-40deg);
                  background-image: linear-gradient(45deg, #fafafa, #fafafa);
                  color: #006B3F;
                  font-size: 10px !important;
                }
              </style>
              <div class="tag-breve-lan-amento boxx">
                <div class="breve-lancamento boxx branco-novo">Pronto para construir</div>
              </div>
            </div>
            <div class="div-empreendimento city_10" data-ix="show-info" style="background-image: url(<?= site_url() ?>/wp-content/uploads/2019/10/DJI_0009-min-scaled.jpg);" onclick="window.location.href = '<?= site_url() ?>/loteamento/portal-das-aguas';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Portal das Águas</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Amparo - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 200m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro Planejado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Pronto para construir</div>
                </div><a href="<?= site_url() ?>/loteamento/portal-das-aguas" target="_blank" class="button-2 w-button">saiba mais</a>
              </div>
              <div class="text-block-35"></div>
              <div class="gradient"></div>
              <style>
                .tag-breve-lan-amento.boxx {
                  margin-top: 0 !important;
                  left: 0% !important;
                  right: 0% !important;
                  width: 200px;
                  height: 120px;
                }

                .breve-lancamento.boxx.branco-novo {
                  left: -60px;
                  top: 30px;
                  right: auto;
                  width: 230px;
                  height: 30px;
                  transform: rotate(-40deg);
                  background-image: linear-gradient(45deg, #fafafa, #fafafa);
                  color: #006B3F;
                  font-size: 10px !important;
                }
              </style>
              <div class="tag-breve-lan-amento boxx">
                <div class="breve-lancamento boxx branco-novo">Pronto para construir</div>
              </div>
            </div>
            <div class="div-empreendimento city_16" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/10/05-1.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/giardino-bianco';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Giardino Bianco</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Campina Grande - PB</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 250m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Condomínio Fechado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> pronto para construir</div>
                </div><a href="<?= site_url() ?>/loteamento/giardino-bianco" target="_blank" class="button-2 w-button">saiba mais</a>
              </div>
              <!-- <div class="text-block-35">Imagem meramente ilustrativa</div> -->
              <div class="gradient"></div>
              <style>
                .tag-breve-lan-amento.boxx {
                  margin-top: 0 !important;
                  left: 0% !important;
                  right: 0% !important;
                  width: 200px;
                  height: 120px;
                }

                .breve-lancamento.boxx.branco {
                  left: -60px;
                  top: 30px;
                  right: auto;
                  width: 230px;
                  height: 30px;
                  transform: rotate(-40deg);
                  background-image: linear-gradient(45deg, #006b3f, #006b3f);
                }
              </style>
              <div class="tag-breve-lan-amento boxx">
                <div class="breve-lancamento boxx branco">Tour Virtual</div>
              </div>
            </div>
            <div class="div-empreendimento city_13" data-ix="show-info" style="background-image: url(<?= get_stylesheet_directory_uri() ?>/images/photo.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/reserva-macauba';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Reserva Macaúba</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Ribeirão Preto - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 140m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro Planejado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Pronto para construir</div>
                </div><a href="<?= site_url() ?>/loteamento/reserva-macauba" target="_blank" class="button-2 w-button">saiba mais</a>
              </div>
              <!--<div class="text-block-35">Imagem meramente ilustrativa</div>-->
              <div class="gradient"></div>
              <style>
                .tag-breve-lan-amento.boxx {
                  margin-top: 0 !important;
                  left: 0% !important;
                  right: 0% !important;
                  width: 200px;
                  height: 120px;
                }

                .breve-lancamento.boxx.branco-novo {
                  left: -60px;
                  top: 30px;
                  right: auto;
                  width: 230px;
                  height: 30px;
                  transform: rotate(-40deg);
                  background-image: linear-gradient(45deg, #fafafa, #fafafa);
                  color: #006B3F;
                  font-size: 10px !important;
                }
              </style>
              <div class="tag-breve-lan-amento boxx">
                <div class="breve-lancamento boxx branco-novo">Pronto para construir</div>
              </div>
            </div>
            <div class="div-empreendimento city_11" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2021/11/Bem-Viver-1-1.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/jardim-bem-viver';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Jardim Bem Viver</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Álvares Machado - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 171m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro Planejado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Pronto para construir</div>
                </div><a href="<?= site_url() ?>/loteamento/jardim-bem-viver" target="_blank" class="button-2 w-button">saiba mais</a>
              </div>
              <!--<div class="text-block-35">Imagem meramente ilustrativa</div>-->
              <div class="gradient"></div>
              <div class="gradient"></div>
              <style>
                .tag-breve-lan-amento.boxx {
                  margin-top: 0 !important;
                  left: 0% !important;
                  right: 0% !important;
                  width: 200px;
                  height: 120px;
                }

                .breve-lancamento.boxx.branco-novo {
                  left: -60px;
                  top: 30px;
                  right: auto;
                  width: 230px;
                  height: 30px;
                  transform: rotate(-40deg);
                  background-image: linear-gradient(45deg, #fafafa, #fafafa);
                  color: #006B3F;
                  font-size: 10px !important;
                }
              </style>
              <div class="tag-breve-lan-amento boxx">
                <div class="breve-lancamento boxx branco-novo">Pronto para construir</div>
              </div>
            </div>
            <div class="div-empreendimento city_15" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/10/03-Piscina-2.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/jardins-dos-girassois';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Jardim dos Girassois</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Feira de Santana - BA</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 160m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Condomínio Fechado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> pronto para construir</div>
                </div><a href="<?= site_url() ?>/loteamento/jardins-dos-girassois" target="_blank" class="button-2 w-button">saiba mais</a>
              </div>
              <!--<div class="text-block-35">Imagem meramente ilustrativa</div>-->
              <div class="gradient"></div>
              <style>
                .tag-breve-lan-amento.boxx {
                  margin-top: 0 !important;
                  left: 0% !important;
                  right: 0% !important;
                  width: 200px;
                  height: 120px;
                }

                .breve-lancamento.boxx.branco {
                  left: -60px;
                  top: 30px;
                  right: auto;
                  width: 230px;
                  height: 30px;
                  transform: rotate(-40deg);
                  background-image: linear-gradient(45deg, #006b3f, #006b3f);
                }
              </style>
              <div class="tag-breve-lan-amento boxx">
                <div class="breve-lancamento boxx branco">Tour Virtual</div>
              </div>
            </div>
            <div class="div-empreendimento city_14" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/10/jardins-de-campos.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/jardins-de-campos';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Jardins de Campos</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Campos dos Goytacazes - RJ</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 160m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro Planejado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Pronto para construir</div>
                </div><a href="<?= site_url() ?>/loteamento/jardins-de-campos" target="_blank" class="button-2 w-button">saiba mais</a>
              </div>
              <!--<div class="text-block-35">Imagem meramente ilustrativa</div>-->
              <div class="gradient"></div>
              <style>
                .tag-breve-lan-amento.boxx {
                  margin-top: 0 !important;
                  left: 0% !important;
                  right: 0% !important;
                  width: 200px;
                  height: 120px;
                }

                .breve-lancamento.boxx.branco-novo {
                  left: -60px;
                  top: 30px;
                  right: auto;
                  width: 230px;
                  height: 30px;
                  transform: rotate(-40deg);
                  background-image: linear-gradient(45deg, #fafafa, #fafafa);
                  color: #006B3F;
                  font-size: 10px !important;
                }
              </style>
              <div class="tag-breve-lan-amento boxx">
                <div class="breve-lancamento boxx branco-novo">Pronto para construir</div>
              </div>
            </div>
            <div class="div-empreendimento city_15" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/10/jardim-das-tulipas.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/jardim-das-tulipas';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Jardim das Tulipas</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Feira de Santana - BA</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 200m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Condomínio Fechado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Pronto para construir</div>
                </div><a href="<?= site_url() ?>/loteamento/jardim-das-tulipas" target="_blank" class="button-2 w-button">saiba mais</a>
              </div>
              <!--<div class="text-block-35">Imagem meramente ilustrativa</div>-->
              <div class="gradient"></div>
              <style>
                .tag-breve-lan-amento.boxx {
                  margin-top: 0 !important;
                  left: 0% !important;
                  right: 0% !important;
                  width: 200px;
                  height: 120px;
                }

                .breve-lancamento.boxx.branco-novo {
                  left: -60px;
                  top: 30px;
                  right: auto;
                  width: 230px;
                  height: 30px;
                  transform: rotate(-40deg);
                  background-image: linear-gradient(45deg, #fafafa, #fafafa);
                  color: #006B3F;
                  font-size: 10px !important;
                }
              </style>
              <div class="tag-breve-lan-amento boxx">
                <div class="breve-lancamento boxx branco-novo">Pronto para construir</div>
              </div>
            </div>
            <div class="div-empreendimento city_14" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/10/bem-viver-campos.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/bem-viver-campos';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Bem Viver Campos</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Campos dos Goytacazes - RJ</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 160m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro Planejado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> pronto para construir</div>
                </div><a href="<?= site_url() ?>/loteamento/bem-viver-campos" target="_blank" class="button-2 w-button">saiba mais</a>
              </div>
              <!--<div class="text-block-35">Imagem meramente ilustrativa</div>-->
              <div class="gradient"></div>
              <style>
                .tag-breve-lan-amento.boxx {
                  margin-top: 0 !important;
                  left: 0% !important;
                  right: 0% !important;
                  width: 200px;
                  height: 120px;
                }

                .breve-lancamento.boxx.branco {
                  left: -60px;
                  top: 30px;
                  right: auto;
                  width: 230px;
                  height: 30px;
                  transform: rotate(-40deg);
                  background-image: linear-gradient(45deg, #006b3f, #006b3f);
                }
              </style>
              <div class="tag-breve-lan-amento boxx">
                <div class="breve-lancamento boxx branco-novo">Pronto para construir</div>
              </div>
            </div>
            <div class="div-empreendimento city_12" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/10/parque-atlanta-p-500.jpeg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/parque-atlanta';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Parque Atlanta</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Araraquara - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 200m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Condomínio Fechado</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Pronto para construir</div>
                </div><a href="<?= site_url() ?>/loteamento/parque-atlanta" target="_blank" class="button-2 w-button">saiba mais</a>
              </div>
              <!--<div class="text-block-35">Imagem meramente ilustrativa</div>-->
              <div class="gradient"></div>
              <style>
                .tag-breve-lan-amento.boxx {
                  margin-top: 0 !important;
                  left: 0% !important;
                  right: 0% !important;
                  width: 200px;
                  height: 120px;
                }

                .breve-lancamento.boxx.branco-novo {
                  left: -60px;
                  top: 30px;
                  right: auto;
                  width: 230px;
                  height: 30px;
                  transform: rotate(-40deg);
                  background-image: linear-gradient(45deg, #fafafa, #fafafa);
                  color: #006B3F;
                  font-size: 10px !important;
                }
              </style>
              <div class="tag-breve-lan-amento boxx">
                <div class="breve-lancamento boxx branco-novo">Pronto para construir</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="left-arrow-2 w-slider-arrow-left">
      <div class="icon w-icon-slider-left"></div>
    </div>
    <div class="right-arrow-2 w-slider-arrow-right">
      <div class="icon-2 w-icon-slider-right"></div>
    </div>
    <div class="slide-nav-2 w-slider-nav w-num"></div>
  </div>
  </div>
</section>
<div class="section-vantagens" style="height:315px;">
  <div class="container-padrao">
    <div class="columns w-row" style="display:flex; gap: 1px;
    justify-content: center;
    flex-wrap: wrap;
    row-gap: 40px;">
      <div data-w-id="b2ff77af-002c-e8fc-d5e4-e9a5c7d60392" style="opacity:0 padding-left:0px; padding-left:0px;" class="column w-col w-col-3">
        <div class="text-block-4"> Presente em mais de <strong class="destaque">30 cidades e 7 estados</strong></div>
      </div>
      <div data-w-id="b2ff77af-002c-e8fc-d5e4-e9a5c7d60393" style="opacity:0 padding-left:0px;" class="column w-col w-col-3">
        <div class="text-block-4"><strong class="destaque">Mais de 16.300</strong> unidades lançadas</div>
      </div>
      <div data-w-id="1e85ff7d-598a-5fbe-fb40-e20ca4a4b153" style="opacity:0 padding-left:0px;" class="column w-col w-col-3">
        <div class="text-block-4"><strong class="destaque">Mais de 7.000</strong> unidades entregues</div>
      </div>

      <div data-w-id="1e85ff7d-598a-5fbe-fb40-e20ca4a4b153" style="opacity:0 padding-left:0px;" class="column w-col w-col-3">
        <div class="text-block-4"><strong class="destaque">Mais de 7.3 milhões</strong><br>de m² urbanizados</div>
      </div>
      <div data-w-id="1e85ff7d-598a-5fbe-fb40-e20ca4a4b154" style="opacity:0" class="column end w-col w-col-3">
        <div class="text-block-4">Empresa da<br> <strong class="destaque">MRV&CO</strong></div>
      </div>
    </div>
  </div>
</div>
<div class="bairros-planejados">
  <div class="container-padrao">
    <h2 class="heading-2">Bairros <strong class="destaque-h2">Planejados</strong> em Localizações <strong class="destaque-h2">Estratégicas</strong></h2>
    <p class="paragraph home">Os bairros planejados da Urba foram arquitetonicamente pensados nos mínimos detalhes para proporcionar mais qualidade de vida aos moradores, desde diversão até acesso a comércio e serviços perto de casa. <br>‍<br><strong class="bold-text-9">O conceito desse novo tipo de loteamento envolve os seguintes pilares:</strong> <br></p>
    <div class="div-pilares">
      <div data-w-id="9170d268-8b7b-89d4-70ff-f6a4cbc8b0bc" class="div-pilar" data-ix="open-descritivo"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/icons_infra.png" width="125" height="125" alt="" class="image-3">
        <div class="text-block-5">Infraestrutura completa</div>
        <div class="div-explicacao">
          <p class="paragraph-25">Rede de água, esgoto, energia e vias 100% asfaltadas</p>
        </div>
      </div>
      <div data-w-id="b9f02642-2e2e-db94-45e6-a0a9a2a6f6d0" class="div-pilar" data-ix="open-descritivo"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/icons_lazer_1.png" width="125" height="125" alt="" class="image-3">
        <div class="text-block-5">Áreas de convivência e lazer</div>
        <div class="div-explicacao">
          <p class="paragraph-25">Praças e áreas de lazer privativas</p>
        </div>
      </div>
      <div data-w-id="8410c0c7-e668-3e9d-51ef-0acb50ede6ac" class="div-pilar" data-ix="open-descritivo"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/icons_verde.png" width="125" height="125" alt="" class="image-3">
        <div class="text-block-5">Áreas verdes</div>
        <div class="div-explicacao">
          <p class="paragraph-25">Áreas verdes preservadas e paisagismo</p>
        </div>
      </div>
      <div data-w-id="1a951ddd-05e0-a721-2112-9f51305f7cfe" class="div-pilar" data-ix="open-descritivo"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/icons_lotes.png" width="125" height="125" alt="" class="image-3">
        <div class="text-block-5">Terrenos residenciais, comerciais e industriais</div>
        <div class="div-explicacao">
          <p class="paragraph-25">Moradia, serviços e comércio no próprio bairro</p>
        </div>
      </div>
      <div data-w-id="5f064fed-772f-cd3c-9c98-2b7b7b53d135" class="div-pilar" data-ix="open-descritivo"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/icons_local.png" width="125" height="125" alt="" class="image-3">
        <div class="text-block-5">Localização estratégica</div>
        <div class="div-explicacao">
          <p class="paragraph-25">Bairros localizados em vetores de crescimento da cidade</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="formas-pagamento">
  <div class="container-padrao">
    <h2 class="heading-2">A <strong class="destaque-h2">Urba</strong> facilita as <strong class="destaque-h2">formas de pagamento</strong> para você</h2>
    <div class="columns _2 w-row">
      <div data-w-id="f87ba805-90b2-a36c-26ac-021b75fd9b85" style="opacity:0" class="column _2 interna w-col w-col-4">
        <div class="text-block-4 _2"><strong class="bold-text-12">Planos flexíveis</strong> direto com a loteadora</div>
      </div>
      <div data-w-id="f87ba805-90b2-a36c-26ac-021b75fd9b8a" style="opacity:0" class="column _2 interna w-col w-col-4">
        <div class="text-block-4 _2">Opção de <strong class="bold-text-13">financiamento sem juros</strong></div>
      </div>
      <div data-w-id="f87ba805-90b2-a36c-26ac-021b75fd9b8f" style="opacity:0" class="column _2 interna end w-col w-col-4">
        <div class="text-block-4 _2">Opção de <strong class="bold-text-14">pagamento com FGTS</strong>*</div>
      </div>
    </div>
    <div class="text-block-6">*Utilização do FGTS referente a modalidade lote + construção, sujeito à análise e aprovação de crédito e projeto da casa pela instituição bancária</div>
  </div>
</div>
<div class="cta">
  <div class="container-padrao">
    <div class="div-info-cta">
      <h2 class="heading-4"><strong class="bold-text-10">Se interessou?</strong> Converse com um consultor agora, em tempo real, e <strong class="bold-text-11">encontre o lote perfeito para você</strong>.</h2><a href="https://api.whatsapp.com/send?phone=553140206868" target="_blank" class="button-3 w-button" data-ix="open-formbox">Converse com um consultor da Urba</a>
    </div>
  </div>
</div>
<div class="blog">
  <div class="container-padrao">
    <h2 class="heading-2 hblog">Tudo sobre <strong class="destaque-h2">construção</strong>, <strong class="destaque-h2">decoração</strong>, <strong class="destaque-h2">planejamento financeiro</strong> e muito mais no <strong class="destaque-h2">nosso blog</strong>.</h2>
    <div class="ultimos-posts">
      <?php $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '3'
      );
      $wpb_all_query = new WP_Query($args); ?>
      <?php if ($wpb_all_query->have_posts()) {
        while ($wpb_all_query->have_posts()) {
          $wpb_all_query->the_post();
          $cidade_lot = get_the_terms(get_the_ID(), array('cidade_loteamentos'));

          $post_thumbnail_id = intval(get_post_thumbnail_id(get_the_id()));
          $array_thumbnail = wp_get_attachment_image_src($post_thumbnail_id, 'full');
          if ($array_thumbnail == '') {
            $thumbn = get_option('img_NE');
          } else {
            $thumbn = $array_thumbnail[0];
          }

      ?>
          <style>
            .div-artigo .heading-5 {
              display: -webkit-box;
              -webkit-line-clamp: 3;
              -webkit-box-orient: vertical;
              overflow: hidden;
              text-overflow: ellipsis;
              height: 71px;
            }
          </style>
          <div class="div-artigo">
            <div class="imagem-blog" style="background-image: url('<?= $thumbn; ?>');"></div>
            <h3 class="heading-5"><?= the_title() ?></h3>
            <p class="paragraph-7"><?= the_excerpt_first_line() ?></p>
            <div class="text-block-7"><?= get_the_date() ?></div><a href="<?php echo the_permalink(); ?>" target="_blank" class="button-4 w-button">leia mais</a>
          </div>
      <?php
        }
      }
      wp_reset_query();
      wp_reset_postdata();
      ?>
    </div>
    <div class="captacao-newsletter">
      <h4 class="heading-20">Cadastre-se para receber as últimas novidades!</h4>
      <div class="w-form">
        <form id="form_news_blog" name="form_news_blog" data-name="Email Form 3" class="form-6 w-clearfix"><input type="email" class="text-field-5 w-input" maxlength="256" name="email" data-name="E-mail" placeholder="Seu melhor e-mail" id="email_news" required=""><input type="submit" value="Enviar" data-wait="Aguarde..." class="submit-button-6 w-button">
          <div class="w-row bloco_consentimento">
            <div class="w-col" style="text-align: center;">
              <!--<p>Precisamos dos seus dados para manter contato com você e prosseguir com seu atendimento, de acordo com nossa <a href="https://mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>-->
              <p>Aceito receber via e-mail, o contato da marca MRV&CO com ações de marketing, ofertas de produto e serviços. Estou de acordo com as formas de tratamento de dados realizados pela marca MRV&CO, conforme sua <a href="https://www.mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>
              <label class="checkbox-button-field-2 w-checkbox"><input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" value="Ok, entendi!" class="w-form-formcheckboxinput w-checkbox-input" required><span for="Proprietário" class="checkbox-button-label w-form-label">Ok, entendi!</span>
              </label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="faq">
  <div class="container-padrao">
    <h2 class="heading-2">Alguma dúvida sobre o seu futuro terreno? <strong class="destaque-h2">Nós respondemos</strong>.</h2>
    <div class="div-questoes">
      <div class="row w-row">
        <div class="column-7 w-col w-col-6">
          <div class="div-questao" data-ix="open-resposta">
            <div class="div-duvida w-clearfix">
              <div class="duvida"><strong>1.</strong> Qual a diferença entre bairro planejado e condomínio fechado?</div>
              <div class="div-seta"></div>
            </div>
            <div class="div-resposta">
              <div class="recurso">
                <p class="paragraph-14">Um bairro planejado é um <strong>loteamento aberto composto por lotes residenciais, comerciais e industriais</strong>, infraestrutura completa, áreas verdes e áreas de lazer para que você possa resolver todas as sua necessidades do dia a dia e se divertir dentro do próprio bairro. <br><br>O condomínio fechado também possui <strong>infraestrutura completa e conta com lotes residenciais</strong>. A diferença está em guarita de controle de acesso e área de lazer privativa, garantindo segurança e diversão para toda a sua família.<br></p>
              </div>
            </div>
          </div>
        </div>
        <div class="column-20 w-col w-col-6">
          <div class="div-questao menor" data-ix="open-resposta">
            <div class="div-duvida w-clearfix">
              <div class="duvida"><strong>2.</strong> Quais são as metragens dos lotes Urba?</div>
              <div class="div-seta"></div>
            </div>
            <div class="div-resposta">
              <div class="recurso _2">
                <p class="paragraph-14">Os terrenos da Urba variam de acordo com o loteamento. <strong>Temos terrenos de 140m² a 500m²</strong>. Você pode consultar a metragem exata na página do loteamento do seu interesse.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row w-row">
        <div class="column-7 w-col w-col-6">
          <div class="div-questao" data-ix="open-resposta">
            <div class="div-duvida w-clearfix">
              <div class="duvida"><strong>3.</strong> O loteamento é entregue com que tipo de infraestrutura?</div>
              <div class="div-seta"></div>
            </div>
            <div class="div-resposta">
              <div class="recurso">
                <p class="paragraph-14">Os loteamentos da Urba são entregues com <strong>rede de água tratada, esgoto e energia, além das vias 100% asfaltadas e paisagismo</strong> em toda a extensão. Além disso, possuem áreas de lazer e áreas verdes. Você pode consultar todos os itens na página do loteamento do seu interesse.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="column-20 w-col w-col-6">
          <div class="div-questao menor" data-ix="open-resposta">
            <div class="div-duvida w-clearfix">
              <div class="duvida"><strong>4.</strong> O loteamento possui área de lazer?</div>
              <div class="div-seta"></div>
            </div>
            <div class="div-resposta">
              <div class="recurso _2">
                <p class="paragraph-14">Sim, os loteamentos da Urba contam com áreas de lazer compartilhadas nos bairros planejados, como <strong>espaços fitness, quadras e playgrounds</strong> localizados nas praças. <br><br>Já nos condomínios fechados, os loteamentos recebem uma área de lazer completa com opções para todas as idades, como <strong>piscina, churrasqueira, salão de jogos </strong>e muito mais.<br><br>Cada loteamento é único, por isso os itens de lazer variam de acordo com o projeto. Você pode consultar as opções na página do loteamento do seu interesse.<br></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row w-row">
        <div class="column-7 w-col w-col-6">
          <div class="div-questao" data-ix="open-resposta">
            <div class="div-duvida w-clearfix">
              <div class="duvida"><strong>5.</strong> Qual o prazo de obra de um loteamento?</div>
              <div class="div-seta"></div>
            </div>
            <div class="div-resposta">
              <div class="recurso">
                <p class="paragraph-14">Você pode <strong>consultar o prazo exato de obra no seu contrato</strong>, mas você também pode acompanhar a evolução das obras na página do loteamento do seu interesse.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="column-20 w-col w-col-6">
          <div class="div-questao menor" data-ix="open-resposta">
            <div class="div-duvida w-clearfix">
              <div class="duvida"><strong>6.</strong> Quando posso construir a minha casa?</div>
              <div class="div-seta"></div>
            </div>
            <div class="div-resposta">
              <div class="recurso _2">
                <p class="paragraph-14">Após a entrega do loteamento pela Urba, para receber o seu lote, <strong>você deve estar adimplente, escriturar e registrar o seu terreno</strong> e obter as devidas aprovações e autorizações na prefeitura e/ou associação do condomínio. Você pode consultar todas as normas com a associação do seu loteamento ou prefeitura da sua cidade.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row w-row">
        <div class="column-7 w-col w-col-6">
          <div class="div-questao" data-ix="open-resposta">
            <div class="div-duvida w-clearfix">
              <div class="duvida"><strong>7.</strong> A Urba também constrói as casas?</div>
              <div class="div-seta"></div>
            </div>
            <div class="div-resposta">
              <div class="recurso">
                <p class="paragraph-14">Não, <strong>a Urba constrói o loteamento com toda a infraestrutura necessária</strong> para receber a sua casa e comercializa somente os lotes. Você pode se inspirar nos projetos sugeridos pela Urba na página do loteamento do seu interesse.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="column-20 w-col w-col-6">
          <div class="div-questao menor" data-ix="open-resposta">
            <div class="div-duvida w-clearfix">
              <div class="duvida"><strong>8.</strong> Posso construir comércios no loteamento?</div>
              <div class="div-seta"></div>
            </div>
            <div class="div-resposta">
              <div class="recurso _2">
                <p class="paragraph-14">Em loteamentos em que há terrenos comerciais ou mistos você pode construir um comércio e aproveitar todo o potencial de público do novo bairro, além da infraestrutura completa já pronta. Consulte se o loteamento possui essa área na página do loteamento do seu interesse.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row w-row">
        <div class="column-7 w-col w-col-6">
          <div class="div-questao" data-ix="open-resposta">
            <div class="div-duvida w-clearfix">
              <div class="duvida"><strong>9.</strong> Quais são as opções de financiamento?</div>
              <div class="div-seta"></div>
            </div>
            <div class="div-resposta">
              <div class="recurso _3">
                <p class="paragraph-14">A Urba conta com duas modalidades de financiamento:</p>
                <ul class="list-4">
                  <li class="list-item-5"><strong>Financiamento direto com a loteadora:</strong> Você pode financiar o seu terreno direto com a Urba, sem burocracia e sem comprovação de renda.</li>
                  <li class="list-item-5"><strong>Financiamento bancário:</strong> Nessa modalidade, o cliente financia o lote e a construção da casa com a instituição bancária. Você pode contar com diversos benefícios de acordo com o seu perfil, como subsídios do Minha Casa Minha Vida e ainda utilizar o seu FGTS. Essa opção está sujeita à aprovação de crédito e projeto da casa pelo banco. Consulte a disponibilidade dessa modalidade na página do loteamento do seu interesse.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="column-20 w-col w-col-6">
          <div class="div-questao menor" data-ix="open-resposta">
            <div class="div-duvida w-clearfix">
              <div class="duvida"><strong>10.</strong> Posso utilizar o meu FGTS no financiamento?</div>
              <div class="div-seta"></div>
            </div>
            <div class="div-resposta">
              <div class="recurso _2">
                <p class="paragraph-14">Sim, <strong>na modalidade lote + construção</strong>, disponível em algumas cidades, você pode utilizar o FGTS no seu financiamento. Essa opção contempla o valor do lote e da construção da casa e está sujeita à análise e aprovação de crédito pela instituição bancária. Consulte a disponibilidade dessa modalidade na página do loteamento do seu interesse.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>