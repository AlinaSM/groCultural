<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TradicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tradiciones = [
            ['nombre' => 'Danza de los Tlacololeros', 'descripcion' => 'Danza tradicional de petición de lluvias y fertilidad.', 'fecha_festejo' => 'Septiembre a Diciembre', 'id_tipo_tradicion' => 1],
            ['nombre' => 'Feria de San Mateo, Navidad y Año Nuevo', 'descripcion' => 'Se celebra en Chilpancingo, el "Paseo del Pendón".', 'fecha_festejo' => 'Diciembre y Enero', 'id_tipo_tradicion' => 3],
            ['nombre' => 'Danza de los Diablos', 'descripcion' => 'Baile típico de la región de la Costa Chica.', 'fecha_festejo' => 'Día de Muertos', 'id_tipo_tradicion' => 1],
        ];

        foreach ($tradiciones as $tradicion) {
            \DB::table('tradiciones')->insert(array_merge($tradicion, [
                'created_at' => now(),
                'updated_at' => now()
            ]));
        }
    }
}
