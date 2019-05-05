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

    public function tasks() 
    { 
        session_start();
        $estados = Estado::all();
        return view('estado.tasks', compact('estados'));
    }


    public function getAllElements(){
        $estados = Estado::where( 'disponibilidad', 'Disponible' )->get();
        // $estados = Region::where( 'id_estado', $id )->where( 'disponibilidad', 'Disponible' )->get();

        $array = array();
        foreach($estados as $registro){
            array_push($array, array( 'id' => $registro->id_estado , 'estado' => $registro->nombre ) );   
        }

        echo json_encode($array);
    }



    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session_start();
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
        session_start();   
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

        $op = 'Se ha dado de alta correctamente el registro';
        return view('admin.confirmar', compact('op'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $op = null)
    {
        session_start();
        $estados = Estado::all();

        foreach($estados as $estado){
            if( $estado->id_estado == $id){
                return view('estado.show',compact('estado'));
            }
        }
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
        $estados = Estado::all();
       
        foreach($estados as $estado){
            if( $estado->id_estado == $id){
                return view('estado.edit',compact('estado'));
            }
        }
        
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
        $estados = Estado::find($id);
        //$estados->fill($request->except('imagen_estado','imagen_escudo'));
        
        $estados->nombre = $request->input('nombre'); 
        $estados->gentilicio = $request->input('gentilicio'); 
        $estados->capital = $request->input('capital'); 
        $estados->extension_territorial = $request->input('extension_territorial'); 
        $estados->num_habitantes = $request->input('num_habitantes');
        $estados->numero_municipios = $request->input('numero_municipios'); 
        $estados->descripcion = $request->input('descripcion'); 

        if($request->hasFile('imagen_estado')){
            
            \File::delete( public_path(). $estados->imagen_estado );
            $file = $request->file('imagen_estado');
            $name = time().$file->getClientOriginalName();
            $estados->imagen_estado = '/images/mapas/'.$name;
            $file->move(public_path('/images/mapas'), $name);
        }


        
        if($request->hasFile('imagen_escudo')){
            \File::delete( public_path(). $estados->imagen_escudo );
            $file = $request->file('imagen_escudo');
            $name = time().$file->getClientOriginalName();
            $estados->imagen_escudo = '/images/escudos/'.$name;
            $file->move(public_path('/images/escudos'), $name);
            
        }
        $estados->save();

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
        $estados = Estado::find($id);
        $file_path_escudo = public_path(). $estados->imagen_escudo;
        $file_path_estado = public_path(). $estados->imagen_estado;
        
        \File::delete( $file_path_escudo );
        \File::delete( $file_path_estado );
        
        $estados->delete();
        $op = 'Se ha eliminado el registro correctamente';
        return view('admin.confirmar', compact('op'));
        
    }
}
