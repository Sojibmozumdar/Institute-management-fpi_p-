@extends('admin.mastaring')

@section('content')

<style>
/* 100% SAFE — Designs matched with your provided style */
.sojib-feedback {
    background: #f8f9fa; /* Optional background color for the section */
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
    background: #d4f0d4ff;
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
</style>

<div class="sojib-feedback">
    <div class="feedback-box">
        <div class="form-header">
            <h3>👨‍🏫 Teacher Information Form</h3>
        </div>

        <div class="card-body px-4 py-0" style="padding-bottom: 35px !important;">
            <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Teacher Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter teacher name" >
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" >
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Technology</label>
                        <select name="technology" class="form-select" >
                            <option value="">Select Technology</option>
                            <option value="Civil Technology">Civil Technology</option>
                            <option value="Computer Technology">Computer Technology</option>
                            <option value="Electrical Technology">Electrical Technology</option>
                            <option value="Mechanical Technology">Mechanical Technology</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter phone number" >
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Teacher Job Title</label>
                        <select name="job_title" class="form-select" >
                            <option value="">Select Job Title</option>
                            <option value="Lecturer">Lecturer</option>
                            <option value="Instructor">Instructor</option>
                            <option value="Senior Teacher">Senior Teacher</option>
                            <option value="Head of Department">Head of Department</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Teacher Picture</label>
                        <input type="file" name="picture" class="form-control" accept="image/*" >
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="feedback-btn">
                        Save Teacher Information
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
