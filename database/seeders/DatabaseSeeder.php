<?php

namespace Database\Seeders;

use App\Models\User;
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
        // User::factory(10)->create();

        User::factory()->create([
            'unix_id' => \Illuminate\Support\Str::uuid(),
            'username' => 'admin',
            'password' => Hash::make('password'),
            'role' => 'ADMIN',
            'created_by' => null,
            'updated_by' => null,
        ]);
    }
}
