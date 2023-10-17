<?php
/*
Template Name: Página Sobre
*/
?>
<?php get_header(); ?>
<div class="hero-internas sobre">
  <div class="container-padrao">
    <div class="div-text-hero">
      <h1 class="heading sobre">Sobre a <strong class="bold-text-16">Urba</strong></h1>
    </div>
  </div>
</div>
<div class="section-texto-sobre">
  <div class="container-padrao">
    <div class="w-row">
      <div class="column-33 w-col w-col-6">
        <p class="paragraph-18">A Urba é a <strong class="bold-text-4">empresa</strong> de desenvolvimento Urbano da <strong class="bold-text-4">MRV&CO</strong>, líder de mercado no segmento imobiliário e com <strong class="bold-text-4">40 anos de história</strong>. Desde 2012 somos <strong class="bold-text-4">especialistas em loteamentos de alta qualidade</strong> em localizações estratégicas, planejados para possibilitar mais comodidade, diversão e qualidade de vida para as pessoas. São mais de <strong class="bold-text-4"> 16.300 unidades lançadas e 7.000 entregues</strong>, com presença em mais de 30 cidades de 7 estados brasileiros.</p>
        <p class="paragraph-18"><strong class="bold-text-4">Os bairros planejados pela Urba são completos</strong>, com toda a infraestrutura de urbanização para o desenvolvimento da região. Os espaços são projetados visando a qualidade de vida da população, satisfazendo as necessidades do dia a dia de forma integrada com a natureza. <strong class="bold-text-4">Oferecemos áreas residenciais e comerciais</strong>, além de espaços compartilhados de convivência, promovendo mais bem estar e comodidade. Localizados em vetores de crescimento das cidades, os terrenos contam com projeto paisagístico em toda a sua extensão, valorizando ainda mais a região.</p>
      </div>
      <div class="column-39 w-col w-col-6">
        <div data-w-id="a13cda0c-004d-30f1-7db9-d9580c9caee9" style="opacity:0" class="div-img-sobre"></div>
      </div>
    </div>
  </div>

  <div class="section_cinza" style="background-color:#fafafa;padding-top:50px;padding-bottom:50px;">
    <div class="container-padrao">
      <h2 class="heading-2 estados" style="margin-top: 0px;">Estamos presentes em mais de <strong class="destaque-h2">30 cidades em 7 estados do Brasil</strong></h2>
      <div class="div-estados">
        <a data-w-id="eb608997-5212-223a-aaab-9e6e8b055709" style="opacity:0" href="<?= site_url() ?>/loteamentos-residenciais/" class="div-estado w-inline-block">
          <div class="div-img-estado"></div>
          <h3 class="heading-8">Bahia</h3>
        </a>
        <a data-w-id="5a498ba4-0771-4332-87f2-fc860df074e7" style="opacity:0" href="<?= site_url() ?>/loteamentos-residenciais/" class="div-estado w-inline-block">
          <div class="div-img-estado _2"></div>
          <h3 class="heading-8">Minas Gerais</h3>
        </a>
        <a data-w-id="1b6c8b63-f228-3a34-b19d-a7d840862b17" style="opacity:0" href="<?= site_url() ?>/loteamentos-residenciais/" class="div-estado w-inline-block">
          <div class="div-img-estado _3"></div>
          <h3 class="heading-8">Paraíba</h3>
        </a>
        <a data-w-id="93a1f89f-f13b-7f38-95cb-15ebd56be258" style="opacity:0" href="<?= site_url() ?>/loteamentos-residenciais/" class="div-estado w-inline-block">
          <div class="div-img-estado _4"></div>
          <h3 class="heading-8">Rio de Janeiro</h3>
        </a>
        <a data-w-id="63f4ff00-38b2-0ede-9d4c-f82d367a5da1" style="opacity:0" href="<?= site_url() ?>/loteamentos-residenciais/" class="div-estado w-inline-block">
          <div class="div-img-estado _5"></div>
          <h3 class="heading-8">São Paulo</h3>
          <a data-w-id="63f4ff00-38b2-0ede-9d4c-f82d367a5da1" style="opacity:0" href="<?= site_url() ?>/loteamentos-residenciais/" class="div-estado w-inline-block">
            <div style="background-image: url(<?= get_stylesheet_directory_uri() ?>/images/Igreja-do-Bom-Despacho-1280x720.jpg);height: 150px;background-position: 50% 50%;background-size: cover;background-repeat: no-repeat;"></div>
            <h3 class="heading-8">Mato Grosso</h3>
          </a>
      </div>
    </div>
  </div>
  <style>
    .title_new {
      color: #009E50;
      font-size: 22px;
      font-weight: 700;
      line-height: 37px;
      letter-spacing: 0em;
      text-align: center;
      margin-bottom: 20px;
      margin-top: 20px;

    }

    .new_box {
      text-align: center;
      padding: 30px;
      padding-inline: 20px;
      box-shadow: 0px 0px 12px 0px #0000001A;
      margin: 10px;
      border-radius: 10px;
    }

    .content_new {
      color: #6C6C6C;
      font-size: 16px;
      font-weight: 400;
      line-height: 27px;
      letter-spacing: 0em;
      text-align: center;

    }

    .new_section {
      display: grid;
      grid-template-columns: 310px 310px 310px 310px;
    }

    @media(max-width:468px) {
      .new_section {
        display: block;
      }
    }
  </style>
  <div class="container-padrao">
    <div class="new_section" style="padding-top:70px;padding-bottom:30px;">
      <div class="new_box">
        <img src="<?= site_url() ?>/wp-content/uploads/2022/06/Group.png">
        <p class="title_new">Propósito</p>
        <p class="content_new">Desenvolver bairros inteligentes e sustentáveis para democratizar a qualidade de vida das pessoas. </p>
      </div>
      <div class="new_box">
        <img src="<?= site_url() ?>/wp-content/uploads/2022/06/Group-6.png">
        <p class="title_new">Promessa</p>
        <p class="content_new">Ser a melhor e maior empresa de desenvolvimento urbano do Brasil. </p>
      </div>
      <div class="new_box">
        <img src="<?= site_url() ?>/wp-content/uploads/2022/06/Group-5.png">
        <p class="title_new">Valor para o cliente</p>
        <p class="content_new">Desenvolvemos bairros com alto valor agregado para o nosso cliente. Garantimos a entrega dentro do prazo e qualidade a preços acessíveis. </p>
      </div>
      <div class="new_box">
        <img src="<?= site_url() ?>/wp-content/uploads/2022/06/Vector.png">
        <p class="title_new">Compromisso</p>
        <p class="content_new">Nossas equipes trabalham comprometidas com sólidos princípios éticos, orientados por nossas competências em projeto, construção e gestão.</p>
      </div>
    </div>
  </div>

</div>
</div>
<?php get_footer(); ?>