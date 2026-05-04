<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaunaMunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faunas_municipios = [];
        
        $municipios = \DB::table('municipios')->pluck('id_municipio');
        
        foreach ($municipios as $municipio_id) {
            $cantidad_faunas = rand(1, 3);
            
            $faunas_posibles = [1, 2, 3, 4, 5];
            shuffle($faunas_posibles);
            
            for ($i = 0; $i < $cantidad_faunas; $i++) {
                $faunas_municipios[] = [
                    'id_municipio' => $municipio_id,
                    'id_Fauna' => $faunas_posibles[$i],
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
        }

        \DB::table('fauna_municipios')->insert($faunas_municipios);
    }
}
