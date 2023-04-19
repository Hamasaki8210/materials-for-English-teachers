<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/for_teachers', function () {
    return view('/for_teachers/grammar');
});

Route::get('/for_teachers/simple_sentences', function () {
    return view('/for_teachers/grammar/simple_sentences');
});

Route::get('/for_teachers/stories', [StoryController::class,'show']) -> name('stories');