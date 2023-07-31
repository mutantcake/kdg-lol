<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ["Administrateur","Manager","Client"];
        foreach ($roles as $role) {
            Role::create([
               "libele" => $role, 
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }
    }
}
