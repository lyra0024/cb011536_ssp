<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create the user first
       /* $user = User::create([
            'name' => 'Dr. John Doe',
            'email' => 'john@gmail.com',
            'phone_number' => '0766093478',
            'password' => bcrypt('12345678'),
            'role' => 'doctor',
        ]);

        // Create the doctor-specific info
        Doctor::create([
            'specialization' => 'Cardiologist',
            'experience' => 3,
            'working_days' => 'Monday, Tuesday, Wednesday',
            'consultation_fee' => 1800.00
        ]);*/

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone_number' => '0779272132',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);

    }
}
