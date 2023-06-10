<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewTitlesReading;
use App\Models\ViewQuestionsAnswer;
use App\Models\ViewVocabulary;
use App\Models\ViewPractice;
use App\Models\StoryMenu;

class StoryController extends Controller
{
    public function show(){

        $db_story_menu = new StoryMenu();
        $db_title_reading = new ViewTitlesReading();
        $db_question_answer = new ViewQuestionsAnswer();
        $db_vocabulary = new ViewVocabulary();
        $db_practice = new ViewPractice();

        $target_db_titles_readings = $db_title_reading->getViewTitlesReadings(1);
        $display_questions_answers= $db_question_answer->getViewQuestionsAnswers(1);
        $display_vocabularies = $db_vocabulary->getViewVocabularies(1);
        $display_practices = $db_practice->getViewPractices(1);
        $display_menus = $db_story_menu->getMenus();

        $display_sentences = [];
        $display_bolds = [];

        // split sentences by bold parts and bolds by comma
        foreach($target_db_titles_readings as $index => $target_db_titles_reading){
            $split_sentences = preg_split("[\*\*]", $target_db_titles_reading->sentence);
            $split_bolds = preg_split("[,]", $target_db_titles_reading->bold);
            array_push($display_sentences, $split_sentences);
            array_push($display_bolds, $split_bolds);
        }

        // dd($display_sentences);
        // return view('for_teachers/download_pages/stories',[
        //     'menus'=>$display_menus,
        //     'titles'=>$target_db_titles_readings,
        //     'readings'=>$display_sentences,
        //     'bolds'=>$display_bolds,
        //     'vocabularies'=>$display_vocabularies,
        //     'qa'=>$display_questions_answers,
        //     'practices'=>$display_practices
        // ]);
        return view('for_teachers/download_pages/stories')
        ->with('menus',$display_menus)
        ->with('titles',$target_db_titles_readings)
        ->with('readings',$display_sentences)
        ->with('bolds',$display_bolds);
    }
}
