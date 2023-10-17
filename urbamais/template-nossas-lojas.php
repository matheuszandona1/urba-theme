<?php
/*
Template Name: Página Nossas Lojas
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
      <div id="buscador">
        <?php echo do_shortcode('[VO-LOCATOR]'); ?>
      </div>
    <!--
      <div class="w-form">
        <form id="email-form-2" name="email-form-2" data-name="Email Form 2">
          <div class="columns-14 w-row">
            <div class="column-36 w-col w-col-2"></div>
            <div class="column-35 w-col w-col-6"><select id="field" name="field" data-name="Field" class="escolha-cidade lojas w-select"><option value="Escolha a cidade">Escolha a cidade...</option><option value="Álvares Machado-SP">Álvares Machado-SP</option><option value="Amparo-SP">Amparo-SP</option><option value="Araraquara-SP">Araraquara-SP</option><option value="Ribeirão Preto-SP">Ribeirão Preto-SP</option><option value="Campos dos Goytacazes-RJ">Campos dos Goytacazes-RJ</option><option value="Feira de Santana-BA">Feira de Santana-BA</option><option value="Campina Grande-PB">Campina Grande-PB</option></select></div>
            <div class="column-35 w-col w-col-3"><a href="#" class="button-7 w-button" data-ix="open-lojas">buscar</a></div>
            <div class="w-col w-col-1"></div>
          </div>
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
      <div class="div-lojas">
        <div class="w-row">
          <div class="column-43 w-col w-col-6">
            <div class="div-loja _1">
              <div class="text-block-24">Nome Loja 01</div>
              <div class="endereco">Rua Nome da Rua, 5555 - Bairro Nome</div>
              <div class="telefone">(55) 5555-5555</div>
            </div>
            <div class="div-loja">
              <div class="text-block-24">Nome Loja 02</div>
              <div class="endereco">Rua Nome da Rua, 5555 - Bairro Nome</div>
              <div class="telefone">(55) 5555-5555</div>
            </div>
            <div class="div-loja">
              <div class="text-block-24">Nome Loja 03</div>
              <div class="endereco">Rua Nome da Rua, 5555 - Bairro Nome</div>
              <div class="telefone">(55) 5555-5555</div>
            </div>
          </div>
          <div class="column-44 w-col w-col-6">
            <div class="w-widget w-widget-map"></div>
          </div>
        </div>
      </div>
    -->
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