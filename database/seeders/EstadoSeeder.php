<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \DB::table('estados')->insert([
            'id_estado' => 1,
            'nombre' => 'Guerrero',
            'capital' => 'Chilpancingo de los Bravo',
            'extension_territorial' => 63596,
            'gentilicio' => 'Guerrerense',
            'numero_municipios' => 85,
            'descripcion' => 'Estado libre y soberano ubicado en la región suroeste del país.',
            'imagen_estado' => null,
            'imagen_escudo' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
