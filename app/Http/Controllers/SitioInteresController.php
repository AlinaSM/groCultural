<?php

namespace GroCultural\Http\Controllers;

use Illuminate\Http\Request;
use GroCultural\TipoSitioInteres;
use GroCultural\SitioInteres;

class SitioInteresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('sitios.index');
    }

    public function tasks() 
    { 
        session_start();
     
        return view('sitios.tasks');
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session_start();
     
        return view('sitios.create');
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
            $pathImagen = '/images/intereses';
            $fileMapa->move(public_path($pathImagen), $nameImagen);
        }

        
        $sitio = new SitioInteres();
        
        $sitio->nombre = $request->input('nombre'); 
        $sitio->horario = $request->input('horario'); 
        $sitio->direccion = $request->input('direccion'); 
        $sitio->descripcion_general = $request->input('descripcion_general'); 
        $sitio->id_municipio = $request->input('Municipio');
        $sitio->id_tipo_interes = $request->input('tipo');
        $sitio->imagen = $pathImagen . '/'.$nameImagen ; 
        $sitio->disponibilidad = "Disponible";

        $sitio->save();
        $op = 'Se ha ingresado correctamente un nuevo sitio de interes';
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
