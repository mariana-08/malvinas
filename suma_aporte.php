<?php
    include 'header.php';
?>
<section class="suma_aporte">
     <h1 class="text-center" >Envío de material</h1> <br>
<div class="container">
    <p>Esta muestra es dinámica y la vamos conformando con el aporte de quienes se suman. Hemos organizado los materiales recibidos en áreas temáticas: fotos, arte, textos literarios, ensayos, canciones, videos y misceláneas. Los trabajos tienen que ser propios, no necesariamente inéditos, pero sí relacionados con Malvinas. Cada aporte es sumamente valioso y una pieza necesaria para preservar la memoria de este hecho histórico que nos interpela a todos y a todas.</p>
    <p>Invitamos a todas las personas que quieran sumar material a completar con sus datos para que podamos contactarnos por correo electrónico para el envío de los archivos.</p>
    <div class="row">
        <div class="col-lg-12">
        <div class="card shadow-lg celeste">       
        <div class="card-body" style="color:black!important">
         <form id="formulario-contacto" action="test/procesar.php" method="POST" class="needs-validation formulario-contacto" novalidate>                 
            <p><strong>Datos personales:</strong></p>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="" value="" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="apellido">Apellido</label>
                    <input name="apellido" type="text" class="form-control" id="apellido" placeholder="" value="" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                    <label for="dni">DNI</label>
                    <input name="dni" type="text" class="form-control" id="dni" placeholder="" value="" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Complete el campo.</div>    
                    </div> 
                    <div class="col-md-4 mb-3">
                    <label for="telefono">Teléfono</label>
                    <input name="telefono" type="tel" class="form-control" id="telefono" placeholder="" value="" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="correoelectronico">Correo electrónico</label>
                    <input name="correoelectronico" type="email" class="form-control" id="correoelectronico" placeholder="" value="" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
                </div>
                 
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                    <label for="localidad">Localidad</label>
                    <input name="localidad" type="text" class="form-control" id="localidad" placeholder="" value="" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="provincia">Provincia</label>
              	    <div class="inputGroupContainer">
                      <input name="provincia" type="text" class="form-control" id="provincia" placeholder="" value="" required>
                    </div>
                     <div class="valid-feedback"></div>
                     <div class="invalid-feedback">Complete el campo.</div>  
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="pais">País</label>
                    <input name="pais" type="text" class="form-control" id="pais" placeholder="" value="" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Complete el campo.</div>    
                    </div>                
                </div>

                <p><strong>Mi aporte:</strong></p>
                <div class="form-row">
                    <div class="col-md-6 mb-3">                    
              	    <div class="inputGroupContainer">
                      <select name="aporte" type="text" class="form-control" id="aporte" placeholder="" value="" required>
                        <option value="" selected="selected">Seleccione área temática</option>
                        <option value="fotos">Fotos</option>
                        <option value="dibujo">Ilustraciones, pinturas y esculturas</option>
                        <option value="texto">Textos literarios</option>
                        <option value="Monografías">Monografías</option>
                        <option value="Ensayos">Ensayos</option>
                        <option value="Canciones">Canciones</option>
                        <option value="cartas">Cartas, telegramas y objetos de la época</option>
                        <option value="videos">Videos</option>
                        <option value="comentarios">Comentarios</option>
                      </select>
                    </div>  
                    </div>                  
                  <div class="col-md-6 mb-3"> 
                      <div class="inputGroupContainer">
                        <input class="form-check-input" type="checkbox" name="tarch" data-val="Tengo archivo temático para enviar" and value="Tengo archivo temático para enviar" id="tarch invalid-feedback" required>
                        <label class="form-check-label" for="invalidCheck">Tengo archivo temático para enviar (nos contactaremos por correo electrónico para el envío de los archivos).</label>
                        </div>
                        <div class="valid-feedback">¡Aceptado!</div>                    
                    </div>
                </div>   

                 <div class="form-row">
                    <div class="col-md-12  col-xs-12">
                      <label for="mensaje">Mensaje</label>
                      <input name="mensaje" type="text" class="form-control" id="mensaje" placeholder="Escribinos tu mensaje" required>
                      <div class="valid-feedback"></div>
                      <div class="invalid-feedback">Por favor, ingrese un mensaje.</div>
                    </div>
                 </div>           
                <div class="form-group">
                    <button id="botonloco" class="btn btn-primary" type="submit">Enviar</button>
                </div>                  
                <div id="alerta" class="alert collapse" >
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color:#191919">&times;</button>
                    <strong class="respuesta"></strong><span class="mensaje-alerta"></span>
                </div>                  
        </form>
    </div>   
    </div>
    </div>       
    </div>  
</div>
</section> 

  <?php
    include 'footer.php';
  ?>