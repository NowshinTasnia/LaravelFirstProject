<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        //echo "got it";
        return view("form.create");
    }

    public function save(Request $request)
    {
        $request->validate()
        //echo "got it";
        echo $request->first_name;
        echo "<br>";
        echo $request->last_name;
        echo "<br>";
        echo $request->email;
        echo "<br>";
        echo $request->id;
        return $request;
    }

}
