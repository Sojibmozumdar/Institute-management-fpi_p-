@extends('admin.mastaring')

@section('content')

<style>
/* 100% SAFE — Designs matched with your provided style */
.sojib-feedback {
    padding: 30px 0;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}

.sojib-feedback .feedback-box {
    background: #fff;
    width: 100%;
    max-width: 950px;
    border-radius: 18px;
    box-shadow: 0 25px 45px rgba(0,0,0,0.08);
    animation: fadeIn 0.8s ease;
    overflow: hidden;
    margin-bottom: 30px;
}

.sojib-feedback .form-header {
    background: #d4f0d4ff;
    padding: 20px 35px;
    border-top-left-radius: 18px;
    border-top-right-radius: 18px;
    border-bottom: 1px solid #c3e6c3;
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
    margin-bottom: 5px;
}

.sojib-feedback .form-control,
.sojib-feedback .form-select {
    border-radius: 10px;
    border: 1px solid #8ade91;
    padding: 10px;
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

/* Table Styling */
.custom-table-card {
    background: #fff;
    width: 100%;
    max-width: 1100px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    padding: 20px;
}

.student-img {
    width: 45px;
    height: 45px;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid #8ade91;
}
</style>

<div class="sojib-feedback">
    <div class="feedback-box">
        <div class="form-header">
            <h3>🎓 Student Registration</h3>
        </div>

        <div class="card-body px-4 py-4">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('student_info.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="student_name" class="form-control" placeholder="e.g. Rakib Hasan" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Roll Number</label>
                        <input type="text" name="student_roll" class="form-control" placeholder="Roll No" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Department</label>
                        <select name="department" class="form-select">
                            <option selected disabled>Select Department</option>
                            <option value="CSE">Computer Science</option>
                            <option value="EEE">Electrical Engineering</option>
                            <option value="CIVIL">Civil Engineering</option>
                            <option value="BBA">Business Administration</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Semester</label>
                        <select name="semester" class="form-select">
                            <option selected disabled>Choose Semester</option>
                            @for ($i = 1; $i <= 8; $i++)
                                <option>{{ $i }}{{ ($i==1)?'st':(($i==2)?'nd':(($i==3)?'rd':'th')) }} Semester</option>
                            @endfor
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label d-block">Shift</label>
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
                        <label class="form-label">CGPA</label>
                        <input type="number" step="0.01" name="cgpa" class="form-control" placeholder="0.00">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" placeholder="01XXX-XXXXXX">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="student@example.com">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Present Address</label>
                        <textarea name="address" class="form-control" rows="2" placeholder="Enter full address..."></textarea>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Student Photo</label>
                        <input type="file" name="image" class="form-control" id="imgInput">
                    </div>

                    <div class="col-12 mt-4 text-center">
                        <button type="submit" class="feedback-btn">REGISTER STUDENT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="custom-table-card">
        <h5 class="mb-4 fw-bold" style="color: #1b4b1d;">📋 Registered Students</h5>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead style="background-color: #f0fdf0;">
                    <tr>
                        <th>Student</th>
                        <th>Roll No</th>
                        <th>Dept.</th>
                        <th>Academic Info</th>
                        <th>Address</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ $student->image ? asset('storage/' . $student->image) : 'https://i.pravatar.cc/150?img=11' }}" class="student-img">
                                <div>
                                    <div class="fw-bold small">{{ $student->student_name }}</div>
                                    <div class="text-muted" style="font-size: 11px;">{{ $student->email }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="small fw-bold">{{ $student->student_roll }}</td>
                        <td><span class="badge bg-success bg-opacity-10 text-success">{{ $student->department }}</span></td>
                        <td class="small">
                            <div class="fw-bold">{{ $student->semester }}</div>
                            <div class="text-muted">{{ $student->shift }}</div>
                        </td>
                        <td class="small text-truncate" style="max-width: 150px;">{{ $student->address }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-outline-success"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
