 @extends('admin.mastaring')


@section('content')
 
 
 
 <div class="welcome-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="fw-bold">Welcome Back, EduGreen Polytechnic!</h2>
                    <p class="mb-4">You have 12 new student admissions and 5 pending faculty approvals.</p>
                    <button class="btn btn-dark rounded-pill px-4 py-2">View Analytics</button>
                </div>
                <div class="col-md-4 d-none d-md-block text-center">
                    <i class="bi bi-graph-up-arrow" style="font-size: 8rem; opacity: 0.2;"></i>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="icon-circle"><i class="bi bi-people"></i></div>
                    <h4 class="fw-bold mb-1">2,450</h4>
                    <p class="text-muted mb-0 small">Students</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="icon-circle"><i class="bi bi-person-workspace"></i></div>
                    <h4 class="fw-bold mb-1">128</h4>
                    <p class="text-muted mb-0 small">Faculty</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="icon-circle"><i class="bi bi-cash-stack"></i></div>
                    <h4 class="fw-bold mb-1">85%</h4>
                    <p class="text-muted mb-0 small">Fees</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="icon-circle"><i class="bi bi-award"></i></div>
                    <h4 class="fw-bold mb-1">12</h4>
                    <p class="text-muted mb-0 small">Courses</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="custom-table-card h-100">
                    <h5 class="fw-bold mb-4">Academic Performance</h5>
                    <canvas id="performanceChart" height="250"></canvas>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="custom-table-card h-100">
                    <h5 class="fw-bold mb-4">Notice Board</h5>
                    <div class="mb-3 p-3 rounded-3" style="background: #fdf2f2; border-left: 5px solid #dc3545;">
                        <p class="mb-1 fw-bold small">Winter Vacation Notice</p>
                        <small class="text-muted">Effective from 25th Dec...</small>
                    </div>
                    <div class="mb-3 p-3 rounded-3" style="background: #f0fff0; border-left: 5px solid #28a745;">
                        <p class="mb-1 fw-bold small">Exam Result Out</p>
                        <small class="text-muted">2nd Semester results are live.</small>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-success w-100 mt-3">View All Notices</a>
                </div>
            </div>
        </div>
    </div>

    @endsection 