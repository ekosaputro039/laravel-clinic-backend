<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'Eko@fic15.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'phone' => '12345678',
        ]);

        //seeder profile_clinic
        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Klinik Medika',
            'address' => 'jl.Mojopahit No.100',
            'phone' => '0325156445',
            'email' => 'dr_Eko@Klinik.com',
            'doctor_name' => 'Bang Eko',
            'unique_code' => '15425421',
        ]);

        //call
        $this->call([
            DoctorSeeder::class,
            DoctorScheduleSeeder::class,
        ]);
    }
}