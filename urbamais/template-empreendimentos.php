<?php
/*
Template Name: Empreendimentos
Template Post Type: page, loteamento
*/
?>
<?php get_header(); ?>
<style>
  #hero-form .container-padrao {
    height: 500px;
  }

  .hero-landing.regatas {
    height: auto;
    padding-top: 250px;
    padding-bottom: 100px;
  }

  .heading-lp {
    width: 100%;
    margin-top: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    color: #fff;
  }

  .destaque-lp {
    display: inline-block;
    font-size: 35px;
    line-height: 45px;
    font-weight: 600;
  }

  h2 {
    margin-top: 50px;
    margin-bottom: 0px;
    color: #fff;
    font-size: 16px;
    line-height: 20px;
    font-weight: 300;
  }

  .bloco_consentimento a {
    color: #ff8b22;
  }

  .texto-politica {
    font-size: 10px;
  }

  @media (max-width: 767px) {
    .hero-landing.regatas {
      height: auto;
      padding-top: 50px;
    }

    #hero-form .container-padrao {
      height: auto;
    }

    .destaque-lp {
      font-size: 22px;
    }

    h2 {
      margin-top: 20px;
    }
  }
</style>
  <section id="hero-form" class="hero-landing regatas" style="background-image: linear-gradient(90deg, rgba(3, 3, 3, 0.5), rgba(49, 49, 49, 0) 57%), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= get_stylesheet_directory_uri()?>/images/empreendimentos.png);">
    <div class="container-padrao">
      <div class="div-info-hero">
        <div class="w-row">
          <div class="col-text w-col w-col-6">
            <h1 class="heading-lp"><strong class="destaque-lp">Cadastre-se para receber mais informações sobre o endereço do seu futuro lar</strong></h1>
            <h2>A Urba desenvolve loteamentos de alta qualidade para você ser feliz como merece no seu futuro endereço.</h2>
          </div>
          <div class="col-forms w-col w-col-6">
            <div class="div-forms-hero">
                <form id="interesse-loteamento-lp" name="email-form" data-name="Email Form" class="form-7">
                  <label for="name" class="label-form-lp">Nome</label><input type="text" class="campo-form-lp w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name" required>
                  <label for="E-mail-2" class="label-form-lp">E-mail</label><input type="email" class="campo-form-lp w-input" maxlength="256" name="E-mail" data-name="E-mail" id="E-mail-2" required>
                  <label for="Telefone" class="label-form-lp">WhatsApp</label><input type="tel" class="campo-form-lp w-input" minlength="9" maxlength="15" onkeypress="MascaraTelefone(this);" name="Telefone" data-name="Telefone" id="Telefone" required>
                  <!--<label for="Tempo" class="label-form-lp">Em quanto tempo você tem interesse em comprar seu terreno?</label>
                  <select id="tempo-regatas" name="tempo" data-name="tempo" class="select-field-4 w-select" required>
                    <option value="Esse mês">Esse mês</option>
                    <option value="Nos próximos 3 meses">Nos próximos 3 meses</option>
                    <option value="Entre os próximos 3 e 12 meses">Entre os próximos 3 e 12 meses</option>
                    <option value="Não tenho interesse, estou apenas pesquisando">Não tenho interesse, estou apenas pesquisando</option>
                  </select>-->
                  <label for="Empreendimento" class="label-form-lp">Qual empreendimento do seu interesse?</label>
                  <select id="empreendimento" name="tempo" data-name="tempo" class="select-field-4 w-select" required>
                  <option value="">Escolher</option>
                  <?php while( have_rows('empreendimento') ): the_row();
                      $nome = get_sub_field('nome');
                      $id = get_sub_field('id');
                      ?>
                      <option value="<?= $nome ?>" data-idempreendimento="<?= $id ?>"><?= $nome ?></option>
                  <?php endwhile; ?>
                  </select>
                  <div class="w-row bloco_consentimento">
                    <div class="w-col">
                      <p class="texto-politica">Aceito receber via Whatsapp, ligação, email e outras formas de contato da MRV&CO, com ações de marketing, ofertas de produto e serviços. Estou de acordo com as formas de tratamento de dados realizados pela MRV&CO, conforme sua <a href="https://mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>
                      <label class="checkbox-button-field-2 w-checkbox">
                        <input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" value="Ok, entendi!" class="w-form-formcheckboxinput w-checkbox-input" required>
                        <span for="Proprietário" class="checkbox-button-label w-form-label" id="texto-politica">Ok, entendi!</span>
                      </label>
                    </div>
                  </div>
                    <input type="submit" value="falar com um consultor" data-wait="Aguarde..." class="enviar-form-lp w-button"></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tag-breve-lan-amento comercial"><div class="breve-lancamento">Breve Lançamento</div></div>
    </div>
  </section>
<?php get_footer(); ?>
<script>
  jQuery('#interesse-loteamento-lp').submit(function(e){
    e.preventDefault();
    jQuery('#interesse-loteamento-lp input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#E-mail-2').val() && regex.test(jQuery('#E-mail-2').val()) && jQuery('#name').val() && jQuery('#Telefone').val() && jQuery('input[name=consentimento-de-comunicacao]:checked').length>0) {
      var data_array = [
        { name: 'nome', value: jQuery('#interesse-loteamento-lp #name').val() },
        { name: 'telefone', value: jQuery('#interesse-loteamento-lp #Telefone').val() },
        { name: 'email', value: jQuery('#interesse-loteamento-lp #E-mail-2').val() },
        /*{ name: 'tempo', value: jQuery('#interesse-loteamento-lp #tempo-regatas option:selected' ).val() },*/
        { name: 'empreendimento', value: jQuery('#interesse-loteamento-lp #empreendimento option:selected' ).val() },
        { name: 'idempreendimento', value: jQuery('#interesse-loteamento-lp #empreendimento option:selected' ).attr('data-idempreendimento') },
        { name: 'consentimento-de-comunicacao', value: 'granted' },
        { name: 'identificador', value: "form-generico-empreendimentos" },
        { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
      ];
      RdIntegration.post(data_array, function(){
        window.location = "https://urba.com.br/obrigado/";
        return false;
      });
    } else {
        jQuery('#interesse-loteamento-lp input[type=submit]').val('Enviar');
        alert('Preencha seus dados');
    }
});
</script>