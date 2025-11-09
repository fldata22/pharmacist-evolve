<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::updateOrCreate(
            ['email' => 'ade.segs@yahoo.com'],
            [
                'name' => 'Godwin Adebimpe',
                'password' => Hash::make('Duduosun96!'),
            ]
        );

        $this->command->info('Admin user created successfully!');
    }
}
