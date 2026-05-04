<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsuarioSeeder::class,
            
            EstadoSeeder::class,
            RegionSeeder::class,
            MunicipioSeeder::class,
            
            FaunaSeeder::class,
            FloraSeeder::class,
            LenguajeSeeder::class,
            ReligionSeeder::class,
            
            TipoSitioInteresSeeder::class,
            SitioInteresSeeder::class,
            
            TipoTradicionSeeder::class,
            TradicionSeeder::class,
            
            // Tablas pivote insertadas dinámicamente
            FaunaMunicipioSeeder::class,
            FloraMunicipioSeeder::class,
            MunicipioLenguajeSeeder::class,
            MunicipioReligionSeeder::class,
            MunicipioTradicionSeeder::class,
        ]);
    }
}
