<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function show(){
        return view('for_teachers/download_pages/stories');
    }
}
