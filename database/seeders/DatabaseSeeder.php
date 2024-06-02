<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'password'=>Hash::make('admin1234'),
            'firstname'=>'Admin',
            'middlename' => 'Admin',
            'lastname' => 'Admin',
            'id_number' => '093213',
            'email' => 'admin@admin.com',
            'mobile_number' => '09101421073',
        ]);
    }
}