<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Buscador';
$this->params['breadcrumbs'][] = $this->title;
?>

  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-800 mdl-color-text--indigo-600">
        <div class="mdl-layout__header-row">
          <span align ="center"class="mdl-layout-title">  Buscador de bancos SearchBank </span>
          <div class="mdl-layout-spacer"></div>
        </div>
    </header>
    
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-800 mdl-color-text--white-50">
        <header class="demo-drawer-header">
            <center>
          <img src="img/users.jpg" class="demo-avatar">
          </center>
          <div class="demo-avatar-dropdown">
            <span>Usuario Search Bank</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Cuentas</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">prototipo1@poligran.edu.co</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>Agregar otra cuenta</li>
            </ul>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="Items/FiltrarPreguntas.html"><i class="mdl-color-text--blue-800 material-icons" role="presentation">pageview</i>Filtrar edad </a>
          <a class="mdl-navigation__link" href="Items/AñadirComentario.html"><i class="mdl-color-text--blue-800 material-icons" role="presentation">comment</i>Filtrar ingresos</a>
          <a class="mdl-navigation__link" href="Items/EditarComentario.html"><i class="mdl-color-text--blue-800 material-icons" role="presentation">edit</i>Filtrar Producto</a>
            <a class="mdl-navigation__link" href="/site/resultados.php"><i class="mdl-color-text--blue-800 material-icons" role="presentation">search</i>Búsqueda básica</a>
		  
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
        </nav>
                 
      </div>
    
    </div>
      
      
      
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
            <div align ="rigth">
                
                <div class="mdl-card__media">
                    <img class="article-image" src="img/bancolpatria.png" border="0" alt="">
                </div>
                <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Banco Colpatria</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    Colpatria es un grupo Empresarial Colombiano, con negocios en banca, seguros, construccion y mineria entre otros. En el banco Colpatria desde 2012 participa como socio el banco canadiense Scotiabank. Quien adquirió el 51% de sus acciones.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="https://www.colpatria.com/Securities/acerca-de-securities/securities/educacion-financiera">Leer más</a>
                
            </div>
            </div>
        </div>
      </main>
      
      
      
                 
  </body>
