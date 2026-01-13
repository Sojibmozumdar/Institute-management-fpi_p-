@extends('admin.mastaring')

@section('content')

<style>
/* 100% SAFE — Designs matched with your provided style */
.sojib-feedback {
    padding: 50px 0;
    display: flex;
    justify-content: center;
}

.sojib-feedback .feedback-box {
    background: #fff;
    width: 100%;
    max-width: 900px;
    border-radius: 18px;
    box-shadow: 0 25px 45px rgba(0,0,0,0.08);
    animation: fadeIn 0.8s ease;
    overflow: hidden;
}

.sojib-feedback .form-header {
    background: #d4f0d4ff; /* Light green header to match theme */
    padding: 25px 35px;
    border-top-left-radius: 18px;
    border-top-right-radius: 18px;
    margin-bottom: 20px;
}

.sojib-feedback .form-header h3 {
    margin: 0;
    text-align: center;
    font-weight: bold;
    color: #1b4b1d !important;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
}

.sojib-feedback label {
    font-weight: 600;
    color: #1b4b1d;
    margin-bottom: 8px;
}

.sojib-feedback .form-control,
.sojib-feedback .form-select {
    border-radius: 10px;
    border: 1px solid #8ade91;
    padding: 12px;
}

.sojib-feedback .form-control:focus,
.sojib-feedback .form-select:focus {
    border-color: #41b34a;
    box-shadow: 0 0 4px rgba(69,185,77,0.5);
    outline: none;
}

.sojib-feedback .feedback-btn {
    background: linear-gradient(135deg, #306934ff, #2a5c2dff);
    color: #fff;
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 50px;
    font-weight: bold;
    transition: 0.3s;
    cursor: pointer;
}

.sojib-feedback .feedback-btn:hover {
    background: #1b4b1d;
}

.current-img-preview {
    border-radius: 10px;
    border: 2px solid #8ade91;
    padding: 5px;
    margin-top: 10px;
}
</style>

<div class="sojib-feedback">
    <div class="feedback-box">
        <div class="form-header">
            <h3>📝 Edit Teacher Information</h3>
        </div>

        <div class="card-body px-4 py-0" style="padding-bottom: 35px !important;">
            <form action="{{ route('teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Teacher Name</label>
                        <input type="text" name="name" value="{{ $teacher->name }}" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" value="{{ $teacher->email }}" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Technology</label>
                        <select name="technology" class="form-select" required>
                            <option value="">Select Technology</option>
                            <option value="Civil Technology" {{ old('technology', $teacher->technology) == 'Civil Technology' ? 'selected' : '' }}>Civil Technology</option>
                            <option value="Computer Technology" {{ old('technology', $teacher->technology) == 'Computer Technology' ? 'selected' : '' }}>Computer Technology</option>
                            <option value="Electrical Technology" {{ old('technology', $teacher->technology) == 'Electrical Technology' ? 'selected' : '' }}>Electrical Technology</option>
                            <option value="Mechanical Technology" {{ old('technology', $teacher->technology) == 'Mechanical Technology' ? 'selected' : '' }}>Mechanical Technology</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="phone" value="{{ $teacher->phone }}" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Teacher Job Title</label>
                        <select name="job_title" class="form-select" required>
                            <option value="Lecturer" {{ $teacher->job_title == 'Lecturer' ? 'selected' : '' }}>Lecturer</option>
                            <option value="Instructor" {{ $teacher->job_title == 'Instructor' ? 'selected' : '' }}>Instructor</option>
                            <option value="Senior Teacher" {{ $teacher->job_title == 'Senior Teacher' ? 'selected' : '' }}>Senior Teacher</option>
                            <option value="Head of Department" {{ $teacher->job_title == 'Head of Department' ? 'selected' : '' }}>Head of Department</option>
                        </select>
                    </div>

                    <div class="col-md-3 text-center">
                        <label class="form-label d-block">Current Picture</label>
                        <img src="{{ asset('teachers/' . $teacher->picture) }}" width="80" class="current-img-preview">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Change Picture</label>
                        <input type="file" name="picture" class="form-control" accept="image/*">
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="feedback-btn">
                        Update Teacher Information
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
