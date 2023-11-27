<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Nike Jordan 1 Mid Chicago Black Toe',
                'price' => 2000000,
                'description' => 'Nike Jordan 1 Mid Chicago Black Toe shoes are the latest shoes from Nike that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Sneakers, Nike, Jordan, Hot',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Nike Air Force 1 Low White',
                'price' => 1500000,
                'description' => 'Nike Air Force 1 Low White shoes are the latest shoes from Nike that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Sneakers, Nike, Air Force, Hot',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Adidas Ultraboost 21',
                'price' => 2500000,
                'description' => 'Adidas Ultraboost 21 shoes are the latest shoes from Adidas that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Sneakers, Adidas, Ultraboost, Hot',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'Adidas Ultraboost 6.0 DNA',
                'price' => 3000000,
                'description' => 'Adidas Ultraboost 6.0 DNA shoes are the latest shoes from Adidas that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Sneakers, Adidas, Ultraboost, Hot',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Nike Air Zoom Pegasus 38',
                'price' => 2000000,
                'description' => 'Nike Air Zoom Pegasus 38 shoes are the latest shoes from Nike that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Sneakers, Nike, Air Zoom, Hot',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'Nike Air Zoom Pegasus 37',
                'price' => 1500000,
                'description' => 'Nike Air Zoom Pegasus 37 shoes are the latest shoes from Nike that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Sneakers, Nike, Air Zoom, Hot',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'name' => 'Nike Air Zoom SuperRep 2',
                'price' => 2000000,
                'description' => 'Nike Air Zoom SuperRep 2 shoes are the latest shoes from Nike that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Sneakers, Nike, Air Zoom, Hot',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'name' => 'Nike Air Zoom SuperRep 5',
                'price' => 2500000,
                'description' => 'Nike Air Zoom SuperRep 5 shoes are the latest shoes from Nike that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Sneakers, Nike, Air Zoom, Hot',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'name' => 'New Balance 327',
                'price' => 2000000,
                'description' => 'New Balance 327 shoes are the latest shoes from New Balance that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Sneakers, New Balance, 327, Hot',
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'name' => 'New Balance 327 V2',
                'price' => 2500000,
                'description' => 'New Balance 327 V2 shoes are the latest shoes from New Balance that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Sneakers, New Balance, 327, Hot',
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 11,
                'name' => 'Nike Benassi JDI',
                'price' => 500000,
                'description' => 'Nike Benassi JDI shoes are the latest shoes from Nike that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Sandal, Nike, Benassi, Hot',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 12,
                'name' => 'Nike Benassi JDI Print',
                'price' => 500000,
                'description' => 'Nike Benassi JDI Print shoes are the latest shoes from Nike that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Sandal, Nike, Benassi, Hot',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 13,
                'name' => 'Nike SB Zoom Blazer Mid',
                'price' => 2000000,
                'description' => 'Nike SB Zoom Blazer Mid shoes are the latest shoes from Nike that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Skateboard, Nike, Blazer, Hot',
                'category_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 14,
                'name' => 'Nike SB Zoom Blazer Mid Premium',
                'price' => 2500000,
                'description' => 'Nike SB Zoom Blazer Mid Premium shoes are the latest shoes from Nike that are very popular with young people. These shoes are very comfortable to wear and are suitable for all activities.',
                'tags' => 'Skateboard, Nike, Blazer, Hot',
                'category_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Product::insert($products);
    }
}
