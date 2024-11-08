<?php

namespace Database\Seeders;

use App\Models\ProductSizes;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductSizes::factory()->count(5)->create();
    }
}
