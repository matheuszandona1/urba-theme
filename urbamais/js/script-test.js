jQuery('#form_news_blog').submit(function(e){
    e.preventDefault();
    jQuery('#form_news_blog input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#email_news').val() && regex.test(jQuery('#email_news').val())) {
        var data_array = [
            { name: 'email', value: jQuery('#form_news_blog #email_news').val() }, 
            { name: 'identificador', value: 'Assinatura Newsletter Blog' },
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = TYP_URL;
          return false;
        });   
    } else {
        jQuery('#form_news_blog input[type=submit]').val('Quero Assinar!');
        alert('Preencha seu email');
    }
});
jQuery('#form-contato-imediato').submit(function(e){
    e.preventDefault();
    jQuery('#form-contato-imediato input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#email-ci').val() && regex.test(jQuery('#email-ci').val()) && jQuery('#nome-ci').val() && jQuery('#telefone-ci').val()) {
        var data_array = [
            { name: 'nome', value: jQuery('#form-contato-imediato #nome-ci').val() },
            { name: 'telefone', value: jQuery('#form-contato-imediato #telefone-ci').val() },
            { name: 'email', value: jQuery('#form-contato-imediato #email-ci').val() },
            { name: 'soucliente', value: jQuery('#form-contato-imediato #soucliente-ci').is(":checked") },
            { name: 'forma-de-contato', value: 'Entrem em contato comigo mais tarde' },
            { name: 'identificador', value: 'Contato Rápido' },
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = TYP_URL;
          return false;
        });   
    } else {
        jQuery('#form-contato-imediato input[type=submit]').val('Entrem em contato comigo mais tarde');
        alert('Preencha seus dados');
    }
});
jQuery('#form-contato-imediato .tipo-contato').click(function(e){
    jQuery('#form-contato-imediato input[type=submit]').val('processando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#email-ci').val() && regex.test(jQuery('#email-ci').val()) && jQuery('#nome-ci').val() && jQuery('#telefone-ci').val()) {
        var data_array = [
            { name: 'nome', value: jQuery('#form-contato-imediato #nome-ci').val() },
            { name: 'telefone', value: jQuery('#form-contato-imediato #telefone-ci').val() },
            { name: 'email', value: jQuery('#form-contato-imediato #email-ci').val() },
            { name: 'soucliente', value: jQuery('#form-contato-imediato #soucliente-ci').is(":checked") },
            { name: 'forma-de-contato', value: jQuery('#form-contato-imediato input[name=Forma-de-contato]:checked').val() },
            { name: 'identificador', value: 'Contato Rápido' },
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          if ( jQuery('#form-contato-imediato input:radio[name=Forma-de-contato]:checked').val() === "Whatsapp") {
            jQuery('#linkwpp').get(0).click();
            jQuery('.contato-imediato .div-close').click();
            jQuery('#form-contato-imediato input[type=submit]').val('Entrem em contato comigo mais tarde');
        } else {
            jQuery('#linkchat').get(0).click();
            jQuery('.contato-imediato .div-close').click();
            jQuery('#form-contato-imediato input[type=submit]').val('Entrem em contato comigo mais tarde');
        }          
          return false;
        });   
    } else {
        jQuery('#form-contato-imediato input[type=submit]').val('Entrem em contato comigo mais tarde');
        alert('Preencha seus dados');
    }
});
jQuery('#form-contato-imediato-mobile').submit(function(e){
    e.preventDefault();
    jQuery('#form-contato-imediato-mobile input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#email-cim').val() && regex.test(jQuery('#email-cim').val()) && jQuery('#nome-cim').val() && jQuery('#telefone-cim').val()) {
        var data_array = [
            { name: 'nome', value: jQuery('#form-contato-imediato-mobile #nome-cim').val() },
            { name: 'telefone', value: jQuery('#form-contato-imediato-mobile #telefone-cim').val() },
            { name: 'email', value: jQuery('#form-contato-imediato-mobile #email-cim').val() },
            { name: 'soucliente', value: jQuery('#form-contato-imediato-mobile #soucliente-cim').is(":checked") },
            { name: 'forma-de-contato', value: jQuery('#form-contato-imediato-mobile input[name=Forma-de-contato]').val() },
            { name: 'identificador', value: 'Contato Rápido' },
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = TYP_URL;
          return false;
        });   
    } else {
        jQuery('#form-contato-imediato-mobile input[type=submit]').val('Entrem em contato comigo mais tarde');
        alert('Preencha seus dados');
    }
});
jQuery('#form-contato-imediato-mobile .tipo-contato').click(function(e){
    jQuery('#form-contato-imediato-mobile input[type=submit]').val('processando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#email-cim').val() && regex.test(jQuery('#email-cim').val()) && jQuery('#nome-cim').val() && jQuery('#telefone-cim').val()) {
        var data_array = [
            { name: 'nome', value: jQuery('#form-contato-imediato-mobile #nome-cim').val() },
            { name: 'telefone', value: jQuery('#form-contato-imediato-mobile #telefone-cim').val() },
            { name: 'email', value: jQuery('#form-contato-imediato-mobile #email-cim').val() },
            { name: 'soucliente', value: jQuery('#form-contato-imediato-mobile #soucliente-cim').is(":checked") },
            { name: 'forma-de-contato', value: jQuery('#form-contato-imediato-mobile input[name=Forma-de-contato]:checked').val() },
            { name: 'identificador', value: 'Contato Rápido' },
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          if ( jQuery('#form-contato-imediato-mobile input:radio[name=Forma-de-contato]:checked').val() === "Whatsapp") {           
            //jQuery('#linkwpp').get(0).click();
            window.location = "https://api.whatsapp.com/send?phone=5531975000028";
            jQuery('.contato-imediato-mobile .div-close-mobile').click();
            jQuery('#form-contato-imediato-mobile input[type=submit]').val('Entrem em contato comigo mais tarde');
        } else {
            //jQuery('#linkchat').get(0).click();
            window.location = "https://chat.directtalk.com.br/static/?chatId=5c4d7ee7-df97-41ef-aa7f-db0d82b2d904";
            jQuery('.contato-imediato-mobile .div-close-mobile').click();
            jQuery('#form-contato-imediato-mobile input[type=submit]').val('Entrem em contato comigo mais tarde');
        }          
          return false;
        });   
    } else {
        jQuery('#form-contato-imediato-mobile input[type=submit]').val('Entrem em contato comigo mais tarde');
        alert('Preencha seus dados');
    }
});
/*jQuery('#form-contato').submit(function(e){
    e.preventDefault();
    jQuery('#form-contato input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#email-fc').val() && regex.test(jQuery('#email-fc').val()) && jQuery('#nome-fc').val() && jQuery('#telefone-fc').val()) {
        var data_array = [
            { name: 'nome', value: jQuery('#form-contato #nome-fc').val() },
            { name: 'telefone', value: jQuery('#form-contato #telefone-fc').val() },
            { name: 'email', value: jQuery('#form-contato #email-fc').val() },
            { name: 'motivo-de-contato', value: jQuery('#form-contato #Motivo-do-Contato').val() },
            { name: 'mensagem', value: jQuery('#form-contato #mensagem-fc').val() },
            { name: 'identificador', value: 'Contato' },
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = TYP_URL;
          return false;
        });   
    } else {
        jQuery('#form-contato input[type=submit]').val('Enviar');
        alert('Preencha seus dados');
    }
});*/
document.addEventListener( 'wpcf7submit', function( event ) {
  console.log('chamou listener wpcf7submit');
  var nome = document.getElementById('nome-fc').value;
  var email = document.getElementById('email-fc').value;
  var telefone = document.getElementById('telefone-fc').value;
  var motivo = document.getElementById('Motivo-do-Contato').value;
  var mensagem = document.getElementById('mensagem-fc').value;
  if (nome != '' && email != '' && telefone != '') {
    var data_array = [
        { name: 'nome', value: jQuery('#form-contato #nome-fc').val() },
        { name: 'telefone', value: jQuery('#form-contato #telefone-fc').val() },
        { name: 'email', value: jQuery('#form-contato #email-fc').val() },
        { name: 'motivo-de-contato', value: jQuery('#form-contato #Motivo-do-Contato').val() },
        { name: 'mensagem', value: jQuery('#form-contato #mensagem-fc').val() },
        { name: 'identificador', value: 'Contato' },
        { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
    ];
    RdIntegration.post(data_array, function(){
          window.location = TYP_URL;
          return false;
    });   
  } else {
    alert('Preencha os campos corretamente!');
  }
}, false );

jQuery('#interesse-loteamento').submit(function(e){
    e.preventDefault();
    jQuery('#interesse-loteamento input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#email-il').val() && regex.test(jQuery('#email-il').val()) && jQuery('#nome-il').val() && jQuery('#telefone-il').val() ) {
        var identificador = 'Interesse Loteamento - '+jQuery('#interesse-loteamento #cidade-il').val();
        var data_array = [
            { name: 'loteamento', value: jQuery('#interesse-loteamento #loteamento-il').val() },
            { name: 'nome', value: jQuery('#interesse-loteamento #nome-il').val() },
            { name: 'telefone', value: jQuery('#interesse-loteamento #telefone-il').val() },
            { name: 'email', value: jQuery('#interesse-loteamento #email-il').val() },
            { name: 'Tempo de Interesse', value: jQuery('#interesse-loteamento #tempo-il').val() },
            { name: 'cidade', value: jQuery('#interesse-loteamento #cidade-il').val() },
            { name: 'idempreendimento', value: jQuery('#interesse-loteamento #idempreendimento').val() },
            { name: 'identificador', value: identificador },
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = TYP_URL;
          return false;
        });   
    } else {
        jQuery('#interesse-loteamento input[type=submit]').val('Enviar');
        alert('Preencha seus dados');
    }
});

