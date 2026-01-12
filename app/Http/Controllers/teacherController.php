<?php

namespace App\Http\Controllers;

use App\Models\teacherInfo;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function index(){
    $teachers = teacherInfo::all();
        return view("teacher_list", compact('teachers') );
    }
}
