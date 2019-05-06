<?php

namespace GroCultural\Http\Controllers;

use GroCultural\Estado;
use GroCultural\Region;
use GroCultural\Municipio;

use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('municipio.index');
    }

    public function tasks() 
    { 
        session_start();
        //$regiones = Region::all();
        $estados = Estado::all();
        return view('municipio.tasks', compact( 'estados'));
    }

    public function tablaMunicipiosByRegion( $idRegion ){
        session_start();
        
        $municipios = Municipio::where( 'id_region', $idRegion )->where( 'disponibilidad', 'Disponible' )->get();
        
        $cadena = "<table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Nombre</th>
                <th>Clima</th>
                <th>Operaciones</th>
            </tr>
        </thead> <tbody>";

        foreach($municipios as $municipio){
        $cadena = $cadena ."<tr>
                                <td> $municipio->id_municipio </td>
                                <td> $municipio->nombre  </td>
                                <td> $municipio->clima  </td>
                                <td> $municipio->numero_habitantes  </td>
       
                                <td> 
                                    <a href='/municipios/$municipio->id_municipio/edit' class='btn tooltipped' data-position='bottom' data-tooltip='Modificar'><i class='material-icons'>cached</i></a>
                                    <a href='/admin/municipios/show/ $municipio->id_municipio' class='btn tooltipped red darken-4' data-position='bottom' data-tooltip='Eliminar'><i class='material-icons'>delete_forever</i></a>
                                </td>
                            </tr>";
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
        return view('municipio.create');//
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
       
        if( $request->hasFile('mapa') && $request->hasFile('escudo') ){
            $fileMapa = $request->file('mapa');
            $nameMapa = time().$fileMapa->getClientOriginalName();
            $pathMapas = '/images/mapas';
            $fileMapa->move(public_path($pathMapas), $nameMapa);


            $fileEscudo = $request->file('escudo');
            $nameEscudo = time().$fileEscudo->getClientOriginalName();
            $pathEscudo = '/images/escudos';
            $fileEscudo->move(public_path($pathEscudo), $nameEscudo);
        }

        
        $municipio = new Municipio();
        
        $municipio->nombre = $request->input('nombre'); 
        $municipio->clima = $request->input('clima'); 
        $municipio->numero_habitantes = $request->input('numero_habitantes'); 
        $municipio->historia_general = $request->input('historia_general'); 
        $municipio->id_region = $request->input('Region');
        $municipio->mapa = $pathMapas . '/'.$nameMapa ; 
        $municipio->escudo = $pathEscudo . '/'.$nameEscudo ;    
        $municipio->disponibilidad = "Disponible";

        $municipio->save();
        $op = 'Se ha ingresado correctamente un nuevo municipio';
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
        
        $municipio =  Municipio::where( 'id_municipio', $id )->get();
        $region    =  Region::where( 'id_region', $municipio[0]->id_region )->get();
        $estado    =  Estado::where( 'id_estado', $region[0]->id_estado )->get();

        $municipio =  $municipio[0];
        $region    =  $region[0];
        $estado    =  $estado[0];
        
        return view('municipio.show',compact('municipio', 'region', 'estado'));
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
        
        $municipio = Municipio::find($id);
        $municipio->disponibilidad = "noDisponible";
        $municipio->save();
        $op = 'Se ha eliminado el registro correctamente';
        return view('admin.confirmar', compact('op'));
    }
}
