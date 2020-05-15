<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Animal;
use App\Http\Requests\OwnerRequest;
use App\Http\Requests\AnimalRequest;

class Owners extends Controller
{
    public function index() 
    {
        $owners = Owner::paginate(10);
        
        return view('owners', ['owners' => $owners]);
    }

    public function show(Owner $owner) 
    { 
        return view('owner', ['owner' => $owner]);
    }

    public function create() 
    { 
        return view('form');
    }

    public function createOwner(OwnerRequest $request) 
    { 
        // get all of the data that has just been submitted - all() method filters out the useful parts of the post request that comes through, only makes available the input data
        $data = $request->all();
        
        // create a new owner, passing in the submitted data
        $owner = Owner::create($data);
        
        // redirect the browser to the new article
        return redirect("/owners/{$owner->id}");
    }

    // retrieves pre exisitng owner form with data they submitted - route model binding. Laravel uses its magic to know which owner to retrieve when you pass in the id in the url, even though there looks like there's no correlation in this method.
    public function edit(Owner $owner) 
    { 
        return view('form', ['owner' => $owner]);
    }

    // handles the edit owner post request
    public function editOwner(OwnerRequest $request, Owner $owner)
    {
        // get all of the new relevant submitted data
        $data = $request->all();
        
        // 'fills' or overwrites existing fields in owner's details
        $owner->fill($data)->save();
    }

    // post request when owner adds animal
    public function addAnimal(AnimalRequest $request, Owner $owner)
    {
        // get owner id 
        $owner_id = ['owner_id' => $owner->id];

        // gets all of the relevant submitted data
        $data = $request->all();

        $data = array_merge($data, $owner_id);
        
        $animal = Animal::create($data);

        return redirect("/owners/{$owner->id}");
    }
}
