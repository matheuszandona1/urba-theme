        
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
                { name: 'identificador', value: 'Vizinho Premiado - Indicou' },
            ];
        } else {
            alert('Insira um e-mail e nome completo válido!');
        }

        // adicionar as informações dos campos em data_array
        data_array = build_rd_data( tab.find(':input'), data_array );
        console.log(data_array);   
        if( $(tab).index() == 1 && $(data_array).length == 10){
            console.log(data_array.length);
            window.location = "https://vivaurba.com.br/agradecimento/";
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
        //             window.location = "https://frstfalconi.com/sucesso/";
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