jQuery('#vizinho-premiado').submit(function(e){
    e.preventDefault();
    jQuery('#vizinho-premiado input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#email-vp').val() && regex.test(jQuery('#email-vp').val()) && jQuery('#nome-vp').val() && jQuery('#idempreendimento').val() && jQuery('#email-vizinho-vp').val() && regex.test(jQuery('#email-vizinho-vp').val()) && jQuery('#nome-vizinho-vp').val() && jQuery('#telefone-vizinho-vp').val()  && jQuery('#empreendimento-vizinho-vp').val()) {
        var data_array1 = [
            { name: 'cf_nome_indicou', value: jQuery('#vizinho-premiado #nome-vp').val() },
            { name: 'cf_empreendimento_indicou', value: jQuery('#vizinho-premiado #idempreendimento').val() },
            { name: 'cf_email_indicou', value: jQuery('#vizinho-premiado #email-vp').val() },
            { name: 'cf_cpf_indicou', value: jQuery('#vizinho-premiado #cpf-vp').val() },
            { name: 'cf_nome_indicado', value: jQuery('#vizinho-premiado #nome-vizinho-vp').val() },
            { name: 'cf_nome_indicado', value: jQuery('#vizinho-premiado #nome-vizinho-vp').val() },
            { name: 'cf_telefone_indicado', value: jQuery('#vizinho-premiado #telefone-vizinho-vp').val() },
            { name: 'cf_telefone_indicado', value: jQuery('#vizinho-premiado #telefone-vizinho-vp').val() },
            { name: 'cf_email_indicado', value: jQuery('#vizinho-premiado #email-vizinho-vp').val() },
            { name: 'cf_email_indicado', value: jQuery('#vizinho-premiado #email-vizinho-vp').val() },
            { name: 'cf_empreendimento_indicado', value: jQuery('#vizinho-premiado #empreendimento-vizinho-vp').val() },
            { name: 'identificador', value: 'Vizinho Premiado - Indicou' },
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        var data_array2 = [
            { name: 'cf_nome_indicado', value: jQuery('#vizinho-premiado #nome-vizinho-vp').val() },
            { name: 'cf_empreendimento_indicado', value: jQuery('#vizinho-premiado #empreendimento-vizinho-vp').val() },
            { name: 'cf_email_indicado', value: jQuery('#vizinho-premiado #email-vizinho-vp').val() },
            { name: 'cf_cpf_indicou', value: jQuery('#vizinho-premiado #cpf-vp').val() },
            { name: 'cf_cpf_indicou', value: jQuery('#vizinho-premiado #cpf-vp').val() },
            { name: 'cf_nome_indicou', value: jQuery('#vizinho-premiado #nome-vp').val() },
            { name: 'cf_nome_indicou', value: jQuery('#vizinho-premiado #nome-vp').val() },
            { name: 'cf_telefone_indicado', value: jQuery('#vizinho-premiado #telefone-vizinho-vp').val() },
            { name: 'cf_email_indicou', value: jQuery('#vizinho-premiado #email-vp').val() },
            { name: 'cf_email_indicou', value: jQuery('#vizinho-premiado #email-vp').val() },
            { name: 'cf_empreendimento_indicou', value: jQuery('#vizinho-premiado #idempreendimento').val() },
            { name: 'identificador', value: 'Vizinho Premiado - Indicado' },
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array1, function(){
          RdIntegration.post(data_array2, function(){
          		console.log(response);
              window.location = "https://vivaurba.com.br/obrigado/"; 
              return false; //remover
            }); 
        });   
    } else {
        jQuery('#vizinho-premiado input[type=submit]').val('Enviar');
        alert('Preencha todos os dados');
    }
});


