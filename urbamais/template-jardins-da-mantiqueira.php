<?php
/*
  Template Name: Jardins da Mantiqueira
*/
?>
<?php get_header('novo'); ?>
<main class="page--mantiqueiras">
  <section class="hero" style="background-image: url(&quot;<?php echo site_url(); ?>/wp-content/uploads/2023/09/bg-hero.webp&quot;)">
    <div class="hero__container">
      <div class="hero__content">
        <div class="hero__logo" style="background:  transparent;;">
          <img src="<?php the_field('logo_mantiqueira'); ?>" alt="Logo Jardins da Mantiqueira">
        </div>
        <div class="tag">
          <p class="tag__button"> Lançamento</p>
          <p class="tag__text">Terrenos em Caçapava/SP</p>
        </div>
        <h2 class="hero__title">Bairro planejado completo em Caçapava</h2>
        <h3 class="default__desc">
          Excelente opção para morar ou investir, com infraestrutura completa, lazer e praça de convívio.
        </h3>
      </div>
      <div class="hero__img">
        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/img-hero.webp" alt="">
      </div>
    </div>
  </section>
  <section class="contact" id="contato" style="background-image: none; height: auto;">
    <div class="contact__container">
      <form id="email-form" method="post" class="contact__form">
        <div class="form-gap">
          <input type="hidden" id="idempreendimento" name="idempreendimento" value="24">
          <div class="input_wrap">
            <input style="height: 100%;" type="text" id="name" required="">
            <label><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/person.webp" alt=""> Nome</label>
          </div>
          <div class="input_wrap">
            <input style="height: 100%;" type="email" id="email" required="">
            <label><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/mail.webp" alt=""> E-mail</label>
          </div>
          <div class="input_wrap">
            <input style="height: 100%;" type="tel" id="whatsapp" minlength="15" maxlength="15" onkeypress="MascaraTelefone(this);" required="">
            <label><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/phone.webp" alt=""> WhatsApp</label>
          </div>
          <div class="input_checkbox">
            <input type="checkbox" name="consentimento-de-comunicacao" id="consentimento" required="">
            <label for="consentimento">Aceito receber via WhatsApp, ligação, e-mail e outras formas de contato da MRV&CO, com ações de marketing, ofertas de produto e serviços. Estou de acordo com as formas de tratamento de dados realizados pela MRV&CO, conforme sua <a href="https://www.mrv.com.br/institucional/pt/politica-de-privacidade" target="_blank">Política de Privacidade.</a></label>
          </div>
        </div>
        <input type="submit" class="button white" value="Quero mais informações">
      </form>
    </div>
  </section>
  <section class="benefits">
    <div class="benefits__container">
      <div class="benefits__img" data-aos="fade-right" data-aos-delay="300">
        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/img-2.webp" alt="">
      </div>
      <div class="benefits__content">
        <h3 class="default__title" data-aos="fade-left" data-aos-delay="300">Escolhemos Caçapava para você escolher a melhor opção para morar ou investir.</h3>
        <h4 class="default__subtitle">A Urba, empresa do grupo MRV&CO — referência do mercado imobiliário —, chega para trazer mais qualidade de vida a você e sua família.</h4>
        <p class="default__desc" data-aos="fade-left" data-aos-delay="300">
          Surgimos em 2012 como a loteadora especialista em desenvolvimento urbano do grupo MRV&CO, referência no mercado imobiliário há mais de 40 anos.
        </p>
        <p class="default__desc" data-aos="fade-left" data-aos-delay="400">Depois de realizar o sonho de mais de 12 mil famílias e desenvolver mais de 5 milhões de m2, chegamos à Caçapava/SP trazendo um produto 100% registrado, com infraestrutura completa e financiamento sem burocracia.</p>
      </div>
      <div class="items__container">
        <div class="item">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/icone-lotes.webp" alt="">
          <p>Lotes residenciais e comerciais</p>
        </div>
        <div class="item">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/icone-bairro.webp" alt="">
          <p>Bairro planejado</p>
        </div>
        <div class="item">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/icone-infraestrutura.webp" alt="">
          <p>Infraestrutura completa:
            água, esgoto, iluminação e asfalto.</p>
        </div>
        <div class="item">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/icone-acesso.webp" alt="">
          <p>Fácil acesso à Rodovia Dutra</p>
        </div>
        <div class="item">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/icone-praca.webp" alt="">
          <p>Praça de lazer e convívio</p>
        </div>
        <div class="item">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/icone-aprovado.webp" alt="">
          <p>100% aprovado e registrado</p>
        </div>
      </div>
    </div>
  </section>
  <section class="conditions" data-aos="fade-down" data-aos-delay="300">
    <div class="conditions__container" style="flex-direction: column;">
      <div class="conditions__content" style="max-width: 100%;">
        <div class="tag" data-aos="fade-left" data-aos-delay="300" style="margin: 0 auto;">
          <p class="tag__text">Condições especiais</p>
        </div>
        <h2 class="conditions__title text-center">Lotes em Caçapava/SP com condições imperdíveis, exclusivas de lançamento</h2>

      </div>
      <div class="conditions__items" style="max-width: 100%; flex-direction: row;">
        <div class="item">
          <p>Lotes residenciais e comerciais a partir de
            R$ 79.900*</p>
        </div>
        <div class="item">
          <p>Financiamento sem burocracia, direto com a loteadora </p>
        </div>
        <div class="item">
          <p>Entrada facilitada e diversos planos de pagamento</p>
        </div>
      </div>
      <p style="font-family: Averta Std;
