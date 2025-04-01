<?php
include 'header.php';
?>

<div class="container">

  <!-- Filtros -->
  <!-- Filtros -->
  <!-- Filtros -->


  <div class="o-layout__item u-1/1 u-1/4@tablet">
    <div class="o-flex o-flex--auto c-filter--wrapper">
      <div id="filters" class="o-flex__item u-1/2 u-1/1@tablet">
        <div class="c-filter o-box o-box--small">
          <h1 class="text-center">CREACIÓN COLECTIVA</h1>
          <div class="c-filter__list">
            <ul style="padding-left: 0px;">
              <li class="c-btn c-btn--selector c-btn--filter-by-category__show-all  is-checked" data-filter-by-category="*">Todas</li>
              <li class="c-btn c-btn--selector c-btn--filter-by-category" data-filter-by-category=".imagenes">Imágenes</li>
              <li class="c-btn c-btn--selector c-btn--filter-by-category" data-filter-by-category=".textos">Textos</li>
              <!-- <li class="c-btn c-btn--selector c-btn--filter-by-category" data-filter-by-category=".canciones">Canciones</li> -->
              <li class="c-btn c-btn--selector c-btn--filter-by-category" data-filter-by-category=".documentos">Documentos</li>
              <!-- <li class="c-btn c-btn--selector c-btn--filter-by-category" data-filter-by-category=".otros">Otros</li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Lista de la Galeria -->
  <div class="o-layout__item  u-1/1  u-3/4@tablet">
    <!-- <p><input type="text" class="c-quicksearch" placeholder="Search" /></p> -->
    <div class="c-grid  c-grid__compositions">
      <div class="c-grid--sizer"></div>

      <div class="grid-container">
        <a data-toggle="modal" data-target="#Modal1">
          <img class="grid-item c-opus  imagenes" src="galeria/Almazan/Almazan-01.jpg" width="340" height="auto" title="Almazan" />
        </a>
        <a data-toggle="modal" data-target="#Modal2">
          <img class="grid-item c-opus  imagenes" src="galeria/Fernandez/Fernandez-01.jpg" width="340" height="auto" title="Fernandez" />
        </a>
        <a data-toggle="modal" data-target="#Modal3">
          <img class="grid-item c-opus  imagenes" src="galeria/Gimenez/Gimenez-01-Madryn.jpg" width="340" height="auto" title="Gimenez" />
        </a>
        <a data-toggle="modal" data-target="#Modal4">
          <img class="grid-item c-opus  imagenes" src="galeria/Gonzalez/Gonzalez-01.jpg" width="340" height="auto" title="Gonzalez" />
        </a>
        <a data-toggle="modal" data-target="#Modal5">
          <img class="grid-item c-opus  imagenes" src="galeria/Leyell/Leyell-01.jpeg" width="340" height="auto" title="Leyell" />
        </a>
        <a data-toggle="modal" data-target="#Modal6">
          <img class="grid-item c-opus  imagenes" src="galeria/Pacher/Pacher-01.jpg" width="340" height="auto" title="Pacher" />
        </a>
        <a data-toggle="modal" data-target="#Modal7">
          <img class="grid-item c-opus  imagenes" src="galeria/Payer/Rio-Grande-01.jpeg" width="340" height="auto" title="Payer" />
        </a>
        <a data-toggle="modal" data-target="#Modal8">
          <img class="grid-item c-opus  documentos" src="galeria/Pineiro/Pineiro-03.jpg" width="340" height="auto" title="Pineiro" />
        </a>
        <a data-toggle="modal" data-target="#Modal9">
          <img class="grid-item  c-opus  imagenes" src="galeria/Aguiar/Aguiar-01.jpg" width="340" height="auto" title="Aguiar" />
        </a>
        <a data-toggle="modal" data-target="#Modal10">
          <img class="grid-item  c-opus  imagenes" src="galeria/Cisneros/Cisneros-03.jpg" width="340" height="auto" title="Cisneros" />
        </a>
        <a data-toggle="modal" data-target="#Modal11">
          <img class="grid-item  c-opus  otros" src="galeria/Eduardo-Urrutia/Eduardo-Urrutia-01.jpg" width="340" height="auto" title="Eduardo-Urrutia" />
        </a>
        <a data-toggle="modal" data-target="#Modal12">
          <img class="grid-item  c-opus  imagenes" src="galeria/Laborde/Laborde-01.jpg" width="340" height="auto" title="Laborde" />
        </a>
        <a data-toggle="modal" data-target="#Modal13">
          <img class="grid-item  c-opus  imagenes" src="galeria/Guzman/Guzman-01.jpg" width="340" height="auto" title="Guzman" />
        </a>
        <a data-toggle="modal" data-target="#Modal14">
          <img class="grid-item  c-opus  imagenes" src="galeria/J-Urrutia/J-Urrutia-01.jpg" width="340" height="auto" title="José Urrutia" />
        </a>
        <a data-toggle="modal" data-target="#Modal15">
          <img class="grid-item  c-opus  imagenes" src="galeria/Gonzalez-Torrado/Gonzalez-Torrado-01.jpg" width="340" height="auto" title="Gonzalez Torrado" />
        </a>
        <a data-toggle="modal" data-target="#Modal16">
          <img class="grid-item  c-opus  imagenes" src="galeria/Guevara/Guevara-01.jpg" width="340" height="auto" title="Guevara" />
        </a>
        <a data-toggle="modal" data-target="#Modal17">
          <img class="grid-item  c-opus  textos" src="galeria/Flores/Flores-01.jpg" width="340" height="auto" alt="Poesía escrita por María del Pilar Flores Sorroche titulada: Malvinas" title="María del Pilar Flores Sorroche" />
        </a>
        <a data-toggle="modal" data-target="#Modal18">
          <img class="grid-item  c-opus  textos" src="galeria/Klaus/Klaus-01.jpg" width="340" height="auto" alt="Texto del cuento titulado: “Cuanto de el Reino” por Mauricio Klaus " Title="Klaus" />
        </a>
        <a data-toggle="modal" data-target="#Modal19">
          <img class="grid-item  c-opus  textos" src="galeria/Aguiar/Carta-01.jpg" width="340" height="auto" alt="Carta dirigida a los soldados en combate con un dibujo de las Islas Malvinas. La carta fue realizada por un alumno de la escuela 9 de Julio en Abril de 1982." Title="Aguiar Cartas" />
        </a>
        <a data-toggle="modal" data-target="#Modal20">
          <img class="grid-item  c-opus  imagenes" src="galeria/Quiroga/Quiroga-01.jpg" width="340" height="auto" alt="Ilustración en homenaje a los combatientes de la Guerra de Malvinas." title="Quiroga" />
        </a>
        <a data-toggle="modal" data-target="#Modal21">
          <img class="grid-item  c-opus  imagenes" src="galeria/Bejarano/Bejarano-01.jpg" width="340" height="auto" alt="Poesía en homenaje Justo Pastor Romero" title="Poesía a Justo Pastor Romero" />
        </a>
        <a data-toggle="modal" data-target="#Modal22">
          <img class="grid-item  c-opus  imagenes" src="galeria/Bejarano/Bejarano-02.jpg" width="340" height="auto" alt="Romero acompañado por su madre en el acto de egresados del colegio secundario" title="Foto egresado colegio Romero" />
        </a>
        <a data-toggle="modal" data-target="#Modal23">
          <img class="grid-item  c-opus  imagenes" src="galeria/Cuco/Cuco-01.jpg" width="340" height="auto" alt="En la fotografía se muestra un monumento en homenaje a los caídos en la Guerra de Malvinas con la leyenda: “Caídos en Malvinas”."title="Rodolfo Sebastián Cuco"/>
        </a>
        <a data-toggle="modal" data-target="#Modal24">
          <img class="grid-item  c-opus  imagenes" src="galeria/Barreto/Barreto-01.jpg" width="340" height="auto" alt="Fotografía que muestra el monumento a los caídos en la Guerra de Malvinas en la ciudad de Comodoro Rivadavia. Se puede observar la estatua de un soldado como símbolo de todos los que combatieron en aquel conflicto bélico." title="Marcela Alicia Barreto"/>
        </a>
        <a data-toggle="modal" data-target="#Modal25">
          <img class="grid-item  c-opus  imagenes" src="galeria/Estraviz/Estraviz-01.jpg" width="340" height="auto" title="Silvana Noemí Estraviz" alt="Placa mural homenaje a los caídos en combate. Hall de ingreso por escalinatas del Ministerio de Defensa."/>
        </a>
        <a data-toggle="modal" data-target="#Modal26">
          <img class="grid-item  c-opus  imagenes" src="galeria/Serafin/Serafin-01.jpg" width="340" height="auto" alt="La fotografía muestra un monumento a los que fallecieron en el “Crucero ARA General Belgrano”, con la leyenda de frente que dice: “Honor a los 323 héroes del Glorioso “Crucero ARA General Belgrano”." title="Serafin" />
        </a>
        <a data-toggle="modal" data-target="#Modal27">
          <img class="grid-item  c-opus  imagenes" src="galeria/Zubieta/Zubieta-01.jpg" width="340" height="auto" alt="La fotografía muestra el monumento “Guardianes de los 55”. Un homenaje a los caídos en Malvinas y avión emblema." title="Zubieta" />
        </a> 
        <a data-toggle="modal" data-target="#Modal28">
        <img class="grid-item  c-opus  imagenes" src="galeria/Basili/Basili-01.jpg" width="340" height="auto" title="María Alejandra Basili" alt="Muro en homenaje a los caídos en la Guerra de Malvinas en Puerto Belgrano (Base Naval Puerto Belgrano)"/>
        </a> 
        <a data-toggle="modal" data-target="#Modal29">
        <img class="grid-item  c-opus  imagenes" src="galeria/Liendo/Liendo-01.jpg" width="340" height="auto" alt="La fotografía muestra un cartel indicando que es la Plaza “Héroes de Malvinas”, en Cosquín, Prov. de Córdoba." title="Liendo" />
        </a> 
        <a data-toggle="modal" data-target="#Modal30">
          <img class="grid-item  c-opus  imagenes" src="galeria/Leiva/Leiva-01.jpg" width="340" height="auto" alt="La fotografía muestra a militares argentinos verificando una bomba inactiva arrojada por las fuerzas inglesas cerca del Aeropuerto de Malvinas, el 25 de mayo de 1982." alt="SP “VGM” Marcos Dante Leiva"/>
        </a> 
        <a data-toggle="modal" data-target="#Modal31">
          <img class="grid-item  c-opus  imagenes" src="galeria/Gez/Gez-01.jpg" width="340" height="auto" alt="La fotografía muestra el Monumento “Soberanía Nacional”, ubicado en La Rioja Capital." title="Gez" />
        </a> 
        <a data-toggle="modal" data-target="#Modal32">
          <img class="grid-item  c-opus  imagenes" src="galeria/Quevedo/Quevedo-01.jpg" width="340" height="auto" alt="Fotografía del Monumento en homenaje a los caídos en la Guerra de Malvinas" title="Alejandro Ignacio Quevedo"/>
        </a> 
        <a data-toggle="modal" data-target="#Modal33">
          <img class="grid-item  c-opus  textos" src="galeria/Taverna/Taverna-06.jpg" width="340" height="auto" alt="La fotografía muestra una hoja membretada con el logo de la Fuerza Aérea Argentina, con la reseña histórica del Capitán Aviador Omar Jesús Castillo." title="Texto Jéssica Taverna"/>
        </a> 
        <a data-toggle="modal" data-target="#Modal34">
          <img class="grid-item  c-opus  imagenes" src="galeria/Taverna/Taverna-01.jpg" width="340" height="auto" alt="La fotografía muestra el monumento a los veteranos y caídos en Malvinas en Cosquín, que remata en la parte superior con el busto del Capitán Aviador Omar Jesús Castillo y detrás un mástil con la bandera argentina flameando." title="Fotos Jéssica Taverna"/>
        </a> 
        <a data-toggle="modal" data-target="#Modal35">
          <img class="grid-item  c-opus  imagenes" src="galeria/Masulli/Masulli-01.jpg" width="340" height="auto" alt="L30 años: En la fotografía de la pintura se muestra a un soldado llorando al recordar a sus camaradas caídos en la guerra." title="Cosme Adam Masulli"/>
        </a> 
      </div>
    </div>
  </div>
