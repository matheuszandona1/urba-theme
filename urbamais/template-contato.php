<?php
/*
Template Name: Página Contato
*/
?>
<?php get_header(); ?>
  <div class="contact">
    <div class="container-padrao">
      <div class="col-contato w-row">
        <div class="column-45 w-col w-col-7">
          <h1 class="heading-13">Estamos prontos <strong class="destaque-h2">para te ajudar</strong>.</h1>
          <p class="paragraph-26">Se você ainda tem dúvidas, basta preencher o form ao lado, informar o motivo do contato e nós daremos um retorno.</p>
        </div>
        <div class="w-col w-col-5">
          <div class="div-forms-contato">
            <!--<div class="" style="display: none;">
              <form id="form-contato" name="form-contato" class="form-5"><input type="text" class="text-field _2 w-input" maxlength="256" name="nome" data-name="Nome" placeholder="Nome" id="nome-fc" required=""><input type="email" class="text-field _2 w-input" maxlength="256" name="email" data-name="E-mail" placeholder="E-mail" id="email-fc" required=""><input type="tel" class="text-field _2 w-input"  minlength="9" maxlength="15" onkeypress="MascaraTelefone(this);" name="telefone" data-name="Telefone" placeholder="Telefone" id="telefone-fc" required=""><select id="Motivo-do-Contato" name="Motivo-do-Contato" data-name="Motivo do Contato" class="escolha-cidade motivo-contato w-select"><option value="Motivo do Contato">Motivo do Contato</option><option value="Relacionamento">Relacionamento</option><option value="Financeiro">Financeiro</option><option value="Trabalhe Conosco">Trabalhe Conosco</option><option value="Duvidas">Dúvidas</option></select><input style="display: none;" type="file" name="curriculo"><textarea placeholder="Mensagem" maxlength="5000" id="mensagem-fc" name="mensagem" data-name="Mensagem" class="textarea w-input"></textarea><input type="submit" value="Enviar" data-wait="Aguarde..." class="submit-button w-button"></form>
            </div>-->
            <div >
            	<?= do_shortcode('[contact-form-7 id="519" title="Formulário de contato"]') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>