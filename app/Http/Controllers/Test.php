<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hamasaki;
use PDF;

class Test extends Controller
{

    public function index(){

        
        // return response(\Illuminate\Http\Response::HTTP_OK);
        $pdf = PDF::loadView('for_teachers.test');
        // $pdf->setPaper('A4');
        // return $pdf->stream();
        // $pdf->setPaper('A4');
        // $pdf = PDF::loadHTML('<h1>Hello World</h1>');

    	return $pdf->stream();
    }
}