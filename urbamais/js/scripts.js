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
/*document.addEventListener( 'wpcf7submit', function( event ) {
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
}, false );*/

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
            { name: 'nome', value: jQuery('#vizinho-premiado #nome-vp').val() },
            { name: 'empreendimento-indicou', value: jQuery('#vizinho-premiado #idempreendimento').val() },
            { name: 'email', value: jQuery('#vizinho-premiado #email-vp').val() },
            { name: 'cpf-indicou-rel', value: jQuery('#vizinho-premiado #cpf-vp').val() },
            { name: 'nome-indicado', value: jQuery('#vizinho-premiado #nome-vizinho-vp').val() },
            { name: 'nome-indicado-rel', value: jQuery('#vizinho-premiado #nome-vizinho-vp').val() },
            { name: 'telefone-indicado', value: jQuery('#vizinho-premiado #telefone-vizinho-vp').val() },
            { name: 'telefone-indicado-rel', value: jQuery('#vizinho-premiado #telefone-vizinho-vp').val() },
            { name: 'email-indicado', value: jQuery('#vizinho-premiado #email-vizinho-vp').val() },
            { name: 'email-indicado-rel', value: jQuery('#vizinho-premiado #email-vizinho-vp').val() },
            { name: 'empreendimento-indicado', value: jQuery('#vizinho-premiado #empreendimento-vizinho-vp').val() },
            { name: 'identificador', value: 'Vizinho Premiado - Indicou' },
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        var data_array2 = [
            { name: 'nome', value: jQuery('#vizinho-premiado #nome-vizinho-vp').val() },
            { name: 'empreendimento-indicado', value: jQuery('#vizinho-premiado #empreendimento-vizinho-vp').val() },
            { name: 'email', value: jQuery('#vizinho-premiado #email-vizinho-vp').val() },
            { name: 'cpf-indicou', value: jQuery('#vizinho-premiado #cpf-vp').val() },
            { name: 'cpf-indicou-rel', value: jQuery('#vizinho-premiado #cpf-vp').val() },
            { name: 'nome-indicou', value: jQuery('#vizinho-premiado #nome-vp').val() },
            { name: 'nome-indicou-rel', value: jQuery('#vizinho-premiado #nome-vp').val() },
            { name: 'telefone-indicado-rel', value: jQuery('#vizinho-premiado #telefone-vizinho-vp').val() },
            { name: 'email-indicou', value: jQuery('#vizinho-premiado #email-vp').val() },
            { name: 'email-indicou-rel', value: jQuery('#vizinho-premiado #email-vp').val() },
            { name: 'empreendimento-indicou', value: jQuery('#vizinho-premiado #idempreendimento').val() },
            { name: 'identificador', value: 'Vizinho Premiado - Indicado' },
            { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
          ];
        RdIntegration.post(data_array1, function(){
          RdIntegration.post(data_array2, function(){
              window.location = TYP_URL; //remover
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
    };console.log(valida_consentimento);

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
        
        jQuery(document).ready(function($){

    $('#prevBtn').on('click', function(){
        nextPrev(-1);
    });

    $('#nextBtn').on('click', function(){
        nextPrev(1);
    });

    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Enviar";
        } else {
            document.getElementById("nextBtn").innerHTML = "Próximo";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        $(x[currentTab]).find('input').each(function(){
            //console.log( $(this).val() );
        });
        envioRD($(x[currentTab]));
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            /*document.getElementById("regForm").submit();*/
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        valid = true;
        var message = '';
      
        // verificar inputs text da tab
        for (i = 0; i < y.length; i++) {
          if( y[i].tagName == 'input' && (y[i].type == 'text' || y[i].type == 'email') ){
            //console.log( 'text: ' + $(y[i]).val() );
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              valid = false;
            }
          }
        }
      
        // verificar select da tab
        $(x[currentTab]).find('select').each(function(){
          //console.log( 'select: ' + $(this).val() );
          if( $(this).val() == '' ){
              valid = false;
              message += $(this).attr('data-error-message') + "\n";
          }
        });
      
        // verificar checkbox da tab
        if( $(x[currentTab]).find('input[type="checkbox"]').length > 0 ){
          var checkboxes = $(x[currentTab]).find('input[type="checkbox"]:checked');
          //console.log(checkboxes);
          if( checkboxes.length == 0 ){
            valid = false;
              message += $(x[currentTab]).find('input[type="checkbox"]:first').attr('data-error-message') + "\n";
          }
        }
      
        // verificar radios da tab
        if( $(x[currentTab]).find('input[type="radio"]').length > 0 ){
          var radionames = [];
          $(x[currentTab]).find('input[type="radio"]').each(function(){
            var name = $(this).attr('name');
            if(radionames.indexOf( name ) === -1) {
                radionames.push(name);
            }
          });
          $.each(radionames, function( index, value ) {
            var radios = $('input[name=' + value + ']:checked');
            //console.log(radios);
            if( radios.length == 0 ){
              valid = false;
              message += $('input[name=' + value + ']:first').attr('data-error-message') + "\n";
            }
          });
        }
      
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        else{
          alert( message );
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }


    /**
     * Montar data_array para envio no RD
     * 
     */
    //  $(document).on('click', 'button', function(){
        
    // // Regex para duas strings, separadas com espaço e com no mínimo 3 caracteres. Aceita acentuação e rejeita números.
    
    // // Faz a validacao do regex no campo indicado
    // if(!(nomeSobrenome.test(campo))){
    //         alert('Inválido');      
    //     }
    // });
    function envioRD(tab) {
        console.log( $(tab).index() );

        // validar email
        var campo = $('#cf_nome_indicou').val(); // Pega valor do campo
        // Regex para duas strings, separadas com espaço e com no mínimo 3 caracteres. Aceita acentuação e rejeita números.
    nomeSobrenome = /\b[A-Za-zÀ-ú][A-Za-zÀ-ú]+,?\s[A-Za-zÀ-ú][A-Za-zÀ-ú]{2,19}\b/gi;
        var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if ( jQuery('#email').val() && regex.test(jQuery('#email').val()) && (nomeSobrenome.test(campo)) ) {
            var data_array = [
                { name: 'email', value: jQuery('#email').val() },
                { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' },
                { name: 'identificador', value: 'LP VIZINHO PREMIADO' },
            ];
        } else {
            alert('Insira um e-mail e nomce completo válido!');
        }

        // adicionar as informações dos campos em data_array
        data_array = build_rd_data( tab.find(':input'), data_array );
        console.log(data_array);   
        if( $(tab).index() == 1 ){
            window.location = "https://vivaurba.com.br/agradecimento";
        };


        // enviar o RD da etapa atual
        // RdIntegration.post(data_array, function(){
            
        //     if( $(tab).index() == 2 ){
        //         console.log('last step');
        //         var pipedrive_array = [
        //             { name: 'email', value: jQuery('#email').val() },
        //             { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' },
        //             { name: 'identificador', value: 'LP VIZINHO PREMIADO' },
        //         ];
        //         pipedrive_array = build_rd_data( $('#regForm :input'), pipedrive_array );
        //         console.log(pipedrive_array);
        //         RdIntegration.post(pipedrive_array, function(){
        //             window.location = "https://vivaurba.com.br/agradecimento";
        //             return false;
        //         });
        //     }
        // });
    }

    /**
     * Adicionar valor dos campos ao array de dados para o RD
     * 
     * @param elems Seleção de elementos jquery para o loop
     * @param data_array array de dados a ser populado
     * 
     */
    function build_rd_data( elems, data_array ){
        elems.each(function(){
            /*console.log( $(this).attr('name') );
            console.log( $(this).attr('type') );*/
            if( $(this).attr('id') != 'email' ){
            
            if( $(this).is('input[type="text"]') ){
                data_array.push({
                    name: $(this).attr('name'),
                    value: $(this).val()
                });
            }
            else if( $(this).is('input[type="hidden"]') ){
                data_array.push({
                    name: $(this).attr('name'),
                    value: $(this).val()
                });
            }
            else if( $(this).is('input[type="radio"]:checked') ){
                data_array.push({
                    name: $(this).attr('name'),
                    value: $(this).val()
                });
            }
            else if( $(this).is('input[type="checkbox"]:checked') ){
                data_array.push({
                    name: $(this).attr('name'),
                    value: $(this).val()
                });
            }
            else if( $(this).is('select') ){
                data_array.push({
                    name: $(this).attr('name'),
                    value: $(this).val()
                });
            }
            
            }
        });
        return data_array;
    }

    $('#regForm').submit(function(event){
        event.preventDefault();
    });

    // capturar valor UTM
    function ingage_read_cookie(a) {
        var b = a + "=";
        var c = document.cookie.split(";");
        for (var d = 0; d < c.length; d++) {
            var e = c[d];
            while (e.charAt(0) == " ")
                e = e.substring(1, e.length);
            if (e.indexOf(b) == 0) {
                return e.substring(b.length, e.length)
            }
        }
        return null;
    }
    try {
        document.getElementById("c_utmz").value = ingage_read_cookie("__utmz");
    } catch (err) {}
    console.log(ingage_read_cookie("__utmz"));


});

function mask(o, f) {
  setTimeout(function() {
    var v = mphone(o.value);
    if (v != o.value) {
      o.value = v;
    }
  }, 1);
}

function mphone(v) {
  var r = v.replace(/\D/g, "");
  r = r.replace(/^0/, "");
  if (r.length > 10) {
    r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
  } else if (r.length > 5) {
    r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
  } else if (r.length > 2) {
    r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
  } else {
    r = r.replace(/^(\d*)/, "($1");
  }
  return r;
}

//adiciona mascara de cnpj
function MascaraCNPJ(cnpj){
    if(mascaraInteiro(cnpj)==false){
            event.returnValue = false;
    }       
    return formataCampo(cnpj, '00.000.000/0000-00', event);
}

//adiciona mascara de cep
function MascaraCep(cep){
            if(mascaraInteiro(cep)==false){
            event.returnValue = false;
    }       
    return formataCampo(cep, '00.000-000', event);
}

//adiciona mascara de data
function MascaraData(data){
    if(mascaraInteiro(data)==false){
            event.returnValue = false;
    }       
    return formataCampo(data, '00/00/0000', event);
}

//adiciona mascara ao telefone
function MascaraTelefone(tel){  
    if(mascaraInteiro(tel)==false){
            event.returnValue = false;
    }       
    return formataCampo(tel, '(00) 0000-0000', event);
}

//adiciona mascara ao CPF
function MascaraCPF(cpf){
    if(mascaraInteiro(cpf)==false){
            event.returnValue = false;
    }       
    return formataCampo(cpf, '000.000.000-00', event);
}

//valida telefone
function ValidaTelefone(tel){
    exp = /\(\d{2}\)\ \d{4}\-\d{4}/
    if(!exp.test(tel.value))
            alert('Numero de Telefone Invalido!');
}

//valida CEP
function ValidaCep(cep){
    exp = /\d{2}\.\d{3}\-\d{3}/
    if(!exp.test(cep.value))
            alert('Numero de Cep Invalido!');               
}

//valida data
function ValidaData(data){
    exp = /\d{2}\/\d{2}\/\d{4}/
    if(!exp.test(data.value))
            alert('Data Invalida!');                        
}

//valida o CPF digitado
function ValidarCPF(Objcpf){
    var cpf = Objcpf.value;
    exp = /\.|\-/g
    cpf = cpf.toString().replace( exp, "" ); 
    var digitoDigitado = eval(cpf.charAt(9)+cpf.charAt(10));
    var soma1=0, soma2=0;
    var vlr =11;

    for(i=0;i<9;i++){
            soma1+=eval(cpf.charAt(i)*(vlr-1));
            soma2+=eval(cpf.charAt(i)*vlr);
            vlr--;
    }       
    soma1 = (((soma1*10)%11)==10 ? 0:((soma1*10)%11));
    soma2=(((soma2+(2*soma1))*10)%11);

    var digitoGerado=(soma1*10)+soma2;
    if(digitoGerado!=digitoDigitado)        
            alert('CPF Invalido!');         
}

//valida numero inteiro com mascara
function mascaraInteiro(){
    if (event.keyCode < 48 || event.keyCode > 57){
            event.returnValue = false;
            return false;
    }
    return true;
}

//valida o CNPJ digitado
function ValidarCNPJ(ObjCnpj){
    var cnpj = ObjCnpj.value;
    var valida = new Array(6,5,4,3,2,9,8,7,6,5,4,3,2);
    var dig1= new Number;
    var dig2= new Number;

    exp = /\.|\-|\//g
    cnpj = cnpj.toString().replace( exp, "" ); 
    var digito = new Number(eval(cnpj.charAt(12)+cnpj.charAt(13)));

    for(i = 0; i<valida.length; i++){
            dig1 += (i>0? (cnpj.charAt(i-1)*valida[i]):0);  
            dig2 += cnpj.charAt(i)*valida[i];       
    }
    dig1 = (((dig1%11)<2)? 0:(11-(dig1%11)));
    dig2 = (((dig2%11)<2)? 0:(11-(dig2%11)));

    if(((dig1*10)+dig2) != digito)  
            alert('CNPJ Invalido!');

}

//formata de forma generica os campos
function formataCampo(campo, Mascara, evento) { 
    var boleanoMascara; 

    var Digitato = evento.keyCode;
    exp = /\-|\.|\/|\(|\)| /g
    campoSoNumeros = campo.value.toString().replace( exp, "" ); 

    var posicaoCampo = 0;    
    var NovoValorCampo="";
    var TamanhoMascara = campoSoNumeros.length;; 

    if (Digitato != 8) { // backspace 
            for(i=0; i<= TamanhoMascara; i++) { 
                    boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                                            || (Mascara.charAt(i) == "/")) 
                    boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
                                                            || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
                    if (boleanoMascara) { 
                            NovoValorCampo += Mascara.charAt(i); 
                              TamanhoMascara++;
                    }else { 
                            NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
                            posicaoCampo++; 
                      }              
              }      
            campo.value = NovoValorCampo;
              return true; 
    }else { 
            return true; 
    }
}
function verificaNome(){
    nome = $("#cf_nome_indicou, #cf_nome_do_seu_vizinho_premiado").val();
    
    if(nome.match(/^[a-zA-Z\u00C0-\u017F´]+\s+[a-zA-Z\u00C0-\u017F´]{0,}$/) && nome.trim().split(' ').length == 2){
        return nome;
    }else{
        alert("Insira um nome e sobrenome válido");
    }
 }

//  const masks = {
//     cpf (value) {
//         return value
//         .replace(/\D/g, '')
//         .replace(/(\d{3})(\d)/, '$1.$2')
//         .replace(/(\d{3})(\d)/, '$1.$2')
//         .replace(/(\d{3})(\d{1,2})/, '$1-$2')
//         .replace(/(-\d{2})\d+?$/, '$1')
//     }
// }

// document.querySelectorAll('input').forEach(($input) = {
//     const field = $input.dataset.js

//     $input,addEventListener('input', (e) => {
//         e.target.value = masks[field](e.target.value)
//     }, false)
// })

// function inputHandler(masks, max, event) {
// 	var c = event.target;
// 	var v = c.value.replace(/\D/g, '');
// 	var m = c.value.length > max ? 1 : 0;
// 	VMasker(c).unMask();
// 	VMasker(c).maskPattern(masks[m]);
// 	c.value = VMasker.toPattern(v, masks[m]);
// }

// var telMask = ['(99) 9999-99999', '(99) 99999-9999'];
// var tel = document.querySelector('#tel');
// VMasker(tel).maskPattern(telMask[0]);
// tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);

// var docMask = ['999.999.999-999'];
// var doc = document.querySelector('#cf_cpf_indicou"');
// VMasker(doc).maskPattern(docMask[0]);
// doc.addEventListener('input', inputHandler.bind(undefined, docMask, 14), false);