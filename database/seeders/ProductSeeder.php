<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
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
        Category::create(['name' => 'Shoes']);
        Brand::create(['name' => 'Nike']);
        Product::create(['name' => 'Air Max', 'description' => 'Running shoes', 'price' => 120.00, 'category_id' => 1, 'brand_id' => 1, 'image' => 'air-max.jpg', 'size' => '42', 'color' => 'Black']);
    }
}
