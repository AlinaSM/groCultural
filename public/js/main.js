

$(document).ready(function(){
  $('#idEstado').val(0);
  recargarLista();
  $('#idEstado').change(function(){
    recargarLista();
  });
});

function recargarLista(){
  let valor = $('#idEstado').val();
  $.ajax({
      type: "GET",
      url: "/regiones/regionesByEstado/"+ valor,    
      success : function(r){
          $('#mostrarRegiones').html(r);
      }

  })
}
