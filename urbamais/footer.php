<!--<div id="side_popup" class="">
    <a target="_blank" href="https://chat.blip.ai/?appKey=dXJiYWF0ZW5kaW1lbnRvaHVtYW5vOjFkMDE1MTQ5LTEzMmEtNGJiNi1iNDMxLTdlMDI2MjNhNjM2MQ==">
    <a target="_blank" href="https://api.whatsapp.com/send?phone=553140206868">
      <img src="<?= get_stylesheet_directory_uri() ?>/images/popup_recanto-das-flores.png" alt="Recanto das Flores">
      <div class="side_popup_txt">
        <h2>Lançamento</h2>
      </div>
    </a>
</div>-->
<div class="rodape">
  <style>
    .novas-logos {
      background-color: #fff;
      width: 100%;
      text-align: center;
      padding: 20px;
      margin-bottom: 50px;
    }

    .logo-nova.lazyloaded {
      width: 20%;
    }

    .rodape {
      height: auto;
      padding-block-end: 25px;
    }

    @media(max-width:468px) {
      .novas-logos {
        margin-top: -40px;
        padding: 20px;
      }

      .logo-nova.lazyloaded {
        width: 80%;
      }
    }
  </style>
  <div class="novas-logos">
    <img class="logo-nova" style="margin-right: 35px;" src="https://urba.com.br/wp-content/uploads/2023/03/logo_urba_principal_rgb.png">
  </div>
  <div class="container-padrao">
    <div class="columns-2 w-row">
      <div class="column-21 _2 w-col w-col-3" style="display:none;">
        <a href="<?= site_url() ?>" class="div-marca rodape w-inline-block w--current"><img src="<?= get_site_url() ?>/wp-content/uploads/2022/05/MODELO-FUNDO-BRANCO.jpg" width="270" alt="Logo Urba"></a>
        <!--<a href="<?= site_url() ?>" class="div-marca rodape w-inline-block w--current"><img src="<?= get_stylesheet_directory_uri() ?>/images/urba-logo-neg.png" width="150" alt="Logo Urba"></a>
          <a href="https://mrveco.com.br/" target="_blank" class="div-marca rodape w-inline-block w--current"><img src="<?= get_stylesheet_directory_uri() ?>/images/logo-mrv.png" width="120px" style="margin-top:20px;" alt="Logo MRV & CO."></a>-->
      </div>
      <div class="column-21 w-col w-col-6">
        <div class="div-mapa-site">
          <div class="columns-3 w-row">
            <div class="column-22 w-col w-col-6">
              <?php wp_nav_menu(array(
                'theme_location' => 'footer_1',
                'container' => false,
                'items_wrap' => '%3$s',
                'walker' => new WPDocs_Walker_Nav_Menu_Footer()
              )); ?>
              <!-- <a href="index.html" class="link w--current">Home</a><a href="loteamentos.html" class="link">Loteamentos</a><a href="sobre-a-urbamais.html" class="link">Sobre a Urba</a><a href="venda-seu-terreno.html" class="link">Venda sua Área</a> -->
            </div>
            <div class="column-22 w-col w-col-6">
              <?php wp_nav_menu(array(
                'theme_location' => 'footer_2',
                'container' => false,
                'items_wrap' => '%3$s',
                'walker' => new WPDocs_Walker_Nav_Menu_Footer()
              )); ?>
              <!-- <a href="blog.html" class="link">Blog</a><a href="contato.html" class="link" data-ix="open-formbox">Contato</a><a href="nossas-lojas.html" class="link">Nossas Lojas</a><a href="area-do-cliente.html" class="link">Área do Cliente</a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="column-21 w-clearfix w-col w-col-6">
        <p style="margin-top: 00px;margin-bottom: 20px;color: #fff;">Fale conosco: <a href="tel:40206868" style="color: #fff;text-decoration: none;border-bottom: 1px solid #ff8b22;">(31) 4020-6868</a></p>
        <div class="text-block-9">Acompanhe a Urba nas redes sociais!</div>
        <div class="footer-social"><a href="https://www.linkedin.com/company/urbaoficial" target="_blank" class="link-social w-inline-block"><img src="<?= get_stylesheet_directory_uri() ?>/images/redes-sociais_linkedin_1.png" width="45" alt="Linkedin"></a><a href="https://www.instagram.com/urba.oficial/" target="_blank" class="link-social w-inline-block"><img src="<?= get_stylesheet_directory_uri() ?>/images/redes-sociais_instagram_1.png" width="45" alt="Instagram"></a><a href="https://www.facebook.com/urba.oficial/" target="_blank" class="link-social w-inline-block"><img src="<?= get_stylesheet_directory_uri() ?>/images/redes-sociais_facebook_1.png" width="45" alt="Facebook"></a><a href="https://twitter.com/oficial_urba" target="_blank" class="link-social w-inline-block"><img src="<?= get_stylesheet_directory_uri() ?>/images/redes-sociais_twitter_1.png" width="45" alt="Twitter"></a><a href="https://www.youtube.com/channel/UCt1EMsb15lZR9MUN2D_O9GA" target="_blank" class="link-social w-inline-block"><img src="<?= get_stylesheet_directory_uri() ?>/images/redes-sociais_youtube_1.png" width="45" alt="Youtube"></a></div>

      </div>
    </div>
  </div>
