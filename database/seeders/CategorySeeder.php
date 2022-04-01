<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

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
            'name' => 'Laptop',
            'slug' => 'laptop'
        ]);
        Category::create([
            'name' => 'Handphone',
            'slug' => 'handphone'
        ]);
        Category::create([
            'name' => 'Alat Tulis',
            'slug' => 'alat-tulis'
        ]);
    }
}
