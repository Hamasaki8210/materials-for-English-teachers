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
        $data_num = 0;
        $params = [
            [
                "vocabulary" => "To head",
                "meaning" => "To go somewhere.",
                "article_no" => 1, 
                "tense_no" => "01", 
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "vocabulary" =>"To stroll",
                "meaning" =>"to go for a walk.",
                "article_no" => 1, 
                "tense_no" => "01", 
                "updated_at" => Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "vocabulary"=>"Time flew by",
                "meaning"=>"Time quickly passed.",
                "article_no"=> 1, 
                "tense_no"=> "01", 
                "updated_at"=> Carbon::now(),
                "created_at" => Carbon::now()
            ],
            [
                "vocabulary"=>"Giant",
                "meaning"=>"very big.",
                "article_no"=> 1, 
                "tense_no"=> "01", 
                "updated_at"=> Carbon::now(),
                "created_at"=> Carbon::now()
            ],
            [
                "vocabulary"=>"Scared",
                "meaning"=>"to feel fear.",
                "article_no"=> 1, 
                "tense_no"=> "01", 
                "updated_at"=> Carbon::now(),
                "created_at"=> Carbon::now()
            ],
        ];

        StoryVocabulary::insert($params);
    }
}
