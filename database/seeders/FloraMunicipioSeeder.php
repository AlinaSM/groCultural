<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FloraMunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $flora_municipios = [];
        $municipios = \DB::table('municipios')->pluck('id_municipio');
        
        foreach ($municipios as $municipio_id) {
            $cantidad_floras = rand(1, 2);
            $floras_posibles = [1, 2, 3];
            shuffle($floras_posibles);
            
            for ($i = 0; $i < $cantidad_floras; $i++) {
                $flora_municipios[] = [
                    'id_municipio' => $municipio_id,
                    'id_flora' => $floras_posibles[$i],
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
        }

        \DB::table('flora_municipios')->insert($flora_municipios);
    }
}
