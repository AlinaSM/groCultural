<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioTradicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $muni_tradi = [];
        $municipios = \DB::table('municipios')->pluck('id_municipio');
        
        foreach ($municipios as $municipio_id) {
            // Asigna alguna de las 3 tradiciones si cae en la probabilidad del 30% para poblar pseudo-aleatorio
            if (rand(1, 100) <= 30) {
                $muni_tradi[] = [
                    'id_municipio' => $municipio_id,
                    'id_tradicion' => rand(1, 3),
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
        }
        
        // Asignación dura a Chilpancingo (ID 4 aprx) para asegurar que tenga los Tlacololeros y el Pendón
        $muni_tradi[] = ['id_municipio' => 4, 'id_tradicion' => 1, 'created_at' => now(), 'updated_at' => now()];
        $muni_tradi[] = ['id_municipio' => 4, 'id_tradicion' => 2, 'created_at' => now(), 'updated_at' => now()];

        \DB::table('municipios_tradiciones')->insert($muni_tradi);
    }
}
