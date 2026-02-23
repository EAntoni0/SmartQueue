<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'admin1',
            'last_name' => 'yeison',
            'email' => 'admin@veterimid.com',
            'telefono' => '9999999999',
            'direccion' => 'meridaaaaa',
            'password' => Hash::make('admin123'), // contraseña del adminstrador inicial
        ]);

        //se asignael rol de administrador al usuario que acabamos de crear
        $adminUser->assignRole($roleAdmin);
    }
}
