<?php

namespace App\Http\Controllers;

use App\Repositories\TeacherRepositoryInterface;
use Illuminate\Http\Request;

class TeacherInfoController extends Controller
{
    protected $teacherRepo;

    public function __construct(TeacherRepositoryInterface $teacherRepo)
    {
        $this->teacherRepo = $teacherRepo;
    }

    public function index()
    {
        $teachers = $this->teacherRepo->all();
        return view('admin.teacher.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teacher.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:teachers,email',
            'technology'=>'required',
            'phone'=>'required',
            'job_title'=>'required',
            'picture'=>'required|image'
        ]);

        $imageName = time().'.'.$request->picture->extension();
        $request->picture->move(public_path('teachers'), $imageName);

        $this->teacherRepo->store([
            'name'=>$request->name,
            'email'=>$request->email,
            'technology'=>$request->technology,
            'phone'=>$request->phone,
            'job_title'=>$request->job_title,
            'picture'=>$imageName
        ]);

        return redirect()->route('index')
                 ->with('success','Teacher Added Successfully');
    }

    public function edit($id)
    {
        $teacher = $this->teacherRepo->find($id);
        return view('admin.teacher.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
{
    $teacher = $this->teacherRepo->find($id);

    $data = $request->except('picture');

    if ($request->hasFile('picture')) {

        if ($teacher->picture && file_exists(public_path('teachers/'.$teacher->picture))) {
            unlink(public_path('teachers/'.$teacher->picture));
        }

        $imageName = time().'.'.$request->picture->extension();
        $request->picture->move(public_path('teachers'), $imageName);

        $data['picture'] = $imageName; // ✅ important
    }

    $this->teacherRepo->update($data, $id);

    return redirect()->route('index')
                     ->with('success','Teacher Updated Successfully');
}


    public function destroy($id)
{
    $teacher = $this->teacherRepo->find($id);

    if ($teacher->picture && file_exists(public_path('teachers/'.$teacher->picture))) {
        unlink(public_path('teachers/'.$teacher->picture));
    }

    $this->teacherRepo->delete($id);

    return redirect()->back()->with('success','Teacher Deleted Successfully');
}

}
