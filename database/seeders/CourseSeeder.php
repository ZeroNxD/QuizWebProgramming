<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Course;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disini kita mau melakukan generate secara acak untuk data-data konten yang ada dalam Materi Coursenya
        // Dalam Komputer saya, entah mengapa saya tidak bisa mengenerate data Faker yang berbahasa Indonesia jadinya 
        // saya menggunakan bahasa inggris
        $faker = Faker::create();
        $DataScienceCategory = Category::where('name', 'Data Science')->first();
        $NetworkSecurityCategory = Category::where('name', 'Network Security')->first();

        // Masing-masing isi konten course untuk masing-masing category
        $DataScienceCourses = [
            ['title' => 'Machine Learning', 'image' => 'assets/Machine Learning.png'],
            ['title' => 'Deep Learning', 'image' => 'assets/Deep Learning.jpeg'],
            ['title' => 'Natural Language Processing', 'image' => 'assets/Natural Language Processing.jpg'],
        ];

        $NetworkSecurityCourses = [
            ['title' => 'Software Security', 'image' => 'assets/Software Security.jpg'],
            ['title' => 'Network Administration', 'image' => 'assets/Network Administration.jpg'],
            ['title' => 'Popular Network Technology', 'image' => 'assets/Popular Network Technology.jpg'],
        ];

        // Mulai assign faker ke masing-masing isi konten course dalam masing-masing category
        if($DataScienceCategory){
            foreach($DataScienceCourses as $Courses){
                Course::create([
                    'categories_id' => $DataScienceCategory->id,
                    'title' => $Courses['title'],
                    'teaser' => $faker->sentence(),
                    'summaries' => $faker->paragraph(),
                    'ImagePath' => $Courses['image'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        if($NetworkSecurityCategory){
            foreach($NetworkSecurityCourses as $Courses){
                Course::create([
                    'categories_id' => $NetworkSecurityCategory->id,
                    'title' => $Courses['title'],
                    'teaser' => $faker->sentence(),
                    'summaries' => $faker->paragraph(),
                    'ImagePath' => $Courses['image'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
