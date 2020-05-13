<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class Owners extends Controller
{
    public function index() 
    {
        $owners = Owner::all();
        
        return view('owners', ['owners' => $owners]);
    }

    public function show(Owner $owner) 
    { 
        return view('owner', ['owner' => $owner]);
    }
}
