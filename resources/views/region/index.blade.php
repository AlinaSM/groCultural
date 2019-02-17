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

                <div class="col s6 offset-s3">
                    <ul class="collapsible ">

                        <li>
                            <div class="collapsible-header"><i class="material-icons">fiber_manual_record</i>Acapulco</div>
                            <div class="collapsible-body"><span>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure eaque fugiat est sunt et eum corrupti reiciendis earum quod voluptas. Placeat rem consectetur consequatur reprehenderit suscipit, velit perferendis nobis dolorem!    
                            </span>
                            <br><br>
                            <div class="row">
                                <div class="col offset-3">
                                    <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>Conocer mas..</a></div>
                                </div>
                            </div>
                        </li>
                        
                        <li>
                            <div class="collapsible-header"><i class="material-icons">fiber_manual_record</i>Acapulco</div>
                            <div class="collapsible-body"><span>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure eaque fugiat est sunt et eum corrupti reiciendis earum quod voluptas. Placeat rem consectetur consequatur reprehenderit suscipit, velit perferendis nobis dolorem!    
                            </span>
                            <br><br>
                            <div class="row">
                                <div class="col offset-3">
                                    <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>Conocer mas..</a></div>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                    
            </div>
    </div>
@endsection