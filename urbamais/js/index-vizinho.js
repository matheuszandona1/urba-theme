jQuery(function ($) {
  $("#dados").on("input", function (e) {
    var cleanValue = $(this).val().replace(/\D/g, ""); // Remove all non-numeric characters

    // Choose the appropriate mask for CPF/CNPJ based on character count
    if (cleanValue.length <= 11) {
      MaskTypeOne(this, e);
    } else {
      MaskTypeTwo(this, e);
    }
  });

  $("#telefone").on("input", function (e) {
    var cleanValue = $(this).val().replace(/\D/g, ""); // Remove all non-numeric characters

    // Choose the appropriate mask for telephone based on character count
    if (cleanValue.length <= 10) {
      MaskTelefone(this, e);
    } else {
      MaskMobileTelefone(this, e);
    }
  });

  // Mask with format: 000.000.000-00
  function MaskTypeOne(input, event) {
    return formataCampo(input, "000.000.000-00", event);
  }

  // Mask with format: 00.000.000/0000-00
  function MaskTypeTwo(input, event) {
    return formataCampo(input, "00.000.000/0000-00", event);
  }

  // Mask with format: (00) 0000-0000
  function MaskTelefone(input, event) {
    return formataCampo(input, "(00) 0000-0000", event);
  }

  // Mask with format: (00) 00000-0000
  function MaskMobileTelefone(input, event) {
    return formataCampo(input, "(00) 00000-0000", event);
  }

  // Envio do lead no form para o RD
  $("#formVizinho").submit(function (e) {
    e.preventDefault();
    $("#formVizinho .button").val("Enviando..");

    var emailRegex =
      /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (
      $("#email").val() &&
      emailRegex.test($("#email").val()) &&
      $("#nome").val() &&
      $("#telefone").val() &&
      $("input[id=checkbox]:checked").length > 0
    ) {
      var data_array = [
        { name: "nome", value: $("#nome").val() },
        { name: "cpf-cnpj", value: $("#dados").val() },
        { name: "telefone", value: $("#telefone").val() },
        { name: "email", value: $("#email").val() },
        {
          name: "empreendimento",
          value: $("#loteamento option:selected").val(),
        },
        {
          name: "idempreendimento",
          value: $("#loteamento option:selected").attr("data-idempreendimento"),
        },
        { name: "amigo", value: $("#amigo").val() },
        { name: "email-amigo", value: $("#email-amigo").val() },
        { name: "consentimento-de-comunicacao", value: "Aceito" },
        { name: "identificador", value: "form-vizinho-premiado" },
        { name: "token_rdstation", value: "ddd19ee74dc5eca035093f12ac6ef0d2" },
      ];

      RdIntegration.post(data_array, function () {
        window.location = "https://urba.com.br/typ-vizinho-premiado/";
        return false;
      });
    } else {
      $("#formVizinho .button").val("Enviar");
      alert("Preencha seus dados corretamente.");
    }
  });
});
