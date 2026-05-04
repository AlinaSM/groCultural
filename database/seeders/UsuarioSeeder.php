<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \DB::table('usuarios')->insert([
            'username' => 'admin_central',
            'contrasena' => bcrypt('password123'), // O Hash::make()
            'tipo_usuario' => 'Administrador',
            'nombre' => 'Admin',
            'apellidos' => 'Sistema',
            'correo_electronico' => 'admin@grocultural.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        \DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@grocultural.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
