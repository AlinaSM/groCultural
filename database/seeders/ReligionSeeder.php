<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $religiones = [
            ['nombre' => 'Catolicismo', 'descripcion' => 'Religión mayoritaria del estado por herencia colonial', 'disponibilidad' => 'Disponible'],
            ['nombre' => 'Protestantismo / Evangélica', 'descripcion' => 'Diversas denominaciones cristianas', 'disponibilidad' => 'Disponible'],
            ['nombre' => 'Creencias Tradicionales Indígenas', 'descripcion' => 'Sincretismos basados en deidades antiguas combinadas con la liturgia', 'disponibilidad' => 'Disponible'],
            ['nombre' => 'Sin Religión', 'descripcion' => 'Personas que no profesan credo o fe alguna', 'disponibilidad' => 'Disponible'],
        ];

        foreach ($religiones as $religion) {
            \DB::table('religiones')->insert(array_merge($religion, [
                'created_at' => now(),
                'updated_at' => now()
            ]));
        }
    }
}
