<?php

namespace GroCultural\Http\Controllers;

use GroCultural\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function logout(){
        session_start();
        session_destroy();
      
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $login = false;

        $usuarios = Usuario::all();

        foreach($usuarios as $user){
            if($request->alias == $user->username && $request->contrasena == $user->contrasena ){
                $value = session('key', 'default');
                /*
                Session::push('id', $user->id);
                Session::push('tipo', $user->tipo_usuario);
                Session::push('username', $user->username);
                Session::push('nombre', $user->nombre);
                Session::push('apellidos', $user->apellidos);
                Session::push('correo_electronico', $user->correo_electronico);
                */

                session_start();
                $_SESSION['status'] = 'activa';
                $_SESSION['user'] = $user->username;
                $login = true;
            }
        }

        if($login){
            //TODO: Inicializar los datos de session
            
            return view('admin.home');
        }else{
            return view('admin.login'); //TODO: Alertar que el login no se ejecuto
        }
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
