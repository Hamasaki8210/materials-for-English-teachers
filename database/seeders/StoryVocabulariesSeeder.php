<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StoryVocabulary;
use Carbon\Carbon;

class StoryVocabulariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vocabularies = ["To head","To stroll","Time flew by","Giant","Scared","Village","Confident","Productive","Science","Performance"];
        $meanings = 
        ["To go somewhere.","To go for a walk.","Time quickly passed.","Very big.","To feel fear.",
        "A small group of houses in the countryside.","Feeling sure or certain about something.","Doing things that are useful or helpful.",
        "The study of nature and the world around us.","Results."];
        $article_id = [1,1,1,1,1,2,2,2,2,2];
        $article_id_previous = 0;
        $vocabulary_id = 1;
        $insert_params = [];

        // put arrays for story_vocabularies table
        foreach($vocabularies as $index => $vocabulary){
            // if article_id is the same as previous article_id, increment vocabulary_id
            if($article_id_previous != $article_id[$index]){
                $vocabulary_id = 1;
            }
            $insert_param = 
                [
                    "vocabulary" => $vocabulary,
                    "meaning" => $meanings[$index],
                    "article_id" => $article_id[$index],
                    "vocabulary_id" => $vocabulary_id++,
                    "updated_at" => Carbon::now(),
                    "created_at" => Carbon::now()
                ];
            array_push($insert_params,$insert_param);
            $article_id_previous = $article_id[$index];
        };

        StoryVocabulary::insert($insert_params);
    }
}
