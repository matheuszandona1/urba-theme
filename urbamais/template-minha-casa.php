<?php
/*
Template Name: Minha Casa do Meu Jeito
Template Post Type: page, loteamento
*/
?>

<?php get_header(); ?>
<style>
  .div-card-passos {
    background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.8), hsla(0, 0%, 100%, 0) 40%), linear-gradient(180deg, hsla(0, 0%, 8%, 0) 43%, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= get_stylesheet_directory_uri() ?>/images/minha-casa/bg-passo-01.jpg);
  }

  .div-card-passos._2 {
    background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.8), hsla(0, 0%, 100%, 0) 40%), linear-gradient(180deg, hsla(0, 0%, 8%, 0) 43%, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= get_stylesheet_directory_uri() ?>/images/minha-casa/bg-passo-02.jpg);
  }

  .div-card-passos._3 {
    background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.8), hsla(0, 0%, 100%, 0) 40%), linear-gradient(180deg, hsla(0, 0%, 8%, 0) 43%, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= get_stylesheet_directory_uri() ?>/images/minha-casa/bg-passo-03.jpg);
  }

  .div-card-passos._4 {
    background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.8), hsla(0, 0%, 100%, 0) 40%), linear-gradient(180deg, hsla(0, 0%, 8%, 0) 43%, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= get_stylesheet_directory_uri() ?>/images/minha-casa/bg-passo-04.jpg);
  }

  .div-card-passos._5 {
    background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.8), hsla(0, 0%, 100%, 0) 40%), linear-gradient(180deg, hsla(0, 0%, 8%, 0) 43%, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= get_stylesheet_directory_uri() ?>/images/minha-casa/bg-passo-05.jpg);
  }

  .condicoes.minha-casa {
    background-image: url(<?= get_stylesheet_directory_uri() ?>/images/minha-casa/pattern2.png), url(<?= get_stylesheet_directory_uri() ?>/images/minha-casa/pattern.png);
  }

  .depoimentos {
    background-image: url(<?= get_stylesheet_directory_uri() ?>/images/minha-casa/pattern-roxa2.png), url(<?= get_stylesheet_directory_uri() ?>/images/minha-casa/pattern-roxa.png);
  }

  .text-block-59 {
    position: absolute;
    left: 10px;
    top: auto;
    right: auto;
    bottom: 10px;
    z-index: 3;
  }

  .italic-text-2 {
    color: #fff;
    font-size: 12px;
    text-shadow: 0 0 6px #000;
  }

  /*Ajuste de selo enquanto o formulário não for finalizado*/
  .div-selo-minhacasa {
    bottom: -10%;
  }

  .div-formulario-dunlop.minha-casa {
      padding-top: 100px;
  }

  .depoimentos {
    background-position: 105% 50%, -5% 50%;
  }

  @media (max-width: 768px) {
    .condicoes.minha-casa, .depoimentos {
        background-image: none;
    }

    .text-block-59 {
      width: 60%;
      margin-right: 40px;
      text-align: left;
    }

    .text-block-59 {
      line-height: 1.3em;
      text-align: left;
    }
  }

