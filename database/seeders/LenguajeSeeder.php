<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LenguajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $lenguajes = [
            ['nombre' => 'Español', 'disponibilidad' => 'Disponible', 'descripcion' => 'Idioma predominante en el estado (Indoeuropea)'],
            ['nombre' => 'Nahuatl', 'disponibilidad' => 'Disponible', 'descripcion' => 'Lengua hablada en la región Montaña y Norte (Yuto-nahua)'],
            ['nombre' => 'Mixteco (Tu\'un Savi)', 'disponibilidad' => 'Disponible', 'descripcion' => 'Hablado en la región Costa Chica y Montaña (Otomangue)'],
            ['nombre' => 'Tlapaneco (Me\'phaa)', 'disponibilidad' => 'Disponible', 'descripcion' => 'Hablado en la zona centro y montaña de Guerrero (Otomangue)'],
            ['nombre' => 'Amuzgo', 'disponibilidad' => 'Disponible', 'descripcion' => 'Lengua hablada principalmente en la Costa Chica (Otomangue)'],
        ];

        foreach ($lenguajes as $lenguaje) {
            \DB::table('lenguajes')->insert(array_merge($lenguaje, [
                'created_at' => now(),
                'updated_at' => now()
            ]));
        }
    }
}
