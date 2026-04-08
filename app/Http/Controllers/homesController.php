<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homesController extends Controller
{
    public function index()
    {
        return view ('index');
    }

    public function anagdata()
    {
        return view ('anagdata');
    }

    public function miscellaneous()
    {
        return view ('miscellaneous');
    }

    public function jobs()
    {
        return view ('jobs');
    }

    public function education()
    {
        return view ('education');
    }
}

