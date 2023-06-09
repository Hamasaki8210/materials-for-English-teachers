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
        $params = [
            [
                "vocabulary" => "To head",
                "meaning" => "To go somewhere.",
                "article_id" => 1, 
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "vocabulary" =>"To stroll",
                "meaning" =>"to go for a walk.",
                "article_id" => 1, 
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "vocabulary"=>"Time flew by",
                "meaning"=>"Time quickly passed.",
                "article_id"=> 1, 
                "updated_at"=> Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "vocabulary"=>"Giant",
                "meaning"=>"very big.",
                "article_id"=> 1, 
                "updated_at"=> Carbon::now(),
                "created_at"=> Carbon::now()
            ],
            [
                "vocabulary"=>"Scared",
                "meaning"=>"to feel fear.",
                "article_id"=> 1, 
                "updated_at"=> Carbon::now(),
                "created_at"=> Carbon::now()
            ],
            [
                "vocabulary" => "Village",
                "meaning" => "A small group of houses in the countryside.",
                "article_id" => 2, 
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "vocabulary" =>"Confident",
                "meaning" =>"Feeling sure or certain about something.",
                "article_id" => 2, 
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "vocabulary"=>"Productive",
                "meaning"=>"Doing things that are useful or helpful.",
                "article_id"=> 2, 
                "updated_at"=> Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "vocabulary"=>"Science",
                "meaning"=>"The study of nature and the world around us.",
                "article_id"=> 2, 
                "updated_at"=> Carbon::now(),
                "created_at"=> Carbon::now()
            ],
            [
                "vocabulary"=>"Performance",
                "meaning"=>"Results.",
                "article_id"=> 2, 
                "updated_at"=> Carbon::now(),
                "created_at"=> Carbon::now()
            ],
        ];
        StoryVocabulary::insert($params);
    }
}
