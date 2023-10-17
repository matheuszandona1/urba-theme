<?php
/*
Template Name: Página Nossas Lojas 2
*/
?>

<?php get_header(); ?>
  <div class="hero-internas nossas-lojas">
    <div class="container-padrao">
      <div class="div-text-hero">
        <h1 class="heading lojas">Visite a loja Urba mais próxima de você</h1>
      </div>
    </div>
  </div>
  <div class="section-map">
    <div class="container-padrao">
      <h2 class="heading-2 _2">Use o filtro abaixo para escolher a <strong class="destaque-h2">cidade desejada</strong></h2>
      <div class="form-block w-form">
        <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-4">
          <select id="field" name="field" data-name="Field" class="escolha-cidade w-select">
            <option value="Escolha a cidade">Escolha a cidade...</option>
            <?php $terms = get_terms(array(
              'taxonomy' => 'cidade_loteamentos',
              'orderby'   => 'meta_value',
              'order' => 'ASC',
              'hide_empty' => false
              ));
              foreach ($terms as $term) {
                echo '<option value="'.$term->term_id.'">'.$term->name.'</option>';
              }
            ?>
          </select>
          <script type="text/javascript">
            jQuery('.escolha-cidade').change(function(e){
              var selected = 'city_'+jQuery('.escolha-cidade').val();
              console.log(selected);
              jQuery('.w-tab-link').show();
              jQuery('.w-tab-link:not(.'+selected+')').hide('#maps-lojas');
              jQuery('#frame-map').attr("src", "");
            });
          </script>
        </form>
      </div>
      <div class="text-block-11">*Clique no cards para ver o mapa correspondente</div>
      <div class="text-block-11 arraste">*Arraste para o lado para escolher mais cards</div>
      <style>
        .text-block-11.arraste {
          display: none;
        }

        #frame-map {
          width: 760px !important;
        }

        #card-lojas {
          overflow-y: auto !important;
          border: 0;
          height: 450px !important;
          max-height: 450px !important;
          width: 450px !important;
        }

        #card-lojas .tabs-menu {
          height: auto;
          margin-top: 0;
          width: auto;
        }

        #card-lojas .tab-link-tab-1, #card-lojas .tab-link-tab-2, #card-lojas .tab-link-tab-3, #card-lojas .tab-link-tab-4,
        #card-lojas .tab-link-tab-5, #card-lojas .tab-link-tab-6, #card-lojas .tab-link-tab-7, #card-lojas .tab-link-tab-8,
        #card-lojas .tab-link-tab-9 {
          background: #FFFFFF!important;
          width: 95% !important;
          padding: 25px;
          height: 100px;
          border-radius: 5px;
          box-shadow: 0 0 10px -3px rgba(0, 0, 0, 0.15);
          height: 120px;
          margin: 5px;
        }

        #card-lojas .callout {
          padding-bottom: 5px;
          padding-left: 5px;
          border-bottom: 1px solid #ff8b22;
          color: #079d56;
          font-size: 18px;
          font-weight: 500;
        }

        #card-lojas .voslrow {
          color: #6e6e6e!important;
          margin: 0 0 5px 20px !important;
          width: 95% !important;
        }

        #maplist {
          display: flex;
          margin-top: 50px;
        }

        /*#maplist iframe {
          width: 100%;
        }*/

        @media (max-width: 767px) {
          .text-block-11.arraste {
            display: block;
            margin-top: 20px;
          }

          #maplist {
            display: block;
          }

          #card-lojas {
            height: auto !important;
            overflow-y: scroll !important;
            width: auto !important;
          }

          #card-lojas .tab-link-tab-1, #card-lojas .tab-link-tab-2, #card-lojas .tab-link-tab-3, #card-lojas .tab-link-tab-4, #card-lojas .tab-link-tab-5, #card-lojas .tab-link-tab-6, #card-lojas .tab-link-tab-7, #card-lojas .tab-link-tab-8, #card-lojas .tab-link-tab-9 {
            height: auto;
            width: 100%;
          }
        }
      </style>
      <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs voslrow" id="maplist">
        <div class="col-lg-3 overflowscroll" id="card-lojas">
          <div class="tabs-menu w-tab-menu">
              <!-- a href="#" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3697.209290344931!2d-51.47323218504917!3d-22.07982278543855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9493f0ffd9dc92c7%3A0xf697cd75337137a4!2sR.%20Rui%20Barbosa%2C%20294%2C%20%C3%81lvares%20Machado%20-%20SP%2C%2019160-000!5e0!3m2!1spt-BR!2sbr!4v1610633118025!5m2!1spt-BR!2sbr" data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link city_11">
                <div>
                  <div class="callout">
                  Álvares Machado
                  </div>
                  <div class="voslrow">
                  Rua Rui Barbosa, 294, Centro, Sala 2, Álvares Machado, SP 19160-000
                  </div>
                </div>
              </a-->
              <!--<a href="#" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.413398528379!2d-46.818248000000004!3d-22.712871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDQyJzQ2LjMiUyA0NsKwNDknMDUuNyJX!5e0!3m2!1spt-BR!2sbr!4v1605204646366!5m2!1spt-BR!2sbr" data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link city_10">
                <div>
                  <div class="callout">
                  Amparo
                  </div>
                  <div class="voslrow">
                  Rodovia João Beira, Km 46, 5, Amparo, SP 13905-412
                  </div>
                </div>
              </a> -->
              <!-- <a href="#" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.107758020838!2d-35.88199928522525!3d-7.228548594781745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ac1e5b7f89087f%3A0x4ccbad88e536d0ea!2sR.%20Ant%C3%B4nio%20Guedes%20de%20Andrade%2C%20199%20-%20Catol%C3%A9%2C%20Campina%20Grande%20-%20PB%2C%2058410-223!5e0!3m2!1spt-BR!2sbr!4v1647451701380!5m2!1spt-BR!2sbr" data-w-tab="Tab 3" class="tab-link-tab-3 w-inline-block w-tab-link city_16">
                <div>
                  <div class="callout">
                  Campina Grande
                  </div>
                   <div class="voslrow">
                  Rua Antônio Guedes de Andrade, 199 – Catolé, Campina Grande/PB, 58410-223
                  </div> 
                </div>
              </a>               -->
              <a href="#" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.9509633317225!2d-47.19331618503351!3d-22.952032984988797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8b76b3f94c3d9%3A0xa3071531359457a2!2sEstr.%20Mun.%20da%20Paz%2C%2092%20-%20Jardim%20Novo%20Maracana%2C%20Campinas%20-%20SP%2C%2013058-005!5e0!3m2!1spt-BR!2sbr!4v1647451894097!5m2!1spt-BR!2sbr" data-w-tab="Tab 7" class="tab-link-tab-7 w-inline-block w-tab-link city_24">
                <div>
                  <div class="callout">
                  Campinas
                  </div>
                  <div class="voslrow">
                  Estrada Municipal Paz, 92 – Santa Clara, Campinas/SP, 13058-005
                  </div>
                </div>
              </a>
              <a href="#" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.0030440045293!2d-41.29645408505394!3d-21.818813285575754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdd63a37ed1a59%3A0x65078e8d563a2e90!2sAv.%20Lourival%20Martins%20Beda%2C%20684%20-%20Donana%2C%20Campos%20dos%20Goytacazes%20-%20RJ!5e0!3m2!1spt-BR!2sbr!4v1647452056107!5m2!1spt-BR!2sbr" data-w-tab="Tab 4" class="tab-link-tab-4 w-inline-block w-tab-link city_14">
                <div>
                  <div class="callout">
                  Campos dos Goytacazes
                  </div>
                  <div class="voslrow">
                  Rodovia Doutor Lourival Martins Beda, 684 – Donana, Campos dos Goytacazes/RJ, 28022-560
                  </div>
                </div>
              </a>
              <a href="#" data-map="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7797.702050587697!2d-38.994998!3d-12.258359!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71448226c79eacd%3A0xbb8f4b8320ca458f!2sAv.%20Mario%20Ventura%20-%20NOVA%20ESPERAN%C3%87A%2C%20Feira%20de%20Santana%20-%20BA%2C%2044019-700!5e0!3m2!1spt-BR!2sbr!4v1647452172325!5m2!1spt-BR!2sbr" data-w-tab="Tab 6" class="tab-link-tab-6 w-inline-block w-tab-link city_15">
                <div>
                  <div class="callout">
                  Feira de Santana
                  </div>
                  <div class="voslrow">
                  Avenida Mário Ventura, 1 – Nova Esperança, Feira de Santana/BA, 44019-700
                  </div>
                </div>
              </a>
              <!-- <a href="#" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.430099817275!2d-48.87933688501429!3d-23.98058468447632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c38d632f53d1c1%3A0xaa72d3c2e7f217e5!2sR.%20Mario%20Prandini%2C%2026%20-%20Centro%2C%20Itapeva%20-%20SP%2C%2018400-170!5e0!3m2!1spt-BR!2sbr!4v1647452560253!5m2!1spt-BR!2sbr" data-w-tab="Tab 6" class="tab-link-tab-6 w-inline-block w-tab-link city_52">
                <div>
                  <div class="callout">
                  Itapeva 
                  </div>
                   <div class="voslrow">
                  Rua Mario Prandini, 26 (Loja 8) – Centro, Itapeva/SP, 18400-170
                  </div> 
                </div>
              </a> -->
              <!-- <a href="#" data-map="https://www.google.com/maps/embed?pb=!4v1647452826150!6m8!1m7!1sJs6KKi91Ofww7k7-myMh7A!2m2!1d-23.97538381839158!2d-48.90590687847164!3f0!4f0!5f0.7820865974627469" data-w-tab="Tab 6" class="tab-link-tab-6 w-inline-block w-tab-link city_52">
                <div>
                  <div class="callout">
                  Itapeva 
                  </div>
                  <div class="voslrow">
                  Rua Josue Xavier Gil, 99 – Parque Cimentolandia, Itapeva/SP, 18409-640
                  </div>
                </div>
              </a> -->
              <!-- <a href="#" data-map="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7357.724704835757!2d-47.276836!3d-22.770489!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8979e13e45d43%3A0x8c2564bd7074cf79!2sR.%20da%20Felicidade%2C%2077%2C%20Nova%20Odessa%20-%20SP%2C%2013460-000!5e0!3m2!1spt-BR!2sbr!4v1647452930115!5m2!1spt-BR!2sbr" data-w-tab="Tab 6" class="tab-link-tab-6 w-inline-block w-tab-link city_26">
                <div>
                  <div class="callout">
                  Nova Odessa
                  </div>
                  <div class="voslrow">
                  Rua da Felicidade, 77 – Jardim Residencial Fibra, Nova Odessa/SP, 13460-000
                  </div>
                </div>
              </a> -->
              <!-- <a href="#" data-map="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7440.110653062151!2d-47.792521!3d-21.189961!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9bf3b5c1b4bc7%3A0x5ee0d0c97dd2b9f0!2sAv.%20Maria%20de%20Jesus%20Condeixa%2C%20600%20-%20Ribeir%C3%A2nia%2C%20Ribeir%C3%A3o%20Preto%20-%20SP%2C%2014091-240!5e0!3m2!1spt-BR!2sbr!4v1647452995887!5m2!1spt-BR!2sbr" data-w-tab="Tab 6" class="tab-link-tab-6 w-inline-block w-tab-link city_13">
                <div>
                  <div class="callout">
                  Ribeirão Preto
                  </div>
                   <div class="voslrow">
                  Avenida Maria de Jesus Condeixa, 600 (Loja 5) – Jardim Palma Travassos, Ribeirão Preto/SP, 14091-240
                  </div> 
                </div>
              </a> -->
              <!-- <a href="#" data-map="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7354.056408771629!2d-47.158846!3d-22.838446!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8bf3712234a0f%3A0x66a8e23c822b440f!2sAv.%20Minasa%2C%201195%20-%20Ch%C3%A1cara%20San%20Martin%20(Nova%20Veneza)%2C%20Sumar%C3%A9%20-%20SP%2C%2013180-165!5e0!3m2!1spt-BR!2sbr!4v1647453179148!5m2!1spt-BR!2sbr" data-w-tab="Tab 6" class="tab-link-tab-6 w-inline-block w-tab-link city_27">
                <div>
                  <div class="callout">
					          Sumaré
                  </div>
                   <div class="voslrow">
                  Avenida Minasa, 1195 (Loja A) – Condomínio Coronel, Sumaré/SP, 13180-400
                  </div> 
                </div>
              </a> -->
              
              
              
              <!--OCULTAR OS DEMAIS-->
             <!-- <a href="#" data-map="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3678.8623497227027!2d-47.2790251!3d-22.7704891!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8979e13e45d43%3A0x8c2564bd7074cf79!2sR.%20da%20Felicidade%2C%2077%2C%20Nova%20Odessa%20-%20SP%2C%2013460-000!5e0!3m2!1spt-BR!2sbr!4v1629917507347!5m2!1spt-BR!2sbr" data-w-tab="Tab 7" class="tab-link-tab-7 w-inline-block w-tab-link city_26">
                <div>
                  <div class="callout">
                    Nova Odessa
                    </div>
                    <div class="voslrow">
                    Rua da Felicidade, 77 - Jardim Residencial Fibra, Nova Odessa, SP 13460-000
                  </div>
                </div>
              </a>
              <a href="#" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.0553319197998!2d-47.79470928506461!3d-21.18996078591128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9bf3b5c1b4bc7%3A0x5ee0d0c97dd2b9f0!2sAv.%20Maria%20de%20Jesus%20Condeixa%2C%20600%20-%20Ribeir%C3%A2nia%2C%20Ribeir%C3%A3o%20Preto%20-%20SP%2C%2014091-240!5e0!3m2!1spt-BR!2sbr!4v1626786291537!5m2!1spt-BR!2sbr" data-w-tab="Tab 7" class="tab-link-tab-7 w-inline-block w-tab-link city_13">
                <div>
                  <div class="callout">
                  Ribeirão Preto
                  </div>
                  <div class="voslrow">
                  Av. Maria de Jesus Condeixa, 600 (Loja 5) ─ Jardim Palma Travassos, Ribeirão Preto, SP, 14091-240
                  </div>
                </div>
              </a>
              <a href="#" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.028207492763!2d-47.16103488503563!3d-22.838445885046603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8bf3712234a0f%3A0x66a8e23c822b440f!2sAv.%20Minasa%2C%201195%20-%20Ch%C3%A1cara%20San%20Martin%20(Nova%20Veneza)%2C%20Sumar%C3%A9%20-%20SP%2C%2013180-165!5e0!3m2!1spt-BR!2sbr!4v1629410124481!5m2!1spt-BR!2sbr" data-w-tab="Tab 8" class="tab-link-tab-8 w-inline-block w-tab-link city_27">
                <div>
                  <div class="callout">
                  Sumaré
                  </div>
                  <div class="voslrow">
                  Avenida Minasa, 1195 (Loja A) - Condomínio Coronel, Sumaré, SP 13180-165
                  </div>
                </div>
              </a>
              <a href="#" data-map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3699.0869595704985!2d-47.918301985050455!3d-22.007978785476176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b870aeba55b261%3A0xf91a99ba161e2096!2sAv.%20Bruno%20Ruggiero%20Filho%2C%20180%20-%20Parque%20Santa%20Felicia%20Jardim%2C%20S%C3%A3o%20Carlos%20-%20SP%2C%2013562-420!5e0!3m2!1spt-BR!2sbr!4v1619535243888!5m2!1spt-BR!2sbr" data-w-tab="Tab 7" class="tab-link-tab-7 w-inline-block w-tab-link city_21">
                <div>
                  <div class="callout">
                  São Carlos
                  </div>
                  <div class="voslrow">
                  Av. Bruno Ruggiero Filho, 180, São Carlos, SP 13562-420
                  </div>
                </div>
              </a>-->
          </div>
        </div>
        <div class="col-lg-9" id="maps-lojas">
          <div class="w-tab-content">
            <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--tab-active">
              <iframe id="frame-map" src="" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
      </div>
<!--
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <div>
            <div class="callout">
            Álvares Machado
            </div>
            <div class="voslrow">
            Rua Rui Barbosa, 294, Centro, Sala 2, Álvares Machado, SP 19160-000
            </div>
          </div>
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3697.209290344931!2d-51.47323218504917!3d-22.07982278543855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9493f0ffd9dc92c7%3A0xf697cd75337137a4!2sR.%20Rui%20Barbosa%2C%20294%2C%20%C3%81lvares%20Machado%20-%20SP%2C%2019160-000!5e0!3m2!1spt-BR!2sbr!4v1610633118025!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>-->
      <div class="div-entre-contato">
        <a href="#" class="div-contato w-inline-block" data-ix="open-formbox">
          <div class="text-block-20">Atendimento online</div>
        </a>
        <a href="#" class="div-contato w-inline-block">
          <div class="text-block-20">0800-200-6868</div>
        </a>
        <a href="#" class="div-contato w-inline-block">
          <div class="text-block-20 _2"><strong class="bold-text-8">WhatsApp</strong><br>31 9 7163-3617<br></div>
        </a>
        <a href="#" class="div-contato w-inline-block">
          <div class="text-block-20">Abrir solicitação</div>
        </a>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>