font-size: 12px;
font-style: normal;
font-weight: 400;
line-height: 150%; color: #079D56; ">Consulte condições*</p>
      <div class="button--container justify-content-center">
        <a href="" class="button">Garanta seu lote hoje mesmo</a>
      </div>
    </div>
  </section>
  <section class="resources" style="background-image: url(&quot;<?php echo site_url(); ?>/wp-content/uploads/2023/09/bg-resources.webp&quot;)">
    <div class="resources__container">
      <h2 class="default__title" data-aos="fade-down" data-aos-delay="300">Invista no seu futuro, em qualidade de vida…</h2>
      <div class="resources__content">
        <div class="card-resources" data-aos="fade-right" data-aos-delay="300">
          <div class="card-resources__img">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-vista-rua.webp" alt="" width="100%">
          </div>
          <div class="card-resources__text">
            <h3 class="card-resources__title">Infraestrutura completa</h3>
            <p class="default__desc">Bairro planejado com tudo o que você precisa no seu novo lote: todas as ruas asfaltadas, rede de água, rede de esgoto, rede elétrica, acessibilidade, área verde, sinalização de trânsito e espaço de lazer.</p>
          </div>
        </div>
        <div class="card-resources" data-aos="fade-right" data-aos-delay="400">
          <div class="card-resources__img"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-lazer.webp" alt="" width="100%"></div>
          <div class="card-resources__text">
            <h3 class="card-resources__title">Lazer acessível</h3>
            <p class="default__desc">Um bairro pensado com lazer acessível para todas as idades, incluindo playground, academia ao ar livre, quadra de beach tênis e de vôlei, quadra poliesportiva, academia ao ar livre para a prática de exercícios físicos e fortalecimento muscular, além de uma praça para convívio.</p>
          </div>
        </div>
        <div class="card-resources" data-aos="fade-right" data-aos-delay="500">
          <div class="card-resources__img"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-lojas.webp" alt="" width="100%"></div>
          <div class="card-resources__text">
            <h3 class="card-resources__title">Área comercial</h3>
            <p class="default__desc">A rotina dos moradores será muito mais cômoda e prática, já que também haverá uma área comercial integrada. Se você é comerciante, aproveite esta oportunidade em uma localização posicionada em um ponto estratégico, cercada de bairros já consolidados e que valorizam a região.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="gallery">
    <div class="gallery__container">
      <div class="tag" data-aos="fade-left" data-aos-delay="300">
        <p class="tag__text">Galeria</p>
      </div>
      <h3 class="default__title">Explore mais o Jardins da Mantiqueira na galeria</h3>
      <div class="slide__container">
        <div class="arrow-slide prev">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/prev-arrow.webp" alt="" width="32px" height="32px">
        </div>
        <div class="gallery__slide col-12">
          <div class="gallery__card">
            <a href="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-1.webp" class="gallery__card--img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-1.webp" alt="" width="100%">
            </a>
          </div>
          <div class="gallery__card">
            <a href="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-2.webp" class="gallery__card--img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-2.webp" alt="" width="100%">
            </a>
          </div>
          <div class="gallery__card">
            <a href="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-3.webp" class="gallery__card--img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-3.webp" alt="" width="100%">
            </a>
          </div>
          <div class="gallery__card">
            <a href="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-4.webp" class="gallery__card--img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-4.webp" alt="" width="100%">
            </a>
          </div>
          <div class="gallery__card">
            <a href="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-5.webp" class="gallery__card--img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-5.webp" alt="" width="100%">
            </a>
          </div>
          <div class="gallery__card">
            <a href="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-6.webp" class="gallery__card--img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-6.webp" alt="" width="100%">
            </a>
          </div>
          <div class="gallery__card">
            <a href="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-8.webp" class="gallery__card--img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/urba-galeria-8.webp" alt="" width="100%">
            </a>
          </div>
        </div>
        <div class="arrow-slide next">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/next-arrow.webp" alt="" width="32px" height="32px">
        </div>
      </div>
    </div>
  </section>
  <section class="location" data-aos="fade-down" data-aos-delay="300">
    <div class="location__container">
      <div class="location__content">
        <h2 class="location__title">Localização privilegiada na região do Vale do Paraíba</h2>
        <h3 class="default__desc">
          Os lotes estão localizados na Estrada de Caçapava Velha, a apenas 400 metros da Rodovia Dutra.
        </h3>
        <div class="item">
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewbox="0 0 56 56" fill="none">
            <path d="M27.1566 45.2177C27.631 45.645 28.3612 45.6517 28.8434 45.2177C29.47 44.6533 44.2081 31.2749 44.2081 20.6881C44.2075 11.7505 36.9365 4.47998 28 4.47998C19.0635 4.47998 11.7925 11.7505 11.7925 20.6875C11.7925 31.2749 26.53 44.6533 27.1566 45.2177ZM28 6.99998C35.5471 6.99998 41.6875 13.1398 41.6875 20.6875C41.6875 28.8092 31.1007 39.5746 28 42.5521C24.8976 39.5752 14.3125 28.817 14.3125 20.6875C14.3125 13.1398 20.4529 6.99998 28 6.99998Z" fill="#009168"></path>
            <path d="M34.3 20.6875C34.3 17.2132 31.4731 14.3875 28 14.3875C24.5269 14.3875 21.7 17.2132 21.7 20.6875C21.7 24.1617 24.5269 26.9875 28 26.9875C31.4731 26.9875 34.3 24.1617 34.3 20.6875ZM24.22 20.6875C24.22 18.6031 25.9163 16.9075 28 16.9075C30.0838 16.9075 31.78 18.6031 31.78 20.6875C31.78 22.7718 30.0838 24.4675 28 24.4675C25.9163 24.4675 24.22 22.7723 24.22 20.6875Z" fill="#009168"></path>
            <path d="M38.4457 38.6573C36.8754 38.0956 36.0276 40.4622 37.5894 41.0278C40.1178 41.9417 41.6875 43.1877 41.6875 44.2803C41.6875 46.2509 36.4801 48.9994 28 48.9994C19.5199 48.9994 14.3125 46.2504 14.3125 44.2803C14.3125 43.1877 15.8827 41.9417 18.4106 41.0278C19.969 40.4633 19.129 38.0973 17.5543 38.6573C13.8382 40.0008 11.7925 41.9977 11.7925 44.2808C11.7925 48.9826 20.1432 51.52 28 51.52C35.8568 51.52 44.2075 48.9826 44.2075 44.2808C44.2075 41.9977 42.1618 40.0013 38.4457 38.6573Z" fill="#FBBA00"></path>
          </svg>
          <p>15 minutos de Taubaté</p>
        </div>
        <div class="item">
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewbox="0 0 56 56" fill="none">
            <path d="M27.1566 45.2177C27.631 45.645 28.3612 45.6517 28.8434 45.2177C29.47 44.6533 44.2081 31.2749 44.2081 20.6881C44.2075 11.7505 36.9365 4.47998 28 4.47998C19.0635 4.47998 11.7925 11.7505 11.7925 20.6875C11.7925 31.2749 26.53 44.6533 27.1566 45.2177ZM28 6.99998C35.5471 6.99998 41.6875 13.1398 41.6875 20.6875C41.6875 28.8092 31.1007 39.5746 28 42.5521C24.8976 39.5752 14.3125 28.817 14.3125 20.6875C14.3125 13.1398 20.4529 6.99998 28 6.99998Z" fill="#009168"></path>
            <path d="M34.3 20.6875C34.3 17.2132 31.4731 14.3875 28 14.3875C24.5269 14.3875 21.7 17.2132 21.7 20.6875C21.7 24.1617 24.5269 26.9875 28 26.9875C31.4731 26.9875 34.3 24.1617 34.3 20.6875ZM24.22 20.6875C24.22 18.6031 25.9163 16.9075 28 16.9075C30.0838 16.9075 31.78 18.6031 31.78 20.6875C31.78 22.7718 30.0838 24.4675 28 24.4675C25.9163 24.4675 24.22 22.7723 24.22 20.6875Z" fill="#009168"></path>
            <path d="M38.4457 38.6573C36.8754 38.0956 36.0276 40.4622 37.5894 41.0278C40.1178 41.9417 41.6875 43.1877 41.6875 44.2803C41.6875 46.2509 36.4801 48.9994 28 48.9994C19.5199 48.9994 14.3125 46.2504 14.3125 44.2803C14.3125 43.1877 15.8827 41.9417 18.4106 41.0278C19.969 40.4633 19.129 38.0973 17.5543 38.6573C13.8382 40.0008 11.7925 41.9977 11.7925 44.2808C11.7925 48.9826 20.1432 51.52 28 51.52C35.8568 51.52 44.2075 48.9826 44.2075 44.2808C44.2075 41.9977 42.1618 40.0013 38.4457 38.6573Z" fill="#FBBA00"></path>
          </svg>
          <p>25 minutos de São José dos Campos</p>
        </div>
      </div>
      <div class="location__map">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation" style="margin-right: 24px;">
            <button class="nav-link active" id="google-maps-tab" data-bs-toggle="tab" data-bs-target="#google-maps-pane" type="button" role="tab" aria-controls="google-maps-pane" aria-selected="true">Google Maps</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="virtual-tour-tab" data-bs-toggle="tab" data-bs-target="#virtual-tour-pane" type="button" role="tab" aria-controls="virtual-tour-pane" aria-selected="false">Tour Virtual</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="google-maps-pane" role="tabpanel" aria-labelledby="google-maps-tab">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58721.62223843548!2d-45.743938271779356!3d-23.093384001277805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc516de4e6e1a3%3A0x6544283198cf070f!2zQ2HDp2FwYXZhLCBTUA!5e0!3m2!1spt-BR!2sbr!4v1694700910199!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="tab-pane fade" id="virtual-tour-pane" role="tabpanel" aria-labelledby="virtual-tour-tab">
            <video controls style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.04);  border: 1px solid #383838;   border-radius: 0px 0px 10px 10px; max-width: 100%; margin: 0 auto; height:  569px; background: black;">
              <source src="<?php echo site_url(); ?>/wp-content/uploads/2023/10/urba-sao-roque-quadras-praca.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <style>
              @media(max-width: 480px) {
                .video__content {
                  padding: 0px 24px;
                }

                .video__content video {
                  max-width: 100% !important;
                }
              }
            </style>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="video" style="background-image: url(&quot;<?php echo site_url(); ?>/wp-content/uploads/2023/10/bg-video-mantiqueira.webp&quot;);">
    <div class="video__container" style="max-width: 1240px; padding: 60px 24px; flex-direction: column; align-items:center; justify-content:center; height: 100%;">
      <h3 class="default__title" style="text-align: center; margin: 0 auto; max-width: 819px;">Veja o que espera por você no Jardins da Mantiqueira</h3>

      <div class="video__content" style="max-width: 619px; display: flex; width: 100%;">
        <iframe width="100%" height="350" style="border-radius:0px 12px 12px 12px; width: 100%;" src="https://www.youtube.com/embed/tSJk3upEXuY?si=IioQAdDpkD5jv_ba" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <style>
        .button:hover {
          color: #fff;
        }
      </style>
      <div class="button--container justify-content-center text-center" style="padding: 0px 24px; ">
        <a href="#contato" class="button">Garanta seu lote hoje mesmo</a>
      </div>
    </div>
  </section>
  <section class="andamento-obra" style="background-color: #FFF9E7;">
    <div class="">
      <div class="container-padrao" style="text-align: center;">
        <h2 class="default__title">Acompanhe o andamento das obras</h2>
        <p class="default__desc">Acompanhe por aqui o andamento da construção do Jardins da Mantiqueira em detalhes, seu novo bairro planejado em Caçapava/SP.</p>
        <div class="div-andamento" style="display:none;">
          <!-- <div id="w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba40c-b3181021" class="div-etapa">
            <div class="div-grafico"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/10/icone_progresso_terra.webp" width="112" alt="" class="image-7">

            </div>
            <div class="text-block-12"><strong class="bold-text-3">100%</strong><br>Terraplanagem</div>
          </div>
          <div id="w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba40c-b3181021" class="div-etapa">
            <div class="div-grafico"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/10/icone_progresso_dreno.webp" width="112" alt="" class="image-7">
            </div>
            <div class="text-block-12"><strong class="bold-text-3">100%</strong><br>Rede de <br>Drenagem</div>
          </div>
          <div id="w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-b3181021" class="div-etapa">
            <div class="div-grafico"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/10/icone_progresso_esgoto.webp" width="112" alt="" class="image-7">

            </div>
            <div class="text-block-12"><strong class="bold-text-3">100%</strong><br>Rede de <br>Esgoto</div>
          </div>
          <div id="w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-b3181021" class="div-etapa">
            <div class="div-grafico"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/10/icone_progresso_agua.webp" width="112" alt="" class="image-7">
            </div>
            <div class="text-block-12"><strong class="bold-text-3">90%</strong><br>Rede de <br>Água</div>
          </div>
          <div id="w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-b3181021" class="div-etapa">
            <div class="div-grafico"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/10/icone_progresso_pista.webp" width="112" alt="" class="image-7">

            </div>
            <div class="text-block-12"><strong class="bold-text-3">90%</strong><br>Pavimentação</div>
          </div>
          <div id="w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-b3181021" class="div-etapa">
            <div class="div-grafico"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/10/icone_progresso_poste.webp" width="112" alt="" class="image-7">

            </div>
            <div class="text-block-12"><strong class="bold-text-3">90%</strong><br>Rede Elétrica</div>
          </div>
          <div id="w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-b3181021" class="div-etapa">
            <div class="div-grafico"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/10/icone_progresso_sinal.webp" width="112" alt="" class="image-7">

            </div>
            <div class="text-block-12"><strong class="bold-text-3">20%</strong><br>Sinalização</div>
          </div>
          <div id="w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-b3181021" class="div-etapa">
            <div class="div-grafico"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/10/icone_progresso.webp" width="112" alt="" class="image-7">

            </div>
            <div class="text-block-12"><strong class="bold-text-3">20%</strong><br>Paisagismo</div>
          </div> -->
          <!-- <div id="w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-b3181021" class="div-etapa">
        <div class="div-grafico"><img src="https://urba.com.br/wp-content/uploads/2022/11/sinalizacao.png" width="60" alt="" class="image-7">
          <div data-w-id="dc4c3ba3-bf99-2572-c13b-1063a43ba3eb" class="div-evolucao pavimentacao" style="height:45%;"></div>
        </div>
        <div class="text-block-12"><strong class="bold-text-3">45%</strong><br>Sinalização</div>
      </div> -->
          <!-- <div id="w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba40c-b3181021" class="div-etapa">
        <div class="div-grafico"><img src="https://urba.com.br/wp-content/uploads/2022/11/arrimo.png" width="60" alt="" class="image-7">
          <div data-w-id="dc4c3ba3-bf99-2572-c13b-1063a43ba40f" class="div-evolucao passeios-calcadas" style="height:11%;"></div>
        </div>
        <div class="text-block-12">Arrimo e Contenções<br><strong class="bold-text-3">11%</strong></div>
      </div> -->

        </div>



      </div>
      <div class="div-lightbox-andamento">
        <?php $images = acf_photo_gallery('galeria_obra', $post->ID); ?>

        <a href="#" class="lightbox-link-6 w-inline-block w-lightbox" aria-label="open lightbox" aria-haspopup="dialog" style="padding: 24px; border-radius:8px; background:#079D56;">
          <style>
            .text-block-25:hover {
              color: #fff
            }
          </style>
          <div class="text-block-25" style="border-radius: 0px; background: transparent; border:none;text-transform: uppercase;font-family: Averta Std;
