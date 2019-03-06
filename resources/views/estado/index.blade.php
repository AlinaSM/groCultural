@extends('layouts.app')

@section('title', 'Estado de Guerrero')

@section('content')

    @foreach ($estados as $estado)
        @if ($estado->nombre == 'Guerrero')
            <h2></h2>

            <div class="section white">
                    <div class="row container">
                        <h2 class="header">Estado de {{ $estado->nombre }}</h2>
                    </div>
                    <div class="row container">
                        <div class="col s8">
                            <p class="grey-text text-darken-3 lighten-3">
                                    {{ $estado->descripcion }}
                            </p>
                        </div>
                        <div class="col s3 offset-s1">
                            <img class="materialboxed" name="mapa" width="300" src="{{ asset( $estado->imagen_estado ) }}">
                            <label for="mapa">Mapa de {{ $estado->nombre }}</label>
                        </div>
                       
                    </div>
                </div>

                <div class="parallax-container">
                    <div class="parallax"><img src="{{ asset('images/guerrerense01.jpg') }}"></div>
                </div>
                <div class="section amber darken-2">
                        <div class="row ">
                            <div class="col s3 offset-s1">
                                <img class="materialboxed" name="mapa" height="200" src="{{ asset( $estado->imagen_escudo ) }}">
                                <label for="mapa" class="white-text">Escudo de {{ $estado->nombre }} </label>                                
                            </div>
                            <div class="col s8">
                            <h4>El estado de {{ $estado->nombre }} cuenta con un total de {{$estado->numero_municipios}} municipios.</h4>
                            <h4>a lo largo de {{ $estado->extension_territorial }} km²</h4>
                            <h5>y su capital es <strong><i>{{ $estado->capital }}</i> </strong> </h5>
                            </div>
                           
                        </div>
                </div>
                <div class="parallax-container">
                    <div class="parallax"><img src="{{ asset('images/chilpo_plaza.jpg') }}"></div>
                </div>
                <div class="section white">
                        <div class="row ">
                            <div class="col s8 offset-s2">
                                <h4>Habitan {{ $estado->num_habitantes }} {{$estado->gentilicio}}s a lo largo del estado.</h4>
                            </div>
                           
                        </div>
                </div>
                <div class="parallax-container">
                    <div class="parallax"><img src="{{ asset('images/guerrerense02.jpg') }}"></div>
                </div>

                
        @endif
    @endforeach
  
@endsection