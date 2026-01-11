<?php

namespace App\Http\Controllers;

use App\Models\studentInfo;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
$students = studentInfo::all();
        return view('student_list', compact('students') );
    }
}
