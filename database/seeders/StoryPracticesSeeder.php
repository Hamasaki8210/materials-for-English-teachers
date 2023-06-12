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
        $practices = ["How was the weather when you woke up today?","After having breakfast, what do you usually do?","Last time you went to the park, what did you do?","Where is the last park you went to?","What is the last book you read?","Where did you eat lunch yesterday?","What was the most recent thing you ordered at a cafe?","Did you sit inside or outside the last time you went to a cafe?","Do you usually wake up early in the morning like Tim?","How do you feel when you have a test at school?","Do you carefully read the practices during a test like Tim does?","How do you feel when you finish a test before everyone else?","Do you like to play sports with your friends after school like Tim does?","What is your favorite game to play with your friends?","What is your favorite food that your mom makes for dinner?","How do you feel after finishing your homework?"];
        $article_id = [1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2];
        $article_id_previous = 0;
        $practice_id = 1;
        $insert_params = [];

        foreach($practices as $index => $practice){
            // if article_id is the same as previous article_id, increment practice_id
            if($article_id_previous != $article_id[$index]){
                $practice_id = 1;
            }
            $insert_param = 
                [
                    "practice" => $practice,
                    "article_id" => $article_id[$index],
                    "practice_id" => $practice_id++,
                    "updated_at" => Carbon::now(),
                    "created_at" => Carbon::now()
                ];
            array_push($insert_params,$insert_param);
            $article_id_previous = $article_id[$index];
        };
                        
        StoryPractice::insert($insert_params);
    }
}
