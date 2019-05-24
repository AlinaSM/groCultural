<?php

namespace GroCultural\Http\Controllers;

use GroCultural\Tradicion;
use GroCultural\TipoTradicion;
use GroCultural\Estado;
use GroCultural\Region;
use GroCultural\Municipio;
use GroCultural\MunicipioHasTradicion;
use Illuminate\Http\Request;

class TradicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tradicion.index');
    }


    public function asignarLugarView( $id )
    {
        session_start();
        $tradicion  =  Tradicion::where( 'id_tradicion', $id )->get()[0];
       
        return view('tradicion.asignar', compact('tradicion'));
    }

    public function asignarUnLugar($idTradicion, $idMunicipio){
        $listadepares = MunicipioHasTradicion::where( 'id_tradicion' , $idTradicion )->where( 'id_municipio' , $idMunicipio )->get();

        if( count($listadepares) == 0 ) {
            $municipio_has_tradicion = new MunicipioHasTradicion();

            $municipio_has_tradicion->id_tradicion    = $idTradicion; 
            $municipio_has_tradicion->id_municipio = $idMunicipio; 

            $municipio_has_tradicion->save();
        }
       
        return "Ya esta registrado";
    }

    public function tasks() 
    { 
        session_start();
        $tradiciones = Tradicion::where( 'disponibilidad', 'Disponible' )->get();
        return view('tradicion.tasks', compact('tradiciones'));
    }

    public function tablaTradicionesByTipo($id) 
    { 
        session_start();
        
        $tradiciones = Tradicion::where( 'id_tipo_tradicion', $id )->where( 'disponibilidad', 'Disponible' )->get();
        
        $cadena = "<table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Fechas</th>
                <th>Tipo</th>
                <th>Operaciones</th>
            </tr>
        </thead> <tbody>";

        foreach($tradiciones as $tradicion){

            $tipo  = TipoTradicion::where( 'id_tipo_tradicion', $tradicion->id_tipo_tradicion)->where( 'disponibilidad', 'Disponible' )->get()[0];
           
        
                $cadena = $cadena ."<tr>
                    <td> $tradicion->id_tradicion </td>
                    <td> $tradicion->nombre  </td>
                    <td> $tradicion->fecha_festejo  </td>
                    <td> $tipo->nombre  </td>
                    <td> 
                        <a href='/tradiciones/$tradicion->id_tradicion/edit' class='btn tooltipped' data-position='bottom' data-tooltip='Modificar'><i class='material-icons'>cached</i></a>
                        <a href='/admin/tradiciones/show/$tradicion->id_tradicion' class='btn tooltipped red darken-4' data-position='bottom' data-tooltip='Eliminar'><i class='material-icons'>delete_forever</i></a>
                        <a href='/admin/tradiciones/asignar/$tradicion->id_tradicion' class='btn tooltipped' data-position='bottom' data-tooltip='Asignar lugar'>Asignar</a>
                    </td>
                </tr> ";
            
            
        }
        
        return $cadena . " </tbody> </table>";
         
    }
    

    public function tablaMunicipios($id) 
    { 
        session_start();
        $listadepares = MunicipioHasTradicion::where( 'id_tradicion' , $id )->orderBy('id_municipio', 'desc')->get();

        
        $cadena = "<table>  <thead>  <tr>   <th>Municipio</th>  </tr>  </thead> <tbody>";

        foreach($listadepares as $elemento){

            $municipio  = Municipio::where( 'id_municipio', $elemento->id_municipio)->where( 'disponibilidad', 'Disponible' )->get()[0];
            $cadena = $cadena ."<tr>   <td> $municipio->nombre </td> </tr> ";
        }
        
        return $cadena . " </tbody> </table>";
      
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session_start();
        $tiposTradiciones = TipoTradicion::where( 'disponibilidad', 'Disponible' )->get();
        return view('tradicion.create', compact('tiposTradiciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();

        if( $request->hasFile('imagen') ){
            $fileMapa = $request->file('imagen');
            $nameImagen = time().$fileMapa->getClientOriginalName();
            $pathImagen = '/images/tradiciones';
            $fileMapa->move(public_path($pathImagen), $nameImagen);
        }

        
        $tradicion = new Tradicion();
        
        $tradicion->nombre = $request->input('nombre'); 
        $tradicion->descripcion = $request->input('descripcion'); 
        $tradicion->fecha_festejo = $request->input('fecha_festejo'); 
        $tradicion->id_tipo_tradicion = $request->input('tipo');
        $tradicion->imagen = $pathImagen . '/'.$nameImagen ; 
        $tradicion->disponibilidad = "Disponible";

        $tradicion->save();
        $op = 'Se ha ingresado correctamente una nueva tradicion';
        return view('admin.confirmar', compact('op'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
