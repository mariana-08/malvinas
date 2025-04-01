<footer>
  <div class="footer-iosfa-desktop">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="https://iosfa.gob.ar">
            <img class="iosfa-logo-footer" src="imagenes/lg-horizontal-bl.svg" alt="Logo IOSFA"> </a>
        </div>
        <div class=" col-md-4">
          <p class="centro" align="center"><strong> Paso 551, Ciudad Autónoma de Buenos Aires, Argentina</strong> </p>
          <p class="centro" align="center">
            <a class="rrss" href="https://www.instagram.com/iosfa_oficial/" target="_blank"> <img src="imagenes/instagram.svg" alt="imagen de Instagram con vinculo"> </a>
            <a class="rrss" href="https://www.facebook.com/IOSFA" target="_blank"><img src="imagenes/facebook.svg" alt="imagen de facebook con vinculo"> </a>
            <a class="rrss" href="https://twitter.com/IOSFAoficial" target="_blank"><img src="imagenes/twitter.svg" alt="imagen de twitter con vinculo"></a>
            <a class="rrss" href="https://www.youtube.com/c/IOSFAoficial" target="_blank"><img src="imagenes/youtube.svg" alt="imagen de youtube con vinculo"> </a>
          </p>
        </div>
        <div class=" col-md-4">
          <img class="md-logo" src="imagenes/lg-mindef.svg" alt="Imagen de logo de Ministerio de Defensa" />
        </div>
      </div>
    </div>
  </div>

  <div class="footer-iosfa-mobile">
    <div class="container">
      <div class="row">

        <div class="col-6">
          <a href="https://iosfa.gob.ar">
            <img class="iosfa-logo-footer" src="imagenes/lg-horizontal-bl.svg" alt="Logo IOSFA"> </a>
        </div>
        <div class=" col-6">
          <img class="md-logo" src="imagenes/lg-mindef.svg" alt="Imagen de logo de Ministerio de Defensa" />
        </div>
        <div class=" col-12">
          <p class="centro" align="center"><strong> Paso 551, Ciudad Autónoma de Buenos Aires, Argentina</strong> </p>
          <p class="centro" align="center">
            <a class="rrss" href="https://www.instagram.com/iosfa_oficial/" target="_blank"> <img src="imagenes/instagram.svg" alt="imagen de Instagram con vinculo"> </a>
            <a class="rrss" href="https://www.facebook.com/IOSFA" target="_blank"><img src="imagenes/facebook.svg" alt="imagen de facebook con vinculo"> </a>
            <a class="rrss" href="https://twitter.com/IOSFAoficial" target="_blank"><img src="imagenes/twitter.svg" alt="imagen de twitter con vinculo"></a>
            <a class="rrss" href="https://www.youtube.com/c/IOSFAoficial" target="_blank"><img src="imagenes/youtube.svg" alt="imagen de youtube con vinculo"> </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!---fin de footer----->
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top d-lg-none">
  <a class="btn btn-primary js-scroll-trigger" href="#page-top">
    <div class="fa fa-chevron-up"></div>
  </a>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/freelancer.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js'></script>
<script src="js/creacionColectiva.js"></script>
<script>

   // Example starter JavaScript for disabling form submissions if there are invalid fields
   (function() {
     'use strict';
     window.addEventListener('load', function() {
       // Fetch all the forms we want to apply custom Bootstrap validation styles to
       var forms = document.getElementsByClassName('needs-validation');
       // Loop over them and prevent submission
       var validation = Array.prototype.filter.call(forms, function(form) {
         form.addEventListener('submit', function(event) {
           if (form.checkValidity() === false) {
             event.preventDefault();
             event.stopPropagation();
           }
           form.classList.add('was-validated');
         }, false);
       });
     }, false);
   })();

   $(document).ready(function() {

     $(".formulario-contacto").bind("submit", function() {

       $.ajax({
         type: $(this).attr("method"),
         url: $(this).attr("action"),
         data: $(this).serialize(),
         success: function(respuesta) {
           if (respuesta == "ok") {
             $("#alerta").removeClass("collapse").removeClass("alert-danger").removeClass("alert-success").addClass("alert-success");
             $("#botonloco").addClass("collapse");
             $(".respuesta").html("Mensaje enviado correctamente.");
             $(".mensaje-alerta").html("<br>A la brevedad nos estaremos comunicando con usted.");

           } else {

             $("#alerta").removeClass("collapse").removeClass("alert-danger").removeClass("alert-success").addClass("alert-danger");
             $(".respuesta").html("Error al enviar.");
             $(".mensaje-alerta").html("<br>No se pudo enviar tu mensaje, complete todos los campos e intentalo de nuevo.");
           }
         },
         error: function() {

           $("#alerta").removeClass("collapse").removeClass("alert-danger").removeClass("alert-success").addClass("alert-danger");
           $(".respuesta").html("Error al enviar.");
           $(".mensaje-alerta").html("<br>No se pudo enviar tu mensaje, intentalo de nuevo en unos instantes.");

         }
       });

       return false;
     });
   });
 </script>

</html>