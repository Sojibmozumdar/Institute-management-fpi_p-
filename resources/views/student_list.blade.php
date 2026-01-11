@extends('layout.mastaring')

@section('content')
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #abe7b1ff, #90de8bff);
        --deep-green: #1a441b;
        --glass-white: rgba(255, 255, 255, 0.85);
    }

    body { background-color: #f3f8f3;

    }

    /* --- Page Header --- */
    .premium-header {
        background: var(--primary-gradient);
        border-radius: 25px;
        padding: 40px;
        position: relative;
        overflow: hidden;
        margin-bottom: 35px;
        box-shadow: 0 15px 35px rgba(144, 222, 139, 0.3);
    }

    .premium-header::after {
        content: "";
        position: absolute;
        top: -50px;
        right: -50px;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
    }

    /* --- Stats Widget --- */
    .stat-pill {
        background: var(--glass-white);
        backdrop-filter: blur(10px);
        padding: 10px 20px;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-weight: 600;
        color: var(--deep-green);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    /* --- Glass Card Table --- */
    .glass-card {
        background: white;
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.5);
        box-shadow: 0 20px 40px rgba(0,0,0,0.03);
        overflow: hidden;
    }

    .table-toolbar {
        padding: 25px;
        background: #fff;
        border-bottom: 1px solid #f0f0f0;
    }

    /* --- Modern Table UI --- */
    .table-student {
        margin-bottom: 0;
    }

    .table-student thead th {
        background: #f8faf8;
        padding: 20px;
        font-weight: 700;
        color: var(--deep-green);
        border: none;
        text-transform: uppercase;
        font-size: 0.8rem;
    }

    .table-student tbody tr {
        border-bottom: 1px solid #f9f9f9;
        transition: 0.3s ease;
    }

    .table-student tbody tr:hover {
        background: #f0fff0 !important;
        transform: scale(1.002);
    }

    .student-info-box {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .student-img {
        width: 50px;
        height: 50px;
        border-radius: 15px;
        object-fit: cover;
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }

    /* --- Status Tags --- */
    .tag {
        padding: 6px 14px;
        border-radius: 10px;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
    }

    .tag-success { background: #e8f5e9; color: #2e7d32; }
    .tag-warning { background: #fff3e0; color: #ef6c00; }

    /* --- Action Buttons --- */
    .action-group {
        display: flex;
        gap: 8px;
        justify-content: center;
    }

    .btn-circle {
        width: 38px;
        height: 38px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        transition: 0.3s;
    }

    .btn-view { background: #e3f2fd; color: #1976d2; }
    .btn-edit { background: #f1f8e9; color: #388e3c; }
    .btn-delete { background: #ffebee; color: #d32f2f; }

    .btn-circle:hover {
        transform: translateY(-5px) rotate(8deg);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* --- Floating Action --- */
    .add-student-btn {
        background: var(--deep-green);
        color: white;
        border-radius: 50px;
        padding: 12px 28px;
        font-weight: 600;
        border: none;
        box-shadow: 0 10px 20px rgba(26, 68, 27, 0.2);
        transition: 0.3s;
    }

    .add-student-btn:hover {
        background: #2a5c2d;
        color: white;
        transform: translateY(-3px);
    }
</style>

<div class="container-fluid py-4">
    <div class="premium-header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="fw-bold text-dark mb-2">Student Directory</h1>
                <p class="text-dark opacity-75 mb-4">Manage and monitor all EduGreen Polytechnic students in one place.</p>

                <div class="d-flex flex-wrap gap-3">
                    <div class="stat-pill">
                        <i class="bi bi-people-fill"></i>
                        <span>3,450 Students</span>
                    </div>
                    <div class="stat-pill">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>92% Attended</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-md-end mt-4 mt-md-0">
                <button class="add-student-btn">
                    <i class="bi bi-plus-lg me-2"></i> Add New Student
                </button>
            </div>
        </div>
    </div>

    <div class="glass-card">
        <div class="table-toolbar">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="input-group border rounded-pill px-3">
                        <span class="input-group-text bg-transparent border-0"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control border-0 bg-transparent" placeholder="Search roll, name or technology...">
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-select border rounded-pill">
                        <option selected>Computer Technology</option>
                        <option>Civil Technology</option>
                        <option>Electrical Technology</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select border rounded-pill">
                        <option>5th Semester</option>
                        <option>7th Semester</option>
                    </select>
                </div>
                <div class="col-md-3 text-end">
                    <button class="btn btn-light rounded-pill border me-2"><i class="bi bi-download"></i></button>
                    <button class="btn btn-light rounded-pill border"><i class="bi bi-printer"></i></button>
                </div>
            </div>
        </div>

                     <div class="table-responsive">
                     <table class="table table-student align-middle">
                         <thead>
                             <tr>
                                 <th>Basic Information</th>
                                 <th>Roll No</th>
                                 <th>Department</th>
                                 <th>Academic Info</th>
                                 <th>Address</th>
                                 <th class="text-center">Action</th>
                             </tr>
                         </thead>
                         <tbody>

                             @foreach ($students as $student)
                                 <tr>
                                     <td>
                                         <div class="student-info-box">
                                             <img src="{{ $student->image ? asset('storage/' . $student->image) : 'https://i.pravatar.cc/150?img=11' }}"
                                                 class="student-img" alt="Student">

                                             <div>
                                                 <h6 class="mb-0 fw-bold">{{ $student->student_name }}</h6>
                                                 <small class="text-muted">{{ $student->email }}</small>
                                             </div>
                                         </div>
                                     </td>
                                     <td><span class="fw-bold">{{ $student->student_roll }}</span></td>
                                     <td><span class="tag tag-success">{{ $student->department }}</span></td>
                                     <td>
                                         <div class="small fw-bold text-dark">{{ $student->semester }}</div>
                                         <div class="text-muted small">{{ $student->shift }}</div>
                                     </td>
                                     <td><span class="fw-bold">{{ $student->address }}</span></td>
                                     <td>
                                         <div class="action-group">
                                             <button class="btn-circle btn-view"><i class="bi bi-eye"></i></button>
                                             <button class="btn-circle btn-edit"><i class="bi bi-pencil"></i></button>
                                             <button class="btn-circle btn-delete"><i class="bi bi-trash"></i></button>
                                         </div>
                                     </td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>

        <div class="p-4 border-top d-flex justify-content-between align-items-center">
            <span class="small text-muted">Showing <b>10</b> out of <b>3,450</b> students</span>
            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item"><a class="page-link border-0 rounded-3 mx-1" href="#"><i class="bi bi-chevron-left"></i></a></li>
                    <li class="page-item active"><a class="page-link border-0 rounded-3 mx-1 bg-success" href="#">1</a></li>
                    <li class="page-item"><a class="page-link border-0 rounded-3 mx-1" href="#">2</a></li>
                    <li class="page-item"><a class="page-link border-0 rounded-3 mx-1" href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
