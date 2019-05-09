<?php

namespace GroCultural\Http\Controllers;

use GroCultural\Lenguaje;
use GroCultural\MunicipioHasLenguaje;
use Illuminate\Http\Request;

class LenguajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('lenguaje.index');
    }

    public function tasks() 
    { 
        session_start();
        $lenguajes = Lenguaje::where( 'disponibilidad', 'Disponible' )->get();
        return view('lenguaje.tasks', compact('lenguajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        session_start();
        return view('lenguaje.create');
    }

    public function coleccionDeLugares( $id ){
       // $region = Region::where('id_estado', 1)->get();

       
        return "<h1>holallalalalala</h1>";
        

    }


    public function asignarUnLugar($idLenguaje, $idMunicipio){
        $listadepares = MunicipioHasLenguaje::where( 'id_lengua' , $idLenguaje )->where( 'id_municipio' , $idMunicipio )->get();

        if( count($listadepares) == 0 ) {
            $municipio_has_lenguaje = new MunicipioHasLenguaje();

            $municipio_has_lenguaje->id_lengua    = $idLenguaje; 
            $municipio_has_lenguaje->id_municipio = $idMunicipio; 

            $municipio_has_lenguaje->save();
        }
       
        return "Ya esta registrado";
        
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
        $lenguaje = new Lenguaje();
        
        $lenguaje->nombre = $request->input('nombre'); 
        $lenguaje->descripcion = $request->input('descripcion'); 
        $lenguaje->disponibilidad = "Disponible";

        $lenguaje->save();

        $op = 'Se ha dado de alta correctamente el registro';
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
        session_start();
        $lenguaje  =  Lenguaje::where( 'id_lengua', $id )->get();
        $lenguaje = $lenguaje[0];
        return view('lenguaje.show',compact('lenguaje'));
    }


    public function asignarLugarView( $id )
    {
        session_start();
        $lenguaje  =  Lenguaje::where( 'id_lengua', $id )->get()[0];
        return view('lenguaje.asignar', compact('lenguaje'));
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
        session_start();
        $lenguaje  =  Lenguaje::where( 'id_lengua', $id )->get();
        $lenguaje = $lenguaje[0];
        return view('lenguaje.edit',compact('lenguaje'));
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
        session_start();
        $lenguaje = Lenguaje::find($id);
        //$estados->fill($request->except('imagen_estado','imagen_escudo'));
        
        $lenguaje->nombre = $request->input('nombre'); 
        $lenguaje->descripcion = $request->input('descripcion'); 
        $lenguaje->disponibilidad = "Disponible";

        $lenguaje->save();

        $op = 'Se ha modificado correctamente el registro';
        return view('admin.confirmar', compact('op'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session_start();
        $lenguaje = Lenguaje::find($id);
        $lenguaje->disponibilidad = "noDisponible";
        $lenguaje->save();
        $op = 'Se ha eliminado el registro correctamente';
        return view('admin.confirmar', compact('op'));
    }
}
