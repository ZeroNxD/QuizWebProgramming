<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dalam Category Seeder ini, kita gak mau ada penerapan Faker
        // Karena isi database dari Category adalah Nama Category (yang udah didefine) dan Nama Penulisnya jadi jangan ada faker
        Category::create([
            'name' => 'Data Science',
            'writer' => 'Kevin Petersen'
        ]);

        Category::create([
            'name' => 'Network Security',
            'writer' => 'Komi Shouko'
        ]);
    }
}