</div>


<!-- =================== -->
<!-- MODAL DE LA GALERIA -->
<!-- =================== -->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Almazan/Almazan-01.jpg" alt="Homenaje a los caídos en la Guerra de Malvinas en San Salvador de Jujuy" />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Almazan/Almazan-02.jpg" alt="Recreación y homenaje a los caídos en la Guerra de Malvinas" />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Almazan/Almazan-03.jpg" alt="Museo  y Biblioteca Digital de los héroes de Malvinas" />
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Almazan/Almazan-04.jpg" alt="Monumento a los caídos en la Guerra de Malvinas  (foto del lado izquierdo) cerca del Regimiento de Infantería 20 del Ejército Argentino en San Salvador de Jujuy" />
                  </div>
                </li>
                <li>
                  <div id="slide5">
                    <img class="cc-slide" src="galeria/Almazan/Almazan-05.jpg" alt="Foto del frente del monumento a los caídos en la Guerra de Malvinas  cerca del Regimiento de Infantería 20 del Ejército Argentino en San Salvador de Jujuy" />
                  </div>
                </li>
                <li>
                  <div id="slide6">
                    <img class="cc-slide" src="galeria/Almazan/Almazan-06.jpg" alt="Poema en el monumento a los caídos en la Guerra de Malvinas cerca del Regimiento de Infantería 20 del Ejército Argentino en San Salvador de Jujuy" />
                  </div>
                </li>
                <li>
                  <div id="slide7">
                    <img class="cc-slide" src="galeria/Almazan/Almazan-07.jpg" alt="Homenaje a Zarzoso Fernando, Farfan Raúl y Úzqueda Roberto muertos en el hundimiento del Crucero General Belgrano" />
                  </div>
                </li>
                <li>
                  <div id="slide8">
                    <img class="cc-slide" src="galeria/Almazan/Almazan-08.jpg" alt="Homenaje a miembros del Ejército Argentino muertos en la Guerra de Malvinas" />
                  </div>
                </li>
                <li>
                  <div id="slide9">
                    <img class="cc-slide" src="galeria/Almazan/Almazan-09.jpg" alt="Homenaje a Laguna Teodoro y Salazar Ramón muertos en el hundimiento del Crucero General Belgrano" />
                  </div>
                </li>
                <li>
                  <div id="slide10">
                    <img class="cc-slide" src="galeria/Almazan/Almazan-10.jpg" alt="Homenaje a los muertos en el crucero General Belgrano" />
                  </div>
                </li>
                <li>
                  <div id="slide11">
                    <img class="cc-slide" src="galeria/Almazan/Almazan-11.jpg" alt="Homenaje a combatientes de la Guerra de Malvinas muertos en el hundimiento del Crucero General Belgrano" />
                  </div>
                </li>
                <li>
                  <div id="slide12">
                    <img class="cc-slide" src="galeria/Almazan/Almazan-12.jpg" alt="Monumento a los veteranos de la Guerra de Malvinas en San Salvador de Jujuy" />
                  </div>
                </li>
                <li>
                  <div id="slide13">
                    <img class="cc-slide" src="galeria/Almazan/Almazan-13.jpg" alt="Homenaje de la Armada Argentina a los muertos en el hundimiento del General Belgrano" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> SP Osvaldo Ariel Almazán</p>
              <p><strong>Lugar de residencia:</strong> San Salvador de Jujuy, Prov. de Jujuy</p>
              <p><strong>Comentario:</strong> Fotografías de los monumentos en conmemoración a los caídos en Malvinas,
                en la Provincia de Jujuy.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div style="text-align: center">
          <img class="cc-slide" src="galeria/Fernandez/Fernandez-01.jpg" alt="fotografía del monumento en recuerdo de la Gesta de Malvinas en la Plaza Héroes de Malvinas, en la localidad de Goya, Provincia de Corrientes" />
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Mónica Mabel Fernández</p>
              <p><strong>Lugar de residencia:</strong> Goya, Prov. de Corrientes</p>
              <p><strong>Comentario:</strong> Fotografía del monumento en recuerdo de la Gesta de Malvinas, sito en la Plaza Héroes de Malvinas, en la localidad de Goya, Prov. de Corrientes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Gimenez/Gimenez-01-Madryn.jpg" alt="Homenaje a los héroes de la Guerra de Malvinas en Puerto Madryn" />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Gimenez/Gimenez-02-Madryn.jpg" alt="Acto homenaje a los héroes de la Guerra de Malvinas en Puerto Madryn" />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Gimenez/Gimenez-03-Madryn.jpg" alt="Personal de las fuerzas armadas y de seguridad en acto homenaje a los héroes de la Guerra de Malvinas en Puerto Madryn Rawson" />
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Gimenez/Gimenez-04-Rawson.jpg" alt="Ofrenda floral en el monumento a los héroes de la Guerra de Malvinas en Rawson" />
                  </div>
                </li>
                <li>
                  <div id="slide5">
                    <img class="cc-slide" src="galeria/Gimenez/Gimenez-05-Rawson.jpg" alt="Monumento a los caídos en la Guerra de Malvinas en Rawson" />
                  </div>
                </li>
                <li>
                  <div id="slide6">
                    <img class="cc-slide" src="galeria/Gimenez/Gimenez-06-Playa-Union.jpg" alt="Acto homenaje a los caídos en la Guerra Malvinas en Playa Unión" />
                  </div>
                </li>
                <li>
                  <div id="slide7">
                    <img class="cc-slide" src="galeria/Gimenez/Gimenez-07-Playa-Union.jpg" alt="Personal de las distintas fuerzas armadas y de seguridad homeneajeando a los caídos en la Guerra de Malvinas en Playa Unión" />
                  </div>
                </li>
                <li>
                  <div id="slide8">
                    <img class="cc-slide" src="galeria/Gimenez/Gimenez-08-Playa-Union.jpg" alt="foto con plano general del homenaje a los caídos de la Guerra de Malvinas en Playa Unión Sierra Grande" />
                  </div>
                </li>
                <li>
                  <div id="slide9">
                    <img class="cc-slide" src="galeria/Gimenez/Gimenez-09-Sierra-Grande.jpg" alt="Monumento a los caídos en la Guerra de Malvinas en Sierra Grande" />
                  </div>
                </li>
                <li>
                  <div id="slide10">
                    <img class="cc-slide" src="galeria/Gimenez/Gimenez-10-Sierra-Grande.jpg" alt="Representación de las Islas Malvinas en Sierra Grande" />
                  </div>
                </li>
                <li>
                  <div id="slide11">
                    <img class="cc-slide" src="galeria/Gimenez/Gimenez-11-Sierra-Grande.jpg" alt="Foto detalle de la representación de las Islas Malvinas en Sierra Grande" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> SP Guillermo Marcelo Giménez</p>
              <p><strong>Lugar de residencia:</strong> Trelew, Prov. de Chubut</p>
              <p><strong>Comentario:</strong> Fotos de los monumentos/homenajes a los veteranos de Malvinas de la zona de Puerto Madryn, Trelew, Playa Unión, Rawson (Chubut) y Sierra Grande (Río negro).</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Gonzalez/Gonzalez-01.jpg" alt="Homenaje a los caídos en la Guerra de las Malvinas." />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Gonzalez/Gonzalez-02.jpg" alt="Recreación de las Islas Malvinas en Rosario, provincia de Santa Fe" />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Gonzalez/Gonzalez-03.jpg" alt="Muro con los apellidos y nombres de los caídos en la Guerra de Malvinas pertenecientes a Gendarmería Nacional, Prefectura Naval Argentina, Armada Argetina, Fuerza Aérea Argentina y Ejército Argentino. " />
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Gonzalez/Gonzalez-04.jpg" alt="Vista panorámica de la recreación de las islas Malvinas en Rosario, Provincia de Santa Fe" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Lorena Andrea González</p>
              <p><strong>Lugar de residencia:</strong> Rosario, Prov. de Santa Fe</p>
              <p><strong>Comentario:</strong> La ubicación es en el Parque Nacional a la Bandera, este Monumento fue inaugurado el 19 de junio de 2005, víspera del Día de la Bandera Argentina, como recordatorio del sacrificio hecho por jóvenes soldados y oficiales argentinos en la lucha desigual por la recuperación de nuestras Islas Malvinas el 2 de abril de 1982.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="Modal5" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Leyell/Leyell-01.jpeg" alt=" “Casilla de guardavidas en Mar del Plata” El Colectivo Faro de la Memoria junto al Centro de ex soldados combatientes en Malvinas de Mar del Plata." />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Leyell/Leyell-02.jpeg" alt="Foto en la casilla de guardavidas en Mar del Plata en el Faro de la Memoria junto al Centro de ex soldados combatientes en Malvinas de Mar del Plata." />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Leyell/Leyell-03.jpeg" alt="Foto general en la casilla de guardavidas en Mar del Plata en el Faro de la Memoria junto al Centro de ex soldados combatientes en Malvinas de Mar del Plata." />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Julieta Leyell</p>
              <p><strong>Lugar de residencia:</strong> CABA </p>
              <p><strong>Comentario:</strong> “Casilla de guardavidas - Mar del Plata - Febrero 2022”
                El Colectivo Faro de la Memoria junto al Centro de ex soldados combatientes en Malvinas
                de Mar del Plata, la Unión de Guardavidas Agremiados y el Sindicato de Guardavidas
                impulsaron la campaña “Banderas de Malvinas frente a nuestro mar. 40 años”.
                Todos los días, hasta el 2 de abril, una bandera argentina, con la imagen de Malvinas
                y el texto “40 años” será izada en cada casilla de guardavidas, junto a los banderines
                del estado del mar.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="Modal6" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Pacher/Pacher-01.jpg" alt="Monumento a los caídos en la Guerra de Malvinas en Zárate, Provincia de Buenos Aires" />
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Pacher/Pacher-04.jpg" alt="Plano de las Islas Malvinas en el Monumento a los caídos en la Guerra" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> David Pacher.</p>
              <p><strong>Lugar de residencia:</strong> Zárate, Prov. Bs. As.</p>
              <p><strong>Comentario:</strong> “Monumento a los Caídos” ubicado en Luis Jenner y Alférez Pacheco de la ciudad de Zárate.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="Modal7" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Payer/Rio-Grande-01.jpeg" alt="Cartel de bienvenida de Río Grande con la leyenda: Las Islas Malvinas son Argentinas" />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Payer/Rio-Grande-02.jpeg" alt="Monumento a los caídos en la Guerra de Malvinas en Río Grande" />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Payer/Rio-Grande-03.jpeg" alt="Réplica de unos de los aviones utilizados en el conflicto bélico de la Guerra de Malvinas en Río Grande" />
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Payer/Rio-Grande-04.jpeg" alt="Réplica de soldados argentinos izando la bandera argentina en las Islas Malvinas en Río Grande" />
                  </div>
                </li>
                <li>
                  <div id="slide5">
                    <img class="cc-slide" src="galeria/Payer/Rio-Grande-05.jpeg" alt="Foto de frente del monumento a los caídos en la Guerra de Malvinas en Río Grande" />
                  </div>
                </li>
                <li>
                  <div id="slide6">
                    <img class="cc-slide" src="galeria/Payer/Rio-Grande-06.jpeg" alt="Réplica de tanque de guerra utilizado en el conflicto bélico en la Guerra de Malvinas en Río Grande" />
                  </div>
                </li>
                <li>
                  <div id="slide7">
                    <img class="cc-slide" src="galeria/Payer/Ushuaia-01.jpeg" alt="Monumento a los caídos en la Guerra de Malvinas en Ushuaia" />
                  </div>
                </li>
                <li>
                  <div id="slide8">
                    <img class="cc-slide" src="galeria/Payer/Ushuaia-02.jpeg" alt="Muro con los nombres de los caídos en la Guerra de Malvinas en Ushuaia" />
                  </div>
                </li>
                <li>
                  <div id="slide9">
                    <img class="cc-slide" src="galeria/Payer/Ushuaia-03.jpeg" alt="Foto del frenter del muro con los nombres de los caídos en la Guerra de Malvinas en Ushuaia" />
                  </div>
                </li>
                <li>
                  <div id="slide10">
                    <img class="cc-slide" src="galeria/Payer/Ushuaia-04.jpeg" alt="Foto con día nublado e iluminado con luces del muro en homenaje a los caídos en la Guerra de Malvinas en Ushuaia" />
                  </div>
                </li>
                <li>
                  <div id="slide11">
                    <img class="cc-slide" src="galeria/Payer/Ushuaia-05.jpeg" alt="Foto de réplica de las Islas Malvinas en Ushuaia" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Capitán de Fragata Jorge Fabián Payer</p>
              <p><strong>Lugar de residencia:</strong> Ushuaia, Tierra del Fuego</p>
              <p><strong>Comentario:</strong> Fotografías tomadas en las localidades de Río Grande y Ushuaia, Tierra del Fuego.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="Modal8" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Pineiro/Pineiro-01.jpg" alt="Imagen con la Ración de combate fechada en abril de 1982" />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Pineiro/Pineiro-02.jpg" alt="Telegrama de Encotel (frente)" />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Pineiro/Pineiro-03.jpg" alt="Telegrama de Encotel con la leyenda: Saludos para todos. ¡Viva la Patria!" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Alicia Piñeiro</p>
              <p><strong>Lugar de residencia:</strong> CABA</p>
              <p><strong>Comentario:</strong> Estos objetos me fueron entregados por un veterano de Malvinas cuando me desempeñaba como docente. <br>-Ración de combate de fecha abril de 1982<br>
                -Telegrama de Encontel (frente)<br>
                -Telegrama de Encontel (reverso)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="Modal9" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-01.jpg" alt="Fotografía Integrantes del Regimiento de Infantería 25" />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-02.jpg" alt="Fotografía general de la tercera compañía B del Regimiento de Infantería 25" />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-04.jpg" alt="Fotogragía del izamiento de la bandera el día 2 de abril de 1982 en la casa del gobernador posterior al rendimiento de los ingleses" />
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-05.jpg" alt="Fotografía de la jura de la Fidelidad a la Bandera Argentina de los soldados clase 63 de la compañía C del Regimiento de Infantería 25 en Darwin, en el mes de abril de 1982" />
                  </div>
                </li>
                <li>
                  <div id="slide5">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-06.jpg" alt="Fotografía del ingreso de la bandera de guerra del Regimiento de Infantería 25 a la formación de la jura de la Fidelidad de la Bandera de la Compañía C y sección del regimiento 8" />
                  </div>
                </li>
                <li>
                  <div id="slide6">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-07.jpg" alt="Fotografía del Subteniente abanderado del Regimiento de Infantería 25 en formación en Darwin en abril de 1982" />
                  </div>
                </li>
                <li>
                  <div id="slide7">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-08.jpg" alt="Fotografía de integrantes del Regimiento de Infantería 25" />
                  </div>
                </li>
                <li>
                  <div id="slide8">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-10.jpg" alt="Fotografía del desfile de personal del ejército argentino en las Islas Malvinas" />
                  </div>
                </li>
                <li>
                  <div id="slide9">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-11.jpg" alt="Fotografía de oficiales de la compañía B del Regimiento de Infantería en 1982 después de la Guerra de Malvinas" />
                  </div>
                </li>
                <li>
                  <div id="slide10">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-12.jpg" alt="Fotografía de soldados argentinos posando con bandera del Reino Unido en como simbolo de victoria ante los ingleses." />
                  </div>
                </li>
                <li>
                  <div id="slide11">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-13.jpg" alt="Fotografía de desembarco del Hércules en la pista del Aeropuerto de Puerto Argentino" />
                  </div>
                </li>
                <li>
                  <div id="slide12">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-14.jpg" alt="Fotografía de la casa de los kelpers, ubicadas al oeste de la casa del gobernador" />
                  </div>
                </li>
                <li>
                  <div id="slide13">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-15.jpg" alt="Fotografía que muestra a soldados argentinos hablando con una kelper en el censo realizado entre los días 3 y 4 de abril de 1982" />
                  </div>
                </li>
                <li>
                  <div id="slide14">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-16.jpg" alt="Fotografía que muestra un galpón en llamas del aeropuerto argentino producto de un ataque aéreo por parte de las Fuerzas Armadas del Reino Unido el día 1º de mayo de 1982" />
                  </div>
                </li>
                <li>
                  <div id="slide15">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-17.jpg" alt="Fotografía que muestra a un soldado argentino en el techo del cuartel 'B'. Posteriormente, en esta locación funcionaría el Hospital Militar de Puerto Argentino." />
                  </div>
                </li>
                <li>
                  <div id="slide16">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-18.jpg" alt="Fotografía que muestra a soldados argentinos en un vehículo anfibio" />
                  </div>
                </li>
                <li>
                  <div id="slide17">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-19.jpg" alt="Fotografía que muestra a prisioneros de las fuerzas armamdas inglesas el 2 de abril de 1982" />
                  </div>
                </li>
                <li>
                  <div id="slide19">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-21.jpg" alt="Fotografía que muestra la visión aérea de Puerto Argentino en abril de 1982" />
                  </div>
                </li>
                <li>
                  <div id="slide20">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-22.jpg" alt="Fotografía que muestra un mapa en donde se hace un relevamiento, en la zona del aeropuerto, de los impactos que comprende desde el 1º de mayo al 14 de junio de 1982" />
                  </div>
                </li>
                <li>
                  <div id="slide21">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-23.jpg" alt="Fotografía que muestra un plano de un bombardeo realizados por las fuerzas armadas argentinas" />
                  </div>
                </li>
                <li>
                  <div id="slide22">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-26.jpg" alt="Fotografía de un plano que muestra la situación de las tropas argentinas entre los días 13 y 14 de junio 1982" />
                  </div>
                </li>
                <li>
                  <div id="slide23">
                    <img class="cc-slide" src="galeria/Aguiar/Aguiar-27.jpg" alt="Fotografía de un plano que muestra el resultado final del conflicto bélico suscitado en las Islas Malvinas el 14 de junio de 1982" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong>TC (R) VGM Abel Eduardo Aguiar </p>
              <p><strong>Lugar de residencia:</strong> San Miguel de Tucumán, Prov. de Tucumán </p>
              <p><strong>Comentario:</strong> Fotografías prestando servicio como Subteniente en el Regimiento de Infantería 25, durante el conflicto por las Islas Malvinas en abril de 1982. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----->
