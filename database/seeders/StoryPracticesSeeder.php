<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StoryPractice;
use Carbon\Carbon;

class StoryPracticesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            [
            "practice" => "How was the weather when you woke up today?",
            "article_no" => 1,
            "tense_no" => 1, 
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "After having breakfast, what do you usually do?",
            "article_no" => 1,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "Last time you went to the park, what did you do?",
            "article_no" => 1,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "Where is the last park you went to?",
            "article_no" => 1,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "What is the last book you read?",
            "article_no" => 1,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "Where did you eat lunch yesterday?",
            "article_no" => 1,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "What was the most recent thing you ordered at a cafe?",
            "article_no" => 1,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "Did you sit inside or outside the last time you went to a cafe?",
            "article_no" => 1,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "Do you usually wake up early in the morning like Tim?",
            "article_no" => 1,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "How do you feel when you have a test at school?",
            "article_no" => 2,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "Do you carefully read the practices during a test like Tim does?",
            "article_no" => 2,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "How do you feel when you finish a test before everyone else?",
            "article_no" => 2,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "Do you like to play sports with your friends after school like Tim does?",
            "article_no" => 2,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "What is your favorite game to play with your friends?",
            "article_no" => 2,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "What is your favorite food that your mom makes for dinner?",
            "article_no" => 2,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            [
            "practice" => "How do you feel after finishing your homework?",
            "article_no" => 2,
            "tense_no" => 1,
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
            ],
            ];
            
                        
        StoryPractice::insert($params);
    }
}
