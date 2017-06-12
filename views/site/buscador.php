<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Buscador';
$this->params['breadcrumbs'][] = $this->title;
?>

  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

    
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
            
            <center>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col">
                        
                <div class="mdl-card__media">
                </div>
                <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"></h2>
                </div>
                <div class="mdl-card__supporting-text">
                </div>
                <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="https://misfinanzasencasa.davivienda.com/#!/inicio">Leer más</a>
                </div>
                        
                    </div>
  <div class="mdl-cell mdl-cell--4-col">
      
      
                <div class="mdl-card__media">
                    <img class="article-image" src="img/helm.jpg" border="0" alt="">
                </div>
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Credito de  Estudio Helm Bank</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    El estudiante puede financiar su matrícula mediante el Crédito con Helm Bank, el cual le financia hasta el 100%, contando con los resultados de estudio inmediatamente. Es un crédito muy ágil y recomendado por muchos estudiantes.
                 </div>
                <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="https://www.grupohelm.com/personal/grupo/helm-comisionista-de-bolsa/educacion-financiera">Leer más</a>
                </div>
            
  
      
  </div>
  <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-card__media">
                    <img class="article-image" src="img/davivienda.jpg" border="0" alt="">
                </div>
                <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Credito Hipotecario Davivienda</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    Con este tipo de crédito usted escoge el sistema de pago de su inmueble, dejándolo como garantía del crédito.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="https://misfinanzasencasa.davivienda.com/#!/inicio">Leer más</a>
                </div>
      
  </div>
</div>
            </center>
                
            
            </div>
        </div>
      </main>
         
      
      
      
                 
  </body>
