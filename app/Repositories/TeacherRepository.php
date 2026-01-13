<?php

namespace App\Repositories;

use App\Models\teacherInfo;
use App\Traits\ReturnFormatTrait;
use App\Repositories\TeacherRepositoryInterface;

class TeacherRepository implements TeacherRepositoryInterface
{
    use ReturnFormatTrait;

    protected $model;

    public function __construct(teacherInfo $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model::all();
    }

    public function find($id)
    {
        return $this->model::findOrFail($id);
    }

    public function store($request)
    {
        try {
            $teacher = new $this->model;
            $teacher->name = $request->name;
            $teacher->email = $request->email;
            $teacher->technology = $request->technology;
            $teacher->phone = $request->phone;
            $teacher->job_title = $request->job_title;

            if ($request->hasFile('picture')) {
                $imageName = time() . '.' . $request->picture->extension();
                $request->picture->move(public_path('teachers'), $imageName);
                $teacher->picture = $imageName;
            }

            $teacher->save();

            return $this->responseWithSuccess('Teacher Added Successfully');
        } catch (\Throwable $th) {
            return $this->responseWithError('Something went wrong');
        }
    }

    public function update($request, $id)
    {
        try {
            $teacher = $this->model::findOrFail($id);
            $teacher->name = $request->name;
            $teacher->email = $request->email;
            $teacher->technology = $request->technology;
            $teacher->phone = $request->phone;
            $teacher->job_title = $request->job_title;

            if ($request->hasFile('picture')) {
                // Delete old image
                if ($teacher->picture && file_exists(public_path('teachers/' . $teacher->picture))) {
                    unlink(public_path('teachers/' . $teacher->picture));
                }

                $imageName = time() . '.' . $request->picture->extension();
                $request->picture->move(public_path('teachers'), $imageName);
                $teacher->picture = $imageName;
            }

            $teacher->save();

            return $this->responseWithSuccess('Teacher Updated Successfully');
        } catch (\Throwable $th) {
            return $this->responseWithError('Something went wrong');
        }
    }

    public function delete($id)
    {
        try {
            $teacher = $this->model::findOrFail($id);

            if ($teacher->picture && file_exists(public_path('teachers/' . $teacher->picture))) {
                unlink(public_path('teachers/' . $teacher->picture));
            }

            $teacher->delete();

            return $this->responseWithSuccess('Teacher Deleted Successfully');
        } catch (\Throwable $th) {
            return $this->responseWithError('Something went wrong');
        }
    }
}
