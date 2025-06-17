<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolesAndAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);
        $subRole = Role::firstOrCreate(['name' => 'sub']);

        // Assign admin role to admin@mail.com user
        $adminUser = User::where('email', 'admin@mail.com')->first();
        if ($adminUser) {
            $adminUser->assignRole($adminRole);
        }
    }
}
