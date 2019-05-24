@extends('layouts.app')

@section('title', 'Inicio')
<style>
.responsive-img{
    width: 100%;
}
</style>
@section('content')

    <div class="row"> 
        <img class="responsive-img" src="{{ asset('images/bannerPrincipal.jpg') }}">
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
    
    <div class="row">
        <img class="responsive-img" src="{{ asset('images/zihua_plaza.jpg') }}">
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

      

@endsection