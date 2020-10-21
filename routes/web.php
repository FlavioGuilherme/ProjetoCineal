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
});



//Pagina inicial
Route::get('/home', 'CinemaController@home');


//Cinema
Route::get('/historia', 'CinemaController@historia');
Route::get('/filmes', 'CinemaController@filmes');


//Login 
Route::get('/login', 'CinemaController@login');