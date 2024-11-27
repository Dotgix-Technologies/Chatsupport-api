<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

       User::create([
            'name' => 'Admin',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('defaultadmin'),
            'role' => 'Admin',
        ]);

        // Create Consultant user
        User::create([
            'name' => 'Consultant',
            'email' => 'consultant1@gmail.com',
            'password' => Hash::make('defaultconsultant'),
            'role' => 'Consultant',
        ]);
    }
}
