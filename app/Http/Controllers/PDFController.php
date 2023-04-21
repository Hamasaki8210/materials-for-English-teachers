<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    // public function index(){

    // 	$pdf = PDF::loadHTML('<h1>Hello World</h1>');

    // 	return $pdf->stream();

    // }
    public function index() {
        $sushiTable = [
            'たまご' => '100円',
            'いくら' => '200円',
            'サーモン' => '180円',
            'いか' => '100円',
            'マグロ' => '110円',
            'えび' => '100円',
        ];

        $pdf = PDF::loadView('for_teachers.grammar', compact('sushiTable'));
        // $pdf->setPaper('A4');
        // return $pdf->stream();
        $pdf->setPaper('A4');
    	return $pdf->download();
    }
}
