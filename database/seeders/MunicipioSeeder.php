<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $municipios = [
            // 1 Acapulco
            ['nombre' => 'Acapulco de Juárez', 'id_region' => 1],
            // 2 Centro
            ['nombre' => 'Ahuacuotzingo', 'id_region' => 2], ['nombre' => 'Chilapa de Álvarez', 'id_region' => 2], ['nombre' => 'Chilpancingo de los Bravo', 'id_region' => 2],
            ['nombre' => 'Eduardo Neri', 'id_region' => 2], ['nombre' => 'General Heliodoro Castillo', 'id_region' => 2], ['nombre' => 'José Joaquín de Herrera', 'id_region' => 2],
            ['nombre' => 'Juan R. Escudero', 'id_region' => 2], ['nombre' => 'Leonardo Bravo', 'id_region' => 2], ['nombre' => 'Mártir de Cuilapan', 'id_region' => 2],
            ['nombre' => 'Mochitlán', 'id_region' => 2], ['nombre' => 'Quechultenango', 'id_region' => 2], ['nombre' => 'Tixtla de Guerrero', 'id_region' => 2], ['nombre' => 'Zitlala', 'id_region' => 2],
            // 3 Costa Chica
            ['nombre' => 'Ayutla de los Libres', 'id_region' => 3], ['nombre' => 'Azoyú', 'id_region' => 3], ['nombre' => 'Copala', 'id_region' => 3],
            ['nombre' => 'Cuajinicuilapa', 'id_region' => 3], ['nombre' => 'Cuautepec', 'id_region' => 3], ['nombre' => 'Florencio Villarreal', 'id_region' => 3],
            ['nombre' => 'Igualapa', 'id_region' => 3], ['nombre' => 'Juchitán', 'id_region' => 3], ['nombre' => 'Marquelia', 'id_region' => 3],
            ['nombre' => 'Ometepec', 'id_region' => 3], ['nombre' => 'San Luis Acatlán', 'id_region' => 3], ['nombre' => 'San Marcos', 'id_region' => 3],
            ['nombre' => 'Tecoanapa', 'id_region' => 3], ['nombre' => 'Xochistlahuaca', 'id_region' => 3], ['nombre' => 'Las Vigas', 'id_region' => 3], ['nombre' => 'San Nicolás', 'id_region' => 3],
            // 4 Costa Grande
            ['nombre' => 'Atoyac de Álvarez', 'id_region' => 4], ['nombre' => 'Benito Juárez', 'id_region' => 4], ['nombre' => 'Coahuayutla de José María Izazaga', 'id_region' => 4],
            ['nombre' => 'Coyuca de Benítez', 'id_region' => 4], ['nombre' => 'Petatlán', 'id_region' => 4], ['nombre' => 'Tecpan de Galeana', 'id_region' => 4],
            ['nombre' => 'La Unión de Isidoro Montes de Oca', 'id_region' => 4], ['nombre' => 'Zihuatanejo de Azueta', 'id_region' => 4],
            // 5 Montaña
            ['nombre' => 'Acatepec', 'id_region' => 5], ['nombre' => 'Alcozauca de Guerrero', 'id_region' => 5], ['nombre' => 'Alpoyeca', 'id_region' => 5],
            ['nombre' => 'Atlamajalcingo del Monte', 'id_region' => 5], ['nombre' => 'Atlixtac', 'id_region' => 5], ['nombre' => 'Cochoapa el Grande', 'id_region' => 5],
            ['nombre' => 'Copanatoyac', 'id_region' => 5], ['nombre' => 'Cualác', 'id_region' => 5], ['nombre' => 'Huamuxtitlán', 'id_region' => 5],
            ['nombre' => 'Iliatenco', 'id_region' => 5], ['nombre' => 'Malinaltepec', 'id_region' => 5], ['nombre' => 'Metlatónoc', 'id_region' => 5],
            ['nombre' => 'Olinalá', 'id_region' => 5], ['nombre' => 'Tlacoapa', 'id_region' => 5], ['nombre' => 'Tlalixtaquilla de Maldonado', 'id_region' => 5],
            ['nombre' => 'Tlapa de Comonfort', 'id_region' => 5], ['nombre' => 'Xalpatláhuac', 'id_region' => 5], ['nombre' => 'Zapotitlán Tablas', 'id_region' => 5],
            ['nombre' => 'Santa Cruz del Rincón', 'id_region' => 5], ['nombre' => 'Ñuu Savi', 'id_region' => 5],
            // 6 Norte
            ['nombre' => 'Apaxtla', 'id_region' => 6], ['nombre' => 'Atenango del Río', 'id_region' => 6], ['nombre' => 'Buenavista de Cuéllar', 'id_region' => 6],
            ['nombre' => 'Cocula', 'id_region' => 6], ['nombre' => 'Copalillo', 'id_region' => 6], ['nombre' => 'Cuetzala del Progreso', 'id_region' => 6],
            ['nombre' => 'General Canuto A. Neri', 'id_region' => 6], ['nombre' => 'Huitzuco de los Figueroa', 'id_region' => 6], ['nombre' => 'Iguala de la Independencia', 'id_region' => 6],
            ['nombre' => 'Ixcateopan de Cuauhtémoc', 'id_region' => 6], ['nombre' => 'Pedro Ascencio Alquisiras', 'id_region' => 6], ['nombre' => 'Pilcaya', 'id_region' => 6],
            ['nombre' => 'Taxco de Alarcón', 'id_region' => 6], ['nombre' => 'Teloloapan', 'id_region' => 6], ['nombre' => 'Tepecoacuilco de Trujano', 'id_region' => 6],
            ['nombre' => 'Tetipac', 'id_region' => 6],
            // 7 Tierra Caliente
            ['nombre' => 'Ajuchitlán del Progreso', 'id_region' => 7], ['nombre' => 'Arcelia', 'id_region' => 7], ['nombre' => 'Coyuca de Catalán', 'id_region' => 7],
            ['nombre' => 'Cutzamala de Pinzón', 'id_region' => 7], ['nombre' => 'Pungarabato', 'id_region' => 7], ['nombre' => 'San Miguel Totolapan', 'id_region' => 7],
            ['nombre' => 'Tlalchapa', 'id_region' => 7], ['nombre' => 'Tlapehuala', 'id_region' => 7], ['nombre' => 'Zirándaro', 'id_region' => 7],
        ];

        foreach ($municipios as $municipio) {
            \DB::table('municipios')->insert([
                'nombre' => $municipio['nombre'],
                'clima' => 'Agradable / Variable',
                'numero_habitantes' => rand(5000, 100000),
                'historia_general' => 'Historia general de ' . $municipio['nombre'] . ' no disponible actualmente...',
                'escudo' => null,
                'mapa' => null,
                'id_region' => $municipio['id_region'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
