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
        'name' => 'Wooden Chair',
        'description' => 'Comfortable wooden chair.',
        'price' => 1499.99,
        'image' => 'chair.jpg',
        'stock' => 20,
    ]);

    Product::create([
        'name' => 'Office Table',
        'description' => 'Stylish office desk.',
        'price' => 2499.99,
        'image' => 'table.jpg',
        'stock' => 10,
    ]);
    }
}
