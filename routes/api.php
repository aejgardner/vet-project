<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Owners;
use App\Http\Controllers\API\Animals;
use App\Http\Controllers\API\Owners\Animals as ForeignKeys;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix" => "owners",
            "middleware" => ["auth:api"]], function () { // auth:api = you must have an api key to get any further. So vets will log into the site, and will THEN be able to request an api key because they are already confirmed to be a vet by logging in.

    // list all owners
    Route::get('', [Owners::class, "index"]);

    // create new owner
    Route::post("", [Owners::class, "store"]);

    Route::group(["prefix" => "{owner}"], function () {

        // show one owner
        Route::get('', [Owners::class, "show"]);
        
        // edit an owner
        Route::put('', [Owners::class, "update"]);

        // delete owner
        Route::delete("", [Owners::class, "destroy"]);

        // TRICKSY owners/{owner}/animals
        Route::post('/animals', 'API\Owners\animals@store');
        Route::get('/animals', 'API\Owners\animals@show');

    });

});

Route::group(["prefix" => "animals"], function () {

    // list all animals
    Route::get('', [Animals::class, "index"]);

    // create new animal
    Route::post("", [Animals::class, "store"]);

    Route::group(["prefix" => "{animal}"], function () {

        // show one animal
        Route::get('', [Animals::class, "show"]);
        
        // edit an animal
        Route::put('', [Animals::class, "update"]);

        // delete animal
        Route::delete("", [Animals::class, "destroy"]);

    });

});

