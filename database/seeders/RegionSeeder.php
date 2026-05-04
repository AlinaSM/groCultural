<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $regiones = [
            ['id_region' => 1, 'nombre' => 'Acapulco', 'capital_regional' => 'Acapulco de Juárez', 'numero_municipios' => 1],
            ['id_region' => 2, 'nombre' => 'Centro', 'capital_regional' => 'Chilpancingo de los Bravo', 'numero_municipios' => 13],
            ['id_region' => 3, 'nombre' => 'Costa Chica', 'capital_regional' => 'Ometepec', 'numero_municipios' => 16],
            ['id_region' => 4, 'nombre' => 'Costa Grande', 'capital_regional' => 'Zihuatanejo de Azueta', 'numero_municipios' => 8],
            ['id_region' => 5, 'nombre' => 'Montaña', 'capital_regional' => 'Tlapa de Comonfort', 'numero_municipios' => 19],
            ['id_region' => 6, 'nombre' => 'Norte', 'capital_regional' => 'Iguala de la Independencia', 'numero_municipios' => 16],
            ['id_region' => 7, 'nombre' => 'Tierra Caliente', 'capital_regional' => 'Ciudad Altamirano', 'numero_municipios' => 9],
            ['id_region' => 8, 'nombre' => 'Sierra', 'capital_regional' => 'Heliodoro Castillo', 'numero_municipios' => 3],
        ];

        foreach ($regiones as $region) {
            \DB::table('regiones')->insert([
                'id_region' => $region['id_region'],
                'nombre' => $region['nombre'],
                'capital_regional' => $region['capital_regional'],
                'extension_territorial' => 'Información no disponible',
                'ubicacion_geografica' => 'Información no disponible',
                'numero_habitantes' => '0',
                'disponibilidad' => 'Disponible',
                'numero_municipios' => $region['numero_municipios'],
                'descripcion' => 'Región de ' . $region['nombre'] . ' en el Estado de Guerrero',
                'mapa' => null,
                'id_estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
