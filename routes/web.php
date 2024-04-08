<?php

use Illuminate\Support\Facades\Route;

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

    $movies=config("db.movie");

    $cards=config("db.cards");

    $linkList=config("db.linkList");
    
    //dd($movies);

    return view('home', compact('movies','cards','linkList'));
})->name('home');


Route::get('cover', function () {

    $movies=config("db.movie");

    $singleMovie = $movies[0];
    return view('cover',compact('singleMovie'));

})->name('cover');