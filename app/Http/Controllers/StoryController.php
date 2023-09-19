<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewTitlesReading;
use App\Models\ViewQuestionsAnswer;
use App\Models\ViewVocabulary;
use App\Models\ViewPractice;
use App\Models\StoryMenu;
use App\Models\WorkArticleVisibility;
use App\Models\SessionDbMapping;
use App\Models\GrammarTense;

class StoryController extends Controller
{
    // get all database values for selected tense for initial download page
    public function show($tense_id){
        
        $db_grammar_tense = new GrammarTense();
        $db_story_menu = new StoryMenu();
        $db_title_reading = new ViewTitlesReading();
        $db_question_answer = new ViewQuestionsAnswer();
        $db_vocabulary = new ViewVocabulary();
        $db_practice = new ViewPractice();

        // get database values calling each functions written in each models
        $display_tense_name = $db_grammar_tense->getGrammarTense($tense_id);
        $target_db_titles_readings = $db_title_reading->getViewTitlesReadings($tense_id);
        $display_questions_answers= $db_question_answer->getViewQuestionsAnswers($tense_id);
        $display_vocabularies = $db_vocabulary->getViewVocabularies($tense_id);
        $display_practices = $db_practice->getViewPractices($tense_id);
        $display_menus = $db_story_menu->getMenus();
        $display_sentences = [];
        $display_bolds = [];

        // number of the articles
        $article_number = count($target_db_titles_readings);

        // split sentences by bold parts(**) and bolds by comma
        foreach($target_db_titles_readings as $index => $target_db_titles_reading){
            $split_sentences = preg_split("[\*\*]", $target_db_titles_reading->sentence);
            $split_bolds = preg_split("[,]", $target_db_titles_reading->bold);
            array_push($display_sentences, $split_sentences);
            array_push($display_bolds, $split_bolds);
        }
        // dd($split_sentences);
        // insert work_article_visibilities table with visible status value(1)
        $work_article_visibility_func = new WorkArticleVisibility();
        $work_article_visibility_func->setInitialVisibility($article_number);

        return view('for_teachers/download_pages/stories')
        ->with('tense_name',$display_tense_name[0]->tense)
        ->with('menus',$display_menus)
        ->with('titles',$target_db_titles_readings)
        ->with('readings',$display_sentences)
        ->with('bolds',$display_bolds)
        ->with('vocabularies',$display_vocabularies)
        ->with('qas',$display_questions_answers)
        ->with('practices',$display_practices);
    }

    // change visibility status when users click checkboxes
    public function changeVisibilityStatus(Request $request){

        $id = $request->input("idName");
        $isChecked = filter_var($request->input("isChecked"), FILTER_VALIDATE_BOOLEAN);

        // if true then change it to 1, else then 0
        $isCheckedForDb = $isChecked ? "1" : "0";
        // split by hyphen
        $split_values = preg_split("[-]", $id);
        $split_count = count($split_values);
        $id_name = "";
        $article_id = 0;

        // if the split values are more than 2, the first 2 values are the session name(this is readingvocab)
        if($split_count > 2){
            $id_name = $split_values[0] . $split_values[1];
            $article_id = intval($split_values[2]) + 1;
        // if the split values are less than 2, the first value is the session name(this is other than readingvocab)
        }else{
            $id_name = $split_values[0];
            $article_id = intval($split_values[1]) + 1;
        }
        // get mapped db column name according to the session name given from view
        $sessionDbMapping = new SessionDbMapping();
        $db_column_name = $sessionDbMapping->getMappedDbName($id_name);
        $work_article_visibility_func = new WorkArticleVisibility();
        // update work article visibility table
        $work_article_visibility_func->updateWorkArticleVisilibity($db_column_name[0]->db_column_name, $article_id, $isCheckedForDb);
    }
}
