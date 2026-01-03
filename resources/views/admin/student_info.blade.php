 @extends('admin.mastaring')


@section('content')
 


<div class="student-form-wrapper py-4">
    <div class="card shadow-lg border-0" style="border-radius: 15px; overflow: hidden;">
        <div class="card-header bg-dark text-white p-4">
            <div class="d-flex align-items-center">
                <div class="me-3">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                        <i class="bi bi-person-plus-fill text-white fs-4"></i>
                    </div>
                </div>
                <div>
                    <h4 class="mb-0 fw-bold">Student Registration</h4>
                    <small class="text-white-50">Please fill out all required fields carefully.</small>
                </div>
            </div>
        </div>

        <div class="card-body p-4 p-md-5 bg-light">

               @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif


            <form action="{{ route('student_info.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Full Name</label>
                        <input type="text" name="student_name" class="form-control custom-input" placeholder="e.g. Rakib Hasan" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Roll Number</label>
                        <input type="text" name="student_roll" class="form-control custom-input" placeholder="Roll No" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Department</label>
                        <select name="department" class="form-select custom-input">
                            <option selected disabled>Select Department</option>
                            <option value="CSE">Computer Science</option>
                            <option value="EEE">Electrical Engineering</option>
                            <option value="CIVIL">Civil Engineering</option>
                            <option value="BBA">Business Administration</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Semester</label>
                        <select name="semester" class="form-select custom-input">
                            <option selected disabled>Choose Semester</option>
                            <option>1st</option><option>2nd</option><option>3rd</option>
                            <option>4th</option><option>5th</option><option>6th</option>
                            <option>7th</option><option>8th</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold d-block">Shift</label>
                        <div class="d-flex gap-3 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shift" id="morningShift" value="Morning">
                                <label class="form-check-label" for="morningShift">Morning</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shift" id="dayShift" value="Day">
                                <label class="form-check-label" for="dayShift">Day</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold">CGPA</label>
                        <input type="number" step="0.01" name="cgpa" class="form-control custom-input" placeholder="0.00">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Phone Number</label>
                        <input type="tel" name="phone" class="form-control custom-input" placeholder="01XXX-XXXXXX">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control custom-input" placeholder="student@example.com">
                    </div>

                    <div class="col-12">
                        <label class="form-label fw-semibold">Present Address</label>
                        <textarea name="address" class="form-control custom-input" rows="3" placeholder="Enter full address..."></textarea>
                    </div>

                    <div class="col-12">
                        <label class="form-label fw-semibold">Student Photo</label>
                        <div class="upload-box p-3 border rounded text-center bg-white">
                            <input type="file" name="image" class="form-control mb-2 shadow-none border-0" id="imgInput">
                            <small class="text-muted">Accepted: JPG, PNG. Max size: 1MB</small>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-dark w-100 py-3 fw-bold shadow-sm" style="border-radius: 10px; transition: 0.3s;">
                             REGISTER STUDENT 
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .custom-input {
        background-color: #ffffff !important;
        border: 1px solid #dee2e6 !important;
        padding: 10px 15px;
        transition: all 0.3s ease;
    }
    .custom-input:focus {
        border-color: #0d6efd !important;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15) !important;
    }
    .upload-box {
        border: 2px dashed #ddd !important;
    }
    .upload-box:hover {
        border-color: #0d6efd !important;
    }
    .student-form-wrapper {
        max-width: 900px;
        margin: auto;
    }
</style>

@endsection