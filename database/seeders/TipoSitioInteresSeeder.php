<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSitioInteresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tipos = [
            ['nombre' => 'Zona Arqueológica', 'disponibilidad' => 'Disponible'],
            ['nombre' => 'Playa', 'disponibilidad' => 'Disponible'],
            ['nombre' => 'Museo', 'disponibilidad' => 'Disponible'],
            ['nombre' => 'Iglesia / Templo', 'disponibilidad' => 'Disponible'],
            ['nombre' => 'Pueblo Mágico', 'disponibilidad' => 'Disponible']
        ];

        foreach ($tipos as $tipo) {
            \DB::table('tipo_intereses_culturales')->insert(array_merge($tipo, [
                'created_at' => now(),
                'updated_at' => now()
            ]));
        }
    }
}
