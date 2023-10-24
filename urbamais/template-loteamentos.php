<?php
/*
Template Name: Página Loteamentos
*/
?>
<?php get_header(); ?>

<section id="loteamentos" class="loteamentos interna">
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

          function GetURLParameter(sParam) {
            "use strict";
            console.log('GetURLParameter');
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++) {
              var sParameterName = sURLVariables[i].split('=');
              if (sParameterName[0] == sParam) {
                return sParameterName[1];
              }
              return false;
            }
          }
          document.addEventListener('DOMContentLoaded', function() {
            var filtrarCidade = GetURLParameter('cidade');
            console.log(filtrarCidade);
            if (filtrarCidade) {
              console.log('if ' + filtrarCidade);
              jQuery(".escolha-cidade").val(filtrarCidade).trigger('change');

            }
          }, false);
        </script>
      </form>
    </div>
    <div data-animation="slide" data-hide-arrows="1" data-duration="500" data-infinite="1" class="slider-2 w-slider">
      <div class="w-slider-mask">
        <div class="w-slide">
          <div class="div-empreendimentos">
            <div class="div-empreendimento city_78" data-ix="show-info" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2023/10/URBA_JARDIM_DAS_MANTIQUEIRAS_VISTA_AEREA_GOOGLE_A3-scaled.jpg')" onclick="window.location.href ='<?php echo site_url(); ?>/jardins-da-mantiqueira';">
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
                  background-image: linear-gradient(45deg, #ff5aad, #f7287c);
                }
              </style>
              <div class="tag-breve-lan-amento boxx">
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #ff5aad, #f7287c);">Lançamento</div>
              </div>
            </div>
            <div class="div-empreendimento city_64" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PORTARIA-1.jpg)" onclick="window.location.href ='<?php echo site_url(); ?>/reserva-monte-mor/';">
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
            <div class="div-empreendimento city_69" data-ix="show-info" style="background-image: url('<?php echo site_url('/wp-content/uploads/2023/09/hero-totem-parque-vitoria-scaled.webp'); ?>');background-position: -100px;" onclick="window.location.href ='<?php echo site_url(); ?>/parque-vitoria/';">
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

            <div class="div-empreendimento city_21" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/10/family-lifestyle-outdoors-autumn-time.jpg)" onclick="window.location.href ='<?php echo site_url(); ?>/residencial-progresso/';">
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

            <div class="div-empreendimento city_21" data-ix="show-info" style="background-image: url(<?= get_site_url() ?>/wp-content/uploads/2022/02/IMAGEM-BOX-HOME.jpg)" onclick="window.location.href ='<?php echo site_url(); ?>/residencial-elvira/';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Residencial Elvira</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
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
                  <div class="text-block-3"><strong>Status:</strong> Em obras</div>
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
                <div class="breve-lancamento boxx laranja" style="background-image: linear-gradient(45deg, #793f98, #793f98);">Em obras</div>
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
                <div class="breve-lancamento boxx" style="background-image: linear-gradient(45deg, #793f98, #793f98);">em obras</div>
              </div>
            </div>
            <div class="div-empreendimento city_13" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2020/09/5f62532fbfd2d3e0bdac2280_01.jpg)" onclick="window.location.href = '<?= site_url() ?>/loteamento/reserva-regatas';">
              <div class="div-info w-clearfix">
                <h3 class="heading-3">Reserva Regatas</h3>
                <div class="info cidade w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/pin_laranja.png" width="25" height="25" alt="Parque Atlanta" class="image-2">
                  <div class="text-block-3">Ribeirão Preto - SP</div>
                </div>
                <div class="info w-clearfix"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/02/area_laranja.png" width="25" height="25" alt="" class="image-2">
                  <div class="text-block-3">A partir de 171 m²</div>
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
                  'order'       => 'DESC'
                );
                $wpb_all_query = new WP_Query($args); ?>
                  <?php if ($wpb_all_query->have_posts()) {
                    while ($wpb_all_query->have_posts()) {
                      $wpb_all_query->the_post();
                      $cidade_lot = get_the_terms(get_the_ID(), array('cidade_loteamentos'));
                  ?>
                      <div class="div-empreendimento city_<?= $cidade_lot[0]->term_id ?>" data-ix="show-info" style="background-image: url(<?php the_field('foto_de_capa'); ?>)"  onclick="window.location.href = '<?= the_permalink(); ?>';">
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
                    ?> -->
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
            <div class="div-empreendimento city_10" data-ix="show-info" style="background-image: url(<?php echo site_url(); ?>//wp-content/uploads/2019/10/portal-das-aguas-p-500.jpeg);)" onclick="window.location.href = '<?= site_url() ?>/loteamento/portal-das-aguas';">
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
<?php get_footer(); ?>