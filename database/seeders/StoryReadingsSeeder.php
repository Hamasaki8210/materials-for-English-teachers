<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StoryReading;
use Carbon\Carbon;

class StoryReadingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            ["sentence" => "Emily woke up to a bright, sunny day. She got dressed, had breakfast and ** out to the park. She ** along the path and noticed a group of children playing ball. She smiled and continued walking until she found a quiet spot under a tree. She sat down and began reading her book. ** quickly, and soon after, it was lunchtime. Emily packed up her things and headed to a nearby cafe. She ordered a sandwich and some tea. She sat outside in the warm sun and started eating. Suddenly, a ** bird flew down and took her sandwich! She was very surprised and **. She decided to eat inside the cafe from now on.",
            "bold" => "headed,strolled,Time flew by,giant","article_id" => 1, "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["sentence" => "There is a boy named Tim who lives in a small **. He wakes up early every morning and goes to school. Today, he has a ** test, and he feels excited about it. During the test, he carefully reads the questions and writes his answers. He finishes before everyone else and feels ** about his **. After school, he goes to the park to play soccer with his friends. They have a lot of fun, and Tim even scores a goal! When he gets home, his mom makes his favorite dinner, spaghetti. He eats quickly because he wants to finish his homework before bedtime. Tim feels tired but happy after a ** day.",
            "bold" => "village,science,confident,performance,productive","article_id" => 2, "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
        ];

        StoryReading::insert($params);
    }
}
