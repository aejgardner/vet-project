<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {

        $greeting = '';

        if (date("H") < 12) {
            $greeting = 'Good Morning!';
        } else if (date("H") > 11 && date("H") < 18) {
            $greeting = 'Good Afternoon!';
        } else if (date("H") > 17) {
            $greeting = 'Good Evening!';
        }

        return view('welcome', ['greeting' => $greeting]);
    }
}
