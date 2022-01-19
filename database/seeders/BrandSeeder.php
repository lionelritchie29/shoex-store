<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Adidas'
        ]);

        Brand::create([
            'name' => 'New Balance'
        ]);

        Brand::create([
            'name' => 'Nike'
        ]);

        Brand::create([
            'name' => 'Puma'
        ]);

        Brand::create([
            'name' => 'ASICS'
        ]);

        Brand::create([
            'name' => 'Skechers'
        ]);
    }
}