</div>
<!--
  <div class="contato-imediato">
    <div class="div-forms">
      <div class="div-close" data-ix="close-formbox">X</div>
      <h3 class="heading-6">Tire suas dúvidas, agora mesmo!</h3>
      <p class="paragraph-15">Preencha seus dados abaixo e escolha como prefere o contato.</p>
      <div class="w-form">
        <form id="form-contato-imediato" name="form-contato-imediato" data-name="Email Form" class="form" onkeydown="return event.key != 'Enter';"><input type="text" class="text-field w-input" maxlength="256" name="nome" data-name="nome" placeholder="Nome" id="nome-ci" required=""><input type="tel" class="text-field w-input"  minlength="9" maxlength="15" onkeypress="MascaraTelefone(this);" name="telefone" data-name="Telefone 2" placeholder="Telefone" id="telefone-ci" required=""><input type="email" class="text-field w-input" maxlength="256" name="email" data-name="E Mail 3" placeholder="E-mail" id="email-ci" required="">
          <p class="paragraph-15 _2"><label for="soucliente-ci"><input type="checkbox" name="soucliente" id="soucliente-ci"> Já sou cliente</label></p>
          <p class="paragraph-15 _2">Como você deseja realizar o contato neste momento?</p>
          <div class="columns-4 w-row">
            <div class="column-23 w-col w-col-6">
              <div class="tipo-contato"><label class="radio-button-field w-radio" for="Whatsapp"><input type="radio" id="Whatsapp" name="Forma-de-contato" value="Whatsapp" data-name="Forma de contato" class="w-form-formradioinput radio-button w-radio-input"><span for="Whatsapp" id="click_whats" data-w-id="68048ac3-7ea8-52f9-f4c2-2588f69b7f9b" class="resposta1 w-form-label">Whatsapp</span><img src="<?= get_stylesheet_directory_uri() ?>/images/wpp.png" width="35" alt="" class="image-10"></label></div>
            </div>
            <div class="column-24 w-col w-col-6">
                <div class="tipo-contato"><label class="radio-button-field w-radio" for="Chat"><input type="radio" id="Chat" name="Forma-de-contato" value="Chat" data-name="Forma de contato" class="w-form-formradioinput radio-button w-radio-input"><span for="Chat" id="click_chat" data-w-id="68048ac3-7ea8-52f9-f4c2-2588f69b7fa1" class="resposta1 w-form-label">Chat</span><img src="<?= get_stylesheet_directory_uri() ?>/images/chat.png" width="30" alt="" class="image-10 _2"></label></div>
            </div>
          </div>          
          <div class="div-block-4"><input type="submit" value="Entrem em contato comigo mais tarde" data-wait="Aguarde..." class="w-button link-6"></div>
        </form>
      </div>
      <div class="div-ligue w-clearfix">
        <div class="text-block-10">ou ligue pra gente:</div><a href="tel:+554020-6868" class="link-2">4020-6868</a></div>
      <div class="text-block-28"><strong class="bold-text-15">Horário de atendimento<br>‍</strong>Segunda à sábado de 07:00 às 21:50. Caso mande uma mensagem fora do horário de atendimento, não se preocupe, entraremos em contato o mais breve possível</div>
    </div>
    <div data-w-id="68048ac3-7ea8-52f9-f4c2-2588f69b7fb7" class="div-botao-contato" data-ix="open-formbox"></div>
  </div>
  <div class="contato-imediato-mobile">
    <div class="div-forms-mobile">
      <h3 class="heading-6">Tire suas dúvidas, agora mesmo!</h3>
      <p class="paragraph-15">Preencha seus dados abaixo e escolha como prefere o contato.</p>
      <div class="form-block-5">
        <form id="form-contato-imediato-mobile" name="form-contato-imediato-mobile" data-name="Email Form" class="form" onkeydown="return event.key != 'Enter';"><input type="text" class="text-field w-input" maxlength="256" name="Nome-2" data-name="Nome 2" placeholder="Nome" id="nome-cim" required=""><input type="tel" class="text-field w-input"  minlength="9" maxlength="15" onkeypress="MascaraTelefone(this);" name="telefone" data-name="Telefone 2" placeholder="Telefone" id="telefone-cim" required=""><input type="email" class="text-field w-input" maxlength="256" name="email" data-name="E Mail 3" placeholder="E-mail" id="email-cim" required="">
          <p class="paragraph-15 _2"><label for="soucliente-cim"><input type="checkbox" name="soucliente" id="soucliente-cim"> Já sou cliente</label></p>
          <p class="paragraph-15 _2">Como você deseja realizar o contato neste momento?</p>
          <div class="columns-4 w-row">
            <div class="column-23 w-col w-col-6">
              <div class="tipo-contato"><label class="radio-button-field w-radio" for="Whatsapp-2"><input type="radio" id="Whatsapp-2" name="Forma-de-contato" value="Whatsapp" data-name="Forma de contato" class="w-form-formradioinput radio-button w-radio-input"><span  id="click_whats_m" for="Whatsapp-2" data-w-id="84105659-1649-0003-b761-faf73d613483" class="resposta1 w-form-label">Whatsapp</span></label><img src="<?= get_stylesheet_directory_uri() ?>/images/wpp.png" width="35" alt="" class="image-11"></div>
            </div>
            <div class="column-24 w-col w-col-6">
              <div class="tipo-contato _2"><label class="radio-button-field w-radio" for="Chat-2"><input type="radio" id="Chat-2" name="Forma-de-contato" value="Chat" data-name="Forma de contato" class="w-form-formradioinput radio-button w-radio-input"><span  id="click_chat_m" for="Chat-2" data-w-id="84105659-1649-0003-b761-faf73d613489" class="resposta1 w-form-label">Chat</span><img src="<?= get_stylesheet_directory_uri() ?>/images/chat.png" width="30" alt="" class="image-10 _2"></label></div>
            </div>
          </div>
          <div class="div-block-4"><input type="submit" value="Entrem em contato comigo mais tarde" data-wait="Aguarde..." class="w-button link-6"></div>
        </form>
      </div>
      <div class="div-ligue w-clearfix">
        <div class="text-block-10">ou ligue pra gente:</div><a href="tel:+554020-6868" class="link-2">4020-6868</a></div>
      <div class="text-block-28"><strong class="bold-text-15">Horário de atendimento<br>‍</strong>Segunda à sábado de 07:00 às 21:50. Caso mande uma mensagem fora do horário de atendimento, não se preocupe, entraremos em contato o mais breve possível.</div>
      <div class="div-close-mobile" data-ix="close-formbox-mobile">x</div>
    </div>
    <div class="div-botao-contato-mobile" data-ix="open-formbox-mobile"></div>
  </div>
