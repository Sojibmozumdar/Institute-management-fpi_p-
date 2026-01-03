<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addNumber extends Controller
{
    public function index()
    {
        return view('large_number');
    }

    public function find(Request $request)
    {
        $x=$request->num1;
        $y=$request->num1;
        $z=$request->num1;
        $result=$x+$y+$z;

        //dd($result);

        return view('large_number',compact('result'));
    }
}