<div class="modal fade" id="Modal10" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Cisneros/Cisneros-01.jpg" alt="" />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Cisneros/Cisneros-02.jpg" alt="" />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Cisneros/Cisneros-03.jpg" alt="" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Diego Hidalgo Cisneros</p>
              <p><strong>Lugar de residencia:</strong> Santiago del Estero Capital, Prov. de Santiago del Estero </p>
              <p><strong>Comentario:</strong> Foto del monumento al Soldado de Malvinas, ubicado en la Rotonda del Puente Carretero de ciudad Capital, frente al Estadio Único de Santiago del Estero. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="Modal11" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Eduardo-Urrutia/Eduardo-Urrutia-01.jpg" alt="Fotografía de un mapa inglés de planificación del ataque a puerto argentino " />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Eduardo-Urrutia/Eduardo-Urrutia-02.jpg" alt="Fotografía del personal del batallón de Infantería de Marina 5, luego de la rendición." />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Eduardo-Urrutia/Eduardo-Urrutia-03.jpg" alt="Fotografía  de Davidoff y sus compañeros de trabajo exploran las instalaciones balleneras para utilizar la chatarra de la empresa Ballenera Salvensen en diciembre de 1981" />
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Eduardo-Urrutia/Eduardo-Urrutia-04.jpg" alt="Fotografía de un plano general de Davidoff con otras personas" />
                  </div>
                </li>
                <li>
                  <div id="slide5">
                    <img class="cc-slide" src="galeria/Eduardo-Urrutia/Eduardo-Urrutia-05.jpg" alt="Fotografía de las instalaciones balleneras de la compañía Salvensen en las Islas " />
                  </div>
                </li>
                <li>
                  <div id="slide6">
                    <img class="cc-slide" src="galeria/Eduardo-Urrutia/Eduardo-Urrutia-06.jpg" alt="Fotografía en blanco y negro" />
                  </div>
                </li>
                <li>
                  <div id="slide7">
                    <img class="cc-slide" src="galeria/Eduardo-Urrutia/Eduardo-Urrutia-07.jpg" alt="Fotografía del ARA Santa Fe (S-21)." />
                  </div>
                </li>
                <li>
                  <div id="slide8">
                    <img class="cc-slide" src="galeria/Eduardo-Urrutia/Eduardo-Urrutia-08.jpg" alt="Fotografía del Avión Dagger de la Fuerza Aérea Argentina maniobrando dentro del estrecho de San Carlos para atacar a los buques ingleses mientras se ven explosiones del fuego antiaéreo." />
                  </div>
                </li>
                <li>
                  <div id="slide9">
                    <img class="cc-slide" src="galeria/Eduardo-Urrutia/Eduardo-Urrutia-09.jpg" alt="Fotografía de un Avión Super Etendard en el momento de lanzar un misil Exocet AM 39" />
                  </div>
                </li>
                <li>
                  <div id="slide10">
                    <img class="cc-slide" src="galeria/Eduardo-Urrutia/Eduardo-Urrutia-10.jpg" alt="Fotografía del lugar de impacto del misil Exocet en el HMS Sheffield" />
                  </div>
                </li>
                <li>
                  <div id="slide11">
                    <img class="cc-slide" src="galeria/Eduardo-Urrutia/Eduardo-Urrutia-11.jpg" alt=" Fotografía del ataque por parte de la Armada Argentina y de la Fuerza Aérea Argentina al HMS “Ardent” (F184)" />
                  </div>
                </li>
                <li>
                  <div id="slide12">
                    <img class="cc-slide" src="galeria/Eduardo-Urrutia/Eduardo-Urrutia-12.jpg" alt="Fotografía del Destructor HMS Sheffield luego de ser impactado por un misil Exocet AM 39 lanzado por un avión Super Etendard de la Aviación Naval" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Vicealmirante (R-Art 62) VGM Eduardo Jorge Urrutia</p>
              <p><strong>Lugar de residencia:</strong> Ciudad Autónoma de Buenos Aires</p>
              <p><strong>Comentario:</strong> Fotos de distintas instancias durante el conflicto por las Islas Malvinas</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal fade" id="Modal12" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Laborde/Laborde-01.jpg" alt="Acto en homenaje a los veteranos y caídos en la Guerra de Malvinas " />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Laborde/Laborde-02.jpg" alt="Izamiento de la bandera argentina por Veteranos de la Guerra de Malvinas" />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Laborde/Laborde-03.jpg" alt="Desfile de veteranos de Malvinas por las calles de Tandil" />
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Laborde/Laborde-04.jpg" alt="Veteranos de la Guerra de Malvinas" />
                  </div>
                </li>
                <li>
                  <div id="slide5">
                    <img class="cc-slide" src="galeria/Laborde/Laborde-05.jpg" alt="Palabras en el acto de homenaje a los veteranos y caídos en la Guerra de Malvinas" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong>VC Luis María Laborde</p>
              <p><strong>Lugar de residencia:</strong> Tandil, Prov. de Buenos Aires</p>
              <p><strong>Comentario:</strong> Fotos de distintas ceremonias conmemorativas a la Gesta de Malvinas.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----->
