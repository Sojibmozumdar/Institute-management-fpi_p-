@extends('admin.mastaring')

@section('content')



<form action="{{ route('teacher.update',$teacher->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $teacher->name }}" class="form-control mb-2">
    <input type="email" name="email" value="{{ $teacher->email }}" class="form-control mb-2">
    <input type="text" name="technology" value="{{ $teacher->technology }}" class="form-control mb-2">
    <input type="text" name="phone" value="{{ $teacher->phone }}" class="form-control mb-2">

    <select name="job_title" class="form-control mb-2">
        <option {{ $teacher->job_title=='Lecturer'?'selected':'' }}>Lecturer</option>
        <option {{ $teacher->job_title=='Instructor'?'selected':'' }}>Instructor</option>
        <option {{ $teacher->job_title=='Senior Teacher'?'selected':'' }}>Senior Teacher</option>
    </select>

    <img src="{{ asset('teachers/'.$teacher->picture) }}" width="80"><br><br>

    <input type="file" name="picture" class="form-control mb-2">

    <button class="btn btn-success">Update Teacher</button>
</form>
@endsection
