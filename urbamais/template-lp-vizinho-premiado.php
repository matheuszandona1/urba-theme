  <?php
  // Template name: viziho-premiado
  get_header("vizinho"); ?>


  <main>
      <section class="hero">
        <div class="hero__container">
          <div class="hero__content" style="max-width: 600px">
            <h1 class="hero__title">Agora é a sua vez de ganhar dinheiro</h1>
            <p class="hero__desc">ao ter como vizinho aquele amigo ou amiga que merece morar com qualidade de vida, assim como você.</p>
            <div class="hero__side desktop">
              <img src="<?php echo site_url();?>/wp-content/uploads/2023/10/hero.webp" alt="" />
              <span class="coin coin_1"><img src="<?php echo site_url();?>/wp-content/uploads/2023/10/coin-1.webp" alt="" /></span>
              <span class="coin coin_2 mobile"><img src="<?php echo site_url();?>/wp-content/uploads/2023/10/coin-2.webp" alt="" /></span>
              <span class="coin coin_3 mobile"><img src="<?php echo site_url();?>/wp-content/uploads/2023/10/coin-3.webp" alt="" /></span>
              <span class="coin coin_4"><img src="<?php echo site_url();?>/wp-content/uploads/2023/10/coin-4.webp" alt="" /></span>
              <span class="coin coin_5 mobile"><img src="<?php echo site_url();?>/wp-content/uploads/2023/10/coin-5.webp" alt="" /></span>
            </div>
            <p class="hero__bold">INDIQUE UM AMIGO</p>
            <p class="hero__smaller">A cada um que fechar negócio você ganha um SUPER PRÊMIO! 🤑</p>
          </div>
          <div class="hero__side mobile">
            <img src="<?php echo site_url();?>/wp-content/uploads/2023/10/hero.webp" alt="" />
            <span class="coin coin_1"><img src="<?php echo site_url();?>/wp-content/uploads/2023/10/coin-1.webp" alt="" /></span>
            <span class="coin coin_2 mobile"><img src="<?php echo site_url();?>/wp-content/uploads/2023/10/coin-2.webp" alt="" /></span>
            <span class="coin coin_3 mobile"><img src="<?php echo site_url();?>/wp-content/uploads/2023/10/coin-3.webp" alt="" /></span>
            <span class="coin coin_4"><img src="<?php echo site_url();?>/wp-content/uploads/2023/10/coin-4.webp" alt="" /></span>
            <span class="coin coin_5 mobile"><img src="<?php echo site_url();?>/wp-content/uploads/2023/10/coin-5.webp" alt="" /></span>
          </div>
        </div>
      </section>
      <section class="formulario">
        <div class="formulario__container">

          <h3 class="formulario__title">Para enviar, preencha todos os campos:</h3>
          <form action="https://urba.com.br/typ-vizinho-premiado/" class="form">
            <div class="form__holder">
              <label class="form__input" for="nome">
                <input type="text" id="nome rd-text_field-llpgt1e9" placeholder="Nome" name="name" type="text" data-use-type="STRING" required/>
              </label>

              <label class="form__input" for="dados">
                <input type="text" id="rd-number_field-llpgt1ea" placeholder="CPF/CNPJ" name="cf_cpf_cnpj_1" required/>
              </label>

              <label class="form__input" for="email">
                <input type="email" id="email rd-email_field-llpgt1eb" placeholder="E-mail" name="email" type="email" data-use-type="STRING" required="required"/>
            </label>

              <label class="form__input" for="loteamento">
                <select name="cf_loteamento_adquirido" id="rd-select_field-llpgt1ec"data-use-type="STRING" name="cf_loteamento_adquirido" required="required"> 
                  <option value="">Loteamento adquirido por você</option>
                  <option value="Smart Urba Dunlop">Smart Urba Dunlop</option>
    
                  <option value="Buona Vita">Buona Vita</option>
                
                  <option value="Recanto do Moinho">Recanto do Moinho</option>
                
                  <option value="Alto São Fernando">Alto São Fernando</option>
                
                  <option value="Residencial Elvira">Residencial Elvira</option>
                
                  <option value="Parque Vitória">Parque Vitória</option>
                
                  <option value="Residencial Progresso">Residencial Progresso</option>
                
                  <option value="Jardim São Roque">Jardim São Roque</option>
                
                  <option value="Vila América">Vila América</option>
                </select>
              </label>
              <label class="form__input" for="amigo">
                <input type="text" id="amigo rd-text_field-llpgt1ed" placeholder="Nome do amigo indicado"name="cf_nome_do_amigo_indicado" type="text" data-use-type="STRING" required />
            </label>
              <label class="form__input" for="telefone">
                <input type="text" id="rd-phone_field-llpgt1ef" name="cf_telefone_do_amigo_indicado" data-input-mask="INTERNATIONAL_MASK" data-use-type="STRING" placeholder="Telefone do amigo indicado" />
              </label>
              <label class="form__input" style="width: 100%" for="email-amigo"
                ><input type="text" id="email-amigo rd-email_field-llpgt1ee"  name="cf_email_do_amigo_indicado" type="email" data-use-type="STRING" data-input-mask="" required="required" placeholder="E-mail do amigo indicado"
              /></label>
            </div>
            <div class="form__terms">
              <input type="checkbox" name="" id="checkbox" required />
              <p class="form__terms--text">
                Li e estou de acordo com o <a href="#">regulamento</a>. Estou de acordo também com as formas de tratamento de dados realizados pela marca MRV&CO,
                conforme sua <a href="#">Política de Privacidade</a>.
              </p>
            </div>
            <button type="submit" class="button button--form">ENVIAR →</button>
          </form>
        </div>
      </section>
      <section class="box">
        <div class="box__container">
          <h3 class="box__title">Siga este passo a passo</h3>
          <p class="box__desc">e, quando o seu amigo(a) comprar um lote com a Urba, você receberá <b>sua premiação em dinheiro</b></p>
          <div class="box__holder">
            <div class="box__card" style=" background: url('<?php echo site_url();?>/wp-content/uploads/2023/10/box.webp') no-repeat;" >
              
            
              <img style="max-width: 34%;" src="<?php echo site_url();?>/wp-content/uploads/2023/10/icon1.webp" alt="" />
              <p class="box__card--desc">Você que é cliente Urba, indique um amigo para ser o seu vizinho premiado</p>
            </div>
            <div class="box__card" style=" background: url('<?php echo site_url();?>/wp-content/uploads/2023/10/box.webp') no-repeat;">
              <img style="max-width: 34%;" src="<?php echo site_url();?>/wp-content/uploads/2023/10/icon2.webp" alt="" />
              <p class="box__card--desc">Aguarde o e-mail de confirmação da indicação</p>
            </div>
            <div class="box__card" style=" background: url('<?php echo site_url();?>/wp-content/uploads/2023/10/box.webp') no-repeat;">
              <img style="max-width: 34%;" src="<?php echo site_url();?>/wp-content/uploads/2023/10/icon3.webp" alt="" />
              <p class="box__card--desc">Seu amigo fecha negócio com a Urba</p>
            </div>
            <div class="box__card" style=" background: url('<?php echo site_url();?>/wp-content/uploads/2023/10/box.webp') no-repeat;">
              <img style="max-width: 34%;" src="<?php echo site_url();?>/wp-content/uploads/2023/10/icon4.webp" alt="" />
              <p class="box__card--desc">Você ganha um <br /><b>SUPER PRÊMIO!</b></p>
            </div>
          </div>
          <p class="box__smaller">
            *A premiação é válida para clientes adimplentes, cuja indicação é feita antes da data de venda, com os mesmos dados do indicado vinculados ao futuro
            cliente comprador.
            <br /><br />
            A previsão de pagamento do prêmio é de 120 dias. Confira o regulamento.
          </p>
        </div>
      </section>

      <section class="duvidas">
        <div class="duvidas__container">
          <h3 class="duvidas__title">Você ainda tem dúvidas sobre o Programa Vizinho Premiado?</h3>
          <p class="duvidas__desc">
            Envie um e-mail pra gente: <b>vizinhopremiado@vivaurba.com.br</b> <br />Explique sua dúvida e vamos responder o mais breve possível.
          </p>
          <div class="button--container"><a href="#" class="button button--form size">QUERO GANHAR PRÊMIOS EM $ →</a></div>
        </div>
      </section>
  </main>
  <footer class="footer">
          <div><img src="<?php echo site_url();?>/wp-content/uploads/2023/10/LOGO.webp" alt="" /></div>
          <div><img src="<?php echo site_url();?>/wp-content/uploads/2023/10/mrv.webp" alt="" /></div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js" referrerpolicy="no-referrer"></script>
  <script>

    $(document).ready(function () {
      // Máscara para telefone
      $("#rd-phone_field-llpgt1ef").inputmask("(99) 99999-9999");

      // Máscara para CPF ou CNPJ
      $("#rd-number_field-llpgt1ea").inputmask({
        mask: ['999.999.999-99', '99.999.999/9999-99'],
        keepStatic: true, // Mantém os caracteres fixos estáticos
        onBeforePaste: function (pastedValue, opts) {
          // Remove caracteres não numéricos para determinar se é CPF ou CNPJ
          var newValue = pastedValue.replace(/\D/g, '');

          // Determina se é CPF ou CNPJ com base na quantidade de dígitos
          if (newValue.length <= 11) {
            opts.mask = '999.999.999-99';
          } else {
            opts.mask = '99.999.999/9999-99';
          }
        }
      });
    });

  </script>
   <script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/3a7d0e9a-a652-4068-82e9-d28ba885fa3f-loader.js" ></script> 

<?php
get_footer()
?>
