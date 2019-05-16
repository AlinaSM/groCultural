<?php

namespace GroCultural\Http\Controllers;

use Illuminate\Http\Request;

use GroCultural\SitioInteres;
use GroCultural\TipoSitioInteres;
use GroCultural\Estado;
use GroCultural\Region;
use GroCultural\Municipio;

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

    
    public function tablaSitiosDeInteresByTipo($id) 
    { 
        session_start();
        
        $sitios = SitioInteres::where( 'id_tipo_interes', $id )->where( 'disponibilidad', 'Disponible' )->get();

        //$sitio = SitioInteres::where( 'id_interes_cult', $id )->where( 'disponibilidad', 'Disponible' )->get()[0];
        
        
        
        $cadena = "<table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Horario</th>
                <th>Direccion</th>
                <th>Operaciones</th>
            </tr>
        </thead> <tbody>";

        foreach($sitios as $sitio){

            $tipo  = TipoSitioInteres::where( 'id_tipo_interes', $sitio->id_tipo_interes)->where( 'disponibilidad', 'Disponible' )->get()[0];
            $municipio = Municipio::where( 'id_municipio', $sitio->id_municipio )->where( 'disponibilidad', 'Disponible' )->get()[0];
            $region = Region::where( 'id_region', $municipio->id_region )->where( 'disponibilidad', 'Disponible' )->get()[0];
            $estado = Estado::where( 'id_estado', $region->id_estado )->where( 'disponibilidad', 'Disponible' )->get()[0];
            
            if($sitio || $tipo || $municipio || $region || $estado ){
                $cadena = $cadena ."<tr>
                    <td> $sitio->id_interes_cult </td>
                    <td> $sitio->nombre  </td>
                    <td> $sitio->horario  </td>
                    <td> $sitio->direccion  </td>
                    <td> 
                        <a href='/sitios/$sitio->id_interes_cult/edit' class='btn tooltipped' data-position='bottom' data-tooltip='Modificar'><i class='material-icons'>cached</i></a>
                        <a href='/admin/sitios/show/$sitio->id_interes_cult' class='btn tooltipped red darken-4' data-position='bottom' data-tooltip='Eliminar'><i class='material-icons'>delete_forever</i></a>
                    </td>
                </tr> ";
            }
            
        }
        
        return $cadena . " </tbody> </table>";
         
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
        session_start();

        $sitio = SitioInteres::where( 'id_interes_cult', $id )->where( 'disponibilidad', 'Disponible' )->get()[0];
        $tipo  = TipoSitioInteres::where( 'id_tipo_interes', $sitio->id_tipo_interes)->where( 'disponibilidad', 'Disponible' )->get()[0];
        $municipio = Municipio::where( 'id_municipio', $sitio->id_municipio )->where( 'disponibilidad', 'Disponible' )->get()[0];
        $region = Region::where( 'id_region', $municipio->id_region )->where( 'disponibilidad', 'Disponible' )->get()[0];
        $estado = Estado::where( 'id_estado', $region->id_estado )->where( 'disponibilidad', 'Disponible' )->get()[0];

        if($sitio || $tipo || $municipio || $region || $estado ){
            return view('sitios.show', compact('sitio', 'estado', 'region', 'municipio' ,'tipo'));
        }else{
            $op = 'Error al encontrar el registro';
            return view('admin.confirmar', compact('op'));  
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
        $sitio = SitioInteres::where( 'id_interes_cult', $id )->where( 'disponibilidad', 'Disponible' )->get()[0];
        $tipo  = TipoSitioInteres::where( 'id_tipo_interes', $sitio->id_tipo_interes)->where( 'disponibilidad', 'Disponible' )->get()[0];
        $municipio = Municipio::where( 'id_municipio', $sitio->id_municipio )->where( 'disponibilidad', 'Disponible' )->get()[0];
        $region = Region::where( 'id_region', $municipio->id_region )->where( 'disponibilidad', 'Disponible' )->get()[0];
        $estado = Estado::where( 'id_estado', $region->id_estado )->where( 'disponibilidad', 'Disponible' )->get()[0];

        return view('sitios.edit', compact('sitio', 'estado', 'region', 'municipio' ,'tipo'));
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
        $sitio = SitioInteres::find($id);
        //$estados->fill($request->except('imagen_estado','imagen_escudo'));
        
        $sitio->nombre = $request->input('nombre'); 
        $sitio->horario = $request->input('horario'); 
        $sitio->direccion = $request->input('direccion'); 
        $sitio->descripcion_general = $request->input('descripcion_general');
        $sitio->disponibilidad = "Disponible";

        if( $request->input('Municipio') ){
            $sitio->id_municipio = $request->input('Municipio');
        }

        if( $request->input('tipo') ){
            $sitio->id_tipo_interes = $request->input('tipo');
        }

        if($request->hasFile('imagen')){
            
            \File::delete( public_path(). $estados->imagen );
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $sitio->id_tipo_interes = '/images/intereses/'.$name;
            $file->move(public_path('/images/intereses'), $name);
        }

        $sitio->save();

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
        
        $sitio = SitioInteres::find($id);
        $sitio->disponibilidad = "noDisponible";
        $sitio->save();
        $op = 'Se ha eliminado el registro correctamente';
        return view('admin.confirmar', compact('op'));
    }
}
