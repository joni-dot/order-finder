<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the carrier seeder.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->create([
                'name' => 'Admin User',
                'email' => 'admin@example.org',
                'password' => Hash::make('password'),
            ]);
    }
}
