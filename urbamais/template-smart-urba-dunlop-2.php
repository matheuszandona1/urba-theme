<?php
/*
Template Name: Smart Urba Dunlop 2 - Teste Mapa
Template Post Type: page, loteamento
*/
?>

<style>
    /* Style the form */
    #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    padding: 40px;
    width: 70%;
    min-width: 300px;
    }

    /* Style the input fields */
    input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
    background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
    display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
    }

    /* Mark the active step: */
    .step.active {
    opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
    background-color: #04AA6D;
    }
</style>
<form id="regForm" name="form">
  <div class="tab">Name:
      <p><input type="nome" name="nome" id="nome" placeholder="First name..." oninput="this.className = ''"></p>
      <p><input type="sobrenome" name="sobrenome" id="sobrenome" placeholder="Last name..." oninput="this.className = ''"></p>
  </div>

  <div class="tab">Contact Info:
      <p><input type="email" name="email" id="email" placeholder="E-mail..." oninput="this.className = ''"></p>
      <p><input type="telefone" name="telefone" id="telefone" placeholder="Phone..." oninput="this.className = ''"></p>
  </div>

  <div style="overflow:auto;">
      <div style="float:right;">
          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          <input type="submit" value="enviar" id="nextBtn" onclick="nextPrev(1)">
      </div>
  </div>

  <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
  </div>
</form>


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
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
      document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
      document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
  }

  function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
      //...the form gets submitted:
      document.getElementById("regForm").submit();
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
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
      }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
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
</script>

<script>
  jQuery('#regForm').submit(function(e){
    e.preventDefault();
    jQuery('#regForm input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
      var data_array = [
          { name: 'loteamento', value:"Teste Script"},
          { name: 'nome', value: jQuery('#regForm #name').val() },
          { name: 'sobrenome', value: jQuery('#regForm #sobrenome').val() },
          { name: 'email', value: jQuery('#regForm #email').val() },
          { name: 'telefone', value: jQuery('#regForm #telefone').val() },
          { name: 'token_rdstation', value: 'ddd19ee74dc5eca035093f12ac6ef0d2' }
        ];
      RdIntegration.post(data_array, function(){
        window.location = "https://urba.com.br/obrigado/";
        return false;
      });   
  });
</script>