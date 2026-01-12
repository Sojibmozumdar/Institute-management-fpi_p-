@extends('admin.mastaring')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow">
                    <div class="card-header bg-warning text-white text-center">
                        <h4>Edit Teacher Information</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('teacher.update', $teacher->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label">Teacher Name</label>
                                <input type="text" name="name" value="{{ $teacher->name }}" class="form-control"
                                    required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" value="{{ $teacher->email }}" class="form-control"
                                    required>
                            </div>

                            <!-- Technology (Select with auto-selected) -->
                            <div class="mb-3">
                                <label class="form-label">Technology</label>
                                <select name="technology" class="form-select" required>
                                    <option value="">Select Technology</option>

                                    <option value="Civil Technology"
                                        {{ old('technology', $teacher->technology) == 'Civil Technology' ? 'selected' : '' }}>
                                        Civil Technology
                                    </option>

                                    <option value="Computer Technology"
                                        {{ old('technology', $teacher->technology) == 'Computer Technology' ? 'selected' : '' }}>
                                        Computer Technology
                                    </option>

                                    <option value="Electrical Technology"
                                        {{ old('technology', $teacher->technology) == 'Electrical Technology' ? 'selected' : '' }}>
                                        Electrical Technology
                                    </option>

                                    <option value="Mechanical Technology"
                                        {{ old('technology', $teacher->technology) == 'Mechanical Technology' ? 'selected' : '' }}>
                                        Mechanical Technology
                                    </option>
                                </select>
                            </div>


                            <!-- Phone -->
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" value="{{ $teacher->phone }}" class="form-control"
                                    required>
                            </div>

                            <!-- Job Title -->
                            <div class="mb-3">
                                <label class="form-label">Teacher Job Title</label>
                                <select name="job_title" class="form-select" required>
                                    <option value="Lecturer" {{ $teacher->job_title == 'Lecturer' ? 'selected' : '' }}>
                                        Lecturer</option>
                                    <option value="Instructor" {{ $teacher->job_title == 'Instructor' ? 'selected' : '' }}>
                                        Instructor</option>
                                    <option value="Senior Teacher"
                                        {{ $teacher->job_title == 'Senior Teacher' ? 'selected' : '' }}>Senior Teacher
                                    </option>
                                    <option value="Head of Department"
                                        {{ $teacher->job_title == 'Head of Department' ? 'selected' : '' }}>Head of
                                        Department</option>
                                </select>
                            </div>

                            <!-- Current Picture -->
                            <div class="mb-3">
                                <label class="form-label d-block">Current Picture</label>
                                <img src="{{ asset('teachers/' . $teacher->picture) }}" width="90"
                                    class="rounded border">
                            </div>

                            <!-- New Picture -->
                            <div class="mb-3">
                                <label class="form-label">Change Picture (Optional)</label>
                                <input type="file" name="picture" class="form-control" accept="image/*">
                            </div>

                            <!-- Submit -->
                            <div class="d-grid">
                                <button class="btn btn-success">
                                    Update Teacher
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
