<?php

namespace App\Http\Controllers;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;

class cusmoterInfoController extends Controller
{
    public function create()
    {
        return view('customer_info');
    }

     public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'customer_id'=>'required|numeric|min:0',
            'email'=>'required',
            'phone'=>'required|string',
            'address'=>'required',   
            'due_amount'=>'required|numeric',   
        ]);

        CustomerInfo::create([
            'name'=>$request->name,// coloum name->field_name
            'customer_id'=>$request->customer_id,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'due'=>$request->due_amount,
        ]);

        return redirect()->back()->with('success','Save Successfully');
    }
}
