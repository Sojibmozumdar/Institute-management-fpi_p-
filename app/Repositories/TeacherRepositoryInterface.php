<?php

namespace App\Repositories;

interface TeacherRepositoryInterface
{
    public function all();
    public function find($id);
    public function store(array $data);
    public function update(array $data, $id);
    public function delete($id);
}

