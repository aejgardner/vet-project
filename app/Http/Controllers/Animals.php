<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Http\Requests\AnimalRequest;

class Animals extends Controller
{
    public function index() 
    {
        $animals = Animal::paginate(10);
        
        return view('animals', ['animals' => $animals]);
    }
}
