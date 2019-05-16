$(document).ready(function(){

  $('#agregarMunicipioLenguaje.waves-effect.waves-light.btn').click(function(){
    altaDeMunicipioHasLenguaje();
  });


  $('#idEstado').val(0);
  $('#idTipoSitio').val(0);

  recargarTablaDeRegionesByEstado();
  recargarSelectConEstados();
  recargarSelectConRegiones();
  recargarSelectConTiposSitios();
  recargarSelectConMunicipiosByRegiones();


  $('#idEstado').change(function(){
    recargarTablaDeRegionesByEstado();
    recargarSelectConRegiones();
  });

  $('#idTipoSitio').change(function(){
    recargarTablaSitios();
  });

 

  $('#selectRegionesByEstado').change(function(){
    recargarSelectConMunicipiosByRegiones();
    recargarTablaDeMunicipiosByRegiones();
  });


  coleccionMunicipioHasLenguajes();

});

function recargarTablaDeRegionesByEstado(){
  let valor = $('#idEstado').val();
  $.ajax({
      type: "GET",
      url: "/regiones/tablaRegionesByEstado/"+ valor,    
      success : function(r){
          $('#mostrarRegiones').html(r);
      }

  })
}


function recargarTablaDeMunicipiosByRegiones(){
  
  let valor = $('#selectRegionesByEstado').val();
  $.ajax({
      type: "GET",
      url: "/municipios/tablaMunicipiosByRegion/"+ valor,    
      success : function(r){
        console.log(r);
          $('#mostrarTablaMunicipios').html(r);
          console.log(r);
      }

  })
}


function recargarTablaSitios(){
  let valor = $('#idTipoSitio').val();
  $.ajax({
    type: 'GET',
    url: '/sitios/tablaMostrarTasks/'+valor,
    success:function(response){
      $('#mostrarTablaSitios').html(response);
    }
  });
}

function recargarSelectConTiposSitios(){
  $.ajax({
    type:"GET",
    url:"/tipositios/getAll" ,
    success:function(r){
      let datos = JSON.parse(r);			
     
      var selectElemento = document.getElementById( 'idTipoSitio' );
      selectElemento.length=0;	
      selectElemento.options[0] = new Option('Elige un tipo','');
      selectElemento.selectedIndex = 0;
      
      for (var i=0; i<datos.length; i++) {
        selectElemento.options[selectElemento.length] = new Option(datos[i]['tipoSitio'], datos[i]['id']);
      }	
      $("#idTipoSitio").material_select();
    
      console.log(datos);
    }
  });
}


function recargarSelectConEstados(){
  $.ajax({
    type:"GET",
    url:"/estados/getAll" ,
    success:function(r){
      let datos = JSON.parse(r);			
      
      var selectElemento = document.getElementById( 'idEstado' );
      selectElemento.length=0;	
      selectElemento.options[0] = new Option('Elige un Estado','');
      selectElemento.selectedIndex = 0;
      
      for (var i=0; i<datos.length; i++) {
        selectElemento.options[selectElemento.length] = new Option(datos[i]['estado'], datos[i]['id']);
      }	
      $("#idEstado").material_select();
    
      //console.log(datos);
    }
  });
}

function recargarSelectConRegiones(){
  let valor = $('#idEstado').val();
  $.ajax({
    type:"GET",
    url:"/regiones/regionesByEstado/" + valor,
    success:function(r){
      let datos = JSON.parse(r);			
      
      var selectElemento = document.getElementById( 'selectRegionesByEstado' );
      selectElemento.length=0;	
      selectElemento.options[0] = new Option('Elige una Region','');
      selectElemento.selectedIndex = 0;
      
      for (var i=0; i<datos.length; i++) {
        selectElemento.options[selectElemento.length] = new Option(datos[i]['region'], datos[i]['id']);
      }	
      $("#selectRegionesByEstado").material_select();
    
    }
  });
}


function recargarSelectConMunicipiosByRegiones(){
  let valor = $('#selectRegionesByEstado').val();
  $.ajax({
    type:"GET",
    url:"/municipios/getByRegiones/" + valor,
    success:function(r){
      let datos = JSON.parse(r);			
      
      var selectElemento = document.getElementById( 'selectMunicipiosByRegiones' );
      selectElemento.length=0;	
      selectElemento.options[0] = new Option('Elige un municipio','');
      selectElemento.selectedIndex = 0;
      
      for (var i=0; i<datos.length; i++) {
        selectElemento.options[selectElemento.length] = new Option(datos[i]['municipio'], datos[i]['id']);
      }	
      $("#selectMunicipiosByRegiones").material_select();
    
    }
  });
}


function altaDeMunicipioHasLenguaje(){
  let idLenguaje = $('#idLenguaje').val();
  let idMunicipio = $('#selectMunicipiosByRegiones').val();

  $.ajax({
    type: "GET",
    url: "/asignarlenguajes/lenguaje/"+ idLenguaje +"/municipio/"+idMunicipio,
    success:function(r){
      alert(r);
    }
  });
}

function coleccionMunicipioHasLenguajes(){
  let idLengua = $('#idLenguaje').val();
  $.ajax({
    type: "GET",
    url: "/admin/lenguajes/coleccionDeLugares/"+ $idLengua,
    success:function(r){
      alert(idLengua);
      //$('#prueba').html(r);
    }
  });
}