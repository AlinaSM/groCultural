<?php

namespace GroCultural\Http\Controllers;

use GroCultural\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region = Region::all();
        return view('region.index', compact('region'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('region.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( $request->hasFile('mapa')){
            $fileMapa = $request->file('mapa');
            $nameMapa = time().$fileMapa->getClientOriginalName();
            $pathMapas = '/images/mapas';
            $fileMapa->move(public_path($pathMapas), $nameMapa);
            
        }
        
        $region = new Region();
        
        $region->nombre = $request->input('nombre'); 
        $region->capital = $request->input('capital_regional'); 
        $region->extension_territorial = $request->input('extension_territorial'); 
        $region->ubicacion_geografica = $request->input('ubicacion_geografica'); 
        $region->numero_habitantes = $request->input('numero_habitantes');
        $region->numero_municipios = $request->input('numero_municipios');
        $region->descripcion = $request->input('descripcion'); 
        $region->imagen_estado = $pathMapas . '/'.$nameMapa ; 

        $region->save();
        return "Region save!";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('region.index');
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
