<?php

namespace Database\Seeders;

use App\Models\TransactionDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $details = [
            [
                'id' => 1,
                'user_id' => 1,
                'transaction_id' => 1,
                'product_id' => 4,
                'qty' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'transaction_id' => 1,
                'product_id' => 5,
                'qty' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'transaction_id' => 2,
                'product_id' => 1,
                'qty' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'transaction_id' => 2,
                'product_id' => 2,
                'qty' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'user_id' => 1,
                'transaction_id' => 2,
                'product_id' => 3,
                'qty' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        TransactionDetail::insert($details);
    }
}
