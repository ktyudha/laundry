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
            'image_url' => 'mcd7.jpeg',
            'body' => 'Selama bulan Agustus-Desember 2022 setiap hari Senin kamu bisa mendapatkan diskon Rp 25.000,-

            Disertai dengan pemesanan minimal Rp 125.000,-
            Minimal pemesanan sudah termasuk pajak, biaya Antar dan biaya Take Away.
            McDelivery berhak membatalkan pesanan apabila terindikasi ketidaksesuaian ketentuan.',
            'status' => 'archive'
        ]);
        Promo::create([
            'title' => 'Harapan di Setiap Gigitan',
            'tagline' => 'Prosperty Burger Hadir Kembali',
            'image_url' => 'mcd1.jpeg',
            'body' => 'Nikmati Prosperity menu. Dengan pilihan daging sapi atau daging fillet ikan dibalur dengan saus lada hitam dengan taburan bawang bombai yang disajikan dalam setangkup roti panjang bertabur wijen',
            'status' => 'archive'
        ]);
        Promo::create([
            'title' => 'Dark Choco McFlurry & Vanilla Black Waffle Cone',
            'tagline' => 'Nikmati Kemewahan Coklatnya',
            'image_url' => 'mcd3.jpeg',
            'body' => 'Hadir kembali menu es krim McD favoritmu. Nikmatnya Dark Choco McFlurry, es krim vanilla McDonalds dengan cita rasa coklat pekat berpadu pilihan topping sereal coklat atau OREO.

            Vanilla Black Waffle Cone hadir kembali dengan es krim vanilla diberikan saus coklat dan stick waffer, disajikan dengan waffle cone hitam.',
            'status' => 'archive'
        ]);
        Promo::create([
            'title' => 'Happy Meal Potato Head Mash Up',
            'tagline' => 'Pilih Buku atau Mainan untuk Happy Meal-mu!',
            'image_url' => 'mcd2.jpeg',
            'body' => 'Baru! Pilihan Buku Petualangan Para Detektif Mungil (Pengarang Buku How to Train Your Dragon) atau pilihan mainan Potato Head Mash Up yang bisa kamu pilih untuk Happy Meal-mu! Koleksi semuanya sekarang.',
            'status' => 'archive'
        ]);
        Promo::create([
            'title' => 'McFlurry with KitKat Mini Bites',
            'tagline' => 'Baru! KitKat Mini Bites dengan Dessert favoritmu!',
            'image_url' => 'mcd4.jpeg',
            'body' => 'Nikmati sensasi KitKat Mini Bites dalam McFlurry yang tersedia dalam dua pilihan rasa, Chocolate & Strawberry',
            'status' => 'archive'
        ]);
        Promo::create([
            'title' => 'Gratis Kalender 2023',
            'tagline' => 'Gratis Kalender 2023',
            'image_url' => 'mcd6.jpeg',
            'body' => 'Dapatkan Gratis Kalender 2023 McDonalds setiap pembelian minimum Rp 165.000,-

            Mulai 1 Desember - selama persediaan masih ada
            Minimum pembelian sudah termasuk pajak, belum termasuk biaya Take Away dan biaya antar (McDelivery)
            Berlaku pemesanan makan ditempat, bawa pulang, Drive Thru dan pesan antar khusus McDelivery
            Tidak berlaku pemesanan melalui GrabFood, GoFood dan ShopeeFood
            Tidak berlaku kelipatan',
            'status' => 'archive'
        ]);
    }
}
