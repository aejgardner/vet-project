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

Route::group(["prefix" => "owners"], function () {
    
    // return paginated list of all owners
    Route::get('/', 'Owners@index');

    // create owner
    Route::get('/create', 'Owners@create');
    Route::post('/create', 'Owners@createOwner');

    // get input from nav searchbar and call searchOwner method
    Route::get('/search', 'Owners@searchOwner');

    // edit pre existing owner details
    Route::get('/edit/{owner}', 'Owners@edit');
    Route::post('/edit/{owner}', 'Owners@editOwner');

    // bring up specific owner page and handle post request when adding a new animal
    Route::get('/{owner}', 'Owners@show');
    Route::post('/{owner}', 'Owners@addAnimal');

});

Route::group(["prefix" => "animals"], function () {
    
    // return paginated list of all owners
    Route::get('/', 'Animals@index');

    // // create owner
    // Route::get('/create', 'Owners@create');
    // Route::post('/create', 'Owners@createOwner');

    // // get input from nav searchbar and call searchOwner method
    // Route::get('/search', 'Owners@searchOwner');

    // // edit pre existing owner details
    // Route::get('/edit/{owner}', 'Owners@edit');
    // Route::put('/edit/{owner}', 'Owners@editOwner');

    // // bring up specific owner page and handle post request when adding a new animal
    // Route::get('/{owner}', 'Owners@show');
    // Route::post('/{owner}', 'Owners@addAnimal');

});


// contact page
Route::get('/contact', function() {
    return view('contact');
});

// about page
Route::get('/about', function() {
    return view('about');
});