-->
<!--  <script async defer src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->

<!-- [if lte IE 9]><script async defer src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script type="text/javascript">
  const TYP_URL = '<?= get_permalink(381) ?>';
</script>
<?php wp_footer(); ?>
<script async defer src="<?= get_stylesheet_directory_uri() ?>/owlcarousel/dist/owl.carousel.min.js"></script>

<?php if ((get_the_ID() === 1278)) { ?>
  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        'mouseDrag': false,
        'touchDrag': false,
        'nav': true,
        'items': 1,
      });
    });
  </script>
<?php } else if ((get_the_ID() === 1486) || (get_the_ID() === 1496)) { ?>
  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        'mouseDrag': true,
        'touchDrag': true,
        'nav': true,
        'items': 1,
      });
    });
  </script>
<?php } ?>

<script>
  function gtag_report_conversion(url) {
    var callback = function() {
      if (typeof(url) != 'undefined') {
        window.location = url;
      }
    };
    gtag('event', 'conversion', {
      'send_to': 'AW-969656437/pSjtCJjrh7ABEPWQr84D',
      'event_callback': callback
    });
    return false;
  }
</script>
<!--<div id="shell" style="position: absolute; opacity: 0;"><a id="linkchat" href="https://chat.directtalk.com.br/static/?chatId=5c4d7ee7-df97-41ef-aa7f-db0d82b2d904" target="_blank">Chat</a><a  id="linkwpp" href="https://api.whatsapp.com/send?phone=5531975000028" target="_blank">Whatsapp</a></div>-->
<a id="wpp2020" onclick=" fbq('track', 'Contact'); //gtag_report_conversion();" href="https://api.whatsapp.com/send?phone=553140206868" target="_blank" style="position: fixed;bottom: 110px;right: 35px;width: 4%; background:#82ea5b;border-radius: 50%;padding: 8px;box-shadow: 3px 3px 8px #88888847;z-index:9999; text-align: center; max-width: 60px; min-width: 48px; max-height: 60px; min-height: 48px;"><img src="https://urba.com.br/wp-content/themes/urbamais/images/wpp---neg.png" width="40" alt="Whatsapp" class="image-12"></a>
<style type="text/css">
  .gdpr_lightbox-hide {
    display: none !important;
  }

  .vizinho-premiado .rodape {
    display: none;
  }

  div#blip-chat-open-iframe:before {
    content: "Olá! Como podemos ajudar?";
    position: absolute;
    right: 70px;
    bottom: 10px;
    width: 200px;
    font-size: 12px;
    background: #fff;
    border-radius: 50px;
    padding: 5px;
    text-align: center;
    box-shadow: 3px 3px 8px #98989899;
  }

  div#blip-chat-open-iframe.opened:before {
    display: none;
  }

  @media screen and (max-width: 478px) {
    div#blip-chat-open-iframe:before {
      display: none;
    }
  }

  /* SIDE POPUP */
  #side_popup {
    opacity: 0;
    display: block;
    width: 400px;
    height: 300px;
    position: fixed;
    bottom: calc(50% - 100px);
    padding: 3px 0;
    border-width: 1px 0 1px 1px;
    left: -100%;
    -webkit-transition: 1s all ease;
    -o-transition: 1s all ease;
    transition: 1s all ease;
    z-index: 9999999;
  }

  #side_popup.aparecer {
    opacity: 1;
    left: -390px;
    -webkit-transition: 1s all ease;
    -o-transition: 1s all ease;
    transition: 1s all ease;
  }

  #side_popup.aparecer:hover {
    opacity: 1;
    left: 0;
    -webkit-transition: 1s all ease;
    -o-transition: 1s all ease;
    transition: 1s all ease;
  }

  #side_popup a {
    text-decoration: none;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  #side_popup img {
    -o-object-fit: contain;
    object-fit: contain;
  }

  .side_popup_txt {
    position: relative;
    width: 0px;
    height: 390px;
  }

  #side_popup a h2 {
    padding: 10px 10px 10px 13px;
    background-color: #AC41D8;
    border: 2px solid #ffc160;
    text-transform: uppercase;
    border-radius: 10px;
    position: absolute;
    width: 37px;
    right: -22px;
    bottom: 77px;
    font-size: 16px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.1;
    letter-spacing: 1px;
    text-align: center;
    word-break: break-all;
    color: #fff;
    text-decoration: none;
    z-index: -1;
    text-align: center;
    -webkit-animation: treme 5s infinite;
    animation: treme 5s infinite;
  }

  #side_popup:hover a h2 {
    -webkit-animation: none;
    animation: none;
  }

  #side_popup a h2 span {
    display: block;
    height: 8px;
  }

  #side_popup .close {
    position: absolute;
    top: 3px;
    right: 3px;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: .2;
  }

  @media (max-width: 479px) {
    #side_popup.aparecer:hover {
      left: -390px;
    }
  }
