@extends('layouts.app')

@section('title', 'Creando Estado')

@section('content')

    <div class="container">
            <div class="parallax-container"> 
                <div class="parallax"><img src=" {{ asset('images/pozas_azules_taxco.jpg') }} "></div>
                </div>
                <div class="section white">
                <div class="row container">
                    <h2 class="header">Parallax</h2>
                    <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
                </div>
                </div>
                <div class="parallax-container">
                <div class="parallax"><img src="images/acapulco_vista.jpg"></div>
            </div>
    </div>
@endsection