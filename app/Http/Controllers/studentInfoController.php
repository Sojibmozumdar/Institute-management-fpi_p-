<?php

namespace App\Http\Controllers;

use App\Models\studentInfo;
use Illuminate\Http\Request;

class studentInfoController extends Controller
{
    public function create(){
    $students = studentInfo::all();
    return view('admin.student_info', compact('students'));
}


     public function store(Request $request)
{
    $request->validate([
        'student_name'=>'required|string|max:255',
        'student_roll'=>'required|min:0',
        'department'=>'required',
        'semester'=>'required',
        'shift'=>'required',
        'cgpa'=>'required',
        'phone'=>'required|string',
        'email'=>'required',
        'address'=>'required',
        'image'=>'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('students', 'public');
    }

    studentInfo::create([
        'student_name'=>$request->student_name,
        'student_roll'=>$request->student_roll,
        'department'=>$request->department,
        'semester'=>$request->semester,
        'shift'=>$request->shift,
        'cgpa'=>$request->cgpa,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'address'=>$request->address,
        'image' => $imagePath,
    ]);

    return redirect()->back()->with('success','Save Successfully');
}




}
