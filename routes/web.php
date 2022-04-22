<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');


Route::get('/comics', function () {
    $comics = config('comics');
    return view('pages.comics',[
        'comics' => $comics
    ]);
})->name('comics');

Route::get('/comics/{id}', function ($id) {

    $comics = config('comics');

    abort_if(!isset($comics[$id]), 404);

    $detail = $comics[$id];

        return view('pages.comic_detail',[
            'comics' => $detail
        ]);


})->name('comic_detail') ->where('id','[0-9]+');
