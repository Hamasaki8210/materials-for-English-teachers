<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrammarTense;

class GrammarController extends Controller
{
    public function index(){

        $db_grammar_tense = new GrammarTense();
        $tenses = $db_grammar_tense->getAllGrammarTenses();

        return view('for_teachers/grammar')
            ->with('tenses',$tenses);
    }
}
