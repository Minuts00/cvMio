<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homesController extends Controller
{
    public function home()
    {
        return view ('home');
    }

    public function anagdata()
    {
        return view ('anagdata');
    }
}