</style>

  <!--<section id="formulario" class="hero-internas minha-casa">
    <div class="container-padrao w-clearfix">
      <div data-w-id="43853a40-0b56-3aa6-cb23-52021752fda3" class="div-text-hero smart-urba minha-casa">
        <div class="div-logo-minhacasa">
          <h1 class="heading-30 minha-casa">Minha casa <span class="menor">do meu jeito</span></h1>
        </div>
        <h1 class="heading-34">Conquiste seu lote e sua casa própria em um único financiamento</h1>
        <p class="paragraph-36 dunlop-sub">A Urba descomplica e encurta a trajetória rumo ao seu maior sonho, para você ser feliz do seu jeito.</p>
        <div class="div-tags dunlop"></div>
      </div>
      <div data-w-id="dc7f4f41-fc9c-4e65-ab1e-d9c6eccc3e33" class="div-selo-minhacasa">
        <div class="div-selo-contorno">
          <div class="text-block-56">Modalidade<br>exclusiva para<br>Empreendimentos<br>Urba</div>
          <img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/marca-selo.svg" loading="lazy" width="35" height="35" alt="" class="image-25">
        </div>
      </div>
      <div class="div-formulario-dunlop minha-casa">
        <div class="div-forms-hero">
          <h3 class="heading-24 minha-casa">Quero mais Informações</h3>
          <div class="w-form">
            <?php echo do_shortcode('[contact-form-7 id="1517" title="Minha Casa do Meu Jeito Form Hero"]') ?>
          </div>
        </div>
      </div>
    </div>
    <img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/hero-img.jpg" loading="lazy" width="1200" sizes="(max-width: 479px) 96vw, (max-width: 767px) 90vw, (max-width: 1200px) 100vw, 1200px" srcset="images/hero-img-p-500.jpeg 500w, images/hero-img-p-800.jpeg 800w, images/hero-img.jpg 1200w" alt="" class="image-24">
  </section>-->
  <section id="formulario" class="hero-internas minha-casa">
    <div class="container-padrao w-clearfix">
      <div data-w-id="43853a40-0b56-3aa6-cb23-52021752fda3" class="div-text-hero smart-urba minha-casa">
        <div class="div-logo-minhacasa">
          <h1 class="heading-30 minha-casa">Minha casa <span class="menor">do meu jeito</span></h1>
        </div>
        <h1 class="heading-34">Conquiste seu lote e sua casa própria em um único financiamento</h1>
        <p class="paragraph-36 dunlop-sub">A Urba descomplica e encurta a trajetória rumo ao seu maior sonho, para você ser feliz do seu jeito.</p>
        <!-- <div style="font-size: 18px;color: #f39a3e;"><strong>Feirão Minha Casa do Meu Jeito em Feira de Santana</strong></div><br>
        <div style="font-size: 18px;color: #f39a3e;">Somente de 12 a 15/08!</div><br>
        <div style="font-size: 18px;color: #f39a3e;">
          A <strong>oportunidade</strong> que você esperava para conquistar seu lote e sua casa com condições <strong>nunca</strong> vistas.
        </div> -->
        <div class="div-tags dunlop"></div>
      </div>
      <div class="div-formulario-dunlop minha-casa">
        <div class="div-forms-hero">
          <h3 class="heading-24 minha-casa">Quero mais Informações</h3>
          <div class="w-form">
            <form id="wf-form-Email-Form" name="wf-form-Email-Form" data-name="Email Form" class="form-5 w-clearfix">
              <label for="name" class="label-form-lp-2 dunlop">Nome</label>
              <input type="text" class="campo-form-lp-2 w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name" required="">
              <label for="E-mail" class="label-form-lp-2 dunlop">E-mail</label>
              <input type="email" class="campo-form-lp-2 w-input" maxlength="256" name="E-mail" data-name="E Mail" id="E-mail" required="">
              <label for="Telefone" class="label-form-lp-2 dunlop">WhatsApp</label>
              <input type="tel" class="campo-form-lp-2 w-input" minlength="9" maxlength="15" onkeypress="MascaraTelefone(this);" name="Telefone" data-name="Telefone" id="Telefone" required="">
              <label for="Telefone-2" class="label-form-lp-2 dunlop">Já é cliente Urba?</label>
              <label data-w-id="452526e0-0cf5-987f-eedb-339d89855181" class="radio-button-field-4 w-radio">
                <input type="radio" data-name="Já é cliente Urba?" id="Sim" name="J-cliente-Urba" value="Sim" class="w-form-formradioinput w-radio-input">
                <span for="Sim" class="radio-button-label-3 w-form-label">Sim</span></label>
                <label data-w-id="ce036336-224f-6536-ccf1-349d945bb873" class="radio-button-field-4 _2 w-radio">
                  <input type="radio" data-name="Já é cliente Urba?" id="Não" name="J-cliente-Urba" value="Não" class="w-form-formradioinput w-radio-input">
                  <span for="Não" class="radio-button-label-3 w-form-label">Não</span>
                </label>
              <div class="div-escolha-cidade-clientes">
                <label for="Escolha-sua-Cidade---Clientes" class="label-form-lp-2 dunlop">Escolha sua cidade de interesse</label>
                <select id="escolha-sua-cidade-clientes" name="Escolha-sua-Cidade---Clientes" data-name="Escolha sua Cidade - Clientes" class="select-field-6 dunlop w-select">
                  <option value="Selecione">Selecione</option>
                  <option value="Álvares Machado (SP)">Álvares Machado (SP)</option>
                  <option value="Amparo (SP)">Amparo (SP)</option>
                  <option value="Campina Grande (PB)">Campina Grande (PB)</option>
                  <option value="Campos dos Goytacazes (RJ)">Campos dos Goytacazes (RJ)</option>
                  <option value="Feira de Santana (BA)">Feira de Santana (BA)</option>
                  <option value="Ribeirão Preto (SP)">Ribeirão Preto (SP)</option>
                  <option value="São Carlos (SP)">São Carlos (SP)</option>
                </select>
              </div>
              <div class="div-escolha-cidade-naoclientes">
                <label for="Escolha-sua-Cidade---N-o-Clientes" class="label-form-lp-2 dunlop">Escolha sua cidade de interesse</label>
                <select id="escolha-sua-cidade-nao-clientes" name="Escolha-sua-Cidade---N-o-Clientes" data-name="Escolha sua Cidade - Não Clientes" class="select-field-6 dunlop w-select">
                  <option value="Selecione">Selecione</option>
                  <option value="Campina Grande (PB)">Campina Grande (PB)</option>
                  <option value="Campos dos Goytacazes (RJ)">Campos dos Goytacazes (RJ)</option>
                  <option value="Feira de Santana (BA)">Feira de Santana (BA)</option>
                </select>
              </div>
              <div class="text-block-51 minha-casa">Aceito receber via WhatsApp, ligação, e-mail e SMS, o contato da marca MRV&CO com novidades sobre o financiamento de lote e construção de casa neste loteamento. Aceito também receber ações de marketing, ofertas de produto e serviços. Estou de acordo com as formas de tratamento de dados realizados pela marca MRV&CO, conforme sua  <a href="https://www.mrv.com.br/institucional/pt/politica-de-privacidade" target="_blank" class="link-10">Política de Privacidade</a>.</div>
              <div class="div-block-5"><label class="w-checkbox checkbox-field">
                <input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" data-name="Ok, entendi!" required="" class="w-checkbox-input">
                <span for="Ok, entendi!" class="checkbox-label-3 minha-casa w-form-label">Ok, entendi!</span>
              </label>
            </div>
            <input type="submit" value="enviar" data-wait="Aguarde..." class="enviar-form-lp-4 minha-casa w-button">
            </form>
          </div>
        </div>
      </div>
      <div data-w-id="dc7f4f41-fc9c-4e65-ab1e-d9c6eccc3e33" class="div-selo-minhacasa">
        <div class="div-selo-contorno">
          <div class="text-block-56">Modalidade<br>exclusiva para<br>Empreendimentos<br>Urba</div><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/marca-selo.svg" loading="lazy" width="35" height="35" alt="" class="image-25">
        </div>
      </div>
    </div><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/hero-img.jpg" loading="lazy" width="1200" alt="" class="image-24">
  </section>
  <div class="w-embed">
    <style>
      .menor {
        background: -webkit-linear-gradient(#fcb535, #f68c38);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
    </style>
  </div>
  <div class="sonho">
    <div class="container-padrao">
      <h2 class="heading-27 center _32px minha-casa">O seu sonho <strong class="destaque-h2-3 minha-casa">é o nosso sonho</strong></h2>
      <div class="div-paragraph-center">
        <p class="paragraph-39 branco">O Minha Casa do Meu Jeito é uma <strong data-w-id="fdd005c4-536d-7766-160e-740cd958ca5e" class="bold-text-46">proposta exclusiva da Urba</strong> que chega para facilitar o seu acesso à casa própria! Com ele, você adquire o seu lote e a construção da sua casa dos sonhos em um financiamento único, personalizando o projeto para transformar o seu espaço em um verdadeiro lar. Aproveite essa modalidade que<strong data-w-id="e9fa85c9-cd8a-6d69-b524-eb62e555a255" class="bold-text-46"> já realizou o sonho de mais de 100 famílias em todo o Brasil!</strong></p>
      </div>
      <div class="div-boxes-sonho">
        <div data-w-id="6cc055ed-3bea-41e7-dfd3-41585a133c81" class="div-box-sonho"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-01.svg" loading="lazy" height="50" alt="">
          <div class="txt-boxes-sonho">Lote + construção no mesmo financiamento</div>
        </div>
        <div data-w-id="fd740465-df53-4670-d209-627ddb0832f3" class="div-box-sonho"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-02.svg" loading="lazy" height="50" alt="">
          <div class="txt-boxes-sonho">Sua casa do seu jeito</div>
        </div>
        <div data-w-id="288aee0b-ddbf-2143-f242-3e9b754d6b7c" class="div-box-sonho"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-03.svg" loading="lazy" height="50" alt="">
          <div class="txt-boxes-sonho">Terrenos em bairros planejados</div>
        </div>
        <div data-w-id="788119a0-cbc5-4b7e-f747-66a21dfa1fe9" class="div-box-sonho"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-04.svg" loading="lazy" height="50" alt="">
          <div class="txt-boxes-sonho">Economia no seu bolso</div>
        </div>
      </div>
      <div class="div-paragraph-center margin-top-60px">
        <p class="paragraph-39 branco"><strong data-w-id="d7342bbc-780f-8636-0064-7d95084c1881" class="bold-text-46">Se você já é um cliente Urba</strong> e quer mudar o seu financiamento para o modelo Minha Casa do Meu Jeito, você também pode ter acesso a tudo isso, montando a sua casa da forma que sempre desejou e escolhendo cada um dos detalhes - desde o número de cômodos, espaço de lazer até os acabamentos.</p>
      </div>
      <div class="div-button-center minha-casa">
        <a href="#" class="button-12 smarturba _2 mobile w-button">Desejo viver mais e melhor</a>
        <a href="#formulario" class="button-12 smarturba _2 minha-casa w-button">Quero financiar o meu lote + a minha casa agora</a>
      </div>
    </div>
  </div>
  <div class="condicoes minha-casa">
    <div class="container-padrao">
      <h2 class="heading-27 center _32px">As condições <strong class="destaque-h2">perfeitas para você</strong></h2>
      <div class="div-paragraph-center">
        <p class="paragraph-39">A Urba, loteadora da MRV&amp;CO, tem expertise em financiamento bancário e é pioneira nessa modalidade no mercado de loteamentos. Descomplicamos e facilitamos a sua jornada até a casa própria.</p>
      </div>
      <div data-w-id="e47e8e58-1972-fe01-123e-cfccd9ebd2ef" class="box-condicoes-2">
        <div class="box-condicao"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-05.svg" loading="lazy" height="50" alt="">
          <div class="txt-boxes-sonho">Até 420 meses para pagar</div>
        </div>
        <div class="box-condicao"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-06.svg" loading="lazy" height="50" alt="">
          <div class="txt-boxes-sonho">Use seu FGTS</div>
        </div>
        <div class="box-condicao"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-07.svg" loading="lazy" height="50" alt="">
          <div class="txt-boxes-sonho">Subsídios do Programa Casa Verde e Amarela*</div>
        </div>
        <div class="box-condicao border-off"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-08.svg" loading="lazy" height="50" alt="">
          <div class="txt-boxes-sonho">Financiado pela Caixa Econômica Federal</div>
        </div>
      </div>
      <div class="txt-legal">*Sujeito a análise de perfil pela instituição bancária.</div>
    </div>
  </div>
  <div class="detalhes">
    <div class="container-padrao w-container">
      <div class="div-txt-detalhes">
        <h2 class="heading-27 com _32px branco minha-casa">Todos os detalhes <strong class="destaque-h2-4 lime">que você sempre quis</strong></h2>
        <p class="paragraph-39 branco minha-casa">É hora de personalizar! Cada sonho demanda um projeto diferente e, por isso, a Urba conecta você a construtores locais que deixam a <strong class="bold-text-30 lime">sua casa do seu jeito.</strong></p>
        <div data-w-id="aff660bf-c14d-052a-6417-56e90a5ee41d" class="div-lista-detalhes">
          <div class="div-detalhe"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-09.svg" loading="lazy" width="50" height="50" alt="" class="icon-detalhe">
            <div class="text-block-58">Projetos personalizados de acordo com o seu sonho</div>
          </div>
        </div>
        <div data-w-id="0b564158-dbcd-9c05-6f9d-9690918165c0" class="div-lista-detalhes">
          <div class="div-detalhe"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-10.svg" loading="lazy" width="50" height="50" alt="" class="icon-detalhe">
            <div class="text-block-58">Você escolhe desde o número de cômodos até os acabamentos</div>
          </div>
        </div>
        <div class="div-lista-detalhes margin-botton-40px">
          <div data-w-id="40d9ad07-0dc1-53f1-1bcb-d0f255d6345e" class="div-detalhe"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-11.svg" loading="lazy" width="50" height="50" alt="" class="icon-detalhe">
            <div class="text-block-58">Área de lazer planejada do seu jeito</div>
          </div>
        </div>
        <a href="#formulario" class="button-12 smarturba _2 minha-casa verde w-button">Garanta a realização do seu sonho</a>
      </div>
    </div>
    <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-detalhes w-slider">
      <div class="text-block-59"><em class="italic-text-2">*Imagem meramente ilustrativa. Projeto não comercializado pela Urba.</em></div>
      <div class="w-slider-mask">
        <div class="w-slide"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/img01-min.jpg" loading="lazy" height="640" alt="" class="img-casas"></div>
        <div class="w-slide"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/img02-min.jpg" loading="lazy" height="640" alt="" class="img-casas"></div>
        <div class="w-slide"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/img03-min.jpg" loading="lazy" height="640" alt="" class="img-casas"></div>
        <div class="w-slide"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/img04-min.jpg" loading="lazy" height="640" alt="" class="img-casas"></div>
        <div class="w-slide"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/img05-min.jpg" loading="lazy" height="640" alt="" class="img-casas"></div>
        <div class="w-slide"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/img06-min.jpg" loading="lazy" height="640" alt="" class="img-casas"></div>
        <div class="w-slide"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/img07-min.jpg" loading="lazy" height="640" alt="" class="img-casas"></div>
        <div class="w-slide"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/img08-min.jpg" loading="lazy" height="640" alt="" class="img-casas"></div>
      </div>
      <div class="arrow w-slider-arrow-left">
        <div class="icon-9 w-icon-slider-left"></div>
      </div>
      <div class="arrow _2 w-slider-arrow-right">
        <div class="icon-9 w-icon-slider-right"></div>
      </div>
      <div class="slide-nav-5 w-slider-nav w-round"></div>
    </div>
  </div>
  <!--<div class="detalhes">
    <div class="container-padrao w-container">
      <div class="div-txt-detalhes">
        <h2 class="heading-27 com _32px branco minha-casa">Todos os detalhes <strong class="destaque-h2-4 lime">que você sempre quis</strong></h2>
        <p class="paragraph-39 branco minha-casa">É hora de personalizar! Cada sonho demanda um projeto diferente e, por isso, a Urba conecta você a construtores locais que deixam a <strong class="bold-text-30 lime">sua casa do seu jeito.</strong></p>
        <div data-w-id="aff660bf-c14d-052a-6417-56e90a5ee41d" class="div-lista-detalhes">
          <div class="div-detalhe"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-09.svg" loading="lazy" width="50" height="50" alt="" class="icon-detalhe">
            <div class="text-block-58">Projetos personalizados de acordo com o seu sonho</div>
          </div>
        </div>
        <div data-w-id="0b564158-dbcd-9c05-6f9d-9690918165c0" class="div-lista-detalhes">
          <div class="div-detalhe"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-10.svg" loading="lazy" width="50" height="50" alt="" class="icon-detalhe">
            <div class="text-block-58">Você escolhe desde o número de cômodos até os acabamentos</div>
          </div>
        </div>
        <div class="div-lista-detalhes margin-botton-40px">
          <div data-w-id="40d9ad07-0dc1-53f1-1bcb-d0f255d6345e" class="div-detalhe"><img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/icon-11.svg" loading="lazy" width="50" height="50" alt="" class="icon-detalhe">
            <div class="text-block-58">Área de lazer planejada do seu jeito</div>
          </div>
        </div>
        <a href="#formulario" class="button-12 smarturba _2 minha-casa verde w-button">Garanta a realização do seu sonho</a>
      </div>
    </div>
    <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-detalhes w-slider">
      <div class="w-slider-mask">
        <div class="w-slide">
          <img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/micro/Imagem_01 [micro].png" loading="lazy" height="640" alt="" class="img-casas">
        </div>
        <div class="w-slide">
          <img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/micro/Imagem_02 [micro].png" loading="lazy" height="640" alt="" class="img-casas">
        </div>
        <div class="w-slide">
          <img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/micro/Imagem_03 [micro].png" loading="lazy" height="640" alt="" class="img-casas">
        </div>
        <div class="w-slide">
          <img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/micro/Imagem_04 [micro].png" loading="lazy" height="640" alt="" class="img-casas">
        </div>
        <div class="w-slide">
          <img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/micro/Imagem_05 [micro].png" loading="lazy" height="640" alt="" class="img-casas">
        </div>
        <div class="w-slide">
          <img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/micro/Imagem_06 [micro].png" loading="lazy" height="640" alt="" class="img-casas">
        </div>
        <div class="w-slide">
          <img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/micro/Imagem_07 [micro].png" loading="lazy" height="640" alt="" class="img-casas">
        </div>
        <div class="w-slide">
          <img src="<?= get_stylesheet_directory_uri()?>/images/minha-casa/galeria/micro/Imagem_08 [micro].png" loading="lazy" height="640" alt="" class="img-casas">
        </div>
      </div>
      <div class="arrow w-slider-arrow-left">
        <div class="icon-9 w-icon-slider-left"></div>
      </div>
      <div class="arrow _2 w-slider-arrow-right">
        <div class="icon-9 w-icon-slider-right"></div>
      </div>
      <div class="slide-nav-5 w-slider-nav w-round"></div>
    </div>
  </div>-->
  <div class="w-embed">
    <style>
        .img-casas {
        object-fit: cover;
      }
    </style>
  </div>
  <div class="passos">
    <div class="container-padrao">
      <h2 class="heading-27 center _32px">Sua felicidade em <strong class="destaque-h2">apenas 5 passos</strong></h2>
      <div class="div-paragraph-center">
        <p class="paragraph-39">O objetivo da Urba é tirar o seu sonho do papel de forma prática e personalizada, concretizando os seus planos. O processo é simples: <strong class="bold-text-4">apenas 5 passos para garantir o seu lote + a sua casa própria do seu jeito</strong> - e você ainda conta o apoio dos especialistas da Urba em cada etapa!</p>
      </div>
      <div class="div-passos">
        <div data-w-id="09f6eee6-832a-d293-6535-922f565691d8" class="div-card-passos">
          <div class="numero-card">1</div>
          <div class="txt-passo">Escolha o seu lote Urba em um dos nossos bairros planejados.*</div>
        </div>
        <div data-w-id="4a1df8a3-2748-1c41-5b78-0da7fac7a41d" class="div-card-passos _2">
          <div class="numero-card">2</div>
          <div class="txt-passo">Defina o projeto da casa com o construtor e personalize do seu jeito.</div>
        </div>
        <div data-w-id="fff42d0e-3102-6995-cc7e-b22a3911f402" class="div-card-passos _3">
          <div class="numero-card">3</div>
          <div class="txt-passo">Faça uma simulação com nossa equipe Urba.</div>
        </div>
        <div data-w-id="8cadb5b7-3541-6275-426d-f180ed072da0" class="div-card-passos _4">
          <div class="numero-card">4</div>
          <div class="txt-passo">Realize uma análise de crédito com a instituição bancária.</div>
        </div>
        <div data-w-id="eabaf8e0-6f0d-793a-c026-0569c04f90a2" class="div-card-passos _5">
          <div class="numero-card">5</div>
          <div class="txt-passo">Depois de tudo certo, é só aguardar o construtor escolhido concluir a obra do seu futuro lar.</div>
        </div>
      </div>
      <div class="txt-legal">*Cidades com empreendimentos disponíveis para clientes: Álvares Machado, Campos dos Goytacazes, Feira de Santana e Ribeirão Preto.<br>**Cidades com empreendimentos disponíveis para não clientes: Campos dos Goytacazes e Feira de Santana.</div>
      <div class="div-paragraph-center destaque-box">
        <p class="paragraph-39 margin-bottom-off branco">Os <strong class="bold-text-4 lime">bairros planejados pela Urba são completos</strong>, oferecendo áreas residenciais e comerciais, além de espaços compartilhados de convivência. A Urba promove mais bem estar e comodidade para você, satisfazendo as suas necessidades do dia a dia de forma integrada com a natureza.</p>
      </div>
      <div class="div-button-center minha-casa">
        <a href="#formulario" class="button-12 smarturba _2 minha-casa shadow-black w-button">Garanta a realização do seu sonho</a>
        <style>
          .div-slide-videos {
            display: flex;
            justify-content: center;
            height: 360px;
            margin-top: 40px;
          }

          .slider-6.w-slider {
            width: 640px;
            height: 360px;
          }

          .w-slider-mask {
            border-radius: 10px;
          }

          @media (max-width: 767px) {
            .div-slide-videos, .slider-6.w-slider, .w-slider {
              height: auto;
            }
          }
        </style>
        <div class="div-slide-videos">
          <div data-animation="slide" data-hide-arrows="1" data-duration="500" data-infinite="1" class="slider-6 w-slider">
            <div class="w-slider-mask">
              <div class="slide-17 w-slide">
                <div class="w-embed w-iframe w-script">
                  <div class="youtube-player" data-id="Tz2hPCkbUwE" style="background-image: url('https://urba.com.br/wp-content/uploads/2021/06/thumb-video-minha-casa.jpg'); background-repeat: no-repeat; background-size: cover;"></div>
                  <script>
                    /*
                    * Light YouTube Embeds by @labnol
                    * Credit: https://www.labnol.org/
                    */
                    function labnolIframe(div) {
                      var iframe = document.createElement('iframe');
                      iframe.setAttribute(
                        'src',
                        'https://www.youtube.com/embed/' + div.dataset.id + '?autoplay=1&rel=0'
                      );
                      iframe.setAttribute('frameborder', '0');
                      iframe.setAttribute('allowfullscreen', '1');
                      iframe.setAttribute(
                        'allow',
                        'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'
                      );
                      div.parentNode.replaceChild(iframe, div);
                    }
                    function initYouTubeVideos() {
                      var playerElements = document.getElementsByClassName('youtube-player');
                      for (var n = 0; n < playerElements.length; n++) {
                        var videoId = playerElements[n].dataset.id;
                        var div = document.createElement('div');
                        div.setAttribute('data-id', videoId);
                        /*var thumbNode = document.createElement('img');
                        thumbNode.src = '//i.ytimg.com/vi/ID/hqdefault.jpg'.replace(
                          'ID',
                          videoId
                        );
                        div.appendChild(thumbNode);*/
                        var playButton = document.createElement('div');
                        playButton.setAttribute('class', 'play');
                        div.appendChild(playButton);
                        div.onclick = function () {
                          labnolIframe(this);
                        };
                        playerElements[n].appendChild(div);
                      }
                    }
                    document.addEventListener('DOMContentLoaded', initYouTubeVideos);
                  </script>
                  <style>
                    .youtube-player {
                      position: relative;
                      padding-bottom: 56.25%;
                      height: 0;
                      overflow: hidden;
                      max-width: 100%;
                      background: #000;
                      margin: 0px;
                    }
                    .youtube-player iframe {
                      position: absolute;
                      top: 0;
                      left: 0;
                      width: 100%;
                      height: 100%;
                      z-index: 100;
                      background: transparent;
                    }
                    .youtube-player img {
                      object-fit: cover;
                      display: block;
                      left: 0;
                      bottom: 0;
                      margin: auto;
                      max-width: 100%;
                      width: 100%;
                      position: absolute;
                      right: 0;
                      top: 0;
                      border: none;
                      height: auto;
                      cursor: pointer;
                      -webkit-transition: 0.4s all;
                      -moz-transition: 0.4s all;
                      transition: 0.4s all;
                    }
                    .youtube-player img:hover {
                      -webkit-filter: brightness(75%);
                    }
                    .youtube-player .play {
                      height: 72px;
                      width: 72px;
                      left: 50%;
                      top: 50%;
                      margin-left: -36px;
                      margin-top: -36px;
                      position: absolute;
                      background: url('//i.imgur.com/TxzC70f.png') no-repeat;
                      cursor: pointer;
                    }
                  </style>
                </div>
              </div>
              <div class="slide-17 w-slide">
                <div class="w-embed w-iframe w-script">
                  <div class="youtube-player" data-id="MbqV_H1lqu8" style="background-image: url('https://urba.com.br/wp-content/uploads/2021/06/thumb-video-minha-casa.jpg'); background-repeat: no-repeat; background-size: cover;"></div>
                  <script>
                    /*
                    * Light YouTube Embeds by @labnol
                    * Credit: https://www.labnol.org/
                    */
                    function labnolIframe(div) {
                      var iframe = document.createElement('iframe');
                      iframe.setAttribute(
                        'src',
                        'https://www.youtube.com/embed/' + div.dataset.id + '?autoplay=1&rel=0'
                      );
                      iframe.setAttribute('frameborder', '0');
                      iframe.setAttribute('allowfullscreen', '1');
                      iframe.setAttribute(
                        'allow',
                        'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'
                      );
                      div.parentNode.replaceChild(iframe, div);
                    }
                    function initYouTubeVideos() {
                      var playerElements = document.getElementsByClassName('youtube-player');
                      for (var n = 0; n < playerElements.length; n++) {
                        var videoId = playerElements[n].dataset.id;
                        var div = document.createElement('div');
                        div.setAttribute('data-id', videoId);
                        /*var thumbNode = document.createElement('img');
                        thumbNode.src = '//i.ytimg.com/vi/ID/hqdefault.jpg'.replace(
                          'ID',
                          videoId
                        );
                        div.appendChild(thumbNode);*/
                        var playButton = document.createElement('div');
                        playButton.setAttribute('class', 'play');
                        div.appendChild(playButton);
                        div.onclick = function () {
                          labnolIframe(this);
                        };
                        playerElements[n].appendChild(div);
                      }
                    }
                    document.addEventListener('DOMContentLoaded', initYouTubeVideos);
                  </script>
                  <style>
                    .youtube-player {
                      position: relative;
                      padding-bottom: 56.25%;
                      height: 0;
                      overflow: hidden;
                      max-width: 100%;
                      background: #000;
                      margin: 0px;
                    }
                    .youtube-player iframe {
                      position: absolute;
                      top: 0;
                      left: 0;
                      width: 100%;
                      height: 100%;
                      z-index: 100;
                      background: transparent;
                    }
                    .youtube-player img {
                      object-fit: cover;
                      display: block;
                      left: 0;
                      bottom: 0;
                      margin: auto;
                      max-width: 100%;
                      width: 100%;
                      position: absolute;
                      right: 0;
                      top: 0;
                      border: none;
                      height: auto;
                      cursor: pointer;
                      -webkit-transition: 0.4s all;
                      -moz-transition: 0.4s all;
                      transition: 0.4s all;
                    }
                    .youtube-player img:hover {
                      -webkit-filter: brightness(75%);
                    }
                    .youtube-player .play {
                      height: 72px;
                      width: 72px;
                      left: 50%;
                      top: 50%;
                      margin-left: -36px;
                      margin-top: -36px;
                      position: absolute;
                      background: url('//i.imgur.com/TxzC70f.png') no-repeat;
                      cursor: pointer;
                    }
                  </style>
                </div>
              </div>
            </div>
            <!--<div class="arrow-depoimento w-slider-arrow-left">
              <div class="icon-10 w-icon-slider-left"></div>
            </div>
            <div class="arrow-depoimento _2 w-slider-arrow-right">
              <div class="icon-10 w-icon-slider-right"></div>
            </div>-->
            <div class="slide-nav-depoimento w-slider-nav w-round"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="depoimentos">
    <div class="container-padrao">
      <h2 class="heading-27 center _32px">Conheça quem <strong class="destaque-h2">já fez essa escolha</strong></h2>
      <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-depoimentos w-slider">
        <div class="w-slider-mask">
          <div class="w-slide">
            <div class="div-depoimentos">
              <p class="depoimento">&quot;Um sonho que parecia muito distante pra gente, de repente a oportunidade apareceu. Uma oportunidade que a gente viu que cabia no nosso bolso. E aqui no Bem Viver, encontrei um local que traz segurança para nossa família e pode proporcionar infância de verdade para as nossas filhas pequenas, com um local que tem um espaço amplo. É um sonho realizado.&quot;</p>
              <div class="div-depoimento-autor">
                <div class="nome-autor">João Pedro Campanelli<br><span class="cargo">Cargo</span></div>
              </div>
            </div>
          </div>
          <!--<div class="w-slide">
            <div class="div-depoimentos">
              <p class="depoimento">&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.&quot;</p>
              <div class="div-depoimento-autor">
                <div class="nome-autor">Nome do Autor<br><span class="cargo">Cargo</span></div>
              </div>
            </div>
          </div>
          <div class="w-slide">
            <div class="div-depoimentos">
              <p class="depoimento">&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.&quot;</p>
              <div class="div-depoimento-autor">
                <div class="nome-autor">Nome do Autor<br><span class="cargo">Cargo</span></div>
              </div>
            </div>
          </div>-->
        </div>
        <!--<div class="arrow-depoimento w-slider-arrow-left">
          <div class="icon-10 w-icon-slider-left"></div>
        </div>
        <div class="arrow-depoimento _2 w-slider-arrow-right">
          <div class="icon-10 w-icon-slider-right"></div>
        </div>
        <div class="slide-nav-depoimento w-slider-nav w-round"></div>-->
      </div>
    </div>
  </div>
  <div class="w-embed">
    <style>
      .w-slider-dot {
        background: none;
        border: 1px solid #793f98;
      }
      .w-slider-dot.w-active {
        color: #793f98;
        background: #793f98;
        border: 1px solid #793f98;
      }
      .foto-autor {
          object-fit: cover;
      }
    </style>
  </div>
  <div class="texto-regulamento" style="background-color: #555555;opacity: 0.8;padding-top: 15px;padding-bottom: 15px;">
    <div class="container-padrao">
      <p style="color: #fff;font-size: 12px;font-weight: 300;text-align: center;">
      Projetos e imagens meramente ilustrativos. A construção da casa não é realizada pela Urba, sendo esta realizada por empresa terceirada a ser contratada sob única e exclusiva responsabilidade do cliente. A modalidade Minha Casa do Meu Jeito está condicionada à aquisição de financiamento pelo cliente junto a uma instituição financeira, estando sujeito à aprovação de crédito e aprovação do projeto da casa. Utilização de subsídio do Casa Verde e Amarela e FGTS sujeito à aprovação de perfil pela instituição financeira.
    </p>
    </div>
  </div>
<?php get_footer(); ?>

<script>
  jQuery('#wf-form-Email-Form').submit(function(e){
    e.preventDefault();
    jQuery('#wf-form-Email-Form input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#E-mail').val() && regex.test(jQuery('#E-mail').val()) && jQuery('#name').val() && jQuery('#Telefone').val() && jQuery('input[name=consentimento-de-comunicacao]:checked').length>0) {
      if ( jQuery('#wf-form-Email-Form #escolha-sua-cidade-nao-clientes option:selected' ).val() === "Campos dos Goytacazes (RJ)" ) {
        var data_array = [
            { name: 'loteamento', value:"Minha Casa do Meu Jeito"},
            { name: 'nome', value: jQuery('#wf-form-Email-Form #name').val() },
            { name: 'telefone', value: jQuery('#wf-form-Email-Form #Telefone').val() },
            { name: 'email', value: jQuery('#wf-form-Email-Form #E-mail').val() },
            { name: 'escolha-cidade-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-clientes option:selected' ).val() },
            { name: 'escolha-cidade-nao-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-nao-clientes option:selected' ).val() },
            { name: 'consentimento-de-comunicacao', value: 'granted' },
            { name: 'idempreendimento', value: '7' },
            { name: 'identificador', value: "Interesse Minha Casa do Meu Jeito" }, //descobrir o valor da identificação
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = "https://urba.com.br/obrigado/";
          return false;
        });
      } if ( jQuery('#wf-form-Email-Form #escolha-sua-cidade-nao-clientes option:selected' ).val() === "Feira de Santana (BA)" ) {
        var data_array = [
            { name: 'loteamento', value:"Minha Casa do Meu Jeito"},
            { name: 'nome', value: jQuery('#wf-form-Email-Form #name').val() },
            { name: 'telefone', value: jQuery('#wf-form-Email-Form #Telefone').val() },
            { name: 'email', value: jQuery('#wf-form-Email-Form #E-mail').val() },
            { name: 'escolha-cidade-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-clientes option:selected' ).val() },
            { name: 'escolha-cidade-nao-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-nao-clientes option:selected' ).val() },
            { name: 'consentimento-de-comunicacao', value: 'granted' },
            { name: 'idempreendimento', value: '6' },
            { name: 'identificador', value: "Interesse Minha Casa do Meu Jeito" }, //descobrir o valor da identificação
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = "https://urba.com.br/obrigado/";
          return false;
        });
      } if ( jQuery('#wf-form-Email-Form #escolha-sua-cidade-clientes option:selected' ).val() === "São Carlos (SP)" ) {
        var data_array = [
            { name: 'loteamento', value:"Minha Casa do Meu Jeito"},
            { name: 'nome', value: jQuery('#wf-form-Email-Form #name').val() },
            { name: 'telefone', value: jQuery('#wf-form-Email-Form #Telefone').val() },
            { name: 'email', value: jQuery('#wf-form-Email-Form #E-mail').val() },
            { name: 'escolha-cidade-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-clientes option:selected' ).val() },
            { name: 'escolha-cidade-nao-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-nao-clientes option:selected' ).val() },
            { name: 'consentimento-de-comunicacao', value: 'granted' },
            { name: 'idempreendimento', value: '11' },
            { name: 'identificador', value: "Interesse Minha Casa do Meu Jeito" }, //descobrir o valor da identificação
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = "https://urba.com.br/obrigado/";
          return false;
        });
      } if ( jQuery('#wf-form-Email-Form #escolha-sua-cidade-clientes option:selected' ).val() === "Álvares Machado (SP)" ) {
        var data_array = [
            { name: 'loteamento', value:"Minha Casa do Meu Jeito"},
            { name: 'nome', value: jQuery('#wf-form-Email-Form #name').val() },
            { name: 'telefone', value: jQuery('#wf-form-Email-Form #Telefone').val() },
            { name: 'email', value: jQuery('#wf-form-Email-Form #E-mail').val() },
            { name: 'escolha-cidade-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-clientes option:selected' ).val() },
            { name: 'escolha-cidade-nao-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-nao-clientes option:selected' ).val() },
            { name: 'consentimento-de-comunicacao', value: 'granted' },
            { name: 'idempreendimento', value: '2' },
            { name: 'identificador', value: "Interesse Minha Casa do Meu Jeito" }, //descobrir o valor da identificação
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = "https://urba.com.br/obrigado/";
          return false;
        });
      } if ( jQuery('#wf-form-Email-Form #escolha-sua-cidade-clientes option:selected' ).val() === "Campos dos Goytacazes (RJ)" ) {
        var data_array = [
            { name: 'loteamento', value:"Minha Casa do Meu Jeito"},
            { name: 'nome', value: jQuery('#wf-form-Email-Form #name').val() },
            { name: 'telefone', value: jQuery('#wf-form-Email-Form #Telefone').val() },
            { name: 'email', value: jQuery('#wf-form-Email-Form #E-mail').val() },
            { name: 'escolha-cidade-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-clientes option:selected' ).val() },
            { name: 'escolha-cidade-nao-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-nao-clientes option:selected' ).val() },
            { name: 'consentimento-de-comunicacao', value: 'granted' },
            { name: 'idempreendimento', value: '7' },
            { name: 'identificador', value: "Interesse Minha Casa do Meu Jeito" }, //descobrir o valor da identificação
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = "https://urba.com.br/obrigado/";
          return false;
        });
      } if ( jQuery('#wf-form-Email-Form #escolha-sua-cidade-clientes option:selected' ).val() === "Feira de Santana (BA)" ) {
        var data_array = [
            { name: 'loteamento', value:"Minha Casa do Meu Jeito"},
            { name: 'nome', value: jQuery('#wf-form-Email-Form #name').val() },
            { name: 'telefone', value: jQuery('#wf-form-Email-Form #Telefone').val() },
            { name: 'email', value: jQuery('#wf-form-Email-Form #E-mail').val() },
            { name: 'escolha-cidade-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-clientes option:selected' ).val() },
            { name: 'escolha-cidade-nao-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-nao-clientes option:selected' ).val() },
            { name: 'consentimento-de-comunicacao', value: 'granted' },
            { name: 'idempreendimento', value: '6' },
            { name: 'identificador', value: "Interesse Minha Casa do Meu Jeito" }, //descobrir o valor da identificação
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = "https://urba.com.br/obrigado/";
          return false;
        });
      } else if ( jQuery('#wf-form-Email-Form #escolha-sua-cidade-clientes option:selected' ).val() === "Ribeirão Preto (SP)" ) {
        var data_array = [
            { name: 'loteamento', value:"Minha Casa do Meu Jeito"},
            { name: 'nome', value: jQuery('#wf-form-Email-Form #name').val() },
            { name: 'telefone', value: jQuery('#wf-form-Email-Form #Telefone').val() },
            { name: 'email', value: jQuery('#wf-form-Email-Form #E-mail').val() },
            { name: 'escolha-cidade-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-clientes option:selected' ).val() },
            { name: 'escolha-cidade-nao-clientes', value: jQuery('#wf-form-Email-Form #escolha-sua-cidade-nao-clientes option:selected' ).val() },
            { name: 'consentimento-de-comunicacao', value: 'granted' },
            { name: 'idempreendimento', value: '9' },
            { name: 'identificador', value: "Interesse Minha Casa do Meu Jeito" }, //descobrir o valor da identificação
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = "https://urba.com.br/obrigado/";
          return false;
        });
      }
    } else {
        jQuery('#interesse-loteamento-lp input[type=submit]').val('Enviar');
        alert('Preencha seus dados');
    }
  });
</script>