<?php

namespace App\Http\Controllers\API\Owners;

use App\Http\Resources\API\AnimalResource;
use App\Owner;
use App\Animal;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\AnimalRequest as Request; // uses AnimalRequest - validation for posting animal info to API


class Animals extends Controller
{
    public function show(Owner $owner)
    {
        // animals property is generated due to the fact that there is an animals method, this returns a collection as opposed to an object, which is what the method returns - so when calling show, becuase you want a list of animals you want to return the collection
        $animals = $owner->animals;

        // returning all the animals that belong to an owner - Laravel knows to construct JSON because you are not returning a view
        return AnimalResource::collection($animals);
    }

    public function store(Owner $owner, Request $request) 
    {
        $data = $request->all();

        // animals method return an object
        $new_animal = $owner->animals()->create($data);

        // 
        return $new_animal;
    }

}

// Standard for rest api is it returns JSON. If you're interacting with views, you will be returning HTML - this is what the web routes folder is used for. So in your API controllers, you are returning a collection, which is basically an object, so Laravel transforms it into JSON.

// views pluck bits of data and return them as strings within an HTML document, whereas 

// default behaviour of controller, whatever we return will be JSON unless we're returning a view, because a view constructs HTML