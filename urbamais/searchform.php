<div class="div-busca">
  <div class="container-padrao-2">
    <div class="form-block-3 w-form">
      <form id="email-form" name="email-form" role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="w-row">
          <div class="column-47 w-col w-col-8"><input type="search" class="text-field-4 w-input" name="s" value="<?php echo get_search_query(); ?>" placeholder="Procurando por algum assunto?" id="Pesquisa-2" required=""></div>
          <div class="column-47 w-col w-col-4"><input type="submit" value="Buscar" data-wait="Buscando..." class="submit-button-4 w-button"></div>
        </div>
      </form>
    </div>
  </div>
</div>