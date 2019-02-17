@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <div class="parallax-container"> 
        <div class="parallax"><img src="{{ asset('images/taxco_vista.jpg') }}"></div>
    </div>

    <div class="section white">
        <div class="row container">
            <h2 class="header">¡Ven y conoce Guerrero!</h2>
            <p class="grey-text text-darken-3 lighten-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quos commodi voluptas molestiae dignissimos. Deleniti, suscipit necessitatibus. Maiores error veniam vitae asperiores cumque necessitatibus quas? In nam rerum ea iure.
            </p>
            <p class="grey-text text-darken-3 lighten-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quos commodi voluptas molestiae dignissimos. Deleniti, suscipit necessitatibus. Maiores error veniam vitae asperiores cumque necessitatibus quas? In nam rerum ea iure.
            </p>
        </div>
    </div>
    
    <div class="parallax-container">
        <div class="parallax"><img src="{{ asset('images/zihua_plaza.jpg') }}"></div>
    </div>

    <div class="section amber darken-2">
            <div class="row container">
                <h2 class="header">¡Vive sus tradiciones!</h2>
                <p class="grey-text text-darken-3 lighten-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quos commodi voluptas molestiae dignissimos. Deleniti, suscipit necessitatibus. Maiores error veniam vitae asperiores cumque necessitatibus quas? In nam rerum ea iure.
                </p>
                <p class="grey-text text-darken-3 lighten-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quos commodi voluptas molestiae dignissimos. Deleniti, suscipit necessitatibus. Maiores error veniam vitae asperiores cumque necessitatibus quas? In nam rerum ea iure.
                </p>
            </div>
        </div>
        
        <div class="parallax-container">
            <div class="parallax"><img src="{{ asset('images/baile_folklorico.jpg') }}"></div>
        </div>

@endsection