<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewTitlesReading;
use App\Models\ViewQuestionsAnswer;
use App\Models\ViewVocabulary;
use App\Models\ViewPractice;

class StoryController extends Controller
{
    public function show(){

        $db_title_reading = new ViewTitlesReading();
        $db_question_answer = new ViewQuestionsAnswer();
        $db_vocabulary = new ViewVocabulary();
        $db_practice = new ViewPractice();

        $db_title_reading->getViewTitlesReadings(1);

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
