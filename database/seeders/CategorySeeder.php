<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Mobil Sport'],
            ['name' => 'Modifikasi'],
            ['name' => 'Teknologi'],
            ['name' => 'Review'],
            ['name' => 'Tips & Trik'],
            ['name' => 'Berita'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}