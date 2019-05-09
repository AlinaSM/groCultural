@extends('layouts.app')

@section('title', 'Estado')

@section('content')

    <div class="container">
            <div class="row">
                <h1>Regiones de Guerrero</h1>
                <blockquote>
                        El estado de Guerrero se encuentra territorialmente dividido en ocho regiones, que distinguen rasgos económicos, sociales, culturales y geográficos.
                        Las regiones del estado de Guerrero son las divisiones geoculturales en las que se divide el estado de Guerrero establecidas desde 1942. Existen 8 regiones en el estado, Acapulco, Costa Chica, Costa Grande, Centro, La Montaña, Norte,y Tierra Caliente y Sierra (La ultima apenas se incorporó).
                </blockquote>

                <div class="col s8 offset-s2">
                    <ul class="collapsible ">


                        @foreach ($regiones as $region)
                        <li>
                            <div class="collapsible-header"><i class="material-icons">fiber_manual_record</i>{{$region->nombre}}</div>
                            <div class="collapsible-body"><span>
                                    {{$region->descripcion}} 
                            </span>
                            <br><br>
                            <div class="row">
                                <div class="col s8">
                                    <div class="row">
                                        <div class="col">
                                            <b>Capital regional:</b> {{$region->capital_regional}} 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <b>Ubicacion geografica:</b> {{$region->ubicacion_geografica}} 
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col">
                                            <b>Extension Territorial:</b> {{$region->extension_territorial}} 
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col">
                                            <b>Numero Habitantes:</b> {{$region->numero_habitantes}} 
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col offset-3">
                                    <img src="{{$region->mapa}}" style="width: 10em; ">
                                </div>
                               
                            </div>
                        </li>
                        @endforeach
                      
                        
                    </ul>
                </div>
                    
            </div>
    </div>
@endsection