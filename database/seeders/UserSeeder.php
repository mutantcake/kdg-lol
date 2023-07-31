<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nom' => 'Zongo',
            'prenom' => 'mamadi',
            'email' => 'zongo@gmail.com',
            'numero' => 78556633,
            'password' => Hash::make("pass123"),
            'role_id' => 1,
            "created_at" => now(),
            "updated_at" => now(),
            
         ]);

         User::create([
            'nom' => 'Tapsoba',
            'prenom' => 'yaya',
            'email' => 'yaya@gmail.com',
            'numero' => 78551623,
            'password' => Hash::make("pass123"),
            'role_id' => 2,
            "created_at" => now(),
            "updated_at" => now(),
            
         ]);
         User::create([
            'nom' => 'Ba',
            'prenom' => 'ali',
            'email' => 'ali@gmail.com',
            'numero' => 79551605,
            'password' => Hash::make("pass123"),
            'role_id' => 3,
            "created_at" => now(),
            "updated_at" => now(),
            
         ]);
    }
}
