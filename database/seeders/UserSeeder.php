<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Clear cached roles and permissions
        $admin = User::create([
            'name' => 'Admin',
            'Email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $admin->assignRole('admin');

        $penulis = User::create([
            'name' => 'Penulis',
            'Email' => 'penulis@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $penulis->assignRole('editor');
    }
}
