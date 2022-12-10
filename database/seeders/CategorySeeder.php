<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'pakaian',
            'price' => '3000',
        ]);
        Category::create([
            'name' => 'jas',
            'price' => '3000',
        ]);
        Category::create([
            'name' => 'gorden',
            'price' => '4000',
        ]);
        Category::create([
            'name' => 'karpet',
            'price' => '4000',
        ]);
        Category::create([
            'name' => 'bed cover',
            'price' => '4000',
        ]);
        Category::create([
            'name' => 'sprei',
            'price' => '4000',
        ]);
    }
}
