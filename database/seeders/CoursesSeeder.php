<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesSeeder extends Seeder
{
    public function run()
    {
        Course::factory()->count(100)->create();
    }
}