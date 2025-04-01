$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'php/cargar_prov.php'
  })
  .done(function(listas_rep){
    $('#prov').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las provincias')
  })

  $('#prov').on('change', function(){
    var prov = $('#prov').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargar_zona.php',
      data: {'prov': prov}
    })
    .done(function(listas_rep){
      $('#zona').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar los zonas')
    })
  })
    
    $('#zona').on('change', function(){
    var zon = $('#zona').val()
    var prov = $('#prov').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargar_vacunatorio.php',
      data: {'zon':zon,'prov':prov}
    })
    .done(function(listas_rep){
      $('#comercio').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar los vacunatorios')
    })
  })
        

})