<div class="modal fade" id="Modal13" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Guzman/Guzman-01.jpg" alt="" />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Guzman/Guzman-02.jpg" alt="" />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Guzman/Guzman-03.jpg" alt="" />
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Guzman/Guzman-04.jpg" alt="" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Sabrina Andrea Guzmán</p>
              <p><strong>Lugar de residencia:</strong> Río Gallegos, Prov. de Santa Cruz</p>
              <p><strong>Comentario:</strong>Las 2 primeras fotos son del “Monumento a pilotos caídos en Malvinas”, en Av. Costanera Emilia Rodiño de Clark esq. Chacabuco.<br> Las 2 últimas pertenecen al “Monumento Malvinas Argentinas” entre las calles Av. José de San Martín, Av. De los Inmigrantes, Av. Tte. Carlos Béccar y calle Río Negro. <br>Foto N°4 (aérea) Gentileza de la Municipalidad de Río Gallegos.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----->
<div class="modal fade" id="Modal14" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/J-Urrutia/J-Urrutia-01.jpg" alt="" />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/J-Urrutia/J-Urrutia-02.jpg" alt="" />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/J-Urrutia/J-Urrutia-03.jpg" alt="" />
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/J-Urrutia/J-Urrutia-04.jpg" alt="" />
                  </div>
                </li>
                <li>
                  <div id="slide5">
                    <img class="cc-slide" src="galeria/J-Urrutia/J-Urrutia-05.jpg" alt="" />
                  </div>
                </li>
                <li>
                  <div id="slide6">
                    <img class="cc-slide" src="galeria/J-Urrutia/J-Urrutia-06.jpg" alt="" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong>CN (R) José Miguel Urrutia.</p>
              <p><strong>Lugar de residencia:</strong>Bahía Blanca, Prov. de Buenos Aires.</p>
              <p><strong>Comentario:</strong>Fotos de lugares relacionados con la Gesta de Malvinas, en la ciudad de Bahía Blanca.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----->
