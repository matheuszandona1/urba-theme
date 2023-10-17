<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <?php wp_head(); ?>
</head>

<body class="page--home">
  <!-- <div class="header">
    <div class="header__container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid"> <a href="/"> <svg width="140" height="30" fill="none">
              <g clip-path="url(#clip0_692_3)">
                <path d="M23.082.777 14.638 8a3.114 3.114 0 0 0-1.099 2.366v9.288c0 1.736 1.439 3.143 3.214 3.143h16.886c1.775 0 3.213-1.407 3.213-3.143v-9.288c0-.908-.4-1.77-1.098-2.366L27.316.777A3.252 3.252 0 0 0 25.199 0c-.757 0-1.51.26-2.117.777Z" fill="url(#paint0_linear_692_3)" />
                <path d="M57.877 30c-8.121 0-13.525-4.926-13.525-12.004V3.43a.72.72 0 0 1 .727-.71H51.2c.401 0 .727.318.727.71v13.81c0 4.235 2.314 6.691 5.95 6.691 3.637 0 5.951-2.456 5.951-6.69V3.43a.72.72 0 0 1 .727-.71h6.121c.4 0 .727.318.727.71v14.565C71.403 25.074 65.999 30 57.877 30ZM88.623 8.31a.723.723 0 0 0-.81-.707c-2.196.225-4.595 1.34-6.088 3.26h-.089v-2.18a.72.72 0 0 0-.726-.711H75.28a.72.72 0 0 0-.726.71V28.88c0 .392.326.71.726.71h5.629a.72.72 0 0 0 .726-.71v-8.999c0-2.826 1.979-4.897 5.331-4.897.248 0 .644 0 1.079.014a.551.551 0 0 0 .575-.547V8.31h.002Zm16.115-.75c-2.471 0-4.654.906-6.266 2.697h-.11v-8.21a.72.72 0 0 0-.727-.71h-5.629a.72.72 0 0 0-.726.71v26.831c0 .392.326.71.726.71h5.254a.72.72 0 0 0 .727-.71v-1.62h.11c1.457 1.813 3.575 2.74 6.311 2.74 6.068 0 10.414-4.51 10.414-11.197 0-6.688-4.369-11.24-10.082-11.24h-.002Zm-1.787 16.354c-2.779 0-4.876-2.005-4.876-5.091 0-3.087 2.031-5.136 4.854-5.136 2.824 0 4.743 2.05 4.743 5.136 0 3.086-1.964 5.091-4.721 5.091Zm36.322-15.942h-5.629a.718.718 0 0 0-.727.71v1.577h-.088c-1.566-1.791-3.707-2.697-6.089-2.697-5.716 0-10.082 4.64-10.082 11.24 0 6.602 4.324 11.198 10.414 11.198 2.648 0 4.721-.927 6.133-2.74h.089v1.62c0 .392.326.71.726.71h5.255a.72.72 0 0 0 .726-.71V8.682a.72.72 0 0 0-.726-.71h-.002Zm-15.47 10.852c0-3.086 2.053-5.135 4.744-5.135 2.69 0 4.654 2.158 4.654 5.135 0 2.978-2.097 5.092-4.677 5.092-2.758 0-4.721-2.05-4.721-5.092Zm-98.72 10.767c2.856 0 5.18-2.274 5.18-5.067V13.575c0-1.46-.644-2.852-1.769-3.814l-9.95-8.513c-1.943-1.663-4.875-1.663-6.821 0l-9.951 8.51A5.024 5.024 0 0 0 0 13.574v10.95c0 2.798 2.32 5.068 5.182 5.068h19.904M15.133 2.72c.563 0 1.129.192 1.578.576l9.953 8.513a2.32 2.32 0 0 1 .819 1.765v10.95c0 1.295-1.073 2.344-2.397 2.344H5.18c-1.324 0-2.397-1.05-2.397-2.345V13.575c0-.675.298-1.319.82-1.765l9.952-8.513a2.43 2.43 0 0 1 1.578-.577Z" fill="#079D56" />
              </g>
              <defs>
                <linearGradient id="paint0_linear_692_3" x1="16.33" y1="23.682" x2="33.674" y2="5.949" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FF8B22" />
                  <stop offset="1" stop-color="#FFB81A" />
                </linearGradient>
                <clipPath id="clip0_692_3">
                  <rect width="140" height="30" fill="#fff" />
                </clipPath>
              </defs>
            </svg> </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/09/menu-aberto.webp" alt></span> </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 mb-lg-0 mx-auto navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>">Home</a>
              </li>
              <li class="nav-item menu-has-children">
                <a class="nav-link" href="#">Loteamentos</a>
                <ul class="submenu">
                  <li class="nav-item">
                    <a class="nav-link" href="https://urba.com.br/smart-urba/">Smart Urba</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://urba.com.br/loteamentos-residenciais/">Loteamentos Residenciais</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://urba.com.br/loteamentos-comerciais/">Loteamentos Comerciais</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item menu-has-children">
                <a class="nav-link" href="https://urba.com.br/loteadora/">Conheça a Urba</a>
                <ul class="submenu">
                  <li class="nav-item">
                    <a class="nav-link" href="https://urba.com.br/loteadora/">Institucional</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://urba.com.br/codigo-de-conduta/">Código de Conduta</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://urba.com.br/programa-de-integridade/">Programa de Integridade</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.contatoseguro.com.br/urba">Canal Confidencial</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item menu-has-children">
                <a class="nav-link" href="#">Modalidades</a>
                <ul class="submenu">
                  <li class="nav-item">
                    <a class="nav-link" href="https://urba.com.br/minha-casa-do-meu-jeito/">Minha Casa do Meu Jeito</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>/blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>/ri">Investidores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>/area-do-cliente-urba">Área do Cliente</a>
              </li>
            </ul>
            <div class="button--container" data-aos="fade-left" data-aos-delay="300"><a href="https://vagas-mrveco.gupy.io/" target="_blank" class="button">Trabalhe conosco</a></div>
          </div>
        </div>
      </nav>
    </div>
  </div> -->

  <h1>Conheça área</h1>