<?php

namespace GroCultural\Http\Controllers;

use GroCultural\Religion;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $religiones = Religion::where( 'disponibilidad', 'Disponible' )->get();
        return view('religion.index', compact('religiones'));
    }

    public function tasks() 
    { 
        session_start();
        $religiones = Religion::where( 'disponibilidad', 'Disponible' )->get();
        return view('religion.tasks', compact('religiones'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session_start();
        return view('religion.create');
    }

    public function getInfo( $id ){
        $lenguajes = Religion::where( 'id_religion', $id )->where( 'disponibilidad', 'Disponible' )->get();

        $arrayElements = array();
        foreach($lenguajes as $lenguaje){
            array_push($arrayElements, array( 'id' => $lenguaje->id_religion , 'religion' => $lenguaje->nombre , 'descripcion' => $lenguaje->descripcion ) );   
        }

        echo json_encode($arrayElements);
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
        $religion = new Religion();
        
        $religion->nombre = $request->input('nombre'); 
        $religion->descripcion = $request->input('descripcion'); 
        $religion->disponibilidad = "Disponible";

        $religion->save();

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
        session_start();
        
        $religion  =  Religion::where( 'id_religion', $id )->get();
        $religion = $religion[0];
        return view('religion.show',compact('religion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        session_start();
        $religion  =  Religion::where( 'id_religion', $id )->get();
        $religion = $religion[0];
        return view('religion.edit', compact('religion'));
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
        session_start();
        $religiones = Religion::find($id);
        //$estados->fill($request->except('imagen_estado','imagen_escudo'));
        
        $religiones->nombre = $request->input('nombre'); 
        $religiones->descripcion = $request->input('descripcion'); 
        $religiones->disponibilidad = "Disponible";

        $religiones->save();

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
        $religion = Religion::find($id);
        $religion->disponibilidad = "noDisponible";
        $religion->save();
        $op = 'Se ha eliminado el registro correctamente';
        return view('admin.confirmar', compact('op'));
    }
}
