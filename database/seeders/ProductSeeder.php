<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => "New Balance 411 Men's Sneaker Shoes",
            'price' => 699000,
            'image_path' => 'products/1.jpg',
            'description' => 'Sepatu lari kaki bebas kepala sepatu lebar yang nyaman, kualitas tahan lama. Ringan komposit mesh ditingkatkan bungkus Film karet dapat memberikan pegangan yang andal.',
            'size' => '41,42,43,44,45,46,47',
            'brand_id' => 2
        ]);

        Product::create([
            'name' => "ASICS MetaRide Men's Running Shoes",
            'price' => 3999000,
            'image_path' => 'products/2.jpg',
            'description' => 'Ambil jarak yang lebih jauh dengan lebih nyaman dengan sepatu lari performa METARIDE™. Didesain untuk mereka yang ingin melangkah lebih jauh, sepatu ini menawarkan desain efisien yang dilengkapi dengan bantalan berenergi.',
            'size' => '41,42,43,44,45',
            'brand_id' => 5
        ]);

        Product::create([
            'name' => "Skechers GOrun Pulse - Alanine Men's Running Shoes",
            'price' => 899000,
            'image_path' => 'products/3.jpg',
            'description' => 'Tambahkan kenyamanan vital dan gaya atletik ke jarak tempuh Anda dengan sepatu lari Skechers GOrun Pulse(TM) - Alanine. Dilengkapi bantalan ULTRA FLIGHT(TM) yang ringan dan responsif serta sistem insole Air-Cooled Goga Mat(TM) untuk kenyamanan dan outsole karet Goodyear(R). Desain sepatu lari bertali.',
            'size' => '39,40,41,42,43,44,45',
            'brand_id' => 6
        ]);

        Product::create([
            'name' => "Nike Pegasus Trail 3 Men's Trail Running Shoes",
            'price' => 1979000,
            'image_path' => 'products/4.jpg',
            'description' => 'Temukan sayap Anda dengan lari off-road. Nike Pegasus Trail 3 memiliki kenyamanan empuk yang sama seperti yang Anda sukai, dengan desain yang mengacu pada tampilan Pegasus klasik. Memiliki traksi yang kuat untuk membantu Anda tetap bergerak melewati medan berbatu. Lebih banyak dukungan di sekitar midfoot membantu Anda merasa aman dalam perjalanan.',
            'size' => '40,41,42,43,44,45',
            'brand_id' => 3
        ]);

        Product::create([
            'name' => "Adidas Ultraboost 21 Primeblue Men's Running Shoes",
            'price' => 3000000,
            'image_path' => 'products/5.jpg',
            'description' => 'Definisi dari yang terbaik tak pernah berhenti. Ketika pertama kali kami merilis adidas Ultraboost, sepatu tersebut menjadi sepatu running terbaik yang pernah kami buat. Dengan setiap pembaruan, kami juga meningkatkan standarnya. Kini, kamu mendapatkan bantalan yang tidak pernah dibayangkan, dengan pengembalian energi yang selalu diimpikan. Versi ini memiliki 6% lebih banyak kapsul Boost dan upper adidas Primeknit+ yang suportif. Sepatu ini memberikanmu dorongan energi tambahan dalam setiap langkah dari sistem Linear Energy Push, yang menawarkan topangan di forefoot dan midfoot.',
            'size' => '40,41,42,43,44,45,47',
            'brand_id' => 1
        ]);

        Product::create([
            'name' => "Puma FUSE Men's Training Shoes",
            'price' => 1599000,
            'image_path' => 'products/6.jpg',
            'description' => 'Memperkenalkan FUSE yang bergaya dan rendah, dirancang berdasarkan wawasan dari para atlet PUMA kami sendiri dan menampilkan yang terbaik dalam stabilitas dan penyerapan guncangan. Kotak kaki lebar menawarkan penyangga yang ditingkatkan, midsole internal memberikan perlindungan benturan yang optimal, dan teknologi PUMAGRIP pada outsole memastikan traksi terbaik. Alternatif, PUMA Formstrip terbalik dan elemen desain mendetail memberikan nuansa futuristik pada sepatu latihan kekuatan performa tinggi ini.',
            'size' => '39,41,42,43,44,45,47',
            'brand_id' => 4
        ]);
    }
}
