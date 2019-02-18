<?php

namespace GroCultural\Http\Controllers;

use GroCultural\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all();
        return view('estado.index', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('imagen_estado') && $request->hasFile('imagen_escudo')){
            $fileEstado = $request->file('imagen_estado');
            $fileEscudo = $request->file('imagen_escudo');

            $nameEstado = time().$fileEstado->getClientOriginalName();
            $nameEscudo = time().$fileEscudo->getClientOriginalName();

            $pathMapas = '/images/mapas';
            $pathEscudos = '/images/escudos';
            

            $fileEstado->move(public_path($pathMapas), $nameEstado);
            $fileEscudo->move(public_path($pathEscudos), $nameEscudo);
            
        }
        
        $estado = new Estado();
        
        $estado->nombre = $request->input('nombre'); 
        $estado->gentilicio = $request->input('gentilicio'); 
        $estado->capital = $request->input('capital'); 
        $estado->extension_territorial = $request->input('extension_territorial'); 
        $estado->num_habitantes = $request->input('num_habitantes');
        $estado->numero_municipios = $request->input('numero_municipios'); 
        $estado->descripcion = $request->input('descripcion'); 
        $estado->imagen_estado = $pathMapas . '/'.$nameEstado ; 
        $estado->imagen_escudo = $pathEscudos . '/'.$nameEscudo ; 

        $estado->save();
        return "Save!";
        
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
