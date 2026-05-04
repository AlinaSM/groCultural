<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faunas = [
            ['nombre' => 'Iguana Verde', 'descripcion_general' => 'Reptil escamoso común en regiones cálidas', 'promedio_vida' => '10-20 años', 'nombre_cientfico' => 'Iguana iguana'],
            ['nombre' => 'Tlacuache', 'descripcion_general' => 'Marsupial común en diversas partes del estado', 'promedio_vida' => '2-4 años', 'nombre_cientfico' => 'Didelphis virginiana'],
            ['nombre' => 'Venado Cola Blanca', 'descripcion_general' => 'Cervido de tamaño mediano', 'promedio_vida' => '4-5 años', 'nombre_cientfico' => 'Odocoileus virginianus'],
            ['nombre' => 'Jabalí', 'descripcion_general' => 'Mamífero artiodáctilo de hábitat boscoso', 'promedio_vida' => '10-15 años', 'nombre_cientfico' => 'Pecari tajacu'],
            ['nombre' => 'Coyote', 'descripcion_general' => 'Mamífero que habita gran parte de Norteamérica', 'promedio_vida' => '10-14 años', 'nombre_cientfico' => 'Canis latrans'],
        ];

        foreach ($faunas as $fauna) {
            \DB::table('fauna')->insert(array_merge($fauna, [
                'created_at' => now(),
                'updated_at' => now()
            ]));
        }
    }
}