</style>

<script async defer src="https://unpkg.com/blip-chat-widget" type="text/javascript">
</script>


<script>
  $(document).ready(function() {
    $("#card-lojas a").on("click", function(event) {
      event.preventDefault();
      console.log($(this).attr("data-map"));
      $("#frame-map").attr("src", $(this).attr("data-map"));
    })
  });
</script>


<script>
  $(document).ready(function() {
    $("#telefone-fc").attr("minlength", "9");
    $("#telefone-fc").attr("maxlength", "15");
    $("#telefone-fc").attr("onkeypress", "MascaraTelefone(this);");
  });
</script>

<!--<script>
  // setar onclick nos botões de cada tab
  $('#card-lojas .w-tab-link').click(function() {
    let tab_item = $(this).data-w-tab.slipt(' ')[1];
    // tirar o active da tab antiga e colocar na nova
    // do lado do menu e do mapa
    $('#card-lojas .w--current').removeClass('w--current');		
    $('#maps-lojas .w--current').removeClass('w--current');
    $(this).addClass('w--current');
    $('#maps-lojas .tab-pane-tab-'+tab_item).addClass('w--current');
  });
</script>-->

<?php if ((is_page_template('template-smart-urba-dunlop.php')) || (is_single(1486)) || (is_single(1839)) || (is_single(1496)) || (is_page_template('template-smart-urba-dunlop-2.php')) || (get_the_ID(354))) { ?>
  <script async defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<?php } ?>