<div class="modal fade" id="Modal15" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Gonzalez-Torrado/Gonzalez-Torrado-02.jpg" alt="Foto de un cartel con la leyenda “Las Islas Malvinas son Argentinas”, que se encuentra a la izquierda de la entrada principal al Hospital Militar Campo de Mayo, CABA" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Flavia Andrea González Torrado.</p>
              <p><strong>Lugar de residencia:</strong>Campo de Mayo, Prov. de Buenos Aires</p>
              <p><strong>Comentario:</strong>Foto de un cartel con la leyenda “Las Islas Malvinas son Argentinas”, que se encuentra a la izquierda de la entrada principal al Hospital Militar Campo de Mayo.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Modal16" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Guevara/Guevara-02.jpg" alt="La fotografía muestra una estatua de un soldado en la Plaza 2 de abril, ubicada en San Fernando del Valle de Catamarca, en homenaje a todos los caídos en la Guerra de Malvinas y a los fallecidos en el hundimiento ARA Crucero General Belgrano." />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Guevara/Guevara-04.jpg" alt="La fotografía muestra un busto en homenaje al Sargento Primero Mario "Perro" Cisneros, con placas homenajes." />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> José Manuel Guevara</p>
              <p><strong>Lugar de residencia:</strong> San Fernando del Valle de Catamarca</p>
              <p><strong>Comentario:</strong> En la Plaza 2 de Abril, ubicada en San Fernando del Valle de Catamarca, se homenajea a los caídos en la Guerra de Malvinas y a los que fallecieron producto del hundimiento del ARA “Crucero General Belgrano”. También, hay un busto en homenaje al Sargento Primero Mario "Perro" Cisneros, fallecido el 10 de junio de 1982 en el combate.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----06-04-22--->


