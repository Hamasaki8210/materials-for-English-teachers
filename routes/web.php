<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\Test;

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

// test
Route::get('/test', [Test::class,'test']);

Route::get('/for_teachers/simple_sentences', function () {
    return view('/for_teachers/grammar/simple_sentences');
});

Route::get('/for_teachers/stories', [StoryController::class,'show']) -> name('stories');
// Route::get('/for_teachers/stories', [PDFController::class,'index']) -> name('stories');

Route::get('pdf','App\Http\Controllers\PDFController@index');

Route::get('/for_teachers/test2', 'App\Http\Controllers\PDFController@downloadPDF');
Route::get('/for_teachers/changeVisibilityStatus', [StoryController::class,'changeVisibilityStatus'])->name('change.visibility');