<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            'nombre_ticket' => 2,
            'user_id' => 3,
            "created_at" => now(),
            "updated_at" => now(),
            
         ]);
    }
}
