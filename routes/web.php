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

Route::get('/', 'Home@index');

Route::get('/owners', 'Owners@index');

// create
Route::get('owners/create', 'Owners@create');
Route::post('/owners/create', 'Owners@createOwner');

// get input from nav searchbar
Route::get('/owners/search', 'Owners@searchOwner');

// edit
Route::get('/owners/edit/{owner}', 'Owners@edit');
Route::post('/owners/edit/{owner}', 'Owners@editOwner');

// bring up singular owner page and post request when adding animal
Route::get('/owners/{owner}', 'Owners@show');
Route::post('/owners/{owner}', 'Owners@addAnimal');

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/about', function() {
    return view('about');
});