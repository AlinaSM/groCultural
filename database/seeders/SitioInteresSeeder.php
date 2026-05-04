<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SitioInteresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $sitios = [
            ['nombre' => 'La Quebrada', 'descripcion_general' => 'Acantilado icónico.', 'horario' => 'Abierto todo el público', 'direccion' => 'Acapulco, Gro.', 'id_municipio' => 1, 'id_tipo_interes' => 2],
            ['nombre' => 'Grutas de Cacahuamilpa', 'descripcion_general' => 'Parque nacional de cavernas imponentes.', 'horario' => '10:00 a 17:00', 'direccion' => 'Pilcaya, Gro.', 'id_municipio' => 25, 'id_tipo_interes' => 5], // Asumiendo que 25 es Pilcaya
            ['nombre' => 'Zona Arqueológica de Tehuacalco', 'descripcion_general' => 'Sitio arqueológico con basamentos.', 'horario' => '9:00 a 16:00', 'direccion' => 'Chilpancingo, Gro.', 'id_municipio' => 4, 'id_tipo_interes' => 1],
            ['nombre' => 'Parroquia de Santa Prisca', 'descripcion_general' => 'Templo virreinal barroco.', 'horario' => '7:00 a 19:00', 'direccion' => 'Taxco de Alarcón, Gro.', 'id_municipio' => 30, 'id_tipo_interes' => 4],
        ];

        foreach ($sitios as $sitio) {
            \DB::table('intereses_culturales')->insert(array_merge($sitio, [
                'created_at' => now(),
                'updated_at' => now()
            ]));
        }
    }
}
