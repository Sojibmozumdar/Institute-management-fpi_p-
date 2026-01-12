<?php

namespace App\Repositories;

use App\Models\teacherInfo;

class TeacherRepository implements TeacherRepositoryInterface
{
    public function all()
    {
        return teacherInfo::all();
    }

    public function find($id)
    {
        return teacherInfo::findOrFail($id);
    }

    public function store(array $data)
    {
        return teacherInfo::create($data);
    }

    public function update(array $data, $id)
    {
        $teacher = teacherInfo::findOrFail($id);
        $teacher->update($data);
        return $teacher;
    }

    public function delete($id)
    {
        return teacherInfo::destroy($id);
    }
}
