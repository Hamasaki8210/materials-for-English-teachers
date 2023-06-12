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
        $questions = ["How was the weather when Emily woke up?","Where did Emily go after having breakfast?","Who did Emily see playing ball?","Where did Emily decide to sit down?","What did Emily do after she sat down?","Where did Emily go for lunch?","What did Emily order at the cafe?","Why did Emily decide to eat inside the cafe from now on?","What does Tim do during the test?","How does Tim feel after finishing the test?","What does Tim do after school?","What game do Tim and his friends play at the park?","Why does Tim eat quickly?","How does Tim feel after finishing his homework?"];
        $article_id = [1,1,1,1,1,1,1,1,2,2,2,2,2,2];
        $article_id_previous = 1;
        $question_id = 1;
        $insert_params = [];

        foreach($questions as $index => $question){
            // if article_id is the same as previous article_id, increment practice_id
            if($article_id_previous != $article_id[$index]){
                $question_id = 1;
            }
            $insert_param = 
                [
                    "question" => $question,
                    "article_id" => $article_id[$index],
                    "question_id" => $question_id++,
                    "updated_at" => Carbon::now(),
                    "created_at" => Carbon::now()
                ];
            array_push($insert_params,$insert_param);
            $article_id_previous = $article_id[$index];
        };

        StoryQuestion::insert($insert_params);
    }
}
