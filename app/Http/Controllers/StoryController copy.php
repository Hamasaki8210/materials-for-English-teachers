<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrammarArticle;
use App\Models\GrammarStoryMenu;

class StoryController extends Controller
{
    public function show(){
        $grammar_article_contents = GrammarArticle::all();
        $grammar_story_menus = GrammarStoryMenu::all();
        $display_contents = [];

        foreach($grammar_article_contents as $grammar_article_content){
            // format reading
            $grammar_article_reading = str_replace("</b>","</b></span>",str_replace("<b>","<span><b>",$grammar_article_content->reading));

            // format vocabulary
            $grammar_article_vocabs = preg_split("[\.]",$grammar_article_content->vocabulary);
            $display_contents_vocabs="";
            for($j = 1; $j <= count($grammar_article_vocabs); $j++){
                if($grammar_article_vocabs[$j-1] != ""){
                    $vocab_title = ltrim(preg_split("[:]",$grammar_article_vocabs[$j-1])[0]);
                    $vocab_meaning = preg_split("[:]",$grammar_article_vocabs[$j-1])[1];
                    if($j != count($grammar_article_vocabs)){
                        $display_contents_vocabs .= '<div class="vocab-lists"><span>'.$j.'.&nbsp;&nbsp;</span><b>'.$vocab_title.'</b>:'.$vocab_meaning.'.</div>';
                    }else{
                        $display_contents_vocabs .= '<div class="vocab-lists"><span>'.$j.'.&nbsp;&nbsp;</span><b>'.$vocab_title.'</b>:'.$vocab_meaning.'</div>';
                    }
                }
            }

            // format question
            $grammar_article_questions = preg_split("[\?]",$grammar_article_content->question);
            $display_contents_questions="";
            for($j = 1; $j <= count($grammar_article_questions); $j++){
                if($grammar_article_questions[$j-1] != ""){
                    $display_contents_questions .= '<tr class="question"><td rowspan="3" class="question-num">'.$j.'.&nbsp;</td><td>'
                        .$grammar_article_questions[$j-1].'?</td></tr><tr><td class="question-answer"></td></tr><tr><td class="question-margin"></td></tr>';
                }
                if($j===1){
                    $display_contents_questions = '<table>' .$display_contents_questions;
                }elseif($j===count($grammar_article_questions)){
                    $display_contents_questions = $display_contents_questions . '</table>';
                }
            }

            // format practice
            $grammar_article_practices = preg_split("[\?]",$grammar_article_content->practice);
            $display_contents_practices="";
            for($j = 1; $j <= count($grammar_article_practices); $j++){
                if($grammar_article_practices[$j-1] != ""){
                    $display_contents_practices .= '<tr class="practice"><td rowspan="3" class="practice-num">'.$j.'.&nbsp;</td><td>'
                        .$grammar_article_practices[$j-1].'?</td></tr><tr><td class="practice-answer"></td></tr><tr><td class="practice-margin"></td></tr>';
                }
                if($j===1){
                    $display_contents_practices = '<table>' .$display_contents_practices;
                }elseif($j===count($grammar_article_practices)){
                    $display_contents_practices = $display_contents_practices . '</table>';
                }
            }

            // format answer
            $grammar_article_answers = preg_split("[\.]",$grammar_article_content->answer);
            $display_contents_answers="";
            for($j = 1; $j <= count($grammar_article_answers); $j++){
                if($grammar_article_answers[$j-1] != ""){
                    $display_contents_answers .= '<tr class="answer"><td class="answer-num">'.$j.'.&nbsp;</td><td class="answer-sentence">'
                        .ltrim($grammar_article_answers[$j-1]).'.</td></tr>';
                }
                if($j===1){
                    $display_contents_answers = '<table>' .$display_contents_answers;
                }elseif($j===count($grammar_article_answers)){
                    $display_contents_answers = $display_contents_answers . '</table>';
                }
            }
            
            // put formatted array into array for view display
            $indivisual_display_contents = array(
                "title" => $grammar_article_content->title,
                "reading" => $grammar_article_reading, 
                "vocabulary" => $display_contents_vocabs,
                "question" => $display_contents_questions,
                "practice" => $display_contents_practices,
                "answer" => $display_contents_answers
            );
            array_push($display_contents, $indivisual_display_contents);
        }

        return view('for_teachers/download_pages/stories',[
            'display_contents'=>$display_contents,
            'display_menus'=>$grammar_story_menus
        ]);
    }
}
