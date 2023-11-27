<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Andre',
                'email' => 'andre@mail.com',
                'username' => 'andre',
                'phone' => '081234567890',
                'roles' => 'user',
                'password' => Hash::make('andre123'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        User::insert($users);
    }
}
