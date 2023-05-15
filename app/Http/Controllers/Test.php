<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hamasaki;

class Test extends Controller
{

    public function test(){

        $dbtest = new Hamasaki();
        $value = $dbtest->find(1);
        return view('/for_teachers/grammar');
    }
}