<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function test()
    {
        return view('home');
    }

    function service()
    {
        return view('home');
    }
}