<div class="modal fade" id="Modal17" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- <h2 class="text-center">Modal 17</h2> -->
        <div class="container">

          <div class="row">
            <div class="col-sm-12 col-12">
              <p class="creacioncolectivatextostitulo" style="text-align: center">
                MALVINAS 
              </p>
            </div>
            <div class="col-sm-4">
              <p class="creacioncolectivatextos">
                Hace 40 años que <br>
                Nadie quiere contar <br>
                Esta parte de la historia, <br>
                Ya que a nadie le conviene <br>
                Ya que hay muchos intereses <br>
                De por medio. <br>
                Ya que la Argentina <br>
                Estaba saliendo de un  <br>
                Procesos militar-cívico. <br>
              </p>
            </div>
            <div class="col-sm-4">
              <p class="creacioncolectivatextos">
                Y cuando Inglaterra <br>
                Declaro la guerra de Malvinas <br>
                Pensaron que la Argentina <br>
                Se iba a achicar; y <br>
                Demostró que no teniendo <br>
                Tanta tecnología y el único <br>
                País que ayudo fue Perú. <br>
                Mientras que Inglaterra <br>
                Tuvo ayuda de Estados Unidos <br>
                Y de Chile para poder <br>
                Acceder más rápido tanto <br>
                Al mar, océano. <br>
                Los militares y los soldados <br>
                Dieron su vida para <br>
                Que la Argentina este mejor. <br>
              </p>
            </div>
            <div class="col-sm-4">
              <p class="creacioncolectivatextos">
                La guerra de Malvinas surgió <br>
                Por un conflicto de intereses, <br>
                Y pensaron que la Argentina <br>
                No iba a dar batalla. <br>
                Pero demostró que no <br>
                Hay que cuestionar y pensar <br>
                Que demostró que no es garantía <br>
                Tener la mejor arma, <br>
                Sino la mejor estrategia <br>
                Y la verdad que se llevaron  <br>
                Una buena sorpresa. <br>
              </p>
              <p class="creacioncolectivatextos">
                Y el conflicto que hay <br>
                Entre la Argentina y  <br>
                Reino Unido empezó <br>
                En el año 1822 y en 1982 <br>
                Se declaró la guerra.<br>
              </p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:<strong> María del Pilar Flores Sorroche</p>
              <p><strong>Lugar de residencia:</strong> Ciudad Autónoma de Buenos Aires</p>
              <p><strong>Comentario:</strong> Les adjunto la poesía que escribí sobre Malvinas. Titulada; “Malvinas”.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal18" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <div class="row">
                      <div class="col-sm-12">
                        <p class="creacioncolectivatextostitulo" style="text-align: center">“Cuanto de el Reino” </p>
                      </div>
                      <div class="col-sm-4">
                       <p class="creacioncolectivatextos-Klaus">  
                        En la República Argentina en sus épocas difíciles empieza un creer. Las familias empezaron a vivir una esperanza de una lucha injusta. - Los hombres que estaban en las fuerzas de la República fueron a una guerra para poder liberar este pueblo y otro pueblo que están allí en las islas Georgia del Sur y Sándwich del Sur. Allí en la soberanía hubo distintas guerras. Los Soldados de la República Argentina y los Soldados de Inglaterra hicieron actos de vida aparte de ser soldados.</p>
                      </div>  
                      <div class="col-sm-4">
                       <p class="creacioncolectivatextos-Klaus">  
                       - En la guerra entre cielo y el infierno después de la guerra están buscando un creer. Los niños crecieron de distintas maneras; Las familias vivieron de distintas maneras para cada día poder sobrevivir. En esto el creer de cada religión en las maneras que pudieron hacer esta, si vieron cada uno su ser. Las guerras de poder dormir o otros están en batallas. Aún hoy todos vivimos desde un querer para dar un ser. Que lo que es un ser que se a llevado las guerras sean un ápice creados. Hoy los nietos y más familiares pueden tener un creer desde un Reino. Las hojas de este imprimir no es sólo este cuento, cada uno lleva sus hojas, sus imprimir y pueden crear sus vidas. Hoy el Reino vuelve a través de estas hojas.</p> 
                      </div>
                      <div class="col-sm-4"> 
                      <p class="creacioncolectivatextos-Klaus"> En las iglesias está la vida. La vida escrita y su historia además su voz para ustedes. Esa voz, ese ser para ustedes en guía para poder velar su espíritu para los niños en los juegos que pueden hacer y los juegos que no deben ser por dejaron de serlo; Un desvirtuar. Este hablar es amar que hasta que crezcan y puedan entender. - Así todos tener un abrazo, una sonrisa y un Soldado viendo una plaza con su familia en sus juegos que elijan. Un día van a recordar las zapatillas y las medias llenas de arena y el escenario de la vida vivirla.</p>                    
                     </div>                     
                    </div>
                  </div>
                </li>
                <li>
                 <div id="slide2">
                  <div class="row">
                      <div class="col-sm-5">
                        <img class="cc-slide" src="galeria/Klaus/Klaus-02.jpg" alt="Poema titulado: Libro Sagrado Sumerio, por Mauricio Klaus" style="width: 100%!important;height:auto!important;"/>
                      </div> 
                      <div class="col-sm-2"></div>                     
                      <div class="col-sm-5">
                        <p class="creacioncolectivatextostitulo" style="text-align: center">“Libro Sagrado; Sumerio” </p>
                        <p class="creacioncolectivatextos">
                          Imaginar un sueño <br>
                          es crear un ser <br>
                          es amar; crear un camino.</p>
                          <p class="creacioncolectivatextos">
                          Sentir y ver la Tristeza<br>
                          Ver y recibir su ánima<br>
                          es una guerra.<br>
                          Es en el imprimir<br>
                          en el empezar a ser;
                          Crear un libro Sagrado.</p>                       
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor: Mauricio Klaus</strong></p>
              <p><strong>Lugar de residencia: Zárate, Prov. Bs. As.</strong></p>
              <p><strong>Comentario: Textos literarios de mi autoría.</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal19" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Aguiar/Carta-01.jpg" alt="Carta dirigida a los soldados en combate con un dibujo de las Islas Malvinas. La carta fue realizada por un alumno de la escuela 9 de Julio en Abril de 1982." />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Aguiar/Carta-02.jpg" alt="Carta dirigida a los soldados en combate. La carta fue escrita por los alumnos de la escuela 9 de Julio, fechada el 19 de abril de 1982." />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Aguiar/Carta-03.jpg" alt="Carta dirigida a los soldados en combate con un dibujo de la bandera argentina y unas campanas, realizada por alumnos de la escuela 9 de Julio en abril de 1982." />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> TC (R) VGM Abel Eduardo Aguiar</p>
              <p><strong>Lugar de residencia:</strong>San Miguel de Tucumán, Prov. de Tucumán</p>
              <p><strong>Comentario:</strong>Cartas escritas por los alumnos de 5° grado “B”, de la escuela “9 de Julio”, turno tarde, de San Miguel de Tucumán, dirigidas a los soldados argentinos que estaban defendiendo las Islas Malvinas en abril de 1982.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal20" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- <h2 class="text-center">Modal 20</h2> -->
        <div style="text-align: center">
          <img class="grid-item  c-opus  otros" src="galeria/Quiroga/Quiroga-01.jpg" alt="Ilustración en homenaje a los combatientes de la Guerra de Malvinas." />

        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong>Ludmila Lezcano Quiroga</p>
              <p><strong>Lugar de residencia:</strong>Mar del Plata, Prov. de Buenos Aires</p>
              <p><strong>Comentario:</strong>El dibujo es homenaje a los combatientes de la Guerra de Malvinas.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal21" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- <h2 class="text-center">Modal 21</h2> -->
        <div style="text-align: center">
          <div class="row">
            <div class="col-12">
              <p class="creacioncolectivatextostitulo" style="text-align: center">“GLOSAS PARA UN HÉROE”</p>
              <p class="creacioncolectivatextos" style="text-align: center">
                EN UN CAMPO DE CORRIENTES, GURÍ LIBRE TE CRIASTE.<br>
                AL TIEMPO FUISTE CRECIENDO Y TU FUTURO IDEASTE.<br>
                DOÑA MARI TU TUTORA, MADRE GUÍA Y COMPAÑERA.<br>
                DESDE PEQUEÑO ENSAYASTE, EL AMOR POR TU BANDERA.
              </p>
              <p class="creacioncolectivatextos" style="text-align: center">
                FUISTE JOVEN AL LLAMADO, QUE LA PATRIA PRETENDÍA<br>
                CON TU CABELLO ONDULADO Y UNA MOCHILA VACÍA<br>
                NO ENTENDÍAS QUÉ PASABA, PERO CON FE DECIDISTE<br>
                IR A LUCHAR A MALVINAS, DEJANDO TU PUEBLO TRISTE.
              </p>
              <p class="creacioncolectivatextos" style="text-align: center">
                SANGRE CORRENTINA ITEVA, POR TUS VENAS SIEMPRE HIRVIÓ<br>
                Y UN SAPUCAY DESDE EL ALMA, HASTA INGLATERRA LLEGÓ<br>
                CON UN ESCASO ARMAMENTO, NUESTRA TIERRA DEFENDIERON<br>
                CON EL CUCHILLO ENTRE DIENTES Y CON ABRAZOS FRATERNOS.
              </p>
              <p class="creacioncolectivatextos" style="text-align: center">
                CUARENTA AÑOS PASARON, DE AQUEL CONFLICTO SANGRIENTO<br>
                REGRESASTE SANO Y SALVO, CON TU ESPOSA, HIJOS Y NIETOS<br>
                QUEDARÁ SIEMPRE GRABADO, UN TATUAJE EN TU RETINA<br>
                DON JUSTO PASTOR ROMERO, NUESTRO HÉROE DE MALVINAS.
              </p>
            </div>
          </div>

        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong>Nicolás Agustín Bejarano</p>
              <p><strong>Lugar de residencia:</strong>Provincia de Corrientes</p>
              <p><strong>Comentario:</strong>Presto mi servicio en la Delegación IOSFA Corrientes.Actualmente me encuentro esperando un hijo, con la hija de un veterano de Malvinas. Su nombre es Justo Pastor Romero, padre de familia, respetuoso, compañero y más aún héroe patrio. Se muestran fotos de su juventud.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal22" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Bejarano/Bejarano-02.jpg" alt="Romero acompañado por su madre en el acto de egresados del colegio secundario" />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Bejarano/Bejarano-03.jpg" alt="Romero en el acto de egresados del colegio secundario recibiendo un diploma" />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Bejarano/Bejarano-04.jpg" alt="Romero acompañado por sus padres en el acto de egresados del colegio secundario" />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong>Nicolás Agustín Bejarano</p>
              <p><strong>Lugar de residencia:</strong>Provincia de Corrientes</p>
              <p><strong>Comentario:</strong> Presto mi servicio en la Delegación IOSFA Corrientes. Actualmente me encuentro esperando un hijo, con la hija de un veterano de Malvinas. Su nombre es Justo Pastor Romero, padre de familia, respetuoso, compañero y más aún héroe patrio. Se muestran fotos de su juventud</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="Modal23" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Cuco/Cuco-01.jpg" alt="En la fotografía se muestra un monumento en homenaje a los caídos en la Guerra de Malvinas con la leyenda: “Caídos en Malvinas”." />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Cuco/Cuco-02.jpg" alt= "En la fotografía se muestra a ex – combatientes de la Guerra de Malvinas con una bandera argentina con la leyenda: “Centros de Veteranos de la Guerra La Pampa”." />
                  </div>
                </li>               
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>              
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong>Rodolfo Sebastián Cuco</p>
              <p><strong>Lugar de residencia:</strong>Santa Rosa, Prov. de La Pampa</p>
              <p><strong>Comentario:</strong>Foto del Monumento a los “Caídos en Malvinas”, sito en Corrientes esquina Victoria; y por otra parte, el grupo del “Centro Veteranos de Guerra” de La Pampa.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Modal24" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Barreto/Barreto-01.jpg" alt="Fotografía que muestra el monumento a los caídos en la Guerra de Malvinas en la ciudad de Comodoro Rivadavia. Se puede observar la estatua de un soldado como símbolo de todos los que combatieron en aquel conflicto bélico." />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Barreto/Barreto-02.jpg" alt="Fotografía que muestra el muro con los nombres de los caídos en la Guerra de Malvinas, en el monumento realizado en homenaje a los que perdieron la vida en aquella guerra." />
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Marcela Alicia Barreto</p>
              <p><strong>Lugar de residencia:</strong> Comodoro Rivadavia, Prov. de Chubut.</p>
              <p><strong>Comentario:</strong> Monumento a los “Caídos en Malvinas”, ubicado en Avenida Hipólito Yrigoyen esquina Moreno. </p><p><strong>Fotógrafa:</strong> Luciana Arbe.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Modal25" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
            <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <div class="row">
                      <div class="col-12">
                        <img class="cc-slide" src="galeria/Estraviz/Estraviz-01.jpg" alt="La fotografía muestra en el hall de ingreso del Ministerio de Defensa, una placa mural con todos los nombres de los caídos en la Guerra de Malvinas." />
                      </div>
                      <div class="col-12">
                        <p style="text-align: center">
                        Placa mural homenaje a los caídos en combate. Hall de ingreso por escalinatas del Ministerio de Defensa.
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <div class="row">
                      <div class="col-12">
                        <img class="cc-slide" src="galeria/Estraviz/Estraviz-02.jpg" alt="La fotografía muestra un atril con dos carteles, el primero con la leyenda del nombre del edificio: “Libertador General San Martín” y el segundo que dice: “Malvinas nos une” cercano al ascensor para los oficiales de rango superior." />
                      </div>
                      <div class="col-12">
                      <p style="text-align: center">
                      Cartel homenaje por los 40 años de Malvinas. Acceso al ascensor de Oficiales Superiores del Ministerio de Defensa.
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <div class="row">
                      <div class="col-12">
                        <img class="cc-slide" src="galeria/Estraviz/Estraviz-03.jpg" alt="FLa fotografía muestra un cartel en homenaje por el 40º aniversario de la Guerra de Malvinas." />
                      </div>
                      <div class="col-12">
                      <p style="text-align: center">
                      Cartel homenaje por los 40 años de Malvinas. Ingreso por puesto 2 del Ministerio de Defensa.
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <!-- <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
              </ul> -->
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Silvana Noemí Estraviz</p>
              <p><strong>Lugar de residencia:</strong> Ciudad Autónoma de Buenos Aires</p>
              <p><strong>Comentario:</strong> Fotos tomadas del Ministerio de Defensa, edificio Libertador, lugar en donde se encuentra nuestra Delegación Auxiliar. Fotógrafo: Soldado Voluntario Mariano Valdez</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="Modal26" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
           <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Serafin/Serafin-01.jpg" alt="Fotografía que muestra el monumento a los caídos en la Guerra de Malvinas en la ciudad de Comodoro Rivadavia. Se puede observar la estatua de un soldado como símbolo de todos los que combatieron en aquel conflicto bélico." />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Serafin/Serafin-02.jpg" alt="La fotografía muestra el listado de soldados que fallecieron en el “Crucero ARA General Belgrano”." />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Serafin/Serafin-03.jpg" alt="La fotografía muestra lo que dice un cartel exterior, indicando el nombre del monumento a los que combatieron en la Guerra de Malvinas, llamado “Héroes de Malvinas”."/>
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Serafin/Serafin-04.jpg" alt="La fotografía muestra de frente el monumento a los “Héroes de Malvinas”."/>
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong>Viviana Serafín</p>
              <p><strong>Lugar de residencia:</strong>Córdoba Capital, Prov. de Córdoba</p>
              <p><strong>Comentario:</strong>Fotos de dos monumentos que se encuentran en Córdoba Capital. Las primeras dos se corresponde con un homenaje a los fallecieron en el Crucero ARA General Belgrano; y las dos restantes es un monumento a todos aquellos que combatieron en la Guerra de Malvinas.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Modal27" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
           <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Zubieta/Zubieta-01.jpg" alt="La fotografía muestra el monumento “Guardianes de los 55”. Un homenaje a los caídos en Malvinas y avión emblema." />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Zubieta/Zubieta-02.jpg" alt="La fotografía muestra el Mirage 5 Finger C-412 M-V Dagger, que participó en la batalla del 1º de mayo de 1982 atacando la flota británica." />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Zubieta/Zubieta-03.jpg" alt="La fotografía muestra el Mirage India 003 M-III EA, que fue el primer Mirage en volar en Argentina en el año 1973."/>
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Zubieta/Zubieta-04.jpg" alt="En el almacén de ramos generales “Vulcano”, ubicado en el pueblo de Gardey (cercano a la ciudad de Tandil) se encuentra el “Museo de Malvinas”."/>
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong>Martín Ernesto Zubieta.</p>
              <p><strong>Lugar de residencia:</strong>Tandil, Prov. de Buenos Aires</p>
              <p><strong>Comentario:</strong>Fotos de distintos monumentos del “Bosque los 55", ubicado en el interior de la VI Brigada Aérea, que se encuentra a 17 kilómetros. de la ciudad de Tandil; y el Museo Malvinas en el pueblo de Gardel (se encuentra a 25 kilómetros de la ciudad de Tandil). Algunas fotografías son gentileza del sitio: aerohistoriaargentina.blogspot.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 


