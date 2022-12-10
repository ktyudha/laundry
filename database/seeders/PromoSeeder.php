<?php

namespace Database\Seeders;

use App\Models\Promo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promo::create([
            'title' => 'I Love Monday',
            'tagline' => 'Diskon Rp 25.000,- hanya di McDelivery',
            'image_url' => '',
            'body' => 'Selama bulan Agustus-Desember 2022 setiap hari Senin kamu bisa mendapatkan diskon Rp 25.000,-

            Disertai dengan pemesanan minimal Rp 125.000,-
            Minimal pemesanan sudah termasuk pajak, biaya Antar dan biaya Take Away.
            McDelivery berhak membatalkan pesanan apabila terindikasi ketidaksesuaian ketentuan.',
            'status' => 'archive'
        ]);
        Promo::create([
            'title' => 'I Love Monday',
            'tagline' => 'Diskon Rp 25.000,- hanya di McDelivery',
            'image_url' => '',
            'body' => 'Selama bulan Agustus-Desember 2022 setiap hari Senin kamu bisa mendapatkan diskon Rp 25.000,-

            Disertai dengan pemesanan minimal Rp 125.000,-
            Minimal pemesanan sudah termasuk pajak, biaya Antar dan biaya Take Away.
            McDelivery berhak membatalkan pesanan apabila terindikasi ketidaksesuaian ketentuan.',
            'status' => 'archive'
        ]);
    }
}
