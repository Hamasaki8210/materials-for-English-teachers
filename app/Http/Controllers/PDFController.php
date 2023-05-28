<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrammarArticle;
use PDF;

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

        $grammar_article_contents = GrammarArticle::all();
        $pdf = PDF::loadView('for_teachers.test', compact('grammar_article_contents'));
        // $pdf->setPaper('A4');
        // return $pdf->stream();
        // $pdf->setPaper('A4');
        // $pdf = PDF::loadHTML('<h1>Hello World</h1>');

    	return $pdf->stream();
    	// return $pdf->download();
    }
}
