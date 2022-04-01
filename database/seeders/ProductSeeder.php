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
        Product::create(
            [
                'name'  => 'Acer Aspire e4',
                'category_id'  => 1,
                'price'  => 4000000,
            ],
        );

        Product::create(
            [
                'name'  => 'Toshiba Satellite A13',
                'category_id'  => 1,
                'price'  => 3200000,
            ]
        );

        Product::create(
            [
                'name'  => 'Xiaomi Redmi 5 Plus 4/64',
                'category_id'  => 2,
                'price'  => 2500000,
            ]
        );
    }
}
