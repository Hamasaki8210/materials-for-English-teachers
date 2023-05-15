<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrammarArticle;

class StoryController extends Controller
{
    public function show(){
        $grammar_article_contents = GrammarArticle::all();
        $display_contents = [];

        // format vocabulary
        $grammar_article_vocabs = preg_split("[\.]",$grammar_article_contents[0]->vocabulary);
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
        $grammar_article_questions = preg_split("[\?]",$grammar_article_contents[0]->question);
        $display_contents_questions=[];
        for($j = 1; $j <= count($grammar_article_questions); $j++){
            if($grammar_article_questions[$j-1] != ""){
                array_push($display_contents_questions,'<div class="question-sentence"><span>'.$j.'.&nbsp;&nbsp;</span>'.$grammar_article_questions[$j-1].'?</div><div class="question-answer"></div>');
            }
        }
        
        // put formatted array into array for view display
        $jndivisual_display_contents = array(
            "title" => $grammar_article_contents[0]->title,
            "reading" => $grammar_article_contents[0]->reading, 
            "vocabulary" => $display_contents_vocabs,
            "question" => $display_contents_questions,
            "practice" => $grammar_article_contents[0]->practice,
            "answer" => $grammar_article_contents[0]->answer
        );
        array_push($display_contents, $jndivisual_display_contents);

        return view('for_teachers/download_pages/stories',[
            'display_contents'=>$display_contents,
        ]);
    }
}