<div class="modal fade" id="Modal28" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
           <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Basili/Basili-01.jpg" alt="Muro en homenaje a los caídos en la Guerra de Malvinas en Puerto Belgrano (Base Naval Puerto Belgrano)" />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Basili/Basili-02.jpg" alt="Bandera Argentina izada en el “Centro de Veteranos de Guerra y familiares de caídos en Malvinas” en Punta Alta." />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Basili/Basili-03.jpg" alt="Monumento realizado a los caídos en la Gesta de Malvinas en el “Centro de Veteranos de Guerra y familiares de caídos en Malvinas” en Punta Alta."/>
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Basili/Basili-04.jpg" alt="Avión Embraer (Macchi) MC-326 Xavante, de la Aviación Naval Argentina de los que se utilizaron en la Gesta de Malvinas en el “Centro de Veteranos de Guerra y familiares de caídos en Malvinas” en Punta Alta."/>
                  </div>
                </li>
                <li>
                  <div id="slide5">
                    <img class="cc-slide" src="galeria/Basili/Basili-05.jpg" alt="Placas en homenaje a los caídos en la Gesta de Malvinas, al pie del avión Embraer, en el “Centro de Veteranos de Guerra y familiares de caídos en Malvinas” en Punta Alta."/>
                  </div>
                </li>
                <li>
                  <div id="slide6">
                    <img class="cc-slide" src="galeria/Basili/Basili-06.jpg" alt="Detalle de una réplica de una hélice en el monumento en homenaje a caídos en el hundimiento del Crucero ARA General Belgrano, ubicado dentro de la Base Naval Puerto Belgrano"/>
                  </div>
                </li>
                <li>
                  <div id="slide7">
                    <img class="cc-slide" src="galeria/Basili/Basili-07.jpg" alt="Plano general del monumento en homenaje a caídos en el hundimiento del Crucero ARA General Belgrano, ubicado dentro de la Base Naval Puerto Belgrano"/>
                  </div>
                </li>
                <li>
                  <div id="slide8">
                    <img class="cc-slide" src="galeria/Basili/Basili-08.jpg" alt="Monumento a los Héroes de Malvinas, emplazado en el barrio Albatros V, en Punta Alta"/>
                  </div>
                </li>
                <li>
                  <div id="slide9">
                    <img class="cc-slide" src="galeria/Basili/Basili-09.jpg" alt="Plano General del homenaje a los veteranos y caídos en la Guerra de Malvinas en el Parque Centenario, que se encuentra dentro de la Base Naval Puerto Belgrano."/>
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> María Alejandra Basili</p>
              <p><strong>Lugar de residencia:</strong> Puerto Belgrano, Prov. de Buenos Aires</p>
              <p><strong>Comentario:</strong> Las fotos corresponden al Centro de Veteranos y familiares de caídos en la Guerra de Malvinas. El Centro cuenta con un muro en homenaje a todos los que dieron sus vidas en el conflicto bélico. También hay fotos del homenaje que se les realiza a los combatientes que perdieron la vida en el Crucero ARA General Belgrano. A la vez, dentro de la Base Naval Puerto Belgrano hay un muro con los nombres de todos los caídos en la Guerra de Malvinas. Además, en Punta Alta se encuentra un monumento en homenaje a los que dejaron su vida en la Guerra.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 


<div class="modal fade" id="Modal29" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
           <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Liendo/Liendo-01.jpg" alt="La fotografía muestra un cartel indicando que es la Plaza “Héroes de Malvinas”, en Cosquín, Prov. de Córdoba." />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Liendo/Liendo-02.jpg" alt="La fotografía muestra la plaza en general con un busto de frente." />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Liendo/Liendo-03.jpg" alt="La fotografía muestra un busto del Capitán Omar Jesús Castillo, fallecido en la batalla aérea en la Guerra de Malvinas el 30 de mayo de 1982."/>
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Liendo/Liendo-04.jpg" alt="La fotografía es un plano detalle de la placa correspondiente al busto en homenaje al Capitán Omar Jesús Castillo."/>
                  </div>
                </li>
                <li>
                  <div id="slide5">
                    <img class="cc-slide" src="galeria/Liendo/Liendo-05.jpg" alt="La fotografía muestra una placa en la Plaza “Héroes de Malvinas” con palabras en homenaje a los combatientes de la Guerra de Malvinas."/>
                  </div>
                </li>
                <li>
                  <div id="slide6">
                    <img class="cc-slide" src="galeria/Liendo/Liendo-06.jpg" alt="Placa con frase “De la Fuerza Aerea Argentina a los Heroes de Malvinas”"/>
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong>Gustavo Tomás Liendo</p>
              <p><strong>Lugar de residencia:</strong>Cosquín, Prov. de Córdoba.</p>
              <p><strong>Comentario:</strong>Plaza “Héroes de Malvinas”, sito en Ruta Nacional 38 N°282, Cosquín, Prov. de Córdoba.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 


<div class="modal fade" id="Modal30" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div style="text-align: center">
          <img class="cc-slide" src="galeria/Leiva/Leiva-01.jpg" alt="La fotografía muestra a militares argentinos verificando una bomba inactiva arrojada por las fuerzas inglesas cerca del Aeropuerto de Malvinas, el 25 de mayo de 1982."/>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> SP “VGM” Marcos Dante Leiva</p>
              <p><strong>Comentario:</strong> Foto tomada en el Aeropuerto de Malvinas el 25 de mayo de 1982.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 


<div class="modal fade" id="Modal31" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div style="text-align: center">
          <img class="cc-slide" src="galeria/Gez/Gez-01.jpg" alt="La fotografía muestra el Monumento “Soberanía Nacional”, ubicado en La Rioja Capital."/>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Miryam Marina Gez</p>
              <p><strong>Lugar de residencia:</strong> La Rioja Capital, Prov. de La Rioja</p>
              <p><strong>Comentario:</strong> Monumento “Soberanía Nacional”, sito en Av. 2 de Abril y Francisco Narbona, a metros del estadio Carlos Augusto Mercado Luna.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 


<div class="modal fade" id="Modal32" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
           <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Quevedo/Quevedo-01.jpg" alt="Fotografía del Monumento en homenaje a los caídos en la Guerra de Malvinas" />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Quevedo/Quevedo-02.jpg" alt="Fotografía del izamiento de la bandera Argentina por parte un Veterano de la Guerra de Malvinas" />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Quevedo/Quevedo-03.jpg" alt="Fotografía que muestra al Suboficial Mayor Quevedo leyendo el mensaje del directorio"/>
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Quevedo/Quevedo-04.jpg" alt="La fotografía muestra el minuto de silencio en homenaje a los caídos en la Guerra de Malvinas por parte de los Veteranos de la Guerra de Malvinas y el Teniente Coronel Riveros"/>
                  </div>
                </li>
                <li>
                  <div id="slide5">
                    <img class="cc-slide" src="galeria/Quevedo/Quevedo-05.jpg" alt="La fotografía muestra a Veteranos de la Guerra de Malvinas llevando una ofrenda floral al monumento en homenaje a los caídos de la Guerra de Malvinas. Más alejado se puede visibilizar al Teniente Coronel"/>
                  </div>
                </li>
                <li>
                  <div id="slide6">
                    <img class="cc-slide" src="galeria/Quevedo/Quevedo-06.jpg" alt="La fotografía muestra a dos Veteranos de la Guerra de Malvinas colocando ofrenda floral."/>
                  </div>
                </li>
                <li>
                  <div id="slide7">
                    <img class="cc-slide" src="galeria/Quevedo/Quevedo-07.jpg" alt="La fotografía muestra a dos Veteranos de la Guerra de Malvinas parados al lado del monumentos a los caídos en la Guerra de Malvinas con la ofrenda floral"/>
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Alejandro Ignacio Quevedo</p>
              <p><strong>Lugar de residencia:</strong> La Falda, Prov. de Córdoba</p>
              <p><strong>Comentario:</strong> Se realizó un acto en la Residencia Serrana La Falda para conmemorar el 40° Aniversario de la Gesta de Malvinas. Se invitó a Veteranos de la Guerra de Malvinas y se les realizó un homenaje a los caídos en combate.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 