jQuery('#venda-area-form').submit(function(e){
    e.preventDefault();
    jQuery('#venda-area-form input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    
    var valida_consentimento = "declined";
    if (jQuery('input[name=consentimento-de-comunicacao]:checked').length>0){
      valida_consentimento = "granted";
    };
    console.log(valida_consentimento);

    if (jQuery('#email-va').val() && regex.test(jQuery('#email-va').val()) && jQuery('#nome-va').val() && jQuery('#telefone-va').val() 
    && jQuery('#cidade-va').val() && jQuery('#estado-va').val() && jQuery('#tamanho-do-Terreno').val() && jQuery('input[name=proprietario-ou-corretor]').val() 
    && jQuery('input[name=consentimento-de-comunicacao]:checked').length > 0) {
        var data_array = [
            { name: 'nome', value: jQuery('#venda-area-form #nome-va').val() },
            { name: 'telefone', value: jQuery('#venda-area-form #telefone-va').val() },
            { name: 'email', value: jQuery('#venda-area-form #email-va').val() },
            { name: 'cidade', value: jQuery('#venda-area-form #cidade-va').val() },
            { name: 'estado', value: jQuery('#venda-area-form #estado-va').val() },
            { name: 'tamanho-terreno', value: jQuery('#venda-area-form #tamanho-do-Terreno').val() },
            { name: 'proprietario-ou-corretor', value: jQuery('#venda-area-form input[name=proprietario-ou-corretor]').val() },
            { name: 'localizacao', value: jQuery('#venda-area-form #localizacao-va').val() },
            { name: 'legal_bases' , value: [
              {
                'category': 'data_processing',
                'type': 'pre_existent_contract'
              },
              {
                'category': 'communications',
                'type': 'consent',
                'status': valida_consentimento
              }
            ]},
            { name: 'identificador', value: 'Venda sua area' },
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array, function(){
          window.location = TYP_URL;
          return false;
        });   
    } else {
        jQuery('#venda-area-form input[type=submit]').val('Enviar');
        alert('Preencha todos os dados');
    }
});