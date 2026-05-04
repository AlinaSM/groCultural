<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $municipios_religiones = [];
        
        $municipios = \DB::table('municipios')->pluck('id_municipio');
        
        foreach ($municipios as $municipio_id) {
            $municipios_religiones[] = [
                'id_municipio' => $municipio_id,
                'id_religion' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ];

            if (rand(1, 100) <= 50) {
                 $municipios_religiones[] = [
                    'id_municipio' => $municipio_id,
                    'id_religion' => rand(2, 4),
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
        }

        \DB::table('municipios_religiones')->insert($municipios_religiones);
    }
}
