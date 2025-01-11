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
        Product::create([
            'name' => 'Product 1',
            'description' => 'Description of Product 1',
            'price' => 10.99,
        ]);

        Product::create([
            'name' => 'Product 2',
            'description' => 'Description of Product 2',
            'price' => 20.50,
        ]);
    }
}
