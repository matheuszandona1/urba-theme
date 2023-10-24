<!DOCTYPE html>
<?php
$wfpage = '5d84c5f0237c9c8cdc4099e1'; //blog
switch (get_the_ID()) {
  case 2: //home
    $wfpage = '5d5159338e8309082279b2ee';
    break;
  case 5: //sobre
    $wfpage = '5d5ef27be396d184bd6bd97a';
    break;
  case 8: //lojas
    $wfpage = '5d5ffd8fb6d68d2bfc044381';
    break;
  case 9: //area do cliente
    $wfpage = '5d60121b38c00ec44dafd69a';
    break;
  case 10: //venda sua area
    $wfpage = '5d5fdd5514f5cdc9dbc84717';
    break;
  case 21: //contato
    $wfpage = '5d7a8206a9740c1782564248';
    break;
  case 90:
    $wfpage = '5d7a500eef0e0fe76da8251e';
    break;
  case 297: //materiais
    $wfpage = '5d84e34c791b759ca949b7ed';
    break;
  case 728: //lp reserva macaubas
  case 860: //lp reserva regatas
  case 858: //lp santa iria
    $wfpage = '5f19b765d410a35321a86e86';
    break;
  case 856: // reserva regatas residencial
    $wfpage = '5d52f2b8076d2bdac488da31';
    break;
  case 1347: // smart urba
    $wfpage = '60084562e363590275a08b58';
    break;
  case 1486: // smart urba dunlop
    $wfpage = '605dda032deb8af9ef919026';
    break;
  case 1515: // minha casa do meu jeito
    $wfpage = '6081b5d025595b462bdd2d0f';
    break;
  case 510: //ponto de conversão 2: comprar terreno
    $wfpage = '5f36d479bba6e9d789de41b9';
    break;
  case 417: //ponto de conversão 3: bairro planejado
    $wfpage = '5f36dee09a78233a5294d376';
    break;
  case 10220:
    $wfpage = '6337287406a45229c81dfdf2';
    break;
  case 10047:
    $wfpage = '64020453b829eb678b26747f';
    break;
}
if (is_single('post')) {
  $wfpage = '5d84dca4b46cb1569688d7c8';
}
if (is_singular('loteamento')) {
  $wfpage = '5d52f2b8076d2bdac488da31';
}
?>
<html data-wf-page="<?= $wfpage ?>" data-wf-site="5d5159338e8309099479b2ed" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <title>Loteamento - Urba</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta name="facebook-domain-verification" content="8vop2u412p12tyw3b837t9ebecxkw6" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php if ((is_page_template('template-smart-urba-dunlop.php')) || (is_single(1486)) || (is_single(1496)) || (is_page_template('template-smart-urba-dunlop-2.php')) || (get_the_ID(354))) { ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <?php } ?>
  <?php wp_head(); ?>
  <style>
    @media (min-width:992px) {
      html.w-mod-js:not(.w-mod-ix) [data-w-id="9170d268-8b7b-89d4-70ff-f6a4cbc8b0bc"] {
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="b9f02642-2e2e-db94-45e6-a0a9a2a6f6d0"] {
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="8410c0c7-e668-3e9d-51ef-0acb50ede6ac"] {
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="1a951ddd-05e0-a721-2112-9f51305f7cfe"] {
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="5f064fed-772f-cd3c-9c98-2b7b7b53d135"] {
        opacity: 0;
      }
    }

    @media (max-width:991px) and (min-width:768px) {
      html.w-mod-js:not(.w-mod-ix) [data-w-id="9170d268-8b7b-89d4-70ff-f6a4cbc8b0bc"] {
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="b9f02642-2e2e-db94-45e6-a0a9a2a6f6d0"] {
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="8410c0c7-e668-3e9d-51ef-0acb50ede6ac"] {
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="1a951ddd-05e0-a721-2112-9f51305f7cfe"] {
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="5f064fed-772f-cd3c-9c98-2b7b7b53d135"] {
        opacity: 0;
      }
    }

    @media (max-width:767px) and (min-width:480px) {
      html.w-mod-js:not(.w-mod-ix) [data-w-id="9170d268-8b7b-89d4-70ff-f6a4cbc8b0bc"] {
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="b9f02642-2e2e-db94-45e6-a0a9a2a6f6d0"] {
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="8410c0c7-e668-3e9d-51ef-0acb50ede6ac"] {
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="1a951ddd-05e0-a721-2112-9f51305f7cfe"] {
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="5f064fed-772f-cd3c-9c98-2b7b7b53d135"] {
        opacity: 0;
      }
    }
  </style>
  <style>
    .breve-lancamento {
      font-size: 12px !important;
      font-weight: bold !important;
    }

    .destaque-lp {
      - font-size: 38px !important;
    }


    @media (max-width:480px) {
      .button-formatter {
        padding: 0px 0px 0px 15px;
        margin-bottom: 30px;
        display: flex;
        height: 30px;
        text-align: left;
      }
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script async defer type="text/javascript">
    WebFont.load({
      google: {
        families: ["Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic", "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Poppins:100,200,300,regular,500,600,700,800,900", "Roboto:100,300,regular,500,700,900"]
      }
    });
  </script>
  <!-- [if lt IE 9]><script async defer src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script async defer type="text/javascript">
    ! function(o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
  </script>
  <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="940px" data-numposts="5"></div>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>

  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/owlcarousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/owlcarousel/dist/assets/owl.theme.default.min.css">


</head>

<body <?php body_class(); ?>>



  <?php if ((is_home() && !is_front_page()) || get_the_ID() === 297 || is_singular('post') || is_category() || is_tag() || is_date() || is_archive() || is_search()) { ?>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-w-id="46305f68-623f-9012-5397-f7d6e4396945" class="navbar-2 interna w-nav">
      <div class="container w-container"><a href="<?= site_url() ?>/blog" class="brand w-nav-brand w--current"><img src="<?= get_site_url() ?>/wp-content/uploads/2023/03/logo_urba_principal_rgb.png" width="200" alt="Logo Urba"></a>
        <nav role="navigation" class="nav-menu-2 w-nav-menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'blog_menu',
            'container' => false,
            'items_wrap' => '%3$s',
            'walker' => new WPDocs_Walker_Nav_Menu_Blog()
          )); ?>
          <a href="#" class="link-block-2 link-block-3 w-inline-block" data-ix="open-busca"><img src="<?= get_stylesheet_directory_uri() ?>/images/lupa.png" width="30" alt="Pesquisar"></a>
          <div data-delay="200" class="dropdown-news w-dropdown">
            <div class="dropdown-button w-dropdown-toggle">
              <div class="text-block-29">receba nossas novidades</div>
            </div>
            <nav class="drop-form-news w-dropdown-list">
              <h3 class="h3-form-news">Insira o seu melhor e-mail e receba <strong class="bold-text-26">conteúdo exclusivo</strong></h3>
              <div class="form-block-2">
                <form id="form_news_blog" name="form_news_blog" class="form-5"><input type="email" class="text-field-3 w-input" maxlength="256" name="email" data-name="E Mail 2" placeholder="seu melhor e-mail" id="email_news" required="">
                  <div class="w-row bloco_consentimento">
                    <div class="w-col">
                      <!--<p style="font-size: 11px;line-height: 12px;">Precisamos dos seus dados para manter contato com você e prosseguir com seu atendimento, de acordo com nossa <a href="https://mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>-->
                      <p style="font-size: 11px;line-height: 12px;">Aceito receber via e-mail, o contato da marca MRV&CO com ações de marketing, ofertas de produto e serviços. Estou de acordo com as formas de tratamento de dados realizados pela marca MRV&CO, conforme sua <a href="https://www.mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>
                      <label class="checkbox-button-field-2 w-checkbox"><input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" value="Ok, entendi!" class="w-form-formcheckboxinput w-checkbox-input" required><span for="Proprietário" class="checkbox-button-label w-form-label">Ok, entendi!</span>
                      </label>
                    </div>
                  </div><input type="submit" value="Quero Assinar!" data-wait="Aguarde..." class="submit-button-3 w-button">
                </form>
                <div class="success-message w-form-done">
                  <div class="text-block-30">Protinho! Agora você receberá todas as nossas novidades por e-mail.</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Algo de errado aconteceu, tente novamente mais tarde.</div>
                </div>
              </div>
              <div class="seta-drop"></div>
            </nav>
          </div>
        </nav>
        <div class="menu-button-2 w-nav-button">
          <div class="icon-3 w-icon-nav-menu"></div>
        </div>
      </div>
    </div>

  <?php } else { ?>
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
      <style>
        .w-nav-link {
          padding: 15px;
        }

        .nav-menu {
          flex-wrap: wrap;
        }

        .w-nav-menu {
          float: unset;
        }
      </style>
      <div class="container-padrao" style="max-width: 1310px; padding-left:0px; padding-right:0px;"><a href="<?= site_url() ?>" class="brand w-nav-brand w--current" style="margin-right:20px; margin-top:40px;"><img src="<?= get_site_url() ?>/wp-content/uploads/2023/03/logo_urba_principal_rgb.png" width="100" alt="Logo Urba"></a>
        <nav role="navigation" class="nav-menu w-nav-menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'header_menu',
            'container' => false,
            'items_wrap' => '%3$s',
            'walker' => new WPDocs_Walker_Nav_Menu()
          )); ?>
          <div class="button-formatter">
            <a href="https://vagas-mrveco.gupy.io/" class="button-8 w-button">Trabalhe conosco</a>
          </div>
        </nav>
        <div class="menu-button w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>

  <?php } ?>