<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioLenguajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $municipios_lenguajes = [];
        
        $municipios = \DB::table('municipios')->pluck('id_municipio');
        
        foreach ($municipios as $municipio_id) {
            $flor_lengua = [];
            $flor_lengua[] = [
                'id_municipio' => $municipio_id,
                'id_lengua' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ];

            if (rand(1, 100) <= 30) {
                $otra_lengua = rand(2, 5);
                $flor_lengua[] = [
                    'id_municipio' => $municipio_id,
                    'id_lengua' => $otra_lengua,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
            $municipios_lenguajes = array_merge($municipios_lenguajes, $flor_lengua);
        }

        \DB::table('municipios_lenguajes')->insert($municipios_lenguajes);
    }
}
