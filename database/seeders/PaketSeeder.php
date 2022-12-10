<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paket::create([
            'name' => 'cuci',
            'description' => 'cuci basah',
            'price' => '3000',
        ]);
        Paket::create([
            'name' => 'setrika',
            'description' => 'setrika pakaian & jas, tidak harus cuci disini',
            'price' => '4000',
        ]);
        Paket::create([
            'name' => 'cuci + setrika',
            'description' => 'cuci dan setrika',
            'price' => '6500',
        ]);
    }
}
