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
    return view('home');
})->name('home');

Route::get('/comicsHome', function(){
    $comics = config('comics');
    return view('comicsHome', ['comics' => $comics]);
})->name('comicsHome');

Route::get('/details/{id}', function($id){
    $detailsComics = config('comics');
    $details = $detailsComics[$id];
    return view('details', ['details' => $details]);
})->name('details');

Route::get('/tv', function(){
    return view('tv');
})->name('tv');
