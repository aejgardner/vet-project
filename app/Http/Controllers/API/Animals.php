<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Animal;
use App\Http\Resources\API\AnimalResource;
use App\Treatment;

class Animals extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Animal::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only(["name", "type", "weight", "height", "biteyness", "owner_id"]);

        // setTags() exists in the Animal model and synchronises the tags with the Animal instance (see Animal model)
        $animal = Animal::create($data)->setTreatments($request->get("treatments"));

        return new AnimalResource($animal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return new AnimalResource($animal);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Animal $animal, Request $request)
    {
        // only get the fillable properties and not the tags
        $data = $request->only(["name", "type", "weight", "height", "biteyness", "owner_id"]);
        
        // save updated properties to existing animal
        $animal->fill($data)->save();
        
        /// use the new method - can't chain as save() returns a bool
        $animal->setTreatments($request->get("treatments"));
        
        return new AnimalResource($animal);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();

        return response(null, 204);
    }
}
