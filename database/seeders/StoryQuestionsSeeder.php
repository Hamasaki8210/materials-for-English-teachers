<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StoryQuestion;
use Carbon\Carbon;

class StoryQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            [
                "question" => "How was the weather when Emily woke up?",
                "article_no" => 0,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "question" => "Where did Emily go after having breakfast?",
                "article_no" => 0,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "question" => "Who did Emily see playing ball?",
                "article_no" => 0,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "question" => "Where did Emily decide to sit down?",
                "article_no" => 0,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "question" => "What did Emily do after she sat down?",
                "article_no" => 0,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "question" => "Where did Emily go for lunch?",
                "article_no" => 0,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "question" => "What did Emily order at the cafe?",
                "article_no" => 0,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "question" => "Why did Emily decide to eat inside the cafe from now on?",
                "article_no" => 0,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "question" => "What does Tim do during the test?",
                "article_no" => 1,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "question" => "How does Tim feel after finishing the test?",
                "article_no" => 1,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "question" => "What does Tim do after school?",
                "article_no" => 1,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "question" => "What game do Tim and his friends play at the park?",
                "article_no" => 1,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "question" => "Why does Tim eat quickly?",
                "article_no" => 1,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "question" => "How does Tim feel after finishing his homework?",
                "article_no" => 1,
                "tense_no" => "01",
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
        ];

        StoryQuestion::insert($params);
    }
}
