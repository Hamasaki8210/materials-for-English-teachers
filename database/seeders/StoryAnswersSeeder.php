<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StoryAnswer;
use Carbon\Carbon;

class StoryAnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            [
            "answer" => "The weather was bright and sunny when Emily woke up.",
            "article_id" => 1,
 
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "After having breakfast, Emily went to the park.",
            "article_id" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "Emily saw a group of children playing ball.",
            "article_id" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "Emily decided to sit down under a tree.",
            "article_id" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "After she sat down, Emily began reading her book.",
            "article_id" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "Emily went to a nearby cafe for lunch.",
            "article_id" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "Emily ordered a sandwich and some tea at the cafe.",
            "article_id" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "Emily decided to eat inside the cafe from now on because a giant bird flew down and took her sandwich.",
            "article_id" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "Tim wakes up early every morning and goes to school.",
            "article_id" => 2,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "Tim feels excited about his science test.",
            "article_id" => 2,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "During the test, Tim carefully reads the questions and writes his answers.",
            "article_id" => 2,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "Tim feels confident about his performance after finishing the test.",
            "article_id" => 2,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "After school, Tim goes to the park to play soccer with his friends.",
            "article_id" => 2,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "Tim and his friends play soccer at the park.",
            "article_id" => 2,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "Tim's mom makes his favorite dinner, spaghetti.",
            "article_id" => 2,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "Tim eats quickly because he wants to finish his homework before bedtime.",
            "article_id" => 2,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "Tim feels tired but happy after finishing his homework.",
            "article_id" => 2,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "answer" => "Tim feels productive and happy at the end of the day.",
            "article_id" => 2,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            ];
            StoryAnswer::insert($params);
    }
}