<div class="modal fade" id="Modal33" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">

                      <p class="creacioncolectivatextostitulo-taverna" style="text-align: center">RESEÑA HISTÓRICA DEL CAPITÁN AVIADOR OMAR JESÚS CASTILLO <br> CONBATIENTE DE MALVINAS</p>
              <p class="creacioncolectivatextos-taverna">Omar Jesús Castillo, nació en Cosquín el 31 de agosto de 1953.</p>
              <p class="creacioncolectivatextos-taverna">En el año 1972, con dieciocho años de edad ingresó a la Escuela de Aviación Militar de la ciudad de Córdoba, recibiéndose en 1975 con el grado de Alférez. En 1977 realizó el curso de Aviador Militar. </p>
              <p class="creacioncolectivatextos-taverna">Fue parte del Grupo 4 de Caza que el 30 de mayo de 1982 atacó al portaviones ligero HMS Invencible, y por cuya acción de arrojo fue merecedor, post morten, a la más alta condecoración militar otorgada por la República Argentina, la Cruz al Heroico Valor en Combate y declarado Héroe Nacional. </p>
              <p class="creacioncolectivatextos-taverna">El 30 de mayo de 1982 despegó de Río Grande, a las 12,30 horas una fuerza conjunta aeronaval, compuesta por dos Super Étendard (3-A-202 y 3-A-205), con indicativo "Ala", comandados por el Capitán de Corbeta Alejandro Francisco que portaba el último Exocet AM-39 que poseían las fuerzas argentinas y el Teniente de Navío Luís Collavino (en apoyo de radar) y cuatro A-4C Skyhawk armados con tres bombas retardadas por paracaídas de 250 kilogramos cada una, Grupo 4 de Caza con indicativo "Zonda", comandados por los Primeros Tenientes, José Daniel Vázquez (avión C-301) y Ernesto Ureta (avión C-321), Omar Jesús Castillo (avión C-310) y el Alférez Gerardo Guillermo Isaac (avión C-318).</p>
              <p class="creacioncolectivatextos-taverna">Una vez disparado el Exocet (este habría impactado en la base de la torre de mando), los cuatro A-4C, (Ureta e Isaac a la derecha y Castillo y Vázquez a la izquierda), se lanzaron convergiendo casi en línea sobre la estela del misil, vieron una columna de humo en el horizonte. Cerca del blanco, un misil (posiblemente un Sea Dart) impactó en el avión del jefe de escuadrilla (Vázquez) la aeronave se partió en dos y se estrelló en el mar.</p>
              <p class="creacioncolectivatextos-taverna">Cinco segundos antes del lanzamiento de bombas, la artillería del buque impactó en el numeral 2 (Castillo), cuyo avión explotó. Parece que su motor cayó sobre la cubierta y resbaló hasta el hueco del ascensor de aviones, por donde entró e incendió su interior.</p>
              <p class="creacioncolectivatextos-taverna">Los dos aviones restantes estaban también alcanzando el objetivo, que ya se cubría de humo.</p>
              <p class="creacioncolectivatextos-taverna">Ambos lanzaron sus bombas sobre la cubierta. Con posterioridad al ataque, Ureta e Isaac se reabastecieron en vuelo y se dirigieron a la Base Aérea Militar Río Grande. La operación duró cuatro horas. El gobierno británico niega este ataque, pero decretó un acta de secreto militar sobre el tema del HMS Invencible por 99 años.</p>
              <p class="creacioncolectivatextos-taverna">En homenaje a este HÉROE, es que la Avenida donde se encuentra ubicado el casco de la Residencia Cosquín de IOSFA, lleva su nombre “AVENIDA CAPITÁN AVIADOR OMAR JESÚS CASTILLO”, contando con la plaza construida en su memoria, frente al ingreso principal de la Residencia.</p>

        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p class="bajada-taverna"><strong>Autor:</strong> Jéssica Taverna</p>
              <p class="bajada-taverna"><strong>Lugar de residencia:</strong> Cosquín, Prov. de Córdoba</p>
              <p class="bajada-taverna"><strong>Comentario:</strong> Fotografías del monumento y placas en homenaje al Capitán Aviador Omar Jesús Castillo, en la plaza “Héroes de Malvinas”, en la Ruta Nacional 38 N°282, ubicada sobre la Avenida Costanera Capitán Aviador Omar Jesús Castillo, a pocos metros de la entrada a la Residencia Cosquín de IOSFA, Prov. de Córdoba.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 


<div class="modal fade" id="Modal34" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
           <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Taverna/Taverna-01.jpg" alt="La fotografía muestra el monumento a los veteranos y caídos en Malvinas en Cosquín, que remata en la parte superior con el busto del Capitán Aviador Omar Jesús Castillo y detrás un mástil con la bandera argentina flameando." />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Taverna/Taverna-02.jpg" alt="La fotografía muestra al Capitán Aviador Omar Jesús Castillo abrazándose con otro camarada en la pista de un aeropuerto, con un avión de combate de fondo." />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Taverna/Taverna-03.jpg" alt="La fotografía muestra dos placas que se encuentran debajo del busto en homenaje al Capitán Aviador Omar Jesús Castillo."/>
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Taverna/Taverna-04.jpg" alt="La fotografía muestra una placa destacando la obtención de la “Curz de la Nación Argentina al Heróico Valor en Combate” en homenaje al Capitán Aviador Omar Jesús Castillo dedicada por sus amigos de la promoción 23° del Liceo Militar General Paz."/>
                  </div>
                </li>
                <li>
                  <div id="slide5">
                    <img class="cc-slide" src="galeria/Taverna/Taverna-05.jpg" alt="La fotografía muestra otra placa en reconocimiento al valor puesto en combate dedicada por el Centro de Veteranos de Guerra del Valle de Punilla y el pueblo de Cosquín a su héroe coscoíno que es símbolo del patriotismo argentino, el Capitán Aviador Omar Jesús Castillo."/>
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> Jéssica Taverna</p>
              <p><strong>Lugar de residencia:</strong> Cosquín, Prov. de Córdoba</p>
              <p><strong>Comentario:</strong> Fotografías del monumento y placas en homenaje al Capitán Aviador Omar Jesús Castillo, en la plaza “Héroes de Malvinas”, en la Ruta Nacional 38 N°282, ubicada sobre la Avenida Costanera Capitán Aviador Omar Jesús Castillo, a pocos metros de la entrada a la Residencia Cosquín de IOSFA, Prov. de Córdoba.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 


<div class="modal fade" id="Modal35" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div style="text-align: center">
           <div class="swiffy-slider  slider-nav-outside slider-item-snapstart slider-nav-autoplay slider-nav-autopause">
              <ul class="slider-container">
                <li>
                  <div id="slide1">
                    <img class="cc-slide" src="galeria/Masulli/Masulli-01.jpg" alt="30 años: En la fotografía de la pintura se muestra a un soldado llorando al recordar a sus camaradas caídos en la guerra." />
                  </div>
                </li>
                <li>
                  <div id="slide2">
                    <img class="cc-slide" src="galeria/Masulli/Masulli-02.jpg" alt=": Héroe: En la fotografía se observa a un soldado caído en símbolo de todos los soldados caídos durante el combate" />
                  </div>
                </li>
                <li>
                  <div id="slide3">
                    <img class="cc-slide" src="galeria/Masulli/Masulli-03.jpg" alt="No eran chicos: La fotografía de la pintura refleja los distintos combates que tuvieron lugar en las Islas Malvinas."/>
                  </div>
                </li>
                <li>
                  <div id="slide4">
                    <img class="cc-slide" src="galeria/Masulli/Masulli-04.jpg" alt="No llores patria mía: La fotografía de la pintura muestra la cara de una estatua llorando simbolizando el dolor del país por los caídos durante la guerra."/>
                  </div>
                </li>
                <li>
                  <div id="slide5">
                    <img class="cc-slide" src="galeria/Masulli/Masulli-05.jpg" alt="Homenaje al camarada: La fotografía de la pintura muestra un ojo llorando reflejando el dolor de los sobrevivientes de la Guerra."/>
                  </div>
                </li>
              </ul>
              <button type="button" class="slider-nav"></button>
              <button type="button" class="slider-nav slider-nav-next"></button>
              <ul class="slider-indicators">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p><strong>Autor:</strong> CN (R) Cosme Adam Masulli</p>
              <p><strong>Lugar de residencia:</strong> Acassuso, Prov. Bs. As.</p>
              <p><strong>Comentario:</strong> Son distintas pinturas que muestran de una forma artística lo que fue la Guerra de Malvinas.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 



<!-- ============================== -->
<!-- FIN DE LOS MODAL DE LA GALERIA -->
<!-- ============================== -->


<?php
include 'footer.php';
?>