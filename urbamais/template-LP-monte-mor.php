<?php
/*
Template Name: LP Reserva Monte Mor
*/
?>
<?php get_header(); ?>

<style>
  .w-form-formradioinput--inputType-custom {
    border-top-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-top-color: #ccc;
    border-bottom-color: #ccc;
    border-left-color: #ccc;
    border-right-color: #ccc;
    border-top-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-right-style: solid;
    width: 12px;
    height: 12px;
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
  }

  .w-form-formradioinput--inputType-custom.w--redirected-focus {
    box-shadow: 0px 0px 3px 1px #3898ec;
  }

  .w-form-formradioinput--inputType-custom.w--redirected-checked {
    border-top-width: 4px;
    border-bottom-width: 4px;
    border-left-width: 4px;
    border-right-width: 4px;
    border-top-color: #3898ec;
    border-bottom-color: #3898ec;
    border-left-color: #3898ec;
    border-right-color: #3898ec;
  }

  .w-embed-youtubevideo {
    width: 100%;
    position: relative;
    padding-bottom: 0px;
    padding-left: 0px;
    padding-right: 0px;
    background-image: url('https://d3e54v103j8qbb.cloudfront.net/static/youtube-placeholder.2b05e7d68d.svg');
    background-size: cover;
    background-position: 50% 50%;
  }

  .w-embed-youtubevideo:empty {
    min-height: 75px;
    padding-bottom: 56.25%;
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
    grid-column-gap: 16px;
  }

  .w-checkbox {
    display: block;
    margin-bottom: 5px;
    padding-left: 20px;
  }

  .w-checkbox::before {
    content: ' ';
    display: table;
    -ms-grid-column-span: 1;
    grid-column-end: 2;
    -ms-grid-column: 1;
    grid-column-start: 1;
    -ms-grid-row-span: 1;
    grid-row-end: 2;
    -ms-grid-row: 1;
    grid-row-start: 1;
  }

  .w-checkbox::after {
    content: ' ';
    display: table;
    -ms-grid-column-span: 1;
    grid-column-end: 2;
    -ms-grid-column: 1;
    grid-column-start: 1;
    -ms-grid-row-span: 1;
    grid-row-end: 2;
    -ms-grid-row: 1;
    grid-row-start: 1;
    clear: both;
  }

  .w-checkbox-input {
    float: left;
    margin-bottom: 0px;
    margin-left: -20px;
    margin-right: 0px;
    margin-top: 4px;
    line-height: normal;
  }

  .w-checkbox-input--inputType-custom {
    border-top-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-top-color: #ccc;
    border-bottom-color: #ccc;
    border-left-color: #ccc;
    border-right-color: #ccc;
    border-top-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-right-style: solid;
    width: 12px;
    height: 12px;
    border-bottom-left-radius: 2px;
    border-bottom-right-radius: 2px;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
  }

  .w-checkbox-input--inputType-custom.w--redirected-checked {
    background-color: #3898ec;
    border-top-color: #3898ec;
    border-bottom-color: #3898ec;
    border-left-color: #3898ec;
    border-right-color: #3898ec;
    background-image: url('https://d3e54v103j8qbb.cloudfront.net/static/custom-checkbox-checkmark.589d534424.svg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .w-checkbox-input--inputType-custom.w--redirected-focus {
    box-shadow: 0px 0px 3px 1px #3898ec;
  }

  .body {
    font-family: Poppins, sans-serif;
  }

  .heroslider {
    position: relative;
    height: 800px;
    padding-top: 100px;
  }

  .slider {
    position: absolute;
    left: 0%;
    top: 0%;
    right: 0%;
    bottom: 0%;
    height: 100%;
  }

  .right-arrow {
    display: none;
  }

  .left-arrow {
    display: none;
  }

  .slide-nav {
    font-size: 10px;
  }

  .container-padrao {
    position: relative;
    height: 100%;
    max-width: 1280px;
    margin-right: auto;
    margin-left: auto;
    padding-right: 20px;
    padding-left: 20px;
    cursor: pointer;
  }

  .container-padrao.reduzido {
    max-width: 1000px;
  }

  .container-padrao.reduzido.monte-mor-lan {
    max-width: 1280px;
    padding-top: 40px;
    padding-bottom: 40px;
  }

  .container-padrao.montemor {
    text-align: center;
  }

  .container-padrao.monte-mor-mobile {
    right: auto;
    text-align: center;
  }

  .container-padrao.sao-roque {
    position: relative;
    text-align: center;
    white-space: normal;
    mix-blend-mode: normal;
  }

  .container-padrao.sem-padding {
    padding-right: 0px;
    padding-left: 0px;
  }

  .navbar {
    position: fixed;
    left: 0%;
    top: 0%;
    right: 0%;
    bottom: auto;
    height: 100px;
    border-bottom: 1px solid #ff8b22;
    background-color: #fff;
  }

  .brand {
    margin-top: 30px;
  }

  .nav-menu {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 30px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .button {
    display: none;
    margin-top: 10px;
    padding-right: 20px;
    padding-left: 20px;
    border-style: solid;
    border-width: 1px;
    border-color: #3898ec;
    border-radius: 50px;
    background-color: transparent;
    color: #3898ec;
    text-transform: none;
  }

  .dropdown-toggle {
    display: none;
  }

  .div-text-hero {
    position: relative;
    top: 50%;
    z-index: 5;
    width: 80%;
    margin-right: auto;
    margin-left: auto;
    -webkit-transform: translate(0px, -70%);
    -ms-transform: translate(0px, -70%);
    transform: translate(0px, -70%);
    text-align: center;
  }

  .div-text-hero.interna {
    width: 80%;
  }

  .div-text-hero.interna.jardim-bem-viver {
    width: 100%;
  }

  .div-text-hero.interna.girassois {
    width: 90%;
  }

  .div-text-hero.interna.tulipas {
    width: 90%;
  }

  .div-text-hero.interna.bem-campos {
    width: 90%;
  }

  .div-text-hero.venda {
    -webkit-transform: translate(0px, -50%);
    -ms-transform: translate(0px, -50%);
    transform: translate(0px, -50%);
    text-align: left;
  }

  .div-text-hero.home {
    width: 90%;
  }

  .div-text-hero.area-cliente {
    width: 90%;
  }

  .div-text-hero.smart-urba {
    width: 40%;
    margin-left: 0px;
    -webkit-transform: translate(0px, -45%);
    -ms-transform: translate(0px, -45%);
    transform: translate(0px, -45%);
    text-align: left;
  }

  .div-text-hero.smart-urba.dunlop {
    width: 40%;
    float: left;
    -webkit-transform: translate(0px, -50%);
    -ms-transform: translate(0px, -50%);
    transform: translate(0px, -50%);
  }

  .div-text-hero.smart-urba.minha-casa {
    top: 0%;
    z-index: 0;
    width: 50%;
    float: left;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
  }

  .div-text-hero.div-title-sobre-a-urba {
    position: static;
    margin-top: 60px;
    margin-bottom: 60px;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
  }

  .heading {
    margin-top: 0px;
    margin-bottom: 0px;
    color: #fff;
    font-size: 40px;
    line-height: 1.3;
    font-weight: 500;
    text-align: center;
    letter-spacing: 0.3px;
  }

  .heading.sobre {
    color: #079d56;
    font-weight: 300;
    text-align: center;
  }

  .heading.sobre.fale-com-ri {
    font-size: 28px;
    text-align: right;
  }

  .heading.venda {
    color: #079d56;
    font-weight: 300;
    text-align: left;
  }

  .heading.lojas {
    font-weight: 400;
  }

  .heading.area-cliente {
    width: 50%;
    color: #079d56;
    font-size: 32px;
    line-height: 1.5;
    font-weight: 300;
    text-align: left;
  }

  .heading.home {
    line-height: 1.6;
  }

  .slide {
    padding-top: 100px;
    background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0.2)), color-stop(20%, transparent)), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/slider-empreendimento-01.jpg');
    background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.2), transparent 20%), linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/slider-empreendimento-01.jpg');
    background-position: 0px 0px, 0px 0px, 0px 0px;
    background-size: auto, auto, cover;
  }

  .div-info-empreendimento {
    position: absolute;
    left: 0%;
    top: auto;
    right: auto;
    bottom: 0%;
    width: 300px;
    height: 100px;
    margin-left: 20px;
    padding-bottom: 20px;
    padding-left: 5px;
    border-left: 2px solid #ff8b22;
    opacity: 1;
    color: #fff;
  }

  .text-block {
    margin-bottom: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    color: #fff;
    font-size: 16px;
    font-weight: 500;
  }

  .image {
    margin-right: 5px;
    float: left;
  }

  .text-block-2 {
    width: 80%;
    margin-top: 3px;
    float: left;
    color: #ff8b22;
  }

  .slide-2 {
    padding-top: 100px;
    background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0.2)), color-stop(20%, transparent)), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/slider-empreendimento-02.jpg');
    background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.2), transparent 20%), linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/slider-empreendimento-02.jpg');
    background-position: 0px 0px, 0px 0px, 50% 50%;
    background-size: auto, auto, cover;
    background-repeat: repeat, repeat, no-repeat;
  }

  .slide-3 {
    padding-top: 100px;
    background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0.2)), color-stop(20%, transparent)), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/slider-empreendimento-03.jpg');
    background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.2), transparent 20%), linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/slider-empreendimento-03.jpg');
    background-position: 0px 0px, 0px 0px, 50% 50%;
    background-size: auto, auto, cover;
    background-repeat: repeat, repeat, no-repeat;
  }

  .loteamentos {
    padding-top: 90px;
    padding-bottom: 80px;
  }

  .loteamentos.interna {
    padding-top: 220px;
  }

  .heading-2 {
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

  .heading-2.branco {
    width: 100%;
    color: #fff;
    font-weight: 300;
  }

  .heading-2.galeria {
    width: 100%;
    margin: 0px 0px 20px;
    color: #fff;
    text-align: left;
  }

  .heading-2.galeria.monte-mor {
    width: 60%;
  }

  .heading-2.localiz {
    width: 100%;
    margin-bottom: 20px;
    color: #079d56;
    text-align: left;
  }

  .heading-2.localiz.elvira {
    color: #ff8b22;
  }

  .heading-2.localiz.monte-mor {
    margin-right: 1px;
    color: #793f98;
  }

  .heading-2.localiz.sao-roque {
    margin-right: 1px;
    color: #793f98;
  }

  .heading-2.localiz.sao-roque.mobile {
    position: static;
    color: #ec8515;
  }

  .heading-2.localiz.residencial-progresso {
    margin-right: 1px;
    color: #793f98;
  }

  .heading-2.localiz.residencial-progresso.mobile {
    position: static;
    color: #433868;
  }

  .heading-2.localiz.parque-vitoria {
    color: #793f98;
    text-shadow: none;
  }

  .heading-2.forms {
    width: 100%;
  }

  .heading-2.estados {
    width: 100%;
    margin-top: 100px;
    margin-bottom: 40px;
    font-size: 26px;
    text-align: left;
  }

  .heading-2.area-cliente {
    width: 100%;
    padding-top: 60px;
    color: #079d56;
    font-size: 26px;
    text-align: left;
  }

  .heading-2.area-cliente.vizinho {
    text-align: center;
  }

  .heading-2._2 {
    width: 60%;
    font-size: 26px;
  }

  .heading-2.hblog {
    width: 70%;
  }

  .heading-2.passo {
    color: #079d56;
    font-weight: 300;
  }

  .heading-2.center.white {
    color: #fff;
    font-weight: 300;
  }

  .heading-2.center.white.call {
    font-weight: 400;
  }

  .heading-2.side {
    width: 100%;
    margin-bottom: 20px;
    text-align: left;
  }

  .heading-2.parque-vitoria {
    width: auto;
    color: #6e6e6e;
    text-shadow: none;
  }

  .heading-2.branco-mm-lan {
    width: 100%;
    color: #fff;
    font-weight: 300;
  }

  .paragraph {
    width: 65%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    color: #ff8b22;
    font-size: 16px;
    line-height: 1.6;
    font-weight: 300;
    text-align: center;
    letter-spacing: 0.3px;
  }

  .paragraph.home {
    width: 55%;
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
    align-items: center;
  }

  .div-empreendimento {
    position: relative;
    overflow: hidden;
    width: 350px;
    height: 400px;
    margin-right: 15px;
    margin-left: 15px;
    border-radius: 5px;
    box-shadow: 0 1px 10px -3px rgba(0, 0, 0, 0.3);
    cursor: pointer;
  }

  .div-empreendimento.portal-das-aguas {
    background-image: url('../images/portal-das-aguas.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .div-empreendimento.giardino-bianco {
    background-image: url('../images/giardino-bianco.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .div-empreendimento.reserva-macauba {
    background-image: url('../images/reserva-macauba.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .div-empreendimento.jardim-bem-viver {
    background-image: url('../images/jardim-bem-viver.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .div-empreendimento.jardim-dos-girassois {
    background-image: url('../images/jardim-dos-girassois.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .div-empreendimento.jardins-de-campos {
    background-image: url('../images/jardins-de-campos.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .div-empreendimento.jardim-das-tulipas {
    background-image: url('../images/jardim-das-tulipas.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .div-empreendimento.bem-viver-campos {
    background-image: url('../images/bem-viver-campos.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .div-empreendimento.parque-atlanta {
    background-image: url('../images/parque-atlanta.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .div-info {
    position: absolute;
    left: 0%;
    top: auto;
    right: 0%;
    bottom: 0%;
    overflow: hidden;
    height: 90px;
    padding: 20px 20px 10px;
    background-color: hsla(0, 0%, 100%, 0.95);
  }

  .heading-3 {
    margin-top: 0px;
    margin-bottom: 5px;
    color: #006b3f;
    font-weight: 500;
  }

  .image-2 {
    float: left;
  }

  .text-block-3 {
    margin-left: 10px;
    float: left;
    color: #079d56;
  }

  .text-block-3._2 {
    margin-left: 0px;
    text-transform: capitalize;
  }

  .text-block-3.roxo {
    margin-left: 0px;
    color: #079d56;
  }

  .info {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 10px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .button-2 {
    margin-top: 10px;
    margin-bottom: 10px;
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
    color: #fff;
  }

  .button-2:hover {
    background-color: transparent;
    color: #ff8b22;
  }

  .button-2._2 {
    padding-right: 35px;
    padding-left: 35px;
    float: none;
    clear: none;
    border-color: #ac41d8;
    background-color: #ac41d8;
  }

  .button-2._2:hover {
    background-color: transparent;
    color: #ac41d8;
  }

  .section-vantagens {
    height: 250px;
    background-color: #006b3f;
  }

  .columns {
    position: relative;
    top: 50%;
    -webkit-transform: translate(0px, -50%);
    -ms-transform: translate(0px, -50%);
    transform: translate(0px, -50%);
  }

  .columns._2 {
    position: static;
    margin-top: 40px;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
  }

  .columns._2.regatas {
    display: none;
  }

  .columns.itapeva {
    position: static;
    display: none;
    margin-top: 40px;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
  }

  .columns.itapeva.regatas {
    display: none;
  }

  .text-block-4 {
    color: #fff;
    font-size: 26px;
    line-height: 1.1;
    font-weight: 300;
    text-align: center;
  }

  .text-block-4._2 {
    color: #006b3f;
    font-size: 20px;
  }

  .text-block-4._2.interna {
    color: #006b3f;
  }

  .text-block-4._2.interna.elvira {
    width: 100%;
    margin-right: 0px;
    margin-left: 0px;
    padding: 28px 20px;
    color: #433868;
  }

  .text-block-4._2.interna.elvira:hover {
    background-color: #433868;
    color: #fff;
  }

  .text-block-4._2.interna.progresso {
    width: 100%;
    margin-right: 0px;
    margin-left: 0px;
    padding: 28px 20px;
    color: #433868;
  }

  .text-block-4._2.interna.progresso:hover {
    background-color: #433868;
    color: #fff;
  }

  .text-block-4._2 {
    color: #006b3f;
    font-size: 20px;
  }

  .text-block-4._2.interna {
    color: #006b3f;
  }

  .destaque {
    font-size: 36px;
    font-weight: 500;
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
    border-right: 2px solid #ff8b22;
  }

  .column.end {
    border-right-style: none;
  }

  .column._2 {
    border-right-color: #006b3f;
    background-color: #82ea5b;
  }

  .column._2.interna {
    border-right-color: #fafafa;
    background-color: #ebebeb;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
  }

  .column._2.interna:hover {
    background-color: #ff8b22;
  }

  .column._2.interna.end.residencial-progresso:hover {
    background-color: #433868;
  }

  .column._2.interna.dunlop {
    display: none;
    border-left: 3px solid #fafafa;
    border-right-width: 3px;
    border-radius: 10px;
    background-color: #82ea5b;
  }

  .column._2.interna.elvira {
    padding-right: 0px;
    padding-left: 0px;
    color: #fff;
  }

  .column._2.interna.elvira:hover {
    background-color: #793f98;
  }

  .column._2.interna.residencial-progresso:hover {
    background-color: #433868;
  }

  .column._2.interna.residencial-progresso {
    padding-right: 0px;
    padding-left: 0px;
    color: #fff;
  }

  .column._2.interna.residencial-progresso:hover {
    background-color: #793f98;
  }

  .bairros-planejados {
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: url('../images/arvore.jpg'), url('../images/pai-filho.jpg');
    background-position: 100% 100%, 0% 100%;
    background-size: 400px, 400px;
    background-repeat: no-repeat, no-repeat;
    background-attachment: fixed, fixed;
  }

  .div-pilares {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    margin-top: 40px;
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
  }

  .div-pilar {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
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
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 5px;
    background-color: hsla(0, 0%, 100%, 0.95);
    box-shadow: 0 1px 7px -3px rgba(0, 0, 0, 0.5);
  }

  .text-block-5 {
    color: #006b3f;
    font-size: 16px;
    line-height: 1.2;
    font-weight: 600;
    text-align: center;
  }

  .image-3 {
    margin-bottom: 30px;
  }

  .formas-pagamento {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fafafa;
  }

  .text-block-6 {
    margin-top: 60px;
    color: #ff8b22;
    text-align: center;
  }

  .cta {
    height: 350px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.5))), url('../images/cta_6.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/cta_6.jpg');
    background-position: 0px 0px, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
    background-attachment: scroll, fixed;
  }

  .div-info-cta {
    position: relative;
    top: 50%;
    width: 70%;
    margin-right: auto;
    margin-left: auto;
    -webkit-transform: translate(0px, -50%);
    -ms-transform: translate(0px, -50%);
    transform: translate(0px, -50%);
    text-align: center;
  }

  .heading-4 {
    margin-top: 0px;
    color: #fff;
    line-height: 1.3;
    font-weight: 200;
    text-align: center;
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
    text-transform: lowercase;
  }

  .button-3:hover {
    border-color: #dd89ff;
    background-color: transparent;
    color: #dd89ff;
    font-weight: 400;
  }

  .button-3.galeria {
    display: none;
    padding-right: 40px;
    padding-left: 40px;
    border-style: solid;
    border-color: #82ea5b;
    background-color: #82ea5b;
    color: #006b3f;
  }

  .button-3.galeria:hover {
    background-color: transparent;
    color: #82ea5b;
  }

  .button-3.cond {
    margin-top: 50px;
  }

  .button-3.cond.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-3.cond.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-3.itapeva {
    margin-top: 10px;
    border-color: #f7287c;
    border-radius: 5px;
    background-color: #f7287c;
    text-transform: uppercase;
  }

  .button-3.itapeva:hover {
    background-color: transparent;
    color: #f7287c;
  }

  .button-3.itapeva.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-3.itapeva.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-3.itapeva.bot-o-hover-branco:hover {
    border-color: #fff;
    color: #fff;
  }

  .button-3.elvira {
    margin-top: 10px;
    border-color: #f7287c;
    border-radius: 5px;
    background-color: #f7287c;
    text-transform: uppercase;
  }

  .button-3.elvira:hover {
    background-color: transparent;
    color: #f7287c;
  }

  .button-3.elvira.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-3.elvira.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-3.elvira.bot-o-hover-branco {
    border-color: #ff8b22;
    background-color: #ff8b22;
  }

  .button-3.elvira.bot-o-hover-branco:hover {
    border-color: #82ea5b;
    background-color: #82ea5b;
    color: #006b3f;
  }

  .blog {
    padding-top: 80px;
    padding-bottom: 40px;
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
    justify-content: center;
  }

  .div-artigo {
    position: relative;
    overflow: hidden;
    width: 350px;
    height: 450px;
    margin-right: 15px;
    margin-left: 15px;
    border-radius: 10px;
    box-shadow: 0 1px 10px -4px rgba(0, 0, 0, 0.4);
  }

  .imagem-blog {
    height: 200px;
    background-image: url('../images/blog1.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .imagem-blog._2 {
    background-image: url('../images/blog2.jpg');
  }

  .imagem-blog._3 {
    background-image: url('../images/blog3.jpg');
  }

  .heading-5 {
    margin-right: 10px;
    margin-bottom: 15px;
    margin-left: 10px;
    color: #006b3f;
    font-size: 18px;
    line-height: 1.3;
    font-weight: 500;
  }

  .paragraph-7 {
    margin-top: 0px;
    margin-right: 10px;
    margin-left: 10px;
    color: #565656;
    line-height: 1.7;
    font-weight: 300;
  }

  .text-block-7 {
    position: absolute;
    left: 0%;
    top: auto;
    right: auto;
    bottom: 0%;
    display: block;
    margin-bottom: 10px;
    margin-left: 10px;
    color: #079d56;
    font-size: 12px;
  }

  .button-4 {
    position: absolute;
    left: auto;
    top: auto;
    right: 0%;
    bottom: 0%;
    width: 125px;
    margin-right: 10px;
    margin-bottom: 10px;
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
    text-align: center;
  }

  .button-4:hover {
    background-color: #ff8b22;
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
    color: #fff;
  }

  .faq {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f0f0f0;
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
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    text-align: center;
  }

  .recurso._2 {
    height: 0%;
  }

  .recurso._3 {
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
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
    transform: rotate(45deg);
  }

  .div-questoes {
    position: relative;
    margin-top: 60px;
  }

  .div-questao {
    height: auto;
    padding: 15px 10px 10px;
    border-style: none;
    border-width: 2px;
    border-color: #f79c1b;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 2px 10px -5px rgba(0, 0, 0, 0.3);
    -webkit-transition: all 250ms ease;
    transition: all 250ms ease;
    cursor: pointer;
  }

  .div-questao:hover {
    -webkit-transform: scale(1.01);
    -ms-transform: scale(1.01);
    transform: scale(1.01);
  }

  .div-questao.como {
    margin-bottom: 10px;
  }

  .div-questao.invest {
    margin-bottom: 20px;
    box-shadow: 0 5px 12px -5px rgba(255, 139, 34, 0.7);
  }

  .div-questao.resposta {
    padding-top: 8px;
    padding-bottom: 8px;
    padding-left: 8px;
  }

  .div-resposta {
    overflow: hidden;
    height: 0px;
  }

  .row {
    margin-bottom: 20px;
  }

  .paragraph-14 {
    color: #565656;
    line-height: 1.8;
    font-weight: 400;
    text-align: left;
  }

  .div-duvida {
    margin-bottom: 5px;
  }

  .duvida {
    width: 90%;
    float: left;
    color: #079d56;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 500;
  }

  .column-20 {
    padding-right: 5px;
    padding-left: 5px;
  }

  .column-7 {
    padding-right: 5px;
    padding-left: 5px;
  }

  .rodape {
    position: relative;
    z-index: 0;
    height: 250px;
    border-top: 0px solid #ff8b22;
    background-color: #006b3f;
  }

  .columns-2 {
    height: 100%;
  }

  .column-21 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
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
  }

  .column-21._2 {
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
  }

  .div-marca {
    width: 200px;
    height: 60px;
    background-image: url('https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg');
    background-position: 50% 50%;
    background-size: 125px;
  }

  .div-marca.rodape {
    width: auto;
    height: auto;
    border-top-style: none;
    background-color: transparent;
    background-image: none;
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
    justify-content: flex-end;
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
    align-items: center;
  }

  .div-mapa-site {
    width: 100%;
    height: 100%;
  }

  .columns-3 {
    height: 100%;
  }

  .column-22 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
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
    align-items: flex-start;
  }

  .link {
    margin-bottom: 10px;
    margin-left: 40px;
    color: #e7e7e7;
    text-decoration: none;
  }

  .link:hover {
    color: #fff;
  }

  .link.w--current {
    color: #d8d8d8;
    text-decoration: none;
  }

  .contato-imediato {
    position: fixed;
    left: auto;
    top: 0%;
    right: 0%;
    bottom: 0%;
    z-index: 5;
    display: block;
    width: 100px;
    height: 100vh;
    padding-top: 100px;
    padding-right: 20px;
    padding-left: 20px;
  }

  .div-forms {
    position: relative;
    z-index: 1;
    overflow: hidden;
    height: 0px;
    margin-top: 20px;
    padding-right: 15px;
    padding-left: 15px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 4px 12px -6px #000;
  }

  .div-forms.interna {
    position: static;
    overflow: visible;
    height: auto;
    margin-top: 0px;
    padding: 40px;
    border-radius: 5px;
  }

  .div-forms.interna.regatas {
    width: 80%;
    margin-right: auto;
    margin-left: auto;
  }

  .div-forms.interna.smarturba {
    width: 80%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
  }

  .heading-6 {
    margin-top: 40px;
    color: #006b3f;
    font-weight: 500;
    text-align: center;
  }

  .paragraph-15 {
    color: #ff8b22;
    text-align: center;
  }

  .paragraph-15._2 {
    color: #6e6e6e;
  }

  .form {
    width: 90%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    text-align: center;
  }

  .text-field {
    margin-bottom: 10px;
    border-style: solid;
    border-width: 1px;
    border-color: #079d56;
    border-radius: 20px;
  }

  .text-field._2 {
    border-radius: 5px;
  }

  .tipo-contato {
    position: relative;
    display: block;
    height: 40px;
  }

  .tipo-contato.hidden {
    display: none;
  }

  .radio-button-field {
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    margin-bottom: 0px;
  }

  .radio-button {
    opacity: 0;
  }

  .resposta1 {
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
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
    cursor: pointer;
  }

  .resposta1:hover {
    background-color: #079d56;
    color: #fff;
    font-weight: 400;
  }

  .column-23 {
    padding-right: 5px;
    padding-left: 0px;
  }

  .column-24 {
    padding-right: 0px;
    padding-left: 5px;
  }

  .columns-4 {
    margin-bottom: 10px;
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
    text-transform: uppercase;
  }

  .submit-button:hover {
    background-color: transparent;
    color: #ff8b22;
  }

  .div-botao-contato {
    position: absolute;
    left: auto;
    top: auto;
    right: 0%;
    bottom: 0%;
    width: 100px;
    height: 100px;
    margin-right: 20px;
    margin-bottom: 50px;
    border-radius: 100px;
    background-color: #ac41d8;
    background-image: url('../images/contact_rapido.png');
    background-position: 50% 50%;
    background-size: 100px 100px;
    box-shadow: 0 7px 15px -6px rgba(0, 0, 0, 0.4);
    cursor: pointer;
  }

  .div-close {
    position: absolute;
    left: auto;
    top: 0%;
    right: 0%;
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
    box-shadow: 0 1px 6px -3px rgba(0, 0, 0, 0.5);
    color: #ac41d8;
    font-size: 16px;
    font-weight: 300;
    cursor: pointer;
  }

  .hero-internas {
    position: relative;
    height: 800px;
    padding-top: 100px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(hsla(0, 0%, 100%, 0.35)), to(hsla(0, 0%, 100%, 0.35))), url('https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg');
    background-image: linear-gradient(180deg, hsla(0, 0%, 100%, 0.35), hsla(0, 0%, 100%, 0.35)), url('https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg');
    background-position: 0px 0px, 0px 0px;
    background-size: auto, 125px;
  }

  .hero-internas.giardino {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero_v3_1.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero_v3_1.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .hero-internas.giardino.girass-is {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero_v2_1.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero_v2_1.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .hero-internas.giardino.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero-familia-01.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero-familia-01.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .hero-internas.giardino.atlanta {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.45)), to(rgba(0, 0, 0, 0.45))), url('../images/hero-familia-02.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url('../images/hero-familia-02.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .hero-internas.portal-das-aguas {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .hero-internas.sobre {
    height: auto;
    padding-top: 0px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(hsla(0, 0%, 100%, 0.35)), to(hsla(0, 0%, 100%, 0.35)));
    background-image: linear-gradient(180deg, hsla(0, 0%, 100%, 0.35), hsla(0, 0%, 100%, 0.35));
  }

  .hero-internas.sobre.sobre-a-urba {
    padding-top: 80px;
    padding-bottom: 60px;
  }

  .hero-internas.venda {
    height: 640px;
    background-image: url('../images/hero-venda.jpg');
    background-position: 125% 100%;
    background-size: auto 600px;
    background-repeat: no-repeat;
  }

  .hero-internas.nossas-lojas {
    height: 640px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero_v3.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero_v3.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .hero-internas.area-do-cliente {
    height: 640px;
    background-image: url('../images/hero_1.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .hero-internas.reserva-macauba {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/hero-familia-05.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/hero-familia-05.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .hero-internas.reserva-macauba.jardim-bem-viver {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero-familia-04.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero-familia-04.jpg');
    background-position: 0px 0px, 50% 0%;
  }

  .hero-internas.reserva-macauba.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero_v2_2.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero_v2_2.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .hero-internas.reserva-macauba.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero-familia-03.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero-familia-03.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .hero-internas.investidores {
    height: 600px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url('../images/urba-nova-hero-03.jpg');
    background-image: linear-gradient(180deg, transparent, transparent), url('../images/urba-nova-hero-03.jpg');
    background-position: 0px 0px, 100% 50%;
    background-size: auto, contain;
    background-repeat: repeat, no-repeat;
  }

  .hero-internas.regatas {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.15)), to(rgba(0, 0, 0, 0.15))), url('../images/hero_2.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.15)), url('../images/hero_2.jpg');
    background-position: 0px 0px, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .hero-internas.dunlop {
    height: 700px;
    margin-top: 100px;
    padding-top: 0px;
    background-image: -webkit-gradient(linear, right top, left top, from(rgba(0, 0, 0, 0.75)), color-stop(40%, transparent)), -webkit-gradient(linear, left top, right top, color-stop(15%, rgba(0, 0, 0, 0.75)), color-stop(50%, hsla(0, 0%, 6%, 0))), url('../images/hero_5.jpg');
    background-image: linear-gradient(270deg, rgba(0, 0, 0, 0.75), transparent 40%), linear-gradient(90deg, rgba(0, 0, 0, 0.75) 15%, hsla(0, 0%, 6%, 0) 50%), url('../images/hero_5.jpg');
    background-position: 0px 0px, 0px 0px, 100% 50%;
    background-size: auto, auto, cover;
    background-repeat: repeat, repeat, no-repeat;
    background-attachment: scroll, scroll, scroll;
  }

  .hero-internas.minha-casa {
    height: auto;
    margin-top: 100px;
    padding-top: 60px;
    padding-bottom: 335px;
    background-image: -webkit-gradient(linear, left bottom, left top, color-stop(40%, #78368c), to(#a84d97));
    background-image: linear-gradient(0deg, #78368c 40%, #a84d97);
  }

  .hero-internas.vila-profeta {
    height: 700px;
    margin-top: 100px;
    padding-top: 0px;
    background-image: linear-gradient(114deg, #000, hsla(0, 0%, 100%, 0) 49%), linear-gradient(270deg, rgba(0, 0, 0, 0.5), transparent 26%), url('../images/bg-hero-vila-profeta.png');
    background-position: 0px 0px, 0px 0px, -1% 50%;
    background-size: auto, auto, cover;
    background-repeat: repeat, repeat, no-repeat;
    background-attachment: scroll, scroll, scroll;
  }

  .hero-internas.itapeva {
    height: 800px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('../images/hero-itapeva.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('../images/hero-itapeva.jpg');
    background-position: 0px 0px, 0% 50%;
    background-size: auto, cover;
    background-repeat: repeat, repeat;
  }

  .hero-internas.elvira {
    height: 800px;
    background-color: #fff;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('../images/Depositphotos_158690232_L.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('../images/Depositphotos_158690232_L.jpg');
    background-position: 0px 0px, 50% 50%;
    background-size: auto, auto;
    background-repeat: repeat, no-repeat;
  }

  .hero-internas.montemor {
    height: 800px;
    background-color: #fff;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('../images/Depositphotos_249018672_XL.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('../images/Depositphotos_249018672_XL.jpg');
    background-position: 0px 0px, 100% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .hero-internas.sao-roque {
    height: 800px;
    background-color: #fff;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('../images/Depositphotos_11892194_XL.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('../images/Depositphotos_11892194_XL.jpg');
    background-position: 0px 0px, 100% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .hero-internas.residencial-progresso {
    height: 800px;
    background-color: #fff;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.27)), to(rgba(0, 0, 0, 0.27))), url('../images/shutterstock_723020353-copiar.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.27), rgba(0, 0, 0, 0.27)), url('../images/shutterstock_723020353-copiar.jpg');
    background-position: 0px 0px, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .hero-internas.parquevitoria {
    height: 800px;
    background-color: #fff;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.27)), to(rgba(0, 0, 0, 0.27))), url('../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.27), rgba(0, 0, 0, 0.27)), url('../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg');
    background-position: 0px 0px, 50% 50%;
    background-size: auto, cover;
  }

  .hero-internas.monte-mor-lan {
    position: static;
    width: 100%;
    height: 800px;
    margin-top: 0px;
    background-color: #fff;
    background-image: linear-gradient(264deg, rgba(121, 63, 152, 0.26), rgba(121, 63, 152, 0.47)), linear-gradient(180deg, rgba(0, 0, 0, 0.51), rgba(0, 0, 0, 0.51)), url('https://urba.com.br/wp-content/uploads/2023/03/63331f9ee3acaef71a5dd88f_URBA_RESERVA_MONTE_MOR_ACESSOS-1-scaled.jpg');
    background-position: 0px 0px, 0px 0px, 100% 50%;
    background-size: auto, auto, cover;
    background-repeat: repeat, repeat, no-repeat;
  }

  .bold-text {
    padding-right: 15px;
    padding-left: 15px;
    background-color: #ffb719;
    color: #fff;
    font-size: 26px;
    font-weight: 300;
  }

  .bold-text.giardino {
    background-color: #ac41d8;
  }

  .bold-text.reserva-macauba {
    background-color: #82ea5b;
    color: #006b3f;
  }

  .bold-text.jardim-bem-viver {
    background-color: #079d56;
  }

  .bold-text.girassois {
    background-color: #ffb719;
    color: #424242;
  }

  .bold-text.campos {
    background-color: #ff8b22;
  }

  .bold-text.atlanta {
    background-color: #82ea5b;
    color: #006b3f;
  }

  .div-selo {
    position: absolute;
    left: 0%;
    top: auto;
    right: auto;
    bottom: 0%;
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
    background-image: url('../images/selo.png');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .div-selo.giardino {
    background-color: #fff;
    background-image: url('../images/selo_2.png');
  }

  .div-selo.reserva-macauba {
    background-color: #fff;
    background-image: url('../images/selo_3.png');
  }

  .div-selo.jardim-bem-viver {
    height: 190px;
    background-image: url('../images/selo_1.png');
    background-size: contain;
  }

  .div-selo.girassois {
    background-color: #fff;
    background-image: url('../images/selo_4.png');
  }

  .div-selo.campos {
    border-radius: 30px;
    background-color: #fff;
    background-image: url('../images/selo_5.png');
  }

  .div-selo.tulipas {
    background-color: #fff;
    background-image: url('../images/selo_6.png');
  }

  .div-selo.bem-campos {
    background-image: url('../images/selo_7.png');
  }

  .div-selo.atlanta {
    background-image: url('../images/selo_8.png');
  }

  .infos-terreno {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fafafa;
  }

  .infos-terreno.monte-mor {
    background-color: #fff;
  }

  .infos-terreno.monte-mor.infos-terreno-monte {
    padding-bottom: 60px;
  }

  .infos-terreno.parquevitoria {
    margin-top: 60px;
    background-color: #fff;
  }

  .infos-terreno.parque-vitoria {
    background-color: #fff;
    text-shadow: none;
  }

  .div-infos-terreno {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .div-infos-terreno.padding-top {
    padding-top: 40px;
  }

  .div-info-terreno {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
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
    border-right: 1px solid #6e6e6e;
  }

  .div-info-terreno.end {
    border-right-style: none;
  }

  .image-4 {
    margin-bottom: 30px;
  }

  .text-block-8 {
    color: #048548;
    font-size: 16px;
    text-align: center;
  }

  .div-text-terreno {
    width: 80%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    text-align: center;
  }

  .div-text-terreno.cond {
    width: 90%;
    font-weight: 800;
  }

  .div-text-terreno.cond.residencial-progresso {
    margin-bottom: 60px;
  }

  .paragraph-16 {
    color: #565656;
    font-size: 16px;
    line-height: 1.8;
    font-weight: 300;
    text-align: center;
  }

  .paragraph-16.localiz {
    text-align: left;
  }

  .paragraph-16._2 {
    width: 60%;
    margin-right: auto;
    margin-left: auto;
  }

  .paragraph-16.itapeva {
    margin-bottom: 40px;
  }

  .paragraph-16.itapeva.text-form {
    width: 60%;
    margin: 20px auto 10px;
    font-size: 14px;
  }

  .paragraph-16.itapeva.ipca {
    display: none;
  }

  .paragraph-16.montemor {
    margin-bottom: 0px;
  }

  .paragraph-16.montemor.text-form {
    width: 60%;
    margin: 20px auto 10px;
    font-size: 14px;
  }

  .paragraph-16.montemor.ipca {
    display: none;
  }

  .paragraph-16.montmor {
    margin-bottom: 40px;
  }

  .paragraph-16.montmor.text-form {
    width: 100%;
    margin: 20px auto 10px;
    font-size: 14px;
    text-align: left;
  }

  .paragraph-16.montmor.ipca {
    display: none;
  }

  .paragraph-16.esquerda {
    text-align: left;
  }

  .paragraph-16.esquerda.margin-top {
    margin-top: 40px;
  }

  .paragraph-16.margin-top {
    margin-top: 40px;
  }

  .paragraph-16.branco {
    color: #fff;
    text-decoration: none;
  }

  .paragraph-16.widht-80 {
    width: 80%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
  }

  .caracteristicas {
    position: relative;
    padding-top: 60px;
    padding-bottom: 60px;
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
    align-items: center;
  }

  .div-caracteristica {
    position: relative;
    overflow: hidden;
    width: 350px;
    min-height: 500px;
    margin-right: 15px;
    margin-left: 15px;
    border-radius: 10px;
    box-shadow: 1px 1px 10px -4px rgba(0, 0, 0, 0.4);
  }

  .div-caracteristica.reserva-macauba {
    min-height: 640px;
  }

  .div-caracteristica.girassois {
    min-height: 525px;
  }

  .div-caracteristica.campos {
    min-height: 590px;
  }

  .div-caracteristica.portal-das-aguas {
    min-height: 540px;
  }

  .div-caracteristica.jardim-bem-viver {
    min-height: 620px;
  }

  .div-caracteristica.regatas {
    min-height: 600px;
    margin-right: 5px;
    margin-left: 5px;
  }

  .div-caracteristica.parque-vitoria {
    width: 380px;
    min-height: 570px;
    text-shadow: none;
  }

  .imagem-caracteristica {
    position: relative;
    height: 225px;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeriarua-interna.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeriarua-interna.jpg');
    background-position: 0px 0px, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .imagem-caracteristica._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeriaquadras.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeriaquadras.jpg');
  }

  .imagem-caracteristica._2.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-praça.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-praça.jpg');
  }

  .imagem-caracteristica._2.bem-viver {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-playground.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-playground.jpg');
  }

  .imagem-caracteristica._2.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-playground_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-playground_2.jpg');
  }

  .imagem-caracteristica._2.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-playground_3.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-playground_3.jpg');
  }

  .imagem-caracteristica._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.7))), url('../images/area-comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.7)), url('../images/area-comercial.jpg');
    background-position: 0px 0px, 50% 100%;
  }

  .imagem-caracteristica._3.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-area-comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-area-comercial.jpg');
  }

  .imagem-caracteristica._3.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-area-comercial_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-area-comercial_1.jpg');
  }

  .imagem-caracteristica._3.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-area-comercial_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-area-comercial_2.jpg');
  }

  .imagem-caracteristica.giardino-bianco {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria---guarita.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria---guarita.jpg');
  }

  .imagem-caracteristica.giardino-bianco._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria---rua-interna.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria---rua-interna.jpg');
  }

  .imagem-caracteristica.giardino-bianco._2.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-area-de-lazer.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-area-de-lazer.jpg');
  }

  .imagem-caracteristica.giardino-bianco._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria---piscinas.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria---piscinas.jpg');
  }

  .imagem-caracteristica.giardino-bianco._3.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-piscina_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-piscina_2.jpg');
  }

  .imagem-caracteristica.giardino-bianco.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-guarita_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-guarita_1.jpg');
  }

  .imagem-caracteristica.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna_1.jpg');
  }

  .imagem-caracteristica.bem-viver {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna.jpg');
  }

  .imagem-caracteristica.girassois {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-guarita.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-guarita.jpg');
  }

  .imagem-caracteristica.girassois._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna_2.jpg');
  }

  .imagem-caracteristica.girassois._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-piscina.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-piscina.jpg');
  }

  .imagem-caracteristica.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna_3.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna_3.jpg');
  }

  .imagem-caracteristica.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna_4.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna_4.jpg');
  }

  .imagem-caracteristica.atlanta {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-guarita_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-guarita_2.jpg');
  }

  .imagem-caracteristica.atlanta._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-aérea.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-aérea.jpg');
  }

  .imagem-caracteristica.atlanta._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-piscina_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-piscina_1.jpg');
  }

  .imagem-caracteristica.regatas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
  }

  .imagem-caracteristica.regatas._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/areaverde.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/areaverde.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica.regatas._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica.regatas._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica.elvira {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/INFRAESTRUTURA.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/INFRAESTRUTURA.jpg');
  }

  .imagem-caracteristica.elvira._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/areaverde.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/areaverde.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica.elvira._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica.elvira._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica.elvira._1 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/INFRAESTRUTURA.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/INFRAESTRUTURA.jpg');
  }

  .imagem-caracteristica.elvira {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
  }

  .imagem-caracteristica.elvira._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/LAZER.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/LAZER.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica.elvira._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica.elvira._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica.elvira._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/AREA-COMERCIAL_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/AREA-COMERCIAL_1.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica.elvira {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
  }

  .imagem-caracteristica.elvira._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/areaverde.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/areaverde.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica.elvira._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/AREA-COMERCIAL_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/AREA-COMERCIAL_1.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica.elvira._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica.elvira._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/Área-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/Área-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg');
  }

  .paragraph-17 {
    margin: 20px;
    color: #565656;
    line-height: 1.8;
  }

  .paragraph-17.regatas {
    margin-right: 10px;
    margin-left: 10px;
  }

  .heading-7 {
    position: absolute;
    left: 0%;
    top: auto;
    right: 0%;
    bottom: 0%;
    margin-top: 0px;
    margin-right: 20px;
    margin-left: 20px;
    color: #fff;
    font-weight: 500;
    text-transform: uppercase;
  }

  .h1 {
    margin-top: 0px;
    margin-bottom: 30px;
    font-family: Ubuntu, Helvetica, sans-serif;
    color: #fff;
    font-size: 72px;
    line-height: 78px;
    font-weight: 800;
    letter-spacing: -1px;
  }

  .text-block-9 {
    margin-bottom: 20px;
    color: #fff;
    font-size: 16px;
    font-weight: 400;
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
    justify-content: center;
  }

  .link-2 {
    color: #6e6e6e;
    font-size: 26px;
    font-weight: 500;
    text-decoration: none;
  }

  .text-block-10 {
    margin-right: 10px;
    float: left;
    color: #6e6e6e;
  }

  .slider-2 {
    height: auto;
    margin-right: -20px;
    margin-left: -20px;
    padding-bottom: 0px;
    background-color: transparent;
  }

  .slide-nav-2 {
    display: none;
    width: 250px;
    margin-bottom: 10px;
    color: #079d56;
  }

  .left-arrow-2 {
    left: 40%;
    top: auto;
    right: auto;
    bottom: 0%;
    display: none;
    height: 50px;
  }

  .icon {
    margin-top: 12px;
    color: #079d56;
    font-size: 18px;
  }

  .right-arrow-2 {
    left: auto;
    top: auto;
    right: 40%;
    bottom: 0%;
    display: none;
    height: 50px;
  }

  .icon-2 {
    margin-top: 12px;
    color: #079d56;
    font-size: 18px;
  }

  .galeria-de-fotos {
    height: 400px;
    background-color: #6e6e6e;
  }

  .galeria-de-fotos.itapeva {
    display: block;
  }

  .galeria-de-fotos.monte-mor {
    display: block;
  }

  .columns-5 {
    height: 100%;
  }

  .column-25 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    padding-right: 0px;
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
    background-color: #006b3f;
  }

  .column-26 {
    height: 100%;
    padding-right: 20px;
    padding-left: 0px;
  }

  .column-26.regatas {
    padding-right: 0px;
  }

  .lightbox-link {
    position: absolute;
    left: 0%;
    top: 0%;
    right: 0%;
    bottom: 0%;
    overflow: hidden;
  }

  .img-cover-galeria {
    width: 100%;
    height: 100%;
    background-image: url('https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg');
    background-position: 0px 0px;
    background-size: 125px;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
  }

  .img-cover-galeria:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }

  .seta {
    position: absolute;
    left: auto;
    top: 50%;
    right: 0%;
    bottom: 0%;
    z-index: 1;
    display: none;
    width: 50px;
    height: 50px;
    margin-right: -25px;
    background-color: #006b3f;
    -webkit-transform: translate(0px, -50%) rotate(45deg);
    -ms-transform: translate(0px, -50%) rotate(45deg);
    transform: translate(0px, -50%) rotate(45deg);
  }

  .div-title-info-galeria {
    position: relative;
    width: 80%;
  }

  .div-title-info-galeria.dunlop {
    width: 545px;
  }

  .localizacao {
    height: 720px;
    background-color: #f7f7f7;
  }

  .localizacao.residencial-progresso {
    height: auto;
    margin-top: 80px;
    background-color: transparent;
  }

  .localizacao.parque-vitoria {
    height: auto;
    margin-top: 0px;
    padding-top: 80px;
    padding-bottom: 80px;
    background-color: #fafafa;
    text-shadow: none;
  }

  .columns-6 {
    height: 100%;
  }

  .column-27 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
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
  }

  .column-27.residencial-progresso {
    padding-right: 40px;
  }

  .column-28 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: auto;
    padding-right: 0px;
    padding-left: 0px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
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
    flex: 1;
  }

  .div-title-info-localizacao {
    width: 60%;
  }

  .tabs {
    height: 720px;
  }

  .tabs.monte-mor {
    display: block;
  }

  .tab-pane-tab-1 {
    height: 680px;
  }

  .tabs-menu {
    height: 35px;
    margin-top: 5px;
    text-align: left;
  }

  .tab-link-tab-1 {
    height: 40px;
    background-color: #ffb719;
    color: #fff;
  }

  .tab-link-tab-1.w--current {
    background-color: #ff8b22;
    color: #fff;
  }

  .tab-link-tab-1.elvira {
    background-color: #82ea5b;
  }

  .tab-link-tab-1.elvira.w--current {
    background-color: #006b3f;
  }

  .tab-link-tab-2 {
    height: 40px;
    background-color: #ffb719;
    color: #fff;
  }

  .tab-link-tab-2.w--current {
    background-color: #ff8b22;
  }

  .tab-link-tab-2.w--current:focus {
    background-color: #006b3f;
  }

  .tab-link-tab-2.elvira {
    background-color: #82ea5b;
  }

  .tab-link-tab-2.elvira:active {
    background-color: #006b3f;
  }

  .tab-link-tab-2.elvira.current {
    display: none;
  }

  .tab-link-tab-2.elvira.current.w--current {
    background-color: #006b3f;
  }

  .map {
    height: 100%;
  }

  .tab-pane-tab-2 {
    height: 680px;
  }

  .lightbox-link-2 {
    overflow: hidden;
    height: 100%;
  }

  .image-6 {
    height: auto;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
  }

  .image-6:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }

  .planta {
    padding-top: 60px;
    padding-bottom: 60px;
  }

  .planta.itapeva {
    display: none;
  }

  .planta.elvira {
    display: block;
    height: 700px;
  }

  .planta.residencial-progresso {
    display: none;
  }

  .bold-text-2 {
    font-size: 12px;
    font-weight: 400;
  }

  .columns-7 {
    margin-top: 40px;
  }

  .text-block-11 {
    margin-top: -10px;
    color: #079d56;
    font-size: 12px;
    font-weight: 300;
    text-align: center;
  }

  .text-block-11.elvira {
    color: #079d56;
  }

  .div-img-casa {
    height: 400px;
    background-image: url('../images/fachada.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
  }

  .div-img-casa:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }

  .div-img-casa.giardino {
    background-image: url('../images/fachada_1.jpg');
  }

  .div-img-casa.bem-viver {
    background-image: url('../images/fachada_3.jpg');
  }

  .div-img-casa.reserva {
    background-image: url('../images/fachada_2.jpg');
  }

  .div-img-casa.girassois {
    background-image: url('../images/fachada_4.jpg');
  }

  .div-img-casa.campos {
    background-image: url('../images/fachada_5.jpg');
  }

  .div-img-casa.tulipas {
    background-image: url('../images/fachada_6.jpg');
  }

  .div-img-casa.bem-campos {
    background-image: url('../images/fachada_7.jpg');
  }

  .div-img-casa.atlanta {
    background-image: url('../images/fachada_8.jpg');
  }

  .div-img-casa.regatas {
    background-image: url('../images/fachada_9.jpg');
  }

  .div-img-casa.elvira {
    background-image: url('https://urba.com.br/wp-content/themes/urbamais/images/montemor/Fachada_10.jpg');
  }

  .column-29 {
    padding-right: 0px;
    padding-left: 0px;
  }

  .column-30 {
    padding-right: 0px;
    padding-left: 0px;
  }

  .lightbox-link-3 {
    overflow: hidden;
    width: 260px;
    height: 400px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
  }

  .lightbox-link-4 {
    overflow: hidden;
    width: 100%;
    height: 400px;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
  }

  .column-31 {
    padding-right: 0px;
    padding-left: 0px;
  }

  .column-31.monte-mor {
    position: relative;
  }

  .lightbox-link-5 {
    overflow: hidden;
    width: 210px;
    height: 400px;
  }

  .div-planta-01 {
    width: 210px;
    height: 400px;
    background-image: url('../images/planta01.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
  }

  .div-planta-01:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }

  .div-planta-01.giardino {
    background-image: url('../images/planta-01.jpg');
  }

  .div-planta-01.reserva {
    background-image: url('../images/planta-01_1.jpg');
  }

  .div-planta-01.bem-viver {
    background-image: url('../images/planta01_1.jpg');
  }

  .div-planta-01.girassois {
    background-image: url('../images/planta-01_2.jpg');
  }

  .div-planta-01.campos {
    background-image: url('../images/planta-01_3.jpg');
  }

  .div-planta-01.tulipas {
    background-image: url('../images/planta-01_4.jpg');
  }

  .div-planta-01.bem-campos {
    background-image: url('../images/planta-01_5.jpg');
  }

  .div-planta-01.atlanta {
    background-image: url('../images/planta.jpg');
  }

  .div-planta-01.regatas {
    background-image: url('../images/planta-01_6.jpg');
  }

  .div-planta-01.elvira {
    width: 260px;
    background-image: url('https://urba.com.br/wp-content/themes/urbamais/images/montemor/Planta-Humanizada_FirstFloor.jpg');
  }

  .div-planta-02 {
    width: 210px;
    height: 400px;
    background-image: url('../images/planta02.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
  }

  .div-planta-02:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }

  .div-planta-02.giardino {
    background-image: url('../images/planta-02.jpg');
  }

  .div-planta-02.reserva {
    background-image: url('../images/planta-02_1.jpg');
  }

  .div-planta-02.bem-viver {
    background-image: url('../images/planta02_1.jpg');
  }

  .div-planta-02.girassois {
    background-image: url('../images/planta-02_2.jpg');
  }

  .div-planta-02.campos {
    background-image: url('../images/planta02_2.jpg');
  }

  .div-planta-02.tulipas {
    background-image: url('../images/planta-02_3.jpg');
  }

  .div-planta-02.bem-campos {
    background-image: url('../images/planta-02_4.jpg');
  }

  .div-planta-02.regatas {
    background-image: url('../images/planta-02_5.jpg');
  }

  .div-planta-02.elvira {
    background-image: url('https://urba.com.br/wp-content/themes/urbamais/images/montemor/Planta-Humanizada_SecondFloor.jpg');
  }

  .div-planta-02.elvira {
    width: 260px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    background-image: url('https://urba.com.br/wp-content/themes/urbamais/images/montemor/Planta-Humanizada_SecondFloor.jpg');
  }

  .andamento-obra {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f7f7f7;
  }

  .andamento-obra.itapeva {
    display: block;
  }

  .andamento-obra.elvira {
    display: block;
  }

  .div-andamento {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    margin-top: 20px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
  }

  .div-grafico {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100px;
    height: 100px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 2px solid #000;
  }

  .div-evolucao {
    position: absolute;
    left: 0%;
    top: auto;
    right: 0%;
    bottom: 0%;
    height: 1px;
    background-color: #82ea5b;
  }

  .div-evolucao.paisagismo {
    height: 18px;
  }

  .div-evolucao.paisagismo.giardino {
    height: 37px;
  }

  .div-evolucao.paisagismo.reserva {
    height: 15px;
  }

  .div-evolucao.paisagismo.bem-viver {
    height: 86px;
  }

  .div-evolucao.paisagismo.girassois {
    height: 30px;
  }

  .div-evolucao.paisagismo.iluminacao {
    height: 37px;
  }

  .div-evolucao.pavimentacao {
    height: 0px;
  }

  .div-evolucao.pavimentacao.giardino {
    height: 0px;
  }

  .div-evolucao.pavimentacao.reserva {
    height: 62px;
  }

  .div-evolucao.pavimentacao.bem-viver {
    height: 95px;
  }

  .div-evolucao.pavimentacao.girassois {
    height: 95px;
  }

  .div-evolucao.pavimentacao.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.pavimentacao.elvira._49 {
    height: 99%;
  }

  .div-evolucao.pavimentacao.santairia {
    height: 85px;
    background-color: #82ea5b;
  }

  .div-evolucao.pavimentacao.agua {
    height: 6px;
  }

  .div-evolucao.pavimentacao.vilaprofeta {
    height: 6px;
    background-color: #82ea5b;
  }

  .div-evolucao.pavimentacao.dunlop {
    height: 94px;
  }

  .div-evolucao.terraplanagem {
    height: 0px;
  }

  .div-evolucao.terraplanagem.giardino {
    height: 71px;
  }

  .div-evolucao.terraplanagem.reserva {
    height: 79px;
  }

  .div-evolucao.terraplanagem.bem-viver {
    height: 96px;
  }

  .div-evolucao.terraplanagem.girassois {
    height: 95px;
  }

  .div-evolucao.terraplanagem.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.terraplanagem.elvira._100 {
    height: 97%;
  }

  .div-evolucao.terraplanagem.itapeva {
    height: 80px;
  }

  .div-evolucao.esgoto {
    height: 0px;
  }

  .div-evolucao.esgoto.giardino {
    height: 0px;
  }

  .div-evolucao.esgoto.reserva {
    height: 94px;
  }

  .div-evolucao.esgoto.bem-viver {
    height: 95px;
  }

  .div-evolucao.esgoto.girassois {
    height: 95px;
  }

  .div-evolucao.esgoto.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.esgoto.elvira._92 {
    height: 92px;
  }

  .div-evolucao.esgoto.elvira._93 {
    height: 99%;
  }

  .div-evolucao.esgoto.itapeva {
    height: 98%;
  }

  .div-evolucao.esgoto.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.esgoto.santairia {
    height: 99%;
    background-color: #82ea5b;
  }

  .div-evolucao.esgoto.vila-profeta {
    height: 2%;
  }

  .div-evolucao.esgoto.vila-profeta._95 {
    height: 91px;
  }

  .div-evolucao.esgoto.ilumina-o {
    height: 98%;
    background-color: #82ea5b;
  }

  .div-evolucao.esgoto.pavimenta-ao {
    height: 99%;
    background-color: #82ea5b;
  }

  .div-evolucao.eletrica {
    height: 0px;
  }

  .div-evolucao.eletrica.giardino {
    height: 0px;
  }

  .div-evolucao.eletrica.reserva {
    height: 40px;
  }

  .div-evolucao.eletrica.girassois {
    height: 71px;
  }

  .div-evolucao.eletrica.vila-profeta {
    height: 92%;
  }

  .div-evolucao.passeios-calcadas {
    height: 0px;
  }

  .div-evolucao.passeios-calcadas.reserva {
    height: 55px;
  }

  .div-evolucao.passeios-calcadas.bem-viver {
    height: 66px;
  }

  .div-evolucao.passeios-calcadas.girassois {
    height: 96px;
  }

  .div-evolucao.areas-edificaveis {
    height: 0px;
  }

  .div-evolucao.areas-edificaveis.giardino {
    height: 12px;
  }

  .div-evolucao.areas-edificaveis.bem-viver {
    height: 66px;
  }

  .div-evolucao.areas-edificaveis.girassois {
    height: 91px;
  }

  .div-evolucao.drenagem {
    height: 96px;
  }

  .div-evolucao.muro.giardino {
    height: 56px;
  }

  .div-evolucao.muro.girassois {
    height: 77px;
  }

  .div-evolucao.avenida-de-acesso {
    height: 0px;
  }

  .div-evolucao.drenagem {
    height: 92px;
    background-color: #82ea5b;
  }

  .div-evolucao.drenagem.giardino {
    height: 71px;
  }

  .div-evolucao.drenagem.reserva {
    height: 79px;
  }

  .div-evolucao.drenagem.bem-viver {
    height: 96px;
  }

  .div-evolucao.drenagem.girassois {
    height: 95px;
  }

  .div-evolucao.drenagem._100 {
    height: 98%;
  }

  .div-evolucao.drenagem.elvira {
    height: 92px;
  }

  .div-evolucao.drenagem.profeta {
    height: 88px;
  }

  .div-evolucao.drenagem {
    height: 85px;
  }

  .div-evolucao.drenagem.giardino {
    height: 0px;
  }

  .div-evolucao.drenagem.reserva {
    height: 40px;
  }

  .div-evolucao.drenagem.girassois {
    height: 71px;
  }

  .div-evolucao.drenagem.contencao {
    height: 75px;
  }

  .div-evolucao.arealazer {
    height: 77px;
  }

  .div-evolucao.arealazer.giardino {
    height: 0px;
  }

  .div-evolucao.arealazer.reserva {
    height: 62px;
  }

  .div-evolucao.arealazer.bem-viver {
    height: 95px;
  }

  .div-evolucao.arealazer.girassois {
    height: 95px;
  }

  .div-evolucao.arealazer.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.arealazer.santairia {
    height: 87px;
    background-color: #82ea5b;
  }

  .div-evolucao.paisagismo {
    height: 77px;
  }

  .div-evolucao.paisagismo.giardino {
    height: 0px;
  }

  .div-evolucao.paisagismo.reserva {
    height: 62px;
  }

  .div-evolucao.paisagismo.bem-viver {
    height: 95px;
  }

  .div-evolucao.paisagismo.girassois {
    height: 95px;
  }

  .div-evolucao.paisagismo.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.paisagismo.santairia {
    height: 68px;
    background-color: #82ea5b;
  }

  .div-evolucao.paisagismo.regatas {
    height: 91%;
    background-color: #82ea5b;
  }

  .div-evolucao.passeios {
    height: 77px;
  }

  .div-evolucao.passeios.giardino {
    height: 0px;
  }

  .div-evolucao.passeios.reserva {
    height: 62px;
  }

  .div-evolucao.passeios.bem-viver {
    height: 95px;
  }

  .div-evolucao.passeios.girassois {
    height: 95px;
  }

  .div-evolucao.passeios.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.passeios.santairia {
    height: 90px;
    background-color: #82ea5b;
  }

  .div-evolucao.passeios.passeio {
    height: 99%;
    background-color: #82ea5b;
  }

  .div-evolucao.terraplanagemelvira {
    height: 89px;
  }

  .div-evolucao.terraplanagemelvira.giardino {
    height: 71px;
  }

  .div-evolucao.terraplanagemelvira.reserva {
    height: 79px;
  }

  .div-evolucao.terraplanagemelvira.bem-viver {
    height: 96px;
  }

  .div-evolucao.terraplanagemelvira.girassois {
    height: 95px;
  }

  .div-evolucao.terraplanagemelvira.elvira {
    height: 89px;
    background-color: #82ea5b;
  }

  .div-evolucao.terraplanagemelvira.elvira._100 {
    height: 95px;
  }

  .div-evolucao.terraplanagemelvira.itapeva {
    height: 96px;
  }

  .div-evolucao.terraplanagemelvira.profeta {
    height: 90px;
    background-color: #82ea5b;
  }

  .div-evolucao.terraplanagemelvira.profeta._100 {
    height: 95px;
  }

  .div-evolucao.terraplanagem-dunlop {
    height: 80px;
  }

  .div-evolucao.terraplanagem-dunlop.giardino {
    height: 71px;
  }

  .div-evolucao.terraplanagem-dunlop.reserva {
    height: 79px;
  }

  .div-evolucao.terraplanagem-dunlop.bem-viver {
    height: 96px;
  }

  .div-evolucao.terraplanagem-dunlop.girassois {
    height: 95px;
  }

  .div-evolucao.terraplanagem-dunlop.elvira {
    height: 89px;
    background-color: #82ea5b;
  }

  .div-evolucao.terraplanagem-dunlop.elvira._100 {
    height: 95px;
  }

  .div-evolucao.terraplanagem-dunlop.itapeva {
    height: 96px;
  }

  .div-evolucao.terraplanagem-dunlop.profeta {
    height: 90px;
    background-color: #82ea5b;
  }

  .div-evolucao.terraplanagem-dunlop.profeta._100 {
    height: 95px;
  }

  .div-evolucao.drenagem-dunlop {
    height: 74px;
    background-color: #82ea5b;
  }

  .div-evolucao.drenagem-dunlop.giardino {
    height: 71px;
  }

  .div-evolucao.drenagem-dunlop.reserva {
    height: 79px;
  }

  .div-evolucao.drenagem-dunlop.bem-viver {
    height: 96px;
  }

  .div-evolucao.drenagem-dunlop.girassois {
    height: 95px;
  }

  .div-evolucao.drenagem-dunlop._100 {
    height: 95px;
  }

  .div-evolucao.drenagem-dunlop.elvira {
    height: 92px;
  }

  .div-evolucao.drenagem-dunlop.profeta {
    height: 88px;
  }

  .div-evolucao.agua-dunlop {
    height: 57px;
  }

  .div-evolucao.agua-dunlop.giardino {
    height: 0px;
  }

  .div-evolucao.agua-dunlop.reserva {
    height: 94px;
  }

  .div-evolucao.agua-dunlop.bem-viver {
    height: 95px;
  }

  .div-evolucao.agua-dunlop.girassois {
    height: 95px;
  }

  .div-evolucao.agua-dunlop.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.agua-dunlop.itapeva {
    height: 86px;
  }

  .div-evolucao.agua-dunlop.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.agua-dunlop.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.esgoto-dunlop {
    height: 99%;
  }

  .div-evolucao.esgoto-dunlop.giardino {
    height: 0px;
  }

  .div-evolucao.esgoto-dunlop.reserva {
    height: 94px;
  }

  .div-evolucao.esgoto-dunlop.bem-viver {
    height: 95px;
  }

  .div-evolucao.esgoto-dunlop.girassois {
    height: 95px;
  }

  .div-evolucao.esgoto-dunlop.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.esgoto-dunlop.itapeva {
    height: 86px;
  }

  .div-evolucao.esgoto-dunlop.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.esgoto-dunlop.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.arrimo-dunlop {
    height: 100%;
  }

  .div-evolucao.arrimo-dunlop.giardino {
    height: 37px;
  }

  .div-evolucao.arrimo-dunlop.reserva {
    height: 15px;
  }

  .div-evolucao.arrimo-dunlop.bem-viver {
    height: 86px;
  }

  .div-evolucao.arrimo-dunlop.girassois {
    height: 30px;
  }

  .div-evolucao.cercamento-dunlop {
    height: 80%;
  }

  .div-evolucao.cercamento-dunlop.giardino {
    height: 0px;
  }

  .div-evolucao.cercamento-dunlop.reserva {
    height: 40px;
  }

  .div-evolucao.cercamento-dunlop.girassois {
    height: 71px;
  }

  .div-evolucao.reflorestamento-dunlop {
    height: 83px;
  }

  .div-evolucao.reflorestamento-dunlop.giardino {
    height: 0px;
  }

  .div-evolucao.reflorestamento-dunlop.reserva {
    height: 94px;
  }

  .div-evolucao.reflorestamento-dunlop.bem-viver {
    height: 95px;
  }

  .div-evolucao.reflorestamento-dunlop.girassois {
    height: 95px;
  }

  .div-evolucao.reflorestamento-dunlop.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.reflorestamento-dunlop.itapeva {
    height: 86px;
  }

  .div-evolucao.reflorestamento-dunlop.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.reflorestamento-dunlop.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.eletrica-dunlop {
    height: 94%;
  }

  .div-evolucao.eletrica-dunlop.giardino {
    height: 0px;
  }

  .div-evolucao.eletrica-dunlop.reserva {
    height: 94px;
  }

  .div-evolucao.eletrica-dunlop.bem-viver {
    height: 95px;
  }

  .div-evolucao.eletrica-dunlop.girassois {
    height: 95px;
  }

  .div-evolucao.eletrica-dunlop.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.eletrica-dunlop.itapeva {
    height: 86px;
  }

  .div-evolucao.eletrica-dunlop.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.eletrica-dunlop.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.paisagismo-progresso {
    height: 0px;
  }

  .div-evolucao.sinaliza-o {
    height: 45px;
  }

  .div-evolucao.sinaliza-o.giardino {
    height: 12px;
  }

  .div-evolucao.sinaliza-o.bem-viver {
    height: 66px;
  }

  .div-evolucao.sinaliza-o.girassois {
    height: 91px;
  }

  .div-evolucao.arrimo {
    height: 11px;
  }

  .div-evolucao.arrimo.giardino {
    height: 0px;
  }

  .div-evolucao.arrimo.reserva {
    height: 40px;
  }

  .div-evolucao.arrimo.girassois {
    height: 71px;
  }

  .div-evolucao.ciclovia {
    height: 73px;
  }

  .div-evolucao.ciclovia.giardino {
    height: 0px;
  }

  .div-evolucao.ciclovia.reserva {
    height: 94px;
  }

  .div-evolucao.ciclovia.bem-viver {
    height: 95px;
  }

  .div-evolucao.ciclovia.girassois {
    height: 95px;
  }

  .div-evolucao.ciclovia.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.ciclovia.itapeva {
    height: 86px;
  }

  .div-evolucao.ciclovia.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.ciclovia.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.pavimentacao {
    height: 72px;
  }

  .div-evolucao.pavimentacao.giardino {
    height: 0px;
  }

  .div-evolucao.pavimentacao.reserva {
    height: 40px;
  }

  .div-evolucao.pavimentacao.girassois {
    height: 71px;
  }

  .div-evolucao.pavimentacao.contencao {
    height: 75px;
  }

  .div-evolucao.pavimentacaoo {
    height: 0px;
  }

  .div-evolucao.pavimentacaoo.giardino {
    height: 0px;
  }

  .div-evolucao.pavimentacaoo.reserva {
    height: 62px;
  }

  .div-evolucao.pavimentacaoo.bem-viver {
    height: 95px;
  }

  .div-evolucao.pavimentacaoo.girassois {
    height: 95px;
  }

  .div-evolucao.pavimentacaoo.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.pavimentacaoo.elvira._49 {
    height: 49px;
  }

  .div-evolucao.pavimentacaoo.santairia {
    height: 85px;
    background-color: #82ea5b;
  }

  .div-evolucao.pavimentacaoo.agua {
    height: 6px;
  }

  .div-evolucao.pavimentacaoo.vilaprofeta {
    height: 6px;
    background-color: #82ea5b;
  }

  .div-evolucao.pavimentacaoo.dunlop {
    height: 94px;
  }

  .div-evolucao.terraplanagem {
    height: 100%;
  }

  .div-evolucao.terraplanagem.giardino {
    height: 0px;
  }

  .div-evolucao.terraplanagem.reserva {
    height: 40px;
  }

  .div-evolucao.terraplanagem.girassois {
    height: 71px;
  }

  .div-evolucao.terraplanagem.contencao {
    height: 75px;
  }

  .div-evolucao.drenagem {
    height: 98%;
  }

  .div-evolucao.drenagem.giardino {
    height: 0px;
  }

  .div-evolucao.drenagem.reserva {
    height: 40px;
  }

  .div-evolucao.drenagem.girassois {
    height: 71px;
  }

  .div-evolucao.drenagem.contencao {
    height: 75px;
  }

  .div-evolucao.drenagem {
    height: 100%;
  }

  .div-evolucao.drenagem.giardino {
    height: 0px;
  }

  .div-evolucao.drenagem.reserva {
    height: 40px;
  }

  .div-evolucao.drenagem.girassois {
    height: 71px;
  }

  .div-evolucao.drenagem.contencao {
    height: 75px;
  }

  .div-evolucao.agua {
    height: 0px;
  }

  .div-evolucao.agua.giardino {
    height: 0px;
  }

  .div-evolucao.agua.reserva {
    height: 94px;
  }

  .div-evolucao.agua.bem-viver {
    height: 95px;
  }

  .div-evolucao.agua.girassois {
    height: 95px;
  }

  .div-evolucao.agua.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.agua.elvira._92 {
    height: 92px;
  }

  .div-evolucao.agua.elvira._93 {
    height: 93px;
  }

  .div-evolucao.agua.itapeva {
    height: 99%;
  }

  .div-evolucao.agua.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.agua.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.agua.vila-profeta {
    height: 94px;
  }

  .div-evolucao.agua.vila-profeta._95 {
    height: 91px;
  }

  .div-evolucao.sinaliza-ao {
    height: 77px;
  }

  .div-evolucao.sinaliza-ao.giardino {
    height: 0px;
  }

  .div-evolucao.sinaliza-ao.reserva {
    height: 62px;
  }

  .div-evolucao.sinaliza-ao.bem-viver {
    height: 95px;
  }

  .div-evolucao.sinaliza-ao.girassois {
    height: 95px;
  }

  .div-evolucao.sinaliza-ao.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.sinaliza-ao.santairia {
    height: 68px;
    background-color: #82ea5b;
  }

  .div-evolucao.sinaliza-ao.regatas {
    height: 10%;
    background-color: #82ea5b;
  }

  .div-evolucao.terraplanagem {
    height: 99%;
  }

  .div-evolucao.terraplanagem.giardino {
    height: 0px;
  }

  .div-evolucao.terraplanagem.reserva {
    height: 40px;
  }

  .div-evolucao.terraplanagem.girassois {
    height: 71px;
  }

  .div-evolucao.drenagem {
    height: 99%;
  }

  .div-evolucao.drenagem.giardino {
    height: 0px;
  }

  .div-evolucao.drenagem.reserva {
    height: 40px;
  }

  .div-evolucao.drenagem.girassois {
    height: 71px;
  }

  .div-evolucao.drenagem.elvira {
    height: 99%;
  }

  .div-evolucao.agua {
    height: 0px;
  }

  .div-evolucao.agua.giardino {
    height: 0px;
  }

  .div-evolucao.agua.reserva {
    height: 94px;
  }

  .div-evolucao.agua.bem-viver {
    height: 95px;
  }

  .div-evolucao.agua.girassois {
    height: 95px;
  }

  .div-evolucao.agua.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.agua.elvira._92 {
    height: 99%;
  }

  .div-evolucao.agua.elvira._93 {
    height: 99%;
  }

  .div-evolucao.agua.itapeva {
    height: 98%;
  }

  .div-evolucao.agua.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.agua.santairia {
    height: 99%;
    background-color: #82ea5b;
  }

  .div-evolucao.agua.vila-profeta {
    height: 94px;
  }

  .div-evolucao.agua.vila-profeta._95 {
    height: 91px;
  }

  .div-evolucao.agua.ilumina-o {
    height: 98%;
    background-color: #82ea5b;
  }

  .div-evolucao.agua.pavimenta-ao {
    height: 99%;
    background-color: #82ea5b;
  }

  .div-evolucao.paisagismo {
    height: 27%;
  }

  .div-evolucao.paisagismo.giardino {
    height: 12px;
  }

  .div-evolucao.paisagismo.bem-viver {
    height: 66px;
  }

  .div-evolucao.paisagismo.girassois {
    height: 91px;
  }

  .div-evolucao.area-de-lazer {
    height: 49%;
  }

  .div-evolucao.area-de-lazer.giardino {
    height: 0px;
  }

  .div-evolucao.area-de-lazer.reserva {
    height: 40px;
  }

  .div-evolucao.area-de-lazer.girassois {
    height: 71px;
  }

  .div-evolucao.terraplanagem {
    height: 0px;
  }

  .div-evolucao.terraplanagem.giardino {
    height: 0px;
  }

  .div-evolucao.terraplanagem.reserva {
    height: 94px;
  }

  .div-evolucao.terraplanagem.bem-viver {
    height: 95px;
  }

  .div-evolucao.terraplanagem.girassois {
    height: 95px;
  }

  .div-evolucao.terraplanagem.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.terraplanagem.elvira._92 {
    height: 92px;
  }

  .div-evolucao.terraplanagem.elvira._93 {
    height: 99%;
  }

  .div-evolucao.terraplanagem.itapeva {
    height: 98%;
  }

  .div-evolucao.terraplanagem.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.terraplanagem.santairia {
    height: 99%;
    background-color: #82ea5b;
  }

  .div-evolucao.terraplanagem.vila-profeta {
    height: 98%;
  }

  .div-evolucao.terraplanagem.vila-profeta._95 {
    height: 91px;
  }

  .div-evolucao.terraplanagem.ilumina-o {
    height: 98%;
    background-color: #82ea5b;
  }

  .div-evolucao.terraplanagem.pavimenta-ao {
    height: 99%;
    background-color: #82ea5b;
  }

  .div-evolucao.drenagem {
    height: 0px;
  }

  .div-evolucao.drenagem.giardino {
    height: 0px;
  }

  .div-evolucao.drenagem.reserva {
    height: 94px;
  }

  .div-evolucao.drenagem.bem-viver {
    height: 95px;
  }

  .div-evolucao.drenagem.girassois {
    height: 95px;
  }

  .div-evolucao.drenagem.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.drenagem.elvira._92 {
    height: 92px;
  }

  .div-evolucao.drenagem.elvira._93 {
    height: 99%;
  }

  .div-evolucao.drenagem.itapeva {
    height: 98%;
  }

  .div-evolucao.drenagem.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.drenagem.santairia {
    height: 99%;
    background-color: #82ea5b;
  }

  .div-evolucao.drenagem.vila-profeta {
    height: 96%;
  }

  .div-evolucao.drenagem.vila-profeta._95 {
    height: 91px;
  }

  .div-evolucao.drenagem.ilumina-o {
    height: 98%;
    background-color: #82ea5b;
  }

  .div-evolucao.drenagem.pavimenta-ao {
    height: 99%;
    background-color: #82ea5b;
  }

  .div-evolucao.agua {
    height: 0px;
  }

  .div-evolucao.agua.giardino {
    height: 0px;
  }

  .div-evolucao.agua.reserva {
    height: 94px;
  }

  .div-evolucao.agua.bem-viver {
    height: 95px;
  }

  .div-evolucao.agua.girassois {
    height: 95px;
  }

  .div-evolucao.agua.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.agua.elvira._92 {
    height: 92px;
  }

  .div-evolucao.agua.elvira._93 {
    height: 99%;
  }

  .div-evolucao.agua.itapeva {
    height: 98%;
  }

  .div-evolucao.agua.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.agua.santairia {
    height: 99%;
    background-color: #82ea5b;
  }

  .div-evolucao.agua.vila-profeta {
    height: 5%;
  }

  .div-evolucao.agua.vila-profeta._95 {
    height: 91px;
  }

  .div-evolucao.agua.ilumina-o {
    height: 98%;
    background-color: #82ea5b;
  }

  .div-evolucao.agua.pavimenta-ao {
    height: 99%;
    background-color: #82ea5b;
  }

  .div-evolucao.pavimenta-o {
    height: 0px;
  }

  .div-evolucao.pavimenta-o.giardino {
    height: 0px;
  }

  .div-evolucao.pavimenta-o.reserva {
    height: 94px;
  }

  .div-evolucao.pavimenta-o.bem-viver {
    height: 95px;
  }

  .div-evolucao.pavimenta-o.girassois {
    height: 95px;
  }

  .div-evolucao.pavimenta-o.elvira {
    background-color: #82ea5b;
  }

  .div-evolucao.pavimenta-o.elvira._92 {
    height: 92px;
  }

  .div-evolucao.pavimenta-o.elvira._93 {
    height: 99%;
  }

  .div-evolucao.pavimenta-o.itapeva {
    height: 98%;
  }

  .div-evolucao.pavimenta-o.santairia {
    height: 95px;
    background-color: #82ea5b;
  }

  .div-evolucao.pavimenta-o.santairia {
    height: 99%;
    background-color: #82ea5b;
  }

  .div-evolucao.pavimenta-o.vila-profeta {
    height: 2%;
  }

  .div-evolucao.pavimenta-o.vila-profeta._95 {
    height: 55%;
  }

  .div-evolucao.pavimenta-o.ilumina-o {
    height: 98%;
    background-color: #82ea5b;
  }

  .div-evolucao.pavimenta-o.pavimenta-ao {
    height: 99%;
    background-color: #82ea5b;
  }

  .image-7 {
    position: relative;
    z-index: 1;
  }

  .image-7.menor {
    padding-right: 8px;
    padding-left: 8px;
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
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .div-etapa.escondida {
    display: none;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: left;
  }

  .text-block-12 {
    margin-top: 10px;
    font-size: 12px;
    line-height: 1.2;
    text-align: center;
  }

  .bold-text-3 {
    color: #079d56;
    font-size: 16px;
  }

  .bold-text-3.elvira {
    color: #079d56;
  }

  .formulario {
    padding-top: 60px;
    padding-bottom: 60px;
    background-image: url('../images/cta_1.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .formulario.venda {
    background-image: url('../images/cta.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .formulario.giardino {
    background-image: url('../images/formulario.jpg');
  }

  .formulario.reserva {
    background-image: url('../images/cta_2.jpg');
  }

  .formulario.bem-viver {
    background-image: url('../images/cta_3.jpg');
  }

  .formulario.girassois {
    background-image: url('../images/cta_4.jpg');
  }

  .formulario.bem-campos {
    background-image: url('../images/cta_7.jpg');
  }

  .formulario.atlanta {
    background-image: url('../images/cta_5.jpg');
    background-position: 50% 20%;
  }

  .formulario.tulipas {
    background-image: url('../images/cta_8.jpg');
  }

  .formulario.elvira {
    background-image: url('../images/INFRAESTRUTURA.jpg');
    text-align: left;
  }

  .formulario.montemor {
    margin-right: 0px;
    background-image: url('https://urba.com.br/wp-content/uploads/2023/03/632e10bd8d55f525e5b0792d_URBA_RESERVA_MONTE_MOR_RUA_CASAS-1-scaled.jpg');
    text-align: left;
  }

  .columns-8 {
    margin-top: 30px;
  }

  .form-2 {
    margin-top: 30px;
    text-align: center;
  }

  .form-2.venda {
    margin-top: 40px;
  }

  .text-field-2 {
    border-style: none none solid;
    border-width: 1px;
    border-color: #000 #000 #079d56;
    border-radius: 3px;
    background-color: #fff;
    box-shadow: 0 0 12px -3px rgba(0, 0, 0, 0.15);
    color: #8f8f8f;
    font-weight: 300;
  }

  .text-field-2.menor {
    width: 97%;
  }

  .field-label {
    margin-bottom: 0px;
    padding: 8px 0px 8px 12px;
    color: #a5a5a5;
    font-weight: 300;
    text-align: left;
  }

  .radio-button-label {
    color: #079d56;
  }

  .radio-button-field-2 {
    margin-right: 20px;
    padding-top: 8px;
    padding-bottom: 8px;
    float: left;
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
    text-transform: uppercase;
  }

  .submit-button-2:hover {
    background-color: transparent;
    color: #ac41d8;
  }

  .submit-button-2.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #ff8b22, #ffb719);
    color: #fff;
  }

  .submit-button-2.regatas:hover {
    background-image: linear-gradient(45deg, #ffb719, #ff8b22), linear-gradient(45deg, #ff8b22, #ffb719);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .columns-9 {
    margin-bottom: 10px;
  }

  .columns-10 {
    margin-bottom: 10px;
  }

  .ficha-tecnica {
    padding-top: 60px;
    padding-bottom: 60px;
  }

  .list-item {
    margin-bottom: 10px;
    color: #6e6e6e;
    font-size: 12px;
  }

  .columns-11 {
    width: 90%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
  }

  .div-itens-lazer {
    position: absolute;
    left: 0%;
    top: 50%;
    right: 0%;
    bottom: 0%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    height: 0px;
    max-width: 1000px;
    margin-right: auto;
    margin-left: auto;
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
    background-color: hsla(0, 0%, 100%, 0.95);
    box-shadow: 0 0 13px -5px rgba(0, 0, 0, 0.4);
    -webkit-transform: translate(0px, -50%);
    -ms-transform: translate(0px, -50%);
    transform: translate(0px, -50%);
  }

  .text-block-13 {
    padding-bottom: 2px;
    font-weight: 500;
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
    border-right: 1px none #c2c2c2;
  }

  .div-elemento-lazer.last {
    border-right-style: none;
  }

  .div-elemento-lazer.maior {
    width: 170px;
  }

  .text-block-14 {
    margin-top: 10px;
    text-align: center;
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
    justify-content: center;
  }

  .div-elementos._1 {
    margin-top: 0px;
  }

  .bold-text-4 {
    color: #f7287c;
    font-weight: 500;
  }

  .bold-text-4._2 {
    color: #f7287c;
  }

  .bold-text-4._3 {
    color: #793f98;
  }

  .bold-text-4._4 {
    color: #793f98;
  }

  .bold-text-4._5 {
    color: #f7287c;
  }

  .bold-text-4._6 {
    color: #ac41d8;
  }

  .bold-text-4._7 {
    color: #079d56;
  }

  .bold-text-4.lime {
    color: #82ea5b;
  }

  .bold-text-5 {
    color: #ff8b22;
    font-weight: 500;
  }

  .section-texto-sobre {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fff;
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
    text-align: center;
  }

  .email-ri-urba.legenda {
    margin-top: 20px;
    font-size: 13px;
    font-style: italic;
    text-align: center;
  }

  .bold-text-6 {
    font-weight: 500;
  }

  .column-33 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding-right: 0px;
    padding-left: 0px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
  }

  .column-33._2 {
    padding-top: 40px;
  }

  .div-img-sobre {
    width: auto;
    height: auto;
    margin-top: 10px;
    text-align: left;
  }

  .div-img-sobre.venda {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 350px;
    margin-top: 0px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-image: url('../images/slider-empreendimento-03.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .presenca {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f4f4f4;
  }

  .div-estados {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
  }

  .div-estado {
    overflow: hidden;
    width: 250px;
    height: auto;
    margin-right: 10px;
    padding-bottom: 10px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 10px -5px rgba(0, 0, 0, 0.34);
    text-decoration: none;
  }

  .div-block {
    width: 90%;
    margin-right: auto;
    margin-left: auto;
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
    transform: rotate(45deg);
  }

  .div-seta-2.atracao {
    border-right-color: #95bc4c;
    border-bottom-color: #98dd18;
  }

  .duvida-2 {
    width: 90%;
    float: left;
    color: #e48f16;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 500;
  }

  .duvida-2.atracao {
    color: #95bc4c;
  }

  .div-img-estado {
    height: 150px;
    background-image: url('../images/bahia.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .div-img-estado._2 {
    background-image: url('../images/minas.jpg');
  }

  .div-img-estado._3 {
    background-image: url('../images/paraiba.jpg');
  }

  .div-img-estado._4 {
    background-image: url('../images/rio-de-janeiro.jpg');
  }

  .div-img-estado._5 {
    background-image: url('../images/sao-paulo.jpg');
  }

  .heading-8 {
    margin: 15px 10px 5px;
    color: #006b3f;
    font-size: 20px;
    font-weight: 400;
  }

  .list {
    margin-right: 10px;
    margin-left: 10px;
  }

  .list-item-2 {
    margin-bottom: 5px;
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
    text-transform: uppercase;
  }

  .button-5:hover {
    background-color: transparent;
    color: #ac41d8;
  }

  .razoes-vender {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fff;
  }

  .text-block-15 {
    margin-bottom: 60px;
    color: #ff8b22;
    font-size: 16px;
    text-align: center;
  }

  .text-block-15._2 {
    margin-top: 60px;
    margin-bottom: 30px;
    color: #079d56;
    font-size: 18px;
  }

  .text-block-16 {
    text-align: center;
  }

  .passo-a-passo {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f7f7f7;
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
    align-items: flex-start;
  }

  .div-passo {
    position: relative;
    width: 250px;
    margin-right: 30px;
    margin-left: 30px;
    text-align: center;
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
    box-shadow: 0 0 8px -3px rgba(0, 0, 0, 0.5);
  }

  .text-block-17 {
    margin-top: 20px;
    color: #006b3f;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 300;
  }

  .bold-text-7 {
    color: #ff8b22;
    text-transform: uppercase;
  }

  .text-block-18 {
    color: #ff8b22;
    font-size: 40px;
    font-weight: 500;
  }

  .div-camino {
    position: absolute;
    left: 50%;
    top: 25%;
    right: auto;
    bottom: auto;
    width: 0px;
    height: 4px;
    border-radius: 20px;
    background-color: #079d56;
  }

  .heading-9 {
    margin-top: 0px;
    margin-bottom: 15px;
    color: #079d56;
    font-size: 20px;
    font-weight: 500;
  }

  .columns-12 {
    width: 85%;
    margin-top: 60px;
    margin-right: auto;
    margin-left: auto;
  }

  .div-carceristicas-area {
    overflow: hidden;
    min-height: 340px;
    padding: 20px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 5px -3px rgba(0, 0, 0, 0.5);
  }

  .div-carceristicas-area._2 {
    margin-right: 0px;
    margin-left: 0px;
  }

  .paragraph-19 {
    margin-bottom: 20px;
    color: #6e6e6e;
    font-size: 16px;
    line-height: 1.8;
    font-weight: 300;
  }

  .list-2 {
    padding-left: 20px;
    color: #079d56;
  }

  .list-item-3 {
    margin-bottom: 10px;
    font-size: 16px;
  }

  .paragraph-20 {
    width: 70%;
    margin-right: auto;
    margin-left: auto;
    color: #ff8b22;
    font-size: 16px;
    font-weight: 300;
    text-align: center;
  }

  .principais-duvidas {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fcfcfc;
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
    align-items: center;
  }

  .div-principais-duvidas._2 {
    margin-top: 0px;
  }

  .div-principal-duvida {
    width: 300px;
    height: 200px;
    margin-right: 10px;
    margin-left: 10px;
    padding: 20px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 10px -5px rgba(0, 0, 0, 0.4);
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #5f5f5f;
    text-decoration: none;
  }

  .div-principal-duvida:hover {
    background-color: #f7f7f7;
    color: #5e5e5e;
  }

  .div-principal-duvida.oculto {
    display: none;
  }

  .text-block-19 {
    margin-top: 10px;
    margin-bottom: 15px;
    color: #ff8b22;
    font-size: 18px;
    font-weight: 500;
    text-align: center;
  }

  .paragraph-21 {
    color: #079d56;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 300;
    text-align: center;
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
    align-items: center;
  }

  .div-entre-contato._2 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }

  .div-contato {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
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
    text-decoration: none;
  }

  .div-contato:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }

  .text-block-20 {
    color: #fff;
    font-size: 18px;
    font-weight: 300;
    text-align: center;
  }

  .text-block-20._2 {
    margin-top: -5px;
  }

  .bold-text-8 {
    font-size: 14px;
    font-weight: 300;
  }

  .portal-financeiro {
    overflow: hidden;
    height: 0px;
    padding-top: 0px;
    padding-bottom: 0px;
    background-color: #f7f7f7;
  }

  .text-block-21 {
    color: #6e6e6e;
    font-size: 16px;
  }

  .text-block-21.vizinho {
    width: 50%;
    margin-right: auto;
    margin-bottom: 20px;
    margin-left: auto;
    line-height: 1.5;
    text-align: center;
  }

  .text-block-21._2 {
    margin-bottom: 20px;
  }

  .list-3 {
    margin-top: 20px;
    padding-bottom: 60px;
    padding-left: 15px;
  }

  .link-3 {
    display: inline;
    padding-right: 5px;
    padding-left: 5px;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #ff8b22;
    text-decoration: none;
  }

  .link-3:hover {
    background-color: #ff8b22;
    color: #fff;
    font-weight: 300;
  }

  .list-item-4 {
    margin-bottom: 10px;
    color: #ff8b22;
    line-height: 1.5;
  }

  .sobre-meu-lote {
    overflow: hidden;
    height: 0px;
    background-color: #f7f7f7;
  }

  .suporte {
    overflow: hidden;
    height: 0px;
    background-color: #f7f7f7;
  }

  .duvidas-frequentes {
    overflow: hidden;
    height: 0px;
    background-color: #f7f7f7;
  }

  .vizinho-premiado {
    overflow: hidden;
    height: 0px;
    background-color: #f7f7f7;
  }

  .text-block-22 {
    margin-bottom: 20px;
    color: #ff8b22;
    font-size: 18px;
    font-weight: 500;
  }

  .paragraph-22 {
    margin-top: 10px;
    color: #565656;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 300;
  }

  .columns-13 {
    width: 80%;
    margin-right: auto;
    margin-left: auto;
  }

  .sobre-vizinho-premiado {
    min-height: 280px;
    padding: 20px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 10px -4px rgba(0, 0, 0, 0.5);
  }

  .text-block-23 {
    margin-top: 40px;
    margin-bottom: 20px;
    color: #793f98;
    font-size: 16px;
    text-align: center;
  }

  .div-button {
    text-align: center;
  }

  .div-button._2 {
    width: 60%;
    margin: 20px auto;
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
    text-transform: uppercase;
  }

  .button-6:hover {
    background-color: transparent;
    color: #ac41d8;
  }

  .heading-10 {
    margin-top: 60px;
    color: #079d56;
    font-size: 20px;
    font-weight: 500;
    text-align: center;
  }

  .paragraph-23 {
    color: #6e6e6e;
    font-size: 16px;
    text-align: center;
  }

  .div-forms-indicacao {
    width: 80%;
    margin: 20px auto 60px;
    padding: 20px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 6px -2px rgba(0, 0, 0, 0.3);
  }

  .field-label-2 {
    margin-bottom: 10px;
    padding-left: 10px;
    color: grey;
    font-weight: 400;
    text-align: left;
  }

  .field-label-2._2 {
    margin-top: 20px;
    text-align: left;
  }

  .form-3 {
    text-align: center;
  }

  .marketplace {
    overflow: hidden;
    height: 0px;
    background-color: #f7f7f7;
  }

  .paragraph-24 {
    width: 70%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    font-size: 16px;
    line-height: 1.8;
    font-weight: 300;
    text-align: center;
  }

  .div-filtros-busca {
    width: 70%;
    margin: 20px auto;
  }

  .div-parceiros {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 70%;
    margin-right: auto;
    margin-bottom: 20px;
    margin-left: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .div-parceiros.last {
    padding-bottom: 60px;
  }

  .div-marca-parceiros {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 200px;
    height: 100px;
    margin-right: 10px;
    margin-left: 10px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 5px;
    background-color: #fff;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }

  .div-marca-parceiros:hover {
    -webkit-filter: none;
    filter: none;
  }

  .section-map {
    padding-top: 60px;
    padding-bottom: 80px;
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
    text-transform: capitalize;
  }

  .button-7:hover {
    background-color: transparent;
    color: #ff8b22;
  }

  .columns-14 {
    width: 80%;
    margin-top: 60px;
    margin-right: auto;
    margin-left: auto;
  }

  .column-35 {
    padding-top: 2px;
  }

  .column-36 {
    padding-top: 2px;
  }

  .column-37 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .div-lojas {
    overflow: hidden;
    width: 90%;
    height: 0px;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
  }

  .div-loja {
    margin-top: 20px;
    padding: 10px 10px 15px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 10px -3px rgba(0, 0, 0, 0.15);
  }

  .div-loja._1 {
    margin-top: 10px;
  }

  .text-block-24 {
    padding-bottom: 5px;
    padding-left: 5px;
    border-bottom: 1px solid #ff8b22;
    color: #079d56;
    font-size: 18px;
    font-weight: 500;
  }

  .endereco {
    margin-top: 15px;
    padding-left: 5px;
    color: #6e6e6e;
  }

  .telefone {
    margin-top: 5px;
    padding-left: 5px;
    color: #6e6e6e;
    font-weight: 300;
  }

  .heading-11 {
    margin-top: 60px;
    font-size: 18px;
    font-weight: 400;
    text-align: center;
  }

  .list-item-5 {
    margin-bottom: 10px;
    color: #565656;
    text-align: left;
    list-style-type: lower-alpha;
  }

  .list-4 {
    padding-left: 20px;
  }

  .form-4 {
    width: 40%;
    margin-right: auto;
    margin-left: auto;
  }

  .div-explicacao {
    position: absolute;
    left: 0%;
    top: auto;
    right: 0%;
    bottom: 0%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    height: 0px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 5px;
    background-color: hsla(0, 0%, 100%, 0.95);
  }

  .paragraph-25 {
    margin: 20px;
    color: #079d56;
    font-size: 16px;
    line-height: 1.5;
    text-align: center;
  }

  .div-lightbox-andamento {
    margin-top: 40px;
    text-align: center;
  }

  .text-block-25 {
    padding: 9px 35px;
    border-style: solid;
    border-width: 1px;
    border-color: #ac41d8;
    border-radius: 5px;
    background-color: #ac41d8;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
  }

  .text-block-25:hover {
    background-color: transparent;
    color: #ac41d8;
  }

  .lightbox-link-6 {
    text-decoration: none;
  }

  .div-duvidas {
    margin-top: 5px;
    margin-bottom: 0px;
  }

  .div-duvidas.last {
    padding-bottom: 60px;
  }

  .duvida-frequente {
    margin-bottom: 10px;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    cursor: pointer;
  }

  .duvida-frequente:hover {
    -webkit-transform: translate(10px, 0px);
    -ms-transform: translate(10px, 0px);
    transform: translate(10px, 0px);
  }

  .duvida-frequente.last {
    margin-bottom: 60px;
  }

  .text-block-26 {
    display: inline;
    margin-right: 20px;
    float: left;
    color: #ff8b22;
    font-weight: 700;
  }

  .text-block-27 {
    display: inline;
    color: #079d56;
    font-size: 16px;
    font-weight: 500;
  }

  .div-perguntas {
    overflow: hidden;
    height: 0px;
  }

  .div-block-2 {
    height: 1px;
  }

  .columns-15 {
    display: none;
  }

  .text-block-28 {
    margin-bottom: 20px;
    color: #6e6e6e;
    font-size: 12px;
    text-align: center;
  }

  .select-field-2 {
    background-color: #fff;
  }

  .multimidia {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f8f8f8;
  }

  .multimidia.giardino {
    display: none;
  }

  .multimidia.reserva {
    display: none;
  }

  .multimidia.bem-viver-campos {
    display: none;
  }

  .multimidia.elvira {
    display: block;
  }

  .div-midia {
    overflow: hidden;
    width: 720px;
    height: auto;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    border-radius: 10px;
    box-shadow: 0 0 8px -4px rgba(0, 0, 0, 0.5);
  }

  .contact {
    height: 800px;
    padding-top: 100px;
    background-image: url('../images/hero_v2.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .col-contato {
    position: relative;
    top: 50%;
    -webkit-transform: translate(0px, -50%);
    -ms-transform: translate(0px, -50%);
    transform: translate(0px, -50%);
  }

  .div-forms-contato {
    padding: 40px 20px 20px;
    border-radius: 10px;
    background-color: #fff;
  }

  .heading-12 {
    font-weight: 500;
    text-align: center;
    text-transform: capitalize;
  }

  .heading-13 {
    width: 60%;
    color: #6e6e6e;
    font-size: 40px;
    line-height: 1.3;
    font-weight: 300;
  }

  .paragraph-26 {
    width: 60%;
    color: #ff8b22;
    font-size: 18px;
    line-height: 1.6;
  }

  .textarea {
    min-height: 150px;
    margin-top: 20px;
    border-style: solid;
    border-width: 1px;
    border-color: #079d56;
    border-radius: 5px;
  }

  .form-5 {
    text-align: center;
  }

  .select-field-3 {
    margin-bottom: 15px;
  }

  .nav-link {
    padding-top: 10px;
    padding-bottom: 8px;
    border-bottom: 2px solid transparent;
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    color: #079d56;
    font-weight: 400;
    letter-spacing: 0.2px;
  }

  .nav-link:hover {
    border-bottom: 2px solid #ff8b22;
  }

  .nav-link.w--current {
    border-bottom-color: #ff8b22;
    color: #006b3f;
  }

  .slide-4 {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/slider-empreendimento-04.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/slider-empreendimento-04.jpg');
    background-position: 0px 0px, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .escolha-cidade {
    margin-top: 20px;
    border: 1px none #000;
    background-color: #fff;
    box-shadow: 0 5px 15px -3px rgba(0, 107, 63, 0.25);
    color: #ff8b22;
  }

  .escolha-cidade.lojas {
    margin-top: 0px;
  }

  .escolha-cidade.motivo-contato {
    margin-top: 0px;
  }

  .escolha-cidade.uf {
    margin-top: 0px;
  }

  .bold-text-9 {
    color: #079d56;
    font-weight: 600;
  }

  .div-block-3 {
    position: absolute;
    left: 0%;
    top: auto;
    right: auto;
    bottom: 0%;
    z-index: -1;
    width: 600px;
    height: 600px;
    background-image: url('../images/pai-filho_1.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .bold-text-10 {
    color: #fff;
    font-weight: 600;
  }

  .bold-text-11 {
    color: #fff;
    font-weight: 600;
  }

  .destaque-h2-laranja {
    color: #079d56;
    font-weight: 600;
  }

  .destaque-h2-laranja.lime {
    color: #82ea5b;
  }

  .destaque-h2-laranja.roxo {
    color: #793f98;
  }

  .destaque-h2-laranja.itapeva {
    color: #ac41d8;
    text-shadow: none;
  }

  .destaque-h2-laranja.elvira {
    color: #079d56;
  }

  .destaque-h2-laranja.vilaprofeta {
    color: #ff8b22;
  }

  .destaque-h2-laranja.dunlop {
    color: #ff8b22;
  }

  .destaque-h2-laranja.mm-lan {
    color: #079d56;
  }

  .bold-text-12 {
    color: #006b3f;
    font-weight: 600;
  }

  .bold-text-13 {
    font-weight: 600;
  }

  .bold-text-14 {
    font-weight: 600;
  }

  .bold-text-15 {
    color: #006b3f;
  }

  .contato-imediato-mobile {
    position: fixed;
    left: auto;
    top: 0%;
    right: 0%;
    bottom: 0%;
    z-index: 5;
    display: none;
    width: 100px;
    height: 100vh;
    padding-top: 100px;
    padding-right: 20px;
    padding-left: 20px;
  }

  .bold-text-16 {
    color: #ff8b22;
  }

  .column-39 {
    padding-right: 0px;
    padding-left: 20px;
  }

  .bold-text-17 {
    color: #ff8b22;
  }

  .bold-text-18 {
    color: #82ea5b;
    font-weight: 600;
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
    justify-content: center;
  }

  .bold-text-19 {
    color: #ff8b22;
  }

  .bold-text-20 {
    color: #ff8b22;
  }

  .bold-text-21 {
    color: #ff8b22;
  }

  .bold-text-22 {
    color: #ff8b22;
  }

  .bold-text-23 {
    color: #82ea5b;
    font-weight: 500;
  }

  .link-4 {
    color: #ac41d8;
    font-weight: 500;
    text-decoration: underline;
  }

  .bold-text-24 {
    color: #ff8b22;
  }

  .bold-text-25 {
    color: #ff8b22;
  }

  .text-field-3 {
    border-radius: 100px;
    color: #006b3f;
    font-weight: 400;
    text-align: center;
  }

  .container {
    height: 100%;
    max-width: 1280px;
    padding-right: 10px;
    padding-left: 10px;
  }

  .h3-form-news {
    margin-top: 10px;
    margin-bottom: 20px;
    color: #6e6e6e;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 300;
    text-align: center;
  }

  .success-message {
    padding-right: 10px;
    padding-left: 10px;
    background-color: transparent;
  }

  .link-block-3 {
    margin-top: 30px;
    margin-left: 60px;
    padding-top: 5px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
  }

  .link-block-3:hover {
    -webkit-filter: none;
    filter: none;
    -webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    transform: scale(1.3);
  }

  .nav-link-2 {
    margin-top: 30px;
    padding-top: 10px;
    padding-bottom: 5px;
    border-bottom: 2px solid transparent;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #079d56;
    font-weight: 400;
  }

  .nav-link-2:hover {
    border-bottom: 2px solid #ff8b22;
    -webkit-transform: translate(-10px, 0px);
    -ms-transform: translate(-10px, 0px);
    transform: translate(-10px, 0px);
  }

  .nav-link-2.w--current {
    border-bottom-color: #ff8b22;
    color: #006b3f;
  }

  .link-block-2 {
    margin-top: 20px;
  }

  .nav-menu-2 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .dropdown-news {
    margin-top: 30px;
    margin-left: 60px;
  }

  .text-block-29 {
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 0.3px;
  }

  .drop-form-news.w--open {
    position: absolute;
    width: 250px;
    margin-top: 15px;
    margin-left: -20px;
    padding: 20px 10px 10px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 6px -2px rgba(0, 0, 0, 0.3);
  }

  .dropdown-button {
    padding: 10px 20px;
    border-radius: 100px;
    background-color: #ac41d8;
    box-shadow: 0 5px 15px -5px #ac41d8;
    -webkit-transition: opacity 250ms ease-in;
    transition: opacity 250ms ease-in;
    font-weight: 700;
  }

  .dropdown-button:hover {
    box-shadow: 0 5px 20px -1px #ac41d8;
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
  }

  .text-block-30 {
    color: #ac41d8;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 400;
  }

  .form-block-2 {
    margin-bottom: 0px;
  }

  .seta-drop {
    position: absolute;
    left: 50%;
    top: 0%;
    right: 0%;
    bottom: auto;
    width: 25px;
    height: 25px;
    margin-top: -10px;
    border-radius: 5px;
    background-color: #fff;
    -webkit-transform: translate(-50%, 0px) rotate(45deg);
    -ms-transform: translate(-50%, 0px) rotate(45deg);
    transform: translate(-50%, 0px) rotate(45deg);
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
    font-size: 14px;
  }

  .submit-button-3:hover {
    background-color: transparent;
    color: #ff8b22;
  }

  .navbar-2 {
    position: fixed;
    width: 100%;
    height: 120px;
    padding-top: 10px;
    border-bottom: 2px solid transparent;
    background-color: #fff;
  }

  .navbar-2.interna {
    border-bottom-color: #ff8b22;
  }

  .titulo-post-anterior {
    margin-top: 0px;
    border-bottom: 1px solid #079d56;
    color: #6e6e6e;
    font-size: 18px;
    font-weight: 400;
  }

  .div-busca {
    overflow: hidden;
    height: 0px;
    background-color: #006b3f;
  }

  .autor {
    margin-top: 5px;
    float: left;
    color: #7a7a7a;
  }

  .autor.relacionados {
    margin-top: 15px;
    margin-left: 10px;
  }

  .autor.interna {
    margin-top: 15px;
  }

  .text-field-4 {
    margin-bottom: 0px;
    border: 1.3px solid transparent;
    border-radius: 100px;
  }

  .heading-14 {
    padding-left: 10px;
    border-bottom: 1px none #31d2cc;
    color: #6e6e6e;
    font-size: 30px;
    font-weight: 200;
  }

  .button-8 {
    padding-top: 5px;
    padding-bottom: 4px;
    float: right;
    border-style: solid;
    border-width: 1px;
    border-color: #ff8b22;
    border-radius: 100px;
    background-color: transparent;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #ff8b22;
    font-weight: 300;
  }

  .button-8:hover {
    background-color: #ff8b22;
    color: #fff;
  }

  .slider-3 {
    height: auto;
    padding-bottom: 70px;
    background-color: transparent;
  }

  .categoria {
    position: absolute;
    left: 0%;
    top: 0%;
    right: auto;
    bottom: auto;
    margin-top: 20px;
    margin-left: 20px;
    padding: 5px 10px 3px;
    border: 2px solid #fff;
    border-radius: 100px;
    background-color: transparent;
    color: #fff;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 0.5px;
    text-transform: uppercase;
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
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/post-baixo-01.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/post-baixo-01.jpg');
    background-position: 0px 0px, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
    box-shadow: 0 0 15px -5px rgba(0, 0, 0, 0.5);
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    text-decoration: none;
  }

  .div-destaque-lateral:hover {
    -webkit-transform: scale(1.01);
    -ms-transform: scale(1.01);
    transform: scale(1.01);
  }

  .div-destaque-lateral._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/post-baixo-03.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/post-baixo-03.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .div-destaque-lateral._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/post-destaque-lateral.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/post-destaque-lateral.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .div-destaque-lateral._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/post-baixo-02.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/post-baixo-02.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .post-anterior {
    margin-top: 20px;
    padding: 10px 20px;
    border-radius: 5px;
    box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.1);
  }

  .heading-15 {
    width: 80%;
    margin-bottom: 0px;
    color: #fff;
    font-weight: 500;
    text-decoration: none;
  }

  .heading-15._02 {
    width: 100%;
    font-size: 28px;
    line-height: 1.3;
  }

  .dvi-cta {
    width: 280px;
    height: 420px;
    margin-top: 30px;
    border-style: solid;
    border-width: 2px;
    border-color: #079d56;
    border-radius: 10px;
    background-image: url('../images/banner-lateral.png');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .dvi-cta.home {
    width: 400px;
    height: 600px;
    border-style: solid;
    border-width: 2px;
    border-color: #079d56;
    background-image: url('../images/banner-lateral.png');
  }

  .data-publicacao {
    margin-top: 5px;
    margin-left: 20px;
    padding-left: 20px;
    float: left;
    border-left: 1px solid #7a7a7a;
    color: #7a7a7a;
    font-size: 12px;
  }

  .data-publicacao.interna {
    margin-top: 15px;
  }

  .data-publicacao.relacionados {
    margin-top: 0px;
    margin-left: 10px;
    padding-left: 0px;
    clear: left;
    border-left-style: none;
  }

  .columns-16 {
    margin-top: 40px;
    padding-top: 40px;
    border-top: 1px solid #ff8b22;
  }

  .div-ad {
    height: 250px;
    margin-top: 20px;
    border-radius: 10px;
    background-image: url('../images/banner-superior.jpg');
    background-position: 50% 50%;
    background-size: cover;
  }

  .section-posts {
    position: relative;
    padding-top: 120px;
    padding-bottom: 60px;
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
    color: #82ea5b;
  }

  .submit-button-4:hover {
    background-color: #82ea5b;
    color: #006b3f;
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
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/post-destaque.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/post-destaque.jpg');
    background-position: 0px 0px, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
    box-shadow: 0 0 15px -5px rgba(0, 0, 0, 0.5);
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    text-decoration: none;
  }

  .div-post-destaque:hover {
    -webkit-transform: scale(1.01);
    -ms-transform: scale(1.01);
    transform: scale(1.01);
  }

  .grid-2 {
    margin-top: 20px;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
  }

  .column-48 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding-right: 0px;
    padding-left: 0px;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
  }

  .grid {
    margin-top: 20px;
    -ms-grid-columns: 2fr 1fr;
    grid-template-columns: 2fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
  }

  .container-padrao-2 {
    height: 100%;
    max-width: 1280px;
    margin-right: auto;
    margin-left: auto;
    padding-right: 10px;
    padding-left: 10px;
  }

  .slide-5 {
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
  }

  .column-2 {
    padding-right: 10px;
    padding-left: 0px;
  }

  .form-block-3 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    margin-bottom: 0px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .bold-text-26 {
    color: #079d56;
    font-weight: 500;
  }

  .img-autor {
    margin-right: 10px;
    float: left;
    border-radius: 100px;
  }

  .post-relacionado {
    position: relative;
    overflow: hidden;
    width: 300px;
    height: 250px;
    margin-right: 10px;
    padding-bottom: 40px;
    border-radius: 10px;
    box-shadow: 0 0 6px -3px rgba(0, 0, 0, 0.5);
  }

  .post-relacionado.last {
    margin-right: 0px;
  }

  .link-block {
    margin-right: 10px;
  }

  .div-busca-2 {
    overflow: hidden;
    height: 0px;
    background-color: #33c;
  }

  .heading-16 {
    padding-left: 10px;
    border-bottom: 1px none #31d2cc;
    font-family: Montserrat, sans-serif;
    color: #33c;
    font-size: 30px;
    font-weight: 600;
  }

  .heading-16.interna {
    margin-top: 60px;
    padding-left: 5px;
    color: #6e6e6e;
    font-size: 26px;
    font-weight: 300;
  }

  .heading-16.relacionados {
    border-bottom-style: solid;
    border-bottom-color: #ff8b22;
    color: #6e6e6e;
    font-size: 26px;
    font-weight: 300;
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
    font-family: Montserrat, sans-serif;
    color: #31d2cc;
    font-weight: 300;
  }

  .button-9:hover {
    background-color: #31d2cc;
    color: #fff;
  }

  .button-9.relacionados {
    position: absolute;
    left: auto;
    top: auto;
    right: 0%;
    bottom: 0%;
    margin-right: 5px;
    margin-bottom: 15px;
    padding-right: 10px;
    padding-left: 10px;
    float: none;
    border-color: #ff8b22;
    color: #ff8b22;
  }

  .button-9.relacionados:hover {
    background-color: #ff8b22;
    color: #fff;
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
    letter-spacing: 0.2px;
  }

  .heading-17 {
    margin-top: 10px;
    color: #006b3f;
    font-size: 50px;
    line-height: 1.1;
    font-weight: 500;
  }

  .paragraph-27 {
    width: 100%;
    margin-top: 25px;
    font-family: Roboto, sans-serif;
    color: #929292;
    font-size: 20px;
    line-height: 1.5;
    font-weight: 300;
  }

  .text-block-31 {
    color: #ff8b22;
    font-weight: 600;
  }

  .column-4 {
    padding-right: 10px;
    padding-left: 0px;
    border-right: 1px solid #e9e9e9;
  }

  .column-3 {
    padding-right: 0px;
    padding-left: 25px;
  }

  .heading-18 {
    width: 80%;
    margin-bottom: 0px;
    color: #fff;
    text-decoration: none;
  }

  .heading-18._02 {
    width: 100%;
    font-size: 28px;
    line-height: 1.3;
  }

  .heading-18._02.relacionado {
    margin-top: 0px;
    font-size: 16px;
    font-weight: 500;
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
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/post-destaque-lateral.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/post-destaque-lateral.jpg');
    background-position: 0px 0px, 50% 20%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .div-img-postrelacionado._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/post-baixo-03.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/post-baixo-03.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .div-img-postrelacionado._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/post-baixo-02.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/post-baixo-02.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .content-cta {
    width: 80%;
    margin-top: 80px;
    margin-right: auto;
    margin-left: auto;
  }

  .list-item-6 {
    margin-bottom: 15px;
    padding-bottom: 5px;
    padding-left: 5px;
    border-bottom: 1px solid #ff8b22;
    color: #6e6e6e;
    font-size: 16px;
    line-height: 1.4;
    font-weight: 400;
  }

  .section {
    padding-top: 120px;
    padding-bottom: 60px;
  }

  .submit-button-5 {
    padding-right: 35px;
    padding-left: 35px;
    border: 1.3px solid #fff;
    border-radius: 100px;
    background-color: transparent;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
  }

  .submit-button-5:hover {
    background-color: #fff;
    color: #33c;
  }

  .list-6 {
    margin-top: 20px;
  }

  .div-autor-data {
    margin-top: 20px;
  }

  .link-5 {
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    color: #565656;
    font-weight: 300;
    text-decoration: none;
  }

  .link-5:hover {
    color: #079d56;
  }

  .div-img-postinterna {
    width: 80%;
    height: 500px;
    margin-right: auto;
    margin-left: auto;
    border-radius: 10px;
    background-image: url('../images/casal-com-nova-casa.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .div-img-postinterna._2 {
    background-image: url('../images/urba-2.jpg');
  }

  .div-img-postinterna._3 {
    background-image: url('../images/Guarita.jpg');
  }

  .posts-relacionados {
    margin-top: 80px;
    margin-bottom: 60px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .text-block-32 {
    margin-bottom: 10px;
    color: #079d56;
  }

  .heading-19 {
    width: 90%;
    margin-top: 0px;
    margin-bottom: 20px;
    font-family: Poppins, sans-serif;
    color: #079d56;
    font-weight: 300;
  }

  .heading-19._2 {
    font-size: 32px;
    line-height: 36px;
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
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .posts {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 20px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .secao-material-destaque {
    height: auto;
    padding-top: 120px;
    border-bottom: 1px none #b30404;
    background-color: #fff;
  }

  .conteiner-padrao {
    position: relative;
    display: block;
    overflow: hidden;
    max-width: 1280px;
    margin-top: 0px;
    margin-right: auto;
    margin-left: auto;
    padding-right: 10px;
    padding-left: 10px;
  }

  .imagem-material-destque {
    width: 340px;
    height: 340px;
    margin-top: 30px;
    margin-right: 20px;
    float: left;
    background-image: url('../images/Livro.png');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .titulo-material-destaque {
    margin-top: 80px;
    margin-bottom: 25px;
    margin-left: 0px;
    padding-right: 25px;
    padding-bottom: 5px;
    float: left;
    border-bottom: 2px solid #ff8b22;
    color: #006b3f;
    font-weight: 400;
  }

  .paragraph-3 {
    width: 65%;
    margin-bottom: 50px;
    float: left;
    color: #7a7a7a;
    font-size: 16px;
    line-height: 1.6;
    font-weight: 400;
  }

  .botao-materiais {
    padding-right: 25px;
    padding-bottom: 8px;
    padding-left: 25px;
    float: left;
    border-style: solid;
    border-width: 1px;
    border-color: #793f98;
    border-radius: 100px;
    background-color: transparent;
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;
    color: #793f98;
    font-weight: 500;
  }

  .botao-materiais:hover {
    border-style: solid;
    border-width: 1px;
    border-color: #793f98;
    background-color: #793f98;
    color: #fff;
  }

  .botao-materiais:active {
    background-color: #ac41d8;
    color: #fff;
  }

  .conteiner-padrao-2 {
    position: relative;
    display: block;
    overflow: hidden;
    max-width: 1280px;
    margin-top: 0px;
    margin-right: auto;
    margin-left: auto;
    padding-right: 20px;
    padding-left: 20px;
  }

  .conteiner-padrao-2.selecao-categoria-material {
    overflow: visible;
    padding-right: 20px;
    padding-left: 20px;
  }

  .dropdown-link {
    width: 90%;
    margin-left: 20px;
    border-style: none solid solid;
    border-width: 1px;
    border-color: #f63 #006b3f #006b3f;
    background-color: hsla(0, 0%, 100%, 0.95);
    color: #006b3f;
  }

  .dropdown-link:hover {
    color: #ff8b22;
  }

  .pai-dropdown-categoria-materiais {
    width: 95%;
    margin-top: 30px;
    border: 1px solid #fff;
    border-radius: 100px;
    color: #fff;
  }

  .text-block-33 {
    color: #fff;
    font-size: 18px;
    font-weight: 300;
    text-align: left;
  }

  .campo-pesquisa {
    width: 90%;
    margin-top: 0px;
    margin-bottom: 0px;
    float: left;
    border: 1px none #000;
  }

  .campo-pesquisa:focus {
    border-bottom: 1px solid #31d2cc;
  }

  .image-8 {
    margin-top: 0px;
    margin-left: 0px;
    padding: 5px;
    float: right;
    cursor: pointer;
  }

  .dropdown-categoria {
    width: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
    color: #fff;
    font-weight: 300;
  }

  .icon-4 {
    color: #fff;
  }

  .dropdown-list {
    background-color: transparent;
  }

  .dropdown-list.w--open {
    margin-top: -5px;
  }

  .form-block-4 {
    margin-top: 30px;
    border: 1px solid transparent;
  }

  .coluna-busca {
    padding-top: 0px;
    padding-left: 0px;
    border-right: 1px none #000;
  }

  .busca-materiais {
    padding-bottom: 15px;
    border-bottom: 1px none #b30404;
    background-color: #079d56;
  }

  .colunas-materiais {
    height: auto;
    margin-bottom: 40px;
  }

  .imagem-material-segundario {
    height: 350px;
    background-color: #fff;
    background-image: url('../images/Livro.png');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .titulo-categoria-materiais {
    margin-bottom: 20px;
    padding-top: 15px;
    padding-bottom: 5px;
    padding-left: 20px;
    border-bottom: 2px solid #079d56;
    color: #ff8b22;
    font-size: 25px;
    font-weight: 300;
  }

  .coluna-individual-material {
    height: 100%;
    padding-right: 20px;
    padding-left: 20px;
  }

  .botao-material-secundario {
    position: static;
    left: 0px;
    right: 0px;
    bottom: 0px;
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
    text-transform: uppercase;
  }

  .botao-material-secundario:hover {
    border-style: solid;
    border-width: 1px;
    border-color: #31d2cc;
    background-color: #793f98;
    color: #fff;
  }

  .botao-material-secundario:active {
    background-color: #ac41d8;
    color: #fff;
  }

  .titulo-material-secundario {
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 2px solid #ff8b22;
    color: #006b3f;
    font-size: 20px;
    line-height: 25px;
    font-weight: 400;
    text-align: left;
  }

  .texto-material {
    margin-bottom: 20px;
    color: #7a7a7a;
    line-height: 1.5;
  }

  .bold-text-27 {
    display: inline-block;
    height: 60px;
    padding-right: 10px;
    padding-left: 10px;
    border-bottom: 2px solid transparent;
    background-color: transparent;
    font-weight: 500;
  }

  .bold-text-28 {
    color: #ff8b22;
  }

  .div-direcional-galeria {
    background-image: url('../images/arrow.png');
    background-position: 50% 50%;
    background-size: 150px;
    background-repeat: no-repeat;
  }

  .image-9 {
    position: absolute;
    left: auto;
    top: auto;
    right: 0%;
    bottom: 0%;
    z-index: 2;
    margin-right: -80px;
  }

  .image-9.dunlop {
    margin-right: 0px;
  }

  .link-6 {
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #6e6e6e;
    text-decoration: underline;
  }

  .link-6:hover {
    color: #ac41d8;
  }

  .div-block-4 {
    margin-top: 10px;
  }

  .image-10 {
    position: absolute;
    left: 0%;
    top: 0%;
    right: auto;
    bottom: 0%;
    margin-top: 2px;
    margin-left: 30px;
  }

  .image-10._2 {
    margin-top: 5px;
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
    border-right: 2px solid #ff8b22;
  }

  .column-49._2 {
    border-right-color: #006b3f;
    background-color: #82ea5b;
  }

  .column-49._2.interna {
    border-right-color: #fafafa;
    background-color: #ebebeb;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
  }

  .column-49._2.interna:hover {
    background-color: #ff8b22;
  }

  .text-block-34 {
    width: 100%;
    margin-top: 10px;
    color: #6e6e6e;
    text-align: left;
  }

  .text-block-34._2 {
    width: 95%;
    margin-top: 40px;
    font-size: 12px;
  }

  .list-item-7 {
    margin-bottom: 20px;
    color: #565656;
    font-size: 16px;
    font-weight: 300;
  }

  .bold-text-29 {
    color: #ff8b22;
    font-weight: 500;
  }

  .list-7 {
    width: 60%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
  }

  .text-block-35 {
    position: absolute;
    left: auto;
    top: 0%;
    right: 0%;
    bottom: auto;
    margin-top: 10px;
    margin-right: 10px;
    color: #fff;
    font-weight: 300;
    text-shadow: 0 0 5px rgba(0, 0, 0, 0.7);
  }

  .gradient {
    height: 100%;
    background-image: linear-gradient(225deg, #006b3f, transparent 23%);
  }

  .captacao-newsletter {
    margin-top: 80px;
    margin-right: auto;
    margin-left: auto;
  }

  .heading-20 {
    margin-top: 0px;
    margin-bottom: 20px;
    color: #793f98;
    font-weight: 500;
    text-align: center;
  }

  .text-field-5 {
    width: 85%;
    float: left;
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
  }

  .submit-button-6 {
    width: 15%;
    float: right;
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    background-color: #079d56;
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    text-transform: uppercase;
  }

  .submit-button-6:hover {
    background-color: #31b300;
  }

  .form-6 {
    width: 60%;
    margin-right: auto;
    margin-left: auto;
  }

  .image-12 {
    margin-right: 10px;
  }

  .slider-4 {
    height: auto;
    padding-bottom: 60px;
    background-color: transparent;
  }

  .icon-5 {
    color: #079d56;
    font-size: 24px;
  }

  .icon-6 {
    color: #079d56;
    font-size: 24px;
  }

  .hero-landing {
    height: 720px;
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(3, 3, 3, 0.5)), color-stop(57%, rgba(49, 49, 49, 0))), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/hero_v2_3.jpg');
    background-image: linear-gradient(90deg, rgba(3, 3, 3, 0.5), rgba(49, 49, 49, 0) 57%), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/hero_v2_3.jpg');
    background-position: 0px 0px, 0px 0px, 50% 50%;
    background-size: auto, auto, cover;
  }

  .hero-landing.sta-iria {
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/hero_3.jpg');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/hero_3.jpg');
    background-position: 0px 0px, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .hero-landing.regatas {
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(3, 3, 3, 0.5)), color-stop(57%, rgba(49, 49, 49, 0))), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/hero_comercial.jpg');
    background-image: linear-gradient(90deg, rgba(3, 3, 3, 0.5), rgba(49, 49, 49, 0) 57%), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/hero_comercial.jpg');
    background-position: 0px 0px, 0px 0px, 50% 50%;
    background-repeat: repeat, repeat, no-repeat;
  }

  .div-info-hero {
    position: relative;
    top: 50%;
    -webkit-transform: translate(0px, -50%);
    -ms-transform: translate(0px, -50%);
    transform: translate(0px, -50%);
  }

  .col-text {
    padding-left: 0px;
  }

  .col-text.sta-iria {
    padding-top: 60px;
  }

  .col-text.monte-mor-lan {
    text-align: left;
  }

  .col-forms {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
  }

  .heading-lp {
    width: 315px;
    margin-top: 0px;
    margin-bottom: 0px;
    margin-left: 20px;
    color: #fff;
    font-size: 22px;
    line-height: 35px;
    font-weight: 300;
  }

  .heading-lp.sta-iria {
    width: 270px;
  }

  .heading-lp.regatas {
    position: relative;
    z-index: 2;
    width: 340px;
  }

  .div-logos-hero {
    position: absolute;
    left: 0%;
    top: 0%;
    right: auto;
    bottom: auto;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 20px;
    margin-bottom: 0px;
    margin-left: 25px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
  }

  .div-logos-hero.sta-iria {
    margin-top: 25px;
    margin-left: 20px;
    padding: 10px;
    border-radius: 5px;
    background-color: #fff;
  }

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
    background-color: #fff;
  }

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
    background-color: #fff;
  }

  .div-logos-hero.elvira {
    width: 220px;
    height: 220px;
    margin-top: 0px;
    margin-left: -46px;
    padding: 20px 10px;
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
    background-color: hsla(0, 0%, 100%, 0);
    background-image: none;
  }

  .div-logos-hero.elvira {
    width: auto;
    height: auto;
    margin-top: 0px;
    margin-left: 0px;
    padding: 0px;
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
    background-color: transparent;
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
    text-transform: uppercase;
  }

  .tag-hero.section2 {
    border-style: none;
    background-image: linear-gradient(135deg, #82ea5b, #079d56);
  }

  .tag-hero.destaque {
    border-style: none;
    background-image: linear-gradient(135deg, #ac41d8, #793f98);
  }

  .tag-hero.sta-iria {
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
  }

  .tag-hero.sta-iria:hover {
    background-image: linear-gradient(135deg, #793f98, #ac41d8);
  }

  .div-tags {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
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
    align-items: flex-start;
  }

  .div-tags.sta-iria {
    padding-left: 0px;
  }

  .div-tags.regatas {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding-left: 0px;
  }

  .div-tags.dunlop {
    padding-left: 0px;
  }

  .image-14 {
    margin-right: 40px;
    margin-bottom: -10px;
  }

  .destaque-lp {
    display: inline-block;
    font-size: 42px;
    line-height: 49px;
    font-weight: 600;
  }

  .destaque-lp.regatas {
    font-size: 37px;
    line-height: 48px;
  }

  .destaque-lp.itapeva {
    width: 350px;
    font-size: 30px;
    line-height: 35px;
    font-weight: 400;
  }

  .box {
    width: 380px;
    height: 307px;
    margin-top: 20px;
    margin-bottom: 40px;
    padding-top: 20px;
    background-image: url('../images/box_2.png');
    background-position: 0px 0px;
    background-size: 380px 307px;
    background-repeat: no-repeat;
  }

  .box.sta-iria {
    width: 330px;
    height: 260px;
    background-image: url('../images/box.png');
    background-size: 330px 260px;
  }

  .box.regatas {
    position: relative;
    width: 430px;
    height: 250px;
    margin-top: 130px;
    background-image: none;
    background-size: auto;
    background-repeat: repeat;
  }

  .box.regatas.comercial {
    margin-top: 70px;
  }

  .box.itapeva {
    position: relative;
    width: 430px;
    height: 250px;
    margin-top: 190px;
    padding: 3px 24px 0px;
    background-image: none;
    background-size: auto;
    background-repeat: repeat;
  }

  .box.itapeva.comercial {
    margin-top: 70px;
  }

  .div-forms-hero {
    width: 350px;
    border-radius: 20px;
  }

  .div-forms-hero.regatas {
    margin-top: 60px;
  }

  .div-forms-hero.itapeva {
    width: 370px;
    margin-top: 30px;
  }

  .div-forms-hero.monte-mor-lan {
    width: 100%;
    margin-top: 0px;
    padding: 32px;
    border-radius: 32px;
    background-color: rgba(0, 0, 0, 0.24);
  }

  .heading-21 {
    color: #fff;
    font-size: 22px;
    font-weight: 500;
    text-align: center;
  }

  .label-form-lp {
    margin-bottom: 2px;
    color: #fff;
    font-size: 14px;
    line-height: 18px;
    font-weight: 300;
    text-align: left;
  }

  .campo-form-lp {
    margin-bottom: 15px;
    border-style: none;
    border-width: 1px 1px 2px;
    border-color: #000 #000 transparent;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 12px -6px rgba(0, 0, 0, 0.75);
    font-size: 12px;
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
    letter-spacing: 0.5px;
    text-transform: uppercase;
  }

  .enviar-form-lp:hover {
    background-image: linear-gradient(304deg, #ff8b22, #ffb719);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
  }

  .form-7 {
    text-align: center;
  }

  .traga-seu-negocio {
    padding-top: 80px;
    padding-bottom: 60px;
  }

  .traga-seu-negocio.regatas {
    background-color: #fbfbfb;
  }

  .select-field-4 {
    border-radius: 5px;
    box-shadow: 0 0 12px -6px #000;
    color: #6e6e6e;
    font-size: 13px;
  }

  .columns-17 {
    width: 85%;
    margin-top: 60px;
    margin-right: auto;
    margin-left: auto;
  }

  .paragraph-28 {
    color: #565656;
    font-size: 16px;
    line-height: 1.8;
    font-weight: 300;
    text-align: center;
  }

  .paragraph-28.lp {
    margin-bottom: 20px;
    text-align: left;
  }

  .paragraph-28.lp._2 {
    margin-bottom: 0px;
  }

  .paragraph-28.lp.center {
    text-align: center;
  }

  .bold-text-30 {
    color: #ff8b22;
    font-weight: 500;
  }

  .bold-text-30._2 {
    color: #f7287c;
  }

  .bold-text-30._7 {
    color: #079d56;
  }

  .bold-text-30.lime {
    color: #82ea5b;
  }

  .column-50 {
    padding-top: 15px;
    padding-right: 20px;
    padding-left: 0px;
  }

  .slide-6 {
    background-image: url('../images/img-01.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .slide-nav-4 {
    margin-bottom: 0px;
  }

  .icon-7 {
    margin-right: 15px;
    color: #fff;
    font-size: 24px;
    text-shadow: 0 0 4px rgba(0, 0, 0, 0.5);
  }

  .icon-7._2 {
    margin-right: 41px;
    margin-left: 15px;
  }

  .slide-7 {
    background-image: url('../images/img-02.jpg');
    background-position: 50% 50%;
    background-size: cover;
  }

  .slide-8 {
    background-image: url('../images/img-03.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .slide-9 {
    background-image: url('../images/img-04.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .slide-10 {
    background-image: url('../images/img-05.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .heading-22 {
    margin-top: 120px;
    color: #ff8b22;
    font-weight: 500;
    text-align: center;
  }

  .slider-5 {
    height: 400px;
  }

  .imagem-loteamento {
    margin-top: 20px;
    text-align: center;
  }

  .condicoes {
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: url('../images/pattern2.png'), url('../images/pattern.png'), -webkit-gradient(linear, left top, left bottom, from(#006b3f), to(#00d38d));
    background-image: url('../images/pattern2.png'), url('../images/pattern.png'), linear-gradient(180deg, #006b3f, #00d38d);
    background-position: -5% 50%, 105% 50%, 0px 0px;
    background-size: contain, contain, auto;
    background-repeat: no-repeat, no-repeat, repeat;
  }

  .condicoes.minha-casa {
    background-color: #fdfdfd;
    background-image: url('../images/pattern2.png'), url('../images/pattern.png');
    background-position: -5% 50%, 105% 50%;
    background-size: contain, contain;
    background-repeat: no-repeat, no-repeat;
  }

  .bold-text-31 {
    color: #82eb5c;
    font-weight: 500;
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
    justify-content: center;
  }

  .box-condicoes {
    width: 300px;
    padding: 20px;
    border-right: 1px solid #fff;
    text-align: center;
  }

  .box-condicoes.end {
    border-right-style: none;
  }

  .text-block-36 {
    width: 80%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    color: #fff;
    font-size: 16px;
  }

  .div-cta {
    margin-top: 40px;
    text-align: center;
  }

  .div-cta._2 {
    margin-top: 20px;
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
    font-weight: 500;
  }

  .cta-condicoes:hover {
    background-image: linear-gradient(100deg, #ff8b22, #ffb719);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
  }

  .cta-condicoes.regatas {
    box-shadow: 0 0 14px -4px #ff8b22;
  }

  .localizacao-lp {
    padding-top: 80px;
    padding-bottom: 80px;
  }

  .text-block-37 {
    width: 80%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    color: #ff8b22;
    font-size: 22px;
    font-weight: 300;
    text-align: center;
  }

  .columns-18 {
    width: 90%;
    margin-top: 60px;
    margin-right: auto;
    margin-left: auto;
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
    background-image: linear-gradient(180deg, #82ea5b, #00d38d);
  }

  .image-15 {
    margin-bottom: 15px;
  }

  .text-block-38 {
    color: #fff;
    font-size: 13px;
    line-height: 16px;
    text-align: center;
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
    align-items: center;
  }

  .column-51 {
    padding-right: 30px;
    padding-left: 0px;
  }

  .map-2 {
    height: 500px;
  }

  .institucional {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f5f5f5;
    background-image: url('../images/marca-dagua.png');
    background-position: 100% 50%;
    background-size: contain;
    background-repeat: no-repeat;
  }

  .columns-19 {
    width: 90%;
    margin-right: auto;
    margin-left: auto;
  }

  .column-52 {
    padding-top: 20px;
    padding-left: 0px;
  }

  .column-52.sta-iria {
    padding-top: 0px;
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
    align-items: center;
  }

  .div-marcas.sta-iria {
    margin-top: 20px;
  }

  .div-logo {
    margin-bottom: 20px;
    padding: 15px 20px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 12px -5px #ff8b22;
  }

  .section-cta {
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: linear-gradient(96deg, #ffb719, #ff8b22);
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
    font-size: 16px;
  }

  .button-10:hover {
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
  }

  .texto-legal {
    padding-top: 30px;
    padding-bottom: 30px;
    background-color: #535353;
  }

  .paragraph-29 {
    margin-bottom: 0px;
    color: #b1b1b1;
    font-size: 12px;
    font-weight: 300;
  }

  .div-ponto-de-conversao {
    width: 90%;
    margin-bottom: 20px;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 12px -5px rgba(0, 0, 0, 0.4);
  }

  .h3-ponto-de-conversao {
    margin-top: 0px;
    margin-bottom: 15px;
    color: #079d56;
    font-size: 22px;
    font-weight: 600;
    text-align: left;
  }

  .h3-ponto-de-conversao._2 {
    color: #6e6e6e;
    font-size: 18px;
    line-height: 22px;
    font-weight: 400;
  }

  .paragraph-30 {
    margin-bottom: 15px;
    color: #565656;
    font-size: 16px;
    line-height: 1.6;
    font-weight: 300;
    text-align: left;
  }

  .button-conversao {
    margin-right: 20px;
    padding-right: 30px;
    padding-left: 30px;
    border: 1px solid transparent;
    border-radius: 100px;
    background-color: #ff8b22;
    background-image: -webkit-gradient(linear, left top, right top, from(#ff8b22), to(#ffb719));
    background-image: linear-gradient(90deg, #ff8b22, #ffb719);
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
  }

  .button-conversao:hover {
    padding-right: 40px;
    padding-left: 40px;
    border-style: solid;
    border-color: #ff8b22;
    background-color: transparent;
    background-image: none;
    color: #ff8b22;
  }

  .button-conversao._2 {
    margin-right: 0px;
    border-style: solid;
    border-width: 1px;
    border-color: #ff8b22;
    background-color: transparent;
    background-image: none;
    color: #ff8b22;
  }

  .button-conversao._2:hover {
    padding-right: 30px;
    padding-left: 30px;
    background-color: #ff8b22;
    color: #fff;
  }

  .button-conversao._3 {
    margin-right: 10px;
    padding-right: 20px;
    padding-left: 20px;
  }

  .button-conversao._3:hover {
    padding-right: 32px;
    padding-left: 32px;
  }

  .radio-button-2 {
    width: 40px;
    height: 40px;
    margin-top: 0px;
    margin-right: 15px;
    margin-left: 5px;
    border-style: none;
    border-radius: 0px;
    background-image: url('../images/pin_Prancheta-1.png');
    background-position: 50% 50%;
    background-size: 35px;
    background-repeat: no-repeat;
    -webkit-filter: invert(100%);
    filter: invert(100%);
  }

  .radio-button-2.w--redirected-checked {
    border: 1px none #000;
    -webkit-filter: invert(100%);
    filter: invert(100%);
  }

  .radio-button-2.w--redirected-focus {
    border-style: none;
    box-shadow: none;
  }

  .radio-button-2._2 {
    background-image: url('../images/icons_verde.png');
    background-size: 45px;
  }

  .radio-button-2._3 {
    background-image: url('../images/icons_lazer.png');
    background-size: 45px;
  }

  .radio-button-field-3 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 75%;
    margin-bottom: 10px;
    padding: 5px 10px 5px 0px;
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
    transition: all 250ms ease-in;
  }

  .radio-button-field-3:hover {
    -webkit-transform: scale(1.02);
    -ms-transform: scale(1.02);
    transform: scale(1.02);
  }

  .radio-button-field-3:focus {
    border-color: #006b3f;
  }

  .radio-button-label-2 {
    color: #fff;
  }

  .bold-text-32 {
    color: #ac41d8;
    font-weight: 600;
  }

  .div-etapa2 {
    overflow: hidden;
    height: 0px;
    margin-top: 40px;
  }

  .button-11 {
    margin-left: 5px;
    border-radius: 5px;
    background-image: -webkit-gradient(linear, left top, right top, from(#00d38d), to(#82ea5b));
    background-image: linear-gradient(90deg, #00d38d, #82ea5b);
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
  }

  .button-11:hover {
    -webkit-transform: scale(1.01);
    -ms-transform: scale(1.01);
    transform: scale(1.01);
  }

  .button-11.smarturba {
    margin-top: 30px;
    margin-left: 0px;
    background-image: -webkit-gradient(linear, left top, right top, from(#079d56), to(#00d38d));
    background-image: linear-gradient(90deg, #079d56, #00d38d);
    font-size: 16px;
    font-weight: 500;
  }

  .button-11.smarturba:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }

  .button-11.smarturba._2 {
    margin-top: 0px;
    background-image: -webkit-gradient(linear, left top, right top, from(#ff8b22), to(#ffb719));
    background-image: linear-gradient(90deg, #ff8b22, #ffb719);
  }

  .button-11.smarturba._2.w--current {
    padding-right: 20px;
    padding-left: 20px;
  }

  .button-11.smarturba._2.mobile {
    display: none;
  }

  .select-field-5 {
    border-style: solid;
    border-width: 1px;
    border-color: #00d38d;
    border-radius: 5px;
    background-color: #fff;
    color: #079d56;
  }

  .div-etapa2-2 {
    overflow: hidden;
    height: 0px;
  }

  .bold-text-33 {
    color: #ac41d8;
    font-weight: 600;
  }

  .columns-20 {
    margin-bottom: 10px;
  }

  .heading-23 {
    margin-top: 0px;
    margin-bottom: 0px;
    color: #fff;
    font-size: 40px;
    line-height: 1.3;
    font-weight: 500;
    text-align: center;
    letter-spacing: 0.3px;
  }

  .heading-23.area-cliente {
    width: 50%;
    color: #079d56;
    font-size: 32px;
    line-height: 1.5;
    font-weight: 300;
    text-align: left;
  }

  .heading-23.investidores {
    color: #079d56;
    font-weight: 300;
    text-align: left;
  }

  .bold-text-34 {
    color: #ff8b22;
  }

  .section-texto-relatorios {
    padding-top: 60px;
    padding-bottom: 60px;
  }

  .paragraph-31 {
    width: 65%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    color: #ff8b22;
    font-size: 20px;
    line-height: 1.6;
    font-weight: 300;
    text-align: center;
  }

  .paragraph-31.fale-com-ri {
    font-size: 18px;
    font-weight: 400;
    text-align: right;
  }

  .div-categorias {
    width: 65%;
    margin-right: auto;
    margin-bottom: 40px;
    margin-left: auto;
  }

  .duvida-3 {
    width: 90%;
    float: left;
    color: #079d56;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 500;
  }

  .duvida-3.resposta {
    color: #ff8b22;
    font-size: 14px;
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
    transform: rotate(45deg);
  }

  .list-item-8 {
    margin-bottom: 5px;
    text-align: left;
  }

  .list-8 {
    color: #ff8b22;
  }

  .link-7 {
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    color: #ff8b22;
    text-decoration: none;
  }

  .link-7:hover {
    text-decoration: underline;
  }

  .text-block-39 {
    margin-bottom: 10px;
    border-bottom: 1px solid #ff8b22;
    color: #ff8b22;
    font-weight: 500;
    text-align: left;
  }

  .text-block-39._2 {
    margin-top: 20px;
  }

  .div-conselheiro {
    margin-bottom: 10px;
    padding: 8px;
    border-style: solid;
    border-width: 1px;
    border-color: #dadada;
    border-radius: 5px;
  }

  .text-block-40 {
    margin-bottom: 5px;
    padding-left: 3px;
    border-bottom: 1px solid #eee;
    color: #6e6e6e;
    font-size: 16px;
    text-align: left;
  }

  .text-block-41 {
    padding-left: 3px;
    color: #6e6e6e;
    font-size: 12px;
    font-weight: 300;
    text-align: left;
  }

  .bold-text-35 {
    font-size: 12px;
    font-weight: 400;
  }

  .column-58 {
    padding-left: 0px;
  }

  .column-59 {
    padding-right: 0px;
  }

  .list-item-9 {
    margin-bottom: 5px;
    color: #6e6e6e;
    text-align: left;
  }

  .div-resposta-2 {
    overflow: hidden;
    height: 0px;
  }

  .link-8 {
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    color: #ff8b22;
    text-decoration: none;
  }

  .link-8:hover {
    text-decoration: underline;
  }

  .text-block-42 {
    position: absolute;
    left: auto;
    top: auto;
    right: 10px;
    bottom: 10px;
    color: #fff;
    font-size: 12px;
    text-shadow: 1px 1px 6px #000;
  }

  .asterisco {
    font-size: 10px;
    line-height: 0px;
    font-weight: 300;
  }

  .text-block-43 {
    color: #fff;
    text-shadow: 0 0 3px #000;
  }

  .link-9 {
    color: #82ea5b;
  }

  .checkbox-field {
    display: inline-block;
    margin-bottom: 0px;
    text-align: center;
  }

  .checkbox-label {
    color: #fff;
    text-shadow: 0 0 3px #000;
  }

  .div-block-5 {
    margin-top: 5px;
  }

  .campo-form-lp-2 {
    margin-bottom: 15px;
    border-style: none;
    border-width: 1px 1px 2px;
    border-color: #000 #000 transparent;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 12px -6px rgba(0, 0, 0, 0.75);
    font-size: 12px;
  }

  .campo-form-lp-2.itapeva {
    border-style: none none solid;
    border-width: 1px 1px 2px;
    border-color: #000 #000 #fff;
    border-radius: 0px;
    background-color: transparent;
    box-shadow: none;
    color: #fff;
  }

  .campo-form-lp-2.itapeva:active {
    color: #fff;
  }

  .campo-form-lp-2.itapeva:focus {
    color: #565656;
    text-shadow: 1px 1px 20px #000;
  }

  .tag-hero-2 {
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
    text-transform: uppercase;
  }

  .tag-hero-2.destaque {
    border-style: solid;
  }

  .tag-hero-2.destaque.regatas {
    border-style: solid;
    background-image: none;
  }

  .tag-hero-2.destaque.itapeva {
    display: none;
    margin-top: 22px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f18812), to(#f18812));
    background-image: linear-gradient(180deg, #f18812, #f18812);
  }

  .tag-hero-2.destaque {
    border-style: none;
    background-image: linear-gradient(135deg, #ac41d8, #793f98);
  }

  .tag-hero-2.dunlop-box-hero {
    width: 250px;
    border-width: 1px;
    border-color: #84ff56;
    color: #84ff56;
    font-weight: 400;
    text-align: center;
  }

  .tag-hero-2.dunlop-box-hero.vila-profeta-hero {
    width: 300px;
    border-style: none;
    border-width: 0px;
    background-image: linear-gradient(135deg, #ac41d8, #793f98);
    color: #fff;
  }

  .tag-hero-2.section2 {
    border-style: none;
    background-image: linear-gradient(135deg, #82ea5b, #079d56);
  }

  .tag-hero-2.section2.dunlop {
    background-color: #793f98;
    background-image: none;
    color: #fff;
    line-height: 1.4em;
    font-weight: 400;
  }

  .tag-hero-2.section2.dunlop.wire {
    padding-right: 20px;
    padding-left: 20px;
    border-style: solid;
    background-image: none;
    font-size: 14px;
  }

  .heading-24 {
    color: #fff;
    font-size: 22px;
    font-weight: 500;
    text-align: center;
  }

  .heading-24.dunlop {
    text-shadow: 0 0 6px #000;
  }

  .heading-24.dunlop.wire {
    color: #6e6e6e;
  }

  .heading-24.minha-casa {
    margin-top: 0px;
  }

  .heading-24.itapeva {
    text-shadow: 1px 1px 6px #000;
  }

  .enviar-form-lp-2 {
    margin-top: 20px;
    padding: 10px 35px 8px;
    border-radius: 5px;
    background-color: #ff8b22;
    background-image: linear-gradient(304deg, #ffb719, #ff8b22);
    box-shadow: 0 0 15px -7px #000;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0.5px;
    text-transform: uppercase;
  }

  .enviar-form-lp-2:hover {
    background-image: linear-gradient(304deg, #ff8b22, #ffb719);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
  }

  .enviar-form-lp-2.itapeva {
    background-image: linear-gradient(304deg, #ffb719, #ff8b22);
  }

  .enviar-form-lp-2.elvira {
    background-image: linear-gradient(304deg, #ffb719, #ff8b22);
  }

  .enviar-form-lp-2.botao-verde {
    margin-top: 40px;
    background-image: linear-gradient(304deg, #006b3f, #00d38d);
  }

  .heading-lp-2 {
    width: 315px;
    margin-top: 0px;
    margin-bottom: 0px;
    margin-left: 20px;
    color: #fff;
    font-size: 22px;
    line-height: 35px;
    font-weight: 300;
  }

  .heading-lp-2.regatas {
    position: relative;
    z-index: 2;
    width: 300px;
    line-height: 32px;
  }

  .heading-lp-2.itapeva {
    position: relative;
    z-index: 2;
    width: auto;
    font-size: 20px;
    line-height: 32px;
  }

  .heading-lp-2.itapeva {
    position: relative;
    z-index: 2;
    width: 450px;
    line-height: 32px;
  }

  .select-field-6 {
    border-radius: 5px;
    box-shadow: 0 0 12px -6px #000;
    color: #6e6e6e;
    font-size: 13px;
  }

  .select-field-6.dunlop {
    background-color: #fff;
  }

  .select-field-6.dunlop {
    background-color: #fff;
  }

  .label-form-lp-2 {
    margin-bottom: 2px;
    color: #fff;
    font-size: 14px;
    line-height: 18px;
    font-weight: 300;
    text-align: left;
  }

  .label-form-lp-2.dunlop.wire {
    color: #6e6e6e;
  }

  .label-form-lp-2.vila-profeta {
    color: #fff;
  }

  .text-block-44 {
    color: #fff;
    text-shadow: 0 0 2px #000;
  }

  .link-10 {
    color: #fff;
  }

  .link-10.wire {
    color: #565656;
  }

  .checkbox-label-2 {
    color: #fff;
    text-shadow: 0 0 2px #000;
  }

  .div-box-preenchido {
    position: absolute;
    left: 0%;
    top: 0%;
    right: auto;
    bottom: auto;
    z-index: 1;
    width: 340px;
    height: 210px;
    border-radius: 20px;
    background-image: linear-gradient(45deg, #00d38d, #82ea5b);
  }

  .div-box-preenchido.regatas-comercial {
    width: 370px;
  }

  .div-box-contorno {
    position: absolute;
    left: 30px;
    top: 30px;
    right: auto;
    bottom: auto;
    width: 340px;
    height: 210px;
    border-style: solid;
    border-width: 5px;
    border-color: #ff8b22;
    border-radius: 20px;
  }

  .div-box-contorno.regatas-comercial {
    width: 370px;
  }

  .div-box-contorno.itapeva {
    width: 370px;
    height: 185px;
    border-color: #ff8b22;
  }

  .div-box-contorno.elvira {
    width: 370px;
    height: 185px;
    border-color: #ff8b22;
  }

  .div-box-contorno.residencial-progresso {
    width: 370px;
    height: 185px;
    border-color: #e9bb00;
  }

  .div-box-contorno.parque-vitoria {
    width: 370px;
    height: 185px;
    border-color: #00d38d;
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
    background-color: rgba(0, 0, 0, 0.3);
  }

  .image-16 {
    margin-right: 10px;
  }

  .text-block-45 {
    display: inline;
    color: #fff;
    font-size: 16px;
  }

  .text-block-46 {
    position: absolute;
    left: auto;
    top: auto;
    right: 10px;
    bottom: 10px;
    color: #fff;
    font-size: 12px;
    text-shadow: 1px 1px 6px #000;
  }

  .icon-8 {
    margin-right: 15px;
    color: #fff;
    font-size: 24px;
    text-shadow: 0 0 4px rgba(0, 0, 0, 0.5);
  }

  .icon-8._2 {
    margin-right: 41px;
    margin-left: 15px;
  }

  .slide-11 {
    background-image: url('../images/01.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .slide-12 {
    background-image: url('../images/02.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .slide-13 {
    background-image: url('../images/5f625382f176bd588103dd43_03.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .slide-14 {
    background-image: url('../images/5f62539d9d5e17c2647715d4_04.jpg');
    background-position: 0px 0px;
    background-size: auto;
  }

  .tag-breve-lan-amento {
    position: absolute;
    left: auto;
    top: 0%;
    right: 0%;
    bottom: auto;
    overflow: hidden;
    width: 250px;
    height: 200px;
    margin-top: 100px;
  }

  .tag-breve-lan-amento.comercial {
    margin-top: 100px;
  }

  .tag-breve-lan-amento.comercial.dunlop {
    margin-top: 0px;
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
    text-transform: uppercase;
  }

  .text-block-47.wire {
    background-image: linear-gradient(113deg, #3a3a3a, #a8a7a7), linear-gradient(45deg, #00d38d, #82ea5b);
  }

  .text-block-47.dunlop {
    background-image: linear-gradient(45deg, #ff5aad, #f7287c);
  }

  .text-block-47.vila-profeta {
    background-image: linear-gradient(45deg, #ff8b22, #f7287c, #ff5aad);
  }

  .text-block-47.itapeva {
    background-image: linear-gradient(45deg, #009169, #82ea5b);
  }

  .text-block-47.itapeva {
    background-image: linear-gradient(45deg, #ff8b22, #ffb719);
  }

  .text-block-47.montemor {
    background-image: linear-gradient(45deg, #ffb719, #ff8b22);
  }

  .text-block-47.residencial-progresso {
    background-color: #433868;
    background-image: none;
    color: #ffb719;
    font-weight: 400;
  }

  .text-block-47.parque-vitoria {
    background-color: #00d38d;
    background-image: none;
    color: #ffb719;
    font-weight: 400;
  }

  .bold-text-36 {
    margin-left: -5px;
    padding-right: 5px;
    padding-left: 5px;
    background-color: #ff8b22;
    color: #fff;
    font-weight: 300;
  }

  .hero {
    height: 700px;
    margin-top: 100px;
    background-image: -webkit-gradient(linear, left top, right top, color-stop(18%, #793f98), color-stop(80%, transparent)), url('../images/Imagem_Smart08.jpg');
    background-image: linear-gradient(90deg, #793f98 18%, transparent 80%), url('../images/Imagem_Smart08.jpg');
    background-position: 0px 0px, 50% 5%;
    background-size: auto, cover;
    background-repeat: repeat, repeat;
  }

  .heading-25 {
    margin-top: 0px;
    color: #fff;
    font-size: 52px;
    line-height: 1.1em;
    font-weight: 600;
  }

  .image-18 {
    position: absolute;
    left: auto;
    top: 10%;
    right: 0%;
    bottom: auto;
    overflow: hidden;
    margin-bottom: 40px;
    border-radius: 5px;
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.25);
  }

  .heading-26 {
    margin-top: 0px;
    margin-bottom: 0px;
    color: #82ea5b;
    font-size: 20px;
  }

  .paragraph-32 {
    margin-top: 20px;
    margin-bottom: 0px;
    color: #fff;
    font-size: 16px;
    line-height: 1.6em;
  }

  .entenda {
    padding-top: 80px;
    padding-bottom: 80px;
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
    align-items: center;
  }

  .paragraph-33 {
    margin-bottom: 20px;
    color: #565656;
    line-height: 1.6em;
    font-weight: 300;
  }

  .column-60 {
    padding-left: 40px;
  }

  .column-60.dunlop {
    padding-top: 15px;
    padding-right: 0px;
    padding-left: 0px;
  }

  .grid-3 {
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    -ms-grid-rows: 150px 150px;
    grid-template-rows: 150px 150px;
  }

  .grid-3.dunlop {
    grid-column-gap: 10px;
    -ms-grid-columns: 1fr 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
  }

  .grid-3.dunlop.display-hidden {
    display: none;
  }

  .column-61 {
    padding-top: 0px;
  }

  .column-61.dunlop {
    padding-top: 20px;
    padding-right: 60px;
    padding-left: 0px;
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
    box-shadow: 0 0 12px -6px #ff8b22;
  }

  .text-block-48 {
    margin-top: 20px;
    color: #079d56;
    font-size: 14px;
    line-height: 1.4em;
    font-weight: 500;
    text-align: center;
  }

  .video {
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: url('../images/casinha-gray-01.png');
    background-position: 100% 100%;
    background-size: auto;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }

  .div-video {
    overflow: hidden;
    width: 70%;
    margin-top: 60px;
    margin-right: auto;
    margin-left: auto;
    border-radius: 10px;
    box-shadow: 0 0 20px -12px #00d38d;
  }

  .lotes-smarturba {
    display: none;
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: linear-gradient(45deg, #006b3f, #079d56);
  }

  .como-funciona {
    padding-top: 80px;
    padding-bottom: 80px;
  }

  .section-form {
    position: relative;
    padding-top: 80px;
    padding-bottom: 100px;
    background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0.52)), color-stop(13%, hsla(0, 0%, 100%, 0))), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), color-stop(32%, transparent)), url('../images/contato.jpg');
    background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.52), hsla(0, 0%, 100%, 0) 13%), linear-gradient(180deg, rgba(0, 0, 0, 0.5), transparent 32%), url('../images/contato.jpg');
    background-position: 0px 0px, 0px 0px, 50% 100%;
    background-size: auto, auto, cover;
    background-repeat: repeat, repeat, no-repeat;
    background-attachment: scroll, scroll, fixed;
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
    text-transform: uppercase;
  }

  .submit-button-7:hover {
    background-color: transparent;
    color: #ac41d8;
  }

  .text-field-6 {
    border-style: none none solid;
    border-width: 1px;
    border-color: #000 #000 #079d56;
    border-radius: 3px;
    box-shadow: 0 0 12px -3px rgba(0, 0, 0, 0.15);
    color: #079d56;
    font-weight: 300;
  }

  .text-field-6.menor {
    width: 97%;
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

  .heading-27.forms {
    width: 100%;
  }

  .heading-27.center.wire-branco {
    color: #fff;
  }

  .heading-27.center._32px {
    font-size: 32px;
  }

  .heading-27.center._32px.minha-casa {
    color: #fff;
  }

  .heading-27.center.white {
    color: #fff;
    font-weight: 300;
  }

  .heading-27.center.white.call {
    font-weight: 400;
  }

  .heading-27.tour-dunlop {
    width: 65%;
    margin-right: 60px;
    margin-left: 0px;
    font-size: 36px;
    line-height: 1.2;
    text-align: left;
  }

  .heading-27.tour-dunlop._32px {
    font-size: 32px;
  }

  .heading-27.tour-dunlop._32px._2 {
    width: 50%;
  }

  .heading-27.com {
    margin-right: 0px;
    margin-left: 0px;
    text-align: left;
  }

  .heading-27.com._32px {
    font-size: 32px;
  }

  .heading-27.com._32px.branco {
    color: #fff;
  }

  .heading-27.com._32px.branco {
    color: #fff;
  }

  .heading-27.com._32px.branco.minha-casa {
    margin-bottom: 20px;
  }

  .heading-27.galeria {
    width: 100%;
    margin: 0px 0px 20px;
    color: #fff;
    text-align: left;
  }

  .heading-27.galeria._32px {
    font-size: 32px;
  }

  .heading-27.center.sao-roque-header {
    margin-top: -60px;
  }

  .destaque-h2-2 {
    color: #ff8b22;
    font-weight: 600;
  }

  .destaque-h2-2.wire {
    color: #565656;
  }

  .destaque-h2-2.wire.branco {
    color: #fff;
  }

  .destaque-h2-2.vila-profeta {
    color: #ff5aad;
  }

  .destaque-h2-2.vila-profeta._3 {
    color: #00d38d;
  }

  .escolha-cidade-2 {
    margin-top: 20px;
    border: 1px none #000;
    background-color: #fff;
    box-shadow: 0 5px 15px -3px rgba(0, 107, 63, 0.25);
    color: #ff8b22;
  }

  .escolha-cidade-2.uf {
    margin-top: 0px;
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
    text-shadow: 0 0 9px #000;
  }

  .div-features {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 140px;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
  }

  .div-features._2 {
    margin-top: 180px;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    -webkit-flex-direction: row-reverse;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse;
  }

  .div-features._2.dunlop-2 {
    margin-top: 140px;
  }

  .div-features._2.dunlop-2.div-conviva-em-harmonia {
    display: none;
  }

  .div-features._3 {
    margin-top: 180px;
  }

  .div-features._4 {
    margin-top: 180px;
  }

  .div-features.display-hidden {
    display: none;
  }

  .div-features.dunlop {
    margin-top: 40px;
  }

  .imagem-smarturba {
    position: relative;
    width: 600px;
    height: 400px;
    border-radius: 10px;
    background-image: url('../images/Imagem_Smart06.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.25);
  }

  .imagem-smarturba._2 {
    background-image: url('../images/Imagem_Smart07.jpg');
    background-position: 100% 50%;
  }

  .imagem-smarturba._2.wire {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }

  .imagem-smarturba._2.dunlop-img {
    z-index: 2;
    width: 400px;
    background-image: url('../images/Parque-Linear_Vista-Aerea-1.jpg');
    background-position: 50% 50%;
  }

  .imagem-smarturba._3 {
    background-image: url('../images/Imagem_Smart03.jpg');
  }

  .imagem-smarturba._4 {
    background-image: url('../images/Imagem_Smart04.jpg');
  }

  .imagem-smarturba._6 {
    background-image: url('../images/ImagemSmart01.jpg');
  }

  .imagem-smarturba._6.wire {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }

  .imagem-smarturba._6.dunlop-img {
    z-index: 2;
    width: 400px;
    background-image: url('../images/smart-dunlop-02.jpg');
  }

  .imagem-smarturba._5 {
    background-image: url('../images/Imagem_Smart05.jpg');
  }

  .imagem-smarturba._7 {
    background-image: url('../images/Imagem_Smart02.jpg');
  }

  .imagem-smarturba._7.wire {
    margin-top: 0px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }

  .imagem-smarturba._7.dunlop-img {
    z-index: 2;
    width: 400px;
    height: 400px;
    background-image: url('../images/Instagramável.png');
    background-size: cover;
  }

  .imagem-smarturba.dunlop {
    background-image: url('https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg'), url('../images/Imagem_Smart06.jpg');
    background-position: 0px 0px, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .imagem-smarturba.wire {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }

  .imagem-smarturba.wire.margin-top {
    margin-top: 20px;
  }

  .imagem-smarturba.dunlop-img {
    z-index: 2;
    width: 400px;
    background-image: url('../images/smart-dunlop-04.jpg');
  }

  .imagem-smarturba.dunlop-img.vila-profeta {
    background-image: url('../images/Vistas-aereas.png');
  }

  .div-info-smarturba {
    width: 50%;
    margin-left: 30px;
  }

  .div-info-smarturba._2 {
    margin-right: 40px;
    margin-left: 0px;
  }

  .div-info-smarturba._2.dunlop {
    margin-top: 10px;
    margin-right: 80px;
    margin-left: 0px;
  }

  .div-info-smarturba._2.dunlop.margin-top-off {
    margin-top: 0px;
  }

  .div-info-smarturba.dunlop {
    width: 60%;
    margin-left: 80px;
  }

  .paragraph-35 {
    color: #565656;
    line-height: 1.5em;
    font-weight: 300;
    text-align: left;
  }

  .paragraph-35._2 {
    text-align: right;
  }

  .heading-28 {
    margin-top: 10px;
    color: #079d56;
    font-weight: 600;
  }

  .heading-28._2 {
    color: #793f98;
    text-align: right;
  }

  .heading-28._3 {
    color: #ac41d8;
  }

  .heading-28._4 {
    color: #ff5aad;
    text-align: right;
  }

  .heading-28._5 {
    margin-top: 30px;
    color: #793f98;
  }

  .heading-28._6 {
    color: #ac41d8;
    text-align: right;
  }

  .bold-text-37 {
    color: #ff5aad;
  }

  .bold-text-37._2 {
    color: #ff8b22;
  }

  .bold-text-37._3 {
    color: #00d38d;
  }

  .bold-text-37._4 {
    color: #ff8b22;
  }

  .bold-text-37._5 {
    color: #ff8b22;
  }

  .bold-text-37._6 {
    color: #f7287c;
  }

  .bold-text-37._7 {
    color: #ff8b22;
  }

  .topicos {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
  }

  .topico {
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
    text-align: center;
  }

  .topico._2 {
    min-height: 130px;
    margin-right: 0px;
    margin-left: 10px;
    background-image: linear-gradient(45deg, #ff8b22, #ffb719);
  }

  .topico._3 {
    background-image: linear-gradient(45deg, #079d56, #00d38d);
  }

  .topico._4 {
    min-height: 130px;
    margin-right: 0px;
    margin-left: 10px;
  }

  .topico._5 {
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .topico._6 {
    margin-right: 0px;
    margin-left: 10px;
  }

  .topico._7 {
    background-image: linear-gradient(45deg, #006b3f, #82ea5b);
  }

  .text-block-49 {
    color: #fff;
    line-height: 1.3em;
    font-weight: 400;
    text-align: center;
  }

  .image-19 {
    margin-bottom: 10px;
  }

  .image-20 {
    position: absolute;
    left: -30px;
    top: -50px;
    z-index: 1;
  }

  .image-20._2 {
    left: -30px;
    top: -40px;
    right: auto;
    bottom: auto;
  }

  .image-20._3 {
    top: -40px;
  }

  .image-20.wire {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }

  .image-20._4 {
    left: auto;
    top: -30px;
    right: -30px;
    bottom: auto;
  }

  .image-20.display-hidden {
    display: none;
  }

  .image-21 {
    position: absolute;
    left: auto;
    top: auto;
    right: 30px;
    bottom: -40px;
  }

  .image-21._2 {
    left: auto;
    top: auto;
    right: -30px;
    bottom: -40px;
  }

  .image-21.wire {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }

  .image-21._5 {
    left: 10px;
    top: auto;
    right: auto;
    bottom: -30px;
  }

  .image-21.display-hidden {
    display: none;
  }

  .bold-text-38 {
    color: #82ea5b;
  }

  .div-button-smarturba {
    margin-top: 140px;
    margin-bottom: 20px;
    text-align: center;
  }

  .bold-text-39 {
    font-weight: 600;
  }

  .text-block-50 {
    position: absolute;
    left: 0%;
    top: auto;
    right: 0%;
    bottom: 20px;
    color: #fff;
    text-align: center;
    text-shadow: 1px 1px 6px #000;
  }

  .cta-provisorio {
    display: block;
    padding-top: 100px;
    padding-bottom: 100px;
    background-image: url('../images/pattern.png'), url('../images/pattern2.png'), linear-gradient(45deg, #006b3f, #079d56);
    background-position: 100% 50%, 0% 50%, 0px 0px;
    background-size: 350px, 350px, auto;
    background-repeat: no-repeat, no-repeat, repeat;
  }

  .heading-29 {
    margin-top: 0px;
    color: #fff;
    font-size: 28px;
    line-height: 1.4em;
    font-weight: 500;
    text-align: center;
  }

  .div-button-center {
    text-align: center;
  }

  .div-button-center.dunlop {
    margin-top: 60px;
  }

  .div-button-center.dunlop._2 {
    margin-top: 100px;
  }

  .div-button-center.dunlop.margin-top-100px {
    margin-top: 0px;
    margin-bottom: 40px;
  }

  .div-button-center.minha-casa {
    margin-top: 40px;
  }

  .planejamento-inteligente {
    padding-top: 80px;
    padding-bottom: 60px;
  }

  .heading-30 {
    margin-top: 0px;
    color: #fff;
    font-size: 52px;
    line-height: 1.1em;
    font-weight: 600;
  }

  .heading-30.h1-dunlop {
    margin-right: 20px;
    color: #fff;
    font-size: 42px;
    line-height: 1.2em;
  }

  .heading-30.h1-dunlop {
    margin-right: 20px;
    color: #fff;
    font-size: 42px;
    line-height: 1.2em;
  }

  .heading-30.minha-casa {
    margin-bottom: 0px;
    color: #079d56;
    line-height: 1em;
    font-weight: 700;
    text-align: left;
  }

  .bold-text-40 {
    color: #82ea5b;
  }

  .heading-31 {
    margin-top: 0px;
    margin-bottom: 0px;
    color: #82ea5b;
    font-size: 20px;
  }

  .heading-31.wire {
    color: #6e6e6e;
  }

  .paragraph-36 {
    margin-top: 20px;
    margin-bottom: 0px;
    color: #fff;
    font-size: 16px;
    line-height: 1.6em;
  }

  .paragraph-36.dunlop-sub {
    margin-right: 40px;
    margin-bottom: 20px;
    color: #006b3f;
  }

  .paragraph-36.dunlop-sub {
    margin-right: 40px;
    margin-bottom: 20px;
    color: #fff;
  }

  .paragraph-36.vila-profeta-subtitulo {
    margin-right: 40px;
    margin-bottom: 20px;
    color: #fff;
  }

  .button-12 {
    margin-left: 5px;
    border-radius: 5px;
    background-image: -webkit-gradient(linear, left top, right top, from(#00d38d), to(#82ea5b));
    background-image: linear-gradient(90deg, #00d38d, #82ea5b);
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
  }

  .button-12:hover {
    -webkit-transform: scale(1.01);
    -ms-transform: scale(1.01);
    transform: scale(1.01);
  }

  .button-12.smarturba {
    margin-top: 30px;
    margin-left: 0px;
    background-image: -webkit-gradient(linear, left top, right top, from(#079d56), to(#00d38d));
    background-image: linear-gradient(90deg, #079d56, #00d38d);
    font-size: 16px;
    font-weight: 500;
  }

  .button-12.smarturba:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }

  .button-12.smarturba._2 {
    width: 198.640625px;
    margin-top: 0px;
    margin-bottom: 0px;
    padding-top: 10px;
    padding-bottom: 10px;
    background-image: -webkit-gradient(linear, left top, right top, from(#ac41d8), to(#793f98));
    background-image: linear-gradient(90deg, #ac41d8, #793f98);
    font-size: 14px;
  }

  .button-12.smarturba._2.w--current {
    padding-right: 20px;
    padding-left: 20px;
  }

  .button-12.smarturba._2.mobile {
    display: none;
  }

  .button-12.smarturba._2.wire {
    background-image: -webkit-gradient(linear, left top, right top, from(#565656), to(#6e6e6e));
    background-image: linear-gradient(90deg, #565656, #6e6e6e);
    font-size: 14px;
  }

  .button-12.smarturba._2.minha-casa {
    background-image: -webkit-gradient(linear, left top, right top, from(#793f98), to(#ac41d8));
    background-image: linear-gradient(90deg, #793f98, #ac41d8);
    box-shadow: 0 6px 12px 0 rgba(0, 107, 63, 0.15);
    color: #fff;
    cursor: pointer;
  }

  .button-12.smarturba._2.minha-casa.verde {
    background-image: -webkit-gradient(linear, left top, right top, from(#00d38d), to(#82ea5b));
    background-image: linear-gradient(90deg, #00d38d, #82ea5b);
    box-shadow: 0 6px 12px 0 rgba(60, 23, 80, 0.15);
    color: #006b3f;
  }

  .button-12.smarturba._2.minha-casa.shadow-black {
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.15);
  }

  .button-12.smarturba.dunlop {
    margin-top: 0px;
    background-image: -webkit-gradient(linear, left top, right top, from(#006b3f), to(#079d56));
    background-image: linear-gradient(90deg, #006b3f, #079d56);
    font-size: 14px;
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
    -webkit-transform: translate(0px, -50%);
    -ms-transform: translate(0px, -50%);
    transform: translate(0px, -50%);
  }

  .div-formulario-dunlop.minha-casa {
    padding-right: 40px;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
  }

  .text-block-51 {
    color: #fff;
    text-shadow: 0 0 3px #000;
  }

  .text-block-51.dunlop.wire {
    color: #6e6e6e;
    text-shadow: none;
  }

  .text-block-51.minha-casa {
    text-shadow: none;
  }

  .checkbox-label-3 {
    color: #fff;
    text-shadow: 0 0 3px #000;
  }

  .checkbox-label-3.wire {
    color: #6e6e6e;
    text-shadow: none;
  }

  .checkbox-label-3.minha-casa {
    text-shadow: none;
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
    letter-spacing: 0.5px;
    text-transform: uppercase;
  }

  .enviar-form-lp-3:hover {
    background-image: linear-gradient(304deg, #ff8b22, #ffb719);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
  }

  .enviar-form-lp-3.wire {
    background-image: linear-gradient(304deg, #6e6e6e, #565656);
  }

  .enviar-form-lp-3.vila-profeta {
    background-image: linear-gradient(304deg, #793f98, #ac41d8);
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
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 10px;
    box-shadow: 0 0 12px -6px #ff8b22;
  }

  .box-entenda-2.dunlop {
    padding: 20px 15px;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }

  .box-entenda-2.dunlop.wire {
    box-shadow: 0 0 12px -6px #6e6e6e;
  }

  .box-entenda-2.dunlop._2 {
    padding-right: 20px;
    padding-left: 20px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    background-color: #fff;
  }

  .paragraph-37 {
    display: block;
    margin-bottom: 20px;
    color: #006b3f;
    line-height: 1.6em;
    font-weight: 300;
    text-align: center;
  }

  .paragraph-37.right {
    text-align: right;
  }

  .paragraph-37.branco {
    color: #fff;
    font-style: normal;
  }

  .paragraph-37.numero-obra {
    margin-bottom: 0px;
  }

  .text-block-52 {
    margin-top: 20px;
    color: #079d56;
    font-size: 14px;
    line-height: 1.4em;
    font-weight: 500;
    text-align: center;
  }

  .text-block-52.wire {
    color: #6e6e6e;
    font-size: 16px;
  }

  .text-block-52.wire-2 {
    color: #6e6e6e;
  }

  .text-block-53 {
    margin-bottom: 10px;
    color: #6e6e6e;
    font-weight: 300;
  }

  .div-raizes {
    overflow: hidden;
    margin-top: 15px;
  }

  .list-12 {
    padding-left: 20px;
  }

  .list-item-10 {
    margin-bottom: 5px;
    color: #6e6e6e;
    line-height: 1.4em;
    font-weight: 300;
  }

  .localizacao-dunlop {
    padding-top: 80px;
    padding-bottom: 60px;
    background-color: #f8f8f8;
  }

  .div-paragraph-center {
    width: 70%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    text-align: center;
  }

  .div-paragraph-center.margin-top-60px {
    margin-top: 60px;
  }

  .div-paragraph-center.destaque-box {
    padding: 30px 20px;
    border-radius: 10px;
    background-image: linear-gradient(225deg, #079d56, #006b3f);
  }

  .div-mapa-dunlop {
    overflow: hidden;
    margin-top: 40px;
    border-radius: 5px;
    box-shadow: 0 6px 12px -3px rgba(0, 0, 0, 0.2);
  }

  .tour {
    height: 600px;
  }

  .tour.display-hidden {
    display: block;
  }

  .div-mestre-tour {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    padding-top: 40px;
    padding-bottom: 40px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .div-h2-tour {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 50%;
    height: 100%;
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
    align-items: flex-end;
  }

  .div-tour {
    width: 50%;
    height: 100%;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    background-image: url('https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg');
    background-position: 0px 0px;
    background-size: auto;
    box-shadow: 0 0 12px -4px rgba(0, 0, 0, 0.2);
  }

  .setinha-wire {
    margin-right: 60px;
  }

  .conceito {
    padding-top: 80px;
    padding-bottom: 60px;
    background-color: #f8f8f8;
  }

  .conceito.andamento-da-obra.hidden {
    display: none;
  }

  .div-grid-conceito {
    width: 60%;
    margin-right: auto;
    margin-left: auto;
  }

  .div-grid-conceito.display-hidden {
    display: block;
  }

  .wire-mask {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }

  .videos {
    padding-top: 80px;
    padding-bottom: 80px;
    background-color: #646464;
  }

  .videos.display-hidden {
    display: block;
  }

  .div-video-2 {
    overflow: hidden;
    width: 720px;
    margin-top: 60px;
    margin-right: auto;
    margin-left: auto;
    border-radius: 10px;
    box-shadow: 0 0 20px -12px #00d38d;
  }

  .div-video-2.wire {
    box-shadow: 0 0 20px -12px #414141;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }

  .features {
    padding-top: 80px;
    padding-bottom: 120px;
  }

  .features._2 {
    padding-top: 80px;
    padding-bottom: 100px;
  }

  .heading-32 {
    margin-top: 10px;
    color: #079d56;
    font-size: 40px;
    line-height: 1.1em;
    font-weight: 600;
  }

  .heading-32.dunlop {
    color: #565656;
    font-size: 36px;
    text-align: right;
  }

  .heading-32.dunlop._2 {
    text-align: left;
  }

  .bold-text-41 {
    color: #ff5aad;
  }

  .bold-text-41._7 {
    color: #ff8b22;
  }

  .text-span {
    color: #6e6e6e;
    font-weight: 300;
  }

  .div-grid-features {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 20px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .div-grid-features._2 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 10px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .div-feature {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
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
    box-shadow: 0 0 8px 0 rgba(105, 105, 105, 0.2);
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
  }

  .div-feature.maior {
    width: 35%;
  }

  .div-feature.medio {
    width: 43%;
  }

  .div-feature._2 {
    width: 32%;
    min-height: 80px;
    margin-right: 5px;
    margin-left: 5px;
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
  }

  .image-22 {
    margin-right: 10px;
    float: left;
  }

  .text-block-54 {
    float: left;
    color: #079d56;
    font-size: 14px;
    line-height: 1.4em;
  }

  .italic-text {
    color: #4d99fa;
    font-size: 14px;
    line-height: 16px;
    font-weight: 400;
  }

  .column-66 {
    padding: 55px 20px 55px 0px;
    border-right: 1px solid #dbdbdb;
  }

  .column-66._2 {
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 20px;
  }

  .column-67 {
    padding-top: 4px;
    padding-right: 0px;
    padding-left: 20px;
  }

  .column-67._2 {
    padding-top: 20px;
  }

  .col-maisfeliz.projeto-sustentavel {
    margin-top: 140px;
  }

  .text-block-55 {
    color: #fff;
    line-height: 1.3em;
    font-weight: 400;
    text-align: center;
  }

  .paragraph-38 {
    color: #565656;
    line-height: 1.5em;
    font-weight: 300;
    text-align: left;
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
    text-align: center;
  }

  .topico-2.dunlop-topic {
    background-image: linear-gradient(45deg, #00d38d, #82ea5b);
  }

  .topico-2._7 {
    background-image: linear-gradient(45deg, #006b3f, #82ea5b);
  }

  .topico-2.vila-profeta-topicos {
    background-image: linear-gradient(45deg, #793f98, #ff5aad);
  }

  .comercio {
    position: relative;
    height: 600px;
    padding-top: 80px;
    padding-bottom: 80px;
    background-color: #f0f0f0;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(45%, #ff8b22), to(#ffb719));
    background-image: linear-gradient(180deg, #ff8b22 45%, #ffb719);
  }

  .img-comercio {
    position: absolute;
    left: auto;
    top: 0%;
    right: 0%;
    bottom: 0%;
    width: 50%;
    background-image: url('../images/Rotatória.png');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: scroll;
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
    align-items: center;
  }

  .div-block-6 {
    padding-right: 120px;
  }

  .div-logo-dunlop {
    display: inline-block;
    margin-bottom: 20px;
    padding: 10px 20px;
    border-radius: 10px;
    background-color: #f8f8f8;
  }

  .div-mestre-features {
    width: 80%;
    margin: 40px auto 100px;
  }

  .heading-33 {
    margin-top: 10px;
    color: #079d56;
    font-size: 38px;
    line-height: 44px;
    font-weight: 600;
  }

  .section-cta-2 {
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: linear-gradient(96deg, #079d56, #82ea5b);
  }

  .section-cta-2.wire {
    background-image: linear-gradient(50deg, #a8a8a8, #c5c5c5), linear-gradient(96deg, #ffb719, #ff8b22);
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
    font-size: 16px;
  }

  .button-13:hover {
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
  }

  .seta-2 {
    position: absolute;
    left: auto;
    top: 50%;
    right: 0%;
    bottom: 0%;
    z-index: 1;
    display: none;
    width: 50px;
    height: 50px;
    margin-right: -25px;
    background-color: #006b3f;
    -webkit-transform: translate(0px, -50%) rotate(45deg);
    -ms-transform: translate(0px, -50%) rotate(45deg);
    transform: translate(0px, -50%) rotate(45deg);
  }

  .galeria-de-fotos-2 {
    height: 400px;
    background-color: #6e6e6e;
  }

  .galeria-de-fotos-2.wire {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
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
    text-transform: lowercase;
  }

  .button-14:hover {
    border-color: #dd89ff;
    background-color: transparent;
    color: #dd89ff;
    font-weight: 400;
  }

  .button-14.galeria {
    display: none;
    padding-right: 40px;
    padding-left: 40px;
    border-style: solid;
    border-color: #82ea5b;
    background-color: #82ea5b;
    color: #006b3f;
  }

  .button-14.galeria:hover {
    background-color: transparent;
    color: #82ea5b;
  }

  .button-14.elvira {
    margin-top: 10px;
    border-color: #ff8b22;
    border-radius: 5px;
    background-color: #ff8b22;
    text-transform: uppercase;
  }

  .button-14.elvira:hover {
    border-color: #793f98;
    background-color: transparent;
    color: #ac41d8;
  }

  .button-14.elvira {
    margin-top: 10px;
    margin-left: 0px;
    border-color: #793f98;
    border-radius: 5px;
    background-color: #793f98;
    font-size: 14px;
    text-transform: uppercase;
  }

  .button-14.elvira:hover {
    border-color: #ff8b22;
    background-color: transparent;
    color: #ff8b22;
  }

  .button-14.residencial-progresso {
    margin-top: 10px;
    border-color: #433868;
    border-radius: 5px;
    background-color: #433868;
    text-transform: uppercase;
  }

  .button-14.residencial-progresso:hover {
    border-color: #433868;
    background-color: transparent;
    color: #433868;
  }

  .button-14.botao-parque-vitoria {
    margin-top: 20px;
    margin-bottom: 0px;
    float: none;
    clear: none;
    border-style: solid;
    border-color: #793f98;
    border-radius: 5px;
    background-color: #793f98;
    background-image: none;
    text-align: center;
    text-transform: uppercase;
    background-clip: border-box;
    -webkit-text-fill-color: inherit;
    cursor: pointer;
  }

  .button-14.botao-parque-vitoria:hover {
    border-style: solid;
    border-color: #793f98;
    background-color: transparent;
    background-image: none;
    color: #433868;
  }

  .column-68 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    padding-right: 0px;
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
    background-image: linear-gradient(180deg, #ff5aad, #ff5aad);
  }

  .bold-text-42 {
    color: #793f98;
    font-weight: 500;
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
    border-radius: 25px;
  }

  .div-contorno._2 {
    left: auto;
    top: 40px;
    right: 40px;
    bottom: auto;
    border-color: #ffb719;
  }

  .div-contorno._2._3 {
    border-color: #ff5aad;
  }

  .div-contorno._3 {
    border-color: #f7287c;
  }

  .bold-text-43 {
    font-weight: 600;
  }

  .bold-text-44 {
    border-bottom: 2px solid #82ea5b;
    line-height: 1.3em;
  }

  .bold-text-45 {
    border-bottom: 2px solid #82ea5b;
    line-height: 1.3em;
  }

  .enviar-form-lp-4 {
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
    letter-spacing: 0.5px;
    text-transform: uppercase;
  }

  .enviar-form-lp-4:hover {
    background-image: linear-gradient(304deg, #ff8b22, #ffb719);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
  }

  .enviar-form-lp-4.minha-casa {
    background-image: linear-gradient(304deg, #ffb719, #ff8b22);
    box-shadow: 0 6px 15px -7px rgba(0, 0, 0, 0.2);
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
    background-color: #fff;
  }

  .menor {
    color: #f68b28;
    font-size: 49px;
  }

  .heading-34 {
    margin-right: 20px;
    color: #fff;
    font-size: 32px;
    line-height: 1.4em;
    font-weight: 600;
  }

  .sonho {
    padding-top: 410px;
    padding-bottom: 80px;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(40%, #4aaf6b), to(#9fbe41));
    background-image: linear-gradient(180deg, #4aaf6b 40%, #9fbe41);
  }

  .image-24 {
    position: absolute;
    left: 47%;
    top: auto;
    right: 0%;
    bottom: -325px;
    z-index: 1;
    -webkit-transform: translate(-50%, 0px);
    -ms-transform: translate(-50%, 0px);
    transform: translate(-50%, 0px);
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
    background-image: none;
  }

  .destaque-h2-3 {
    color: #ac41d8;
    font-weight: 600;
  }

  .destaque-h2-3.minha-casa {
    color: #88ff5b;
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
    border-radius: 100px;
  }

  .text-block-56 {
    margin-right: 5px;
    margin-left: 5px;
    color: #82ea5b;
    font-weight: 700;
    text-align: center;
  }

  .image-25 {
    margin-top: 5px;
  }

  .paragraph-39 {
    margin-bottom: 20px;
    color: #6e6e6e;
    line-height: 1.6em;
    font-weight: 300;
  }

  .paragraph-39.branco {
    color: #fff;
  }

  .paragraph-39.branco {
    color: #fff;
  }

  .paragraph-39.branco.minha-casa {
    width: 80%;
    margin-bottom: 40px;
  }

  .paragraph-39.margin-bottom-off {
    margin-bottom: 0px;
  }

  .div-boxes-sonho {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
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
    align-items: flex-start;
  }

  .div-box-sonho {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
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
    box-shadow: 0 6px 12px 0 rgba(0, 107, 63, 0.15);
  }

  .text-block-57 {
    float: left;
    color: #079d56;
    font-size: 14px;
    line-height: 1.4em;
  }

  .txt-boxes-sonho {
    margin-top: 10px;
    color: #079d56;
    line-height: 1.4em;
    font-weight: 600;
    text-align: center;
  }

  .bold-text-46 {
    padding-right: 2px;
    padding-left: 2px;
    background-color: rgba(0, 107, 63, 0.9);
    color: #fff;
    font-weight: 400;
  }

  .bold-text-47 {
    color: #82ea5b;
  }

  .box-condicoes-2 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 70%;
    margin-top: 40px;
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
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .box-condicao {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 22%;
    min-height: 150px;
    padding: 20px;
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
    border-right: 1px solid #00d38d;
  }

  .box-condicao.border-off {
    border-right-style: none;
  }

  .txt-legal {
    width: 70%;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    color: #6e6e6e;
    font-size: 12px;
    font-weight: 300;
    text-align: center;
  }

  .detalhes {
    position: relative;
    height: 640px;
    padding-top: 80px;
    padding-bottom: 60px;
    background-image: linear-gradient(225deg, #ac41d8, #793f98);
  }

  .div-txt-detalhes {
    width: 50%;
    height: 100%;
    padding-right: 120px;
  }

  .slider-detalhes {
    position: absolute;
    left: auto;
    top: auto;
    right: 0%;
    bottom: 0%;
    width: 50%;
    height: 640px;
  }

  .destaque-h2-4 {
    color: #079d56;
    font-weight: 600;
  }

  .destaque-h2-4.lime {
    color: #82ea5b;
  }

  .div-lista-detalhes {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 20px;
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
    align-items: center;
  }

  .div-lista-detalhes.margin-botton-40px {
    margin-bottom: 40px;
  }

  .div-detalhe {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 70%;
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
    align-items: center;
  }

  .icon-detalhe {
    margin-right: 20px;
  }

  .text-block-58 {
    color: #fff;
    font-weight: 600;
  }

  .slide-nav-5 {
    display: none;
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
    color: #fff;
  }

  .arrow:hover {
    background-color: #fff;
    color: #793f98;
  }

  .arrow._2 {
    left: -60px;
    -webkit-transition: opacity 200ms ease;
    transition: opacity 200ms ease;
  }

  .icon-9 {
    font-size: 18px;
  }

  .img-casas {
    width: 100%;
  }

  .passos {
    padding-top: 60px;
    padding-bottom: 100px;
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
    justify-content: center;
  }

  .div-card-passos {
    position: relative;
    width: 225px;
    height: 350px;
    margin-right: 10px;
    margin-left: 10px;
    border-radius: 10px;
    background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.8), hsla(0, 0%, 100%, 0) 40%), linear-gradient(180deg, hsla(0, 0%, 8%, 0) 43%, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/bg-passo-01.jpg');
    background-position: 0px 0px, 0px 0px, 0px 0px, 50% 50%;
    background-size: auto, auto, auto, 225px;
    background-repeat: repeat, repeat, repeat, no-repeat;
  }

  .div-card-passos._2 {
    background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.8), hsla(0, 0%, 100%, 0) 40%), linear-gradient(180deg, hsla(0, 0%, 8%, 0) 43%, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/bg-passo-02.jpg');
    background-position: 0px 0px, 0px 0px, 0px 0px, 50% 50%;
    background-size: auto, auto, auto, 225px;
    background-repeat: repeat, repeat, repeat, no-repeat;
  }

  .div-card-passos._3 {
    background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.8), hsla(0, 0%, 100%, 0) 40%), linear-gradient(180deg, hsla(0, 0%, 8%, 0) 43%, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/bg-passo-03.jpg');
    background-position: 0px 0px, 0px 0px, 0px 0px, 50% 50%;
    background-size: auto, auto, auto, 225px;
    background-repeat: repeat, repeat, repeat, no-repeat;
  }

  .div-card-passos._4 {
    background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.8), hsla(0, 0%, 100%, 0) 40%), linear-gradient(180deg, hsla(0, 0%, 8%, 0) 43%, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/bg-passo-04.jpg');
    background-position: 0px 0px, 0px 0px, 0px 0px, 50% 50%;
    background-size: auto, auto, auto, 225px;
    background-repeat: repeat, repeat, repeat, no-repeat;
  }

  .div-card-passos._5 {
    background-image: linear-gradient(135deg, rgba(0, 0, 0, 0.8), hsla(0, 0%, 100%, 0) 40%), linear-gradient(180deg, hsla(0, 0%, 8%, 0) 43%, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/bg-passo-05.jpg');
    background-position: 0px 0px, 0px 0px, 0px 0px, 50% 50%;
    background-size: auto, auto, auto, 225px;
    background-repeat: repeat, repeat, repeat, no-repeat;
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
    text-align: center;
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
    font-weight: 300;
  }

  .depoimentos {
    padding-top: 80px;
    padding-bottom: 120px;
    background-color: #f8f8f8;
    background-image: url('../images/pattern-roxa2.png'), url('../images/pattern-roxa.png');
    background-position: 105% 50%, -5% 50%;
    background-size: contain, contain;
    background-repeat: no-repeat, no-repeat;
  }

  .div-depoimentos {
    overflow: hidden;
    width: 100%;
    height: 100%;
    border-radius: 10px;
  }

  .slider-depoimentos {
    width: 720px;
    height: 240px;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.12);
  }

  .slide-nav-depoimento {
    left: 0%;
    top: auto;
    right: 0%;
    bottom: -60px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100px;
    height: 40px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .arrow-depoimento {
    left: -145px;
    top: auto;
    right: 0%;
    bottom: -60px;
    width: 40px;
    height: 40px;
    border-style: solid;
    border-width: 1px;
    border-color: #793f98;
    border-radius: 100px;
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    color: #793f98;
  }

  .arrow-depoimento:hover {
    background-color: #793f98;
    color: #fff;
  }

  .arrow-depoimento._2 {
    left: 0px;
    right: -145px;
  }

  .icon-10 {
    font-size: 20px;
  }

  .depoimento {
    margin-top: 40px;
    margin-right: 40px;
    margin-left: 40px;
    color: #6e6e6e;
    line-height: 1.8em;
    font-style: italic;
    font-weight: 300;
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
    align-items: center;
  }

  .foto-autor {
    display: none;
    margin-right: 10px;
    border-radius: 100px;
  }

  .nome-autor {
    color: #793f98;
    line-height: 1.3em;
    font-weight: 400;
  }

  .cargo {
    display: none;
    color: #6e6e6e;
    font-size: 12px;
    font-weight: 300;
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
    align-items: flex-start;
  }

  .radio-button-field-4._2 {
    margin-left: 10px;
  }

  .radio-button-label-3 {
    margin-left: 5px;
    color: #fff;
    font-weight: 300;
  }

  .div-escolha-cidade-clientes {
    overflow: hidden;
    height: 0px;
    margin-top: 30px;
    clear: left;
  }

  .div-escolha-cidade-naoclientes {
    overflow: hidden;
    height: 0px;
    margin-top: 10px;
  }

  .text-block-59 {
    position: absolute;
    left: 10px;
    top: auto;
    right: auto;
    bottom: 10px;
    z-index: 3;
  }

  .italic-text-2 {
    color: #fff;
    font-size: 12px;
    text-shadow: 0 0 6px #000;
  }

  .nome-autor-2 {
    color: #793f98;
    line-height: 1.3em;
    font-weight: 400;
  }

  .depoimento-2 {
    margin-top: 40px;
    margin-right: 40px;
    margin-left: 40px;
    color: #6e6e6e;
    line-height: 1.8em;
    font-style: italic;
    font-weight: 300;
  }

  .cargo-2 {
    display: none;
    color: #6e6e6e;
    font-size: 12px;
    font-weight: 300;
  }

  .slider-videos {
    width: 720px;
    height: auto;
    margin-top: 40px;
    margin-right: auto;
    margin-left: auto;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.12);
  }

  .arrow-depoimento-2 {
    left: -145px;
    top: auto;
    right: 0%;
    bottom: -60px;
    width: 40px;
    height: 40px;
    border-style: solid;
    border-width: 1px;
    border-color: #793f98;
    border-radius: 100px;
    -webkit-transition: all 200ms ease-in;
    transition: all 200ms ease-in;
    color: #793f98;
  }

  .arrow-depoimento-2:hover {
    background-color: #793f98;
    color: #fff;
  }

  .arrow-depoimento-2._2 {
    left: 0px;
    right: -145px;
  }

  .slider-6 {
    height: 360px;
    margin-top: 40px;
    border-radius: 10px;
  }

  .div-slide-videos {
    position: relative;
    width: 640px;
    margin-right: auto;
    margin-left: auto;
  }

  .slide-17 {
    overflow: hidden;
    border-radius: 10px;
  }

  .slide-18 {
    overflow: hidden;
    border-radius: 10px;
  }

  .div-logo-vila-profeta {
    display: inline-block;
    margin-bottom: 20px;
    padding: 10px 20px;
    border-radius: 10px;
    background-color: hsla(0, 0%, 100%, 0.8);
  }

  .h1-vila-profeta {
    color: #fff;
    font-weight: 200;
  }

  .bold-text-48 {
    color: #82ea5b;
  }

  .text-span-2 {
    background-color: transparent;
    color: #ff5aad;
  }

  .lime {
    color: #82ea5b;
  }

  .paragrafo {
    margin-bottom: 20px;
    color: #6e6e6e;
    line-height: 1.6em;
    font-weight: 300;
  }

  .paragrafo.right {
    text-align: right;
  }

  .paragrafo.branco {
    color: #fff;
  }

  .destaque-rosa {
    color: #f7287c;
    font-weight: 700;
  }

  .destaque-rosa._2 {
    color: #f7287c;
  }

  .destaque-rosa._3 {
    color: #793f98;
  }

  .destaque-rosa._4 {
    color: #793f98;
  }

  .destaque-rosa._5 {
    color: #f7287c;
  }

  .destaque-rosa._6 {
    color: #ac41d8;
  }

  .destaque-rosa._7 {
    color: #079d56;
  }

  .destaque-rosa.lime {
    color: #82ea5b;
  }

  .roxo {
    color: #793f98;
  }

  .roxo.bold {
    font-weight: 700;
  }

  .div-margem {
    padding-top: 100px;
    background-color: #006b3f;
  }

  .div-submenu {
    position: fixed;
    z-index: 9999;
    width: 100%;
    height: 82px;
    padding-top: 10px;
    padding-bottom: 10px;
    background-color: #006b3f;
    color: transparent;
  }

  .div-block-7 {
    display: inline-block;
    margin-right: auto;
    margin-left: auto;
    text-align: center;
  }

  .link-submenu {
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #fff;
    font-weight: 400;
    text-decoration: none;
  }

  .link-submenu:hover {
    border-bottom: 0px none #ff8b22;
    color: #ff8b22;
    font-weight: 500;
  }

  .link-11 {
    margin-right: 30px;
    padding-left: 20px;
    text-decoration: none;
  }

  .navbar-desktop {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    text-align: left;
  }

  .image-26 {
    width: 400px;
    margin-top: 20px;
  }

  .nossa-historia {
    display: block;
    height: auto;
    margin-top: 80px;
    padding-top: 20px;
    -webkit-transition: all 400ms ease;
    transition: all 400ms ease;
  }

  .div-block-9 {
    display: none;
  }

  .dropdown-menu {
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .dropdown-toggle-2 {
    padding-top: 0px;
    padding-bottom: 0px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #fff;
  }

  .dropdown-toggle-2:hover {
    color: #ff8b22;
    font-weight: 500;
  }

  .dropdown-list-2 {
    display: none;
    margin-top: 0px;
    padding-top: 0px;
    border-bottom: 1px solid #ff8b22;
    background-color: #fff;
    box-shadow: 3px 0 14px -12px #000;
    -webkit-transform: translate(0px, 10px);
    -ms-transform: translate(0px, 10px);
    transform: translate(0px, 10px);
  }

  .dropdown-link-submenu {
    color: #006b3f;
  }

  .dropdown-link-submenu:hover {
    background-color: #f7f7f7;
    color: #ff8b22;
    text-decoration: none;
  }

  .dropdown-link-submenu:active {
    color: #ff8b22;
  }

  .dropdown-link-submenu:focus {
    color: #ff8b22;
    text-decoration: none;
  }

  .dropdown-link-submenu:visited {
    color: #ff8b22;
    text-decoration: none;
  }

  .dropdown-link-submenu.w--current {
    display: none;
    color: #ff8b22;
  }

  .apresentacao-institucional {
    display: block;
    margin-top: 80px;
    margin-bottom: 0px;
    padding-top: 0px;
    padding-bottom: 40px;
    background-color: #f8f8f8;
  }

  .filtro-ano {
    padding: 20px;
  }

  .filto-por-ano {
    display: block;
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    background-color: #ececec;
  }

  .paragraph-40 {
    display: inline;
  }

  .field-label-3 {
    display: inline-block;
    width: auto;
    height: auto;
    padding-right: 20px;
    color: #006b3f;
    font-weight: 500;
  }

  .select-field-7 {
    display: inline-block;
    width: auto;
    border-radius: 20px;
  }

  .select-field-7:active {
    padding-right: 20px;
    padding-left: 20px;
    border-style: solid;
    border-width: 1px;
    border-color: #006b3f;
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
    grid-template-rows: auto;
  }

  .btn-filtro-investidores {
    margin-top: -13px;
    margin-left: 20px;
    padding-right: 25px;
    padding-left: 25px;
    border-radius: 20px;
    background-color: #ff8b22;
  }

  .form-block-6 {
    height: 40px;
    margin-bottom: 0px;
  }

  .titulo-ano {
    display: none;
    margin-top: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 20px;
    border-bottom: 1px solid #ff8b22;
    background-color: #fff;
    color: #fff;
  }

  .heading-35 {
    margin-top: 0px;
    margin-bottom: 0px;
    color: #006b3f;
    font-size: 20px;
    font-weight: 700;
  }

  .lista-arquivo {
    margin-top: 20px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 20px;
    border-bottom: 1px solid #079d56;
    background-color: transparent;
    color: #fff;
  }

  .nome-do-arquivo {
    display: inline-block;
    margin-top: 0px;
    margin-bottom: 0px;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #6e6e6e;
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
  }

  .nome-do-arquivo:hover {
    color: #ff8b22;
    font-weight: 500;
  }

  .image-27 {
    width: 15px;
    margin-bottom: 5px;
    -webkit-transition: all 400ms ease;
    transition: all 400ms ease;
  }

  .image-27:hover {
    -webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    transform: scale(1.3);
  }

  .link-block-hovercinza {
    padding: 5px;
  }

  .link-block-hovercinza:hover {
    border-radius: 5px;
    background-color: transparent;
  }

  .programa-de-integridade {
    display: block;
    margin-top: 0px;
    margin-bottom: 60px;
  }

  .div-administracao {
    display: none;
    overflow: visible;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
  }

  .subtitulos-administracao {
    border-bottom: 1px solid #ff8b22;
  }

  .title-administracao {
    display: inline-block;
    margin-top: 0px;
    margin-bottom: 0px;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #ff8b22;
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
  }

  .title-administracao:hover {
    color: #ff8b22;
    font-weight: 500;
  }

  .div-nome-administrador {
    position: relative;
    height: 100px;
    margin-top: 20px;
    padding: 20px;
    border-style: solid;
    border-width: 1px;
    border-color: #b6b6b6;
    border-radius: 10px;
  }

  .nome-administrador {
    display: inline-block;
    margin-top: 0px;
    margin-bottom: 0px;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #6e6e6e;
    font-size: 16px;
    line-height: 20px;
    font-weight: 500;
  }

  .nome-administrador:hover {
    color: #6e6e6e;
    font-weight: 500;
  }

  .divisor {
    height: 1px;
    margin-top: 5px;
    background-color: #b6b6b6;
  }

  .description-administracao {
    position: absolute;
    left: 2%;
    top: 50px;
    right: auto;
    bottom: 0%;
    display: inline-block;
    margin-top: 10px;
    color: #6e6e6e;
    font-size: 13px;
  }

  .description-mandato-administracao {
    position: absolute;
    left: auto;
    top: 50px;
    right: 2%;
    bottom: 0%;
    display: inline-block;
    margin-top: 10px;
    color: #6e6e6e;
    font-size: 13px;
  }

  .estatuto-social {
    display: block;
    height: auto;
    margin-top: 60px;
    margin-bottom: 0px;
    padding-top: 40px;
    padding-bottom: 60px;
    -webkit-transition: all 400ms ease;
    transition: all 400ms ease;
  }

  .administracao {
    display: block;
    margin-top: 0px;
    margin-bottom: 0px;
    padding-top: 0px;
    padding-bottom: 60px;
    background-color: #f8f8f8;
  }

  .div-diretoria-executiva {
    display: none;
    overflow: visible;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
  }

  .atas-e-assembleias {
    display: block;
    margin-top: 0px;
    margin-bottom: 0px;
    padding-top: 0px;
    padding-bottom: 60px;
    background-color: #fff;
  }

  .politicas {
    display: block;
    margin-bottom: 0px;
    padding-top: 20px;
    padding-bottom: 60px;
    background-color: #f8f8f8;
  }

  .centra-de-resultados {
    display: block;
    height: auto;
    margin-top: 40px;
    margin-bottom: 60px;
    padding-top: 40px;
    -webkit-transition: all 400ms ease;
    transition: all 400ms ease;
  }

  .description-mandato-administracao-2 {
    position: absolute;
    left: auto;
    top: 50px;
    right: 2%;
    bottom: 0%;
    display: inline-block;
    margin-top: 10px;
    color: #6e6e6e;
    font-size: 13px;
  }

  .nome-do-arquivo-2 {
    display: inline-block;
    margin-top: 0px;
    margin-bottom: 0px;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #6e6e6e;
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
  }

  .nome-do-arquivo-2:hover {
    color: #ff8b22;
    font-weight: 500;
  }

  .nome-administrador-2 {
    display: inline-block;
    margin-top: 0px;
    margin-bottom: 0px;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #6e6e6e;
    font-size: 16px;
    line-height: 20px;
    font-weight: 500;
  }

  .nome-administrador-2:hover {
    color: #6e6e6e;
    font-weight: 500;
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
    -ms-grid-columns: 1fr 0.25fr 0.25fr 0.25fr;
    grid-template-columns: 1fr 0.25fr 0.25fr 0.25fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
    border-bottom: 1px solid #079d56;
    background-color: #006b3f;
    color: #fff;
  }

  .image-28 {
    width: 15px;
    margin-bottom: 5px;
    -webkit-transition: all 400ms ease;
    transition: all 400ms ease;
  }

  .image-28:hover {
    -webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    transform: scale(1.3);
  }

  .link-block-hovercinza-2 {
    padding: 0px 5px;
  }

  .link-block-hovercinza-2:hover {
    border-radius: 5px;
    background-color: transparent;
  }

  .description-administracao-2 {
    position: absolute;
    left: 2%;
    top: 50px;
    right: auto;
    bottom: 0%;
    display: inline-block;
    margin-top: 10px;
    color: #6e6e6e;
    font-size: 13px;
  }

  .div-trimestres {
    display: block;
    overflow: visible;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
  }

  .title-ano {
    display: inline-block;
    margin-top: 10px;
    margin-bottom: 10px;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #fff;
    font-size: 18px;
    line-height: 20px;
    font-weight: 600;
  }

  .title-ano:hover {
    margin-top: 10px;
    margin-bottom: 10px;
    color: #fff;
    font-weight: 500;
  }

  .grid-trimestres {
    display: -ms-grid;
    display: grid;
    margin-top: 20px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 20px;
    grid-auto-columns: 1fr;
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    -ms-grid-columns: 1fr 0.25fr 0.25fr 0.25fr 0.25fr;
    grid-template-columns: 1fr 0.25fr 0.25fr 0.25fr 0.25fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
    border-bottom: 1px solid #079d56;
    background-color: #fff;
    color: #fff;
  }

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
    -ms-grid-columns: 1fr 0.25fr 0.25fr 0.25fr 0.25fr;
    grid-template-columns: 1fr 0.25fr 0.25fr 0.25fr 0.25fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
    border-bottom: 1px solid #079d56;
    background-color: #079d56;
    color: #fff;
  }

  .nome-administrador-2-copy {
    display: inline-block;
    margin-top: 0px;
    margin-bottom: 0px;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #6e6e6e;
    font-size: 16px;
    line-height: 20px;
    font-weight: 500;
  }

  .nome-administrador-2-copy:hover {
    color: #6e6e6e;
    font-weight: 500;
  }

  .icone-trimestres {
    width: 35px;
    margin-bottom: 5px;
    -webkit-transition: all 400ms ease;
    transition: all 400ms ease;
  }

  .icone-trimestres:hover {
    -webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    transform: scale(1.3);
  }

  .icone-trimestres.icones-pdf {
    width: 30px;
  }

  .drop-link-menu {
    display: block;
    -webkit-transition: opacity 400ms ease;
    transition: opacity 400ms ease;
    color: #006b3f;
  }

  .drop-link-menu:hover {
    color: #ff8b22;
  }

  .destaque-roxo {
    color: #793f98;
  }

  .html-embed {
    margin-top: 0px;
  }

  .bold-text-49 {
    color: #82ea5b;
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
    align-items: center;
  }

  .search {
    position: relative;
    left: auto;
    top: 0%;
    right: 0%;
    bottom: 0%;
    display: block;
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 110px;
    padding-top: 0px;
    grid-auto-columns: 1fr;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    -ms-grid-rows: auto auto;
    grid-template-rows: auto auto;
    background-color: transparent;
    text-align: right;
  }

  .lupa {
    position: absolute;
    left: auto;
    top: 0%;
    right: 0%;
    bottom: 0%;
    width: 35px;
    margin-top: 10px;
    cursor: pointer;
  }

  .lupa:hover {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2);
  }

  .form-block-7 {
    display: block;
    width: auto;
    margin-top: 0px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    grid-auto-columns: 1fr;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    -ms-grid-rows: auto auto;
    grid-template-rows: auto auto;
    text-align: right;
  }

  .form-9 {
    display: block;
    width: auto;
    margin-top: 25px;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: transparent;
    text-align: center;
  }

  .text-field-7 {
    position: static;
    left: auto;
    top: auto;
    right: 0%;
    bottom: 0%;
    display: block;
    margin-bottom: 0px;
    text-align: left;
  }

  .div-block-13 {
    position: relative;
    display: block;
    width: 200px;
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 0px;
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
    -webkit-transform: translate(0px, -14px);
    -ms-transform: translate(0px, -14px);
    transform: translate(0px, -14px);
    text-align: right;
  }

  .image-29 {
    padding-top: 0px;
    text-align: left;
  }

  .columns-23 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .div-img-sobre-2 {
    width: auto;
    height: auto;
    margin-top: -25px;
    text-align: center;
  }

  .div-img-sobre-2.venda {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 350px;
    margin-top: 0px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-image: url('../images/slider-empreendimento-03.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .div-subtitulo-section {
    margin-top: 40px;
    padding-left: 20px;
    background-color: #079d56;
  }

  .contato {
    display: block;
    margin-top: 0px;
    margin-bottom: 0px;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f8f8f8;
  }

  .contato.contato-branco {
    background-color: #fff;
  }

  .link-email-urba {
    color: #ff8b22;
    font-size: 16px;
  }

  .image-30 {
    width: 25px;
    margin-right: 10px;
    margin-bottom: -15px;
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
    text-align: right;
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
    text-align: center;
  }

  .paragrafo-comum.legenda {
    margin-top: 20px;
    font-size: 13px;
    font-style: italic;
    text-align: center;
  }

  .paragrafo-comumm {
    color: #565656;
    line-height: 1.8;
    font-weight: 400;
    text-align: left;
  }

  .paragrafo-comumm.margem-top {
    margin-top: 20px;
    text-align: left;
  }

  .link-regime-interno {
    margin-top: 20px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 20px;
    border-bottom: 0px solid #079d56;
    background-color: transparent;
    color: #fff;
    text-align: center;
  }

  .link-regime-interno-2 {
    display: inline-block;
    margin-top: 0px;
    margin-bottom: 0px;
    padding-right: 10px;
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #ff8b22;
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
  }

  .link-regime-interno-2:hover {
    color: #ff8b22;
    font-weight: 500;
  }

  .link-12 {
    color: #ff8b22;
  }

  .div-comite-de-financas {
    display: none;
    overflow: visible;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
  }

  .paragraph-41 {
    color: #6e6e6e;
  }

  .div-comite-de-pessoas {
    display: none;
    overflow: visible;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
  }

  .div-comite-estrategia {
    display: none;
    overflow: visible;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
  }

  .div-comite-governanca {
    display: none;
    overflow: visible;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
  }

  .div-texto-nossa-historia {
    width: 60%;
    margin-right: auto;
    margin-left: auto;
  }

  .columns-24 {
    margin-top: 20px;
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
    align-items: flex-end;
  }

  .navbar-3 {
    background-color: transparent;
  }

  .navbar-mobile {
    position: relative;
    display: none;
    text-align: left;
  }

  .dropdown-menu-mobile {
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .nav-menu-4 {
    background-color: #006b3f;
  }

  .link-mobile {
    margin-right: 30px;
    padding-left: 20px;
    text-decoration: none;
  }

  .image-31 {
    display: inline-block;
    text-align: center;
  }

  .nota {
    padding-top: 8px;
    color: #565656;
    font-size: 11px;
    line-height: 1.8;
    font-weight: 400;
    text-align: center;
  }

  .nota.margem-top {
    margin-top: 20px;
    font-size: 10px;
    text-align: center;
  }

  .image-29-copy {
    margin-top: 10px;
    margin-bottom: 10px;
    padding-top: 0px;
    text-align: left;
  }

  .bold-text-50 {
    color: #ff8b22;
  }

  .icones-obra {
    position: static;
    z-index: auto;
    display: block;
    overflow: visible;
    width: 80px;
    height: 80px;
    margin-right: auto;
    margin-bottom: 10px;
    margin-left: auto;
    float: none;
    clear: both;
    text-align: center;
  }

  .container-3 {
    display: block;
    overflow: hidden;
    padding-bottom: 0px;
    grid-auto-columns: 1fr;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    -ms-grid-rows: auto auto;
    grid-template-rows: auto auto;
    text-align: center;
    -o-object-fit: fill;
    object-fit: fill;
  }

  .div-box-preenchido-itapeva {
    position: absolute;
    left: 0%;
    top: 0%;
    right: auto;
    bottom: auto;
    z-index: 1;
    width: 370px;
    height: 200px;
    border-radius: 20px;
    background-image: linear-gradient(45deg, #009169, #82ea5b);
  }

  .div-box-preenchido-itapeva.regatas-comercial {
    width: 370px;
  }

  .subtitle-lp {
    width: 315px;
    margin-top: 0px;
    margin-bottom: 0px;
    margin-left: 20px;
    color: #fff;
    font-size: 22px;
    line-height: 35px;
    font-weight: 300;
  }

  .subtitle-lp.regatas {
    position: relative;
    z-index: 2;
    width: 300px;
    line-height: 32px;
  }

  .subtitle-lp.itapeva {
    position: relative;
    z-index: 2;
    width: 400px;
    line-height: 32px;
  }

  .subtitle-lp.itapeva {
    position: relative;
    z-index: 2;
    width: 450px;
    margin-top: -20px;
    margin-left: 0px;
    font-size: 19px;
    line-height: 28px;
  }

  .subtitle-lp.monte-mor {
    position: relative;
    z-index: 2;
    width: 450px;
    margin-top: -20px;
    margin-left: 0px;
    background-color: transparent;
    font-size: 19px;
    line-height: 28px;
    font-weight: 500;
    text-align: left;
  }

  .subtitle-lp.residencial-progresso {
    position: relative;
    z-index: 2;
    width: 450px;
    margin-top: 15px;
    margin-bottom: 5px;
    margin-left: 0px;
    background-color: transparent;
    color: #e9bb00;
    font-size: 19px;
    line-height: 28px;
    font-weight: 500;
    text-align: left;
  }

  .subtitle-lp.parque-vitoria {
    position: relative;
    z-index: 2;
    width: 450px;
    margin-top: 15px;
    margin-bottom: 5px;
    margin-left: 0px;
    background-color: transparent;
    color: #00d38d;
    font-size: 19px;
    line-height: 28px;
    font-weight: 500;
    text-align: left;
  }

  .subtitle-lp.parque-vitoria-2 {
    position: relative;
    z-index: 2;
    width: 450px;
    margin-top: -20px;
    margin-left: 0px;
    background-color: transparent;
    font-size: 17px;
    line-height: 28px;
    font-weight: 500;
    text-align: left;
  }

  .subtitle-lp.monte-mor-lan {
    position: static;
    z-index: 2;
    width: 450px;
    margin-top: 0px;
    margin-left: 0px;
    background-color: transparent;
    font-size: 19px;
    line-height: 28px;
    font-weight: 400;
    text-align: left;
  }

  .logo-itapeva {
    width: auto;
    height: 110px;
    margin-right: 0px;
    padding-top: 0px;
    padding-bottom: 2px;
    padding-left: 5px;
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
    text-transform: lowercase;
  }

  .button-33:hover {
    border-color: #dd89ff;
    background-color: transparent;
    color: #dd89ff;
    font-weight: 400;
  }

  .button-33.galeria {
    display: none;
    padding-right: 40px;
    padding-left: 40px;
    border-style: solid;
    border-color: #82ea5b;
    background-color: #82ea5b;
    color: #006b3f;
  }

  .button-33.galeria:hover {
    background-color: transparent;
    color: #82ea5b;
  }

  .button-33.cond {
    margin-top: 50px;
  }

  .button-33.cond.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-33.cond.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-33.itapeva {
    margin-top: 10px;
    margin-left: 0px;
    border-color: #ffb719;
    border-radius: 5px;
    background-color: #ffb719;
    font-size: 14px;
    text-transform: uppercase;
  }

  .button-33.itapeva:hover {
    background-color: transparent;
    color: #ff8b22;
  }

  .button-33.itapeva.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-33.itapeva.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-33.elvira {
    background-color: #433868;
  }

  .button-33.elvira {
    margin-top: 10px;
    margin-left: 0px;
    border-color: #793f98;
    border-radius: 5px;
    background-color: #793f98;
    font-size: 14px;
    text-transform: uppercase;
  }

  .button-33.elvira:hover {
    border-color: #ff8b22;
    background-color: transparent;
    color: #ff8b22;
  }

  .button-33.elvira.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-33.elvira.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-33.progresso {
    border-color: #433868;
    border-radius: 5px;
    background-color: #433868;
    text-transform: uppercase;
  }

  .button-33.progresso:hover {
    background-color: #fff;
    color: #433868;
  }

  .div-block-16 {
    text-align: center;
  }

  .div-block-17 {
    width: 100%;
    margin-top: 40px;
    text-align: center;
  }

  .div-block-17.monte-mor {
    margin-top: 20px;
    text-align: left;
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
    text-transform: lowercase;
  }

  .button-34:hover {
    border-color: #dd89ff;
    background-color: transparent;
    color: #dd89ff;
    font-weight: 400;
  }

  .button-34.galeria {
    display: none;
    padding-right: 40px;
    padding-left: 40px;
    border-style: solid;
    border-color: #82ea5b;
    background-color: #82ea5b;
    color: #006b3f;
  }

  .button-34.galeria:hover {
    background-color: transparent;
    color: #82ea5b;
  }

  .button-34.cond {
    margin-top: 50px;
  }

  .button-34.cond.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-34.cond.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-34.itapeva {
    margin-top: 10px;
    border-color: #ac41d8;
    border-radius: 5px;
    background-color: #ac41d8;
    text-transform: uppercase;
  }

  .button-34.itapeva:hover {
    background-color: transparent;
    color: #ac41d8;
  }

  .button-34.itapeva.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-34.itapeva.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-34.elvira {
    margin-top: 10px;
    border-color: #ff8b22;
    border-radius: 5px;
    background-color: #ff8b22;
    text-transform: uppercase;
  }

  .button-34.elvira:hover {
    border-color: #793f98;
    background-color: transparent;
    color: #ac41d8;
  }

  .button-34.elvira.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-34.elvira.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-34.botao-sao-roque {
    margin-top: 10px;
    border-style: solid;
    border-color: #793f98;
    border-radius: 5px;
    background-color: transparent;
    background-image: -webkit-gradient(linear, left top, right top, from(#ac41d8), to(#793f98));
    background-image: linear-gradient(90deg, #ac41d8, #793f98);
    text-align: center;
    text-transform: uppercase;
  }

  .button-34.botao-sao-roque:hover {
    border-style: solid;
    border-color: #793f98;
    background-color: transparent;
    background-image: none;
    color: #793f98;
  }

  .button-34.botao-sao-roque.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-34.botao-sao-roque.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-34.botao-sao-roque {
    margin-top: 10px;
    margin-bottom: 0px;
    float: none;
    clear: none;
    border-style: solid;
    border-color: #433868;
    border-radius: 5px;
    background-color: #433868;
    background-image: none;
    text-align: center;
    text-transform: uppercase;
    background-clip: border-box;
    -webkit-text-fill-color: inherit;
    cursor: pointer;
  }

  .button-34.botao-sao-roque:hover {
    border-style: solid;
    border-color: #433868;
    background-color: transparent;
    background-image: none;
    color: #433868;
  }

  .button-34.botao-sao-roque.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-34.botao-sao-roque.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-34.botao-sao-roque-2 {
    margin-top: 10px;
    float: none;
    clear: none;
    border-style: solid;
    border-color: #e9bb00;
    border-radius: 5px;
    background-color: transparent;
    background-image: -webkit-gradient(linear, left top, right top, from(#fff), to(#f2f2f2));
    background-image: linear-gradient(90deg, #fff, #f2f2f2);
    color: #e51d71;
    text-align: center;
    text-transform: uppercase;
    background-clip: border-box;
    -webkit-text-fill-color: inherit;
    cursor: pointer;
  }

  .button-34.botao-sao-roque-2:hover {
    border-style: solid;
    border-color: #793f98;
    background-color: transparent;
    background-image: none;
    color: #793f98;
  }

  .button-34.botao-sao-roque-2.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-34.botao-sao-roque-2.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-34.botao-monte-mor {
    margin-top: 10px;
    border-style: solid;
    border-color: #793f98;
    border-radius: 5px;
    background-color: transparent;
    background-image: -webkit-gradient(linear, left top, right top, from(#ac41d8), to(#793f98));
    background-image: linear-gradient(90deg, #ac41d8, #793f98);
    text-align: center;
    text-transform: uppercase;
  }

  .button-34.botao-monte-mor:hover {
    border-style: solid;
    border-color: #793f98;
    background-color: transparent;
    background-image: none;
    color: #793f98;
  }

  .button-34.botao-monte-mor.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-34.botao-monte-mor.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-34.botao-residencial-elvira {
    margin-top: 10px;
    float: none;
    clear: none;
    border-style: solid;
    border-color: #e9bb00;
    border-radius: 5px;
    background-color: #e9bb00;
    color: #433868;
    text-align: center;
    text-transform: uppercase;
    background-clip: border-box;
    -webkit-text-fill-color: inherit;
    cursor: pointer;
  }

  .button-34.botao-residencial-elvira:hover {
    border-style: solid;
    border-color: #e9bb00;
    background-color: transparent;
    color: #e9bb00;
  }

  .button-34.botao-residencial-elvira.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-34.botao-residencial-elvira.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-34.botao-parque-vitoria {
    margin-top: 20px;
    margin-bottom: 0px;
    float: none;
    clear: none;
    border-style: solid;
    border-color: #793f98;
    border-radius: 5px;
    background-color: #793f98;
    background-image: none;
    text-align: center;
    text-transform: uppercase;
    background-clip: border-box;
    -webkit-text-fill-color: inherit;
    cursor: pointer;
  }

  .button-34.botao-parque-vitoria:hover {
    border-style: solid;
    border-color: #793f98;
    background-color: transparent;
    background-image: none;
    color: #433868;
  }

  .button-34.botao-parque-vitoria.regatas {
    border-style: none;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .button-34.botao-parque-vitoria.regatas:hover {
    border-style: none;
    background-image: linear-gradient(45deg, #ac41d8, #793f98), linear-gradient(45deg, #793f98, #ac41d8);
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
    color: #fff;
  }

  .button-34.botao-parque-vitoria.margin-top {
    margin-top: 0px;
    background-color: #793f98;
  }

  .button-34.botao-parque-vitoria.margin-top:hover {
    border-color: #793f98;
    background-color: #fff;
  }

  .column-25-copy {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    padding-right: 0px;
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
    background-color: #ff8b22;
  }

  .bold-text-23-copy {
    color: #793f98;
    font-weight: 500;
  }

  .image-60 {
    position: absolute;
    left: auto;
    top: auto;
    right: 0%;
    bottom: 0%;
    z-index: 2;
    margin-top: 0px;
    margin-right: -80px;
    -webkit-transform: translate(0px, 19px);
    -ms-transform: translate(0px, 19px);
    transform: translate(0px, 19px);
  }

  .image-60.dunlop {
    margin-right: 0px;
  }

  .html-embed-2 {
    height: auto;
  }

  .div-block-18 {
    margin-top: 40px;
    text-align: center;
  }

  .div-block-18.monte-mor {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 0px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .video-itapeva {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #f8f8f8;
    background-image: linear-gradient(45deg, #009169, #82ea5b);
  }

  .video-itapeva.giardino {
    display: none;
  }

  .video-itapeva.reserva {
    display: none;
  }

  .video-itapeva.bem-viver-campos {
    display: none;
  }

  .video-itapeva.elvira {
    background-image: linear-gradient(315deg, #793f98, #ac41d8);
  }

  .video-itapeva.video-sao-roque {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#e51d71), to(#ca0a5f));
    background-image: linear-gradient(180deg, #e51d71, #ca0a5f);
  }

  .column-69 {
    padding-right: 10px;
    padding-left: 0px;
  }

  .column-70 {
    padding-right: 0px;
  }

  .checkbox-field-2 {
    display: block;
    width: 100px;
    margin-right: auto;
    margin-left: auto;
  }

  .checkbox-field-2.montemor {
    margin-right: 0px;
    margin-left: 0px;
    text-align: left;
  }

  .checkbox-label-4 {
    margin-right: auto;
    margin-left: auto;
  }

  .div-block-19 {
    text-align: center;
  }

  .div-block-19.montemor {
    text-align: left;
  }

  .detaque-laranja {
    color: #ff8b22;
  }

  .heading-36 {
    position: relative;
    z-index: 2;
    width: 330px;
    font-family: Poppins, sans-serif;
    color: #fff;
    font-size: 29px;
    line-height: 38px;
    font-weight: 300;
  }

  .heading-36.elvira {
    margin-top: 20px;
  }

  .heading-36.elvira.monte-mor {
    text-align: left;
  }

  .heading-36.elvira.sao-roque {
    text-align: left;
  }

  .heading-36.elvira.monte-mor-lan {
    width: auto;
    margin-top: 0px;
    margin-bottom: 0px;
    text-align: left;
  }

  .heading-36.elvira-copy {
    margin-top: 20px;
  }

  .heading-36.elvira-copy.monte-mor {
    text-align: left;
  }

  .heading-36.elvira-copy.sao-roque {
    font-size: 29px;
    line-height: 38px;
    text-align: left;
  }

  .heading-36.elvira-copy.residencial-progresso {
    position: relative;
    margin-top: 0px;
    font-size: 29px;
    line-height: 38px;
    text-align: left;
  }

  .heading-36.elvira-copy.parque-vitoria {
    position: relative;
    width: 280px;
    margin-top: 0px;
    font-size: 29px;
    line-height: 38px;
    text-align: left;
  }

  .text-span-3 {
    font-weight: 700;
  }

  .destaque-laranja {
    color: #ff8b22;
    font-weight: 700;
  }

  .micro-rodape {
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #535353;
  }

  .micro-rodape.rodape-montemor {
    background-color: #fff;
  }

  .micro-rodape.rodape-montemor-copy {
    background-color: #fff;
  }

  .paragraph-42 {
    color: #b1b1b1;
    font-size: 12px;
  }

  .paragraph-42.center {
    text-align: center;
  }

  .grid-5 {
    grid-column-gap: 20px;
    -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
  }

  .porcentagem-obra {
    display: block;
    margin-top: -20px;
    margin-bottom: 0px;
    color: #006b3f;
    line-height: 1.6em;
    font-weight: 300;
    text-align: center;
  }

  .porcentagem-obra.right {
    text-align: right;
  }

  .porcentagem-obra.branco {
    color: #fff;
    font-style: normal;
  }

  .porcentagem-obra.numero-obra {
    margin-bottom: 0px;
  }

  .lightbox-link-7 {
    display: block;
    height: auto;
    margin-top: 40px;
    text-decoration: none;
  }

  .slide-19 {
    height: auto;
  }

  .mask {
    height: 800px;
  }

  .div-block-20 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 200px;
    height: 40px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 5px;
    background-image: -webkit-gradient(linear, left top, right top, from(#ac41d8), to(#793f98));
    background-image: linear-gradient(90deg, #ac41d8, #793f98);
    -webkit-transition: all 400ms ease-in;
    transition: all 400ms ease-in;
    text-align: center;
  }

  .div-block-20:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }

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
    -webkit-transition: all 200ms ease;
    transition: all 200ms ease;
    text-align: center;
  }

  .paragraph-43 {
    margin-bottom: 0px;
    color: #fff;
    font-weight: 500;
    text-decoration: none;
  }

  .text-span-4 {
    font-weight: 600;
  }

  .destaque-vermelho {
    color: red;
    font-weight: 500;
  }

  .logo-elvira {
    width: auto;
    height: 110px;
    margin-left: 6px;
    padding-top: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .elvira-slide-1 {
    background-image: url('../images/URBA_RESERVA_MONTE_MOR_RUA_CASAS.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .envira-slide-2 {
    background-image: url('../images/URBA_RESERVA_BOULEVARD_A2.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .elvira-slide-3 {
    background-image: url('../images/URBA_RESERVA_MONTE_MOR_PORTARIA.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .elvira-slide-4 {
    background-image: url('../images/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01.jpg');
    background-position: 50% 50%;
    background-size: cover;
  }

  .elvira-aerea {
    height: auto;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
  }

  .elvira-aerea:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }

  .elvira-colunas {
    margin-top: 40px;
  }

  .elvira-colunas.monte-mor {
    width: 80%;
  }

  .lightbox-link-8 {
    overflow: hidden;
    width: 260px;
    height: 400px;
  }

  .div-planta-03 {
    width: 210px;
    height: 400px;
    background-image: url('../images/planta02.jpg');
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
  }

  .div-planta-03:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }

  .div-planta-03.giardino {
    background-image: url('../images/planta-02.jpg');
  }

  .div-planta-03.reserva {
    background-image: url('../images/planta-02_1.jpg');
  }

  .div-planta-03.bem-viver {
    background-image: url('../images/planta02_1.jpg');
  }

  .div-planta-03.girassois {
    background-image: url('../images/planta-02_2.jpg');
  }

  .div-planta-03.campos {
    background-image: url('../images/planta02_2.jpg');
  }

  .div-planta-03.tulipas {
    background-image: url('../images/planta-02_3.jpg');
  }

  .div-planta-03.bem-campos {
    background-image: url('../images/planta-02_4.jpg');
  }

  .div-planta-03.regatas {
    background-image: url('../images/planta-02_5.jpg');
  }

  .div-planta-03.elvira {
    background-image: url('../images/Planta-Humanizada_SecondFloor.jpg');
  }

  .column-71 {
    padding-right: 0px;
    padding-left: 0px;
  }

  .mapa-elvira {
    height: 100%;
  }

  .ipca {
    margin-top: 0px;
    color: #079d56;
    font-size: 12px;
    font-style: italic;
    font-weight: 300;
    text-align: center;
  }

  .cond-elvira {
    width: 80%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    text-align: center;
  }

  .cond-elvira.cond {
    width: 90%;
  }

  .cond-elvira.cod {
    display: block;
    margin-top: 70px;
    padding-bottom: 10px;
  }

  .elvira-roxo {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    padding-right: 0px;
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
    background-color: #793f98;
  }

  .elvira-seta-laranja {
    position: absolute;
    left: auto;
    top: auto;
    right: 0%;
    bottom: 0%;
    z-index: 2;
    margin-top: 0px;
    margin-right: -80px;
    -webkit-transform: translate(0px, 19px);
    -ms-transform: translate(0px, 19px);
    transform: translate(0px, 19px);
  }

  .elvira-seta-laranja.dunlop {
    margin-right: 0px;
  }

  .elvira-destaque-verde {
    color: #ff8b22;
    font-weight: 500;
  }

  .div-box-preenchido-elvira {
    position: absolute;
    left: 0%;
    top: 0%;
    right: auto;
    bottom: auto;
    z-index: 1;
    width: 370px;
    height: 200px;
    border-radius: 20px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .div-box-preenchido-elvira.regatas-comercial {
    width: 370px;
  }

  .destaque-h2-elvira {
    color: #ff8b22;
    font-weight: 600;
  }

  .destaque-h2-elvira.lime {
    color: #82ea5b;
  }

  .destaque-h2-elvira.roxo {
    color: #793f98;
  }

  .destaque-h2-elvira.itapeva {
    color: #ac41d8;
    text-shadow: none;
  }

  .destaque-h2-copy {
    color: #079d56;
    font-weight: 600;
  }

  .destaque-h2-copy.lime {
    color: #82ea5b;
  }

  .destaque-h2-copy.roxo {
    color: #793f98;
  }

  .destaque-h2-copy.itapeva {
    color: #ac41d8;
    text-shadow: none;
  }

  .detaque-roxo {
    color: #793f98;
  }

  .destaque-verde {
    color: #00d38d;
    font-weight: 700;
  }

  .topicos-elvira {
    color: #079d56;
    font-size: 16px;
    text-align: center;
  }

  .img-bairro-planejado {
    margin-top: 0px;
    margin-bottom: 30px;
    padding-top: 0px;
  }

  .destaque-verde-escuro {
    color: #079d56;
    font-weight: 700;
  }

  .logo-monte-mor {
    width: auto;
    height: 160px;
    max-width: 100%;
    margin-right: 0px;
    padding: 10px;
  }

  .priv-monte-mor {
    color: #fff;
    text-align: left;
    text-shadow: 0 0 2px #000;
  }

  .priv-check-monte-mor {
    margin-top: 5px;
    text-align: left;
  }

  .destaque-monte-mor {
    color: #793f98;
    font-weight: 700;
  }

  .destaque-monte-mor-paragrafo {
    color: #ff8b22;
    font-weight: 600;
  }

  .text-span-5 {
    font-weight: 700;
  }

  .div-block-22 {
    padding-bottom: 22px;
    text-align: center;
  }

  .image-61 {
    padding-top: 10px;
  }

  .italic-text-3 {
    text-align: center;
  }

  .div-block-23 {
    padding-top: 30px;
  }

  .destaque-monte-mor-verde {
    color: #ff8b22;
    font-weight: 700;
  }

  .topicos-montemor {
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
    color: #565656;
    font-size: 16px;
    text-align: center;
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
    padding: 0px 20px;
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
    border: 1px none #000;
  }

  .icone-montemor.end {
    border-right-style: none;
  }

  .destaque-monte-mor-roxo {
    color: #e31d70;
    font-weight: 700;
  }

  .icone-topicos {
    margin-bottom: 0px;
    background-color: rgba(185, 40, 40, 0);
  }

  .icone-topicos.comercial {
    -webkit-transform: translate(0px, 19px);
    -ms-transform: translate(0px, 19px);
    transform: translate(0px, 19px);
  }

  .icone-topicos.arvore {
    margin-top: 25px;
    margin-bottom: 20px;
  }

  .icone-topicos.lazer {
    margin-bottom: 10px;
  }

  .grid-6 {
    width: 100%;
    grid-row-gap: 0px;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
  }

  .div-block-24 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    margin-top: 10px;
    padding: 20px;
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
    border-radius: 18px;
    background-color: #793f98;
  }

  .image-5 {
    width: 70px;
    max-width: none;
    padding: 0px;
  }

  .paragrafo-2 {
    width: 100%;
    margin-bottom: 0px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 10px;
    font-family: Montserrat, sans-serif;
    color: #fff;
    font-size: 16px;
    line-height: 24px;
  }

  .paragrafo-2.topicos {
    padding-bottom: 0px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    color: #793f98;
    text-align: center;
  }

  .paragrafo-2.topicos.mobile {
    font-family: Poppins, sans-serif;
    color: #fff;
    font-weight: 400;
  }

  .paragrafo-bold {
    color: #fff;
    font-weight: 700;
    text-align: center;
  }

  .colunas-montemor {
    height: 100%;
  }

  .coluna-1-monte-mor {
    width: 80%;
  }

  .right-arrow-4 {
    position: absolute;
    top: -100px;
    right: -70px;
    bottom: 0px;
    display: none;
  }

  .bold {
    font-weight: 800;
  }

  .h1-2 {
    font-family: Montserrat, sans-serif;
    color: #fff;
    font-size: 40px;
    font-weight: 400;
  }

  .h1-2.verde-claro {
    color: #b6ce5e;
    line-height: 35px;
  }

  .h1-2.verde-claro.center {
    padding-bottom: 20px;
    font-family: Poppins, sans-serif;
    color: #fff;
    font-size: 28px;
    font-weight: 200;
    text-align: center;
  }

  .h1-2.verde-claro.center.parque-vitoria {
    color: #793f98;
    text-shadow: none;
  }

  .h1-2.verde-claro.center {
    padding-bottom: 20px;
    font-family: Poppins, sans-serif;
    color: #fff;
    font-size: 28px;
    font-weight: 200;
    text-align: center;
  }

  .h1-2.verde-claro.center.parque-vitoria {
    color: #793f98;
    text-shadow: none;
  }

  .icon-12 {
    color: #b6ce5e;
    font-size: 24px;
  }

  .galeria-monte {
    position: relative;
    left: 0%;
    top: auto;
    right: 0%;
    bottom: 0%;
    display: block;
    margin-top: 20px;
    margin-bottom: 0px;
    padding: 10px 0px;
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
    font-family: Poppins, sans-serif;
    color: #fff;
    font-size: 11px;
    text-align: center;
    text-decoration: none;
    text-transform: none;
  }

  .galeria-monte.alameda-reserva {
    height: 71px;
    line-height: 13px;
  }

  .image-66 {
    display: inline-block;
    overflow: visible;
    width: 100%;
    height: 250px;
    max-height: none;
    max-width: none;
    margin-left: 0px;
    padding-left: 0px;
    border: 1px none #000;
    border-radius: 20px;
    -o-object-fit: cover;
    object-fit: cover;
  }

  .image-66.imagem-residencial-progresso {
    display: block;
    width: 500px;
    border-radius: 20px;
    -o-object-fit: fill;
    object-fit: fill;
  }

  .lightbox-link-10 {
    display: inline-block;
    overflow: hidden;
    width: 640px;
    height: auto;
    margin-right: 0px;
    margin-left: 0px;
    padding-right: 0px;
    padding-left: 0px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    border-radius: 20px;
    text-decoration: none;
    -o-object-fit: fill;
    object-fit: fill;
  }

  .lightbox-link-10.lightbox-residencial-progresso {
    display: block;
    width: 500px;
  }

  .slide-nav-6 {
    display: none;
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
    object-fit: fill;
  }

  .galeria-bold {
    border: 1px none #000;
    font-family: Poppins, sans-serif;
    font-size: 23px;
    font-weight: 500;
  }

  .container-padrao-3 {
    display: block;
    max-width: 80%;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-flex-wrap: wrap-reverse;
    -ms-flex-wrap: wrap-reverse;
    flex-wrap: wrap-reverse;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-align-content: space-around;
    -ms-flex-line-pack: distribute;
    align-content: space-around;
  }

  .container-padrao-3.regatas {
    margin-top: 30px;
  }

  .slider-7 {
    display: block;
    width: 800px;
    height: 100%;
    margin-right: auto;
    margin-left: auto;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-justify-content: space-around;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-align-content: space-around;
    -ms-flex-line-pack: distribute;
    align-content: space-around;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    -ms-grid-row-align: auto;
    align-self: auto;
    -webkit-box-flex: 0;
    -webkit-flex: 0 auto;
    -ms-flex: 0 auto;
    flex: 0 auto;
    background-color: hsla(0, 0%, 100%, 0);
  }

  .slider-7.mobile {
    display: none;
  }

  .dobra-4 {
    padding-top: 80px;
    padding-bottom: 80px;
    border-style: none;
    border-width: 1px;
    border-color: #398269;
    background-color: #793f98;
    text-align: center;
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
    flex: 1;
  }

  .slide-20 {
    position: static;
    height: auto;
  }

  .left-arrow-4 {
    left: -70px;
    top: -100px;
    display: none;
    color: #b6ce5e;
    font-size: 24px;
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
    object-fit: fill;
  }

  .slider-8 {
    background-color: transparent;
  }

  .icon-13 {
    color: #ff8b22;
    font-size: 24px;
  }

  .icon-14 {
    color: #ff8b22;
  }

  .div-box-preenchido-sao-roque {
    position: absolute;
    left: 0%;
    top: 0%;
    right: auto;
    bottom: auto;
    z-index: 1;
    width: 370px;
    height: 200px;
    border-radius: 20px;
    background-image: linear-gradient(45deg, #f08715, #f69833);
  }

  .div-box-preenchido-sao-roque.regatas-comercial {
    width: 370px;
  }

  .logo-sao-roque {
    width: auto;
    height: 130px;
    max-width: 100%;
    margin-right: 0px;
    padding: 0px;
  }

  .bold-text-51 {
    color: #433868;
  }

  .topicos-sao-roque-02 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 25%;
    height: auto;
    margin-right: 10px;
    margin-left: 10px;
    padding: 0px 20px;
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
    -webkit-align-self: flex-start;
    -ms-flex-item-align: start;
    align-self: flex-start;
    border: 1px none #000;
  }

  .topicos-sao-roque-02.end {
    border-right-style: none;
  }

  .icone-montemor-copy {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 250px;
    height: 185px;
    margin-right: 10px;
    margin-left: 10px;
    padding: 0px 20px;
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
    border: 1px none #000;
  }

  .icone-montemor-copy.end {
    border-right-style: none;
  }

  .icone-montemor-copy-copy {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 250px;
    height: 185px;
    margin-right: 10px;
    margin-left: 10px;
    padding: 0px 20px;
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
    border: 1px none #000;
  }

  .icone-montemor-copy-copy.end {
    border-right-style: none;
  }

  .div-infos-terreno-sao-roque {
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
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
  }

  .div-infos-terreno-sao-roque.padding-top {
    padding-top: 40px;
  }

  .icone-montemor-copy {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 250px;
    height: 185px;
    margin-right: 10px;
    margin-left: 10px;
    padding: 0px 20px;
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
    border: 1px none #000;
  }

  .icone-montemor-copy.end {
    border-right-style: none;
  }

  .condicoes-sao-roque {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: visible;
    width: 250px;
    height: auto;
    margin-right: 10px;
    margin-left: 10px;
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
    border: 2px none #000;
    border-radius: 18px;
    background-color: #009169;
    -o-object-fit: fill;
    object-fit: fill;
  }

  .condicoes-sao-roque.end {
    border-right-style: none;
  }

  .texto-condicoes-comerciais-vila-profeta {
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
    color: #793f98;
    font-size: 16px;
    font-weight: 500;
    text-align: center;
  }

  .texto-condicoes-comerciais-vila-profeta.texto-juros {
    margin-top: 10px;
    font-size: 10px;
  }

  .topicos-montemor-copy {
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
    color: #565656;
    font-size: 16px;
    text-align: center;
  }

  .infos-terreno-sao-roque {
    display: block;
    margin-right: auto;
    margin-left: auto;
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fafafa;
  }

  .infos-terreno-sao-roque.monte-mor {
    background-color: #fff;
  }

  .infos-terreno-sao-roque.hidden {
    display: block;
  }

  .div-button-center-sao-roque {
    margin-top: 20px;
    text-align: center;
  }

  .div-button-center-sao-roque.dunlop {
    margin-top: 60px;
  }

  .div-button-center-sao-roque.dunlop._2 {
    margin-top: 100px;
  }

  .div-button-center-sao-roque.dunlop.margin-top-100px {
    margin-top: 0px;
    margin-bottom: 40px;
  }

  .div-button-center-sao-roque.minha-casa {
    margin-top: 40px;
  }

  .galeria-sao-roque {
    padding-top: 80px;
    padding-bottom: 80px;
    border-style: none;
    border-width: 1px;
    border-color: #398269;
    background-color: #ec8515;
    text-align: center;
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
    border: 2px none #000;
    border-radius: 18px;
    background-color: #009169;
    -o-object-fit: fill;
    object-fit: fill;
  }

  .andamento-obra-sao-roque.end {
    border-right-style: none;
  }

  .andamento-sao-roque {
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
    color: #fff;
    font-size: 12px;
    text-align: center;
  }

  .destaque-monte-mor-roxo-escuro {
    color: #793f98;
    font-weight: 700;
  }

  .image-67 {
    height: 104px;
    border-radius: 12px;
  }

  .heading-37 {
    position: absolute;
    left: 0%;
    top: auto;
    right: 0%;
    bottom: 0%;
    margin-top: 0px;
    margin-right: 20px;
    margin-left: 20px;
    color: #fff;
    font-weight: 500;
    text-transform: uppercase;
  }

  .destaque-laranja-2 {
    color: #ff8b22;
    font-weight: 700;
  }

  .destaque-h2-laranja-2 {
    color: #e31d70;
    font-weight: 600;
  }

  .paragraph-44 {
    margin: 20px;
    color: #565656;
    line-height: 1.8;
  }

  .paragraph-44.regatas {
    margin-right: 10px;
    margin-left: 10px;
  }

  .imagem-caracteristica-sao-roque {
    position: relative;
    height: 225px;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeriarua-interna.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeriarua-interna.jpg');
    background-position: 0px 0px, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .imagem-caracteristica-sao-roque._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeriaquadras.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeriaquadras.jpg');
  }

  .imagem-caracteristica-sao-roque._2.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-praça.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-praça.jpg');
  }

  .imagem-caracteristica-sao-roque._2.bem-viver {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-playground.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-playground.jpg');
  }

  .imagem-caracteristica-sao-roque._2.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-playground_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-playground_2.jpg');
  }

  .imagem-caracteristica-sao-roque._2.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-playground_3.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-playground_3.jpg');
  }

  .imagem-caracteristica-sao-roque._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.7))), url('../images/area-comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.7)), url('../images/area-comercial.jpg');
    background-position: 0px 0px, 50% 100%;
  }

  .imagem-caracteristica-sao-roque._3.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-area-comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-area-comercial.jpg');
  }

  .imagem-caracteristica-sao-roque._3.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-area-comercial_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-area-comercial_1.jpg');
  }

  .imagem-caracteristica-sao-roque._3.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-area-comercial_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-area-comercial_2.jpg');
  }

  .imagem-caracteristica-sao-roque.giardino-bianco {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria---guarita.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria---guarita.jpg');
  }

  .imagem-caracteristica-sao-roque.giardino-bianco._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria---rua-interna.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria---rua-interna.jpg');
  }

  .imagem-caracteristica-sao-roque.giardino-bianco._2.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-area-de-lazer.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-area-de-lazer.jpg');
  }

  .imagem-caracteristica-sao-roque.giardino-bianco._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria---piscinas.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria---piscinas.jpg');
  }

  .imagem-caracteristica-sao-roque.giardino-bianco._3.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-piscina_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-piscina_2.jpg');
  }

  .imagem-caracteristica-sao-roque.giardino-bianco.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-guarita_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-guarita_1.jpg');
  }

  .imagem-caracteristica-sao-roque.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna_1.jpg');
  }

  .imagem-caracteristica-sao-roque.bem-viver {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna.jpg');
  }

  .imagem-caracteristica-sao-roque.girassois {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-guarita.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-guarita.jpg');
  }

  .imagem-caracteristica-sao-roque.girassois._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna_2.jpg');
  }

  .imagem-caracteristica-sao-roque.girassois._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-piscina.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-piscina.jpg');
  }

  .imagem-caracteristica-sao-roque.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna_3.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna_3.jpg');
  }

  .imagem-caracteristica-sao-roque.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna_4.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna_4.jpg');
  }

  .imagem-caracteristica-sao-roque.atlanta {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-guarita_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-guarita_2.jpg');
  }

  .imagem-caracteristica-sao-roque.atlanta._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-aérea.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-aérea.jpg');
  }

  .imagem-caracteristica-sao-roque.atlanta._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-piscina_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-piscina_1.jpg');
  }

  .imagem-caracteristica-sao-roque.regatas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
  }

  .imagem-caracteristica-sao-roque.regatas._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/areaverde.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/areaverde.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica-sao-roque.regatas._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-sao-roque.regatas._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica-sao-roque.sao-roque-img {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/INFRAESTRUTURA.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/INFRAESTRUTURA.jpg');
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/areaverde.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/areaverde.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._1 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_VISTA_RUA_CASAS.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_VISTA_RUA_CASAS.jpg');
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg');
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg');
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_RUA_LOJAS.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_RUA_LOJAS.jpg');
  }

  .imagem-caracteristica-sao-roque.sao-roque-img._10 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/DJI_0182.JPG');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/DJI_0182.JPG');
  }

  .imagem-caracteristica-sao-roque.elvira {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
  }

  .imagem-caracteristica-sao-roque.elvira._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/LAZER.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/LAZER.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica-sao-roque.elvira._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-sao-roque.elvira._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica-sao-roque.elvira._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/AREA-COMERCIAL_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/AREA-COMERCIAL_1.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-sao-roque.elvira {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
  }

  .imagem-caracteristica-sao-roque.elvira._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/areaverde.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/areaverde.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica-sao-roque.elvira._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/AREA-COMERCIAL_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/AREA-COMERCIAL_1.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-sao-roque.elvira._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica-sao-roque.elvira._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/Área-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/Área-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg');
  }

  .imagem-caracteristica-sao-roque.residencial-progresso {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/shutterstock_752177230.jpeg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/shutterstock_752177230.jpeg');
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/shutterstock_752177230.jpeg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/shutterstock_752177230.jpeg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._1 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_VISTA_RUA_CASAS.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_VISTA_RUA_CASAS.jpg');
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg');
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg');
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_RUA_LOJAS.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_RUA_LOJAS.jpg');
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._22 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/shutterstock_752177230.jpeg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/shutterstock_752177230.jpeg');
  }

  .imagem-caracteristica-sao-roque.residencial-progresso {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/INFRAESTRUTURA.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/INFRAESTRUTURA.jpg');
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/areaverde.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/areaverde.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._1 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_VISTA_RUA_CASAS-copiar.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_VISTA_RUA_CASAS-copiar.jpg');
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg');
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg');
  }

  .imagem-caracteristica-sao-roque.residencial-progresso._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_RUA_LOJAS.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_RUA_LOJAS.jpg');
  }

  .text-span-6 {
    color: #079d56;
    font-weight: 600;
  }

  .logo-residencial-progresso {
    width: auto;
    height: 130px;
    max-width: 100%;
    margin-right: 0px;
    padding: 0px;
  }

  .div-box-preenchido-residencial-progresso {
    position: absolute;
    left: 0%;
    top: 0%;
    right: auto;
    bottom: auto;
    z-index: 1;
    width: 370px;
    height: 200px;
    border-radius: 20px;
    background-color: #433868;
  }

  .div-box-preenchido-residencial-progresso.regatas-comercial {
    width: 370px;
  }

  .destaque-roxo-residencial-progresso {
    color: #433868;
  }

  .cond-residencial-progresso {
    display: none;
    width: 80%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    text-align: center;
  }

  .cond-residencial-progresso.cond {
    width: 90%;
  }

  .cond-residencial-progresso.cod {
    display: block;
    margin-top: 70px;
    padding-bottom: 10px;
  }

  .galeria-residencial-progresso {
    padding-top: 80px;
    padding-bottom: 80px;
    border-style: none;
    border-width: 1px;
    border-color: #398269;
    background-color: #433868;
    text-align: center;
  }

  .icone-amarelo {
    color: #ffb719;
    font-size: 24px;
  }

  .imagem-ilustrativa {
    margin-top: 10px;
    color: #fff;
    font-size: 12px;
    font-style: italic;
    font-weight: 300;
    text-align: center;
  }

  .imagem-ilustrativa.roxo {
    color: #433868;
  }

  .destaque-amarelo {
    color: #e9bb00;
  }

  .video-residencial-progresso {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #433868;
  }

  .bold-text-52 {
    cursor: pointer;
  }

  .botao-roxo-escuro {
    padding: 9px 35px;
    border: 1px solid #433868;
    border-radius: 5px;
    background-color: #433868;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
  }

  .botao-roxo-escuro:hover {
    background-color: transparent;
    color: #433868;
  }

  .destaque-residencial-progresso {
    color: #006b3f;
    font-weight: 700;
  }

  .grid-diferenciais {
    margin-top: 30px;
    margin-bottom: 60px;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
  }

  .div-diferencial {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: auto;
    padding: 10px 20px;
    border-radius: 15px;
    background-color: #433868;
  }

  .texto-diferencial {
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
    color: #fff;
    font-size: 16px;
    text-align: left;
  }

  .image-68 {
    width: 40px;
    margin-right: 10px;
    -o-object-fit: contain;
    object-fit: contain;
  }

  .coluna-direita-localizacao {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    padding-right: 0px;
    padding-left: 0px;
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
    grid-template-rows: auto auto;
  }

  .lightbox-localizacao {
    border-radius: 0px;
  }

  .image-localizacao {
    border-radius: 20px;
  }

  .image-localizacao.parque-vitoria {
    width: auto;
    height: 430px;
    min-height: auto;
    box-shadow: 8px 8px 13px -7px rgba(0, 0, 0, 0.25);
    text-shadow: none;
    -o-object-fit: cover;
    object-fit: cover;
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
    align-items: center;
  }

  .colunas-montemor-copy {
    height: 100%;
  }

  .bold-text-54 {
    color: #e9bb00;
  }

  .bold-text-54.parque-vitoria {
    color: #793f98;
    text-shadow: none;
  }

  .div-box-preenchido-parque-vitoria {
    position: absolute;
    left: 0%;
    top: 0%;
    right: auto;
    bottom: auto;
    z-index: 1;
    width: 370px;
    height: 200px;
    border-radius: 20px;
    background-color: #793f98;
  }

  .div-box-preenchido-parque-vitoria.regatas-comercial {
    width: 370px;
  }

  .logo-parque-vitoria {
    width: auto;
    height: 150px;
    max-width: 100%;
    margin-right: 0px;
    padding: 0px;
    border-radius: 20px;
  }

  .parque-vitoria {
    color: #fff;
    text-align: left;
    text-shadow: 0 0 2px #000;
  }

  .parque-vitoria._2 {
    font-size: 12px;
  }

  .bold-text-51-copy {
    color: #793f98;
  }

  .columns-26 {
    margin-top: 40px;
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
    grid-template-rows: auto auto;
  }

  .logo-2d {
    display: inline;
    width: 130px;
    margin-right: 20px;
    margin-left: 20px;
  }

  .infos-2d {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fafafa;
  }

  .infos-2d.monte-mor {
    background-color: #fff;
  }

  .infos-2d.monte-mor.infos-terreno-monte {
    padding-bottom: 60px;
  }

  .informacoes-comerciais {
    display: block;
    margin-right: auto;
    margin-left: auto;
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fafafa;
  }

  .informacoes-comerciais.monte-mor {
    background-color: #fff;
  }

  .informacoes-comerciais.hidden {
    display: none;
  }

  .grid-9 {
    width: 80%;
    margin-top: 40px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    justify-items: center;
    -ms-grid-columns: 1fr 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
  }

  .condicoes-comerciais-parque-vitoria {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: visible;
    width: 250px;
    height: auto;
    min-height: 110px;
    margin-right: 0px;
    margin-left: 0px;
    padding: 20px 10px;
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
    align-items: flex-start;
    -webkit-align-self: flex-start;
    -ms-flex-item-align: start;
    align-self: flex-start;
    -webkit-box-ordinal-group: 1;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
    border: 2px none #000;
    border-radius: 18px;
    background-color: #00d38d;
    -o-object-fit: fill;
    object-fit: fill;
  }

  .condicoes-comerciais-parque-vitoria.end {
    border-right-style: none;
  }

  .div-block-27 {
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
  }

  .destaque-roxo-parque-vitoria {
    color: #793f98;
  }

  .imagem-caracteristica-parque-vitoria {
    position: relative;
    height: 225px;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_BAIRRO_VITORIA_RUA_COMERCIAL.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_BAIRRO_VITORIA_RUA_COMERCIAL.jpg');
    background-position: 0px 0px, 50% 50%;
    background-size: auto, cover;
    background-repeat: repeat, no-repeat;
  }

  .imagem-caracteristica-parque-vitoria._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeriaquadras.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeriaquadras.jpg');
  }

  .imagem-caracteristica-parque-vitoria._2.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-praça.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-praça.jpg');
  }

  .imagem-caracteristica-parque-vitoria._2.bem-viver {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-playground.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-playground.jpg');
  }

  .imagem-caracteristica-parque-vitoria._2.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-playground_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-playground_2.jpg');
  }

  .imagem-caracteristica-parque-vitoria._2.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-playground_3.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-playground_3.jpg');
  }

  .imagem-caracteristica-parque-vitoria._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.7))), url('../images/area-comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.7)), url('../images/area-comercial.jpg');
    background-position: 0px 0px, 50% 100%;
  }

  .imagem-caracteristica-parque-vitoria._3.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-area-comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-area-comercial.jpg');
  }

  .imagem-caracteristica-parque-vitoria._3.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-area-comercial_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-area-comercial_1.jpg');
  }

  .imagem-caracteristica-parque-vitoria._3.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-area-comercial_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-area-comercial_2.jpg');
  }

  .imagem-caracteristica-parque-vitoria.giardino-bianco {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria---guarita.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria---guarita.jpg');
  }

  .imagem-caracteristica-parque-vitoria.giardino-bianco._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria---rua-interna.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria---rua-interna.jpg');
  }

  .imagem-caracteristica-parque-vitoria.giardino-bianco._2.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-area-de-lazer.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-area-de-lazer.jpg');
  }

  .imagem-caracteristica-parque-vitoria.giardino-bianco._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria---piscinas.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria---piscinas.jpg');
  }

  .imagem-caracteristica-parque-vitoria.giardino-bianco._3.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-piscina_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-piscina_2.jpg');
  }

  .imagem-caracteristica-parque-vitoria.giardino-bianco.tulipas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-guarita_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-guarita_1.jpg');
  }

  .imagem-caracteristica-parque-vitoria.reserva {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna_1.jpg');
  }

  .imagem-caracteristica-parque-vitoria.bem-viver {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna.jpg');
  }

  .imagem-caracteristica-parque-vitoria.girassois {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-guarita.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-guarita.jpg');
  }

  .imagem-caracteristica-parque-vitoria.girassois._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna_2.jpg');
  }

  .imagem-caracteristica-parque-vitoria.girassois._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-piscina.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-piscina.jpg');
  }

  .imagem-caracteristica-parque-vitoria.campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna_3.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna_3.jpg');
  }

  .imagem-caracteristica-parque-vitoria.bem-campos {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-rua-interna_4.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-rua-interna_4.jpg');
  }

  .imagem-caracteristica-parque-vitoria.atlanta {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-guarita_2.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-guarita_2.jpg');
  }

  .imagem-caracteristica-parque-vitoria.atlanta._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-aérea.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-aérea.jpg');
  }

  .imagem-caracteristica-parque-vitoria.atlanta._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/galeria-piscina_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/galeria-piscina_1.jpg');
  }

  .imagem-caracteristica-parque-vitoria.regatas {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
  }

  .imagem-caracteristica-parque-vitoria.regatas._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/areaverde.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/areaverde.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica-parque-vitoria.regatas._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-parque-vitoria.regatas._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica-parque-vitoria.sao-roque-img {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/INFRAESTRUTURA.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/INFRAESTRUTURA.jpg');
  }

  .imagem-caracteristica-parque-vitoria.sao-roque-img._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/areaverde.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/areaverde.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica-parque-vitoria.sao-roque-img._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-parque-vitoria.sao-roque-img._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica-parque-vitoria.sao-roque-img._1 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_VISTA_RUA_CASAS.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_VISTA_RUA_CASAS.jpg');
  }

  .imagem-caracteristica-parque-vitoria.sao-roque-img._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg');
  }

  .imagem-caracteristica-parque-vitoria.sao-roque-img._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg');
  }

  .imagem-caracteristica-parque-vitoria.sao-roque-img._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_RUA_LOJAS.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_RUA_LOJAS.jpg');
  }

  .imagem-caracteristica-parque-vitoria.sao-roque-img._10 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/DJI_0182.JPG');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/DJI_0182.JPG');
  }

  .imagem-caracteristica-parque-vitoria.elvira {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
  }

  .imagem-caracteristica-parque-vitoria.elvira._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/LAZER.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/LAZER.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica-parque-vitoria.elvira._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-parque-vitoria.elvira._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica-parque-vitoria.elvira._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/AREA-COMERCIAL_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/AREA-COMERCIAL_1.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-parque-vitoria.elvira {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/happy-father-teaching-his-cute-daughter-ride-bicycle-park.jpg');
  }

  .imagem-caracteristica-parque-vitoria.elvira._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/areaverde.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/areaverde.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica-parque-vitoria.elvira._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/AREA-COMERCIAL_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/AREA-COMERCIAL_1.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-parque-vitoria.elvira._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica-parque-vitoria.elvira._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/Área-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/Área-de-Lazer---Imagem-meramente-ilustrativa---CORTADA.jpg');
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/shutterstock_752177230.jpeg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/shutterstock_752177230.jpeg');
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/shutterstock_752177230.jpeg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/shutterstock_752177230.jpeg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._1 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_VISTA_RUA_CASAS.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_VISTA_RUA_CASAS.jpg');
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg');
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg');
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_RUA_LOJAS.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_RUA_LOJAS.jpg');
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._22 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/shutterstock_752177230.jpeg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/shutterstock_752177230.jpeg');
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/INFRAESTRUTURA.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/INFRAESTRUTURA.jpg');
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/areaverde.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/areaverde.jpg');
    background-position: 0px 0px, 50% 50%;
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/parents-their-daughter-are-holding-shopping-bags.jpg');
    background-position: 0px 0px, 50% 0%;
    background-size: auto, cover;
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/comercial.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/comercial.jpg');
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._1 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_VISTA_RUA_CASAS-copiar.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_VISTA_RUA_CASAS-copiar.jpg');
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._2 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_AREAS_COMUNS_QUADRA_AREIA_1.jpg');
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._3 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/father-holding-his-daughter-on-shoulders-and-laughing-1-min.jpg');
  }

  .imagem-caracteristica-parque-vitoria.residencial-progresso._4 {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_RUA_LOJAS.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_RUA_LOJAS.jpg');
  }

  .imagem-caracteristica-parque-vitoria.infraestrutura {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/URBA_BAIRRO_VITORIA_RUA_CASAS.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/URBA_BAIRRO_VITORIA_RUA_CASAS.jpg');
  }

  .imagem-caracteristica-parque-vitoria.area-verde {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/pexels-felix-mittermeier-957024.jpg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/pexels-felix-mittermeier-957024.jpg');
  }

  .imagem-caracteristica-parque-vitoria.villefort {
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(46%, transparent), to(rgba(0, 0, 0, 0.5))), url('../images/villefort.jpeg');
    background-image: linear-gradient(180deg, transparent 46%, rgba(0, 0, 0, 0.5)), url('../images/villefort.jpeg');
  }

  .galeria-parque-vitoria {
    padding-top: 80px;
    padding-bottom: 80px;
    border-style: none;
    border-width: 1px;
    border-color: #398269;
    background-color: #00d38d;
    text-align: center;
  }

  .icone-roxo {
    overflow: hidden;
    color: #793f98;
    font-size: 24px;
  }

  .grid-diferenciais-parque-vitoria {
    margin-top: 60px;
    margin-bottom: 0px;
    -ms-grid-columns: 1fr 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
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
    background-color: #793f98;
  }

  .texto-diferencial-parque-vitoria {
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
    color: #fff;
    font-size: 16px;
    text-align: center;
  }

  .botao-roxo-claro {
    padding: 9px 35px;
    border: 1px solid #793f98;
    border-radius: 5px;
    background-color: #793f98;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
  }

  .botao-roxo-claro:hover {
    background-color: transparent;
    color: #793f98;
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
    align-items: center;
  }

  .rodape-logo-mrv {
    padding: 10px 0px;
    border-top: 2px solid #ff8b22;
    background-color: #fff;
  }

  .rodape-logo-mrv.rodape-montemor {
    background-color: #fff;
  }

  .logo-urba {
    display: inline;
    margin-top: 0px;
    margin-right: 19px;
    margin-left: 19px;
    padding-top: 0px;
    padding-right: 0px;
    padding-left: 0px;
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
    text-align: left;
  }

  .visite-nossa-loja {
    padding-top: 70px;
    padding-bottom: 70px;
    background-color: #793f98;
  }

  .link-block-4 {
    display: block;
    text-decoration: none;
  }

  .div-block-31 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 0px;
    margin-bottom: 10px;
    padding-top: 0px;
    padding-bottom: 0px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .div-block-32 {
    margin-top: 30px;
    margin-bottom: 30px;
  }

  .grid-10 {
    grid-template-areas: ". ."
      ". Area";
  }

  .slider-9 {
    position: relative;
    display: inline-block;
    background-color: transparent;
  }

  .left-arrow-5 {
    position: absolute;
    left: 0%;
    top: 0%;
    right: auto;
    bottom: 0%;
  }

  .right-arrow-5 {
    right: -50px;
  }

  .text-block-60 {
    margin-right: auto;
    margin-left: auto;
    color: #fff;
    font-style: italic;
    text-align: center;
  }

  .text-block-60.legenda {
    color: #ff8b22;
  }

  .slide-21 {
    margin-left: 4px;
  }

  .center {
    text-align: center;
  }

  .div-box-preenchido-monte-mor-lan {
    position: static;
    left: 0%;
    top: 0%;
    right: auto;
    bottom: auto;
    z-index: 1;
    width: 370px;
    height: auto;
    margin-top: 32px;
    margin-bottom: 32px;
    padding: 24px 32px;
    border-radius: 20px;
    background-image: linear-gradient(45deg, #793f98, #ac41d8);
  }

  .div-box-preenchido-monte-mor-lan.regatas-comercial {
    width: 370px;
  }

  .logo-monte-mor-lan {
    text-align: left;
  }

  .colunas-monte-mor-lan.hero {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }

  .colunas-monte-mor-lan.hero-mm-lan {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .col-forms-monte-mor-lan {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding: 0px;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
  }

  .infos-terreno-monte-mor-lan {
    padding-top: 60px;
    padding-bottom: 60px;
    background-color: #fafafa;
  }

  .infos-terreno-monte-mor-lan.monte-mor {
    background-color: #fff;
  }

  .infos-terreno-monte-mor-lan.monte-mor.infos-terreno-monte {
    padding-bottom: 60px;
  }

  .infos-terreno-monte-mor-lan.parquevitoria {
    margin-top: 60px;
    background-color: #fff;
  }

  .infos-terreno-monte-mor-lan.parque-vitoria {
    background-color: #fff;
    text-shadow: none;
  }

  .monte-mor-lan {
    width: 80%;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
    text-align: center;
  }

  .monte-mor-lan.cond {
    width: 90%;
  }

  .monte-mor-lan.cod {
    display: block;
    margin-top: 70px;
    padding-bottom: 10px;
  }

  .monte-mor-lan.cond-mm-lan {
    display: block;
    margin-top: 60px;
    margin-bottom: 60px;
    padding-bottom: 10px;
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
    border-right: 2px solid #ff8b22;
  }

  .coluna-mm-lan.end {
    border-right-style: none;
  }

  .coluna-mm-lan._2 {
    border-right-color: #006b3f;
    background-color: #82ea5b;
  }

  .coluna-mm-lan._2.interna {
    border-right-color: #fafafa;
    background-color: #ebebeb;
    -webkit-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
  }

  .coluna-mm-lan._2.interna:hover {
    background-color: #ff8b22;
  }

  .coluna-mm-lan._2.interna.end.residencial-progresso:hover {
    background-color: #433868;
  }

  .coluna-mm-lan._2.interna.dunlop {
    display: none;
    border-left: 3px solid #fafafa;
    border-right-width: 3px;
    border-radius: 10px;
    background-color: #82ea5b;
  }

  .coluna-mm-lan._2.interna.elvira {
    padding-right: 0px;
    padding-left: 0px;
    color: #fff;
  }

  .coluna-mm-lan._2.interna.elvira:hover {
    background-color: #793f98;
  }

  .coluna-mm-lan._2.interna.residencial-progresso:hover {
    background-color: #433868;
  }

  .coluna-mm-lan._2.interna.residencial-progresso {
    padding-right: 0px;
    padding-left: 0px;
    color: #fff;
  }

  .coluna-mm-lan._2.interna.residencial-progresso:hover {
    background-color: #793f98;
  }

  .coluna-mm-lan._2.interna.mm-lan {
    padding-right: 0px;
    padding-left: 0px;
    color: #565656;
    font-size: 18px;
  }

  .coluna-mm-lan._2.interna.mm-lan:hover {
    background-color: #793f98;
    color: #fff;
  }

  .colunas-mm-lan {
    position: relative;
    top: 50%;
    -webkit-transform: translate(0px, -50%);
    -ms-transform: translate(0px, -50%);
    transform: translate(0px, -50%);
  }

  .colunas-mm-lan._2 {
    position: static;
    margin-top: 40px;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
  }

  .colunas-mm-lan._2.regatas {
    display: none;
  }

  .colunas-mm-lan.itapeva {
    position: static;
    display: none;
    margin-top: 40px;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
  }

  .colunas-mm-lan.itapeva.regatas {
    display: none;
  }

  .colunas-mm-lan._3 {
    position: static;
    margin-top: 1px;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
  }

  .colunas-mm-lan._3.regatas {
    display: none;
  }

  .ipca-mm-lan {
    margin-top: 24px;
    color: #079d56;
    font-size: 12px;
    font-style: italic;
    font-weight: 300;
    text-align: center;
  }

  .txt-cond-mm-lan:hover {
    color: #fff;
  }

  .text-span-7 {
    font-size: 14px;
  }

  .text-span-8 {
    font-size: 14px;
  }

  .destaque-h2-branco {
    color: #079d56;
    font-weight: 600;
  }

  .destaque-h2-branco.lime {
    color: #82ea5b;
  }

  .destaque-h2-branco.roxo {
    color: #793f98;
  }

  .destaque-h2-branco.itapeva {
    color: #ac41d8;
    text-shadow: none;
  }

  .destaque-h2-branco.elvira {
    color: #079d56;
  }

  .destaque-h2-branco.vilaprofeta {
    color: #ff8b22;
  }

  .destaque-h2-branco.dunlop {
    color: #ff8b22;
  }

  .destaque-h2-branco.mm-lan {
    color: #fff;
  }

  .coluna-1-monte-mor-lan {
    width: 80%;
  }

  .tab-single-mm-lan {
    height: auto;
    margin-right: 8px;
    margin-left: 8px;
    padding-top: 20px;
    padding-bottom: 20px;
    border: 3px solid #d3a4e6;
    border-radius: 8px;
    background-color: #ac41d8;
    color: #fff;
  }

  .tab-single-mm-lan.w--current {
    margin-right: 8px;
    margin-left: 8px;
    padding-top: 20px;
    padding-bottom: 20px;
    border-style: solid;
    border-width: 3px;
    border-color: #d3a4e6;
    border-radius: 8px;
    background-color: #793f98;
    color: #fff;
  }

  .tab-single-mm-lan.monte-mor {
    display: block;
  }

  .tab-map-mm-lan {
    height: auto;
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
    flex: 1;
  }

  .tab-maps-mm-lan {
    height: 100%;
  }

  .mapa-mm-lan {
    height: 100%;
  }

  .coluna-loc-mm-lan {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: auto;
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
    align-items: center;
  }

  .coluna-loc-mm-lan.residencial-progresso {
    padding-right: 40px;
  }

  .col-mm-lan--loc {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: auto;
  }

  .loc-mm-lan {
    height: auto;
    background-color: #f7f7f7;
  }

  .loc-mm-lan.residencial-progresso {
    height: auto;
    margin-top: 80px;
    background-color: transparent;
  }

  .loc-mm-lan.parque-vitoria {
    height: auto;
    margin-top: 0px;
    padding-top: 80px;
    padding-bottom: 80px;
    background-color: #fafafa;
    text-shadow: none;
  }

  .tabs-content {
    height: 100%;
  }

  .coluna-tabs-mm-lan {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: auto;
    padding-right: 0px;
    padding-left: 0px;
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
    flex: 1;
  }

  .tabs-container-mm-lan {
    position: relative;
    height: auto;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    -ms-grid-row-align: auto;
    align-self: auto;
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
  }

  .tabs-content-mm-lan {
    height: 100%;
  }

  .text-block-61 {
    font-size: 16px;
    font-weight: 500;
  }

  .tab-pane-maps {
    height: 100%;
  }

  @media screen and (min-width: 1920px) {
    .container-padrao.reduzido.monte-mor-lan {
      margin-top: 0px;
      padding-top: 60px;
      padding-bottom: 60px;
    }

    .hero-internas.residencial-progresso {
      background-image: -webkit-gradient(linear, left top, left bottom, from(null), to(null)), url('../images/shutterstock_723020353.jpeg');
      background-image: linear-gradient(180deg, null, null), url('../images/shutterstock_723020353.jpeg');
      background-position: 0px 0px, 50% 50%;
    }

    .hero-internas.parquevitoria {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(22, 22, 22, 0.32)), to(rgba(22, 22, 22, 0.32))), url('../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg');
      background-image: linear-gradient(180deg, rgba(22, 22, 22, 0.32), rgba(22, 22, 22, 0.32)), url('../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg');
      background-position: 0px 0px, 50% -60%;
      background-size: auto, cover;
    }

    .hero-internas.monte-mor-lan {
      height: auto;
    }

    .paragraph-16.widht-80 {
      width: 80%;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto;
    }

    .div-img-casa.elvira {
      border-radius: 20px 0px 0px 20px;
    }

    .lightbox-link-3 {
      border-top-left-radius: 0px;
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
    }

    .div-planta-02.elvira {
      border-radius: 0px 20px 20px 0px;
    }

    .subtitle-lp.monte-mor {
      text-align: left;
    }

    .subtitle-lp.residencial-progresso {
      text-align: left;
    }

    .subtitle-lp.parque-vitoria {
      text-align: left;
    }

    .subtitle-lp.parque-vitoria-2 {
      text-align: left;
    }

    .subtitle-lp.monte-mor-lan {
      text-align: left;
    }

    .div-block-22 {
      margin-right: auto;
      margin-left: auto;
      text-align: center;
    }

    .image-61 {
      position: static;
      margin-right: auto;
      margin-left: auto;
      text-align: center;
      -o-object-fit: fill;
      object-fit: fill;
    }

    .coluna-1-monte-mor {
      width: auto;
    }

    .image-66 {
      width: 380px;
      height: 200px;
      border-top-right-radius: 20px;
    }

    .image-66.imagem-residencial-progresso {
      height: 300px;
    }

    .slider-7.desktop {
      display: block;
      width: 60%;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .slider-7.mobile {
      display: none;
    }

    .andamento-obra-sao-roque {
      display: block;
    }

    .div-diferencial {
      width: auto;
    }

    .image-68 {
      display: block;
      width: 40px;
      max-width: none;
      -o-object-fit: contain;
      object-fit: contain;
    }

    .image-localizacao.parque-vitoria {
      width: 730px;
      height: 310px;
      -o-object-fit: cover;
      object-fit: cover;
    }

    .logo-2d {
      display: inline;
      max-width: none;
      margin-right: 20px;
      margin-left: 20px;
    }

    .grid-diferenciais-parque-vitoria {
      margin-top: 60px;
    }

    .div-diferencial-parque-vitora {
      width: auto;
      margin-right: 20px;
      margin-left: 20px;
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .div-block-28 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
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
      grid-template-rows: auto auto;
    }

    .div-block-29 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .logo-urba {
      position: static;
      display: inline;
      margin-right: 20px;
      margin-left: 20px;
      text-align: center;
      -o-object-fit: fill;
      object-fit: fill;
    }

    .div-block-32 {
      display: block;
      margin-top: 40px;
      margin-bottom: 40px;
    }

    .coluna-1-monte-mor-lan {
      width: 80%;
    }
  }

  @media screen and (max-width: 991px) {
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
      align-items: center;
    }

    .container-padrao.reduzido.monte-mor-lan {
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
      align-items: center;
    }

    .container-padrao.monte-mor-mobile {
      position: relative;
    }

    .div-text-hero.smart-urba {
      width: 60%;
    }

    .div-text-hero.smart-urba.dunlop {
      top: 0%;
      width: 90%;
      float: none;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none;
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
      align-items: center;
    }

    .heading-2.galeria.monte-mor {
      width: 110%;
    }

    .heading-2.localiz.monte-mor.mobile {
      margin-top: 60px;
      text-align: center;
    }

    .heading-2.localiz.sao-roque.mobile {
      margin-top: 60px;
      text-align: center;
    }

    .heading-2.localiz.residencial-progresso.mobile {
      margin-top: 60px;
      text-align: center;
    }

    .heading-2.center {
      margin-top: 0px;
      padding-top: 0px;
    }

    .footer-social {
      width: 75%;
    }

    .div-forms.interna.smarturba {
      width: 100%;
      padding-right: 10px;
      padding-left: 10px;
    }

    .hero-internas.dunlop {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.5))), url('../images/hero_4.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/hero_4.jpg');
      background-position: 0px 0px, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
    }

    .hero-internas.minha-casa {
      padding-bottom: 180px;
    }

    .hero-internas.vila-profeta {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.5))), -webkit-gradient(linear, left top, left bottom, from(hsla(0, 0%, 96%, 0.03)), to(hsla(0, 0%, 96%, 0.03))), url('../images/bg-hero-vila-profeta.png');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), linear-gradient(180deg, hsla(0, 0%, 96%, 0.03), hsla(0, 0%, 96%, 0.03)), url('../images/bg-hero-vila-profeta.png');
      background-position: 0px 0px, 0px 0px, 50% 50%;
      background-size: auto, auto, cover;
      background-repeat: repeat, repeat, no-repeat;
      background-attachment: scroll, scroll, scroll;
    }

    .hero-internas.montemor {
      height: 1223px;
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url('../images/Depositphotos_249018672_XL.jpg');
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, transparent, transparent), url('../images/Depositphotos_249018672_XL.jpg');
      background-position: 0px 0px, 0px 0px, 28% 50%;
      background-size: auto, auto, cover;
    }

    .hero-internas.sao-roque {
      height: 1223px;
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url('../images/Depositphotos_249018672_XL.jpg');
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, transparent, transparent), url('../images/Depositphotos_249018672_XL.jpg');
      background-position: 0px 0px, 0px 0px, 28% 50%;
      background-size: auto, auto, cover;
    }

    .hero-internas.residencial-progresso {
      height: 1223px;
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url('../images/Depositphotos_249018672_XL.jpg');
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, transparent, transparent), url('../images/Depositphotos_249018672_XL.jpg');
      background-position: 0px 0px, 0px 0px, 28% 50%;
      background-size: auto, auto, cover;
    }

    .hero-internas.parquevitoria {
      height: 1223px;
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url('../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg');
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, transparent, transparent), url('../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg');
      background-position: 0px 0px, 0px 0px, 37% 50%;
      background-size: auto, auto, cover;
    }

    .hero-internas.monte-mor-lan {
      height: 1223px;
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url('https://urba.com.br/wp-content/uploads/2023/03/63331f9ee3acaef71a5dd88f_URBA_RESERVA_MONTE_MOR_ACESSOS-1-scaled.jpg');
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, transparent, transparent), url('https://urba.com.br/wp-content/uploads/2023/03/63331f9ee3acaef71a5dd88f_URBA_RESERVA_MONTE_MOR_ACESSOS-1-scaled.jpg');
      background-position: 0px 0px, 0px 0px, 28% 50%;
      background-size: auto, auto, cover;
    }

    .infos-terreno.monte-mor {
      padding-bottom: 0px;
    }

    .paragraph-16.localiz.mobile {
      text-align: center;
    }

    .div-caracteristicas {
      display: block;
    }

    .div-caracteristica.parque-vitoria {
      width: auto;
      min-height: auto;
      margin-top: 20px;
    }

    .div-title-info-galeria.dunlop {
      width: 100%;
    }

    .localizacao {
      height: auto;
    }

    .column-27 {
      padding-left: 0px;
      text-align: center;
    }

    .menu-button-2 {
      color: #31d2cc;
    }

    .menu-button-2.w--open {
      background-color: transparent;
      color: #31d2cc;
    }

    .text-block-29 {
      text-align: center;
    }

    .autor.relacionados {
      display: none;
    }

    .dvi-cta {
      width: 230px;
      height: 360px;
    }

    .dvi-cta.home {
      height: 360px;
    }

    .data-publicacao.relacionados {
      display: none;
    }

    .div-ad.ipad {
      height: 145px;
    }

    .container-padrao-2 {
      padding-right: 20px;
      padding-left: 20px;
    }

    .link-block {
      margin-right: 5px;
    }

    .heading-18._02.relacionado {
      font-size: 14px;
    }

    .div-img-postrelacionado {
      padding-right: 5px;
      padding-left: 5px;
    }

    .content-cta {
      width: 100%;
    }

    .div-img-postinterna {
      width: 100%;
    }

    .post-main-info {
      width: 100%;
    }

    .titulo-material-destaque {
      width: 50%;
      margin-top: 40px;
    }

    .paragraph-3 {
      width: 50%;
      margin-bottom: 20px;
    }

    .botao-materiais {
      padding-right: 25px;
    }

    .pai-dropdown-categoria-materiais {
      display: block;
      width: 90%;
      margin-right: auto;
      margin-left: auto;
      float: left;
    }

    .campo-pesquisa {
      width: 90%;
    }

    .coluna-busca {
      padding-left: 10px;
    }

    .colunas-materiais {
      height: auto;
    }

    .titulo-categoria-materiais {
      margin-top: 20px;
      padding-left: 10px;
    }

    .botao-material-secundario {
      position: relative;
      left: 0px;
      right: 0px;
      bottom: 0px;
      width: 80%;
      margin-bottom: 0px;
      margin-left: 0px;
    }

    .titulo-material-secundario {
      margin-top: 10px;
      font-size: 16px;
      line-height: 18px;
    }

    .div-info-hero.monte-mor {
      position: relative;
      top: 34%;
    }

    .col-text {
      position: relative;
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
      align-items: center;
    }

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
      align-items: center;
    }

    .div-logos-hero.elvira {
      position: absolute;
      left: 0%;
      top: 0%;
      right: 0%;
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
      justify-content: center;
    }

    .box.itapeva.montemor {
      width: 400px;
      margin-top: 143px;
      margin-bottom: 0px;
      padding-right: 0px;
    }

    .div-forms-hero {
      width: 90%;
      margin-right: auto;
      margin-left: auto;
    }

    .condicoes.minha-casa {
      padding-top: 60px;
      padding-bottom: 60px;
      background-image: none;
      background-position: 0px 0px;
      background-size: auto;
      background-repeat: repeat;
    }

    .button-11.smarturba._2 {
      font-size: 15px;
    }

    .tag-hero-2.section2.dunlop {
      width: 60%;
    }

    .label-form-lp-2.vila-profeta {
      color: #fff;
    }

    .tag-breve-lan-amento.itapeva {
      top: -5%;
    }

    .text-block-47.montemor {
      top: 102px;
      right: -92px;
      width: 310px;
      height: 36px;
      font-size: 14px;
    }

    .text-block-47.residencial-progresso {
      top: 102px;
      right: -92px;
      width: 310px;
      height: 36px;
      font-size: 14px;
    }

    .text-block-47.parque-vitoria {
      top: 102px;
      right: -92px;
      width: 310px;
      height: 36px;
      font-size: 14px;
    }

    .image-18 {
      top: 5%;
      right: 5%;
      width: 250px;
    }

    .columns-21 {
      width: 95%;
      margin-top: 40px;
      margin-right: auto;
      margin-left: auto;
    }

    .column-60 {
      padding-left: 10px;
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
      grid-template-rows: 150px 150px;
    }

    .column-61 {
      padding-left: 0px;
    }

    .column-61.dunlop {
      padding-top: 0px;
      padding-right: 0px;
    }

    .box-entenda {
      padding-right: 5px;
      padding-left: 5px;
    }

    .text-block-48 {
      font-size: 13px;
    }

    .section-form {
      background-position: 0px 0px, 0px 0px, 10% 100%;
    }

    .heading-27.center._32px {
      font-size: 28px;
    }

    .heading-27.com._32px.branco {
      width: 100%;
      font-size: 28px;
    }

    .heading-27.com._32px.branco {
      width: 100%;
      font-size: 28px;
    }

    .heading-27.galeria._32px {
      font-size: 28px;
    }

    .heading-27.center {
      margin-top: 0px;
      padding-top: 0px;
    }

    .div-features._2.dunlop-2 {
      margin-top: 60px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .div-features.dunlop {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .imagem-smarturba._6.dunlop-img {
      margin-top: 40px;
    }

    .div-info-smarturba._2.dunlop {
      margin-top: 40px;
      margin-right: 0px;
    }

    .div-info-smarturba._2.dunlop.margin-top-off {
      margin-top: 60px;
    }

    .div-info-smarturba.dunlop {
      width: 95%;
      margin-top: 80px;
      margin-left: 0px;
    }

    .topico {
      width: 25%;
      margin-right: 5px;
    }

    .topico._2 {
      width: 25%;
      margin-left: 5px;
    }

    .topico._4 {
      margin-left: 5px;
    }

    .topico._6 {
      margin-left: 5px;
    }

    .text-block-49 {
      font-size: 12px;
    }

    .image-20 {
      left: -10px;
      top: -30px;
      width: 125px;
    }

    .image-21 {
      right: 10px;
      bottom: -20px;
      width: 125px;
    }

    .image-21._2 {
      right: -15px;
      bottom: -20px;
    }

    .cta-provisorio {
      background-size: 300px, 300px, auto;
    }

    .heading-29 {
      width: 50%;
      margin-right: auto;
      margin-left: auto;
    }

    .column-62 {
      padding-right: 5px;
    }

    .column-63 {
      padding-left: 5px;
    }

    .column-64 {
      padding-right: 5px;
    }

    .column-65 {
      padding-left: 5px;
    }

    .planejamento-inteligente {
      padding-top: 60px;
      padding-bottom: 40px;
    }

    .heading-30.h1-dunlop {
      font-size: 36px;
    }

    .heading-30.h1-dunlop {
      font-size: 36px;
    }

    .paragraph-36.dunlop-sub {
      margin-right: 0px;
      text-align: center;
    }

    .button-12.smarturba._2 {
      font-size: 15px;
    }

    .div-formulario-dunlop {
      top: 0%;
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
      transform: none;
    }

    .div-formulario-dunlop.minha-casa {
      width: 90%;
      margin-right: auto;
      margin-left: auto;
      padding-right: 0px;
    }

    .box-entenda-2 {
      padding-right: 5px;
      padding-left: 5px;
    }

    .text-block-52 {
      font-size: 13px;
    }

    .localizacao-dunlop {
      padding-top: 60px;
      padding-bottom: 40px;
    }

    .div-paragraph-center {
      width: 90%;
    }

    .div-paragraph-center.destaque-box {
      width: 100%;
    }

    .conceito {
      padding-top: 60px;
      padding-bottom: 40px;
    }

    .features {
      padding-top: 20px;
      padding-bottom: 60px;
    }

    .features._2 {
      padding-top: 20px;
      padding-bottom: 80px;
    }

    .text-block-55 {
      font-size: 12px;
    }

    .topico-2 {
      width: 25%;
      margin-right: 5px;
    }

    .div-block-6 {
      padding-right: 40px;
    }

    .div-logo-dunlop {
      width: 250px;
      padding: 8px 10px;
    }

    .button-14.botao-parque-vitoria {
      margin-bottom: 60px;
    }

    .div-contorno._2 {
      left: 40px;
      top: 0%;
      right: auto;
      bottom: auto;
    }

    .div-contorno._2._3 {
      top: 40px;
    }

    .heading-34 {
      margin-right: 0px;
      text-align: center;
    }

    .sonho {
      padding-top: 260px;
    }

    .image-24 {
      bottom: -187px;
      width: 90%;
    }

    .div-selo-minhacasa {
      position: relative;
      left: 0px;
      bottom: 0%;
      margin-top: 10px;
      margin-right: auto;
      margin-left: auto;
    }

    .paragraph-39.branco.minha-casa {
      width: 100%;
    }

    .div-boxes-sonho {
      width: 100%;
    }

    .div-box-sonho {
      width: 180px;
      margin-right: 10px;
      margin-left: 10px;
    }

    .box-condicoes-2 {
      width: 90%;
    }

    .box-condicao {
      min-height: 180px;
    }

    .txt-legal {
      width: 100%;
      text-align: left;
    }

    .detalhes {
      padding-top: 60px;
    }

    .div-txt-detalhes {
      padding-right: 40px;
    }

    .div-detalhe {
      width: 100%;
    }

    .div-passos {
      display: -ms-grid;
      display: grid;
      grid-auto-columns: 1fr;
      grid-column-gap: 0px;
      grid-row-gap: 15px;
      -ms-grid-columns: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
    }

    .div-card-passos {
      margin-right: 0px;
      margin-left: 0px;
    }

    .depoimentos {
      padding-top: 60px;
      background-image: none;
      background-position: 0px 0px;
      background-size: auto;
      background-repeat: repeat;
    }

    .text-block-59 {
      margin-right: 40px;
      text-align: left;
    }

    .div-logo-vila-profeta {
      width: 250px;
      padding: 8px 10px;
    }

    .div-submenu {
      height: auto;
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
      grid-template-rows: auto auto;
    }

    .navbar-desktop {
      display: none;
    }

    .field-label-3 {
      width: auto;
    }

    .form-8 {
      width: 70%;
    }

    .columns-22 {
      display: block;
    }

    .search {
      position: static;
      margin-left: 0px;
    }

    .lupa {
      position: relative;
    }

    .div-block-13 {
      width: auto;
    }

    .div-texto-nossa-historia {
      width: auto;
    }

    .navbar-mobile {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }

    .div-block-15 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }

    .icon-11 {
      color: #ff8b22;
      font-size: 28px;
    }

    .menu-button-3 {
      background-color: #006b3f;
    }

    .navbar-4 {
      width: 100%;
    }

    .container-2 {
      background-color: #006b3f;
    }

    .grid-4 {
      -ms-grid-columns: 1fr 0.25fr 0.25fr;
      grid-template-columns: 1fr 0.25fr 0.25fr;
      -ms-grid-rows: auto;
      grid-template-rows: auto;
    }

    .link-mobile {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-right: 0px;
      padding-left: 20px;
    }

    .icones-obra {
      max-width: none;
      -o-object-fit: contain;
      object-fit: contain;
    }

    .subtitle-lp.monte-mor {
      width: 380px;
    }

    .subtitle-lp.residencial-progresso {
      width: 380px;
    }

    .subtitle-lp.parque-vitoria {
      width: 380px;
    }

    .subtitle-lp.parque-vitoria-2 {
      width: 380px;
    }

    .subtitle-lp.monte-mor-lan {
      width: 380px;
    }

    .div-block-17.monte-mor.mobile {
      text-align: center;
    }

    .button-34.botao-sao-roque {
      margin-bottom: 60px;
    }

    .button-34.botao-sao-roque {
      margin-bottom: 60px;
    }

    .button-34.botao-sao-roque-2 {
      margin-bottom: 60px;
    }

    .button-34.botao-monte-mor {
      margin-bottom: 60px;
    }

    .button-34.botao-residencial-elvira {
      margin-bottom: 60px;
    }

    .button-34.botao-parque-vitoria {
      margin-bottom: 60px;
    }

    .grid-5 {
      grid-row-gap: 20px;
      -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
    }

    .mapa-elvira {
      height: 500px;
    }

    .elvira-roxo.monte-mor {
      padding-left: 0px;
    }

    .logo-monte-mor {
      height: 140px;
      max-width: 150%;
    }

    .topicos-montemor {
      max-width: 100%;
      font-size: 14px;
    }

    .icone-montemor {
      width: 250px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .grid-6 {
      width: 100%;
      justify-items: center;
      -ms-grid-columns: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr;
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
      grid-template-rows: auto auto;
    }

    .image-5 {
      padding-right: 0px;
    }

    .paragrafo-2 {
      text-align: center;
    }

    .image-62 {
      display: none;
    }

    .image-63 {
      display: none;
    }

    .image-64 {
      display: none;
    }

    .image-65 {
      display: none;
    }

    .image-66 {
      width: 610px;
    }

    .lightbox-link-10 {
      width: 610px;
    }

    .slider-7.desktop {
      display: none;
    }

    .slider-7.mobile {
      display: block;
    }

    .logo-sao-roque {
      height: 140px;
      max-width: 120%;
    }

    .topicos-sao-roque-02 {
      width: 250px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .icone-montemor-copy {
      width: 250px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .icone-montemor-copy-copy {
      width: 250px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .icone-montemor-copy {
      width: 250px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .condicoes-sao-roque {
      width: 250px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .texto-condicoes-comerciais-vila-profeta {
      max-width: 100%;
      font-size: 14px;
    }

    .topicos-montemor-copy {
      max-width: 100%;
      font-size: 14px;
    }

    .infos-terreno-sao-roque.monte-mor {
      padding-bottom: 0px;
    }

    .andamento-obra-sao-roque {
      width: 250px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .andamento-sao-roque {
      max-width: 100%;
      font-size: 14px;
    }

    .logo-residencial-progresso {
      height: 140px;
      max-width: 120%;
    }

    .texto-diferencial {
      max-width: 100%;
      font-size: 14px;
    }

    .logo-parque-vitoria {
      height: 140px;
      max-width: 120%;
    }

    .infos-2d {
      padding-bottom: 0px;
    }

    .infos-2d.monte-mor {
      padding-bottom: 0px;
    }

    .informacoes-comerciais.monte-mor {
      padding-bottom: 0px;
    }

    .grid-9 {
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
    }

    .condicoes-comerciais-parque-vitoria {
      width: 280px;
      padding-right: 20px;
      padding-left: 20px;
    }

    .texto-diferencial-parque-vitoria {
      max-width: 100%;
      font-size: 14px;
    }

    .infos-terreno-monte-mor-lan.monte-mor {
      padding-bottom: 0px;
    }

    .mapa-mm-lan {
      height: 500px;
    }

    .coluna-loc-mm-lan {
      padding-left: 0px;
      text-align: center;
    }

    .loc-mm-lan {
      height: auto;
    }
  }

  @media screen and (max-width: 767px) {
    .container-padrao.reduzido.montemor {
      padding-top: 40px;
    }

    .container-padrao.reduzido.monte-mor-lan {
      padding-top: 40px;
    }

    .heading-2.galeria.monte-mor {
      width: 100%;
      margin-bottom: 0px;
      text-align: center;
    }

    .heading-2.localiz.monte-mor.mobile {
      margin-top: 0px;
    }

    .heading-2.localiz.sao-roque.mobile {
      margin-top: 0px;
    }

    .heading-2.localiz.residencial-progresso.mobile {
      margin-top: 0px;
    }

    .heading-2.center {
      margin-top: 0px;
      padding-top: 0px;
    }

    .heading-2.center.montemor {
      padding-top: 60px;
    }

    .heading-2.center.monte-mor-mobile {
      padding-top: 40px;
    }

    .heading-2.center.sao-roque {
      padding-top: 40px;
    }

    .heading-2.parque-vitoria {
      text-align: center;
    }

    .column-7 {
      margin-bottom: 10px;
    }

    .rodape {
      height: auto;
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .column-21 {
      padding: 10px 0px;
    }

    .column-21._2 {
      padding-left: 40px;
    }

    .footer-social {
      width: 95%;
      margin-left: 40px;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
    }

    .hero-internas.vila-profeta {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.6)), to(rgba(0, 0, 0, 0.6))), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url('../images/bg-hero-vila-profeta.png');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), linear-gradient(180deg, transparent, transparent), url('../images/bg-hero-vila-profeta.png');
      background-position: 0px 0px, 0px 0px, 0% 50%;
    }

    .hero-internas.montemor {
      height: 1210px;
      padding-top: 60px;
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url('../images/Depositphotos_249018672_XL.jpg');
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, transparent, transparent), url('../images/Depositphotos_249018672_XL.jpg');
      background-position: 0px 0px, 0px 0px, 33% 50%;
    }

    .hero-internas.sao-roque {
      height: 1210px;
      padding-top: 60px;
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url('../images/Depositphotos_249018672_XL.jpg');
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, transparent, transparent), url('../images/Depositphotos_249018672_XL.jpg');
      background-position: 0px 0px, 0px 0px, 33% 50%;
    }

    .hero-internas.residencial-progresso {
      height: 1210px;
      padding-top: 60px;
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url('../images/Depositphotos_249018672_XL.jpg');
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, transparent, transparent), url('../images/Depositphotos_249018672_XL.jpg');
      background-position: 0px 0px, 0px 0px, 33% 50%;
    }

    .hero-internas.parquevitoria {
      height: 1210px;
      padding-top: 60px;
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url('../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg');
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, transparent, transparent), url('../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street-2.jpg');
      background-position: 0px 0px, 0px 0px, 38% 50%;
      background-size: auto, auto, cover;
    }

    .hero-internas.monte-mor-lan {
      height: 1210px;
      padding-top: 60px;
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url('https://urba.com.br/wp-content/uploads/2023/03/63331f9ee3acaef71a5dd88f_URBA_RESERVA_MONTE_MOR_ACESSOS-1-scaled.jpg');
      background-image: radial-gradient(circle farthest-corner at 60% 50%, transparent, rgba(0, 0, 0, 0.8)), linear-gradient(180deg, transparent, transparent), url('https://urba.com.br/wp-content/uploads/2023/03/63331f9ee3acaef71a5dd88f_URBA_RESERVA_MONTE_MOR_ACESSOS-1-scaled.jpg');
      background-position: 0px 0px, 0px 0px, 33% 50%;
    }

    .infos-terreno.monte-mor {
      padding-top: 0px;
    }

    .div-caracteristica.parque-vitoria {
      width: auto;
    }

    .h1 {
      font-size: 48px;
      line-height: 54px;
    }

    .text-block-9 {
      width: 90%;
      margin-left: 20px;
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1;
    }

    .galeria-de-fotos.monte-mor {
      height: auto;
    }

    .column-26 {
      height: 350px;
    }

    .column-26.regatas {
      height: 400px;
    }

    .img-cover-galeria {
      height: 350px;
    }

    .localizacao {
      height: auto;
    }

    .column-27 {
      height: auto;
      padding-top: 60px;
      padding-bottom: 60px;
    }

    .column-27.residencial-progresso {
      padding-right: 0px;
    }

    .div-img-casa.elvira {
      border-radius: 20px;
    }

    .column-30.monte-mor {
      display: none;
    }

    .column-31.monte-mor {
      display: none;
    }

    .div-img-sobre {
      margin-right: auto;
      margin-left: auto;
    }

    .destaque-h2-laranja.roxo {
      color: #82ea5b;
    }

    .column-39 {
      padding-left: 0px;
    }

    .imagem-material-destque {
      width: 200px;
      height: 200px;
    }

    .titulo-material-destaque {
      font-size: 20px;
      line-height: 25px;
    }

    .paragraph-3 {
      width: 100%;
      padding-right: 20px;
      padding-left: 20px;
    }

    .botao-materiais {
      display: block;
      margin-right: 20px;
      margin-left: 20px;
    }

    .text-block-33 {
      text-align: center;
    }

    .titulo-categoria-materiais {
      text-align: center;
    }

    .coluna-individual-material {
      margin-bottom: 15px;
    }

    .botao-material-secundario {
      width: 97%;
    }

    .image-9.dunlop {
      right: -20px;
      bottom: -20px;
      -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg);
    }

    .col-text {
      padding-top: 80px;
      padding-right: 0px;
      text-align: left;
    }

    .col-text.monte-mor {
      height: 470px;
    }

    .col-text.monte-mor-lan {
      height: 470px;
    }

    .box.itapeva {
      margin-top: 100px;
    }

    .box.itapeva.montemor {
      margin-top: 60px;
    }

    .div-forms-hero {
      width: 100%;
    }

    .tag-hero-2.section2.dunlop {
      width: 100%;
    }

    .heading-27.tour-dunlop._2._32px {
      width: 100%;
    }

    .heading-27.com._32px.branco {
      text-align: center;
    }

    .heading-27.com._32px.branco {
      text-align: center;
    }

    .heading-27.center {
      margin-top: 0px;
      padding-top: 0px;
    }

    .div-paragraph-center {
      width: 100%;
    }

    .div-video-2 {
      width: 95%;
    }

    .div-grid-features._2 {
      margin-bottom: 0px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .div-feature._2 {
      width: 100%;
      margin: 10px 0px;
    }

    .comercio {
      height: auto;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.5))), url('../images/como-funciona-3.jpeg'), -webkit-gradient(linear, left top, left bottom, color-stop(45%, #079d56), to(#00d38d));
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/como-funciona-3.jpeg'), linear-gradient(180deg, #079d56 45%, #00d38d);
      background-position: 0px 0px, 50% 50%, 0px 0px;
      background-size: auto, cover, auto;
    }

    .img-comercio {
      display: none;
    }

    .div-info-comercio {
      width: 100%;
    }

    .div-block-6 {
      width: 90%;
      margin-right: auto;
      margin-left: auto;
      padding-right: 0px;
      text-align: center;
    }

    .galeria-de-fotos-2 {
      height: auto;
    }

    .button-14.botao-parque-vitoria {
      margin-bottom: 0px;
    }

    .column-68 {
      height: 300px;
      padding-left: 40px;
    }

    .sonho {
      padding-top: 200px;
    }

    .image-24 {
      bottom: -139px;
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
      grid-column-gap: 0px;
      grid-row-gap: 20px;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
    }

    .div-box-sonho {
      margin-right: 0px;
      margin-left: 0px;
    }

    .box-condicoes-2 {
      width: 100%;
    }

    .box-condicao {
      padding-right: 5px;
      padding-left: 5px;
    }

    .txt-legal {
      text-align: center;
    }

    .detalhes {
      height: auto;
      padding-bottom: 0px;
    }

    .div-txt-detalhes {
      width: 90%;
      margin-right: auto;
      margin-bottom: 40px;
      margin-left: auto;
      padding-right: 0px;
    }

    .slider-detalhes {
      position: relative;
      width: 100%;
      height: 500px;
    }

    .arrow {
      left: auto;
      top: auto;
      right: 90px;
      bottom: 20px;
      background-color: #fff;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.16);
      color: #793f98;
    }

    .arrow._2 {
      left: auto;
      top: auto;
      right: 30px;
      bottom: 20px;
    }

    .img-casas {
      height: 500px;
    }

    .div-passos {
      width: 92%;
      justify-items: center;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto auto;
      grid-template-rows: auto auto auto;
    }

    .div-depoimentos {
      padding-bottom: 40px;
    }

    .slider-depoimentos {
      width: auto;
      height: auto;
    }

    .text-block-59 {
      width: 60%;
    }

    .slider-videos {
      width: auto;
      height: auto;
    }

    .slider-6 {
      height: 320px;
    }

    .div-slide-videos {
      width: 100%;
    }

    .roxo.bold {
      color: #82ea5b;
    }

    .form-8 {
      width: 80%;
    }

    .columns-22 {
      display: block;
    }

    .columns-23 {
      display: block;
    }

    .div-img-sobre-2 {
      margin-top: 0px;
    }

    .paragrafo-comumm.texto-margem-top {
      padding-top: 25px;
    }

    .columns-24 {
      display: block;
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
      justify-content: flex-start;
    }

    .button-34.botao-sao-roque {
      margin-bottom: 0px;
    }

    .button-34.botao-sao-roque.mobile {
      margin-bottom: 0px;
    }

    .button-34.botao-sao-roque {
      margin-bottom: 0px;
    }

    .button-34.botao-sao-roque.mobile {
      margin-bottom: 0px;
    }

    .button-34.botao-sao-roque-2 {
      margin-bottom: 0px;
    }

    .button-34.botao-sao-roque-2.mobile {
      margin-bottom: 0px;
    }

    .button-34.botao-monte-mor {
      margin-bottom: 0px;
    }

    .button-34.botao-monte-mor.mobile {
      margin-bottom: 0px;
    }

    .button-34.botao-residencial-elvira {
      margin-bottom: 0px;
    }

    .button-34.botao-residencial-elvira.mobile {
      margin-bottom: 0px;
    }

    .button-34.botao-parque-vitoria {
      margin-bottom: 0px;
    }

    .button-34.botao-parque-vitoria.mobile {
      margin-bottom: 0px;
    }

    .image-60.dunlop {
      right: -20px;
      bottom: -20px;
      -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg);
    }

    .column-69 {
      padding-right: 0px;
    }

    .column-70 {
      padding-left: 0px;
    }

    .grid-5 {
      -ms-grid-columns: 1fr 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr 1fr;
    }

    .elvira-colunas {
      width: 100%;
    }

    .mapa-elvira {
      height: 500px;
    }

    .elvira-roxo.monte-mor {
      height: 210px;
    }

    .elvira-seta-laranja.dunlop {
      right: -20px;
      bottom: -20px;
      -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg);
    }

    .elvira-seta-laranja.mobile {
      display: none;
    }

    .destaque-h2-elvira.roxo {
      color: #82ea5b;
    }

    .destaque-h2-copy.roxo {
      color: #82ea5b;
    }

    .logo-monte-mor {
      height: 140px;
    }

    .grid-6 {
      width: 100%;
      -ms-grid-columns: 1fr;
      grid-template-columns: 1fr;
    }

    .div-block-24 {
      width: 440px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
    }

    .image-5 {
      padding-right: 20px;
    }

    .paragrafo-2 {
      text-align: center;
    }

    .paragrafo-2.topicos {
      text-align: left;
    }

    .paragrafo-2.topicos.mobile {
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start;
    }

    .columns-25 {
      text-align: center;
    }

    .youtube {
      width: 74%;
    }

    .image-66 {
      width: 440px;
    }

    .lightbox-link-10 {
      width: 440px;
    }

    .container-padrao-3 {
      max-width: 80%;
    }

    .logo-sao-roque {
      height: 140px;
    }

    .infos-terreno-sao-roque.monte-mor {
      padding-top: 0px;
    }

    .logo-residencial-progresso {
      height: 140px;
    }

    .logo-parque-vitoria {
      height: 140px;
    }

    .logo-2d {
      display: inline;
    }

    .infos-2d.monte-mor {
      padding-top: 0px;
    }

    .informacoes-comerciais.monte-mor {
      padding-top: 0px;
    }

    .grid-9 {
      -ms-grid-columns: 1fr;
      grid-template-columns: 1fr;
    }

    .grid-diferenciais-parque-vitoria {
      -ms-grid-columns: 1fr;
      grid-template-columns: 1fr;
    }

    .div-block-28 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .colunas-monte-mor-lan {
      text-align: center;
    }

    .infos-terreno-monte-mor-lan.monte-mor {
      padding-top: 0px;
    }

    .destaque-h2-branco.roxo {
      color: #82ea5b;
    }

    .mapa-mm-lan {
      height: 500px;
    }

    .coluna-loc-mm-lan {
      height: auto;
      padding-top: 60px;
      padding-bottom: 60px;
    }

    .coluna-loc-mm-lan.residencial-progresso {
      padding-right: 0px;
    }

    .loc-mm-lan {
      height: auto;
    }
  }

  @media screen and (max-width: 479px) {
    .heroslider {
      height: 640px;
    }

    .container-padrao.reduzido.montemor {
      height: 100%;
      padding-top: 100px;
    }

    .container-padrao.reduzido.monte-mor-lan {
      height: 100%;
      padding-top: 100px;
    }

    .container-padrao.monte-mor-form {
      width: 100%;
      max-width: 1280px;
      padding-right: 10px;
      padding-left: 10px;
    }

    .container-padrao.sao-roque {
      display: block;
    }

    .brand {
      margin-top: 25px;
    }

    .nav-menu {
      margin-top: 0px;
      background-color: hsla(0, 0%, 100%, 0.98);
    }

    .dropdown-toggle {
      display: none;
    }

    .div-text-hero {
      width: 100%;
    }

    .div-text-hero.interna {
      position: static;
      width: 100%;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none;
    }

    .div-text-hero.venda {
      -webkit-transform: translate(0px, -120%);
      -ms-transform: translate(0px, -120%);
      transform: translate(0px, -120%);
    }

    .div-text-hero.home {
      width: 100%;
    }

    .div-text-hero.smart-urba {
      position: static;
      width: 100%;
      margin-right: auto;
      margin-left: auto;
      padding-top: 140px;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none;
    }

    .div-text-hero.smart-urba.dunlop {
      width: 100%;
    }

    .div-text-hero.smart-urba.minha-casa {
      width: 100%;
      padding-top: 60px;
    }

    .heading {
      font-size: 28px;
    }

    .heading.sobre.fale-com-ri {
      text-align: center;
    }

    .heading.area-cliente {
      width: 100%;
      padding-bottom: 140px;
      font-size: 28px;
      text-align: left;
    }

    .heading.internas {
      margin-right: -10px;
      margin-left: -10px;
      padding-top: 100px;
      font-size: 25px;
    }

    .heading.internas.tulipas {
      padding-top: 60px;
    }

    .heading.internas.girassois {
      padding-top: 70px;
    }

    .heading.internas.bem-viver {
      padding-top: 40px;
      font-size: 25px;
      line-height: 1.4;
    }

    .heading.internas.bem-campos {
      padding-top: 60px;
    }

    .heading.home {
      font-size: 26px;
    }

    .heading-2 {
      width: 95%;
      margin-right: 0px;
      margin-left: 0px;
      font-size: 24px;
      text-align: left;
    }

    .heading-2.branco {
      text-align: center;
    }

    .heading-2.galeria {
      margin-bottom: 0px;
      text-align: center;
    }

    .heading-2.forms {
      text-align: center;
    }

    .heading-2._2 {
      width: 95%;
    }

    .heading-2.hblog {
      width: 90%;
      font-size: 22px;
    }

    .heading-2.passo {
      text-align: center;
    }

    .heading-2.center {
      width: 100%;
      text-align: center;
    }

    .heading-2.side {
      text-align: center;
    }

    .heading-2.smarturba-mobile {
      width: 100%;
      text-align: center;
    }

    .heading-2.parque-vitoria {
      text-align: center;
    }

    .heading-2.branco-mm-lan {
      text-align: center;
    }

    .paragraph {
      width: 90%;
      margin-right: 0px;
      margin-left: 0px;
      text-align: left;
    }

    .paragraph.home {
      width: 95%;
    }

    .div-empreendimentos {
      margin-top: 0px;
      margin-bottom: 0px;
      padding-left: 0px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .div-empreendimento {
      width: 90%;
      margin: 10px 0px;
    }

    .div-empreendimento.portal-das-aguas {
      width: 90%;
      margin: 10px 0px;
    }

    .div-info {
      height: 90px;
    }

    .heading-3 {
      font-size: 22px;
    }

    .section-vantagens {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .columns {
      position: static;
      top: 0%;
      width: 90%;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none;
    }

    .columns._2 {
      width: 95%;
    }

    .columns.itapeva {
      width: 95%;
    }

    .text-block-4 {
      font-size: 24px;
      text-align: left;
    }

    .text-block-4._2.interna.elvira.mobile {
      text-align: center;
    }

    .text-block-4._2.interna.progresso.mobile {
      text-align: center;
    }

    .destaque {
      font-size: 28px;
    }

    .column {
      padding-right: 0px;
      padding-left: 0px;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      border-bottom: 2px solid #ff8b22;
      border-right-style: none;
    }

    .column.end {
      border-bottom-style: none;
    }

    .column._2 {
      padding-right: 30px;
      padding-left: 10px;
      border-bottom-color: #006b3f;
    }

    .bairros-planejados {
      padding-top: 60px;
      padding-bottom: 60px;
      background-image: url('../images/arvore.jpg');
      background-position: 100% 100%;
      background-size: 200px;
      background-repeat: no-repeat;
      background-attachment: fixed;
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
      align-items: center;
    }

    .div-pilar {
      width: 280px;
      margin: 10px 0px;
    }

    .text-block-6 {
      width: 95%;
      text-align: left;
    }

    .cta {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/cta_6.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/cta_6.jpg');
      background-position: 0px 0px, 50% 90%;
      background-size: auto, cover;
    }

    .div-info-cta {
      position: static;
      width: 100%;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none;
    }

    .heading-4 {
      width: 100%;
      font-size: 26px;
      text-align: center;
    }

    .button-3 {
      padding-right: 20px;
      padding-left: 20px;
      border-radius: 100px;
    }

    .blog {
      padding-top: 60px;
      padding-bottom: 20px;
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
      align-items: flex-start;
    }

    .div-artigo {
      width: 95%;
      height: 450px;
      margin: 10px auto;
    }

    .recurso {
      width: 100%;
      margin-top: 20px;
    }

    .div-seta {
      margin-right: 0px;
    }

    .paragraph-14 {
      font-size: 13px;
    }

    .duvida {
      font-size: 14px;
    }

    .column-20 {
      padding-right: 0px;
      padding-left: 0px;
    }

    .column-7 {
      margin-bottom: 20px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .rodape {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .column-21 {
      margin-top: 20px;
      padding-top: 0px;
      padding-bottom: 0px;
      padding-left: 0px;
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start;
    }

    .column-21._2 {
      margin-top: 0px;
      padding-top: 0px;
      padding-bottom: 0px;
      padding-left: 0px;
    }

    .footer-social {
      width: 100%;
      margin-top: 0px;
      margin-left: 0px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
    }

    .link-social {
      margin-right: 5px;
      margin-left: 5px;
    }

    .columns-3 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 40px;
    }

    .link {
      margin-left: 0px;
    }

    .contato-imediato {
      display: none;
      width: 100px;
    }

    .div-forms.interna {
      padding-right: 20px;
      padding-bottom: 20px;
      padding-left: 20px;
    }

    .div-forms.interna.regatas {
      width: 100%;
    }

    .div-forms.interna.smarturba {
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .heading-6 {
      margin-top: 45px;
      font-size: 20px;
      line-height: 1.3;
    }

    .paragraph-15._2 {
      font-size: 14px;
    }

    .form {
      width: 100%;
      margin-top: 10px;
    }

    .text-field {
      margin-bottom: 5px;
    }

    .tipo-contato {
      margin-right: 5px;
    }

    .tipo-contato._2 {
      margin-right: 0px;
      margin-left: 5px;
    }

    .resposta1 {
      font-size: 14px;
    }

    .column-23 {
      margin-bottom: 5px;
      padding-right: 0px;
    }

    .column-23._2 {
      margin-bottom: 0px;
    }

    .column-24 {
      padding-left: 0px;
    }

    .columns-4 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin-bottom: 5px;
    }

    .submit-button {
      width: 100%;
      margin-top: 10px;
    }

    .div-botao-contato {
      width: 75px;
      height: 75px;
      margin-right: 10px;
      margin-bottom: 60px;
      background-size: 75px 75px;
    }

    .hero-internas.giardino {
      height: 670px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero_v3_1.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero_v3_1.jpg');
      background-position: 0px 0px, 40% 0%;
    }

    .hero-internas.giardino.girass-is {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero_v2_1.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero_v2_1.jpg');
      background-position: 0px 0px, 30% 50%;
    }

    .hero-internas.giardino.tulipas {
      height: 720px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero-familia-01.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero-familia-01.jpg');
      background-position: 0px 0px, 50% 50%;
    }

    .hero-internas.giardino.atlanta {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero-familia-02.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero-familia-02.jpg');
      background-position: 0px 0px, 40% 50%;
    }

    .hero-internas.portal-das-aguas {
      height: 600px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero.jpg');
      background-position: 0px 0px, 50% 0%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
    }

    .hero-internas.sobre {
      height: 540px;
      background-position: 55% 100%;
      background-size: auto 500px;
    }

    .hero-internas.venda {
      height: 680px;
      background-image: url('../images/hero-venda.jpg');
      background-position: 100% 100%;
      background-size: 600px;
      background-repeat: no-repeat;
    }

    .hero-internas.nossas-lojas {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero_v3.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero_v3.jpg');
      background-position: 0px 0px, 55% 100%;
    }

    .hero-internas.area-do-cliente {
      height: 720px;
      background-image: url('../images/hero_1.jpg');
      background-position: 100% 100%;
      background-size: auto 380px;
    }

    .hero-internas.reserva-macauba {
      height: 640px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.4))), url('../images/hero-familia-05.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('../images/hero-familia-05.jpg');
      background-position: 0px 0px, 65% 0%;
    }

    .hero-internas.reserva-macauba.jardim-bem-viver {
      height: 720px;
    }

    .hero-internas.investidores {
      height: 400px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent)), url('../images/urba-nova-hero-03.jpg');
      background-image: linear-gradient(180deg, transparent, transparent), url('../images/urba-nova-hero-03.jpg');
      background-position: 0px 0px, 30% 50%;
      background-size: auto, cover;
    }

    .hero-internas.regatas {
      height: auto;
      padding-bottom: 60px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/hero_2.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/hero_2.jpg');
      background-position: 0px 0px, 50% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
    }

    .hero-internas.minha-casa {
      padding-top: 0px;
      padding-bottom: 130px;
    }

    .hero-internas.vila-profeta {
      background-image: -webkit-gradient(linear, left top, left bottom, from(hsla(0, 0%, 94%, 0.03)), to(hsla(0, 0%, 94%, 0.03))), -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.64)), to(rgba(0, 0, 0, 0.64))), url('../images/bg-hero-vila-profeta.png'), -webkit-gradient(linear, left top, left bottom, from(transparent), to(transparent));
      background-image: linear-gradient(180deg, hsla(0, 0%, 94%, 0.03), hsla(0, 0%, 94%, 0.03)), linear-gradient(180deg, rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url('../images/bg-hero-vila-profeta.png'), linear-gradient(180deg, transparent, transparent);
      background-position: 0px 0px, 0px 0px, 0% 50%, 0px 0px;
      background-size: auto, auto, cover, auto;
      background-repeat: repeat, repeat, no-repeat, repeat;
      background-attachment: scroll, scroll, scroll, scroll;
    }

    .hero-internas.itapeva {
      height: auto;
      padding-bottom: 60px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/hero-itapeva.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/hero-itapeva.jpg');
      background-position: 0px 0px, 0% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
    }

    .hero-internas.elvira {
      height: auto;
      padding-bottom: 60px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('../images/hero-itapeva.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/hero-itapeva.jpg');
      background-position: 0px 0px, 0% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
    }

    .hero-internas.montemor {
      height: 100%;
      padding-bottom: 60px;
      background-image: url('../images/Depositphotos_249018672_XL.jpg');
      background-position: 80% 50%;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .hero-internas.sao-roque {
      height: 100%;
      padding-bottom: 60px;
      background-image: url('../images/Depositphotos_249018672_XL.jpg');
      background-position: 80% 50%;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .hero-internas.residencial-progresso {
      height: 100%;
      padding-bottom: 60px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.43)), to(rgba(0, 0, 0, 0.43))), url('../images/Depositphotos_249018672_XL.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.43), rgba(0, 0, 0, 0.43)), url('../images/Depositphotos_249018672_XL.jpg');
      background-position: 0px 0px, 80% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
    }

    .hero-internas.parquevitoria {
      height: 100%;
      padding-bottom: 60px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.43)), to(rgba(0, 0, 0, 0.43))), url('../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.43), rgba(0, 0, 0, 0.43)), url('../images/father-his-daughter-having-fun-spending-good-time-together-while-walking-outdoors-street.jpg');
      background-position: 0px 0px, 0px 0px;
      background-size: auto, auto;
    }

    .hero-internas.monte-mor-lan {
      height: 100%;
      padding-bottom: 60px;
      background-image: url('https://urba.com.br/wp-content/uploads/2023/03/63331f9ee3acaef71a5dd88f_URBA_RESERVA_MONTE_MOR_ACESSOS-1-scaled.jpg');
      background-position: 80% 50%;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .bold-text {
      font-size: 20px;
    }

    .bold-text.giardino {
      padding-right: 5px;
      padding-left: 5px;
      font-size: 17px;
    }

    .bold-text.reserva-macauba {
      padding-right: 5px;
      padding-left: 5px;
      font-size: 18px;
    }

    .bold-text.atlanta {
      padding-right: 5px;
      padding-left: 5px;
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
      margin-bottom: 0px;
      margin-left: 0px;
      background-size: cover;
      -webkit-transform: translate(50%, 0px);
      -ms-transform: translate(50%, 0px);
      transform: translate(50%, 0px);
    }

    .div-selo.jardim-bem-viver {
      bottom: 4%;
    }

    .infos-terreno.monte-mor.infos-terreno-monte {
      padding-top: 60px;
      padding-bottom: 60px;
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
      grid-column-gap: 0px;
      grid-row-gap: 10px;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
    }

    .div-info-terreno {
      width: 100%;
      height: auto;
      margin: 10px 0px;
      padding: 10px;
    }

    .div-info-terreno.end-mobile {
      border-right-style: none;
    }

    .div-text-terreno {
      width: 100%;
    }

    .paragraph-16._2 {
      width: 100%;
    }

    .paragraph-16.itapeva.text-form {
      width: auto;
    }

    .paragraph-16.montemor.text-form {
      width: auto;
    }

    .paragraph-16.montmor.text-form {
      width: auto;
    }

    .paragraph-16.widht-80 {
      width: auto;
    }

    .div-caracteristicas {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .div-caracteristica {
      width: 325px;
      min-height: auto;
      margin: 10px 0px;
    }

    .div-caracteristica.reserva-macauba {
      min-height: auto;
    }

    .div-caracteristica.campos {
      min-height: auto;
    }

    .div-caracteristica.jardim-bem-viver {
      min-height: auto;
    }

    .div-caracteristica.parque-vitoria {
      width: auto;
    }

    .h1 {
      font-size: 25px;
      line-height: 1.5;
      letter-spacing: 0px;
    }

    .text-block-9 {
      width: 85%;
      margin-left: 0px;
      text-align: left;
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
      align-items: center;
    }

    .link-2 {
      font-size: 20px;
      text-align: center;
    }

    .text-block-10 {
      margin-right: 10px;
      margin-bottom: 0px;
      text-align: center;
    }

    .slide-nav-2 {
      width: 100px;
    }

    .left-arrow-2 {
      left: 25%;
    }

    .right-arrow-2 {
      right: 25%;
    }

    .galeria-de-fotos {
      height: auto;
      background-color: #f7f7f7;
    }

    .columns-5 {
      height: auto;
    }

    .column-25 {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
      padding-left: 0px;
    }

    .column-26 {
      height: auto;
      padding-right: 0px;
    }

    .lightbox-link {
      position: relative;
    }

    .img-cover-galeria {
      height: 250px;
    }

    .seta {
      left: 50%;
      top: auto;
      right: 0%;
      bottom: 0%;
      margin-right: 0px;
      margin-bottom: -25px;
      -webkit-transform: translate(-50%, 0%) rotate(45deg);
      -ms-transform: translate(-50%, 0%) rotate(45deg);
      transform: translate(-50%, 0%) rotate(45deg);
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
      align-items: center;
    }

    .localizacao {
      height: auto;
    }

    .columns-6 {
      height: auto;
    }

    .column-27 {
      height: auto;
      padding-bottom: 0px;
      padding-left: 0px;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
    }

    .column-27.residencial-progresso {
      padding-right: 0px;
    }

    .column-28 {
      height: auto;
    }

    .div-title-info-localizacao {
      width: 100%;
      margin-top: 40px;
      margin-bottom: 40px;
      padding-right: 20px;
      padding-left: 20px;
    }

    .tabs {
      height: auto;
    }

    .tab-pane-tab-1 {
      height: 300px;
    }

    .tabs-menu {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }

    .tab-pane-tab-2 {
      height: 300px;
    }

    .planta {
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .div-img-casa {
      height: 300px;
    }

    .lightbox-link-3 {
      width: 100%;
      height: auto;
    }

    .lightbox-link-4 {
      height: auto;
    }

    .lightbox-link-5 {
      width: 100%;
      height: auto;
    }

    .div-planta-01 {
      width: 100%;
      height: 300px;
    }

    .div-planta-02 {
      width: 100%;
      height: 300px;
    }

    .andamento-obra {
      padding-top: 40px;
      padding-bottom: 40px;
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
      grid-template-rows: auto auto;
    }

    .formulario {
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .formulario.montemor {
      width: 100%;
    }

    .form-2.venda {
      margin-top: 20px;
    }

    .form-2.smarturba {
      margin-top: 10px;
    }

    .text-field-2 {
      box-shadow: 0 0 6px -3px rgba(0, 0, 0, 0.25);
    }

    .field-label {
      padding-left: 0px;
    }

    .ficha-tecnica {
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .columns-11 {
      width: 100%;
      margin-top: 20px;
    }

    .section-texto-sobre {
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .email-ri-urba {
      width: 95%;
    }

    .email-ri-urba.legenda.texto-padding-bottom {
      padding-bottom: 0px;
    }

    .column-33._2 {
      padding-top: 20px;
    }

    .div-img-sobre {
      width: auto;
      height: 216px;
    }

    .div-img-sobre.venda {
      height: 189px;
    }

    .div-estados {
      margin-top: 0px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .div-estado {
      margin-right: 0px;
      margin-bottom: 20px;
    }

    .div-seta-2 {
      margin-right: 0px;
    }

    .duvida-2 {
      font-size: 14px;
    }

    .razoes-vender {
      padding-bottom: 40px;
    }

    .text-block-15 {
      width: 95%;
      margin-bottom: 0px;
      line-height: 1.6;
      text-align: left;
    }

    .text-block-15._2 {
      width: 100%;
      text-align: center;
    }

    .div-passo-a-passo {
      margin-top: 40px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .div-passo {
      margin: 30px 0px;
    }

    .div-camino {
      display: none;
    }

    .columns-12 {
      width: 95%;
    }

    .column-34 {
      padding-right: 0px;
      padding-left: 0px;
    }

    .paragraph-20 {
      width: 100%;
      font-size: 16px;
      line-height: 1.6;
    }

    .div-principais-duvidas {
      width: 100%;
      margin-bottom: 0px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .div-principal-duvida {
      width: 100%;
      margin-right: 0px;
      margin-bottom: 20px;
      margin-left: 0px;
    }

    .div-entre-contato._2 {
      width: 100%;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .div-contato {
      width: 100%;
      margin-bottom: 10px;
    }

    .text-block-21.vizinho {
      width: 95%;
    }

    .columns-13 {
      width: 100%;
    }

    .sobre-vizinho-premiado {
      min-height: auto;
      margin-bottom: 20px;
    }

    .div-forms-indicacao {
      width: 100%;
      padding-right: 10px;
      padding-left: 10px;
    }

    .columns-14 {
      width: 95%;
    }

    .column-35 {
      padding-right: 0px;
      padding-left: 0px;
      text-align: center;
    }

    .div-lojas {
      width: 95%;
      height: 0px;
    }

    .form-4 {
      width: 85%;
      margin-left: 0px;
    }

    .columns-15 {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .multimidia {
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .div-midia {
      width: 100%;
    }

    .contact {
      height: auto;
      padding-bottom: 40px;
      background-image: url('../images/hero_v2.jpg');
      background-position: 30% 50%;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .col-contato {
      position: static;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none;
    }

    .div-forms-contato {
      margin-top: 20px;
      padding-top: 20px;
    }

    .heading-13 {
      width: 100%;
      margin-top: 0px;
      font-size: 28px;
      text-align: center;
    }

    .paragraph-26 {
      width: 100%;
      margin-bottom: 20px;
      font-size: 16px;
      text-align: center;
    }

    .nav-link {
      padding-top: 15px;
      padding-bottom: 15px;
    }

    .nav-link.w--current {
      padding-top: 15px;
      padding-bottom: 15px;
      border-bottom-style: none;
    }

    .destaque-h2-laranja.roxo {
      color: #82ea5b;
    }

    .menu-button {
      margin-top: 20px;
      color: #006b3f;
    }

    .menu-button.w--open {
      background-color: transparent;
      color: #006b3f;
    }

    .form-block {
      margin-bottom: 40px;
    }

    .contato-imediato-mobile {
      display: block;
      overflow: auto;
      width: 100px;
      padding-right: 10px;
      padding-bottom: 20px;
      padding-left: 10px;
    }

    .div-botao-contato-mobile {
      position: absolute;
      left: auto;
      top: auto;
      right: 0%;
      bottom: 0%;
      width: 75px;
      height: 75px;
      margin-right: 10px;
      margin-bottom: 20px;
      border-radius: 100px;
      background-color: #ac41d8;
      background-image: url('../images/contact_rapido.png');
      background-position: 50% 50%;
      background-size: cover;
      background-repeat: no-repeat;
      box-shadow: 0 7px 15px -6px rgba(0, 0, 0, 0.4);
      cursor: pointer;
    }

    .div-forms-mobile {
      position: relative;
      z-index: 3;
      overflow: hidden;
      height: 0px;
      margin-top: 20px;
      padding-right: 10px;
      padding-left: 10px;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 4px 12px -6px #000;
    }

    .div-close-mobile {
      position: absolute;
      left: auto;
      top: 0%;
      right: 0%;
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
      box-shadow: 0 1px 6px -3px rgba(0, 0, 0, 0.5);
      color: #ac41d8;
      font-size: 18px;
      font-weight: 500;
    }

    .column-39 {
      padding-right: 0px;
      padding-left: 0px;
    }

    .column-40 {
      padding-right: 0px;
      padding-left: 0px;
    }

    .column-41 {
      padding-top: 20px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .column-43 {
      padding-right: 0px;
      padding-bottom: 20px;
      padding-left: 0px;
    }

    .column-44 {
      padding-right: 0px;
      padding-left: 0px;
    }

    .column-45 {
      display: block;
      height: auto;
      padding-top: 40px;
    }

    .column-46 {
      padding-right: 0px;
      padding-left: 0px;
    }

    .list-5 {
      padding-left: 20px;
    }

    .link-block-3 {
      display: block;
      margin-top: 0px;
      margin-left: 0px;
      padding-right: 20px;
      padding-left: 20px;
      text-align: left;
    }

    .link-block-3:hover {
      -webkit-transform: none;
      -ms-transform: none;
      transform: none;
    }

    .nav-link-2 {
      margin-top: 0px;
      padding-top: 20px;
      padding-bottom: 10px;
    }

    .nav-menu-2 {
      z-index: 2;
      display: block;
      height: auto;
      padding-bottom: 10px;
      border-bottom: 2px solid #ff8b22;
      background-color: hsla(0, 0%, 100%, 0.95);
    }

    .menu-button-2 {
      background-color: transparent;
      color: #ff8b22;
    }

    .menu-button-2.w--open {
      background-color: transparent;
    }

    .dropdown-news {
      margin-top: 15px;
      margin-right: auto;
      margin-left: auto;
      padding-right: 10px;
      padding-left: 10px;
    }

    .text-block-29 {
      text-align: center;
    }

    .icon-3 {
      color: #ff8b22;
    }

    .drop-form-news.w--open {
      margin-right: auto;
      margin-bottom: 10px;
      margin-left: auto;
    }

    .dropdown-button {
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .seta-drop {
      display: none;
      margin-top: 0px;
    }

    .navbar-2 {
      height: 90px;
    }

    .titulo-post-anterior {
      font-size: 16px;
      line-height: 1.3;
    }

    .column-47 {
      text-align: left;
    }

    .div-busca {
      height: 0px;
    }

    .autor.relacionados {
      display: block;
    }

    .text-field-4 {
      margin-top: 5px;
      margin-bottom: 5px;
    }

    .heading-14 {
      margin-top: 0px;
      padding-left: 0px;
      text-align: center;
    }

    .slider-3 {
      padding-bottom: 50px;
    }

    .categoria {
      margin-top: 15px;
      margin-left: 10px;
      padding-left: 15px;
    }

    .div-destaque-lateral._4 {
      height: 200px;
    }

    .div-destaque-lateral._2 {
      height: 200px;
      margin-bottom: 20px;
    }

    .div-destaque-lateral._3 {
      height: 200px;
      margin-bottom: 20px;
    }

    .heading-15 {
      width: 100%;
      font-size: 20px;
      line-height: 1.3;
    }

    .heading-15._02 {
      font-size: 20px;
    }

    .dvi-cta {
      width: 350px;
      height: 550px;
      background-image: url('../images/banner-lateral.png');
    }

    .dvi-cta.home {
      height: 540px;
    }

    .data-publicacao {
      margin-left: 10px;
      padding-left: 10px;
    }

    .data-publicacao.relacionados {
      display: block;
    }

    .div-ad {
      display: none;
      height: 70px;
    }

    .section-posts {
      padding-top: 90px;
    }

    .submit-button-4 {
      width: 100%;
    }

    .div-post-destaque {
      margin-bottom: 10px;
      padding-right: 15px;
      padding-left: 15px;
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
      align-items: center;
    }

    .column-48 {
      padding-top: 20px;
      padding-right: 0px;
      padding-left: 0px;
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
      flex-direction: column;
    }

    .container-padrao-2 {
      padding-right: 10px;
      padding-left: 10px;
    }

    .column-2 {
      padding-right: 0px;
    }

    .post-relacionado {
      width: 100%;
      margin-right: 0px;
      margin-bottom: 10px;
    }

    .link-block {
      margin-right: 10px;
    }

    .div-busca-2 {
      height: 0px;
    }

    .heading-16 {
      margin-top: 0px;
      padding-left: 0px;
      text-align: center;
    }

    .heading-16.relacionados {
      font-size: 26px;
    }

    .paragraph-2 {
      width: 100%;
      font-size: 18px;
      line-height: 1.8;
    }

    .heading-17 {
      font-size: 32px;
    }

    .paragraph-27 {
      width: 100%;
    }

    .column-4 {
      padding-right: 0px;
      padding-left: 0px;
      border-right-style: none;
    }

    .column-3 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      padding-left: 0px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .heading-18 {
      width: 100%;
      font-size: 20px;
      line-height: 1.3;
    }

    .heading-18._02 {
      font-size: 20px;
    }

    .heading-18._02.relacionado {
      font-size: 18px;
    }

    .div-img-postrelacionado {
      padding-right: 10px;
      padding-left: 10px;
    }

    .div-img-postrelacionado._3 {
      padding-right: 10px;
      padding-left: 10px;
    }

    .div-img-postrelacionado._2 {
      padding-right: 10px;
      padding-left: 10px;
    }

    .content-cta {
      width: 100%;
      margin-top: 40px;
    }

    .submit-button-5 {
      width: 100%;
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
      align-items: center;
    }

    .div-img-postinterna {
      width: 100%;
      height: 300px;
    }

    .text-block-32 {
      text-align: center;
    }

    .heading-19 {
      width: 100%;
      font-size: 22px;
    }

    .post-main-info {
      width: 100%;
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
      align-items: center;
    }

    .secao-material-destaque {
      height: auto;
      padding-bottom: 20px;
    }

    .imagem-material-destque {
      width: 100%;
      height: 300px;
      background-position: 50% 50%;
      background-size: cover;
    }

    .titulo-material-destaque {
      width: 100%;
      margin-top: 0px;
      padding-left: 20px;
    }

    .botao-materiais {
      width: 90%;
      text-align: center;
    }

    .pai-dropdown-categoria-materiais {
      width: 100%;
      margin-bottom: 30px;
      float: none;
    }

    .column-5 {
      display: block;
      padding-right: 0px;
      padding-left: 0px;
    }

    .text-block-33 {
      font-size: 18px;
    }

    .campo-pesquisa {
      width: 85%;
    }

    .coluna-busca {
      padding-right: 0px;
      padding-left: 0px;
    }

    .colunas-materiais {
      height: auto;
    }

    .titulo-categoria-materiais {
      padding-left: 0px;
      text-align: center;
    }

    .coluna-individual-material {
      padding-right: 0px;
      padding-left: 0px;
    }

    .botao-material-secundario {
      position: relative;
      width: 99%;
      margin-top: 10px;
      margin-left: 0px;
    }

    .bold-text-27 {
      height: auto;
    }

    .image-9 {
      width: 100px;
      margin-right: -25px;
      margin-bottom: 0px;
      -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg);
    }

    .image-10._2 {
      margin-left: 25px;
    }

    .image-11 {
      position: absolute;
      left: 0%;
      top: 0%;
      right: auto;
      bottom: 0%;
      margin-top: 2px;
      margin-left: 10px;
    }

    .form-block-5 {
      margin-bottom: 10px;
    }

    .column-49 {
      padding-right: 0px;
      padding-left: 0px;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      border-bottom: 2px solid #ff8b22;
      border-right-style: none;
    }

    .column-49._2 {
      padding-right: 30px;
      padding-left: 10px;
      border-bottom-color: #006b3f;
    }

    .text-block-34 {
      width: 100%;
    }

    .list-7 {
      width: 100%;
      padding-left: 20px;
    }

    .text-field-5 {
      width: 100%;
      float: none;
      border-top-right-radius: 25px;
      border-bottom-right-radius: 25px;
    }

    .submit-button-6 {
      width: auto;
      padding-right: 40px;
      padding-left: 40px;
      float: none;
      border-top-left-radius: 25px;
      border-bottom-left-radius: 25px;
    }

    .form-6 {
      width: 100%;
      text-align: center;
    }

    .left-arrow-3 {
      display: none;
    }

    .right-arrow-3 {
      display: none;
    }

    .hero-landing {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .div-info-hero {
      top: 0%;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none;
    }

    .div-info-hero.monte-mor {
      top: 15%;
    }

    .col-text {
      padding-right: 0px;
    }

    .col-text.sta-iria {
      padding-top: 0px;
    }

    .col-forms {
      padding-top: 100px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .heading-lp {
      width: 225px;
      font-size: 16px;
      line-height: 26px;
    }

    .heading-lp.sta-iria {
      width: 190px;
    }

    .heading-lp.regatas {
      width: 270px;
    }

    .div-logos-hero {
      position: relative;
      margin-bottom: 20px;
      padding-top: 0px;
      padding-left: 0px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .div-logos-hero.sta-iria {
      width: 160px;
      margin-top: 0px;
      margin-left: 0px;
    }

    .div-logos-hero.regatas {
      margin-right: 100px;
      margin-left: 0px;
    }

    .div-logos-hero.itapeva {
      margin-right: 100px;
      margin-left: 0px;
    }

    .div-logos-hero.elvira {
      margin-right: 100px;
      margin-left: 0px;
    }

    .div-logos-hero.elvira {
      margin-right: auto;
      margin-left: auto;
    }

    .image-13 {
      margin-right: 0px;
    }

    .tag-hero {
      font-size: 14px;
    }

    .tag-hero.destaque {
      font-size: 14px;
    }

    .div-tags {
      padding-left: 0px;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .div-tags.sta-iria {
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start;
    }

    .destaque-lp {
      font-size: 28px;
      line-height: 32px;
    }

    .destaque-lp.regatas {
      font-size: 35px;
    }

    .destaque-lp.itapeva {
      width: auto;
      font-size: 31px;
      line-height: 40px;
    }

    .box {
      width: 300px;
      height: 227px;
      background-size: 300px 227px;
    }

    .box.sta-iria {
      width: 240px;
      height: 180px;
      background-size: 240px 180px;
    }

    .box.regatas {
      height: 240px;
      margin-top: 20px;
    }

    .box.regatas.comercial {
      height: 190px;
      margin-top: 20px;
      padding-top: 15px;
    }

    .box.itapeva {
      height: 240px;
      margin-top: 20px;
    }

    .box.itapeva.comercial {
      height: 190px;
      margin-top: 20px;
      padding-top: 15px;
    }

    .box.itapeva.montemor {
      width: 280px;
    }

    .div-forms-hero {
      width: 100%;
    }

    .div-forms-hero.regatas {
      margin-top: 0px;
    }

    .div-forms-hero.itapeva {
      margin-top: 0px;
    }

    .div-forms-hero.monte-mor-lan {
      margin-top: 0px;
    }

    .label-form-lp {
      font-size: 12px;
    }

    .campo-form-lp {
      margin-bottom: 5px;
    }

    .enviar-form-lp {
      margin-top: 10px;
    }

    .traga-seu-negocio {
      padding-top: 40px;
    }

    .columns-17 {
      width: 100%;
      margin-top: 40px;
    }

    .column-50 {
      padding-right: 0px;
    }

    .slide-nav-4 {
      margin-bottom: -50px;
    }

    .slide-nav-4.regatas {
      margin-bottom: 0px;
    }

    .heading-22 {
      margin-top: 100px;
    }

    .condicoes {
      padding-top: 40px;
      padding-bottom: 60px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(#006b3f), to(#00d38d));
      background-image: linear-gradient(180deg, #006b3f, #00d38d);
      background-position: 0px 0px;
      background-size: auto;
      background-repeat: repeat;
    }

    .condicoes.minha-casa {
      padding-bottom: 40px;
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
      align-items: center;
    }

    .box-condicoes {
      width: auto;
      border-bottom: 1px solid #fff;
      border-right-style: none;
    }

    .box-condicoes.end {
      border-bottom-style: none;
    }

    .localizacao-lp {
      padding-top: 40px;
      padding-bottom: 60px;
    }

    .text-block-37 {
      width: 100%;
      font-size: 16px;
    }

    .columns-18 {
      width: 100%;
    }

    .div-proximidade {
      margin-right: 0px;
      margin-bottom: 15px;
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
      align-items: center;
    }

    .column-51 {
      padding-right: 0px;
    }

    .map-2 {
      height: 350px;
    }

    .institucional {
      padding-top: 40px;
    }

    .column-52 {
      padding-top: 0px;
      padding-right: 0px;
    }

    .column-53 {
      margin-top: 20px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .column-54 {
      padding-right: 0px;
      padding-left: 0px;
    }

    .column-55 {
      padding-top: 40px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .div-ponto-de-conversao {
      width: 100%;
      padding: 15px;
    }

    .h3-ponto-de-conversao._2 {
      font-size: 16px;
      text-align: center;
    }

    .paragraph-30 {
      font-size: 16px;
    }

    .button-conversao {
      width: 100%;
      margin-right: 0px;
      margin-bottom: 20px;
      padding-right: 10px;
      padding-left: 10px;
      text-align: center;
    }

    .button-conversao._2 {
      margin-bottom: 0px;
    }

    .button-conversao._3 {
      margin-right: 0px;
      margin-bottom: 10px;
    }

    .radio-button-2 {
      margin-right: 10px;
    }

    .radio-button-field-3 {
      width: 100%;
      padding-right: 5px;
    }

    .radio-button-label-2 {
      width: 90%;
      font-size: 14px;
    }

    .button-11 {
      width: 100%;
      margin-left: 0px;
      text-align: center;
    }

    .button-11.smarturba {
      padding: 20px 10px;
      font-size: 15px;
    }

    .button-11.smarturba._2 {
      display: none;
    }

    .button-11.smarturba._2.mobile {
      display: block;
      margin-top: 20px;
    }

    .div-etapa2-2 {
      height: 0px;
    }

    .columns-20 {
      margin-bottom: 0px;
    }

    .heading-23 {
      font-size: 28px;
    }

    .heading-23.area-cliente {
      width: 100%;
      padding-bottom: 140px;
      font-size: 28px;
      text-align: left;
    }

    .section-texto-relatorios {
      padding-top: 30px;
      padding-bottom: 30px;
    }

    .paragraph-31 {
      width: 100%;
    }

    .div-categorias {
      width: 100%;
    }

    .duvida-3 {
      font-size: 14px;
    }

    .div-seta-3 {
      margin-right: 0px;
    }

    .list-8 {
      padding-left: 20px;
    }

    .div-resposta-2 {
      height: 0px;
    }

    .list-9 {
      padding-left: 20px;
    }

    .list-10 {
      padding-left: 20px;
    }

    .list-11 {
      padding-left: 20px;
    }

    .campo-form-lp-2 {
      margin-bottom: 5px;
    }

    .tag-hero-2 {
      font-size: 14px;
    }

    .tag-hero-2.destaque {
      font-size: 14px;
    }

    .tag-hero-2.destaque {
      font-size: 14px;
    }

    .tag-hero-2.dunlop-box-hero {
      display: block;
      text-align: center;
    }

    .enviar-form-lp-2 {
      margin-top: 10px;
    }

    .heading-lp-2 {
      width: 225px;
      font-size: 16px;
      line-height: 26px;
    }

    .heading-lp-2.regatas {
      width: 260px;
      font-size: 18px;
    }

    .heading-lp-2.itapeva {
      width: 260px;
      font-size: 18px;
    }

    .heading-lp-2.itapeva {
      width: 260px;
      font-size: 18px;
    }

    .label-form-lp-2 {
      font-size: 12px;
    }

    .div-box-preenchido {
      width: 300px;
      height: 200px;
    }

    .div-box-preenchido.regatas-comercial {
      width: 290px;
      height: 150px;
    }

    .div-box-contorno {
      width: 300px;
      height: 200px;
    }

    .div-box-contorno.regatas-comercial {
      width: 290px;
      height: 150px;
    }

    .div-box-contorno.itapeva {
      width: 280px;
      height: 280px;
    }

    .div-box-contorno.elvira {
      left: 10px;
      top: 10px;
      width: 280px;
      height: 200px;
    }

    .div-box-contorno.residencial-progresso {
      left: 10px;
      top: 10px;
      width: 280px;
      height: 200px;
    }

    .div-box-contorno.parque-vitoria {
      left: 10px;
      top: 10px;
      width: 280px;
      height: 200px;
    }

    .feature {
      width: 100%;
    }

    .text-block-46 {
      left: auto;
      top: 10px;
      right: 10px;
      bottom: auto;
    }

    .tag-breve-lan-amento.itapeva {
      top: -3.5%;
    }

    .text-block-47.montemor {
      top: 84px;
    }

    .text-block-47.residencial-progresso {
      top: 84px;
    }

    .text-block-47.parque-vitoria {
      top: 84px;
    }

    .hero {
      height: auto;
      padding-top: 20px;
      padding-bottom: 60px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(55, 20, 73, 0.66)), to(rgba(55, 20, 73, 0.66))), url('../images/Imagem_Smart08.jpg');
      background-image: linear-gradient(180deg, rgba(55, 20, 73, 0.66), rgba(55, 20, 73, 0.66)), url('../images/Imagem_Smart08.jpg');
      background-position: 0px 0px, 60% 50%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
    }

    .heading-25 {
      font-size: 42px;
      line-height: 1.3em;
      text-align: center;
    }

    .image-18 {
      left: 0%;
      top: 5%;
      right: 0%;
      bottom: auto;
      margin-right: auto;
      margin-left: auto;
    }

    .heading-26 {
      line-height: 1.4em;
      text-align: center;
    }

    .paragraph-32 {
      text-align: center;
    }

    .entenda {
      padding-top: 60px;
      padding-bottom: 60px;
    }

    .columns-21 {
      width: auto;
    }

    .column-60 {
      padding-top: 40px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .grid-3 {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }

    .column-61 {
      padding-right: 0px;
    }

    .box-entenda {
      margin-bottom: 10px;
    }

    .video {
      padding-top: 60px;
      padding-bottom: 60px;
      background-position: -60% 100%;
      background-size: cover;
      background-attachment: scroll;
    }

    .div-video {
      width: 100%;
      margin-top: 40px;
    }

    .como-funciona {
      padding-bottom: 60px;
    }

    .section-form {
      padding-top: 60px;
      padding-bottom: 120px;
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.5))), url('../images/contato.jpg');
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/contato.jpg');
      background-position: 0px 0px, 10% 100%;
      background-size: auto, cover;
      background-repeat: repeat, no-repeat;
      background-attachment: scroll, fixed;
    }

    .text-field-6 {
      box-shadow: 0 0 6px -3px rgba(0, 0, 0, 0.25);
    }

    .heading-27 {
      width: 95%;
      margin-right: 0px;
      margin-left: 0px;
      font-size: 24px;
      text-align: left;
    }

    .heading-27.forms {
      text-align: center;
    }

    .heading-27.center {
      width: 100%;
      text-align: center;
    }

    .heading-27.center._32px {
      font-size: 24px;
    }

    .heading-27.tour-dunlop._2._32px {
      width: 100%;
      font-size: 24px;
      text-align: center;
    }

    .heading-27.tour-dunlop._32px {
      width: 100%;
      font-size: 24px;
      text-align: center;
    }

    .heading-27.galeria {
      margin-bottom: 0px;
      text-align: center;
    }

    .heading-27.center {
      width: 100%;
      text-align: center;
    }

    .paragraph-34 {
      width: 100%;
    }

    .div-features {
      margin-top: 80px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .div-features._2 {
      margin-top: 80px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .div-features._3 {
      margin-top: 80px;
    }

    .div-features._4 {
      margin-top: 80px;
    }

    .imagem-smarturba {
      width: 100%;
    }

    .imagem-smarturba._2.dunlop-img {
      width: 280px;
      height: 280px;
    }

    .imagem-smarturba._6.dunlop-img {
      width: 280px;
      height: 280px;
    }

    .imagem-smarturba._7.dunlop-img {
      width: 280px;
      height: 280px;
    }

    .imagem-smarturba.dunlop-img {
      width: 280px;
      height: 280px;
    }

    .div-info-smarturba {
      width: 100%;
      margin-top: 20px;
      margin-left: 0px;
    }

    .div-info-smarturba._2 {
      margin-top: 20px;
      margin-right: 0px;
    }

    .paragraph-35._2 {
      text-align: left;
    }

    .heading-28._2 {
      text-align: left;
    }

    .heading-28._4 {
      text-align: left;
    }

    .heading-28._6 {
      text-align: left;
    }

    .topicos {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .topico {
      width: 100%;
      min-height: 50px;
      margin-right: 0px;
      margin-bottom: 10px;
    }

    .topico._2 {
      width: 100%;
      min-height: 50px;
      margin-left: 0px;
    }

    .topico._4 {
      min-height: 50px;
      margin-left: 0px;
    }

    .topico._6 {
      margin-left: 0px;
    }

    .image-20 {
      width: 100px;
    }

    .image-20._2 {
      left: -15px;
    }

    .image-21 {
      width: 100px;
    }

    .div-button-smarturba {
      margin-top: 80px;
    }

    .text-block-50 {
      width: 90%;
      margin-right: auto;
      margin-left: auto;
      font-size: 12px;
    }

    .cta-provisorio {
      padding-top: 60px;
      padding-bottom: 60px;
      background-image: linear-gradient(45deg, #006b3f, #079d56);
      background-position: 0px 0px;
      background-size: auto;
      background-repeat: repeat;
    }

    .heading-29 {
      width: 100%;
    }

    .heading-30 {
      font-size: 42px;
      line-height: 1.3em;
      text-align: center;
    }

    .heading-30.h1-dunlop {
      font-size: 28px;
    }

    .heading-30.h1-dunlop {
      font-size: 28px;
    }

    .heading-30.minha-casa {
      font-size: 47px;
    }

    .heading-31 {
      line-height: 1.4em;
      text-align: center;
    }

    .paragraph-36 {
      text-align: center;
    }

    .paragraph-36.dunlop-sub {
      margin-right: 0px;
    }

    .paragraph-36.dunlop-sub {
      margin-right: 10px;
      margin-left: 10px;
    }

    .paragraph-36.vila-profeta-subtitulo {
      margin-right: 0px;
      text-align: left;
    }

    .button-12 {
      width: 100%;
      margin-left: 0px;
      text-align: center;
    }

    .button-12.smarturba {
      padding: 20px 10px;
      font-size: 15px;
    }

    .button-12.smarturba._2 {
      display: block;
    }

    .button-12.smarturba._2.mobile {
      display: none;
      margin-top: 20px;
      padding-top: 15px;
      padding-bottom: 15px;
    }

    .button-12.smarturba._2.mobile.display-hidden {
      display: none;
    }

    .div-formulario-dunlop {
      width: 100%;
      padding-top: 20px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .div-formulario-dunlop.minha-casa {
      margin-right: auto;
      margin-left: auto;
      padding-right: 0px;
    }

    .enviar-form-lp-3 {
      width: 100%;
      margin-top: 10px;
      padding-top: 12px;
      padding-bottom: 12px;
    }

    .box-entenda-2 {
      margin-bottom: 10px;
    }

    .div-paragraph-center.margin-top-60px {
      margin-top: 50px;
    }

    .div-video-2 {
      width: 100%;
    }

    .div-grid-features {
      margin-top: 0px;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .div-feature {
      width: 100%;
      margin: 15px 0px;
    }

    .topico-2 {
      width: 100%;
      min-height: 50px;
      margin-right: 0px;
      margin-bottom: 10px;
    }

    .topico-2.dunlop-topic {
      min-height: 80px;
    }

    .topico-2.vila-profeta-topicos {
      min-height: 80px;
    }

    .comercio {
      background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.6)), to(rgba(0, 0, 0, 0.6))), url('../images/como-funciona-3.jpeg'), -webkit-gradient(linear, left top, left bottom, color-stop(45%, #079d56), to(#00d38d));
      background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('../images/como-funciona-3.jpeg'), linear-gradient(180deg, #079d56 45%, #00d38d);
      background-size: auto, cover, auto;
    }

    .div-logo-dunlop {
      width: 290px;
      border-radius: 5px;
    }

    .seta-2 {
      left: 50%;
      top: auto;
      right: 0%;
      bottom: 0%;
      margin-right: 0px;
      margin-bottom: -25px;
      -webkit-transform: translate(-50%, 0%) rotate(45deg);
      -ms-transform: translate(-50%, 0%) rotate(45deg);
      transform: translate(-50%, 0%) rotate(45deg);
    }

    .galeria-de-fotos-2 {
      height: auto;
      background-color: #f7f7f7;
    }

    .button-14 {
      padding-right: 20px;
      padding-left: 20px;
      border-radius: 100px;
    }

    .column-68 {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
      padding-left: 0px;
    }

    .div-contorno {
      left: 30px;
      top: 30px;
      width: 280px;
      height: 280px;
      border-width: 8px;
      border-radius: 20px;
    }

    .div-contorno._2 {
      left: 30px;
      top: 10px;
      right: auto;
      bottom: auto;
    }

    .div-contorno._2._3 {
      top: 30px;
    }

    .enviar-form-lp-4 {
      width: 100%;
      margin-top: 10px;
      padding-top: 12px;
      padding-bottom: 12px;
    }

    .div-logo-minhacasa {
      width: 320px;
      margin-right: auto;
      margin-left: auto;
      border-radius: 15px;
    }

    .menor {
      font-size: 44px;
    }

    .heading-34 {
      margin-right: 10px;
      margin-left: 10px;
      font-size: 28px;
      line-height: 1.2em;
      text-align: center;
    }

    .sonho {
      padding-top: 150px;
      padding-bottom: 60px;
    }

    .image-24 {
      left: 50%;
      bottom: -97px;
      width: 96%;
    }

    .div-selo-minhacasa {
      position: relative;
      left: 0%;
      bottom: 0px;
      margin-top: 20px;
      margin-right: auto;
      margin-left: auto;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none;
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
      flex-direction: column;
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
      justify-content: flex-start;
    }

    .txt-boxes-sonho {
      margin-left: 10px;
      text-align: left;
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
      align-items: flex-start;
    }

    .box-condicao {
      width: 100%;
      min-height: 0px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      border-right-style: none;
    }

    .box-condicao.border-off {
      border-bottom-style: none;
    }

    .div-txt-detalhes {
      width: 100%;
    }

    .slider-detalhes {
      height: 400px;
    }

    .img-casas {
      height: 400px;
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
      align-items: center;
    }

    .text-block-59 {
      line-height: 1.3em;
    }

    .slider-6 {
      height: 240px;
    }

    .div-logo-vila-profeta {
      width: 290px;
      border-radius: 5px;
      background-color: hsla(0, 0%, 100%, 0.9);
    }

    .roxo.bold {
      color: #82ea5b;
    }

    .image-26 {
      width: 300px;
    }

    .apresentacao-institucional {
      margin-top: 0px;
      padding-top: 0px;
    }

    .filto-por-ano {
      height: 130px;
    }

    .form-8 {
      display: block;
      width: auto;
    }

    .btn-filtro-investidores {
      display: inline-block;
      margin-top: 0px;
    }

    .div-block-12 {
      text-align: right;
    }

    .estatuto-social {
      margin-top: 80px;
    }

    .columns-22 {
      display: block;
    }

    .columns-23 {
      display: block;
    }

    .div-img-sobre-2 {
      width: auto;
      height: 216px;
      margin-top: 0px;
    }

    .div-img-sobre-2.venda {
      height: 189px;
    }

    .paragrafo-comum {
      width: 95%;
    }

    .paragrafo-comumm {
      margin-top: 0px;
      font-size: 13px;
    }

    .paragrafo-comumm.texto-margem-top {
      margin-top: 51px;
    }

    .columns-24 {
      margin-bottom: 150px;
    }

    .link-mobile {
      padding-left: 20px;
    }

    .nota {
      margin-top: 0px;
      font-size: 13px;
    }

    .nota.texto-margem-top {
      margin-top: 51px;
    }

    .div-box-preenchido-itapeva {
      width: 280px;
      height: 280px;
    }

    .div-box-preenchido-itapeva.regatas-comercial {
      width: 290px;
      height: 150px;
    }

    .subtitle-lp {
      width: 225px;
      font-size: 16px;
      line-height: 26px;
    }

    .subtitle-lp.regatas {
      width: 260px;
      font-size: 18px;
    }

    .subtitle-lp.itapeva {
      width: 260px;
      font-size: 18px;
    }

    .subtitle-lp.itapeva {
      width: 260px;
      margin-top: 86px;
      font-size: 17px;
      line-height: 27px;
    }

    .subtitle-lp.monte-mor {
      width: 260px;
      margin-top: 68px;
      font-size: 17px;
      line-height: 27px;
      text-align: center;
    }

    .subtitle-lp.residencial-progresso {
      width: 260px;
      margin-top: 20px;
      margin-left: -13px;
      font-size: 17px;
      line-height: 27px;
      text-align: center;
    }

    .subtitle-lp.parque-vitoria {
      width: 260px;
      margin-top: 20px;
      margin-left: -13px;
      font-size: 17px;
      line-height: 27px;
      text-align: center;
    }

    .subtitle-lp.parque-vitoria-2 {
      width: 260px;
      margin-top: 68px;
      font-size: 17px;
      line-height: 27px;
      text-align: center;
    }

    .subtitle-lp.monte-mor-lan {
      width: 260px;
      margin-top: 68px;
      font-size: 17px;
      line-height: 27px;
      text-align: center;
    }

    .logo-itapeva {
      margin-right: 0px;
    }

    .button-33 {
      padding-right: 20px;
      padding-left: 20px;
      border-radius: 100px;
    }

    .button-34 {
      padding-right: 20px;
      padding-left: 20px;
      border-radius: 100px;
    }

    .column-25-copy {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
      padding-left: 0px;
    }

    .image-60 {
      width: 100px;
      margin-right: -25px;
      margin-bottom: 0px;
      -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg);
    }

    .video-itapeva {
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .heading-36.elvira.monte-mor {
      width: 230px;
      font-size: 20px;
    }

    .heading-36.elvira.sao-roque {
      width: 230px;
      font-size: 20px;
    }

    .heading-36.elvira.monte-mor-lan {
      width: 230px;
      font-size: 20px;
    }

    .heading-36.elvira-copy.monte-mor {
      width: 230px;
      font-size: 20px;
    }

    .heading-36.elvira-copy.sao-roque {
      width: 230px;
      font-size: 20px;
    }

    .heading-36.elvira-copy.residencial-progresso {
      width: 230px;
      font-size: 20px;
    }

    .heading-36.elvira-copy.parque-vitoria {
      width: 230px;
      font-size: 20px;
    }

    .grid-5 {
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
    }

    .logo-elvira {
      margin-right: 0px;
    }

    .lightbox-link-8 {
      width: 100%;
      height: auto;
    }

    .div-planta-03 {
      width: 100%;
      height: 300px;
    }

    .cond-elvira {
      width: 100%;
    }

    .elvira-roxo {
      height: auto;
      padding-top: 40px;
      padding-bottom: 40px;
      padding-left: 0px;
    }

    .elvira-seta-laranja {
      width: 100px;
      margin-right: -25px;
      margin-bottom: 0px;
      -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg);
    }

    .div-box-preenchido-elvira {
      width: 280px;
      height: 200px;
    }

    .div-box-preenchido-elvira.regatas-comercial {
      width: 290px;
      height: 150px;
    }

    .destaque-h2-elvira.roxo {
      color: #82ea5b;
    }

    .destaque-h2-copy.roxo {
      color: #82ea5b;
    }

    .logo-monte-mor {
      margin-right: auto;
      margin-left: auto;
    }

    .text-span-5 {
      width: 100%;
      font-size: 20px;
    }

    .icone-montemor {
      width: 100%;
      height: 230px;
      margin: 10px 0px;
      padding: 10px;
    }

    .icone-montemor.end-mobile {
      border-right-style: none;
    }

    .div-block-24 {
      width: 260px;
    }

    .image-5 {
      padding-right: 0px;
    }

    .paragrafo-2.topicos {
      padding-bottom: 0px;
    }

    .colunas-montemor {
      height: auto;
    }

    .coluna-1-monte-mor {
      width: 100%;
      margin-top: 40px;
      margin-bottom: 40px;
      padding-right: 20px;
      padding-left: 20px;
    }

    .youtube {
      width: 100%;
    }

    .lightbox-link-9 {
      height: auto;
    }

    .image-62 {
      display: none;
      width: auto;
      height: auto;
    }

    .image-63 {
      display: none;
    }

    .image-64 {
      display: none;
    }

    .image-65 {
      display: none;
    }

    .right-arrow-4 {
      right: -56px;
      display: block;
    }

    .h1-2.verde-claro.center {
      font-size: 30px;
    }

    .h1-2.verde-claro.center {
      font-size: 30px;
    }

    .image-66 {
      width: 256px;
    }

    .lightbox-link-10 {
      width: 260px;
    }

    .slide-nav-6 {
      display: block;
    }

    .slider-7.mobile {
      width: 100%;
    }

    .left-arrow-4 {
      left: -56px;
      display: block;
    }

    .grid-8 {
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .div-box-preenchido-sao-roque {
      width: 280px;
      height: 200px;
    }

    .div-box-preenchido-sao-roque.regatas-comercial {
      width: 290px;
      height: 150px;
    }

    .logo-sao-roque {
      margin: 10px auto 20px;
      padding-bottom: 20px;
    }

    .topicos-sao-roque-02 {
      width: 100%;
      height: auto;
      margin: 10px 0px;
      padding: 10px;
    }

    .topicos-sao-roque-02.end-mobile {
      border-right-style: none;
    }

    .icone-montemor-copy {
      width: 100%;
      height: 230px;
      margin: 10px 0px;
      padding: 10px;
    }

    .icone-montemor-copy.end-mobile {
      border-right-style: none;
    }

    .icone-montemor-copy-copy {
      width: 100%;
      height: 230px;
      margin: 10px 0px;
      padding: 10px;
    }

    .icone-montemor-copy-copy.end-mobile {
      border-right-style: none;
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
      grid-column-gap: 0px;
      grid-row-gap: 10px;
      -ms-grid-columns: 1fr 1fr;
      grid-template-columns: 1fr 1fr;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
    }

    .icone-montemor-copy {
      width: 100%;
      height: 230px;
      margin: 10px 0px;
      padding: 10px;
    }

    .icone-montemor-copy.end-mobile {
      border-right-style: none;
    }

    .condicoes-sao-roque {
      width: 100%;
      height: auto;
      margin: 10px 0px;
      padding: 20px 10px;
    }

    .condicoes-sao-roque.end-mobile {
      border-right-style: none;
    }

    .infos-terreno-sao-roque.monte-mor.infos-terreno-monte {
      padding-top: 0px;
      padding-bottom: 60px;
    }

    .andamento-obra-sao-roque {
      display: block;
      width: 100%;
      height: auto;
      margin: 10px 0px;
      padding: 10px;
    }

    .andamento-obra-sao-roque.end-mobile {
      border-right-style: none;
    }

    .logo-residencial-progresso {
      margin: 10px auto 20px;
      padding-bottom: 20px;
    }

    .div-box-preenchido-residencial-progresso {
      width: 280px;
      height: 200px;
    }

    .div-box-preenchido-residencial-progresso.regatas-comercial {
      width: 290px;
      height: 150px;
    }

    .cond-residencial-progresso {
      width: 100%;
      margin-bottom: 40px;
    }

    .div-diferencial {
      width: auto;
      margin-right: 20px;
      margin-left: 20px;
      padding: 9px 18px;
    }

    .coluna-direita-localizacao {
      height: auto;
    }

    .bold-text-53 {
      font-size: 25px;
      line-height: 30px;
    }

    .colunas-montemor-copy {
      height: auto;
    }

    .div-box-preenchido-parque-vitoria {
      width: 280px;
      height: 200px;
    }

    .div-box-preenchido-parque-vitoria.regatas-comercial {
      width: 290px;
      height: 150px;
    }

    .logo-parque-vitoria {
      margin: 10px auto 20px;
      padding-bottom: 20px;
    }

    .logo-2d {
      display: block;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .infos-2d.monte-mor.infos-terreno-monte {
      padding-top: 60px;
      padding-bottom: 60px;
    }

    .informacoes-comerciais.monte-mor.infos-terreno-monte {
      padding-top: 0px;
      padding-bottom: 60px;
    }

    .grid-9 {
      -ms-grid-columns: 1fr;
      grid-template-columns: 1fr;
    }

    .condicoes-comerciais-parque-vitoria {
      width: 100%;
      height: auto;
      margin: 10px 0px;
      padding: 20px 10px;
    }

    .condicoes-comerciais-parque-vitoria.end-mobile {
      border-right-style: none;
    }

    .div-diferencial-parque-vitora {
      width: auto;
      margin-right: 20px;
      margin-left: 20px;
      padding: 9px 18px;
    }

    .logo-urba {
      display: block;
      margin-top: 20px;
      margin-bottom: 20px;
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
      align-items: center;
    }

    .div-box-preenchido-monte-mor-lan {
      width: 280px;
      height: 200px;
    }

    .div-box-preenchido-monte-mor-lan.regatas-comercial {
      width: 290px;
      height: 150px;
    }

    .col-forms-monte-mor-lan {
      padding-top: 100px;
      padding-right: 0px;
      padding-left: 0px;
    }

    .infos-terreno-monte-mor-lan.monte-mor.infos-terreno-monte {
      padding-top: 60px;
      padding-bottom: 60px;
    }

    .monte-mor-lan {
      width: 100%;
    }

    .coluna-mm-lan {
      padding-right: 0px;
      padding-left: 0px;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      border-bottom: 2px solid #ff8b22;
      border-right-style: none;
    }

    .coluna-mm-lan.end {
      border-bottom-style: none;
    }

    .coluna-mm-lan._2 {
      padding-right: 30px;
      padding-left: 10px;
      border-bottom-color: #006b3f;
    }

    .colunas-mm-lan {
      position: static;
      top: 0%;
      width: 90%;
      -webkit-transform: none;
      -ms-transform: none;
      transform: none;
    }

    .colunas-mm-lan._2 {
      width: 95%;
    }

    .colunas-mm-lan.itapeva {
      width: 95%;
    }

    .colunas-mm-lan._3 {
      width: 95%;
    }

    .destaque-h2-branco.roxo {
      color: #82ea5b;
    }

    .coluna-1-monte-mor-lan {
      width: 100%;
      margin-top: 40px;
      margin-bottom: 40px;
      padding-right: 20px;
      padding-left: 20px;
    }

    .tab-single-mm-lan {
      height: auto;
    }

    .tab-map-mm-lan {
      height: 300px;
    }

    .coluna-loc-mm-lan {
      height: auto;
      padding-bottom: 0px;
      padding-left: 0px;
      -webkit-box-pack: start;
      -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
      justify-content: flex-start;
    }

    .coluna-loc-mm-lan.residencial-progresso {
      padding-right: 0px;
    }

    .col-mm-lan--loc {
      height: auto;
    }

    .loc-mm-lan {
      height: auto;
    }

    .coluna-tabs-mm-lan {
      height: auto;
    }
  }

  #w-node-_214e244b-38e3-a924-7e1c-5d7a58811c00-e6267467 {
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    -ms-grid-row-align: auto;
    align-self: auto;
    -ms-grid-column-align: auto;
    justify-self: auto;
  }

  #w-node-_7201b726-81d3-bd0c-77d9-d46829ab6e9d-a3267475 {
    -ms-grid-column: span 1;
    grid-column-start: span 1;
    -ms-grid-column-span: 1;
    grid-column-end: span 1;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
  }

  #w-node-_7464def7-7e97-d473-c497-53808485d85d-a3267475 {
    -ms-grid-column: span 1;
    grid-column-start: span 1;
    -ms-grid-column-span: 1;
    grid-column-end: span 1;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
  }

  #w-node-_24c3e23e-feab-5da7-9b51-cc45812b8a2d-a3267475 {
    -ms-grid-column: span 1;
    grid-column-start: span 1;
    -ms-grid-column-span: 1;
    grid-column-end: span 1;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
  }

  #w-node-_161873f4-1897-4590-25ad-dd3a7d773afa-a3267475 {
    -ms-grid-column: span 1;
    grid-column-start: span 1;
    -ms-grid-column-span: 1;
    grid-column-end: span 1;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
  }

  #w-node-_7464def7-7e97-d473-c497-53808485d85d-82267482 {
    -ms-grid-column: span 1;
    grid-column-start: span 1;
    -ms-grid-column-span: 1;
    grid-column-end: span 1;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
  }

  #w-node-_119a8010-1a07-0a63-e789-9c670d553f53-82267482 {
    -ms-grid-column: span 1;
    grid-column-start: span 1;
    -ms-grid-column-span: 1;
    grid-column-end: span 1;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
  }

  #w-node-b790d3ce-5a0f-8b99-cab3-2b2e45dc0655-82267482 {
    -ms-grid-column: span 1;
    grid-column-start: span 1;
    -ms-grid-column-span: 1;
    grid-column-end: span 1;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
  }

  @media screen and (max-width: 479px) {
    #w-node-_8f8b3311-938b-542d-7468-eb2cfccb59c5-c8267461 {
      -ms-grid-column-span: 1;
      grid-column-end: span 1;
      -ms-grid-column: span 1;
      grid-column-start: span 1;
      -ms-grid-row-span: 1;
      grid-row-end: span 1;
      -ms-grid-row: span 1;
      grid-row-start: span 1;
    }

    #w-node-b44ff394-edce-04d3-2090-c80dbdc2c761-20267468 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
    }

    #w-node-_85a3680c-d7b6-e02a-6a0e-1dce1ffae6ac-20267468 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-becaf4aa-22bf-6395-f491-196d89487d94-20267468 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_33ff7a00-029d-371e-a001-fd257c06e2f2-20267468 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-a078d2ae-fdf4-a339-e708-3c3663ec4719-20267468 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_863f6c4e-0442-b4a0-dd15-ef53cf54d303-20267468 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_0a78eb64-b467-5d9e-5e86-3b024f14cf8a-20267468 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-0426746b {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-0426746b {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-0426746b {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-0426746b {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-0426746b {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba40c-0426746b {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-0426746b {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e63-07267470 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
    }

    #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e6c-07267470 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e88-07267470 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e7f-07267470 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558e9a-07267470 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-f2ace3cb-b61d-3c8b-0b25-1aca68558ea3-07267470 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-a3267475 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-a3267475 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-a3267475 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-a3267475 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-a3267475 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-a3267475 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
    }

    #w-node-b44ff394-edce-04d3-2090-c80dbdc2c761-ad267479 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
    }

    #w-node-_85a3680c-d7b6-e02a-6a0e-1dce1ffae6ac-ad267479 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-becaf4aa-22bf-6395-f491-196d89487d94-ad267479 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_33ff7a00-029d-371e-a001-fd257c06e2f2-ad267479 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-a078d2ae-fdf4-a339-e708-3c3663ec4719-ad267479 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_863f6c4e-0442-b4a0-dd15-ef53cf54d303-ad267479 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_0a78eb64-b467-5d9e-5e86-3b024f14cf8a-ad267479 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-1026747c {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-1026747c {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-1026747c {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-1026747c {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-1026747c {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-1026747c {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba40c-1026747c {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-b44ff394-edce-04d3-2090-c80dbdc2c761-be26747d {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
    }

    #w-node-_85a3680c-d7b6-e02a-6a0e-1dce1ffae6ac-be26747d {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-becaf4aa-22bf-6395-f491-196d89487d94-be26747d {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_33ff7a00-029d-371e-a001-fd257c06e2f2-be26747d {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-a078d2ae-fdf4-a339-e708-3c3663ec4719-be26747d {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_863f6c4e-0442-b4a0-dd15-ef53cf54d303-be26747d {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_0a78eb64-b467-5d9e-5e86-3b024f14cf8a-be26747d {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_5e10ca56-8352-d553-530f-356bb1db2097-8b26747f {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
    }

    #w-node-_5e10ca56-8352-d553-530f-356bb1db20a0-8b26747f {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_5e10ca56-8352-d553-530f-356bb1db20a9-8b26747f {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_5e10ca56-8352-d553-530f-356bb1db20b2-8b26747f {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_5e10ca56-8352-d553-530f-356bb1db20bb-8b26747f {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_5e10ca56-8352-d553-530f-356bb1db20c4-8b26747f {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_5e10ca56-8352-d553-530f-356bb1db20cd-8b26747f {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e734521-b4267480 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
    }

    #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e73452a-b4267480 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e734559-b4267480 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e734562-b4267480 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_27d08b7c-acc2-a707-6ad9-e94c5e73456b-b4267480 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-0a267481 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-0a267481 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-0a267481 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-0a267481 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-0a267481 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba40c-0a267481 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3f1-82267482 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3fa-82267482 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3e8-82267482 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba403-82267482 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba415-82267482 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-dc4c3ba3-bf99-2572-c13b-1063a43ba3df-82267482 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
    }

    #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a5b-9b267484 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a7f-9b267484 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a48-9b267484 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a64-9b267484 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_0b6f756c-8cdd-cbfd-181c-783e644f4a76-9b267484 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e37753f-e1267486 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e377551-e1267486 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e377523-e1267486 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }

    #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e37751a-e1267486 {
      -ms-grid-column-align: center;
      justify-self: center;
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
    }

    #w-node-_2bc777c1-3bf4-eef1-71c2-67dd7e37755a-e1267486 {
      -webkit-align-self: center;
      -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
      -ms-grid-column-align: center;
      justify-self: center;
    }
  }
</style>
<div id="hero" class="hero-internas monte-mor-lan wf-section">
  <div class="container-padrao reduzido monte-mor-lan">
    <div class="colunas-monte-mor-lan hero-mm-lan w-row">
      <div class="col-text monte-mor-lan w-col w-col-7 w-col-stack w-col-small-small-stack"><img src="https://urba.com.br/wp-content/uploads/2023/03/6332fe932d33571f6f8179e5_logo-monte-mor.png" loading="lazy" width="200" alt="" class="logo-monte-mor-lan">
        <div class="div-box-preenchido-monte-mor-lan">
          <h1 class="heading-36 elvira monte-mor-lan">Conheça o <strong>Reserva Monte Mor</strong><br></h1>
        </div>
        <h2 class="subtitle-lp monte-mor-lan">A Urba chega com o conceito que mais cresce na região: loteamento fechado com ampla <strong>área de lazer, portaria 24h, área comercial integrada</strong> e a apenas 7 minutos do Centro.<br></h2>
      </div>
      <div class="col-forms-monte-mor-lan w-col w-col-5 w-col-stack w-col-small-small-stack">
        <div class="div-forms-hero monte-mor-lan">
          <h3 class="heading-24 itapeva">Quero mais Informações</h3>
          <div class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form-5">
              <input type="hidden" id="idempreendimento" name="idempreendimento" value="22">
              <label for="name" class="label-form-lp-2">Nome</label>
              <input type="text" class="campo-form-lp-2 itapeva w-input" maxlength="256" name="name" data-name="name" placeholder="" id="name" required="">
              <label for="#E-mail" class="label-form-lp-2">E-mail</label>
              <input type="email" class="campo-form-lp-2 itapeva w-input" maxlength="256" name="E-mail" data-name="E-mail" placeholder="" id="E-mail" required="">
              <label for="Telefone" class="label-form-lp-2 itapeva">WhatsApp</label>
              <input type="tel" class="campo-form-lp-2 itapeva w-input" minlength="15" maxlength="15" name="Telefone" data-name="Telefone" placeholder="" onkeypress="MascaraTelefone(this);" id="Telefone" required="">
              <div class="w-embed">
                <style>
                  #field option {
                    color: #6e6e6e;
                  }

                  .campo-form-lp-2.itapeva:focus {
                    color: #ffffff !important;
                  }
                </style>
              </div>
              <div class="priv-monte-mor">Aceito receber via WhatsApp, ligações, email e SMS, o contato da marca MRV&amp;CO com novidades sobre este loteamento, bem como outras ações de marketing, ofertas de produtos e serviços. Estou de acordo com as formas de tratamento realizados pela marca MRV&amp;CO, conforme a sua <a href="https://mrv.com.br/institucional/pt/politica-de-privacidade" target="_blank" class="link-10">Política de Privacidade</a>.</div>
              <div class="priv-check-monte-mor">
                <label class="w-checkbox checkbox-field">
                  <input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" data-name="consentimento-de-comunicacao" required="" class="w-checkbox-input">
                  <span for="checkbox" class="checkbox-label-2 w-form-label">Ok, entendi!</span>
                </label>
              </div>
              <input type="submit" value="CADASTRE-SE E SAIBA MAIS" data-wait="Aguarde..." class="enviar-form-lp-2 botao-verde w-button">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="tag-breve-lan-amento">
    <div class="text-block-47 montemor">LANÇAMENTO<br></div>
  </div>
</div>
<div class="infos-terreno monte-mor infos-terreno-monte wf-section">
  <h2 class="heading-2 center monte-mor-mobile">Por que escolher o <span class="destaque-monte-mor">Reserva Monte Mor</span>?<strong class="destaque-h2-elvira"></strong></h2>
  <div class="container-padrao montemor">
    <p class="paragraph-16 montemor">A Urba, empresa de desenvolvimento urbano da MRV&amp;CO, líder de mercado no segmento imobiliário e com 40 anos de história, está <span class="destaque-monte-mor-paragrafo">chegando em Monte Mor/SP</span> com um novo conceito de bairro planejado — um loteamento fechado com comércio integrado, lazer e segurança.<br><br>Somos especialistas em loteamentos de alta qualidade em localizações estratégicas, planejados para possibilitar mais comodidade, diversão e qualidade de vida para as pessoas. No <span class="destaque-monte-mor-paragrafo">Reserva Monte Mor</span>, você tem tudo isso, e pode aproveitar muito mais seu novo lar e sua família, com mais comodidade, segurança e bem-estar.<br><br></p>
    <a href="#formulario" class="button-34 botao-sao-roque w-button">SAIBA MAIS</a>
  </div>
</div>
<div class="infos-terreno wf-section">
  <h2 class="heading-2 center">Conheça o <span class="destaque-monte-mor-verde">Empreendimento</span><strong class="destaque-h2-elvira"></strong></h2>
  <div class="container-padrao montemor">
    <p class="paragraph-16 montemor">O Reserva Monte Mor é um loteamento fechado com área de lazer, segurança e área comercial integrada.
      São 3 subcondomínios com portarias independentes: Reserva Monte Mor Ipê Amarelo, Reserva Monte Mor Ipê Branco, Reserva Monte Mor Ipê Roxo.<br><br></p>
    <div class="div-infos-terreno">
      <div data-w-id="2435a712-446a-235f-d2fe-115d8888ac9d" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/cadeado.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Loteamento fechado com controle de acesso<br></div>
      </div>
      <div data-w-id="2435a712-446a-235f-d2fe-115d8888aca2" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/banco.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Lazer acessível para todos</div>
      </div>
      <div data-w-id="2435a712-446a-235f-d2fe-115d8888aca6" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/planta.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Lotes a partir de 160m²<br></div>
      </div>
      <div data-w-id="2435a712-446a-235f-d2fe-115d8888acab" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/mapa.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Bairro planejado com infraestrutura completa</div>
      </div>
    </div>
    <div class="div-infos-terreno">
      <div data-w-id="2ed643f8-b740-ab62-c46b-571f3590e061" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/compras.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Área comercial integrada<br></div>
      </div>
      <div data-w-id="2ed643f8-b740-ab62-c46b-571f3590e066" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/arvore.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Projeto Paisagístico</div>
      </div>
      <div data-w-id="2ed643f8-b740-ab62-c46b-571f3590e06f" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/cancela.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Portaria 24h</div>
      </div>
    </div>
  </div>
</div>
<div id="galeria" class="dobra-4 wf-section">
  <div class="container-padrao-3 w-container">
    <p data-w-id="daf74de0-ded7-7623-7ec9-b27e0d686122" class="h1-2 verde-claro center">Veja mais detalhes do <strong class="elvira-destaque-verde">Reserva Monte Mor</strong></p>
    <div data-delay="4000" data-animation="slide" class="slider-7 desktop w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
      <div class="w-slider-mask">
        <div class="w-slide">
          <div class="w-layout-grid grid-8">
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PORTARIA.jpg" loading="lazy" srcset="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PORTARIA-p-500.jpg 500w, <?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PORTARIA-p-800.jpg 800w, <?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PORTARIA-p-1080.jpg 1080w, <?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PORTARIA-p-1600.jpg 1600w, <?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PORTARIA-p-2000.jpg 2000w, <?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PORTARIA.jpg 2250w" sizes="(max-width: 767px) 100vw, 380px" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Portaria<br></span>Imagem meramente ilustrativa</p>
              <script type="application/json" class="w-json">
                {
                  "items": [{
                    "_id": "example_img",
                    "origFileName": "URBA_RESERVA_MONTE_MOR_PORTARIA.jpg",
                    "fileName": "URBA_RESERVA_MONTE_MOR_PORTARIA.jpg",
                    "fileSize": 3143526,
                    "height": 1266,
                    "url": "<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PORTARIA.jpg",
                    "width": 2250,
                    "type": "image"
                  }],
                  "group": "montemor"
                }
              </script>
            </a>
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_ACESSOS.jpg" loading="lazy" sizes="(max-width: 767px) 100vw, 380px" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Acessos<br></span>Imagem meramente ilustrativa</p>
              <script type="application/json" class="w-json">
                {
                  "items": [{
                    "_id": "example_img",
                    "origFileName": "URBA_RESERVA_MONTE_MOR_ACESSOS.jpg",
                    "fileName": "URBA_RESERVA_MONTE_MOR_ACESSOS.jpg",
                    "fileSize": 3147716,
                    "height": 1266,
                    "url": "<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_ACESSOS.jpg",
                    "width": 2250,
                    "type": "image"
                  }],
                  "group": "montemor"
                }
              </script>
            </a>
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_RUA_CASAS.jpg" loading="lazy" sizes="(max-width: 767px) 100vw, 380px" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Casas<br></span>Imagem meramente ilustrativa</p>
              <script type="application/json" class="w-json">
                {
                  "items": [{
                    "_id": "example_img",
                    "origFileName": "URBA_RESERVA_MONTE_MOR_RUA_CASAS.jpg",
                    "fileName": "URBA_RESERVA_MONTE_MOR_RUA_CASAS.jpg",
                    "fileSize": 2807257,
                    "height": 1266,
                    "url": "<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_RUA_CASAS.jpg",
                    "width": 2250,
                    "type": "image"
                  }],
                  "group": "montemor"
                }
              </script>
            </a>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-layout-grid grid-8">
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_BOULEVARD_A2.jpg" loading="lazy" sizes="(max-width: 767px) 100vw, 380px" alt="" class="image-66">
              <p class="galeria-monte alameda-reserva"><span class="galeria-bold">Alameda Reserva<br>‍</span><span style="display: block;margin: auto;margin-top: -25px;">Lotes Comerciais<br>Imagem meramente ilustrativa</span></p>
              <script type="application/json" class="w-json">
                {
                  "items": [{
                    "_id": "example_img",
                    "origFileName": "URBA_RESERVA_BOULEVARD_A2.jpg",
                    "fileName": "URBA_RESERVA_BOULEVARD_A2.jpg",
                    "fileSize": 999369,
                    "height": 1406,
                    "url": "<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_BOULEVARD_A2.jpg",
                    "width": 2500,
                    "type": "image"
                  }],
                  "group": "montemor"
                }
              </script>
            </a>
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/LOJAS.jpg" loading="lazy" sizes="(max-width: 767px) 100vw, 380px" alt="" class="image-66">
              <p class="galeria-monte alameda-reserva"><span class="galeria-bold">Alameda Reserva<br>‍</span><span style="display: block;margin: auto;margin-top: -25px;">Lotes Comerciais<br>Imagem meramente ilustrativa</span></p>
              <script type="application/json" class="w-json">
                {
                  "items": [{
                    "_id": "example_img",
                    "origFileName": "LOJAS.jpg",
                    "fileName": "LOJAS.jpg",
                    "fileSize": 3371129,
                    "height": 1519,
                    "url": "<?= get_stylesheet_directory_uri() ?>/images/montemor/LOJAS.jpg",
                    "width": 2700,
                    "type": "image"
                  }],
                  "group": "montemor"
                }
              </script>
            </a>
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01.jpg" loading="lazy" sizes="(max-width: 767px) 100vw, 380px" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Pista de Caminhada<br></span>Imagem meramente ilustrativa</p>
              <script type="application/json" class="w-json">
                {
                  "items": [{
                    "_id": "example_img",
                    "origFileName": "URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01.jpg",
                    "fileName": "URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01.jpg",
                    "fileSize": 3285218,
                    "height": 1266,
                    "url": "<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01.jpg",
                    "width": 2250,
                    "type": "image"
                  }],
                  "group": "montemor"
                }
              </script>
            </a>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-layout-grid grid-8">
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_QUADRA_AREIA_LAZER.jpg" loading="lazy" sizes="(max-width: 767px) 100vw, 380px" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Quadra de Areia<br></span>Imagem meramente ilustrativa</p>
              <script type="application/json" class="w-json">
                {
                  "items": [{
                    "_id": "example_img",
                    "origFileName": "URBA_RESERVA_MONTE_MOR_QUADRA_AREIA_LAZER.jpg",
                    "fileName": "URBA_RESERVA_MONTE_MOR_QUADRA_AREIA_LAZER.jpg",
                    "fileSize": 3285218,
                    "height": 1266,
                    "url": "<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_QUADRA_AREIA_LAZER.jpg",
                    "width": 2250,
                    "type": "image"
                  }],
                  "group": "montemor"
                }
              </script>
            </a>
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PETPLACE.jpg" loading="lazy" sizes="(max-width: 767px) 100vw, 380px" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Petplace<br></span>Imagem meramente ilustrativa</p>
              <script type="application/json" class="w-json">
                {
                  "items": [{
                    "_id": "example_img",
                    "origFileName": "URBA_RESERVA_MONTE_MOR_PETPLACE.jpg",
                    "fileName": "URBA_RESERVA_MONTE_MOR_PETPLACE.jpg",
                    "fileSize": 3285218,
                    "height": 1266,
                    "url": "<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PETPLACE.jpg",
                    "width": 2250,
                    "type": "image"
                  }],
                  "group": "montemor"
                }
              </script>
            </a>
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_02.jpg" loading="lazy" sizes="(max-width: 767px) 100vw, 380px" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Pista de Caminhada<br></span>Imagem meramente ilustrativa</p>
              <script type="application/json" class="w-json">
                {
                  "items": [{
                    "_id": "example_img",
                    "origFileName": "URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_02.jpg",
                    "fileName": "URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_02.jpg",
                    "fileSize": 3285218,
                    "height": 1266,
                    "url": "<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_02.jpg",
                    "width": 2250,
                    "type": "image"
                  }],
                  "group": "montemor"
                }
              </script>
            </a>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-layout-grid grid-8">
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_CHURRASQUEIRA-1.jpg" loading="lazy" sizes="(max-width: 767px) 100vw, 380px" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Churrasqueira<br></span>Imagem meramente ilustrativa</p>
              <script type="application/json" class="w-json">
                {
                  "items": [{
                    "_id": "example_img",
                    "origFileName": "URBA_RESERVA_MONTE_MOR_CHURRASQUEIRA-1.jpg",
                    "fileName": "URBA_RESERVA_MONTE_MOR_CHURRASQUEIRA-1.jpg",
                    "fileSize": 3285218,
                    "height": 1266,
                    "url": "https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_CHURRASQUEIRA-1.jpg",
                    "width": 2250,
                    "type": "image"
                  }],
                  "group": "montemor"
                }
              </script>
            </a>
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PLAYGROUND-1.jpg" loading="lazy" sizes="(max-width: 767px) 100vw, 380px" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Playground<br></span>Imagem meramente ilustrativa</p>
              <script type="application/json" class="w-json">
                {
                  "items": [{
                    "_id": "example_img",
                    "origFileName": "URBA_RESERVA_MONTE_MOR_PLAYGROUND (1).jpg",
                    "fileName": "URBA_RESERVA_MONTE_MOR_PLAYGROUND (1).jpg",
                    "fileSize": 3285218,
                    "height": 1266,
                    "url": "https://urba.com.br/wp-content/uploads/2022/11/URBA_RESERVA_MONTE_MOR_PLAYGROUND-1.jpg",
                    "width": 2250,
                    "type": "image"
                  }],
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
    <div data-delay="4000" data-animation="slide" class="slider-7 mobile w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
      <div class="w-slider-mask">
        <div class="w-slide">
          <div class="w-layout-grid grid-8">
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PORTARIA.jpg" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 100vw" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Portaria<br></span>Imagem meramente ilustrativa</p>
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
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_ACESSOS.jpg" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 100vw" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Acessos<br></span>Imagem meramente ilustrativa</p>
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
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_RUA_CASAS.jpg" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 100vw" alt="" class="image-66">
              <p class="galeria-monte"><span class="galeria-bold">Casas<br>‍</span>Imagem meramente ilustrativa</p>
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
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_BOULEVARD_A2.jpg" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 100vw" alt="" class="image-66">
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
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/LOJAS.jpg" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 100vw" alt="" class="image-66">
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
            <a href="#" class="lightbox-link-10 w-inline-block w-lightbox"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/URBA_RESERVA_MONTE_MOR_PISTA_CAMINHADA_01.jpg" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 92vw, 100vw" alt="" class="image-66">
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
<div class="monte-mor-lan cond-mm-lan">
  <div class="colunas-mm-lan _2 w-row">
    <div class="coluna-mm-lan _2 interna mm-lan w-col w-col-6">
      <div class="txt-cond-mm-lan"><strong>Entrada facilitada</strong></div>
    </div>
    <div class="coluna-mm-lan _2 interna mm-lan w-col w-col-6">
      <div class="txt-cond-mm-lan">Lotes a partir de <strong>R$ 79.900,00</strong></div>
    </div>
  </div>
  <div class="colunas-mm-lan _3 w-row">
    <div class="coluna-mm-lan _2 interna mm-lan w-col w-col-4">
      <div class="txt-cond-mm-lan">Financiamento <strong>direto com a loteadora</strong></div>
    </div>
    <div class="coluna-mm-lan _2 interna mm-lan w-col w-col-4">
      <div class="txt-cond-mm-lan">Parcelamento em <strong>até 180x</strong><br><span class="text-span-8">(consulte unidades)</span></div>
    </div>
    <div class="coluna-mm-lan _2 interna mm-lan w-col w-col-4">
      <div class="txt-cond-mm-lan">Bônus <strong>especial de lançamento</strong><br><span class="text-span-7">(fale com um corretor)</span></div>
    </div>
  </div>
  <div class="ipca-mm-lan">* Corrigido pelo IPCA</div>
  <div class="div-text-terreno cond">
    <div class="columns itapeva w-row">
      <div class="column _2 interna w-col w-col-4">
        <div class="text-block-4 _2 interna">Financiamento direto com a loteadora</div>
      </div>
      <div class="column _2 interna w-col w-col-4">
        <div class="text-block-4 _2 interna">Parcelamento em 48x sem juros*</div>
      </div>
      <div class="column _2 interna end w-col w-col-4">
        <div class="text-block-4 _2 interna">ITBI e registro grátis</div>
      </div>
    </div>
    <p class="paragraph-16 itapeva ipca"><em>*corrigido pelo IPCA</em><br></p>
    <a href="#formulario" class="button-33 elvira w-button">GARANTA SEU NOVO ENDEREÇo</a>
  </div>
</div>
<div class="infos-terreno monte-mor wf-section">
  <h2 class="heading-2 center montemor">Você e sua família <span class="destaque-monte-mor">mais perto da natureza e com lazer</span></h2>
  <div class="container-padrao montemor">
    <p class="paragraph-16 montemor">O <span class="destaque-monte-mor-paragrafo"><strong>Reserva Monte Mor</strong></span> tem tudo que um novo endereço precisa para você começar um novo capítulo na sua história. Além de infraestrutura completa, segurança 24h e área comercial integrada, seus dias vão ser preenchidos com mais qualidade de vida, bem-estar e saúde.<br><br>Isso porque os <strong class="destaque-monte-mor-paragrafo">lotes em Monte Mor</strong> no empreendimento da Urba contam com qualidade ambiental, com muito contato com a natureza e áreas verdes. Dentro dos loteamentos, temos algumas áreas de preservação, além de lazer acessível e espaços compartilhados para todas as idades.<br><br>Você e sua família terão todo o conforto e lazer que merecem no mais novo <strong class="destaque-monte-mor-paragrafo">loteamento fechado de Monte Mor/SP</strong>. Veja os diferenciais que aguardam por vocês:<br><br></p>
    <a href="#formulario" class="button-34 botao-monte-mor mobile w-button"><strong>Converse com um consultor</strong></a>
    <div class="div-infos-terreno padding-top">
      <div data-w-id="6d4406e8-8b95-eb1d-7beb-1723ddc277d3" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/playground.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Playground acessível<br></div>
      </div>
      <div data-w-id="6d4406e8-8b95-eb1d-7beb-1723ddc277d8" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/andando.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Pista de caminhada</div>
      </div>
      <div data-w-id="6d4406e8-8b95-eb1d-7beb-1723ddc277dc" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/academia.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Academia ao ar livre<br></div>
      </div>
      <div data-w-id="d9479d34-552c-4bc2-12db-724c3e662a55" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/esportes.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Quadra poliesportiva</div>
      </div>
      <div data-w-id="333b9032-3025-b04a-8e98-c8c00954e60e" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/churrasqueira.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Churrasqueiras a céu aberto com pergolado<br></div>
      </div>
    </div>
    <div class="div-infos-terreno">
      <div data-w-id="333b9032-3025-b04a-8e98-c8c00954e617" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/pets.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Petplace<br></div>
      </div>
      <div data-w-id="333b9032-3025-b04a-8e98-c8c00954e61c" class="icone-montemor"><img src="<?= get_stylesheet_directory_uri() ?>/images/montemor/tennis.svg" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Quadras de futevôlei e beach tennis</div>
      </div>
      <div data-w-id="d9479d34-552c-4bc2-12db-724c3e662a47" class="icone-montemor"><img src="https://urba.com.br/wp-content/uploads/2023/03/6331d0ba9573fd0f43217dc9_bike.png" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Bicicletário<br></div>
      </div>
      <div data-w-id="d9479d34-552c-4bc2-12db-724c3e662a4c" class="icone-montemor"><img src="https://urba.com.br/wp-content/uploads/2023/03/6331d0b337cb69dcaaa1c009_ciclovia.png" width="130" alt="" class="icone-topicos">
        <div class="topicos-montemor">Ciclovia</div>
      </div>
    </div>
  </div>
</div>
<div class="loc-mm-lan wf-section">
  <div class="col-mm-lan--loc w-row">
    <div class="coluna-loc-mm-lan w-col w-col-6 w-col-stack">
      <h2 class="heading-2 localiz monte-mor mobile">Confira a localização privilegiada do <strong>Reserva Monte Mor</strong><br></h2>
      <p class="paragraph-16 localiz mobile">Localizada em Monte Mor/SP, a região está em pleno desenvolvimento, proporcionando ótima qualidade de vida para seus habitantes, a poucos minutos de Campinas.<br><br>O empreendimento tem acesso principal pela rodovia SP 101 e previsão de conexão com a estrada municipal 377, proporcionando maior comodidade e mobilidade aos moradores da região.<br></p>
      <style>
        .image-5 {
          height: 70px;
        }
      </style>
      <div class="w-layout-grid grid-6">
        <div data-w-id="57a824d4-c990-baa5-105e-d513a67f9e43" style="opacity:0" class="div-block-24"><img src="https://urba.com.br/wp-content/uploads/2023/03/6335cad2dcb808d003eef438_6331ce4c4b0eadaa347a2b75_clock.png" loading="lazy" alt="" class="image-5">
          <p class="paragrafo-2 topicos mobile"><span class="paragrafo-bold">30 minutos </span>de Campinas</p>
        </div>
        <div data-w-id="57a824d4-c990-baa5-105e-d513a67f9e4a" style="opacity:0" class="div-block-24"><img src="https://urba.com.br/wp-content/uploads/2023/03/6335cad2a27ce8614b0f5fdc_6331d41f62a875b3cc076064_centro.png" loading="lazy" alt="" class="image-5">
          <p class="paragrafo-2 topicos mobile"><span class="paragrafo-bold">7 minutos </span>do Centro de Monte Mor</p>
        </div>
        <div data-w-id="57a824d4-c990-baa5-105e-d513a67f9e51" style="opacity:0" class="div-block-24"><img src="https://urba.com.br/wp-content/uploads/2023/03/6335cad3c5e9ad2ad071a68c_6331d4976968534821b5e65e_bus.png" loading="lazy" alt="" class="image-5">
          <p class="paragrafo-2 topicos mobile"><span class="paragrafo-bold">10 minutos </span>do Terminal Rodoviário de Monte Mor</p>
        </div>
      </div>
      <div class="div-block-17 monte-mor mobile">
        <a href="#formulario" class="button-34 botao-monte-mor mobile w-button">Converse com um consultor</a>
      </div>
    </div>
    <div class="coluna-tabs-mm-lan w-col w-col-6 w-col-stack">
      <div data-current="Mapa interativo" data-easing="ease" data-duration-in="300" data-duration-out="100" class="tabs-container-mm-lan w-tabs">
        <div class="tabs-mm-lan w-tab-menu">
          <a data-w-tab="Mapa interativo" class="tab-single-mm-lan w-inline-block w-tab-link w--current">
            <div class="text-block-61">Mapa interativo</div>
          </a>
          <a data-w-tab="Maps" class="tab-single-mm-lan w-inline-block w-tab-link">
            <div class="text-block-61">Google Maps</div>
          </a>
        </div>
        <div class="tabs-content-mm-lan w-tab-content">
          <div data-w-tab="Mapa interativo" class="tab-maps-mm-lan w-tab-pane w--tab-active">
            <div class="mapa-mm-lan w-embed w-iframe">
              <style>
                #map {
                  overflow: hidden;
                  width: 100%;
                  height: 100%;
                }
              </style>
              <script>
                let map;

                function initMap() {
                  map = new almav.maps.Map(document.getElementById("map"), {
                    "settings-id": 1,
                  });
                }
              </script>
              <div id="map"></div>
              <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
              <script src="https://maps.almav.com/maps/api/js?key=40cf8a48-17b8-4c31-b18c-22fc8c18d7c0&callback=initMap" async></script>
            </div>
          </div>
          <div data-w-tab="Maps" class="tab-pane-maps w-tab-pane">
            <div class="mapa-mm-lan w-embed w-iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7214.857546865412!2d-47.2820515!3d-22.9351151!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8a53f659bbdc3%3A0xe4db227eb3980dbb!2sMonte%20Mor%2C%20SP%2C%2013190-000!5e1!3m2!1spt-BR!2sbr!4v1663963853267!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="planta elvira wf-section">
  <div class="container-padrao monte-mor-mobile">
    <h2 class="heading-2 center">A <strong class="destaque-monte-mor-roxo-escuro">casa dos seus sonhos </strong>pode ser assim</h2>
    <div class="div-block-18 monte-mor">
      <div class="elvira-colunas monte-mor w-row">
        <div class="column-29 w-col w-col-6">
          <a href="#" data-w-id="c426b8fb-a8ab-f5fd-14fc-4df463ae0ee1" class="lightbox-link-4 w-inline-block w-lightbox">
            <div class="div-img-casa elvira"></div>
            <script type="application/json" class="w-json">
              {
                "items": [{
                  "_id": "example_img",
                  "origFileName": "Fachada.jpg",
                  "fileName": "Fachada.jpg",
                  "fileSize": 1970155,
                  "height": 1080,
                  "url": "https://urba.com.br/wp-content/themes/urbamais/images/montemor/Fachada_10.jpg",
                  "width": 1920,
                  "type": "image"
                }],
                "group": ""
              }
            </script>
          </a>
        </div>
        <div class="column-30 monte-mor w-col w-col-3">
          <a href="#" data-w-id="2ba8ffd4-19cf-22a7-5f66-00feef640ffd" class="lightbox-link-8 w-inline-block w-lightbox">
            <div class="div-planta-01 elvira"></div>
            <script type="application/json" class="w-json">
              {
                "items": [{
                  "_id": "example_img",
                  "origFileName": "Planta Humanizada_FirstFloor.jpg",
                  "fileName": "Planta Humanizada_FirstFloor.jpg",
                  "fileSize": 1870603,
                  "height": 1080,
                  "url": "https://urba.com.br/wp-content/themes/urbamais/images/montemor/Planta-Humanizada_FirstFloor.jpg",
                  "width": 1920,
                  "type": "image"
                }],
                "group": ""
              }
            </script>
          </a>
        </div>
        <div class="column-31 monte-mor w-col w-col-3">
          <a href="#" data-w-id="f10deb40-e47e-664d-9493-467e1032fbee" class="lightbox-link-3 w-inline-block w-lightbox">
            <div class="div-planta-02 elvira"></div>
            <script type="application/json" class="w-json">
              {
                "items": [{
                  "_id": "example_img",
                  "origFileName": "Planta Humanizada_SecondFloor.jpg",
                  "fileName": "Planta Humanizada_SecondFloor.jpg",
                  "fileSize": 1736845,
                  "height": 1080,
                  "url": "https://urba.com.br/wp-content/themes/urbamais/images/montemor/Planta-Humanizada_SecondFloor.jpg",
                  "width": 1920,
                  "type": "image"
                }],
                "group": ""
              }
            </script>
          </a>
        </div>
      </div>
      <div class="div-block-23">
        <p class="paragraph-16">Fique à vontade para se inspirar com a sugestão de projeto que a Urba preparou para a sua futura casa em Monte Mor/SP!<br></p>
        <div class="text-block-11 elvira">* Projeto não comercializado pela Urba</div>
        <a href="#formulario" class="button-34 botao-monte-mor mobile w-button">Gostou? Cadastre-se para falar com um corretor</a>
      </div>
    </div>
  </div>
</div>
<div class="video-itapeva elvira wf-section">
  <div class="container-padrao">
    <h2 class="heading-2 branco-mm-lan"><span>Conheça mais sobre a <strong class="destaque-h2-branco mm-lan">Urba | MRV&amp;CO</strong></span></h2>
    <div class="div-midia">
      <div style="padding-top:56.17021276595745%" class="w-embed-youtubevideo youtube"><iframe src="https://www.youtube.com/embed/zd4rUvciywo?rel=0&amp;controls=1&amp;autoplay=0&amp;mute=0&amp;start=0" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen="" title="Urba Lançamento - Monte Mor"></iframe></div>
    </div>
  </div>
</div>
<!-- <div class="andamento-obra elvira wf-section">
  <div class="container-padrao">
    <h2 class="heading-2 center"><strong class="destaque-h2-laranja">Andamento</strong> da Obra</h2>
    <p class="paragraph-16">Acompanhe por aqui o andamento da construção do condomínio em detalhes<br></p>
    <div class="div-andamento">
      <div id="w-node-_5e10ca56-8352-d553-530f-356bb1db2097-8b26747f" class="div-etapa">
        <div class="div-grafico"><img src="https://urba.com.br/wp-content/uploads/2022/11/icons_paisagismo.png" width="80" alt="" class="image-7">
          <div data-w-id="5e10ca56-8352-d553-530f-356bb1db209a" class="div-evolucao paisagismo" style="opacity:0; height:0% !important"></div>
        </div>
        <div class="text-block-12">Paisagismo<br><strong class="bold-text-3">0%</strong></div>
      </div>
      <div id="w-node-_5e10ca56-8352-d553-530f-356bb1db20a0-8b26747f" class="div-etapa">
        <div class="div-grafico"><img src="https://urba.com.br/wp-content/uploads/2022/11/pavimentacao.png" width="80" alt="" class="image-7">
          <div data-w-id="5e10ca56-8352-d553-530f-356bb1db20a3" class="div-evolucao pavimentacao" style="opacity:0; height:6%"></div>
        </div>
        <div class="text-block-12">Pavimentação<br><strong class="bold-text-3">6%</strong></div>
      </div>
      <div id="w-node-_5e10ca56-8352-d553-530f-356bb1db20a9-8b26747f" class="div-etapa">
        <div class="div-grafico"><img src="https://urba.com.br/wp-content/uploads/2022/11/icons_terraplanagem.png" width="80" alt="" class="image-7">
          <div data-w-id="5e10ca56-8352-d553-530f-356bb1db20ac" class="div-evolucao terraplanagem" style="opacity:0; height:7%"></div>
        </div>
        <div class="text-block-12">Terraplanagem<br><strong class="bold-text-3">7%</strong></div>
      </div>
      <div id="w-node-_5e10ca56-8352-d553-530f-356bb1db20b2-8b26747f" class="div-etapa">
        <div class="div-grafico"><img src="https://urba.com.br/wp-content/uploads/2022/11/esgoto.png" width="80" alt="" class="image-7">
          <div data-w-id="5e10ca56-8352-d553-530f-356bb1db20b5" class="div-evolucao esgoto" style="opacity:0; height:3%"></div>
        </div>
        <div class="text-block-12">Água e Esgoto<br><strong class="bold-text-3">3%</strong></div>
      </div>
      <div id="w-node-_5e10ca56-8352-d553-530f-356bb1db20bb-8b26747f" class="div-etapa">
        <div class="div-grafico"><img src="https://urba.com.br/wp-content/uploads/2022/11/iluminacao.png" width="80" alt="" class="image-7">
          <div data-w-id="5e10ca56-8352-d553-530f-356bb1db20be" class="div-evolucao eletrica" style="opacity:0; height:100%"></div>
        </div>
        <div class="text-block-12">Elétrica<br><strong class="bold-text-3">100%</strong></div>
      </div>
      <div id="w-node-_5e10ca56-8352-d553-530f-356bb1db20c4-8b26747f" class="div-etapa">
        <div class="div-grafico"><img src="https://urba.com.br/wp-content/themes/urbamais/images/icone-pag_empreendimentos-passeios-e-calcadas.png" width="80" alt="" class="image-7">
          <div data-w-id="5e10ca56-8352-d553-530f-356bb1db20c7" class="div-evolucao passeios-calcadas" style="opacity:0; height:0%"></div>
        </div>
        <div class="text-block-12">Passeios e Calçadas<br><strong class="bold-text-3">0%</strong></div>
      </div>
      <div id="w-node-_5e10ca56-8352-d553-530f-356bb1db20cd-8b26747f" class="div-etapa">
        <div class="div-grafico"><img src="https://urba.com.br/wp-content/uploads/2023/03/5d5ea768ffcccb13c4922974_icons_areas-edificaveis.png" width="80" alt="" class="image-7">
          <div data-w-id="5e10ca56-8352-d553-530f-356bb1db20d0" class="div-evolucao areas-edificaveis" style="opacity:0; height:0%"></div>
        </div>
        <div class="text-block-12">Áreas Edificáveis<br><strong class="bold-text-3">0%</strong></div>
      </div>
    </div>
    <div class="div-lightbox-andamento">
      <a href="#" class="lightbox-link-6 w-inline-block w-lightbox">
        <div class="text-block-25">confira as fotos da obra</div>
        <script type="application/json" class="w-json">
          {
            "items": [
              <?php $fotos_da_obra = acf_photo_gallery('galeria_obra', $post->ID);
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
  </div>
</div> -->
<section id="formulario" class="formulario montemor wf-section">
  <div class="container-padrao monte-mor-form">
    <div class="div-forms interna regatas">
      <h2 class="heading-2 forms">Seu novo endereço está à sua espera no <strong class="destaque-monte-mor-roxo-escuro">Reserva Monte Mor</strong></h2>
      <p class="paragraph-16"><span class="destaque-monte-mor-paragrafo"><strong>Fale com um consultor da Urba<br>Aproveite as condições do lançamento e cadastre-se hoje mesmo!</strong></span><strong><br>‍</strong>Converse conosco e comece a planejar uma vida nova, com mais conforto, tranquilidade e qualidade. Tenha mais informações sobre os <strong class="destaque-monte-mor-paragrafo">lotes em Monte Mor/SP</strong>.<br></p>
      <div class="w-form">
        <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2">
          <input type="hidden" id="idempreendimento" name="idempreendimento" value="22">
          <input type="text" class="text-field-2 w-input" maxlength="256" name="name-2" data-name="name-2" placeholder="Nome" id="name-2" required="">
          <div class="columns-9 w-row">
            <div class="column-69 w-col w-col-6">
              <input type="email" class="text-field-2 w-input" maxlength="256" name="E-mail-2" data-name="E Mail-2" placeholder="E-mail" id="E-mail-2" required="">
            </div>
            <div class="column-70 w-col w-col-6"><input type="tel" class="text-field-2 w-input" minlength="15" maxlength="15" name="Telefone-2" data-name="Telefone-2" placeholder="Whatsapp" onkeypress="MascaraTelefone(this);" id="Telefone-2" required=""></div>

          </div>

          <div class="div-block-19">
            <p class="paragraph-16 itapeva text-form">Aceito receber via WhatsApp, ligação, e-mail e SMS, o contato da marca MRV&CO com novidades sobre este loteamento, bem como outras ações de marketing, ofertas de produtos e serviços. Estou de acordo com as formas de tratamento de dados realizados pela marca MRV&CO, conforme sua <a href="https://www.mrv.com.br/institucional/pt/politica-de-privacidade">Política de Privacidade</a>.<br></p>

            <label class="w-checkbox checkbox-field-2" style="width:140px;">

              <input type="checkbox" id="politica-privacidade" name="consentimento-de-comunicacao" value="Ok, entendi!" data-name="consentimento-de-comunicacao" value="Ok, entendi!" class="w-checkbox-input"><span class="checkbox-label-4 w-form-label" for="checkbox">Ok, entendi</span></label>
          </div><input type="submit" value="QUERO MAIS INFORMAÇÕES" data-wait="Aguarde..." class="submit-button-2 regatas w-button">
        </form>
      </div>
    </div>
  </div>
</section>
<div class="micro-rodape rodape-montemor wf-section">
  <div class="container-padrao w-container">
    <p class="paragraph-42 center">Este material tem caráter meramente ilustrativo por se tratar de bem a ser construído. Contrato padrão e demais condições estão disponíveis em nosso plantão de vendas. Loteamento protocolado no processo n° 64.222 na data de 15/09/2022 no Estado de São Paulo na cidade de Monte Mor no Cartório de Registro de Imóveis de Monte Mor. Proibida a comercialização de lotes antes da conclusão do Registro da Incorporação.</p>
  </div>
</div>
<?php get_footer(); ?>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5d5159338e8309099479b2ed" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/monte-mor-webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

<script>
  jQuery('#email-form').submit(function(e) {
    e.preventDefault();
    jQuery('#email-form input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#E-mail').val() && regex.test(jQuery('#E-mail').val()) && jQuery('#name').val() && jQuery('#Telefone').val() && jQuery('input[name=consentimento-de-comunicacao]:checked').length > 0) {
      var data_array = [{
          name: 'loteamento',
          value: "Reserva Monte Mor"
        },
        {
          name: 'nome',
          value: jQuery('#email-form #name').val()
        },
        {
          name: 'telefone',
          value: jQuery('#email-form #Telefone').val()
        },
        {
          name: 'email',
          value: jQuery('#email-form #E-mail').val()
        },
        {
          name: 'consentimento-de-comunicacao',
          value: 'granted'
        },
        {
          name: 'idempreendimento',
          value: jQuery('#email-form #idempreendimento').val()
        },
        {
          name: 'identificador',
          value: "Interesse Reserva Monte Mor"
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
      jQuery('#interesse-loteamento-lp input[type=submit]').val('Enviar');
      alert('Preencha seus dados');
    }
  });
</script>
<script>
  jQuery('#email-form-2').submit(function(e) {
    e.preventDefault();
    jQuery('#email-form-2 input[type=submit]').val('enviando..');
    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if (jQuery('#E-mail-2').val() && regex.test(jQuery('#E-mail-2').val()) && jQuery('#name-2').val() && jQuery('#Telefone-2').val() && jQuery('input[name=consentimento-de-comunicacao]:checked').length > 0) {
      var data_array = [{
          name: 'loteamento',
          value: "Reserva Monte Mor"
        },
        {
          name: 'nome',
          value: jQuery('#email-form-2 #name-2').val()
        },
        {
          name: 'telefone',
          value: jQuery('#email-form-2 #Telefone-2').val()
        },
        {
          name: 'email',
          value: jQuery('#email-form-2 #E-mail-2').val()
        },
        {
          name: 'consentimento-de-comunicacao',
          value: 'granted'
        },
        {
          name: 'idempreendimento',
          value: jQuery('#email-form-2 #idempreendimento').val()
        },
        {
          name: 'identificador',
          value: "Interesse Reserva Monte Mor"
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
      jQuery('#interesse-loteamento-lp input[type=submit]').val('QUERO MAIS INFORMAÇÕES');
      alert('Preencha seus dados');
    }
  });
</script>
<style>
  .page-id-3812 .andamento-obra {

    display: block !important;

  }

  .page-id-3812 .planta {
    padding-top: 60px;
    padding-bottom: 60px;
    display: block;
  }
</style>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" />
<link rel="stylesheet" type="text/css" https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />
<script>
  /*
   * Light YouTube Embeds by @labnol
   * Credit: https://www.labnol.org/
   */
  function labnolIframe(div) {
    var iframe = document.createElement('iframe');
    iframe.setAttribute(
      'src',
      'https://www.youtube.com/embed/' + div.dataset.id + '?autoplay=1&rel=0'
    );
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('allowfullscreen', '1');
    iframe.setAttribute(
      'allow',
      'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'
    );
    div.parentNode.replaceChild(iframe, div);
  }

  function initYouTubeVideos() {
    var playerElements = document.getElementsByClassName('youtube-player');
    for (var n = 0; n < playerElements.length; n++) {
      var videoId = playerElements[n].dataset.id;
      var div = document.createElement('div');
      div.setAttribute('data-id', videoId);
      // var thumbNode = document.createElement('img');
      // thumbNode.src = '//i.ytimg.com/vi/ID/hqdefault.jpg'.replace(
      //   'ID',
      //   videoId
      // );
      // div.appendChild(thumbNode);
      var playButton = document.createElement('div');
      playButton.setAttribute('class', 'play');
      div.appendChild(playButton);
      div.onclick = function() {
        labnolIframe(this);
      };
      playerElements[n].appendChild(div);
    }
  }
  document.addEventListener('DOMContentLoaded', initYouTubeVideos);
</script>
<style>
  .youtube-player {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    max-width: 100%;
    background: #000;
    margin: 0px;
  }

  .youtube-player iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 100;
    background: transparent;
  }

  .youtube-player img {
    object-fit: cover;
    display: block;
    left: 0;
    bottom: 0;
    margin: auto;
    max-width: 100%;
    width: 100%;
    position: absolute;
    right: 0;
    top: 0;
    border: none;
    height: auto;
    cursor: pointer;
    -webkit-transition: 0.4s all;
    -moz-transition: 0.4s all;
    transition: 0.4s all;
  }

  .youtube-player img:hover {
    -webkit-filter: brightness(75%);
  }

  .youtube-player .play {
    height: 72px;
    width: 72px;
    left: 50%;
    top: 50%;
    margin-left: -36px;
    margin-top: -36px;
    position: absolute;
    background: url('//i.imgur.com/TxzC70f.png') no-repeat;
    cursor: pointer;
  }
</style>


<style>
  .owl-nav.disabled {
    display: none !important;
  }
</style>
<script>
  $('.owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  })
</script>