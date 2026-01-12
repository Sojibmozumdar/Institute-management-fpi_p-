
@extends('admin.mastaring')

@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher Information Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header bg-success text-white text-center">
                    <h4>Teacher Information Form</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Teacher Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter teacher name" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                        </div>

                        <!-- Technology -->
                        <div class="mb-3">
                            <label class="form-label">Technology</label>
                            <input type="text" name="technology" class="form-control" placeholder="e.g. Laravel, Java, Networking" required>
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter phone number" required>
                        </div>

                        <!-- Job Title -->
                        <div class="mb-3">
                            <label class="form-label">Teacher Job Title</label>
                            <select name="job_title" class="form-select" required>
                                <option value="">Select Job Title</option>
                                <option value="Lecturer">Lecturer</option>
                                <option value="Instructor">Instructor</option>
                                <option value="Senior Teacher">Senior Teacher</option>
                                <option value="Head of Department">Head of Department</option>
                            </select>
                        </div>

                        <!-- Picture -->
                        <div class="mb-3">
                            <label class="form-label">Teacher Picture</label>
                            <input type="file" name="picture" class="form-control" accept="image/*" required>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                Save Teacher Information
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
