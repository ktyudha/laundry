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
            'name' => 'cuci komplit reguler',
            'description' => 'cuci, kering, setrika (3 hari)',
            'price' => '4000',
            'image_url' => 'WASHING-01.svg',
        ]);
        Paket::create([
            'name' => 'cuci komplit express',
            'description' => 'cuci, kering, setrika (1 hari)',
            'price' => '5000',
            'image_url' => 'DIRTY-01.svg',
        ]);
        Paket::create([
            'name' => 'cuci + kering',
            'description' => 'cuci dan dikeringkan minim 3kg',
            'price' => '3000',
            'image_url' => 'DRYING-01.svg',
        ]);
        Paket::create([
            'name' => 'setrika',
            'description' => 'bisa membawa baju dari rumah',
            'price' => '3000',
            'image_url' => 'FOLDING-01.svg',
        ]);
        Paket::create([
            'name' => 'setrika expresss',
            'description' => 'setrika pakaian & jas, tidak harus cuci disini',
            'price' => '4000',
            'image_url' => 'FOLDING-01.svg',
        ]);
    }
}
