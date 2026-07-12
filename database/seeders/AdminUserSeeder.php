<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accounts = [
            [
                'full_name' => 'Mensur Admin',
                'email' => '0mensur01@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'status' => 'active',
            ],
            [
                'full_name' => 'Mensur Manager',
                'email' => 'manager@sifra.test',
                'password' => Hash::make('password123'),
                'role' => 'manager',
                'status' => 'active',
            ],
        ];

        foreach ($accounts as $account) {
            User::updateOrCreate(
                ['email' => $account['email']],
                [
                    'full_name' => $account['full_name'],
                    'password' => $account['password'],
                    'role' => $account['role'],
                    'status' => $account['status'],
                ]
            );
        }
    }
}
