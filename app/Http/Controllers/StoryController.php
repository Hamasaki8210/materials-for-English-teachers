<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoryTitle;
use App\Models\StoryReading;
use App\Models\StoryVocabulary;
use App\Models\StoryQuestion;
use App\Models\StoryPractice;
use App\Models\StoryAnswer;

class StoryController extends Controller
{
    public function show(){

        $story_title = new StoryTitle();

        // $db_readings = StoryReading::all();
        // $db_vocabularies = StoryVocabulary::all();
        // $questions = StoryQuestion::all();
        // $practices = StoryPractice::all();
        // $answers = StoryAnswer::all();
        // $display_contents = [];
        // $readings = [];
        // $vocabularies = [];
        // $readings = [];
        // $readings = [];
        // $readings = [];
        // $readings = [];

        // 
        for($i = 1; $i <= $story_title->count(); $i++){
            // get titles
            $title_result = $story_title->getTitlesForStoryPage($i);
        }

        // push split bold by comma into array for view
        foreach($db_readings as $db_index => $db_reading){
            $db_reading->bold;
            $db_bolds = preg_split("[,]",$db_reading->bold);
            $readings_tmp = ["article_no"=>$db_reading->article_no, "sentence"=>$db_reading->sentence, "bold"=>$db_bolds];
            array_push($readings, $readings_tmp);
        }
        dd($title_result);

        foreach($db_vocabularies as $db_index => $db_vocabulary){
            array_push($vocabularies, $readings_tmp);
        }

        dd($title_result);

        return view('for_teachers/download_pages/stories',[
            'story_titles'=>$titles,
            'story_readings'=>$readings,
            'story_vocabularies'=>$vocabularies,
            'story_questions'=>$questions,
            'story_practices'=>$practices,
            'story_answers'=>$answers
        ]);
    }
}
