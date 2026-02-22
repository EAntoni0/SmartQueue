<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // agregamos los 4 roles del sistema
        $roleAdmin = Role::create(['name' => 'Administrador']);
        $roleVet = Role::create(['name' => 'Veterinario']);
        $roleRecep = Role::create(['name' => 'Recepcionista']);
        $roleCliente = Role::create(['name' => 'Cliente']);

        // datos del usuario administrador inicial
        $adminUser = User::create([
            'name' => '',
            'last_name' => '',
            'email' => '',
            'telefono' => '',
            'direccion' => '',
            'password' => Hash::make(''), // contraseña del adminstrador inicial
        ]);

        //se asignael rol de administrador al usuario que acabamos de crear
        $adminUser->assignRole($roleAdmin);
    }
}