<link rel='stylesheet' type='text/css' href='https://cdn-prod.securiti.ai/consent/cookie-consent.css'>
<script async defer type="text/javascript" src="https://cdn-app.securiti.ai/consent/sdk-stub.js" defer></script>
<script>
  (function() {
    var s = document.createElement('script');
    s.src = 'https://cdn-prod.securiti.ai/consent/cookie-consent-sdk.js';
    s.setAttribute('data-tenant-uuid', '5deee4b6-3c42-4239-a61f-8eb58012473c');
    s.setAttribute('data-domain-uuid', '7d462527-4aba-463a-818e-d18a68caf30c');
    s.setAttribute('data-backend-url', 'https://app.securiti.ai');
    s.defer = true;
    var parent_node = document.head || document.body;
    parent_node.appendChild(s);
    s.addEventListener('load', function() {
      window.initCmp();
    });
  })()
</script>
<!-- You may style the button by overriding class "cmp-revoke-consent" -->
<!-- <button class="cmp-revoke-consent">Cancelar Consentimento</button> -->
<script>
  jQuery(document).ready(function($) {

    $("#telefone-vizinho-vp").attr("onkeypress", "MascaraTelefone(this)");
    $("#telefone-vizinho-vp").attr("maxlength", "15");

  });
</script>
<script>
  $(document).ready(function() {
    $('.button-6').click(function() {
      $(location).attr("href", "https://urba.com.br/obrigado"); // Put url to redirect
    });
  });
</script>
<script src="https://unpkg.com/blip-chat-widget"  type="text/javascript"></script>
<script>
  (function() {
    window.onload = function() {
      new BlipChat()
        .withAppKey('dXJiYXJvdGVhZG9yOmE1NDk4ZGFmLTU5NzMtNDcxNi1iOWE2LTliOTI1MWE0NjcyNA==')
        .withButton({
          "color": "#079D56",
          "icon": ""
        })
        .withCustomCommonUrl('https://urba.chat.blip.ai/')
        .build();
    }
  })();
</script>
<script async defer type="text/javascript" src="https://cdn-prod.securiti.ai/consent/auto_blocking/5deee4b6-3c42-4239-a61f-8eb58012473c/7d462527-4aba-463a-818e-d18a68caf30c.js"></script>

<script>
  function loadGoogleMapsScript() {
    var script = document.createElement('script');
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCrzRGSxTLOp6uekQFsyYXbUSOPA42Yv98&callback=initMap';
    script.async = true;
    script.defer = true;
    document.body.appendChild(script);
  }
</script>
</body>

</html>