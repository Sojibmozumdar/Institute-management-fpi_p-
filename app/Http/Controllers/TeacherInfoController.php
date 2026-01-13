<?php

namespace App\Http\Controllers;

use App\Repositories\TeacherRepositoryInterface;
use App\Http\Requests\Teacher\StoreTeacherRequest;
use App\Http\Requests\Teacher\UpdateTeacherRequest;

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

    public function store(StoreTeacherRequest $request)
{
    $result = $this->teacherRepo->store($request);

    // Check the 'status' key from your Trait's array
    if ($result['status']) {
        return redirect()->route('index')->with('success', $result['message']);
    }

    return redirect()->back()->with('error', $result['message']);
}

    public function edit($id)
    {
        $teacher = $this->teacherRepo->find($id);
        return view('admin.teacher.edit', compact('teacher'));
    }

   public function update(UpdateTeacherRequest $request, $id)
{
    $result = $this->teacherRepo->update($request, $id);

    if ($result['status']) {
        return redirect()->route('index')->with('success', $result['message']);
    }

    return redirect()->back()->with('error', $result['message']);
}

   public function destroy($id)
{
    $result = $this->teacherRepo->delete($id);

    // If result is an array from the Trait
    if ($result['status']) {
        return redirect()->back()->with('success', $result['message']);
    }

    return redirect()->back()->with('error', $result['message']);
}
}
