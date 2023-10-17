<?php
/*
Template Name: Página Home
*/
?>
<?php get_header(); ?>
<style>
  .slide {
    background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.2), transparent 20%), linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://urba.com.br/wp-content/uploads/2021/04/1-avenida-principal.jpg');
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
  <div class="container-padrao">
    <div class="div-text-hero home">
      <h1 data-w-id="39bb2f0b-ac22-dba9-d44f-0369270e88bd" style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(-50DEG) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0" class="heading home"><strong data-w-id="1601d31c-19ed-9ebf-9f65-e5059729616b" class="bold-text-27">Loteamento planejado</strong> com tudo o que você precisa para viver os <strong data-w-id="67265963-c22f-776b-5bbc-744e7985c9a3" class="bold-text-27">melhores momentos </strong>da sua vida</h1>
    </div>
  </div>
  <div data-delay="5000" data-animation="cross" data-autoplay="1" data-easing="ease-in" data-duration="500" data-infinite="1" class="slider w-slider">
    <div class="w-slider-mask">
      <div class="slide w-slide">
        <a href="https://urba.com.br/smart-urba-dunlop/">
          <div class="container-padrao">
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
        <a href="https://urba.com.br/loteamento/giardino-bianco/">
          <div class="container-padrao">
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
        <a href="https://urba.com.br/loteamento/monte-das-araucarias/">
          <div class="container-padrao">
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
        <a href="https://urba.com.br/loteamento/jardim-das-tulipas/">
          <div class="container-padrao">
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

            <div class="div-empreendimento city_69" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2022/11/img-hero-woman-and-daughter.jpg);background-position: -200px;" onclick="window.location.href ='https://urba.com.br/parque-vitoria/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Parque Vitória</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Ribeirão das Neves/MG</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 250m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro planejado aberto</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Breve Lançamento</div>
                </div><a href="https://urba.com.br/parque-vitoria/" target="_blank" class="button-2 w-button">saiba mais</a>
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
            <div class="div-empreendimento city_21" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2022/10/family-lifestyle-outdoors-autumn-time.jpg)" onclick="window.location.href ='https://urba.com.br/residencial-progresso/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Residencial Progresso</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">São Carlos/SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 200m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Bairro planejado aberto</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Lançamento</div>
                </div><a href="https://urba.com.br/residencial-progresso/" target="_blank" class="button-2 w-button">saiba mais</a>
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
            <div class="div-empreendimento city_59" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2022/10/optimistic-woman-with-brunette-hair-in-denim-olive-clothes-smiles-and-holding-phone-outside-woman-in-light-headphones-poses-outdoors.jpg)" onclick="window.location.href ='https://urba.com.br/empreendimentos/';">
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
                </div><a href="https://urba.com.br/empreendimentos/" target="_blank" class="button-2 w-button">saiba mais</a>
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

            <div class="div-empreendimento city_68" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2022/11/img-box-buona-vista.jpg)" onclick="window.location.href ='https://www.residencialbuonavita.com.br/';">
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
                  <div class="text-block-3"><strong>Status:</strong> Breve Lançamento</div>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #ff5aad, #f7287c);">Lançamento</div>
              </div>
            </div>

            <div class="div-empreendimento city_63" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2022/11/escola-lp-jardim-sao-roque.jpg);background-position: -63px;" onclick="window.location.href ='https://urba.com.br/jardim-sao-roque/';">
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
                  <div class="text-block-3"><strong>Status:</strong>Lançamento</div>
                </div><a href="https://urba.com.br/jardim-sao-roque/" target="_blank" class="button-2 w-button">saiba mais</a>
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

            <div class="div-empreendimento city_64" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PORTARIA-1.jpg)" onclick="window.location.href ='https://urba.com.br/reserva-monte-mor/';">
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
                  <div class="text-block-3"><strong>Status:</strong> Breve Lançamento</div>
                </div><a href="https://urba.com.br/reserva-monte-mor/" target="_blank" class="button-2 w-button">saiba mais</a>
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

            <div class="div-empreendimento city_67" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2022/09/bg_topo-e1662056347555.png)" onclick="window.location.href ='https://altosaofernando.com.br/';">
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
                  <div class="text-block-3"><strong>Status:</strong> Lançamento</div>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #ff5aad, #f7287c);">Lançamento</div>
              </div>
            </div>

            <div class="div-empreendimento city_58" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2022/10/URBA-RECANTO-DO-MOINHO_PISCINA.png);background-position-y: -90px;background-size: cover;" onclick="window.location.href ='https://www.recantodomoinho.com.br/';">
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
                  <div class="text-block-3"><strong>Status:</strong> Lançamento</div>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #ff5aad, #f7287c);">Lançamento</div>
              </div>
            </div>

            <div class="div-empreendimento city_59" data-ix="show-info" style="background-image: url(<?= get_site_url() ?>/wp-content/uploads/2022/02/IMAGEM-BOX-HOME.jpg)" onclick="window.location.href ='https://urba.com.br/residencial-elvira/';">
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
                  <div class="text-block-3"><strong>Status:</strong> Lançamento</div>
                </div><a href="https://urba.com.br/residencial-elvira/" target="_blank" class="button-2 w-button">saiba mais</a>
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
            <div class="div-empreendimento city_52" data-ix="show-info" style="background-image: url(<?= get_stylesheet_directory_uri() ?>/images/Reserva-Itapeva-01.jpg)" onclick="window.location.href = 'https://urba.com.br/reserva-itapeva/';">
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
                </div><a href="https://urba.com.br/reserva-itapeva/" target="_blank" class="button-2 w-button">saiba mais</a>
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
            <div class="div-empreendimento city_24" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2021/09/Avenida-Principal-V.2.jpg); background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important;" onclick="window.location.href = 'https://urba.com.br/smart-urba-vila-profeta-2/';">
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
                </div><a href="https://urba.com.br/smart-urba-vila-profeta-2/" target="_blank" class="button-2 w-button">saiba mais</a>
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
            <div class="div-empreendimento city_24" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2021/04/1-avenida-principal.jpg); background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important;" onclick="window.location.href = '<?= site_url() ?>/smart-urba-dunlop/';">
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
                </div><a href="https://urba.com.br/smart-urba-dunlop/" target="_blank" class="button-2 w-button">saiba mais</a>
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
            <div class="div-empreendimento city_13" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2020/08/img-02.jpg)" onclick="window.location.href = 'https://urba.com.br/loteamentos-comerciais/santa-iria/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Santa Iria Place</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Ribeirão Preto - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Até 640 m²</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/tipo-empreendimento.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">Terreno Comercial</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/obras-laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3"><strong>Status:</strong> Em obras</div>
                </div><a href="https://urba.com.br/loteamentos-comerciais/santa-iria/" target="_blank" class="button-2 w-button">saiba mais</a>
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
            <div class="div-empreendimento city_13" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2020/09/5f62532fbfd2d3e0bdac2280_01.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/reserva-regatas';">
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
            <div class="div-empreendimento city_21" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2023/01/Piscina-Monte-das-Araucarias-Dez_22-scaled.jpg)" onclick="window.location.href = 'https://urba.com.br/loteamento/monte-das-araucarias/';">
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
                </div><a href="https://urba.com.br/loteamento/monte-das-araucarias/" target="_blank" class="button-2 w-button">saiba mais</a>
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
            <div class="div-empreendimento city_16" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2019/10/05-1.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/giardino-bianco';">
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
            <div class="div-empreendimento city_11" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2021/11/Bem-Viver-1-1.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/jardim-bem-viver';">
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
            <div class="div-empreendimento city_15" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2019/10/03-Piscina-2.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/jardins-dos-girassois';">
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
            <div class="div-empreendimento city_14" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2019/10/jardins-de-campos.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/jardins-de-campos';">
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
            <div class="div-empreendimento city_15" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2019/10/jardim-das-tulipas.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/jardim-das-tulipas';">
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
            <div class="div-empreendimento city_14" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2019/10/bem-viver-campos.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/bem-viver-campos';">
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
                <div class="breve-lancamento boxx branco">Tour Virtual</div>
              </div>
            </div>
            <div class="div-empreendimento city_12" data-ix="show-info" style="background-image: url(https://urba.com.br/wp-content/uploads/2019/10/parque-atlanta-p-500.jpeg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/parque-atlanta';">
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
<div class="section-vantagens">
  <div class="container-padrao">
    <div class="columns w-row">
      <div data-w-id="b2ff77af-002c-e8fc-d5e4-e9a5c7d60392" style="opacity:0" class="column w-col w-col-3">
        <div class="text-block-4"> Presente em mais de <strong class="destaque">30 cidades e 6 estados</strong></div>
      </div>
      <div data-w-id="b2ff77af-002c-e8fc-d5e4-e9a5c7d60393" style="opacity:0" class="column w-col w-col-3">
        <div class="text-block-4"><strong class="destaque">Mais de 13.300</strong> unidades lançadas</div>
      </div>
      <div data-w-id="1e85ff7d-598a-5fbe-fb40-e20ca4a4b153" style="opacity:0" class="column w-col w-col-3">
        <div class="text-block-4"><strong class="destaque">Mais de 6.500</strong> unidades entregues</div>
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