<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            [
                'id' => 1,
                'user_id' => 1,
                'address' => 'Jl. Cisitu Lama no. 1',
                'total_price' => 5000000,
                'shipping_price' => 0,
                'status' => 'SUCCESS',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'address' => 'Jl. Cisitu Lama no. 1',
                'total_price' => 4000000,
                'shipping_price' => 0,
                'status' => 'PENDING',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Transaction::insert($transactions);
    }
}