font-size: 16px;
font-style: normal;
font-weight: 700;
line-height: 150%; padding:0;">veja as fotos da obra</div>
          <script type="application/json" class="w-json">
            {
              "items": [
                <?php if ($images) { ?>
                  <?php foreach ($images as $key => $image) {
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

  </section>

  <section class="store" data-aos="fade-down" data-aos-delay="300">
    <div class="store__container">
      <div class="store__content text-center">
        <div class="store__icone">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 403.2 537.25">
            <g>
              <path d="M32.17,310.76l1.01,1.46c1.23,1.85,2.52,3.64,3.81,5.6l145.94,209.66c4.26,6.12,11.25,9.77,18.7,9.77s14.44-3.65,18.7-9.77l145.6-209.5c1.4-1.96,2.74-3.86,4.09-5.6l.89-1.34h0c26.35-40.78,37.11-89.7,30.28-137.78-6.83-48.07-30.78-92.07-67.45-123.9C297.08,17.53,250.15,0,201.6,0S106.12,17.53,69.45,49.35C32.78,81.18,8.83,125.18,2,173.26s3.93,97,30.28,137.78l-.11-.28ZM201.63,117.73c22.28,0,43.64,8.85,59.4,24.6,15.75,15.75,24.6,37.12,24.6,59.4s-8.85,43.64-24.6,59.39c-15.75,15.75-37.12,24.61-59.4,24.61s-43.64-8.85-59.4-24.61c-15.75-15.75-24.6-37.12-24.6-59.4s8.85-43.65,24.6-59.4c15.75-15.75,37.12-24.6,59.4-24.6h0Z" fill="#079d56" />
            </g>
          </svg>
        </div>
        <h2 class="store__title">Visite nossa loja:</h2>
        <h3 class="default__desc">
          Estrada Mun. Professora. Olívia Alegri, 811 - Caçapava.
        </h3>
      </div>
    </div>
  </section>
  <section class="micro">
    <div class="micro__container">
      <p class="default__desc">Este material tem caráter meramente ilustrativo por se tratar de bem a ser construído. Contrato padrão e demais condições estão disponíveis em nosso plantão de vendas. Loteamento aprovado pela Prefeitura Municipal de Caçapava - SP através da Certidão de Aprovação Municipal, processo nº 927/2023 emitida em 23 de junho de 2023. Registrado sob nº R-09/52.945 junto ao Oficial de Registro de Imóveis de Caçapava, Estado de São Paulo. Proibida a comercialização de lotes antes da conclusão do Registro do Loteamento.</p>
    </div>
  </section>
</main>
<?php get_footer('lp'); ?>