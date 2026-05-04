<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FloraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $floras = [
            ['nombre' => 'Cempasúchil', 'nombre_cientifico' => 'Tagetes erecta', 'genero' => 'Tagetes', 'familia' => 'Asteraceae', 'especie' => 'T. erecta', 'descripcion_general' => 'Flor tradicional muy utilizada en día de muertos.'],
            ['nombre' => 'Nochebuena', 'nombre_cientifico' => 'Euphorbia pulcherrima', 'genero' => 'Euphorbia', 'familia' => 'Euphorbiaceae', 'especie' => 'E. pulcherrima', 'descripcion_general' => 'Planta de uso ornamental, nativa de Guerrero.'],
            ['nombre' => 'Parota', 'nombre_cientifico' => 'Enterolobium cyclocarpum', 'genero' => 'Enterolobium', 'familia' => 'Fabaceae', 'especie' => 'E. cyclocarpum', 'descripcion_general' => 'Árbol frondoso común en climas cálidos y costa.'],
        ];

        foreach ($floras as $flora) {
            \DB::table('flora')->insert(array_merge($flora, [
                'created_at' => now(),
                'updated_at' => now()
            ]));
        }
    }
}
