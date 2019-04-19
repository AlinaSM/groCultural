<?php

namespace GroCultural\Http\Controllers;

use GroCultural\Region;
use GroCultural\Estado;
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

    public function tasks() 
    { 
        session_start();
        $regiones = Region::all();
        $estados = Estado::all();
        return view('region.tasks', compact('regiones', 'estados'));
    }
    
    public function regionesByEstado($id) 
    { 
        session_start();
        
        $regiones = Region::where( 'id_estado', $id )->where( 'disponibilidad', 'Disponible' )->get();
        
        $cadena = "<table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Capital Regional</th>
                <th>Descripcion</th>
                <th>Ext. Territorial</th>
                <th>Ubicacion Geografica</th>
                <th># Municipios</th>
                <th># Habitantes</th>
                <th>Operaciones</th>
            </tr>
        </thead> <tbody>";

        foreach($regiones as $region){
        $cadena = $cadena ."<tr>
                                <td> $region->id_region </td>
                                <td> $region->nombre  </td>
                                <td> $region->capital_regional  </td>
                                <td> $region->descripcion  </td>
                                <td> $region->extension_territorial  </td>
                                <td> $region->ubicacion_geografica  </td>
                                <td> $region->numero_municipios  </td>
                                <td> $region->numero_habitantes  </td>
                                
                                <td> 
                                    <a href='/regiones/$region->id_region/edit' class='btn tooltipped' data-position='bottom' data-tooltip='Modificar'><i class='material-icons'>cached</i></a>
                                    <a href='/admin/regiones/show/ $region->id_region' class='btn tooltipped red darken-4' data-position='bottom' data-tooltip='Eliminar'><i class='material-icons'>delete_forever</i></a>
                                </td>
                            </tr>
                            ";
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
        $estados  =  Estado::all();
        return view('region.create',compact('estados'));
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
        if( $request->hasFile('mapa')){
            $fileMapa = $request->file('mapa');
            $nameMapa = time().$fileMapa->getClientOriginalName();
            $pathMapas = '/images/mapas';
            $fileMapa->move(public_path($pathMapas), $nameMapa);
            
        }
        
        $region = new Region();
        
        $region->nombre = $request->input('nombre'); 
        $region->capital_regional = $request->input('capital_regional'); 
        $region->extension_territorial = $request->input('extension_territorial'); 
        $region->ubicacion_geografica = $request->input('ubicacion_geografica'); 
        $region->numero_habitantes = $request->input('numero_habitantes');
        $region->numero_municipios = $request->input('numero_municipios');
        $region->descripcion = $request->input('descripcion'); 
        $region->mapa = $pathMapas . '/'.$nameMapa ; 
        $region->id_estado = $request->input('Estado'); 
        $region->disponibilidad = "Disponible";

        $region->save();
        $op = 'Se ha ingresado correctamente una nueva region';
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
        $data = array();
        $data['region']  =  Region::where( 'id_region', $id )->get();
        $data['estado']  =  Estado::where( 'id_estado', $data['region'][0]->id_estado )->get();
        return view('region.show',compact('data'));
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

        $data = array();
        $regiones = Region::all();

        foreach($regiones as $region){
            if( $region->id_region == $id){
                $data['region']  =  $region;
                $data['estado']  =  Estado::where( 'id_estado', $region->id_estado )->get();
                $data['estados'] =  Estado::all();
                return view('region.edit',compact('data'));
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
        session_start();
        
        $region = Region::find($id);
        
        $region->nombre = $request->input('nombre'); 
        $region->capital_regional = $request->input('capital_regional'); 
        $region->extension_territorial = $request->input('extension_territorial'); 
        $region->ubicacion_geografica = $request->input('ubicacion_geografica'); 
        $region->numero_habitantes = $request->input('numero_habitantes');
        $region->numero_municipios = $request->input('numero_municipios');
        $region->descripcion = $request->input('descripcion'); 
        $region->disponibilidad = "Disponible";
        $region->id_estado = $request->input('Estado'); 

        if($request->hasFile('mapa')){
            
            \File::delete( public_path(). $region->mapa );
            $file = $request->file('mapa');
            $name = time().$file->getClientOriginalName();
            $region->mapa = '/images/mapas/'.$name;
            $file->move(public_path('/images/mapas'), $name);
        }

        $region->save();

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

        $region = Region::find($id);
        $region->disponibilidad = "noDisponible";
        $region->save();
        $op = 'Se ha eliminado el registro correctamente';
        return view('admin.confirmar', compact('op'));

        
    }
}
