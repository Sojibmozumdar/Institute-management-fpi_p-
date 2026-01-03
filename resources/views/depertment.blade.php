@extends('layout.mastaring')

@section('content')
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #abe7b1ff, #90de8bff);
        --deep-green: #1a441b;
        --soft-bg: #f4f9f4;
    }

    body { background-color: var(--soft-bg); }

    /* --- Header Section --- */
    .dept-header {
        background: #b1eab1ff;
        border-radius: 20px;
        padding: 40px;
        color: #092709ff;
        margin-bottom: 35px;
        box-shadow: 0 10px 30px rgba(144, 222, 139, 0.3);
    }

    .dept-header h1 {
    color: #104111ff; /* Extreme Deep Green */
}

    /* --- Department Card Style --- */
    .dept-card {
        background: #ffffff;
        border: none;
        border-radius: 25px;
        padding: 30px;
        transition: all 0.4s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0,0,0,0.03);
    }

    .dept-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.08);
    }

    /* --- Icon Floating Background --- */
    .dept-icon-bg {
        position: absolute;
        right: -10px;
        bottom: -10px;
        font-size: 6rem;
        opacity: 0.05;
        color: var(--deep-green);
    }

    .dept-badge {
        width: 60px;
        height: 60px;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        background: var(--primary-gradient);
        color: var(--deep-green);
        margin-bottom: 20px;
    }

    .stat-box {
        background: #f8fbf8;
        border-radius: 15px;
        padding: 10px;
        text-align: center;
        border: 1px solid #eef5ee;
    }

    .stat-number {
        display: block;
        font-weight: 700;
        font-size: 1.1rem;
        color: var(--deep-green);
    }

    .stat-label {
        font-size: 0.75rem;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .view-btn {
        background: var(--deep-green);
        color: white;
        border: none;
        border-radius: 12px;
        padding: 10px 20px;
        width: 100%;
        margin-top: 20px;
        font-weight: 600;
        transition: 0.3s;
    }

    .view-btn:hover {
        background: #2a5c2d;
        box-shadow: 0 5px 15px rgba(26, 68, 27, 0.2);
    }
</style>

<div class="container-fluid py-4">
    <div class="dept-header">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h1 class="fw-bold mb-2">Academic Departments</h1>
                <p class="mb-0 opacity-75">EduGreen Polytechnic Institute has 8 major technologies with modern lab facilities.</p>
            </div>
            <div class="col-md-5 text-md-end mt-3 mt-md-0">
                <button class="btn btn-white bg-white text-success rounded-pill px-4 fw-bold">
                    <i class="bi bi-plus-lg me-2"></i> Add Technology
                </button>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="dept-card">
                <i class="bi bi-laptop dept-icon-bg"></i>
                <div class="dept-badge"><i class="bi bi-laptop"></i></div>
                <h5 class="fw-bold mb-1">Computer</h5>
                <p class="text-muted small mb-4">Focus on Software & Hardware engineering.</p>
                
                <div class="row g-2">
                    <div class="col-6">
                        <div class="stat-box">
                            <span class="stat-number">480</span>
                            <span class="stat-label">Students</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Faculties</span>
                        </div>
                    </div>
                </div>
                <button class="view-btn">View Details</button>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="dept-card">
                <i class="bi bi-building dept-icon-bg"></i>
                <div class="dept-badge"><i class="bi bi-building"></i></div>
                <h5 class="fw-bold mb-1">Civil</h5>
                <p class="text-muted small mb-4">Infrastructure & Structural development.</p>
                
                <div class="row g-2">
                    <div class="col-6">
                        <div class="stat-box">
                            <span class="stat-number">520</span>
                            <span class="stat-label">Students</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <span class="stat-number">15</span>
                            <span class="stat-label">Faculties</span>
                        </div>
                    </div>
                </div>
                <button class="view-btn">View Details</button>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="dept-card">
                <i class="bi bi-lightning-charge dept-icon-bg"></i>
                <div class="dept-badge"><i class="bi bi-lightning-charge"></i></div>
                <h5 class="fw-bold mb-1">Electrical</h5>
                <p class="text-muted small mb-4">Power systems & Electrical circuits.</p>
                
                <div class="row g-2">
                    <div class="col-6">
                        <div class="stat-box">
                            <span class="stat-number">450</span>
                            <span class="stat-label">Students</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <span class="stat-number">10</span>
                            <span class="stat-label">Faculties</span>
                        </div>
                    </div>
                </div>
                <button class="view-btn">View Details</button>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="dept-card">
                <i class="bi bi-gear dept-icon-bg"></i>
                <div class="dept-badge"><i class="bi bi-gear"></i></div>
                <h5 class="fw-bold mb-1">Mechanical</h5>
                <p class="text-muted small mb-4">Machine design & Industrial production.</p>
                
                <div class="row g-2">
                    <div class="col-6">
                        <div class="stat-box">
                            <span class="stat-number">400</span>
                            <span class="stat-label">Students</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <span class="stat-number">14</span>
                            <span class="stat-label">Faculties</span>
                        </div>
                    </div>
                </div>
                <button class="view-btn">View Details</button>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="dept-card">
                <i class="bi bi-palette dept-icon-bg"></i>
                <div class="dept-badge"><i class="bi bi-palette"></i></div>
                <h5 class="fw-bold mb-1">AIDT</h5>
                <p class="text-muted small mb-4">Architectural Interior Design.</p>
                
                <div class="row g-2">
                    <div class="col-6">
                        <div class="stat-box">
                            <span class="stat-number">220</span>
                            <span class="stat-label">Students</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <span class="stat-number">08</span>
                            <span class="stat-label">Faculties</span>
                        </div>
                    </div>
                </div>
                <button class="view-btn">View Details</button>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="dept-card">
                <i class="bi bi-cpu dept-icon-bg"></i>
                <div class="dept-badge"><i class="bi bi-cpu"></i></div>
                <h5 class="fw-bold mb-1">Electronics</h5>
                <p class="text-muted small mb-4">Micro-chips & Signal processing.</p>
                
                <div class="row g-2">
                    <div class="col-6">
                        <div class="stat-box">
                            <span class="stat-number">300</span>
                            <span class="stat-label">Students</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-box">
                            <span class="stat-number">09</span>
                            <span class="stat-label">Faculties</span>
                        </div>
                    </div>
                </div>
                <button class="view-btn">View Details</button>
            </div>
        </div>
    </div>
</div>
@endsection