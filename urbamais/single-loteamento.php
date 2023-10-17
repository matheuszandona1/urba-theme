<!--  data-wf-page="5d52f2b8076d2bdac488da31" -->



<?php get_header(); ?>



<style>
  d CSS Source map .w-form-formradioinput--inputType-custom {
    border-width: 1px;
    border-color: #ccc;
    border-style: solid;
    width: 12px;
    height: 12px;
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
    border-top-left-radius: 50%;
    border-top-right-radius: 50%
  }

  .w-form-formradioinput--inputType-custom.w--redirected-focus {
    box-shadow: 0 0 3px 1px #3898ec
  }

  .w-form-formradioinput--inputType-custom.w--redirected-checked {
    border-width: 4px;
    border-color: #3898ec
  }

  .w-embed-youtubevideo {
    width: 100%;
    position: relative;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
    background-image: url(https://d3e54v103j8qbb.cloudfront.net/static/youtube-placeholder.2b05e7d68d.svg);
    background-size: cover;
    background-position: 50% 50%
  }

  .w-embed-youtubevideo:empty {
    min-height: 75px;
    padding-bottom: 56.25%
  }

  .w-layout-grid {
    display: -ms-grid;
    display: grid;
    grid-auto-columns: 1fr;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    -ms-grid-rows: auto auto;
    grid-template-rows: auto auto;
    grid-row-gap: 16px;
    grid-column-gap: 16px
  }

  .w-checkbox {
    display: block;
    margin-bottom: 5px;
    padding-left: 20px
  }

  .w-checkbox::after,
  .w-checkbox::before {
    content: " ";
    display: table;
    -ms-grid-column-span: 1;
    grid-column-end: 2;
    -ms-grid-column: 1;
    grid-column-start: 1;
    -ms-grid-row-span: 1;
    grid-row-end: 2;
    -ms-grid-row: 1;
    grid-row-start: 1
  }

  .w-checkbox::after {
    clear: both
  }

  .w-checkbox-input {
    float: left;
    margin: 4px 0 0-20px;
    line-height: normal
  }

  .w-checkbox-input--inputType-custom {
    border-width: 1px;
    border-color: #ccc;
    border-style: solid;
    width: 12px;
    height: 12px;
    border-bottom-left-radius: 2px;
    border-bottom-right-radius: 2px;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px
  }

  .w-checkbox-input--inputType-custom.w--redirected-checked {
    background-color: #3898ec;
    border-color: #3898ec;
    background-image: url(https://d3e54v103j8qbb.cloudfront.net/static/custom-checkbox-checkmark.589d534424.svg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .w-checkbox-input--inputType-custom.w--redirected-focus {
    box-shadow: 0 0 3px 1px #3898ec
  }

  .body {
    font-family: Poppins, sans-serif
  }

  .heroslider {
    position: relative;
    height: 800px;
    padding-top: 100px
  }

  .slider {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    height: 100%
  }

  .left-arrow,
  .right-arrow {
    display: none
  }

  .slide-nav {
    font-size: 10px
  }

  .container-padrao {
    position: relative;
    height: 100%;
    max-width: 1280px;
    margin-right: auto;
    margin-left: auto;
    padding-right: 20px;
    padding-left: 20px;
    cursor: pointer
  }

  .container-padrao.reduzido {
    max-width: 1000px
  }

  .container-padrao.montemor {
    text-align: center
  }

  .container-padrao.monte-mor-mobile {
    right: auto;
    text-align: center
  }

  .container-padrao.sao-roque {
    position: relative;
    text-align: center;
    white-space: normal;
    mix-blend-mode: normal
  }

  .navbar {
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: auto;
    height: 100px;
    border-bottom: 1px solid #ff8b22;
    background-color: #fff
  }

  .brand,
  .nav-menu {
    margin-top: 30px
  }

  .nav-menu {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .button {
    margin-top: 10px;
    padding-right: 20px;
    padding-left: 20px;
    border-style: solid;
    border-width: 1px;
    border-color: #3898ec;
    border-radius: 50px;
    background-color: transparent;
    color: #3898ec;
    text-transform: none
  }

  .button,
  .dropdown-toggle {
    display: none
  }

  .div-text-hero {
    position: relative;
    top: 50%;
    z-index: 5;
    width: 80%;
    margin-right: auto;
    margin-left: auto;
    -webkit-transform: translate(0, -70%);
    -ms-transform: translate(0, -70%);
    transform: translate(0, -70%);
    text-align: center
  }

  .div-text-hero.interna {
    width: 80%
  }

  .div-text-hero.interna.jardim-bem-viver {
    width: 100%
  }

  .div-text-hero.interna.bem-campos,
  .div-text-hero.interna.girassois,
  .div-text-hero.interna.tulipas {
    width: 90%
  }

  .div-text-hero.smart-urba.dunlop,
  .div-text-hero.venda {
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%)
  }

  .div-text-hero.venda {
    text-align: left
  }

  .div-text-hero.area-cliente,
  .div-text-hero.home {
    width: 90%
  }

  .div-text-hero.smart-urba {
    width: 40%;
    margin-left: 0;
    -webkit-transform: translate(0, -45%);
    -ms-transform: translate(0, -45%);
    transform: translate(0, -45%);
    text-align: left
  }

  .div-text-hero.smart-urba.dunlop {
    width: 40%;
    float: left
  }

  .div-text-hero.smart-urba.minha-casa {
    top: 0;
    z-index: 0;
    width: 50%;
    float: left;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }

  .div-text-hero.div-title-sobre-a-urba {
    position: static;
    margin-top: 60px;
    margin-bottom: 60px;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }

  .heading {
    margin-top: 0;
    margin-bottom: 0;
    color: #fff;
    font-size: 40px;
    line-height: 1.3;
    font-weight: 500;
    text-align: center;
    letter-spacing: .3px
  }

  .heading.sobre,
  .heading.venda {
    color: #079d56;
    font-weight: 300;
    text-align: center
  }

  .heading.sobre.fale-com-ri {
    font-size: 28px;
    text-align: right
  }

  .heading.venda {
    text-align: left
  }

  .heading.lojas {
    font-weight: 400
  }

  .heading.area-cliente {
    width: 50%;
    color: #079d56;
    font-size: 32px;
    line-height: 1.5;
    font-weight: 300;
    text-align: left
  }

  .heading.home {
    line-height: 1.6
  }

  .slide {
    padding-top: 100px;
    background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, .2)), color-stop(20%, transparent)), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/slider-empreendimento-01.jpg);
    background-image: linear-gradient(0deg, rgba(0, 0, 0, .2), transparent 20%), linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/slider-empreendimento-01.jpg);
    background-position: 0 0, 0 0, 0 0;
    background-size: auto, auto, cover
  }

  .div-info-empreendimento {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
    width: 300px;
    height: 100px;
    margin-left: 20px;
    padding-bottom: 20px;
    padding-left: 5px;
    border-left: 2px solid #ff8b22;
    opacity: 1;
    color: #fff
  }

  .text-block {
    margin-bottom: 0;
    padding-bottom: 0;
    padding-left: 0;
    color: #fff;
    font-size: 16px;
    font-weight: 500
  }

  .image {
    margin-right: 5px;
    float: left
  }

  .text-block-2 {
    width: 80%;
    margin-top: 3px;
    float: left;
    color: #ff8b22
  }

  .slide-2,
  .slide-3 {
    padding-top: 100px;
    background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, .2)), color-stop(20%, transparent)), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/slider-empreendimento-02.jpg);
    background-image: linear-gradient(0deg, rgba(0, 0, 0, .2), transparent 20%), linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/slider-empreendimento-02.jpg);
    background-position: 0 0, 0 0, 50% 50%;
    background-size: auto, auto, cover;
    background-repeat: repeat, repeat, no-repeat
  }

  .slide-3 {
    background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, .2)), color-stop(20%, transparent)), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/slider-empreendimento-03.jpg);
    background-image: linear-gradient(0deg, rgba(0, 0, 0, .2), transparent 20%), linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/slider-empreendimento-03.jpg)
  }

  .loteamentos {
    padding-top: 90px;
    padding-bottom: 80px
  }

  .loteamentos.interna {
    padding-top: 220px
  }

  .heading-2 {
    width: 80%;
    margin-top: 0;
    margin-right: auto;
    margin-left: auto;
    color: #6e6e6e;
    font-size: 28px;
    line-height: 1.4;
    font-weight: 200;
    text-align: center;
    text-transform: none
  }

  .heading-2.branco {
    width: 100%;
    color: #fff;
    font-weight: 300
  }

  .heading-2.galeria {
    width: 100%;
    margin: 0 0 20px;
    color: #fff;
    text-align: left
  }

  .heading-2.galeria.monte-mor {
    width: 60%
  }

  .heading-2.localiz {
    width: 100%;
    margin-bottom: 20px;
    color: #079d56;
    text-align: left
  }

  .heading-2.localiz.elvira {
    color: #ff8b22
  }

  .heading-2.localiz.monte-mor,
  .heading-2.localiz.residencial-progresso,
  .heading-2.localiz.sao-roque {
    margin-right: 1px;
    color: #793f98
  }

  .heading-2.localiz.sao-roque.mobile {
    position: static;
    color: #ec8515
  }

  .heading-2.localiz.residencial-progresso.mobile {
    position: static;
    color: #433868
  }

  .heading-2.forms {
    width: 100%
  }

  .heading-2.estados {
    width: 100%;
    margin-top: 100px;
    margin-bottom: 40px;
    font-size: 26px;
    text-align: left
  }

  .heading-2.area-cliente {
    width: 100%;
    padding-top: 60px;
    color: #079d56;
    font-size: 26px;
    text-align: left
  }

  .heading-2.area-cliente.vizinho {
    text-align: center
  }

  .heading-2._2 {
    width: 60%;
    font-size: 26px
  }

  .heading-2.hblog {
    width: 70%
  }

  .heading-2.passo {
    color: #079d56;
    font-weight: 300
  }

  .heading-2.center.white,
  .paragraph {
    color: #fff;
    font-weight: 300
  }

  .heading-2.center.white.call {
    font-weight: 400
  }

  .heading-2.side {
    width: 100%;
    margin-bottom: 20px;
    text-align: left
  }

  .paragraph {
    width: 65%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    color: #ff8b22;
    font-size: 16px;
    line-height: 1.6;
    text-align: center;
    letter-spacing: .3px
  }

  .paragraph.home {
    width: 55%
  }

  .div-empreendimentos {
    position: relative;
    z-index: 8;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 40px;
    margin-bottom: 20px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .div-empreendimento {
    position: relative;
    overflow: hidden;
    width: 350px;
    height: 400px;
    margin-right: 15px;
    margin-left: 15px;
    border-radius: 5px;
    box-shadow: 0 1px 10px -3px rgba(0, 0, 0, .3);
    cursor: pointer
  }

  .div-empreendimento.portal-das-aguas {
    background-image: url(../images/portal-das-aguas.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .div-empreendimento.giardino-bianco,
  .div-empreendimento.jardim-bem-viver,
  .div-empreendimento.reserva-macauba {
    background-image: url(../images/giardino-bianco.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .div-empreendimento.jardim-bem-viver,
  .div-empreendimento.reserva-macauba {
    background-image: url(../images/reserva-macauba.jpg)
  }

  .div-empreendimento.jardim-bem-viver {
    background-image: url(../images/jardim-bem-viver.jpg)
  }

  .div-empreendimento.jardim-dos-girassois,
  .div-empreendimento.jardins-de-campos {
    background-image: url(../images/jardim-dos-girassois.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .div-empreendimento.jardins-de-campos {
    background-image: url(../images/jardins-de-campos.jpg)
  }

  .div-empreendimento.bem-viver-campos,
  .div-empreendimento.jardim-das-tulipas,
  .div-empreendimento.parque-atlanta {
    background-image: url(../images/jardim-das-tulipas.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .div-empreendimento.bem-viver-campos,
  .div-empreendimento.parque-atlanta {
    background-image: url(../images/bem-viver-campos.jpg)
  }

  .div-empreendimento.parque-atlanta {
    background-image: url(../images/parque-atlanta.jpg)
  }

  .div-info {
    position: absolute;
    left: 0;
    top: auto;
    right: 0;
    bottom: 0;
    overflow: hidden;
    height: 90px;
    padding: 20px 20px 10px;
    background-color: rgba(255, 255, 255, .95)
  }

  .heading-3 {
    margin-top: 0;
    margin-bottom: 5px;
    color: #006b3f;
    font-weight: 500
  }

  .image-2 {
    float: left
  }

  .text-block-3 {
    margin-left: 10px;
    float: left;
    color: #079d56
  }

  .text-block-3._2 {
    margin-left: 0;
    text-transform: capitalize
  }

  .text-block-3.roxo {
    margin-left: 0;
    color: #079d56
  }

  .button-2,
  .info {
    margin-bottom: 10px
  }

  .info {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .button-2 {
    margin-top: 10px;
    padding-right: 20px;
    padding-left: 20px;
    float: left;
    clear: left;
    border-style: solid;
    border-width: 1px;
    border-color: #ff8b22;
    border-radius: 20px;
    background-color: #ff8b22;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #fff
  }

  .button-2._2:hover,
  .button-2:hover {
    background-color: transparent;
    color: #ff8b22
  }

  .button-2._2 {
    padding-right: 35px;
    padding-left: 35px;
    float: none;
    clear: none;
    border-color: #ac41d8;
    background-color: #ac41d8
  }

  .button-2._2:hover {
    color: #ac41d8
  }

  .section-vantagens {
    height: 250px;
    background-color: #006b3f
  }

  .columns {
    position: relative;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%)
  }

  .columns._2,
  .columns.itapeva {
    position: static;
    margin-top: 40px;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }

  .columns._2.regatas,
  .columns.itapeva.regatas {
    display: none
  }

  .columns.itapeva {
    display: none
  }

  .text-block-4 {
    color: #fff;
    font-size: 26px;
    line-height: 1.1;
    font-weight: 300;
    text-align: center
  }

  .text-block-4._2 {
    color: #006b3f;
    font-size: 20px
  }

  .text-block-4._2.interna {
    color: #006b3f
  }

  .text-block-4._2.interna.elvira,
  .text-block-4._2.interna.progresso {
    width: 100%;
    margin-right: 0;
    margin-left: 0;
    padding: 28px 20px;
    color: #433868
  }

  .text-block-4._2.interna.elvira:hover,
  .text-block-4._2.interna.progresso:hover {
    background-color: #433868;
    color: #fff
  }

  .destaque {
    font-size: 36px;
    font-weight: 500
  }

  .column {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100px;
    padding-right: 20px;
    padding-left: 20px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-right: 2px solid #ff8b22
  }

  .column.end {
    border-right-style: none
  }

  .column._2 {
    border-right-color: #006b3f;
    background-color: #82ea5b
  }

  .column._2.interna {
    border-right-color: #fafafa;
    background-color: #ebebeb;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in
  }

  .column._2.interna:hover {
    background-color: #ff8b22
  }

  .column._2.interna.end.residencial-progresso:hover {
    background-color: #433868
  }

  .column._2.interna.dunlop {
    display: none;
    border-left: 3px solid #fafafa;
    border-right-width: 3px;
    border-radius: 10px;
    background-color: #82ea5b
  }

  .column._2.interna.elvira,
  .column._2.interna.residencial-progresso {
    padding-right: 0;
    padding-left: 0;
    color: #fff
  }

  .column._2.interna.elvira:hover,
  .column._2.interna.residencial-progresso:hover {
    background-color: #793f98
  }

  .bairros-planejados {
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: url(../images/arvore.jpg), url(../images/pai-filho_1.jpg);
    background-position: 100% 100%, 0 100%;
    background-size: 400px, 400px;
    background-repeat: no-repeat, no-repeat;
    background-attachment: fixed, fixed
  }

  .div-pilar,
  .div-pilares {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .div-pilares {
    width: 100%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .div-pilar {
    position: relative;
    width: 250px;
    min-height: 265px;
    margin-right: 10px;
    margin-left: 10px;
    padding: 30px 20px 20px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, .95);
    box-shadow: 0 1px 7px -3px rgba(0, 0, 0, .5)
  }

  .text-block-5 {
    color: #006b3f;
    font-size: 16px;
    line-height: 1.2;
    font-weight: 600;
    text-align: center
  }

  .image-3 {
    margin-bottom: 30px
  }

  .formas-pagamento {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fafafa
  }

  .text-block-6 {
    margin-top: 60px;
    color: #ff8b22;
    text-align: center
  }

  .cta {
    height: 350px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .5))), url(../images/cta_6.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../images/cta_6.jpg);
    background-position: 0 0, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
    background-attachment: scroll, fixed
  }

  .div-info-cta {
    position: relative;
    top: 50%;
    width: 70%;
    margin-right: auto;
    margin-left: auto;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    text-align: center
  }

  .heading-4 {
    margin-top: 0;
    color: #fff;
    line-height: 1.3;
    font-weight: 200;
    text-align: center
  }

  .button-3 {
    margin-top: 20px;
    padding-right: 25px;
    padding-left: 25px;
    border-style: solid;
    border-width: 1.5px;
    border-color: #ac41d8;
    border-radius: 20px;
    background-color: #ac41d8;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #fff;
    font-size: 16px;
    font-weight: 400
  }

  .button-3:hover {
    border-color: #dd89ff;
    background-color: transparent;
    color: #dd89ff;
    font-weight: 400
  }

  .button-3.galeria {
    display: none;
    padding-right: 40px;
    padding-left: 40px;
    border-style: solid;
    border-color: #82ea5b;
    background-color: #82ea5b;
    color: #006b3f
  }

  .button-3.galeria:hover {
    background-color: transparent;
    color: #82ea5b
  }

  .button-3.cond {
    margin-top: 50px
  }

  .button-3.cond.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .button-3.cond.regatas:hover,
  .button-3.itapeva.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff
  }

  .button-3.elvira,
  .button-3.itapeva {
    margin-top: 10px;
    border-color: #f7287c;
    border-radius: 5px;
    background-color: #f7287c;
    text-transform: uppercase
  }

  .button-3.itapeva:hover {
    background-color: transparent;
    color: #f7287c
  }

  .button-3.itapeva.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .button-3.itapeva.bot-o-hover-branco:hover {
    border-color: #fff;
    color: #fff
  }

  .button-3.elvira:hover {
    background-color: transparent;
    color: #f7287c
  }

  .button-3.elvira.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .button-3.elvira.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff
  }

  .button-3.elvira.bot-o-hover-branco {
    border-color: #ff8b22;
    background-color: #ff8b22
  }

  .button-3.elvira.bot-o-hover-branco:hover {
    border-color: #82ea5b;
    background-color: #82ea5b;
    color: #006b3f
  }

  .blog {
    padding-top: 80px;
    padding-bottom: 40px
  }

  .ultimos-posts {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 60px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .div-artigo {
    position: relative;
    overflow: hidden;
    width: 350px;
    height: 450px;
    margin-right: 15px;
    margin-left: 15px;
    border-radius: 10px;
    box-shadow: 0 1px 10px -4px rgba(0, 0, 0, .4)
  }

  .imagem-blog {
    height: 200px;
    background-image: url(../images/blog1.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .imagem-blog._2 {
    background-image: url(../images/blog2.jpg)
  }

  .imagem-blog._3 {
    background-image: url(../images/blog3.jpg)
  }

  .heading-5,
  .paragraph-7 {
    margin-right: 10px;
    margin-left: 10px
  }

  .heading-5 {
    margin-bottom: 15px;
    color: #006b3f;
    font-size: 18px;
    line-height: 1.3;
    font-weight: 500
  }

  .paragraph-7 {
    margin-top: 0;
    color: #565656;
    line-height: 1.7;
    font-weight: 300
  }

  .button-4,
  .text-block-7 {
    position: absolute;
    top: auto;
    bottom: 0;
    margin-bottom: 10px
  }

  .text-block-7 {
    left: 0;
    right: auto;
    display: block;
    margin-left: 10px;
    color: #079d56;
    font-size: 12px
  }

  .button-4 {
    left: auto;
    right: 0;
    width: 125px;
    margin-right: 10px;
    padding-top: 8px;
    padding-bottom: 8px;
    border-style: solid;
    border-width: 1px;
    border-color: #ff8b22;
    border-radius: 20px;
    background-color: transparent;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #ff8b22;
    font-size: 16px;
    text-align: center
  }

  .button-4:hover {
    background-color: #ff8b22;
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
    color: #fff
  }

  .faq {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f0f0f0
  }

  .recurso {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    width: 100%;
    height: 100%;
    margin-right: auto;
    margin-left: auto;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center
  }

  .recurso._2 {
    height: 0%
  }

  .recurso,
  .recurso._3 {
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
    -ms-flex-align: stretch;
    align-items: stretch
  }

  .div-seta {
    width: 12px;
    height: 12px;
    margin-right: 10px;
    float: right;
    border-right: 2px solid #006b3f;
    border-bottom: 2px solid #079d56;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg)
  }

  .div-questoes {
    position: relative;
    margin-top: 60px
  }

  .div-questao {
    height: auto;
    padding: 15px 10px 10px;
    border-style: none;
    border-width: 2px;
    border-color: #f79c1b;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 2px 10px -5px rgba(0, 0, 0, .3);
    -webkit-transition: all 250ms ease;
    transition: all 250ms ease;
    cursor: pointer
  }

  .div-questao:hover {
    -webkit-transform: scale(1.01);
    -ms-transform: scale(1.01);
    transform: scale(1.01)
  }

  .div-questao.como {
    margin-bottom: 10px
  }

  .div-questao.invest {
    margin-bottom: 20px;
    box-shadow: 0 5px 12px -5px rgba(255, 139, 34, .7)
  }

  .div-questao.resposta {
    padding-top: 8px;
    padding-bottom: 8px;
    padding-left: 8px
  }

  .div-resposta {
    overflow: hidden;
    height: 0
  }

  .row {
    margin-bottom: 20px
  }

  .paragraph-14 {
    color: #565656;
    line-height: 1.8;
    font-weight: 400;
    text-align: left
  }

  .div-duvida {
    margin-bottom: 5px
  }

  .duvida {
    width: 90%;
    float: left;
    color: #079d56;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 500
  }

  .column-20,
  .column-7 {
    padding-right: 5px;
    padding-left: 5px
  }

  .rodape {
    position: relative;
    z-index: 0;
    height: 250px;
    border-top: 2px solid #ff8b22;
    background-color: #006b3f
  }

  .column-21,
  .columns-2 {
    height: 100%
  }

  .column-21 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .column-21._2 {
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start
  }

  .div-marca {
    width: 200px;
    height: 60px;
    background-image: url(https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg);
    background-position: 50% 50%;
    background-size: 125px
  }

  .div-marca.rodape {
    width: auto;
    height: auto;
    border-top-style: none;
    background-color: transparent;
    background-image: none
  }

  .footer-social {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    float: right;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end
  }

  .link-social {
    display: block;
    width: auto;
    height: auto;
    margin-right: 15px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .div-mapa-site {
    width: 100%;
    height: 100%
  }

  .column-22,
  .columns-3 {
    height: 100%
  }

  .column-22 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start
  }

  .link {
    margin-bottom: 10px;
    margin-left: 40px;
    color: #e7e7e7;
    text-decoration: none
  }

  .link:hover {
    color: #fff
  }

  .link.w--current {
    color: #d8d8d8;
    text-decoration: none
  }

  .contato-imediato {
    position: fixed;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 5;
    display: block;
    width: 100px;
    height: 100vh;
    padding-top: 100px;
    padding-right: 20px;
    padding-left: 20px
  }

  .div-forms {
    position: relative;
    z-index: 1;
    overflow: hidden;
    height: 0;
    margin-top: 20px;
    padding-right: 15px;
    padding-left: 15px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 4px 12px -6px #000
  }

  .div-forms.interna {
    position: static;
    overflow: visible;
    height: auto;
    margin-top: 0;
    padding: 40px;
    border-radius: 5px
  }

  .div-forms.interna.regatas,
  .div-forms.interna.smarturba {
    width: 80%;
    margin-right: auto;
    margin-left: auto
  }

  .div-forms.interna.smarturba {
    margin-top: 40px
  }

  .heading-6 {
    margin-top: 40px;
    color: #006b3f;
    font-weight: 500;
    text-align: center
  }

  .paragraph-15 {
    color: #ff8b22;
    text-align: center
  }

  .paragraph-15._2 {
    color: #6e6e6e
  }

  .form {
    width: 90%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    text-align: center
  }

  .text-field {
    margin-bottom: 10px;
    border-style: solid;
    border-width: 1px;
    border-color: #079d56;
    border-radius: 20px
  }

  .text-field._2 {
    border-radius: 5px
  }

  .tipo-contato {
    position: relative;
    display: block;
    height: 40px
  }

  .tipo-contato.hidden {
    display: none
  }

  .radio-button-field {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    margin-bottom: 0
  }

  .radio-button {
    opacity: 0
  }

  .resposta1 {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    padding-top: 8px;
    border-style: solid;
    border-width: 1px;
    border-color: #079d56;
    border-radius: 50px;
    font-family: Ubuntu, Helvetica, sans-serif;
    color: #079d56;
    font-size: 14px;
    font-weight: 400;
    text-align: center;
    cursor: pointer
  }

  .resposta1:hover {
    background-color: #079d56;
    color: #fff;
    font-weight: 400
  }

  .column-23 {
    padding-right: 5px;
    padding-left: 0
  }

  .column-24 {
    padding-right: 0;
    padding-left: 5px
  }

  .columns-4 {
    margin-bottom: 10px
  }

  .submit-button {
    display: none;
    margin-top: 15px;
    padding: 10px 65px 8px;
    border-style: solid;
    border-width: 1px;
    border-color: #ff8b22;
    border-radius: 20px;
    background-color: #ff8b22;
    text-transform: uppercase
  }

  .submit-button:hover {
    background-color: transparent;
    color: #ff8b22
  }

  .div-botao-contato,
  .div-close {
    position: absolute;
    left: auto;
    right: 0;
    cursor: pointer
  }

  .div-botao-contato {
    top: auto;
    bottom: 0;
    width: 100px;
    height: 100px;
    margin-right: 20px;
    margin-bottom: 50px;
    border-radius: 100px;
    background-color: #ac41d8;
    background-image: url(../images/contact_rapido.png);
    background-position: 50% 50%;
    background-size: 100px 100px;
    box-shadow: 0 7px 15px -6px rgba(0, 0, 0, .4)
  }

  .div-close {
    top: 0;
    bottom: auto;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 30px;
    height: 30px;
    margin-top: 10px;
    margin-right: 10px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 20px;
    background-color: #fff;
    box-shadow: 0 1px 6px -3px rgba(0, 0, 0, .5);
    color: #ac41d8;
    font-size: 16px;
    font-weight: 300
  }

  .hero-internas {
    position: relative;
    height: 800px;
    padding-top: 100px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, .35)), to(rgba(255, 255, 255, .35))), url(https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg);
    background-image: linear-gradient(180deg, rgba(255, 255, 255, .35), rgba(255, 255, 255, .35)), url(https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg);
    background-position: 0 0, 0 0
  }

  .hero-internas.giardino,
  .hero-internas.portal-das-aguas {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v3_1.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v3_1.jpg);
    background-position: 0 0, 50%0;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat
  }

  .hero-internas.giardino.girass-is {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v2_1.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v2_1.jpg);
    background-position: 0 0, 50% 50%
  }

  .hero-internas.giardino.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero-familia-01.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero-familia-01.jpg);
    background-position: 0 0, 50% 50%
  }

  .hero-internas.giardino.atlanta {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .45)), to(rgba(0, 0, 0, .45))), url(../images/hero-familia-02.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .45), rgba(0, 0, 0, .45)), url(../images/hero-familia-02.jpg);
    background-position: 0 0, 50% 50%
  }

  .hero-internas.portal-das-aguas {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero.jpg)
  }

  .hero-internas.sobre {
    height: auto;
    padding-top: 0;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, .35)), to(rgba(255, 255, 255, .35)));
    background-image: linear-gradient(180deg, rgba(255, 255, 255, .35), rgba(255, 255, 255, .35))
  }

  .hero-internas.sobre.sobre-a-urba {
    padding-top: 80px;
    padding-bottom: 60px
  }

  .hero-internas.venda {
    height: 640px;
    background-image: url(../images/hero-venda.jpg);
    background-position: 125% 100%;
    background-size: auto 600px;
    background-repeat: no-repeat
  }

  .hero-internas.nossas-lojas {
    height: 640px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v3.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v3.jpg);
    background-position: 0 0, 50%0;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat
  }

  .hero-internas.area-do-cliente {
    height: 640px;
    background-image: url(../images/hero_1.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .hero-internas.reserva-macauba {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/hero-familia-05.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/hero-familia-05.jpg);
    background-position: 0 0, 50%0;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat
  }

  .hero-internas.reserva-macauba.jardim-bem-viver {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero-familia-04.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero-familia-04.jpg);
    background-position: 0 0, 50%0
  }

  .hero-internas.reserva-macauba.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v2_2.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v2_2.jpg);
    background-position: 0 0, 50% 50%
  }

  .hero-internas.reserva-macauba.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero-familia-03.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero-familia-03.jpg);
    background-position: 0 0, 50% 50%
  }

  .hero-internas.investidores {
    height: 600px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/urba-nova-hero-03.jpg);
    background-image: linear-gradient(180deg, transparent, transparent), url(../images/urba-nova-hero-03.jpg);
    background-position: 0 0, 100% 50%;
    background-size: auto, contain;
    background-repeat: repeat, no-repeat
  }

  .hero-internas.regatas {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .15)), to(rgba(0, 0, 0, .15))), url(../images/hero_2.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .15), rgba(0, 0, 0, .15)), url(../images/hero_2.jpg);
    background-position: 0 0, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat
  }

  .hero-internas.dunlop {
    height: 700px;
    margin-top: 100px;
    padding-top: 0;
    background-image: -webkit-gradient(linear, right top, left top, from(rgba(0, 0, 0, .75)), color-stop(40%, transparent)), -webkit-gradient(linear, left top, right top, color-stop(15%, rgba(0, 0, 0, .75)), color-stop(50%, rgba(15, 15, 15, 0))), url(../images/hero_5.jpg);
    background-image: linear-gradient(270deg, rgba(0, 0, 0, .75), transparent 40%), linear-gradient(90deg, rgba(0, 0, 0, .75) 15%, rgba(15, 15, 15, 0) 50%), url(../images/hero_5.jpg);
    background-position: 0 0, 0 0, 100% 50%;
    background-size: auto, auto, cover;
    background-repeat: repeat, repeat, no-repeat;
    background-attachment: scroll, scroll, scroll
  }

  .hero-internas.minha-casa {
    height: auto;
    margin-top: 100px;
    padding-top: 60px;
    padding-bottom: 335px;
    background-image: -webkit-gradient(linear, left bottom, left top, color-stop(40%, #78368c), to(#a84d97));
    background-image: linear-gradient(0deg, #78368c 40%, #a84d97)
  }

  .hero-internas.vila-profeta {
    height: 700px;
    margin-top: 100px;
    padding-top: 0;
    background-image: linear-gradient(114deg, #000, rgba(255, 255, 255, 0) 49%), linear-gradient(270deg, rgba(0, 0, 0, .5), transparent 26%), url(../images/bg-hero-vila-profeta.png);
    background-position: 0 0, 0 0, -1% 50%;
    background-size: auto, auto, cover;
    background-repeat: repeat, repeat, no-repeat;
    background-attachment: scroll, scroll, scroll
  }

  .hero-internas.itapeva {
    height: 800px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .2)), to(rgba(0, 0, 0, .2))), url(../images/hero-itapeva.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(../images/hero-itapeva.jpg);
    background-position: 0 0, 0 50%;
    background-size: auto, cover;
    background-repeat: repeat, repeat
  }

  .hero-internas.elvira {
    height: 800px;
    background-color: #fff;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .2)), to(rgba(0, 0, 0, .2))), url(../images/Depositphotos_158690232_L.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(../images/Depositphotos_158690232_L.jpg);
    background-position: 0 0, 50% 50%;
    background-size: auto, auto;
    background-repeat: repeat, no-repeat
  }

  .hero-internas.montemor,
  .hero-internas.residencial-progresso,
  .hero-internas.sao-roque {
    height: 800px;
    background-color: #fff;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .2)), to(rgba(0, 0, 0, .2))), url(../images/Depositphotos_249018672_XL.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(../images/Depositphotos_249018672_XL.jpg);
    background-position: 0 0, 100% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat
  }

  .hero-internas.residencial-progresso,
  .hero-internas.sao-roque {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .2)), to(rgba(0, 0, 0, .2))), url(../images/Depositphotos_11892194_XL.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(../images/Depositphotos_11892194_XL.jpg)
  }

  .hero-internas.residencial-progresso {
    height: 900px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .27)), to(rgba(0, 0, 0, .27))), url(https://urba.com.br/wp-content/uploads/2022/11/shutterstock_723020353-copiar.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .27), rgba(0, 0, 0, .27)), url(https://urba.com.br/wp-content/uploads/2022/11/shutterstock_723020353-copiar.jpg);
    background-position: 0 0, 50% 50%
  }

  .bold-text {
    padding-right: 15px;
    padding-left: 15px;
    background-color: #ffb719;
    color: #fff;
    font-size: 26px;
    font-weight: 300
  }

  .bold-text.giardino {
    background-color: #ac41d8
  }

  .bold-text.reserva-macauba {
    background-color: #82ea5b;
    color: #006b3f
  }

  .bold-text.jardim-bem-viver {
    background-color: #079d56
  }

  .bold-text.girassois {
    background-color: #ffb719;
    color: #424242
  }

  .bold-text.campos {
    background-color: #ff8b22
  }

  .bold-text.atlanta {
    background-color: #82ea5b;
    color: #006b3f
  }

  .div-selo {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 150px;
    height: 150px;
    margin-bottom: 40px;
    margin-left: 60px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 5px;
    background-image: url(../images/selo.png);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .div-selo.giardino {
    background-color: #fff;
    background-image: url(../images/selo_2.png)
  }

  .div-selo.reserva-macauba {
    background-color: #fff;
    background-image: url(../images/selo_3.png)
  }

  .div-selo.jardim-bem-viver {
    height: 190px;
    background-image: url(../images/selo_1.png);
    background-size: contain
  }

  .div-selo.campos,
  .div-selo.girassois {
    background-color: #fff;
    background-image: url(../images/selo_4.png)
  }

  .div-selo.campos {
    border-radius: 30px;
    background-image: url(../images/selo_5.png)
  }

  .div-selo.tulipas {
    background-color: #fff;
    background-image: url(../images/selo_6.png)
  }

  .div-selo.bem-campos {
    background-image: url(../images/selo_7.png)
  }

  .div-selo.atlanta {
    background-image: url(../images/selo_8.png)
  }

  .infos-terreno {
    padding-top: 60px;
    background-color: #fafafa
  }

  .infos-terreno.monte-mor {
    background-color: #fff
  }

  .infos-terreno,
  .infos-terreno.monte-mor.infos-terreno-monte {
    padding-bottom: 60px
  }

  .div-info-terreno,
  .div-infos-terreno {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .div-infos-terreno.padding-top {
    padding-top: 40px
  }

  .div-info-terreno {
    width: 250px;
    height: 250px;
    margin-right: 10px;
    margin-left: 10px;
    padding: 30px 20px 20px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-right: 1px solid #6e6e6e
  }

  .div-info-terreno.end {
    border-right-style: none
  }

  .image-4 {
    margin-bottom: 30px
  }

  .text-block-8 {
    color: #048548;
    font-size: 16px;
    text-align: center
  }

  .div-text-terreno {
    width: 80%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    text-align: center
  }

  .div-text-terreno.cond {
    width: 90%;
    font-weight: 800
  }

  .div-text-terreno.cond.residencial-progresso {
    margin-bottom: 60px
  }

  .paragraph-16 {
    color: #565656;
    font-size: 16px;
    line-height: 1.8;
    font-weight: 300;
    text-align: center
  }

  .paragraph-16.localiz {
    text-align: left
  }

  .paragraph-16._2 {
    width: 60%;
    margin-right: auto;
    margin-left: auto
  }

  .paragraph-16.itapeva {
    margin-bottom: 40px
  }

  .paragraph-16.itapeva.text-form {
    width: 60%;
    margin: 20px auto 10px;
    font-size: 14px
  }

  .paragraph-16.itapeva.ipca {
    display: none
  }

  .paragraph-16.montemor {
    margin-bottom: 0
  }

  .paragraph-16.montemor.text-form {
    width: 60%;
    margin: 20px auto 10px;
    font-size: 14px
  }

  .paragraph-16.montemor.ipca {
    display: none
  }

  .paragraph-16.montmor {
    margin-bottom: 40px
  }

  .paragraph-16.montmor.text-form {
    width: 100%;
    margin: 20px auto 10px;
    font-size: 14px;
    text-align: left
  }

  .paragraph-16.montmor.ipca {
    display: none
  }

  .caracteristicas {
    position: relative;
    padding-top: 60px;
    padding-bottom: 60px
  }

  .div-caracteristicas {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 40px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .div-caracteristica {
    position: relative;
    overflow: hidden;
    width: 350px;
    min-height: 500px;
    margin-right: 15px;
    margin-left: 15px;
    border-radius: 10px;
    box-shadow: 1px 1px 10px -4px rgba(0, 0, 0, .4)
  }

  .div-caracteristica.reserva-macauba {
    min-height: 640px
  }

  .div-caracteristica.girassois {
    min-height: 525px
  }

  .div-caracteristica.campos {
    min-height: 590px
  }

  .div-caracteristica.portal-das-aguas {
    min-height: 540px
  }

  .div-caracteristica.jardim-bem-viver {
    min-height: 620px
  }

  .div-caracteristica.regatas {
    margin-right: 5px;
    margin-left: 5px
  }

  .imagem-caracteristica {
    position: relative;
    height: 225px;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeriarua-interna.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeriarua-interna.jpg);
    background-position: 0 0, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat
  }

  .imagem-caracteristica._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeriaquadras.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeriaquadras.jpg)
  }

  .imagem-caracteristica._2.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-praça.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-praça.jpg)
  }

  .imagem-caracteristica._2.bem-viver {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground.jpg)
  }

  .imagem-caracteristica._2.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground_2.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground_2.jpg)
  }

  .imagem-caracteristica._2.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground_3.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground_3.jpg)
  }

  .imagem-caracteristica._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .7))), url(../images/area-comercial.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .7)), url(../images/area-comercial.jpg);
    background-position: 0 0, 50% 100%
  }

  .imagem-caracteristica._3.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial.jpg)
  }

  .imagem-caracteristica._3.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial_1.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial_1.jpg)
  }

  .imagem-caracteristica._3.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial_2.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial_2.jpg)
  }

  .imagem-caracteristica.giardino-bianco {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---guarita.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---guarita.jpg)
  }

  .imagem-caracteristica.giardino-bianco._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---rua-interna.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---rua-interna.jpg)
  }

  .imagem-caracteristica.giardino-bianco._2.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-de-lazer.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-de-lazer.jpg)
  }

  .imagem-caracteristica.giardino-bianco._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---piscinas.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---piscinas.jpg)
  }

  .imagem-caracteristica.giardino-bianco._3.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina_2.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina_2.jpg)
  }

  .imagem-caracteristica.giardino-bianco.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita_1.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita_1.jpg)
  }

  .imagem-caracteristica.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna.jpg)
  }

  .imagem-caracteristica.bem-viver {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_1.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_1.jpg)
  }

  .imagem-caracteristica.girassois {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita.jpg)
  }

  .imagem-caracteristica.girassois._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_2.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_2.jpg)
  }

  .imagem-caracteristica.girassois._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina.jpg)
  }

  .imagem-caracteristica.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_3.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_3.jpg)
  }

  .imagem-caracteristica.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_4.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_4.jpg)
  }

  .imagem-caracteristica.atlanta {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita_2.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita_2.jpg)
  }

  .imagem-caracteristica.atlanta._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-aérea.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-aérea.jpg)
  }

  .imagem-caracteristica.atlanta._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina_1.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina_1.jpg)
  }

  .imagem-caracteristica.regatas._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/areaverde.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/areaverde.jpg);
    background-position: 0 0, 50% 50%
  }

  .imagem-caracteristica.regatas._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/parents-their-daughter-are-holding-shopping-bags.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/parents-their-daughter-are-holding-shopping-bags.jpg);
    background-position: 0 0, 50%0;
    background-size: auto, cover
  }

  .imagem-caracteristica.regatas._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/comercial.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/comercial.jpg)
  }

  .imagem-caracteristica.elvira,
  .imagem-caracteristica.regatas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg)
  }

  .imagem-caracteristica.elvira._1 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/INFRAESTRUTURA.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/INFRAESTRUTURA.jpg)
  }

  .imagem-caracteristica.elvira._2 {
    background-position: 0 0, 50% 50%
  }

  .imagem-caracteristica.elvira._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/AREA-COMERCIAL_1.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/AREA-COMERCIAL_1.jpg);
    background-position: 0 0, 50%0;
    background-size: auto, cover
  }

  .imagem-caracteristica.elvira._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/comercial.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/comercial.jpg)
  }

  .imagem-caracteristica.elvira._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/Área-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/Área-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg)
  }

  .paragraph-17 {
    margin: 20px;
    color: #565656;
    line-height: 1.8
  }

  .paragraph-17.regatas {
    margin-right: 10px;
    margin-left: 10px
  }

  .h1,
  .heading-7 {
    margin-top: 0;
    color: #fff
  }

  .heading-7 {
    position: absolute;
    left: 0;
    top: auto;
    right: 0;
    bottom: 0;
    margin-right: 20px;
    margin-left: 20px;
    font-weight: 500;
    text-transform: uppercase
  }

  .h1 {
    margin-bottom: 30px;
    font-family: Ubuntu, Helvetica, sans-serif;
    font-size: 72px;
    line-height: 78px;
    font-weight: 800;
    letter-spacing: -1px
  }

  .text-block-9 {
    margin-bottom: 20px;
    color: #fff;
    font-size: 16px;
    font-weight: 400
  }

  .div-ligue {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 10px;
    padding-top: 15px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .link-2 {
    color: #6e6e6e;
    font-size: 26px;
    font-weight: 500;
    text-decoration: none
  }

  .text-block-10 {
    margin-right: 10px;
    float: left;
    color: #6e6e6e
  }

  .slider-2 {
    height: auto;
    margin-right: -20px;
    margin-left: -20px;
    padding-bottom: 0;
    background-color: transparent
  }

  .slide-nav-2 {
    display: none;
    width: 250px;
    margin-bottom: 10px;
    color: #079d56
  }

  .left-arrow-2 {
    left: 40%;
    top: auto;
    right: auto;
    bottom: 0;
    display: none;
    height: 50px
  }

  .icon {
    margin-top: 12px;
    color: #079d56;
    font-size: 18px
  }

  .right-arrow-2 {
    left: auto;
    top: auto;
    right: 40%;
    bottom: 0;
    display: none;
    height: 50px
  }

  .icon-2 {
    margin-top: 12px;
    color: #079d56;
    font-size: 18px
  }

  .galeria-de-fotos {
    height: 400px;
    background-color: #6e6e6e
  }

  .galeria-de-fotos.itapeva,
  .galeria-de-fotos.monte-mor {
    display: block
  }

  .column-25,
  .columns-5 {
    height: 100%
  }

  .column-25 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding-right: 0;
    padding-left: 40px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #006b3f
  }

  .column-26 {
    height: 100%;
    padding-right: 20px;
    padding-left: 0
  }

  .column-26.regatas {
    padding-right: 0
  }

  .lightbox-link {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    overflow: hidden
  }

  .img-cover-galeria {
    width: 100%;
    height: 100%;
    background-image: url(https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg);
    background-position: 0 0;
    background-size: 125px;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out
  }

  .img-cover-galeria:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05)
  }

  .seta {
    position: absolute;
    left: auto;
    top: 50%;
    right: 0;
    bottom: 0;
    z-index: 1;
    display: none;
    width: 50px;
    height: 50px;
    margin-right: -25px;
    background-color: #006b3f;
    -webkit-transform: translate(0, -50%) rotate(45deg);
    -ms-transform: translate(0, -50%) rotate(45deg);
    transform: translate(0, -50%) rotate(45deg)
  }

  .div-title-info-galeria {
    position: relative;
    width: 80%
  }

  .div-title-info-galeria.dunlop {
    width: 545px
  }

  .localizacao {
    height: 720px;
    background-color: #f7f7f7
  }

  .localizacao.residencial-progresso {
    height: auto;
    margin-top: 80px;
    background-color: transparent
  }

  .column-27,
  .columns-6 {
    height: 100%
  }

  .column-27 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding-left: 40px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .column-27.residencial-progresso {
    padding-right: 40px
  }

  .column-28 {
    height: 100%;
    padding-right: 0;
    padding-left: 0
  }

  .div-title-info-localizacao {
    width: 60%
  }

  .tabs {
    height: 720px
  }

  .tabs.monte-mor {
    display: block
  }

  .tab-pane-tab-1 {
    height: 680px
  }

  .tabs-menu {
    height: 35px;
    margin-top: 5px;
    text-align: left
  }

  .tab-link-tab-1,
  .tab-link-tab-2 {
    height: 40px;
    background-color: #ffb719;
    color: #fff
  }

  .tab-link-tab-1.w--current {
    background-color: #ff8b22;
    color: #fff
  }

  .tab-link-tab-1.elvira {
    background-color: #82ea5b
  }

  .tab-link-tab-1.elvira.w--current {
    background-color: #006b3f
  }

  .tab-link-tab-2.w--current {
    background-color: #ff8b22
  }

  .tab-link-tab-2.w--current:focus {
    background-color: #006b3f
  }

  .tab-link-tab-2.elvira {
    background-color: #82ea5b
  }

  .tab-link-tab-2.elvira.current.w--current,
  .tab-link-tab-2.elvira:active {
    background-color: #006b3f
  }

  .tab-link-tab-2.elvira.current {
    display: none
  }

  .map {
    height: 100%
  }

  .tab-pane-tab-2 {
    height: 680px
  }

  .lightbox-link-2 {
    overflow: hidden;
    height: 100%
  }

  .image-6 {
    height: auto;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out
  }

  .image-6:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05)
  }

  .planta {
    padding-top: 60px;
    padding-bottom: 60px
  }

  .planta.itapeva {
    display: none
  }

  .planta.elvira {
    display: block
  }

  .planta.residencial-progresso {
    display: none
  }

  .bold-text-2 {
    font-size: 12px;
    font-weight: 400
  }

  .columns-7 {
    margin-top: 40px
  }

  .text-block-11 {
    margin-top: -10px;
    color: #079d56;
    font-size: 12px;
    font-weight: 300;
    text-align: center
  }

  .text-block-11.elvira {
    color: #079d56
  }

  .div-img-casa {
    height: 400px;
    background-image: url(../images/fachada.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out
  }

  .div-img-casa:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05)
  }

  .div-img-casa.giardino {
    background-image: url(../images/fachada_1.jpg)
  }

  .div-img-casa.bem-viver {
    background-image: url(../images/fachada_3.jpg)
  }

  .div-img-casa.reserva {
    background-image: url(../images/fachada_2.jpg)
  }

  .div-img-casa.girassois {
    background-image: url(../images/fachada_4.jpg)
  }

  .div-img-casa.campos {
    background-image: url(../images/fachada_5.jpg)
  }

  .div-img-casa.tulipas {
    background-image: url(../images/fachada_6.jpg)
  }

  .div-img-casa.bem-campos {
    background-image: url(../images/fachada_7.jpg)
  }

  .div-img-casa.atlanta {
    background-image: url(../images/fachada_8.jpg)
  }

  .div-img-casa.regatas {
    background-image: url(../images/fachada_9.jpg)
  }

  .div-img-casa.elvira {
    background-image: url(../images/Fachada_10.jpg)
  }

  .column-29,
  .column-30 {
    padding-right: 0;
    padding-left: 0
  }

  .lightbox-link-3 {
    overflow: hidden;
    width: 260px;
    height: 400px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px
  }

  .lightbox-link-4 {
    overflow: hidden;
    width: 100%;
    height: 400px;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px
  }

  .column-31 {
    padding-right: 0;
    padding-left: 0
  }

  .column-31.monte-mor {
    position: relative
  }

  .lightbox-link-5 {
    overflow: hidden;
    width: 210px;
    height: 400px
  }

  .div-planta-01,
  .div-planta-02 {
    width: 210px;
    height: 400px;
    background-image: url(../images/planta01.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out
  }

  .div-planta-01:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05)
  }

  .div-planta-01.giardino {
    background-image: url(../images/planta-01.jpg)
  }

  .div-planta-01.reserva {
    background-image: url(../images/planta-01_1.jpg)
  }

  .div-planta-01.bem-viver {
    background-image: url(../images/planta01_1.jpg)
  }

  .div-planta-01.girassois {
    background-image: url(../images/planta-01_2.jpg)
  }

  .div-planta-01.campos {
    background-image: url(../images/planta-01_3.jpg)
  }

  .div-planta-01.tulipas {
    background-image: url(../images/planta-01_4.jpg)
  }

  .div-planta-01.bem-campos {
    background-image: url(../images/planta-01_5.jpg)
  }

  .div-planta-01.atlanta {
    background-image: url(../images/planta.jpg)
  }

  .div-planta-01.regatas {
    background-image: url(../images/planta-01_6.jpg)
  }

  .div-planta-01.elvira {
    width: 260px;
    background-image: url(../images/Planta-Humanizada_FirstFloor.jpg)
  }

  .div-planta-02 {
    background-image: url(../images/planta02.jpg)
  }

  .div-planta-02:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05)
  }

  .div-planta-02.giardino {
    background-image: url(../images/planta-02.jpg)
  }

  .div-planta-02.reserva {
    background-image: url(../images/planta-02_1.jpg)
  }

  .div-planta-02.bem-viver {
    background-image: url(../images/planta02_1.jpg)
  }

  .div-planta-02.girassois {
    background-image: url(../images/planta-02_2.jpg)
  }

  .div-planta-02.campos {
    background-image: url(../images/planta02_2.jpg)
  }

  .div-planta-02.tulipas {
    background-image: url(../images/planta-02_3.jpg)
  }

  .div-planta-02.bem-campos {
    background-image: url(../images/planta-02_4.jpg)
  }

  .div-planta-02.regatas {
    background-image: url(../images/planta-02_5.jpg)
  }

  .div-planta-02.elvira {
    width: 260px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    background-image: url(../images/Planta-Humanizada_SecondFloor.jpg)
  }

  .andamento-obra {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f7f7f7
  }

  .andamento-obra.elvira,
  .andamento-obra.itapeva {
    display: block
  }

  .div-andamento,
  .div-grafico {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .div-andamento {
    margin-top: 20px
  }

  .div-grafico {
    position: relative;
    width: 100px;
    height: 100px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 2px solid #000
  }

  .div-evolucao {
    position: absolute;
    left: 0;
    top: auto;
    right: 0;
    bottom: 0;
    height: 1px;
    background-color: #82ea5b
  }

  .div-evolucao.paisagismo.iluminacao {
    height: 79px
  }

  .div-evolucao.pavimentacao.bem-viver {
    height: 95px
  }

  .div-evolucao.pavimentacao.elvira {
    background-color: #82ea5b
  }

  .div-evolucao.pavimentacao.elvira._49 {
    height: 49px
  }

  .div-evolucao.pavimentacao.santairia {
    height: 85px;
    background-color: #82ea5b
  }

  .div-evolucao.pavimentacao.agua {
    height: 6px
  }

  .div-evolucao.pavimentacao.vilaprofeta {
    height: 6px;
    background-color: #82ea5b
  }

  .div-evolucao.pavimentacao.dunlop {
    height: 94px
  }

  .div-evolucao.terraplanagem {
    height: 96px
  }

  .div-evolucao.terraplanagem.giardino {
    height: 71px
  }

  .div-evolucao.terraplanagem.reserva {
    height: 79px
  }

  .div-evolucao.agua-e-esgoto,
  .div-evolucao.terraplanagem.bem-viver {
    height: 96px
  }

  .div-evolucao.terraplanagem.elvira._100,
  .div-evolucao.terraplanagem.girassois {
    height: 95px
  }

  .div-evolucao.terraplanagem.elvira {
    background-color: #82ea5b
  }

  .div-evolucao.terraplanagem.itapeva {
    height: 80px
  }

  .div-evolucao.agua-e-esgoto.giardino {
    height: 0
  }

  .div-evolucao.agua-e-esgoto.reserva {
    height: 94px
  }

  .div-evolucao.agua-e-esgoto.bem-viver,
  .div-evolucao.agua-e-esgoto.girassois {
    height: 95px
  }

  .div-evolucao.agua-e-esgoto.elvira {
    background-color: #82ea5b
  }

  .div-evolucao.agua-e-esgoto.elvira._92 {
    height: 92px
  }

  .div-evolucao.agua-e-esgoto.elvira._93,
  .div-evolucao.agua-e-esgoto.itapeva {
    height: 93px
  }

  .div-evolucao.agua-e-esgoto.santairia {
    height: 95px;
    background-color: #82ea5b
  }

  .div-evolucao.agua-e-esgoto.vila-profeta {
    height: 94px
  }

  .div-evolucao.agua-e-esgoto.vila-profeta._95 {
    height: 91px
  }

  .div-evolucao.eletrica {
    height: 78px
  }

  .div-evolucao.eletrica.giardino,
  .div-evolucao.passeios-calcadas {
    height: 0
  }

  .div-evolucao.eletrica.reserva {
    height: 40px
  }

  .div-evolucao.eletrica.girassois {
    height: 71px
  }

  .div-evolucao.eletrica.vila-profeta {
    height: 56px
  }

  .div-evolucao.passeios-calcadas.reserva {
    height: 55px
  }

  .div-evolucao.passeios-calcadas.bem-viver {
    height: 66px
  }

  .div-evolucao.passeios-calcadas.girassois {
    height: 96px
  }

  .div-evolucao.areas-edificaveis {
    height: 18px
  }

  .div-evolucao.areas-edificaveis.giardino {
    height: 12px
  }

  .div-evolucao.areas-edificaveis.bem-viver {
    height: 66px
  }

  .div-evolucao.areas-edificaveis.girassois {
    height: 91px
  }

  .div-evolucao.muro.giardino {
    height: 56px
  }

  .div-evolucao.muro.girassois {
    height: 77px
  }

  .div-evolucao.avenida-de-acesso {
    height: 0
  }

  .div-evolucao.drenagem {
    background-color: #82ea5b;
    height: 85px
  }

  .div-evolucao.drenagem.bem-viver {
    height: 96px
  }

  .div-evolucao.drenagem._100 {
    height: 95px
  }

  .div-evolucao.drenagem.elvira {
    height: 92px
  }

  .div-evolucao.drenagem.profeta {
    height: 88px
  }

  .div-evolucao.drenagem.giardino {
    height: 0
  }

  .div-evolucao.drenagem.reserva {
    height: 40px
  }

  .div-evolucao.drenagem.girassois {
    height: 71px
  }

  .div-evolucao.drenagem.contencao {
    height: 75px
  }

  .div-evolucao.arealazer,
  .div-evolucao.paisagismo,
  .div-evolucao.passeios {
    height: 77px
  }

  .div-evolucao.arealazer.giardino {
    height: 0
  }

  .div-evolucao.arealazer.reserva {
    height: 62px
  }

  .div-evolucao.arealazer.bem-viver,
  .div-evolucao.arealazer.girassois {
    height: 95px
  }

  .div-evolucao.arealazer.elvira {
    background-color: #82ea5b
  }

  .div-evolucao.arealazer.santairia {
    height: 87px;
    background-color: #82ea5b
  }

  .div-evolucao.paisagismo.giardino {
    height: 0
  }

  .div-evolucao.paisagismo.reserva {
    height: 62px
  }

  .div-evolucao.paisagismo.bem-viver,
  .div-evolucao.paisagismo.girassois {
    height: 95px
  }

  .div-evolucao.paisagismo.elvira {
    background-color: #82ea5b
  }

  .div-evolucao.paisagismo.santairia {
    height: 68px;
    background-color: #82ea5b
  }

  .div-evolucao.paisagismo.regatas {
    height: 10px;
    background-color: #82ea5b
  }

  .div-evolucao.passeios.giardino {
    height: 0
  }

  .div-evolucao.passeios.reserva {
    height: 62px
  }

  .div-evolucao.passeios.bem-viver,
  .div-evolucao.passeios.girassois {
    height: 95px
  }

  .div-evolucao.passeios.elvira {
    background-color: #82ea5b
  }

  .div-evolucao.passeios.santairia {
    height: 90px;
    background-color: #82ea5b
  }

  .div-evolucao.terraplanagemelvira {
    height: 89px
  }

  .div-evolucao.terraplanagemelvira.giardino {
    height: 71px
  }

  .div-evolucao.terraplanagemelvira.reserva {
    height: 79px
  }

  .div-evolucao.terraplanagemelvira.bem-viver {
    height: 96px
  }

  .div-evolucao.terraplanagemelvira.elvira._100,
  .div-evolucao.terraplanagemelvira.girassois,
  .div-evolucao.terraplanagemelvira.profeta._100 {
    height: 95px
  }

  .div-evolucao.terraplanagemelvira.elvira {
    height: 89px;
    background-color: #82ea5b
  }

  .div-evolucao.terraplanagemelvira.itapeva {
    height: 96px
  }

  .div-evolucao.terraplanagemelvira.profeta {
    height: 90px;
    background-color: #82ea5b
  }

  .div-evolucao.terraplanagem-dunlop {
    height: 80px
  }

  .div-evolucao.terraplanagem-dunlop.giardino {
    height: 71px
  }

  .div-evolucao.terraplanagem-dunlop.reserva {
    height: 79px
  }

  .div-evolucao.terraplanagem-dunlop.bem-viver {
    height: 96px
  }

  .div-evolucao.terraplanagem-dunlop.elvira._100,
  .div-evolucao.terraplanagem-dunlop.girassois,
  .div-evolucao.terraplanagem-dunlop.profeta._100 {
    height: 95px
  }

  .div-evolucao.terraplanagem-dunlop.elvira {
    height: 89px;
    background-color: #82ea5b
  }

  .div-evolucao.terraplanagem-dunlop.itapeva {
    height: 96px
  }

  .div-evolucao.terraplanagem-dunlop.profeta {
    height: 90px;
    background-color: #82ea5b
  }

  .div-evolucao.drenagem-dunlop {
    height: 74px;
    background-color: #82ea5b
  }

  .div-evolucao.drenagem-dunlop.giardino {
    height: 71px
  }

  .div-evolucao.drenagem-dunlop.reserva {
    height: 79px
  }

  .div-evolucao.drenagem-dunlop.bem-viver {
    height: 96px
  }

  .div-evolucao.drenagem-dunlop._100,
  .div-evolucao.drenagem-dunlop.girassois {
    height: 95px
  }

  .div-evolucao.drenagem-dunlop.elvira {
    height: 92px
  }

  .div-evolucao.drenagem-dunlop.profeta {
    height: 88px
  }

  .div-evolucao.agua-dunlop {
    height: 57px
  }

  .div-evolucao.agua-dunlop.giardino {
    height: 0
  }

  .div-evolucao.agua-dunlop.reserva {
    height: 94px
  }

  .div-evolucao.agua-dunlop.bem-viver,
  .div-evolucao.agua-dunlop.girassois {
    height: 95px
  }

  .div-evolucao.agua-dunlop.elvira {
    background-color: #82ea5b
  }

  .div-evolucao.agua-dunlop.itapeva {
    height: 86px
  }

  .div-evolucao.agua-dunlop.santairia {
    height: 95px;
    background-color: #82ea5b
  }

  .div-evolucao.esgoto-dunlop {
    height: 96px
  }

  .div-evolucao.esgoto-dunlop.giardino {
    height: 0
  }

  .div-evolucao.esgoto-dunlop.reserva {
    height: 94px
  }

  .div-evolucao.esgoto-dunlop.bem-viver,
  .div-evolucao.esgoto-dunlop.girassois {
    height: 95px
  }

  .div-evolucao.esgoto-dunlop.elvira {
    background-color: #82ea5b
  }

  .div-evolucao.esgoto-dunlop.itapeva {
    height: 86px
  }

  .div-evolucao.esgoto-dunlop.santairia {
    height: 95px;
    background-color: #82ea5b
  }

  .div-evolucao.arrimo-dunlop {
    height: 92px
  }

  .div-evolucao.arrimo-dunlop.giardino {
    height: 37px
  }

  .div-evolucao.arrimo-dunlop.reserva {
    height: 15px
  }

  .div-evolucao.arrimo-dunlop.bem-viver {
    height: 86px
  }

  .div-evolucao.arrimo-dunlop.girassois {
    height: 30px
  }

  .div-evolucao.cercamento-dunlop {
    height: 5px
  }

  .div-evolucao.cercamento-dunlop.giardino {
    height: 0
  }

  .div-evolucao.cercamento-dunlop.reserva {
    height: 40px
  }

  .div-evolucao.cercamento-dunlop.girassois {
    height: 71px
  }

  .div-evolucao.reflorestamento-dunlop {
    height: 83px
  }

  .div-evolucao.reflorestamento-dunlop.giardino {
    height: 0
  }

  .div-evolucao.reflorestamento-dunlop.reserva {
    height: 94px
  }

  .div-evolucao.reflorestamento-dunlop.bem-viver,
  .div-evolucao.reflorestamento-dunlop.girassois {
    height: 95px
  }

  .div-evolucao.reflorestamento-dunlop.elvira {
    background-color: #82ea5b
  }

  .div-evolucao.reflorestamento-dunlop.itapeva {
    height: 86px
  }

  .div-evolucao.reflorestamento-dunlop.santairia {
    height: 95px;
    background-color: #82ea5b
  }

  .div-evolucao.eletrica-dunlop {
    height: 20px
  }

  .div-evolucao.eletrica-dunlop.giardino {
    height: 0
  }

  .div-evolucao.eletrica-dunlop.reserva {
    height: 94px
  }

  .div-evolucao.eletrica-dunlop.bem-viver,
  .div-evolucao.eletrica-dunlop.girassois {
    height: 95px
  }

  .div-evolucao.eletrica-dunlop.elvira {
    background-color: #82ea5b
  }

  .div-evolucao.eletrica-dunlop.itapeva {
    height: 86px
  }

  .div-evolucao.eletrica-dunlop.santairia {
    height: 95px;
    background-color: #82ea5b
  }

  .div-evolucao.paisagismo-progresso {
    height: 18px
  }

  .div-evolucao.sinaliza-o {
    height: 45px
  }

  .div-evolucao.sinaliza-o.giardino {
    height: 12px
  }

  .div-evolucao.sinaliza-o.bem-viver {
    height: 66px
  }

  .div-evolucao.sinaliza-o.girassois {
    height: 91px
  }

  .div-evolucao.arrimo {
    height: 11px
  }

  .div-evolucao.arrimo.giardino {
    height: 0
  }

  .div-evolucao.arrimo.reserva {
    height: 40px
  }

  .div-evolucao.arrimo.girassois {
    height: 71px
  }

  .div-evolucao.ciclovia {
    height: 73px
  }

  .div-evolucao.ciclovia.giardino {
    height: 0
  }

  .div-evolucao.ciclovia.reserva {
    height: 94px
  }

  .div-evolucao.ciclovia.bem-viver,
  .div-evolucao.ciclovia.girassois {
    height: 95px
  }

  .div-evolucao.ciclovia.elvira {
    background-color: #82ea5b
  }

  .div-evolucao.ciclovia.itapeva {
    height: 86px
  }

  .div-evolucao.ciclovia.santairia {
    height: 95px;
    background-color: #82ea5b
  }

  .div-evolucao.pavimentacao {
    height: 72px
  }

  .div-evolucao.pavimentacao.giardino {
    height: 0
  }

  .div-evolucao.pavimentacao.reserva {
    height: 40px
  }

  .div-evolucao.pavimentacao.girassois {
    height: 71px
  }

  .div-evolucao.pavimentacao.contencao {
    height: 75px
  }

  .image-7 {
    position: relative;
    z-index: 1
  }

  .div-etapa,
  .div-etapa.escondida {
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .div-etapa {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 150px;
    height: 150px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
  }

  .div-etapa.escondida {
    display: none;
    text-align: left
  }

  .text-block-12 {
    margin-top: 10px;
    font-size: 12px;
    line-height: 1.2;
    text-align: center
  }

  .bold-text-3 {
    font-size: 16px
  }

  .bold-text-3,
  .bold-text-3.elvira {
    color: #079d56
  }

  .formulario,
  .formulario.venda {
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .formulario {
    padding-top: 60px;
    padding-bottom: 60px;
    background-image: url(../images/cta_1.jpg)
  }

  .formulario.venda {
    background-image: url(../images/cta.jpg)
  }

  .formulario.giardino {
    background-image: url(../images/formulario.jpg)
  }

  .formulario.reserva {
    background-image: url(../images/cta_2.jpg)
  }

  .formulario.bem-viver {
    background-image: url(../images/cta_3.jpg)
  }

  .formulario.girassois {
    background-image: url(../images/cta_4.jpg)
  }

  .formulario.bem-campos {
    background-image: url(../images/cta_7.jpg)
  }

  .formulario.atlanta {
    background-image: url(../images/cta_5.jpg);
    background-position: 50% 20%
  }

  .formulario.tulipas {
    background-image: url(../images/cta_8.jpg)
  }

  .formulario.elvira {
    background-image: url(../images/INFRAESTRUTURA.jpg);
    text-align: left
  }

  .formulario.montemor {
    margin-right: 0;
    background-image: url(https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_RUA_CASAS.jpg);
    text-align: left
  }

  .columns-8,
  .form-2 {
    margin-top: 30px
  }

  .form-2 {
    text-align: center
  }

  .form-2.venda {
    margin-top: 40px
  }

  .text-field-2 {
    border-style: none none solid;
    border-width: 1px;
    border-color: #000 #000 #079d56;
    border-radius: 3px;
    background-color: #fff;
    box-shadow: 0 0 12px -3px rgba(0, 0, 0, .15);
    color: #8f8f8f;
    font-weight: 300
  }

  .text-field-2.menor {
    width: 97%
  }

  .field-label {
    margin-bottom: 0;
    padding: 8px 0 8px 12px;
    color: #a5a5a5;
    font-weight: 300;
    text-align: left
  }

  .radio-button-label {
    color: #079d56
  }

  .radio-button-field-2 {
    margin-right: 20px;
    padding-top: 8px;
    padding-bottom: 8px;
    float: left
  }

  .submit-button-2 {
    margin-top: 30px;
    padding-right: 40px;
    padding-left: 40px;
    border-style: solid;
    border-width: 1px;
    border-color: #ac41d8;
    border-radius: 20px;
    background-color: #ac41d8;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in
  }

  .submit-button-2:hover {
    background-color: transparent;
    color: #ac41d8
  }

  .submit-button-2.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #ff8b22, #ffb719);
    color: #fff
  }

  .submit-button-2.regatas:hover {
    background-image: linear-gradient(45deg, #ffb719, #ff8b22), linear-gradient(45deg, #ff8b22, #ffb719);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff
  }

  .columns-10,
  .columns-9 {
    margin-bottom: 10px
  }

  .ficha-tecnica {
    padding-top: 60px;
    padding-bottom: 60px
  }

  .list-item {
    margin-bottom: 10px;
    color: #6e6e6e;
    font-size: 12px
  }

  .columns-11,
  .div-itens-lazer {
    margin-right: auto;
    margin-left: auto
  }

  .columns-11 {
    width: 90%;
    margin-top: 40px
  }

  .div-itens-lazer {
    position: absolute;
    left: 0;
    top: 50%;
    right: 0;
    bottom: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    height: 0;
    max-width: 1000px;
    padding-right: 40px;
    padding-left: 40px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, .95);
    box-shadow: 0 0 13px -5px rgba(0, 0, 0, .4);
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%)
  }

  .text-block-13 {
    padding-bottom: 2px;
    font-weight: 500
  }

  .div-elemento-lazer {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 125px;
    margin-right: 10px;
    margin-left: 10px;
    padding-bottom: 10px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-right: 1px none #c2c2c2
  }

  .div-elemento-lazer.last {
    border-right-style: none
  }

  .div-elemento-lazer.maior {
    width: 170px
  }

  .text-block-14 {
    margin-top: 10px;
    text-align: center
  }

  .div-elementos {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 40px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .div-elementos._1 {
    margin-top: 0
  }

  .bold-text-4,
  .bold-text-5 {
    color: #f7287c;
    font-weight: 500
  }

  .bold-text-4._2 {
    color: #f7287c
  }

  .bold-text-4._3,
  .bold-text-4._4 {
    color: #793f98
  }

  .bold-text-4._5 {
    color: #f7287c
  }

  .bold-text-4._6 {
    color: #ac41d8
  }

  .bold-text-4._7 {
    color: #079d56
  }

  .bold-text-4.lime {
    color: #82ea5b
  }

  .bold-text-5 {
    color: #ff8b22
  }

  .section-texto-sobre {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fff
  }

  .email-ri-urba {
    display: block;
    width: auto;
    margin-top: 30px;
    margin-bottom: 20px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #ff8b22;
    font-size: 25px;
    line-height: 1.8;
    font-weight: 300;
    text-align: center
  }

  .email-ri-urba.legenda {
    margin-top: 20px;
    font-size: 13px;
    font-style: italic;
    text-align: center
  }

  .bold-text-6 {
    font-weight: 500
  }

  .column-33 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding-right: 0;
    padding-left: 0;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start
  }

  .column-33._2 {
    padding-top: 40px
  }

  .div-img-sobre {
    width: auto;
    height: auto;
    margin-top: 10px;
    text-align: left
  }

  .div-img-sobre.venda {
    height: 350px;
    margin-top: 0;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-image: url(../images/slider-empreendimento-03.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .presenca {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f4f4f4
  }

  .div-estados,
  .div-img-sobre.venda {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
  }

  .div-estados {
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto
  }

  .div-estado {
    overflow: hidden;
    width: 250px;
    height: auto;
    margin-right: 10px;
    padding-bottom: 10px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 10px -5px rgba(0, 0, 0, .34);
    text-decoration: none
  }

  .div-block {
    width: 90%;
    margin-right: auto;
    margin-left: auto
  }

  .div-seta-2 {
    width: 12px;
    height: 12px;
    margin-right: 10px;
    float: right;
    border-right: 2px solid #f79c1b;
    border-bottom: 2px solid #ffb700;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg)
  }

  .div-seta-2.atracao {
    border-right-color: #95bc4c;
    border-bottom-color: #98dd18
  }

  .duvida-2 {
    width: 90%;
    float: left;
    color: #e48f16;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 500
  }

  .duvida-2.atracao {
    color: #95bc4c
  }

  .div-img-estado {
    height: 150px;
    background-image: url(../images/bahia.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .div-img-estado._2 {
    background-image: url(../images/minas.jpg)
  }

  .div-img-estado._3 {
    background-image: url(../images/paraiba.jpg)
  }

  .div-img-estado._4 {
    background-image: url(../images/rio-de-janeiro.jpg)
  }

  .div-img-estado._5 {
    background-image: url(../images/sao-paulo.jpg)
  }

  .heading-8 {
    margin: 15px 10px 5px;
    color: #006b3f;
    font-size: 20px;
    font-weight: 400
  }

  .list {
    margin-right: 10px;
    margin-left: 10px
  }

  .list-item-2 {
    margin-bottom: 5px
  }

  .button-5 {
    margin-top: 20px;
    padding-right: 40px;
    padding-left: 40px;
    border-style: solid;
    border-width: 1px;
    border-color: #ac41d8;
    border-radius: 20px;
    background-color: #ac41d8;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    text-transform: uppercase
  }

  .button-5:hover {
    background-color: transparent;
    color: #ac41d8
  }

  .razoes-vender {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fff
  }

  .text-block-15 {
    margin-bottom: 60px;
    color: #ff8b22;
    font-size: 16px
  }

  .text-block-15._2 {
    margin-top: 60px;
    margin-bottom: 30px;
    color: #079d56;
    font-size: 18px
  }

  .text-block-15,
  .text-block-16 {
    text-align: center
  }

  .passo-a-passo {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f7f7f7
  }

  .div-passo-a-passo {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 60px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start
  }

  .div-passo {
    position: relative;
    width: 250px;
    margin-right: 30px;
    margin-left: 30px;
    text-align: center
  }

  .div-numero {
    position: relative;
    z-index: 1;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 80px;
    height: 80px;
    margin-right: auto;
    margin-left: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 100px;
    background-color: #fff;
    box-shadow: 0 0 8px -3px rgba(0, 0, 0, .5)
  }

  .text-block-17 {
    margin-top: 20px;
    color: #006b3f;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 300
  }

  .bold-text-7 {
    color: #ff8b22;
    text-transform: uppercase
  }

  .text-block-18 {
    color: #ff8b22;
    font-size: 40px;
    font-weight: 500
  }

  .div-camino {
    position: absolute;
    left: 50%;
    top: 25%;
    right: auto;
    bottom: auto;
    width: 0;
    height: 4px;
    border-radius: 20px;
    background-color: #079d56
  }

  .heading-9 {
    margin-top: 0;
    margin-bottom: 15px;
    color: #079d56;
    font-size: 20px;
    font-weight: 500
  }

  .columns-12 {
    width: 85%;
    margin-top: 60px;
    margin-right: auto;
    margin-left: auto
  }

  .div-carceristicas-area {
    overflow: hidden;
    min-height: 340px;
    padding: 20px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 5px -3px rgba(0, 0, 0, .5)
  }

  .div-carceristicas-area._2 {
    margin-right: 0;
    margin-left: 0
  }

  .paragraph-19 {
    margin-bottom: 20px;
    color: #6e6e6e;
    font-size: 16px;
    line-height: 1.8;
    font-weight: 300
  }

  .list-2 {
    padding-left: 20px;
    color: #079d56
  }

  .list-item-3 {
    margin-bottom: 10px;
    font-size: 16px
  }

  .paragraph-20 {
    width: 70%;
    margin-right: auto;
    margin-left: auto;
    color: #ff8b22;
    font-size: 16px;
    font-weight: 300;
    text-align: center
  }

  .principais-duvidas {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fcfcfc
  }

  .div-principais-duvidas {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 80%;
    margin: 40px auto 20px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .div-principais-duvidas._2 {
    margin-top: 0
  }

  .div-principal-duvida {
    width: 300px;
    height: 200px;
    margin-right: 10px;
    margin-left: 10px;
    padding: 20px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 10px -5px rgba(0, 0, 0, .4);
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #5f5f5f;
    text-decoration: none
  }

  .div-principal-duvida:hover {
    background-color: #f7f7f7;
    color: #5e5e5e
  }

  .div-principal-duvida.oculto {
    display: none
  }

  .text-block-19 {
    margin-top: 10px;
    margin-bottom: 15px;
    color: #ff8b22;
    font-size: 18px;
    font-weight: 500;
    text-align: center
  }

  .paragraph-21 {
    color: #079d56;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 300;
    text-align: center
  }

  .div-entre-contato {
    display: none;
    width: 80%;
    margin-right: auto;
    margin-left: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .div-contato,
  .div-entre-contato._2 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
  }

  .div-contato {
    width: 200px;
    height: 60px;
    margin-right: 10px;
    margin-left: 10px;
    padding: 10px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 5px;
    background-color: #ff8b22;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
    text-decoration: none
  }

  .div-contato:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05)
  }

  .text-block-20 {
    color: #fff;
    font-size: 18px;
    font-weight: 300;
    text-align: center
  }

  .text-block-20._2 {
    margin-top: -5px
  }

  .bold-text-8 {
    font-size: 14px;
    font-weight: 300
  }

  .portal-financeiro {
    overflow: hidden;
    height: 0;
    padding-top: 0;
    padding-bottom: 0;
    background-color: #f7f7f7
  }

  .text-block-21 {
    color: #6e6e6e;
    font-size: 16px
  }

  .text-block-21.vizinho {
    width: 50%;
    margin-right: auto;
    margin-bottom: 20px;
    margin-left: auto;
    line-height: 1.5;
    text-align: center
  }

  .heading-27.com._32px.branco.minha-casa,
  .text-block-21._2 {
    margin-bottom: 20px
  }

  .list-3 {
    margin-top: 20px;
    padding-bottom: 60px;
    padding-left: 15px
  }

  .link-3 {
    display: inline;
    padding-right: 5px;
    padding-left: 5px;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #ff8b22;
    text-decoration: none
  }

  .link-3:hover {
    background-color: #ff8b22;
    color: #fff;
    font-weight: 300
  }

  .list-item-4 {
    margin-bottom: 10px;
    color: #ff8b22;
    line-height: 1.5
  }

  .duvidas-frequentes,
  .sobre-meu-lote,
  .suporte,
  .vizinho-premiado {
    overflow: hidden;
    height: 0;
    background-color: #f7f7f7
  }

  .text-block-22 {
    margin-bottom: 20px;
    color: #ff8b22;
    font-size: 18px;
    font-weight: 500
  }

  .paragraph-22 {
    margin-top: 10px;
    color: #565656;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 300
  }

  .columns-13 {
    width: 80%;
    margin-right: auto;
    margin-left: auto
  }

  .sobre-vizinho-premiado {
    min-height: 280px;
    padding: 20px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 10px -4px rgba(0, 0, 0, .5)
  }

  .text-block-23 {
    margin-top: 40px;
    margin-bottom: 20px;
    color: #793f98;
    font-size: 16px
  }

  .div-button,
  .text-block-23 {
    text-align: center
  }

  .div-button._2 {
    width: 60%;
    margin: 20px auto
  }

  .button-6 {
    padding-right: 40px;
    padding-left: 40px;
    border-style: solid;
    border-width: 1px;
    border-color: #ac41d8;
    border-radius: 20px;
    background-color: #ac41d8;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    text-transform: uppercase
  }

  .button-6:hover {
    background-color: transparent;
    color: #ac41d8
  }

  .heading-10 {
    margin-top: 60px;
    color: #079d56;
    font-size: 20px;
    font-weight: 500;
    text-align: center
  }

  .paragraph-23 {
    color: #6e6e6e;
    font-size: 16px;
    text-align: center
  }

  .div-forms-indicacao {
    width: 80%;
    margin: 20px auto 60px;
    padding: 20px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 6px -2px rgba(0, 0, 0, .3)
  }

  .field-label-2 {
    margin-bottom: 10px;
    padding-left: 10px;
    color: gray;
    font-weight: 400;
    text-align: left
  }

  .field-label-2._2 {
    margin-top: 20px;
    text-align: left
  }

  .form-3 {
    text-align: center
  }

  .marketplace {
    overflow: hidden;
    height: 0;
    background-color: #f7f7f7
  }

  .paragraph-24 {
    width: 70%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    font-size: 16px;
    line-height: 1.8;
    font-weight: 300;
    text-align: center
  }

  .div-filtros-busca {
    width: 70%;
    margin: 20px auto
  }

  .div-marca-parceiros,
  .div-parceiros {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .div-parceiros {
    width: 70%;
    margin-right: auto;
    margin-bottom: 20px;
    margin-left: auto
  }

  .div-parceiros.last {
    padding-bottom: 60px
  }

  .div-marca-parceiros {
    width: 200px;
    height: 100px;
    margin-right: 10px;
    margin-left: 10px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 5px;
    background-color: #fff;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%)
  }

  .div-marca-parceiros:hover {
    -webkit-filter: none;
    filter: none
  }

  .section-map {
    padding-top: 60px;
    padding-bottom: 80px
  }

  .button-7 {
    padding-right: 35px;
    padding-left: 35px;
    border-style: solid;
    border-width: 1px;
    border-color: #ff8b22;
    border-radius: 20px;
    background-color: #ff8b22;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    font-size: 16px;
    text-align: center;
    text-transform: capitalize
  }

  .button-7:hover {
    background-color: transparent;
    color: #ff8b22
  }

  .columns-14 {
    width: 80%;
    margin-top: 60px;
    margin-right: auto;
    margin-left: auto
  }

  .column-35,
  .column-36 {
    padding-top: 2px
  }

  .column-37 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .div-lojas {
    overflow: hidden;
    width: 90%;
    height: 0;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto
  }

  .div-loja {
    margin-top: 20px;
    padding: 10px 10px 15px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 10px -3px rgba(0, 0, 0, .15)
  }

  .div-loja._1 {
    margin-top: 10px
  }

  .text-block-24 {
    padding-bottom: 5px;
    padding-left: 5px;
    border-bottom: 1px solid #ff8b22;
    color: #079d56;
    font-size: 18px;
    font-weight: 500
  }

  .endereco,
  .telefone {
    margin-top: 15px;
    padding-left: 5px;
    color: #6e6e6e
  }

  .telefone {
    margin-top: 5px;
    font-weight: 300
  }

  .heading-11 {
    margin-top: 60px;
    font-size: 18px;
    font-weight: 400;
    text-align: center
  }

  .list-item-5 {
    margin-bottom: 10px;
    color: #565656;
    text-align: left;
    list-style-type: lower-alpha
  }

  .list-4 {
    padding-left: 20px
  }

  .form-4 {
    width: 40%;
    margin-right: auto;
    margin-left: auto
  }

  .div-explicacao {
    position: absolute;
    left: 0;
    top: auto;
    right: 0;
    bottom: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    height: 0;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, .95)
  }

  .paragraph-25 {
    margin: 20px;
    color: #079d56;
    font-size: 16px;
    line-height: 1.5;
    text-align: center
  }

  .div-lightbox-andamento {
    margin-top: 40px;
    text-align: center
  }

  .text-block-25 {
    padding: 9px 35px;
    border-style: solid;
    border-width: 1px;
    border-color: #ac41d8;
    border-radius: 5px;
    background-color: #ac41d8;
    color: #fff;
    text-transform: uppercase
  }

  .text-block-25:hover {
    background-color: transparent;
    color: #ac41d8
  }

  .lightbox-link-6,
  .text-block-25 {
    text-decoration: none
  }

  .div-duvidas {
    margin-top: 5px;
    margin-bottom: 0
  }

  .div-duvidas.last {
    padding-bottom: 60px
  }

  .duvida-frequente {
    margin-bottom: 10px;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    cursor: pointer
  }

  .duvida-frequente:hover {
    -webkit-transform: translate(10px, 0);
    -ms-transform: translate(10px, 0);
    transform: translate(10px, 0)
  }

  .duvida-frequente.last {
    margin-bottom: 60px
  }

  .text-block-26 {
    display: inline;
    margin-right: 20px;
    float: left;
    color: #ff8b22;
    font-weight: 700
  }

  .text-block-27 {
    display: inline;
    color: #079d56;
    font-size: 16px;
    font-weight: 500
  }

  .div-perguntas {
    overflow: hidden;
    height: 0
  }

  .div-block-2 {
    height: 1px
  }

  .columns-15,
  .multimidia.bem-viver-campos,
  .multimidia.giardino,
  .multimidia.reserva {
    display: none
  }

  .text-block-28 {
    margin-bottom: 20px;
    color: #6e6e6e;
    font-size: 12px;
    text-align: center
  }

  .select-field-2 {
    background-color: #fff
  }

  .multimidia {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f8f8f8
  }

  .multimidia.elvira {
    display: block
  }

  .div-midia {
    overflow: hidden;
    width: 720px;
    height: auto;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    border-radius: 10px;
    box-shadow: 0 0 8px -4px rgba(0, 0, 0, .5)
  }

  .contact {
    height: 800px;
    padding-top: 100px;
    background-image: url(../images/hero_v2.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .col-contato {
    position: relative;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%)
  }

  .div-forms-contato {
    padding: 40px 20px 20px;
    border-radius: 10px;
    background-color: #fff
  }

  .heading-12 {
    font-weight: 500;
    text-align: center;
    text-transform: capitalize
  }

  .heading-13 {
    width: 60%;
    color: #6e6e6e;
    font-size: 40px;
    line-height: 1.3;
    font-weight: 300
  }

  .paragraph-26 {
    width: 60%;
    color: #ff8b22;
    font-size: 18px;
    line-height: 1.6
  }

  .textarea {
    min-height: 150px;
    margin-top: 20px;
    border-style: solid;
    border-width: 1px;
    border-color: #079d56;
    border-radius: 5px
  }

  .form-5 {
    text-align: center
  }

  .select-field-3 {
    margin-bottom: 15px
  }

  .nav-link {
    padding-top: 10px;
    padding-bottom: 8px;
    border-bottom: 2px solid transparent;
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    color: #079d56;
    font-weight: 400;
    letter-spacing: .2px
  }

  .nav-link:hover {
    border-bottom: 2px solid #ff8b22
  }

  .nav-link.w--current {
    border-bottom-color: #ff8b22;
    color: #006b3f
  }

  .slide-4 {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/slider-empreendimento-04.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/slider-empreendimento-04.jpg);
    background-position: 0 0, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat
  }

  .escolha-cidade {
    margin-top: 20px;
    border: 1px #000;
    background-color: #fff;
    box-shadow: 0 5px 15px -3px rgba(0, 107, 63, .25);
    color: #ff8b22
  }

  .escolha-cidade.lojas,
  .escolha-cidade.motivo-contato,
  .escolha-cidade.uf {
    margin-top: 0
  }

  .bold-text-9 {
    color: #079d56;
    font-weight: 600
  }

  .div-block-3 {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
    z-index: -1;
    width: 600px;
    height: 600px;
    background-image: url(../images/pai-filho.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .bold-text-10,
  .bold-text-11 {
    color: #fff;
    font-weight: 600
  }

  .destaque-h2-laranja {
    color: #079d56;
    font-weight: 600
  }

  .destaque-h2-laranja.lime {
    color: #82ea5b
  }

  .destaque-h2-laranja.roxo {
    color: #793f98
  }

  .destaque-h2-laranja.itapeva {
    color: #ac41d8;
    text-shadow: none
  }

  .destaque-h2-laranja.elvira {
    color: #079d56
  }

  .destaque-h2-laranja.dunlop,
  .destaque-h2-laranja.vilaprofeta {
    color: #ff8b22
  }

  .bold-text-12 {
    color: #006b3f
  }

  .bold-text-12,
  .bold-text-13,
  .bold-text-14 {
    font-weight: 600
  }

  .bold-text-15 {
    color: #006b3f
  }

  .contato-imediato-mobile {
    position: fixed;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 5;
    display: none;
    width: 100px;
    height: 100vh;
    padding-top: 100px;
    padding-right: 20px;
    padding-left: 20px
  }

  .bold-text-16 {
    color: #ff8b22
  }

  .column-39 {
    padding-right: 0;
    padding-left: 20px
  }

  .bold-text-17 {
    color: #ff8b22
  }

  .bold-text-18 {
    color: #82ea5b;
    font-weight: 600
  }

  .column-45 {
    display: block;
    height: 510px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .bold-text-19,
  .bold-text-20,
  .bold-text-21,
  .bold-text-22 {
    color: #ff8b22
  }

  .bold-text-23,
  .link-4 {
    color: #82ea5b;
    font-weight: 500
  }

  .link-4 {
    color: #ac41d8;
    text-decoration: underline
  }

  .bold-text-24,
  .bold-text-25 {
    color: #ff8b22
  }

  .text-field-3 {
    border-radius: 100px;
    color: #006b3f;
    font-weight: 400;
    text-align: center
  }

  .container {
    height: 100%;
    max-width: 1280px;
    padding-right: 10px;
    padding-left: 10px
  }

  .h3-form-news {
    margin-top: 10px;
    margin-bottom: 20px;
    color: #6e6e6e;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 300;
    text-align: center
  }

  .success-message {
    padding-right: 10px;
    padding-left: 10px;
    background-color: transparent
  }

  .link-block-3 {
    margin-top: 30px;
    margin-left: 60px;
    padding-top: 5px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in
  }

  .link-block-3:hover {
    -webkit-filter: none;
    filter: none;
    -webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    transform: scale(1.3)
  }

  .nav-link-2 {
    margin-top: 30px;
    padding-top: 10px;
    padding-bottom: 5px;
    border-bottom: 2px solid transparent;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #079d56;
    font-weight: 400
  }

  .nav-link-2:hover {
    border-bottom: 2px solid #ff8b22;
    -webkit-transform: translate(-10px, 0);
    -ms-transform: translate(-10px, 0);
    transform: translate(-10px, 0)
  }

  .nav-link-2.w--current {
    border-bottom-color: #ff8b22;
    color: #006b3f
  }

  .link-block-2 {
    margin-top: 20px
  }

  .nav-menu-2 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .dropdown-news {
    margin-top: 30px;
    margin-left: 60px
  }

  .text-block-29 {
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: .3px
  }

  .drop-form-news.w--open {
    position: absolute;
    width: 250px;
    margin-top: 15px;
    margin-left: -20px;
    padding: 20px 10px 10px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 6px -2px rgba(0, 0, 0, .3)
  }

  .dropdown-button {
    padding: 10px 20px;
    border-radius: 100px;
    background-color: #ac41d8;
    box-shadow: 0 5px 15px -5px #ac41d8;
    -webkit-transition: opacity 250ms ease-in;
    transition: opacity 250ms ease-in;
    font-weight: 700
  }

  .dropdown-button:hover {
    box-shadow: 0 5px 20px -1px #ac41d8;
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03)
  }

  .text-block-30 {
    color: #ac41d8;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 400
  }

  .form-block-2 {
    margin-bottom: 0
  }

  .seta-drop {
    position: absolute;
    left: 50%;
    top: 0;
    right: 0;
    bottom: auto;
    width: 25px;
    height: 25px;
    margin-top: -10px;
    border-radius: 5px;
    background-color: #fff;
    -webkit-transform: translate(-50%, 0) rotate(45deg);
    -ms-transform: translate(-50%, 0) rotate(45deg);
    transform: translate(-50%, 0) rotate(45deg)
  }

  .submit-button-3 {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 35px;
    padding-left: 35px;
    border-style: solid;
    border-width: 1px;
    border-color: #ff8b22;
    border-radius: 100px;
    background-color: #ff8b22;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    font-size: 14px
  }

  .submit-button-3:hover {
    background-color: transparent;
    color: #ff8b22
  }

  .navbar-2 {
    position: fixed;
    width: 100%;
    height: 120px;
    padding-top: 10px;
    border-bottom: 2px solid transparent;
    background-color: #fff
  }

  .navbar-2.interna {
    border-bottom-color: #ff8b22
  }

  .titulo-post-anterior {
    margin-top: 0;
    border-bottom: 1px solid #079d56;
    color: #6e6e6e;
    font-size: 18px;
    font-weight: 400
  }

  .div-busca {
    overflow: hidden;
    height: 0;
    background-color: #006b3f
  }

  .autor {
    margin-top: 5px;
    float: left;
    color: #7a7a7a
  }

  .autor.relacionados {
    margin-top: 15px;
    margin-left: 10px
  }

  .autor.interna {
    margin-top: 15px
  }

  .text-field-4 {
    margin-bottom: 0;
    border: 1.3px solid transparent;
    border-radius: 100px
  }

  .heading-14 {
    padding-left: 10px;
    border-bottom: 1px none #31d2cc;
    color: #6e6e6e;
    font-size: 30px;
    font-weight: 200
  }

  .button-8 {
    padding-top: 5px;
    padding-bottom: 4px;
    float: right;
    border-style: solid;
    border-width: 1px;
    border-color: #ff8b22;
    border-radius: 100px;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #ff8b22;
    font-weight: 300
  }

  .button-8:hover,
  .button-9.relacionados:hover {
    background-color: #ff8b22;
    color: #fff
  }

  .button-8,
  .categoria,
  .slider-3 {
    background-color: transparent
  }

  .slider-3 {
    height: auto;
    padding-bottom: 70px
  }

  .categoria {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
    margin-top: 20px;
    margin-left: 20px;
    padding: 5px 10px 3px;
    border: 2px solid #fff;
    border-radius: 100px;
    color: #fff;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: .5px;
    text-transform: uppercase
  }

  .div-destaque-lateral {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 400px;
    padding: 20px;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
    border-radius: 10px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-baixo-01.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-baixo-01.jpg);
    background-position: 0 0, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
    box-shadow: 0 0 15px -5px rgba(0, 0, 0, .5);
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    text-decoration: none
  }

  .div-destaque-lateral:hover {
    -webkit-transform: scale(1.01);
    -ms-transform: scale(1.01);
    transform: scale(1.01)
  }

  .div-destaque-lateral._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-baixo-03.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-baixo-03.jpg);
    background-position: 0 0, 50% 50%
  }

  .div-destaque-lateral._2,
  .div-destaque-lateral._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-destaque-lateral.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-destaque-lateral.jpg);
    background-position: 0 0, 50% 50%
  }

  .div-destaque-lateral._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-baixo-02.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-baixo-02.jpg)
  }

  .post-anterior {
    margin-top: 20px;
    padding: 10px 20px;
    border-radius: 5px;
    box-shadow: 0 0 4px 0 rgba(0, 0, 0, .1)
  }

  .heading-15 {
    width: 80%;
    margin-bottom: 0;
    color: #fff;
    font-weight: 500;
    text-decoration: none
  }

  .heading-15._02 {
    width: 100%;
    font-size: 28px;
    line-height: 1.3
  }

  .dvi-cta,
  .dvi-cta.home {
    border-style: solid;
    border-width: 2px;
    border-color: #079d56;
    background-image: url(../images/banner-lateral.png)
  }

  .dvi-cta {
    width: 280px;
    height: 420px;
    margin-top: 30px;
    border-radius: 10px;
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .dvi-cta.home {
    width: 400px;
    height: 600px
  }

  .data-publicacao {
    margin-top: 5px;
    margin-left: 20px;
    padding-left: 20px;
    float: left;
    border-left: 1px solid #7a7a7a;
    color: #7a7a7a;
    font-size: 12px
  }

  .data-publicacao.interna {
    margin-top: 15px
  }

  .data-publicacao.relacionados {
    margin-top: 0;
    margin-left: 10px;
    padding-left: 0;
    clear: left;
    border-left-style: none
  }

  .columns-16 {
    margin-top: 40px;
    padding-top: 40px;
    border-top: 1px solid #ff8b22
  }

  .div-ad {
    height: 250px;
    margin-top: 20px;
    border-radius: 10px;
    background-image: url(../images/banner-superior.jpg);
    background-position: 50% 50%;
    background-size: cover
  }

  .section-posts {
    position: relative;
    padding-top: 120px;
    padding-bottom: 60px
  }

  .submit-button-4 {
    padding-right: 35px;
    padding-left: 35px;
    border-style: solid;
    border-width: 1.3px;
    border-color: #82ea5b;
    border-radius: 100px;
    background-color: transparent;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #82ea5b
  }

  .submit-button-4:hover {
    background-color: #82ea5b;
    color: #006b3f
  }

  .div-post-destaque {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 400px;
    padding: 20px;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
    border-radius: 10px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-destaque.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-destaque.jpg);
    background-position: 0 0, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
    box-shadow: 0 0 15px -5px rgba(0, 0, 0, .5);
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    text-decoration: none
  }

  .div-post-destaque:hover {
    -webkit-transform: scale(1.01);
    -ms-transform: scale(1.01);
    transform: scale(1.01)
  }

  .grid-2 {
    margin-top: 20px;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto
  }

  .column-48 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding-right: 0;
    padding-left: 0;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end
  }

  .grid {
    margin-top: 20px;
    -ms-grid-columns: 2fr 1fr;
    grid-template-columns: 2fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto
  }

  .container-padrao-2,
  .slide-5 {
    padding-right: 10px;
    padding-left: 10px
  }

  .container-padrao-2 {
    height: 100%;
    max-width: 1280px;
    margin-right: auto;
    margin-left: auto
  }

  .slide-5 {
    padding-bottom: 10px
  }

  .column-2 {
    padding-right: 10px;
    padding-left: 0
  }

  .form-block-3 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    margin-bottom: 0;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .bold-text-26 {
    color: #079d56;
    font-weight: 500
  }

  .img-autor {
    margin-right: 10px;
    float: left;
    border-radius: 100px
  }

  .post-relacionado {
    position: relative;
    overflow: hidden;
    width: 300px;
    height: 250px;
    margin-right: 10px;
    padding-bottom: 40px;
    border-radius: 10px;
    box-shadow: 0 0 6px -3px rgba(0, 0, 0, .5)
  }

  .post-relacionado.last {
    margin-right: 0
  }

  .link-block {
    margin-right: 10px
  }

  .div-busca-2 {
    overflow: hidden;
    height: 0;
    background-color: #33c
  }

  .button-9,
  .heading-16 {
    font-family: Montserrat, sans-serif
  }

  .heading-16 {
    padding-left: 10px;
    border-bottom: 1px none #31d2cc;
    color: #33c;
    font-size: 30px;
    font-weight: 600
  }

  .heading-16.interna {
    margin-top: 60px;
    padding-left: 5px;
    color: #6e6e6e;
    font-size: 26px;
    font-weight: 300
  }

  .heading-16.relacionados {
    border-bottom-style: solid;
    border-bottom-color: #ff8b22;
    color: #6e6e6e;
    font-size: 26px;
    font-weight: 300
  }

  .button-9 {
    padding-top: 5px;
    padding-bottom: 5px;
    float: right;
    border-style: solid;
    border-width: 1.4px;
    border-color: #31d2cc;
    border-radius: 100px;
    background-color: transparent;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #31d2cc;
    font-weight: 300
  }

  .button-9:hover {
    background-color: #31d2cc;
    color: #fff
  }

  .button-9.relacionados {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    margin-right: 5px;
    margin-bottom: 15px;
    padding-right: 10px;
    padding-left: 10px;
    float: none;
    border-color: #ff8b22;
    color: #ff8b22
  }

  .paragraph-2 {
    width: 90%;
    margin-bottom: 40px;
    padding-right: 10px;
    font-family: Roboto, sans-serif;
    color: #565656;
    font-size: 20px;
    line-height: 1.6;
    font-weight: 300;
    letter-spacing: .2px
  }

  .heading-17 {
    margin-top: 10px;
    color: #006b3f;
    font-size: 50px;
    line-height: 1.1;
    font-weight: 500
  }

  .paragraph-27 {
    width: 100%;
    margin-top: 25px;
    font-family: Roboto, sans-serif;
    color: #929292;
    font-size: 20px;
    line-height: 1.5;
    font-weight: 300
  }

  .text-block-31 {
    color: #ff8b22;
    font-weight: 600
  }

  .column-4 {
    padding-right: 10px;
    padding-left: 0;
    border-right: 1px solid #e9e9e9
  }

  .column-3 {
    padding-right: 0;
    padding-left: 25px
  }

  .heading-18 {
    width: 80%;
    margin-bottom: 0;
    color: #fff;
    text-decoration: none
  }

  .heading-18._02 {
    width: 100%;
    font-size: 28px;
    line-height: 1.3
  }

  .heading-18._02.relacionado {
    margin-top: 0;
    font-size: 16px;
    font-weight: 500
  }

  .div-img-postrelacionado {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 180px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-destaque-lateral.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-destaque-lateral.jpg);
    background-position: 0 0, 50% 20%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat
  }

  .div-img-postrelacionado._2,
  .div-img-postrelacionado._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-baixo-03.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-baixo-03.jpg);
    background-position: 0 0, 50% 50%
  }

  .div-img-postrelacionado._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-baixo-02.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-baixo-02.jpg)
  }

  .content-cta {
    width: 80%;
    margin-top: 80px;
    margin-right: auto;
    margin-left: auto
  }

  .list-item-6 {
    margin-bottom: 15px;
    padding-bottom: 5px;
    padding-left: 5px;
    border-bottom: 1px solid #ff8b22;
    color: #6e6e6e;
    font-size: 16px;
    line-height: 1.4;
    font-weight: 400
  }

  .section {
    padding-top: 120px;
    padding-bottom: 60px
  }

  .submit-button-5 {
    padding-right: 35px;
    padding-left: 35px;
    border: 1.3px solid #fff;
    border-radius: 100px;
    background-color: transparent;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in
  }

  .submit-button-5:hover {
    background-color: #fff;
    color: #33c
  }

  .div-autor-data,
  .list-6 {
    margin-top: 20px
  }

  .link-5 {
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    color: #565656;
    font-weight: 300;
    text-decoration: none
  }

  .link-5:hover {
    color: #079d56
  }

  .div-img-postinterna {
    width: 80%;
    height: 500px;
    margin-right: auto;
    margin-left: auto;
    border-radius: 10px;
    background-image: url(../images/casal-com-nova-casa.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .div-img-postinterna._2 {
    background-image: url(../images/urba-2.jpg)
  }

  .div-img-postinterna._3 {
    background-image: url(../images/Guarita.jpg)
  }

  .posts-relacionados {
    margin-top: 80px;
    margin-bottom: 60px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .heading-19,
  .text-block-32 {
    margin-bottom: 10px;
    color: #079d56
  }

  .heading-19 {
    width: 90%;
    margin-top: 0;
    margin-bottom: 20px;
    font-family: Poppins, sans-serif;
    font-weight: 300
  }

  .heading-19._2 {
    font-size: 32px;
    line-height: 36px
  }

  .post-main-info,
  .posts {
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .post-main-info {
    width: 80%;
    margin: 40px auto;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .posts {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 20px
  }

  .secao-material-destaque {
    height: auto;
    padding-top: 120px;
    border-bottom: 1px none #b30404;
    background-color: #fff
  }

  .conteiner-padrao {
    position: relative;
    display: block;
    overflow: hidden;
    max-width: 1280px;
    margin-top: 0;
    margin-right: auto;
    margin-left: auto;
    padding-right: 10px;
    padding-left: 10px
  }

  .imagem-material-destque {
    width: 340px;
    height: 340px;
    margin-top: 30px;
    margin-right: 20px;
    float: left;
    background-image: url(../images/Livro.png);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .titulo-material-destaque {
    margin-top: 80px;
    margin-bottom: 25px;
    margin-left: 0;
    padding-right: 25px;
    padding-bottom: 5px;
    float: left;
    border-bottom: 2px solid #ff8b22;
    color: #006b3f;
    font-weight: 400
  }

  .paragraph-3 {
    width: 65%;
    margin-bottom: 50px;
    float: left;
    color: #7a7a7a;
    font-size: 16px;
    line-height: 1.6;
    font-weight: 400
  }

  .botao-materiais,
  .botao-materiais:hover {
    border-style: solid;
    border-width: 1px;
    border-color: #793f98
  }

  .botao-materiais {
    padding-right: 25px;
    padding-bottom: 8px;
    padding-left: 25px;
    float: left;
    border-radius: 100px;
    background-color: transparent;
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;
    color: #793f98;
    font-weight: 500
  }

  .botao-materiais:hover {
    background-color: #793f98;
    color: #fff
  }

  .botao-materiais:active {
    background-color: #ac41d8;
    color: #fff
  }

  .conteiner-padrao-2 {
    position: relative;
    display: block;
    overflow: hidden;
    max-width: 1280px;
    margin-top: 0;
    margin-right: auto;
    margin-left: auto;
    padding-right: 20px;
    padding-left: 20px
  }

  .conteiner-padrao-2.selecao-categoria-material {
    overflow: visible;
    padding-right: 20px;
    padding-left: 20px
  }

  .dropdown-link {
    width: 90%;
    margin-left: 20px;
    border-style: none solid solid;
    border-width: 1px;
    border-color: #f63 #006b3f #006b3f;
    background-color: rgba(255, 255, 255, .95);
    color: #006b3f
  }

  .dropdown-link:hover {
    color: #ff8b22
  }

  .pai-dropdown-categoria-materiais {
    width: 95%;
    margin-top: 30px;
    border: 1px solid #fff;
    border-radius: 100px;
    color: #fff
  }

  .text-block-33 {
    color: #fff;
    font-size: 18px;
    font-weight: 300;
    text-align: left
  }

  .campo-pesquisa {
    width: 90%;
    margin-top: 0;
    margin-bottom: 0;
    float: left;
    border: 1px #000
  }

  .campo-pesquisa:focus {
    border-bottom: 1px solid #31d2cc
  }

  .image-8 {
    margin-top: 0;
    margin-left: 0;
    padding: 5px;
    float: right;
    cursor: pointer
  }

  .dropdown-categoria {
    width: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
    color: #fff;
    font-weight: 300
  }

  .icon-4 {
    color: #fff
  }

  .dropdown-list {
    background-color: transparent
  }

  .dropdown-list.w--open {
    margin-top: -5px
  }

  .form-block-4 {
    margin-top: 30px;
    border: 1px solid transparent
  }

  .coluna-busca {
    padding-top: 0;
    padding-left: 0;
    border-right: 1px none #000
  }

  .busca-materiais {
    padding-bottom: 15px;
    border-bottom: 1px none #b30404;
    background-color: #079d56
  }

  .colunas-materiais {
    height: auto;
    margin-bottom: 40px
  }

  .imagem-material-segundario {
    height: 350px;
    background-color: #fff;
    background-image: url(../images/Livro.png);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .titulo-categoria-materiais {
    margin-bottom: 20px;
    padding-top: 15px;
    padding-bottom: 5px;
    padding-left: 20px;
    border-bottom: 2px solid #079d56;
    color: #ff8b22;
    font-size: 25px;
    font-weight: 300
  }

  .coluna-individual-material {
    height: 100%;
    padding-right: 20px;
    padding-left: 20px
  }

  .botao-material-secundario {
    position: static;
    left: 0;
    right: 0;
    bottom: 0;
    display: block;
    margin: 10px auto;
    padding-bottom: 8px;
    border-style: solid;
    border-width: 1px;
    border-color: #793f98;
    border-radius: 100px;
    background-color: transparent;
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;
    color: #793f98;
    font-weight: 500;
    text-align: center;
    text-transform: uppercase
  }

  .botao-material-secundario:hover {
    border-style: solid;
    border-width: 1px;
    border-color: #31d2cc;
    background-color: #793f98;
    color: #fff
  }

  .botao-material-secundario:active {
    background-color: #ac41d8;
    color: #fff
  }

  .titulo-material-secundario {
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 2px solid #ff8b22;
    color: #006b3f;
    font-size: 20px;
    line-height: 25px;
    font-weight: 400;
    text-align: left
  }

  .texto-material {
    margin-bottom: 20px;
    color: #7a7a7a;
    line-height: 1.5
  }

  .bold-text-27 {
    display: inline-block;
    height: 60px;
    padding-right: 10px;
    padding-left: 10px;
    border-bottom: 2px solid transparent;
    background-color: transparent;
    font-weight: 500
  }

  .bold-text-28 {
    color: #ff8b22
  }

  .div-direcional-galeria {
    background-image: url(../images/arrow.png);
    background-position: 50% 50%;
    background-size: 150px;
    background-repeat: no-repeat
  }

  .image-9 {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    z-index: 2;
    margin-right: -80px
  }

  .image-9.dunlop {
    margin-right: 0
  }

  .column-49._2.interna,
  .link-6 {
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in
  }

  .link-6 {
    color: #6e6e6e;
    text-decoration: underline
  }

  .link-6:hover {
    color: #ac41d8
  }

  .div-block-4 {
    margin-top: 10px
  }

  .image-10 {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: 0;
    margin-top: 2px;
    margin-left: 30px
  }

  .image-10._2 {
    margin-top: 5px
  }

  .column-49 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100px;
    padding-right: 20px;
    padding-left: 20px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-right: 2px solid #ff8b22
  }

  .column-49._2 {
    border-right-color: #006b3f;
    background-color: #82ea5b
  }

  .column-49._2.interna {
    border-right-color: #fafafa;
    background-color: #ebebeb
  }

  .column-49._2.interna:hover {
    background-color: #ff8b22
  }

  .text-block-34 {
    width: 100%;
    margin-top: 10px;
    color: #6e6e6e;
    text-align: left
  }

  .text-block-34._2 {
    width: 95%;
    margin-top: 40px;
    font-size: 12px
  }

  .list-item-7 {
    margin-bottom: 20px;
    color: #565656;
    font-size: 16px;
    font-weight: 300
  }

  .bold-text-29 {
    color: #ff8b22;
    font-weight: 500
  }

  .list-7 {
    width: 60%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto
  }

  .text-block-35 {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    margin-top: 10px;
    margin-right: 10px;
    color: #fff;
    font-weight: 300;
    text-shadow: 0 0 5px rgba(0, 0, 0, .7)
  }

  .gradient {
    height: 100%;
    background-image: linear-gradient(225deg, #006b3f, transparent 23%)
  }

  .captacao-newsletter {
    margin-top: 80px;
    margin-right: auto;
    margin-left: auto
  }

  .heading-20 {
    margin-top: 0;
    margin-bottom: 20px;
    color: #793f98;
    font-weight: 500;
    text-align: center
  }

  .text-field-5 {
    width: 85%;
    float: left;
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px
  }

  .submit-button-6 {
    width: 15%;
    float: right;
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    background-color: #079d56;
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    text-transform: uppercase
  }

  .submit-button-6:hover {
    background-color: #31b300
  }

  .form-6 {
    width: 60%;
    margin-right: auto;
    margin-left: auto
  }

  .image-12 {
    margin-right: 10px
  }

  .slider-4 {
    height: auto;
    padding-bottom: 60px;
    background-color: transparent
  }

  .icon-5,
  .icon-6 {
    color: #079d56;
    font-size: 24px
  }

  .hero-landing.sta-iria {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/hero_3.jpg);
    background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/hero_3.jpg);
    background-position: 0 0, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat
  }

  .col-text {
    padding-left: 0
  }

  .col-text.sta-iria {
    padding-top: 60px
  }

  .col-forms {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end
  }

  .heading-lp.sta-iria {
    width: 270px
  }

  .heading-lp.regatas {
    position: relative;
    z-index: 2;
    width: 340px
  }

  .div-logos-hero.sta-iria {
    margin-top: 25px;
    margin-left: 20px;
    padding: 10px;
    border-radius: 5px;
    background-color: #fff
  }

  .div-logos-hero.elvira,
  .div-logos-hero.itapeva {
    width: 130px;
    height: 130px;
    margin-top: 35px;
    padding: 5px 10px;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 10px;
    background-color: #fff
  }

  .div-logos-hero.elvira {
    background-image: none;
    width: auto;
    height: auto;
    margin-top: 0;
    margin-left: 0;
    padding: 0;
    background-color: transparent
  }

  .tag-hero {
    display: inline-block;
    margin-right: 10px;
    margin-bottom: 10px;
    padding: 10px 15px 8px;
    border: 2px solid #fff;
    border-radius: 5px;
    background-image: none;
    color: #fff;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    text-transform: uppercase
  }

  .tag-hero.section2 {
    border-style: none;
    background-image: linear-gradient(135deg, #82ea5b, #079d56)
  }

  .tag-hero.destaque {
    border-style: none;
    background-image: linear-gradient(135deg, #ac41d8, #793f98)
  }

  .tag-hero.sta-iria {
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in
  }

  .tag-hero.sta-iria:hover {
    background-image: linear-gradient(135deg, #793f98, #ac41d8)
  }

  .div-tags {
    padding-left: 30px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start
  }

  .div-tags.sta-iria {
    padding-left: 0
  }

  .div-tags,
  .div-tags.regatas {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
  }

  .div-tags.regatas {
    padding-left: 0
  }

  .div-tags.dunlop {
    padding-left: 0
  }

  .image-14 {
    margin-right: 40px;
    margin-bottom: -10px
  }

  .destaque-lp.regatas {
    font-size: 37px;
    line-height: 48px
  }

  .destaque-lp.itapeva {
    width: 350px;
    font-size: 30px;
    line-height: 35px;
    font-weight: 400
  }

  .box.sta-iria {
    width: 330px;
    height: 260px;
    background-image: url(../images/box.png);
    background-size: 330px 260px
  }

  .box.itapeva,
  .box.regatas {
    position: relative;
    width: 430px;
    height: 250px;
    margin-top: 130px;
    background-image: none;
    background-size: auto;
    background-repeat: repeat
  }

  .box.itapeva.comercial,
  .box.regatas.comercial {
    margin-top: 70px
  }

  .box.itapeva {
    margin-top: 190px;
    padding: 3px 24px 0
  }

  .div-forms-hero {
    width: 350px;
    border-radius: 20px
  }

  .div-forms-hero.regatas {
    margin-top: 60px
  }

  .div-forms-hero.itapeva {
    width: 370px;
    margin-top: 30px
  }

  .heading-21 {
    color: #fff;
    font-size: 22px;
    font-weight: 500;
    text-align: center
  }

  .label-form-lp {
    margin-bottom: 2px;
    color: #fff;
    font-size: 14px;
    line-height: 18px;
    font-weight: 300;
    text-align: left
  }

  .campo-form-lp {
    margin-bottom: 15px;
    border-style: none;
    border-width: 1px 1px 2px;
    border-color: #000 #000 transparent;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 12px -6px rgba(0, 0, 0, .75);
    font-size: 12px
  }

  .enviar-form-lp {
    margin-top: 20px;
    padding-right: 35px;
    padding-left: 35px;
    border-radius: 5px;
    background-image: linear-gradient(304deg, #ffb719, #ff8b22);
    box-shadow: 0 0 15px -7px #000;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: .5px
  }

  .enviar-form-lp:hover {
    background-image: linear-gradient(304deg, #ff8b22, #ffb719);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03)
  }

  .form-7 {
    text-align: center
  }

  .traga-seu-negocio {
    padding-top: 80px;
    padding-bottom: 60px
  }

  .traga-seu-negocio.regatas {
    background-color: #fbfbfb
  }

  .select-field-4 {
    border-radius: 5px;
    box-shadow: 0 0 12px -6px #000;
    color: #6e6e6e;
    font-size: 13px
  }

  .columns-17 {
    width: 85%;
    margin-top: 60px;
    margin-right: auto;
    margin-left: auto
  }

  .paragraph-28 {
    color: #565656;
    font-size: 16px;
    line-height: 1.8;
    font-weight: 300;
    text-align: center
  }

  .paragraph-28.lp {
    margin-bottom: 20px;
    text-align: left
  }

  .paragraph-28.lp._2 {
    margin-bottom: 0
  }

  .bold-text-30 {
    color: #ff8b22;
    font-weight: 500
  }

  .bold-text-30._2 {
    color: #f7287c
  }

  .bold-text-30._7 {
    color: #079d56
  }

  .bold-text-30.lime {
    color: #82ea5b
  }

  .column-50 {
    padding-top: 15px;
    padding-right: 20px;
    padding-left: 0
  }

  .slide-6 {
    background-image: url(../images/img-01.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .slide-nav-4 {
    margin-bottom: 0
  }

  .icon-7 {
    margin-right: 15px;
    color: #fff;
    font-size: 24px;
    text-shadow: 0 0 4px rgba(0, 0, 0, .5)
  }

  .icon-7._2 {
    margin-right: 41px;
    margin-left: 15px
  }

  .slide-10,
  .slide-7,
  .slide-8,
  .slide-9 {
    background-image: url(../images/img-02.jpg);
    background-position: 50% 50%;
    background-size: cover
  }

  .slide-10,
  .slide-8,
  .slide-9 {
    background-image: url(../images/img-03.jpg);
    background-repeat: no-repeat
  }

  .slide-10,
  .slide-9 {
    background-image: url(../images/img-04.jpg)
  }

  .slide-10 {
    background-image: url(../images/img-05.jpg)
  }

  .heading-22 {
    margin-top: 120px;
    color: #ff8b22;
    font-weight: 500;
    text-align: center
  }

  .slider-5 {
    height: 400px
  }

  .imagem-loteamento {
    margin-top: 20px;
    text-align: center
  }

  .condicoes {
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: url(../images/pattern2.png), url(../images/pattern.png), -webkit-gradient(linear, left top, left bottom, from(#006b3f), to(#00d38d));
    background-image: url(../images/pattern2.png), url(../images/pattern.png), linear-gradient(180deg, #006b3f, #00d38d);
    background-position: -5% 50%, 105% 50%, 0 0;
    background-size: contain, contain, auto;
    background-repeat: no-repeat, no-repeat, repeat
  }

  .condicoes.minha-casa {
    background-color: #fdfdfd;
    background-image: url(../images/pattern2.png), url(../images/pattern.png);
    background-position: -5% 50%, 105% 50%;
    background-size: contain, contain;
    background-repeat: no-repeat, no-repeat
  }

  .bold-text-31 {
    color: #82eb5c;
    font-weight: 500
  }

  .div-condicoes {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 80%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .box-condicoes {
    width: 300px;
    padding: 20px;
    border-right: 1px solid #fff;
    text-align: center
  }

  .box-condicoes.end {
    border-right-style: none
  }

  .text-block-36 {
    width: 80%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    color: #fff;
    font-size: 16px
  }

  .div-cta {
    margin-top: 40px;
    text-align: center
  }

  .div-cta._2 {
    margin-top: 20px
  }

  .cta-condicoes {
    padding-right: 35px;
    padding-left: 35px;
    border-radius: 5px;
    background-image: linear-gradient(100deg, #ffb719, #ff8b22);
    box-shadow: 0 0 14px -4px #006b3f;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #fff;
    font-size: 16px;
    font-weight: 500
  }

  .cta-condicoes:hover {
    background-image: linear-gradient(100deg, #ff8b22, #ffb719);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03)
  }

  .cta-condicoes.regatas {
    box-shadow: 0 0 14px -4px #ff8b22
  }

  .localizacao-lp {
    padding-top: 80px;
    padding-bottom: 80px
  }

  .columns-18,
  .text-block-37 {
    margin-right: auto;
    margin-left: auto
  }

  .text-block-37 {
    width: 80%;
    margin-top: 20px;
    color: #ff8b22;
    font-size: 22px;
    font-weight: 300;
    text-align: center
  }

  .columns-18 {
    width: 90%;
    margin-top: 60px
  }

  .div-proximidade {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 150px;
    height: 150px;
    margin-right: 15px;
    padding: 10px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 15px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#82ea5b), to(#00d38d));
    background-image: linear-gradient(180deg, #82ea5b, #00d38d)
  }

  .image-15 {
    margin-bottom: 15px
  }

  .text-block-38 {
    color: #fff;
    font-size: 13px;
    line-height: 16px;
    text-align: center
  }

  .div-grupo-proximidades {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 40px;
    margin-bottom: 40px;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .column-51 {
    padding-right: 30px;
    padding-left: 0
  }

  .map-2 {
    height: 500px
  }

  .institucional {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f5f5f5;
    background-image: url(../images/marca-dagua.png);
    background-position: 100% 50%;
    background-size: contain;
    background-repeat: no-repeat
  }

  .columns-19 {
    width: 90%;
    margin-right: auto;
    margin-left: auto
  }

  .column-52 {
    padding-top: 20px;
    padding-left: 0
  }

  .column-52.sta-iria {
    padding-top: 0
  }

  .div-marcas {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .div-marcas.sta-iria {
    margin-top: 20px
  }

  .div-logo {
    margin-bottom: 20px;
    padding: 15px 20px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 12px -5px #ff8b22
  }

  .section-cta {
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: linear-gradient(96deg, #ffb719, #ff8b22)
  }

  .button-10 {
    padding-right: 35px;
    padding-left: 35px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 1px 1px 12px -3px #c76104;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #ff8b22;
    font-size: 16px
  }

  .button-10:hover {
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03)
  }

  .texto-legal {
    padding-top: 30px;
    padding-bottom: 30px;
    background-color: #535353
  }

  .paragraph-29 {
    margin-bottom: 0;
    color: #b1b1b1;
    font-size: 12px;
    font-weight: 300
  }

  .div-ponto-de-conversao {
    width: 90%;
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 12px -5px rgba(0, 0, 0, .4)
  }

  .h3-ponto-de-conversao {
    margin-top: 0;
    margin-bottom: 15px;
    color: #079d56;
    font-size: 22px;
    font-weight: 600;
    text-align: left
  }

  .h3-ponto-de-conversao._2 {
    color: #6e6e6e;
    font-size: 18px;
    line-height: 22px;
    font-weight: 400
  }

  .paragraph-30 {
    margin-bottom: 15px;
    color: #565656;
    font-size: 16px;
    line-height: 1.6;
    font-weight: 300;
    text-align: left
  }

  .button-conversao,
  .button-conversao._2:hover {
    padding-right: 30px;
    padding-left: 30px;
    background-color: #ff8b22
  }

  .button-conversao {
    margin-right: 20px;
    border: 1px solid transparent;
    border-radius: 100px;
    background-image: -webkit-gradient(linear, left top, right top, from(#ff8b22), to(#ffb719));
    background-image: linear-gradient(90deg, #ff8b22, #ffb719);
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in
  }

  .button-conversao._2,
  .button-conversao:hover {
    border-style: solid;
    border-color: #ff8b22;
    background-color: transparent;
    background-image: none;
    color: #ff8b22
  }

  .button-conversao:hover {
    padding-right: 40px;
    padding-left: 40px
  }

  .button-conversao._2 {
    margin-right: 0;
    border-width: 1px
  }

  .button-conversao._2:hover {
    color: #fff
  }

  .button-conversao._3 {
    margin-right: 10px;
    padding-right: 20px;
    padding-left: 20px
  }

  .button-conversao._3:hover {
    padding-right: 32px;
    padding-left: 32px
  }

  .radio-button-2 {
    width: 40px;
    height: 40px;
    margin-top: 0;
    margin-right: 15px;
    margin-left: 5px;
    border-style: none;
    border-radius: 0;
    background-image: url(../images/pin_Prancheta-1.png);
    background-position: 50% 50%;
    background-size: 35px;
    background-repeat: no-repeat;
    -webkit-filter: invert(100%);
    filter: invert(100%)
  }

  .radio-button-2.w--redirected-checked {
    border: 1px #000;
    -webkit-filter: invert(100%);
    filter: invert(100%)
  }

  .radio-button-2.w--redirected-focus {
    border-style: none;
    box-shadow: none
  }

  .radio-button-2._2,
  .radio-button-2._3 {
    background-image: url(../images/icons_verde.png);
    background-size: 45px
  }

  .radio-button-2._3 {
    background-image: url(../images/icons_lazer.png)
  }

  .radio-button-field-3 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 75%;
    margin-bottom: 10px;
    padding: 5px 10px 5px 0;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-style: solid;
    border-width: 1px;
    border-color: #00d38d;
    border-radius: 10px;
    background-color: #00d38d;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in
  }

  .radio-button-field-3:hover {
    -webkit-transform: scale(1.02);
    -ms-transform: scale(1.02);
    transform: scale(1.02)
  }

  .radio-button-field-3:focus {
    border-color: #006b3f
  }

  .radio-button-label-2 {
    color: #fff
  }

  .bold-text-32 {
    color: #ac41d8;
    font-weight: 600
  }

  .div-etapa2 {
    overflow: hidden;
    height: 0;
    margin-top: 40px
  }

  .button-11 {
    margin-left: 5px;
    border-radius: 5px;
    background-image: -webkit-gradient(linear, left top, right top, from(#00d38d), to(#82ea5b));
    background-image: linear-gradient(90deg, #00d38d, #82ea5b);
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in
  }

  .button-11:hover {
    -webkit-transform: scale(1.01);
    -ms-transform: scale(1.01);
    transform: scale(1.01)
  }

  .button-11.smarturba {
    margin-top: 30px;
    margin-left: 0;
    background-image: -webkit-gradient(linear, left top, right top, from(#079d56), to(#00d38d));
    background-image: linear-gradient(90deg, #079d56, #00d38d);
    font-size: 16px;
    font-weight: 500
  }

  .button-11.smarturba:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05)
  }

  .button-11.smarturba._2 {
    margin-top: 0;
    background-image: -webkit-gradient(linear, left top, right top, from(#ff8b22), to(#ffb719));
    background-image: linear-gradient(90deg, #ff8b22, #ffb719)
  }

  .button-11.smarturba._2.w--current {
    padding-right: 20px;
    padding-left: 20px
  }

  .button-11.smarturba._2.mobile {
    display: none
  }

  .select-field-5 {
    border-style: solid;
    border-width: 1px;
    border-color: #00d38d;
    border-radius: 5px;
    background-color: #fff;
    color: #079d56
  }

  .div-etapa2-2 {
    overflow: hidden;
    height: 0
  }

  .bold-text-33 {
    color: #ac41d8;
    font-weight: 600
  }

  .columns-20 {
    margin-bottom: 10px
  }

  .heading-23 {
    margin-top: 0;
    margin-bottom: 0;
    color: #fff;
    font-size: 40px;
    line-height: 1.3;
    font-weight: 500;
    text-align: center;
    letter-spacing: .3px
  }

  .heading-23.area-cliente {
    width: 50%;
    font-size: 32px;
    line-height: 1.5
  }

  .heading-23.area-cliente,
  .heading-23.investidores {
    color: #079d56;
    font-weight: 300;
    text-align: left
  }

  .bold-text-34 {
    color: #ff8b22
  }

  .section-texto-relatorios {
    padding-top: 60px;
    padding-bottom: 60px
  }

  .div-categorias,
  .paragraph-31 {
    width: 65%;
    margin-right: auto;
    margin-left: auto
  }

  .paragraph-31 {
    margin-top: 20px;
    color: #ff8b22;
    font-size: 20px;
    line-height: 1.6;
    font-weight: 300;
    text-align: center
  }

  .paragraph-31.fale-com-ri {
    font-size: 18px;
    font-weight: 400;
    text-align: right
  }

  .div-categorias {
    margin-bottom: 40px
  }

  .duvida-3 {
    width: 90%;
    float: left;
    color: #079d56;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 500
  }

  .duvida-3.resposta {
    color: #ff8b22;
    font-size: 14px
  }

  .div-seta-3 {
    width: 12px;
    height: 12px;
    margin-right: 10px;
    float: right;
    border-right: 2px solid #006b3f;
    border-bottom: 2px solid #079d56;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg)
  }

  .list-item-8 {
    margin-bottom: 5px;
    text-align: left
  }

  .link-7,
  .list-8 {
    color: #ff8b22
  }

  .link-7 {
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    text-decoration: none
  }

  .link-7:hover {
    text-decoration: underline
  }

  .text-block-39 {
    margin-bottom: 10px;
    border-bottom: 1px solid #ff8b22;
    color: #ff8b22;
    font-weight: 500;
    text-align: left
  }

  .text-block-39._2 {
    margin-top: 20px
  }

  .div-conselheiro {
    margin-bottom: 10px;
    padding: 8px;
    border-style: solid;
    border-width: 1px;
    border-color: #dadada;
    border-radius: 5px
  }

  .text-block-40,
  .text-block-41 {
    padding-left: 3px;
    color: #6e6e6e;
    text-align: left
  }

  .text-block-40 {
    margin-bottom: 5px;
    border-bottom: 1px solid #eee;
    font-size: 16px
  }

  .text-block-41 {
    font-size: 12px;
    font-weight: 300
  }

  .bold-text-35 {
    font-size: 12px;
    font-weight: 400
  }

  .column-58 {
    padding-left: 0
  }

  .column-59 {
    padding-right: 0
  }

  .list-item-9 {
    margin-bottom: 5px;
    color: #6e6e6e;
    text-align: left
  }

  .div-resposta-2 {
    overflow: hidden;
    height: 0
  }

  .link-8 {
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    color: #ff8b22;
    text-decoration: none
  }

  .link-8:hover {
    text-decoration: underline
  }

  .text-block-42 {
    position: absolute;
    left: auto;
    top: auto;
    right: 10px;
    bottom: 10px;
    color: #fff;
    font-size: 12px;
    text-shadow: 1px 1px 6px #000
  }

  .asterisco {
    font-size: 10px;
    line-height: 0;
    font-weight: 300
  }

  .text-block-43 {
    color: #fff;
    text-shadow: 0 0 3px #000
  }

  .link-9 {
    color: #82ea5b
  }

  .checkbox-field {
    display: inline-block;
    margin-bottom: 0;
    text-align: center
  }

  .checkbox-label {
    color: #fff;
    text-shadow: 0 0 3px #000
  }

  .div-block-5 {
    margin-top: 5px
  }

  .campo-form-lp-2 {
    margin-bottom: 15px;
    border-style: none;
    border-width: 1px 1px 2px;
    border-color: #000 #000 transparent;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 12px -6px rgba(0, 0, 0, .75);
    font-size: 12px
  }

  .campo-form-lp-2.itapeva {
    border-style: none none solid;
    border-width: 1px 1px 2px;
    border-color: #000 #000 #fff;
    border-radius: 0;
    background-color: transparent;
    box-shadow: none;
    color: #fff
  }

  .campo-form-lp-2.itapeva:active {
    color: #fff
  }

  .campo-form-lp-2.itapeva:focus {
    color: #565656;
    text-shadow: 1px 1px 20px #000
  }

  .heading-24,
  .tag-hero-2 {
    color: #fff;
    font-weight: 500
  }

  .tag-hero-2 {
    display: inline-block;
    margin-right: 10px;
    margin-bottom: 10px;
    padding: 10px 15px 8px;
    border: 2px solid #fff;
    border-radius: 5px;
    background-image: none;
    font-size: 16px;
    font-style: normal;
    text-transform: uppercase
  }

  .tag-hero-2.destaque {
    border-style: none;
    background-image: linear-gradient(135deg, #ac41d8, #793f98)
  }

  .tag-hero-2.destaque.regatas,
  .tag-hero-2.section2.dunlop.wire {
    border-style: solid;
    background-image: none
  }

  .tag-hero-2.destaque.itapeva {
    display: table;
    margin-top: 22px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f18812), to(#f18812));
    background-image: linear-gradient(180deg, #f18812, #f18812)
  }

  .tag-hero-2.dunlop-box-hero {
    width: 250px;
    border-width: 1px;
    border-color: #84ff56;
    color: #84ff56;
    font-weight: 400;
    text-align: center
  }

  .tag-hero-2.dunlop-box-hero.vila-profeta-hero {
    width: 300px;
    border-style: none;
    border-width: 0;
    background-image: linear-gradient(135deg, #ac41d8, #793f98);
    color: #fff
  }

  .tag-hero-2.section2 {
    border-style: none;
    background-image: linear-gradient(135deg, #82ea5b, #079d56)
  }

  .tag-hero-2.section2.dunlop {
    background-color: #793f98;
    background-image: none;
    color: #fff;
    line-height: 1.4em;
    font-weight: 400
  }

  .tag-hero-2.section2.dunlop.wire {
    padding-right: 20px;
    padding-left: 20px;
    font-size: 14px
  }

  .heading-24 {
    font-size: 22px;
    text-align: center
  }

  .heading-24.dunlop {
    text-shadow: 0 0 6px #000
  }

  .heading-24.dunlop.wire,
  .label-form-lp-2.dunlop.wire {
    color: #6e6e6e
  }

  .heading-24.minha-casa {
    margin-top: 0
  }

  .heading-24.itapeva {
    text-shadow: 1px 1px 6px #000
  }

  .enviar-form-lp-2 {
    margin-top: 20px;
    padding: 10px 35px 8px;
    border-radius: 5px;
    background-color: #ff8b22;
    box-shadow: 0 0 15px -7px #000;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: .5px;
    text-transform: uppercase
  }

  .enviar-form-lp-2:hover {
    background-image: linear-gradient(304deg, #ff8b22, #ffb719);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03)
  }

  .enviar-form-lp-2,
  .enviar-form-lp-2.elvira,
  .enviar-form-lp-2.itapeva {
    background-image: linear-gradient(304deg, #ffb719, #ff8b22)
  }

  .enviar-form-lp-2.botao-verde {
    background-image: linear-gradient(304deg, #006b3f, #00d38d)
  }

  .heading-lp-2 {
    width: 315px;
    margin-top: px;
    margin-bottom: 0;
    margin-left: 20px;
    color: #fff;
    font-size: 22px;
    line-height: 35px;
    font-weight: 300
  }

  .heading-lp-2.itapeva,
  .heading-lp-2.regatas {
    position: relative;
    z-index: 2;
    width: 300px;
    line-height: 32px
  }

  .heading-lp-2.itapeva {
    font-size: 20px;
    width: 450px
  }

  .select-field-6 {
    border-radius: 5px;
    box-shadow: 0 0 12px -6px #000;
    color: #6e6e6e;
    font-size: 13px
  }

  .select-field-6.dunlop {
    background-color: #fff
  }

  .label-form-lp-2 {
    margin-bottom: 2px;
    color: #fff;
    font-size: 14px;
    line-height: 18px;
    font-weight: 300;
    text-align: left
  }

  .text-block-44 {
    color: #fff;
    text-shadow: 0 0 2px #000
  }

  .label-form-lp-2.vila-profeta,
  .link-10 {
    color: #fff
  }

  .link-10.wire {
    color: #565656
  }

  .checkbox-label-2 {
    color: #fff;
    text-shadow: 0 0 2px #000
  }

  .div-box-contorno,
  .div-box-preenchido {
    position: absolute;
    right: auto;
    bottom: auto;
    width: 340px;
    height: 210px;
    border-radius: 20px
  }

  .div-box-preenchido {
    left: 0;
    top: 0;
    z-index: 1;
    background-image: linear-gradient(45deg, #00d38d, #82ea5b)
  }

  .div-box-contorno.regatas-comercial,
  .div-box-preenchido.regatas-comercial {
    width: 370px
  }

  .div-box-contorno {
    left: 30px;
    top: 30px;
    border-style: solid;
    border-width: 5px;
    border-color: #ff8b22
  }

  .div-box-contorno.elvira,
  .div-box-contorno.itapeva {
    width: 370px;
    height: 185px;
    border-color: #ff8b22
  }

  .div-box-contorno.residencial-progresso {
    width: 370px;
    height: 185px;
    border-color: #e9bb00
  }

  .feature {
    text-align: left;
    width: 100%;
    margin-bottom: 5px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 10px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 5px;
    background-color: rgba(0, 0, 0, .3)
  }

  .image-16 {
    margin-right: 10px
  }

  .text-block-45 {
    display: inline;
    color: #fff;
    font-size: 16px
  }

  .text-block-46 {
    position: absolute;
    left: auto;
    top: auto;
    right: 10px;
    bottom: 10px;
    color: #fff;
    font-size: 12px;
    text-shadow: 1px 1px 6px #000
  }

  .icon-8 {
    margin-right: 15px;
    color: #fff;
    font-size: 24px;
    text-shadow: 0 0 4px rgba(0, 0, 0, .5)
  }

  .icon-8._2 {
    margin-right: 41px;
    margin-left: 15px
  }

  .slide-11,
  .slide-12,
  .slide-13 {
    background-image: url(../images/01.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .slide-12,
  .slide-13 {
    background-image: url(../images/02.jpg)
  }

  .slide-13 {
    background-image: url(../images/03.jpg)
  }

  .slide-14 {
    background-image: url(../images/04.jpg);
    background-position: 0 0;
    background-size: auto
  }

  .text-block-47 {
    position: absolute;
    left: auto;
    top: 50px;
    right: -50px;
    bottom: auto;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 290px;
    height: 50px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-image: linear-gradient(45deg, #00d38d, #82ea5b);
    -webkit-transform: rotate(40deg);
    -ms-transform: rotate(40deg);
    transform: rotate(40deg);
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    text-align: center;
    text-transform: uppercase
  }

  .text-block-47.wire {
    background-image: linear-gradient(113deg, #3a3a3a, #a8a7a7), linear-gradient(45deg, #00d38d, #82ea5b)
  }

  .text-block-47.vila-profeta {
    background-image: linear-gradient(45deg, #ff8b22, #f7287c, #ff5aad)
  }

  .text-block-47.itapeva {
    background-image: linear-gradient(45deg, #ff8b22, #ffb719)
  }

  .text-block-47.montemor {
    background-image: linear-gradient(45deg, #ffb719, #ff8b22)
  }

  .text-block-47.residencial-progresso {
    background-color: #433868;
    background-image: none;
    color: #ffb719;
    font-weight: 400
  }

  .bold-text-36 {
    margin-left: -5px;
    padding-right: 5px;
    padding-left: 5px;
    background-color: #ff8b22;
    color: #fff;
    font-weight: 300
  }

  .hero {
    height: 700px;
    margin-top: 100px;
    background-image: -webkit-gradient(linear, left top, right top, color-stop(18%, #793f98), color-stop(80%, transparent)), url(../images/Imagem_Smart08.jpg);
    background-image: linear-gradient(90deg, #793f98 18%, transparent 80%), url(../images/Imagem_Smart08.jpg);
    background-position: 0 0, 50% 5%;
    background-size: auto, cover;
    background-repeat: repeat, repeat
  }

  .heading-25 {
    margin-top: 0;
    color: #fff;
    font-size: 52px;
    line-height: 1.1em;
    font-weight: 600
  }

  .image-18 {
    position: absolute;
    left: auto;
    top: 10%;
    right: 0;
    bottom: auto;
    overflow: hidden;
    margin-bottom: 40px;
    border-radius: 5px;
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, .25)
  }

  .heading-26,
  .paragraph-32 {
    margin-top: 0;
    margin-bottom: 0;
    color: #82ea5b;
    font-size: 20px
  }

  .paragraph-32 {
    margin-top: 20px;
    color: #fff;
    font-size: 16px;
    line-height: 1.6em
  }

  .entenda {
    padding-top: 80px;
    padding-bottom: 80px
  }

  .columns-21 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 60px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .paragraph-33 {
    margin-bottom: 20px;
    color: #565656;
    line-height: 1.6em;
    font-weight: 300
  }

  .column-60 {
    padding-left: 40px
  }

  .column-60.dunlop {
    padding-top: 15px;
    padding-right: 0;
    padding-left: 0
  }

  .grid-3 {
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    -ms-grid-rows: 150px 150px;
    grid-template-rows: 150px 150px
  }

  .grid-3.dunlop {
    grid-column-gap: 10px;
    -ms-grid-columns: 1fr 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto
  }

  .grid-3.dunlop.display-hidden {
    display: none
  }

  .column-61 {
    padding-top: 0
  }

  .column-61.dunlop {
    padding-top: 20px;
    padding-right: 60px;
    padding-left: 0
  }

  .box-entenda {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding: 10px 20px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 10px;
    box-shadow: 0 0 12px -6px #ff8b22
  }

  .text-block-48 {
    margin-top: 20px;
    color: #079d56;
    font-size: 14px;
    line-height: 1.4em;
    font-weight: 500;
    text-align: center
  }

  .video {
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: url(../images/casinha-gray-01.png);
    background-position: 100% 100%;
    background-size: auto;
    background-repeat: no-repeat;
    background-attachment: fixed
  }

  .div-video {
    overflow: hidden;
    width: 70%;
    margin-top: 60px;
    margin-right: auto;
    margin-left: auto;
    border-radius: 10px;
    box-shadow: 0 0 20px -12px #00d38d
  }

  .lotes-smarturba {
    display: none;
    background-image: linear-gradient(45deg, #006b3f, #079d56)
  }

  .como-funciona,
  .lotes-smarturba,
  .section-form {
    padding-top: 80px;
    padding-bottom: 80px
  }

  .section-form {
    position: relative;
    padding-bottom: 100px;
    background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, .52)), color-stop(13%, rgba(255, 255, 255, 0))), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), color-stop(32%, transparent)), url(../images/contato.jpg);
    background-image: linear-gradient(0deg, rgba(0, 0, 0, .52), rgba(255, 255, 255, 0) 13%), linear-gradient(180deg, rgba(0, 0, 0, .5), transparent 32%), url(../images/contato.jpg);
    background-position: 0 0, 0 0, 50% 100%;
    background-size: auto, auto, cover;
    background-repeat: repeat, repeat, no-repeat;
    background-attachment: scroll, scroll, fixed
  }

  .submit-button-7 {
    margin-top: 30px;
    padding-right: 40px;
    padding-left: 40px;
    border-style: solid;
    border-width: 1px;
    border-color: #ac41d8;
    border-radius: 20px;
    background-color: #ac41d8;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    text-transform: uppercase
  }

  .submit-button-7:hover {
    background-color: transparent;
    color: #ac41d8
  }

  .text-field-6 {
    border-style: none none solid;
    border-width: 1px;
    border-color: #000 #000 #079d56;
    border-radius: 3px;
    box-shadow: 0 0 12px -3px rgba(0, 0, 0, .15);
    color: #079d56;
    font-weight: 300
  }

  .text-field-6.menor {
    width: 97%
  }

  .heading-27 {
    width: 80%;
    margin-top: 0;
    margin-right: auto;
    margin-left: auto;
    color: #6e6e6e;
    font-size: 28px;
    line-height: 1.4;
    font-weight: 200;
    text-align: center;
    text-transform: none
  }

  .heading-27.forms {
    width: 100%
  }

  .heading-27.center._32px.minha-casa,
  .heading-27.center.wire-branco {
    color: #fff
  }

  .heading-27.center._32px {
    font-size: 32px
  }

  .heading-27.center.white {
    color: #fff;
    font-weight: 300
  }

  .heading-27.center.white.call {
    font-weight: 400
  }

  .heading-27.tour-dunlop {
    width: 65%;
    margin-right: 60px;
    margin-left: 0;
    font-size: 36px;
    line-height: 1.2;
    text-align: left
  }

  .heading-27.com._32px,
  .heading-27.galeria._32px,
  .heading-27.tour-dunlop._32px {
    font-size: 32px
  }

  .heading-27.tour-dunlop._32px._2 {
    width: 50%
  }

  .heading-27.com {
    margin-right: 0;
    margin-left: 0;
    text-align: left
  }

  .heading-27.com._32px.branco {
    color: #fff
  }

  .heading-27.galeria {
    width: 100%;
    margin: 0 0 20px;
    color: #fff;
    text-align: left
  }

  .heading-27.center.sao-roque-header {
    margin-top: -60px
  }

  .destaque-h2-2 {
    color: #ff8b22;
    font-weight: 600
  }

  .destaque-h2-2.wire {
    color: #565656
  }

  .destaque-h2-2.wire.branco {
    color: #fff
  }

  .destaque-h2-2.vila-profeta {
    color: #ff5aad
  }

  .destaque-h2-2.vila-profeta._3 {
    color: #00d38d
  }

  .escolha-cidade-2 {
    margin-top: 20px;
    border: 1px #000;
    background-color: #fff;
    box-shadow: 0 5px 15px -3px rgba(0, 107, 63, .25);
    color: #ff8b22
  }

  .escolha-cidade-2.uf {
    margin-top: 0
  }

  .paragraph-34 {
    width: 70%;
    margin-right: auto;
    margin-left: auto;
    color: #fff;
    font-size: 16px;
    line-height: 1.5em;
    font-weight: 300;
    text-align: center;
    text-shadow: 0 0 9px #000
  }

  .div-features {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start
  }

  .div-features._2 {
    margin-top: 180px;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    -webkit-flex-direction: row-reverse;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse
  }

  .div-features,
  .div-features._2.dunlop-2 {
    margin-top: 140px
  }

  .div-features._3,
  .div-features._4 {
    margin-top: 180px
  }

  .div-features._2.dunlop-2.div-conviva-em-harmonia,
  .div-features.display-hidden {
    display: none
  }

  .div-features.dunlop {
    margin-top: 40px
  }

  .imagem-smarturba {
    position: relative;
    width: 600px;
    height: 400px;
    border-radius: 10px;
    background-image: url(../images/Imagem_Smart06.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, .25)
  }

  .imagem-smarturba._2 {
    background-image: url(../images/Imagem_Smart07.jpg);
    background-position: 100% 50%
  }

  .imagem-smarturba._2.wire {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%)
  }

  .imagem-smarturba._2.dunlop-img {
    z-index: 2;
    width: 400px;
    background-image: url(../images/Parque-Linear_Vista-Aerea-1.jpg);
    background-position: 50% 50%
  }

  .imagem-smarturba._3 {
    background-image: url(../images/Imagem_Smart03.jpg)
  }

  .imagem-smarturba._4 {
    background-image: url(../images/Imagem_Smart04.jpg)
  }

  .imagem-smarturba._6 {
    background-image: url(../images/ImagemSmart01.jpg)
  }

  .imagem-smarturba._6.wire {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%)
  }

  .imagem-smarturba._6.dunlop-img {
    z-index: 2;
    width: 400px;
    background-image: url(../images/smart-dunlop-02.jpg)
  }

  .imagem-smarturba._5 {
    background-image: url(../images/Imagem_Smart05.jpg)
  }

  .imagem-smarturba._7 {
    background-image: url(../images/Imagem_Smart02.jpg)
  }

  .imagem-smarturba._7.wire {
    margin-top: 0;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%)
  }

  .imagem-smarturba._7.dunlop-img {
    z-index: 2;
    width: 400px;
    height: 400px;
    background-image: url(../images/Instagramável.png);
    background-size: cover
  }

  .imagem-smarturba.dunlop {
    background-image: url(https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg), url(../images/Imagem_Smart06.jpg);
    background-position: 0 0, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat
  }

  .imagem-smarturba.wire {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%)
  }

  .imagem-smarturba.wire.margin-top {
    margin-top: 20px
  }

  .imagem-smarturba.dunlop-img {
    z-index: 2;
    width: 400px;
    background-image: url(../images/smart-dunlop-04.jpg)
  }

  .imagem-smarturba.dunlop-img.vila-profeta {
    background-image: url(../images/Vistas-aereas.png)
  }

  .div-info-smarturba {
    width: 50%;
    margin-left: 30px
  }

  .div-info-smarturba._2 {
    margin-right: 40px;
    margin-left: 0
  }

  .div-info-smarturba._2.dunlop {
    margin-top: 10px;
    margin-right: 80px;
    margin-left: 0
  }

  .div-info-smarturba._2.dunlop.margin-top-off {
    margin-top: 0
  }

  .div-info-smarturba.dunlop {
    width: 60%;
    margin-left: 80px
  }

  .paragraph-35 {
    color: #565656;
    line-height: 1.5em;
    font-weight: 300;
    text-align: left
  }

  .heading-28._2,
  .paragraph-35._2 {
    text-align: right
  }

  .heading-28 {
    margin-top: 10px;
    color: #079d56;
    font-weight: 600
  }

  .heading-28._2 {
    color: #793f98
  }

  .heading-28._3 {
    color: #ac41d8
  }

  .heading-28._4 {
    color: #ff5aad;
    text-align: right
  }

  .heading-28._5 {
    margin-top: 30px;
    color: #793f98
  }

  .heading-28._6 {
    color: #ac41d8;
    text-align: right
  }

  .bold-text-37 {
    color: #ff5aad
  }

  .bold-text-37._2 {
    color: #ff8b22
  }

  .bold-text-37._3 {
    color: #00d38d
  }

  .bold-text-37._4,
  .bold-text-37._5 {
    color: #ff8b22
  }

  .bold-text-37._6 {
    color: #f7287c
  }

  .bold-text-37._7 {
    color: #ff8b22
  }

  .topico,
  .topicos {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start
  }

  .topico {
    width: 24%;
    min-height: 130px;
    margin-right: 10px;
    padding: 10px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #f7287c, #ff5aad);
    text-align: center
  }

  .topico._2 {
    min-height: 130px;
    margin-right: 0;
    margin-left: 10px;
    background-image: linear-gradient(45deg, #ff8b22, #ffb719)
  }

  .topico._3 {
    background-image: linear-gradient(45deg, #079d56, #00d38d)
  }

  .topico._4 {
    min-height: 130px;
    margin-right: 0;
    margin-left: 10px
  }

  .topico._5 {
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .topico._6 {
    margin-right: 0;
    margin-left: 10px
  }

  .topico._7 {
    background-image: linear-gradient(45deg, #006b3f, #82ea5b)
  }

  .text-block-49 {
    color: #fff;
    line-height: 1.3em;
    font-weight: 400;
    text-align: center
  }

  .image-19 {
    margin-bottom: 10px
  }

  .image-20 {
    position: absolute;
    left: -30px;
    top: -50px;
    z-index: 1
  }

  .image-20._2 {
    left: -30px;
    top: -40px;
    right: auto;
    bottom: auto
  }

  .image-20._3 {
    top: -40px
  }

  .image-20.wire {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%)
  }

  .image-20._4 {
    left: auto;
    top: -30px;
    right: -30px;
    bottom: auto
  }

  .image-20.display-hidden {
    display: none
  }

  .image-21,
  .image-21._2 {
    left: auto;
    top: auto;
    bottom: -40px
  }

  .image-21 {
    position: absolute;
    right: 30px
  }

  .image-21._2 {
    right: -30px
  }

  .image-21.wire {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%)
  }

  .image-21._5 {
    left: 10px;
    top: auto;
    right: auto;
    bottom: -30px
  }

  .image-21.display-hidden {
    display: none
  }

  .bold-text-38 {
    color: #82ea5b
  }

  .div-button-smarturba {
    margin-top: 140px;
    margin-bottom: 20px;
    text-align: center
  }

  .bold-text-39 {
    font-weight: 600
  }

  .text-block-50 {
    position: absolute;
    left: 0;
    top: auto;
    right: 0;
    bottom: 20px;
    color: #fff;
    text-align: center;
    text-shadow: 1px 1px 6px #000
  }

  .cta-provisorio {
    display: block;
    padding-top: 100px;
    padding-bottom: 100px;
    background-image: url(../images/pattern.png), url(../images/pattern2.png), linear-gradient(45deg, #006b3f, #079d56);
    background-position: 100% 50%, 0 50%, 0 0;
    background-size: 350px, 350px, auto;
    background-repeat: no-repeat, no-repeat, repeat
  }

  .heading-29 {
    margin-top: 0;
    color: #fff;
    font-size: 28px;
    line-height: 1.4em;
    font-weight: 500
  }

  .div-button-center,
  .heading-29 {
    text-align: center
  }

  .div-button-center.dunlop {
    margin-top: 60px
  }

  .div-button-center.dunlop._2 {
    margin-top: 100px
  }

  .div-button-center.dunlop.margin-top-100px {
    margin-top: 0;
    margin-bottom: 40px
  }

  .div-button-center.minha-casa {
    margin-top: 40px
  }

  .planejamento-inteligente {
    padding-top: 80px;
    padding-bottom: 60px
  }

  .heading-30 {
    margin-top: 0;
    color: #fff;
    font-size: 52px;
    line-height: 1.1em;
    font-weight: 600
  }

  .heading-30.h1-dunlop {
    margin-right: 20px;
    color: #fff;
    font-size: 42px;
    line-height: 1.2em
  }

  .heading-30.minha-casa {
    margin-bottom: 0;
    color: #079d56;
    line-height: 1em;
    font-weight: 700;
    text-align: left
  }

  .bold-text-40 {
    color: #82ea5b
  }

  .heading-31,
  .paragraph-36 {
    margin-top: 0;
    margin-bottom: 0;
    color: #82ea5b;
    font-size: 20px
  }

  .heading-31.wire {
    color: #6e6e6e
  }

  .paragraph-36 {
    margin-top: 20px;
    color: #fff;
    font-size: 16px;
    line-height: 1.6em
  }

  .paragraph-36.dunlop-sub,
  .paragraph-36.vila-profeta-subtitulo {
    margin-right: 40px;
    margin-bottom: 20px;
    color: #fff
  }

  .button-12,
  .button-12.smarturba._2.minha-casa.verde {
    background-image: -webkit-gradient(linear, left top, right top, from(#00d38d), to(#82ea5b));
    background-image: linear-gradient(90deg, #00d38d, #82ea5b)
  }

  .button-12 {
    margin-left: 5px;
    border-radius: 5px;
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in
  }

  .button-12:hover {
    -webkit-transform: scale(1.01);
    -ms-transform: scale(1.01);
    transform: scale(1.01)
  }

  .button-12.smarturba {
    margin-top: 30px;
    margin-left: 0;
    background-image: -webkit-gradient(linear, left top, right top, from(#079d56), to(#00d38d));
    background-image: linear-gradient(90deg, #079d56, #00d38d);
    font-size: 16px;
    font-weight: 500
  }

  .button-12.smarturba:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05)
  }

  .button-12.smarturba._2 {
    width: 198.640625px;
    margin-top: 0;
    margin-bottom: 0;
    padding-top: 10px;
    padding-bottom: 10px;
    background-image: -webkit-gradient(linear, left top, right top, from(#ac41d8), to(#793f98));
    background-image: linear-gradient(90deg, #ac41d8, #793f98);
    font-size: 14px
  }

  .button-12.smarturba._2.w--current {
    padding-right: 20px;
    padding-left: 20px
  }

  .button-12.smarturba._2.mobile {
    display: none
  }

  .button-12.smarturba._2.wire {
    background-image: -webkit-gradient(linear, left top, right top, from(#565656), to(#6e6e6e));
    background-image: linear-gradient(90deg, #565656, #6e6e6e);
    font-size: 14px
  }

  .button-12.smarturba._2.minha-casa {
    background-image: -webkit-gradient(linear, left top, right top, from(#793f98), to(#ac41d8));
    background-image: linear-gradient(90deg, #793f98, #ac41d8);
    box-shadow: 0 6px 12px 0 rgba(0, 107, 63, .15);
    color: #fff;
    cursor: pointer
  }

  .button-12.smarturba._2.minha-casa.verde {
    box-shadow: 0 6px 12px 0 rgba(60, 23, 80, .15);
    color: #006b3f
  }

  .button-12.smarturba._2.minha-casa.shadow-black {
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, .15)
  }

  .button-12.smarturba.dunlop {
    margin-top: 0;
    background-image: -webkit-gradient(linear, left top, right top, from(#006b3f), to(#079d56));
    background-image: linear-gradient(90deg, #006b3f, #079d56);
    font-size: 14px
  }

  .div-formulario-dunlop {
    position: relative;
    top: 50%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 40%;
    float: right;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%)
  }

  .div-formulario-dunlop.minha-casa {
    padding-right: 40px;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }

  .checkbox-label-3,
  .text-block-51 {
    color: #fff;
    text-shadow: 0 0 3px #000
  }

  .text-block-51.minha-casa {
    text-shadow: none
  }

  .checkbox-label-3.wire,
  .text-block-51.dunlop.wire {
    color: #6e6e6e;
    text-shadow: none
  }

  .checkbox-label-3.minha-casa {
    text-shadow: none
  }

  .enviar-form-lp-3 {
    margin-top: 20px;
    padding-right: 35px;
    padding-left: 35px;
    border-radius: 5px;
    background-image: linear-gradient(304deg, #ffb719, #ff8b22);
    box-shadow: 0 0 15px -7px #000;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: .5px;
    text-transform: uppercase
  }

  .enviar-form-lp-3:hover {
    background-image: linear-gradient(304deg, #ff8b22, #ffb719);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03)
  }

  .enviar-form-lp-3.wire {
    background-image: linear-gradient(304deg, #6e6e6e, #565656)
  }

  .enviar-form-lp-3.vila-profeta {
    background-image: linear-gradient(304deg, #793f98, #ac41d8)
  }

  .box-entenda-2 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding: 10px 20px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 10px;
    box-shadow: 0 0 12px -6px #ff8b22
  }

  .box-entenda-2.dunlop {
    padding: 20px 15px;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start
  }

  .box-entenda-2.dunlop.wire {
    box-shadow: 0 0 12px -6px #6e6e6e
  }

  .box-entenda-2,
  .box-entenda-2.dunlop._2 {
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .box-entenda-2.dunlop._2 {
    padding-right: 20px;
    padding-left: 20px;
    background-color: #fff
  }

  .paragraph-37 {
    display: block;
    margin-bottom: 20px;
    color: #006b3f;
    line-height: 1.6em;
    font-weight: 300;
    text-align: center
  }

  .paragraph-37.right {
    text-align: right
  }

  .paragraph-37.branco {
    color: #fff;
    font-style: normal
  }

  .paragraph-37.numero-obra {
    margin-bottom: 0
  }

  .text-block-52 {
    margin-top: 20px;
    color: #079d56;
    font-size: 14px;
    line-height: 1.4em;
    font-weight: 500;
    text-align: center
  }

  .text-block-52.wire {
    color: #6e6e6e;
    font-size: 16px
  }

  .text-block-52.wire-2 {
    color: #6e6e6e
  }

  .text-block-53 {
    margin-bottom: 10px;
    color: #6e6e6e;
    font-weight: 300
  }

  .div-raizes {
    overflow: hidden;
    margin-top: 15px
  }

  .list-12 {
    padding-left: 20px
  }

  .list-item-10 {
    margin-bottom: 5px;
    color: #6e6e6e;
    line-height: 1.4em;
    font-weight: 300
  }

  .localizacao-dunlop {
    padding-top: 80px;
    padding-bottom: 60px;
    background-color: #f8f8f8
  }

  .div-paragraph-center {
    width: 70%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    text-align: center
  }

  .div-paragraph-center.margin-top-60px {
    margin-top: 60px
  }

  .div-paragraph-center.destaque-box {
    padding: 30px 20px;
    border-radius: 10px;
    background-image: linear-gradient(225deg, #079d56, #006b3f)
  }

  .div-mapa-dunlop {
    overflow: hidden;
    margin-top: 40px;
    border-radius: 5px;
    box-shadow: 0 6px 12px -3px rgba(0, 0, 0, .2)
  }

  .tour {
    height: 600px
  }

  .div-grid-conceito.display-hidden,
  .tour.display-hidden,
  .videos.display-hidden {
    display: block
  }

  .div-h2-tour,
  .div-mestre-tour {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%
  }

  .div-mestre-tour {
    padding-top: 40px;
    padding-bottom: 40px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .div-h2-tour {
    width: 50%;
    padding-left: 20px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end
  }

  .div-tour {
    width: 50%;
    height: 100%;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    background-image: url(https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg);
    background-position: 0 0;
    background-size: auto;
    box-shadow: 0 0 12px -4px rgba(0, 0, 0, .2)
  }

  .setinha-wire {
    margin-right: 60px
  }

  .conceito {
    padding-top: 80px;
    padding-bottom: 60px;
    background-color: #f8f8f8
  }

  .conceito.andamento-da-obra.hidden {
    display: none
  }

  .div-grid-conceito {
    width: 60%;
    margin-right: auto;
    margin-left: auto
  }

  .div-video-2.wire,
  .wire-mask {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%)
  }

  .videos {
    padding-top: 80px;
    padding-bottom: 80px;
    background-color: #646464
  }

  .div-video-2 {
    overflow: hidden;
    width: 720px;
    margin-top: 60px;
    margin-right: auto;
    margin-left: auto;
    border-radius: 10px;
    box-shadow: 0 0 20px -12px #00d38d
  }

  .div-video-2.wire {
    box-shadow: 0 0 20px -12px #414141
  }

  .features,
  .features._2 {
    padding-top: 80px;
    padding-bottom: 120px
  }

  .features._2 {
    padding-bottom: 100px
  }

  .heading-32 {
    margin-top: 10px;
    color: #079d56;
    font-size: 40px;
    line-height: 1.1em;
    font-weight: 600
  }

  .heading-32.dunlop {
    color: #565656;
    font-size: 36px;
    text-align: right
  }

  .heading-32.dunlop._2 {
    text-align: left
  }

  .bold-text-41 {
    color: #ff5aad
  }

  .bold-text-41._7 {
    color: #ff8b22
  }

  .text-span {
    color: #6e6e6e;
    font-weight: 300
  }

  .div-grid-features {
    margin-bottom: 20px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .div-feature,
  .div-grid-features,
  .div-grid-features._2 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
  }

  .div-grid-features._2 {
    margin-bottom: 10px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .div-feature {
    width: 30%;
    margin-right: 10px;
    margin-left: 10px;
    padding: 10px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 8px 0 rgba(105, 105, 105, .2);
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in
  }

  .div-feature.maior {
    width: 35%
  }

  .div-feature.medio {
    width: 43%
  }

  .div-feature._2 {
    width: 32%;
    min-height: 80px;
    margin-right: 5px;
    margin-left: 5px;
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1
  }

  .image-22 {
    margin-right: 10px;
    float: left
  }

  .text-block-54 {
    float: left;
    color: #079d56;
    font-size: 14px;
    line-height: 1.4em
  }

  .italic-text {
    color: #4d99fa;
    font-size: 14px;
    line-height: 16px;
    font-weight: 400
  }

  .column-66 {
    padding: 55px 20px 55px 0;
    border-right: 1px solid #dbdbdb
  }

  .column-66._2 {
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 20px
  }

  .column-67 {
    padding-top: 4px;
    padding-right: 0;
    padding-left: 20px
  }

  .column-67._2 {
    padding-top: 20px
  }

  .col-maisfeliz.projeto-sustentavel {
    margin-top: 140px
  }

  .text-block-55 {
    color: #fff;
    line-height: 1.3em;
    font-weight: 400;
    text-align: center
  }

  .paragraph-38 {
    color: #565656;
    line-height: 1.5em;
    font-weight: 300;
    text-align: left
  }

  .topico-2 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 24%;
    min-height: 130px;
    margin-right: 10px;
    padding: 10px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #f7287c, #ff5aad);
    text-align: center
  }

  .topico-2.dunlop-topic {
    background-image: linear-gradient(45deg, #00d38d, #82ea5b)
  }

  .topico-2._7 {
    background-image: linear-gradient(45deg, #006b3f, #82ea5b)
  }

  .topico-2.vila-profeta-topicos {
    background-image: linear-gradient(45deg, #793f98, #ff5aad)
  }

  .comercio {
    position: relative;
    height: 600px;
    padding-top: 80px;
    padding-bottom: 80px;
    background-color: #f0f0f0;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(45%, #ff8b22), to(#ffb719));
    background-image: linear-gradient(180deg, #ff8b22 45%, #ffb719)
  }

  .img-comercio {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    width: 50%;
    background-image: url(../images/Rotatória.png);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: scroll
  }

  .div-info-comercio {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 50%;
    height: 100%;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .div-block-6 {
    padding-right: 120px
  }

  .div-logo-dunlop {
    display: inline-block;
    margin-bottom: 20px;
    padding: 10px 20px;
    border-radius: 10px;
    background-color: #f8f8f8
  }

  .div-mestre-features {
    width: 80%;
    margin: 40px auto 100px
  }

  .heading-33 {
    margin-top: 10px;
    color: #079d56;
    font-size: 38px;
    line-height: 44px;
    font-weight: 600
  }

  .section-cta-2 {
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: linear-gradient(96deg, #079d56, #82ea5b)
  }

  .section-cta-2.wire {
    background-image: linear-gradient(50deg, #a8a8a8, #c5c5c5), linear-gradient(96deg, #ffb719, #ff8b22)
  }

  .button-13 {
    padding-right: 35px;
    padding-left: 35px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 1px 1px 12px -3px #c76104;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #ff8b22;
    font-size: 16px
  }

  .button-13:hover {
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03)
  }

  .seta-2 {
    position: absolute;
    left: auto;
    top: 50%;
    right: 0;
    bottom: 0;
    z-index: 1;
    display: none;
    width: 50px;
    height: 50px;
    margin-right: -25px;
    background-color: #006b3f;
    -webkit-transform: translate(0, -50%) rotate(45deg);
    -ms-transform: translate(0, -50%) rotate(45deg);
    transform: translate(0, -50%) rotate(45deg)
  }

  .galeria-de-fotos-2 {
    height: 400px;
    background-color: #6e6e6e
  }

  .galeria-de-fotos-2.wire {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%)
  }

  .button-14 {
    margin-top: 20px;
    padding-right: 25px;
    padding-left: 25px;
    border-style: solid;
    border-width: 1.5px;
    border-color: #ac41d8;
    border-radius: 20px;
    background-color: #ac41d8;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #fff;
    font-size: 16px;
    font-weight: 400;
    text-transform: lowercase
  }

  .button-14:hover {
    border-color: #dd89ff;
    background-color: transparent;
    color: #dd89ff;
    font-weight: 400
  }

  .button-14.galeria {
    display: none;
    padding-right: 40px;
    padding-left: 40px;
    border-style: solid;
    border-color: #82ea5b;
    background-color: #82ea5b;
    color: #006b3f
  }

  .button-14.elvira:hover,
  .button-14.galeria:hover {
    background-color: transparent;
    color: #82ea5b
  }

  .button-14.elvira,
  .button-14.residencial-progresso {
    margin-top: 10px;
    border-radius: 5px;
    text-transform: uppercase
  }

  .button-14.elvira {
    margin-left: 0;
    border-color: #793f98;
    background-color: #793f98;
    font-size: 14px
  }

  .button-14.elvira:hover {
    border-color: #ff8b22;
    color: #ff8b22
  }

  .button-14.residencial-progresso {
    border-color: #433868;
    background-color: #433868
  }

  .button-14.residencial-progresso:hover {
    border-color: #433868;
    background-color: transparent;
    color: #433868
  }

  .column-68 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    padding-right: 0;
    padding-left: 40px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
    background-color: #006b3f;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ff5aad), to(#ff5aad));
    background-image: linear-gradient(180deg, #ff5aad, #ff5aad)
  }

  .bold-text-42 {
    color: #793f98;
    font-weight: 500
  }

  .div-contorno {
    position: absolute;
    left: 40px;
    top: 40px;
    z-index: 1;
    width: 400px;
    height: 400px;
    border-style: solid;
    border-width: 10px;
    border-color: #ac41d8;
    border-radius: 25px
  }

  .div-contorno._2 {
    left: auto;
    top: 40px;
    right: 40px;
    bottom: auto;
    border-color: #ffb719
  }

  .div-contorno._2._3 {
    border-color: #ff5aad
  }

  .div-contorno._3 {
    border-color: #f7287c
  }

  .bold-text-43 {
    font-weight: 600
  }

  .bold-text-44,
  .bold-text-45 {
    border-bottom: 2px solid #82ea5b;
    line-height: 1.3em
  }

  .enviar-form-lp-4 {
    margin-top: 20px;
    padding-right: 35px;
    padding-left: 35px;
    border-radius: 5px;
    box-shadow: 0 0 15px -7px #000;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: .5px;
    text-transform: uppercase
  }

  .enviar-form-lp-4:hover {
    background-image: linear-gradient(304deg, #ff8b22, #ffb719);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03)
  }

  .enviar-form-lp-4,
  .enviar-form-lp-4.minha-casa {
    background-image: linear-gradient(304deg, #ffb719, #ff8b22)
  }

  .enviar-form-lp-4.minha-casa {
    box-shadow: 0 6px 15px -7px rgba(0, 0, 0, .2)
  }

  .div-logo-minhacasa {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 350px;
    height: 140px;
    padding-right: 15px;
    padding-left: 15px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-style: solid;
    border-width: 2px;
    border-color: #f68b28;
    border-radius: 20px;
    background-color: #fff
  }

  .menor {
    color: #f68b28;
    font-size: 49px
  }

  .heading-34 {
    margin-right: 20px;
    color: #fff;
    font-size: 32px;
    line-height: 1.4em;
    font-weight: 600
  }

  .sonho {
    padding-top: 410px;
    padding-bottom: 80px;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(40%, #4aaf6b), to(#9fbe41));
    background-image: linear-gradient(180deg, #4aaf6b 40%, #9fbe41)
  }

  .image-24 {
    position: absolute;
    left: 47%;
    top: auto;
    right: 0;
    bottom: -325px;
    z-index: 1;
    -webkit-transform: translate(-50%, 0);
    -ms-transform: translate(-50%, 0);
    transform: translate(-50%, 0)
  }

  .div-selo-minhacasa {
    position: absolute;
    left: 20px;
    top: auto;
    right: auto;
    bottom: -5%;
    z-index: 10;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 156px;
    height: 156px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 100px;
    background-image: none
  }

  .destaque-h2-3 {
    color: #ac41d8;
    font-weight: 600
  }

  .destaque-h2-3.minha-casa {
    color: #88ff5b
  }

  .div-selo-contorno {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 150px;
    height: 150px;
    padding-top: 15px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-style: solid;
    border-width: 1px;
    border-color: #82ea5b;
    border-radius: 100px
  }

  .text-block-56 {
    margin-right: 5px;
    margin-left: 5px;
    color: #82ea5b;
    font-weight: 700;
    text-align: center
  }

  .image-25 {
    margin-top: 5px
  }

  .paragraph-39 {
    margin-bottom: 20px;
    color: #6e6e6e;
    line-height: 1.6em;
    font-weight: 300
  }

  .paragraph-39.branco {
    color: #fff
  }

  .paragraph-39.branco.minha-casa {
    width: 80%;
    margin-bottom: 40px
  }

  .paragraph-39.margin-bottom-off {
    margin-bottom: 0
  }

  .div-box-sonho,
  .div-boxes-sonho {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
  }

  .div-boxes-sonho {
    width: 70%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start
  }

  .div-box-sonho {
    width: 163px;
    height: 163px;
    margin-right: 20px;
    margin-left: 20px;
    padding: 20px 15px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 6px 12px 0 rgba(0, 107, 63, .15)
  }

  .text-block-57 {
    float: left;
    color: #079d56;
    font-size: 14px;
    line-height: 1.4em
  }

  .txt-boxes-sonho {
    margin-top: 10px;
    color: #079d56;
    line-height: 1.4em;
    font-weight: 600;
    text-align: center
  }

  .bold-text-46 {
    padding-right: 2px;
    padding-left: 2px;
    background-color: rgba(0, 107, 63, .9);
    color: #fff;
    font-weight: 400
  }

  .bold-text-47 {
    color: #82ea5b
  }

  .box-condicao,
  .box-condicoes-2 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-direction: normal;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .box-condicoes-2 {
    width: 70%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    -webkit-box-orient: horizontal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .box-condicao {
    width: 22%;
    min-height: 150px;
    padding: 20px;
    -webkit-box-orient: vertical;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    border-right: 1px solid #00d38d
  }

  .box-condicao.border-off {
    border-right-style: none
  }

  .txt-legal {
    width: 70%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    color: #6e6e6e;
    font-size: 12px;
    font-weight: 300;
    text-align: center
  }

  .detalhes {
    position: relative;
    height: 640px;
    padding-top: 80px;
    padding-bottom: 60px;
    background-image: linear-gradient(225deg, #ac41d8, #793f98)
  }

  .div-txt-detalhes {
    width: 50%;
    height: 100%;
    padding-right: 120px
  }

  .slider-detalhes {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    width: 50%;
    height: 640px
  }

  .destaque-h2-4 {
    color: #079d56;
    font-weight: 600
  }

  .destaque-h2-4.lime {
    color: #82ea5b
  }

  .div-detalhe,
  .div-lista-detalhes {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .div-lista-detalhes {
    margin-bottom: 20px
  }

  .div-lista-detalhes.margin-botton-40px {
    margin-bottom: 40px
  }

  .div-detalhe {
    width: 70%
  }

  .icon-detalhe {
    margin-right: 20px
  }

  .text-block-58 {
    color: #fff;
    font-weight: 600
  }

  .slide-nav-5 {
    display: none
  }

  .arrow {
    left: -110px;
    top: auto;
    right: auto;
    bottom: 20px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 40px;
    height: 40px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px solid #fff;
    border-radius: 100px;
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    color: #fff
  }

  .arrow:hover {
    background-color: #fff;
    color: #793f98
  }

  .arrow._2 {
    left: -60px;
    -webkit-transition: opacity 200ms ease;
    transition: opacity 200ms ease
  }

  .icon-9 {
    font-size: 18px
  }

  .img-casas {
    width: 100%
  }

  .passos {
    padding-top: 60px;
    padding-bottom: 100px
  }

  .div-passos {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
  }

  .div-card-passos,
  .div-card-passos._2,
  .div-card-passos._3,
  .div-card-passos._4,
  .div-card-passos._5 {
    background-position: 0 0, 0 0, 0 0, 50% 50%;
    background-size: auto, auto, auto, 225px;
    background-repeat: repeat, repeat, repeat, no-repeat
  }

  .div-card-passos {
    position: relative;
    width: 225px;
    height: 350px;
    margin-right: 10px;
    margin-left: 10px;
    border-radius: 10px;
    background-image: linear-gradient(135deg, rgba(0, 0, 0, .8), rgba(255, 255, 255, 0) 40%), linear-gradient(180deg, rgba(20, 20, 20, 0) 43%, rgba(0, 0, 0, .8)), linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/bg-passo-01.jpg)
  }

  .div-card-passos._2,
  .div-card-passos._3,
  .div-card-passos._4,
  .div-card-passos._5 {
    background-image: linear-gradient(135deg, rgba(0, 0, 0, .8), rgba(255, 255, 255, 0) 40%), linear-gradient(180deg, rgba(20, 20, 20, 0) 43%, rgba(0, 0, 0, .8)), linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/bg-passo-02.jpg)
  }

  .div-card-passos._3,
  .div-card-passos._4,
  .div-card-passos._5 {
    background-image: linear-gradient(135deg, rgba(0, 0, 0, .8), rgba(255, 255, 255, 0) 40%), linear-gradient(180deg, rgba(20, 20, 20, 0) 43%, rgba(0, 0, 0, .8)), linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/bg-passo-03.jpg)
  }

  .div-card-passos._4,
  .div-card-passos._5 {
    background-image: linear-gradient(135deg, rgba(0, 0, 0, .8), rgba(255, 255, 255, 0) 40%), linear-gradient(180deg, rgba(20, 20, 20, 0) 43%, rgba(0, 0, 0, .8)), linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/bg-passo-04.jpg)
  }

  .div-card-passos._5 {
    background-image: linear-gradient(135deg, rgba(0, 0, 0, .8), rgba(255, 255, 255, 0) 40%), linear-gradient(180deg, rgba(20, 20, 20, 0) 43%, rgba(0, 0, 0, .8)), linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/bg-passo-05.jpg)
  }

  .numero-card {
    position: relative;
    left: 10px;
    top: 10px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 45px;
    height: 45px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 2px solid #fff;
    border-radius: 100px;
    color: #fff;
    font-size: 26px;
    font-weight: 600;
    text-align: center
  }

  .txt-passo {
    position: absolute;
    left: 15px;
    top: auto;
    right: 15px;
    bottom: 20px;
    color: #fff;
    font-size: 16px;
    line-height: 1.5em;
    font-weight: 300
  }

  .depoimentos {
    padding-top: 80px;
    padding-bottom: 120px;
    background-color: #f8f8f8;
    background-image: url(../images/pattern-roxa2.png), url(../images/pattern-roxa.png);
    background-position: 105% 50%, -5% 50%;
    background-size: contain, contain;
    background-repeat: no-repeat, no-repeat
  }

  .div-depoimentos {
    overflow: hidden;
    width: 100%;
    height: 100%;
    border-radius: 10px
  }

  .slider-depoimentos {
    width: 720px;
    height: 240px;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, .12)
  }

  .arrow-depoimento,
  .slide-nav-depoimento {
    top: auto;
    right: 0;
    bottom: -60px;
    height: 40px
  }

  .slide-nav-depoimento {
    left: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .arrow-depoimento {
    left: -145px;
    width: 40px;
    border-style: solid;
    border-width: 1px;
    border-color: #793f98;
    border-radius: 100px;
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    color: #793f98
  }

  .arrow-depoimento:hover {
    background-color: #793f98;
    color: #fff
  }

  .arrow-depoimento._2 {
    left: 0;
    right: -145px
  }

  .icon-10 {
    font-size: 20px
  }

  .depoimento {
    margin-top: 40px;
    margin-right: 40px;
    margin-left: 40px;
    color: #6e6e6e;
    line-height: 1.8em;
    font-style: italic;
    font-weight: 300
  }

  .div-depoimento-autor {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 20px;
    margin-right: 40px;
    margin-left: 40px;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .foto-autor {
    display: none;
    margin-right: 10px;
    border-radius: 100px
  }

  .nome-autor {
    color: #793f98;
    line-height: 1.3em;
    font-weight: 400
  }

  .cargo {
    display: none;
    color: #6e6e6e;
    font-size: 12px;
    font-weight: 300
  }

  .radio-button-field-4 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    float: left;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start
  }

  .radio-button-field-4._2 {
    margin-left: 10px
  }

  .radio-button-label-3 {
    margin-left: 5px;
    color: #fff;
    font-weight: 300
  }

  .div-escolha-cidade-clientes {
    overflow: hidden;
    height: 0;
    margin-top: 30px;
    clear: left
  }

  .div-escolha-cidade-naoclientes {
    overflow: hidden;
    height: 0;
    margin-top: 10px
  }

  .text-block-59 {
    position: absolute;
    left: 10px;
    top: auto;
    right: auto;
    bottom: 10px;
    z-index: 3
  }

  .italic-text-2 {
    color: #fff;
    font-size: 12px;
    text-shadow: 0 0 6px #000
  }

  .nome-autor-2 {
    color: #793f98;
    line-height: 1.3em;
    font-weight: 400
  }

  .cargo-2,
  .depoimento-2 {
    color: #6e6e6e;
    font-weight: 300
  }

  .depoimento-2 {
    margin-top: 40px;
    margin-right: 40px;
    margin-left: 40px;
    line-height: 1.8em;
    font-style: italic
  }

  .cargo-2 {
    display: none;
    font-size: 12px
  }

  .slider-videos {
    width: 720px;
    height: auto;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, .12)
  }

  .arrow-depoimento-2 {
    left: -145px;
    top: auto;
    right: 0;
    bottom: -60px;
    width: 40px;
    height: 40px;
    border-style: solid;
    border-width: 1px;
    border-color: #793f98;
    border-radius: 100px;
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    color: #793f98
  }

  .arrow-depoimento-2:hover {
    background-color: #793f98;
    color: #fff
  }

  .arrow-depoimento-2._2 {
    left: 0;
    right: -145px
  }

  .slider-6 {
    height: 360px;
    margin-top: 40px;
    border-radius: 10px
  }

  .div-slide-videos {
    position: relative;
    width: 640px;
    margin-right: auto;
    margin-left: auto
  }

  .slide-17,
  .slide-18 {
    overflow: hidden;
    border-radius: 10px
  }

  .div-logo-vila-profeta {
    display: inline-block;
    margin-bottom: 20px;
    padding: 10px 20px;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, .8)
  }

  .h1-vila-profeta {
    color: #fff;
    font-weight: 200
  }

  .bold-text-48 {
    color: #82ea5b
  }

  .text-span-2 {
    background-color: transparent;
    color: #ff5aad
  }

  .lime {
    color: #82ea5b
  }

  .paragrafo {
    margin-bottom: 20px;
    color: #6e6e6e;
    line-height: 1.6em;
    font-weight: 300
  }

  .paragrafo.right {
    text-align: right
  }

  .paragrafo.branco {
    color: #fff
  }

  .destaque-rosa {
    color: #f7287c;
    font-weight: 700
  }

  .destaque-rosa._2 {
    color: #f7287c
  }

  .destaque-rosa._3,
  .destaque-rosa._4,
  .roxo {
    color: #793f98
  }

  .destaque-rosa._5 {
    color: #f7287c
  }

  .destaque-rosa._6 {
    color: #ac41d8
  }

  .destaque-rosa._7 {
    color: #079d56
  }

  .destaque-rosa.lime {
    color: #82ea5b
  }

  .roxo.bold {
    font-weight: 700
  }

  .div-margem,
  .div-submenu {
    padding-top: 100px;
    background-color: #006b3f
  }

  .div-submenu {
    position: fixed;
    z-index: 9999;
    width: 100%;
    height: 82px;
    padding-top: 10px;
    padding-bottom: 10px;
    color: transparent
  }

  .div-block-7 {
    display: inline-block;
    margin-right: auto;
    margin-left: auto;
    text-align: center
  }

  .link-submenu {
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #fff;
    font-weight: 400;
    text-decoration: none
  }

  .link-submenu:hover {
    border-bottom: 0 none #ff8b22
  }

  .link-11 {
    margin-right: 30px;
    padding-left: 20px;
    text-decoration: none
  }

  .navbar-desktop {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    text-align: left
  }

  .image-26 {
    width: 400px;
    margin-top: 20px
  }

  .nossa-historia {
    display: block;
    height: auto;
    margin-top: 80px;
    padding-top: 20px;
    -webkit-transition: all 400ms ease;
    transition: all 400ms ease
  }

  .div-block-9 {
    display: none
  }

  .dropdown-menu {
    padding-top: 20px;
    padding-bottom: 20px
  }

  .dropdown-toggle-2 {
    padding-top: 0;
    padding-bottom: 0;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #fff
  }

  .dropdown-toggle-2:hover,
  .link-submenu:hover {
    color: #ff8b22;
    font-weight: 500
  }

  .dropdown-list-2 {
    display: none;
    margin-top: 0;
    padding-top: 0;
    border-bottom: 1px solid #ff8b22;
    background-color: #fff;
    box-shadow: 3px 0 14px -12px #000;
    -webkit-transform: translate(0, 10px);
    -ms-transform: translate(0, 10px);
    transform: translate(0, 10px)
  }

  .dropdown-link-submenu {
    color: #006b3f
  }

  .dropdown-link-submenu:hover {
    background-color: #f7f7f7;
    color: #ff8b22;
    text-decoration: none
  }

  .dropdown-link-submenu:active {
    color: #ff8b22
  }

  .dropdown-link-submenu:focus {
    color: #ff8b22;
    text-decoration: none
  }

  .dropdown-link-submenu:visited {
    color: #ff8b22;
    text-decoration: none
  }

  .dropdown-link-submenu.w--current {
    display: none;
    color: #ff8b22
  }

  .apresentacao-institucional {
    display: block;
    margin-top: 80px;
    margin-bottom: 0;
    padding-top: 0;
    padding-bottom: 40px;
    background-color: #f8f8f8
  }

  .filtro-ano {
    padding: 20px
  }

  .filto-por-ano {
    display: block;
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    background-color: #ececec
  }

  .paragraph-40 {
    display: inline
  }

  .field-label-3 {
    display: inline-block;
    width: auto;
    height: auto;
    padding-right: 20px;
    color: #006b3f;
    font-weight: 500
  }

  .select-field-7 {
    display: inline-block;
    width: auto;
    border-radius: 20px
  }

  .select-field-7:active {
    padding-right: 20px;
    padding-left: 20px;
    border-style: solid;
    border-width: 1px;
    border-color: #006b3f
  }

  .form-8 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 50%;
    justify-items: start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-align-content: end;
    -ms-flex-line-pack: end;
    align-content: end;
    grid-auto-columns: 1fr;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto
  }

  .btn-filtro-investidores {
    margin-top: -13px;
    margin-left: 20px;
    padding-right: 25px;
    padding-left: 25px;
    border-radius: 20px;
    background-color: #ff8b22
  }

  .form-block-6 {
    height: 40px;
    margin-bottom: 0
  }

  .titulo-ano {
    display: none;
    margin-top: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 20px;
    border-bottom: 1px solid #ff8b22;
    background-color: #fff;
    color: #fff
  }

  .heading-35 {
    margin-top: 0;
    margin-bottom: 0;
    color: #006b3f;
    font-size: 20px;
    font-weight: 700
  }

  .lista-arquivo {
    margin-top: 20px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 20px;
    border-bottom: 1px solid #079d56;
    background-color: transparent;
    color: #fff
  }

  .nome-do-arquivo {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #6e6e6e;
    font-size: 14px;
    line-height: 20px;
    font-weight: 500
  }

  .nome-do-arquivo:hover {
    color: #ff8b22;
    font-weight: 500
  }

  .image-27 {
    width: 15px;
    margin-bottom: 5px;
    -webkit-transition: all 400ms ease;
    transition: all 400ms ease
  }

  .image-27:hover {
    -webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    transform: scale(1.3)
  }

  .link-block-hovercinza {
    padding: 5px
  }

  .link-block-hovercinza:hover {
    border-radius: 5px;
    background-color: transparent
  }

  .programa-de-integridade {
    display: block;
    margin-top: 0;
    margin-bottom: 60px
  }

  .div-administracao {
    display: none;
    overflow: visible;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px
  }

  .subtitulos-administracao {
    border-bottom: 1px solid #ff8b22
  }

  .title-administracao {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    font-size: 14px;
    line-height: 20px
  }

  .title-administracao,
  .title-administracao:hover {
    color: #ff8b22;
    font-weight: 500
  }

  .div-nome-administrador {
    position: relative;
    height: 100px;
    margin-top: 20px;
    padding: 20px;
    border-style: solid;
    border-width: 1px;
    border-color: #b6b6b6;
    border-radius: 10px
  }

  .nome-administrador {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    font-size: 16px;
    line-height: 20px
  }

  .nome-administrador,
  .nome-administrador:hover {
    color: #6e6e6e;
    font-weight: 500
  }

  .divisor {
    height: 1px;
    margin-top: 5px;
    background-color: #b6b6b6
  }

  .description-administracao,
  .description-mandato-administracao {
    position: absolute;
    left: 2%;
    top: 50px;
    right: auto;
    bottom: 0;
    display: inline-block;
    margin-top: 10px;
    color: #6e6e6e;
    font-size: 13px
  }

  .description-mandato-administracao {
    left: auto;
    right: 2%
  }

  .administracao,
  .estatuto-social {
    display: block;
    margin-bottom: 0;
    padding-bottom: 60px
  }

  .estatuto-social {
    height: auto;
    margin-top: 60px;
    padding-top: 40px;
    -webkit-transition: all 400ms ease;
    transition: all 400ms ease
  }

  .administracao {
    margin-top: 0;
    padding-top: 0;
    background-color: #f8f8f8
  }

  .div-diretoria-executiva {
    display: none;
    overflow: visible;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px
  }

  .atas-e-assembleias,
  .politicas {
    display: block;
    margin-bottom: 0;
    padding-bottom: 60px
  }

  .atas-e-assembleias {
    margin-top: 0;
    padding-top: 0;
    background-color: #fff
  }

  .politicas {
    padding-top: 20px;
    background-color: #f8f8f8
  }

  .centra-de-resultados {
    display: block;
    height: auto;
    margin-top: 40px;
    margin-bottom: 60px;
    padding-top: 40px;
    -webkit-transition: all 400ms ease;
    transition: all 400ms ease
  }

  .description-mandato-administracao-2 {
    position: absolute;
    left: auto;
    top: 50px;
    right: 2%;
    bottom: 0;
    display: inline-block;
    margin-top: 10px;
    color: #6e6e6e;
    font-size: 13px
  }

  .nome-administrador-2,
  .nome-do-arquivo-2 {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    line-height: 20px
  }

  .nome-do-arquivo-2 {
    color: #6e6e6e;
    font-size: 14px;
    font-weight: 500
  }

  .nome-do-arquivo-2:hover {
    color: #ff8b22;
    font-weight: 500
  }

  .nome-administrador-2 {
    font-size: 16px
  }

  .nome-administrador-2,
  .nome-administrador-2:hover {
    color: #6e6e6e;
    font-weight: 500
  }

  .lista-arquivo-2 {
    display: -ms-grid;
    display: grid;
    margin-top: 20px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 20px;
    grid-auto-columns: 1fr;
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    -ms-grid-columns: 1fr .25fr .25fr .25fr;
    grid-template-columns: 1fr .25fr .25fr .25fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
    border-bottom: 1px solid #079d56;
    background-color: #006b3f;
    color: #fff
  }

  .image-28 {
    width: 15px;
    margin-bottom: 5px;
    -webkit-transition: all 400ms ease;
    transition: all 400ms ease
  }

  .image-28:hover {
    -webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    transform: scale(1.3)
  }

  .link-block-hovercinza-2 {
    padding: 0 5px
  }

  .link-block-hovercinza-2:hover {
    border-radius: 5px;
    background-color: transparent
  }

  .description-administracao-2 {
    position: absolute;
    left: 2%;
    top: 50px;
    right: auto;
    bottom: 0;
    display: inline-block;
    margin-top: 10px;
    color: #6e6e6e;
    font-size: 13px
  }

  .div-trimestres {
    display: block;
    overflow: visible;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px
  }

  .title-ano,
  .title-ano:hover {
    margin-top: 10px;
    margin-bottom: 10px;
    color: #fff
  }

  .title-ano {
    display: inline-block;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    font-size: 18px;
    line-height: 20px;
    font-weight: 600
  }

  .title-ano:hover {
    font-weight: 500
  }

  .grid-trimestres,
  .grid-trimestres-title {
    display: -ms-grid;
    display: grid;
    margin-top: 20px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 20px;
    grid-auto-columns: 1fr;
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    -ms-grid-columns: 1fr .25fr .25fr .25fr .25fr;
    grid-template-columns: 1fr .25fr .25fr .25fr .25fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
    border-bottom: 1px solid #079d56;
    background-color: #fff;
    color: #fff
  }

  .grid-trimestres-title {
    background-color: #079d56
  }

  .nome-administrador-2-copy {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    font-size: 16px;
    line-height: 20px
  }

  .nome-administrador-2-copy,
  .nome-administrador-2-copy:hover {
    color: #6e6e6e;
    font-weight: 500
  }

  .icone-trimestres {
    width: 35px;
    margin-bottom: 5px;
    -webkit-transition: all 400ms ease;
    transition: all 400ms ease
  }

  .icone-trimestres:hover {
    -webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    transform: scale(1.3)
  }

  .icone-trimestres.icones-pdf {
    width: 30px
  }

  .drop-link-menu {
    display: block;
    -webkit-transition: opacity 400ms ease;
    transition: opacity 400ms ease;
    color: #006b3f
  }

  .drop-link-menu:hover {
    color: #ff8b22
  }

  .destaque-roxo {
    color: #793f98
  }

  .html-embed {
    margin-top: 0
  }

  .bold-text-49 {
    color: #82ea5b
  }

  .columns-22 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 60px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .lupa,
  .search {
    left: auto;
    top: 0;
    right: 0;
    bottom: 0
  }

  .search {
    position: relative;
    display: block;
    margin-top: 0;
    margin-right: 0;
    margin-left: 110px;
    padding-top: 0;
    grid-auto-columns: 1fr;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    -ms-grid-rows: auto auto;
    grid-template-rows: auto auto;
    background-color: transparent;
    text-align: right
  }

  .lupa {
    position: absolute;
    width: 35px;
    margin-top: 10px;
    cursor: pointer
  }

  .lupa:hover {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2)
  }

  .form-9,
  .form-block-7 {
    display: block;
    width: auto;
    -webkit-box-direction: normal;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end
  }

  .form-block-7 {
    margin-top: 0;
    -webkit-box-orient: vertical;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    grid-auto-columns: 1fr;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    -ms-grid-rows: auto auto;
    grid-template-rows: auto auto;
    text-align: right
  }

  .form-9 {
    margin-top: 25px;
    -webkit-box-orient: horizontal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: transparent;
    text-align: center
  }

  .text-field-7 {
    position: static;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    display: block;
    margin-bottom: 0;
    text-align: left
  }

  .div-block-13 {
    position: relative;
    display: block;
    width: 200px;
    margin-top: 0;
    margin-right: 0;
    margin-left: 0;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-auto-columns: 1fr;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    -ms-grid-rows: auto auto;
    grid-template-rows: auto auto;
    -webkit-transform: translate(0, -14px);
    -ms-transform: translate(0, -14px);
    transform: translate(0, -14px);
    text-align: right
  }

  .image-29 {
    padding-top: 0;
    text-align: left
  }

  .columns-23,
  .div-img-sobre-2.venda {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .columns-23 {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row
  }

  .div-img-sobre-2 {
    width: auto;
    height: auto;
    margin-top: -25px;
    text-align: center
  }

  .div-img-sobre-2.venda {
    height: 350px;
    margin-top: 0;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    background-image: url(../images/slider-empreendimento-03.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .div-subtitulo-section {
    margin-top: 40px;
    padding-left: 20px;
    background-color: #079d56
  }

  .contato {
    display: block;
    margin-top: 0;
    margin-bottom: 0;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f8f8f8
  }

  .contato.contato-branco {
    background-color: #fff
  }

  .link-email-urba {
    color: #ff8b22;
    font-size: 16px
  }

  .image-30 {
    width: 25px;
    margin-right: 10px;
    margin-bottom: -15px
  }

  .div-block-14 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: -30px;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: right
  }

  .paragrafo-comum {
    display: block;
    width: auto;
    margin-top: 30px;
    margin-bottom: 20px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #ff8b22;
    font-size: 25px;
    line-height: 1.8;
    font-weight: 300;
    text-align: center
  }

  .paragrafo-comum.legenda {
    margin-top: 20px;
    font-size: 13px;
    font-style: italic;
    text-align: center
  }

  .paragrafo-comumm {
    color: #565656;
    line-height: 1.8;
    font-weight: 400;
    text-align: left
  }

  .paragrafo-comumm.margem-top {
    margin-top: 20px;
    text-align: left
  }

  .link-regime-interno {
    margin-top: 20px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 20px;
    border-bottom: 0 solid #079d56;
    background-color: transparent;
    color: #fff;
    text-align: center
  }

  .link-regime-interno-2 {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    font-size: 14px;
    line-height: 20px
  }

  .link-regime-interno-2,
  .link-regime-interno-2:hover {
    color: #ff8b22;
    font-weight: 500
  }

  .link-12 {
    color: #ff8b22
  }

  .div-comite-de-financas {
    display: none;
    overflow: visible;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px
  }

  .paragraph-41 {
    color: #6e6e6e
  }

  .div-comite-de-pessoas,
  .div-comite-estrategia,
  .div-comite-governanca {
    display: none;
    overflow: visible;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px
  }

  .div-texto-nossa-historia {
    width: 60%;
    margin-right: auto;
    margin-left: auto
  }

  .columns-24 {
    margin-top: 20px
  }

  .nav-menu-3 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end
  }

  .button-33.galeria:hover,
  .navbar-3 {
    background-color: transparent
  }

  .navbar-mobile {
    position: relative;
    display: none;
    text-align: left
  }

  .dropdown-menu-mobile {
    padding-top: 20px;
    padding-bottom: 20px
  }

  .nav-menu-4 {
    background-color: #006b3f
  }

  .link-mobile {
    margin-right: 30px;
    padding-left: 20px;
    text-decoration: none
  }

  .image-31,
  .nota {
    text-align: center
  }

  .image-31 {
    display: inline-block
  }

  .nota {
    padding-top: 8px;
    color: #565656;
    font-size: 11px;
    line-height: 1.8;
    font-weight: 400
  }

  .nota.margem-top {
    margin-top: 20px;
    font-size: 10px;
    text-align: center
  }

  .image-29-copy {
    margin-top: 10px;
    margin-bottom: 10px;
    padding-top: 0;
    text-align: left
  }

  .bold-text-50 {
    color: #ff8b22
  }

  .container-3,
  .icones-obra {
    display: block;
    text-align: center
  }

  .icones-obra {
    position: static;
    z-index: auto;
    overflow: visible;
    width: 80px;
    height: 80px;
    margin-right: auto;
    margin-bottom: 10px;
    margin-left: auto;
    float: none;
    clear: both
  }

  .container-3 {
    overflow: hidden;
    padding-bottom: 0;
    grid-auto-columns: 1fr;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    -ms-grid-rows: auto auto;
    grid-template-rows: auto auto;
    -o-object-fit: fill;
    object-fit: fill
  }

  .div-box-preenchido-itapeva {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
    z-index: 1;
    width: 370px;
    height: 200px;
    border-radius: 20px;
    background-image: linear-gradient(45deg, #009169, #82ea5b)
  }

  .div-box-preenchido-itapeva.regatas-comercial {
    width: 370px
  }

  .subtitle-lp {
    width: 315px;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: 20px;
    color: #fff;
    font-size: 22px;
    line-height: 35px;
    font-weight: 300
  }

  .subtitle-lp.regatas {
    position: relative;
    z-index: 2;
    width: 300px;
    line-height: 32px
  }

  .subtitle-lp.itapeva,
  .subtitle-lp.monte-mor,
  .subtitle-lp.residencial-progresso {
    position: relative;
    z-index: 2;
    width: 450px;
    margin-top: -20px;
    margin-left: 0;
    font-size: 19px;
    line-height: 28px
  }

  .subtitle-lp.monte-mor,
  .subtitle-lp.residencial-progresso {
    background-color: transparent;
    font-weight: 500;
    text-align: left
  }

  .subtitle-lp.residencial-progresso {
    margin-top: 15px;
    margin-bottom: 5px;
    color: #e9bb00
  }

  .logo-itapeva {
    width: auto;
    height: 110px;
    margin-right: 0;
    padding-top: 0;
    padding-bottom: 2px;
    padding-left: 5px
  }

  .button-33 {
    margin-top: 20px;
    padding-right: 25px;
    padding-left: 25px;
    border-style: solid;
    border-width: 1.5px;
    border-color: #ac41d8;
    border-radius: 20px;
    background-color: #ac41d8;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #fff;
    font-size: 16px;
    font-weight: 400;
    text-transform: lowercase
  }

  .button-33:hover {
    border-color: #dd89ff;
    background-color: transparent;
    color: #dd89ff;
    font-weight: 400
  }

  .button-33.galeria {
    display: none;
    padding-right: 40px;
    padding-left: 40px;
    border-style: solid;
    border-color: #82ea5b;
    background-color: #82ea5b;
    color: #006b3f
  }

  .button-33.galeria:hover {
    color: #82ea5b
  }

  .button-33.cond {
    margin-top: 50px
  }

  .button-33.cond.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .button-33.cond.regatas:hover,
  .button-33.elvira.regatas:hover,
  .button-33.itapeva.regatas:hover,
  .button-34.botao-monte-mor.regatas:hover,
  .button-34.botao-residencial-elvira.regatas:hover,
  .button-34.botao-sao-roque-2.regatas:hover,
  .button-34.botao-sao-roque.regatas:hover,
  .button-34.cond.regatas:hover,
  .button-34.elvira.regatas:hover,
  .button-34.itapeva.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff
  }

  .button-33.itapeva {
    margin-top: 10px;
    margin-left: 0;
    border-color: #ffb719;
    background-color: #ffb719;
    font-size: 14px
  }

  .button-33.itapeva:hover {
    background-color: transparent;
    color: #ff8b22
  }

  .button-33.itapeva.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .button-33.elvira,
  .button-33.itapeva,
  .button-33.progresso {
    border-radius: 5px;
    text-transform: uppercase
  }

  .button-33.elvira {
    margin-top: 10px;
    margin-left: 0;
    border-color: #793f98;
    background-color: #793f98;
    font-size: 14px
  }

  .button-33.elvira:hover {
    border-color: #ff8b22;
    background-color: transparent;
    color: #ff8b22
  }

  .button-33.elvira.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .button-33.progresso {
    border-color: #433868;
    background-color: #433868
  }

  .button-33.progresso:hover {
    background-color: #fff;
    color: #433868
  }

  .div-block-16,
  .div-block-17 {
    text-align: center
  }

  .div-block-17 {
    width: 100%;
    margin-top: 40px
  }

  .div-block-17.monte-mor {
    margin-top: 20px;
    text-align: left
  }

  .button-34 {
    margin-top: 20px;
    padding-right: 25px;
    padding-left: 25px;
    border-style: solid;
    border-width: 1.5px;
    border-color: #ac41d8;
    border-radius: 20px;
    background-color: #ac41d8;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #fff;
    font-size: 16px;
    font-weight: 400;
    text-transform: lowercase
  }

  .button-34:hover {
    border-color: #dd89ff;
    background-color: transparent;
    color: #dd89ff;
    font-weight: 400
  }

  .button-34.galeria {
    display: none;
    padding-right: 40px;
    padding-left: 40px;
    border-style: solid;
    border-color: #82ea5b;
    background-color: #82ea5b;
    color: #006b3f
  }

  .button-34.galeria:hover {
    background-color: transparent;
    color: #82ea5b
  }

  .button-34.cond {
    margin-top: 50px
  }

  .button-34.cond.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .button-34.elvira,
  .button-34.itapeva {
    margin-top: 10px;
    border-color: #ac41d8;
    border-radius: 5px;
    background-color: #ac41d8;
    text-transform: uppercase
  }

  .button-34.itapeva:hover {
    background-color: transparent;
    color: #ac41d8
  }

  .button-34.itapeva.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .button-34.elvira {
    border-color: #ff8b22;
    background-color: #ff8b22
  }

  .button-34.elvira:hover {
    border-color: #793f98;
    background-color: transparent;
    color: #ac41d8
  }

  .button-34.elvira.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .button-34.botao-sao-roque,
  .button-34.botao-sao-roque-2 {
    float: none;
    clear: none;
    background-clip: border-box;
    -webkit-text-fill-color: inherit;
    cursor: pointer
  }

  .button-34.botao-sao-roque,
  .button-34.botao-sao-roque:hover {
    border-style: solid;
    border-color: #433868;
    background-image: none
  }

  .button-34.botao-sao-roque {
    background-image: -webkit-gradient(linear, left top, right top, from(#ac41d8), to(#793f98));
    background-image: linear-gradient(90deg, #ac41d8, #793f98);
    margin-top: 10px;
    margin-bottom: 0;
    border-radius: 5px;
    background-color: #433868;
    text-align: center;
    text-transform: uppercase
  }

  .button-34.botao-sao-roque:hover {
    background-color: transparent;
    color: #433868
  }

  .button-34.botao-sao-roque.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .button-34.botao-sao-roque-2 {
    border-color: #e9bb00;
    background-color: transparent;
    background-image: -webkit-gradient(linear, left top, right top, from(#fff), to(#f2f2f2));
    background-image: linear-gradient(90deg, #fff, #f2f2f2);
    color: #e51d71
  }

  .button-34.botao-sao-roque-2:hover {
    border-style: solid;
    border-color: #793f98;
    background-color: transparent;
    background-image: none;
    color: #793f98
  }

  .button-34.botao-sao-roque-2.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .button-34.botao-monte-mor,
  .button-34.botao-residencial-elvira,
  .button-34.botao-sao-roque-2 {
    margin-top: 10px;
    border-style: solid;
    border-radius: 5px;
    text-align: center;
    text-transform: uppercase
  }

  .button-34.botao-monte-mor {
    border-color: #793f98;
    background-color: transparent;
    background-image: -webkit-gradient(linear, left top, right top, from(#ac41d8), to(#793f98));
    background-image: linear-gradient(90deg, #ac41d8, #793f98)
  }

  .button-34.botao-monte-mor:hover {
    border-style: solid;
    border-color: #793f98;
    background-color: transparent;
    background-image: none;
    color: #793f98
  }

  .button-34.botao-monte-mor.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .button-34.botao-residencial-elvira {
    float: none;
    clear: none;
    border-color: #e9bb00;
    background-color: #e9bb00;
    color: #433868;
    background-clip: border-box;
    -webkit-text-fill-color: inherit;
    cursor: pointer
  }

  .button-34.botao-residencial-elvira:hover {
    border-style: solid;
    border-color: #e9bb00;
    background-color: transparent;
    color: #e9bb00
  }

  .button-34.botao-residencial-elvira.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .column-25-copy {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    padding-right: 0;
    padding-left: 40px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #ff8b22
  }

  .bold-text-23-copy {
    color: #793f98;
    font-weight: 500
  }

  .image-60 {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    z-index: 2;
    margin-top: 0;
    margin-right: -80px;
    -webkit-transform: translate(0, 19px);
    -ms-transform: translate(0, 19px);
    transform: translate(0, 19px)
  }

  .image-60.dunlop {
    margin-right: 0
  }

  .html-embed-2 {
    height: auto
  }

  .div-block-18 {
    margin-top: 40px;
    text-align: center
  }

  .div-block-18.monte-mor {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 0;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .video-itapeva {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f8f8f8;
    background-image: linear-gradient(45deg, #009169, #82ea5b)
  }

  .video-itapeva.bem-viver-campos,
  .video-itapeva.giardino,
  .video-itapeva.reserva {
    display: none
  }

  .video-itapeva.elvira {
    background-image: linear-gradient(315deg, #793f98, #ac41d8)
  }

  .video-itapeva.video-sao-roque {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#e51d71), to(#ca0a5f));
    background-image: linear-gradient(180deg, #e51d71, #ca0a5f)
  }

  .column-69 {
    padding-right: 10px;
    padding-left: 0
  }

  .column-70 {
    padding-right: 0
  }

  .checkbox-field-2 {
    display: block;
    width: 100px
  }

  .checkbox-field-2.montemor {
    margin-right: 0;
    margin-left: 0;
    text-align: left
  }

  .checkbox-field-2,
  .checkbox-label-4 {
    margin-right: auto;
    margin-left: auto
  }

  .div-block-19 {
    text-align: center
  }

  .div-block-19.montemor,
  .heading-36.elvira-copy.monte-mor,
  .heading-36.elvira.monte-mor,
  .heading-36.elvira.sao-roque {
    text-align: left
  }

  .detaque-laranja {
    color: #ff8b22
  }

  .heading-36 {
    position: relative;
    z-index: 2;
    width: 330px;
    font-family: Poppins, sans-serif;
    color: #fff;
    font-size: 29px;
    line-height: 38px;
    font-weight: 300
  }

  .heading-36.elvira,
  .heading-36.elvira-copy {
    margin-top: 20px
  }

  .heading-36.elvira-copy.residencial-progresso,
  .heading-36.elvira-copy.sao-roque {
    font-size: 29px;
    line-height: 38px;
    text-align: left
  }

  .heading-36.elvira-copy.residencial-progresso {
    position: relative;
    margin-top: 0
  }

  .text-span-3 {
    font-weight: 700
  }

  .destaque-laranja {
    color: #ff8b22;
    font-weight: 700
  }

  .micro-rodape {
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #535353
  }

  .micro-rodape.rodape-montemor {
    background-color: #fff
  }

  .paragraph-42 {
    color: #b1b1b1;
    font-size: 12px
  }

  .paragraph-42.center {
    text-align: center
  }

  .grid-5 {
    grid-column-gap: 20px;
    -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto
  }

  .porcentagem-obra {
    display: block;
    margin-top: -20px;
    margin-bottom: 0;
    color: #006b3f;
    line-height: 1.6em;
    font-weight: 300;
    text-align: center
  }

  .porcentagem-obra.right {
    text-align: right
  }

  .porcentagem-obra.branco {
    color: #fff;
    font-style: normal
  }

  .porcentagem-obra.numero-obra {
    margin-bottom: 0
  }

  .lightbox-link-7 {
    display: block;
    height: auto;
    margin-top: 40px;
    text-decoration: none
  }

  .slide-19 {
    height: auto
  }

  .mask {
    height: 800px
  }

  .div-block-20,
  .div-block-21 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: center
  }

  .div-block-20 {
    width: 200px;
    height: 40px;
    border-radius: 5px;
    background-image: -webkit-gradient(linear, left top, right top, from(#ac41d8), to(#793f98));
    background-image: linear-gradient(90deg, #ac41d8, #793f98);
    -webkit-transition: all 400ms ease-in;
    transition: all 400ms ease-in
  }

  .div-block-20:hover,
  .elvira-aerea:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05)
  }

  .div-block-21 {
    -webkit-transition: all 200ms ease;
    transition: all 200ms ease
  }

  .paragraph-43 {
    margin-bottom: 0;
    color: #fff;
    font-weight: 500;
    text-decoration: none
  }

  .text-span-4 {
    font-weight: 600
  }

  .destaque-vermelho {
    color: red;
    font-weight: 500
  }

  .logo-elvira {
    width: auto;
    height: 110px;
    margin-left: 6px;
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0
  }

  .elvira-slide-1 {
    background-image: url(../images/URBA_RESERVA_MONTE_MOR_RUA_CASAS.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat
  }

  .envira-slide-2 {
    background-image: url(../images/URBA_RESERVA_BOULEVARD_A2.jpg);
    background-repeat: no-repeat
  }

  .elvira-slide-3,
  .elvira-slide-4,
  .envira-slide-2 {
    background-position: 50% 50%;
    background-size: cover
  }

  .elvira-slide-3 {
    background-image: url(../images/URBA_RESERVA_MONTE_MOR_PORTARIA.jpg);
    background-repeat: no-repeat
  }

  .elvira-slide-4 {
    background-image: url(../images/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01.jpg)
  }

  .elvira-aerea {
    height: auto;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out
  }

  .elvira-colunas {
    margin-top: 40px
  }

  .elvira-colunas.monte-mor {
    width: 80%
  }

  .lightbox-link-8 {
    overflow: hidden;
    width: 260px;
    height: 400px
  }

  .div-planta-03 {
    width: 210px;
    height: 400px;
    background-image: url(../images/planta02.jpg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out
  }

  .div-planta-03:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05)
  }

  .div-planta-03.giardino {
    background-image: url(../images/planta-02.jpg)
  }

  .div-planta-03.reserva {
    background-image: url(../images/planta-02_1.jpg)
  }

  .div-planta-03.bem-viver {
    background-image: url(../images/planta02_1.jpg)
  }

  .div-planta-03.girassois {
    background-image: url(../images/planta-02_2.jpg)
  }

  .div-planta-03.campos {
    background-image: url(../images/planta02_2.jpg)
  }

  .div-planta-03.tulipas {
    background-image: url(../images/planta-02_3.jpg)
  }

  .div-planta-03.bem-campos {
    background-image: url(../images/planta-02_4.jpg)
  }

  .div-planta-03.regatas {
    background-image: url(../images/planta-02_5.jpg)
  }

  .div-planta-03.elvira {
    background-image: url(../images/Planta-Humanizada_SecondFloor.jpg)
  }

  .column-71 {
    padding-right: 0;
    padding-left: 0
  }

  .mapa-elvira {
    height: 100%
  }

  .ipca {
    margin-top: 0;
    color: #079d56;
    font-size: 12px;
    font-style: italic;
    font-weight: 300;
    text-align: center
  }

  .cond-elvira {
    width: 80%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    text-align: center
  }

  .cond-elvira.cond {
    width: 90%
  }

  .cond-elvira.cod {
    display: block;
    margin-top: 70px;
    padding-bottom: 10px
  }

  .elvira-roxo {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    padding-right: 0;
    padding-left: 40px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #793f98
  }

  .elvira-seta-laranja {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    z-index: 2;
    margin-top: 0;
    margin-right: -80px;
    -webkit-transform: translate(0, 19px);
    -ms-transform: translate(0, 19px);
    transform: translate(0, 19px)
  }

  .elvira-seta-laranja.dunlop {
    margin-right: 0
  }

  .elvira-destaque-verde {
    color: #ff8b22;
    font-weight: 500
  }

  .div-box-preenchido-elvira {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
    z-index: 1;
    width: 370px;
    height: 200px;
    border-radius: 20px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8)
  }

  .div-box-preenchido-elvira.regatas-comercial {
    width: 370px
  }

  .destaque-h2-elvira {
    color: #ff8b22;
    font-weight: 600
  }

  .destaque-h2-elvira.lime {
    color: #82ea5b
  }

  .destaque-h2-elvira.roxo {
    color: #793f98
  }

  .destaque-h2-elvira.itapeva {
    color: #ac41d8;
    text-shadow: none
  }

  .destaque-h2-copy {
    color: #079d56;
    font-weight: 600
  }

  .destaque-h2-copy.lime {
    color: #82ea5b
  }

  .destaque-h2-copy.roxo,
  .detaque-roxo {
    color: #793f98
  }

  .destaque-h2-copy.itapeva {
    color: #ac41d8;
    text-shadow: none
  }

  .destaque-verde {
    color: #00d38d;
    font-weight: 700
  }

  .topicos-elvira {
    color: #079d56;
    font-size: 16px;
    text-align: center
  }

  .img-bairro-planejado {
    margin-top: 0;
    margin-bottom: 30px;
    padding-top: 0
  }

  .destaque-verde-escuro {
    color: #079d56;
    font-weight: 700
  }

  .logo-monte-mor {
    width: auto;
    height: 160px;
    max-width: 100%;
    margin-right: 0;
    padding: 10px
  }

  .priv-monte-mor {
    color: #fff;
    text-align: left;
    text-shadow: 0 0 2px #000
  }

  .priv-check-monte-mor {
    margin-top: 5px;
    text-align: left
  }

  .destaque-monte-mor {
    color: #793f98;
    font-weight: 700
  }

  .destaque-monte-mor-paragrafo {
    color: #ff8b22;
    font-weight: 600
  }

  .text-span-5 {
    font-weight: 700
  }

  .div-block-22 {
    padding-bottom: 22px;
    text-align: center
  }

  .image-61 {
    padding-top: 10px
  }

  .italic-text-3 {
    text-align: center
  }

  .div-block-23 {
    padding-top: 30px
  }

  .destaque-monte-mor-verde {
    color: #ff8b22;
    font-weight: 700
  }

  .topicos-montemor {
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
    color: #565656;
    font-size: 16px;
    text-align: center
  }

  .icone-montemor {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 250px;
    height: 185px;
    margin-right: 10px;
    margin-left: 10px;
    padding: 0 20px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px #000
  }

  .icone-montemor.end {
    border-right-style: none
  }

  .destaque-monte-mor-roxo {
    color: #e31d70;
    font-weight: 700
  }

  .icone-topicos {
    margin-bottom: 0;
    background-color: transparent
  }

  .icone-topicos.comercial {
    -webkit-transform: translate(0, 19px);
    -ms-transform: translate(0, 19px);
    transform: translate(0, 19px)
  }

  .grid-6 {
    width: 100%;
    grid-row-gap: 0;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto
  }

  .div-block-24,
  .paragrafo-2.topicos {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .div-block-24 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    margin-top: 10px;
    padding: 20px;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    border-radius: 18px;
    background-color: #793f98
  }

  .image-5 {
    width: 100%;
    max-width: none;
    padding: 0
  }

  .paragrafo-2 {
    width: 100%;
    margin-bottom: 0;
    padding-top: 0;
    padding-right: 0;
    padding-bottom: 10px;
    font-family: Montserrat, sans-serif;
    color: #fff;
    font-size: 16px;
    line-height: 24px
  }

  .paragrafo-2.topicos {
    padding-bottom: 0;
    color: #793f98;
    text-align: center
  }

  .paragrafo-2.topicos.mobile {
    font-family: Poppins, sans-serif;
    color: #fff;
    font-weight: 400
  }

  .paragrafo-bold {
    color: #fff;
    font-weight: 700;
    text-align: center
  }

  .colunas-montemor {
    height: 100%
  }

  .coluna-1-monte-mor {
    width: 80%
  }

  .right-arrow-4 {
    position: absolute;
    top: -100px;
    right: -70px;
    bottom: 0
  }

  .bold {
    font-weight: 800
  }

  .h1-2 {
    font-family: Montserrat, sans-serif;
    color: #fff;
    font-size: 40px;
    font-weight: 400
  }

  .h1-2.verde-claro {
    color: #b6ce5e;
    line-height: 35px
  }

  .h1-2.verde-claro.center {
    padding-bottom: 20px;
    font-size: 28px;
    font-weight: 200
  }

  .icon-12 {
    color: #b6ce5e;
    font-size: 24px
  }

  .galeria-monte,
  .h1-2.verde-claro.center {
    font-family: Poppins, sans-serif;
    color: #fff;
    text-align: center
  }

  .galeria-monte {
    position: relative;
    left: 0;
    top: auto;
    right: 0;
    bottom: 0;
    display: block;
    margin-top: 20px;
    margin-bottom: 0;
    padding: 10px 0;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
    -webkit-box-flex: 0;
    -webkit-flex: 0 auto;
    -ms-flex: 0 auto;
    flex: 0 auto;
    border: 3px solid transparent;
    border-radius: 18px;
    background-color: transparent;
    font-size: 11px;
    text-decoration: none;
    text-transform: none
  }

  .galeria-monte.alameda-reserva {
    height: 71px;
    line-height: 13px
  }

  .image-66,
  .lightbox-link-10 {
    display: inline-block;
    width: 380px;
    border-radius: 20px
  }

  .image-66 {
    overflow: visible;
    height: 100%;
    max-width: none;
    -o-object-fit: cover;
    object-fit: cover
  }

  .image-66.imagem-residencial-progresso,
  .lightbox-link-10.lightbox-residencial-progresso {
    width: 500px
  }

  .lightbox-link-10 {
    overflow: hidden;
    height: 306px;
    margin-right: 0;
    margin-left: 0;
    padding-right: 0;
    padding-left: 0;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    text-decoration: none;
    -o-object-fit: fill;
    object-fit: fill
  }

  .slide-nav-6,
  .slider-7.mobile {
    display: none
  }

  .grid-7 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: visible;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-justify-content: space-around;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-auto-columns: 1fr;
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
    border-radius: 20px;
    -o-object-fit: fill;
    object-fit: fill
  }

  .galeria-bold {
    border: 1px #000;
    font-family: Poppins, sans-serif;
    font-size: 23px;
    font-weight: 500
  }

  .container-padrao-3,
  .slider-7 {
    display: block;
    -webkit-box-direction: normal;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-align-content: space-around;
    -ms-flex-line-pack: distribute;
    align-content: space-around
  }

  .container-padrao-3 {
    max-width: 80%;
    -webkit-box-orient: vertical;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-flex-wrap: wrap-reverse;
    -ms-flex-wrap: wrap-reverse;
    flex-wrap: wrap-reverse
  }

  .slider-7 {
    height: 100%;
    -webkit-box-orient: horizontal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-justify-content: space-around;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    -ms-grid-row-align: auto;
    align-self: auto;
    -webkit-box-flex: 0;
    -webkit-flex: 0 auto;
    -ms-flex: 0 auto;
    flex: 0 auto;
    background-color: transparent
  }

  .dobra-4 {
    padding-top: 80px;
    padding-bottom: 80px;
    border-style: none;
    border-width: 1px;
    border-color: #398269;
    background-color: #793f98;
    text-align: center
  }

  #w-node-_214e244b-38e3-a924-7e1c-5d7a58811c00-ee7534e1,
  .mask-2 {
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    -ms-grid-row-align: auto;
    align-self: auto
  }

  .mask-2 {
    height: auto;
    max-width: 100%;
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1
  }

  .slide-20 {
    position: static;
    height: auto
  }

  .left-arrow-4 {
    left: -70px;
    top: -100px;
    color: #b6ce5e;
    font-size: 24px
  }

  .grid-8 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-justify-content: space-around;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto
  }

  .slider-8 {
    background-color: transparent
  }

  .icon-13 {
    font-size: 24px
  }

  .icon-13,
  .icon-14 {
    color: #ff8b22
  }

  .div-box-preenchido-sao-roque {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
    z-index: 1;
    width: 370px;
    height: 200px;
    border-radius: 20px;
    background-image: linear-gradient(45deg, #f08715, #f69833)
  }

  .div-box-preenchido-sao-roque.regatas-comercial {
    width: 370px
  }

  .logo-sao-roque {
    width: auto;
    height: 130px;
    max-width: 100%;
    margin-right: 0;
    padding: 0
  }

  .bold-text-51 {
    color: #433868
  }

  .icone-montemor-copy-copy,
  .topicos-sao-roque-02 {
    margin-right: 10px;
    margin-left: 10px;
    padding: 0 20px;
    -webkit-box-orient: vertical;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px #000
  }

  .topicos-sao-roque-02 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 25%;
    height: auto;
    -webkit-box-direction: normal;
    -webkit-align-self: flex-start;
    -ms-flex-item-align: start;
    align-self: flex-start
  }

  .icone-montemor-copy-copy.end,
  .topicos-sao-roque-02.end {
    border-right-style: none
  }

  .icone-montemor-copy-copy {
    width: 250px;
    height: 185px
  }

  .div-infos-terreno-sao-roque,
  .icone-montemor-copy,
  .icone-montemor-copy-copy {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-direction: normal
  }

  .div-infos-terreno-sao-roque {
    margin-top: 20px;
    -webkit-box-orient: horizontal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start
  }

  .div-infos-terreno-sao-roque.padding-top {
    padding-top: 40px
  }

  .icone-montemor-copy {
    width: 250px;
    height: 185px;
    margin-right: 10px;
    margin-left: 10px;
    padding: 0 20px;
    -webkit-box-orient: vertical;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px #000
  }

  .condicoes-sao-roque.end,
  .icone-montemor-copy.end {
    border-right-style: none
  }

  .condicoes-sao-roque,
  .topicos-montemor-copy,
  .topicos-sao-roque {
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    align-self: center
  }

  .condicoes-sao-roque {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: visible;
    width: 250px;
    height: 98px;
    margin-right: 10px;
    margin-left: 10px;
    padding: 20px 30px;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: center;
    -ms-flex-pack: start;
    justify-content: center;
    -webkit-box-align: start;
    -webkit-align-items: center;
    -ms-flex-align: start;
    align-items: center;
    -webkit-box-ordinal-group: 1;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
    border: 2px #000;
    border-radius: 18px;
    background-color: #009169;
    -o-object-fit: fill;
    object-fit: fill
  }

  .topicos-montemor-copy,
  .topicos-sao-roque {
    -ms-grid-row-align: center;
    color: #fff;
    font-size: 16px;
    text-align: center
  }

  .topicos-montemor-copy {
    color: #565656
  }

  .infos-terreno-sao-roque {
    display: block;
    margin-right: auto;
    margin-left: auto;
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fafafa
  }

  .infos-terreno-sao-roque.monte-mor {
    background-color: #fff
  }

  .infos-terreno-sao-roque.hidden {
    display: none
  }

  .div-button-center-sao-roque {
    margin-top: 20px;
    text-align: center
  }

  .div-button-center-sao-roque.dunlop {
    margin-top: 60px
  }

  .div-button-center-sao-roque.dunlop._2 {
    margin-top: 100px
  }

  .div-button-center-sao-roque.dunlop.margin-top-100px {
    margin-top: 0;
    margin-bottom: 40px
  }

  .div-button-center-sao-roque.minha-casa {
    margin-top: 40px
  }

  .galeria-sao-roque {
    padding-top: 80px;
    padding-bottom: 80px;
    border-style: none;
    border-width: 1px;
    border-color: #398269;
    background-color: #ec8515;
    text-align: center
  }

  .andamento-obra-sao-roque {
    display: block;
    overflow: visible;
    width: auto;
    height: auto;
    margin-right: 10px;
    margin-left: 5px;
    padding: 20px 30px;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    -webkit-align-self: flex-start;
    -ms-flex-item-align: start;
    align-self: flex-start;
    -webkit-box-ordinal-group: 1;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
    border: 2px #000;
    border-radius: 18px;
    background-color: #009169;
    -o-object-fit: fill;
    object-fit: fill
  }

  .andamento-obra-sao-roque.end {
    border-right-style: none
  }

  .andamento-sao-roque {
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
    color: #fff;
    font-size: 12px;
    text-align: center
  }

  .destaque-monte-mor-roxo-escuro {
    color: #793f98;
    font-weight: 700
  }

  .image-67 {
    height: 104px;
    border-radius: 12px
  }

  .heading-37 {
    position: absolute;
    left: 0;
    top: auto;
    right: 0;
    bottom: 0;
    margin-top: 0;
    margin-right: 20px;
    margin-left: 20px;
    color: #fff;
    font-weight: 500;
    text-transform: uppercase
  }

  .destaque-laranja-2 {
    color: #ff8b22;
    font-weight: 700
  }

  .destaque-h2-laranja-2 {
    color: #e31d70;
    font-weight: 600
  }

  .paragraph-44 {
    margin: 20px;
    color: #565656;
    line-height: 1.8
  }

  .paragraph-44.regatas {
    margin-right: 10px;
    margin-left: 10px
  }

  .imagem-caracteristica-sao-roque {
    position: relative;
    height: 225px;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeriarua-interna.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeriarua-interna.jpg);
    background-position: 0 0, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat
  }

  .imagem-caracteristica-sao-roque._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeriaquadras.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeriaquadras.jpg)
  }

  .imagem-caracteristica-sao-roque._2.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-praça.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-praça.jpg)
  }

  .imagem-caracteristica-sao-roque._2.bem-viver {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground.jpg)
  }

  .imagem-caracteristica-sao-roque._2.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground_2.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground_2.jpg)
  }

  .imagem-caracteristica-sao-roque._2.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground_3.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground_3.jpg)
  }

  .imagem-caracteristica-sao-roque._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .7))), url(../images/area-comercial.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .7)), url(../images/area-comercial.jpg);
    background-position: 0 0, 50% 100%
  }

  .imagem-caracteristica-sao-roque._3.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial.jpg)
  }

  .imagem-caracteristica-sao-roque._3.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial_1.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial_1.jpg)
  }

  .imagem-caracteristica-sao-roque._3.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial_2.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial_2.jpg)
  }

  .imagem-caracteristica-sao-roque.giardino-bianco {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---guarita.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---guarita.jpg)
  }

  .imagem-caracteristica-sao-roque.giardino-bianco._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---rua-interna.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---rua-interna.jpg)
  }

  .imagem-caracteristica-sao-roque.giardino-bianco._2.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-de-lazer.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-de-lazer.jpg)
  }

  .imagem-caracteristica-sao-roque.giardino-bianco._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---piscinas.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---piscinas.jpg)
  }

  .imagem-caracteristica-sao-roque.giardino-bianco._3.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina_2.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina_2.jpg)
  }

  .imagem-caracteristica-sao-roque.giardino-bianco.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita_1.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita_1.jpg)
  }

  .imagem-caracteristica-sao-roque.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna.jpg)
  }

  .imagem-caracteristica-sao-roque.bem-viver {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_1.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_1.jpg)
  }

  .imagem-caracteristica-sao-roque.girassois {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita.jpg)
  }

  .imagem-caracteristica-sao-roque.girassois._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_2.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_2.jpg)
  }

  .imagem-caracteristica-sao-roque.girassois._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina.jpg)
  }

  .imagem-caracteristica-sao-roque.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_3.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_3.jpg)
  }

  .imagem-caracteristica-sao-roque.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_4.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_4.jpg)
  }

  .imagem-caracteristica-sao-roque.atlanta {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita_2.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita_2.jpg)
  }

  .imagem-caracteristica-sao-roque.atlanta._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-aérea.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-aérea.jpg)
  }

  .imagem-caracteristica-sao-roque.atlanta._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina_1.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina_1.jpg)
  }

  .imagem-caracteristica-sao-roque.regatas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg)
  }

  .imagem-caracteristica-sao-roque.regatas._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/areaverde.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/areaverde.jpg);
    background-position: 0 0, 50% 50%
  }

  .imagem-caracteristica-sao-roque.regatas._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/parents-their-daughter-are-holding-shopping-bags.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/parents-their-daughter-are-holding-shopping-bags.jpg);
    background-position: 0 0, 50%0;
    background-size: auto, cover
  }

  .imagem-caracteristica-sao-roque.regatas._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/comercial.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/comercial.jpg)
  }

  .imagem-caracteristica-sao-roque.sao-roque-img {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/INFRAESTRUTURA.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/INFRAESTRUTURA.jpg)
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._2 {
    background-position: 0 0, 50% 50%
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._3 {
    background-position: 0 0, 50%0;
    background-size: auto, cover
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._1 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_VISTA_RUA_CASAS.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_VISTA_RUA_CASAS.jpg)
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg)
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg)
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(https://urba.com.br/wp-content/uploads/2022/11/URBA_RUA_LOJAS.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(https://urba.com.br/wp-content/uploads/2022/11/URBA_RUA_LOJAS.jpg)
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._10 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(https://urba.com.br/wp-content/uploads/2022/11/DJI_0182.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(https://urba.com.br/wp-content/uploads/2022/11/DJI_0182.jpg)
  }

  .imagem-caracteristica-sao-roque.elvira {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg)
  }

  .imagem-caracteristica-sao-roque.elvira._2 {
    background-position: 0 0, 50% 50%
  }

  .imagem-caracteristica-sao-roque.elvira._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/AREA-COMERCIAL_1.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/AREA-COMERCIAL_1.jpg);
    background-position: 0 0, 50%0;
    background-size: auto, cover
  }

  .imagem-caracteristica-sao-roque.elvira._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/comercial.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/comercial.jpg)
  }

  .imagem-caracteristica-sao-roque.elvira._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/Área-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/Área-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg)
  }

  .imagem-caracteristica-sao-roque.residencial-progresso {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/INFRAESTRUTURA.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/INFRAESTRUTURA.jpg)
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._22 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(https://urba.com.br/wp-content/uploads/2022/11/shutterstock_752177230.jpeg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(https://urba.com.br/wp-content/uploads/2022/11/shutterstock_752177230.jpeg)
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._2 {
    background-position: 0 0, 50% 50%
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._3 {
    background-position: 0 0, 50%0;
    background-size: auto, cover
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._1 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(https://urba.com.br/wp-content/uploads/2022/11/URBA_VISTA_RUA_CASAS-copiar.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(https://urba.com.br/wp-content/uploads/2022/11/URBA_VISTA_RUA_CASAS-copiar.jpg)
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg)
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg)
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_RUA_LOJAS.jpg);
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_RUA_LOJAS.jpg)
  }

  .text-span-6 {
    color: #079d56;
    font-weight: 600
  }

  .logo-residencial-progresso {
    width: auto;
    height: 130px;
    max-width: 100%;
    margin-right: 0;
    padding: 0
  }

  .div-box-preenchido-residencial-progresso {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
    z-index: 1;
    width: 370px;
    height: 200px;
    border-radius: 20px;
    background-color: #433868
  }

  .div-box-preenchido-residencial-progresso.regatas-comercial {
    width: 370px
  }

  .destaque-roxo-residencial-progresso {
    color: #433868
  }

  .cond-residencial-progresso {
    display: none;
    width: 80%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    text-align: center
  }

  .cond-residencial-progresso.cond {
    width: 90%
  }

  .cond-residencial-progresso.cod {
    display: block;
    margin-top: 70px;
    padding-bottom: 10px
  }

  .galeria-residencial-progresso {
    padding-top: 80px;
    padding-bottom: 80px;
    border-style: none;
    border-width: 1px;
    border-color: #398269;
    background-color: #433868;
    text-align: center
  }

  .icone-amarelo {
    color: #ffb719;
    font-size: 24px
  }

  .imagem-ilustrativa {
    margin-top: 10px;
    color: #fff;
    font-size: 12px;
    font-style: italic;
    font-weight: 300;
    text-align: center
  }

  .imagem-ilustrativa.roxo {
    color: #433868
  }

  .destaque-amarelo {
    color: #e9bb00
  }

  .video-residencial-progresso {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #433868
  }

  .bold-text-52 {
    cursor: pointer
  }

  .botao-roxo-escuro {
    padding: 9px 35px;
    border: 1px solid #433868;
    border-radius: 5px;
    background-color: #433868;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase
  }

  .botao-roxo-escuro:hover {
    background-color: transparent;
    color: #433868
  }

  .destaque-residencial-progresso {
    color: #006b3f;
    font-weight: 700
  }

  .grid-diferenciais {
    margin-top: 30px;
    margin-bottom: 60px;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto
  }

  .div-diferencial {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: auto;
    padding: 10px 20px;
    border-radius: 15px;
    background-color: #433868
  }

  .texto-diferencial {
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
    color: #fff;
    font-size: 16px;
    text-align: left
  }

  .image-68 {
    width: 40px;
    margin-right: 10px;
    -o-object-fit: contain;
    object-fit: contain
  }

  .coluna-direita-localizacao {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    padding-right: 0;
    padding-left: 0;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-align-content: flex-end;
    -ms-flex-line-pack: end;
    align-content: flex-end;
    grid-auto-columns: 1fr;
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    -ms-grid-rows: auto auto;
    grid-template-rows: auto auto
  }

  .lightbox-localizacao {
    border-radius: 0
  }

  .image-localizacao {
    border-radius: 20px
  }

  .div-block-25 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
  }

  .colunas-montemor-copy {
    height: 100%
  }

  .bold-text-54 {
    color: #e9bb00
  }

  @media screen and (min-width:1920px) {
    .hero-internas.residencial-progresso {
      background-image: -webkit-gradient(linear, left top, left bottom, from(null), to(null)), url(https://urba.com.br/wp-content/uploads/2022/11/shutterstock_723020353.jpeg);
      background-image: linear-gradient(180deg, null, null), url(https://urba.com.br/wp-content/uploads/2022/11/shutterstock_723020353.jpeg);
      background-position: 0 0, 50% 50%
    }

    .div-img-casa.elvira {
      border-radius: 20px 0 0 20px
    }

    .lightbox-link-3 {
      border-top-left-radius: 0;
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px
    }

    .div-planta-02.elvira {
      border-radius: 0 20px 20px 0
    }

    .subtitle-lp.monte-mor,
    .subtitle-lp.residencial-progresso {
      text-align: left
    }

    .div-block-22,
    .image-61 {
      margin-right: auto;
      margin-left: auto;
      text-align: center
    }

    .image-61 {
      position: static;
      -o-object-fit: fill;
      object-fit: fill
    }

    .coluna-1-monte-mor {
      width: auto
    }

    .image-66 {
      width: 380px;
      height: 200px;
      border-top-right-radius: 20px
    }

    .image-66.imagem-residencial-progresso {
      height: 300px
    }

    .slider-7.mobile {
      display: none
    }

    .andamento-obra-sao-roque {
      display: block
    }

    .div-diferencial {
      width: auto
    }

    .image-68 {
      display: block;
      width: 40px;
      max-width: none;
      -o-object-fit: contain;
      object-fit: contain
    }
  }

  @media screen and (max-width:991px) {
    .container-padrao.reduzido.montemor {
      position: static;
      display: block;
      height: 1620px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .container-padrao.monte-mor-mobile {
      position: relative
    }

    .div-text-hero.smart-urba {
      width: 60%
    }

    .div-text-hero.smart-urba.dunlop {
      top: 0;
      width: 90%;
      float: none;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .div-text-hero.smart-urba.minha-casa {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 90%;
      margin-right: auto;
      margin-left: auto;
      float: none;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .heading-2.galeria.monte-mor {
      width: 110%
    }

    .heading-2.localiz.monte-mor.mobile,
    .heading-2.localiz.residencial-progresso.mobile,
    .heading-2.localiz.sao-roque.mobile {
      margin-top: 60px;
      text-align: center
    }

    .heading-2.center {
      margin-top: 0;
      padding-top: 0
    }

    .footer-social {
      width: 75%
    }

    .div-forms.interna.smarturba {
      width: 100%;
      padding-right: 10px;
      padding-left: 10px
    }

    .hero-internas.dunlop {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .5))), url(../images/hero_4.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../images/hero_4.jpg);
      background-position: 0 0, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .hero-internas.minha-casa {
      padding-bottom: 180px
    }

    .hero-internas.vila-profeta {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .5))), -webkit-gradient(linear, left top, left bottom, from(rgba(245, 245, 245, .03)), to(rgba(245, 245, 245, .03))), url(../images/bg-hero-vila-profeta.png);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), linear-gradient(180deg, rgba(245, 245, 245, .03), rgba(245, 245, 245, .03)), url(../images/bg-hero-vila-profeta.png);
      background-position: 0 0, 0 0, 50% 50%;
      background-size: auto, auto, cover;
      background-repeat: repeat, repeat, no-repeat;
      background-attachment: scroll, scroll, scroll
    }

    .hero-internas.montemor,
    .hero-internas.residencial-progresso,
    .hero-internas.sao-roque {
      height: 1223px;
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/Depositphotos_249018672_XL.jpg);
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), linear-gradient(180deg, transparent, transparent), url(../images/Depositphotos_249018672_XL.jpg);
      background-position: 0 0, 0 0, 28% 50%;
      background-size: auto, auto, cover
    }

    .hero-internas.residencial-progresso {
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(https://urba.com.br/wp-content/uploads/2022/11/Depositphotos_249018672_XL.jpg);
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), linear-gradient(180deg, transparent, transparent), url(https://urba.com.br/wp-content/uploads/2022/11/Depositphotos_249018672_XL.jpg)
    }

    .infos-terreno.monte-mor {
      padding-bottom: 0
    }

    .paragraph-16.localiz.mobile {
      text-align: center
    }

    .div-title-info-galeria.dunlop {
      width: 100%
    }

    .localizacao {
      height: auto
    }

    .column-27 {
      padding-left: 0;
      text-align: center
    }

    .menu-button-2 {
      color: #31d2cc
    }

    .menu-button-2.w--open {
      background-color: transparent;
      color: #31d2cc
    }

    .text-block-29 {
      text-align: center
    }

    .autor.relacionados {
      display: none
    }

    .dvi-cta {
      width: 230px
    }

    .dvi-cta,
    .dvi-cta.home {
      height: 360px
    }

    .data-publicacao.relacionados {
      display: none
    }

    .div-ad.ipad {
      height: 145px
    }

    .container-padrao-2 {
      padding-right: 20px;
      padding-left: 20px
    }

    .link-block {
      margin-right: 5px
    }

    .heading-18._02.relacionado {
      font-size: 14px
    }

    .div-img-postrelacionado {
      padding-right: 5px;
      padding-left: 5px
    }

    .content-cta,
    .div-img-postinterna,
    .post-main-info {
      width: 100%
    }

    .titulo-material-destaque {
      width: 50%;
      margin-top: 40px
    }

    .paragraph-3 {
      width: 50%;
      margin-bottom: 20px
    }

    .botao-materiais {
      padding-right: 25px
    }

    .pai-dropdown-categoria-materiais {
      display: block;
      width: 90%;
      margin-right: auto;
      margin-left: auto;
      float: left
    }

    .campo-pesquisa {
      width: 90%
    }

    .coluna-busca {
      padding-left: 10px
    }

    .colunas-materiais {
      height: auto
    }

    .titulo-categoria-materiais {
      margin-top: 20px;
      padding-left: 10px
    }

    .botao-material-secundario {
      position: relative;
      left: 0;
      right: 0;
      bottom: 0;
      width: 80%;
      margin-bottom: 0;
      margin-left: 0
    }

    .titulo-material-secundario {
      margin-top: 10px;
      font-size: 16px;
      line-height: 18px
    }

    .div-info-hero.monte-mor {
      position: relative;
      top: 34%
    }

    .col-text {
      position: relative
    }

    .col-text.monte-mor {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-logos-hero.elvira {
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: auto;
      width: 105px;
      margin-right: auto;
      margin-left: auto;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .box.itapeva.montemor {
      width: 400px;
      margin-top: 143px;
      margin-bottom: 0;
      padding-right: 0
    }

    .div-forms-hero {
      width: 90%;
      margin-right: auto;
      margin-left: auto
    }

    .condicoes.minha-casa {
      padding-top: 60px;
      padding-bottom: 60px;
      background-image: none;
      background-position: 0 0;
      background-size: auto;
      background-repeat: repeat
    }

    .button-11.smarturba._2 {
      font-size: 15px
    }

    .tag-hero-2.section2.dunlop {
      width: 60%
    }

    .label-form-lp-2.vila-profeta {
      color: #fff
    }

    .tag-breve-lan-amento.itapeva {
      top: -5%
    }

    .text-block-47.montemor,
    .text-block-47.residencial-progresso {
      top: 102px;
      right: -92px;
      width: 310px;
      height: 36px;
      font-size: 14px
    }

    .image-18 {
      top: 5%;
      right: 5%;
      width: 250px
    }

    .columns-21 {
      width: 95%;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto
    }

    .column-60 {
      padding-left: 10px
    }

    .grid-3 {
      display: -ms-grid;
      display: grid;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      grid-auto-flow: row;
      grid-auto-columns: 1fr;
      grid-column-gap: 16px;
      grid-row-gap: 16px;
      -ms-grid-columns: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr;
      -ms-grid-rows: 150px 150px;
      grid-template-rows: 150px 150px
    }

    .column-61 {
      padding-left: 0
    }

    .column-61.dunlop {
      padding-top: 0;
      padding-right: 0
    }

    .box-entenda {
      padding-right: 5px;
      padding-left: 5px
    }

    .text-block-48 {
      font-size: 13px
    }

    .section-form {
      background-position: 0 0, 0 0, 10% 100%
    }

    .heading-27.center._32px,
    .heading-27.galeria._32px {
      font-size: 28px
    }

    .heading-27.com._32px.branco {
      width: 100%;
      font-size: 28px
    }

    .heading-27.center {
      margin-top: 0;
      padding-top: 0
    }

    .div-features._2.dunlop-2 {
      margin-top: 60px
    }

    .div-features._2.dunlop-2,
    .div-features.dunlop {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .imagem-smarturba._6.dunlop-img {
      margin-top: 40px
    }

    .div-info-smarturba._2.dunlop {
      margin-top: 40px;
      margin-right: 0
    }

    .div-info-smarturba._2.dunlop.margin-top-off {
      margin-top: 60px
    }

    .div-info-smarturba.dunlop {
      width: 95%;
      margin-top: 80px;
      margin-left: 0
    }

    .topico {
      margin-right: 5px
    }

    .topico,
    .topico._2 {
      width: 25%
    }

    .topico._2,
    .topico._4,
    .topico._6 {
      margin-left: 5px
    }

    .text-block-49 {
      font-size: 12px
    }

    .image-20 {
      left: -10px;
      top: -30px;
      width: 125px
    }

    .image-21 {
      right: 10px;
      bottom: -20px;
      width: 125px
    }

    .image-21._2 {
      right: -15px;
      bottom: -20px
    }

    .cta-provisorio {
      background-size: 300px, 300px, auto
    }

    .heading-29 {
      width: 50%;
      margin-right: auto;
      margin-left: auto
    }

    .column-62 {
      padding-right: 5px
    }

    .column-63 {
      padding-left: 5px
    }

    .column-64 {
      padding-right: 5px
    }

    .column-65 {
      padding-left: 5px
    }

    .planejamento-inteligente {
      padding-top: 60px;
      padding-bottom: 40px
    }

    .heading-30.h1-dunlop {
      font-size: 36px
    }

    .paragraph-36.dunlop-sub {
      margin-right: 0;
      text-align: center
    }

    .button-12.smarturba._2 {
      font-size: 15px
    }

    .div-formulario-dunlop {
      top: 0;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 80%;
      float: none;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .div-formulario-dunlop.minha-casa {
      width: 90%;
      margin-right: auto;
      margin-left: auto;
      padding-right: 0
    }

    .box-entenda-2 {
      padding-right: 5px;
      padding-left: 5px
    }

    .text-block-52 {
      font-size: 13px
    }

    .localizacao-dunlop {
      padding-top: 60px;
      padding-bottom: 40px
    }

    .div-paragraph-center {
      width: 90%
    }

    .div-paragraph-center.destaque-box {
      width: 100%
    }

    .conceito {
      padding-top: 60px;
      padding-bottom: 40px
    }

    .features,
    .features._2 {
      padding-top: 20px;
      padding-bottom: 60px
    }

    .features._2 {
      padding-bottom: 80px
    }

    .text-block-55 {
      font-size: 12px
    }

    .topico-2 {
      width: 25%;
      margin-right: 5px
    }

    .div-block-6 {
      padding-right: 40px
    }

    .div-logo-dunlop {
      width: 250px;
      padding: 8px 10px
    }

    .div-contorno._2 {
      left: 40px;
      top: 0;
      right: auto;
      bottom: auto
    }

    .div-contorno._2._3 {
      top: 40px
    }

    .heading-34 {
      margin-right: 0;
      text-align: center
    }

    .sonho {
      padding-top: 260px
    }

    .image-24 {
      bottom: -187px;
      width: 90%
    }

    .div-selo-minhacasa {
      position: relative;
      left: 0;
      bottom: 0;
      margin-top: 10px;
      margin-right: auto;
      margin-left: auto
    }

    .div-boxes-sonho,
    .paragraph-39.branco.minha-casa {
      width: 100%
    }

    .div-box-sonho {
      width: 180px;
      margin-right: 10px;
      margin-left: 10px
    }

    .box-condicoes-2 {
      width: 90%
    }

    .box-condicao {
      min-height: 180px
    }

    .txt-legal {
      width: 100%;
      text-align: left
    }

    .detalhes {
      padding-top: 60px
    }

    .div-txt-detalhes {
      padding-right: 40px
    }

    .div-detalhe {
      width: 100%
    }

    .div-passos {
      display: -ms-grid;
      display: grid;
      grid-auto-columns: 1fr;
      grid-column-gap: 0;
      grid-row-gap: 15px;
      -ms-grid-columns: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto
    }

    .div-card-passos {
      margin-right: 0;
      margin-left: 0
    }

    .depoimentos {
      padding-top: 60px;
      background-image: none;
      background-position: 0 0;
      background-size: auto;
      background-repeat: repeat
    }

    .text-block-59 {
      margin-right: 40px;
      text-align: left
    }

    .div-logo-vila-profeta {
      width: 250px;
      padding: 8px 10px
    }

    .div-submenu {
      height: auto
    }

    .div-block-7 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start;
      grid-auto-columns: 1fr;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto
    }

    .navbar-desktop {
      display: none
    }

    .field-label-3 {
      width: auto
    }

    .form-8 {
      width: 70%
    }

    .columns-22 {
      display: block
    }

    .search {
      position: static;
      margin-left: 0
    }

    .lupa {
      position: relative
    }

    .div-block-13,
    .div-texto-nossa-historia {
      width: auto
    }

    .div-block-15,
    .navbar-mobile {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex
    }

    .icon-11 {
      color: #ff8b22;
      font-size: 28px
    }

    .menu-button-3 {
      background-color: #006b3f
    }

    .navbar-4 {
      width: 100%
    }

    .container-2 {
      background-color: #006b3f
    }

    .grid-4 {
      -ms-grid-columns: 1fr .25fr .25fr;
      grid-template-columns: 1fr .25fr .25fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto
    }

    .link-mobile {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-right: 0;
      padding-left: 20px
    }

    .icones-obra {
      max-width: none;
      -o-object-fit: contain;
      object-fit: contain
    }

    .subtitle-lp.monte-mor,
    .subtitle-lp.residencial-progresso {
      width: 380px
    }

    .div-block-17.monte-mor.mobile {
      text-align: center
    }

    .button-34.botao-monte-mor,
    .button-34.botao-residencial-elvira,
    .button-34.botao-sao-roque,
    .button-34.botao-sao-roque-2 {
      margin-bottom: 60px
    }

    .grid-5 {
      grid-row-gap: 20px;
      -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto
    }

    .mapa-elvira {
      height: 500px
    }

    .elvira-roxo.monte-mor {
      padding-left: 0
    }

    .logo-monte-mor {
      height: 140px;
      max-width: 150%
    }

    .topicos-montemor {
      max-width: 100%;
      font-size: 14px
    }

    .icone-montemor {
      width: 250px;
      padding-right: 0;
      padding-left: 0
    }

    .grid-6 {
      width: 100%;
      justify-items: center;
      -ms-grid-columns: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr
    }

    .div-block-24 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 180px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      grid-auto-columns: 1fr;
      grid-column-gap: 16px;
      grid-row-gap: 16px;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto
    }

    .image-5 {
      padding-right: 0
    }

    .paragrafo-2 {
      text-align: center
    }

    .image-62,
    .image-63,
    .image-64,
    .image-65,
    .slider-7.desktop {
      display: none
    }

    .image-66,
    .lightbox-link-10 {
      width: 610px
    }

    .slider-7.mobile {
      display: block
    }

    .logo-sao-roque {
      height: 140px;
      max-width: 120%
    }

    .condicoes-sao-roque,
    .icone-montemor-copy,
    .icone-montemor-copy-copy,
    .topicos-sao-roque-02 {
      width: 250px;
      padding-right: 0;
      padding-left: 0
    }

    .topicos-montemor-copy,
    .topicos-sao-roque {
      max-width: 100%;
      font-size: 14px
    }

    .infos-terreno-sao-roque.monte-mor {
      padding-bottom: 0
    }

    .andamento-obra-sao-roque {
      width: 250px;
      padding-right: 0;
      padding-left: 0
    }

    .andamento-sao-roque {
      max-width: 100%;
      font-size: 14px
    }

    .logo-residencial-progresso {
      height: 140px;
      max-width: 120%
    }

    .texto-diferencial {
      max-width: 100%;
      font-size: 14px
    }
  }

  @media screen and (max-width:767px) {
    .container-padrao.reduzido.montemor {
      padding-top: 40px
    }

    .heading-2.galeria.monte-mor {
      width: 100%;
      margin-bottom: 0;
      text-align: center
    }

    .heading-2.localiz.monte-mor.mobile,
    .heading-2.localiz.residencial-progresso.mobile,
    .heading-2.localiz.sao-roque.mobile {
      margin-top: 0
    }

    .heading-2.center {
      margin-top: 0;
      padding-top: 0
    }

    .heading-2.center.montemor {
      padding-top: 60px
    }

    .heading-2.center.monte-mor-mobile,
    .heading-2.center.sao-roque {
      padding-top: 40px
    }

    .column-7 {
      margin-bottom: 10px
    }

    .rodape {
      height: auto;
      padding-top: 20px;
      padding-bottom: 20px
    }

    .column-21 {
      padding: 10px 0
    }

    .column-21._2 {
      padding-left: 40px
    }

    .footer-social {
      width: 95%;
      margin-left: 40px;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start
    }

    .hero-internas.vila-profeta {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .6)), to(rgba(0, 0, 0, .6))), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/bg-hero-vila-profeta.png);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), linear-gradient(180deg, transparent, transparent), url(../images/bg-hero-vila-profeta.png);
      background-position: 0 0, 0 0, 0 50%
    }

    .hero-internas.montemor,
    .hero-internas.residencial-progresso,
    .hero-internas.sao-roque {
      height: 1210px;
      padding-top: 60px;
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/Depositphotos_249018672_XL.jpg);
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), linear-gradient(180deg, transparent, transparent), url(../images/Depositphotos_249018672_XL.jpg);
      background-position: 0 0, 0 0, 33% 50%
    }

    .hero-internas.residencial-progresso {
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(https://urba.com.br/wp-content/uploads/2022/11/Depositphotos_249018672_XL.jpg);
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), linear-gradient(180deg, transparent, transparent), url(https://urba.com.br/wp-content/uploads/2022/11/Depositphotos_249018672_XL.jpg)
    }

    .infos-terreno.monte-mor {
      padding-top: 0
    }

    .h1 {
      font-size: 48px;
      line-height: 54px
    }

    .text-block-9 {
      width: 90%;
      margin-left: 20px;
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1
    }

    .galeria-de-fotos.monte-mor {
      height: auto
    }

    .column-26,
    .img-cover-galeria {
      height: 350px
    }

    .column-26.regatas {
      height: 400px
    }

    .column-27,
    .localizacao {
      height: auto
    }

    .column-27 {
      padding-top: 60px;
      padding-bottom: 60px
    }

    .div-img-casa.elvira {
      border-radius: 20px
    }

    .column-30.monte-mor,
    .column-31.monte-mor {
      display: none
    }

    .div-img-sobre {
      margin-right: auto;
      margin-left: auto
    }

    .destaque-h2-laranja.roxo {
      color: #82ea5b
    }

    .column-39 {
      padding-left: 0
    }

    .imagem-material-destque {
      width: 200px;
      height: 200px
    }

    .titulo-material-destaque {
      font-size: 20px;
      line-height: 25px
    }

    .paragraph-3 {
      width: 100%;
      padding-right: 20px;
      padding-left: 20px
    }

    .botao-materiais {
      display: block;
      margin-right: 20px;
      margin-left: 20px
    }

    .text-block-33,
    .titulo-categoria-materiais {
      text-align: center
    }

    .coluna-individual-material {
      margin-bottom: 15px
    }

    .botao-material-secundario {
      width: 97%
    }

    .image-9.dunlop {
      right: -20px;
      bottom: -20px;
      -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg)
    }

    .col-text {
      padding-top: 80px;
      padding-right: 0;
      text-align: left
    }

    .col-text.monte-mor {
      height: 470px
    }

    .box.itapeva {
      margin-top: 100px
    }

    .box.itapeva.montemor {
      margin-top: 60px
    }

    .div-forms-hero,
    .div-paragraph-center,
    .heading-27.tour-dunlop._2._32px,
    .tag-hero-2.section2.dunlop {
      width: 100%
    }

    .heading-27.com._32px.branco {
      text-align: center
    }

    .heading-27.center {
      margin-top: 0;
      padding-top: 0
    }

    .div-video-2 {
      width: 95%
    }

    .div-grid-features._2 {
      margin-bottom: 0;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .div-feature._2 {
      width: 100%;
      margin: 10px 0
    }

    .comercio {
      height: auto;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .5))), url(../images/como-funciona-3.jpeg), -webkit-gradient(linear, left top, left bottom, color-stop(45%, #079d56), to(#00d38d));
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../images/como-funciona-3.jpeg), linear-gradient(180deg, #079d56 45%, #00d38d);
      background-position: 0 0, 50% 50%, 0 0;
      background-size: auto, cover, auto
    }

    .img-comercio {
      display: none
    }

    .div-info-comercio {
      width: 100%
    }

    .div-block-6 {
      width: 90%;
      margin-right: auto;
      margin-left: auto;
      padding-right: 0;
      text-align: center
    }

    .galeria-de-fotos-2 {
      height: auto
    }

    .column-68 {
      height: 300px;
      padding-left: 40px
    }

    .sonho {
      padding-top: 200px
    }

    .image-24 {
      bottom: -139px
    }

    .div-boxes-sonho {
      display: -ms-grid;
      display: grid;
      width: 75%;
      justify-items: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      grid-auto-columns: 1fr;
      grid-column-gap: 0;
      grid-row-gap: 20px;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto
    }

    .div-box-sonho {
      margin-right: 0;
      margin-left: 0
    }

    .box-condicoes-2 {
      width: 100%
    }

    .box-condicao {
      padding-right: 5px;
      padding-left: 5px
    }

    .txt-legal {
      text-align: center
    }

    .detalhes {
      height: auto;
      padding-bottom: 0
    }

    .div-txt-detalhes {
      width: 90%;
      margin-right: auto;
      margin-bottom: 40px;
      margin-left: auto;
      padding-right: 0
    }

    .slider-detalhes {
      position: relative;
      width: 100%;
      height: 500px
    }

    .arrow,
    .arrow._2 {
      left: auto;
      top: auto;
      bottom: 20px
    }

    .arrow {
      right: 90px;
      background-color: #fff;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .16);
      color: #793f98
    }

    .arrow._2 {
      right: 30px
    }

    .img-casas {
      height: 500px
    }

    .div-passos {
      width: 92%;
      justify-items: center;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto auto;
      grid-template-rows: auto auto auto
    }

    .div-depoimentos {
      padding-bottom: 40px
    }

    .slider-depoimentos {
      width: auto;
      height: auto
    }

    .text-block-59 {
      width: 60%
    }

    .slider-videos {
      width: auto;
      height: auto
    }

    .slider-6 {
      height: 320px
    }

    .div-slide-videos {
      width: 100%
    }

    .roxo.bold {
      color: #82ea5b
    }

    .form-8 {
      width: 80%
    }

    .columns-22,
    .columns-23 {
      display: block
    }

    .div-img-sobre-2 {
      margin-top: 0
    }

    .paragrafo-comumm.texto-margem-top {
      padding-top: 25px
    }

    .columns-24 {
      display: block
    }

    .link-mobile {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      padding-left: 20px;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start
    }

    .button-34.botao-monte-mor,
    .button-34.botao-monte-mor.mobile,
    .button-34.botao-residencial-elvira,
    .button-34.botao-residencial-elvira.mobile,
    .button-34.botao-sao-roque,
    .button-34.botao-sao-roque-2,
    .button-34.botao-sao-roque-2.mobile,
    .button-34.botao-sao-roque.mobile {
      margin-bottom: 0
    }

    .image-60.dunlop {
      right: -20px;
      bottom: -20px;
      -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg)
    }

    .column-69 {
      padding-right: 0
    }

    .column-70 {
      padding-left: 0
    }

    .grid-5 {
      -ms-grid-columns: 1fr 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr 1fr
    }

    .elvira-colunas {
      width: 100%
    }

    .mapa-elvira {
      height: 500px
    }

    .elvira-roxo.monte-mor {
      height: 210px
    }

    .elvira-seta-laranja.dunlop {
      right: -20px;
      bottom: -20px;
      -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg)
    }

    .elvira-seta-laranja.mobile {
      display: none
    }

    .destaque-h2-copy.roxo,
    .destaque-h2-elvira.roxo {
      color: #82ea5b
    }

    .logo-monte-mor {
      height: 140px
    }

    .grid-6 {
      width: 100%;
      -ms-grid-columns: 1fr;
      grid-template-columns: 1fr
    }

    .div-block-24 {
      width: 440px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row
    }

    .image-5 {
      padding-right: 20px
    }

    .columns-25,
    .paragrafo-2 {
      text-align: center
    }

    .paragrafo-2.topicos {
      text-align: left
    }

    .paragrafo-2.topicos.mobile {
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .youtube {
      width: 74%
    }

    .image-66,
    .lightbox-link-10 {
      width: 440px
    }

    .container-padrao-3 {
      max-width: 80%
    }

    .logo-residencial-progresso,
    .logo-sao-roque {
      height: 140px
    }

    .infos-terreno-sao-roque.monte-mor {
      padding-top: 0
    }
  }

  @media screen and (max-width:479px) {
    .heroslider {
      height: 640px
    }

    .container-padrao.reduzido.montemor {
      height: 100%;
      padding-top: 100px
    }

    .container-padrao.monte-mor-form {
      width: 100%;
      max-width: 1280px;
      padding-right: 10px;
      padding-left: 10px
    }

    .container-padrao.sao-roque {
      display: block
    }

    .brand {
      margin-top: 25px
    }

    .nav-menu {
      margin-top: 0;
      background-color: rgba(255, 255, 255, .98)
    }

    .dropdown-toggle {
      display: none
    }

    .div-text-hero {
      width: 100%
    }

    .div-text-hero.interna {
      position: static;
      width: 100%;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .div-text-hero.venda {
      -webkit-transform: translate(0, -120%);
      -ms-transform: translate(0, -120%);
      transform: translate(0, -120%)
    }

    .div-text-hero.home,
    .div-text-hero.smart-urba.dunlop {
      width: 100%
    }

    .div-text-hero.smart-urba {
      position: static;
      width: 100%;
      margin-right: auto;
      margin-left: auto;
      padding-top: 140px;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .div-text-hero.smart-urba.minha-casa {
      width: 100%;
      padding-top: 60px
    }

    .heading {
      font-size: 28px
    }

    .heading.sobre.fale-com-ri {
      text-align: center
    }

    .heading.area-cliente {
      width: 100%;
      padding-bottom: 140px;
      font-size: 28px;
      text-align: left
    }

    .heading.internas {
      margin-right: -10px;
      margin-left: -10px;
      padding-top: 100px;
      font-size: 25px
    }

    .heading.internas.tulipas {
      padding-top: 60px
    }

    .heading.internas.girassois {
      padding-top: 70px
    }

    .heading.internas.bem-viver {
      padding-top: 40px;
      font-size: 25px;
      line-height: 1.4
    }

    .heading.internas.bem-campos {
      padding-top: 60px
    }

    .heading.home {
      font-size: 26px
    }

    .heading-2,
    .paragraph {
      margin-right: 0;
      margin-left: 0;
      text-align: left
    }

    .heading-2 {
      width: 95%;
      font-size: 24px
    }

    .heading-2.branco {
      text-align: center
    }

    .heading-2.galeria {
      margin-bottom: 0;
      text-align: center
    }

    .heading-2.forms {
      text-align: center
    }

    .heading-2._2 {
      width: 95%
    }

    .heading-2.hblog {
      width: 90%;
      font-size: 22px
    }

    .heading-2.passo {
      text-align: center
    }

    .heading-2.center {
      width: 100%;
      text-align: center
    }

    .heading-2.side,
    .text-block-4._2.interna.elvira.mobile,
    .text-block-4._2.interna.progresso.mobile {
      text-align: center
    }

    .heading-2.smarturba-mobile {
      width: 100%;
      text-align: center
    }

    .paragraph {
      width: 90%
    }

    .paragraph.home {
      width: 95%
    }

    .div-empreendimentos {
      margin-top: 0;
      margin-bottom: 0;
      padding-left: 0;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-empreendimento,
    .div-empreendimento.portal-das-aguas {
      width: 90%;
      margin: 10px 0
    }

    .div-info {
      height: 90px
    }

    .heading-3 {
      font-size: 22px
    }

    .section-vantagens {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px
    }

    .columns {
      position: static;
      top: 0;
      width: 90%;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .columns._2,
    .columns.itapeva {
      width: 95%
    }

    .text-block-4 {
      font-size: 24px;
      text-align: left
    }

    .destaque {
      font-size: 28px
    }

    .column {
      padding-right: 0;
      padding-left: 0;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      border-bottom: 2px solid #ff8b22;
      border-right-style: none
    }

    .column.end {
      border-bottom-style: none
    }

    .column._2 {
      padding-right: 30px;
      padding-left: 10px;
      border-bottom-color: #006b3f
    }

    .bairros-planejados {
      padding-top: 60px;
      padding-bottom: 60px;
      background-image: url(../images/arvore.jpg);
      background-position: 100% 100%;
      background-size: 200px;
      background-repeat: no-repeat;
      background-attachment: fixed
    }

    .div-pilares {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-pilar {
      width: 280px;
      margin: 10px 0
    }

    .text-block-6 {
      width: 95%;
      text-align: left
    }

    .cta {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/cta_6.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/cta_6.jpg);
      background-position: 0 0, 50% 90%;
      background-size: auto, cover
    }

    .div-info-cta {
      position: static;
      width: 100%;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .heading-4 {
      width: 100%;
      font-size: 26px;
      text-align: center
    }

    .button-3 {
      padding-right: 20px;
      padding-left: 20px;
      border-radius: 100px
    }

    .blog {
      padding-top: 60px;
      padding-bottom: 20px
    }

    .ultimos-posts {
      margin-top: 40px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .div-artigo {
      width: 95%;
      height: 450px;
      margin: 10px auto
    }

    .recurso {
      width: 100%;
      margin-top: 20px
    }

    .div-seta {
      margin-right: 0
    }

    .paragraph-14 {
      font-size: 13px
    }

    .duvida {
      font-size: 14px
    }

    .column-20,
    .column-7 {
      padding-right: 0;
      padding-left: 0
    }

    .column-7 {
      margin-bottom: 20px
    }

    .rodape {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px
    }

    .column-21,
    .column-21._2 {
      padding-top: 0;
      padding-bottom: 0;
      padding-left: 0
    }

    .column-21 {
      margin-top: 20px;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .column-21._2 {
      margin-top: 0
    }

    .footer-social {
      width: 100%;
      margin-top: 0;
      margin-left: 0;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start
    }

    .link-social {
      margin-right: 5px;
      margin-left: 5px
    }

    .columns-3 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 40px
    }

    .link {
      margin-left: 0
    }

    .contato-imediato {
      display: none;
      width: 100px
    }

    .div-forms.interna {
      padding-right: 20px;
      padding-bottom: 20px;
      padding-left: 20px
    }

    .div-forms.interna.regatas {
      width: 100%
    }

    .div-forms.interna.smarturba {
      padding-top: 10px;
      padding-bottom: 10px
    }

    .heading-6 {
      margin-top: 45px;
      font-size: 20px;
      line-height: 1.3
    }

    .paragraph-15._2 {
      font-size: 14px
    }

    .form {
      width: 100%;
      margin-top: 10px
    }

    .text-field {
      margin-bottom: 5px
    }

    .tipo-contato {
      margin-right: 5px
    }

    .tipo-contato._2 {
      margin-right: 0;
      margin-left: 5px
    }

    .resposta1 {
      font-size: 14px
    }

    .column-23 {
      margin-bottom: 5px;
      padding-right: 0
    }

    .column-23._2 {
      margin-bottom: 0
    }

    .column-24 {
      padding-left: 0
    }

    .columns-4 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-bottom: 5px
    }

    .submit-button {
      width: 100%;
      margin-top: 10px
    }

    .div-botao-contato {
      width: 75px;
      height: 75px;
      margin-right: 10px;
      margin-bottom: 60px;
      background-size: 75px 75px
    }

    .hero-internas.giardino {
      height: 670px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v3_1.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v3_1.jpg);
      background-position: 0 0, 40%0
    }

    .hero-internas.giardino.girass-is {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v2_1.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v2_1.jpg);
      background-position: 0 0, 30% 50%
    }

    .hero-internas.giardino.tulipas {
      height: 720px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero-familia-01.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero-familia-01.jpg);
      background-position: 0 0, 50% 50%
    }

    .hero-internas.giardino.atlanta {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero-familia-02.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero-familia-02.jpg);
      background-position: 0 0, 40% 50%
    }

    .hero-internas.portal-das-aguas {
      height: 600px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero.jpg);
      background-position: 0 0, 50%0;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .hero-internas.sobre {
      height: 540px;
      background-position: 55% 100%;
      background-size: auto 500px
    }

    .hero-internas.venda {
      height: 680px;
      background-image: url(../images/hero-venda.jpg);
      background-position: 100% 100%;
      background-size: 600px;
      background-repeat: no-repeat
    }

    .hero-internas.nossas-lojas {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v3.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v3.jpg);
      background-position: 0 0, 55% 100%
    }

    .hero-internas.area-do-cliente {
      height: 720px;
      background-image: url(../images/hero_1.jpg);
      background-position: 100% 100%;
      background-size: auto 380px
    }

    .hero-internas.reserva-macauba {
      height: 640px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero-familia-05.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero-familia-05.jpg);
      background-position: 0 0, 65%0
    }

    .hero-internas.reserva-macauba.jardim-bem-viver {
      height: 720px
    }

    .hero-internas.investidores {
      height: 400px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/urba-nova-hero-03.jpg);
      background-image: linear-gradient(180deg, transparent, transparent), url(../images/urba-nova-hero-03.jpg);
      background-position: 0 0, 30% 50%;
      background-size: auto, cover
    }

    .hero-internas.regatas {
      height: auto;
      padding-bottom: 60px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/hero_2.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/hero_2.jpg);
      background-position: 0 0, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .hero-internas.minha-casa {
      padding-top: 0;
      padding-bottom: 130px
    }

    .hero-internas.vila-profeta {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(240, 240, 240, .03)), to(rgba(240, 240, 240, .03))), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .64)), to(rgba(0, 0, 0, .64))), url(../images/bg-hero-vila-profeta.png), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent));
      background-image: linear-gradient(180deg, rgba(240, 240, 240, .03), rgba(240, 240, 240, .03)), linear-gradient(180deg, rgba(0, 0, 0, .64), rgba(0, 0, 0, .64)), url(../images/bg-hero-vila-profeta.png), linear-gradient(180deg, transparent, transparent);
      background-position: 0 0, 0 0, 0 50%, 0 0;
      background-size: auto, auto, cover, auto;
      background-repeat: repeat, repeat, no-repeat, repeat;
      background-attachment: scroll, scroll, scroll, scroll
    }

    .hero-internas.elvira,
    .hero-internas.itapeva {
      height: auto;
      padding-bottom: 60px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/hero-itapeva.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/hero-itapeva.jpg);
      background-position: 0 0, 0 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .hero-internas.montemor,
    .hero-internas.sao-roque {
      height: 100%;
      padding-bottom: 60px;
      background-image: url(../images/Depositphotos_249018672_XL.jpg);
      background-position: 80% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .hero-internas.residencial-progresso {
      height: 100%;
      padding-bottom: 60px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .43)), to(rgba(0, 0, 0, .43))), url(https://urba.com.br/wp-content/uploads/2022/11/Depositphotos_249018672_XL.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .43), rgba(0, 0, 0, .43)), url(https://urba.com.br/wp-content/uploads/2022/11/Depositphotos_249018672_XL.jpg);
      background-position: 0 0, 80% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .bold-text {
      font-size: 20px
    }

    .bold-text.giardino {
      padding-right: 5px;
      padding-left: 5px;
      font-size: 17px
    }

    .bold-text.reserva-macauba {
      font-size: 18px
    }

    .bold-text.atlanta,
    .bold-text.reserva-macauba {
      padding-right: 5px;
      padding-left: 5px
    }

    .div-selo {
      position: absolute;
      left: auto;
      top: auto;
      right: 50%;
      bottom: 10%;
      display: block;
      width: 150px;
      height: 150px;
      margin-bottom: 0;
      margin-left: 0;
      background-size: cover;
      -webkit-transform: translate(50%, 0);
      -ms-transform: translate(50%, 0);
      transform: translate(50%, 0)
    }

    .div-selo.jardim-bem-viver {
      bottom: 4%
    }

    .infos-terreno.monte-mor.infos-terreno-monte {
      padding-top: 60px;
      padding-bottom: 60px
    }

    .div-infos-terreno {
      display: -ms-grid;
      display: grid;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      grid-auto-columns: 1fr;
      grid-column-gap: 0;
      grid-row-gap: 10px;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto
    }

    .div-info-terreno {
      width: 100%;
      height: auto;
      margin: 10px 0;
      padding: 10px
    }

    .div-info-terreno.end-mobile {
      border-right-style: none
    }

    .div-text-terreno,
    .paragraph-16._2 {
      width: 100%
    }

    .paragraph-16.itapeva.text-form,
    .paragraph-16.montemor.text-form,
    .paragraph-16.montmor.text-form {
      width: auto
    }

    .div-caracteristicas {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .div-caracteristica {
      width: 325px;
      min-height: auto;
      margin: 10px 0
    }

    .div-caracteristica.campos,
    .div-caracteristica.jardim-bem-viver,
    .div-caracteristica.reserva-macauba {
      min-height: auto
    }

    .h1 {
      font-size: 25px;
      line-height: 1.5;
      letter-spacing: 0
    }

    .text-block-9 {
      width: 85%;
      margin-left: 0;
      text-align: left
    }

    .div-ligue {
      padding-top: 5px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .link-2 {
      font-size: 20px;
      text-align: center
    }

    .text-block-10 {
      margin-right: 10px;
      margin-bottom: 0;
      text-align: center
    }

    .slide-nav-2 {
      width: 100px
    }

    .left-arrow-2 {
      left: 25%
    }

    .right-arrow-2 {
      right: 25%
    }

    .galeria-de-fotos {
      height: auto;
      background-color: #f7f7f7
    }

    .column-25,
    .columns-5 {
      height: auto
    }

    .column-25 {
      padding-top: 40px;
      padding-bottom: 40px;
      padding-left: 0
    }

    .column-26 {
      height: auto;
      padding-right: 0
    }

    .lightbox-link {
      position: relative
    }

    .img-cover-galeria {
      height: 250px
    }

    .seta {
      left: 50%;
      top: auto;
      right: 0;
      bottom: 0;
      margin-right: 0;
      margin-bottom: -25px;
      -webkit-transform: translate(-50%, 0) rotate(45deg);
      -ms-transform: translate(-50%, 0) rotate(45deg);
      transform: translate(-50%, 0) rotate(45deg)
    }

    .div-title-info-galeria {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100%;
      padding-right: 20px;
      padding-left: 20px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .columns-6,
    .localizacao {
      height: auto
    }

    .column-27 {
      padding-bottom: 0;
      padding-left: 0;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start
    }

    .column-27,
    .column-28 {
      height: auto
    }

    .div-title-info-localizacao {
      width: 100%;
      margin-top: 40px;
      margin-bottom: 40px;
      padding-right: 20px;
      padding-left: 20px
    }

    .tabs {
      height: auto
    }

    .tab-pane-tab-1 {
      height: 300px
    }

    .tabs-menu {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex
    }

    .tab-pane-tab-2 {
      height: 300px
    }

    .planta {
      padding-top: 40px;
      padding-bottom: 40px
    }

    .div-img-casa {
      height: 300px
    }

    .lightbox-link-3 {
      width: 100%;
      height: auto
    }

    .lightbox-link-4 {
      height: auto
    }

    .lightbox-link-5 {
      width: 100%;
      height: auto
    }

    .div-planta-01,
    .div-planta-02 {
      width: 100%;
      height: 300px
    }

    .andamento-obra {
      padding-top: 40px;
      padding-bottom: 40px
    }

    .div-andamento {
      display: -ms-grid;
      display: grid;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      grid-auto-columns: 1fr;
      grid-column-gap: 10px;
      grid-row-gap: 10px;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto
    }

    .formulario {
      padding-top: 40px;
      padding-bottom: 40px
    }

    .formulario.montemor {
      width: 100%
    }

    .form-2.venda {
      margin-top: 20px
    }

    .form-2.smarturba {
      margin-top: 10px
    }

    .text-field-2 {
      box-shadow: 0 0 6px -3px rgba(0, 0, 0, .25)
    }

    .field-label {
      padding-left: 0
    }

    .ficha-tecnica {
      padding-top: 40px;
      padding-bottom: 40px
    }

    .columns-11 {
      width: 100%;
      margin-top: 20px
    }

    .section-texto-sobre {
      padding-top: 40px;
      padding-bottom: 40px
    }

    .email-ri-urba {
      width: 95%
    }

    .email-ri-urba.legenda.texto-padding-bottom {
      padding-bottom: 0
    }

    .column-33._2 {
      padding-top: 20px
    }

    .div-img-sobre {
      width: auto;
      height: 216px
    }

    .div-img-sobre.venda {
      height: 189px
    }

    .div-estados {
      margin-top: 0;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-estado {
      margin-bottom: 20px
    }

    .div-estado,
    .div-seta-2 {
      margin-right: 0
    }

    .duvida-2 {
      font-size: 14px
    }

    .razoes-vender {
      padding-bottom: 40px
    }

    .text-block-15 {
      width: 95%;
      margin-bottom: 0;
      line-height: 1.6;
      text-align: left
    }

    .text-block-15._2 {
      width: 100%;
      text-align: center
    }

    .div-entre-contato._2,
    .div-passo-a-passo {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .div-passo-a-passo {
      margin-top: 40px;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-passo {
      margin: 30px 0
    }

    .div-camino {
      display: none
    }

    .columns-12 {
      width: 95%
    }

    .column-34 {
      padding-right: 0;
      padding-left: 0
    }

    .paragraph-20 {
      width: 100%;
      font-size: 16px;
      line-height: 1.6
    }

    .div-principais-duvidas {
      width: 100%;
      margin-bottom: 0;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-principal-duvida {
      width: 100%;
      margin-right: 0;
      margin-bottom: 20px;
      margin-left: 0
    }

    .div-entre-contato._2 {
      width: 100%
    }

    .div-contato {
      width: 100%;
      margin-bottom: 10px
    }

    .text-block-21.vizinho {
      width: 95%
    }

    .columns-13 {
      width: 100%
    }

    .sobre-vizinho-premiado {
      min-height: auto;
      margin-bottom: 20px
    }

    .div-forms-indicacao {
      width: 100%;
      padding-right: 10px;
      padding-left: 10px
    }

    .columns-14 {
      width: 95%
    }

    .column-35 {
      padding-right: 0;
      padding-left: 0;
      text-align: center
    }

    .div-lojas {
      width: 95%;
      height: 0
    }

    .form-4 {
      width: 85%;
      margin-left: 0
    }

    .columns-15 {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .multimidia {
      padding-top: 40px;
      padding-bottom: 40px
    }

    .div-midia {
      width: 100%
    }

    .contact {
      height: auto;
      padding-bottom: 40px;
      background-image: url(../images/hero_v2.jpg);
      background-position: 30% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .col-contato {
      position: static;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .div-forms-contato {
      margin-top: 20px;
      padding-top: 20px
    }

    .heading-13,
    .paragraph-26 {
      width: 100%;
      text-align: center
    }

    .heading-13 {
      margin-top: 0;
      font-size: 28px
    }

    .paragraph-26 {
      margin-bottom: 20px;
      font-size: 16px
    }

    .nav-link,
    .nav-link.w--current {
      padding-top: 15px;
      padding-bottom: 15px
    }

    .nav-link.w--current {
      border-bottom-style: none
    }

    .destaque-h2-laranja.roxo {
      color: #82ea5b
    }

    .menu-button {
      margin-top: 20px;
      color: #006b3f
    }

    .menu-button.w--open {
      background-color: transparent;
      color: #006b3f
    }

    .form-block {
      margin-bottom: 40px
    }

    .contato-imediato-mobile {
      display: block;
      overflow: auto;
      width: 100px;
      padding-right: 10px;
      padding-bottom: 20px;
      padding-left: 10px
    }

    .div-botao-contato-mobile {
      position: absolute;
      left: auto;
      top: auto;
      right: 0;
      bottom: 0;
      width: 75px;
      height: 75px;
      margin-right: 10px;
      margin-bottom: 20px;
      border-radius: 100px;
      background-color: #ac41d8;
      background-image: url(../images/contact_rapido.png);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat;
      box-shadow: 0 7px 15px -6px rgba(0, 0, 0, .4);
      cursor: pointer
    }

    .div-forms-mobile {
      position: relative;
      z-index: 3;
      overflow: hidden;
      height: 0;
      margin-top: 20px;
      padding-right: 10px;
      padding-left: 10px;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 4px 12px -6px #000
    }

    .div-close-mobile {
      position: absolute;
      left: auto;
      top: 0;
      right: 0;
      bottom: auto;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 30px;
      height: 30px;
      margin-top: 10px;
      margin-right: 10px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 100px;
      background-color: #fff;
      box-shadow: 0 1px 6px -3px rgba(0, 0, 0, .5);
      color: #ac41d8;
      font-size: 18px;
      font-weight: 500
    }

    .column-39,
    .column-40,
    .column-41 {
      padding-right: 0;
      padding-left: 0
    }

    .column-41 {
      padding-top: 20px
    }

    .column-43 {
      padding-bottom: 20px
    }

    .column-43,
    .column-44 {
      padding-right: 0;
      padding-left: 0
    }

    .column-45 {
      display: block;
      height: auto;
      padding-top: 40px
    }

    .column-46 {
      padding-right: 0;
      padding-left: 0
    }

    .link-block-3,
    .list-5 {
      padding-left: 20px
    }

    .link-block-3 {
      display: block;
      margin-top: 0;
      margin-left: 0;
      padding-right: 20px;
      text-align: left
    }

    .link-block-3:hover {
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .nav-link-2 {
      margin-top: 0;
      padding-top: 20px;
      padding-bottom: 10px
    }

    .nav-menu-2 {
      z-index: 2;
      display: block;
      height: auto;
      padding-bottom: 10px;
      border-bottom: 2px solid #ff8b22;
      background-color: rgba(255, 255, 255, .95)
    }

    .menu-button-2 {
      color: #ff8b22
    }

    .menu-button-2,
    .menu-button-2.w--open {
      background-color: transparent
    }

    .dropdown-news {
      margin-top: 15px;
      margin-right: auto;
      margin-left: auto;
      padding-right: 10px;
      padding-left: 10px
    }

    .text-block-29 {
      text-align: center
    }

    .icon-3 {
      color: #ff8b22
    }

    .drop-form-news.w--open {
      margin-right: auto;
      margin-bottom: 10px;
      margin-left: auto
    }

    .dropdown-button {
      padding-top: 10px;
      padding-bottom: 10px
    }

    .seta-drop {
      display: none;
      margin-top: 0
    }

    .navbar-2 {
      height: 90px
    }

    .titulo-post-anterior {
      font-size: 16px;
      line-height: 1.3
    }

    .column-47 {
      text-align: left
    }

    .div-busca {
      height: 0
    }

    .autor.relacionados {
      display: block
    }

    .text-field-4 {
      margin-top: 5px;
      margin-bottom: 5px
    }

    .heading-14 {
      margin-top: 0;
      padding-left: 0;
      text-align: center
    }

    .slider-3 {
      padding-bottom: 50px
    }

    .categoria {
      margin-top: 15px;
      margin-left: 10px;
      padding-left: 15px
    }

    .div-destaque-lateral._4 {
      height: 200px
    }

    .div-destaque-lateral._2,
    .div-destaque-lateral._3 {
      height: 200px;
      margin-bottom: 20px
    }

    .heading-15 {
      width: 100%;
      line-height: 1.3
    }

    .heading-15,
    .heading-15._02 {
      font-size: 20px
    }

    .dvi-cta {
      width: 350px;
      height: 550px;
      background-image: url(../images/banner-lateral.png)
    }

    .dvi-cta.home {
      height: 540px
    }

    .data-publicacao {
      margin-left: 10px;
      padding-left: 10px
    }

    .data-publicacao.relacionados {
      display: block
    }

    .div-ad {
      display: none;
      height: 70px
    }

    .section-posts {
      padding-top: 90px
    }

    .submit-button-4 {
      width: 100%
    }

    .div-post-destaque {
      margin-bottom: 10px;
      padding-right: 15px;
      padding-left: 15px
    }

    .grid-2 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .column-48 {
      padding-top: 20px;
      padding-right: 0;
      padding-left: 0
    }

    .grid {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .container-padrao-2 {
      padding-right: 10px;
      padding-left: 10px
    }

    .column-2 {
      padding-right: 0
    }

    .post-relacionado {
      width: 100%;
      margin-right: 0;
      margin-bottom: 10px
    }

    .link-block {
      margin-right: 10px
    }

    .div-busca-2 {
      height: 0
    }

    .heading-16 {
      margin-top: 0;
      padding-left: 0;
      text-align: center
    }

    .heading-16.relacionados {
      font-size: 26px
    }

    .paragraph-2 {
      width: 100%;
      font-size: 18px;
      line-height: 1.8
    }

    .heading-17 {
      font-size: 32px
    }

    .paragraph-27 {
      width: 100%
    }

    .column-4 {
      padding-right: 0;
      padding-left: 0;
      border-right-style: none
    }

    .column-3 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      padding-left: 0;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .heading-18 {
      width: 100%;
      line-height: 1.3
    }

    .heading-18,
    .heading-18._02 {
      font-size: 20px
    }

    .heading-18._02.relacionado {
      font-size: 18px
    }

    .div-img-postrelacionado,
    .div-img-postrelacionado._2,
    .div-img-postrelacionado._3 {
      padding-right: 10px;
      padding-left: 10px
    }

    .content-cta {
      width: 100%;
      margin-top: 40px
    }

    .submit-button-5 {
      width: 100%
    }

    .div-siganos {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100%;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-img-postinterna {
      width: 100%;
      height: 300px
    }

    .text-block-32 {
      text-align: center
    }

    .heading-19 {
      width: 100%;
      font-size: 22px
    }

    .post-main-info {
      width: 100%
    }

    .posts {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .secao-material-destaque {
      height: auto;
      padding-bottom: 20px
    }

    .imagem-material-destque {
      width: 100%;
      height: 300px;
      background-position: 50% 50%;
      background-size: cover
    }

    .titulo-material-destaque {
      width: 100%;
      margin-top: 0;
      padding-left: 20px
    }

    .botao-materiais {
      width: 90%;
      text-align: center
    }

    .pai-dropdown-categoria-materiais {
      width: 100%;
      margin-bottom: 30px;
      float: none
    }

    .column-5 {
      display: block;
      padding-right: 0;
      padding-left: 0
    }

    .text-block-33 {
      font-size: 18px
    }

    .campo-pesquisa {
      width: 85%
    }

    .coluna-busca {
      padding-right: 0;
      padding-left: 0
    }

    .colunas-materiais {
      height: auto
    }

    .titulo-categoria-materiais {
      padding-left: 0;
      text-align: center
    }

    .coluna-individual-material {
      padding-right: 0;
      padding-left: 0
    }

    .botao-material-secundario {
      position: relative;
      width: 99%;
      margin-top: 10px;
      margin-left: 0
    }

    .bold-text-27 {
      height: auto
    }

    .image-9 {
      width: 100px;
      margin-right: -25px;
      margin-bottom: 0;
      -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg)
    }

    .image-10._2 {
      margin-left: 25px
    }

    .image-11 {
      position: absolute;
      left: 0;
      top: 0;
      right: auto;
      bottom: 0;
      margin-top: 2px;
      margin-left: 10px
    }

    .form-block-5 {
      margin-bottom: 10px
    }

    .column-49 {
      padding-right: 0;
      padding-left: 0;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      border-bottom: 2px solid #ff8b22;
      border-right-style: none
    }

    .column-49._2 {
      padding-right: 30px;
      padding-left: 10px;
      border-bottom-color: #006b3f
    }

    .list-7,
    .text-block-34 {
      width: 100%
    }

    .list-7 {
      padding-left: 20px
    }

    .text-field-5 {
      width: 100%;
      float: none;
      border-top-right-radius: 25px;
      border-bottom-right-radius: 25px
    }

    .submit-button-6 {
      width: auto;
      padding-right: 40px;
      padding-left: 40px;
      float: none;
      border-top-left-radius: 25px;
      border-bottom-left-radius: 25px
    }

    .form-6 {
      width: 100%;
      text-align: center
    }

    .left-arrow-3,
    .right-arrow-3 {
      display: none
    }

    .hero-landing {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px
    }

    .div-info-hero {
      top: 0;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .div-info-hero.monte-mor {
      top: 15%
    }

    .col-forms,
    .col-text {
      padding-right: 0
    }

    .col-text.sta-iria {
      padding-top: 0
    }

    .col-forms {
      padding-top: 100px;
      padding-left: 0
    }

    .heading-lp {
      width: 225px;
      font-size: 16px;
      line-height: 26px
    }

    .heading-lp.sta-iria {
      width: 190px
    }

    .heading-lp.regatas {
      width: 270px
    }

    .div-logos-hero.sta-iria {
      width: 160px;
      margin-top: 0;
      margin-left: 0
    }

    .div-logos-hero.itapeva,
    .div-logos-hero.regatas {
      margin-right: 100px;
      margin-left: 0
    }

    .div-logos-hero.elvira {
      margin-right: auto;
      margin-left: auto
    }

    .image-13 {
      margin-right: 0
    }

    .tag-hero,
    .tag-hero.destaque {
      font-size: 14px
    }

    .div-tags {
      padding-left: 0;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-tags.sta-iria {
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .destaque-lp {
      font-size: 28px;
      line-height: 32px
    }

    .destaque-lp.regatas {
      font-size: 35px
    }

    .destaque-lp.itapeva {
      width: auto;
      font-size: 31px;
      line-height: 40px
    }

    .box {
      width: 300px;
      height: 227px;
      background-size: 300px 227px
    }

    .box.sta-iria {
      width: 240px;
      height: 180px;
      background-size: 240px 180px
    }

    .box.itapeva,
    .box.regatas {
      height: 240px;
      margin-top: 20px
    }

    .box.itapeva.comercial,
    .box.regatas.comercial {
      height: 190px;
      margin-top: 20px;
      padding-top: 15px
    }

    .box.itapeva.montemor {
      width: 280px
    }

    .div-forms-hero {
      width: 100%
    }

    .div-forms-hero.itapeva,
    .div-forms-hero.regatas {
      margin-top: 0
    }

    .label-form-lp {
      font-size: 12px
    }

    .campo-form-lp {
      margin-bottom: 5px
    }

    .enviar-form-lp {
      margin-top: 10px
    }

    .traga-seu-negocio {
      padding-top: 40px
    }

    .columns-17 {
      width: 100%;
      margin-top: 40px
    }

    .column-50 {
      padding-right: 0
    }

    .slide-nav-4 {
      margin-bottom: -50px
    }

    .slide-nav-4.regatas {
      margin-bottom: 0
    }

    .heading-22 {
      margin-top: 100px
    }

    .condicoes {
      padding-top: 40px;
      padding-bottom: 60px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(#006b3f), to(#00d38d));
      background-image: linear-gradient(180deg, #006b3f, #00d38d);
      background-position: 0 0;
      background-size: auto;
      background-repeat: repeat
    }

    .condicoes.minha-casa {
      padding-bottom: 40px
    }

    .div-condicoes {
      width: 100%;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .box-condicoes {
      width: auto;
      border-bottom: 1px solid #fff;
      border-right-style: none
    }

    .box-condicoes.end {
      border-bottom-style: none
    }

    .localizacao-lp {
      padding-top: 40px;
      padding-bottom: 60px
    }

    .text-block-37 {
      width: 100%;
      font-size: 16px
    }

    .columns-18 {
      width: 100%
    }

    .div-proximidade {
      margin-right: 0;
      margin-bottom: 15px
    }

    .div-grupo-proximidades {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .column-51 {
      padding-right: 0
    }

    .map-2 {
      height: 350px
    }

    .institucional {
      padding-top: 40px
    }

    .column-52 {
      padding-top: 0;
      padding-right: 0
    }

    .column-53 {
      margin-top: 20px
    }

    .column-53,
    .column-54,
    .column-55 {
      padding-right: 0;
      padding-left: 0
    }

    .column-55 {
      padding-top: 40px
    }

    .div-ponto-de-conversao {
      width: 100%;
      padding: 15px
    }

    .h3-ponto-de-conversao._2 {
      font-size: 16px;
      text-align: center
    }

    .paragraph-30 {
      font-size: 16px
    }

    .button-conversao {
      width: 100%;
      margin-right: 0;
      margin-bottom: 20px;
      padding-right: 10px;
      padding-left: 10px;
      text-align: center
    }

    .button-conversao._2 {
      margin-bottom: 0
    }

    .button-conversao._3 {
      margin-right: 0;
      margin-bottom: 10px
    }

    .radio-button-2 {
      margin-right: 10px
    }

    .radio-button-field-3 {
      width: 100%;
      padding-right: 5px
    }

    .radio-button-label-2 {
      width: 90%;
      font-size: 14px
    }

    .button-11 {
      width: 100%;
      margin-left: 0;
      text-align: center
    }

    .button-11.smarturba {
      padding: 20px 10px;
      font-size: 15px
    }

    .button-11.smarturba._2,
    .button-12.smarturba._2.mobile.display-hidden {
      display: none
    }

    .button-11.smarturba._2.mobile {
      display: block;
      margin-top: 20px
    }

    .div-etapa2-2 {
      height: 0
    }

    .columns-20 {
      margin-bottom: 0
    }

    .heading-23 {
      font-size: 28px
    }

    .heading-23.area-cliente {
      width: 100%;
      padding-bottom: 140px;
      font-size: 28px;
      text-align: left
    }

    .section-texto-relatorios {
      padding-top: 30px;
      padding-bottom: 30px
    }

    .div-categorias,
    .paragraph-31 {
      width: 100%
    }

    .duvida-3 {
      font-size: 14px
    }

    .div-seta-3 {
      margin-right: 0
    }

    .list-8 {
      padding-left: 20px
    }

    .div-resposta-2 {
      height: 0
    }

    .list-10,
    .list-11,
    .list-9 {
      padding-left: 20px
    }

    .campo-form-lp-2 {
      margin-bottom: 5px
    }

    .tag-hero-2,
    .tag-hero-2.destaque {
      font-size: 14px
    }

    .tag-hero-2.dunlop-box-hero {
      display: block;
      text-align: center
    }

    .enviar-form-lp-2 {
      margin-top: 10px
    }

    .heading-lp-2 {
      width: 225px;
      font-size: 16px;
      line-height: 26px
    }

    .heading-lp-2.itapeva,
    .heading-lp-2.regatas {
      width: 260px;
      font-size: 18px
    }

    .label-form-lp-2 {
      font-size: 12px
    }

    .div-box-contorno,
    .div-box-preenchido {
      width: 300px;
      height: 200px
    }

    .div-box-contorno.regatas-comercial,
    .div-box-preenchido.regatas-comercial {
      width: 290px;
      height: 150px
    }

    .div-box-contorno.itapeva {
      width: 280px;
      height: 280px
    }

    .div-box-contorno.elvira,
    .div-box-contorno.residencial-progresso {
      left: 10px;
      top: 10px;
      width: 280px;
      height: 200px
    }

    .feature {
      width: 100%
    }

    .text-block-46 {
      left: auto;
      top: 10px;
      right: 10px;
      bottom: auto
    }

    .tag-breve-lan-amento.itapeva {
      top: -3.5%
    }

    .text-block-47.montemor,
    .text-block-47.residencial-progresso {
      top: 84px
    }

    .hero {
      height: auto;
      padding-top: 20px;
      padding-bottom: 60px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(55, 20, 73, .66)), to(rgba(55, 20, 73, .66))), url(../images/Imagem_Smart08.jpg);
      background-image: linear-gradient(180deg, rgba(55, 20, 73, .66), rgba(55, 20, 73, .66)), url(../images/Imagem_Smart08.jpg);
      background-position: 0 0, 60% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .heading-25 {
      font-size: 42px;
      line-height: 1.3em;
      text-align: center
    }

    .image-18 {
      left: 0;
      top: 5%;
      right: 0;
      bottom: auto;
      margin-right: auto;
      margin-left: auto
    }

    .heading-26 {
      line-height: 1.4em
    }

    .heading-26,
    .heading-27.forms,
    .paragraph-32 {
      text-align: center
    }

    .entenda {
      padding-top: 60px;
      padding-bottom: 60px
    }

    .columns-21 {
      width: auto
    }

    .column-60 {
      padding-top: 40px;
      padding-right: 0;
      padding-left: 0
    }

    .grid-3 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex
    }

    .column-61 {
      padding-right: 0
    }

    .box-entenda {
      margin-bottom: 10px
    }

    .video {
      padding-top: 60px;
      padding-bottom: 60px;
      background-position: -60% 100%;
      background-size: cover;
      background-attachment: scroll
    }

    .div-video {
      width: 100%;
      margin-top: 40px
    }

    .como-funciona {
      padding-bottom: 60px
    }

    .section-form {
      padding-top: 60px;
      padding-bottom: 120px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .5))), url(../images/contato.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../images/contato.jpg);
      background-position: 0 0, 10% 100%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
      background-attachment: scroll, fixed
    }

    .text-field-6 {
      box-shadow: 0 0 6px -3px rgba(0, 0, 0, .25)
    }

    .heading-27 {
      width: 95%;
      margin-right: 0;
      margin-left: 0;
      text-align: left
    }

    .heading-27,
    .heading-27.center._32px {
      font-size: 24px
    }

    .heading-27.tour-dunlop._2._32px,
    .heading-27.tour-dunlop._32px {
      width: 100%;
      font-size: 24px;
      text-align: center
    }

    .heading-27.galeria {
      margin-bottom: 0;
      text-align: center
    }

    .heading-27.center {
      width: 100%;
      text-align: center
    }

    .paragraph-34 {
      width: 100%
    }

    .div-features,
    .div-features._2 {
      margin-top: 80px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .div-features._3,
    .div-features._4 {
      margin-top: 80px
    }

    .imagem-smarturba {
      width: 100%
    }

    .imagem-smarturba._2.dunlop-img,
    .imagem-smarturba._6.dunlop-img,
    .imagem-smarturba._7.dunlop-img,
    .imagem-smarturba.dunlop-img {
      width: 280px;
      height: 280px
    }

    .div-info-smarturba {
      width: 100%;
      margin-top: 20px;
      margin-left: 0
    }

    .div-info-smarturba._2 {
      margin-top: 20px;
      margin-right: 0
    }

    .heading-28._2,
    .heading-28._4,
    .heading-28._6,
    .paragraph-35._2 {
      text-align: left
    }

    .topicos {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .topico {
      width: 100%;
      margin-right: 0;
      margin-bottom: 10px
    }

    .topico._2 {
      width: 100%;
      margin-left: 0
    }

    .topico,
    .topico._2,
    .topico._4 {
      min-height: 50px
    }

    .topico._4,
    .topico._6 {
      margin-left: 0
    }

    .image-20,
    .image-21 {
      width: 100px
    }

    .image-20._2 {
      left: -15px
    }

    .div-button-smarturba {
      margin-top: 80px
    }

    .text-block-50 {
      width: 90%;
      margin-right: auto;
      margin-left: auto;
      font-size: 12px
    }

    .cta-provisorio {
      padding-top: 60px;
      padding-bottom: 60px;
      background-image: linear-gradient(45deg, #006b3f, #079d56);
      background-position: 0 0;
      background-size: auto;
      background-repeat: repeat
    }

    .heading-29 {
      width: 100%
    }

    .heading-30 {
      font-size: 42px;
      line-height: 1.3em;
      text-align: center
    }

    .heading-30.h1-dunlop {
      font-size: 28px
    }

    .heading-30.minha-casa {
      font-size: 47px
    }

    .heading-31 {
      line-height: 1.4em
    }

    .button-12,
    .heading-31,
    .paragraph-36 {
      text-align: center
    }

    .paragraph-36.dunlop-sub {
      margin-right: 10px;
      margin-left: 10px
    }

    .paragraph-36.vila-profeta-subtitulo {
      margin-right: 0;
      text-align: left
    }

    .button-12 {
      width: 100%;
      margin-left: 0
    }

    .button-12.smarturba {
      padding: 20px 10px;
      font-size: 15px
    }

    .button-12.smarturba._2 {
      display: block
    }

    .button-12.smarturba._2.mobile {
      display: none;
      margin-top: 20px;
      padding-top: 15px;
      padding-bottom: 15px
    }

    .div-formulario-dunlop {
      width: 100%;
      padding-top: 20px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .div-formulario-dunlop.minha-casa {
      margin-right: auto;
      margin-left: auto;
      padding-right: 0
    }

    .enviar-form-lp-3 {
      width: 100%;
      margin-top: 10px;
      padding-top: 12px;
      padding-bottom: 12px
    }

    .box-entenda-2 {
      margin-bottom: 10px
    }

    .div-paragraph-center.margin-top-60px {
      margin-top: 50px
    }

    .div-video-2 {
      width: 100%
    }

    .div-grid-features {
      margin-top: 0;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .div-feature {
      width: 100%;
      margin: 15px 0
    }

    .topico-2 {
      width: 100%;
      min-height: 50px;
      margin-right: 0;
      margin-bottom: 10px
    }

    .topico-2.dunlop-topic,
    .topico-2.vila-profeta-topicos {
      min-height: 80px
    }

    .comercio {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .6)), to(rgba(0, 0, 0, .6))), url(../images/como-funciona-3.jpeg), -webkit-gradient(linear, left top, left bottom, color-stop(45%, #079d56), to(#00d38d));
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(../images/como-funciona-3.jpeg), linear-gradient(180deg, #079d56 45%, #00d38d);
      background-size: auto, cover, auto
    }

    .div-logo-dunlop {
      width: 290px;
      border-radius: 5px
    }

    .seta-2 {
      left: 50%;
      top: auto;
      right: 0;
      bottom: 0;
      margin-right: 0;
      margin-bottom: -25px;
      -webkit-transform: translate(-50%, 0) rotate(45deg);
      -ms-transform: translate(-50%, 0) rotate(45deg);
      transform: translate(-50%, 0) rotate(45deg)
    }

    .galeria-de-fotos-2 {
      height: auto;
      background-color: #f7f7f7
    }

    .button-14 {
      padding-right: 20px;
      padding-left: 20px;
      border-radius: 100px
    }

    .column-68 {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
      padding-left: 0
    }

    .div-contorno {
      left: 30px;
      top: 30px;
      width: 280px;
      height: 280px;
      border-width: 8px;
      border-radius: 20px
    }

    .div-contorno._2 {
      left: 30px;
      top: 10px;
      right: auto;
      bottom: auto
    }

    .div-contorno._2._3 {
      top: 30px
    }

    .enviar-form-lp-4 {
      width: 100%;
      margin-top: 10px;
      padding-top: 12px;
      padding-bottom: 12px
    }

    .div-logo-minhacasa {
      width: 320px;
      margin-right: auto;
      margin-left: auto;
      border-radius: 15px
    }

    .menor {
      font-size: 44px
    }

    .heading-34 {
      margin-right: 10px;
      margin-left: 10px;
      font-size: 28px;
      line-height: 1.2em;
      text-align: center
    }

    .sonho {
      padding-top: 150px;
      padding-bottom: 60px
    }

    .image-24 {
      left: 50%;
      bottom: -97px;
      width: 96%
    }

    .div-selo-minhacasa {
      position: relative;
      left: 0;
      bottom: 0;
      margin-top: 20px;
      margin-right: auto;
      margin-left: auto;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .div-boxes-sonho {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: auto;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .div-box-sonho {
      width: 100%;
      height: auto;
      padding-top: 15px;
      padding-bottom: 15px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start
    }

    .txt-boxes-sonho {
      margin-left: 10px;
      text-align: left
    }

    .box-condicoes-2 {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .box-condicao {
      width: 100%;
      min-height: 0;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      border-right-style: none
    }

    .box-condicao.border-off {
      border-bottom-style: none
    }

    .div-txt-detalhes {
      width: 100%
    }

    .img-casas,
    .slider-detalhes {
      height: 400px
    }

    .div-passos {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100%;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .text-block-59 {
      line-height: 1.3em
    }

    .slider-6 {
      height: 240px
    }

    .div-logo-vila-profeta {
      width: 290px;
      border-radius: 5px;
      background-color: rgba(255, 255, 255, .9)
    }

    .roxo.bold {
      color: #82ea5b
    }

    .image-26 {
      width: 300px
    }

    .apresentacao-institucional {
      margin-top: 0;
      padding-top: 0
    }

    .filto-por-ano {
      height: 130px
    }

    .form-8 {
      display: block;
      width: auto
    }

    .btn-filtro-investidores {
      display: inline-block;
      margin-top: 0
    }

    .div-block-12 {
      text-align: right
    }

    .estatuto-social {
      margin-top: 80px
    }

    .columns-22,
    .columns-23 {
      display: block
    }

    .div-img-sobre-2 {
      width: auto;
      height: 216px;
      margin-top: 0
    }

    .div-img-sobre-2.venda {
      height: 189px
    }

    .paragrafo-comum {
      width: 95%
    }

    .paragrafo-comumm {
      margin-top: 0;
      font-size: 13px
    }

    .nota.texto-margem-top,
    .paragrafo-comumm.texto-margem-top {
      margin-top: 51px
    }

    .columns-24 {
      margin-bottom: 150px
    }

    .link-mobile {
      padding-left: 20px
    }

    .nota {
      margin-top: 0;
      font-size: 13px
    }

    .div-box-preenchido-itapeva {
      width: 280px;
      height: 280px
    }

    .div-box-preenchido-itapeva.regatas-comercial {
      width: 290px;
      height: 150px
    }

    .subtitle-lp {
      width: 225px;
      font-size: 16px;
      line-height: 26px
    }

    .subtitle-lp.regatas {
      width: 260px;
      font-size: 18px
    }

    .subtitle-lp.itapeva {
      width: 260px;
      margin-top: 86px;
      font-size: 17px;
      line-height: 27px
    }

    .subtitle-lp.monte-mor,
    .subtitle-lp.residencial-progresso {
      width: 260px;
      margin-top: 68px;
      font-size: 17px;
      line-height: 27px;
      text-align: center
    }

    .subtitle-lp.residencial-progresso {
      margin-top: 20px;
      margin-left: -13px
    }

    .logo-itapeva {
      margin-right: 0
    }

    .button-33,
    .button-34 {
      padding-right: 20px;
      padding-left: 20px;
      border-radius: 100px
    }

    .column-25-copy {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
      padding-left: 0
    }

    .image-60 {
      width: 100px;
      margin-right: -25px;
      margin-bottom: 0;
      -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg)
    }

    .video-itapeva {
      padding-top: 40px;
      padding-bottom: 40px
    }

    .heading-36.elvira-copy.monte-mor,
    .heading-36.elvira-copy.residencial-progresso,
    .heading-36.elvira-copy.sao-roque,
    .heading-36.elvira.monte-mor,
    .heading-36.elvira.sao-roque {
      width: 230px;
      font-size: 20px
    }

    .grid-5 {
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr
    }

    .logo-elvira {
      margin-right: 0
    }

    .lightbox-link-8 {
      width: 100%;
      height: auto
    }

    .div-planta-03 {
      width: 100%;
      height: 300px
    }

    .cond-elvira {
      width: 100%
    }

    .elvira-roxo {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
      padding-left: 0
    }

    .elvira-seta-laranja {
      width: 100px;
      margin-right: -25px;
      margin-bottom: 0;
      -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg)
    }

    .div-box-preenchido-elvira {
      width: 280px;
      height: 200px
    }

    .div-box-preenchido-elvira.regatas-comercial {
      width: 290px;
      height: 150px
    }

    .destaque-h2-copy.roxo,
    .destaque-h2-elvira.roxo {
      color: #82ea5b
    }

    .logo-monte-mor {
      margin-right: auto;
      margin-left: auto
    }

    .text-span-5 {
      width: 100%;
      font-size: 20px
    }

    .icone-montemor {
      width: 100%;
      height: 230px;
      margin: 10px 0;
      padding: 10px
    }

    .icone-montemor.end-mobile {
      border-right-style: none
    }

    .div-block-24 {
      width: 260px
    }

    .image-5 {
      padding-right: 0
    }

    .paragrafo-2.topicos {
      padding-bottom: 0
    }

    .colunas-montemor {
      height: auto
    }

    .coluna-1-monte-mor {
      width: 100%;
      margin-top: 40px;
      margin-bottom: 40px;
      padding-right: 20px;
      padding-left: 20px
    }

    .youtube {
      width: 100%
    }

    .image-62,
    .lightbox-link-9 {
      height: auto
    }

    .image-62 {
      width: auto
    }

    .image-62,
    .image-63,
    .image-64,
    .image-65 {
      display: none
    }

    .right-arrow-4 {
      right: -56px
    }

    .h1-2.verde-claro.center {
      font-size: 30px
    }

    .image-66 {
      width: 256px
    }

    .lightbox-link-10 {
      width: 260px
    }

    .left-arrow-4 {
      left: -56px
    }

    .div-box-preenchido-sao-roque {
      width: 280px;
      height: 200px
    }

    .div-box-preenchido-sao-roque.regatas-comercial {
      width: 290px;
      height: 150px
    }

    .logo-sao-roque {
      margin: 10px auto 20px;
      padding-bottom: 20px
    }

    .icone-montemor-copy-copy,
    .topicos-sao-roque-02 {
      width: 100%;
      height: auto;
      margin: 10px 0;
      padding: 10px
    }

    .andamento-obra-sao-roque.end-mobile,
    .condicoes-sao-roque.end-mobile,
    .icone-montemor-copy-copy.end-mobile,
    .icone-montemor-copy.end-mobile,
    .topicos-sao-roque-02.end-mobile {
      border-right-style: none
    }

    .icone-montemor-copy-copy {
      height: 230px
    }

    .div-infos-terreno-sao-roque {
      display: block;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      grid-auto-columns: 1fr;
      grid-column-gap: 0;
      grid-row-gap: 10px;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto
    }

    .icone-montemor-copy {
      width: 100%;
      height: 230px;
      margin: 10px 0;
      padding: 10px
    }

    .andamento-obra-sao-roque,
    .condicoes-sao-roque {
      width: 100%;
      height: auto;
      margin: 10px 0;
      padding: 20px 10px
    }

    .infos-terreno-sao-roque.monte-mor.infos-terreno-monte {
      padding-top: 0;
      padding-bottom: 60px
    }

    .andamento-obra-sao-roque {
      display: block;
      padding: 10px
    }

    .logo-residencial-progresso {
      margin: 10px auto 20px;
      padding-bottom: 20px
    }

    .div-box-preenchido-residencial-progresso {
      width: 280px;
      height: 200px
    }

    .div-box-preenchido-residencial-progresso.regatas-comercial {
      width: 290px;
      height: 150px
    }

    .cond-residencial-progresso {
      width: 100%;
      margin-bottom: 40px
    }

    .div-diferencial {
      width: auto;
      margin-right: 20px;
      margin-left: 20px;
      padding: 9px 18px
    }

    .coluna-direita-localizacao {
      height: auto
    }

    .bold-text-53 {
      font-size: 25px;
      line-height: 30px
    }

    .colunas-montemor-copy {
      height: auto
    }
  }

  #w-node-_214e244b-38e3-a924-7e1c-5d7a58811c00-ee7534e1 {
    -ms-grid-column-align: auto;
    justify-self: auto
  }

  #w-node-_119a8010-1a07-0a63-e789-9c670d553f53-99a446bd,
  #w-node-_7464def7-7e97-d473-c497-53808485d85d-99a446bd,
  #w-node-b790d3ce-5a0f-8b99-cab3-2b2e45dc0655-99a446bd {
    -ms-grid-column: span 1;
    grid-column-start: span 1;
    -ms-grid-column-span: 1;
    grid-column-end: span 1;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1
  }

  @media screen and (max-width:479px) {
    #w-node-_8f8b3311-938b-542d-7468-eb2cfccb59c5-177534db {
      -ms-grid-column-span: 1;
      grid-column-end: span 1;
      -ms-grid-column: span 1;
      grid-column-start: span 1;
      -ms-grid-row-span: 1;
      grid-row-end: span 1;
      -ms-grid-row: span 1;
      grid-row-start: span 1
    }

    #w-node-b44ff394-edce-04d3-2090-c80dbdc2c761-aa7534e2 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center
    }

    #w-node-_0a78eb64-b467-5d9e-5e86-3b024f14cf8a-aa7534e2,
    #w-node-_33ff7a00-029d-371e-a001-fd257c06e2f2-aa7534e2,
    #w-node-_85a3680c-d7b6-e02a-6a0e-1dce1ffae6ac-aa7534e2,
    #w-node-_863f6c4e-0442-b4a0-dd15-ef53cf54d303-aa7534e2,
    #w-node-a078d2ae-fdf4-a339-e708-3c3663ec4719-aa7534e2,
    #w-node-becaf4aa-22bf-6395-f491-196d89487d94-aa7534e2,
    #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e63-ac7534e9 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center
    }

    #w-node-b44ff394-edce-04d3-2090-c80dbdc2c761-7b7534f1,
    #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e6c-ac7534e9,
    #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e7f-ac7534e9,
    #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e88-ac7534e9,
    #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e9a-ac7534e9,
    #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558ea3-ac7534e9 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center
    }

    #w-node-_0a78eb64-b467-5d9e-5e86-3b024f14cf8a-7b7534f1,
    #w-node-_33ff7a00-029d-371e-a001-fd257c06e2f2-7b7534f1,
    #w-node-_85a3680c-d7b6-e02a-6a0e-1dce1ffae6ac-7b7534f1,
    #w-node-_863f6c4e-0442-b4a0-dd15-ef53cf54d303-7b7534f1,
    #w-node-a078d2ae-fdf4-a339-e708-3c3663ec4719-7b7534f1,
    #w-node-becaf4aa-22bf-6395-f491-196d89487d94-7b7534f1,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-b37534f4,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-b37534f4,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-b37534f4,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-b37534f4 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center
    }

    #w-node-b44ff394-edce-04d3-2090-c80dbdc2c761-b47534f5,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-b37534f4,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-b37534f4,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba40c-b37534f4 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center
    }

    #w-node-_0a78eb64-b467-5d9e-5e86-3b024f14cf8a-b47534f5,
    #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e734521-947534f7,
    #w-node-_33ff7a00-029d-371e-a001-fd257c06e2f2-b47534f5,
    #w-node-_85a3680c-d7b6-e02a-6a0e-1dce1ffae6ac-b47534f5,
    #w-node-_863f6c4e-0442-b4a0-dd15-ef53cf54d303-b47534f5,
    #w-node-a078d2ae-fdf4-a339-e708-3c3663ec4719-b47534f5,
    #w-node-becaf4aa-22bf-6395-f491-196d89487d94-b47534f5 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center
    }

    #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e73452a-947534f7,
    #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e734559-947534f7,
    #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e734562-947534f7,
    #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e73456b-947534f7,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-e97534f8,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-e97534f8 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center
    }

    #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a48-4d7534fa,
    #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a5b-4d7534fa,
    #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a64-4d7534fa,
    #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a76-4d7534fa,
    #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a7f-4d7534fa,
    #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e37751a-207534fc,
    #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e377523-207534fc,
    #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e377536-207534fc,
    #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e37753f-207534fc,
    #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e377551-207534fc,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-e97534f8,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-e97534f8,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba40c-e97534f8,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-e97534f8 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center
    }

    #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e37755a-207534fc,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-04c11779 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-c81dfdf2,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-04c11779,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-04c11779,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-04c11779,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-04c11779,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba40c-04c11779,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-04c11779 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-99a446bd,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-99a446bd,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-c81dfdf2,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-99a446bd,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-c81dfdf2,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-99a446bd,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-c81dfdf2,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-99a446bd,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-c81dfdf2,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba40c-c81dfdf2,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-99a446bd,
    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-c81dfdf2 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center
    }
  }

  .div-caracteristica.regatas {
    height: auto !important;
    min-height: 670px
  }

  .unico {
    display: block !important
  }

  .enviar-form-lp {
    text-transform: none !important
  }

  .hero-internas {
    background-size: auto, auto, cover
  }

  .button-3,
  .submit-button-2 {
    text-transform: none !important
  }
</style>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css">
<?php if ((get_the_ID() === 354)) { ?>
  <style>
    .hero-internas {
      background-image: none !important;
      padding: 0px;
    }

    .tag-breve-lan-amento.comercial.dunlop {
      display: none;
    }

    .unico {
      display: block !important;
    }
  </style>




  <section id="hero-form" class="hero-landing regatas" style="background-image: linear-gradient(90deg, rgba(3, 3, 3, 0.5), rgba(49, 49, 49, 0) 57%), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php the_field('imagem_de_fundo'); ?>);">
    <div class="tag-breve-lan-amento comercial dunlop">

      <div class="text-block-47 dunlop unico" style="background-image: linear-gradient(
45deg,  #006B3F ,  #006B3F );"><span style="font-size: 14px;position: relative;    top: 13px;">TOUR VIRTUAL</span></div>
    </div>






    <div class="container-padrao">


      <div class="div-logos-hero regatas"><img src="<?php the_field('logo_hero'); ?>" width="125" alt="" class="image-13"></div>
      <div class="div-info-hero">
        <div class="w-row">
          <div class="col-text w-col w-col-6">
            <style>
              .box.reserva-regata.giardino {
                height: 250px;
                /*background-size: 350px 220px*/
              }

              #hero-form .container-padrao {
                margin-top: 100px;
              }

              .col-forms.w-col.w-col-6 {
                display: flex;
                justify-content: center;
              }


              @media screen and (max-width: 479px) {
                .box.reserva-regata.giardino {
                  height: 200px;
                  background-size: 300px 200px
                }
              }
            </style>
            <div class="box reserva-regata giardino">
              <?php $titulo_hero = get_field('titulo_hero', get_the_id()); ?>
              <h1 class="heading-lp"><strong class="destaque-lp">Compre seu lote</strong> e viva com muita qualidade de vida!</h1>
            </div>
            <!--<div class="div-tags">
              <div>
              	<?php $tags = get_field('tags', get_the_id()); ?>
                <div class="tag-hero">AMPLA ÁREA VERDE</div>
                <div class="tag-hero">LAZER E ACESSIBILIDADE</div>
                <div class="tag-hero">COMÉRCIO E SERVIÇOS</div>
              </div>
            </div>-->
          </div>
          <div class="col-forms w-col w-col-6">
            <div class="div-forms-hero">
              <h3 class="heading-21"><?= get_field('titulo_formulario', get_the_id()) ?></h3>
              <form id="interesse-loteamento-lp" name="email-form" data-name="Email Form" class="form-7">
                <input type="hidden" id="idempreendimento" name="idempreendimento" value="<?php the_field('id_loteamentos'); ?>">
                <input type="hidden" id="cidade-il" name="cidade" value="<?= $cidade_lot[0]->name ?>">
                <input type="hidden" name="loteamento" id="loteamento-il" value="<?= the_title() ?>">
                <label for="name" class="label-form-lp">Nome</label><input type="text" class="campo-form-lp w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name" required>
                <label for="E-mail-2" class="label-form-lp">E-mail</label><input type="email" class="campo-form-lp w-input" maxlength="256" name="E-mail" data-name="E-mail" id="E-mail-2" required>
                <label for="Telefone" class="label-form-lp">WhatsApp</label><input type="tel" class="campo-form-lp w-input" minlength="15" maxlength="15" onkeypress="MascaraTelefone(this);" name="Telefone" data-name="Telefone" id="Telefone" required>
                <label for="Tempo" class="label-form-lp">Em quanto tempo você tem interesse em comprar seu terreno?</label>
                <select id="tempo-regatas" name="tempo" data-name="tempo" class="select-field-4 w-select" required>
                  <option value="Esse mês">Esse mês</option>
                  <option value="Nos próximos 3 meses">Nos próximos 3 meses</option>
                  <option value="Entre os próximos 3 e 12 meses">Entre os próximos 3 e 12 meses</option>
                  <option value="Não tenho interesse, estou apenas pesquisando">Não tenho interesse, estou apenas pesquisando</option>
                </select>
                <div class="w-row bloco_consentimento">
                  <div class="w-col">
                    <!--<p class="texto-politica">Precisamos dos seus dados para manter contato com você e prosseguir com seu atendimento, de acordo com nossa <a href="https://mrv.com.br/institucional/pt/politica-de-privacidade" class="link-politica">Política de Privacidade</a>.</p>-->
                    <p class="texto-politica">Aceito receber via WhatsApp, ligação, e-mail e SMS, o contato da marca MRV&CO com novidades sobre este loteamento, bem como outras ações de marketing, ofertas de produto e serviços. Estou de acordo com as formas de tratamento de dados realizados pela marca MRV&CO, conforme sua <a href="https://www.mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>
                    <label class="checkbox-button-field-2 w-checkbox"><input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" value="Ok, entendi!" class="w-form-formcheckboxinput w-checkbox-input" required><span for="Proprietário" class="checkbox-button-label w-form-label" id="texto-politica">Ok, entendi!</span>
                    </label>
                  </div>
                </div>
                <input type="submit" value="falar com um consultor" data-wait="Aguarde..." class="enviar-form-lp w-button">
              </form>
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
    <!--<div class="tag-breve-lan-amento comercial"><div class="breve-lancamento"> &nbsp;&nbsp;Lançamento<br>Dias 22 e 23 de Janeiro</div></div>-->
    </div>
  </section>
<?php } ?>




<?php if ((get_the_ID() === 319)) { ?>
  <style>
    .div-text-terreno.unico {
      display: block;
    }

    .hero-internas {
      background-image: none !important;
      padding: 0px;
    }

    .tag-breve-lan-amento.comercial.dunlop {
      display: none;
    }

    .unico {
      display: block !important;
    }
  </style>
  <section id="hero-form" class="hero-landing regatas" style="background-image: linear-gradient(90deg, rgba(3, 3, 3, 0.5), rgba(49, 49, 49, 0) 57%), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php the_field('imagem_de_fundo'); ?>);">
    <div class="tag-breve-lan-amento comercial dunlop">

      <div class="text-block-47 dunlop unico" style="background-image: linear-gradient(
45deg,  #006B3F ,  #006B3F );"><span style="font-size: 14px;position: relative;    top: 13px;">TOUR VIRTUAL</span></div>
    </div>



    <div class="container-padrao">


      <div class="div-logos-hero regatas"><img src="<?php the_field('logo_hero'); ?>" width="125" alt="" class="image-13"></div>
      <div class="div-info-hero">
        <div class="w-row">
          <div class="col-text w-col w-col-6">
            <style>
              .box.reserva-regata.giardino {
                height: 250px;
                /*background-size: 350px 220px*/
              }

              #hero-form .container-padrao {
                margin-top: 100px;
              }

              .col-forms.w-col.w-col-6 {
                display: flex;
                justify-content: center;
              }


              @media screen and (max-width: 479px) {
                .box.reserva-regata.giardino {
                  height: 200px;
                  background-size: 300px 200px
                }
              }
            </style>
            <div class="box reserva-regata giardino">
              <?php $titulo_hero = get_field('titulo_hero', get_the_id()); ?>
              <h1 class="heading-lp"><strong class="destaque-lp">Compre seu lote</strong> e viva com muita qualidade de vida!</h1>
            </div>
            <!--<div class="div-tags">
              <div>
              	<?php $tags = get_field('tags', get_the_id()); ?>
                <div class="tag-hero">AMPLA ÁREA VERDE</div>
                <div class="tag-hero">LAZER E ACESSIBILIDADE</div>
                <div class="tag-hero">COMÉRCIO E SERVIÇOS</div>
              </div>
            </div>-->
          </div>
          <div class="col-forms w-col w-col-6">
            <div class="div-forms-hero">
              <h3 class="heading-21"><?= get_field('titulo_formulario', get_the_id()) ?></h3>
              <form id="interesse-loteamento-lp" name="email-form" data-name="Email Form" class="form-7">
                <input type="hidden" id="idempreendimento" name="idempreendimento" value="<?php the_field('id_loteamentos'); ?>">
                <input type="hidden" id="cidade-il" name="cidade" value="<?= $cidade_lot[0]->name ?>">
                <input type="hidden" name="loteamento" id="loteamento-il" value="<?= the_title() ?>">
                <label for="name" class="label-form-lp">Nome</label><input type="text" class="campo-form-lp w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name" required>
                <label for="E-mail-2" class="label-form-lp">E-mail</label><input type="email" class="campo-form-lp w-input" maxlength="256" name="E-mail" data-name="E-mail" id="E-mail-2" required>
                <label for="Telefone" class="label-form-lp">WhatsApp</label><input type="tel" class="campo-form-lp w-input" minlength="15" maxlength="15" onkeypress="MascaraTelefone(this);" name="Telefone" data-name="Telefone" id="Telefone" required>
                <label for="Tempo" class="label-form-lp">Em quanto tempo você tem interesse em comprar seu terreno?</label>
                <select id="tempo-regatas" name="tempo" data-name="tempo" class="select-field-4 w-select" required>
                  <option value="Esse mês">Esse mês</option>
                  <option value="Nos próximos 3 meses">Nos próximos 3 meses</option>
                  <option value="Entre os próximos 3 e 12 meses">Entre os próximos 3 e 12 meses</option>
                  <option value="Não tenho interesse, estou apenas pesquisando">Não tenho interesse, estou apenas pesquisando</option>
                </select>
                <div class="w-row bloco_consentimento">
                  <div class="w-col">
                    <!--<p class="texto-politica">Precisamos dos seus dados para manter contato com você e prosseguir com seu atendimento, de acordo com nossa <a href="https://mrv.com.br/institucional/pt/politica-de-privacidade" class="link-politica">Política de Privacidade</a>.</p>-->
                    <p class="texto-politica">Aceito receber via WhatsApp, ligação, e-mail e SMS, o contato da marca MRV&CO com novidades sobre este loteamento, bem como outras ações de marketing, ofertas de produto e serviços. Estou de acordo com as formas de tratamento de dados realizados pela marca MRV&CO, conforme sua <a href="https://www.mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>
                    <label class="checkbox-button-field-2 w-checkbox"><input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" value="Ok, entendi!" class="w-form-formcheckboxinput w-checkbox-input" required><span for="Proprietário" class="checkbox-button-label w-form-label" id="texto-politica">Ok, entendi!</span>
                    </label>
                  </div>
                </div>
                <input type="submit" value="falar com um consultor" data-wait="Aguarde..." class="enviar-form-lp w-button">
              </form>
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
    <!--<div class="tag-breve-lan-amento comercial"><div class="breve-lancamento"> &nbsp;&nbsp;Lançamento<br>Dias 22 e 23 de Janeiro</div></div>-->
    </div>
  </section>
<?php } ?>







<?php if ((get_the_ID() === 220)) { ?>
  <section id="hero-form" class="hero-landing regatas" style="background-image: linear-gradient(90deg, rgba(3, 3, 3, 0.5), rgba(49, 49, 49, 0) 57%), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php the_field('imagem_de_fundo'); ?>);">
    <div class="tag-breve-lan-amento comercial dunlop">

      <div class="text-block-47 dunlop unico" style="background-image: linear-gradient(
45deg,  #00D38D ,  #00D38D );"><span style="font-size: 14px;position: relative;    top: 13px;">PRONTO PARA CONSTRUIR</span></div>
    </div>



    <div class="container-padrao">


      <div class="div-logos-hero regatas"><img src="<?php the_field('logo_hero'); ?>" width="125" alt="" class="image-13"></div>
      <div class="div-info-hero">
        <div class="w-row">
          <div class="col-text w-col w-col-6">
            <style>
              .box.reserva-regata.giardino {
                height: 250px;
                /*background-size: 350px 220px*/
              }

              #hero-form .container-padrao {
                margin-top: 100px;
              }

              .col-forms.w-col.w-col-6 {
                display: flex;
                justify-content: center;
              }


              @media screen and (max-width: 479px) {
                .box.reserva-regata.giardino {
                  height: 200px;
                  background-size: 300px 200px
                }
              }
            </style>
            <div class="box reserva-regata giardino">
              <?php $titulo_hero = get_field('titulo_hero', get_the_id()); ?>
              <h1 class="heading-lp" style="font-size: 26px; font-weight:500; margin-top:40px">Qualidade de vida que você só encontra <span style="font-weight:600;">aqui</span></h1>
            </div>
            <!--<div class="div-tags">
              <div>
              	<?php $tags = get_field('tags', get_the_id()); ?>
                <div class="tag-hero">AMPLA ÁREA VERDE</div>
                <div class="tag-hero">LAZER E ACESSIBILIDADE</div>
                <div class="tag-hero">COMÉRCIO E SERVIÇOS</div>
              </div>
            </div>-->
          </div>
          <div class="col-forms w-col w-col-6">
            <div class="div-forms-hero">
              <h3 class="heading-21"><?= get_field('titulo_formulario', get_the_id()) ?></h3>
              <form id="interesse-loteamento-lp" name="email-form" data-name="Email Form" class="form-7">
                <input type="hidden" id="idempreendimento" name="idempreendimento" value="<?php the_field('id_loteamentos'); ?>">
                <input type="hidden" id="cidade-il" name="cidade" value="<?= $cidade_lot[0]->name ?>">
                <input type="hidden" name="loteamento" id="loteamento-il" value="<?= the_title() ?>">
                <label for="name" class="label-form-lp">Nome</label><input type="text" class="campo-form-lp w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name" required>
                <label for="E-mail-2" class="label-form-lp">E-mail</label><input type="email" class="campo-form-lp w-input" maxlength="256" name="E-mail" data-name="E-mail" id="E-mail-2" required>
                <label for="Telefone" class="label-form-lp">WhatsApp</label><input type="tel" class="campo-form-lp w-input" minlength="15" maxlength="15" onkeypress="MascaraTelefone(this);" name="Telefone" data-name="Telefone" id="Telefone" required>
                <label for="Tempo" class="label-form-lp">Em quanto tempo você tem interesse em comprar seu terreno?</label>
                <select id="tempo-regatas" name="tempo" data-name="tempo" class="select-field-4 w-select" required>
                  <option value="Esse mês">Esse mês</option>
                  <option value="Nos próximos 3 meses">Nos próximos 3 meses</option>
                  <option value="Entre os próximos 3 e 12 meses">Entre os próximos 3 e 12 meses</option>
                  <option value="Não tenho interesse, estou apenas pesquisando">Não tenho interesse, estou apenas pesquisando</option>
                </select>
                <div class="w-row bloco_consentimento">
                  <div class="w-col">
                    <!--<p class="texto-politica">Precisamos dos seus dados para manter contato com você e prosseguir com seu atendimento, de acordo com nossa <a href="https://mrv.com.br/institucional/pt/politica-de-privacidade" class="link-politica">Política de Privacidade</a>.</p>-->
                    <p class="texto-politica">Aceito receber via WhatsApp, ligação, e-mail e SMS, o contato da marca MRV&CO com novidades sobre este loteamento, bem como outras ações de marketing, ofertas de produto e serviços. Estou de acordo com as formas de tratamento de dados realizados pela marca MRV&CO, conforme sua <a href="https://www.mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>
                    <label class="checkbox-button-field-2 w-checkbox"><input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" value="Ok, entendi!" class="w-form-formcheckboxinput w-checkbox-input" required><span for="Proprietário" class="checkbox-button-label w-form-label" id="texto-politica">Ok, entendi!</span>
                    </label>
                  </div>
                </div>
                <input type="submit" value="falar com um consultor" data-wait="Aguarde..." class="enviar-form-lp w-button">
              </form>
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
    <!--<div class="tag-breve-lan-amento comercial"><div class="breve-lancamento"> &nbsp;&nbsp;Lançamento<br>Dias 22 e 23 de Janeiro</div></div>-->
    </div>
  </section>
<?php } else { ?>
  <div class="hero-internas" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.2), transparent 20%), linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php the_field('imagem_de_fundo'); ?>);">

    <div class="tag-breve-lan-amento comercial dunlop">

      <?php if ((get_the_ID() === 1278) || (get_the_ID() === 265) || (get_the_ID() === 94) || (get_the_ID() === 300) || (get_the_ID() === 279) || (get_the_ID() === 338) || (get_the_ID() === 249)) { ?>
        <style>
          .unico2 {
            display: block !important;
            background-image: linear-gradient(45deg, #fafafa, #fafafa) !important;
          }
        </style>
        <div class="text-block-47 dunlop unico2"><span style="font-size: 14px;position: relative;    top: 13px;color:#006B3F;">PRONTO PARA CONSTRUIR</span></div>
    </div>
  <?php } ?>
  <!--<div class="text-block-47 dunlop unico2" style="background-image: linear-gradient(
45deg,  #00D38D ,  #00D38D );"><span style="font-size: 14px;position: relative;    top: 13px;">PRONTO PARA CONSTRUIR</span></div>
</div>-->


  <div class="container-padrao">

    <div class="div-text-hero interna">
      <h1 class="heading internas"><strong class="bold-text"><?php the_field('destaque_hero'); ?></strong> <br><?php the_field('texto_hero'); ?></h1>
    </div>
  </div>
  <div data-w-id="9711efb0-67a7-e5db-5a84-59757eecb5d9" style="opacity:0; background-image: url(<?php the_field('logo_hero'); ?>);" class="div-selo"></div>
  </div>
<?php } ?>
<div class="infos-terreno">
  <div class="container-padrao">
    <?php $destaques = get_field('destaques_desc'); ?>
    <div class="div-infos-terreno">
      <div data-w-id="5b2e0ec8-6296-3122-3294-a25915ec3bb0" style="opacity:0" class="div-info-terreno"><img src="<?= $destaques['icone_1'] ?>" width="130" alt="Icone" class="image-4">
        <div class="text-block-8"><?= $destaques['texto_1'] ?></div>
      </div>
      <div data-w-id="4a19bfba-b099-a58b-e082-bfaf50dccdf2" style="opacity:0" class="div-info-terreno end-mobile"><img src="<?= $destaques['icone_2'] ?>" width="130" alt="Icone" class="image-4">
        <div class="text-block-8"><?= $destaques['texto_2'] ?></div>
      </div>
      <div data-w-id="45bedf70-5e9e-57cf-dcb3-a650222eb2a2" style="opacity:0" class="div-info-terreno"><img src="<?= $destaques['icone_3'] ?>" width="130" alt="Icone" class="image-4">
        <div class="text-block-8"><?= $destaques['texto_3'] ?></div>
      </div>
      <div data-w-id="f1192464-aabc-97e5-e8a8-87e07178f88d" style="opacity:0" class="div-info-terreno end"><img src="<?= $destaques['icone_4'] ?>" width="130" alt="Icone" class="image-4">
        <div class="text-block-8"><?= $destaques['texto_4'] ?></div>
      </div>
    </div>
    <div class="div-text-terreno">
      <?php the_field('texto_desc'); ?>
      <?php $blocos = get_field('blocos_desc');
      if ($blocos['bloco_1'] || $blocos['bloco_2'] || $blocos['bloco_3']) { ?>
        <div class="columns _2 w-row">
          <?php if ($blocos['bloco_1']) { ?>
            <div class="column _2 interna w-col w-col-4">
              <div class="text-block-4 _2 interna"><?= $blocos['bloco_1'] ?></div>
            </div>
          <?php }
          if ($blocos['bloco_2']) { ?>
            <div class="column _2 interna w-col w-col-4">
              <div class="text-block-4 _2 interna"><?= $blocos['bloco_2'] ?></div>
            </div>
          <?php }
          if ($blocos['bloco_3']) { ?>
            <div class="column _2 interna end w-col w-col-4">
              <div class="text-block-4 _2 interna"><?= $blocos['bloco_3'] ?></div>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
      <?php if (get_field('observacao_blocos')) { ?>
        <div class="text-block-34"><?= get_field('observacao_blocos') ?><br></div>
      <?php } ?>
      <a href="#formulario" class="button-3 w-button">FALE AGORA COM UM CORRETOR</a>
    </div>
  </div>
</div>
<div class="caracteristicas">
  <div class="container-padrao">
    <h2 class="heading-2 center"><strong class="destaque-h2">Características</strong> do Loteamento</h2>
    <div class="div-caracteristicas" style="display: flex; align-items: center !important; justify-content: center;">
      <?php if (get_field('seguranca_img_caract') && get_field('seguranca_txt_caract')) { ?>
        <div data-w-id="86641039-24a1-7300-0730-6636ef260df0" style="opacity: 1;" class="div-caracteristica">
          <div class="imagem-caracteristica" style="background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url(<?= the_field('seguranca_img_caract') ?>)">
            <h3 class="heading-7">SEGURANÇA</h3>
          </div>
          <div class="texto-caracteristica">
            <?= the_field('seguranca_txt_caract') ?>
          </div>
        </div>
      <?php } ?>
      <div data-w-id="86641039-24a1-7300-0730-6636ef260df0" style="opacity:0" class="div-caracteristica">
        <div class="imagem-caracteristica" style="background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url(<?= the_field('infra_img_caract') ?>)">
          <h3 class="heading-7">INFRAESTRUTURA</h3>
        </div>
        <div class="texto-caracteristica">
          <?= the_field('infra_txt_caract') ?>
        </div>
      </div>
      <div data-w-id="58f694a6-e2ea-5a2d-81ce-444659efc478" style="opacity:0" class="div-caracteristica">
        <div class="imagem-caracteristica _2" style="background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url(<?= the_field('lazer_img_caract') ?>)">
          <h3 class="heading-7">LAZER</h3>
        </div>
        <div class="texto-caracteristica">
          <?= the_field('lazer_txt_caract') ?>
          <?php $areaslazer = get_field('areas_de_lazer');
          if ($areaslazer) { ?>
            <a href="#" class="link-4" data-ix="open-lazer">Veja o que temos para você!</a>
          <?php } ?>
        </div>
      </div>
      <?php if (get_field('comercial_img_caract') && get_field('comercial_txt_caract')) { ?>
        <div data-w-id="48b6015e-7755-3c2e-600a-aca4e030d055" style="opacity:0" class="div-caracteristica">
          <div class="imagem-caracteristica _3" style="background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url(<?= the_field('comercial_img_caract') ?>)">
            <h3 class="heading-7">ÁREA COMERCIAL</h3>
          </div>
          <div class="texto-caracteristica">
            <?= the_field('comercial_txt_caract') ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <?php if ($areaslazer) { ?>
    <div class="div-itens-lazer" style="transition: height 300ms ease-out 0s; height: 0px;">
      <div class="div-close" data-ix="close-lazer">
        <div class="text-block-13">x</div>
      </div>
      <div class="div-elementos _1">
        <?php foreach ($areaslazer as $area) : ?>
          <div class="div-elemento-lazer"><img src="<?= get_stylesheet_directory_uri() ?>/images/icons_lazer-<?= $area['value'] ?>.png" width="80" alt="Icone">
            <div class="text-block-14"><?= $area['label']; ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  <?php } ?>
</div>
<?php if ((get_the_ID() === 354)) { ?>
  <style>
    .w-form-formradioinput--inputType-custom.w--redirected-focus {
      box-shadow: 0 0 3px 1px #3898ec
    }

    .w-form-formradioinput--inputType-custom.w--redirected-checked {
      border-width: 4px;
      border-color: #3898ec
    }

    .w-embed-youtubevideo {
      width: 100%;
      position: relative;
      padding-bottom: 0;
      padding-left: 0;
      padding-right: 0;
      background-image: url(https://d3e54v103j8qbb.cloudfront.net/static/youtube-placeholder.2b05e7d68d.svg);
      background-size: cover;
      background-position: 50% 50%
    }

    .w-embed-youtubevideo:empty {
      min-height: 75px;
      padding-bottom: 56.25%
    }

    .w-layout-grid {
      display: -ms-grid;
      display: grid;
      grid-auto-columns: 1fr;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
      grid-row-gap: 16px;
      grid-column-gap: 16px
    }

    .w-checkbox {
      display: block;
      margin-bottom: 5px;
      padding-left: 20px
    }

    .w-checkbox::after,
    .w-checkbox::before {
      content: " ";
      display: table;
      -ms-grid-column-span: 1;
      grid-column-end: 2;
      -ms-grid-column: 1;
      grid-column-start: 1;
      -ms-grid-row-span: 1;
      grid-row-end: 2;
      -ms-grid-row: 1;
      grid-row-start: 1
    }

    .w-checkbox::after {
      clear: both
    }

    .w-checkbox-input {
      float: left;
      margin: 4px 0 0-20px;
      line-height: normal
    }

    .w-checkbox-input--inputType-custom {
      border-width: 1px;
      border-color: #ccc;
      border-style: solid;
      width: 12px;
      height: 12px;
      border-bottom-left-radius: 2px;
      border-bottom-right-radius: 2px;
      border-top-left-radius: 2px;
      border-top-right-radius: 2px
    }

    .w-checkbox-input--inputType-custom.w--redirected-checked {
      background-color: #3898ec;
      border-color: #3898ec;
      background-image: url(https://d3e54v103j8qbb.cloudfront.net/static/custom-checkbox-checkmark.589d534424.svg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .w-checkbox-input--inputType-custom.w--redirected-focus {
      box-shadow: 0 0 3px 1px #3898ec
    }

    .body {
      font-family: Poppins, sans-serif
    }

    .heroslider {
      position: relative;
      height: 800px;
      padding-top: 100px
    }

    .slider {
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      height: 100%
    }

    .left-arrow,
    .right-arrow {
      display: none
    }

    .slide-nav {
      font-size: 10px
    }

    .container-padrao {
      position: relative;
      height: 100%;
      max-width: 1280px;
      margin-right: auto;
      margin-left: auto;
      padding-right: 20px;
      padding-left: 20px;
      cursor: pointer
    }

    .container-padrao.reduzido {
      max-width: 1000px
    }

    .container-padrao.reduzido.monte-mor-lan {
      max-width: 1280px;
      padding-top: 40px;
      padding-bottom: 40px
    }

    .container-padrao.montemor {
      text-align: center
    }

    .container-padrao.monte-mor-mobile {
      right: auto;
      text-align: center
    }

    .container-padrao.sao-roque {
      position: relative;
      text-align: center;
      white-space: normal;
      mix-blend-mode: normal
    }

    .container-padrao.sem-padding {
      padding-right: 0;
      padding-left: 0
    }

    .navbar {
      position: fixed;
      left: 0;
      top: 0;
      right: 0;
      bottom: auto;
      height: 100px;
      border-bottom: 1px solid #ff8b22;
      background-color: #fff
    }

    .brand,
    .nav-menu {
      margin-top: 30px
    }

    .nav-menu {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .button {
      margin-top: 10px;
      padding-right: 20px;
      padding-left: 20px;
      border-style: solid;
      border-width: 1px;
      border-color: #3898ec;
      border-radius: 50px;
      background-color: transparent;
      color: #3898ec;
      text-transform: none
    }

    .button,
    .dropdown-toggle {
      display: none
    }

    .div-text-hero {
      position: relative;
      top: 50%;
      z-index: 5;
      width: 80%;
      margin-right: auto;
      margin-left: auto;
      -webkit-transform: translate(0, -70%);
      -ms-transform: translate(0, -70%);
      transform: translate(0, -70%);
      text-align: center
    }

    .div-text-hero.interna {
      width: 80%
    }

    .div-text-hero.interna.jardim-bem-viver {
      width: 100%
    }

    .div-text-hero.interna.bem-campos,
    .div-text-hero.interna.girassois,
    .div-text-hero.interna.tulipas {
      width: 90%
    }

    .div-text-hero.smart-urba.dunlop,
    .div-text-hero.venda {
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%)
    }

    .div-text-hero.venda {
      text-align: left
    }

    .div-text-hero.area-cliente,
    .div-text-hero.home {
      width: 90%
    }

    .div-text-hero.smart-urba {
      width: 40%;
      margin-left: 0;
      -webkit-transform: translate(0, -45%);
      -ms-transform: translate(0, -45%);
      transform: translate(0, -45%);
      text-align: left
    }

    .div-text-hero.smart-urba.dunlop {
      width: 40%;
      float: left
    }

    .div-text-hero.smart-urba.minha-casa {
      top: 0;
      z-index: 0;
      width: 50%;
      float: left;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .div-text-hero.div-title-sobre-a-urba {
      position: static;
      margin-top: 60px;
      margin-bottom: 60px;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .heading {
      margin-top: 0;
      margin-bottom: 0;
      color: #fff;
      font-size: 40px;
      line-height: 1.3;
      font-weight: 500;
      text-align: center;
      letter-spacing: .3px
    }

    .heading.sobre,
    .heading.venda {
      color: #079d56;
      font-weight: 300;
      text-align: center
    }

    .heading.sobre.fale-com-ri {
      font-size: 28px;
      text-align: right
    }

    .heading.venda {
      text-align: left
    }

    .heading.lojas {
      font-weight: 400
    }

    .heading.area-cliente {
      width: 50%;
      color: #079d56;
      font-size: 32px;
      line-height: 1.5;
      font-weight: 300;
      text-align: left
    }

    .heading.home {
      line-height: 1.6
    }

    .slide {
      padding-top: 100px;
      background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, .2)), color-stop(20%, transparent)), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/slider-empreendimento-01.jpg);
      background-image: linear-gradient(0deg, rgba(0, 0, 0, .2), transparent 20%), linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/slider-empreendimento-01.jpg);
      background-position: 0 0, 0 0, 0 0;
      background-size: auto, auto, cover
    }

    .div-info-empreendimento {
      position: absolute;
      left: 0;
      top: auto;
      right: auto;
      bottom: 0;
      width: 300px;
      height: 100px;
      margin-left: 20px;
      padding-bottom: 20px;
      padding-left: 5px;
      border-left: 2px solid #ff8b22;
      opacity: 1;
      color: #fff
    }

    .text-block {
      margin-bottom: 0;
      padding-bottom: 0;
      padding-left: 0;
      color: #fff;
      font-size: 16px;
      font-weight: 500
    }

    .image {
      margin-right: 5px;
      float: left
    }

    .text-block-2 {
      width: 80%;
      margin-top: 3px;
      float: left;
      color: #ff8b22
    }

    .slide-2,
    .slide-3 {
      padding-top: 100px;
      background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, .2)), color-stop(20%, transparent)), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/slider-empreendimento-02.jpg);
      background-image: linear-gradient(0deg, rgba(0, 0, 0, .2), transparent 20%), linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/slider-empreendimento-02.jpg);
      background-position: 0 0, 0 0, 50% 50%;
      background-size: auto, auto, cover;
      background-repeat: repeat, repeat, no-repeat
    }

    .slide-3 {
      background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, .2)), color-stop(20%, transparent)), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/slider-empreendimento-03.jpg);
      background-image: linear-gradient(0deg, rgba(0, 0, 0, .2), transparent 20%), linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/slider-empreendimento-03.jpg)
    }

    .loteamentos {
      padding-top: 90px;
      padding-bottom: 80px
    }

    .loteamentos.interna {
      padding-top: 220px
    }

    .heading-2 {
      width: 80%;
      margin-top: 0;
      margin-right: auto;
      margin-left: auto;
      color: #6e6e6e;
      font-size: 28px;
      line-height: 1.4;
      font-weight: 200;
      text-align: center;
      text-transform: none
    }

    .heading-2.branco {
      width: 100%;
      color: #fff;
      font-weight: 300
    }

    .heading-2.galeria {
      width: 100%;
      margin: 0 0 20px;
      color: #fff;
      text-align: left
    }

    .heading-2.galeria.monte-mor {
      width: 60%
    }

    .heading-2.localiz {
      width: 100%;
      margin-bottom: 20px;
      color: #079d56;
      text-align: left
    }

    .heading-2.localiz.elvira {
      color: #ff8b22
    }

    .heading-2.localiz.monte-mor,
    .heading-2.localiz.residencial-progresso,
    .heading-2.localiz.sao-roque {
      margin-right: 1px;
      color: #793f98
    }

    .heading-2.localiz.sao-roque.mobile {
      position: static;
      color: #ec8515
    }

    .heading-2.localiz.residencial-progresso.mobile {
      position: static;
      color: #433868
    }

    .heading-2.localiz.parque-vitoria {
      color: #793f98;
      text-shadow: none
    }

    .heading-2.forms {
      width: 100%
    }

    .heading-2.estados {
      width: 100%;
      margin-top: 100px;
      margin-bottom: 40px;
      font-size: 26px;
      text-align: left
    }

    .heading-2.area-cliente {
      width: 100%;
      padding-top: 60px;
      color: #079d56;
      font-size: 26px;
      text-align: left
    }

    .heading-2.area-cliente.vizinho {
      text-align: center
    }

    .heading-2._2 {
      width: 60%;
      font-size: 26px
    }

    .heading-2.hblog {
      width: 70%
    }

    .heading-2.passo {
      color: #079d56;
      font-weight: 300
    }

    .heading-2.center.white {
      color: #fff;
      font-weight: 300
    }

    .heading-2.center.white.call {
      font-weight: 400
    }

    .heading-2.center.margin-top {
      margin-top: 24px
    }

    .heading-2.side {
      width: 100%;
      margin-bottom: 20px;
      text-align: left
    }

    .heading-2.parque-vitoria {
      width: auto;
      color: #6e6e6e;
      text-shadow: none
    }

    .heading-2.branco-mm-lan,
    .paragraph {
      width: 100%;
      color: #fff;
      font-weight: 300
    }

    .paragraph {
      width: 65%;
      margin-top: 20px;
      margin-right: auto;
      margin-left: auto;
      color: #ff8b22;
      font-size: 16px;
      line-height: 1.6;
      text-align: center;
      letter-spacing: .3px
    }

    .paragraph.home {
      width: 55%
    }

    .div-empreendimentos {
      position: relative;
      z-index: 8;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 40px;
      margin-bottom: 20px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-empreendimento {
      position: relative;
      overflow: hidden;
      width: 350px;
      height: 400px;
      margin-right: 15px;
      margin-left: 15px;
      border-radius: 5px;
      box-shadow: 0 1px 10px -3px rgba(0, 0, 0, .3);
      cursor: pointer
    }

    .div-empreendimento.portal-das-aguas {
      background-image: url(../images/portal-das-aguas.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .div-empreendimento.giardino-bianco,
    .div-empreendimento.jardim-bem-viver,
    .div-empreendimento.reserva-macauba {
      background-image: url(../images/giardino-bianco.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .div-empreendimento.jardim-bem-viver,
    .div-empreendimento.reserva-macauba {
      background-image: url(../images/reserva-macauba.jpg)
    }

    .div-empreendimento.jardim-bem-viver {
      background-image: url(../images/jardim-bem-viver.jpg)
    }

    .div-empreendimento.jardim-dos-girassois,
    .div-empreendimento.jardins-de-campos {
      background-image: url(../images/jardim-dos-girassois.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .div-empreendimento.jardins-de-campos {
      background-image: url(../images/jardins-de-campos.jpg)
    }

    .div-empreendimento.bem-viver-campos,
    .div-empreendimento.jardim-das-tulipas,
    .div-empreendimento.parque-atlanta {
      background-image: url(../images/jardim-das-tulipas.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .div-empreendimento.bem-viver-campos,
    .div-empreendimento.parque-atlanta {
      background-image: url(../images/bem-viver-campos.jpg)
    }

    .div-empreendimento.parque-atlanta {
      background-image: url(../images/parque-atlanta.jpg)
    }

    .div-info {
      position: absolute;
      left: 0;
      top: auto;
      right: 0;
      bottom: 0;
      overflow: hidden;
      height: 90px;
      padding: 20px 20px 10px;
      background-color: rgba(255, 255, 255, .95)
    }

    .heading-3 {
      margin-top: 0;
      margin-bottom: 5px;
      color: #006b3f;
      font-weight: 500
    }

    .image-2 {
      float: left
    }

    .text-block-3 {
      margin-left: 10px;
      float: left;
      color: #079d56
    }

    .text-block-3._2 {
      margin-left: 0;
      text-transform: capitalize
    }

    .text-block-3.roxo {
      margin-left: 0;
      color: #079d56
    }

    .button-2,
    .info {
      margin-bottom: 10px
    }

    .info {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .button-2 {
      margin-top: 10px;
      padding-right: 20px;
      padding-left: 20px;
      float: left;
      clear: left;
      border-style: solid;
      border-width: 1px;
      border-color: #ff8b22;
      border-radius: 20px;
      background-color: #ff8b22;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #fff
    }

    .button-2._2:hover,
    .button-2:hover {
      background-color: transparent;
      color: #ff8b22
    }

    .button-2._2 {
      padding-right: 35px;
      padding-left: 35px;
      float: none;
      clear: none;
      border-color: #ac41d8;
      background-color: #ac41d8
    }

    .button-2._2:hover {
      color: #ac41d8
    }

    .section-vantagens {
      height: 250px;
      background-color: #006b3f
    }

    .columns {
      position: relative;
      top: 50%;
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%)
    }

    .columns._2,
    .columns.itapeva {
      position: static;
      margin-top: 40px;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .columns._2.regatas,
    .columns.itapeva.regatas {
      display: none
    }

    .columns.itapeva {
      display: none
    }

    .text-block-4 {
      color: #fff;
      font-size: 26px;
      line-height: 1.1;
      font-weight: 300;
      text-align: center
    }

    .text-block-4._2 {
      color: #006b3f;
      font-size: 20px
    }

    .text-block-4._2.interna {
      color: #006b3f
    }

    .text-block-4._2.interna.elvira,
    .text-block-4._2.interna.progresso {
      width: 100%;
      margin-right: 0;
      margin-left: 0;
      padding: 28px 20px;
      color: #433868
    }

    .text-block-4._2.interna.elvira:hover,
    .text-block-4._2.interna.progresso:hover {
      background-color: #433868;
      color: #fff
    }

    .destaque {
      font-size: 36px;
      font-weight: 500
    }

    .column {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 100px;
      padding-right: 20px;
      padding-left: 20px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-right: 2px solid #ff8b22
    }

    .column.end {
      border-right-style: none
    }

    .column._2 {
      border-right-color: #006b3f;
      background-color: #82ea5b
    }

    .column._2.interna {
      border-right-color: #fafafa;
      background-color: #ebebeb;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in
    }

    .column._2.interna:hover {
      background-color: #ff8b22
    }

    .column._2.interna.end.residencial-progresso:hover,
    .coluna-mm-lan._2.interna.end.residencial-progresso:hover {
      background-color: #433868
    }

    .column._2.interna.dunlop {
      display: none;
      border-left: 3px solid #fafafa;
      border-right-width: 3px;
      border-radius: 10px;
      background-color: #82ea5b
    }

    .column._2.interna.elvira,
    .column._2.interna.residencial-progresso {
      padding-right: 0;
      padding-left: 0;
      color: #fff
    }

    .column._2.interna.elvira:hover,
    .column._2.interna.residencial-progresso:hover {
      background-color: #793f98
    }

    .bairros-planejados {
      padding-top: 80px;
      padding-bottom: 80px;
      background-image: url(../images/arvore.jpg), url(../images/pai-filho.jpg);
      background-position: 100% 100%, 0 100%;
      background-size: 400px, 400px;
      background-repeat: no-repeat, no-repeat;
      background-attachment: fixed, fixed
    }

    .div-pilar,
    .div-pilares {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-pilares {
      width: 100%;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .div-pilar {
      position: relative;
      width: 250px;
      min-height: 265px;
      margin-right: 10px;
      margin-left: 10px;
      padding: 30px 20px 20px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      border-radius: 5px;
      background-color: rgba(255, 255, 255, .95);
      box-shadow: 0 1px 7px -3px rgba(0, 0, 0, .5)
    }

    .text-block-5 {
      color: #006b3f;
      font-size: 16px;
      line-height: 1.2;
      font-weight: 600;
      text-align: center
    }

    .image-3 {
      margin-bottom: 30px
    }

    .formas-pagamento {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #fafafa
    }

    .text-block-6 {
      margin-top: 60px;
      color: #ff8b22;
      text-align: center
    }

    .cta {
      height: 350px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .5))), url(../images/cta_6.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../images/cta_6.jpg);
      background-position: 0 0, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
      background-attachment: scroll, fixed
    }

    .div-info-cta {
      position: relative;
      top: 50%;
      width: 70%;
      margin-right: auto;
      margin-left: auto;
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%);
      text-align: center
    }

    .heading-4 {
      margin-top: 0;
      color: #fff;
      line-height: 1.3;
      font-weight: 200;
      text-align: center
    }

    .button-3 {
      margin-top: 20px;
      padding-right: 25px;
      padding-left: 25px;
      border-style: solid;
      border-width: 1.5px;
      border-color: #ac41d8;
      border-radius: 20px;
      background-color: #ac41d8;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #fff;
      font-size: 16px;
      font-weight: 400;
      text-transform: lowercase
    }

    .button-3:hover {
      border-color: #dd89ff;
      background-color: transparent;
      color: #dd89ff;
      font-weight: 400
    }

    .button-3.galeria {
      display: none;
      padding-right: 40px;
      padding-left: 40px;
      border-style: solid;
      border-color: #82ea5b;
      background-color: #82ea5b;
      color: #006b3f
    }

    .button-3.galeria:hover {
      background-color: transparent;
      color: #82ea5b
    }

    .button-3.cond {
      margin-top: 50px
    }

    .button-3.cond.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-3.cond.regatas:hover,
    .button-3.itapeva.regatas:hover {
      border-style: none;
      background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
      -webkit-transform: scale(1.03);
      -ms-transform: scale(1.03);
      transform: scale(1.03);
      color: #fff
    }

    .button-3.elvira,
    .button-3.itapeva {
      margin-top: 10px;
      border-color: #f7287c;
      border-radius: 5px;
      background-color: #f7287c;
      text-transform: uppercase
    }

    .button-3.itapeva:hover {
      background-color: transparent;
      color: #f7287c
    }

    .button-3.itapeva.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-3.itapeva.bot-o-hover-branco:hover {
      border-color: #fff;
      color: #fff
    }

    .button-3.elvira:hover {
      background-color: transparent;
      color: #f7287c
    }

    .button-3.elvira.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-3.elvira.regatas:hover {
      border-style: none;
      background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
      -webkit-transform: scale(1.03);
      -ms-transform: scale(1.03);
      transform: scale(1.03);
      color: #fff
    }

    .button-3.elvira.bot-o-hover-branco {
      border-color: #ff8b22;
      background-color: #ff8b22
    }

    .button-3.elvira.bot-o-hover-branco:hover {
      border-color: #82ea5b;
      background-color: #82ea5b;
      color: #006b3f
    }

    .blog {
      padding-top: 80px;
      padding-bottom: 40px
    }

    .ultimos-posts {
      position: relative;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 60px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .div-artigo {
      position: relative;
      overflow: hidden;
      width: 350px;
      height: 450px;
      margin-right: 15px;
      margin-left: 15px;
      border-radius: 10px;
      box-shadow: 0 1px 10px -4px rgba(0, 0, 0, .4)
    }

    .imagem-blog {
      height: 200px;
      background-image: url(../images/blog1.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .imagem-blog._2 {
      background-image: url(../images/blog2.jpg)
    }

    .imagem-blog._3 {
      background-image: url(../images/blog3.jpg)
    }

    .heading-5,
    .paragraph-7 {
      margin-right: 10px;
      margin-left: 10px
    }

    .heading-5 {
      margin-bottom: 15px;
      color: #006b3f;
      font-size: 18px;
      line-height: 1.3;
      font-weight: 500
    }

    .paragraph-7 {
      margin-top: 0;
      color: #565656;
      line-height: 1.7;
      font-weight: 300
    }

    .button-4,
    .text-block-7 {
      position: absolute;
      top: auto;
      bottom: 0;
      margin-bottom: 10px
    }

    .text-block-7 {
      left: 0;
      right: auto;
      display: block;
      margin-left: 10px;
      color: #079d56;
      font-size: 12px
    }

    .button-4 {
      left: auto;
      right: 0;
      width: 125px;
      margin-right: 10px;
      padding-top: 8px;
      padding-bottom: 8px;
      border-style: solid;
      border-width: 1px;
      border-color: #ff8b22;
      border-radius: 20px;
      background-color: transparent;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #ff8b22;
      font-size: 16px;
      text-align: center
    }

    .button-4:hover {
      background-color: #ff8b22;
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05);
      color: #fff
    }

    .faq {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #f0f0f0
    }

    .recurso {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      overflow: hidden;
      width: 100%;
      height: 100%;
      margin-right: auto;
      margin-left: auto;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      text-align: center
    }

    .recurso._2 {
      height: 0%
    }

    .recurso,
    .recurso._3 {
      -webkit-box-align: stretch;
      -webkit-align-items: stretch;
      -ms-flex-align: stretch;
      align-items: stretch
    }

    .div-seta {
      width: 12px;
      height: 12px;
      margin-right: 10px;
      float: right;
      border-right: 2px solid #006b3f;
      border-bottom: 2px solid #079d56;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg)
    }

    .div-questoes {
      position: relative;
      margin-top: 60px
    }

    .div-questao {
      height: auto;
      padding: 15px 10px 10px;
      border-style: none;
      border-width: 2px;
      border-color: #f79c1b;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 2px 10px -5px rgba(0, 0, 0, .3);
      -webkit-transition: all 250ms ease;
      transition: all 250ms ease;
      cursor: pointer
    }

    .div-questao:hover {
      -webkit-transform: scale(1.01);
      -ms-transform: scale(1.01);
      transform: scale(1.01)
    }

    .div-questao.como {
      margin-bottom: 10px
    }

    .div-questao.invest {
      margin-bottom: 20px;
      box-shadow: 0 5px 12px -5px rgba(255, 139, 34, .7)
    }

    .div-questao.resposta {
      padding-top: 8px;
      padding-bottom: 8px;
      padding-left: 8px
    }

    .div-resposta {
      overflow: hidden;
      height: 0
    }

    .row {
      margin-bottom: 20px
    }

    .paragraph-14 {
      color: #565656;
      line-height: 1.8;
      font-weight: 400;
      text-align: left
    }

    .div-duvida {
      margin-bottom: 5px
    }

    .duvida {
      width: 90%;
      float: left;
      color: #079d56;
      font-size: 16px;
      line-height: 1.5;
      font-weight: 500
    }

    .column-20,
    .column-7 {
      padding-right: 5px;
      padding-left: 5px
    }

    .rodape {
      position: relative;
      z-index: 0;
      height: 250px;
      border-top: 0 solid #ff8b22;
      background-color: #006b3f
    }

    .column-21,
    .columns-2 {
      height: 100%
    }

    .column-21 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .column-21._2 {
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .div-marca {
      width: 200px;
      height: 60px;
      background-image: url(https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg);
      background-position: 50% 50%;
      background-size: 125px
    }

    .div-marca.rodape {
      width: auto;
      height: auto;
      border-top-style: none;
      background-color: transparent;
      background-image: none
    }

    .footer-social {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      float: right;
      -webkit-box-pack: end;
      -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
      justify-content: flex-end
    }

    .link-social {
      display: block;
      width: auto;
      height: auto;
      margin-right: 15px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-mapa-site {
      width: 100%;
      height: 100%
    }

    .column-22,
    .columns-3 {
      height: 100%
    }

    .column-22 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .link {
      margin-bottom: 10px;
      margin-left: 40px;
      color: #e7e7e7;
      text-decoration: none
    }

    .link:hover {
      color: #fff
    }

    .link.w--current {
      color: #d8d8d8;
      text-decoration: none
    }

    .contato-imediato {
      position: fixed;
      left: auto;
      top: 0;
      right: 0;
      bottom: 0;
      z-index: 5;
      display: block;
      width: 100px;
      height: 100vh;
      padding-top: 100px;
      padding-right: 20px;
      padding-left: 20px
    }

    .div-forms {
      position: relative;
      z-index: 1;
      overflow: hidden;
      height: 0;
      margin-top: 20px;
      padding-right: 15px;
      padding-left: 15px;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 4px 12px -6px #000
    }

    .div-forms.interna {
      position: static;
      overflow: visible;
      height: auto;
      margin-top: 0;
      padding: 40px;
      border-radius: 5px
    }

    .div-forms.interna.regatas,
    .div-forms.interna.smarturba {
      width: 80%;
      margin-right: auto;
      margin-left: auto
    }

    .div-forms.interna.smarturba {
      margin-top: 40px
    }

    .heading-6 {
      margin-top: 40px;
      color: #006b3f;
      font-weight: 500;
      text-align: center
    }

    .paragraph-15 {
      color: #ff8b22;
      text-align: center
    }

    .paragraph-15._2 {
      color: #6e6e6e
    }

    .form {
      width: 90%;
      margin-top: 20px;
      margin-right: auto;
      margin-left: auto;
      text-align: center
    }

    .text-field {
      margin-bottom: 10px;
      border-style: solid;
      border-width: 1px;
      border-color: #079d56;
      border-radius: 20px
    }

    .text-field._2 {
      border-radius: 5px
    }

    .tipo-contato {
      position: relative;
      display: block;
      height: 40px
    }

    .tipo-contato.hidden {
      display: none
    }

    .radio-button-field {
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      margin-bottom: 0
    }

    .radio-button {
      opacity: 0
    }

    .resposta1 {
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      padding-top: 8px;
      border-style: solid;
      border-width: 1px;
      border-color: #079d56;
      border-radius: 50px;
      font-family: Ubuntu, Helvetica, sans-serif;
      color: #079d56;
      font-size: 14px;
      font-weight: 400;
      text-align: center;
      cursor: pointer
    }

    .resposta1:hover {
      background-color: #079d56;
      color: #fff;
      font-weight: 400
    }

    .column-23 {
      padding-right: 5px;
      padding-left: 0
    }

    .column-24 {
      padding-right: 0;
      padding-left: 5px
    }

    .columns-4 {
      margin-bottom: 10px
    }

    .submit-button {
      display: none;
      margin-top: 15px;
      padding: 10px 65px 8px;
      border-style: solid;
      border-width: 1px;
      border-color: #ff8b22;
      border-radius: 20px;
      background-color: #ff8b22;
      text-transform: uppercase
    }

    .submit-button:hover {
      background-color: transparent;
      color: #ff8b22
    }

    .div-botao-contato,
    .div-close {
      position: absolute;
      left: auto;
      right: 0;
      cursor: pointer
    }

    .div-botao-contato {
      top: auto;
      bottom: 0;
      width: 100px;
      height: 100px;
      margin-right: 20px;
      margin-bottom: 50px;
      border-radius: 100px;
      background-color: #ac41d8;
      background-image: url(../images/contact_rapido.png);
      background-position: 50% 50%;
      background-size: 100px 100px;
      box-shadow: 0 7px 15px -6px rgba(0, 0, 0, .4)
    }

    .div-close {
      top: 0;
      bottom: auto;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 30px;
      height: 30px;
      margin-top: 10px;
      margin-right: 10px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 20px;
      background-color: #fff;
      box-shadow: 0 1px 6px -3px rgba(0, 0, 0, .5);
      color: #ac41d8;
      font-size: 16px;
      font-weight: 300
    }

    .hero-internas {
      position: relative;
      height: 800px;
      padding-top: 100px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, .35)), to(rgba(255, 255, 255, .35))), url(https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg);
      background-image: linear-gradient(180deg, rgba(255, 255, 255, .35), rgba(255, 255, 255, .35)), url(https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg);
      background-position: 0 0, 0 0;
      background-size: auto, 125px
    }

    .hero-internas.giardino,
    .hero-internas.portal-das-aguas {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v3_1.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v3_1.jpg);
      background-position: 0 0, 50%0;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .hero-internas.giardino.girass-is {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v2_1.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v2_1.jpg);
      background-position: 0 0, 50% 50%
    }

    .hero-internas.giardino.tulipas {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero-familia-01.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero-familia-01.jpg);
      background-position: 0 0, 50% 50%
    }

    .hero-internas.giardino.atlanta {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .45)), to(rgba(0, 0, 0, .45))), url(../images/hero-familia-02.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .45), rgba(0, 0, 0, .45)), url(../images/hero-familia-02.jpg);
      background-position: 0 0, 50% 50%
    }

    .hero-internas.portal-das-aguas {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero.jpg)
    }

    .hero-internas.sobre {
      height: auto;
      padding-top: 0;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, .35)), to(rgba(255, 255, 255, .35)));
      background-image: linear-gradient(180deg, rgba(255, 255, 255, .35), rgba(255, 255, 255, .35))
    }

    .hero-internas.sobre.sobre-a-urba {
      padding-top: 80px;
      padding-bottom: 60px
    }

    .hero-internas.venda {
      height: 640px;
      background-image: url(../images/hero-venda.jpg);
      background-position: 125% 100%;
      background-size: auto 600px;
      background-repeat: no-repeat
    }

    .hero-internas.nossas-lojas {
      height: 640px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v3.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v3.jpg);
      background-position: 0 0, 50%0;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .hero-internas.area-do-cliente {
      height: 640px;
      background-image: url(../images/hero_1.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .hero-internas.reserva-macauba {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/hero-familia-05.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/hero-familia-05.jpg);
      background-position: 0 0, 50%0;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .hero-internas.reserva-macauba.jardim-bem-viver {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero-familia-04.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero-familia-04.jpg);
      background-position: 0 0, 50%0
    }

    .hero-internas.reserva-macauba.campos {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v2_2.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v2_2.jpg);
      background-position: 0 0, 50% 50%
    }

    .hero-internas.reserva-macauba.bem-campos {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero-familia-03.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero-familia-03.jpg);
      background-position: 0 0, 50% 50%
    }

    .hero-internas.investidores {
      height: 600px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/urba-nova-hero-03.jpg);
      background-image: linear-gradient(180deg, transparent, transparent), url(../images/urba-nova-hero-03.jpg);
      background-position: 0 0, 100% 50%;
      background-size: auto, contain;
      background-repeat: repeat, no-repeat
    }

    .hero-internas.regatas {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .15)), to(rgba(0, 0, 0, .15))), url(../images/hero_2.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .15), rgba(0, 0, 0, .15)), url(../images/hero_2.jpg);
      background-position: 0 0, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .hero-internas.dunlop {
      height: 700px;
      margin-top: 100px;
      padding-top: 0;
      background-image: -webkit-gradient(linear, right top, left top, from(rgba(0, 0, 0, .75)), color-stop(40%, transparent)), -webkit-gradient(linear, left top, right top, color-stop(15%, rgba(0, 0, 0, .75)), color-stop(50%, rgba(15, 15, 15, 0))), url(../images/hero_5.jpg);
      background-image: linear-gradient(270deg, rgba(0, 0, 0, .75), transparent 40%), linear-gradient(90deg, rgba(0, 0, 0, .75) 15%, rgba(15, 15, 15, 0) 50%), url(../images/hero_5.jpg);
      background-position: 0 0, 0 0, 100% 50%;
      background-size: auto, auto, cover;
      background-repeat: repeat, repeat, no-repeat;
      background-attachment: scroll, scroll, scroll
    }

    .hero-internas.minha-casa {
      height: auto;
      margin-top: 100px;
      padding-top: 60px;
      padding-bottom: 335px;
      background-image: -webkit-gradient(linear, left bottom, left top, color-stop(40%, #78368c), to(#a84d97));
      background-image: linear-gradient(0deg, #78368c 40%, #a84d97)
    }

    .hero-internas.vila-profeta {
      height: 700px;
      margin-top: 100px;
      padding-top: 0;
      background-image: linear-gradient(114deg, #000, rgba(255, 255, 255, 0) 49%), linear-gradient(270deg, rgba(0, 0, 0, .5), transparent 26%), url(../images/bg-hero-vila-profeta.png);
      background-position: 0 0, 0 0, -1% 50%;
      background-size: auto, auto, cover;
      background-repeat: repeat, repeat, no-repeat;
      background-attachment: scroll, scroll, scroll
    }

    .hero-internas.itapeva {
      height: 800px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .2)), to(rgba(0, 0, 0, .2))), url(../images/hero-itapeva.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(../images/hero-itapeva.jpg);
      background-position: 0 0, 0 50%;
      background-size: auto, cover;
      background-repeat: repeat, repeat
    }

    .hero-internas.elvira,
    .hero-internas.montemor,
    .hero-internas.sao-roque {
      height: 800px;
      background-color: #fff;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .2)), to(rgba(0, 0, 0, .2))), url(../images/Depositphotos_158690232_L.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(../images/Depositphotos_158690232_L.jpg);
      background-position: 0 0, 50% 50%;
      background-size: auto, auto;
      background-repeat: repeat, no-repeat
    }

    .hero-internas.montemor,
    .hero-internas.sao-roque {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .2)), to(rgba(0, 0, 0, .2))), url(../images/Depositphotos_249018672_XL.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(../images/Depositphotos_249018672_XL.jpg);
      background-position: 0 0, 100% 50%;
      background-size: auto, cover
    }

    .hero-internas.sao-roque {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .2)), to(rgba(0, 0, 0, .2))), url(../images/Depositphotos_11892194_XL.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(../images/Depositphotos_11892194_XL.jpg)
    }

    .hero-internas.parquevitoria,
    .hero-internas.residencial-progresso {
      height: 800px;
      background-color: #fff;
      background-position: 0 0, 50% 50%;
      background-size: auto, cover
    }

    .hero-internas.residencial-progresso {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .27)), to(rgba(0, 0, 0, .27))), url(../images/shutterstock_723020353-copiar.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .27), rgba(0, 0, 0, .27)), url(../images/shutterstock_723020353-copiar.jpg);
      background-repeat: repeat, no-repeat
    }

    .hero-internas.parquevitoria {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .27)), to(rgba(0, 0, 0, .27))), url(../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .27), rgba(0, 0, 0, .27)), url(../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg)
    }

    .hero-internas.monte-mor-lan {
      position: static;
      width: 100%;
      height: 800px;
      margin-top: 0;
      background-color: #fff;
      background-image: linear-gradient(264deg, rgba(121, 63, 152, .26), rgba(121, 63, 152, .47)), linear-gradient(180deg, rgba(0, 0, 0, .51), rgba(0, 0, 0, .51)), url(../images/URBA_RESERVA_MONTE_MOR_ACESSOS.jpg);
      background-position: 0 0, 0 0, 100% 50%;
      background-size: auto, auto, cover;
      background-repeat: repeat, repeat, no-repeat
    }

    .bold-text {
      padding-right: 15px;
      padding-left: 15px;
      background-color: #ffb719;
      color: #fff;
      font-size: 26px;
      font-weight: 300
    }

    .bold-text.giardino {
      background-color: #ac41d8
    }

    .bold-text.reserva-macauba {
      background-color: #82ea5b;
      color: #006b3f
    }

    .bold-text.jardim-bem-viver {
      background-color: #079d56
    }

    .bold-text.girassois {
      background-color: #ffb719;
      color: #424242
    }

    .bold-text.campos {
      background-color: #ff8b22
    }

    .bold-text.atlanta {
      background-color: #82ea5b;
      color: #006b3f
    }

    .div-selo {
      position: absolute;
      left: 0;
      top: auto;
      right: auto;
      bottom: 0;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 150px;
      height: 150px;
      margin-bottom: 40px;
      margin-left: 60px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 5px;
      background-image: url(../images/selo.png);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .div-selo.giardino {
      background-color: #fff;
      background-image: url(../images/selo_2.png)
    }

    .div-selo.reserva-macauba {
      background-color: #fff;
      background-image: url(../images/selo_3.png)
    }

    .div-selo.jardim-bem-viver {
      height: 190px;
      background-image: url(../images/selo_1.png);
      background-size: contain
    }

    .div-selo.campos,
    .div-selo.girassois {
      background-color: #fff;
      background-image: url(../images/selo_4.png)
    }

    .div-selo.campos {
      border-radius: 30px;
      background-image: url(../images/selo_5.png)
    }

    .div-selo.tulipas {
      background-color: #fff;
      background-image: url(../images/selo_6.png)
    }

    .div-selo.bem-campos {
      background-image: url(../images/selo_7.png)
    }

    .div-selo.atlanta {
      background-image: url(../images/selo_8.png)
    }

    .infos-terreno {
      padding-top: 60px;
      background-color: #fafafa
    }

    .infos-terreno.monte-mor {
      background-color: #fff
    }

    .infos-terreno,
    .infos-terreno.monte-mor.infos-terreno-monte {
      padding-bottom: 60px
    }

    .infos-terreno.parquevitoria {
      margin-top: 60px;
      background-color: #fff
    }

    .infos-terreno.parque-vitoria {
      background-color: #fff;
      text-shadow: none
    }

    .div-info-terreno,
    .div-infos-terreno {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .div-infos-terreno.padding-top {
      padding-top: 40px
    }

    .div-info-terreno {
      width: 250px;
      height: 250px;
      margin-right: 10px;
      margin-left: 10px;
      padding: 30px 20px 20px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-right: 1px solid #6e6e6e
    }

    .div-info-terreno.end {
      border-right-style: none
    }

    .image-4 {
      margin-bottom: 30px
    }

    .text-block-8 {
      color: #048548;
      font-size: 16px;
      text-align: center
    }

    .div-text-terreno {
      width: 80%;
      margin-top: 20px;
      margin-right: auto;
      margin-left: auto;
      text-align: center
    }

    .div-text-terreno.cond {
      width: 90%;
      font-weight: 800
    }

    .div-text-terreno.cond.residencial-progresso {
      margin-bottom: 60px
    }

    .paragraph-16 {
      color: #565656;
      font-size: 16px;
      line-height: 1.8;
      font-weight: 300;
      text-align: center
    }

    .paragraph-16.localiz {
      text-align: left
    }

    .paragraph-16._2 {
      width: 60%;
      margin-right: auto;
      margin-left: auto
    }

    .paragraph-16.itapeva {
      margin-bottom: 40px
    }

    .paragraph-16.itapeva.text-form {
      width: 60%;
      margin: 20px auto 10px;
      font-size: 14px
    }

    .paragraph-16.itapeva.ipca {
      display: none
    }

    .paragraph-16.montemor {
      margin-bottom: 0
    }

    .paragraph-16.montemor.text-form {
      width: 60%;
      margin: 20px auto 10px;
      font-size: 14px
    }

    .paragraph-16.montemor.ipca {
      display: none
    }

    .paragraph-16.montmor {
      margin-bottom: 40px
    }

    .paragraph-16.montmor.text-form {
      width: 100%;
      margin: 20px auto 10px;
      font-size: 14px;
      text-align: left
    }

    .paragraph-16.montmor.ipca {
      display: none
    }

    .paragraph-16.esquerda {
      text-align: left
    }

    .paragraph-16.esquerda.margin-top,
    .paragraph-16.margin-top {
      margin-top: 40px
    }

    .paragraph-16.branco {
      color: #fff;
      text-decoration: none
    }

    .paragraph-16.widht-80 {
      width: 80%;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto
    }

    .caracteristicas {
      position: relative;
      padding-top: 60px;
      padding-bottom: 60px
    }

    .div-caracteristicas {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 40px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-caracteristica {
      position: relative;
      overflow: hidden;
      width: 350px;
      min-height: 500px;
      margin-right: 15px;
      margin-left: 15px;
      border-radius: 10px;
      box-shadow: 1px 1px 10px -4px rgba(0, 0, 0, .4)
    }

    .div-caracteristica.reserva-macauba {
      min-height: 640px
    }

    .div-caracteristica.girassois {
      min-height: 525px
    }

    .div-caracteristica.campos {
      min-height: 590px
    }

    .div-caracteristica.portal-das-aguas {
      min-height: 540px
    }

    .div-caracteristica.jardim-bem-viver {
      min-height: 620px;
      -webkit-align-self: stretch;
      -ms-flex-item-align: stretch;
      -ms-grid-row-align: stretch;
      align-self: stretch
    }

    .div-caracteristica.regatas {
      min-height: 600px;
      margin-right: 5px;
      margin-left: 5px
    }

    .div-caracteristica.parque-vitoria {
      width: 380px;
      min-height: 570px;
      text-shadow: none
    }

    .imagem-caracteristica {
      position: relative;
      height: 225px;
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeriarua-interna.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeriarua-interna.jpg);
      background-position: 0 0, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .imagem-caracteristica._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeriaquadras.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeriaquadras.jpg)
    }

    .imagem-caracteristica._2.reserva {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-pracÌ§a.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-pracÌ§a.jpg)
    }

    .imagem-caracteristica._2.bem-viver {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground.jpg)
    }

    .imagem-caracteristica._2.campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground_2.jpg)
    }

    .imagem-caracteristica._2.bem-campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground_3.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground_3.jpg)
    }

    .imagem-caracteristica._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .7))), url(../images/area-comercial.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .7)), url(../images/area-comercial.jpg);
      background-position: 0 0, 50% 100%
    }

    .imagem-caracteristica._3.campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial.jpg)
    }

    .imagem-caracteristica._3.bem-campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial_1.jpg)
    }

    .imagem-caracteristica._3.reserva {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial_2.jpg)
    }

    .imagem-caracteristica.giardino-bianco {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---guarita.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---guarita.jpg)
    }

    .imagem-caracteristica.giardino-bianco._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---rua-interna.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---rua-interna.jpg)
    }

    .imagem-caracteristica.giardino-bianco._2.tulipas {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-de-lazer.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-de-lazer.jpg)
    }

    .imagem-caracteristica.giardino-bianco._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---piscinas.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---piscinas.jpg)
    }

    .imagem-caracteristica.giardino-bianco._3.tulipas {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina_2.jpg)
    }

    .imagem-caracteristica.giardino-bianco.tulipas {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita_1.jpg)
    }

    .imagem-caracteristica.reserva {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_1.jpg)
    }

    .imagem-caracteristica.bem-viver {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna.jpg)
    }

    .imagem-caracteristica.girassois {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita.jpg)
    }

    .imagem-caracteristica.girassois._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_2.jpg)
    }

    .imagem-caracteristica.girassois._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina.jpg)
    }

    .imagem-caracteristica.campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_3.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_3.jpg)
    }

    .imagem-caracteristica.bem-campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_4.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_4.jpg)
    }

    .imagem-caracteristica.atlanta {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita_2.jpg)
    }

    .imagem-caracteristica.atlanta._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-aeÌrea.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-aeÌrea.jpg)
    }

    .imagem-caracteristica.atlanta._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina_1.jpg)
    }

    .imagem-caracteristica.regatas._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/areaverde.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/areaverde.jpg);
      background-position: 0 0, 50% 50%
    }

    .imagem-caracteristica.regatas._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/parents-their-daughter-are-holding-shopping-bags.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/parents-their-daughter-are-holding-shopping-bags.jpg);
      background-position: 0 0, 50%0;
      background-size: auto, cover
    }

    .imagem-caracteristica.regatas._4 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/comercial.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/comercial.jpg)
    }

    .imagem-caracteristica.elvira,
    .imagem-caracteristica.regatas {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg)
    }

    .imagem-caracteristica.elvira._1 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/INFRAESTRUTURA.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/INFRAESTRUTURA.jpg)
    }

    .imagem-caracteristica.elvira._2 {
      background-position: 0 0, 50% 50%
    }

    .imagem-caracteristica.elvira._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/AREA-COMERCIAL_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/AREA-COMERCIAL_1.jpg);
      background-position: 0 0, 50%0;
      background-size: auto, cover
    }

    .imagem-caracteristica.elvira._4 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/comercial.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/comercial.jpg)
    }

    .imagem-caracteristica.elvira._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/Ãrea-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/Ãrea-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg)
    }

    .paragraph-17 {
      margin: 20px;
      color: #565656;
      line-height: 1.8
    }

    .paragraph-17.regatas {
      margin-right: 10px;
      margin-left: 10px
    }

    .h1,
    .heading-7 {
      margin-top: 0;
      color: #fff
    }

    .heading-7 {
      position: absolute;
      left: 0;
      top: auto;
      right: 0;
      bottom: 0;
      margin-right: 20px;
      margin-left: 20px;
      font-weight: 500;
      text-transform: uppercase
    }

    .h1 {
      margin-bottom: 30px;
      font-family: Ubuntu, Helvetica, sans-serif;
      font-size: 72px;
      line-height: 78px;
      font-weight: 800;
      letter-spacing: -1px
    }

    .text-block-9 {
      margin-bottom: 20px;
      color: #fff;
      font-size: 16px;
      font-weight: 400
    }

    .div-ligue {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-bottom: 10px;
      padding-top: 15px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .link-2 {
      color: #6e6e6e;
      font-size: 26px;
      font-weight: 500;
      text-decoration: none
    }

    .text-block-10 {
      margin-right: 10px;
      float: left;
      color: #6e6e6e
    }

    .slider-2 {
      height: auto;
      margin-right: -20px;
      margin-left: -20px;
      padding-bottom: 0;
      background-color: transparent
    }

    .slide-nav-2 {
      display: none;
      width: 250px;
      margin-bottom: 10px;
      color: #079d56
    }

    .left-arrow-2 {
      left: 40%;
      top: auto;
      right: auto;
      bottom: 0;
      display: none;
      height: 50px
    }

    .icon {
      margin-top: 12px;
      color: #079d56;
      font-size: 18px
    }

    .right-arrow-2 {
      left: auto;
      top: auto;
      right: 40%;
      bottom: 0;
      display: none;
      height: 50px
    }

    .icon-2 {
      margin-top: 12px;
      color: #079d56;
      font-size: 18px
    }

    .galeria-de-fotos {
      height: 400px;
      background-color: #6e6e6e
    }

    .galeria-de-fotos.itapeva,
    .galeria-de-fotos.monte-mor {
      display: block
    }

    .column-25,
    .columns-5 {
      height: 100%
    }

    .column-25 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      padding-right: 0;
      padding-left: 40px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      background-color: #006b3f
    }

    .column-26 {
      height: 100%;
      padding-right: 20px;
      padding-left: 0
    }

    .column-26.regatas {
      padding-right: 0
    }

    .lightbox-link {
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      overflow: hidden
    }

    .img-cover-galeria {
      width: 100%;
      height: 100%;
      background-image: url(https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg);
      background-position: 0 0;
      background-size: 125px;
      -webkit-transition: all 250ms ease-out;
      transition: all 250ms ease-out
    }

    .img-cover-galeria:hover {
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05)
    }

    .seta {
      position: absolute;
      left: auto;
      top: 50%;
      right: 0;
      bottom: 0;
      z-index: 1;
      display: none;
      width: 50px;
      height: 50px;
      margin-right: -25px;
      background-color: #006b3f;
      -webkit-transform: translate(0, -50%) rotate(45deg);
      -ms-transform: translate(0, -50%) rotate(45deg);
      transform: translate(0, -50%) rotate(45deg)
    }

    .div-title-info-galeria {
      position: relative;
      width: 80%
    }

    .div-title-info-galeria.dunlop {
      width: 545px
    }

    .localizacao {
      height: 720px;
      background-color: #f7f7f7
    }

    .localizacao.residencial-progresso {
      height: auto;
      margin-top: 80px;
      background-color: transparent
    }

    .localizacao.parque-vitoria {
      height: auto;
      margin-top: 0;
      padding-top: 80px;
      padding-bottom: 80px;
      background-color: #fafafa;
      text-shadow: none
    }

    .columns-6 {
      height: 100%
    }

    .column-27,
    .column-28 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .column-27 {
      height: 100%;
      padding-left: 40px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .column-27.residencial-progresso {
      padding-right: 40px
    }

    .column-28 {
      height: auto;
      padding-right: 0;
      padding-left: 0;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-align-self: flex-start;
      -ms-flex-item-align: start;
      align-self: flex-start;
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1
    }

    .div-title-info-localizacao {
      width: 60%
    }

    .tabs {
      height: 720px
    }

    .tabs.monte-mor {
      display: block
    }

    .tab-pane-tab-1 {
      height: 680px
    }

    .tabs-menu {
      height: 35px;
      margin-top: 5px;
      text-align: left
    }

    .tab-link-tab-1,
    .tab-link-tab-2 {
      height: 40px;
      background-color: #ffb719;
      color: #fff
    }

    .tab-link-tab-1.w--current {
      background-color: #ff8b22;
      color: #fff
    }

    .tab-link-tab-1.elvira {
      background-color: #82ea5b
    }

    .tab-link-tab-1.elvira.w--current {
      background-color: #006b3f
    }

    .tab-link-tab-2.w--current {
      background-color: #ff8b22
    }

    .tab-link-tab-2.w--current:focus {
      background-color: #006b3f
    }

    .tab-link-tab-2.elvira {
      background-color: #82ea5b
    }

    .tab-link-tab-2.elvira.current.w--current,
    .tab-link-tab-2.elvira:active {
      background-color: #006b3f
    }

    .tab-link-tab-2.elvira.current {
      display: none
    }

    .map {
      height: 100%
    }

    .tab-pane-tab-2 {
      height: 680px
    }

    .lightbox-link-2 {
      overflow: hidden;
      height: 100%
    }

    .image-6 {
      height: auto;
      -webkit-transition: all 250ms ease-out;
      transition: all 250ms ease-out
    }

    .image-6:hover {
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05)
    }

    .planta {
      padding-top: 60px;
      padding-bottom: 60px
    }

    .planta.itapeva {
      display: none
    }

    .planta.elvira {
      display: block;
      height: 700px
    }

    .planta.residencial-progresso {
      display: none
    }

    .bold-text-2 {
      font-size: 12px;
      font-weight: 400
    }

    .columns-7 {
      margin-top: 40px
    }

    .text-block-11 {
      margin-top: -10px;
      color: #079d56;
      font-size: 12px;
      font-weight: 300;
      text-align: center
    }

    .text-block-11.elvira {
      color: #079d56
    }

    .div-img-casa {
      height: 400px;
      background-image: url(../images/fachada.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat;
      -webkit-transition: all 250ms ease-out;
      transition: all 250ms ease-out
    }

    .div-img-casa:hover {
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05)
    }

    .div-img-casa.giardino {
      background-image: url(../images/fachada_1.jpg)
    }

    .div-img-casa.bem-viver {
      background-image: url(../images/fachada_3.jpg)
    }

    .div-img-casa.reserva {
      background-image: url(../images/fachada_2.jpg)
    }

    .div-img-casa.girassois {
      background-image: url(../images/fachada_4.jpg)
    }

    .div-img-casa.campos {
      background-image: url(../images/fachada_5.jpg)
    }

    .div-img-casa.tulipas {
      background-image: url(../images/fachada_6.jpg)
    }

    .div-img-casa.bem-campos {
      background-image: url(../images/fachada_7.jpg)
    }

    .div-img-casa.atlanta {
      background-image: url(../images/fachada_8.jpg)
    }

    .div-img-casa.regatas {
      background-image: url(../images/fachada_9.jpg)
    }

    .div-img-casa.elvira {
      background-image: url(../images/Fachada_10.jpg)
    }

    .column-29,
    .column-30 {
      padding-right: 0;
      padding-left: 0
    }

    .lightbox-link-3 {
      overflow: hidden;
      width: 260px;
      height: 400px;
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px
    }

    .lightbox-link-4 {
      overflow: hidden;
      width: 100%;
      height: 400px;
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px
    }

    .column-31 {
      padding-right: 0;
      padding-left: 0
    }

    .column-31.monte-mor {
      position: relative
    }

    .lightbox-link-5 {
      overflow: hidden;
      width: 210px;
      height: 400px
    }

    .div-planta-01,
    .div-planta-02 {
      width: 210px;
      height: 400px;
      background-image: url(../images/planta01.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat;
      -webkit-transition: all 250ms ease-out;
      transition: all 250ms ease-out
    }

    .div-planta-01:hover {
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05)
    }

    .div-planta-01.giardino {
      background-image: url(../images/planta-01.jpg)
    }

    .div-planta-01.reserva {
      background-image: url(../images/planta-01_1.jpg)
    }

    .div-planta-01.bem-viver {
      background-image: url(../images/planta01_1.jpg)
    }

    .div-planta-01.girassois {
      background-image: url(../images/planta-01_2.jpg)
    }

    .div-planta-01.campos {
      background-image: url(../images/planta-01_3.jpg)
    }

    .div-planta-01.tulipas {
      background-image: url(../images/planta-01_4.jpg)
    }

    .div-planta-01.bem-campos {
      background-image: url(../images/planta-01_5.jpg)
    }

    .div-planta-01.atlanta {
      background-image: url(../images/planta.jpg)
    }

    .div-planta-01.regatas {
      background-image: url(../images/planta-01_6.jpg)
    }

    .div-planta-01.elvira {
      width: 260px;
      background-image: url(../images/Planta-Humanizada_FirstFloor.jpg)
    }

    .div-planta-02 {
      background-image: url(../images/planta02.jpg)
    }

    .div-planta-02:hover {
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05)
    }

    .div-planta-02.giardino {
      background-image: url(../images/planta-02.jpg)
    }

    .div-planta-02.reserva {
      background-image: url(../images/planta-02_1.jpg)
    }

    .div-planta-02.bem-viver {
      background-image: url(../images/planta02_2.jpg)
    }

    .div-planta-02.girassois {
      background-image: url(../images/planta-02_2.jpg)
    }

    .div-planta-02.campos {
      background-image: url(../images/planta02_1.jpg)
    }

    .div-planta-02.tulipas {
      background-image: url(../images/planta-02_3.jpg)
    }

    .div-planta-02.bem-campos {
      background-image: url(../images/planta-02_4.jpg)
    }

    .div-planta-02.regatas {
      background-image: url(../images/planta-02_5.jpg)
    }

    .div-planta-02.elvira {
      width: 260px;
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
      background-image: url(../images/Planta-Humanizada_SecondFloor.jpg)
    }

    .andamento-obra {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #f7f7f7
    }

    .andamento-obra.elvira,
    .andamento-obra.itapeva {
      display: block
    }

    .div-andamento,
    .div-grafico {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .div-andamento {
      width: 100%;
      margin-top: 20px;
      -webkit-box-align: stretch;
      -webkit-align-items: stretch;
      -ms-flex-align: stretch;
      align-items: stretch
    }

    .div-grafico {
      position: relative;
      width: 100px;
      height: 100px;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border: 2px solid #000
    }

    .div-evolucao {
      position: absolute;
      left: 0;
      top: auto;
      right: 0;
      bottom: 0;
      height: 1px;
      background-color: #82ea5b
    }

    .div-evolucao.paisagismo.iluminacao {
      height: 37px
    }

    .div-evolucao.esgoto {
      height: 0
    }

    .div-evolucao.pavimentacao.bem-viver {
      height: 95px
    }

    .div-evolucao.pavimentacao.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.pavimentacao.elvira._49 {
      height: 99%
    }

    .div-evolucao.pavimentacao.santairia {
      height: 85px;
      background-color: #82ea5b
    }

    .div-evolucao.pavimentacao.agua {
      height: 6px
    }

    .div-evolucao.pavimentacao.vilaprofeta {
      height: 6px;
      background-color: #82ea5b
    }

    .div-evolucao.pavimentacao.dunlop {
      height: 94px
    }

    .div-evolucao.terraplanagem.elvira._100 {
      height: 97%
    }

    .div-evolucao.eletrica,
    .div-evolucao.esgoto.giardino {
      height: 0
    }

    .div-evolucao.esgoto.reserva {
      height: 94px
    }

    .div-evolucao.esgoto.bem-viver,
    .div-evolucao.esgoto.girassois {
      height: 95px
    }

    .div-evolucao.esgoto.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.esgoto.elvira._92 {
      height: 92px
    }

    .div-evolucao.esgoto.elvira._93 {
      height: 99%
    }

    .div-evolucao.esgoto.itapeva {
      height: 98%
    }

    .div-evolucao.esgoto.santairia {
      height: 99%;
      background-color: #82ea5b
    }

    .div-evolucao.esgoto.vila-profeta {
      height: 2%
    }

    .div-evolucao.esgoto.vila-profeta._95 {
      height: 91px
    }

    .div-evolucao.esgoto.ilumina-o {
      height: 98%;
      background-color: #82ea5b
    }

    .div-evolucao.esgoto.pavimenta-ao {
      height: 99%;
      background-color: #82ea5b
    }

    .div-evolucao.areas-edificaveis,
    .div-evolucao.eletrica.giardino,
    .div-evolucao.passeios-calcadas {
      height: 0
    }

    .div-evolucao.eletrica.reserva {
      height: 40px
    }

    .div-evolucao.eletrica.girassois {
      height: 71px
    }

    .div-evolucao.eletrica.vila-profeta {
      height: 92%
    }

    .div-evolucao.passeios-calcadas.reserva {
      height: 55px
    }

    .div-evolucao.passeios-calcadas.bem-viver {
      height: 66px
    }

    .div-evolucao.passeios-calcadas.girassois {
      height: 96px
    }

    .div-evolucao.areas-edificaveis.giardino {
      height: 12px
    }

    .div-evolucao.areas-edificaveis.bem-viver {
      height: 66px
    }

    .div-evolucao.areas-edificaveis.girassois {
      height: 91px
    }

    .div-evolucao.muro.giardino {
      height: 56px
    }

    .div-evolucao.muro.girassois {
      height: 77px
    }

    .div-evolucao.avenida-de-acesso {
      height: 0
    }

    .div-evolucao.drenagem {
      background-color: #82ea5b
    }

    .div-evolucao.drenagem._100 {
      height: 98%
    }

    .div-evolucao.drenagem.profeta {
      height: 88px
    }

    .div-evolucao.arealazer,
    .div-evolucao.passeios {
      height: 77px
    }

    .div-evolucao.arealazer.giardino {
      height: 0
    }

    .div-evolucao.arealazer.reserva {
      height: 62px
    }

    .div-evolucao.arealazer.bem-viver,
    .div-evolucao.arealazer.girassois {
      height: 95px
    }

    .div-evolucao.arealazer.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.arealazer.santairia {
      height: 87px;
      background-color: #82ea5b
    }

    .div-evolucao.paisagismo.reserva {
      height: 62px
    }

    .div-evolucao.paisagismo.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.paisagismo.santairia {
      height: 68px;
      background-color: #82ea5b
    }

    .div-evolucao.paisagismo.regatas {
      height: 91%;
      background-color: #82ea5b
    }

    .div-evolucao.passeios.giardino {
      height: 0
    }

    .div-evolucao.passeios.reserva {
      height: 62px
    }

    .div-evolucao.passeios.bem-viver,
    .div-evolucao.passeios.girassois {
      height: 95px
    }

    .div-evolucao.passeios.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.passeios.santairia {
      height: 90px;
      background-color: #82ea5b
    }

    .div-evolucao.passeios.passeio {
      height: 99%;
      background-color: #82ea5b
    }

    .div-evolucao.terraplanagemelvira {
      height: 89px
    }

    .div-evolucao.terraplanagemelvira.giardino {
      height: 71px
    }

    .div-evolucao.terraplanagemelvira.reserva {
      height: 79px
    }

    .div-evolucao.terraplanagemelvira.bem-viver {
      height: 96px
    }

    .div-evolucao.terraplanagemelvira.elvira._100,
    .div-evolucao.terraplanagemelvira.girassois,
    .div-evolucao.terraplanagemelvira.profeta._100 {
      height: 95px
    }

    .div-evolucao.terraplanagemelvira.elvira {
      height: 89px;
      background-color: #82ea5b
    }

    .div-evolucao.terraplanagemelvira.itapeva {
      height: 96px
    }

    .div-evolucao.terraplanagemelvira.profeta {
      height: 90px;
      background-color: #82ea5b
    }

    .div-evolucao.terraplanagem-dunlop {
      height: 80px
    }

    .div-evolucao.terraplanagem-dunlop.giardino {
      height: 71px
    }

    .div-evolucao.terraplanagem-dunlop.reserva {
      height: 79px
    }

    .div-evolucao.terraplanagem-dunlop.bem-viver {
      height: 96px
    }

    .div-evolucao.terraplanagem-dunlop.elvira._100,
    .div-evolucao.terraplanagem-dunlop.girassois,
    .div-evolucao.terraplanagem-dunlop.profeta._100 {
      height: 95px
    }

    .div-evolucao.terraplanagem-dunlop.elvira {
      height: 89px;
      background-color: #82ea5b
    }

    .div-evolucao.terraplanagem-dunlop.itapeva {
      height: 96px
    }

    .div-evolucao.terraplanagem-dunlop.profeta {
      height: 90px;
      background-color: #82ea5b
    }

    .div-evolucao.drenagem-dunlop {
      height: 74px;
      background-color: #82ea5b
    }

    .div-evolucao.drenagem-dunlop.giardino {
      height: 71px
    }

    .div-evolucao.drenagem-dunlop.reserva {
      height: 79px
    }

    .div-evolucao.drenagem-dunlop.bem-viver {
      height: 96px
    }

    .div-evolucao.drenagem-dunlop._100,
    .div-evolucao.drenagem-dunlop.girassois {
      height: 95px
    }

    .div-evolucao.drenagem-dunlop.elvira {
      height: 92px
    }

    .div-evolucao.drenagem-dunlop.profeta {
      height: 88px
    }

    .div-evolucao.agua-dunlop {
      height: 57px
    }

    .div-evolucao.agua-dunlop.giardino {
      height: 0
    }

    .div-evolucao.agua-dunlop.reserva {
      height: 94px
    }

    .div-evolucao.agua-dunlop.bem-viver,
    .div-evolucao.agua-dunlop.girassois {
      height: 95px
    }

    .div-evolucao.agua-dunlop.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.agua-dunlop.itapeva {
      height: 86px
    }

    .div-evolucao.agua-dunlop.santairia {
      height: 95px;
      background-color: #82ea5b
    }

    .div-evolucao.esgoto-dunlop {
      height: 99%
    }

    .div-evolucao.esgoto-dunlop.giardino {
      height: 0
    }

    .div-evolucao.esgoto-dunlop.reserva {
      height: 94px
    }

    .div-evolucao.esgoto-dunlop.bem-viver,
    .div-evolucao.esgoto-dunlop.girassois {
      height: 95px
    }

    .div-evolucao.esgoto-dunlop.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.esgoto-dunlop.itapeva {
      height: 86px
    }

    .div-evolucao.esgoto-dunlop.santairia {
      height: 95px;
      background-color: #82ea5b
    }

    .div-evolucao.arrimo-dunlop {
      height: 100%
    }

    .div-evolucao.arrimo-dunlop.giardino {
      height: 37px
    }

    .div-evolucao.arrimo-dunlop.reserva {
      height: 15px
    }

    .div-evolucao.arrimo-dunlop.bem-viver {
      height: 86px
    }

    .div-evolucao.arrimo-dunlop.girassois {
      height: 30px
    }

    .div-evolucao.cercamento-dunlop {
      height: 80%
    }

    .div-evolucao.cercamento-dunlop.giardino {
      height: 0
    }

    .div-evolucao.cercamento-dunlop.reserva {
      height: 40px
    }

    .div-evolucao.cercamento-dunlop.girassois {
      height: 71px
    }

    .div-evolucao.reflorestamento-dunlop {
      height: 83px
    }

    .div-evolucao.reflorestamento-dunlop.giardino {
      height: 0
    }

    .div-evolucao.reflorestamento-dunlop.reserva {
      height: 94px
    }

    .div-evolucao.reflorestamento-dunlop.bem-viver,
    .div-evolucao.reflorestamento-dunlop.girassois {
      height: 95px
    }

    .div-evolucao.reflorestamento-dunlop.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.reflorestamento-dunlop.itapeva {
      height: 86px
    }

    .div-evolucao.reflorestamento-dunlop.santairia {
      height: 95px;
      background-color: #82ea5b
    }

    .div-evolucao.eletrica-dunlop {
      height: 94%
    }

    .div-evolucao.eletrica-dunlop.giardino,
    .div-evolucao.paisagismo-progresso {
      height: 0
    }

    .div-evolucao.eletrica-dunlop.reserva {
      height: 94px
    }

    .div-evolucao.eletrica-dunlop.bem-viver,
    .div-evolucao.eletrica-dunlop.girassois {
      height: 95px
    }

    .div-evolucao.eletrica-dunlop.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.eletrica-dunlop.itapeva {
      height: 86px
    }

    .div-evolucao.eletrica-dunlop.santairia {
      height: 95px;
      background-color: #82ea5b
    }

    .div-evolucao.sinaliza-o {
      height: 45px
    }

    .div-evolucao.sinaliza-o.giardino {
      height: 12px
    }

    .div-evolucao.sinaliza-o.bem-viver {
      height: 66px
    }

    .div-evolucao.sinaliza-o.girassois {
      height: 91px
    }

    .div-evolucao.arrimo {
      height: 11px
    }

    .div-evolucao.arrimo.giardino {
      height: 0
    }

    .div-evolucao.arrimo.reserva {
      height: 40px
    }

    .div-evolucao.arrimo.girassois {
      height: 71px
    }

    .div-evolucao.ciclovia {
      height: 73px
    }

    .div-evolucao.ciclovia.giardino {
      height: 0
    }

    .div-evolucao.ciclovia.reserva {
      height: 94px
    }

    .div-evolucao.ciclovia.bem-viver,
    .div-evolucao.ciclovia.girassois {
      height: 95px
    }

    .div-evolucao.ciclovia.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.ciclovia.itapeva {
      height: 86px
    }

    .div-evolucao.ciclovia.santairia {
      height: 95px;
      background-color: #82ea5b
    }

    .div-evolucao.pavimentacao {
      height: 72px
    }

    .div-evolucao.pavimentacao.giardino,
    .div-evolucao.pavimentacaoo {
      height: 0
    }

    .div-evolucao.pavimentacao.reserva {
      height: 40px
    }

    .div-evolucao.pavimentacao.girassois {
      height: 71px
    }

    .div-evolucao.pavimentacao.contencao {
      height: 75px
    }

    .div-evolucao.pavimentacaoo.giardino {
      height: 0
    }

    .div-evolucao.pavimentacaoo.reserva {
      height: 62px
    }

    .div-evolucao.pavimentacaoo.bem-viver,
    .div-evolucao.pavimentacaoo.girassois {
      height: 95px
    }

    .div-evolucao.pavimentacaoo.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.pavimentacaoo.elvira._49 {
      height: 49px
    }

    .div-evolucao.pavimentacaoo.santairia {
      height: 85px;
      background-color: #82ea5b
    }

    .div-evolucao.pavimentacaoo.agua {
      height: 6px
    }

    .div-evolucao.pavimentacaoo.vilaprofeta {
      height: 6px;
      background-color: #82ea5b
    }

    .div-evolucao.pavimentacaoo.dunlop {
      height: 94px
    }

    .div-evolucao.drenagem.contencao,
    .div-evolucao.terraplanagem.contencao {
      height: 75px
    }

    .div-evolucao.sinaliza-ao {
      height: 77px
    }

    .div-evolucao.sinaliza-ao.giardino {
      height: 0
    }

    .div-evolucao.sinaliza-ao.reserva {
      height: 62px
    }

    .div-evolucao.sinaliza-ao.bem-viver,
    .div-evolucao.sinaliza-ao.girassois {
      height: 95px
    }

    .div-evolucao.sinaliza-ao.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.sinaliza-ao.santairia {
      height: 68px;
      background-color: #82ea5b
    }

    .div-evolucao.sinaliza-ao.regatas {
      height: 10%;
      background-color: #82ea5b
    }

    .div-evolucao.drenagem.elvira {
      height: 99%
    }

    .div-evolucao.paisagismo {
      height: 27%
    }

    .div-evolucao.paisagismo.giardino {
      height: 12px
    }

    .div-evolucao.paisagismo.bem-viver {
      height: 66px
    }

    .div-evolucao.paisagismo.girassois {
      height: 91px
    }

    .div-evolucao.area-de-lazer {
      height: 49%
    }

    .div-evolucao.area-de-lazer.giardino,
    .div-evolucao.terraplanagem {
      height: 0
    }

    .div-evolucao.area-de-lazer.reserva {
      height: 40px
    }

    .div-evolucao.area-de-lazer.girassois {
      height: 71px
    }

    .div-evolucao.drenagem,
    .div-evolucao.terraplanagem.giardino {
      height: 0
    }

    .div-evolucao.terraplanagem.reserva {
      height: 94px
    }

    .div-evolucao.terraplanagem.bem-viver,
    .div-evolucao.terraplanagem.girassois {
      height: 95px
    }

    .div-evolucao.terraplanagem.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.terraplanagem.elvira._92 {
      height: 92px
    }

    .div-evolucao.terraplanagem.elvira._93 {
      height: 99%
    }

    .div-evolucao.terraplanagem.itapeva {
      height: 98%
    }

    .div-evolucao.terraplanagem.santairia {
      height: 99%;
      background-color: #82ea5b
    }

    .div-evolucao.terraplanagem.vila-profeta {
      height: 98%
    }

    .div-evolucao.terraplanagem.vila-profeta._95 {
      height: 91px
    }

    .div-evolucao.terraplanagem.ilumina-o {
      height: 98%;
      background-color: #82ea5b
    }

    .div-evolucao.terraplanagem.pavimenta-ao {
      height: 99%;
      background-color: #82ea5b
    }

    .div-evolucao.agua,
    .div-evolucao.drenagem.giardino {
      height: 0
    }

    .div-evolucao.drenagem.reserva {
      height: 94px
    }

    .div-evolucao.drenagem.bem-viver,
    .div-evolucao.drenagem.girassois {
      height: 95px
    }

    .div-evolucao.drenagem.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.drenagem.elvira._92 {
      height: 92px
    }

    .div-evolucao.drenagem.elvira._93 {
      height: 99%
    }

    .div-evolucao.drenagem.itapeva {
      height: 98%
    }

    .div-evolucao.drenagem.santairia {
      height: 99%;
      background-color: #82ea5b
    }

    .div-evolucao.drenagem.vila-profeta {
      height: 96%
    }

    .div-evolucao.drenagem.vila-profeta._95 {
      height: 91px
    }

    .div-evolucao.drenagem.ilumina-o {
      height: 98%;
      background-color: #82ea5b
    }

    .div-evolucao.drenagem.pavimenta-ao {
      height: 99%;
      background-color: #82ea5b
    }

    .div-evolucao.agua.giardino,
    .div-evolucao.pavimenta-o {
      height: 0
    }

    .div-evolucao.agua.reserva {
      height: 94px
    }

    .div-evolucao.agua.bem-viver,
    .div-evolucao.agua.girassois {
      height: 95px
    }

    .div-evolucao.agua.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.agua.elvira._92 {
      height: 92px
    }

    .div-evolucao.agua.elvira._93 {
      height: 99%
    }

    .div-evolucao.agua.itapeva {
      height: 98%
    }

    .div-evolucao.agua.santairia {
      height: 99%;
      background-color: #82ea5b
    }

    .div-evolucao.agua.vila-profeta {
      height: 5%
    }

    .div-evolucao.agua.vila-profeta._95 {
      height: 91px
    }

    .div-evolucao.agua.ilumina-o {
      height: 98%;
      background-color: #82ea5b
    }

    .div-evolucao.agua.pavimenta-ao {
      height: 99%;
      background-color: #82ea5b
    }

    .div-evolucao.pavimenta-o.giardino {
      height: 0
    }

    .div-evolucao.pavimenta-o.reserva {
      height: 94px
    }

    .div-evolucao.pavimenta-o.bem-viver,
    .div-evolucao.pavimenta-o.girassois {
      height: 95px
    }

    .div-evolucao.pavimenta-o.elvira {
      background-color: #82ea5b
    }

    .div-evolucao.pavimenta-o.elvira._92 {
      height: 92px
    }

    .div-evolucao.pavimenta-o.elvira._93 {
      height: 99%
    }

    .div-evolucao.pavimenta-o.itapeva {
      height: 98%
    }

    .div-evolucao.pavimenta-o.santairia {
      height: 99%;
      background-color: #82ea5b
    }

    .div-evolucao.pavimenta-o.vila-profeta {
      height: 2%
    }

    .div-evolucao.pavimenta-o.vila-profeta._95 {
      height: 55%
    }

    .div-evolucao.pavimenta-o.ilumina-o {
      height: 98%;
      background-color: #82ea5b
    }

    .div-evolucao.pavimenta-o.pavimenta-ao {
      height: 99%;
      background-color: #82ea5b
    }

    .image-7 {
      position: relative;
      z-index: 1
    }

    .image-7.menor {
      padding-right: 8px;
      padding-left: 8px
    }

    .div-etapa,
    .div-etapa.escondida {
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-etapa {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 150px;
      height: 150px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    .div-etapa.escondida {
      display: none;
      text-align: left
    }

    .text-block-12 {
      margin-top: 10px;
      font-size: 12px;
      line-height: 1.2;
      text-align: center
    }

    .bold-text-3 {
      font-size: 16px
    }

    .bold-text-3,
    .bold-text-3.elvira {
      color: #079d56
    }

    .formulario,
    .formulario.venda {
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .formulario {
      padding-top: 60px;
      padding-bottom: 60px;
      background-image: url(../images/cta_1.jpg)
    }

    .formulario.venda {
      background-image: url(../images/cta.jpg)
    }

    .formulario.giardino {
      background-image: url(../images/formulario.jpg)
    }

    .formulario.reserva {
      background-image: url(../images/cta_2.jpg)
    }

    .formulario.bem-viver {
      background-image: url(../images/cta_3.jpg)
    }

    .formulario.girassois {
      background-image: url(../images/cta_4.jpg)
    }

    .formulario.bem-campos {
      background-image: url(../images/cta_7.jpg)
    }

    .formulario.atlanta {
      background-image: url(../images/cta_5.jpg);
      background-position: 50% 20%
    }

    .formulario.tulipas {
      background-image: url(../images/cta_8.jpg)
    }

    .formulario.elvira {
      background-image: url(../images/INFRAESTRUTURA.jpg);
      text-align: left
    }

    .formulario.montemor {
      margin-right: 0;
      background-image: url(../images/URBA_RESERVA_MONTE_MOR_RUA_CASAS.jpg);
      text-align: left
    }

    .columns-8,
    .form-2 {
      margin-top: 30px
    }

    .form-2 {
      text-align: center
    }

    .form-2.venda {
      margin-top: 40px
    }

    .text-field-2 {
      border-style: none none solid;
      border-width: 1px;
      border-color: #000 #000 #079d56;
      border-radius: 3px;
      background-color: #fff;
      box-shadow: 0 0 12px -3px rgba(0, 0, 0, .15);
      color: #8f8f8f;
      font-weight: 300
    }

    .text-field-2.menor {
      width: 97%
    }

    .field-label {
      margin-bottom: 0;
      padding: 8px 0 8px 12px;
      color: #a5a5a5;
      font-weight: 300;
      text-align: left
    }

    .radio-button-label {
      color: #079d56
    }

    .radio-button-field-2 {
      margin-right: 20px;
      padding-top: 8px;
      padding-bottom: 8px;
      float: left
    }

    .submit-button-2 {
      margin-top: 30px;
      padding-right: 40px;
      padding-left: 40px;
      border-style: solid;
      border-width: 1px;
      border-color: #ac41d8;
      border-radius: 20px;
      background-color: #ac41d8;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      text-transform: uppercase
    }

    .submit-button-2:hover {
      background-color: transparent;
      color: #ac41d8
    }

    .submit-button-2.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #ff8b22, #ffb719);
      color: #fff
    }

    .submit-button-2.regatas:hover {
      background-image: linear-gradient(45deg, #ffb719, #ff8b22), linear-gradient(45deg, #ff8b22, #ffb719);
      -webkit-transform: scale(1.03);
      -ms-transform: scale(1.03);
      transform: scale(1.03);
      color: #fff
    }

    .columns-10,
    .columns-9 {
      margin-bottom: 10px
    }

    .ficha-tecnica {
      padding-top: 60px;
      padding-bottom: 60px
    }

    .list-item {
      margin-bottom: 10px;
      color: #6e6e6e;
      font-size: 12px
    }

    .columns-11,
    .div-itens-lazer {
      margin-right: auto;
      margin-left: auto
    }

    .columns-11 {
      width: 90%;
      margin-top: 40px
    }

    .div-itens-lazer {
      position: absolute;
      left: 0;
      top: 50%;
      right: 0;
      bottom: 0;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      overflow: hidden;
      height: 0;
      max-width: 1000px;
      padding-right: 40px;
      padding-left: 40px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      border-radius: 10px;
      background-color: rgba(255, 255, 255, .95);
      box-shadow: 0 0 13px -5px rgba(0, 0, 0, .4);
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%)
    }

    .text-block-13 {
      padding-bottom: 2px;
      font-weight: 500
    }

    .div-elemento-lazer {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 125px;
      margin-right: 10px;
      margin-left: 10px;
      padding-bottom: 10px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-right: 1px none #c2c2c2
    }

    .div-elemento-lazer.last {
      border-right-style: none
    }

    .div-elemento-lazer.maior {
      width: 170px
    }

    .text-block-14 {
      margin-top: 10px;
      text-align: center
    }

    .div-elementos {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 40px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .div-elementos._1 {
      margin-top: 0
    }

    .bold-text-4,
    .bold-text-5 {
      color: #f7287c;
      font-weight: 500
    }

    .bold-text-4._2 {
      color: #f7287c
    }

    .bold-text-4._3,
    .bold-text-4._4 {
      color: #793f98
    }

    .bold-text-4._5 {
      color: #f7287c
    }

    .bold-text-4._6 {
      color: #ac41d8
    }

    .bold-text-4._7 {
      color: #079d56
    }

    .bold-text-4.lime {
      color: #82ea5b
    }

    .bold-text-5 {
      color: #ff8b22
    }

    .section-texto-sobre {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #fff
    }

    .email-ri-urba {
      display: block;
      width: auto;
      margin-top: 30px;
      margin-bottom: 20px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      color: #ff8b22;
      font-size: 25px;
      line-height: 1.8;
      font-weight: 300;
      text-align: center
    }

    .email-ri-urba.legenda {
      margin-top: 20px;
      font-size: 13px;
      font-style: italic;
      text-align: center
    }

    .bold-text-6 {
      font-weight: 500
    }

    .column-33 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      padding-right: 0;
      padding-left: 0;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .column-33._2 {
      padding-top: 40px
    }

    .div-img-sobre {
      width: auto;
      height: auto;
      margin-top: 10px;
      text-align: left
    }

    .div-img-sobre.venda {
      height: 350px;
      margin-top: 0;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      background-image: url(../images/slider-empreendimento-03.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .presenca {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #f4f4f4
    }

    .div-estados,
    .div-img-sobre.venda {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex
    }

    .div-estados {
      margin-top: 20px;
      margin-right: auto;
      margin-left: auto
    }

    .div-estado {
      overflow: hidden;
      width: 250px;
      height: auto;
      margin-right: 10px;
      padding-bottom: 10px;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 0 10px -5px rgba(0, 0, 0, .34);
      text-decoration: none
    }

    .div-block {
      width: 90%;
      margin-right: auto;
      margin-left: auto
    }

    .div-seta-2 {
      width: 12px;
      height: 12px;
      margin-right: 10px;
      float: right;
      border-right: 2px solid #f79c1b;
      border-bottom: 2px solid #ffb700;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg)
    }

    .div-seta-2.atracao {
      border-right-color: #95bc4c;
      border-bottom-color: #98dd18
    }

    .duvida-2 {
      width: 90%;
      float: left;
      color: #e48f16;
      font-size: 16px;
      line-height: 1.5;
      font-weight: 500
    }

    .duvida-2.atracao {
      color: #95bc4c
    }

    .div-img-estado {
      height: 150px;
      background-image: url(../images/bahia.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .div-img-estado._2 {
      background-image: url(../images/minas.jpg)
    }

    .div-img-estado._3 {
      background-image: url(../images/paraiba.jpg)
    }

    .div-img-estado._4 {
      background-image: url(../images/rio-de-janeiro.jpg)
    }

    .div-img-estado._5 {
      background-image: url(../images/sao-paulo.jpg)
    }

    .heading-8 {
      margin: 15px 10px 5px;
      color: #006b3f;
      font-size: 20px;
      font-weight: 400
    }

    .list {
      margin-right: 10px;
      margin-left: 10px
    }

    .list-item-2 {
      margin-bottom: 5px
    }

    .button-5 {
      margin-top: 20px;
      padding-right: 40px;
      padding-left: 40px;
      border-style: solid;
      border-width: 1px;
      border-color: #ac41d8;
      border-radius: 20px;
      background-color: #ac41d8;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      text-transform: uppercase
    }

    .button-5:hover {
      background-color: transparent;
      color: #ac41d8
    }

    .razoes-vender {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #fff
    }

    .text-block-15 {
      margin-bottom: 60px;
      color: #ff8b22;
      font-size: 16px
    }

    .text-block-15._2 {
      margin-top: 60px;
      margin-bottom: 30px;
      color: #079d56;
      font-size: 18px
    }

    .text-block-15,
    .text-block-16 {
      text-align: center
    }

    .passo-a-passo {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #f7f7f7
    }

    .div-passo-a-passo {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 60px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .div-passo {
      position: relative;
      width: 250px;
      margin-right: 30px;
      margin-left: 30px;
      text-align: center
    }

    .div-numero {
      position: relative;
      z-index: 1;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 80px;
      height: 80px;
      margin-right: auto;
      margin-left: auto;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 100px;
      background-color: #fff;
      box-shadow: 0 0 8px -3px rgba(0, 0, 0, .5)
    }

    .text-block-17 {
      margin-top: 20px;
      color: #006b3f;
      font-size: 16px;
      line-height: 1.5;
      font-weight: 300
    }

    .bold-text-7 {
      color: #ff8b22;
      text-transform: uppercase
    }

    .text-block-18 {
      color: #ff8b22;
      font-size: 40px;
      font-weight: 500
    }

    .div-camino {
      position: absolute;
      left: 50%;
      top: 25%;
      right: auto;
      bottom: auto;
      width: 0;
      height: 4px;
      border-radius: 20px;
      background-color: #079d56
    }

    .heading-9 {
      margin-top: 0;
      margin-bottom: 15px;
      color: #079d56;
      font-size: 20px;
      font-weight: 500
    }

    .columns-12 {
      width: 85%;
      margin-top: 60px;
      margin-right: auto;
      margin-left: auto
    }

    .div-carceristicas-area {
      overflow: hidden;
      min-height: 340px;
      padding: 20px;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 0 5px -3px rgba(0, 0, 0, .5)
    }

    .div-carceristicas-area._2 {
      margin-right: 0;
      margin-left: 0
    }

    .paragraph-19 {
      margin-bottom: 20px;
      color: #6e6e6e;
      font-size: 16px;
      line-height: 1.8;
      font-weight: 300
    }

    .list-2 {
      padding-left: 20px;
      color: #079d56
    }

    .list-item-3 {
      margin-bottom: 10px;
      font-size: 16px
    }

    .paragraph-20 {
      width: 70%;
      margin-right: auto;
      margin-left: auto;
      color: #ff8b22;
      font-size: 16px;
      font-weight: 300;
      text-align: center
    }

    .principais-duvidas {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #fcfcfc
    }

    .div-principais-duvidas {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 80%;
      margin: 40px auto 20px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-principais-duvidas._2 {
      margin-top: 0
    }

    .div-principal-duvida {
      width: 300px;
      height: 200px;
      margin-right: 10px;
      margin-left: 10px;
      padding: 20px;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 0 10px -5px rgba(0, 0, 0, .4);
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #5f5f5f;
      text-decoration: none
    }

    .div-principal-duvida:hover {
      background-color: #f7f7f7;
      color: #5e5e5e
    }

    .div-principal-duvida.oculto {
      display: none
    }

    .text-block-19 {
      margin-top: 10px;
      margin-bottom: 15px;
      color: #ff8b22;
      font-size: 18px;
      font-weight: 500;
      text-align: center
    }

    .paragraph-21 {
      color: #079d56;
      font-size: 16px;
      line-height: 1.5;
      font-weight: 300;
      text-align: center
    }

    .div-entre-contato {
      display: none;
      width: 80%;
      margin-right: auto;
      margin-left: auto;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-contato,
    .div-entre-contato._2 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex
    }

    .div-contato {
      width: 200px;
      height: 60px;
      margin-right: 10px;
      margin-left: 10px;
      padding: 10px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 5px;
      background-color: #ff8b22;
      -webkit-transition: all 250ms ease-out;
      transition: all 250ms ease-out;
      text-decoration: none
    }

    .div-contato:hover {
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05)
    }

    .text-block-20 {
      color: #fff;
      font-size: 18px;
      font-weight: 300;
      text-align: center
    }

    .text-block-20._2 {
      margin-top: -5px
    }

    .bold-text-8 {
      font-size: 14px;
      font-weight: 300
    }

    .portal-financeiro {
      overflow: hidden;
      height: 0;
      padding-top: 0;
      padding-bottom: 0;
      background-color: #f7f7f7
    }

    .text-block-21 {
      color: #6e6e6e;
      font-size: 16px
    }

    .text-block-21.vizinho {
      width: 50%;
      margin-right: auto;
      margin-bottom: 20px;
      margin-left: auto;
      line-height: 1.5;
      text-align: center
    }

    .heading-27.com._32px.branco.minha-casa,
    .text-block-21._2 {
      margin-bottom: 20px
    }

    .list-3 {
      margin-top: 20px;
      padding-bottom: 60px;
      padding-left: 15px
    }

    .link-3 {
      display: inline;
      padding-right: 5px;
      padding-left: 5px;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #ff8b22;
      text-decoration: none
    }

    .link-3:hover {
      background-color: #ff8b22;
      color: #fff;
      font-weight: 300
    }

    .list-item-4 {
      margin-bottom: 10px;
      color: #ff8b22;
      line-height: 1.5
    }

    .duvidas-frequentes,
    .sobre-meu-lote,
    .suporte,
    .vizinho-premiado {
      overflow: hidden;
      height: 0;
      background-color: #f7f7f7
    }

    .text-block-22 {
      margin-bottom: 20px;
      color: #ff8b22;
      font-size: 18px;
      font-weight: 500
    }

    .paragraph-22 {
      margin-top: 10px;
      color: #565656;
      font-size: 16px;
      line-height: 1.5;
      font-weight: 300
    }

    .columns-13 {
      width: 80%;
      margin-right: auto;
      margin-left: auto
    }

    .sobre-vizinho-premiado {
      min-height: 280px;
      padding: 20px;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 0 10px -4px rgba(0, 0, 0, .5)
    }

    .text-block-23 {
      margin-top: 40px;
      margin-bottom: 20px;
      color: #793f98;
      font-size: 16px
    }

    .div-button,
    .text-block-23 {
      text-align: center
    }

    .div-button._2 {
      width: 60%;
      margin: 20px auto
    }

    .button-6 {
      padding-right: 40px;
      padding-left: 40px;
      border-style: solid;
      border-width: 1px;
      border-color: #ac41d8;
      border-radius: 20px;
      background-color: #ac41d8;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      text-transform: uppercase
    }

    .button-6:hover {
      background-color: transparent;
      color: #ac41d8
    }

    .heading-10 {
      margin-top: 60px;
      color: #079d56;
      font-size: 20px;
      font-weight: 500;
      text-align: center
    }

    .paragraph-23 {
      color: #6e6e6e;
      font-size: 16px;
      text-align: center
    }

    .div-forms-indicacao {
      width: 80%;
      margin: 20px auto 60px;
      padding: 20px;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 0 6px -2px rgba(0, 0, 0, .3)
    }

    .field-label-2 {
      margin-bottom: 10px;
      padding-left: 10px;
      color: gray;
      font-weight: 400;
      text-align: left
    }

    .field-label-2._2 {
      margin-top: 20px;
      text-align: left
    }

    .form-3 {
      text-align: center
    }

    .marketplace {
      overflow: hidden;
      height: 0;
      background-color: #f7f7f7
    }

    .paragraph-24 {
      width: 70%;
      margin-top: 20px;
      margin-right: auto;
      margin-left: auto;
      font-size: 16px;
      line-height: 1.8;
      font-weight: 300;
      text-align: center
    }

    .div-filtros-busca {
      width: 70%;
      margin: 20px auto
    }

    .div-marca-parceiros,
    .div-parceiros {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .div-parceiros {
      width: 70%;
      margin-right: auto;
      margin-bottom: 20px;
      margin-left: auto
    }

    .div-parceiros.last {
      padding-bottom: 60px
    }

    .div-marca-parceiros {
      width: 200px;
      height: 100px;
      margin-right: 10px;
      margin-left: 10px;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 5px;
      background-color: #fff;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%)
    }

    .div-marca-parceiros:hover {
      -webkit-filter: none;
      filter: none
    }

    .section-map {
      padding-top: 60px;
      padding-bottom: 80px
    }

    .button-7 {
      padding-right: 35px;
      padding-left: 35px;
      border-style: solid;
      border-width: 1px;
      border-color: #ff8b22;
      border-radius: 20px;
      background-color: #ff8b22;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      font-size: 16px;
      text-align: center;
      text-transform: capitalize
    }

    .button-7:hover {
      background-color: transparent;
      color: #ff8b22
    }

    .columns-14 {
      width: 80%;
      margin-top: 60px;
      margin-right: auto;
      margin-left: auto
    }

    .column-35,
    .column-36 {
      padding-top: 2px
    }

    .column-37 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .div-lojas {
      overflow: hidden;
      width: 90%;
      height: 0;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto
    }

    .div-loja {
      margin-top: 20px;
      padding: 10px 10px 15px;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 0 10px -3px rgba(0, 0, 0, .15)
    }

    .div-loja._1 {
      margin-top: 10px
    }

    .text-block-24 {
      padding-bottom: 5px;
      padding-left: 5px;
      border-bottom: 1px solid #ff8b22;
      color: #079d56;
      font-size: 18px;
      font-weight: 500
    }

    .endereco,
    .telefone {
      margin-top: 15px;
      padding-left: 5px;
      color: #6e6e6e
    }

    .telefone {
      margin-top: 5px;
      font-weight: 300
    }

    .heading-11 {
      margin-top: 60px;
      font-size: 18px;
      font-weight: 400;
      text-align: center
    }

    .list-item-5 {
      margin-bottom: 10px;
      color: #565656;
      text-align: left;
      list-style-type: lower-alpha
    }

    .list-4 {
      padding-left: 20px
    }

    .form-4 {
      width: 40%;
      margin-right: auto;
      margin-left: auto
    }

    .div-explicacao {
      position: absolute;
      left: 0;
      top: auto;
      right: 0;
      bottom: 0;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      overflow: hidden;
      height: 0;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 5px;
      background-color: rgba(255, 255, 255, .95)
    }

    .paragraph-25 {
      margin: 20px;
      color: #079d56;
      font-size: 16px;
      line-height: 1.5;
      text-align: center
    }

    .div-lightbox-andamento {
      margin-top: 40px;
      text-align: center
    }

    .text-block-25 {
      padding: 9px 35px;
      border-style: solid;
      border-width: 1px;
      border-color: #ac41d8;
      border-radius: 5px;
      background-color: #ac41d8;
      color: #fff;
      text-transform: uppercase
    }

    .text-block-25:hover {
      background-color: transparent;
      color: #ac41d8
    }

    .lightbox-link-6,
    .text-block-25 {
      text-decoration: none
    }

    .div-duvidas {
      margin-top: 5px;
      margin-bottom: 0
    }

    .div-duvidas.last {
      padding-bottom: 60px
    }

    .duvida-frequente {
      margin-bottom: 10px;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      cursor: pointer
    }

    .duvida-frequente:hover {
      -webkit-transform: translate(10px, 0);
      -ms-transform: translate(10px, 0);
      transform: translate(10px, 0)
    }

    .duvida-frequente.last {
      margin-bottom: 60px
    }

    .text-block-26 {
      display: inline;
      margin-right: 20px;
      float: left;
      color: #ff8b22;
      font-weight: 700
    }

    .text-block-27 {
      display: inline;
      color: #079d56;
      font-size: 16px;
      font-weight: 500
    }

    .div-perguntas {
      overflow: hidden;
      height: 0
    }

    .div-block-2 {
      height: 1px
    }

    .columns-15,
    .multimidia.bem-viver-campos,
    .multimidia.giardino,
    .multimidia.reserva {
      display: none
    }

    .text-block-28 {
      margin-bottom: 20px;
      color: #6e6e6e;
      font-size: 12px;
      text-align: center
    }

    .select-field-2 {
      background-color: #fff
    }

    .multimidia {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #f8f8f8
    }

    .multimidia.elvira {
      display: block
    }

    .div-midia {
      overflow: hidden;
      width: 720px;
      height: auto;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto;
      border-radius: 10px;
      box-shadow: 0 0 8px -4px rgba(0, 0, 0, .5)
    }

    .contact {
      height: 800px;
      padding-top: 100px;
      background-image: url(../images/hero_v2.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .col-contato {
      position: relative;
      top: 50%;
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%)
    }

    .div-forms-contato {
      padding: 40px 20px 20px;
      border-radius: 10px;
      background-color: #fff
    }

    .heading-12 {
      font-weight: 500;
      text-align: center;
      text-transform: capitalize
    }

    .heading-13 {
      width: 60%;
      color: #6e6e6e;
      font-size: 40px;
      line-height: 1.3;
      font-weight: 300
    }

    .paragraph-26 {
      width: 60%;
      color: #ff8b22;
      font-size: 18px;
      line-height: 1.6
    }

    .textarea {
      min-height: 150px;
      margin-top: 20px;
      border-style: solid;
      border-width: 1px;
      border-color: #079d56;
      border-radius: 5px
    }

    .form-5 {
      text-align: center
    }

    .select-field-3 {
      margin-bottom: 15px
    }

    .nav-link {
      padding-top: 10px;
      padding-bottom: 8px;
      border-bottom: 2px solid transparent;
      -webkit-transition: all 200ms ease-in;
      transition: all 200ms ease-in;
      color: #079d56;
      font-weight: 400;
      letter-spacing: .2px
    }

    .nav-link:hover {
      border-bottom: 2px solid #ff8b22
    }

    .nav-link.w--current {
      border-bottom-color: #ff8b22;
      color: #006b3f
    }

    .slide-4 {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/slider-empreendimento-04.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/slider-empreendimento-04.jpg);
      background-position: 0 0, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .escolha-cidade {
      margin-top: 20px;
      border: 1px #000;
      background-color: #fff;
      box-shadow: 0 5px 15px -3px rgba(0, 107, 63, .25);
      color: #ff8b22
    }

    .escolha-cidade.lojas,
    .escolha-cidade.motivo-contato,
    .escolha-cidade.uf {
      margin-top: 0
    }

    .bold-text-9 {
      color: #079d56;
      font-weight: 600
    }

    .div-block-3 {
      position: absolute;
      left: 0;
      top: auto;
      right: auto;
      bottom: 0;
      z-index: -1;
      width: 600px;
      height: 600px;
      background-image: url(../images/pai-filho_1.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .bold-text-10,
    .bold-text-11 {
      color: #fff;
      font-weight: 600
    }

    .destaque-h2-laranja {
      color: #079d56;
      font-weight: 600
    }

    .destaque-h2-laranja.lime {
      color: #82ea5b
    }

    .destaque-h2-laranja.roxo {
      color: #793f98
    }

    .destaque-h2-laranja.itapeva {
      color: #ac41d8;
      text-shadow: none
    }

    .destaque-h2-laranja.elvira {
      color: #079d56
    }

    .destaque-h2-laranja.dunlop,
    .destaque-h2-laranja.vilaprofeta {
      color: #ff8b22
    }

    .destaque-h2-laranja.mm-lan {
      color: #079d56
    }

    .bold-text-12 {
      color: #006b3f
    }

    .bold-text-12,
    .bold-text-13,
    .bold-text-14 {
      font-weight: 600
    }

    .bold-text-15 {
      color: #006b3f
    }

    .contato-imediato-mobile {
      position: fixed;
      left: auto;
      top: 0;
      right: 0;
      bottom: 0;
      z-index: 5;
      display: none;
      width: 100px;
      height: 100vh;
      padding-top: 100px;
      padding-right: 20px;
      padding-left: 20px
    }

    .bold-text-16 {
      color: #ff8b22
    }

    .column-39 {
      padding-right: 0;
      padding-left: 20px
    }

    .bold-text-17 {
      color: #ff8b22
    }

    .bold-text-18 {
      color: #82ea5b;
      font-weight: 600
    }

    .column-45 {
      display: block;
      height: 510px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .bold-text-19,
    .bold-text-20,
    .bold-text-21,
    .bold-text-22 {
      color: #ff8b22
    }

    .bold-text-23,
    .link-4 {
      color: #82ea5b;
      font-weight: 500
    }

    .link-4 {
      color: #ac41d8;
      text-decoration: underline
    }

    .bold-text-24,
    .bold-text-25 {
      color: #ff8b22
    }

    .text-field-3 {
      border-radius: 100px;
      color: #006b3f;
      font-weight: 400;
      text-align: center
    }

    .container {
      height: 100%;
      max-width: 1280px;
      padding-right: 10px;
      padding-left: 10px
    }

    .h3-form-news {
      margin-top: 10px;
      margin-bottom: 20px;
      color: #6e6e6e;
      font-size: 16px;
      line-height: 1.5;
      font-weight: 300;
      text-align: center
    }

    .success-message {
      padding-right: 10px;
      padding-left: 10px;
      background-color: transparent
    }

    .link-block-3 {
      margin-top: 30px;
      margin-left: 60px;
      padding-top: 5px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
      -webkit-transition: all 200ms ease-in;
      transition: all 200ms ease-in
    }

    .link-block-3:hover {
      -webkit-filter: none;
      filter: none;
      -webkit-transform: scale(1.3);
      -ms-transform: scale(1.3);
      transform: scale(1.3)
    }

    .nav-link-2 {
      margin-top: 30px;
      padding-top: 10px;
      padding-bottom: 5px;
      border-bottom: 2px solid transparent;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #079d56;
      font-weight: 400
    }

    .nav-link-2:hover {
      border-bottom: 2px solid #ff8b22;
      -webkit-transform: translate(-10px, 0);
      -ms-transform: translate(-10px, 0);
      transform: translate(-10px, 0)
    }

    .nav-link-2.w--current {
      border-bottom-color: #ff8b22;
      color: #006b3f
    }

    .link-block-2 {
      margin-top: 20px
    }

    .nav-menu-2 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .dropdown-news {
      margin-top: 30px;
      margin-left: 60px
    }

    .text-block-29 {
      color: #fff;
      font-size: 14px;
      font-weight: 400;
      letter-spacing: .3px
    }

    .drop-form-news.w--open {
      position: absolute;
      width: 250px;
      margin-top: 15px;
      margin-left: -20px;
      padding: 20px 10px 10px;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 0 6px -2px rgba(0, 0, 0, .3)
    }

    .dropdown-button {
      padding: 10px 20px;
      border-radius: 100px;
      background-color: #ac41d8;
      box-shadow: 0 5px 15px -5px #ac41d8;
      -webkit-transition: opacity 250ms ease-in;
      transition: opacity 250ms ease-in;
      font-weight: 700
    }

    .dropdown-button:hover {
      box-shadow: 0 5px 20px -1px #ac41d8;
      -webkit-transform: scale(1.03);
      -ms-transform: scale(1.03);
      transform: scale(1.03)
    }

    .text-block-30 {
      color: #ac41d8;
      font-size: 16px;
      line-height: 1.5;
      font-weight: 400
    }

    .form-block-2 {
      margin-bottom: 0
    }

    .seta-drop {
      position: absolute;
      left: 50%;
      top: 0;
      right: 0;
      bottom: auto;
      width: 25px;
      height: 25px;
      margin-top: -10px;
      border-radius: 5px;
      background-color: #fff;
      -webkit-transform: translate(-50%, 0) rotate(45deg);
      -ms-transform: translate(-50%, 0) rotate(45deg);
      transform: translate(-50%, 0) rotate(45deg)
    }

    .submit-button-3 {
      width: 100%;
      margin-right: auto;
      margin-left: auto;
      padding-right: 35px;
      padding-left: 35px;
      border-style: solid;
      border-width: 1px;
      border-color: #ff8b22;
      border-radius: 100px;
      background-color: #ff8b22;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      font-size: 14px
    }

    .submit-button-3:hover {
      background-color: transparent;
      color: #ff8b22
    }

    .navbar-2 {
      position: fixed;
      width: 100%;
      height: 120px;
      padding-top: 10px;
      border-bottom: 2px solid transparent;
      background-color: #fff
    }

    .navbar-2.interna {
      border-bottom-color: #ff8b22
    }

    .titulo-post-anterior {
      margin-top: 0;
      border-bottom: 1px solid #079d56;
      color: #6e6e6e;
      font-size: 18px;
      font-weight: 400
    }

    .div-busca {
      overflow: hidden;
      height: 0;
      background-color: #006b3f
    }

    .autor {
      margin-top: 5px;
      float: left;
      color: #7a7a7a
    }

    .autor.relacionados {
      margin-top: 15px;
      margin-left: 10px
    }

    .autor.interna {
      margin-top: 15px
    }

    .text-field-4 {
      margin-bottom: 0;
      border: 1.3px solid transparent;
      border-radius: 100px
    }

    .heading-14 {
      padding-left: 10px;
      border-bottom: 1px none #31d2cc;
      color: #6e6e6e;
      font-size: 30px;
      font-weight: 200
    }

    .button-8 {
      padding-top: 5px;
      padding-bottom: 4px;
      float: right;
      border-style: solid;
      border-width: 1px;
      border-color: #ff8b22;
      border-radius: 100px;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #ff8b22;
      font-weight: 300
    }

    .button-8:hover,
    .button-9.relacionados:hover {
      background-color: #ff8b22;
      color: #fff
    }

    .button-8,
    .categoria,
    .slider-3 {
      background-color: transparent
    }

    .slider-3 {
      height: auto;
      padding-bottom: 70px
    }

    .categoria {
      position: absolute;
      left: 0;
      top: 0;
      right: auto;
      bottom: auto;
      margin-top: 20px;
      margin-left: 20px;
      padding: 5px 10px 3px;
      border: 2px solid #fff;
      border-radius: 100px;
      color: #fff;
      font-size: 12px;
      font-weight: 400;
      letter-spacing: .5px;
      text-transform: uppercase
    }

    .div-destaque-lateral {
      position: relative;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 400px;
      padding: 20px;
      -webkit-box-align: end;
      -webkit-align-items: flex-end;
      -ms-flex-align: end;
      align-items: flex-end;
      border-radius: 10px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-baixo-01.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-baixo-01.jpg);
      background-position: 0 0, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
      box-shadow: 0 0 15px -5px rgba(0, 0, 0, .5);
      -webkit-transition: all 200ms ease-in;
      transition: all 200ms ease-in;
      text-decoration: none
    }

    .div-destaque-lateral:hover {
      -webkit-transform: scale(1.01);
      -ms-transform: scale(1.01);
      transform: scale(1.01)
    }

    .div-destaque-lateral._4 {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-baixo-03.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-baixo-03.jpg);
      background-position: 0 0, 50% 50%
    }

    .div-destaque-lateral._2,
    .div-destaque-lateral._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-destaque-lateral.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-destaque-lateral.jpg);
      background-position: 0 0, 50% 50%
    }

    .div-destaque-lateral._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-baixo-02.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-baixo-02.jpg)
    }

    .post-anterior {
      margin-top: 20px;
      padding: 10px 20px;
      border-radius: 5px;
      box-shadow: 0 0 4px 0 rgba(0, 0, 0, .1)
    }

    .heading-15 {
      width: 80%;
      margin-bottom: 0;
      color: #fff;
      font-weight: 500;
      text-decoration: none
    }

    .heading-15._02 {
      width: 100%;
      font-size: 28px;
      line-height: 1.3
    }

    .dvi-cta,
    .dvi-cta.home {
      border-style: solid;
      border-width: 2px;
      border-color: #079d56;
      background-image: url(../images/banner-lateral.png)
    }

    .dvi-cta {
      width: 280px;
      height: 420px;
      margin-top: 30px;
      border-radius: 10px;
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .dvi-cta.home {
      width: 400px;
      height: 600px
    }

    .data-publicacao {
      margin-top: 5px;
      margin-left: 20px;
      padding-left: 20px;
      float: left;
      border-left: 1px solid #7a7a7a;
      color: #7a7a7a;
      font-size: 12px
    }

    .data-publicacao.interna {
      margin-top: 15px
    }

    .data-publicacao.relacionados {
      margin-top: 0;
      margin-left: 10px;
      padding-left: 0;
      clear: left;
      border-left-style: none
    }

    .columns-16 {
      margin-top: 40px;
      padding-top: 40px;
      border-top: 1px solid #ff8b22
    }

    .div-ad {
      height: 250px;
      margin-top: 20px;
      border-radius: 10px;
      background-image: url(../images/banner-superior.jpg);
      background-position: 50% 50%;
      background-size: cover
    }

    .section-posts {
      position: relative;
      padding-top: 120px;
      padding-bottom: 60px
    }

    .submit-button-4 {
      padding-right: 35px;
      padding-left: 35px;
      border-style: solid;
      border-width: 1.3px;
      border-color: #82ea5b;
      border-radius: 100px;
      background-color: transparent;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #82ea5b
    }

    .submit-button-4:hover {
      background-color: #82ea5b;
      color: #006b3f
    }

    .div-post-destaque {
      position: relative;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 400px;
      padding: 20px;
      -webkit-box-align: end;
      -webkit-align-items: flex-end;
      -ms-flex-align: end;
      align-items: flex-end;
      border-radius: 10px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-destaque.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-destaque.jpg);
      background-position: 0 0, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
      box-shadow: 0 0 15px -5px rgba(0, 0, 0, .5);
      -webkit-transition: all 200ms ease-in;
      transition: all 200ms ease-in;
      text-decoration: none
    }

    .div-post-destaque:hover {
      -webkit-transform: scale(1.01);
      -ms-transform: scale(1.01);
      transform: scale(1.01)
    }

    .grid-2 {
      margin-top: 20px;
      -ms-grid-columns: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto
    }

    .column-48 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      padding-right: 0;
      padding-left: 0;
      -webkit-box-pack: end;
      -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
      justify-content: flex-end
    }

    .grid {
      margin-top: 20px;
      -ms-grid-columns: 2fr 1fr;
      grid-template-columns: 2fr 1fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto
    }

    .container-padrao-2,
    .slide-5 {
      padding-right: 10px;
      padding-left: 10px
    }

    .container-padrao-2 {
      height: 100%;
      max-width: 1280px;
      margin-right: auto;
      margin-left: auto
    }

    .slide-5 {
      padding-bottom: 10px
    }

    .column-2 {
      padding-right: 10px;
      padding-left: 0
    }

    .form-block-3 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 100%;
      margin-bottom: 0;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .bold-text-26 {
      color: #079d56;
      font-weight: 500
    }

    .img-autor {
      margin-right: 10px;
      float: left;
      border-radius: 100px
    }

    .post-relacionado {
      position: relative;
      overflow: hidden;
      width: 300px;
      height: 250px;
      margin-right: 10px;
      padding-bottom: 40px;
      border-radius: 10px;
      box-shadow: 0 0 6px -3px rgba(0, 0, 0, .5)
    }

    .post-relacionado.last {
      margin-right: 0
    }

    .link-block {
      margin-right: 10px
    }

    .div-busca-2 {
      overflow: hidden;
      height: 0;
      background-color: #33c
    }

    .button-9,
    .heading-16 {
      font-family: Montserrat, sans-serif
    }

    .heading-16 {
      padding-left: 10px;
      border-bottom: 1px none #31d2cc;
      color: #33c;
      font-size: 30px;
      font-weight: 600
    }

    .heading-16.interna {
      margin-top: 60px;
      padding-left: 5px;
      color: #6e6e6e;
      font-size: 26px;
      font-weight: 300
    }

    .heading-16.relacionados {
      border-bottom-style: solid;
      border-bottom-color: #ff8b22;
      color: #6e6e6e;
      font-size: 26px;
      font-weight: 300
    }

    .button-9 {
      padding-top: 5px;
      padding-bottom: 5px;
      float: right;
      border-style: solid;
      border-width: 1.4px;
      border-color: #31d2cc;
      border-radius: 100px;
      background-color: transparent;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #31d2cc;
      font-weight: 300
    }

    .button-9:hover {
      background-color: #31d2cc;
      color: #fff
    }

    .button-9.relacionados {
      position: absolute;
      left: auto;
      top: auto;
      right: 0;
      bottom: 0;
      margin-right: 5px;
      margin-bottom: 15px;
      padding-right: 10px;
      padding-left: 10px;
      float: none;
      border-color: #ff8b22;
      color: #ff8b22
    }

    .paragraph-2 {
      width: 90%;
      margin-bottom: 40px;
      padding-right: 10px;
      font-family: Roboto, sans-serif;
      color: #565656;
      font-size: 20px;
      line-height: 1.6;
      font-weight: 300;
      letter-spacing: .2px
    }

    .heading-17 {
      margin-top: 10px;
      color: #006b3f;
      font-size: 50px;
      line-height: 1.1;
      font-weight: 500
    }

    .paragraph-27 {
      width: 100%;
      margin-top: 25px;
      font-family: Roboto, sans-serif;
      color: #929292;
      font-size: 20px;
      line-height: 1.5;
      font-weight: 300
    }

    .text-block-31 {
      color: #ff8b22;
      font-weight: 600
    }

    .column-4 {
      padding-right: 10px;
      padding-left: 0;
      border-right: 1px solid #e9e9e9
    }

    .column-3 {
      padding-right: 0;
      padding-left: 25px
    }

    .heading-18 {
      width: 80%;
      margin-bottom: 0;
      color: #fff;
      text-decoration: none
    }

    .heading-18._02 {
      width: 100%;
      font-size: 28px;
      line-height: 1.3
    }

    .heading-18._02.relacionado {
      margin-top: 0;
      font-size: 16px;
      font-weight: 500
    }

    .div-img-postrelacionado {
      position: relative;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 180px;
      padding-right: 10px;
      padding-bottom: 10px;
      padding-left: 10px;
      -webkit-box-align: end;
      -webkit-align-items: flex-end;
      -ms-flex-align: end;
      align-items: flex-end;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-destaque-lateral.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-destaque-lateral.jpg);
      background-position: 0 0, 50% 20%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .div-img-postrelacionado._2,
    .div-img-postrelacionado._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-baixo-03.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-baixo-03.jpg);
      background-position: 0 0, 50% 50%
    }

    .div-img-postrelacionado._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/post-baixo-02.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/post-baixo-02.jpg)
    }

    .content-cta {
      width: 80%;
      margin-top: 80px;
      margin-right: auto;
      margin-left: auto
    }

    .list-item-6 {
      margin-bottom: 15px;
      padding-bottom: 5px;
      padding-left: 5px;
      border-bottom: 1px solid #ff8b22;
      color: #6e6e6e;
      font-size: 16px;
      line-height: 1.4;
      font-weight: 400
    }

    .section {
      padding-top: 120px;
      padding-bottom: 60px
    }

    .submit-button-5 {
      padding-right: 35px;
      padding-left: 35px;
      border: 1.3px solid #fff;
      border-radius: 100px;
      background-color: transparent;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in
    }

    .submit-button-5:hover {
      background-color: #fff;
      color: #33c
    }

    .div-autor-data,
    .list-6 {
      margin-top: 20px
    }

    .link-5 {
      -webkit-transition: all 200ms ease-in;
      transition: all 200ms ease-in;
      color: #565656;
      font-weight: 300;
      text-decoration: none
    }

    .link-5:hover {
      color: #079d56
    }

    .div-img-postinterna {
      width: 80%;
      height: 500px;
      margin-right: auto;
      margin-left: auto;
      border-radius: 10px;
      background-image: url(../images/casal-com-nova-casa.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .div-img-postinterna._2 {
      background-image: url(../images/urba-2.jpg)
    }

    .div-img-postinterna._3 {
      background-image: url(../images/Guarita.jpg)
    }

    .posts-relacionados {
      margin-top: 80px;
      margin-bottom: 60px;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .heading-19,
    .text-block-32 {
      margin-bottom: 10px;
      color: #079d56
    }

    .heading-19 {
      width: 90%;
      margin-top: 0;
      margin-bottom: 20px;
      font-family: Poppins, sans-serif;
      font-weight: 300
    }

    .heading-19._2 {
      font-size: 32px;
      line-height: 36px
    }

    .post-main-info,
    .posts {
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .post-main-info {
      width: 80%;
      margin: 40px auto;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .posts {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 20px
    }

    .secao-material-destaque {
      height: auto;
      padding-top: 120px;
      border-bottom: 1px none #b30404;
      background-color: #fff
    }

    .conteiner-padrao {
      position: relative;
      display: block;
      overflow: hidden;
      max-width: 1280px;
      margin-top: 0;
      margin-right: auto;
      margin-left: auto;
      padding-right: 10px;
      padding-left: 10px
    }

    .imagem-material-destque {
      width: 340px;
      height: 340px;
      margin-top: 30px;
      margin-right: 20px;
      float: left;
      background-image: url(../images/Livro.png);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .titulo-material-destaque {
      margin-top: 80px;
      margin-bottom: 25px;
      margin-left: 0;
      padding-right: 25px;
      padding-bottom: 5px;
      float: left;
      border-bottom: 2px solid #ff8b22;
      color: #006b3f;
      font-weight: 400
    }

    .paragraph-3 {
      width: 65%;
      margin-bottom: 50px;
      float: left;
      color: #7a7a7a;
      font-size: 16px;
      line-height: 1.6;
      font-weight: 400
    }

    .botao-materiais,
    .botao-materiais:hover {
      border-style: solid;
      border-width: 1px;
      border-color: #793f98
    }

    .botao-materiais {
      padding-right: 25px;
      padding-bottom: 8px;
      padding-left: 25px;
      float: left;
      border-radius: 100px;
      background-color: transparent;
      -webkit-transition: all 300ms ease;
      transition: all 300ms ease;
      color: #793f98;
      font-weight: 500
    }

    .botao-materiais:hover {
      background-color: #793f98;
      color: #fff
    }

    .botao-materiais:active {
      background-color: #ac41d8;
      color: #fff
    }

    .conteiner-padrao-2 {
      position: relative;
      display: block;
      overflow: hidden;
      max-width: 1280px;
      margin-top: 0;
      margin-right: auto;
      margin-left: auto;
      padding-right: 20px;
      padding-left: 20px
    }

    .conteiner-padrao-2.selecao-categoria-material {
      overflow: visible;
      padding-right: 20px;
      padding-left: 20px
    }

    .dropdown-link {
      width: 90%;
      margin-left: 20px;
      border-style: none solid solid;
      border-width: 1px;
      border-color: #f63 #006b3f #006b3f;
      background-color: rgba(255, 255, 255, .95);
      color: #006b3f
    }

    .dropdown-link:hover {
      color: #ff8b22
    }

    .pai-dropdown-categoria-materiais {
      width: 95%;
      margin-top: 30px;
      border: 1px solid #fff;
      border-radius: 100px;
      color: #fff
    }

    .text-block-33 {
      color: #fff;
      font-size: 18px;
      font-weight: 300;
      text-align: left
    }

    .campo-pesquisa {
      width: 90%;
      margin-top: 0;
      margin-bottom: 0;
      float: left;
      border: 1px #000
    }

    .campo-pesquisa:focus {
      border-bottom: 1px solid #31d2cc
    }

    .image-8 {
      margin-top: 0;
      margin-left: 0;
      padding: 5px;
      float: right;
      cursor: pointer
    }

    .dropdown-categoria {
      width: 100%;
      padding-top: 10px;
      padding-bottom: 10px;
      color: #fff;
      font-weight: 300
    }

    .icon-4 {
      color: #fff
    }

    .dropdown-list {
      background-color: transparent
    }

    .dropdown-list.w--open {
      margin-top: -5px
    }

    .form-block-4 {
      margin-top: 30px;
      border: 1px solid transparent
    }

    .coluna-busca {
      padding-top: 0;
      padding-left: 0;
      border-right: 1px none #000
    }

    .busca-materiais {
      padding-bottom: 15px;
      border-bottom: 1px none #b30404;
      background-color: #079d56
    }

    .colunas-materiais {
      height: auto;
      margin-bottom: 40px
    }

    .imagem-material-segundario {
      height: 350px;
      background-color: #fff;
      background-image: url(../images/Livro.png);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .titulo-categoria-materiais {
      margin-bottom: 20px;
      padding-top: 15px;
      padding-bottom: 5px;
      padding-left: 20px;
      border-bottom: 2px solid #079d56;
      color: #ff8b22;
      font-size: 25px;
      font-weight: 300
    }

    .coluna-individual-material {
      height: 100%;
      padding-right: 20px;
      padding-left: 20px
    }

    .botao-material-secundario {
      position: static;
      left: 0;
      right: 0;
      bottom: 0;
      display: block;
      margin: 10px auto;
      padding-bottom: 8px;
      border-style: solid;
      border-width: 1px;
      border-color: #793f98;
      border-radius: 100px;
      background-color: transparent;
      -webkit-transition: all 300ms ease;
      transition: all 300ms ease;
      color: #793f98;
      font-weight: 500;
      text-align: center;
      text-transform: uppercase
    }

    .botao-material-secundario:hover {
      border-style: solid;
      border-width: 1px;
      border-color: #31d2cc;
      background-color: #793f98;
      color: #fff
    }

    .botao-material-secundario:active {
      background-color: #ac41d8;
      color: #fff
    }

    .titulo-material-secundario {
      margin-bottom: 15px;
      padding-bottom: 5px;
      border-bottom: 2px solid #ff8b22;
      color: #006b3f;
      font-size: 20px;
      line-height: 25px;
      font-weight: 400;
      text-align: left
    }

    .texto-material {
      margin-bottom: 20px;
      color: #7a7a7a;
      line-height: 1.5
    }

    .bold-text-27 {
      display: inline-block;
      height: 60px;
      padding-right: 10px;
      padding-left: 10px;
      border-bottom: 2px solid transparent;
      background-color: transparent;
      font-weight: 500
    }

    .bold-text-28 {
      color: #ff8b22
    }

    .div-direcional-galeria {
      background-image: url(../images/arrow.png);
      background-position: 50% 50%;
      background-size: 150px;
      background-repeat: no-repeat
    }

    .image-9 {
      position: absolute;
      left: auto;
      top: auto;
      right: 0;
      bottom: 0;
      z-index: 2;
      margin-right: -80px
    }

    .image-9.dunlop {
      margin-right: 0
    }

    .column-49._2.interna,
    .link-6 {
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in
    }

    .link-6 {
      color: #6e6e6e;
      text-decoration: underline
    }

    .link-6:hover {
      color: #ac41d8
    }

    .div-block-4 {
      margin-top: 10px
    }

    .image-10 {
      position: absolute;
      left: 0;
      top: 0;
      right: auto;
      bottom: 0;
      margin-top: 2px;
      margin-left: 30px
    }

    .image-10._2 {
      margin-top: 5px
    }

    .column-49 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 100px;
      padding-right: 20px;
      padding-left: 20px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-right: 2px solid #ff8b22
    }

    .column-49._2 {
      border-right-color: #006b3f;
      background-color: #82ea5b
    }

    .column-49._2.interna {
      border-right-color: #fafafa;
      background-color: #ebebeb
    }

    .column-49._2.interna:hover {
      background-color: #ff8b22
    }

    .text-block-34 {
      width: 100%;
      margin-top: 10px;
      color: #6e6e6e;
      text-align: left
    }

    .text-block-34._2 {
      width: 95%;
      margin-top: 40px;
      font-size: 12px
    }

    .list-item-7 {
      margin-bottom: 20px;
      color: #565656;
      font-size: 16px;
      font-weight: 300
    }

    .bold-text-29 {
      color: #ff8b22;
      font-weight: 500
    }

    .list-7 {
      width: 60%;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto
    }

    .text-block-35 {
      position: absolute;
      left: auto;
      top: 0;
      right: 0;
      bottom: auto;
      margin-top: 10px;
      margin-right: 10px;
      color: #fff;
      font-weight: 300;
      text-shadow: 0 0 5px rgba(0, 0, 0, .7)
    }

    .gradient {
      height: 100%;
      background-image: linear-gradient(225deg, #006b3f, transparent 23%)
    }

    .captacao-newsletter {
      margin-top: 80px;
      margin-right: auto;
      margin-left: auto
    }

    .heading-20 {
      margin-top: 0;
      margin-bottom: 20px;
      color: #793f98;
      font-weight: 500;
      text-align: center
    }

    .text-field-5 {
      width: 85%;
      float: left;
      border-top-left-radius: 25px;
      border-bottom-left-radius: 25px
    }

    .submit-button-6 {
      width: 15%;
      float: right;
      border-top-right-radius: 25px;
      border-bottom-right-radius: 25px;
      background-color: #079d56;
      -webkit-transition: all 200ms ease-in;
      transition: all 200ms ease-in;
      text-transform: uppercase
    }

    .submit-button-6:hover {
      background-color: #31b300
    }

    .form-6 {
      width: 60%;
      margin-right: auto;
      margin-left: auto
    }

    .image-12 {
      margin-right: 10px
    }

    .slider-4 {
      height: auto;
      padding-bottom: 60px;
      background-color: transparent
    }

    .icon-5,
    .icon-6 {
      color: #079d56;
      font-size: 24px
    }

    .hero-landing {
      height: 720px;
      background-image: -webkit-gradient(linear, left top, right top, from(rgba(3, 3, 3, .5)), color-stop(57%, rgba(49, 49, 49, 0))), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/hero_v2_3.jpg);
      background-image: linear-gradient(90deg, rgba(3, 3, 3, .5), rgba(49, 49, 49, 0) 57%), linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/hero_v2_3.jpg);
      background-position: 0 0, 0 0, 50% 50%;
      background-size: auto, auto, cover
    }

    .hero-landing.sta-iria {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/hero_3.jpg);
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/hero_3.jpg);
      background-position: 0 0, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .hero-landing.regatas {
      background-image: -webkit-gradient(linear, left top, right top, from(rgba(3, 3, 3, .5)), color-stop(57%, rgba(49, 49, 49, 0))), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/hero_comercial.jpg);
      background-image: linear-gradient(90deg, rgba(3, 3, 3, .5), rgba(49, 49, 49, 0) 57%), linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/hero_comercial.jpg);
      background-position: 0 0, 0 0, 50% 50%;
      background-repeat: repeat, repeat, no-repeat
    }

    .div-info-hero {
      position: relative;
      top: 50%;
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%)
    }

    .col-text {
      padding-left: 0
    }

    .col-text.sta-iria {
      padding-top: 60px
    }

    .col-text.monte-mor-lan {
      text-align: left
    }

    .col-forms {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: end;
      -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
      justify-content: flex-end
    }

    .heading-lp {
      width: 315px;
      margin-bottom: 0;
      margin-left: 20px;
      color: #fff;
      font-size: 22px;
      line-height: 35px;
      font-weight: 300
    }

    .heading-lp.sta-iria {
      width: 270px
    }

    .heading-lp.regatas {
      position: relative;
      z-index: 2;
      width: 340px
    }

    .div-logos-hero {
      position: absolute;
      left: 0;
      top: 0;
      right: auto;
      bottom: auto;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 20px;
      margin-bottom: 0;
      margin-left: 25px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: end;
      -webkit-align-items: flex-end;
      -ms-flex-align: end;
      align-items: flex-end
    }

    .div-logos-hero.sta-iria {
      margin-top: 25px;
      margin-left: 20px;
      padding: 10px;
      border-radius: 5px;
      background-color: #fff
    }

    .div-logos-hero.elvira,
    .div-logos-hero.itapeva,
    .div-logos-hero.regatas {
      margin-top: 35px;
      padding: 5px 10px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 10px;
      background-color: #fff
    }

    .div-logos-hero.elvira,
    .div-logos-hero.itapeva {
      width: 130px;
      height: 130px
    }

    .div-logos-hero.elvira {
      background-image: none;
      width: auto;
      height: auto;
      margin-top: 0;
      margin-left: 0;
      padding: 0;
      background-color: transparent
    }

    .tag-hero {
      display: inline-block;
      margin-right: 10px;
      margin-bottom: 10px;
      padding: 10px 15px 8px;
      border: 2px solid #fff;
      border-radius: 5px;
      background-image: none;
      color: #fff;
      font-size: 16px;
      font-style: normal;
      font-weight: 500;
      text-transform: uppercase
    }

    .tag-hero.section2 {
      border-style: none;
      background-image: linear-gradient(135deg, #82ea5b, #079d56)
    }

    .tag-hero.destaque {
      border-style: none;
      background-image: linear-gradient(135deg, #ac41d8, #793f98)
    }

    .tag-hero.sta-iria {
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in
    }

    .tag-hero.sta-iria:hover {
      background-image: linear-gradient(135deg, #793f98, #ac41d8)
    }

    .div-tags {
      padding-left: 30px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .div-tags.sta-iria {
      padding-left: 0
    }

    .div-tags,
    .div-tags.regatas {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex
    }

    .div-tags.regatas {
      padding-left: 0
    }

    .div-tags.dunlop {
      padding-left: 0
    }

    .image-14 {
      margin-right: 40px;
      margin-bottom: -10px
    }

    .destaque-lp {
      display: inline-block;
      font-size: 42px;
      line-height: 49px;
      font-weight: 600
    }

    .destaque-lp.regatas {
      font-size: 37px;
      line-height: 48px
    }

    .destaque-lp.itapeva {
      width: 350px;
      font-size: 30px;
      line-height: 35px;
      font-weight: 400
    }

    .box {
      width: 380px;
      height: 307px;
      margin-top: 20px;
      margin-bottom: 40px;
      padding-top: 20px;
      background-image: url(../images/box_2.png);
      background-position: 0 0;
      background-size: 380px 307px;
      background-repeat: no-repeat
    }

    .box.sta-iria {
      width: 330px;
      height: 260px;
      background-image: url(../images/box.png);
      background-size: 330px 260px
    }

    .box.itapeva,
    .box.regatas {
      position: relative;
      width: 430px;
      height: 250px;
      margin-top: 130px;
      background-image: none;
      background-size: auto;
      background-repeat: repeat
    }

    .box.itapeva.comercial,
    .box.regatas.comercial {
      margin-top: 70px
    }

    .box.itapeva {
      margin-top: 190px;
      padding: 3px 24px 0
    }

    .div-forms-hero {
      width: 350px;
      border-radius: 20px
    }

    .div-forms-hero.regatas {
      margin-top: 60px
    }

    .div-forms-hero.itapeva {
      width: 370px;
      margin-top: 30px
    }

    .div-forms-hero.monte-mor-lan {
      width: 100%;
      margin-top: 0;
      padding: 32px;
      border-radius: 32px;
      background-color: rgba(0, 0, 0, .24)
    }

    .heading-21 {
      color: #fff;
      font-size: 22px;
      font-weight: 500;
      text-align: center
    }

    .label-form-lp {
      margin-bottom: 2px;
      color: #fff;
      font-size: 14px;
      line-height: 18px;
      font-weight: 300;
      text-align: left
    }

    .campo-form-lp {
      margin-bottom: 15px;
      border-style: none;
      border-width: 1px 1px 2px;
      border-color: #000 #000 transparent;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 0 12px -6px rgba(0, 0, 0, .75);
      font-size: 12px
    }

    .enviar-form-lp {
      margin-top: 20px;
      padding-right: 35px;
      padding-left: 35px;
      border-radius: 5px;
      background-image: linear-gradient(304deg, #ffb719, #ff8b22);
      box-shadow: 0 0 15px -7px #000;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      font-size: 14px;
      font-weight: 500;
      letter-spacing: .5px;
      text-transform: uppercase
    }

    .enviar-form-lp:hover {
      background-image: linear-gradient(304deg, #ff8b22, #ffb719);
      -webkit-transform: scale(1.03);
      -ms-transform: scale(1.03);
      transform: scale(1.03)
    }

    .form-7 {
      text-align: center
    }

    .traga-seu-negocio {
      padding-top: 80px;
      padding-bottom: 60px
    }

    .traga-seu-negocio.regatas {
      background-color: #fbfbfb
    }

    .select-field-4 {
      border-radius: 5px;
      box-shadow: 0 0 12px -6px #000;
      color: #6e6e6e;
      font-size: 13px
    }

    .columns-17 {
      width: 85%;
      margin-top: 60px;
      margin-right: auto;
      margin-left: auto
    }

    .paragraph-28 {
      color: #565656;
      font-size: 16px;
      line-height: 1.8;
      font-weight: 300
    }

    .paragraph-28.lp {
      margin-bottom: 20px;
      text-align: left
    }

    .paragraph-28.lp._2 {
      margin-bottom: 0
    }

    .paragraph-28,
    .paragraph-28.lp.center {
      text-align: center
    }

    .bold-text-30 {
      color: #ff8b22;
      font-weight: 500
    }

    .bold-text-30._2 {
      color: #f7287c
    }

    .bold-text-30._7 {
      color: #079d56
    }

    .bold-text-30.lime {
      color: #82ea5b
    }

    .column-50 {
      padding-top: 15px;
      padding-right: 20px;
      padding-left: 0
    }

    .slide-6 {
      background-image: url(../images/img-01.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .slide-nav-4 {
      margin-bottom: 0
    }

    .icon-7 {
      margin-right: 15px;
      color: #fff;
      font-size: 24px;
      text-shadow: 0 0 4px rgba(0, 0, 0, .5)
    }

    .icon-7._2 {
      margin-right: 41px;
      margin-left: 15px
    }

    .slide-10,
    .slide-7,
    .slide-8,
    .slide-9 {
      background-image: url(../images/img-02.jpg);
      background-position: 50% 50%;
      background-size: cover
    }

    .slide-10,
    .slide-8,
    .slide-9 {
      background-image: url(../images/img-03.jpg);
      background-repeat: no-repeat
    }

    .slide-10,
    .slide-9 {
      background-image: url(../images/img-04.jpg)
    }

    .slide-10 {
      background-image: url(../images/img-05.jpg)
    }

    .heading-22 {
      margin-top: 120px;
      color: #ff8b22;
      font-weight: 500;
      text-align: center
    }

    .slider-5 {
      height: 400px
    }

    .imagem-loteamento {
      margin-top: 20px;
      text-align: center
    }

    .condicoes {
      padding-top: 80px;
      padding-bottom: 80px;
      background-image: url(../images/pattern2.png), url(../images/pattern.png), -webkit-gradient(linear, left top, left bottom, from(#006b3f), to(#00d38d));
      background-image: url(../images/pattern2.png), url(../images/pattern.png), linear-gradient(180deg, #006b3f, #00d38d);
      background-position: -5% 50%, 105% 50%, 0 0;
      background-size: contain, contain, auto;
      background-repeat: no-repeat, no-repeat, repeat
    }

    .condicoes.minha-casa {
      background-color: #fdfdfd;
      background-image: url(../images/pattern2.png), url(../images/pattern.png);
      background-position: -5% 50%, 105% 50%;
      background-size: contain, contain;
      background-repeat: no-repeat, no-repeat
    }

    .bold-text-31 {
      color: #82eb5c;
      font-weight: 500
    }

    .div-condicoes {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 80%;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .box-condicoes {
      width: 300px;
      padding: 20px;
      border-right: 1px solid #fff;
      text-align: center
    }

    .box-condicoes.end {
      border-right-style: none
    }

    .text-block-36 {
      width: 80%;
      margin-top: 20px;
      margin-right: auto;
      margin-left: auto;
      color: #fff;
      font-size: 16px
    }

    .div-cta {
      margin-top: 40px;
      text-align: center
    }

    .div-cta._2 {
      margin-top: 20px
    }

    .cta-condicoes {
      padding-right: 35px;
      padding-left: 35px;
      border-radius: 5px;
      background-image: linear-gradient(100deg, #ffb719, #ff8b22);
      box-shadow: 0 0 14px -4px #006b3f;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #fff;
      font-size: 16px;
      font-weight: 500
    }

    .cta-condicoes:hover {
      background-image: linear-gradient(100deg, #ff8b22, #ffb719);
      -webkit-transform: scale(1.03);
      -ms-transform: scale(1.03);
      transform: scale(1.03)
    }

    .cta-condicoes.regatas {
      box-shadow: 0 0 14px -4px #ff8b22
    }

    .localizacao-lp {
      padding-top: 80px;
      padding-bottom: 80px
    }

    .columns-18,
    .text-block-37 {
      margin-right: auto;
      margin-left: auto
    }

    .text-block-37 {
      width: 80%;
      margin-top: 20px;
      color: #ff8b22;
      font-size: 22px;
      font-weight: 300;
      text-align: center
    }

    .columns-18 {
      width: 90%;
      margin-top: 60px
    }

    .div-proximidade {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 150px;
      height: 150px;
      margin-right: 15px;
      padding: 10px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 15px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(#82ea5b), to(#00d38d));
      background-image: linear-gradient(180deg, #82ea5b, #00d38d)
    }

    .image-15 {
      margin-bottom: 15px
    }

    .text-block-38 {
      color: #fff;
      font-size: 13px;
      line-height: 16px;
      text-align: center
    }

    .div-grupo-proximidades {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 40px;
      margin-bottom: 40px;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .column-51 {
      padding-right: 30px;
      padding-left: 0
    }

    .map-2 {
      height: 500px
    }

    .institucional {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #f5f5f5;
      background-image: url(../images/marca-dagua.png);
      background-position: 100% 50%;
      background-size: contain;
      background-repeat: no-repeat
    }

    .columns-19 {
      width: 90%;
      margin-right: auto;
      margin-left: auto
    }

    .column-52 {
      padding-top: 20px;
      padding-left: 0
    }

    .column-52.sta-iria {
      padding-top: 0
    }

    .div-marcas {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-marcas.sta-iria {
      margin-top: 20px
    }

    .div-logo {
      margin-bottom: 20px;
      padding: 15px 20px;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 0 12px -5px #ff8b22
    }

    .section-cta {
      padding-top: 80px;
      padding-bottom: 80px;
      background-image: linear-gradient(96deg, #ffb719, #ff8b22)
    }

    .button-10 {
      padding-right: 35px;
      padding-left: 35px;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 1px 1px 12px -3px #c76104;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #ff8b22;
      font-size: 16px
    }

    .button-10:hover {
      -webkit-transform: scale(1.03);
      -ms-transform: scale(1.03);
      transform: scale(1.03)
    }

    .texto-legal {
      padding-top: 30px;
      padding-bottom: 30px;
      background-color: #535353
    }

    .paragraph-29 {
      margin-bottom: 0;
      color: #b1b1b1;
      font-size: 12px;
      font-weight: 300
    }

    .div-ponto-de-conversao {
      width: 90%;
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 0 12px -5px rgba(0, 0, 0, .4)
    }

    .h3-ponto-de-conversao {
      margin-top: 0;
      margin-bottom: 15px;
      color: #079d56;
      font-size: 22px;
      font-weight: 600;
      text-align: left
    }

    .h3-ponto-de-conversao._2 {
      color: #6e6e6e;
      font-size: 18px;
      line-height: 22px;
      font-weight: 400
    }

    .paragraph-30 {
      margin-bottom: 15px;
      color: #565656;
      font-size: 16px;
      line-height: 1.6;
      font-weight: 300;
      text-align: left
    }

    .button-conversao,
    .button-conversao._2:hover {
      padding-right: 30px;
      padding-left: 30px;
      background-color: #ff8b22
    }

    .button-conversao {
      margin-right: 20px;
      border: 1px solid transparent;
      border-radius: 100px;
      background-image: -webkit-gradient(linear, left top, right top, from(#ff8b22), to(#ffb719));
      background-image: linear-gradient(90deg, #ff8b22, #ffb719);
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in
    }

    .button-conversao._2,
    .button-conversao:hover {
      border-style: solid;
      border-color: #ff8b22;
      background-color: transparent;
      background-image: none;
      color: #ff8b22
    }

    .button-conversao:hover {
      padding-right: 40px;
      padding-left: 40px
    }

    .button-conversao._2 {
      margin-right: 0;
      border-width: 1px
    }

    .button-conversao._2:hover {
      color: #fff
    }

    .button-conversao._3 {
      margin-right: 10px;
      padding-right: 20px;
      padding-left: 20px
    }

    .button-conversao._3:hover {
      padding-right: 32px;
      padding-left: 32px
    }

    .radio-button-2 {
      width: 40px;
      height: 40px;
      margin-top: 0;
      margin-right: 15px;
      margin-left: 5px;
      border-style: none;
      border-radius: 0;
      background-image: url(../images/pin_Prancheta-1.png);
      background-position: 50% 50%;
      background-size: 35px;
      background-repeat: no-repeat;
      -webkit-filter: invert(100%);
      filter: invert(100%)
    }

    .radio-button-2.w--redirected-checked {
      border: 1px #000;
      -webkit-filter: invert(100%);
      filter: invert(100%)
    }

    .radio-button-2.w--redirected-focus {
      border-style: none;
      box-shadow: none
    }

    .radio-button-2._2,
    .radio-button-2._3 {
      background-image: url(../images/icons_verde.png);
      background-size: 45px
    }

    .radio-button-2._3 {
      background-image: url(../images/icons_lazer.png)
    }

    .radio-button-field-3 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 75%;
      margin-bottom: 10px;
      padding: 5px 10px 5px 0;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-style: solid;
      border-width: 1px;
      border-color: #00d38d;
      border-radius: 10px;
      background-color: #00d38d;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in
    }

    .radio-button-field-3:hover {
      -webkit-transform: scale(1.02);
      -ms-transform: scale(1.02);
      transform: scale(1.02)
    }

    .radio-button-field-3:focus {
      border-color: #006b3f
    }

    .radio-button-label-2 {
      color: #fff
    }

    .bold-text-32 {
      color: #ac41d8;
      font-weight: 600
    }

    .div-etapa2 {
      overflow: hidden;
      height: 0;
      margin-top: 40px
    }

    .button-11 {
      margin-left: 5px;
      border-radius: 5px;
      background-image: -webkit-gradient(linear, left top, right top, from(#00d38d), to(#82ea5b));
      background-image: linear-gradient(90deg, #00d38d, #82ea5b);
      -webkit-transition: all 200ms ease-in;
      transition: all 200ms ease-in
    }

    .button-11:hover {
      -webkit-transform: scale(1.01);
      -ms-transform: scale(1.01);
      transform: scale(1.01)
    }

    .button-11.smarturba {
      margin-top: 30px;
      margin-left: 0;
      background-image: -webkit-gradient(linear, left top, right top, from(#079d56), to(#00d38d));
      background-image: linear-gradient(90deg, #079d56, #00d38d);
      font-size: 16px;
      font-weight: 500
    }

    .button-11.smarturba:hover {
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05)
    }

    .button-11.smarturba._2 {
      margin-top: 0;
      background-image: -webkit-gradient(linear, left top, right top, from(#ff8b22), to(#ffb719));
      background-image: linear-gradient(90deg, #ff8b22, #ffb719)
    }

    .button-11.smarturba._2.w--current {
      padding-right: 20px;
      padding-left: 20px
    }

    .button-11.smarturba._2.mobile {
      display: none
    }

    .select-field-5 {
      border-style: solid;
      border-width: 1px;
      border-color: #00d38d;
      border-radius: 5px;
      background-color: #fff;
      color: #079d56
    }

    .div-etapa2-2 {
      overflow: hidden;
      height: 0
    }

    .bold-text-33 {
      color: #ac41d8;
      font-weight: 600
    }

    .columns-20 {
      margin-bottom: 10px
    }

    .heading-23 {
      margin-top: 0;
      margin-bottom: 0;
      color: #fff;
      font-size: 40px;
      line-height: 1.3;
      font-weight: 500;
      text-align: center;
      letter-spacing: .3px
    }

    .heading-23.area-cliente {
      width: 50%;
      font-size: 32px;
      line-height: 1.5
    }

    .heading-23.area-cliente,
    .heading-23.investidores {
      color: #079d56;
      font-weight: 300;
      text-align: left
    }

    .bold-text-34 {
      color: #ff8b22
    }

    .section-texto-relatorios {
      padding-top: 60px;
      padding-bottom: 60px
    }

    .div-categorias,
    .paragraph-31 {
      width: 65%;
      margin-right: auto;
      margin-left: auto
    }

    .paragraph-31 {
      margin-top: 20px;
      color: #ff8b22;
      font-size: 20px;
      line-height: 1.6;
      font-weight: 300;
      text-align: center
    }

    .paragraph-31.fale-com-ri {
      font-size: 18px;
      font-weight: 400;
      text-align: right
    }

    .div-categorias {
      margin-bottom: 40px
    }

    .duvida-3 {
      width: 90%;
      float: left;
      color: #079d56;
      font-size: 16px;
      line-height: 1.5;
      font-weight: 500
    }

    .duvida-3.resposta {
      color: #ff8b22;
      font-size: 14px
    }

    .div-seta-3 {
      width: 12px;
      height: 12px;
      margin-right: 10px;
      float: right;
      border-right: 2px solid #006b3f;
      border-bottom: 2px solid #079d56;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg)
    }

    .list-item-8 {
      margin-bottom: 5px;
      text-align: left
    }

    .link-7,
    .list-8 {
      color: #ff8b22
    }

    .link-7 {
      -webkit-transition: all 200ms ease-in;
      transition: all 200ms ease-in;
      text-decoration: none
    }

    .link-7:hover {
      text-decoration: underline
    }

    .text-block-39 {
      margin-bottom: 10px;
      border-bottom: 1px solid #ff8b22;
      color: #ff8b22;
      font-weight: 500;
      text-align: left
    }

    .text-block-39._2 {
      margin-top: 20px
    }

    .div-conselheiro {
      margin-bottom: 10px;
      padding: 8px;
      border-style: solid;
      border-width: 1px;
      border-color: #dadada;
      border-radius: 5px
    }

    .text-block-40,
    .text-block-41 {
      padding-left: 3px;
      color: #6e6e6e;
      text-align: left
    }

    .text-block-40 {
      margin-bottom: 5px;
      border-bottom: 1px solid #eee;
      font-size: 16px
    }

    .text-block-41 {
      font-size: 12px;
      font-weight: 300
    }

    .bold-text-35 {
      font-size: 12px;
      font-weight: 400
    }

    .column-58 {
      padding-left: 0
    }

    .column-59 {
      padding-right: 0
    }

    .list-item-9 {
      margin-bottom: 5px;
      color: #6e6e6e;
      text-align: left
    }

    .div-resposta-2 {
      overflow: hidden;
      height: 0
    }

    .link-8 {
      -webkit-transition: all 200ms ease-in;
      transition: all 200ms ease-in;
      color: #ff8b22;
      text-decoration: none
    }

    .link-8:hover {
      text-decoration: underline
    }

    .text-block-42 {
      position: absolute;
      left: auto;
      top: auto;
      right: 10px;
      bottom: 10px;
      color: #fff;
      font-size: 12px;
      text-shadow: 1px 1px 6px #000
    }

    .asterisco {
      font-size: 10px;
      line-height: 0;
      font-weight: 300
    }

    .text-block-43 {
      color: #fff;
      text-shadow: 0 0 3px #000
    }

    .link-9 {
      color: #82ea5b
    }

    .checkbox-field {
      display: inline-block;
      margin-bottom: 0;
      text-align: center
    }

    .checkbox-label {
      color: #fff;
      text-shadow: 0 0 3px #000
    }

    .div-block-5 {
      margin-top: 5px
    }

    .campo-form-lp-2 {
      margin-bottom: 15px;
      border-style: none;
      border-width: 1px 1px 2px;
      border-color: #000 #000 transparent;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 0 12px -6px rgba(0, 0, 0, .75);
      font-size: 12px
    }

    .campo-form-lp-2.itapeva {
      border-style: none none solid;
      border-width: 1px 1px 2px;
      border-color: #000 #000 #fff;
      border-radius: 0;
      background-color: transparent;
      box-shadow: none;
      color: #fff
    }

    .campo-form-lp-2.itapeva:active {
      color: #fff
    }

    .campo-form-lp-2.itapeva:focus {
      color: #565656;
      text-shadow: 1px 1px 20px #000
    }

    .heading-24,
    .tag-hero-2 {
      color: #fff;
      font-weight: 500
    }

    .tag-hero-2 {
      display: inline-block;
      margin-right: 10px;
      margin-bottom: 10px;
      padding: 10px 15px 8px;
      border: 2px solid #fff;
      border-radius: 5px;
      background-image: none;
      font-size: 16px;
      font-style: normal;
      text-transform: uppercase
    }

    .tag-hero-2.destaque {
      border-style: none;
      background-image: linear-gradient(135deg, #ac41d8, #793f98)
    }

    .tag-hero-2.destaque.regatas,
    .tag-hero-2.section2.dunlop.wire {
      border-style: solid;
      background-image: none
    }

    .tag-hero-2.destaque.itapeva {
      display: none;
      margin-top: 22px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(#f18812), to(#f18812));
      background-image: linear-gradient(180deg, #f18812, #f18812)
    }

    .tag-hero-2.dunlop-box-hero {
      width: 250px;
      border-width: 1px;
      border-color: #84ff56;
      color: #84ff56;
      font-weight: 400;
      text-align: center
    }

    .tag-hero-2.dunlop-box-hero.vila-profeta-hero {
      width: 300px;
      border-style: none;
      border-width: 0;
      background-image: linear-gradient(135deg, #ac41d8, #793f98);
      color: #fff
    }

    .tag-hero-2.section2 {
      border-style: none;
      background-image: linear-gradient(135deg, #82ea5b, #079d56)
    }

    .tag-hero-2.section2.dunlop {
      background-color: #793f98;
      background-image: none;
      color: #fff;
      line-height: 1.4em;
      font-weight: 400
    }

    .tag-hero-2.section2.dunlop.wire {
      padding-right: 20px;
      padding-left: 20px;
      font-size: 14px
    }

    .heading-24 {
      font-size: 22px;
      text-align: center
    }

    .heading-24.dunlop {
      text-shadow: 0 0 6px #000
    }

    .heading-24.dunlop.wire,
    .label-form-lp-2.dunlop.wire {
      color: #6e6e6e
    }

    .heading-24.minha-casa,
    .tag-breve-lan-amento.comercial.dunlop {
      margin-top: 0
    }

    .heading-24.itapeva {
      text-shadow: 1px 1px 6px #000
    }

    .enviar-form-lp-2 {
      margin-top: 20px;
      padding: 10px 35px 8px;
      border-radius: 5px;
      background-color: #ff8b22;
      box-shadow: 0 0 15px -7px #000;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #fff;
      font-size: 14px;
      font-weight: 500;
      letter-spacing: .5px;
      text-transform: uppercase
    }

    .enviar-form-lp-2:hover {
      background-image: linear-gradient(304deg, #ff8b22, #ffb719);
      -webkit-transform: scale(1.03);
      -ms-transform: scale(1.03);
      transform: scale(1.03)
    }

    .enviar-form-lp-2,
    .enviar-form-lp-2.elvira,
    .enviar-form-lp-2.itapeva {
      background-image: linear-gradient(304deg, #ffb719, #ff8b22)
    }

    .enviar-form-lp-2.botao-verde {
      margin-top: 40px;
      background-image: linear-gradient(304deg, #006b3f, #00d38d)
    }

    .heading-lp-2 {
      width: 315px;
      margin-top: 0;
      margin-bottom: 0;
      margin-left: 20px;
      color: #fff;
      font-size: 22px;
      line-height: 35px;
      font-weight: 300
    }

    .heading-lp-2.itapeva,
    .heading-lp-2.regatas {
      position: relative;
      z-index: 2;
      width: 300px;
      line-height: 32px
    }

    .heading-lp-2.itapeva {
      font-size: 20px;
      width: 450px
    }

    .select-field-6 {
      border-radius: 5px;
      box-shadow: 0 0 12px -6px #000;
      color: #6e6e6e;
      font-size: 13px
    }

    .select-field-6.dunlop {
      background-color: #fff
    }

    .label-form-lp-2 {
      margin-bottom: 2px;
      color: #fff;
      font-size: 14px;
      line-height: 18px;
      font-weight: 300;
      text-align: left
    }

    .text-block-44 {
      color: #fff;
      text-shadow: 0 0 2px #000
    }

    .label-form-lp-2.vila-profeta,
    .link-10 {
      color: #fff
    }

    .link-10.wire {
      color: #565656
    }

    .checkbox-label-2 {
      color: #fff;
      text-shadow: 0 0 2px #000
    }

    .div-box-contorno,
    .div-box-preenchido {
      position: absolute;
      right: auto;
      bottom: auto;
      width: 340px;
      height: 210px;
      border-radius: 20px
    }

    .div-box-preenchido {
      left: 0;
      top: 0;
      z-index: 1;
      background-image: linear-gradient(45deg, #00d38d, #82ea5b)
    }

    .div-box-contorno.regatas-comercial,
    .div-box-preenchido.regatas-comercial {
      width: 370px
    }

    .div-box-contorno {
      left: 30px;
      top: 30px;
      border-style: solid;
      border-width: 5px;
      border-color: #ff8b22
    }

    .div-box-contorno.elvira,
    .div-box-contorno.itapeva {
      width: 370px;
      height: 185px;
      border-color: #ff8b22
    }

    .div-box-contorno.residencial-progresso {
      width: 370px;
      height: 185px;
      border-color: #e9bb00
    }

    .div-box-contorno.parque-vitoria {
      width: 370px;
      height: 185px;
      border-color: #00d38d
    }

    .feature {
      display: none;
      width: 55%;
      margin-bottom: 5px;
      padding-top: 5px;
      padding-bottom: 5px;
      padding-left: 10px;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 5px;
      background-color: rgba(0, 0, 0, .3)
    }

    .image-16 {
      margin-right: 10px
    }

    .text-block-45 {
      display: inline;
      color: #fff;
      font-size: 16px
    }

    .text-block-46 {
      position: absolute;
      left: auto;
      top: auto;
      right: 10px;
      bottom: 10px;
      color: #fff;
      font-size: 12px;
      text-shadow: 1px 1px 6px #000
    }

    .icon-8 {
      margin-right: 15px;
      color: #fff;
      font-size: 24px;
      text-shadow: 0 0 4px rgba(0, 0, 0, .5)
    }

    .icon-8._2 {
      margin-right: 41px;
      margin-left: 15px
    }

    .slide-11,
    .slide-12,
    .slide-13 {
      background-image: url(../images/01.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .slide-12,
    .slide-13 {
      background-image: url(../images/02.jpg)
    }

    .slide-13 {
      background-image: url(../images/5f625382f176bd588103dd43_03.jpg)
    }

    .slide-14 {
      background-image: url(../images/5f62539d9d5e17c2647715d4_04.jpg);
      background-position: 0 0;
      background-size: auto
    }

    .tag-breve-lan-amento,
    .text-block-47 {
      position: absolute;
      left: auto;
      bottom: auto
    }

    .tag-breve-lan-amento {
      top: 0;
      right: 0;
      overflow: hidden;
      width: 250px;
      height: 200px;
      margin-top: 100px
    }

    .tag-breve-lan-amento.comercial {
      margin-top: 100px
    }

    .text-block-47 {
      top: 50px;
      right: -50px;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 290px;
      height: 50px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      background-image: linear-gradient(45deg, #00d38d, #82ea5b);
      -webkit-transform: rotate(40deg);
      -ms-transform: rotate(40deg);
      transform: rotate(40deg);
      color: #fff;
      font-size: 16px;
      font-weight: 500;
      text-align: center;
      text-transform: uppercase
    }

    .text-block-47.wire {
      background-image: linear-gradient(113deg, #3a3a3a, #a8a7a7), linear-gradient(45deg, #00d38d, #82ea5b)
    }

    .text-block-47.dunlop {
      background-image: linear-gradient(45deg, #ff5aad, #f7287c)
    }

    .text-block-47.vila-profeta {
      background-image: linear-gradient(45deg, #ff8b22, #f7287c, #ff5aad)
    }

    .text-block-47.itapeva {
      background-image: linear-gradient(45deg, #ff8b22, #ffb719)
    }

    .text-block-47.montemor {
      background-image: linear-gradient(45deg, #ffb719, #ff8b22)
    }

    .text-block-47.parque-vitoria,
    .text-block-47.residencial-progresso {
      background-color: #433868;
      background-image: none;
      color: #ffb719;
      font-weight: 400
    }

    .text-block-47.parque-vitoria {
      background-color: #00d38d
    }

    .bold-text-36 {
      margin-left: -5px;
      padding-right: 5px;
      padding-left: 5px;
      background-color: #ff8b22;
      color: #fff;
      font-weight: 300
    }

    .hero {
      height: 700px;
      margin-top: 100px;
      background-image: -webkit-gradient(linear, left top, right top, color-stop(18%, #793f98), color-stop(80%, transparent)), url(../images/Imagem_Smart08.jpg);
      background-image: linear-gradient(90deg, #793f98 18%, transparent 80%), url(../images/Imagem_Smart08.jpg);
      background-position: 0 0, 50% 5%;
      background-size: auto, cover;
      background-repeat: repeat, repeat
    }

    .heading-25 {
      margin-top: 0;
      color: #fff;
      font-size: 52px;
      line-height: 1.1em;
      font-weight: 600
    }

    .image-18 {
      position: absolute;
      left: auto;
      top: 10%;
      right: 0;
      bottom: auto;
      overflow: hidden;
      margin-bottom: 40px;
      border-radius: 5px;
      box-shadow: 0 0 9px 0 rgba(0, 0, 0, .25)
    }

    .heading-26,
    .paragraph-32 {
      margin-top: 0;
      margin-bottom: 0;
      color: #82ea5b;
      font-size: 20px
    }

    .paragraph-32 {
      margin-top: 20px;
      color: #fff;
      font-size: 16px;
      line-height: 1.6em
    }

    .entenda {
      padding-top: 80px;
      padding-bottom: 80px
    }

    .columns-21 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 60px;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .paragraph-33 {
      margin-bottom: 20px;
      color: #565656;
      line-height: 1.6em;
      font-weight: 300
    }

    .column-60 {
      padding-left: 40px
    }

    .column-60.dunlop {
      padding-top: 15px;
      padding-right: 0;
      padding-left: 0
    }

    .grid-3 {
      -ms-grid-columns: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr;
      -ms-grid-rows: 150px 150px;
      grid-template-rows: 150px 150px
    }

    .grid-3.dunlop {
      grid-column-gap: 10px;
      -ms-grid-columns: 1fr 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto
    }

    .grid-3.dunlop.display-hidden {
      display: none
    }

    .column-61 {
      padding-top: 0
    }

    .column-61.dunlop {
      padding-top: 20px;
      padding-right: 60px;
      padding-left: 0
    }

    .box-entenda {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      padding: 10px 20px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 10px;
      box-shadow: 0 0 12px -6px #ff8b22
    }

    .text-block-48 {
      margin-top: 20px;
      color: #079d56;
      font-size: 14px;
      line-height: 1.4em;
      font-weight: 500;
      text-align: center
    }

    .video {
      padding-top: 80px;
      padding-bottom: 80px;
      background-image: url(../images/casinha-gray-01.png);
      background-position: 100% 100%;
      background-size: auto;
      background-repeat: no-repeat;
      background-attachment: fixed
    }

    .div-video {
      overflow: hidden;
      width: 70%;
      margin-top: 60px;
      margin-right: auto;
      margin-left: auto;
      border-radius: 10px;
      box-shadow: 0 0 20px -12px #00d38d
    }

    .lotes-smarturba {
      display: none;
      background-image: linear-gradient(45deg, #006b3f, #079d56)
    }

    .como-funciona,
    .lotes-smarturba,
    .section-form {
      padding-top: 80px;
      padding-bottom: 80px
    }

    .section-form {
      position: relative;
      padding-bottom: 100px;
      background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, .52)), color-stop(13%, rgba(255, 255, 255, 0))), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), color-stop(32%, transparent)), url(../images/contato.jpg);
      background-image: linear-gradient(0deg, rgba(0, 0, 0, .52), rgba(255, 255, 255, 0) 13%), linear-gradient(180deg, rgba(0, 0, 0, .5), transparent 32%), url(../images/contato.jpg);
      background-position: 0 0, 0 0, 50% 100%;
      background-size: auto, auto, cover;
      background-repeat: repeat, repeat, no-repeat;
      background-attachment: scroll, scroll, fixed
    }

    .submit-button-7 {
      margin-top: 30px;
      padding-right: 40px;
      padding-left: 40px;
      border-style: solid;
      border-width: 1px;
      border-color: #ac41d8;
      border-radius: 20px;
      background-color: #ac41d8;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      text-transform: uppercase
    }

    .submit-button-7:hover {
      background-color: transparent;
      color: #ac41d8
    }

    .text-field-6 {
      border-style: none none solid;
      border-width: 1px;
      border-color: #000 #000 #079d56;
      border-radius: 3px;
      box-shadow: 0 0 12px -3px rgba(0, 0, 0, .15);
      color: #079d56;
      font-weight: 300
    }

    .text-field-6.menor {
      width: 97%
    }

    .heading-27 {
      width: 80%;
      margin-top: 0;
      margin-right: auto;
      margin-left: auto;
      color: #6e6e6e;
      font-size: 28px;
      line-height: 1.4;
      font-weight: 200;
      text-align: center;
      text-transform: none
    }

    .heading-27.forms {
      width: 100%
    }

    .heading-27.center._32px.minha-casa,
    .heading-27.center.wire-branco {
      color: #fff
    }

    .heading-27.center._32px {
      font-size: 32px
    }

    .heading-27.center.white {
      color: #fff;
      font-weight: 300
    }

    .heading-27.center.white.call {
      font-weight: 400
    }

    .heading-27.tour-dunlop {
      width: 65%;
      margin-right: 60px;
      margin-left: 0;
      font-size: 36px;
      line-height: 1.2;
      text-align: left
    }

    .heading-27.com._32px,
    .heading-27.galeria._32px,
    .heading-27.tour-dunlop._32px {
      font-size: 32px
    }

    .heading-27.tour-dunlop._32px._2 {
      width: 50%
    }

    .heading-27.com {
      margin-right: 0;
      margin-left: 0;
      text-align: left
    }

    .heading-27.com._32px.branco {
      color: #fff
    }

    .heading-27.galeria {
      width: 100%;
      margin: 0 0 20px;
      color: #fff;
      text-align: left
    }

    .heading-27.center.sao-roque-header {
      margin-top: -60px
    }

    .destaque-h2-2 {
      color: #ff8b22;
      font-weight: 600
    }

    .destaque-h2-2.wire {
      color: #565656
    }

    .destaque-h2-2.wire.branco {
      color: #fff
    }

    .destaque-h2-2.vila-profeta {
      color: #ff5aad
    }

    .destaque-h2-2.vila-profeta._3 {
      color: #00d38d
    }

    .escolha-cidade-2 {
      margin-top: 20px;
      border: 1px #000;
      background-color: #fff;
      box-shadow: 0 5px 15px -3px rgba(0, 107, 63, .25);
      color: #ff8b22
    }

    .escolha-cidade-2.uf {
      margin-top: 0
    }

    .paragraph-34 {
      width: 70%;
      margin-right: auto;
      margin-left: auto;
      color: #fff;
      font-size: 16px;
      line-height: 1.5em;
      font-weight: 300;
      text-align: center;
      text-shadow: 0 0 9px #000
    }

    .div-features {
      position: relative;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-wrap: nowrap;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .div-features._2 {
      margin-top: 180px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: reverse;
      -webkit-flex-direction: row-reverse;
      -ms-flex-direction: row-reverse;
      flex-direction: row-reverse
    }

    .div-features,
    .div-features._2.dunlop-2 {
      margin-top: 140px
    }

    .div-features._3,
    .div-features._4 {
      margin-top: 180px
    }

    .div-features._2.dunlop-2.div-conviva-em-harmonia,
    .div-features.display-hidden {
      display: none
    }

    .div-features.dunlop {
      margin-top: 40px
    }

    .imagem-smarturba {
      position: relative;
      width: 600px;
      height: 400px;
      border-radius: 10px;
      background-image: url(../images/Imagem_Smart06.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat;
      box-shadow: 0 0 10px 0 rgba(0, 0, 0, .25)
    }

    .imagem-smarturba._2 {
      background-image: url(../images/Imagem_Smart07.jpg);
      background-position: 100% 50%
    }

    .imagem-smarturba._2.wire {
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%)
    }

    .imagem-smarturba._2.dunlop-img {
      z-index: 2;
      width: 400px;
      background-image: url(../images/Parque-Linear_Vista-Aerea-1.jpg);
      background-position: 50% 50%
    }

    .imagem-smarturba._3 {
      background-image: url(../images/Imagem_Smart03.jpg)
    }

    .imagem-smarturba._4 {
      background-image: url(../images/Imagem_Smart04.jpg)
    }

    .imagem-smarturba._6 {
      background-image: url(../images/ImagemSmart01.jpg)
    }

    .imagem-smarturba._6.wire {
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%)
    }

    .imagem-smarturba._6.dunlop-img {
      z-index: 2;
      width: 400px;
      background-image: url(../images/smart-dunlop-02.jpg)
    }

    .imagem-smarturba._5 {
      background-image: url(../images/Imagem_Smart05.jpg)
    }

    .imagem-smarturba._7 {
      background-image: url(../images/Imagem_Smart02.jpg)
    }

    .imagem-smarturba._7.wire {
      margin-top: 0;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%)
    }

    .imagem-smarturba._7.dunlop-img {
      z-index: 2;
      width: 400px;
      height: 400px;
      background-image: url(../images/InstagramÃ¡vel.png);
      background-size: cover
    }

    .imagem-smarturba.dunlop {
      background-image: url(https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg), url(../images/Imagem_Smart06.jpg);
      background-position: 0 0, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .imagem-smarturba.wire {
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%)
    }

    .imagem-smarturba.wire.margin-top {
      margin-top: 20px
    }

    .imagem-smarturba.dunlop-img {
      z-index: 2;
      width: 400px;
      background-image: url(../images/smart-dunlop-04.jpg)
    }

    .imagem-smarturba.dunlop-img.vila-profeta {
      background-image: url(../images/Vistas-aereas.png)
    }

    .div-info-smarturba {
      width: 50%;
      margin-left: 30px
    }

    .div-info-smarturba._2 {
      margin-right: 40px;
      margin-left: 0
    }

    .div-info-smarturba._2.dunlop {
      margin-top: 10px;
      margin-right: 80px;
      margin-left: 0
    }

    .div-info-smarturba._2.dunlop.margin-top-off {
      margin-top: 0
    }

    .div-info-smarturba.dunlop {
      width: 60%;
      margin-left: 80px
    }

    .paragraph-35 {
      color: #565656;
      line-height: 1.5em;
      font-weight: 300;
      text-align: left
    }

    .heading-28._2,
    .paragraph-35._2 {
      text-align: right
    }

    .heading-28 {
      margin-top: 10px;
      color: #079d56;
      font-weight: 600
    }

    .heading-28._2 {
      color: #793f98
    }

    .heading-28._3 {
      color: #ac41d8
    }

    .heading-28._4 {
      color: #ff5aad;
      text-align: right
    }

    .heading-28._5 {
      margin-top: 30px;
      color: #793f98
    }

    .heading-28._6 {
      color: #ac41d8;
      text-align: right
    }

    .bold-text-37 {
      color: #ff5aad
    }

    .bold-text-37._2 {
      color: #ff8b22
    }

    .bold-text-37._3 {
      color: #00d38d
    }

    .bold-text-37._4,
    .bold-text-37._5 {
      color: #ff8b22
    }

    .bold-text-37._6 {
      color: #f7287c
    }

    .bold-text-37._7 {
      color: #ff8b22
    }

    .topico,
    .topicos {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .topico {
      width: 24%;
      min-height: 130px;
      margin-right: 10px;
      padding: 10px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #f7287c, #ff5aad);
      text-align: center
    }

    .topico._2 {
      min-height: 130px;
      margin-right: 0;
      margin-left: 10px;
      background-image: linear-gradient(45deg, #ff8b22, #ffb719)
    }

    .topico._3 {
      background-image: linear-gradient(45deg, #079d56, #00d38d)
    }

    .topico._4 {
      min-height: 130px;
      margin-right: 0;
      margin-left: 10px
    }

    .topico._5 {
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .topico._6 {
      margin-right: 0;
      margin-left: 10px
    }

    .topico._7 {
      background-image: linear-gradient(45deg, #006b3f, #82ea5b)
    }

    .text-block-49 {
      color: #fff;
      line-height: 1.3em;
      font-weight: 400;
      text-align: center
    }

    .image-19 {
      margin-bottom: 10px
    }

    .image-20 {
      position: absolute;
      left: -30px;
      top: -50px;
      z-index: 1
    }

    .image-20._2 {
      left: -30px;
      top: -40px;
      right: auto;
      bottom: auto
    }

    .image-20._3 {
      top: -40px
    }

    .image-20.wire {
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%)
    }

    .image-20._4 {
      left: auto;
      top: -30px;
      right: -30px;
      bottom: auto
    }

    .image-20.display-hidden {
      display: none
    }

    .image-21,
    .image-21._2 {
      left: auto;
      top: auto;
      bottom: -40px
    }

    .image-21 {
      position: absolute;
      right: 30px
    }

    .image-21._2 {
      right: -30px
    }

    .image-21.wire {
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%)
    }

    .image-21._5 {
      left: 10px;
      top: auto;
      right: auto;
      bottom: -30px
    }

    .image-21.display-hidden {
      display: none
    }

    .bold-text-38 {
      color: #82ea5b
    }

    .div-button-smarturba {
      margin-top: 140px;
      margin-bottom: 20px;
      text-align: center
    }

    .bold-text-39 {
      font-weight: 600
    }

    .text-block-50 {
      position: absolute;
      left: 0;
      top: auto;
      right: 0;
      bottom: 20px;
      color: #fff;
      text-align: center;
      text-shadow: 1px 1px 6px #000
    }

    .cta-provisorio {
      display: block;
      padding-top: 100px;
      padding-bottom: 100px;
      background-image: url(../images/pattern.png), url(../images/pattern2.png), linear-gradient(45deg, #006b3f, #079d56);
      background-position: 100% 50%, 0 50%, 0 0;
      background-size: 350px, 350px, auto;
      background-repeat: no-repeat, no-repeat, repeat
    }

    .heading-29 {
      margin-top: 0;
      color: #fff;
      font-size: 28px;
      line-height: 1.4em;
      font-weight: 500
    }

    .div-button-center,
    .heading-29 {
      text-align: center
    }

    .div-button-center.dunlop {
      margin-top: 60px
    }

    .div-button-center.dunlop._2 {
      margin-top: 100px
    }

    .div-button-center.dunlop.margin-top-100px {
      margin-top: 0;
      margin-bottom: 40px
    }

    .div-button-center.minha-casa {
      margin-top: 40px
    }

    .planejamento-inteligente {
      padding-top: 80px;
      padding-bottom: 60px
    }

    .heading-30 {
      margin-top: 0;
      color: #fff;
      font-size: 52px;
      line-height: 1.1em;
      font-weight: 600
    }

    .heading-30.h1-dunlop {
      margin-right: 20px;
      color: #fff;
      font-size: 42px;
      line-height: 1.2em
    }

    .heading-30.minha-casa {
      margin-bottom: 0;
      color: #079d56;
      line-height: 1em;
      font-weight: 700;
      text-align: left
    }

    .bold-text-40 {
      color: #82ea5b
    }

    .heading-31,
    .paragraph-36 {
      margin-top: 0;
      margin-bottom: 0;
      color: #82ea5b;
      font-size: 20px
    }

    .heading-31.wire {
      color: #6e6e6e
    }

    .paragraph-36 {
      margin-top: 20px;
      color: #fff;
      font-size: 16px;
      line-height: 1.6em
    }

    .paragraph-36.dunlop-sub,
    .paragraph-36.vila-profeta-subtitulo {
      margin-right: 40px;
      margin-bottom: 20px;
      color: #fff
    }

    .button-12,
    .button-12.smarturba._2.minha-casa.verde {
      background-image: -webkit-gradient(linear, left top, right top, from(#00d38d), to(#82ea5b));
      background-image: linear-gradient(90deg, #00d38d, #82ea5b)
    }

    .button-12 {
      margin-left: 5px;
      border-radius: 5px;
      -webkit-transition: all 200ms ease-in;
      transition: all 200ms ease-in
    }

    .button-12:hover {
      -webkit-transform: scale(1.01);
      -ms-transform: scale(1.01);
      transform: scale(1.01)
    }

    .button-12.smarturba {
      margin-top: 30px;
      margin-left: 0;
      background-image: -webkit-gradient(linear, left top, right top, from(#079d56), to(#00d38d));
      background-image: linear-gradient(90deg, #079d56, #00d38d);
      font-size: 16px;
      font-weight: 500
    }

    .button-12.smarturba:hover {
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05)
    }

    .button-12.smarturba._2 {
      width: 198.640625px;
      margin-top: 0;
      margin-bottom: 0;
      padding-top: 10px;
      padding-bottom: 10px;
      background-image: -webkit-gradient(linear, left top, right top, from(#ac41d8), to(#793f98));
      background-image: linear-gradient(90deg, #ac41d8, #793f98);
      font-size: 14px
    }

    .button-12.smarturba._2.w--current {
      padding-right: 20px;
      padding-left: 20px
    }

    .button-12.smarturba._2.mobile {
      display: none
    }

    .button-12.smarturba._2.wire {
      background-image: -webkit-gradient(linear, left top, right top, from(#565656), to(#6e6e6e));
      background-image: linear-gradient(90deg, #565656, #6e6e6e);
      font-size: 14px
    }

    .button-12.smarturba._2.minha-casa {
      background-image: -webkit-gradient(linear, left top, right top, from(#793f98), to(#ac41d8));
      background-image: linear-gradient(90deg, #793f98, #ac41d8);
      box-shadow: 0 6px 12px 0 rgba(0, 107, 63, .15);
      color: #fff;
      cursor: pointer
    }

    .button-12.smarturba._2.minha-casa.verde {
      box-shadow: 0 6px 12px 0 rgba(60, 23, 80, .15);
      color: #006b3f
    }

    .button-12.smarturba._2.minha-casa.shadow-black {
      box-shadow: 0 6px 12px 0 rgba(0, 0, 0, .15)
    }

    .button-12.smarturba.dunlop {
      margin-top: 0;
      background-image: -webkit-gradient(linear, left top, right top, from(#006b3f), to(#079d56));
      background-image: linear-gradient(90deg, #006b3f, #079d56);
      font-size: 14px
    }

    .div-formulario-dunlop {
      position: relative;
      top: 50%;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 40%;
      float: right;
      -webkit-box-pack: end;
      -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
      justify-content: flex-end;
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%)
    }

    .div-formulario-dunlop.minha-casa {
      padding-right: 40px;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .checkbox-label-3,
    .text-block-51 {
      color: #fff;
      text-shadow: 0 0 3px #000
    }

    .text-block-51.minha-casa {
      text-shadow: none
    }

    .checkbox-label-3.wire,
    .text-block-51.dunlop.wire {
      color: #6e6e6e;
      text-shadow: none
    }

    .checkbox-label-3.minha-casa {
      text-shadow: none
    }

    .enviar-form-lp-3 {
      margin-top: 20px;
      padding-right: 35px;
      padding-left: 35px;
      border-radius: 5px;
      background-image: linear-gradient(304deg, #ffb719, #ff8b22);
      box-shadow: 0 0 15px -7px #000;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      font-size: 14px;
      font-weight: 500;
      letter-spacing: .5px;
      text-transform: uppercase
    }

    .enviar-form-lp-3:hover {
      background-image: linear-gradient(304deg, #ff8b22, #ffb719);
      -webkit-transform: scale(1.03);
      -ms-transform: scale(1.03);
      transform: scale(1.03)
    }

    .enviar-form-lp-3.wire {
      background-image: linear-gradient(304deg, #6e6e6e, #565656)
    }

    .enviar-form-lp-3.vila-profeta {
      background-image: linear-gradient(304deg, #793f98, #ac41d8)
    }

    .box-entenda-2 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      padding: 10px 20px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 10px;
      box-shadow: 0 0 12px -6px #ff8b22
    }

    .box-entenda-2.dunlop {
      padding: 20px 15px;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start
    }

    .box-entenda-2.dunlop.wire {
      box-shadow: 0 0 12px -6px #6e6e6e
    }

    .box-entenda-2,
    .box-entenda-2.dunlop._2 {
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .box-entenda-2.dunlop._2 {
      padding-right: 20px;
      padding-left: 20px;
      background-color: #fff
    }

    .paragraph-37 {
      display: block;
      margin-bottom: 20px;
      color: #006b3f;
      line-height: 1.6em;
      font-weight: 300;
      text-align: center
    }

    .paragraph-37.right {
      text-align: right
    }

    .paragraph-37.branco {
      color: #fff;
      font-style: normal
    }

    .paragraph-37.numero-obra {
      margin-bottom: 0
    }

    .text-block-52 {
      margin-top: 20px;
      color: #079d56;
      font-size: 14px;
      line-height: 1.4em;
      font-weight: 500;
      text-align: center
    }

    .text-block-52.wire {
      color: #6e6e6e;
      font-size: 16px
    }

    .text-block-52.wire-2 {
      color: #6e6e6e
    }

    .text-block-53 {
      margin-bottom: 10px;
      color: #6e6e6e;
      font-weight: 300
    }

    .div-raizes {
      overflow: hidden;
      margin-top: 15px
    }

    .list-12 {
      padding-left: 20px
    }

    .list-item-10 {
      margin-bottom: 5px;
      color: #6e6e6e;
      line-height: 1.4em;
      font-weight: 300
    }

    .localizacao-dunlop {
      padding-top: 80px;
      padding-bottom: 60px;
      background-color: #f8f8f8
    }

    .div-paragraph-center {
      width: 70%;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto;
      text-align: center
    }

    .div-paragraph-center.margin-top-60px {
      margin-top: 60px
    }

    .div-paragraph-center.destaque-box {
      padding: 30px 20px;
      border-radius: 10px;
      background-image: linear-gradient(225deg, #079d56, #006b3f)
    }

    .div-mapa-dunlop {
      overflow: hidden;
      margin-top: 40px;
      border-radius: 5px;
      box-shadow: 0 6px 12px -3px rgba(0, 0, 0, .2)
    }

    .tour {
      height: 600px
    }

    .div-grid-conceito.display-hidden,
    .tour.display-hidden,
    .videos.display-hidden {
      display: block
    }

    .div-h2-tour,
    .div-mestre-tour {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 100%
    }

    .div-mestre-tour {
      padding-top: 40px;
      padding-bottom: 40px;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-h2-tour {
      width: 50%;
      padding-left: 20px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: end;
      -webkit-align-items: flex-end;
      -ms-flex-align: end;
      align-items: flex-end
    }

    .div-tour {
      width: 50%;
      height: 100%;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
      background-image: url(https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg);
      background-position: 0 0;
      background-size: auto;
      box-shadow: 0 0 12px -4px rgba(0, 0, 0, .2)
    }

    .setinha-wire {
      margin-right: 60px
    }

    .conceito {
      padding-top: 80px;
      padding-bottom: 60px;
      background-color: #f8f8f8
    }

    .conceito.andamento-da-obra.hidden {
      display: none
    }

    .div-grid-conceito {
      width: 60%;
      margin-right: auto;
      margin-left: auto
    }

    .div-video-2.wire,
    .wire-mask {
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%)
    }

    .videos {
      padding-top: 80px;
      padding-bottom: 80px;
      background-color: #646464
    }

    .div-video-2 {
      overflow: hidden;
      width: 720px;
      margin-top: 60px;
      margin-right: auto;
      margin-left: auto;
      border-radius: 10px;
      box-shadow: 0 0 20px -12px #00d38d
    }

    .div-video-2.wire {
      box-shadow: 0 0 20px -12px #414141
    }

    .features,
    .features._2 {
      padding-top: 80px;
      padding-bottom: 120px
    }

    .features._2 {
      padding-bottom: 100px
    }

    .heading-32 {
      margin-top: 10px;
      color: #079d56;
      font-size: 40px;
      line-height: 1.1em;
      font-weight: 600
    }

    .heading-32.dunlop {
      color: #565656;
      font-size: 36px;
      text-align: right
    }

    .heading-32.dunlop._2 {
      text-align: left
    }

    .bold-text-41 {
      color: #ff5aad
    }

    .bold-text-41._7 {
      color: #ff8b22
    }

    .text-span {
      color: #6e6e6e;
      font-weight: 300
    }

    .div-grid-features {
      margin-bottom: 20px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-feature,
    .div-grid-features,
    .div-grid-features._2 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex
    }

    .div-grid-features._2 {
      margin-bottom: 10px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .div-feature {
      width: 30%;
      margin-right: 10px;
      margin-left: 10px;
      padding: 10px;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 0 8px 0 rgba(105, 105, 105, .2);
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in
    }

    .div-feature.maior {
      width: 35%
    }

    .div-feature.medio {
      width: 43%
    }

    .div-feature._2 {
      width: 32%;
      min-height: 80px;
      margin-right: 5px;
      margin-left: 5px;
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1
    }

    .image-22 {
      margin-right: 10px;
      float: left
    }

    .text-block-54 {
      float: left;
      color: #079d56;
      font-size: 14px;
      line-height: 1.4em
    }

    .italic-text {
      color: #4d99fa;
      font-size: 14px;
      line-height: 16px;
      font-weight: 400
    }

    .column-66 {
      padding: 55px 20px 55px 0;
      border-right: 1px solid #dbdbdb
    }

    .column-66._2 {
      padding-top: 30px;
      padding-bottom: 30px;
      padding-left: 20px
    }

    .column-67 {
      padding-top: 4px;
      padding-right: 0;
      padding-left: 20px
    }

    .column-67._2 {
      padding-top: 20px
    }

    .col-maisfeliz.projeto-sustentavel {
      margin-top: 140px
    }

    .text-block-55 {
      color: #fff;
      line-height: 1.3em;
      font-weight: 400;
      text-align: center
    }

    .paragraph-38 {
      color: #565656;
      line-height: 1.5em;
      font-weight: 300;
      text-align: left
    }

    .topico-2 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 24%;
      min-height: 130px;
      margin-right: 10px;
      padding: 10px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #f7287c, #ff5aad);
      text-align: center
    }

    .topico-2.dunlop-topic {
      background-image: linear-gradient(45deg, #00d38d, #82ea5b)
    }

    .topico-2._7 {
      background-image: linear-gradient(45deg, #006b3f, #82ea5b)
    }

    .topico-2.vila-profeta-topicos {
      background-image: linear-gradient(45deg, #793f98, #ff5aad)
    }

    .comercio {
      position: relative;
      height: 600px;
      padding-top: 80px;
      padding-bottom: 80px;
      background-color: #f0f0f0;
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(45%, #ff8b22), to(#ffb719));
      background-image: linear-gradient(180deg, #ff8b22 45%, #ffb719)
    }

    .img-comercio {
      position: absolute;
      left: auto;
      top: 0;
      right: 0;
      bottom: 0;
      width: 50%;
      background-image: url(../images/RotatÃ³ria.png);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: scroll
    }

    .div-info-comercio {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 50%;
      height: 100%;
      -webkit-box-pack: end;
      -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
      justify-content: flex-end;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-block-6 {
      padding-right: 120px
    }

    .div-logo-dunlop {
      display: inline-block;
      margin-bottom: 20px;
      padding: 10px 20px;
      border-radius: 10px;
      background-color: #f8f8f8
    }

    .div-mestre-features {
      width: 80%;
      margin: 40px auto 100px
    }

    .heading-33 {
      margin-top: 10px;
      color: #079d56;
      font-size: 38px;
      line-height: 44px;
      font-weight: 600
    }

    .section-cta-2 {
      padding-top: 80px;
      padding-bottom: 80px;
      background-image: linear-gradient(96deg, #079d56, #82ea5b)
    }

    .section-cta-2.wire {
      background-image: linear-gradient(50deg, #a8a8a8, #c5c5c5), linear-gradient(96deg, #ffb719, #ff8b22)
    }

    .button-13 {
      padding-right: 35px;
      padding-left: 35px;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 1px 1px 12px -3px #c76104;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #ff8b22;
      font-size: 16px
    }

    .button-13:hover {
      -webkit-transform: scale(1.03);
      -ms-transform: scale(1.03);
      transform: scale(1.03)
    }

    .seta-2 {
      position: absolute;
      left: auto;
      top: 50%;
      right: 0;
      bottom: 0;
      z-index: 1;
      display: none;
      width: 50px;
      height: 50px;
      margin-right: -25px;
      background-color: #006b3f;
      -webkit-transform: translate(0, -50%) rotate(45deg);
      -ms-transform: translate(0, -50%) rotate(45deg);
      transform: translate(0, -50%) rotate(45deg)
    }

    .galeria-de-fotos-2 {
      height: 400px;
      background-color: #6e6e6e
    }

    .galeria-de-fotos-2.wire {
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%)
    }

    .button-14 {
      margin-top: 20px;
      padding-right: 25px;
      padding-left: 25px;
      border-style: solid;
      border-width: 1.5px;
      border-color: #ac41d8;
      border-radius: 20px;
      background-color: #ac41d8;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #fff;
      font-size: 16px;
      font-weight: 400;
      text-transform: lowercase
    }

    .button-14:hover {
      border-color: #dd89ff;
      background-color: transparent;
      color: #dd89ff;
      font-weight: 400
    }

    .button-14.galeria {
      display: none;
      padding-right: 40px;
      padding-left: 40px;
      border-style: solid;
      border-color: #82ea5b;
      background-color: #82ea5b;
      color: #006b3f
    }

    .button-14.elvira:hover,
    .button-14.galeria:hover {
      background-color: transparent;
      color: #82ea5b
    }

    .button-14.elvira {
      margin-top: 10px;
      margin-left: 0;
      border-color: #793f98;
      border-radius: 5px;
      background-color: #793f98;
      font-size: 14px;
      text-transform: uppercase
    }

    .button-14.elvira:hover {
      border-color: #ff8b22;
      color: #ff8b22
    }

    .button-14.botao-parque-vitoria,
    .button-14.residencial-progresso {
      margin-top: 10px;
      border-color: #433868;
      border-radius: 5px;
      background-color: #433868;
      text-transform: uppercase
    }

    .button-14.botao-parque-vitoria:hover,
    .button-14.residencial-progresso:hover {
      border-color: #433868;
      background-color: transparent;
      color: #433868
    }

    .button-14.botao-parque-vitoria {
      margin-top: 20px;
      margin-bottom: 0;
      float: none;
      clear: none;
      border-style: solid;
      border-color: #793f98;
      background-color: #793f98;
      background-image: none;
      text-align: center;
      background-clip: border-box;
      -webkit-text-fill-color: inherit;
      cursor: pointer
    }

    .button-14.botao-parque-vitoria:hover {
      border-style: solid;
      border-color: #793f98;
      background-image: none
    }

    .column-68 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 100%;
      padding-right: 0;
      padding-left: 40px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: end;
      -webkit-align-items: flex-end;
      -ms-flex-align: end;
      align-items: flex-end;
      background-color: #006b3f;
      background-image: -webkit-gradient(linear, left top, left bottom, from(#ff5aad), to(#ff5aad));
      background-image: linear-gradient(180deg, #ff5aad, #ff5aad)
    }

    .bold-text-42 {
      color: #793f98;
      font-weight: 500
    }

    .div-contorno {
      position: absolute;
      left: 40px;
      top: 40px;
      z-index: 1;
      width: 400px;
      height: 400px;
      border-style: solid;
      border-width: 10px;
      border-color: #ac41d8;
      border-radius: 25px
    }

    .div-contorno._2 {
      left: auto;
      top: 40px;
      right: 40px;
      bottom: auto;
      border-color: #ffb719
    }

    .div-contorno._2._3 {
      border-color: #ff5aad
    }

    .div-contorno._3 {
      border-color: #f7287c
    }

    .bold-text-43 {
      font-weight: 600
    }

    .bold-text-44,
    .bold-text-45 {
      border-bottom: 2px solid #82ea5b;
      line-height: 1.3em
    }

    .enviar-form-lp-4 {
      margin-top: 20px;
      padding-right: 35px;
      padding-left: 35px;
      border-radius: 5px;
      box-shadow: 0 0 15px -7px #000;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      font-size: 14px;
      font-weight: 500;
      letter-spacing: .5px;
      text-transform: uppercase
    }

    .enviar-form-lp-4:hover {
      background-image: linear-gradient(304deg, #ff8b22, #ffb719);
      -webkit-transform: scale(1.03);
      -ms-transform: scale(1.03);
      transform: scale(1.03)
    }

    .enviar-form-lp-4,
    .enviar-form-lp-4.minha-casa {
      background-image: linear-gradient(304deg, #ffb719, #ff8b22)
    }

    .enviar-form-lp-4.minha-casa {
      box-shadow: 0 6px 15px -7px rgba(0, 0, 0, .2)
    }

    .div-logo-minhacasa {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 350px;
      height: 140px;
      padding-right: 15px;
      padding-left: 15px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-style: solid;
      border-width: 2px;
      border-color: #f68b28;
      border-radius: 20px;
      background-color: #fff
    }

    .menor {
      color: #f68b28;
      font-size: 49px
    }

    .heading-34 {
      margin-right: 20px;
      color: #fff;
      font-size: 32px;
      line-height: 1.4em;
      font-weight: 600
    }

    .sonho {
      padding-top: 410px;
      padding-bottom: 80px;
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(40%, #4aaf6b), to(#9fbe41));
      background-image: linear-gradient(180deg, #4aaf6b 40%, #9fbe41)
    }

    .image-24 {
      position: absolute;
      left: 47%;
      top: auto;
      right: 0;
      bottom: -325px;
      z-index: 1;
      -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
      transform: translate(-50%, 0)
    }

    .div-selo-minhacasa {
      position: absolute;
      left: 20px;
      top: auto;
      right: auto;
      bottom: -5%;
      z-index: 10;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 156px;
      height: 156px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 100px;
      background-image: none
    }

    .destaque-h2-3 {
      color: #ac41d8;
      font-weight: 600
    }

    .destaque-h2-3.minha-casa {
      color: #88ff5b
    }

    .div-selo-contorno {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 150px;
      height: 150px;
      padding-top: 15px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-style: solid;
      border-width: 1px;
      border-color: #82ea5b;
      border-radius: 100px
    }

    .text-block-56 {
      margin-right: 5px;
      margin-left: 5px;
      color: #82ea5b;
      font-weight: 700;
      text-align: center
    }

    .image-25 {
      margin-top: 5px
    }

    .paragraph-39 {
      margin-bottom: 20px;
      color: #6e6e6e;
      line-height: 1.6em;
      font-weight: 300
    }

    .paragraph-39.branco {
      color: #fff
    }

    .paragraph-39.branco.minha-casa {
      width: 80%;
      margin-bottom: 40px
    }

    .paragraph-39.margin-bottom-off {
      margin-bottom: 0
    }

    .div-box-sonho,
    .div-boxes-sonho {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex
    }

    .div-boxes-sonho {
      width: 70%;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .div-box-sonho {
      width: 163px;
      height: 163px;
      margin-right: 20px;
      margin-left: 20px;
      padding: 20px 15px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 6px 12px 0 rgba(0, 107, 63, .15)
    }

    .text-block-57 {
      float: left;
      color: #079d56;
      font-size: 14px;
      line-height: 1.4em
    }

    .txt-boxes-sonho {
      margin-top: 10px;
      color: #079d56;
      line-height: 1.4em;
      font-weight: 600;
      text-align: center
    }

    .bold-text-46 {
      padding-right: 2px;
      padding-left: 2px;
      background-color: rgba(0, 107, 63, .9);
      color: #fff;
      font-weight: 400
    }

    .bold-text-47 {
      color: #82ea5b
    }

    .box-condicao,
    .box-condicoes-2 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-direction: normal;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .box-condicoes-2 {
      width: 70%;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto;
      -webkit-box-orient: horizontal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .box-condicao {
      width: 22%;
      min-height: 150px;
      padding: 20px;
      -webkit-box-orient: vertical;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      border-right: 1px solid #00d38d
    }

    .box-condicao.border-off {
      border-right-style: none
    }

    .txt-legal {
      width: 70%;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto;
      color: #6e6e6e;
      font-size: 12px;
      font-weight: 300;
      text-align: center
    }

    .detalhes {
      position: relative;
      height: 640px;
      padding-top: 80px;
      padding-bottom: 60px;
      background-image: linear-gradient(225deg, #ac41d8, #793f98)
    }

    .div-txt-detalhes {
      width: 50%;
      height: 100%;
      padding-right: 120px
    }

    .slider-detalhes {
      position: absolute;
      left: auto;
      top: auto;
      right: 0;
      bottom: 0;
      width: 50%;
      height: 640px
    }

    .destaque-h2-4 {
      color: #079d56;
      font-weight: 600
    }

    .destaque-h2-4.lime {
      color: #82ea5b
    }

    .div-detalhe,
    .div-lista-detalhes {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-lista-detalhes {
      margin-bottom: 20px
    }

    .div-lista-detalhes.margin-botton-40px {
      margin-bottom: 40px
    }

    .div-detalhe {
      width: 70%
    }

    .icon-detalhe {
      margin-right: 20px
    }

    .text-block-58 {
      color: #fff;
      font-weight: 600
    }

    .slide-nav-5 {
      display: none
    }

    .arrow {
      left: -110px;
      top: auto;
      right: auto;
      bottom: 20px;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 40px;
      height: 40px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border: 1px solid #fff;
      border-radius: 100px;
      -webkit-transition: all 200ms ease-in;
      transition: all 200ms ease-in;
      color: #fff
    }

    .arrow:hover {
      background-color: #fff;
      color: #793f98
    }

    .arrow._2 {
      left: -60px;
      -webkit-transition: opacity 200ms ease;
      transition: opacity 200ms ease
    }

    .icon-9 {
      font-size: 18px
    }

    .img-casas {
      width: 100%
    }

    .passos {
      padding-top: 60px;
      padding-bottom: 100px
    }

    .div-passos {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .div-card-passos,
    .div-card-passos._2,
    .div-card-passos._3,
    .div-card-passos._4,
    .div-card-passos._5 {
      background-position: 0 0, 0 0, 0 0, 50% 50%;
      background-size: auto, auto, auto, 225px;
      background-repeat: repeat, repeat, repeat, no-repeat
    }

    .div-card-passos {
      position: relative;
      width: 225px;
      height: 350px;
      margin-right: 10px;
      margin-left: 10px;
      border-radius: 10px;
      background-image: linear-gradient(135deg, rgba(0, 0, 0, .8), rgba(255, 255, 255, 0) 40%), linear-gradient(180deg, rgba(20, 20, 20, 0) 43%, rgba(0, 0, 0, .8)), linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/bg-passo-01.jpg)
    }

    .div-card-passos._2,
    .div-card-passos._3,
    .div-card-passos._4,
    .div-card-passos._5 {
      background-image: linear-gradient(135deg, rgba(0, 0, 0, .8), rgba(255, 255, 255, 0) 40%), linear-gradient(180deg, rgba(20, 20, 20, 0) 43%, rgba(0, 0, 0, .8)), linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/bg-passo-02.jpg)
    }

    .div-card-passos._3,
    .div-card-passos._4,
    .div-card-passos._5 {
      background-image: linear-gradient(135deg, rgba(0, 0, 0, .8), rgba(255, 255, 255, 0) 40%), linear-gradient(180deg, rgba(20, 20, 20, 0) 43%, rgba(0, 0, 0, .8)), linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/bg-passo-03.jpg)
    }

    .div-card-passos._4,
    .div-card-passos._5 {
      background-image: linear-gradient(135deg, rgba(0, 0, 0, .8), rgba(255, 255, 255, 0) 40%), linear-gradient(180deg, rgba(20, 20, 20, 0) 43%, rgba(0, 0, 0, .8)), linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/bg-passo-04.jpg)
    }

    .div-card-passos._5 {
      background-image: linear-gradient(135deg, rgba(0, 0, 0, .8), rgba(255, 255, 255, 0) 40%), linear-gradient(180deg, rgba(20, 20, 20, 0) 43%, rgba(0, 0, 0, .8)), linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/bg-passo-05.jpg)
    }

    .numero-card {
      position: relative;
      left: 10px;
      top: 10px;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 45px;
      height: 45px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border: 2px solid #fff;
      border-radius: 100px;
      color: #fff;
      font-size: 26px;
      font-weight: 600;
      text-align: center
    }

    .txt-passo {
      position: absolute;
      left: 15px;
      top: auto;
      right: 15px;
      bottom: 20px;
      color: #fff;
      font-size: 16px;
      line-height: 1.5em;
      font-weight: 300
    }

    .depoimentos {
      padding-top: 80px;
      padding-bottom: 120px;
      background-color: #f8f8f8;
      background-image: url(../images/pattern-roxa2.png), url(../images/pattern-roxa.png);
      background-position: 105% 50%, -5% 50%;
      background-size: contain, contain;
      background-repeat: no-repeat, no-repeat
    }

    .div-depoimentos {
      overflow: hidden;
      width: 100%;
      height: 100%;
      border-radius: 10px
    }

    .slider-depoimentos {
      width: 720px;
      height: 240px;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 6px 12px 0 rgba(0, 0, 0, .12)
    }

    .arrow-depoimento,
    .slide-nav-depoimento {
      top: auto;
      right: 0;
      bottom: -60px;
      height: 40px
    }

    .slide-nav-depoimento {
      left: 0;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .arrow-depoimento {
      left: -145px;
      width: 40px;
      border-style: solid;
      border-width: 1px;
      border-color: #793f98;
      border-radius: 100px;
      -webkit-transition: all 200ms ease-in;
      transition: all 200ms ease-in;
      color: #793f98
    }

    .arrow-depoimento:hover {
      background-color: #793f98;
      color: #fff
    }

    .arrow-depoimento._2 {
      left: 0;
      right: -145px
    }

    .icon-10 {
      font-size: 20px
    }

    .depoimento {
      margin-top: 40px;
      margin-right: 40px;
      margin-left: 40px;
      color: #6e6e6e;
      line-height: 1.8em;
      font-style: italic;
      font-weight: 300
    }

    .div-depoimento-autor {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 20px;
      margin-right: 40px;
      margin-left: 40px;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .foto-autor {
      display: none;
      margin-right: 10px;
      border-radius: 100px
    }

    .nome-autor {
      color: #793f98;
      line-height: 1.3em;
      font-weight: 400
    }

    .cargo {
      display: none;
      color: #6e6e6e;
      font-size: 12px;
      font-weight: 300
    }

    .radio-button-field-4 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      float: left;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .radio-button-field-4._2 {
      margin-left: 10px
    }

    .radio-button-label-3 {
      margin-left: 5px;
      color: #fff;
      font-weight: 300
    }

    .div-escolha-cidade-clientes {
      overflow: hidden;
      height: 0;
      margin-top: 30px;
      clear: left
    }

    .div-escolha-cidade-naoclientes {
      overflow: hidden;
      height: 0;
      margin-top: 10px
    }

    .text-block-59 {
      position: absolute;
      left: 10px;
      top: auto;
      right: auto;
      bottom: 10px;
      z-index: 3
    }

    .italic-text-2 {
      color: #fff;
      font-size: 12px;
      text-shadow: 0 0 6px #000
    }

    .nome-autor-2 {
      color: #793f98;
      line-height: 1.3em;
      font-weight: 400
    }

    .cargo-2,
    .depoimento-2 {
      color: #6e6e6e;
      font-weight: 300
    }

    .depoimento-2 {
      margin-top: 40px;
      margin-right: 40px;
      margin-left: 40px;
      line-height: 1.8em;
      font-style: italic
    }

    .cargo-2 {
      display: none;
      font-size: 12px
    }

    .slider-videos {
      width: 720px;
      height: auto;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 6px 12px 0 rgba(0, 0, 0, .12)
    }

    .arrow-depoimento-2 {
      left: -145px;
      top: auto;
      right: 0;
      bottom: -60px;
      width: 40px;
      height: 40px;
      border-style: solid;
      border-width: 1px;
      border-color: #793f98;
      border-radius: 100px;
      -webkit-transition: all 200ms ease-in;
      transition: all 200ms ease-in;
      color: #793f98
    }

    .arrow-depoimento-2:hover {
      background-color: #793f98;
      color: #fff
    }

    .arrow-depoimento-2._2 {
      left: 0;
      right: -145px
    }

    .slider-6 {
      height: 360px;
      margin-top: 40px;
      border-radius: 10px
    }

    .div-slide-videos {
      position: relative;
      width: 640px;
      margin-right: auto;
      margin-left: auto
    }

    .slide-17,
    .slide-18 {
      overflow: hidden;
      border-radius: 10px
    }

    .div-logo-vila-profeta {
      display: inline-block;
      margin-bottom: 20px;
      padding: 10px 20px;
      border-radius: 10px;
      background-color: rgba(255, 255, 255, .8)
    }

    .h1-vila-profeta {
      color: #fff;
      font-weight: 200
    }

    .bold-text-48 {
      color: #82ea5b
    }

    .text-span-2 {
      background-color: transparent;
      color: #ff5aad
    }

    .lime {
      color: #82ea5b
    }

    .paragrafo {
      margin-bottom: 20px;
      color: #6e6e6e;
      line-height: 1.6em;
      font-weight: 300
    }

    .paragrafo.right {
      text-align: right
    }

    .paragrafo.branco {
      color: #fff
    }

    .destaque-rosa {
      color: #f7287c;
      font-weight: 700
    }

    .destaque-rosa._2 {
      color: #f7287c
    }

    .destaque-rosa._3,
    .destaque-rosa._4,
    .roxo {
      color: #793f98
    }

    .destaque-rosa._5 {
      color: #f7287c
    }

    .destaque-rosa._6 {
      color: #ac41d8
    }

    .destaque-rosa._7 {
      color: #079d56
    }

    .destaque-rosa.lime {
      color: #82ea5b
    }

    .roxo.bold {
      font-weight: 700
    }

    .div-margem,
    .div-submenu {
      padding-top: 100px;
      background-color: #006b3f
    }

    .div-submenu {
      position: fixed;
      z-index: 9999;
      width: 100%;
      height: 82px;
      padding-top: 10px;
      padding-bottom: 10px;
      color: transparent
    }

    .div-block-7 {
      display: inline-block;
      margin-right: auto;
      margin-left: auto;
      text-align: center
    }

    .link-submenu {
      -webkit-transition: all 350ms ease;
      transition: all 350ms ease;
      color: #fff;
      font-weight: 400;
      text-decoration: none
    }

    .link-submenu:hover {
      border-bottom: 0 none #ff8b22
    }

    .link-11 {
      margin-right: 30px;
      padding-left: 20px;
      text-decoration: none
    }

    .navbar-desktop {
      position: relative;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      text-align: left
    }

    .image-26 {
      width: 400px;
      margin-top: 20px
    }

    .nossa-historia {
      display: block;
      height: auto;
      margin-top: 80px;
      padding-top: 20px;
      -webkit-transition: all 400ms ease;
      transition: all 400ms ease
    }

    .div-block-9 {
      display: none
    }

    .dropdown-menu {
      padding-top: 20px;
      padding-bottom: 20px
    }

    .dropdown-toggle-2 {
      padding-top: 0;
      padding-bottom: 0;
      -webkit-transition: all 350ms ease;
      transition: all 350ms ease;
      color: #fff
    }

    .dropdown-toggle-2:hover,
    .link-submenu:hover {
      color: #ff8b22;
      font-weight: 500
    }

    .dropdown-list-2 {
      display: none;
      margin-top: 0;
      padding-top: 0;
      border-bottom: 1px solid #ff8b22;
      background-color: #fff;
      box-shadow: 3px 0 14px -12px #000;
      -webkit-transform: translate(0, 10px);
      -ms-transform: translate(0, 10px);
      transform: translate(0, 10px)
    }

    .dropdown-link-submenu {
      color: #006b3f
    }

    .dropdown-link-submenu:hover {
      background-color: #f7f7f7;
      color: #ff8b22;
      text-decoration: none
    }

    .dropdown-link-submenu:active {
      color: #ff8b22
    }

    .dropdown-link-submenu:focus {
      color: #ff8b22;
      text-decoration: none
    }

    .dropdown-link-submenu:visited {
      color: #ff8b22;
      text-decoration: none
    }

    .dropdown-link-submenu.w--current {
      display: none;
      color: #ff8b22
    }

    .apresentacao-institucional {
      display: block;
      margin-top: 80px;
      margin-bottom: 0;
      padding-top: 0;
      padding-bottom: 40px;
      background-color: #f8f8f8
    }

    .filtro-ano {
      padding: 20px
    }

    .filto-por-ano {
      display: block;
      width: 100%;
      margin-right: auto;
      margin-left: auto;
      padding-top: 20px;
      padding-bottom: 20px;
      padding-left: 20px;
      background-color: #ececec
    }

    .paragraph-40 {
      display: inline
    }

    .field-label-3 {
      display: inline-block;
      width: auto;
      height: auto;
      padding-right: 20px;
      color: #006b3f;
      font-weight: 500
    }

    .select-field-7 {
      display: inline-block;
      width: auto;
      border-radius: 20px
    }

    .select-field-7:active {
      padding-right: 20px;
      padding-left: 20px;
      border-style: solid;
      border-width: 1px;
      border-color: #006b3f
    }

    .form-8 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 50%;
      justify-items: start;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-align-content: end;
      -ms-flex-line-pack: end;
      align-content: end;
      grid-auto-columns: 1fr;
      -ms-grid-columns: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto
    }

    .btn-filtro-investidores {
      margin-top: -13px;
      margin-left: 20px;
      padding-right: 25px;
      padding-left: 25px;
      border-radius: 20px;
      background-color: #ff8b22
    }

    .form-block-6 {
      height: 40px;
      margin-bottom: 0
    }

    .titulo-ano {
      display: none;
      margin-top: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 20px;
      border-bottom: 1px solid #ff8b22;
      background-color: #fff;
      color: #fff
    }

    .heading-35 {
      margin-top: 0;
      margin-bottom: 0;
      color: #006b3f;
      font-size: 20px;
      font-weight: 700
    }

    .lista-arquivo {
      margin-top: 20px;
      padding-top: 5px;
      padding-bottom: 5px;
      padding-left: 20px;
      border-bottom: 1px solid #079d56;
      background-color: transparent;
      color: #fff
    }

    .nome-do-arquivo {
      display: inline-block;
      margin-top: 0;
      margin-bottom: 0;
      padding-right: 10px;
      -webkit-transition: all 350ms ease;
      transition: all 350ms ease;
      color: #6e6e6e;
      font-size: 14px;
      line-height: 20px;
      font-weight: 500
    }

    .nome-do-arquivo:hover {
      color: #ff8b22;
      font-weight: 500
    }

    .image-27 {
      width: 15px;
      margin-bottom: 5px;
      -webkit-transition: all 400ms ease;
      transition: all 400ms ease
    }

    .image-27:hover {
      -webkit-transform: scale(1.3);
      -ms-transform: scale(1.3);
      transform: scale(1.3)
    }

    .link-block-hovercinza {
      padding: 5px
    }

    .link-block-hovercinza:hover {
      border-radius: 5px;
      background-color: transparent
    }

    .programa-de-integridade {
      display: block;
      margin-top: 0;
      margin-bottom: 60px
    }

    .div-administracao {
      display: none;
      overflow: visible;
      margin-top: 20px;
      margin-bottom: 20px;
      padding: 20px
    }

    .subtitulos-administracao {
      border-bottom: 1px solid #ff8b22
    }

    .title-administracao {
      display: inline-block;
      margin-top: 0;
      margin-bottom: 0;
      padding-right: 10px;
      -webkit-transition: all 350ms ease;
      transition: all 350ms ease;
      font-size: 14px;
      line-height: 20px
    }

    .title-administracao,
    .title-administracao:hover {
      color: #ff8b22;
      font-weight: 500
    }

    .div-nome-administrador {
      position: relative;
      height: 100px;
      margin-top: 20px;
      padding: 20px;
      border-style: solid;
      border-width: 1px;
      border-color: #b6b6b6;
      border-radius: 10px
    }

    .nome-administrador {
      display: inline-block;
      margin-top: 0;
      margin-bottom: 0;
      padding-right: 10px;
      -webkit-transition: all 350ms ease;
      transition: all 350ms ease;
      font-size: 16px;
      line-height: 20px
    }

    .nome-administrador,
    .nome-administrador:hover {
      color: #6e6e6e;
      font-weight: 500
    }

    .divisor {
      height: 1px;
      margin-top: 5px;
      background-color: #b6b6b6
    }

    .description-administracao,
    .description-mandato-administracao {
      position: absolute;
      left: 2%;
      top: 50px;
      right: auto;
      bottom: 0;
      display: inline-block;
      margin-top: 10px;
      color: #6e6e6e;
      font-size: 13px
    }

    .description-mandato-administracao {
      left: auto;
      right: 2%
    }

    .administracao,
    .estatuto-social {
      display: block;
      margin-bottom: 0;
      padding-bottom: 60px
    }

    .estatuto-social {
      height: auto;
      margin-top: 60px;
      padding-top: 40px;
      -webkit-transition: all 400ms ease;
      transition: all 400ms ease
    }

    .administracao {
      margin-top: 0;
      padding-top: 0;
      background-color: #f8f8f8
    }

    .div-diretoria-executiva {
      display: none;
      overflow: visible;
      margin-top: 20px;
      margin-bottom: 20px;
      padding: 20px
    }

    .atas-e-assembleias,
    .politicas {
      display: block;
      margin-bottom: 0;
      padding-bottom: 60px
    }

    .atas-e-assembleias {
      margin-top: 0;
      padding-top: 0;
      background-color: #fff
    }

    .politicas {
      padding-top: 20px;
      background-color: #f8f8f8
    }

    .centra-de-resultados {
      display: block;
      height: auto;
      margin-top: 40px;
      margin-bottom: 60px;
      padding-top: 40px;
      -webkit-transition: all 400ms ease;
      transition: all 400ms ease
    }

    .description-mandato-administracao-2 {
      position: absolute;
      left: auto;
      top: 50px;
      right: 2%;
      bottom: 0;
      display: inline-block;
      margin-top: 10px;
      color: #6e6e6e;
      font-size: 13px
    }

    .nome-administrador-2,
    .nome-do-arquivo-2 {
      display: inline-block;
      margin-top: 0;
      margin-bottom: 0;
      padding-right: 10px;
      -webkit-transition: all 350ms ease;
      transition: all 350ms ease;
      line-height: 20px
    }

    .nome-do-arquivo-2 {
      color: #6e6e6e;
      font-size: 14px;
      font-weight: 500
    }

    .nome-do-arquivo-2:hover {
      color: #ff8b22;
      font-weight: 500
    }

    .nome-administrador-2 {
      font-size: 16px
    }

    .nome-administrador-2,
    .nome-administrador-2:hover {
      color: #6e6e6e;
      font-weight: 500
    }

    .lista-arquivo-2 {
      display: -ms-grid;
      display: grid;
      margin-top: 20px;
      padding-top: 5px;
      padding-bottom: 5px;
      padding-left: 20px;
      grid-auto-columns: 1fr;
      grid-column-gap: 16px;
      grid-row-gap: 16px;
      -ms-grid-columns: 1fr .25fr .25fr .25fr;
      grid-template-columns: 1fr .25fr .25fr .25fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto;
      border-bottom: 1px solid #079d56;
      background-color: #006b3f;
      color: #fff
    }

    .image-28 {
      width: 15px;
      margin-bottom: 5px;
      -webkit-transition: all 400ms ease;
      transition: all 400ms ease
    }

    .image-28:hover {
      -webkit-transform: scale(1.3);
      -ms-transform: scale(1.3);
      transform: scale(1.3)
    }

    .link-block-hovercinza-2 {
      padding: 0 5px
    }

    .link-block-hovercinza-2:hover {
      border-radius: 5px;
      background-color: transparent
    }

    .description-administracao-2 {
      position: absolute;
      left: 2%;
      top: 50px;
      right: auto;
      bottom: 0;
      display: inline-block;
      margin-top: 10px;
      color: #6e6e6e;
      font-size: 13px
    }

    .div-trimestres {
      display: block;
      overflow: visible;
      margin-top: 20px;
      margin-bottom: 20px;
      padding: 20px
    }

    .title-ano,
    .title-ano:hover {
      margin-top: 10px;
      margin-bottom: 10px;
      color: #fff
    }

    .title-ano {
      display: inline-block;
      padding-right: 10px;
      -webkit-transition: all 350ms ease;
      transition: all 350ms ease;
      font-size: 18px;
      line-height: 20px;
      font-weight: 600
    }

    .title-ano:hover {
      font-weight: 500
    }

    .grid-trimestres,
    .grid-trimestres-title {
      display: -ms-grid;
      display: grid;
      margin-top: 20px;
      padding-top: 5px;
      padding-bottom: 5px;
      padding-left: 20px;
      grid-auto-columns: 1fr;
      grid-column-gap: 16px;
      grid-row-gap: 16px;
      -ms-grid-columns: 1fr .25fr .25fr .25fr .25fr;
      grid-template-columns: 1fr .25fr .25fr .25fr .25fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto;
      border-bottom: 1px solid #079d56;
      background-color: #fff;
      color: #fff
    }

    .grid-trimestres-title {
      background-color: #079d56
    }

    .nome-administrador-2-copy {
      display: inline-block;
      margin-top: 0;
      margin-bottom: 0;
      padding-right: 10px;
      -webkit-transition: all 350ms ease;
      transition: all 350ms ease;
      font-size: 16px;
      line-height: 20px
    }

    .nome-administrador-2-copy,
    .nome-administrador-2-copy:hover {
      color: #6e6e6e;
      font-weight: 500
    }

    .icone-trimestres {
      width: 35px;
      margin-bottom: 5px;
      -webkit-transition: all 400ms ease;
      transition: all 400ms ease
    }

    .icone-trimestres:hover {
      -webkit-transform: scale(1.3);
      -ms-transform: scale(1.3);
      transform: scale(1.3)
    }

    .icone-trimestres.icones-pdf {
      width: 30px
    }

    .drop-link-menu {
      display: block;
      -webkit-transition: opacity 400ms ease;
      transition: opacity 400ms ease;
      color: #006b3f
    }

    .drop-link-menu:hover {
      color: #ff8b22
    }

    .destaque-roxo {
      color: #793f98
    }

    .html-embed {
      margin-top: 0
    }

    .bold-text-49 {
      color: #82ea5b
    }

    .columns-22 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 60px;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .lupa,
    .search {
      left: auto;
      top: 0;
      right: 0;
      bottom: 0
    }

    .search {
      position: relative;
      display: block;
      margin-top: 0;
      margin-right: 0;
      margin-left: 110px;
      padding-top: 0;
      grid-auto-columns: 1fr;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
      background-color: transparent;
      text-align: right
    }

    .lupa {
      position: absolute;
      width: 35px;
      margin-top: 10px;
      cursor: pointer
    }

    .lupa:hover {
      -webkit-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.2)
    }

    .form-9,
    .form-block-7 {
      display: block;
      width: auto;
      -webkit-box-direction: normal;
      -webkit-box-pack: end;
      -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
      justify-content: flex-end
    }

    .form-block-7 {
      margin-top: 0;
      -webkit-box-orient: vertical;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      grid-auto-columns: 1fr;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
      text-align: right
    }

    .form-9 {
      margin-top: 25px;
      -webkit-box-orient: horizontal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      background-color: transparent;
      text-align: center
    }

    .text-field-7 {
      position: static;
      left: auto;
      top: auto;
      right: 0;
      bottom: 0;
      display: block;
      margin-bottom: 0;
      text-align: left
    }

    .div-block-13 {
      position: relative;
      display: block;
      width: 200px;
      margin-top: 0;
      margin-right: 0;
      margin-left: 0;
      -webkit-box-pack: end;
      -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
      justify-content: flex-end;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      grid-auto-columns: 1fr;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
      -webkit-transform: translate(0, -14px);
      -ms-transform: translate(0, -14px);
      transform: translate(0, -14px);
      text-align: right
    }

    .image-29 {
      padding-top: 0;
      text-align: left
    }

    .columns-23,
    .div-img-sobre-2.venda {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .columns-23 {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row
    }

    .div-img-sobre-2 {
      width: auto;
      height: auto;
      margin-top: -25px;
      text-align: center
    }

    .div-img-sobre-2.venda {
      height: 350px;
      margin-top: 0;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      background-image: url(../images/slider-empreendimento-03.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .div-subtitulo-section {
      margin-top: 40px;
      padding-left: 20px;
      background-color: #079d56
    }

    .contato {
      display: block;
      margin-top: 0;
      margin-bottom: 0;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f8f8f8
    }

    .contato.contato-branco {
      background-color: #fff
    }

    .link-email-urba {
      color: #ff8b22;
      font-size: 16px
    }

    .image-30 {
      width: 25px;
      margin-right: 10px;
      margin-bottom: -15px
    }

    .div-block-14 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: -30px;
      -webkit-box-pack: end;
      -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
      justify-content: flex-end;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      text-align: right
    }

    .paragrafo-comum {
      display: block;
      width: auto;
      margin-top: 30px;
      margin-bottom: 20px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      color: #ff8b22;
      font-size: 25px;
      line-height: 1.8;
      font-weight: 300;
      text-align: center
    }

    .paragrafo-comum.legenda {
      margin-top: 20px;
      font-size: 13px;
      font-style: italic;
      text-align: center
    }

    .paragrafo-comumm {
      color: #565656;
      line-height: 1.8;
      font-weight: 400;
      text-align: left
    }

    .paragrafo-comumm.margem-top {
      margin-top: 20px;
      text-align: left
    }

    .link-regime-interno {
      margin-top: 20px;
      padding-top: 5px;
      padding-bottom: 5px;
      padding-left: 20px;
      border-bottom: 0 solid #079d56;
      background-color: transparent;
      color: #fff;
      text-align: center
    }

    .link-regime-interno-2 {
      display: inline-block;
      margin-top: 0;
      margin-bottom: 0;
      padding-right: 10px;
      -webkit-transition: all 350ms ease;
      transition: all 350ms ease;
      font-size: 14px;
      line-height: 20px
    }

    .link-regime-interno-2,
    .link-regime-interno-2:hover {
      color: #ff8b22;
      font-weight: 500
    }

    .link-12 {
      color: #ff8b22
    }

    .div-comite-de-financas {
      display: none;
      overflow: visible;
      margin-top: 20px;
      margin-bottom: 20px;
      padding: 20px
    }

    .paragraph-41 {
      color: #6e6e6e
    }

    .div-comite-de-pessoas,
    .div-comite-estrategia,
    .div-comite-governanca {
      display: none;
      overflow: visible;
      margin-top: 20px;
      margin-bottom: 20px;
      padding: 20px
    }

    .div-texto-nossa-historia {
      width: 60%;
      margin-right: auto;
      margin-left: auto
    }

    .columns-24 {
      margin-top: 20px
    }

    .nav-menu-3 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: end;
      -webkit-align-items: flex-end;
      -ms-flex-align: end;
      align-items: flex-end
    }

    .button-33.galeria:hover,
    .navbar-3 {
      background-color: transparent
    }

    .navbar-mobile {
      position: relative;
      display: none;
      text-align: left
    }

    .dropdown-menu-mobile {
      padding-top: 20px;
      padding-bottom: 20px
    }

    .nav-menu-4 {
      background-color: #006b3f
    }

    .link-mobile {
      margin-right: 30px;
      padding-left: 20px;
      text-decoration: none
    }

    .image-31,
    .nota {
      text-align: center
    }

    .image-31 {
      display: inline-block
    }

    .nota {
      padding-top: 8px;
      color: #565656;
      font-size: 11px;
      line-height: 1.8;
      font-weight: 400
    }

    .nota.margem-top {
      margin-top: 20px;
      font-size: 10px;
      text-align: center
    }

    .image-29-copy {
      margin-top: 10px;
      margin-bottom: 10px;
      padding-top: 0;
      text-align: left
    }

    .bold-text-50 {
      color: #ff8b22
    }

    .container-3,
    .icones-obra {
      display: block;
      text-align: center
    }

    .icones-obra {
      position: static;
      z-index: auto;
      overflow: visible;
      width: 80px;
      height: 80px;
      margin-right: auto;
      margin-bottom: 10px;
      margin-left: auto;
      float: none;
      clear: both
    }

    .container-3 {
      overflow: hidden;
      padding-bottom: 0;
      grid-auto-columns: 1fr;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
      -o-object-fit: fill;
      object-fit: fill
    }

    .div-box-preenchido-itapeva {
      position: absolute;
      left: 0;
      top: 0;
      right: auto;
      bottom: auto;
      z-index: 1;
      width: 370px;
      height: 200px;
      border-radius: 20px;
      background-image: linear-gradient(45deg, #009169, #82ea5b)
    }

    .div-box-preenchido-itapeva.regatas-comercial {
      width: 370px
    }

    .subtitle-lp {
      width: 315px;
      margin-top: 0;
      margin-bottom: 0;
      margin-left: 20px;
      color: #fff;
      font-size: 22px;
      line-height: 35px;
      font-weight: 300
    }

    .subtitle-lp.regatas {
      position: relative;
      z-index: 2;
      width: 300px;
      line-height: 32px
    }

    .subtitle-lp.itapeva,
    .subtitle-lp.monte-mor {
      position: relative;
      z-index: 2;
      width: 450px;
      margin-top: -20px;
      margin-left: 0;
      font-size: 19px;
      line-height: 28px
    }

    .subtitle-lp.monte-mor {
      background-color: transparent;
      font-weight: 500;
      text-align: left
    }

    .subtitle-lp.residencial-progresso {
      margin-top: 15px;
      margin-bottom: 5px;
      color: #e9bb00;
      font-size: 19px
    }

    .subtitle-lp.monte-mor-lan,
    .subtitle-lp.parque-vitoria,
    .subtitle-lp.parque-vitoria-2,
    .subtitle-lp.residencial-progresso {
      position: relative;
      z-index: 2;
      width: 450px;
      margin-left: 0;
      background-color: transparent;
      line-height: 28px;
      font-weight: 500;
      text-align: left
    }

    .subtitle-lp.parque-vitoria {
      margin-top: 15px;
      margin-bottom: 5px;
      color: #00d38d;
      font-size: 19px
    }

    .subtitle-lp.monte-mor-lan,
    .subtitle-lp.parque-vitoria-2 {
      margin-top: -20px;
      font-size: 17px
    }

    .subtitle-lp.monte-mor-lan {
      position: static;
      margin-top: 0;
      font-size: 19px;
      font-weight: 400
    }

    .logo-itapeva {
      width: auto;
      height: 110px;
      margin-right: 0;
      padding-top: 0;
      padding-bottom: 2px;
      padding-left: 5px
    }

    .button-33 {
      margin-top: 20px;
      padding-right: 25px;
      padding-left: 25px;
      border-style: solid;
      border-width: 1.5px;
      border-color: #ac41d8;
      border-radius: 20px;
      background-color: #ac41d8;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #fff;
      font-size: 16px;
      font-weight: 400;
      text-transform: lowercase
    }

    .button-33:hover {
      border-color: #dd89ff;
      background-color: transparent;
      color: #dd89ff;
      font-weight: 400
    }

    .button-33.galeria {
      display: none;
      padding-right: 40px;
      padding-left: 40px;
      border-style: solid;
      border-color: #82ea5b;
      background-color: #82ea5b;
      color: #006b3f
    }

    .button-33.galeria:hover {
      color: #82ea5b
    }

    .button-33.cond {
      margin-top: 50px
    }

    .button-33.cond.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-33.cond.regatas:hover,
    .button-33.elvira.regatas:hover,
    .button-33.itapeva.regatas:hover,
    .button-34.botao-monte-mor.regatas:hover,
    .button-34.botao-parque-vitoria.regatas:hover,
    .button-34.botao-residencial-elvira.regatas:hover,
    .button-34.botao-sao-roque-2.regatas:hover,
    .button-34.botao-sao-roque.regatas:hover,
    .button-34.cond.regatas:hover,
    .button-34.elvira.regatas:hover,
    .button-34.itapeva.regatas:hover {
      border-style: none;
      background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
      -webkit-transform: scale(1.03);
      -ms-transform: scale(1.03);
      transform: scale(1.03);
      color: #fff
    }

    .button-33.itapeva {
      margin-top: 10px;
      margin-left: 0;
      border-color: #ffb719;
      background-color: #ffb719;
      font-size: 14px
    }

    .button-33.itapeva:hover {
      background-color: transparent;
      color: #ff8b22
    }

    .button-33.itapeva.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-33.elvira,
    .button-33.itapeva,
    .button-33.progresso {
      border-radius: 5px;
      text-transform: uppercase
    }

    .button-33.elvira {
      margin-top: 10px;
      margin-left: 0;
      border-color: #793f98;
      background-color: #793f98;
      font-size: 14px
    }

    .button-33.elvira:hover {
      border-color: #ff8b22;
      background-color: transparent;
      color: #ff8b22
    }

    .button-33.elvira.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-33.progresso {
      border-color: #433868;
      background-color: #433868
    }

    .button-33.progresso:hover {
      background-color: #fff;
      color: #433868
    }

    .div-block-16,
    .div-block-17 {
      text-align: center
    }

    .div-block-17 {
      width: 100%;
      margin-top: 40px
    }

    .div-block-17.monte-mor {
      margin-top: 20px;
      text-align: left
    }

    .button-34 {
      margin-top: 20px;
      padding-right: 25px;
      padding-left: 25px;
      border-style: solid;
      border-width: 1.5px;
      border-color: #ac41d8;
      border-radius: 20px;
      background-color: #ac41d8;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in;
      color: #fff;
      font-size: 16px;
      font-weight: 400;
      text-transform: lowercase
    }

    .button-34:hover {
      border-color: #dd89ff;
      background-color: transparent;
      color: #dd89ff;
      font-weight: 400
    }

    .button-34.galeria {
      display: none;
      padding-right: 40px;
      padding-left: 40px;
      border-style: solid;
      border-color: #82ea5b;
      background-color: #82ea5b;
      color: #006b3f
    }

    .button-34.galeria:hover {
      background-color: transparent;
      color: #82ea5b
    }

    .button-34.cond {
      margin-top: 50px
    }

    .button-34.cond.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-34.elvira,
    .button-34.itapeva {
      margin-top: 10px;
      border-color: #ac41d8;
      border-radius: 5px;
      background-color: #ac41d8;
      text-transform: uppercase
    }

    .button-34.itapeva:hover {
      background-color: transparent;
      color: #ac41d8
    }

    .button-34.itapeva.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-34.elvira {
      border-color: #ff8b22;
      background-color: #ff8b22
    }

    .button-34.elvira:hover {
      border-color: #793f98;
      background-color: transparent;
      color: #ac41d8
    }

    .button-34.elvira.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-34.botao-sao-roque,
    .button-34.botao-sao-roque-2 {
      margin-top: 10px;
      float: none;
      clear: none;
      border-style: solid;
      border-radius: 5px;
      text-align: center;
      text-transform: uppercase;
      background-clip: border-box;
      -webkit-text-fill-color: inherit;
      cursor: pointer
    }

    .button-34.botao-sao-roque {
      background-image: -webkit-gradient(linear, left top, right top, from(#ac41d8), to(#793f98));
      background-image: linear-gradient(90deg, #ac41d8, #793f98);
      margin-bottom: 0;
      border-color: #433868;
      background-color: #433868;
      background-image: none
    }

    .button-34.botao-sao-roque:hover {
      border-style: solid;
      border-color: #433868;
      background-color: transparent;
      background-image: none;
      color: #433868
    }

    .button-34.botao-sao-roque.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-34.botao-sao-roque-2 {
      border-color: #e9bb00;
      background-color: transparent;
      background-image: -webkit-gradient(linear, left top, right top, from(#fff), to(#f2f2f2));
      background-image: linear-gradient(90deg, #fff, #f2f2f2);
      color: #e51d71
    }

    .button-34.botao-sao-roque-2:hover {
      border-style: solid;
      border-color: #793f98;
      background-color: transparent;
      background-image: none;
      color: #793f98
    }

    .button-34.botao-sao-roque-2.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-34.botao-monte-mor,
    .button-34.botao-monte-mor:hover {
      border-style: solid;
      border-color: #793f98;
      background-color: transparent
    }

    .button-34.botao-monte-mor {
      margin-top: 10px;
      border-radius: 5px;
      background-image: -webkit-gradient(linear, left top, right top, from(#ac41d8), to(#793f98));
      background-image: linear-gradient(90deg, #ac41d8, #793f98);
      text-align: center;
      text-transform: uppercase
    }

    .button-34.botao-monte-mor:hover {
      background-image: none;
      color: #793f98
    }

    .button-34.botao-monte-mor.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-34.botao-parque-vitoria,
    .button-34.botao-residencial-elvira {
      float: none;
      clear: none;
      border-style: solid;
      border-radius: 5px;
      text-align: center;
      text-transform: uppercase;
      background-clip: border-box;
      -webkit-text-fill-color: inherit;
      cursor: pointer
    }

    .button-34.botao-residencial-elvira {
      margin-top: 10px;
      border-color: #e9bb00;
      background-color: #e9bb00;
      color: #433868
    }

    .button-34.botao-residencial-elvira:hover {
      border-style: solid;
      border-color: #e9bb00;
      background-color: transparent;
      color: #e9bb00
    }

    .button-34.botao-residencial-elvira.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-34.botao-parque-vitoria {
      margin-top: 20px;
      margin-bottom: 0;
      border-color: #793f98;
      background-color: #793f98;
      background-image: none
    }

    .button-34.botao-parque-vitoria:hover {
      border-style: solid;
      border-color: #793f98;
      background-color: transparent;
      background-image: none;
      color: #433868
    }

    .button-34.botao-parque-vitoria.regatas {
      border-style: none;
      border-radius: 5px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .button-34.botao-parque-vitoria.margin-top {
      margin-top: 0;
      background-color: #793f98
    }

    .button-34.botao-parque-vitoria.margin-top:hover {
      border-color: #793f98;
      background-color: #fff
    }

    .column-25-copy {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 100%;
      padding-right: 0;
      padding-left: 40px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      background-color: #ff8b22
    }

    .bold-text-23-copy {
      color: #793f98;
      font-weight: 500
    }

    .image-60 {
      position: absolute;
      left: auto;
      top: auto;
      right: 0;
      bottom: 0;
      z-index: 2;
      margin-top: 0;
      margin-right: -80px;
      -webkit-transform: translate(0, 19px);
      -ms-transform: translate(0, 19px);
      transform: translate(0, 19px)
    }

    .image-60.dunlop {
      margin-right: 0
    }

    .html-embed-2 {
      height: auto
    }

    .div-block-18 {
      margin-top: 40px;
      text-align: center
    }

    .div-block-18.monte-mor {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 0;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .video-itapeva {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #f8f8f8;
      background-image: linear-gradient(45deg, #009169, #82ea5b)
    }

    .video-itapeva.bem-viver-campos,
    .video-itapeva.giardino,
    .video-itapeva.reserva {
      display: none
    }

    .video-itapeva.elvira {
      background-image: linear-gradient(315deg, #793f98, #ac41d8)
    }

    .video-itapeva.video-sao-roque {
      background-image: -webkit-gradient(linear, left top, left bottom, from(#e51d71), to(#ca0a5f));
      background-image: linear-gradient(180deg, #e51d71, #ca0a5f)
    }

    .column-69 {
      padding-right: 10px;
      padding-left: 0
    }

    .column-70 {
      padding-right: 0
    }

    .checkbox-field-2 {
      display: block;
      width: 100px
    }

    .checkbox-field-2.montemor {
      margin-right: 0;
      margin-left: 0;
      text-align: left
    }

    .checkbox-field-2,
    .checkbox-label-4 {
      margin-right: auto;
      margin-left: auto
    }

    .div-block-19 {
      text-align: center
    }

    .div-block-19.montemor,
    .heading-36.elvira.monte-mor,
    .heading-36.elvira.sao-roque {
      text-align: left
    }

    .detaque-laranja {
      color: #ff8b22
    }

    .heading-36 {
      position: relative;
      z-index: 2;
      width: 330px;
      font-family: Poppins, sans-serif;
      color: #fff;
      font-size: 29px;
      line-height: 38px;
      font-weight: 300
    }

    .heading-36.elvira,
    .heading-36.elvira-copy {
      margin-top: 20px
    }

    .heading-36.elvira.monte-mor-lan {
      width: auto;
      margin-top: 0;
      margin-bottom: 0;
      text-align: left
    }

    .heading-36.elvira-copy.monte-mor {
      text-align: left
    }

    .heading-36.elvira-copy.sao-roque {
      font-size: 29px;
      line-height: 38px;
      text-align: left
    }

    .heading-36.elvira-copy.parque-vitoria,
    .heading-36.elvira-copy.residencial-progresso {
      position: relative;
      margin-top: 0;
      font-size: 29px;
      line-height: 38px;
      text-align: left
    }

    .heading-36.elvira-copy.parque-vitoria {
      width: 280px
    }

    .text-span-3 {
      font-weight: 700
    }

    .destaque-laranja {
      color: #ff8b22;
      font-weight: 700
    }

    .micro-rodape {
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #535353
    }

    .micro-rodape.rodape-montemor,
    .micro-rodape.rodape-montemor-copy {
      background-color: #fff
    }

    .paragraph-42 {
      color: #b1b1b1;
      font-size: 12px
    }

    .paragraph-42.center {
      text-align: center
    }

    .grid-5 {
      grid-column-gap: 20px;
      -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto
    }

    .porcentagem-obra {
      display: block;
      margin-top: -20px;
      margin-bottom: 0;
      color: #006b3f;
      line-height: 1.6em;
      font-weight: 300;
      text-align: center
    }

    .porcentagem-obra.right {
      text-align: right
    }

    .porcentagem-obra.branco {
      color: #fff;
      font-style: normal
    }

    .porcentagem-obra.numero-obra {
      margin-bottom: 0
    }

    .lightbox-link-7 {
      display: block;
      height: auto;
      margin-top: 40px;
      text-decoration: none
    }

    .slide-19 {
      height: auto
    }

    .mask {
      height: 800px
    }

    .div-block-20,
    .div-block-21 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      text-align: center
    }

    .div-block-20 {
      width: 200px;
      height: 40px;
      border-radius: 5px;
      background-image: -webkit-gradient(linear, left top, right top, from(#ac41d8), to(#793f98));
      background-image: linear-gradient(90deg, #ac41d8, #793f98);
      -webkit-transition: all 400ms ease-in;
      transition: all 400ms ease-in
    }

    .div-block-20:hover,
    .elvira-aerea:hover {
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05)
    }

    .div-block-21 {
      -webkit-transition: all 200ms ease;
      transition: all 200ms ease
    }

    .paragraph-43 {
      margin-bottom: 0;
      color: #fff;
      font-weight: 500;
      text-decoration: none
    }

    .text-span-4 {
      font-weight: 600
    }

    .destaque-vermelho {
      color: red;
      font-weight: 500
    }

    .logo-elvira {
      width: auto;
      height: 110px;
      margin-left: 6px;
      padding-top: 0;
      padding-bottom: 0;
      padding-left: 0
    }

    .elvira-slide-1 {
      background-image: url(../images/URBA_RESERVA_MONTE_MOR_RUA_CASAS.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat
    }

    .envira-slide-2 {
      background-image: url(../images/URBA_RESERVA_BOULEVARD_A2.jpg);
      background-repeat: no-repeat
    }

    .elvira-slide-3,
    .elvira-slide-4,
    .envira-slide-2 {
      background-position: 50% 50%;
      background-size: cover
    }

    .elvira-slide-3 {
      background-image: url(../images/URBA_RESERVA_MONTE_MOR_PORTARIA.jpg);
      background-repeat: no-repeat
    }

    .elvira-slide-4 {
      background-image: url(../images/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01.jpg)
    }

    .elvira-aerea {
      height: auto;
      -webkit-transition: all 250ms ease-out;
      transition: all 250ms ease-out
    }

    .elvira-colunas {
      margin-top: 40px
    }

    .elvira-colunas.monte-mor {
      width: 80%
    }

    .lightbox-link-8 {
      overflow: hidden;
      width: 260px;
      height: 400px
    }

    .div-planta-03 {
      width: 210px;
      height: 400px;
      background-image: url(../images/planta02.jpg);
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat;
      -webkit-transition: all 250ms ease-out;
      transition: all 250ms ease-out
    }

    .div-planta-03:hover {
      -webkit-transform: scale(1.05);
      -ms-transform: scale(1.05);
      transform: scale(1.05)
    }

    .div-planta-03.giardino {
      background-image: url(../images/planta-02.jpg)
    }

    .div-planta-03.reserva {
      background-image: url(../images/planta-02_1.jpg)
    }

    .div-planta-03.bem-viver {
      background-image: url(../images/planta02_2.jpg)
    }

    .div-planta-03.girassois {
      background-image: url(../images/planta-02_2.jpg)
    }

    .div-planta-03.campos {
      background-image: url(../images/planta02_1.jpg)
    }

    .div-planta-03.tulipas {
      background-image: url(../images/planta-02_3.jpg)
    }

    .div-planta-03.bem-campos {
      background-image: url(../images/planta-02_4.jpg)
    }

    .div-planta-03.regatas {
      background-image: url(../images/planta-02_5.jpg)
    }

    .div-planta-03.elvira {
      background-image: url(../images/Planta-Humanizada_SecondFloor.jpg)
    }

    .column-71 {
      padding-right: 0;
      padding-left: 0
    }

    .mapa-elvira {
      height: 100%
    }

    .ipca {
      margin-top: 0;
      color: #079d56;
      font-size: 12px;
      font-style: italic;
      font-weight: 300;
      text-align: center
    }

    .cond-elvira {
      width: 80%;
      margin-top: 20px;
      margin-right: auto;
      margin-left: auto;
      text-align: center
    }

    .cond-elvira.cond {
      width: 90%
    }

    .cond-elvira.cod {
      display: block;
      margin-top: 70px;
      padding-bottom: 10px
    }

    .elvira-roxo {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 100%;
      padding-right: 0;
      padding-left: 40px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      background-color: #793f98
    }

    .elvira-seta-laranja {
      position: absolute;
      left: auto;
      top: auto;
      right: 0;
      bottom: 0;
      z-index: 2;
      margin-top: 0;
      margin-right: -80px;
      -webkit-transform: translate(0, 19px);
      -ms-transform: translate(0, 19px);
      transform: translate(0, 19px)
    }

    .elvira-seta-laranja.dunlop {
      margin-right: 0
    }

    .elvira-destaque-verde {
      color: #ff8b22;
      font-weight: 500
    }

    .div-box-preenchido-elvira {
      position: absolute;
      left: 0;
      top: 0;
      right: auto;
      bottom: auto;
      z-index: 1;
      width: 370px;
      height: 200px;
      border-radius: 20px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .div-box-preenchido-elvira.regatas-comercial {
      width: 370px
    }

    .destaque-h2-elvira {
      color: #ff8b22;
      font-weight: 600
    }

    .destaque-h2-elvira.lime {
      color: #82ea5b
    }

    .destaque-h2-elvira.roxo {
      color: #793f98
    }

    .destaque-h2-elvira.itapeva {
      color: #ac41d8;
      text-shadow: none
    }

    .destaque-h2-copy {
      color: #079d56;
      font-weight: 600
    }

    .destaque-h2-copy.lime {
      color: #82ea5b
    }

    .destaque-h2-copy.roxo,
    .detaque-roxo {
      color: #793f98
    }

    .destaque-h2-copy.itapeva {
      color: #ac41d8;
      text-shadow: none
    }

    .destaque-verde {
      color: #00d38d;
      font-weight: 700
    }

    .topicos-elvira {
      color: #079d56;
      font-size: 16px;
      text-align: center
    }

    .img-bairro-planejado {
      margin-top: 0;
      margin-bottom: 30px;
      padding-top: 0
    }

    .destaque-verde-escuro {
      color: #079d56;
      font-weight: 700
    }

    .logo-monte-mor {
      width: auto;
      height: 160px;
      max-width: 100%;
      margin-right: 0;
      padding: 10px
    }

    .priv-monte-mor {
      color: #fff;
      text-align: left;
      text-shadow: 0 0 2px #000
    }

    .priv-check-monte-mor {
      margin-top: 5px;
      text-align: left
    }

    .destaque-monte-mor {
      color: #793f98;
      font-weight: 700
    }

    .destaque-monte-mor-paragrafo {
      color: #ff8b22;
      font-weight: 600
    }

    .text-span-5 {
      font-weight: 700
    }

    .div-block-22 {
      padding-bottom: 22px;
      text-align: center
    }

    .image-61 {
      padding-top: 10px
    }

    .italic-text-3 {
      text-align: center
    }

    .div-block-23 {
      padding-top: 30px
    }

    .destaque-monte-mor-verde {
      color: #ff8b22;
      font-weight: 700
    }

    .topicos-montemor {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      color: #565656;
      font-size: 16px;
      text-align: center
    }

    .icone-montemor {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 250px;
      height: 185px;
      margin-right: 10px;
      margin-left: 10px;
      padding: 0 20px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border: 1px #000
    }

    .icone-montemor.end {
      border-right-style: none
    }

    .destaque-monte-mor-roxo {
      color: #e31d70;
      font-weight: 700
    }

    .icone-topicos {
      margin-bottom: 0;
      background-color: transparent
    }

    .icone-topicos.comercial {
      -webkit-transform: translate(0, 19px);
      -ms-transform: translate(0, 19px);
      transform: translate(0, 19px)
    }

    .icone-topicos.arvore {
      margin-top: 25px;
      margin-bottom: 20px
    }

    .icone-topicos.lazer {
      margin-bottom: 10px
    }

    .grid-6 {
      width: 100%;
      grid-row-gap: 0;
      -ms-grid-columns: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto
    }

    .div-block-24,
    .paragrafo-2.topicos {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .div-block-24 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100%;
      margin-top: 10px;
      padding: 20px;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      border-radius: 18px;
      background-color: #793f98
    }

    .image-5 {
      width: 70px;
      max-width: none;
      padding: 0
    }

    .paragrafo-2 {
      width: 100%;
      margin-bottom: 0;
      padding-top: 0;
      padding-right: 0;
      padding-bottom: 10px;
      font-family: Montserrat, sans-serif;
      color: #fff;
      font-size: 16px;
      line-height: 24px
    }

    .paragrafo-2.topicos {
      padding-bottom: 0;
      color: #793f98;
      text-align: center
    }

    .paragrafo-2.topicos.mobile {
      font-family: Poppins, sans-serif;
      color: #fff;
      font-weight: 400
    }

    .paragrafo-bold {
      color: #fff;
      font-weight: 700;
      text-align: center
    }

    .colunas-montemor {
      height: 100%
    }

    .coluna-1-monte-mor {
      width: 80%
    }

    .right-arrow-4 {
      position: absolute;
      top: -100px;
      right: -70px;
      bottom: 0;
      display: none
    }

    .bold {
      font-weight: 800
    }

    .h1-2 {
      font-family: Montserrat, sans-serif;
      color: #fff;
      font-size: 40px;
      font-weight: 400
    }

    .h1-2.verde-claro {
      color: #b6ce5e;
      line-height: 35px
    }

    .h1-2.verde-claro.center {
      padding-bottom: 20px;
      font-size: 28px;
      font-weight: 200
    }

    .h1-2.verde-claro.center.parque-vitoria {
      color: #793f98;
      text-shadow: none
    }

    .icon-12 {
      color: #b6ce5e;
      font-size: 24px
    }

    .galeria-monte,
    .h1-2.verde-claro.center {
      font-family: Poppins, sans-serif;
      color: #fff;
      text-align: center
    }

    .galeria-monte {
      position: relative;
      left: 0;
      top: auto;
      right: 0;
      bottom: 0;
      display: block;
      margin-top: 20px;
      margin-bottom: 0;
      padding: 10px 0;
      -webkit-box-align: end;
      -webkit-align-items: flex-end;
      -ms-flex-align: end;
      align-items: flex-end;
      -webkit-box-flex: 0;
      -webkit-flex: 0 auto;
      -ms-flex: 0 auto;
      flex: 0 auto;
      border: 3px solid transparent;
      border-radius: 18px;
      background-color: transparent;
      font-size: 11px;
      text-decoration: none;
      text-transform: none
    }

    .galeria-monte.alameda-reserva {
      height: 71px;
      line-height: 13px
    }

    .image-66 {
      display: inline-block;
      overflow: visible;
      width: 100%;
      height: 250px;
      max-height: none;
      max-width: none;
      margin-left: 0;
      padding-left: 0;
      border: 1px #000;
      border-radius: 20px;
      -o-object-fit: cover;
      object-fit: cover
    }

    .image-66.imagem-residencial-progresso,
    .lightbox-link-10 {
      display: block;
      width: 500px;
      border-radius: 20px;
      -o-object-fit: fill;
      object-fit: fill
    }

    .lightbox-link-10 {
      display: inline-block;
      overflow: hidden;
      width: 640px;
      height: auto;
      margin-right: 0;
      margin-left: 0;
      padding-right: 0;
      padding-left: 0;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: stretch;
      -webkit-align-items: stretch;
      -ms-flex-align: stretch;
      align-items: stretch;
      text-decoration: none
    }

    .lightbox-link-10.lightbox-residencial-progresso {
      display: block;
      width: 500px
    }

    .slide-nav-6 {
      display: none
    }

    .grid-7 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      overflow: visible;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-justify-content: space-around;
      -ms-flex-pack: distribute;
      justify-content: space-around;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      grid-auto-columns: 1fr;
      grid-column-gap: 16px;
      grid-row-gap: 16px;
      -ms-grid-columns: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto;
      border-radius: 20px;
      -o-object-fit: fill;
      object-fit: fill
    }

    .galeria-bold {
      border: 1px #000;
      font-family: Poppins, sans-serif;
      font-size: 23px;
      font-weight: 500
    }

    .container-padrao-3,
    .slider-7 {
      display: block;
      -webkit-box-direction: normal;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-align-content: space-around;
      -ms-flex-line-pack: distribute;
      align-content: space-around
    }

    .container-padrao-3 {
      max-width: 80%;
      -webkit-box-orient: vertical;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-flex-wrap: wrap-reverse;
      -ms-flex-wrap: wrap-reverse;
      flex-wrap: wrap-reverse
    }

    .container-padrao-3.regatas {
      margin-top: 30px
    }

    .slider-7 {
      width: 800px;
      height: 100%;
      margin-right: auto;
      margin-left: auto;
      -webkit-box-orient: horizontal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-justify-content: space-around;
      -ms-flex-pack: distribute;
      justify-content: space-around;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-align-self: auto;
      -ms-flex-item-align: auto;
      -ms-grid-row-align: auto;
      align-self: auto;
      -webkit-box-flex: 0;
      -webkit-flex: 0 auto;
      -ms-flex: 0 auto;
      flex: 0 auto;
      background-color: transparent
    }

    .slider-7.mobile {
      display: none
    }

    .dobra-4 {
      padding-top: 80px;
      padding-bottom: 80px;
      border-style: none;
      border-width: 1px;
      border-color: #398269;
      background-color: #793f98;
      text-align: center
    }

    .mask-2 {
      height: auto;
      max-width: 100%;
      -webkit-align-self: auto;
      -ms-flex-item-align: auto;
      -ms-grid-row-align: auto;
      align-self: auto;
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1
    }

    .slide-20 {
      position: static;
      height: auto
    }

    .left-arrow-4 {
      left: -70px;
      top: -100px;
      display: none;
      color: #b6ce5e;
      font-size: 24px
    }

    .grid-8 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      grid-auto-columns: 1fr;
      grid-column-gap: 16px;
      grid-row-gap: 16px;
      -ms-grid-columns: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto;
      -o-object-fit: fill;
      object-fit: fill
    }

    .slider-8 {
      background-color: transparent
    }

    .icon-13 {
      font-size: 24px
    }

    .icon-13,
    .icon-14 {
      color: #ff8b22
    }

    .div-box-preenchido-sao-roque {
      position: absolute;
      left: 0;
      top: 0;
      right: auto;
      bottom: auto;
      z-index: 1;
      width: 370px;
      height: 200px;
      border-radius: 20px;
      background-image: linear-gradient(45deg, #f08715, #f69833)
    }

    .div-box-preenchido-sao-roque.regatas-comercial {
      width: 370px
    }

    .logo-sao-roque {
      width: auto;
      height: 130px;
      max-width: 100%;
      margin-right: 0;
      padding: 0
    }

    .bold-text-51 {
      color: #433868
    }

    .icone-montemor-copy-copy,
    .topicos-sao-roque-02 {
      margin-right: 10px;
      margin-left: 10px;
      padding: 0 20px;
      -webkit-box-orient: vertical;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border: 1px #000
    }

    .topicos-sao-roque-02 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 25%;
      height: auto;
      -webkit-box-direction: normal;
      -webkit-align-self: flex-start;
      -ms-flex-item-align: start;
      align-self: flex-start
    }

    .icone-montemor-copy-copy.end,
    .topicos-sao-roque-02.end {
      border-right-style: none
    }

    .icone-montemor-copy-copy {
      width: 250px;
      height: 185px
    }

    .condicoes-sao-roque,
    .div-infos-terreno-sao-roque,
    .icone-montemor-copy,
    .icone-montemor-copy-copy {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-direction: normal
    }

    .div-infos-terreno-sao-roque {
      margin-top: 20px;
      -webkit-box-orient: horizontal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-flex-wrap: nowrap;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start
    }

    .div-infos-terreno-sao-roque.padding-top {
      padding-top: 40px
    }

    .condicoes-sao-roque,
    .icone-montemor-copy {
      width: 250px;
      height: 185px;
      margin-right: 10px;
      margin-left: 10px;
      padding: 0 20px;
      -webkit-box-orient: vertical;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border: 1px #000
    }

    .condicoes-sao-roque.end,
    .icone-montemor-copy.end {
      border-right-style: none
    }

    .condicoes-sao-roque {
      overflow: visible;
      height: auto;
      padding: 20px 30px;
      -webkit-box-orient: horizontal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start;
      -webkit-align-self: flex-start;
      -ms-flex-item-align: start;
      align-self: flex-start;
      -webkit-box-ordinal-group: 1;
      -webkit-order: 0;
      -ms-flex-order: 0;
      order: 0;
      border: 2px #000;
      border-radius: 18px;
      background-color: #009169;
      -o-object-fit: fill;
      object-fit: fill
    }

    .texto-condicoes-comerciais-vila-profeta,
    .topicos-montemor-copy {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      font-size: 16px;
      text-align: center
    }

    .texto-condicoes-comerciais-vila-profeta {
      color: #793f98;
      font-weight: 500
    }

    .texto-condicoes-comerciais-vila-profeta.texto-juros {
      margin-top: 10px;
      font-size: 10px
    }

    .topicos-montemor-copy {
      color: #565656
    }

    .infos-terreno-sao-roque {
      display: block;
      margin-right: auto;
      margin-left: auto;
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #fafafa
    }

    .infos-terreno-sao-roque.monte-mor {
      background-color: #fff
    }

    .infos-terreno-sao-roque.hidden {
      display: block
    }

    .div-button-center-sao-roque {
      margin-top: 20px;
      text-align: center
    }

    .div-button-center-sao-roque.dunlop {
      margin-top: 60px
    }

    .div-button-center-sao-roque.dunlop._2 {
      margin-top: 100px
    }

    .div-button-center-sao-roque.dunlop.margin-top-100px {
      margin-top: 0;
      margin-bottom: 40px
    }

    .div-button-center-sao-roque.minha-casa {
      margin-top: 40px
    }

    .galeria-sao-roque {
      padding-top: 80px;
      padding-bottom: 80px;
      border-style: none;
      border-width: 1px;
      border-color: #398269;
      background-color: #ec8515;
      text-align: center
    }

    .andamento-obra-sao-roque {
      display: block;
      overflow: visible;
      width: auto;
      height: auto;
      margin-right: 10px;
      margin-left: 5px;
      padding: 20px 30px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start;
      -webkit-align-self: flex-start;
      -ms-flex-item-align: start;
      align-self: flex-start;
      -webkit-box-ordinal-group: 1;
      -webkit-order: 0;
      -ms-flex-order: 0;
      order: 0;
      border: 2px #000;
      border-radius: 18px;
      background-color: #009169;
      -o-object-fit: fill;
      object-fit: fill
    }

    .andamento-obra-sao-roque.end {
      border-right-style: none
    }

    .andamento-sao-roque {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      color: #fff;
      font-size: 12px;
      text-align: center
    }

    .destaque-monte-mor-roxo-escuro {
      color: #793f98;
      font-weight: 700
    }

    .image-67 {
      height: 104px;
      border-radius: 12px
    }

    .heading-37 {
      position: absolute;
      left: 0;
      top: auto;
      right: 0;
      bottom: 0;
      margin-top: 0;
      margin-right: 20px;
      margin-left: 20px;
      color: #fff;
      font-weight: 500;
      text-transform: uppercase
    }

    .destaque-laranja-2 {
      color: #ff8b22;
      font-weight: 700
    }

    .destaque-h2-laranja-2 {
      color: #e31d70;
      font-weight: 600
    }

    .paragraph-44 {
      margin: 20px;
      color: #565656;
      line-height: 1.8
    }

    .paragraph-44.regatas {
      margin-right: 10px;
      margin-left: 10px
    }

    .imagem-caracteristica-sao-roque {
      position: relative;
      height: 225px;
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeriarua-interna.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeriarua-interna.jpg);
      background-position: 0 0, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .imagem-caracteristica-sao-roque._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeriaquadras.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeriaquadras.jpg)
    }

    .imagem-caracteristica-sao-roque._2.reserva {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-pracÌ§a.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-pracÌ§a.jpg)
    }

    .imagem-caracteristica-sao-roque._2.bem-viver {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground.jpg)
    }

    .imagem-caracteristica-sao-roque._2.campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground_2.jpg)
    }

    .imagem-caracteristica-sao-roque._2.bem-campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground_3.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground_3.jpg)
    }

    .imagem-caracteristica-sao-roque._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .7))), url(../images/area-comercial.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .7)), url(../images/area-comercial.jpg);
      background-position: 0 0, 50% 100%
    }

    .imagem-caracteristica-sao-roque._3.campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial.jpg)
    }

    .imagem-caracteristica-sao-roque._3.bem-campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial_1.jpg)
    }

    .imagem-caracteristica-sao-roque._3.reserva {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial_2.jpg)
    }

    .imagem-caracteristica-sao-roque.giardino-bianco {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---guarita.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---guarita.jpg)
    }

    .imagem-caracteristica-sao-roque.giardino-bianco._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---rua-interna.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---rua-interna.jpg)
    }

    .imagem-caracteristica-sao-roque.giardino-bianco._2.tulipas {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-de-lazer.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-de-lazer.jpg)
    }

    .imagem-caracteristica-sao-roque.giardino-bianco._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---piscinas.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---piscinas.jpg)
    }

    .imagem-caracteristica-sao-roque.giardino-bianco._3.tulipas {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina_2.jpg)
    }

    .imagem-caracteristica-sao-roque.giardino-bianco.tulipas {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita_1.jpg)
    }

    .imagem-caracteristica-sao-roque.reserva {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_1.jpg)
    }

    .imagem-caracteristica-sao-roque.bem-viver {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna.jpg)
    }

    .imagem-caracteristica-sao-roque.girassois {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita.jpg)
    }

    .imagem-caracteristica-sao-roque.girassois._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_2.jpg)
    }

    .imagem-caracteristica-sao-roque.girassois._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina.jpg)
    }

    .imagem-caracteristica-sao-roque.campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_3.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_3.jpg)
    }

    .imagem-caracteristica-sao-roque.bem-campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_4.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_4.jpg)
    }

    .imagem-caracteristica-sao-roque.atlanta {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita_2.jpg)
    }

    .imagem-caracteristica-sao-roque.atlanta._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-aeÌrea.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-aeÌrea.jpg)
    }

    .imagem-caracteristica-sao-roque.atlanta._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina_1.jpg)
    }

    .imagem-caracteristica-sao-roque.regatas {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg)
    }

    .imagem-caracteristica-sao-roque.regatas._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/areaverde.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/areaverde.jpg);
      background-position: 0 0, 50% 50%
    }

    .imagem-caracteristica-sao-roque.regatas._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/parents-their-daughter-are-holding-shopping-bags.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/parents-their-daughter-are-holding-shopping-bags.jpg);
      background-position: 0 0, 50%0;
      background-size: auto, cover
    }

    .imagem-caracteristica-sao-roque.regatas._4 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/comercial.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/comercial.jpg)
    }

    .imagem-caracteristica-sao-roque.sao-roque-img {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/INFRAESTRUTURA.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/INFRAESTRUTURA.jpg)
    }

    .imagem-caracteristica-sao-roque.sao-roque-img._2 {
      background-position: 0 0, 50% 50%
    }

    .imagem-caracteristica-sao-roque.sao-roque-img._3 {
      background-position: 0 0, 50%0;
      background-size: auto, cover
    }

    .imagem-caracteristica-sao-roque.sao-roque-img._1 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_VISTA_RUA_CASAS.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_VISTA_RUA_CASAS.jpg)
    }

    .imagem-caracteristica-sao-roque.sao-roque-img._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg)
    }

    .imagem-caracteristica-sao-roque.sao-roque-img._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg)
    }

    .imagem-caracteristica-sao-roque.sao-roque-img._4 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_RUA_LOJAS.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_RUA_LOJAS.jpg)
    }

    .imagem-caracteristica-sao-roque.sao-roque-img._10 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/DJI_0182.JPG);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/DJI_0182.JPG)
    }

    .imagem-caracteristica-sao-roque.elvira {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg)
    }

    .imagem-caracteristica-sao-roque.elvira._2 {
      background-position: 0 0, 50% 50%
    }

    .imagem-caracteristica-sao-roque.elvira._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/AREA-COMERCIAL_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/AREA-COMERCIAL_1.jpg);
      background-position: 0 0, 50%0;
      background-size: auto, cover
    }

    .imagem-caracteristica-sao-roque.elvira._4 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/comercial.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/comercial.jpg)
    }

    .imagem-caracteristica-sao-roque.elvira._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/Ãrea-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/Ãrea-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg)
    }

    .imagem-caracteristica-sao-roque.residencial-progresso {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/INFRAESTRUTURA.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/INFRAESTRUTURA.jpg)
    }

    .imagem-caracteristica-sao-roque.residencial-progresso._22 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/shutterstock_752177230.jpeg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/shutterstock_752177230.jpeg)
    }

    .imagem-caracteristica-sao-roque.residencial-progresso._2 {
      background-position: 0 0, 50% 50%
    }

    .imagem-caracteristica-sao-roque.residencial-progresso._3 {
      background-position: 0 0, 50%0;
      background-size: auto, cover
    }

    .imagem-caracteristica-sao-roque.residencial-progresso._1 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_VISTA_RUA_CASAS-copiar.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_VISTA_RUA_CASAS-copiar.jpg)
    }

    .imagem-caracteristica-sao-roque.residencial-progresso._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg)
    }

    .imagem-caracteristica-sao-roque.residencial-progresso._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg)
    }

    .imagem-caracteristica-sao-roque.residencial-progresso._4 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_RUA_LOJAS.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_RUA_LOJAS.jpg)
    }

    .text-span-6 {
      color: #079d56;
      font-weight: 600
    }

    .logo-residencial-progresso {
      width: auto;
      height: 130px;
      max-width: 100%;
      margin-right: 0;
      padding: 0
    }

    .div-box-preenchido-residencial-progresso {
      position: absolute;
      left: 0;
      top: 0;
      right: auto;
      bottom: auto;
      z-index: 1;
      width: 370px;
      height: 200px;
      border-radius: 20px;
      background-color: #433868
    }

    .div-box-preenchido-residencial-progresso.regatas-comercial {
      width: 370px
    }

    .destaque-roxo-residencial-progresso {
      color: #433868
    }

    .cond-residencial-progresso {
      display: none;
      width: 80%;
      margin-top: 20px;
      margin-right: auto;
      margin-left: auto;
      text-align: center
    }

    .cond-residencial-progresso.cond {
      width: 90%
    }

    .cond-residencial-progresso.cod {
      display: block;
      margin-top: 70px;
      padding-bottom: 10px
    }

    .galeria-residencial-progresso {
      padding-top: 80px;
      padding-bottom: 80px;
      border-style: none;
      border-width: 1px;
      border-color: #398269;
      background-color: #433868;
      text-align: center
    }

    .icone-amarelo {
      color: #ffb719;
      font-size: 24px
    }

    .imagem-ilustrativa {
      margin-top: 10px;
      color: #fff;
      font-size: 12px;
      font-style: italic;
      font-weight: 300;
      text-align: center
    }

    .imagem-ilustrativa.roxo {
      color: #433868
    }

    .destaque-amarelo {
      color: #e9bb00
    }

    .video-residencial-progresso {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #433868
    }

    .bold-text-52 {
      cursor: pointer
    }

    .botao-roxo-escuro {
      padding: 9px 35px;
      border: 1px solid #433868;
      border-radius: 5px;
      background-color: #433868;
      color: #fff;
      text-decoration: none;
      text-transform: uppercase
    }

    .botao-roxo-escuro:hover {
      background-color: transparent;
      color: #433868
    }

    .destaque-residencial-progresso {
      color: #006b3f;
      font-weight: 700
    }

    .grid-diferenciais {
      margin-top: 30px;
      margin-bottom: 60px;
      -ms-grid-columns: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto
    }

    .div-diferencial {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: auto;
      padding: 10px 20px;
      border-radius: 15px;
      background-color: #433868
    }

    .texto-diferencial {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      color: #fff;
      font-size: 16px;
      text-align: left
    }

    .image-68 {
      width: 40px;
      margin-right: 10px;
      -o-object-fit: contain;
      object-fit: contain
    }

    .coluna-direita-localizacao {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 100%;
      padding-right: 0;
      padding-left: 0;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-flex-wrap: nowrap;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-align-content: flex-end;
      -ms-flex-line-pack: end;
      align-content: flex-end;
      grid-auto-columns: 1fr;
      grid-column-gap: 16px;
      grid-row-gap: 16px;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto
    }

    .lightbox-localizacao {
      border-radius: 0
    }

    .image-localizacao {
      border-radius: 20px
    }

    .image-localizacao.parque-vitoria {
      width: auto;
      height: 430px;
      min-height: auto;
      box-shadow: 8px 8px 13px -7px rgba(0, 0, 0, .25);
      text-shadow: none;
      -o-object-fit: cover;
      object-fit: cover
    }

    .div-block-25 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .colunas-montemor-copy {
      height: 100%
    }

    .bold-text-54 {
      color: #e9bb00
    }

    .bold-text-54.parque-vitoria {
      color: #793f98;
      text-shadow: none
    }

    .div-box-preenchido-parque-vitoria {
      position: absolute;
      left: 0;
      top: 0;
      right: auto;
      bottom: auto;
      z-index: 1;
      width: 370px;
      height: 200px;
      border-radius: 20px;
      background-color: #793f98
    }

    .div-box-preenchido-parque-vitoria.regatas-comercial {
      width: 370px
    }

    .logo-parque-vitoria {
      width: auto;
      height: 150px;
      max-width: 100%;
      margin-right: 0;
      padding: 0;
      border-radius: 20px
    }

    .parque-vitoria {
      color: #fff;
      text-align: left;
      text-shadow: 0 0 2px #000
    }

    .parque-vitoria._2 {
      font-size: 12px
    }

    .bold-text-51-copy {
      color: #793f98
    }

    .columns-26 {
      margin-top: 40px
    }

    .div-block-26 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      justify-items: start;
      grid-auto-columns: 1fr;
      grid-column-gap: 16px;
      grid-row-gap: 16px;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto
    }

    .logo-2d {
      display: inline;
      width: 130px;
      margin-right: 20px;
      margin-left: 20px
    }

    .informacoes-comerciais,
    .infos-2d {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #fafafa
    }

    .informacoes-comerciais.monte-mor,
    .infos-2d.monte-mor {
      background-color: #fff
    }

    .infos-2d.monte-mor.infos-terreno-monte {
      padding-bottom: 60px
    }

    .informacoes-comerciais {
      display: block;
      margin-right: auto;
      margin-left: auto
    }

    .informacoes-comerciais.hidden {
      display: none
    }

    .condicoes-comerciais-parque-vitoria,
    .div-block-27,
    .grid-9 {
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .grid-9 {
      width: 80%;
      margin-top: 40px;
      justify-items: center;
      -ms-grid-columns: 1fr 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto
    }

    .condicoes-comerciais-parque-vitoria,
    .div-block-27 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex
    }

    .condicoes-comerciais-parque-vitoria {
      overflow: visible;
      width: 250px;
      height: auto;
      min-height: 110px;
      margin-right: 0;
      margin-left: 0;
      padding: 20px 10px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start;
      -webkit-align-self: flex-start;
      -ms-flex-item-align: start;
      align-self: flex-start;
      -webkit-box-ordinal-group: 1;
      -webkit-order: 0;
      -ms-flex-order: 0;
      order: 0;
      border: 2px #000;
      border-radius: 18px;
      background-color: #00d38d;
      -o-object-fit: fill;
      object-fit: fill
    }

    .condicoes-comerciais-parque-vitoria.end {
      border-right-style: none
    }

    .div-block-27 {
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .destaque-roxo-parque-vitoria {
      color: #793f98
    }

    .imagem-caracteristica-parque-vitoria {
      position: relative;
      height: 225px;
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_BAIRRO_VITORIA_RUA_COMERCIAL.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_BAIRRO_VITORIA_RUA_COMERCIAL.jpg);
      background-position: 0 0, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat
    }

    .imagem-caracteristica-parque-vitoria._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeriaquadras.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeriaquadras.jpg)
    }

    .imagem-caracteristica-parque-vitoria._2.reserva {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-pracÌ§a.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-pracÌ§a.jpg)
    }

    .imagem-caracteristica-parque-vitoria._2.bem-viver {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground.jpg)
    }

    .imagem-caracteristica-parque-vitoria._2.campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground_2.jpg)
    }

    .imagem-caracteristica-parque-vitoria._2.bem-campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-playground_3.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-playground_3.jpg)
    }

    .imagem-caracteristica-parque-vitoria._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .7))), url(../images/area-comercial.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .7)), url(../images/area-comercial.jpg);
      background-position: 0 0, 50% 100%
    }

    .imagem-caracteristica-parque-vitoria._3.campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial.jpg)
    }

    .imagem-caracteristica-parque-vitoria._3.bem-campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial_1.jpg)
    }

    .imagem-caracteristica-parque-vitoria._3.reserva {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-comercial_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-comercial_2.jpg)
    }

    .imagem-caracteristica-parque-vitoria.giardino-bianco {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---guarita.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---guarita.jpg)
    }

    .imagem-caracteristica-parque-vitoria.giardino-bianco._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---rua-interna.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---rua-interna.jpg)
    }

    .imagem-caracteristica-parque-vitoria.giardino-bianco._2.tulipas {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-area-de-lazer.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-area-de-lazer.jpg)
    }

    .imagem-caracteristica-parque-vitoria.giardino-bianco._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria---piscinas.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria---piscinas.jpg)
    }

    .imagem-caracteristica-parque-vitoria.giardino-bianco._3.tulipas {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina_2.jpg)
    }

    .imagem-caracteristica-parque-vitoria.giardino-bianco.tulipas {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita_1.jpg)
    }

    .imagem-caracteristica-parque-vitoria.reserva {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_1.jpg)
    }

    .imagem-caracteristica-parque-vitoria.bem-viver {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna.jpg)
    }

    .imagem-caracteristica-parque-vitoria.girassois {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita.jpg)
    }

    .imagem-caracteristica-parque-vitoria.girassois._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_2.jpg)
    }

    .imagem-caracteristica-parque-vitoria.girassois._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina.jpg)
    }

    .imagem-caracteristica-parque-vitoria.campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_3.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_3.jpg)
    }

    .imagem-caracteristica-parque-vitoria.bem-campos {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-rua-interna_4.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-rua-interna_4.jpg)
    }

    .imagem-caracteristica-parque-vitoria.atlanta {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-guarita_2.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-guarita_2.jpg)
    }

    .imagem-caracteristica-parque-vitoria.atlanta._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-aeÌrea.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-aeÌrea.jpg)
    }

    .imagem-caracteristica-parque-vitoria.atlanta._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/galeria-piscina_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/galeria-piscina_1.jpg)
    }

    .imagem-caracteristica-parque-vitoria.regatas {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg)
    }

    .imagem-caracteristica-parque-vitoria.regatas._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/areaverde.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/areaverde.jpg);
      background-position: 0 0, 50% 50%
    }

    .imagem-caracteristica-parque-vitoria.regatas._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/parents-their-daughter-are-holding-shopping-bags.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/parents-their-daughter-are-holding-shopping-bags.jpg);
      background-position: 0 0, 50%0;
      background-size: auto, cover
    }

    .imagem-caracteristica-parque-vitoria.regatas._4 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/comercial.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/comercial.jpg)
    }

    .imagem-caracteristica-parque-vitoria.sao-roque-img {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/INFRAESTRUTURA.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/INFRAESTRUTURA.jpg)
    }

    .imagem-caracteristica-parque-vitoria.sao-roque-img._2 {
      background-position: 0 0, 50% 50%
    }

    .imagem-caracteristica-parque-vitoria.sao-roque-img._3 {
      background-position: 0 0, 50%0;
      background-size: auto, cover
    }

    .imagem-caracteristica-parque-vitoria.sao-roque-img._1 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_VISTA_RUA_CASAS.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_VISTA_RUA_CASAS.jpg)
    }

    .imagem-caracteristica-parque-vitoria.sao-roque-img._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg)
    }

    .imagem-caracteristica-parque-vitoria.sao-roque-img._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg)
    }

    .imagem-caracteristica-parque-vitoria.sao-roque-img._4 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_RUA_LOJAS.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_RUA_LOJAS.jpg)
    }

    .imagem-caracteristica-parque-vitoria.sao-roque-img._10 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/DJI_0182.JPG);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/DJI_0182.JPG)
    }

    .imagem-caracteristica-parque-vitoria.elvira {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg)
    }

    .imagem-caracteristica-parque-vitoria.elvira._2 {
      background-position: 0 0, 50% 50%
    }

    .imagem-caracteristica-parque-vitoria.elvira._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/AREA-COMERCIAL_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/AREA-COMERCIAL_1.jpg);
      background-position: 0 0, 50%0;
      background-size: auto, cover
    }

    .imagem-caracteristica-parque-vitoria.elvira._4 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/comercial.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/comercial.jpg)
    }

    .imagem-caracteristica-parque-vitoria.elvira._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/Ãrea-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/Ãrea-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg)
    }

    .imagem-caracteristica-parque-vitoria.residencial-progresso {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/INFRAESTRUTURA.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/INFRAESTRUTURA.jpg)
    }

    .imagem-caracteristica-parque-vitoria.residencial-progresso._22 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/shutterstock_752177230.jpeg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/shutterstock_752177230.jpeg)
    }

    .imagem-caracteristica-parque-vitoria.residencial-progresso._2 {
      background-position: 0 0, 50% 50%
    }

    .imagem-caracteristica-parque-vitoria.residencial-progresso._3 {
      background-position: 0 0, 50%0;
      background-size: auto, cover
    }

    .imagem-caracteristica-parque-vitoria.residencial-progresso._1 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_VISTA_RUA_CASAS-copiar.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_VISTA_RUA_CASAS-copiar.jpg)
    }

    .imagem-caracteristica-parque-vitoria.residencial-progresso._2 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg)
    }

    .imagem-caracteristica-parque-vitoria.residencial-progresso._3 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg)
    }

    .imagem-caracteristica-parque-vitoria.residencial-progresso._4 {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_RUA_LOJAS.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_RUA_LOJAS.jpg)
    }

    .imagem-caracteristica-parque-vitoria.infraestrutura {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/URBA_BAIRRO_VITORIA_RUA_CASAS.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/URBA_BAIRRO_VITORIA_RUA_CASAS.jpg)
    }

    .imagem-caracteristica-parque-vitoria.area-verde {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/pexels-felix-mittermeier-957024.jpg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/pexels-felix-mittermeier-957024.jpg)
    }

    .imagem-caracteristica-parque-vitoria.villefort {
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, .5))), url(../images/villefort.jpeg);
      background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, .5)), url(../images/villefort.jpeg)
    }

    .galeria-parque-vitoria {
      padding-top: 80px;
      padding-bottom: 80px;
      border-style: none;
      border-width: 1px;
      border-color: #398269;
      background-color: #00d38d;
      text-align: center
    }

    .icone-roxo {
      overflow: hidden;
      color: #793f98;
      font-size: 24px
    }

    .grid-diferenciais-parque-vitoria {
      margin-top: 60px;
      margin-bottom: 0;
      -ms-grid-columns: 1fr 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto
    }

    .div-diferencial-parque-vitora {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: auto;
      padding: 10px 20px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      border-radius: 15px;
      background-color: #793f98
    }

    .texto-diferencial-parque-vitoria {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      color: #fff;
      font-size: 16px;
      text-align: center
    }

    .botao-roxo-claro {
      padding: 9px 35px;
      border: 1px solid #793f98;
      border-radius: 5px;
      background-color: #793f98;
      color: #fff;
      text-decoration: none;
      text-transform: uppercase
    }

    .botao-roxo-claro:hover {
      background-color: transparent;
      color: #793f98
    }

    .div-block-28 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 20px;
      margin-bottom: 20px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .rodape-logo-mrv {
      padding: 10px 0;
      border-top: 2px solid #ff8b22
    }

    .rodape-logo-mrv,
    .rodape-logo-mrv.rodape-montemor {
      background-color: #fff
    }

    .logo-urba {
      display: inline;
      margin-top: 0;
      margin-right: 19px;
      margin-left: 19px;
      padding-top: 0;
      padding-right: 0;
      padding-left: 0
    }

    .div-block-30 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 20px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      text-align: left
    }

    .visite-nossa-loja {
      padding-top: 70px;
      padding-bottom: 70px;
      background-color: #793f98
    }

    .link-block-4 {
      display: block;
      text-decoration: none
    }

    .div-block-31 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 0;
      margin-bottom: 10px;
      padding-top: 0;
      padding-bottom: 0;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center
    }

    .div-block-32 {
      margin-top: 30px;
      margin-bottom: 30px
    }

    .grid-10 {
      grid-template-areas: ". ." ". Area"
    }

    .slider-9 {
      position: relative;
      display: inline-block;
      background-color: transparent
    }

    .left-arrow-5 {
      position: absolute;
      left: 0;
      top: 0;
      right: auto;
      bottom: 0
    }

    .right-arrow-5 {
      right: -50px
    }

    .text-block-60 {
      margin-right: auto;
      margin-left: auto;
      color: #fff;
      font-style: italic;
      text-align: center
    }

    .text-block-60.legenda {
      color: #ff8b22
    }

    .slide-21 {
      margin-left: 4px
    }

    .center {
      text-align: center
    }

    .div-box-preenchido-monte-mor-lan {
      position: static;
      left: 0;
      top: 0;
      right: auto;
      bottom: auto;
      z-index: 1;
      width: 370px;
      height: auto;
      margin-top: 32px;
      margin-bottom: 32px;
      padding: 24px 32px;
      border-radius: 20px;
      background-image: linear-gradient(45deg, #793f98, #ac41d8)
    }

    .div-box-preenchido-monte-mor-lan.regatas-comercial {
      width: 370px
    }

    .logo-monte-mor-lan {
      text-align: left
    }

    .col-forms-monte-mor-lan,
    .colunas-monte-mor-lan.hero,
    .colunas-monte-mor-lan.hero-mm-lan {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex
    }

    .colunas-monte-mor-lan.hero-mm-lan {
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .col-forms-monte-mor-lan {
      padding: 0;
      -webkit-box-pack: end;
      -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
      justify-content: flex-end
    }

    .infos-terreno-monte-mor-lan {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #fafafa
    }

    .infos-terreno-monte-mor-lan.monte-mor {
      background-color: #fff
    }

    .infos-terreno-monte-mor-lan.monte-mor.infos-terreno-monte {
      padding-bottom: 60px
    }

    .infos-terreno-monte-mor-lan.parquevitoria {
      margin-top: 60px;
      background-color: #fff
    }

    .infos-terreno-monte-mor-lan.parque-vitoria {
      background-color: #fff;
      text-shadow: none
    }

    .monte-mor-lan {
      width: 80%;
      margin-top: 20px;
      margin-right: auto;
      margin-left: auto;
      text-align: center
    }

    .monte-mor-lan.cond {
      width: 90%
    }

    .monte-mor-lan.cod,
    .monte-mor-lan.cond-mm-lan {
      display: block;
      margin-top: 70px;
      padding-bottom: 10px
    }

    .monte-mor-lan.cond-mm-lan {
      margin-top: 60px;
      margin-bottom: 60px
    }

    .coluna-mm-lan {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 100px;
      padding-right: 20px;
      padding-left: 20px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      border-right: 2px solid #ff8b22
    }

    .coluna-mm-lan.end {
      border-right-style: none
    }

    .coluna-mm-lan._2 {
      border-right-color: #006b3f;
      background-color: #82ea5b
    }

    .coluna-mm-lan._2.interna {
      border-right-color: #fafafa;
      background-color: #ebebeb;
      -webkit-transition: all 250ms ease-in;
      transition: all 250ms ease-in
    }

    .coluna-mm-lan._2.interna:hover {
      background-color: #ff8b22
    }

    .coluna-mm-lan._2.interna.dunlop {
      display: none;
      border-left: 3px solid #fafafa;
      border-right-width: 3px;
      border-radius: 10px;
      background-color: #82ea5b
    }

    .coluna-mm-lan._2.interna.elvira,
    .coluna-mm-lan._2.interna.residencial-progresso {
      padding-right: 0;
      padding-left: 0;
      color: #fff
    }

    .coluna-mm-lan._2.interna.elvira:hover,
    .coluna-mm-lan._2.interna.residencial-progresso:hover {
      background-color: #793f98
    }

    .coluna-mm-lan._2.interna.mm-lan {
      padding-right: 0;
      padding-left: 0;
      color: #565656;
      font-size: 18px
    }

    .coluna-mm-lan._2.interna.mm-lan:hover {
      background-color: #793f98;
      color: #fff
    }

    .colunas-mm-lan {
      position: relative;
      top: 50%;
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%)
    }

    .colunas-mm-lan._2 {
      margin-top: 40px
    }

    .colunas-mm-lan._2.regatas,
    .colunas-mm-lan._3.regatas,
    .colunas-mm-lan.itapeva.regatas {
      display: none
    }

    .colunas-mm-lan._2,
    .colunas-mm-lan._3,
    .colunas-mm-lan.itapeva {
      position: static;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none
    }

    .colunas-mm-lan.itapeva {
      display: none;
      margin-top: 40px
    }

    .colunas-mm-lan._3 {
      margin-top: 1px
    }

    .ipca-mm-lan {
      margin-top: 24px;
      color: #079d56;
      font-size: 12px;
      font-style: italic;
      font-weight: 300;
      text-align: center
    }

    .txt-cond-mm-lan:hover {
      color: #fff
    }

    .text-span-7,
    .text-span-8 {
      font-size: 14px
    }

    .destaque-h2-branco {
      color: #079d56;
      font-weight: 600
    }

    .destaque-h2-branco.lime {
      color: #82ea5b
    }

    .destaque-h2-branco.roxo {
      color: #793f98
    }

    .destaque-h2-branco.itapeva {
      color: #ac41d8;
      text-shadow: none
    }

    .destaque-h2-branco.elvira {
      color: #079d56
    }

    .destaque-h2-branco.dunlop,
    .destaque-h2-branco.vilaprofeta {
      color: #ff8b22
    }

    .destaque-h2-branco.mm-lan {
      color: #fff
    }

    .coluna-1-monte-mor-lan {
      width: 80%
    }

    .tab-single-mm-lan,
    .tab-single-mm-lan.w--current {
      margin-right: 8px;
      margin-left: 8px;
      padding-top: 20px;
      padding-bottom: 20px;
      border-radius: 8px;
      color: #fff
    }

    .tab-single-mm-lan {
      height: auto;
      border: 3px solid #d3a4e6;
      background-color: #ac41d8
    }

    .tab-single-mm-lan.w--current {
      border-style: solid;
      border-width: 3px;
      border-color: #d3a4e6;
      background-color: #793f98
    }

    .tab-single-mm-lan.monte-mor {
      display: block
    }

    .tab-map-mm-lan {
      height: auto
    }

    .tabs-mm-lan {
      position: absolute;
      left: auto;
      top: 20px;
      right: 20px;
      bottom: auto;
      z-index: 99;
      height: auto;
      -webkit-align-self: auto;
      -ms-flex-item-align: auto;
      -ms-grid-row-align: auto;
      align-self: auto;
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1
    }

    .mapa-mm-lan,
    .tab-maps-mm-lan {
      height: 100%
    }

    .coluna-loc-mm-lan {
      padding: 100px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .coluna-loc-mm-lan.residencial-progresso {
      padding-right: 40px
    }

    .col-mm-lan--loc,
    .coluna-loc-mm-lan {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: auto
    }

    .loc-mm-lan {
      height: auto;
      background-color: #f7f7f7
    }

    .loc-mm-lan.residencial-progresso {
      height: auto;
      margin-top: 80px;
      background-color: transparent
    }

    .loc-mm-lan.parque-vitoria {
      height: auto;
      margin-top: 0;
      padding-top: 80px;
      padding-bottom: 80px;
      background-color: #fafafa;
      text-shadow: none
    }

    .tabs-content {
      height: 100%
    }

    .coluna-tabs-mm-lan {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: auto;
      padding-right: 0;
      padding-left: 0;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-align-self: stretch;
      -ms-flex-item-align: stretch;
      align-self: stretch;
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1
    }

    #w-node-_214e244b-38e3-a924-7e1c-5d7a58811c00-e6267467,
    .tabs-container-mm-lan {
      -webkit-align-self: auto;
      -ms-flex-item-align: auto;
      -ms-grid-row-align: auto;
      align-self: auto
    }

    .tabs-container-mm-lan {
      position: relative;
      height: auto;
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1
    }

    .tabs-content-mm-lan {
      height: 100%
    }

    .text-block-61 {
      font-size: 16px;
      font-weight: 500
    }

    .tab-pane-maps {
      height: 100%
    }

    .small-txt {
      color: #6e6e6e;
      font-size: 16px;
      line-height: 1.2;
      font-weight: 300
    }

    .destaque-h2-laranja-copy {
      color: #079d56;
      font-weight: 600
    }

    .destaque-h2-laranja-copy.lime {
      color: #82ea5b
    }

    .destaque-h2-laranja-copy.roxo {
      color: #793f98
    }

    .destaque-h2-laranja-copy.itapeva {
      color: #ac41d8;
      text-shadow: none
    }

    .destaque-h2-laranja-copy.elvira {
      color: #079d56
    }

    .destaque-h2-laranja-copy.dunlop,
    .destaque-h2-laranja-copy.vilaprofeta {
      color: #ff8b22
    }

    .destaque-h2-laranja-copy.mm-lan {
      color: #079d56
    }

    .container-padrao-caracteristicas.reduzido {
      max-width: 1000px
    }

    .container-padrao-caracteristicas.reduzido.monte-mor-lan {
      max-width: 1280px;
      padding-top: 40px;
      padding-bottom: 40px
    }

    .container-padrao-caracteristicas.montemor {
      text-align: center
    }

    .container-padrao-caracteristicas.monte-mor-mobile {
      right: auto;
      text-align: center
    }

    .container-padrao-caracteristicas.sao-roque {
      position: relative;
      text-align: center;
      white-space: normal;
      mix-blend-mode: normal
    }

    .container-padrao-caracteristicas.sem-padding {
      padding-right: 0;
      padding-left: 0
    }

    .img-ambevic {
      height: 100%;
      -o-object-fit: cover;
      object-fit: cover
    }

    .colunas-ambevic {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox
    }

    .h1-ambevic {
      margin-top: 0;
      margin-bottom: 12px;
      color: #006b3f;
      font-size: 32px;
      line-height: 32px
    }

    .coluna-direita-ambevic {
      padding: 40px;
      -webkit-align-self: stretch;
      -ms-flex-item-align: stretch;
      -ms-grid-row-align: stretch;
      align-self: stretch
    }

    .image-69 {
      height: 100%;
      -o-object-fit: cover;
      object-fit: cover
    }

    .small-txt-ambevic {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      color: #565656
    }

    .h2-ambevic {
      margin-top: 24px;
      margin-bottom: 12px;
      color: #ff8b22;
      font-size: 24px;
      line-height: 32px;
      font-weight: 600
    }

    .txt-ambevic {
      color: #565656;
      font-size: 16px;
      line-height: 24px
    }

    .txt-ambevic.small {
      font-size: 14px
    }

    .grid-icons-ambevic {
      display: -ms-grid;
      display: grid;
      margin-top: 24px;
      margin-bottom: 24px;
      grid-auto-columns: 1fr;
      grid-column-gap: 16px;
      grid-row-gap: 16px;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto
    }

    .box-caracteristica-ambevic {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      padding: 16px 24px;
      border-radius: 16px;
      background-color: #fff
    }

    .icon-ambevic {
      width: 56px;
      height: 56px;
      margin-right: 12px;
      -o-object-fit: cover;
      object-fit: cover
    }

    .icon-ambevic,
    .text-block-62 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center
    }

    @media screen and (min-width:1920px) {

      .container-padrao-caracteristicas.reduzido.monte-mor-lan,
      .container-padrao.reduzido.monte-mor-lan {
        margin-top: 0;
        padding-top: 60px;
        padding-bottom: 60px
      }

      .hero-internas.residencial-progresso {
        background-image: -webkit-gradient(linear, left top, left bottom, from(null), to(null)), url(../images/shutterstock_723020353.jpeg);
        background-image: linear-gradient(180deg, null, null), url(../images/shutterstock_723020353.jpeg);
        background-position: 0 0, 50% 50%
      }

      .hero-internas.parquevitoria {
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(22, 22, 22, .32)), to(rgba(22, 22, 22, .32))), url(../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg);
        background-image: linear-gradient(180deg, rgba(22, 22, 22, .32), rgba(22, 22, 22, .32)), url(../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg);
        background-position: 0 0, 50% -60%;
        background-size: auto, cover
      }

      .hero-internas.monte-mor-lan {
        height: auto
      }

      .paragraph-16.widht-80 {
        width: 80%;
        margin-top: 40px;
        margin-right: auto;
        margin-left: auto
      }

      .div-img-casa.elvira {
        border-radius: 20px 0 0 20px
      }

      .lightbox-link-3 {
        border-top-left-radius: 0;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px
      }

      .div-planta-02.elvira {
        border-radius: 0 20px 20px 0
      }

      .subtitle-lp.monte-mor,
      .subtitle-lp.monte-mor-lan,
      .subtitle-lp.parque-vitoria,
      .subtitle-lp.parque-vitoria-2,
      .subtitle-lp.residencial-progresso {
        text-align: left
      }

      .div-block-22,
      .image-61 {
        margin-right: auto;
        margin-left: auto;
        text-align: center
      }

      .image-61 {
        position: static;
        -o-object-fit: fill;
        object-fit: fill
      }

      .coluna-1-monte-mor {
        width: auto
      }

      .image-66 {
        width: 380px;
        height: 200px;
        border-top-right-radius: 20px
      }

      .image-66.imagem-residencial-progresso {
        height: 300px
      }

      .slider-7.desktop {
        display: block;
        width: 60%;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
      }

      .slider-7.mobile {
        display: none
      }

      .andamento-obra-sao-roque {
        display: block
      }

      .div-diferencial {
        width: auto
      }

      .image-68 {
        display: block;
        width: 40px;
        max-width: none;
        -o-object-fit: contain;
        object-fit: contain
      }

      .image-localizacao.parque-vitoria {
        width: 730px;
        height: 310px;
        -o-object-fit: cover;
        object-fit: cover
      }

      .logo-2d {
        display: inline;
        max-width: none;
        margin-right: 20px;
        margin-left: 20px
      }

      .grid-diferenciais-parque-vitoria {
        margin-top: 60px
      }

      .div-diferencial-parque-vitora {
        width: auto;
        margin-right: 20px;
        margin-left: 20px;
        padding-top: 20px;
        padding-bottom: 20px
      }

      .div-block-28 {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        grid-auto-columns: 1fr;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
        -ms-grid-rows: auto auto;
        grid-template-rows: auto auto
      }

      .div-block-28,
      .div-block-29 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
      }

      .logo-urba {
        position: static;
        display: inline;
        margin-right: 20px;
        margin-left: 20px;
        text-align: center;
        -o-object-fit: fill;
        object-fit: fill
      }

      .div-block-32 {
        display: block;
        margin-top: 40px;
        margin-bottom: 40px
      }

      .coluna-1-monte-mor-lan {
        width: 80%
      }

      .image-69 {
        -o-object-fit: cover;
        object-fit: cover
      }
    }

    @media screen and (max-width:991px) {

      .container-padrao.reduzido.monte-mor-lan,
      .container-padrao.reduzido.montemor {
        position: static;
        display: block;
        height: 1620px;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .container-padrao.monte-mor-mobile {
        position: relative
      }

      .div-text-hero.smart-urba {
        width: 60%
      }

      .div-text-hero.smart-urba.dunlop {
        top: 0;
        width: 90%;
        float: none;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
      }

      .div-text-hero.smart-urba.minha-casa {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 90%;
        margin-right: auto;
        margin-left: auto;
        float: none;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .heading-2.galeria.monte-mor {
        width: 110%
      }

      .heading-2.localiz.monte-mor.mobile,
      .heading-2.localiz.residencial-progresso.mobile,
      .heading-2.localiz.sao-roque.mobile {
        margin-top: 60px;
        text-align: center
      }

      .heading-2.center {
        margin-top: 0;
        padding-top: 0
      }

      .footer-social {
        width: 75%
      }

      .div-forms.interna.smarturba {
        width: 100%;
        padding-right: 10px;
        padding-left: 10px
      }

      .hero-internas.dunlop {
        height: auto;
        padding-top: 40px;
        padding-bottom: 40px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .5))), url(../images/hero_4.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../images/hero_4.jpg);
        background-position: 0 0, 50% 50%;
        background-size: auto, cover;
        background-repeat: repeat, no-repeat
      }

      .hero-internas.minha-casa {
        padding-bottom: 180px
      }

      .hero-internas.vila-profeta {
        height: auto;
        padding-top: 40px;
        padding-bottom: 40px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .5))), -webkit-gradient(linear, left top, left bottom, from(rgba(245, 245, 245, .03)), to(rgba(245, 245, 245, .03))), url(../images/bg-hero-vila-profeta.png);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), linear-gradient(180deg, rgba(245, 245, 245, .03), rgba(245, 245, 245, .03)), url(../images/bg-hero-vila-profeta.png);
        background-position: 0 0, 0 0, 50% 50%;
        background-size: auto, auto, cover;
        background-repeat: repeat, repeat, no-repeat;
        background-attachment: scroll, scroll, scroll
      }

      .hero-internas.montemor,
      .hero-internas.residencial-progresso,
      .hero-internas.sao-roque {
        height: 1223px;
        background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/Depositphotos_249018672_XL.jpg);
        background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), linear-gradient(180deg, transparent, transparent), url(../images/Depositphotos_249018672_XL.jpg);
        background-position: 0 0, 0 0, 28% 50%;
        background-size: auto, auto, cover
      }

      .hero-internas.monte-mor-lan,
      .hero-internas.parquevitoria {
        height: 1223px;
        background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg);
        background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), linear-gradient(180deg, transparent, transparent), url(../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg);
        background-position: 0 0, 0 0, 37% 50%;
        background-size: auto, auto, cover
      }

      .hero-internas.monte-mor-lan {
        background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/Depositphotos_249018672_XL.jpg);
        background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), linear-gradient(180deg, transparent, transparent), url(../images/Depositphotos_249018672_XL.jpg);
        background-position: 0 0, 0 0, 28% 50%
      }

      .infos-terreno.monte-mor {
        padding-bottom: 0
      }

      .paragraph-16.localiz.mobile {
        text-align: center
      }

      .div-caracteristicas {
        display: block
      }

      .div-caracteristica.parque-vitoria {
        width: auto;
        min-height: auto;
        margin-top: 20px
      }

      .div-title-info-galeria.dunlop {
        width: 100%
      }

      .localizacao {
        height: auto
      }

      .column-27 {
        padding-left: 0;
        text-align: center
      }

      .menu-button-2 {
        color: #31d2cc
      }

      .menu-button-2.w--open {
        background-color: transparent;
        color: #31d2cc
      }

      .text-block-29 {
        text-align: center
      }

      .autor.relacionados {
        display: none
      }

      .dvi-cta {
        width: 230px
      }

      .dvi-cta,
      .dvi-cta.home {
        height: 360px
      }

      .data-publicacao.relacionados {
        display: none
      }

      .div-ad.ipad {
        height: 145px
      }

      .container-padrao-2 {
        padding-right: 20px;
        padding-left: 20px
      }

      .link-block {
        margin-right: 5px
      }

      .heading-18._02.relacionado {
        font-size: 14px
      }

      .div-img-postrelacionado {
        padding-right: 5px;
        padding-left: 5px
      }

      .content-cta,
      .div-img-postinterna,
      .post-main-info {
        width: 100%
      }

      .titulo-material-destaque {
        width: 50%;
        margin-top: 40px
      }

      .paragraph-3 {
        width: 50%;
        margin-bottom: 20px
      }

      .botao-materiais {
        padding-right: 25px
      }

      .pai-dropdown-categoria-materiais {
        display: block;
        width: 90%;
        margin-right: auto;
        margin-left: auto;
        float: left
      }

      .campo-pesquisa {
        width: 90%
      }

      .coluna-busca {
        padding-left: 10px
      }

      .colunas-materiais {
        height: auto
      }

      .titulo-categoria-materiais {
        margin-top: 20px;
        padding-left: 10px
      }

      .botao-material-secundario {
        position: relative;
        left: 0;
        right: 0;
        bottom: 0;
        width: 80%;
        margin-bottom: 0;
        margin-left: 0
      }

      .titulo-material-secundario {
        margin-top: 10px;
        font-size: 16px;
        line-height: 18px
      }

      .div-info-hero.monte-mor {
        position: relative;
        top: 34%
      }

      .col-text {
        position: relative
      }

      .col-text.monte-mor,
      .col-text.monte-mor-lan {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .div-logos-hero.elvira {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: auto;
        width: 105px;
        margin-right: auto;
        margin-left: auto;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
      }

      .box.itapeva.montemor {
        width: 400px;
        margin-top: 143px;
        margin-bottom: 0;
        padding-right: 0
      }

      .div-forms-hero {
        width: 90%;
        margin-right: auto;
        margin-left: auto
      }

      .condicoes.minha-casa {
        padding-top: 60px;
        padding-bottom: 60px;
        background-image: none;
        background-position: 0 0;
        background-size: auto;
        background-repeat: repeat
      }

      .button-11.smarturba._2 {
        font-size: 15px
      }

      .tag-hero-2.section2.dunlop {
        width: 60%
      }

      .label-form-lp-2.vila-profeta {
        color: #fff
      }

      .tag-breve-lan-amento.itapeva {
        top: -5%
      }

      .text-block-47.montemor,
      .text-block-47.parque-vitoria,
      .text-block-47.residencial-progresso {
        top: 102px;
        right: -92px;
        width: 310px;
        height: 36px;
        font-size: 14px
      }

      .image-18 {
        top: 5%;
        right: 5%;
        width: 250px
      }

      .columns-21 {
        width: 95%;
        margin-top: 40px;
        margin-right: auto;
        margin-left: auto
      }

      .column-60 {
        padding-left: 10px
      }

      .grid-3 {
        display: -ms-grid;
        display: grid;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-auto-flow: row;
        grid-auto-columns: 1fr;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        -ms-grid-columns: 1fr 1fr 1fr;
        grid-template-columns: 1fr 1fr 1fr;
        -ms-grid-rows: 150px 150px;
        grid-template-rows: 150px 150px
      }

      .column-61 {
        padding-left: 0
      }

      .column-61.dunlop {
        padding-top: 0;
        padding-right: 0
      }

      .box-entenda {
        padding-right: 5px;
        padding-left: 5px
      }

      .text-block-48 {
        font-size: 13px
      }

      .section-form {
        background-position: 0 0, 0 0, 10% 100%
      }

      .heading-27.center._32px,
      .heading-27.galeria._32px {
        font-size: 28px
      }

      .heading-27.com._32px.branco {
        width: 100%;
        font-size: 28px
      }

      .heading-27.center {
        margin-top: 0;
        padding-top: 0
      }

      .div-features._2.dunlop-2 {
        margin-top: 60px
      }

      .div-features._2.dunlop-2,
      .div-features.dunlop {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
      }

      .imagem-smarturba._6.dunlop-img {
        margin-top: 40px
      }

      .div-info-smarturba._2.dunlop {
        margin-top: 40px;
        margin-right: 0
      }

      .div-info-smarturba._2.dunlop.margin-top-off {
        margin-top: 60px
      }

      .div-info-smarturba.dunlop {
        width: 95%;
        margin-top: 80px;
        margin-left: 0
      }

      .topico {
        margin-right: 5px
      }

      .topico,
      .topico._2 {
        width: 25%
      }

      .topico._2,
      .topico._4,
      .topico._6 {
        margin-left: 5px
      }

      .text-block-49 {
        font-size: 12px
      }

      .image-20 {
        left: -10px;
        top: -30px;
        width: 125px
      }

      .image-21 {
        right: 10px;
        bottom: -20px;
        width: 125px
      }

      .image-21._2 {
        right: -15px;
        bottom: -20px
      }

      .cta-provisorio {
        background-size: 300px, 300px, auto
      }

      .heading-29 {
        width: 50%;
        margin-right: auto;
        margin-left: auto
      }

      .column-62 {
        padding-right: 5px
      }

      .column-63 {
        padding-left: 5px
      }

      .column-64 {
        padding-right: 5px
      }

      .column-65 {
        padding-left: 5px
      }

      .planejamento-inteligente {
        padding-top: 60px;
        padding-bottom: 40px
      }

      .heading-30.h1-dunlop {
        font-size: 36px
      }

      .paragraph-36.dunlop-sub {
        margin-right: 0;
        text-align: center
      }

      .button-12.smarturba._2 {
        font-size: 15px
      }

      .div-formulario-dunlop {
        top: 0;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 80%;
        float: none;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
      }

      .div-formulario-dunlop.minha-casa {
        width: 90%;
        margin-right: auto;
        margin-left: auto;
        padding-right: 0
      }

      .box-entenda-2 {
        padding-right: 5px;
        padding-left: 5px
      }

      .text-block-52 {
        font-size: 13px
      }

      .localizacao-dunlop {
        padding-top: 60px;
        padding-bottom: 40px
      }

      .div-paragraph-center {
        width: 90%
      }

      .div-paragraph-center.destaque-box {
        width: 100%
      }

      .conceito {
        padding-top: 60px;
        padding-bottom: 40px
      }

      .features,
      .features._2 {
        padding-top: 20px;
        padding-bottom: 60px
      }

      .features._2 {
        padding-bottom: 80px
      }

      .text-block-55 {
        font-size: 12px
      }

      .topico-2 {
        width: 25%;
        margin-right: 5px
      }

      .div-block-6 {
        padding-right: 40px
      }

      .div-logo-dunlop {
        width: 250px;
        padding: 8px 10px
      }

      .button-14.botao-parque-vitoria {
        margin-bottom: 60px
      }

      .div-contorno._2 {
        left: 40px;
        top: 0;
        right: auto;
        bottom: auto
      }

      .div-contorno._2._3 {
        top: 40px
      }

      .heading-34 {
        margin-right: 0;
        text-align: center
      }

      .sonho {
        padding-top: 260px
      }

      .image-24 {
        bottom: -187px;
        width: 90%
      }

      .div-selo-minhacasa {
        position: relative;
        left: 0;
        bottom: 0;
        margin-top: 10px;
        margin-right: auto;
        margin-left: auto
      }

      .div-boxes-sonho,
      .paragraph-39.branco.minha-casa {
        width: 100%
      }

      .div-box-sonho {
        width: 180px;
        margin-right: 10px;
        margin-left: 10px
      }

      .box-condicoes-2 {
        width: 90%
      }

      .box-condicao {
        min-height: 180px
      }

      .txt-legal {
        width: 100%;
        text-align: left
      }

      .detalhes {
        padding-top: 60px
      }

      .div-txt-detalhes {
        padding-right: 40px
      }

      .div-detalhe {
        width: 100%
      }

      .div-passos {
        display: -ms-grid;
        display: grid;
        grid-auto-columns: 1fr;
        grid-column-gap: 0;
        grid-row-gap: 15px;
        -ms-grid-columns: 1fr 1fr 1fr;
        grid-template-columns: 1fr 1fr 1fr;
        -ms-grid-rows: auto auto;
        grid-template-rows: auto auto
      }

      .div-card-passos {
        margin-right: 0;
        margin-left: 0
      }

      .depoimentos {
        padding-top: 60px;
        background-image: none;
        background-position: 0 0;
        background-size: auto;
        background-repeat: repeat
      }

      .text-block-59 {
        margin-right: 40px;
        text-align: left
      }

      .div-logo-vila-profeta {
        width: 250px;
        padding: 8px 10px
      }

      .div-submenu {
        height: auto
      }

      .div-block-7 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start;
        grid-auto-columns: 1fr;
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
        -ms-grid-rows: auto auto;
        grid-template-rows: auto auto
      }

      .navbar-desktop {
        display: none
      }

      .field-label-3 {
        width: auto
      }

      .form-8 {
        width: 70%
      }

      .columns-22 {
        display: block
      }

      .search {
        position: static;
        margin-left: 0
      }

      .lupa {
        position: relative
      }

      .div-block-13,
      .div-texto-nossa-historia {
        width: auto
      }

      .div-block-15,
      .navbar-mobile {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
      }

      .icon-11 {
        color: #ff8b22;
        font-size: 28px
      }

      .menu-button-3 {
        background-color: #006b3f
      }

      .navbar-4 {
        width: 100%
      }

      .container-2 {
        background-color: #006b3f
      }

      .grid-4 {
        -ms-grid-columns: 1fr .25fr .25fr;
        grid-template-columns: 1fr .25fr .25fr;
        -ms-grid-rows: auto;
        grid-template-rows: auto
      }

      .link-mobile {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin-right: 0;
        padding-left: 20px
      }

      .icones-obra {
        max-width: none;
        -o-object-fit: contain;
        object-fit: contain
      }

      .subtitle-lp.monte-mor,
      .subtitle-lp.monte-mor-lan,
      .subtitle-lp.parque-vitoria,
      .subtitle-lp.parque-vitoria-2,
      .subtitle-lp.residencial-progresso {
        width: 380px
      }

      .div-block-17.monte-mor.mobile {
        text-align: center
      }

      .button-34.botao-monte-mor,
      .button-34.botao-parque-vitoria,
      .button-34.botao-residencial-elvira,
      .button-34.botao-sao-roque,
      .button-34.botao-sao-roque-2 {
        margin-bottom: 60px
      }

      .grid-5 {
        grid-row-gap: 20px;
        -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        -ms-grid-rows: auto auto;
        grid-template-rows: auto auto
      }

      .mapa-elvira {
        height: 500px
      }

      .elvira-roxo.monte-mor {
        padding-left: 0
      }

      .logo-monte-mor {
        height: 140px;
        max-width: 150%
      }

      .topicos-montemor {
        max-width: 100%;
        font-size: 14px
      }

      .icone-montemor {
        width: 250px;
        padding-right: 0;
        padding-left: 0
      }

      .grid-6 {
        width: 100%;
        justify-items: center;
        -ms-grid-columns: 1fr 1fr 1fr;
        grid-template-columns: 1fr 1fr 1fr
      }

      .div-block-24 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 180px;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        grid-auto-columns: 1fr;
        grid-column-gap: 16px;
        grid-row-gap: 16px;
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
        -ms-grid-rows: auto auto;
        grid-template-rows: auto auto
      }

      .image-5 {
        padding-right: 0
      }

      .paragrafo-2 {
        text-align: center
      }

      .image-62,
      .image-63,
      .image-64,
      .image-65,
      .slider-7.desktop {
        display: none
      }

      .image-66,
      .lightbox-link-10 {
        width: 610px
      }

      .slider-7.mobile {
        display: block
      }

      .logo-sao-roque {
        height: 140px;
        max-width: 120%
      }

      .condicoes-sao-roque,
      .icone-montemor-copy,
      .icone-montemor-copy-copy,
      .topicos-sao-roque-02 {
        width: 250px;
        padding-right: 0;
        padding-left: 0
      }

      .texto-condicoes-comerciais-vila-profeta,
      .topicos-montemor-copy {
        max-width: 100%;
        font-size: 14px
      }

      .infos-terreno-sao-roque.monte-mor {
        padding-bottom: 0
      }

      .andamento-obra-sao-roque {
        width: 250px;
        padding-right: 0;
        padding-left: 0
      }

      .andamento-sao-roque {
        max-width: 100%;
        font-size: 14px
      }

      .logo-residencial-progresso {
        height: 140px;
        max-width: 120%
      }

      .texto-diferencial {
        max-width: 100%;
        font-size: 14px
      }

      .logo-parque-vitoria {
        height: 140px;
        max-width: 120%
      }

      .informacoes-comerciais.monte-mor,
      .infos-2d,
      .infos-2d.monte-mor,
      .infos-terreno-monte-mor-lan.monte-mor {
        padding-bottom: 0
      }

      .grid-9 {
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
        -ms-grid-rows: auto auto;
        grid-template-rows: auto auto
      }

      .condicoes-comerciais-parque-vitoria {
        width: 280px;
        padding-right: 20px;
        padding-left: 20px
      }

      .texto-diferencial-parque-vitoria {
        max-width: 100%;
        font-size: 14px
      }

      .mapa-mm-lan {
        height: 500px
      }

      .coluna-loc-mm-lan {
        padding-left: 0;
        text-align: center
      }

      .loc-mm-lan {
        height: auto
      }

      .container-padrao-caracteristicas.reduzido.monte-mor-lan,
      .container-padrao-caracteristicas.reduzido.montemor {
        position: static;
        display: block;
        height: 1620px;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .container-padrao-caracteristicas.monte-mor-mobile {
        position: relative
      }

      .coluna-esquerda-ambevic {
        -webkit-align-self: stretch;
        -ms-flex-item-align: stretch;
        -ms-grid-row-align: stretch;
        align-self: stretch;
        -webkit-box-ordinal-group: 0;
        -webkit-order: -1;
        -ms-flex-order: -1;
        order: -1;
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
        border-radius: 0
      }

      .colunas-ambevic,
      .container-padrao-caracteristicas.reduzido.monte-mor-lan,
      .container-padrao-caracteristicas.reduzido.montemor {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
      }

      .colunas-ambevic {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
      }

      .h1-ambevic {
        text-align: center
      }

      .coluna-direita-ambevic {
        position: relative;
        display: block;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-ordinal-group: 2;
        -webkit-order: 1;
        -ms-flex-order: 1;
        order: 1;
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1
      }

      .image-69 {
        width: 100%;
        height: 300px;
        border-radius: 0
      }

      .h2-ambevic,
      .small-txt-ambevic,
      .txt-ambevic {
        text-align: center
      }
    }

    @media screen and (max-width:767px) {

      .container-padrao.reduzido.monte-mor-lan,
      .container-padrao.reduzido.montemor {
        padding-top: 40px
      }

      .heading-2.galeria.monte-mor {
        width: 100%;
        margin-bottom: 0;
        text-align: center
      }

      .heading-2.localiz.monte-mor.mobile,
      .heading-2.localiz.residencial-progresso.mobile,
      .heading-2.localiz.sao-roque.mobile {
        margin-top: 0
      }

      .heading-2.center {
        margin-top: 0;
        padding-top: 0
      }

      .heading-2.center.montemor {
        padding-top: 60px
      }

      .heading-2.center.monte-mor-mobile,
      .heading-2.center.sao-roque {
        padding-top: 40px
      }

      .heading-2.parque-vitoria {
        text-align: center
      }

      .column-7 {
        margin-bottom: 10px
      }

      .rodape {
        height: auto;
        padding-top: 20px;
        padding-bottom: 20px
      }

      .column-21 {
        padding: 10px 0
      }

      .column-21._2 {
        padding-left: 40px
      }

      .footer-social {
        width: 95%;
        margin-left: 40px;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .hero-internas.vila-profeta {
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .6)), to(rgba(0, 0, 0, .6))), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/bg-hero-vila-profeta.png);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), linear-gradient(180deg, transparent, transparent), url(../images/bg-hero-vila-profeta.png);
        background-position: 0 0, 0 0, 0 50%
      }

      .hero-internas.montemor,
      .hero-internas.parquevitoria,
      .hero-internas.residencial-progresso,
      .hero-internas.sao-roque {
        height: 1210px;
        padding-top: 60px;
        background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/Depositphotos_249018672_XL.jpg);
        background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), linear-gradient(180deg, transparent, transparent), url(../images/Depositphotos_249018672_XL.jpg);
        background-position: 0 0, 0 0, 33% 50%
      }

      .hero-internas.parquevitoria {
        background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg);
        background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), linear-gradient(180deg, transparent, transparent), url(../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg);
        background-position: 0 0, 0 0, 38% 50%;
        background-size: auto, auto, cover
      }

      .hero-internas.monte-mor-lan {
        height: 1210px;
        padding-top: 60px;
        background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/Depositphotos_249018672_XL.jpg);
        background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, .8)), linear-gradient(180deg, transparent, transparent), url(../images/Depositphotos_249018672_XL.jpg);
        background-position: 0 0, 0 0, 33% 50%
      }

      .infos-terreno.monte-mor {
        padding-top: 0
      }

      .div-caracteristica.parque-vitoria {
        width: auto
      }

      .h1 {
        font-size: 48px;
        line-height: 54px
      }

      .text-block-9 {
        width: 90%;
        margin-left: 20px;
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1
      }

      .galeria-de-fotos.monte-mor {
        height: auto
      }

      .column-26,
      .img-cover-galeria {
        height: 350px
      }

      .column-26.regatas {
        height: 400px
      }

      .column-27,
      .localizacao {
        height: auto
      }

      .column-27 {
        padding-top: 60px;
        padding-bottom: 60px
      }

      .column-27.residencial-progresso {
        padding-right: 0
      }

      .div-img-casa.elvira {
        border-radius: 20px
      }

      .column-30.monte-mor,
      .column-31.monte-mor {
        display: none
      }

      .div-img-sobre {
        margin-right: auto;
        margin-left: auto
      }

      .destaque-h2-laranja.roxo {
        color: #82ea5b
      }

      .column-39 {
        padding-left: 0
      }

      .imagem-material-destque {
        width: 200px;
        height: 200px
      }

      .titulo-material-destaque {
        font-size: 20px;
        line-height: 25px
      }

      .paragraph-3 {
        width: 100%;
        padding-right: 20px;
        padding-left: 20px
      }

      .botao-materiais {
        display: block;
        margin-right: 20px;
        margin-left: 20px
      }

      .text-block-33,
      .titulo-categoria-materiais {
        text-align: center
      }

      .coluna-individual-material {
        margin-bottom: 15px
      }

      .botao-material-secundario {
        width: 97%
      }

      .image-9.dunlop {
        right: -20px;
        bottom: -20px;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg)
      }

      .col-text {
        padding-top: 80px;
        padding-right: 0;
        text-align: left
      }

      .col-text.monte-mor,
      .col-text.monte-mor-lan {
        height: 470px
      }

      .box.itapeva {
        margin-top: 100px
      }

      .box.itapeva.montemor {
        margin-top: 60px
      }

      .div-forms-hero,
      .div-paragraph-center,
      .heading-27.tour-dunlop._2._32px,
      .tag-hero-2.section2.dunlop {
        width: 100%
      }

      .heading-27.com._32px.branco {
        text-align: center
      }

      .heading-27.center {
        margin-top: 0;
        padding-top: 0
      }

      .div-video-2 {
        width: 95%
      }

      .div-grid-features._2 {
        margin-bottom: 0;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
      }

      .div-feature._2 {
        width: 100%;
        margin: 10px 0
      }

      .comercio {
        height: auto;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .5))), url(../images/como-funciona-3.jpeg), -webkit-gradient(linear, left top, left bottom, color-stop(45%, #079d56), to(#00d38d));
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../images/como-funciona-3.jpeg), linear-gradient(180deg, #079d56 45%, #00d38d);
        background-position: 0 0, 50% 50%, 0 0;
        background-size: auto, cover, auto
      }

      .img-comercio {
        display: none
      }

      .div-info-comercio {
        width: 100%
      }

      .div-block-6 {
        width: 90%;
        margin-right: auto;
        margin-left: auto;
        padding-right: 0;
        text-align: center
      }

      .galeria-de-fotos-2 {
        height: auto
      }

      .button-14.botao-parque-vitoria {
        margin-bottom: 0
      }

      .column-68 {
        height: 300px;
        padding-left: 40px
      }

      .sonho {
        padding-top: 200px
      }

      .image-24 {
        bottom: -139px
      }

      .div-boxes-sonho {
        display: -ms-grid;
        display: grid;
        width: 75%;
        justify-items: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        grid-auto-columns: 1fr;
        grid-column-gap: 0;
        grid-row-gap: 20px;
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
        -ms-grid-rows: auto auto;
        grid-template-rows: auto auto
      }

      .div-box-sonho {
        margin-right: 0;
        margin-left: 0
      }

      .box-condicoes-2 {
        width: 100%
      }

      .box-condicao {
        padding-right: 5px;
        padding-left: 5px
      }

      .txt-legal {
        text-align: center
      }

      .detalhes {
        height: auto;
        padding-bottom: 0
      }

      .div-txt-detalhes {
        width: 90%;
        margin-right: auto;
        margin-bottom: 40px;
        margin-left: auto;
        padding-right: 0
      }

      .slider-detalhes {
        position: relative;
        width: 100%;
        height: 500px
      }

      .arrow,
      .arrow._2 {
        left: auto;
        top: auto;
        bottom: 20px
      }

      .arrow {
        right: 90px;
        background-color: #fff;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .16);
        color: #793f98
      }

      .arrow._2 {
        right: 30px
      }

      .img-casas {
        height: 500px
      }

      .div-passos {
        width: 92%;
        justify-items: center;
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
        -ms-grid-rows: auto auto auto;
        grid-template-rows: auto auto auto
      }

      .div-depoimentos {
        padding-bottom: 40px
      }

      .slider-depoimentos {
        width: auto;
        height: auto
      }

      .text-block-59 {
        width: 60%
      }

      .slider-videos {
        width: auto;
        height: auto
      }

      .slider-6 {
        height: 320px
      }

      .div-slide-videos {
        width: 100%
      }

      .roxo.bold {
        color: #82ea5b
      }

      .form-8 {
        width: 80%
      }

      .columns-22,
      .columns-23 {
        display: block
      }

      .div-img-sobre-2 {
        margin-top: 0
      }

      .paragrafo-comumm.texto-margem-top {
        padding-top: 25px
      }

      .columns-24 {
        display: block
      }

      .link-mobile {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding-left: 20px;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .button-34.botao-monte-mor,
      .button-34.botao-monte-mor.mobile,
      .button-34.botao-parque-vitoria,
      .button-34.botao-parque-vitoria.mobile,
      .button-34.botao-residencial-elvira,
      .button-34.botao-residencial-elvira.mobile,
      .button-34.botao-sao-roque,
      .button-34.botao-sao-roque-2,
      .button-34.botao-sao-roque-2.mobile,
      .button-34.botao-sao-roque.mobile {
        margin-bottom: 0
      }

      .image-60.dunlop {
        right: -20px;
        bottom: -20px;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg)
      }

      .column-69 {
        padding-right: 0
      }

      .column-70 {
        padding-left: 0
      }

      .grid-5 {
        -ms-grid-columns: 1fr 1fr 1fr 1fr;
        grid-template-columns: 1fr 1fr 1fr 1fr
      }

      .elvira-colunas {
        width: 100%
      }

      .mapa-elvira {
        height: 500px
      }

      .elvira-roxo.monte-mor {
        height: 210px
      }

      .elvira-seta-laranja.dunlop {
        right: -20px;
        bottom: -20px;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg)
      }

      .elvira-seta-laranja.mobile {
        display: none
      }

      .destaque-h2-copy.roxo,
      .destaque-h2-elvira.roxo {
        color: #82ea5b
      }

      .logo-monte-mor {
        height: 140px
      }

      .grid-6 {
        width: 100%;
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr
      }

      .div-block-24 {
        width: 440px;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row
      }

      .image-5 {
        padding-right: 20px
      }

      .columns-25,
      .paragrafo-2 {
        text-align: center
      }

      .paragrafo-2.topicos {
        text-align: left
      }

      .paragrafo-2.topicos.mobile {
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start
      }

      .youtube {
        width: 74%
      }

      .image-66,
      .lightbox-link-10 {
        width: 440px
      }

      .container-padrao-3 {
        max-width: 80%
      }

      .logo-parque-vitoria,
      .logo-residencial-progresso,
      .logo-sao-roque {
        height: 140px
      }

      .informacoes-comerciais.monte-mor,
      .infos-2d.monte-mor,
      .infos-terreno-monte-mor-lan.monte-mor,
      .infos-terreno-sao-roque.monte-mor {
        padding-top: 0
      }

      .logo-2d {
        display: inline
      }

      .grid-9,
      .grid-diferenciais-parque-vitoria {
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr
      }

      .div-block-28 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
      }

      .colunas-monte-mor-lan {
        text-align: center
      }

      .destaque-h2-branco.roxo {
        color: #82ea5b
      }

      .mapa-mm-lan {
        height: 500px
      }

      .coluna-loc-mm-lan {
        height: auto;
        padding-top: 60px;
        padding-bottom: 60px
      }

      .coluna-loc-mm-lan.residencial-progresso {
        padding-right: 0
      }

      .loc-mm-lan {
        height: auto
      }

      .destaque-h2-laranja-copy.roxo {
        color: #82ea5b
      }

      .container-padrao-caracteristicas.reduzido.monte-mor-lan,
      .container-padrao-caracteristicas.reduzido.montemor {
        padding-top: 40px
      }

      .icon-ambevic {
        height: 40px
      }
    }

    @media screen and (max-width:479px) {
      .heroslider {
        height: 640px
      }

      .container-padrao.reduzido.monte-mor-lan,
      .container-padrao.reduzido.montemor {
        height: 100%;
        padding-top: 100px
      }

      .container-padrao.monte-mor-form {
        width: 100%;
        max-width: 1280px;
        padding-right: 10px;
        padding-left: 10px
      }

      .container-padrao.sao-roque {
        display: block
      }

      .brand {
        margin-top: 25px
      }

      .nav-menu {
        margin-top: 0;
        background-color: rgba(255, 255, 255, .98)
      }

      .dropdown-toggle {
        display: none
      }

      .div-text-hero {
        width: 100%
      }

      .div-text-hero.interna {
        position: static;
        width: 100%;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
      }

      .div-text-hero.venda {
        -webkit-transform: translate(0, -120%);
        -ms-transform: translate(0, -120%);
        transform: translate(0, -120%)
      }

      .div-text-hero.home,
      .div-text-hero.smart-urba.dunlop {
        width: 100%
      }

      .div-text-hero.smart-urba {
        position: static;
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding-top: 140px;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
      }

      .div-text-hero.smart-urba.minha-casa {
        width: 100%;
        padding-top: 60px
      }

      .heading {
        font-size: 28px
      }

      .heading.sobre.fale-com-ri {
        text-align: center
      }

      .heading.area-cliente {
        width: 100%;
        padding-bottom: 140px;
        font-size: 28px;
        text-align: left
      }

      .heading.internas {
        margin-right: -10px;
        margin-left: -10px;
        padding-top: 100px;
        font-size: 25px
      }

      .heading.internas.tulipas {
        padding-top: 60px
      }

      .heading.internas.girassois {
        padding-top: 70px
      }

      .heading.internas.bem-viver {
        padding-top: 40px;
        font-size: 25px;
        line-height: 1.4
      }

      .heading.internas.bem-campos {
        padding-top: 60px
      }

      .heading.home {
        font-size: 26px
      }

      .heading-2,
      .paragraph {
        margin-right: 0;
        margin-left: 0;
        text-align: left
      }

      .heading-2 {
        width: 95%;
        font-size: 24px
      }

      .heading-2.branco {
        text-align: center
      }

      .heading-2.galeria {
        margin-bottom: 0;
        text-align: center
      }

      .heading-2.forms {
        text-align: center
      }

      .heading-2._2 {
        width: 95%
      }

      .heading-2.hblog {
        width: 90%;
        font-size: 22px
      }

      .heading-2.passo {
        text-align: center
      }

      .heading-2.center {
        width: 100%;
        text-align: center
      }

      .heading-2.side {
        text-align: center
      }

      .heading-2.smarturba-mobile {
        width: 100%;
        text-align: center
      }

      .heading-2.branco-mm-lan,
      .heading-2.parque-vitoria,
      .text-block-4._2.interna.elvira.mobile,
      .text-block-4._2.interna.progresso.mobile {
        text-align: center
      }

      .paragraph {
        width: 90%
      }

      .paragraph.home {
        width: 95%
      }

      .div-empreendimentos {
        margin-top: 0;
        margin-bottom: 0;
        padding-left: 0;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .div-empreendimento,
      .div-empreendimento.portal-das-aguas {
        width: 90%;
        margin: 10px 0
      }

      .div-info {
        height: 90px
      }

      .heading-3 {
        font-size: 22px
      }

      .section-vantagens {
        height: auto;
        padding-top: 40px;
        padding-bottom: 40px
      }

      .columns {
        position: static;
        top: 0;
        width: 90%;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
      }

      .columns._2,
      .columns.itapeva {
        width: 95%
      }

      .text-block-4 {
        font-size: 24px;
        text-align: left
      }

      .destaque {
        font-size: 28px
      }

      .column {
        padding-right: 0;
        padding-left: 0;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        border-bottom: 2px solid #ff8b22;
        border-right-style: none
      }

      .column.end {
        border-bottom-style: none
      }

      .column._2 {
        padding-right: 30px;
        padding-left: 10px;
        border-bottom-color: #006b3f
      }

      .bairros-planejados {
        padding-top: 60px;
        padding-bottom: 60px;
        background-image: url(../images/arvore.jpg);
        background-position: 100% 100%;
        background-size: 200px;
        background-repeat: no-repeat;
        background-attachment: fixed
      }

      .div-pilares {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .div-pilar {
        width: 280px;
        margin: 10px 0
      }

      .text-block-6 {
        width: 95%;
        text-align: left
      }

      .cta {
        height: auto;
        padding-top: 40px;
        padding-bottom: 40px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/cta_6.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/cta_6.jpg);
        background-position: 0 0, 50% 90%;
        background-size: auto, cover
      }

      .div-info-cta {
        position: static;
        width: 100%;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
      }

      .heading-4 {
        width: 100%;
        font-size: 26px;
        text-align: center
      }

      .button-3 {
        padding-right: 20px;
        padding-left: 20px;
        border-radius: 100px
      }

      .blog {
        padding-top: 60px;
        padding-bottom: 20px
      }

      .ultimos-posts {
        margin-top: 40px;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start
      }

      .div-artigo {
        width: 95%;
        height: 450px;
        margin: 10px auto
      }

      .recurso {
        width: 100%;
        margin-top: 20px
      }

      .div-seta {
        margin-right: 0
      }

      .paragraph-14 {
        font-size: 13px
      }

      .duvida {
        font-size: 14px
      }

      .column-20,
      .column-7 {
        padding-right: 0;
        padding-left: 0
      }

      .column-7 {
        margin-bottom: 20px
      }

      .rodape {
        height: auto;
        padding-top: 40px;
        padding-bottom: 40px
      }

      .column-21,
      .column-21._2 {
        padding-top: 0;
        padding-bottom: 0;
        padding-left: 0
      }

      .column-21 {
        margin-top: 20px;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start
      }

      .column-21._2 {
        margin-top: 0
      }

      .footer-social {
        width: 100%;
        margin-top: 0;
        margin-left: 0;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .link-social {
        margin-right: 5px;
        margin-left: 5px
      }

      .columns-3 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin-top: 40px
      }

      .link {
        margin-left: 0
      }

      .contato-imediato {
        display: none;
        width: 100px
      }

      .div-forms.interna {
        padding-right: 20px;
        padding-bottom: 20px;
        padding-left: 20px
      }

      .div-forms.interna.regatas {
        width: 100%
      }

      .div-forms.interna.smarturba {
        padding-top: 10px;
        padding-bottom: 10px
      }

      .heading-6 {
        margin-top: 45px;
        font-size: 20px;
        line-height: 1.3
      }

      .paragraph-15._2 {
        font-size: 14px
      }

      .form {
        width: 100%;
        margin-top: 10px
      }

      .text-field {
        margin-bottom: 5px
      }

      .tipo-contato {
        margin-right: 5px
      }

      .tipo-contato._2 {
        margin-right: 0;
        margin-left: 5px
      }

      .resposta1 {
        font-size: 14px
      }

      .column-23 {
        margin-bottom: 5px;
        padding-right: 0
      }

      .column-23._2 {
        margin-bottom: 0
      }

      .column-24 {
        padding-left: 0
      }

      .columns-4 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 5px
      }

      .submit-button {
        width: 100%;
        margin-top: 10px
      }

      .div-botao-contato {
        width: 75px;
        height: 75px;
        margin-right: 10px;
        margin-bottom: 60px;
        background-size: 75px 75px
      }

      .hero-internas.giardino {
        height: 670px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v3_1.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v3_1.jpg);
        background-position: 0 0, 40%0
      }

      .hero-internas.giardino.girass-is {
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v2_1.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v2_1.jpg);
        background-position: 0 0, 30% 50%
      }

      .hero-internas.giardino.tulipas {
        height: 720px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero-familia-01.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero-familia-01.jpg);
        background-position: 0 0, 50% 50%
      }

      .hero-internas.giardino.atlanta {
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero-familia-02.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero-familia-02.jpg);
        background-position: 0 0, 40% 50%
      }

      .hero-internas.portal-das-aguas {
        height: 600px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero.jpg);
        background-position: 0 0, 50%0;
        background-size: auto, cover;
        background-repeat: repeat, no-repeat
      }

      .hero-internas.sobre {
        height: 540px;
        background-position: 55% 100%;
        background-size: auto 500px
      }

      .hero-internas.venda {
        height: 680px;
        background-image: url(../images/hero-venda.jpg);
        background-position: 100% 100%;
        background-size: 600px;
        background-repeat: no-repeat
      }

      .hero-internas.nossas-lojas {
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero_v3.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero_v3.jpg);
        background-position: 0 0, 55% 100%
      }

      .hero-internas.area-do-cliente {
        height: 720px;
        background-image: url(../images/hero_1.jpg);
        background-position: 100% 100%;
        background-size: auto 380px
      }

      .hero-internas.reserva-macauba {
        height: 640px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .4)), to(rgba(0, 0, 0, .4))), url(../images/hero-familia-05.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../images/hero-familia-05.jpg);
        background-position: 0 0, 65%0
      }

      .hero-internas.reserva-macauba.jardim-bem-viver {
        height: 720px
      }

      .hero-internas.investidores {
        height: 400px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url(../images/urba-nova-hero-03.jpg);
        background-image: linear-gradient(180deg, transparent, transparent), url(../images/urba-nova-hero-03.jpg);
        background-position: 0 0, 30% 50%;
        background-size: auto, cover
      }

      .hero-internas.regatas {
        height: auto;
        padding-bottom: 60px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/hero_2.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/hero_2.jpg);
        background-position: 0 0, 50% 50%;
        background-size: auto, cover;
        background-repeat: repeat, no-repeat
      }

      .hero-internas.minha-casa {
        padding-top: 0;
        padding-bottom: 130px
      }

      .hero-internas.vila-profeta {
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(240, 240, 240, .03)), to(rgba(240, 240, 240, .03))), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .64)), to(rgba(0, 0, 0, .64))), url(../images/bg-hero-vila-profeta.png), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent));
        background-image: linear-gradient(180deg, rgba(240, 240, 240, .03), rgba(240, 240, 240, .03)), linear-gradient(180deg, rgba(0, 0, 0, .64), rgba(0, 0, 0, .64)), url(../images/bg-hero-vila-profeta.png), linear-gradient(180deg, transparent, transparent);
        background-position: 0 0, 0 0, 0 50%, 0 0;
        background-size: auto, auto, cover, auto;
        background-repeat: repeat, repeat, no-repeat, repeat;
        background-attachment: scroll, scroll, scroll, scroll
      }

      .hero-internas.elvira,
      .hero-internas.itapeva {
        height: auto;
        padding-bottom: 60px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .3)), to(rgba(0, 0, 0, .3))), url(../images/hero-itapeva.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(../images/hero-itapeva.jpg);
        background-position: 0 0, 0 50%;
        background-size: auto, cover;
        background-repeat: repeat, no-repeat
      }

      .hero-internas.montemor,
      .hero-internas.sao-roque {
        height: 100%;
        padding-bottom: 60px;
        background-image: url(../images/Depositphotos_249018672_XL.jpg);
        background-position: 80% 50%;
        background-size: cover;
        background-repeat: no-repeat
      }

      .hero-internas.residencial-progresso {
        height: 100%;
        padding-bottom: 60px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .43)), to(rgba(0, 0, 0, .43))), url(../images/Depositphotos_249018672_XL.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .43), rgba(0, 0, 0, .43)), url(../images/Depositphotos_249018672_XL.jpg);
        background-position: 0 0, 80% 50%;
        background-size: auto, cover;
        background-repeat: repeat, no-repeat
      }

      .hero-internas.parquevitoria {
        height: 100%;
        padding-bottom: 60px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .43)), to(rgba(0, 0, 0, .43))), url(../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .43), rgba(0, 0, 0, .43)), url(../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street.jpg);
        background-position: 0 0, 0 0;
        background-size: auto, auto
      }

      .hero-internas.monte-mor-lan {
        height: 100%;
        padding-bottom: 60px;
        background-image: url(../images/Depositphotos_249018672_XL.jpg);
        background-position: 80% 50%;
        background-size: cover;
        background-repeat: no-repeat
      }

      .bold-text {
        font-size: 20px
      }

      .bold-text.giardino {
        padding-right: 5px;
        padding-left: 5px;
        font-size: 17px
      }

      .bold-text.reserva-macauba {
        font-size: 18px
      }

      .bold-text.atlanta,
      .bold-text.reserva-macauba {
        padding-right: 5px;
        padding-left: 5px
      }

      .div-selo {
        position: absolute;
        left: auto;
        top: auto;
        right: 50%;
        bottom: 10%;
        display: block;
        width: 150px;
        height: 150px;
        margin-bottom: 0;
        margin-left: 0;
        background-size: cover;
        -webkit-transform: translate(50%, 0);
        -ms-transform: translate(50%, 0);
        transform: translate(50%, 0)
      }

      .div-selo.jardim-bem-viver {
        bottom: 4%
      }

      .infos-terreno.monte-mor.infos-terreno-monte {
        padding-top: 60px;
        padding-bottom: 60px
      }

      .div-infos-terreno {
        display: -ms-grid;
        display: grid;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        grid-auto-columns: 1fr;
        grid-column-gap: 0;
        grid-row-gap: 10px;
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
        -ms-grid-rows: auto auto;
        grid-template-rows: auto auto
      }

      .div-info-terreno {
        width: 100%;
        height: auto;
        margin: 10px 0;
        padding: 10px
      }

      .div-info-terreno.end-mobile {
        border-right-style: none
      }

      .div-text-terreno,
      .paragraph-16._2 {
        width: 100%
      }

      .paragraph-16.itapeva.text-form,
      .paragraph-16.montemor.text-form,
      .paragraph-16.montmor.text-form,
      .paragraph-16.widht-80 {
        width: auto
      }

      .div-caracteristicas {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
      }

      .div-caracteristica {
        width: 325px;
        min-height: auto;
        margin: 10px 0
      }

      .div-caracteristica.campos,
      .div-caracteristica.jardim-bem-viver,
      .div-caracteristica.reserva-macauba {
        min-height: auto
      }

      .div-caracteristica.parque-vitoria {
        width: auto
      }

      .h1 {
        font-size: 25px;
        line-height: 1.5;
        letter-spacing: 0
      }

      .text-block-9 {
        width: 85%;
        margin-left: 0;
        text-align: left
      }

      .div-ligue {
        padding-top: 5px;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .link-2 {
        font-size: 20px;
        text-align: center
      }

      .text-block-10 {
        margin-right: 10px;
        margin-bottom: 0;
        text-align: center
      }

      .slide-nav-2 {
        width: 100px
      }

      .left-arrow-2 {
        left: 25%
      }

      .right-arrow-2 {
        right: 25%
      }

      .galeria-de-fotos {
        height: auto;
        background-color: #f7f7f7
      }

      .column-25,
      .columns-5 {
        height: auto
      }

      .column-25 {
        padding-top: 40px;
        padding-bottom: 40px;
        padding-left: 0
      }

      .column-26 {
        height: auto;
        padding-right: 0
      }

      .lightbox-link {
        position: relative
      }

      .img-cover-galeria {
        height: 250px
      }

      .seta {
        left: 50%;
        top: auto;
        right: 0;
        bottom: 0;
        margin-right: 0;
        margin-bottom: -25px;
        -webkit-transform: translate(-50%, 0) rotate(45deg);
        -ms-transform: translate(-50%, 0) rotate(45deg);
        transform: translate(-50%, 0) rotate(45deg)
      }

      .div-title-info-galeria {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        padding-right: 20px;
        padding-left: 20px;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .columns-6,
      .localizacao {
        height: auto
      }

      .column-27 {
        padding-bottom: 0;
        padding-left: 0;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .column-27.residencial-progresso {
        padding-right: 0
      }

      .column-27,
      .column-28 {
        height: auto
      }

      .div-title-info-localizacao {
        width: 100%;
        margin-top: 40px;
        margin-bottom: 40px;
        padding-right: 20px;
        padding-left: 20px
      }

      .tabs {
        height: auto
      }

      .tab-pane-tab-1 {
        height: 300px
      }

      .tabs-menu {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
      }

      .tab-pane-tab-2 {
        height: 300px
      }

      .planta {
        padding-top: 40px;
        padding-bottom: 40px
      }

      .div-img-casa {
        height: 300px
      }

      .lightbox-link-3 {
        width: 100%;
        height: auto
      }

      .lightbox-link-4 {
        height: auto
      }

      .lightbox-link-5 {
        width: 100%;
        height: auto
      }

      .div-planta-01,
      .div-planta-02 {
        width: 100%;
        height: 300px
      }

      .andamento-obra {
        padding-top: 40px;
        padding-bottom: 40px
      }

      .div-andamento {
        display: -ms-grid;
        display: grid;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-auto-columns: 1fr;
        grid-column-gap: 10px;
        grid-row-gap: 10px;
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
        -ms-grid-rows: auto auto;
        grid-template-rows: auto auto
      }

      .formulario {
        padding-top: 40px;
        padding-bottom: 40px
      }

      .formulario.montemor {
        width: 100%
      }

      .form-2.venda {
        margin-top: 20px
      }

      .form-2.smarturba {
        margin-top: 10px
      }

      .text-field-2 {
        box-shadow: 0 0 6px -3px rgba(0, 0, 0, .25)
      }

      .field-label {
        padding-left: 0
      }

      .ficha-tecnica {
        padding-top: 40px;
        padding-bottom: 40px
      }

      .columns-11 {
        width: 100%;
        margin-top: 20px
      }

      .section-texto-sobre {
        padding-top: 40px;
        padding-bottom: 40px
      }

      .email-ri-urba {
        width: 95%
      }

      .email-ri-urba.legenda.texto-padding-bottom {
        padding-bottom: 0
      }

      .column-33._2 {
        padding-top: 20px
      }

      .div-img-sobre {
        width: auto;
        height: 216px
      }

      .div-img-sobre.venda {
        height: 189px
      }

      .div-estados {
        margin-top: 0;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .div-estado {
        margin-bottom: 20px
      }

      .div-estado,
      .div-seta-2 {
        margin-right: 0
      }

      .duvida-2 {
        font-size: 14px
      }

      .razoes-vender {
        padding-bottom: 40px
      }

      .text-block-15 {
        width: 95%;
        margin-bottom: 0;
        line-height: 1.6;
        text-align: left
      }

      .text-block-15._2 {
        width: 100%;
        text-align: center
      }

      .div-entre-contato._2,
      .div-passo-a-passo {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
      }

      .div-passo-a-passo {
        margin-top: 40px;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .div-passo {
        margin: 30px 0
      }

      .div-camino {
        display: none
      }

      .columns-12 {
        width: 95%
      }

      .column-34 {
        padding-right: 0;
        padding-left: 0
      }

      .paragraph-20 {
        width: 100%;
        font-size: 16px;
        line-height: 1.6
      }

      .div-principais-duvidas {
        width: 100%;
        margin-bottom: 0;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .div-principal-duvida {
        width: 100%;
        margin-right: 0;
        margin-bottom: 20px;
        margin-left: 0
      }

      .div-entre-contato._2 {
        width: 100%
      }

      .div-contato {
        width: 100%;
        margin-bottom: 10px
      }

      .text-block-21.vizinho {
        width: 95%
      }

      .columns-13 {
        width: 100%
      }

      .sobre-vizinho-premiado {
        min-height: auto;
        margin-bottom: 20px
      }

      .div-forms-indicacao {
        width: 100%;
        padding-right: 10px;
        padding-left: 10px
      }

      .columns-14 {
        width: 95%
      }

      .column-35 {
        padding-right: 0;
        padding-left: 0;
        text-align: center
      }

      .div-lojas {
        width: 95%;
        height: 0
      }

      .form-4 {
        width: 85%;
        margin-left: 0
      }

      .columns-15 {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
      }

      .multimidia {
        padding-top: 40px;
        padding-bottom: 40px
      }

      .div-midia {
        width: 100%
      }

      .contact {
        height: auto;
        padding-bottom: 40px;
        background-image: url(../images/hero_v2.jpg);
        background-position: 30% 50%;
        background-size: cover;
        background-repeat: no-repeat
      }

      .col-contato {
        position: static;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
      }

      .div-forms-contato {
        margin-top: 20px;
        padding-top: 20px
      }

      .heading-13,
      .paragraph-26 {
        width: 100%;
        text-align: center
      }

      .heading-13 {
        margin-top: 0;
        font-size: 28px
      }

      .paragraph-26 {
        margin-bottom: 20px;
        font-size: 16px
      }

      .nav-link,
      .nav-link.w--current {
        padding-top: 15px;
        padding-bottom: 15px
      }

      .nav-link.w--current {
        border-bottom-style: none
      }

      .destaque-h2-laranja.roxo {
        color: #82ea5b
      }

      .menu-button {
        margin-top: 20px;
        color: #006b3f
      }

      .menu-button.w--open {
        background-color: transparent;
        color: #006b3f
      }

      .form-block {
        margin-bottom: 40px
      }

      .contato-imediato-mobile {
        display: block;
        overflow: auto;
        width: 100px;
        padding-right: 10px;
        padding-bottom: 20px;
        padding-left: 10px
      }

      .div-botao-contato-mobile {
        position: absolute;
        left: auto;
        top: auto;
        right: 0;
        bottom: 0;
        width: 75px;
        height: 75px;
        margin-right: 10px;
        margin-bottom: 20px;
        border-radius: 100px;
        background-color: #ac41d8;
        background-image: url(../images/contact_rapido.png);
        background-position: 50% 50%;
        background-size: cover;
        background-repeat: no-repeat;
        box-shadow: 0 7px 15px -6px rgba(0, 0, 0, .4);
        cursor: pointer
      }

      .div-forms-mobile {
        position: relative;
        z-index: 3;
        overflow: hidden;
        height: 0;
        margin-top: 20px;
        padding-right: 10px;
        padding-left: 10px;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 4px 12px -6px #000
      }

      .div-close-mobile {
        position: absolute;
        left: auto;
        top: 0;
        right: 0;
        bottom: auto;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 30px;
        height: 30px;
        margin-top: 10px;
        margin-right: 10px;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        border-radius: 100px;
        background-color: #fff;
        box-shadow: 0 1px 6px -3px rgba(0, 0, 0, .5);
        color: #ac41d8;
        font-size: 18px;
        font-weight: 500
      }

      .column-39,
      .column-40,
      .column-41 {
        padding-right: 0;
        padding-left: 0
      }

      .column-41 {
        padding-top: 20px
      }

      .column-43 {
        padding-bottom: 20px
      }

      .column-43,
      .column-44 {
        padding-right: 0;
        padding-left: 0
      }

      .column-45 {
        display: block;
        height: auto;
        padding-top: 40px
      }

      .column-46 {
        padding-right: 0;
        padding-left: 0
      }

      .link-block-3,
      .list-5 {
        padding-left: 20px
      }

      .link-block-3 {
        display: block;
        margin-top: 0;
        margin-left: 0;
        padding-right: 20px;
        text-align: left
      }

      .link-block-3:hover {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
      }

      .nav-link-2 {
        margin-top: 0;
        padding-top: 20px;
        padding-bottom: 10px
      }

      .nav-menu-2 {
        z-index: 2;
        display: block;
        height: auto;
        padding-bottom: 10px;
        border-bottom: 2px solid #ff8b22;
        background-color: rgba(255, 255, 255, .95)
      }

      .menu-button-2 {
        color: #ff8b22
      }

      .menu-button-2,
      .menu-button-2.w--open {
        background-color: transparent
      }

      .dropdown-news {
        margin-top: 15px;
        margin-right: auto;
        margin-left: auto;
        padding-right: 10px;
        padding-left: 10px
      }

      .text-block-29 {
        text-align: center
      }

      .icon-3 {
        color: #ff8b22
      }

      .drop-form-news.w--open {
        margin-right: auto;
        margin-bottom: 10px;
        margin-left: auto
      }

      .dropdown-button {
        padding-top: 10px;
        padding-bottom: 10px
      }

      .seta-drop {
        display: none;
        margin-top: 0
      }

      .navbar-2 {
        height: 90px
      }

      .titulo-post-anterior {
        font-size: 16px;
        line-height: 1.3
      }

      .column-47 {
        text-align: left
      }

      .div-busca {
        height: 0
      }

      .autor.relacionados {
        display: block
      }

      .text-field-4 {
        margin-top: 5px;
        margin-bottom: 5px
      }

      .heading-14 {
        margin-top: 0;
        padding-left: 0;
        text-align: center
      }

      .slider-3 {
        padding-bottom: 50px
      }

      .categoria {
        margin-top: 15px;
        margin-left: 10px;
        padding-left: 15px
      }

      .div-destaque-lateral._4 {
        height: 200px
      }

      .div-destaque-lateral._2,
      .div-destaque-lateral._3 {
        height: 200px;
        margin-bottom: 20px
      }

      .heading-15 {
        width: 100%;
        line-height: 1.3
      }

      .heading-15,
      .heading-15._02 {
        font-size: 20px
      }

      .dvi-cta {
        width: 350px;
        height: 550px;
        background-image: url(../images/banner-lateral.png)
      }

      .dvi-cta.home {
        height: 540px
      }

      .data-publicacao {
        margin-left: 10px;
        padding-left: 10px
      }

      .data-publicacao.relacionados {
        display: block
      }

      .div-ad {
        display: none;
        height: 70px
      }

      .section-posts {
        padding-top: 90px
      }

      .submit-button-4 {
        width: 100%
      }

      .div-post-destaque {
        margin-bottom: 10px;
        padding-right: 15px;
        padding-left: 15px
      }

      .grid-2 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .column-48 {
        padding-top: 20px;
        padding-right: 0;
        padding-left: 0
      }

      .grid {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
      }

      .container-padrao-2 {
        padding-right: 10px;
        padding-left: 10px
      }

      .column-2 {
        padding-right: 0
      }

      .post-relacionado {
        width: 100%;
        margin-right: 0;
        margin-bottom: 10px
      }

      .link-block {
        margin-right: 10px
      }

      .div-busca-2 {
        height: 0
      }

      .heading-16 {
        margin-top: 0;
        padding-left: 0;
        text-align: center
      }

      .heading-16.relacionados {
        font-size: 26px
      }

      .paragraph-2 {
        width: 100%;
        font-size: 18px;
        line-height: 1.8
      }

      .heading-17 {
        font-size: 32px
      }

      .paragraph-27 {
        width: 100%
      }

      .column-4 {
        padding-right: 0;
        padding-left: 0;
        border-right-style: none
      }

      .column-3 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding-left: 0;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .heading-18 {
        width: 100%;
        line-height: 1.3
      }

      .heading-18,
      .heading-18._02 {
        font-size: 20px
      }

      .heading-18._02.relacionado {
        font-size: 18px
      }

      .div-img-postrelacionado,
      .div-img-postrelacionado._2,
      .div-img-postrelacionado._3 {
        padding-right: 10px;
        padding-left: 10px
      }

      .content-cta {
        width: 100%;
        margin-top: 40px
      }

      .submit-button-5 {
        width: 100%
      }

      .div-siganos {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .div-img-postinterna {
        width: 100%;
        height: 300px
      }

      .text-block-32 {
        text-align: center
      }

      .heading-19 {
        width: 100%;
        font-size: 22px
      }

      .post-main-info {
        width: 100%
      }

      .posts {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .secao-material-destaque {
        height: auto;
        padding-bottom: 20px
      }

      .imagem-material-destque {
        width: 100%;
        height: 300px;
        background-position: 50% 50%;
        background-size: cover
      }

      .titulo-material-destaque {
        width: 100%;
        margin-top: 0;
        padding-left: 20px
      }

      .botao-materiais {
        width: 90%;
        text-align: center
      }

      .pai-dropdown-categoria-materiais {
        width: 100%;
        margin-bottom: 30px;
        float: none
      }

      .column-5 {
        display: block;
        padding-right: 0;
        padding-left: 0
      }

      .text-block-33 {
        font-size: 18px
      }

      .campo-pesquisa {
        width: 85%
      }

      .coluna-busca {
        padding-right: 0;
        padding-left: 0
      }

      .colunas-materiais {
        height: auto
      }

      .titulo-categoria-materiais {
        padding-left: 0;
        text-align: center
      }

      .coluna-individual-material {
        padding-right: 0;
        padding-left: 0
      }

      .botao-material-secundario {
        position: relative;
        width: 99%;
        margin-top: 10px;
        margin-left: 0
      }

      .bold-text-27 {
        height: auto
      }

      .image-9 {
        width: 100px;
        margin-right: -25px;
        margin-bottom: 0;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg)
      }

      .image-10._2 {
        margin-left: 25px
      }

      .image-11 {
        position: absolute;
        left: 0;
        top: 0;
        right: auto;
        bottom: 0;
        margin-top: 2px;
        margin-left: 10px
      }

      .form-block-5 {
        margin-bottom: 10px
      }

      .column-49 {
        padding-right: 0;
        padding-left: 0;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        border-bottom: 2px solid #ff8b22;
        border-right-style: none
      }

      .column-49._2 {
        padding-right: 30px;
        padding-left: 10px;
        border-bottom-color: #006b3f
      }

      .list-7,
      .text-block-34 {
        width: 100%
      }

      .list-7 {
        padding-left: 20px
      }

      .text-field-5 {
        width: 100%;
        float: none;
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px
      }

      .submit-button-6 {
        width: auto;
        padding-right: 40px;
        padding-left: 40px;
        float: none;
        border-top-left-radius: 25px;
        border-bottom-left-radius: 25px
      }

      .form-6 {
        width: 100%;
        text-align: center
      }

      .left-arrow-3,
      .right-arrow-3 {
        display: none
      }

      .hero-landing {
        height: auto;
        padding-top: 40px;
        padding-bottom: 40px
      }

      .div-info-hero {
        top: 0;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
      }

      .div-info-hero.monte-mor {
        top: 15%
      }

      .col-forms,
      .col-text {
        padding-right: 0
      }

      .col-text.sta-iria {
        padding-top: 0
      }

      .col-forms {
        padding-top: 100px;
        padding-left: 0
      }

      .heading-lp {
        width: 225px;
        font-size: 16px;
        line-height: 26px
      }

      .heading-lp.sta-iria {
        width: 190px
      }

      .heading-lp.regatas {
        width: 270px
      }

      .div-logos-hero {
        position: relative;
        margin-bottom: 20px;
        padding-top: 0;
        padding-left: 0;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .div-logos-hero.sta-iria {
        width: 160px;
        margin-top: 0;
        margin-left: 0
      }

      .div-logos-hero.itapeva,
      .div-logos-hero.regatas {
        margin-right: 100px;
        margin-left: 0
      }

      .div-logos-hero.elvira {
        margin-right: auto;
        margin-left: auto
      }

      .image-13 {
        margin-right: 0
      }

      .tag-hero,
      .tag-hero.destaque {
        font-size: 14px
      }

      .div-tags {
        padding-left: 0;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .div-tags.sta-iria {
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start
      }

      .destaque-lp {
        font-size: 28px;
        line-height: 32px
      }

      .destaque-lp.regatas {
        font-size: 35px
      }

      .destaque-lp.itapeva {
        width: auto;
        font-size: 31px;
        line-height: 40px
      }

      .box {
        width: 300px;
        height: 227px;
        background-size: 300px 227px
      }

      .box.sta-iria {
        width: 240px;
        height: 180px;
        background-size: 240px 180px
      }

      .box.itapeva,
      .box.regatas {
        height: 240px;
        margin-top: 20px
      }

      .box.itapeva.comercial,
      .box.regatas.comercial {
        height: 190px;
        margin-top: 20px;
        padding-top: 15px
      }

      .box.itapeva.montemor {
        width: 280px
      }

      .div-forms-hero {
        width: 100%
      }

      .div-forms-hero.itapeva,
      .div-forms-hero.monte-mor-lan,
      .div-forms-hero.regatas {
        margin-top: 0
      }

      .label-form-lp {
        font-size: 12px
      }

      .campo-form-lp {
        margin-bottom: 5px
      }

      .enviar-form-lp {
        margin-top: 10px
      }

      .traga-seu-negocio {
        padding-top: 40px
      }

      .columns-17 {
        width: 100%;
        margin-top: 40px
      }

      .column-50 {
        padding-right: 0
      }

      .slide-nav-4 {
        margin-bottom: -50px
      }

      .slide-nav-4.regatas {
        margin-bottom: 0
      }

      .heading-22 {
        margin-top: 100px
      }

      .condicoes {
        padding-top: 40px;
        padding-bottom: 60px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#006b3f), to(#00d38d));
        background-image: linear-gradient(180deg, #006b3f, #00d38d);
        background-position: 0 0;
        background-size: auto;
        background-repeat: repeat
      }

      .condicoes.minha-casa {
        padding-bottom: 40px
      }

      .div-condicoes {
        width: 100%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .box-condicoes {
        width: auto;
        border-bottom: 1px solid #fff;
        border-right-style: none
      }

      .box-condicoes.end {
        border-bottom-style: none
      }

      .localizacao-lp {
        padding-top: 40px;
        padding-bottom: 60px
      }

      .text-block-37 {
        width: 100%;
        font-size: 16px
      }

      .columns-18 {
        width: 100%
      }

      .div-proximidade {
        margin-right: 0;
        margin-bottom: 15px
      }

      .div-grupo-proximidades {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .column-51 {
        padding-right: 0
      }

      .map-2 {
        height: 350px
      }

      .institucional {
        padding-top: 40px
      }

      .column-52 {
        padding-top: 0;
        padding-right: 0
      }

      .column-53 {
        margin-top: 20px
      }

      .column-53,
      .column-54,
      .column-55 {
        padding-right: 0;
        padding-left: 0
      }

      .column-55 {
        padding-top: 40px
      }

      .div-ponto-de-conversao {
        width: 100%;
        padding: 15px
      }

      .h3-ponto-de-conversao._2 {
        font-size: 16px;
        text-align: center
      }

      .paragraph-30 {
        font-size: 16px
      }

      .button-conversao {
        width: 100%;
        margin-right: 0;
        margin-bottom: 20px;
        padding-right: 10px;
        padding-left: 10px;
        text-align: center
      }

      .button-conversao._2 {
        margin-bottom: 0
      }

      .button-conversao._3 {
        margin-right: 0;
        margin-bottom: 10px
      }

      .radio-button-2 {
        margin-right: 10px
      }

      .radio-button-field-3 {
        width: 100%;
        padding-right: 5px
      }

      .radio-button-label-2 {
        width: 90%;
        font-size: 14px
      }

      .button-11 {
        width: 100%;
        margin-left: 0;
        text-align: center
      }

      .button-11.smarturba {
        padding: 20px 10px;
        font-size: 15px
      }

      .button-11.smarturba._2,
      .button-12.smarturba._2.mobile.display-hidden {
        display: none
      }

      .button-11.smarturba._2.mobile {
        display: block;
        margin-top: 20px
      }

      .div-etapa2-2 {
        height: 0
      }

      .columns-20 {
        margin-bottom: 0
      }

      .heading-23 {
        font-size: 28px
      }

      .heading-23.area-cliente {
        width: 100%;
        padding-bottom: 140px;
        font-size: 28px;
        text-align: left
      }

      .section-texto-relatorios {
        padding-top: 30px;
        padding-bottom: 30px
      }

      .div-categorias,
      .paragraph-31 {
        width: 100%
      }

      .duvida-3 {
        font-size: 14px
      }

      .div-seta-3 {
        margin-right: 0
      }

      .list-8 {
        padding-left: 20px
      }

      .div-resposta-2 {
        height: 0
      }

      .list-10,
      .list-11,
      .list-9 {
        padding-left: 20px
      }

      .campo-form-lp-2 {
        margin-bottom: 5px
      }

      .tag-hero-2,
      .tag-hero-2.destaque {
        font-size: 14px
      }

      .tag-hero-2.dunlop-box-hero {
        display: block;
        text-align: center
      }

      .enviar-form-lp-2 {
        margin-top: 10px
      }

      .heading-lp-2 {
        width: 225px;
        font-size: 16px;
        line-height: 26px
      }

      .heading-lp-2.itapeva,
      .heading-lp-2.regatas {
        width: 260px;
        font-size: 18px
      }

      .label-form-lp-2 {
        font-size: 12px
      }

      .div-box-contorno,
      .div-box-preenchido {
        width: 300px;
        height: 200px
      }

      .div-box-contorno.regatas-comercial,
      .div-box-preenchido.regatas-comercial {
        width: 290px;
        height: 150px
      }

      .div-box-contorno.itapeva {
        width: 280px;
        height: 280px
      }

      .div-box-contorno.elvira,
      .div-box-contorno.parque-vitoria,
      .div-box-contorno.residencial-progresso {
        left: 10px;
        top: 10px;
        width: 280px;
        height: 200px
      }

      .feature {
        width: 100%
      }

      .text-block-46 {
        left: auto;
        top: 10px;
        right: 10px;
        bottom: auto
      }

      .tag-breve-lan-amento.itapeva {
        top: -3.5%
      }

      .text-block-47.montemor,
      .text-block-47.parque-vitoria,
      .text-block-47.residencial-progresso {
        top: 84px
      }

      .hero {
        height: auto;
        padding-top: 20px;
        padding-bottom: 60px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(55, 20, 73, .66)), to(rgba(55, 20, 73, .66))), url(../images/Imagem_Smart08.jpg);
        background-image: linear-gradient(180deg, rgba(55, 20, 73, .66), rgba(55, 20, 73, .66)), url(../images/Imagem_Smart08.jpg);
        background-position: 0 0, 60% 50%;
        background-size: auto, cover;
        background-repeat: repeat, no-repeat
      }

      .heading-25 {
        font-size: 42px;
        line-height: 1.3em;
        text-align: center
      }

      .image-18 {
        left: 0;
        top: 5%;
        right: 0;
        bottom: auto;
        margin-right: auto;
        margin-left: auto
      }

      .heading-26 {
        line-height: 1.4em
      }

      .heading-26,
      .heading-27.forms,
      .paragraph-32 {
        text-align: center
      }

      .entenda {
        padding-top: 60px;
        padding-bottom: 60px
      }

      .columns-21 {
        width: auto
      }

      .column-60 {
        padding-top: 40px;
        padding-right: 0;
        padding-left: 0
      }

      .grid-3 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
      }

      .column-61 {
        padding-right: 0
      }

      .box-entenda {
        margin-bottom: 10px
      }

      .video {
        padding-top: 60px;
        padding-bottom: 60px;
        background-position: -60% 100%;
        background-size: cover;
        background-attachment: scroll
      }

      .div-video {
        width: 100%;
        margin-top: 40px
      }

      .como-funciona {
        padding-bottom: 60px
      }

      .section-form {
        padding-top: 60px;
        padding-bottom: 120px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .5))), url(../images/contato.jpg);
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../images/contato.jpg);
        background-position: 0 0, 10% 100%;
        background-size: auto, cover;
        background-repeat: repeat, no-repeat;
        background-attachment: scroll, fixed
      }

      .text-field-6 {
        box-shadow: 0 0 6px -3px rgba(0, 0, 0, .25)
      }

      .heading-27 {
        width: 95%;
        margin-right: 0;
        margin-left: 0;
        text-align: left
      }

      .heading-27,
      .heading-27.center._32px {
        font-size: 24px
      }

      .heading-27.tour-dunlop._2._32px,
      .heading-27.tour-dunlop._32px {
        width: 100%;
        font-size: 24px;
        text-align: center
      }

      .heading-27.galeria {
        margin-bottom: 0;
        text-align: center
      }

      .heading-27.center {
        width: 100%;
        text-align: center
      }

      .paragraph-34 {
        width: 100%
      }

      .div-features,
      .div-features._2 {
        margin-top: 80px;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
      }

      .div-features._3,
      .div-features._4 {
        margin-top: 80px
      }

      .imagem-smarturba {
        width: 100%
      }

      .imagem-smarturba._2.dunlop-img,
      .imagem-smarturba._6.dunlop-img,
      .imagem-smarturba._7.dunlop-img,
      .imagem-smarturba.dunlop-img {
        width: 280px;
        height: 280px
      }

      .div-info-smarturba {
        width: 100%;
        margin-top: 20px;
        margin-left: 0
      }

      .div-info-smarturba._2 {
        margin-top: 20px;
        margin-right: 0
      }

      .heading-28._2,
      .heading-28._4,
      .heading-28._6,
      .paragraph-35._2 {
        text-align: left
      }

      .topicos {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
      }

      .topico {
        width: 100%;
        margin-right: 0;
        margin-bottom: 10px
      }

      .topico._2 {
        width: 100%;
        margin-left: 0
      }

      .topico,
      .topico._2,
      .topico._4 {
        min-height: 50px
      }

      .topico._4,
      .topico._6 {
        margin-left: 0
      }

      .image-20,
      .image-21 {
        width: 100px
      }

      .image-20._2 {
        left: -15px
      }

      .div-button-smarturba {
        margin-top: 80px
      }

      .text-block-50 {
        width: 90%;
        margin-right: auto;
        margin-left: auto;
        font-size: 12px
      }

      .cta-provisorio {
        padding-top: 60px;
        padding-bottom: 60px;
        background-image: linear-gradient(45deg, #006b3f, #079d56);
        background-position: 0 0;
        background-size: auto;
        background-repeat: repeat
      }

      .heading-29 {
        width: 100%
      }

      .heading-30 {
        font-size: 42px;
        line-height: 1.3em;
        text-align: center
      }

      .heading-30.h1-dunlop {
        font-size: 28px
      }

      .heading-30.minha-casa {
        font-size: 47px
      }

      .heading-31 {
        line-height: 1.4em
      }

      .button-12,
      .heading-31,
      .paragraph-36 {
        text-align: center
      }

      .paragraph-36.dunlop-sub {
        margin-right: 10px;
        margin-left: 10px
      }

      .paragraph-36.vila-profeta-subtitulo {
        margin-right: 0;
        text-align: left
      }

      .button-12 {
        width: 100%;
        margin-left: 0
      }

      .button-12.smarturba {
        padding: 20px 10px;
        font-size: 15px
      }

      .button-12.smarturba._2 {
        display: block
      }

      .button-12.smarturba._2.mobile {
        display: none;
        margin-top: 20px;
        padding-top: 15px;
        padding-bottom: 15px
      }

      .div-formulario-dunlop {
        width: 100%;
        padding-top: 20px;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
      }

      .div-formulario-dunlop.minha-casa {
        margin-right: auto;
        margin-left: auto;
        padding-right: 0
      }

      .enviar-form-lp-3 {
        width: 100%;
        margin-top: 10px;
        padding-top: 12px;
        padding-bottom: 12px
      }

      .box-entenda-2 {
        margin-bottom: 10px
      }

      .div-paragraph-center.margin-top-60px {
        margin-top: 50px
      }

      .div-video-2 {
        width: 100%
      }

      .div-grid-features {
        margin-top: 0;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
      }

      .div-feature {
        width: 100%;
        margin: 15px 0
      }

      .topico-2 {
        width: 100%;
        min-height: 50px;
        margin-right: 0;
        margin-bottom: 10px
      }

      .topico-2.dunlop-topic,
      .topico-2.vila-profeta-topicos {
        min-height: 80px
      }

      .comercio {
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .6)), to(rgba(0, 0, 0, .6))), url(../images/como-funciona-3.jpeg), -webkit-gradient(linear, left top, left bottom, color-stop(45%, #079d56), to(#00d38d));
        background-image: linear-gradient(180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(../images/como-funciona-3.jpeg), linear-gradient(180deg, #079d56 45%, #00d38d);
        background-size: auto, cover, auto
      }

      .div-logo-dunlop {
        width: 290px;
        border-radius: 5px
      }

      .seta-2 {
        left: 50%;
        top: auto;
        right: 0;
        bottom: 0;
        margin-right: 0;
        margin-bottom: -25px;
        -webkit-transform: translate(-50%, 0) rotate(45deg);
        -ms-transform: translate(-50%, 0) rotate(45deg);
        transform: translate(-50%, 0) rotate(45deg)
      }

      .galeria-de-fotos-2 {
        height: auto;
        background-color: #f7f7f7
      }

      .button-14 {
        padding-right: 20px;
        padding-left: 20px;
        border-radius: 100px
      }

      .column-68 {
        height: auto;
        padding-top: 40px;
        padding-bottom: 40px;
        padding-left: 0
      }

      .div-contorno {
        left: 30px;
        top: 30px;
        width: 280px;
        height: 280px;
        border-width: 8px;
        border-radius: 20px
      }

      .div-contorno._2 {
        left: 30px;
        top: 10px;
        right: auto;
        bottom: auto
      }

      .div-contorno._2._3 {
        top: 30px
      }

      .enviar-form-lp-4 {
        width: 100%;
        margin-top: 10px;
        padding-top: 12px;
        padding-bottom: 12px
      }

      .div-logo-minhacasa {
        width: 320px;
        margin-right: auto;
        margin-left: auto;
        border-radius: 15px
      }

      .menor {
        font-size: 44px
      }

      .heading-34 {
        margin-right: 10px;
        margin-left: 10px;
        font-size: 28px;
        line-height: 1.2em;
        text-align: center
      }

      .sonho {
        padding-top: 150px;
        padding-bottom: 60px
      }

      .image-24 {
        left: 50%;
        bottom: -97px;
        width: 96%
      }

      .div-selo-minhacasa {
        position: relative;
        left: 0;
        bottom: 0;
        margin-top: 20px;
        margin-right: auto;
        margin-left: auto;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
      }

      .div-boxes-sonho {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: auto;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
      }

      .div-box-sonho {
        width: 100%;
        height: auto;
        padding-top: 15px;
        padding-bottom: 15px;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .txt-boxes-sonho {
        margin-left: 10px;
        text-align: left
      }

      .box-condicoes-2 {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start
      }

      .box-condicao {
        width: 100%;
        min-height: 0;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        border-right-style: none
      }

      .box-condicao.border-off {
        border-bottom-style: none
      }

      .div-txt-detalhes {
        width: 100%
      }

      .img-casas,
      .slider-detalhes {
        height: 400px
      }

      .div-passos {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .text-block-59 {
        line-height: 1.3em
      }

      .slider-6 {
        height: 240px
      }

      .div-logo-vila-profeta {
        width: 290px;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, .9)
      }

      .roxo.bold {
        color: #82ea5b
      }

      .image-26 {
        width: 300px
      }

      .apresentacao-institucional {
        margin-top: 0;
        padding-top: 0
      }

      .filto-por-ano {
        height: 130px
      }

      .form-8 {
        display: block;
        width: auto
      }

      .btn-filtro-investidores {
        display: inline-block;
        margin-top: 0
      }

      .div-block-12 {
        text-align: right
      }

      .estatuto-social {
        margin-top: 80px
      }

      .columns-22,
      .columns-23 {
        display: block
      }

      .div-img-sobre-2 {
        width: auto;
        height: 216px;
        margin-top: 0
      }

      .div-img-sobre-2.venda {
        height: 189px
      }

      .paragrafo-comum {
        width: 95%
      }

      .paragrafo-comumm {
        margin-top: 0;
        font-size: 13px
      }

      .nota.texto-margem-top,
      .paragrafo-comumm.texto-margem-top {
        margin-top: 51px
      }

      .columns-24 {
        margin-bottom: 150px
      }

      .link-mobile {
        padding-left: 20px
      }

      .nota {
        margin-top: 0;
        font-size: 13px
      }

      .div-box-preenchido-itapeva {
        width: 280px;
        height: 280px
      }

      .div-box-preenchido-itapeva.regatas-comercial {
        width: 290px;
        height: 150px
      }

      .subtitle-lp {
        width: 225px;
        font-size: 16px;
        line-height: 26px
      }

      .subtitle-lp.regatas {
        width: 260px;
        font-size: 18px
      }

      .subtitle-lp.itapeva,
      .subtitle-lp.monte-mor {
        width: 260px;
        margin-top: 86px;
        font-size: 17px;
        line-height: 27px
      }

      .subtitle-lp.monte-mor {
        margin-top: 68px;
        text-align: center
      }

      .subtitle-lp.parque-vitoria,
      .subtitle-lp.residencial-progresso {
        width: 260px;
        margin-top: 20px;
        margin-left: -13px;
        font-size: 17px;
        line-height: 27px;
        text-align: center
      }

      .subtitle-lp.monte-mor-lan,
      .subtitle-lp.parque-vitoria-2 {
        width: 260px;
        margin-top: 68px;
        font-size: 17px;
        line-height: 27px;
        text-align: center
      }

      .logo-itapeva {
        margin-right: 0
      }

      .button-33,
      .button-34 {
        padding-right: 20px;
        padding-left: 20px;
        border-radius: 100px
      }

      .column-25-copy {
        height: auto;
        padding-top: 40px;
        padding-bottom: 40px;
        padding-left: 0
      }

      .image-60 {
        width: 100px;
        margin-right: -25px;
        margin-bottom: 0;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg)
      }

      .video-itapeva {
        padding-top: 40px;
        padding-bottom: 40px
      }

      .heading-36.elvira-copy.monte-mor,
      .heading-36.elvira-copy.parque-vitoria,
      .heading-36.elvira-copy.residencial-progresso,
      .heading-36.elvira-copy.sao-roque,
      .heading-36.elvira.monte-mor,
      .heading-36.elvira.monte-mor-lan,
      .heading-36.elvira.sao-roque {
        width: 230px;
        font-size: 20px
      }

      .grid-5 {
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr
      }

      .logo-elvira {
        margin-right: 0
      }

      .lightbox-link-8 {
        width: 100%;
        height: auto
      }

      .div-planta-03 {
        width: 100%;
        height: 300px
      }

      .cond-elvira {
        width: 100%
      }

      .elvira-roxo {
        height: auto;
        padding-top: 40px;
        padding-bottom: 40px;
        padding-left: 0
      }

      .elvira-seta-laranja {
        width: 100px;
        margin-right: -25px;
        margin-bottom: 0;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg)
      }

      .div-box-preenchido-elvira {
        width: 280px;
        height: 200px
      }

      .div-box-preenchido-elvira.regatas-comercial {
        width: 290px;
        height: 150px
      }

      .destaque-h2-copy.roxo,
      .destaque-h2-elvira.roxo {
        color: #82ea5b
      }

      .logo-monte-mor {
        margin-right: auto;
        margin-left: auto
      }

      .text-span-5 {
        width: 100%;
        font-size: 20px
      }

      .icone-montemor {
        width: 100%;
        height: 230px;
        margin: 10px 0;
        padding: 10px
      }

      .icone-montemor.end-mobile {
        border-right-style: none
      }

      .div-block-24 {
        width: 260px
      }

      .image-5 {
        padding-right: 0
      }

      .paragrafo-2.topicos {
        padding-bottom: 0
      }

      .colunas-montemor {
        height: auto
      }

      .coluna-1-monte-mor {
        width: 100%;
        margin-top: 40px;
        margin-bottom: 40px;
        padding-right: 20px;
        padding-left: 20px
      }

      .slider-7.mobile,
      .youtube {
        width: 100%
      }

      .image-62,
      .lightbox-link-9 {
        height: auto
      }

      .image-62 {
        width: auto
      }

      .image-62,
      .image-63,
      .image-64,
      .image-65 {
        display: none
      }

      .right-arrow-4 {
        right: -56px;
        display: block
      }

      .h1-2.verde-claro.center {
        font-size: 30px
      }

      .image-66 {
        width: 256px
      }

      .lightbox-link-10 {
        width: 260px
      }

      .slide-nav-6 {
        display: block
      }

      .left-arrow-4 {
        left: -56px;
        display: block
      }

      .grid-8 {
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
      }

      .div-box-preenchido-sao-roque {
        width: 280px;
        height: 200px
      }

      .div-box-preenchido-sao-roque.regatas-comercial {
        width: 290px;
        height: 150px
      }

      .logo-sao-roque {
        margin: 10px auto 20px;
        padding-bottom: 20px
      }

      .icone-montemor-copy-copy,
      .topicos-sao-roque-02 {
        width: 100%;
        height: auto;
        margin: 10px 0;
        padding: 10px
      }

      .andamento-obra-sao-roque.end-mobile,
      .condicoes-sao-roque.end-mobile,
      .icone-montemor-copy-copy.end-mobile,
      .icone-montemor-copy.end-mobile,
      .topicos-sao-roque-02.end-mobile {
        border-right-style: none
      }

      .icone-montemor-copy-copy {
        height: 230px
      }

      .div-infos-terreno-sao-roque {
        display: block;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        grid-auto-columns: 1fr;
        grid-column-gap: 0;
        grid-row-gap: 10px;
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
        -ms-grid-rows: auto auto;
        grid-template-rows: auto auto
      }

      .icone-montemor-copy {
        width: 100%;
        height: 230px;
        margin: 10px 0;
        padding: 10px
      }

      .andamento-obra-sao-roque,
      .condicoes-sao-roque {
        width: 100%;
        height: auto;
        margin: 10px 0;
        padding: 20px 10px
      }

      .infos-terreno-sao-roque.monte-mor.infos-terreno-monte {
        padding-top: 0;
        padding-bottom: 60px
      }

      .andamento-obra-sao-roque {
        display: block;
        padding: 10px
      }

      .logo-residencial-progresso {
        margin: 10px auto 20px;
        padding-bottom: 20px
      }

      .div-box-preenchido-residencial-progresso {
        width: 280px;
        height: 200px
      }

      .div-box-preenchido-parque-vitoria.regatas-comercial,
      .div-box-preenchido-residencial-progresso.regatas-comercial {
        width: 290px;
        height: 150px
      }

      .cond-residencial-progresso {
        width: 100%;
        margin-bottom: 40px
      }

      .div-diferencial {
        width: auto;
        margin-right: 20px;
        margin-left: 20px;
        padding: 9px 18px
      }

      .coluna-direita-localizacao {
        height: auto
      }

      .bold-text-53 {
        font-size: 25px;
        line-height: 30px
      }

      .colunas-montemor-copy {
        height: auto
      }

      .div-box-preenchido-parque-vitoria {
        width: 280px;
        height: 200px
      }

      .logo-parque-vitoria {
        margin: 10px auto 20px;
        padding-bottom: 20px
      }

      .logo-2d {
        display: block;
        margin-top: 10px;
        margin-bottom: 10px
      }

      .infos-2d.monte-mor.infos-terreno-monte {
        padding-top: 60px;
        padding-bottom: 60px
      }

      .informacoes-comerciais.monte-mor.infos-terreno-monte {
        padding-top: 0;
        padding-bottom: 60px
      }

      .grid-9 {
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr
      }

      .condicoes-comerciais-parque-vitoria {
        width: 100%;
        height: auto;
        margin: 10px 0;
        padding: 20px 10px
      }

      .condicoes-comerciais-parque-vitoria.end-mobile {
        border-right-style: none
      }

      .div-diferencial-parque-vitora {
        width: auto;
        margin-right: 20px;
        margin-left: 20px;
        padding: 9px 18px
      }

      .logo-urba {
        display: block;
        margin-top: 20px;
        margin-bottom: 20px
      }

      .div-block-32 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
      }

      .div-box-preenchido-monte-mor-lan {
        width: 280px;
        height: 200px
      }

      .div-box-preenchido-monte-mor-lan.regatas-comercial {
        width: 290px;
        height: 150px
      }

      .col-forms-monte-mor-lan {
        padding-top: 100px;
        padding-right: 0;
        padding-left: 0
      }

      .infos-terreno-monte-mor-lan.monte-mor.infos-terreno-monte {
        padding-top: 60px;
        padding-bottom: 60px
      }

      .monte-mor-lan {
        width: 100%
      }

      .coluna-mm-lan {
        padding-right: 0;
        padding-left: 0;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        border-bottom: 2px solid #ff8b22;
        border-right-style: none
      }

      .coluna-mm-lan.end {
        border-bottom-style: none
      }

      .coluna-mm-lan._2 {
        padding-right: 30px;
        padding-left: 10px;
        border-bottom-color: #006b3f
      }

      .colunas-mm-lan {
        position: static;
        top: 0;
        width: 90%;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
      }

      .colunas-mm-lan._2,
      .colunas-mm-lan._3,
      .colunas-mm-lan.itapeva {
        width: 95%
      }

      .destaque-h2-branco.roxo {
        color: #82ea5b
      }

      .coluna-1-monte-mor-lan {
        width: 100%;
        margin-top: 40px;
        margin-bottom: 40px;
        padding-right: 20px;
        padding-left: 20px
      }

      .tab-single-mm-lan {
        height: auto
      }

      .tab-map-mm-lan {
        height: 300px
      }

      .coluna-loc-mm-lan {
        height: auto;
        padding-bottom: 0;
        padding-left: 0;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start
      }

      .coluna-loc-mm-lan.residencial-progresso {
        padding-right: 0
      }

      .col-mm-lan--loc,
      .coluna-tabs-mm-lan,
      .loc-mm-lan {
        height: auto
      }

      .destaque-h2-laranja-copy.roxo {
        color: #82ea5b
      }

      .container-padrao-caracteristicas.reduzido.monte-mor-lan,
      .container-padrao-caracteristicas.reduzido.montemor {
        height: 100%;
        padding-top: 100px
      }

      .container-padrao-caracteristicas.monte-mor-form {
        width: 100%;
        max-width: 1280px;
        padding-right: 10px;
        padding-left: 10px
      }

      .container-padrao-caracteristicas.sao-roque {
        display: block
      }

      .coluna-direita-ambevic {
        padding: 23px
      }

      .image-69 {
        height: 200px
      }

      .small-txt-ambevic.center-mobile {
        text-align: center
      }

      .grid-icons-ambevic {
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr
      }

      .box-caracteristica-ambevic {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-row-gap: 8px
      }

      .icon-ambevic {
        height: 56px;
        margin-right: 0;
        -o-object-fit: contain;
        object-fit: contain
      }
    }

    #w-node-_214e244b-38e3-a924-7e1c-5d7a58811c00-e6267467 {
      -ms-grid-column-align: auto;
      justify-self: auto
    }

    #w-node-_427fff04-4e23-4f2c-0c6e-aaeb158f8677-20267468,
    #w-node-_88eea805-bec2-3fd5-277d-222750a0291b-20267468,
    #w-node-_939bc515-3c50-8179-af9a-603760d3ad61-20267468,
    #w-node-_96e71200-90cd-d634-6544-a20b1186e6f5-20267468 {
      -ms-grid-column: span 1;
      grid-column-start: span 1;
      -ms-grid-column-span: 1;
      grid-column-end: span 1;
      -ms-grid-row: span 1;
      grid-row-start: span 1;
      -ms-grid-row-span: 1;
      grid-row-end: span 1;
      -ms-grid-row-align: center;
      align-self: center
    }

    #w-node-_119a8010-1a07-0a63-e789-9c670d553f53-82267482,
    #w-node-_161873f4-1897-4590-25ad-dd3a7d773afa-a3267475,
    #w-node-_24c3e23e-feab-5da7-9b51-cc45812b8a2d-a3267475,
    #w-node-_7201b726-81d3-bd0c-77d9-d46829ab6e9d-a3267475,
    #w-node-_7464def7-7e97-d473-c497-53808485d85d-82267482,
    #w-node-_7464def7-7e97-d473-c497-53808485d85d-a3267475,
    #w-node-b790d3ce-5a0f-8b99-cab3-2b2e45dc0655-82267482 {
      -ms-grid-column: span 1;
      grid-column-start: span 1;
      -ms-grid-column-span: 1;
      grid-column-end: span 1;
      -ms-grid-row: span 1;
      grid-row-start: span 1;
      -ms-grid-row-span: 1;
      grid-row-end: span 1
    }

    @media screen and (max-width:479px) {
      #w-node-_8f8b3311-938b-542d-7468-eb2cfccb59c5-c8267461 {
        -ms-grid-column-span: 1;
        grid-column-end: span 1;
        -ms-grid-column: span 1;
        grid-column-start: span 1;
        -ms-grid-row-span: 1;
        grid-row-end: span 1;
        -ms-grid-row: span 1;
        grid-row-start: span 1
      }

      #w-node-_0a78eb64-b467-5d9e-5e86-3b024f14cf8a-20267468,
      #w-node-_33ff7a00-029d-371e-a001-fd257c06e2f2-20267468,
      #w-node-_85a3680c-d7b6-e02a-6a0e-1dce1ffae6ac-20267468,
      #w-node-_863f6c4e-0442-b4a0-dd15-ef53cf54d303-20267468,
      #w-node-a078d2ae-fdf4-a339-e708-3c3663ec4719-20267468,
      #w-node-b44ff394-edce-04d3-2090-c80dbdc2c761-20267468,
      #w-node-becaf4aa-22bf-6395-f491-196d89487d94-20267468 {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        -ms-grid-column-align: center;
        justify-self: center
      }

      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-0426746b,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-0426746b,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-0426746b,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-0426746b,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-0426746b,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba40c-0426746b,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-0426746b {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        -ms-grid-column-align: center;
        justify-self: center
      }

      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-a3267475,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-a3267475,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-a3267475,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-a3267475,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-a3267475,
      #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e63-07267470,
      #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e6c-07267470,
      #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e7f-07267470,
      #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e88-07267470,
      #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e9a-07267470,
      #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558ea3-07267470 {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        -ms-grid-column-align: center;
        justify-self: center
      }

      #w-node-_0a78eb64-b467-5d9e-5e86-3b024f14cf8a-ad267479,
      #w-node-_33ff7a00-029d-371e-a001-fd257c06e2f2-ad267479,
      #w-node-_85a3680c-d7b6-e02a-6a0e-1dce1ffae6ac-ad267479,
      #w-node-_863f6c4e-0442-b4a0-dd15-ef53cf54d303-ad267479,
      #w-node-a078d2ae-fdf4-a339-e708-3c3663ec4719-ad267479,
      #w-node-b44ff394-edce-04d3-2090-c80dbdc2c761-ad267479,
      #w-node-becaf4aa-22bf-6395-f491-196d89487d94-ad267479,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-a3267475,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-1026747c,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-1026747c,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-1026747c {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        -ms-grid-column-align: center;
        justify-self: center
      }

      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-1026747c,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-1026747c,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-1026747c,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba40c-1026747c {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        -ms-grid-column-align: center;
        justify-self: center
      }

      #w-node-_0a78eb64-b467-5d9e-5e86-3b024f14cf8a-be26747d,
      #w-node-_33ff7a00-029d-371e-a001-fd257c06e2f2-be26747d,
      #w-node-_85a3680c-d7b6-e02a-6a0e-1dce1ffae6ac-be26747d,
      #w-node-_863f6c4e-0442-b4a0-dd15-ef53cf54d303-be26747d,
      #w-node-a078d2ae-fdf4-a339-e708-3c3663ec4719-be26747d,
      #w-node-b44ff394-edce-04d3-2090-c80dbdc2c761-be26747d,
      #w-node-becaf4aa-22bf-6395-f491-196d89487d94-be26747d {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        -ms-grid-column-align: center;
        justify-self: center
      }

      #w-node-_5e10ca56-8352-d553-530f-356bb1db2097-8b26747f,
      #w-node-_5e10ca56-8352-d553-530f-356bb1db20a0-8b26747f,
      #w-node-_5e10ca56-8352-d553-530f-356bb1db20a9-8b26747f,
      #w-node-_5e10ca56-8352-d553-530f-356bb1db20b2-8b26747f,
      #w-node-_5e10ca56-8352-d553-530f-356bb1db20bb-8b26747f,
      #w-node-_5e10ca56-8352-d553-530f-356bb1db20c4-8b26747f,
      #w-node-_5e10ca56-8352-d553-530f-356bb1db20cd-8b26747f {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        -ms-grid-column-align: center;
        justify-self: center
      }

      #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e734521-b4267480,
      #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e73452a-b4267480,
      #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e734559-b4267480,
      #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e734562-b4267480,
      #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e73456b-b4267480,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-0a267481 {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        -ms-grid-column-align: center;
        justify-self: center
      }

      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-0a267481,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-0a267481,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-82267482,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-82267482,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-82267482,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-0a267481,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-82267482,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba40c-0a267481,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-0a267481,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-82267482 {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        -ms-grid-column-align: center;
        justify-self: center
      }

      #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a48-9b267484,
      #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a5b-9b267484,
      #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a64-9b267484,
      #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a76-9b267484,
      #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a7f-9b267484,
      #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e377523-e1267486,
      #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e37753f-e1267486,
      #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e377551-e1267486,
      #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-82267482 {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        -ms-grid-column-align: center;
        justify-self: center
      }

      #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e37751a-e1267486,
      #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e37755a-e1267486 {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        -ms-grid-column-align: center;
        justify-self: center
      }
    }

    .ambevic {
      position: relative;
      padding-top: 0;
      padding-bottom: 60px
    }

    .container-padrao-caracteristicas.bem-viver {
      display: block
    }

    .container-padrao-caracteristicas {
      position: relative;
      height: 100%;
      max-width: 1280px;
      margin-right: auto;
      margin-left: auto;
      padding-right: 20px;
      padding-left: 20px;
      cursor: pointer
    }

    .colunas-ambevic {
      display: flex;
      overflow: hidden;
      border-radius: 24px;
      background-color: rgba(110, 110, 110, .05)
    }

    .w-row:after,
    .w-row:before {
      content: " ";
      display: table;
      grid-column-start: 1;
      grid-row-start: 1;
      grid-column-end: 2;
      grid-row-end: 2
    }

    .coluna-esquerda-ambevic {
      overflow: hidden;
      padding: 0;
      -webkit-align-self: stretch;
      -ms-flex-item-align: stretch;
      -ms-grid-row-align: stretch;
      align-self: stretch;
      border-top-left-radius: 24px;
      border-bottom-left-radius: 24px;
      background-color: rgba(110, 110, 110, .06)
    }

    .heading-lp {
      margin-top: 65px !important
    }

    .heading-lp {
      margin-left: 0px;

    }

    .hero-landing {
      height: 840px;
    }
  </style>
  <div class="ambevic wf-section">
    <div class="container-padrao-caracteristicas bem-viver">
      <div class="colunas-ambevic w-row">
        <div class="coluna-esquerda-ambevic w-col w-col-5 w-col-stack w-col-small-small-stack">
          <div class="img-ambevic"><img src="https://assets.website-files.com/5d5159338e8309099479b2ed/640f3e208c279251dad65e1e_GettyImages-1158889670.webp" loading="lazy" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 96vw, (max-width: 1919px) 40vw, 516.65625px" srcset="https://assets.website-files.com/5d5159338e8309099479b2ed/640f3e208c279251dad65e1e_GettyImages-1158889670-p-500.webp 500w, https://assets.website-files.com/5d5159338e8309099479b2ed/640f3e208c279251dad65e1e_GettyImages-1158889670-p-800.webp 800w, https://assets.website-files.com/5d5159338e8309099479b2ed/640f3e208c279251dad65e1e_GettyImages-1158889670-p-1080.webp 1080w, https://assets.website-files.com/5d5159338e8309099479b2ed/640f3e208c279251dad65e1e_GettyImages-1158889670-p-1600.webp 1600w, https://assets.website-files.com/5d5159338e8309099479b2ed/640f3e208c279251dad65e1e_GettyImages-1158889670-p-2000.webp 2000w, https://assets.website-files.com/5d5159338e8309099479b2ed/640f3e208c279251dad65e1e_GettyImages-1158889670.webp 2121w" alt="" class="image-69"></div>
        </div>
        <div class="coluna-direita-ambevic w-col w-col-7 w-col-stack w-col-small-small-stack">
          <h1 class="h1-ambevic">Associação de Moradores</h1>
          <div class="small-txt-ambevic"><strong>AMBEVIC </strong>- ASSOCIAÇÃO DE MORADORES BEM VIVER CAMPOS</div>
          <h2 class="h2-ambevic">Conheça a novidade do Bairro Bem Viver Campos</h2>
          <div class="txt-ambevic">Por iniciativa dos proprietários moradores e com o apoio da Urba, foi criada a AMBEVIC
            - ASSOCIAÇÃO DE MORADORES BEM VIVER CAMPOS, que nada mais é do que um grupo de pessoas que se reúnem com o
            objetivo de discutir soluções estratégicas para melhorar o bem estar na comunidade e a convivência em
            sociedade.</div>
          <div class="grid-icons-ambevic">
            <div id="w-node-_88eea805-bec2-3fd5-277d-222750a0291b-20267468" class="box-caracteristica-ambevic"><img src="https://assets.website-files.com/5d5159338e8309099479b2ed/640f3b7bd667a67ea0dc7bcf_support.png" loading="lazy" alt="" class="icon-ambevic">
              <div class="small-txt-ambevic center-mobile">Integração e colaboração entre os moradores, e com os serviços
                públicos</div>
            </div>
            <div id="w-node-_939bc515-3c50-8179-af9a-603760d3ad61-20267468" class="box-caracteristica-ambevic"><img src="https://assets.website-files.com/5d5159338e8309099479b2ed/640f3b7af19b7220fe474d2f_servico.png" loading="lazy" alt="" class="icon-ambevic">
              <div class="small-txt-ambevic center-mobile">Manutenção, conservação, regras de construção e limpeza do
                bairro</div>
            </div>
            <div id="w-node-_96e71200-90cd-d634-6544-a20b1186e6f5-20267468" class="box-caracteristica-ambevic"><img src="https://assets.website-files.com/5d5159338e8309099479b2ed/640f3b7cf9530192832a0813_escudo-seguro%20(1).png" loading="lazy" alt="" class="icon-ambevic">
              <div class="small-txt-ambevic center-mobile">Segurança, organização e zelo com as áreas privadas e
                compartilhadas</div>
            </div>
            <div id="w-node-_427fff04-4e23-4f2c-0c6e-aaeb158f8677-20267468" class="box-caracteristica-ambevic"><img src="https://assets.website-files.com/5d5159338e8309099479b2ed/640f3b7c019e0565fb49f09e_casa-limpa.png" loading="lazy" alt="" class="icon-ambevic">
              <div class="small-txt-ambevic center-mobile">Valorização dos imóveis e muito mais</div>
            </div>
          </div>
          <div class="txt-ambevic small"><strong>CONTATOS:<br>&zwj;<br>E-mail:</strong> <a href="mailto:ambevic.bemviver@gmail.com" target="_blank">ambevic.bemviver@gmail.com<br><strong>&zwj;</strong></a><strong>WhatsApp: </strong>(022)
            99717-5902</div>
        </div>
      </div>
    </div>
  </div>



<?php } ?>




<?php if ((get_the_ID() === 1278000)) { ?>
  <div class="galeria-de-fotos">
    <div class="columns-5 w-row">
      <div class="column-25 w-col w-col-6">
        <div class="seta"></div>
        <div class="div-title-info-galeria">
          <h2 class="heading-2 galeria">Faça um <strong class="bold-text-23">tour virtual</strong> pelo condomínio</h2><img src="<?= get_stylesheet_directory_uri() ?>/images/arrow.png" data-w-id="3f3833b2-2016-5988-f5db-9daaa9e2fb2c" alt="Seta" class="image-9"><a href="#formulario" class="button-3 galeria w-button">Adquira já esse terreno</a>
        </div>
        <p style="color:#fff;">Clique nas imagens para ter uma visão 360º</p>
      </div>
      <div class="column-26 w-col w-col-6" id="tour-virtual">
        <div class="owl-carousel">
          <?php $images = acf_photo_gallery('galeria', $post->ID); ?>
          <?php if ($images) { ?>
            <?php foreach ($images as $key => $image) { ?>
              <div id="panorama-<?php echo $key; ?>" style="height: 400px;">
                <script>
                  pannellum.viewer('panorama-<?php echo $key; ?>', {
                    "type": "equirectangular",
                    "panorama": "<?php echo $image['full_image_url']; ?>",
                    "autoLoad": true,
                  });
                </script>
              </div>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
      <style>
        .owl-nav .disabled {
          display: none;
        }

        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel .owl-nav button.owl-next {
          font-size: 80px !important;
          color: #82ea5b !important;
          position: absolute !important;
          top: 42% !important;
        }

        .owl-carousel .owl-nav button.owl-next {
          right: 0 !important;
        }

        #tour-virtual {
          padding-left: 0;
          padding-right: 0;
        }
      </style>
    </div>
  </div>
<?php } ?>
<!-- <div class="galeria-de-fotos">
    <div class="columns-5 w-row">
      <div class="column-25 w-col w-col-6">
        <div class="seta"></div>
        <div class="div-title-info-galeria">
          <h2 class="heading-2 galeria"><strong class="bold-text-23">Explore</strong> o Loteamento na Galeria</h2><img src="<?= get_stylesheet_directory_uri() ?>/images/arrow.png" data-w-id="3f3833b2-2016-5988-f5db-9daaa9e2fb2c" alt="Seta" class="image-9"><a href="#formulario" class="button-3 galeria w-button">Adquira já esse terreno</a>
        </div>
      </div>
      <?php $images = acf_photo_gallery('galeria', $post->ID); ?>
      <div class="column-26 w-col w-col-6"><a href="#" class="lightbox-link w-inline-block w-lightbox"><img src="<?php echo $images[0]['full_image_url']; ?>" height="400" width="640" alt="Ver galeria" class="image-5">
          <script type="application/json" class="w-json">
            {
              "items": [
                <?php if ($images) { ?>
                  <?php foreach ($images as $key => $image) {
                    if ($key !== 0) {
                      echo ',';
                    } ?> {
                      "caption": "<?php echo $image['caption']; ?>",
                      "url": "<?php echo $image['full_image_url']; ?>",
                      "_id": "<?php echo $image['id']; ?>",
                      "type": "image"
                    }
                  <?php } ?>
                <?php } ?>
              ]
            }
          </script>
        </a></div>
    </div>
  </div> -->

<div id="galeria" class="galeria-residencial-progresso wf-section">
  <div class="container-padrao-3 w-container">
    <p data-w-id="daf74de0-ded7-7623-7ec9-b27e0d686122" class="h1-2 verde-claro center">Explore o loteamento na galeria:</p>
    <div data-delay="4000" data-animation="slide" class="slider-7 desktop w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
      <div class="w-slider-mask">
        <div class="w-slide">
          <div class="w-layout-grid grid-8">
            <?php $images = acf_photo_gallery('galeria', $post->ID); ?>

            <?php if ($images) { ?>
              <?php
              $i = 1;
              foreach ($images as $key => $image) { ?>
                <a href="#" class="lightbox-link-10 lightbox-residencial-progresso w-inline-block w-lightbox"><img src="<?php echo $image['full_image_url']; ?>" loading="lazy" srcset="<?php echo $image['full_image_url']; ?> 500w, <?php echo $image['full_image_url']; ?> 800w, <?php echo $image['full_image_url']; ?> 1080w, <?php echo $image['full_image_url']; ?> 1600w, <?php echo $image['full_image_url']; ?> 2000w, <?php echo $image['full_image_url']; ?> 2600w, <?php echo $image['full_image_url']; ?> 3200w" sizes="(max-width: 479px) 0px, (max-width: 767px) 100vw, 500px" alt="" class="image-66 imagem-residencial-progresso">
                  <div class="imagem-ilustrativa"><?php echo $image['caption']; ?> <br><em>Imagem meramente ilustrativa</em> </div>

                  <script type="application/json" class="w-json">
                    {
                      "items": [{
                        "_id": "example_img",
                        "origFileName": "URBA_VISTA_RUA_CASAS.jpg",
                        "fileName": "URBA_VISTA_RUA_CASAS.jpg",
                        "fileSize": 3780757,
                        "height": 2531,
                        "caption": "<?php echo $image['caption']; ?>",
                        "url": "<?php echo $image['full_image_url']; ?>",
                        "width": 4500,
                        "type": "image"
                      }],
                      "group": "montemor"
                    }
                  </script>
                </a>
                <?php if (($i % 3) == 0) {     ?>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-layout-grid grid-8">
          <?php } ?>
        <?php $i++;
              }
        ?>
      <?php } ?>
          </div>
        </div>
      </div>
      <div class="left-arrow-4 w-slider-arrow-left">
        <div class="icone-amarelo w-icon-slider-left"></div>
      </div>
      <div class="right-arrow-4 w-slider-arrow-right">
        <div class="icone-amarelo w-icon-slider-right"></div>
      </div>
      <div class="slide-nav-6 w-slider-nav w-round"></div>
    </div>
    <div data-delay="4000" data-animation="slide" class="slider-7 mobile w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
      <div class="w-slider-mask">
        <div class="w-slide">
          <div class="w-layout-grid grid-8">
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PORTARIA.jpg" loading="lazy" srcset="https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PORTARIA-p-500.jpg 500w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PORTARIA-p-800.jpg 800w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PORTARIA-p-1080.jpg 1080w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PORTARIA-p-1600.jpg 1600w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PORTARIA-p-2000.jpg 2000w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PORTARIA.jpg 2250w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 100vw" alt="" class="image-66">
              <script type="application/json" class="w-json">
                {
                  "items": [],
                  "group": "montemor"
                }
              </script>
            </a>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-layout-grid grid-8">
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_ACESSOS.jpg" loading="lazy" srcset="https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_ACESSOS-p-500.jpg 500w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_ACESSOS-p-800.jpg 800w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_ACESSOS-p-1080.jpg 1080w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_ACESSOS-p-1600.jpg 1600w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_ACESSOS-p-2000.jpg 2000w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_ACESSOS.jpg 2250w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 100vw" alt="" class="image-66">
              <script type="application/json" class="w-json">
                {
                  "items": [],
                  "group": "montemor"
                }
              </script>
            </a>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-layout-grid grid-8">
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_RUA_CASAS.jpg" loading="lazy" srcset="https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_RUA_CASAS-p-500.jpg 500w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_RUA_CASAS-p-800.jpg 800w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_RUA_CASAS-p-1080.jpg 1080w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_RUA_CASAS-p-1600.jpg 1600w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_RUA_CASAS-p-2000.jpg 2000w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_RUA_CASAS.jpg 2250w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 100vw" alt="" class="image-66">
              <script type="application/json" class="w-json">
                {
                  "items": [],
                  "group": "montemor"
                }
              </script>
            </a>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-layout-grid grid-8">
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_BOULEVARD_A2.jpg" loading="lazy" srcset="https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_BOULEVARD_A2-p-500.jpg 500w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_BOULEVARD_A2-p-800.jpg 800w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_BOULEVARD_A2-p-1080.jpg 1080w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_BOULEVARD_A2-p-1600.jpg 1600w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_BOULEVARD_A2-p-2000.jpg 2000w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_BOULEVARD_A2.jpg 2500w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 100vw" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Alameda Reserva<br></span>Lotes Comerciais | Imagem meramente ilustrativa</p>
              <script type="application/json" class="w-json">
                {
                  "items": [],
                  "group": "montemor"
                }
              </script>
            </a>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-layout-grid grid-8">
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="https://urba.com.br/wp-content/uploads/2022/11/LOJAS.jpg" loading="lazy" srcset="https://urba.com.br/wp-content/uploads/2022/11/LOJAS-p-500.jpg 500w, https://urba.com.br/wp-content/uploads/2022/11/LOJAS-p-800.jpg 800w, https://urba.com.br/wp-content/uploads/2022/11/LOJAS-p-1080.jpg 1080w, https://urba.com.br/wp-content/uploads/2022/11/LOJAS-p-1600.jpg 1600w, https://urba.com.br/wp-content/uploads/2022/11/LOJAS-p-2000.jpg 2000w, https://urba.com.br/wp-content/uploads/2022/11/LOJAS-p-2600.jpg 2600w, https://urba.com.br/wp-content/uploads/2022/11/LOJAS.jpg 2700w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 100vw" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Alameda Reserva<br>‍</span>Lotes Comerciais | magem meramente ilustrativa</p>
              <script type="application/json" class="w-json">
                {
                  "items": [],
                  "group": "montemor"
                }
              </script>
            </a>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-layout-grid grid-8">
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01.jpg" loading="lazy" srcset="https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01-p-500.jpg 500w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01-p-800.jpg 800w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01-p-1080.jpg 1080w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01-p-1600.jpg 1600w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01-p-2000.jpg 2000w, https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01.jpg 2250w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 100vw" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Pista de Caminhada<br></span>Imagem meramente ilustrativa</p>
              <script type="application/json" class="w-json">
                {
                  "items": [],
                  "group": "montemor"
                }
              </script>
            </a>
          </div>
        </div>
      </div>
      <div class="left-arrow-4 w-slider-arrow-left">
        <div class="icon-14 w-icon-slider-left"></div>
      </div>
      <div class="right-arrow-4 w-slider-arrow-right">
        <div class="icon-13 w-icon-slider-right"></div>
      </div>
      <div class="slide-nav-6 w-slider-nav w-round"></div>
    </div>
  </div>
</div>

<div class="localizacao">
  <?php if ((get_the_ID() === 354)) { ?>
    <style>
      .localizacao {
        height: 900px;
      }

      .localizacao-dunlop {
        padding-top: 80px;
        padding-bottom: 60px;
        background-color: #f8f8f8;
      }

      .heading-27 {
        width: 80%;
        margin-top: 0px;
        margin-right: auto;
        margin-left: auto;
        color: #6e6e6e;
        font-size: 28px;
        line-height: 1.4;
        font-weight: 200;
        text-align: center;
        text-transform: none;
      }

      .paragraph-37 {
        margin-bottom: 20px;
        color: #6e6e6e;
        line-height: 1.6em;
        font-weight: 300;
      }

      .div-paragraph-center {
        width: 70%;
        margin-top: 40px;
        margin-right: auto;
        margin-left: auto;
        text-align: center;
      }

      @media (max-width: 767px) {
        .localizacao {
          height: auto !important;
        }
      }
    </style>
    <div class="localizacao-dunlop">
      <div class="container-padrao">
        <h2 class="heading-27 center _32px">Localização</h2>
        <div class="div-paragraph-center">
          <p class="paragraph-37" style="text-align: center;">
            O bairro está localizado próximo ao Parque Tropical, em uma região promissora da cidade e a <strong class="bold-text-4">apenas 15 minutos do centro</strong>. Conta também com acesso facilitado ao comércio e a serviços no entorno. O Bem Viver Campos é um endereço privilegiado também porque oferece lotes residenciais e comerciais, assim o morador conta com lazer, bens e serviços no próprio bairro.
          </p>
        </div>
        <!-- INÍCIO TRECHO MAPA INTERATIVO -->
        <style>
          .div-mapa-dunlop {
            margin-top: 0 !important;
          }

          .div-mapa-dunlop,
          #visao-360 {
            overflow: hidden;
            width: 100%;
            height: 500px;
          }

          .tabs,
          .tab-pane-tab-1,
          .tab-pane-tab-2 {
            height: auto !important;
          }
        </style>
        <!-- TABS BOOTSTRAP -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">

          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="visao-tab" data-bs-toggle="tab" data-bs-target="#visao" type="button" role="tab" aria-controls="visao" aria-selected="true">Visão 360º</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="mapa-tab" data-bs-toggle="tab" data-bs-target="#mapa" type="button" role="tab" aria-controls="mapa" aria-selected="false">Mapa</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade" id="mapa" role="tabpanel" aria-labelledby="mapa-tab">
            <div class="div-mapa-dunlop">
              <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.007373607246!2d-41.300274!3d-21.818645999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjHCsDQ5JzA3LjEiUyA0McKwMTgnMDEuMCJX!5e0!3m2!1spt-BR!2sbr!4v1605206960033!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7408.015109554205!2d-41.300278!3d-21.818639!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdd638322b712d%3A0x9c2064f56d3ed2c1!2sBem%20Viver%20Campos%20(COMPRE%20SEU%20TERRENO)!5e0!3m2!1spt-BR!2sbr!4v1624293177367!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <div class="tab-pane fade show active" id="visao" role="tabpanel" aria-labelledby="visao-tab">
            <div class="div-mapa-dunlop">
              <iframe id="visao-360" allowfullscreen src="https://skylineip.s3-sa-east-1.amazonaws.com/Tour+Virtual/Urba/Bem+Viver+Completo/index.htm"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } else if ((get_the_ID() === 319)) { ?>
    <style>
      .localizacao {
        height: 900px;
      }

      .localizacao-dunlop {
        padding-top: 80px;
        padding-bottom: 60px;
        background-color: #f8f8f8;
      }

      .heading-27 {
        width: 80%;
        margin-top: 0px;
        margin-right: auto;
        margin-left: auto;
        color: #6e6e6e;
        font-size: 28px;
        line-height: 1.4;
        font-weight: 200;
        text-align: center;
        text-transform: none;
      }

      .paragraph-37 {
        margin-bottom: 20px;
        color: #6e6e6e;
        line-height: 1.6em;
        font-weight: 300;
      }

      .div-paragraph-center {
        width: 70%;
        margin-top: 40px;
        margin-right: auto;
        margin-left: auto;
        text-align: center;
      }

      @media (max-width: 767px) {
        .localizacao {
          height: auto !important;
        }
      }
    </style>
    <div class="localizacao-dunlop">
      <div class="container-padrao">
        <h2 class="heading-27 center _32px">Localização</h2>
        <div class="div-paragraph-center">
          <p class="paragraph-37" style="text-align: center;">
            O Jardim dos Girassóis está localizado em uma <strong class="bold-text-4">área privilegiada</strong> no <strong class="bold-text-4">novo vetor de crescimento de Feira de Santana</strong>, a 3 km do Centro da cidade e <strong class="bold-text-4">próximo a Avenida Eduardo Froes da Mota</strong>. Aqui, você pode desfrutar de muita tranquilidade, em meio à natureza, com uma linda vista para o Rio Jacuípe.
          </p>
        </div>
        <!-- INÍCIO TRECHO MAPA INTERATIVO -->
        <style>
          .div-mapa-dunlop {
            margin-top: 0 !important;
          }

          .div-mapa-dunlop,
          #visao-360 {
            overflow: hidden;
            width: 100%;
            height: 500px;
          }

          .tabs,
          .tab-pane-tab-1,
          .tab-pane-tab-2 {
            height: auto !important;
          }
        </style>
        <!-- TABS BOOTSTRAP -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="visao-tab" data-bs-toggle="tab" data-bs-target="#visao" type="button" role="tab" aria-controls="visao" aria-selected="true">Visão 360º</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="mapa-tab" data-bs-toggle="tab" data-bs-target="#mapa" type="button" role="tab" aria-controls="mapa" aria-selected="false">Mapa</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade" id="mapa" role="tabpanel" aria-labelledby="mapa-tab">
            <div class="div-mapa-dunlop">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7797.628535091297!2d-38.9983525!3d-12.2608449!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7144982eb40dd3b%3A0x9f5a2f5d977981b!2sCondominio%20Jardim%20dos%20Girass%C3%B3is!5e0!3m2!1spt-BR!2sbr!4v1615407541339!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
          <div class="tab-pane fade show active" id="visao" role="tabpanel" aria-labelledby="visao-tab">
            <div class="div-mapa-dunlop">
              <iframe id="visao-360" allowfullscreen src="https://skylineip.s3.sa-east-1.amazonaws.com/Tour+Virtual/Urba/Jardim+dos+Girassois/index.htm"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } else if ((get_the_ID() === 220)) { ?>
    <style>
      .localizacao {
        height: 900px;
      }

      .localizacao-dunlop {
        padding-top: 80px;
        padding-bottom: 60px;
        background-color: #f8f8f8;
      }

      .heading-27 {
        width: 80%;
        margin-top: 0px;
        margin-right: auto;
        margin-left: auto;
        color: #6e6e6e;
        font-size: 28px;
        line-height: 1.4;
        font-weight: 200;
        text-align: center;
        text-transform: none;
      }

      .paragraph-37 {
        margin-bottom: 20px;
        color: #6e6e6e;
        line-height: 1.6em;
        font-weight: 300;
      }

      .div-paragraph-center {
        width: 70%;
        margin-top: 40px;
        margin-right: auto;
        margin-left: auto;
        text-align: center;
      }

      @media (max-width: 767px) {
        .localizacao {
          height: auto !important;
        }
      }
    </style>
    <div class="localizacao-dunlop">
      <div class="container-padrao">
        <h2 class="heading-27 center _32px">Localização</h2>
        <div class="div-paragraph-center">
          <p class="paragraph-37" style="text-align: center;">
            O condomínio fica localizado em uma região residencial muito privilegiada, de alto padrão e cercada pela natureza, a apenas 3 km do centro de Campina Grande. Na saída para Lagoa Seca, o Giardino Bianco oferece muita tranquilidade para o morador e a praticidade de ter fácil acesso aos estabelecimentos comerciais.
          </p>
        </div>
        <!-- INÍCIO TRECHO MAPA INTERATIVO -->
        <style>
          .div-mapa-dunlop {
            margin-top: 0 !important;
          }

          .div-mapa-dunlop,
          #visao-360 {
            overflow: hidden;
            width: 100%;
            height: 500px;
          }

          .tabs,
          .tab-pane-tab-1,
          .tab-pane-tab-2 {
            height: auto !important;
          }
        </style>
        <!-- TABS BOOTSTRAP -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="visao-tab" data-bs-toggle="tab" data-bs-target="#visao" type="button" role="tab" aria-controls="visao" aria-selected="true">Visão 360º</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="mapa-tab" data-bs-toggle="tab" data-bs-target="#mapa" type="button" role="tab" aria-controls="mapa" aria-selected="false">Mapa</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade" id="mapa" role="tabpanel" aria-labelledby="mapa-tab">
            <div class="div-mapa-dunlop">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.231857937457!2d-35.86719934197756!3d-7.187809498702632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ac1f32a3895ad3%3A0x528a41e4a6865b75!2sGiardino%20Bianco%20Condom%C3%ADnio!5e0!3m2!1spt-BR!2sbr!4v1611602923103!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
          <div class="tab-pane fade show active" id="visao" role="tabpanel" aria-labelledby="visao-tab">
            <div class="div-mapa-dunlop">
              <iframe id="visao-360" allowfullscreen src="https://skylineip.s3.sa-east-1.amazonaws.com/Tour+Virtual/Urba/Giardino+Bianco/index.htm"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } else { ?>
    <div class="columns-6 w-row">
      <div class="column-27 w-col w-col-5">
        <div class="div-title-info-localizacao">
          <?php if ((get_the_ID() === 1278)) { ?>
            <h2 class="heading-2 localiz">Quando a localização é especial assim, o tempo corre a seu favor</h2>
          <?php } else { ?>
            <h2 class="heading-2 localiz">Localização</h2>
          <?php } ?>
          <p class="paragraph-16 localiz"><?php the_field('texto_da_localizacao'); ?></p>
        </div>
      </div>
      <div class="column-28 w-col w-col-7">
        <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
          <div class="tabs-menu w-tab-menu">
            <a data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link w--current">
              <div>Mapa</div>
            </a>
            <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link">
              <div>Foto Aérea</div>
            </a>
          </div>
          <div class="w-tab-content">
            <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--tab-active">
              <?php
              switch (get_the_ID()) {
                case 94:
                  include 'mapa-portal-das-aguas.php';
                  break;
                case 220:
                  include 'mapa-giardino-bianco.php';
                  break;
                case 1363:
                  include 'mapa-giardino-bianco.php';
                  break;
                case 265:
                  include 'mapa-reserva-macauba.php';
                  break;
                case 300:
                  include 'mapa-jardim-bem-viver.php';
                  break;
                case 319:
                  include 'mapa-jardim-dos-girassois.php';
                  break;
                case 279:
                  include 'mapa-jardins-de-campos.php';
                  break;
                case 338:
                  include 'mapa-jardim-das-tulipas.php';
                  break;
                case 354:
                  include 'mapa-bem-viver-campos.php';
                  break;
                case 249:
                  include 'mapa-parque-atlanta.php';
                  break;
                case 1278:
                  include 'mapa-monte-das-araucarias.php';
                  break;
              } ?>
              <!--<div class="iframe-mapa">
                    <?php // the_field('iframe_map');
                    ?>
                </div>-->
              <!--<div class="teste_mapa">
                  <?php
                  //$location = get_field('teste_mapa');
                  //if( !empty($location) ):
                  ?>
                    <div class="acf-map">
                      <div class="marker" data-lat="<?php //echo $location['lat']; 
                                                    ?>" data-lng="<?php //echo $location['lng']; 
                                                                  ?>"></div>
                    </div>
                    <?php //endif; 
                    ?>
                </div>-->
              <!--<div class="map w-widget w-widget-map">
              </div>-->
            </div>
            <div data-w-tab="Tab 2" class="tab-pane-tab-2 w-tab-pane"><a href="#" class="lightbox-link-2 w-inline-block w-lightbox">
                <img src="<?php the_field('foto_aerea'); ?>" alt="Foto aérea" class="image-6">
                <script type="application/json" class="w-json">
                  {
                    "items": [{
                      "type": "image",
                      "url": "<?php the_field('foto_aerea'); ?>"
                    }]
                  }
                </script>
              </a></div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
<div class="planta">
  <div class="container-padrao">
    <h2 class="heading-2 center">Sua Casa dos Sonhos <strong class="destaque-h2">Pode ser Assim</strong></h2>
    <p class="paragraph-16">A Urba preparou essa sugestão de projeto para a sua futura casa. Fique à vontade para se inspirar!<strong class="bold-text-2"></strong><br></p>
    <div class="text-block-11">*Projeto não comercializado pela Urba</div>
    <div class="columns-7 w-row">
      <div class="column-29 w-col w-col-8">
        <a href="#" data-w-id="c426b8fb-a8ab-f5fd-14fc-4df463ae0ee1" style="opacity:0" class="lightbox-link-4 w-inline-block w-lightbox">
          <div class="div-img-casa" style="background-image: url('<?php the_field('imagem_casasonhos'); ?>')"></div>
          <script type="application/json" class="w-json">
            {
              "items": [{
                "type": "image",
                "url": "<?php the_field('imagem_casasonhos'); ?>"
              }]
            }
          </script>
        </a>
      </div>
      <div class="column-30 w-col w-col-2">
        <a href="#" data-w-id="2ba8ffd4-19cf-22a7-5f66-00feef640ffd" style="opacity:0" class="lightbox-link-3 w-inline-block w-lightbox">
          <div class="div-planta-01" style="background-image: url('<?php the_field('planta_1_casasonhos'); ?>')"></div>
          <script type="application/json" class="w-json">
            {
              "items": [{
                "type": "image",
                "url": "<?php the_field('planta_1_casasonhos'); ?>"
              }]
            }
          </script>
        </a>
      </div>
      <div class="column-31 w-col w-col-2">
        <a href="#" data-w-id="15041d83-fed3-e9e7-68c3-6a3f2bf2b2b6" style="opacity:0" class="lightbox-link-5 w-inline-block w-lightbox">
          <div class="div-planta-02" style="background-image: url('<?php the_field('planta_2_casasonhos'); ?>')"></div>
          <script type="application/json" class="w-json">
            {
              "items": [{
                "type": "image",
                "url": "<?php the_field('planta_2_casasonhos'); ?>"
              }]
            }
          </script>
        </a>
      </div>
    </div>
  </div>
</div>



<div class="div-text-terreno unico" style="margin-bottom:20px;">


  <div class="columns _2 w-row" style="<?php if (get_the_ID() === 94 || get_the_ID() === 319 || get_the_ID() === 279 || get_the_ID() === 354 || get_the_ID() === 249) { ?> display:flex;flex-wrap:wrap; <?php } ?>">
    <div class="column _2 interna w-col w-col-4">
      <div class="text-block-4 _2 interna">Utilização do <strong>FGTS</strong></div>
    </div>

    <?php if (get_the_ID() === 338) { ?>
      <div class="column _2 interna w-col w-col-4">
        <div class="text-block-4 _2 interna">Financiamento <strong>direto com a loteadora</strong></div>
      </div>
    <?php } elseif (get_the_ID() !== 94 && get_the_ID() !== 319 && get_the_ID() !== 279 && get_the_ID() !== 354 && get_the_ID() !== 249) { ?>
      <div class="column _2 interna w-col w-col-4">
        <div class="text-block-4 _2 interna"><strong>Até 420</strong> meses para pagar</div>
      </div>
    <?php } ?>


    <div class="column _2 interna end w-col w-col-4">
      <div class="text-block-4 _2 interna">Projetos de casas <strong>personalizadas</strong></div>
    </div>

  </div>
  <div class="text-block-34"><br></div>

  <a href="#formulario" class="button-3 w-button">GARANTA SEU NOVO ENDEREÇO</a>
</div>



<?php if (get_field('drenagem') || get_field('paisagismo') || get_field('pavimentacao') || get_field('lazer') || get_field('sinalizacao') || get_field('muro') || get_field('terraplanagem') || get_field('agua_e_esgoto') || get_field('eletrica') || get_field('passeios_e_calcadas') || get_field('areas_edificaveis') || get_field('avenida_de_acesso')) { ?>
  <div class="andamento-obra">
    <div class="container-padrao">
      <h2 class="heading-2 center"><strong class="destaque-h2">Andamento</strong> da Obra</h2>
      <p class="paragraph-16">Acompanhe por aqui o andamento da construção do loteamento em detalhes<br></p>
      <div class="div-andamento">
        <?php if (get_field('drenagem') || get_field('drenagem') === '0') { ?>
          <div id="w-node-3b024f14cf8a-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-drenagem.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('drenagem') ?>%;" class="div-evolucao areas-edificaveis"></div>
            </div>
            <div class="text-block-12">Drenagem<br><strong class="bold-text-3"><?= the_field('drenagem') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('paisagismo') || get_field('paisagismo') === '0') { ?>
          <div id="w-node-c80dbdc2c761-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-paisagismo.png" width="80" alt="Icone" class="image-7">
              <div style=" height: <?= the_field('paisagismo') ?>%;" class="div-evolucao paisagismo"></div>
            </div>
            <div class="text-block-12">Paisagismo<br><strong class="bold-text-3"><?= the_field('paisagismo') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('sinalizacao') || get_field('sinalizacao') === '0') { ?>
          <div id="w-node-3b024f14cf8b-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icons_avenidas-de-acesso.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('sinalizacao') ?>%;" class="div-evolucao sinalizacao"></div>
            </div>
            <div class="text-block-12">Sinalização<br><strong class="bold-text-3"><?= the_field('sinalizacao') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('lazer') || get_field('lazer') === '0') { ?>
          <div id="w-node-c80dbdc2c761-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icons_lazer.png" width="80" alt="Icone" class="image-7">
              <div style=" height: <?= the_field('lazer') ?>%;" class="div-evolucao lazer"></div>
            </div>
            <div class="text-block-12">Lazer<br><strong class="bold-text-3"><?= the_field('lazer') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('pavimentacao') || get_field('pavimentacao') === '0') { ?>
          <div id="w-node-1dce1ffae6ac-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-pavimentacao.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('pavimentacao') ?>%;" class="div-evolucao pavimentacao"></div>
            </div>
            <div class="text-block-12">Pavimentação<br><strong class="bold-text-3"><?= the_field('pavimentacao') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('muro') || get_field('muro') === '0') { ?>
          <div id="w-node-3b024f14cf8a-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-muro.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('muro') ?>%;" class="div-evolucao areas-edificaveis"></div>
            </div>
            <div class="text-block-12">Muro<br><strong class="bold-text-3"><?= the_field('muro') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('terraplanagem') || get_field('terraplanagem') === '0') { ?>
          <div id="w-node-196d89487d94-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-terraplanagem.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('terraplanagem') ?>%;" class="div-evolucao terraplanagem"></div>
            </div>
            <div class="text-block-12">Terraplanagem<br><strong class="bold-text-3"><?= the_field('terraplanagem') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('agua_e_esgoto') || get_field('agua_e_esgoto') === '0') { ?>
          <div id="w-node-fd257c06e2f2-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-agua-esgoto.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('agua_e_esgoto') ?>%;" class="div-evolucao agua-e-esgoto"></div>
            </div>
            <div class="text-block-12">Água e Esgoto<br><strong class="bold-text-3"><?= the_field('agua_e_esgoto') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('eletrica') || get_field('eletrica') === '0') { ?>
          <div id="w-node-3c3663ec4719-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-eletrica.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('eletrica') ?>%;" class="div-evolucao eletrica"></div>
            </div>
            <div class="text-block-12">Elétrica<br><strong class="bold-text-3"><?= the_field('eletrica') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('passeios_e_calcadas') || get_field('passeios_e_calcadas') === '0') { ?>
          <div id="w-node-ef53cf54d303-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-passeios-e-calcadas.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('passeios_e_calcadas') ?>%;" class="div-evolucao passeios-calcadas"></div>
            </div>
            <div class="text-block-12">Passeios e Calçadas<br><strong class="bold-text-3"><?= the_field('passeios_e_calcadas') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('areas_edificaveis') || get_field('areas_edificaveis') === '0') { ?>
          <div id="w-node-3b024f14cf8a-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-areas-edificaveis.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('areas_edificaveis') ?>%;" class="div-evolucao areas-edificaveis"></div>
            </div>
            <div class="text-block-12">Áreas Edificáveis<br><strong class="bold-text-3"><?= the_field('areas_edificaveis') ?>%</strong></div>
          </div>
        <?php } ?>
        <?php if (get_field('avenida_de_acesso') || get_field('avenida_de_acesso') === '0') { ?>
          <div id="w-node-3b024f14cf8a-c488da31" class="div-etapa">
            <div class="div-grafico"><img src="<?= get_stylesheet_directory_uri() ?>/images/icone-pag_empreendimentos-avenidas-de-acesso.png" width="80" alt="Icone" class="image-7">
              <div style="height: <?= the_field('avenida_de_acesso') ?>%;" class="div-evolucao areas-edificaveis"></div>
            </div>
            <div class="text-block-12">Avenida de Acesso<br><strong class="bold-text-3"><?= the_field('avenida_de_acesso') ?>%</strong></div>
          </div>
        <?php } ?>
      </div>

      <?php if ((get_the_ID() !== 1278) && (get_the_ID() !== 265) && (get_the_ID() !== 300) && (get_the_ID() !== 94)) { ?>
        <div class="div-lightbox-andamento">
          <a href="#" class="lightbox-link-6 w-inline-block w-lightbox">
            <div class="text-block-25">confira as fotos da obra</div>
            <script type="application/json" class="w-json">
              {
                "items": [
                  <?php $fotos_da_obra = acf_photo_gallery('fotos_da_obra', $post->ID);
                  if ($fotos_da_obra) { ?>
                    <?php foreach ($fotos_da_obra as $key => $image) {
                      if ($key !== 0) {
                        echo ',';
                      } ?> {
                        "caption": "<?php echo $image['caption']; ?>",
                        "url": "<?php echo $image['full_image_url']; ?>",
                        "_id": "<?php echo $image['id']; ?>",
                        "type": "image"
                      }
                    <?php } ?>
                  <?php } ?>
                ]
              }
            </script>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
<?php } ?>
<?php if (get_field('texto_pagamento')) { ?>
  <div class="andamento-obra forma-de-pagamento">
    <div class="container-padrao">
      <h2 class="heading-2 center"><strong class="destaque-h2">Formas de Pagamento</strong> e Pacotes</h2>
      <div id="texto_pagamento"><?= get_field('texto_pagamento') ?></div>
      <div class="div-button _2" data-ix="open-formbox"><a href="#formulario" class="button-2 _2 w-button">SAIBA MAIS</a></div>
      <div class="text-block-34 _2"><?= get_field('observacao_pagamento') ?><br></div>
    </div>
  </div>
<?php }
$cidade_lot = get_the_terms(get_the_ID(), array('cidade_loteamentos')); ?>
<section id="formulario" class="formulario" style="background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url(<?= the_field('background-form') ?>)">
  <div class="container-padrao">
    <div class="div-forms interna">
      <h2 class="heading-2 forms">Gostou? Entre em <strong class="destaque-h2">Contato Conosco</strong></h2>
      <div class="">
        <form id="interesse-loteamento" name="interesse-loteamento" class="form-2">
          <input type="hidden" id="idempreendimento" name="idempreendimento" value="<?php the_field('id_loteamentos'); ?>">
          <input type="hidden" id="cidade-il" name="cidade" value="<?= $cidade_lot[0]->name ?>">
          <input type="hidden" name="loteamento" id="loteamento-il" value="<?= the_title() ?>">
          <div class="columns-9 w-row" style="max-width:550px; margin:0 auto 10px;">
            <div class="w-col w-col-12"><input type="text" class="text-field-2 w-input" maxlength="256" name="nome" data-name="Nome" placeholder="Nome" id="nome-il" required=""></div>
            <div class="w-col w-col-6"><input type="email" class="text-field-2 w-input" maxlength="256" name="email" data-name="E-mail" placeholder="E-mail" id="email-il" required=""></div>
            <div class="w-col w-col-6"><input type="tel" class="text-field-2 w-input" minlength="15" maxlength="15" onkeypress="MascaraTelefone(this);" name="telefone" data-name="Telefone" placeholder="WhatsApp" id="telefone-il" required=""></div>
            <div class="w-col w-col-12 "><select id="tempo-il" name="tempo" data-name="tempo" class="escolha-cidade uf w-select">
                <option value="" disabled="" selected="">Em quanto tempo você tem interesse em comprar seu terreno?</option>
                <option value="Esse mês">Esse mês</option>
                <option value="Nos próximos 3 meses">Nos próximos 3 meses</option>
                <option value="Entre os próximos 3 e 12 meses">Entre os próximos 3 e 12 meses</option>
                <option value="Não tenho interesse, estou apenas pesquisando">Não tenho interesse, estou apenas pesquisando</option>
              </select></div>
            <div class="w-row bloco_consentimento">
              <div class="w-col">
                <!--<p><br>Precisamos dos seus dados para manter contato com você e prosseguir com seu atendimento, de acordo com nossa <a href="https://mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>-->
                <p><br>Aceito receber via WhatsApp, ligação, e-mail e SMS, o contato da marca MRV&CO com novidades sobre este loteamento, bem como outras ações de marketing, ofertas de produto e serviços. Estou de acordo com as formas de tratamento de dados realizados pela marca MRV&CO, conforme sua <a href="https://www.mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.</p>
                <label class="checkbox-button-field-2 w-checkbox"><input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" value="Ok, entendi!" class="w-form-formcheckboxinput w-checkbox-input" required><span for="Proprietário" class="checkbox-button-label w-form-label">Ok, entendi!</span>
                </label>
              </div>
            </div>
          </div>

          <input type="submit" value="Enviar" data-wait="Aguarde..." class="submit-button-2 w-button" id="<?= $post->post_name ?>">
        </form>
      </div>
    </div>
  </div>
</section>
<?php if (get_field('video')) { ?>
  <div class="multimidia">
    <div class="container-padrao">
      <?php if ((get_the_ID() === 1278)) { ?>
        <h2 class="heading-2 forms">Sessão <strong class="destaque-h2">Multimídia</strong></h2>
        <p class="paragraph-16">Sinta-se especial em seu mais novo empreendimento<br></p>
      <?php } else { ?>
        <h2 class="heading-2 forms">Sessão <strong class="destaque-h2">Multimídia</strong></h2>
      <?php } ?>
      <div class="div-midia">
        <div id="w-node-dbadbb53007f-2efac005" class="w-embed-youtubevideo">
          <?php the_field('video'); ?>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<div class="ficha-tecnica">
  <div class="container-padrao">
    <h2 class="heading-2 forms">Ficha Técnica</h2>
    <div class="columns-11 w-row">
      <div class="column-46 w-col w-col-6">
        <ul class="list-5">
          <li class="list-item"><strong>Nome do empreendimento: </strong><?php the_field('nome_do_empreendimento_ft'); ?></li>
          <li class="list-item"><strong>Tipo de empreendimento: </strong><?php the_field('tipo_de_empreendimento_ft'); ?></li>
          <li class="list-item"><strong>Incorporadora: </strong><?php the_field('incorporadora_ft'); ?></li>
          <li class="list-item"><strong>Total de lotes: </strong><?php the_field('total_de_lotes_ft'); ?></li>
          <li class="list-item"><strong>Metragem dos lotes: </strong><?php the_field('metragem_dos_lotes_ft'); ?></li>
          <li class="list-item"><strong>Quantidade de quadras: </strong><?php the_field('quantidade_de_quadras_ft'); ?></li>
        </ul>
      </div>
      <div class="column-46 w-col w-col-6">
        <ul class="list-5">
          <li class="list-item"><strong>Infraestrutura: </strong><?php the_field('infraestrutura_ft'); ?></li>
          <li class="list-item"><strong>Área total: </strong><?php the_field('area_total_ft'); ?></li>
          <li class="list-item"><strong>Área de lazer: </strong><?php the_field('area_de_lazer_ft'); ?></li>
          <li class="list-item"><strong>Itens da área de lazer: </strong><?php the_field('itens_da_area_de_lazer_ft'); ?></li>
          <?php if (get_field('area_verde_ft')) { ?><li class="list-item"><strong>Área verde: </strong><?php the_field('area_verde_ft'); ?></li><?php } ?>
          <li class="list-item"><strong>Registro: </strong><?php the_field('registro_ft'); ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php if ((get_the_ID() === 319)) { ?>
  <style>
    .visite {
      background-color: #ec8515;
      padding: 80px 0;
    }

    .visite a {
      color: #fff;
      display: block;
      text-align: center;
      margin-bottom: 15px;
    }
  </style>
  <div class="visite wf-section">
    <div class="container-padrao-3 w-container">
      <svg width="42" height="70" viewBox="0 0 42 70" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin: 0 auto; display:block; margin-bottom: 10px;">
        <path d="M21 0C9.68939 0 0.487671 9.20172 0.487671 20.5123C0.487671 23.5969 1.15581 26.5613 2.47299 29.3253C2.4995 29.3845 2.52734 29.4425 2.55704 29.5006L18.0551 59.5081C18.6241 60.6095 19.7602 61.3015 20.9997 61.3015C22.2395 61.3015 23.3756 60.6098 23.9443 59.5081L39.4382 29.5088C39.4649 29.4571 39.4899 29.4049 39.5137 29.3521C40.8396 26.5802 41.5118 23.6067 41.5118 20.5123C41.5123 9.20172 32.3106 0 21 0ZM21 31.2489C15.0798 31.2489 10.2634 26.4325 10.2634 20.5123C10.2634 14.5924 15.0798 9.776 21 9.776C26.9201 9.776 31.7366 14.5924 31.7366 20.5123C31.7366 26.4325 26.9201 31.2489 21 31.2489Z" fill="white" />
        <path d="M28.9012 66.0229H13.0987C12.0003 66.0229 11.1102 66.913 11.1102 68.0115C11.1102 69.1099 12.0003 70 13.0987 70H28.9012C29.9997 70 30.8897 69.1099 30.8897 68.0115C30.8897 66.913 29.9994 66.0229 28.9012 66.0229Z" fill="white" />
      </svg>

      <h2 style="font-weight:600" class="h1-2 verde-claro center">Visite nossa loja:</h2>
      <a href="https://goo.gl/maps/24fsnwE1q7LQ38sX7" target="_blank">Avenida Mário Ventura, nº 1, Nova Esperança | CEP: 44.019-700 </a>
    </div>
  </div>
<?php } ?>
<?php if ((get_the_ID() === 338)) { ?>
  <style>
    .visite {
      background-color: #ec8515;
      padding: 80px 0;
    }

    .visite a {
      color: #fff;
      display: block;
      text-align: center;
      margin-bottom: 15px;
    }
  </style>
  <div class="visite wf-section">
    <div class="container-padrao-3 w-container">
      <svg width="42" height="70" viewBox="0 0 42 70" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin: 0 auto; display:block; margin-bottom: 10px;">
        <path d="M21 0C9.68939 0 0.487671 9.20172 0.487671 20.5123C0.487671 23.5969 1.15581 26.5613 2.47299 29.3253C2.4995 29.3845 2.52734 29.4425 2.55704 29.5006L18.0551 59.5081C18.6241 60.6095 19.7602 61.3015 20.9997 61.3015C22.2395 61.3015 23.3756 60.6098 23.9443 59.5081L39.4382 29.5088C39.4649 29.4571 39.4899 29.4049 39.5137 29.3521C40.8396 26.5802 41.5118 23.6067 41.5118 20.5123C41.5123 9.20172 32.3106 0 21 0ZM21 31.2489C15.0798 31.2489 10.2634 26.4325 10.2634 20.5123C10.2634 14.5924 15.0798 9.776 21 9.776C26.9201 9.776 31.7366 14.5924 31.7366 20.5123C31.7366 26.4325 26.9201 31.2489 21 31.2489Z" fill="white" />
        <path d="M28.9012 66.0229H13.0987C12.0003 66.0229 11.1102 66.913 11.1102 68.0115C11.1102 69.1099 12.0003 70 13.0987 70H28.9012C29.9997 70 30.8897 69.1099 30.8897 68.0115C30.8897 66.913 29.9994 66.0229 28.9012 66.0229Z" fill="white" />
      </svg>

      <h2 style="font-weight:600" class="h1-2 verde-claro center">Visite nossa loja:</h2>
      <a href="https://goo.gl/maps/MYWsF39g1ueZyGAz6" target="_blank">Av. Mario Ventura, n°1 - NOVA ESPERANÇA, Feira de Santana - BA, 44019-700</a>
    </div>
  </div>
<?php } ?>

<?php if ((get_the_ID() === 354)) { ?>
  <style>
    .visite {
      background-color: #ec8515;
      padding: 80px 0;
    }

    .visite a {
      color: #fff;
      display: block;
      text-align: center;
      margin-bottom: 15px;
    }
  </style>
  <div class="visite wf-section">
    <div class="container-padrao-3 w-container">
      <svg width="42" height="70" viewBox="0 0 42 70" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin: 0 auto; display:block; margin-bottom: 10px;">
        <path d="M21 0C9.68939 0 0.487671 9.20172 0.487671 20.5123C0.487671 23.5969 1.15581 26.5613 2.47299 29.3253C2.4995 29.3845 2.52734 29.4425 2.55704 29.5006L18.0551 59.5081C18.6241 60.6095 19.7602 61.3015 20.9997 61.3015C22.2395 61.3015 23.3756 60.6098 23.9443 59.5081L39.4382 29.5088C39.4649 29.4571 39.4899 29.4049 39.5137 29.3521C40.8396 26.5802 41.5118 23.6067 41.5118 20.5123C41.5123 9.20172 32.3106 0 21 0ZM21 31.2489C15.0798 31.2489 10.2634 26.4325 10.2634 20.5123C10.2634 14.5924 15.0798 9.776 21 9.776C26.9201 9.776 31.7366 14.5924 31.7366 20.5123C31.7366 26.4325 26.9201 31.2489 21 31.2489Z" fill="white" />
        <path d="M28.9012 66.0229H13.0987C12.0003 66.0229 11.1102 66.913 11.1102 68.0115C11.1102 69.1099 12.0003 70 13.0987 70H28.9012C29.9997 70 30.8897 69.1099 30.8897 68.0115C30.8897 66.913 29.9994 66.0229 28.9012 66.0229Z" fill="white" />
      </svg>

      <h2 style="font-weight:600" class="h1-2 verde-claro center">Visite nossa loja:</h2>
      <a href="https://goo.gl/maps/B6MyjgkJtnE2oaCEA" target="_blank">Rodovia Doutor Lourival Martins Beda, nº 684, Donana | CEP: 28.110-000 | CAMPOS DOS GOYTACAZES </a>
    </div>
  </div>
<?php } ?>
<?php if ((get_the_ID() === 300)) { ?>
  <style>
    .visite {
      background-color: #ec8515;
      padding: 80px 0;
    }

    .visite a {
      color: #fff;
      display: block;
      text-align: center;
      margin-bottom: 15px;
    }
  </style>
  <div class="visite wf-section">
    <div class="container-padrao-3 w-container">
      <svg width="42" height="70" viewBox="0 0 42 70" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin: 0 auto; display:block; margin-bottom: 10px;">
        <path d="M21 0C9.68939 0 0.487671 9.20172 0.487671 20.5123C0.487671 23.5969 1.15581 26.5613 2.47299 29.3253C2.4995 29.3845 2.52734 29.4425 2.55704 29.5006L18.0551 59.5081C18.6241 60.6095 19.7602 61.3015 20.9997 61.3015C22.2395 61.3015 23.3756 60.6098 23.9443 59.5081L39.4382 29.5088C39.4649 29.4571 39.4899 29.4049 39.5137 29.3521C40.8396 26.5802 41.5118 23.6067 41.5118 20.5123C41.5123 9.20172 32.3106 0 21 0ZM21 31.2489C15.0798 31.2489 10.2634 26.4325 10.2634 20.5123C10.2634 14.5924 15.0798 9.776 21 9.776C26.9201 9.776 31.7366 14.5924 31.7366 20.5123C31.7366 26.4325 26.9201 31.2489 21 31.2489Z" fill="white" />
        <path d="M28.9012 66.0229H13.0987C12.0003 66.0229 11.1102 66.913 11.1102 68.0115C11.1102 69.1099 12.0003 70 13.0987 70H28.9012C29.9997 70 30.8897 69.1099 30.8897 68.0115C30.8897 66.913 29.9994 66.0229 28.9012 66.0229Z" fill="white" />
      </svg>

      <h2 style="font-weight:600" class="h1-2 verde-claro center">Visite nossa loja:</h2>
      <a href="https://goo.gl/maps/B6MyjgkJtnE2oaCEA" target="_blank">R. Marcílio Dias SN - Álvares Machado/SP | CEP: 19.160-000 </a>
    </div>
  </div>
<?php } ?>

<?php if ((get_the_ID() === 279)) { ?>
  <style>
    .visite {
      background-color: #ec8515;
      padding: 80px 0;
    }

    .visite a {
      color: #fff;
      display: block;
      text-align: center;
      margin-bottom: 15px;
    }
  </style>
  <div class="visite wf-section">
    <div class="container-padrao-3 w-container">
      <svg width="42" height="70" viewBox="0 0 42 70" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin: 0 auto; display:block; margin-bottom: 10px;">
        <path d="M21 0C9.68939 0 0.487671 9.20172 0.487671 20.5123C0.487671 23.5969 1.15581 26.5613 2.47299 29.3253C2.4995 29.3845 2.52734 29.4425 2.55704 29.5006L18.0551 59.5081C18.6241 60.6095 19.7602 61.3015 20.9997 61.3015C22.2395 61.3015 23.3756 60.6098 23.9443 59.5081L39.4382 29.5088C39.4649 29.4571 39.4899 29.4049 39.5137 29.3521C40.8396 26.5802 41.5118 23.6067 41.5118 20.5123C41.5123 9.20172 32.3106 0 21 0ZM21 31.2489C15.0798 31.2489 10.2634 26.4325 10.2634 20.5123C10.2634 14.5924 15.0798 9.776 21 9.776C26.9201 9.776 31.7366 14.5924 31.7366 20.5123C31.7366 26.4325 26.9201 31.2489 21 31.2489Z" fill="white" />
        <path d="M28.9012 66.0229H13.0987C12.0003 66.0229 11.1102 66.913 11.1102 68.0115C11.1102 69.1099 12.0003 70 13.0987 70H28.9012C29.9997 70 30.8897 69.1099 30.8897 68.0115C30.8897 66.913 29.9994 66.0229 28.9012 66.0229Z" fill="white" />
      </svg>

      <h2 style="font-weight:600" class="h1-2 verde-claro center">Visite nossa loja:</h2>
      <a href="https://goo.gl/maps/fGsboBYRbFkhSAjeA" target="_blank">Rodovia Doutor Lourival Martins Beda, nº 684, Donana | CEP: 28.110-000</a>
    </div>
  </div>
<?php } ?>

<div class="texto-legal unico">
  <div class="container-padrao">
    <p class="paragraph-29">
      *Projetos e imagens meramente ilustrativos. A construção da casa não é realizada pela Urba, sendo esta realizada por empresa terceira a ser contratada sob única e exclusiva responsabilidade do cliente. A modalidade Minha Casa do Meu Jeito está condicionada à aquisição de financiamento pelo cliente junto a um correspondente bancário, estando sujeito à aprovação de crédito pela instituição financeira e aprovação do projeto da casa. Utilização de FGTS sujeito à aprovação de perfil pela instituição financeira. Entrada e parcelas de acordo com o financiamento aprovado pela instituição financeira. Consulte estoque e valores de lotes disponíveis. Registro Giardino Bianco R-6.117.542, 1° serviço Notarial e registro Ivandro Cunha Lima da comarca de Campina Grande, estado da Paraíba.
    </p>
  </div>
</div>



<!--<?php if ((get_the_ID() === 279) || (get_the_ID() === 354)) { ?>
    <div class="texto-regulamento" style="background-color: #555555;opacity: 0.8;padding-top: 15px;padding-bottom: 15px;">
      <div class="container-padrao">
        <p style="color: #fff;font-size: 12px;font-weight: 300;text-align: center;"> REGULAMENTO DA PROMOÇÃO <a href="https://urba.com.br/wp-content/themes/urbamais/assets/Aditamento_Regulamento_Promoção_Empreendimentos_Campos_RJ_2021.03.05.pdf" target="_blank" style="color: #fff;font-weight: bold;">PESQUISA JARDINS DE CAMPOS/BEM VIVER CAMPOS</a></p>
      </div>
    </div>
  <?php } ?>-->
<?php get_footer(); ?>
<style type="text/css">
  .acf-map {
    width: 100%;
    height: 680px;
    border: #ccc solid 1px;
    margin: 0px 0;
  }

  .acf-map img {
    max-width: inherit !important;
  }
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3yusY97-xsFy-3sRhUnnxqYKaew7NvNk"></script>
<script type="text/javascript">
  (function($) {
    function new_map($el) {
      var $markers = $el.find('.marker');
      var args = {
        zoom: 10,
        center: new google.maps.LatLng(0, 0),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map($el[0], args);
      map.markers = [];
      $markers.each(function() {
        add_marker($(this), map);
      });
      center_map(map);
      return map;
    }

    function add_marker($marker, map) {
      var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
      var marker = new google.maps.Marker({
        position: latlng,
        map: map
      });
      map.markers.push(marker);
      if ($marker.html()) {
        var infowindow = new google.maps.InfoWindow({
          content: $marker.html()
        });
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map, marker);
        });
      }
    }

    function center_map(map) {
      var bounds = new google.maps.LatLngBounds();
      $.each(map.markers, function(i, marker) {
        var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
        bounds.extend(latlng);
      });
      if (map.markers.length == 1) {
        map.setCenter(bounds.getCenter());
        map.setZoom(16);
      } else {
        map.fitBounds(bounds);
      }
    }

    var map = null;
    $(document).ready(function() {
      $('.acf-map').each(function() {
        map = new_map($(this));
      });
    });
  })(jQuery);
</script>

<?php if ((get_the_ID() === 220)) { ?>
  <script>
    jQuery('#interesse-loteamento-lp').submit(function(e) {
      e.preventDefault();
      jQuery('#interesse-loteamento-lp input[type=submit]').val('enviando..');
      var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
      if (jQuery('#E-mail-2').val() && regex.test(jQuery('#E-mail-2').val()) && jQuery('#name').val() && jQuery('#Telefone').val() && jQuery('input[name=consentimento-de-comunicacao]:checked').length > 0) {
        var data_array = [{
            name: 'loteamento',
            value: jQuery('#interesse-loteamento-lp #loteamento-il').val()
          },
          {
            name: 'nome',
            value: jQuery('#interesse-loteamento-lp #name').val()
          },
          {
            name: 'telefone',
            value: jQuery('#interesse-loteamento-lp #Telefone').val()
          },
          {
            name: 'email',
            value: jQuery('#interesse-loteamento-lp #E-mail-2').val()
          },
          {
            name: 'tempo',
            value: jQuery('#interesse-loteamento-lp #tempo-regatas option:selected').val()
          },
          {
            name: 'consentimento-de-comunicacao',
            value: 'granted'
          },
          {
            name: 'idempreendimento',
            value: jQuery('#interesse-loteamento-lp #idempreendimento').val()
          },
          {
            name: 'identificador',
            value: "Interesse Residencial - Giardino Bianco"
          }, //descobrir o valor da identificação
          {
            name: 'token_rdstation',
            value: 'ddd19ee74dc5eca035093f12ac6ef0d2'
          }
        ];
        RdIntegration.post(data_array, function() {
          window.location = "https://urba.com.br/obrigado/";
          return false;
        });
      } else {
        jQuery('#interesse-loteamento-lp input[type=submit]').val('COMPRE SEU LOTE');
        alert('Preencha seus dados');
      }
    });
  </script>
<?php } ?>
<?/*}*/ ?>
<style>
  .unico {
    display: none;
  }

  .unico2 {
    display: none;
  }

  .postid-220 .unico {
    display: block !important;
  }

  .postid-354 .unico2 {
    display: block !important;
  }

  .postid-319 .unico2 {
    display: block !important;
  }

  .postid-338 .unico2 {
    display: block !important;
  }

  .postid-220 .andamento-obra {
    display: none;
  }

  .texto-legal {
    padding-top: 30px;
    padding-bottom: 30px;
    background-color: #535353;
  }

  .texto-legal .container-padrao {
    position: relative;
    height: 100%;
    max-width: 1280px;
    margin-right: auto;
    margin-left: auto;
    padding-right: 20px;
    padding-left: 20px;
  }

  .paragraph-29 {
    margin-bottom: 0px;
    color: #b1b1b1;
    font-size: 12px;
    font-weight: 300;
  }
</style>