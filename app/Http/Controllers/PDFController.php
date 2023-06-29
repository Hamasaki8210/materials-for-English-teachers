<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\ViewTitlesReading;
use App\Models\ViewQuestionsAnswer;
use App\Models\ViewVocabulary;
use App\Models\ViewPractice;
use App\Models\WorkArticleVisibility;
use App\Models\StoryMenu;

class PDFController extends Controller
{
    // public function index(){

    // 	$pdf = PDF::loadHTML('<h1>Hello World</h1>');

    // 	return $pdf->stream();

    // }
    public function index() {
        // $sushiTable = [
        //     'たまご' => '100円',
        //     'いくら' => '200円',
        //     'サーモン' => '180円',
        //     'いか' => '100円',
        //     'マグロ' => '110円',
        //     'えび' => '100円',
        // ];

        // $grammar_article_contents = GrammarArticle::all();
        // $pdf = PDF::loadView('for_teachers.test', compact('grammar_article_contents'));
        // $pdf->setPaper('A4');
        // return $pdf->stream();
        // $pdf->setPaper('A4');
        // $pdf = PDF::loadHTML('<h1>Hello World</h1>');

    	// return $pdf->stream();
    	// return $pdf->download();
    }

    public function downloadPDF(){
        $db_story_menu = new StoryMenu();
        $db_title_reading = new ViewTitlesReading();
        $db_question_answer = new ViewQuestionsAnswer();
        $db_vocabulary = new ViewVocabulary();
        $db_practice = new ViewPractice();
        $db_visibility = new WorkArticleVisibility();

        $menus = $db_story_menu->getMenus();
        $target_db_titles_readings = $db_title_reading->getViewTitlesReadings(1);
        $titles = $db_title_reading->getViewTitlesReadings(1);
        $qas= $db_question_answer->getViewQuestionsAnswers(1);
        $vocabularies = $db_vocabulary->getViewVocabularies(1);
        $practices = $db_practice->getViewPractices(1);
        $visible_articles = $db_visibility->getVisibleWorkArticles();

        $readings = [];
        $bolds = [];

        // split sentences by bold parts and bolds by comma
        foreach($titles as $index => $target_db_titles_reading){
            $split_sentences = preg_split("[\*\*]", $target_db_titles_reading->sentence);
            $split_bolds = preg_split("[,]", $target_db_titles_reading->bold);
            array_push($readings, $split_sentences);
            array_push($bolds, $split_bolds);
        }

        // $image_path = storage_path('images/soccer-sample.png');
        // $image_data = base64_encode(file_get_contents($image_path));
        $pdf = PDF::loadView('for_teachers/pdf/download_pdf',compact('menus','titles','readings','bolds','vocabularies','qas','practices','visible_articles'));
        $fileName =  'download.pdf';
        $pdf->save(public_path() . "/" . $fileName);
        $pdf = public_path($fileName);
        return response()->download($pdf);
    }
}
