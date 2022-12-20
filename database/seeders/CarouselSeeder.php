<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carousel::create([
            'name' => 'carousel1',
            'image_url' => 'carousel1.png',
            'status' => 'archive',
        ]);
        Carousel::create([
            'name' => 'carousel2',
            'image_url' => 'carousel2.png',
            'status' => 'archive',
        ]);
        Carousel::create([
            'name' => 'carousel3',
            'image_url' => 'carousel3.png',
            'status' => 'archive',
        ]);
    }
}
