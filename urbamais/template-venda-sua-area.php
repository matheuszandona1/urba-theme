<?php
/*
Template Name: Página Venda Sua Área
*/
?>
<?php get_header(); ?>
  <div class="hero-internas venda">
    <div class="container-padrao">
      <div class="div-text-hero venda">
        <h1 class="heading venda">Quer vender sua área? <br>A Urba é a <strong class="bold-text-17">melhor compradora</strong>.<br></h1><a href="#formulario" class="button-5 w-button">Quero vender meu terreno</a></div>
    </div>
  </div>
  <div class="razoes-vender">
    <div class="container-padrao">
      <h2 class="heading-2"><strong class="destaque-h2">Por que vender</strong> seu terreno para a Urba?</h2>
      <div class="text-block-15">Se você está buscando um parceiro a quem vender seu terreno, <strong>estamos interessados.</strong></div>
      <div class="w-row">
        <div class="column-33 _2 w-col w-col-6">
          <p class="paragraph-18">A Urba é uma empresa de desenvolvimento urbano que integra o Grupo MRV, consolidado e presente no mercado imobiliário há 40 anos. Já lançamos mais de 6.500 unidades e entregamos mais de 3.000, com presença em mais de 15 cidades do Brasil.</p>
          <p class="paragraph-18">Nossos loteamentos são planejados e completos para atender às necessidades do dia a dia dos moradores. Bairros compostos por áreas residenciais, áreas comerciais, industriais e praças com opções de lazer. Os loteamentos são de alta qualidade, possuem infraestrutura completa, paisagismo e estão localizados em vetores de crescimento.</p>
        </div>
        <div class="column-40 w-col w-col-6">
          <div data-w-id="1327aeb2-7ce2-edde-ec24-7b35b0447f92" style="opacity:0" class="div-img-sobre venda"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="passo-a-passo">
    <div class="container-padrao">
      <h2 class="heading-2 passo">Passo-a-passo da venda</h2>
      <div class="div-passo-a-passo">
        <div class="div-passo">
          <div class="div-numero">
            <div class="text-block-18">1</div>
          </div>
          <div class="text-block-17"><strong class="bold-text-7">Oferta</strong><br>Basta preencher o formulário com informações sobre o seu terreno</div>
          <div data-w-id="1b881150-3e85-53e7-99b9-6070e9346ec6" class="div-camino"></div>
        </div>
        <div class="div-passo">
          <div class="div-numero">
            <div class="text-block-18">2</div>
          </div>
          <div class="text-block-17"><strong class="bold-text-7">Avaliação</strong><br>Vamos avaliar o seu terreno, verificar se ele atende as nossas especificações, tirar algumas dúvidas e solicitar informações adicionais.</div>
        </div>
        <div class="div-passo">
          <div class="div-numero">
            <div class="text-block-18">3</div>
          </div>
          <div class="text-block-17"><strong class="bold-text-7">Negociação</strong><br>Depois de analisar a sua oferta e o terreno, partimos para o processo de negociação.</div>
        </div>
      </div>
      <div class="columns-12 w-row">
        <div class="column-34 w-col w-col-6">
          <div data-w-id="b918f43e-2e20-6927-26c0-617a3be32ac2" style="opacity:0" class="div-carceristicas-area">
            <h3 class="heading-9">Características das áreas de interesse:</h3>
            <p class="paragraph-19">A Urba busca por áreas com mais de 120.000 m², conectadas à malha urbana de municípios com mais de 60.000 habitantes ou estrategicamente localizadas. A preferência é por áreas localizadas no Estado de São Paulo, mas estamos abertos a propostas em todo o Brasil. O terreno precisa ter as seguintes características:</p>
            <ul class="list-2">
              <li class="list-item-3">Áreas inseridas no perímetro urbano</li>
              <li class="list-item-3">Zoneamento com permissão para lotes de até 250m²</li>
            </ul>
          </div>
        </div>
        <div class="column-41 w-col w-col-6">
          <div data-w-id="0fea336a-c9a4-f3be-b5f7-36dbb24e96b0" style="opacity:0" class="div-carceristicas-area _2">
            <h3 class="heading-9">Avaliação do terreno:</h3>
            <p class="paragraph-19">Estas são as informações que precisamos para analisar o seu terreno:</p>
            <ul class="list-2">
              <li class="list-item-3">Demarcação da área - arquivo do Google Earth (kmz ou kml)</li>
              <li class="list-item-3">Localização da área - arquivo do Google Earth</li>
              <li class="list-item-3">Matrícula do imóvel</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="formulario" class="formulario venda">
    <div class="container-padrao">
      <div class="div-forms interna">
        <h2 class="heading-2 forms">Ficou interessado? <strong class="destaque-h2">Vamos conversar!</strong></h2>
        <p class="paragraph-20">Preencha o formulário a seguir com as suas informações pessoais e as especificações do terreno. Vamos analisá-las e retornar o contato em breve.</p>
        <div class="w-form">
          <form id="venda-area-form" name="email-form" data-name="Email Form" class="form-2 venda">
            <div class="columns-9 w-row">
              <div class="w-col w-col-6"><input type="text" class="text-field-2 w-input" maxlength="256" name="nome" data-name="Nome" placeholder="Nome" id="nome-va" required=""></div>
              <div class="w-col w-col-6"><input type="email" class="text-field-2 w-input" maxlength="256" name="email" data-name="E Mail" placeholder="E-mail" id="email-va" required=""></div>
            </div>
            <div class="columns-10 w-row">
              <div class="w-col w-col-6"><select id="estado-va" name="estado" data-name="Estado" class="escolha-cidade uf w-select"><option value=""></option></select></div>
              <div class="w-col w-col-6"><select id="cidade-va" name="cidade" data-name="Cidade" class="escolha-cidade uf w-select"></select></div>
            </div>
            <div class="columns-10 w-row">
             <div class="w-col w-col-6"><input type="tel" class="text-field-2 w-input" minlength="15" maxlength="15" onkeypress="MascaraTelefone(this);" name="telefone" data-name="Telefone" placeholder="Telefone" id="telefone-va" required=""></div>
              <div class="column-32 w-col w-col-6"><input type="text" class="text-field-2 w-input" maxlength="256" name="tamanho-do-Terreno" data-name="Tamanho do Terreno" placeholder="Tamanho do Terreno" id="tamanho-do-Terreno" required=""></div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-6">
                <div class="w-row">
                  <div class="w-col w-col-4"><label class="field-label">Proprietário ou corretor?</label></div>
                  <div class="column-42 w-clearfix w-col w-col-8"><label class="radio-button-field-2 w-radio"><input type="radio" data-name="Proprietário ou corretor?" id="Proprietario" name="proprietario-ou-corretor" value="Proprietário" class="w-form-formradioinput w-radio-input"><span for="Proprietário" class="radio-button-label w-form-label">Proprietário</span></label><label class="radio-button-field-2 w-radio"><input type="radio" data-name="Proprietário ou corretor?" id="Corretor" name="proprietario-ou-corretor" value="Corretor" class="w-form-formradioinput w-radio-input"><span for="Corretor" class="radio-button-label w-form-label">Corretor</span></label></div>
                </div>
              </div>
              <div class="column-32 w-col w-col-6"><input type="text" class="text-field-2 w-input" maxlength="256" name="Localiza-o-no-Google-Earth" data-name="Localização no Google Earth" placeholder="Localização: (endereço, coordenada geográfica, Google Maps)" id="localizacao-va"  required=""></div>
            </div>
            <div class="w-row">
              <div class="w-col" style="color: #a5a5a5;">
              <!--<p>Precisamos dos seus dados para manter contato com você e prosseguir com seu atendimento, de acordo com nossa <a href="https://mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>-->
              <p>Aceito receber via WhatsApp, ligação, e-mail e SMS, o contato da marca MRV&CO com novidades sobre o terreno proposto para a venda. Aceito também receber ações de marketing, ofertas de produto e serviços. Estou de acordo com as formas de tratamento de dados realizados pela marca MRV&CO, conforme sua <a href="https://www.mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>
              <label class="checkbox-button-field-2 w-checkbox"><input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" value="Ok, entendi!" class="w-form-formcheckboxinput w-checkbox-input"><span for="Proprietário" class="checkbox-button-label w-form-label">Ok, entendi!</span>
              </label>
              </div>
            </div>
            <input type="submit" value="Enviar" data-wait="Aguarde..." class="submit-button-2 w-button"></form>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>
  <script type="text/javascript">     
    jQuery(document).ready(function () {    
      jQuery.getJSON('<?=get_stylesheet_directory_uri()?>/js/estados_cidades.js', function (data) {
        var items = [];
        var options = '<option value="" disabled selected>Estado</option>';  
        jQuery.each(data, function (key, val) {
          options += '<option value="' + val.nome + '">' + val.nome + '</option>';
        });         
        jQuery("#estado-va").html(options);     
        jQuery("#estado-va").change(function () {    
          var options_cidades = '';
          var str = "";
          jQuery("#estado-va option:selected").each(function () {
            str += jQuery(this).text();
          });
          jQuery.each(data, function (key, val) {
            if(val.nome == str) {             
              jQuery.each(val.cidades, function (key_city, val_city) {
                options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
              });             
            }
          });
          jQuery("#cidade-va").html(options_cidades);
        }).change();
      });
    });
  </script>