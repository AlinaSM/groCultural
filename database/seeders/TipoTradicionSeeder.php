<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoTradicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tipos = [
            ['nombre' => 'Danza / Baile regional'],
            ['nombre' => 'Festividad Religiosa'],
            ['nombre' => 'Feria Popular']
        ];

        foreach ($tipos as $tipo) {
            \DB::table('tipo_tradicion')->insert(array_merge($tipo, [
                'created_at' => now(),
                'updated_at' => now()
            ]));
        }
    }
}
