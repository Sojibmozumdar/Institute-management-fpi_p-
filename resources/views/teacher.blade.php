@extends('layout.mastaring')

@section('content')
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #abe7b1ff, #90de8bff);
        --deep-green: #1a441b;
        --soft-bg: #f8fcf8;
    }

    body { background-color: var(--soft-bg); }

    /* --- Header Design --- */
    .teacher-header {
        background: var(--primary-gradient);
        border-radius: 25px;
        padding: 40px;
        color: var(--deep-green);
        margin-bottom: 40px;
        box-shadow: 0 10px 30px rgba(144, 222, 139, 0.3);
        position: relative;
        overflow: hidden;
    }

    .teacher-header h1 {
    color: #0f3610ff; /* Extreme Deep Green */
}

    /* --- Teacher Card Style --- */
    .teacher-card {
        background: #ffffff;
        border: none;
        border-radius: 25px;
        padding: 30px;
        text-align: center;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 10px 25px rgba(0,0,0,0.03);
        height: 100%;
        border: 1px solid #edf5ed;
    }

    .teacher-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        border-color: #90de8b;
    }

    /* --- Profile Image --- */
    .profile-wrapper {
        position: relative;
        width: 110px;
        height: 110px;
        margin: 0 auto 20px;
    }

    .teacher-img {
        width: 100%;
        height: 100%;
        border-radius: 30px;
        object-fit: cover;
        border: 4px solid #fff;
        box-shadow: 0 8px 15px rgba(0,0,0,0.1);
    }

    .status-indicator {
        position: absolute;
        bottom: 5px;
        right: 5px;
        width: 18px;
        height: 18px;
        background: #2ecc71;
        border: 3px solid #fff;
        border-radius: 50%;
    }

    /* --- Tags & Text --- */
    .dept-badge {
        background: #e8f5e9;
        color: var(--deep-green);
        font-size: 0.75rem;
        font-weight: 700;
        padding: 5px 15px;
        border-radius: 50px;
        display: inline-block;
        margin-bottom: 10px;
    }

    .designation {
        color: #666;
        font-size: 0.85rem;
        margin-bottom: 15px;
        display: block;
    }

    /* --- Contact Icons --- */
    .teacher-social {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;
    }

    .social-btn {
        width: 38px;
        height: 38px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f0f7f0;
        color: var(--deep-green);
        text-decoration: none;
        transition: 0.3s;
    }

    .social-btn:hover {
        background: var(--deep-green);
        color: #fff;
        transform: rotate(10deg);
    }

    .call-btn {
        background: var(--primary-gradient);
        color: var(--deep-green);
        border: none;
        border-radius: 15px;
        padding: 10px;
        width: 100%;
        margin-top: 15px;
        font-weight: 600;
        font-size: 0.9rem;
        transition: 0.3s;
    }

    .call-btn:hover {
        box-shadow: 0 5px 15px rgba(144, 222, 139, 0.4);
    }
</style>

<div class="container-fluid py-4">
    <div class="teacher-header">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h1 class="fw-bold mb-2">Faculty Members</h1>
                <p class="mb-0 opacity-75">Meet the expert mentors of EduGreen Polytechnic Institute guiding the next generation of engineers.</p>
            </div>
            <div class="col-md-5 text-md-end mt-4 mt-md-0">
                <div class="d-flex gap-2 justify-content-md-end">
                    <div class="bg-white p-2 rounded-pill px-4 shadow-sm text-success fw-bold">128+ Teachers</div>
                    <button class="btn btn-dark rounded-pill px-4 shadow">Add Teacher</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5 g-3">
        <div class="col-md-4">
            <div class="input-group bg-white rounded-pill px-3 py-1 shadow-sm border">
                <span class="input-group-text bg-transparent border-0 text-success"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control border-0 bg-transparent" placeholder="Search teacher by name...">
            </div>
        </div>
        <div class="col-md-3">
            <select class="form-select border-0 rounded-pill px-4 shadow-sm bg-white py-2">
                <option selected>All Departments</option>
                <option>Computer Technology</option>
                <option>Civil Technology</option>
                <option>Electrical Technology</option>
            </select>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="teacher-card">
                <div class="dept-badge">Computer Tech</div>
                <div class="profile-wrapper">
                    <img src="https://i.pravatar.cc/150?img=12" class="teacher-img" alt="">
                    <span class="status-indicator"></span>
                </div>
                <h5 class="fw-bold mb-1">Engr. Monir Hossain</h5>
                <span class="designation">Chief Instructor & Head</span>
                <div class="small text-muted mb-2"><i class="bi bi-envelope me-2"></i>monir@fpi.gov.bd</div>
                
                <div class="teacher-social">
                    <a href="#" class="social-btn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-btn"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-btn"><i class="bi bi-chat-dots"></i></a>
                </div>
                <button class="call-btn"><i class="bi bi-telephone me-2"></i>Contact Now</button>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="teacher-card">
                <div class="dept-badge">Civil Tech</div>
                <div class="profile-wrapper">
                    <img src="https://i.pravatar.cc/150?img=68" class="teacher-img" alt="">
                    <span class="status-indicator" style="background: #999;"></span>
                </div>
                <h5 class="fw-bold mb-1">Fatema Khatun</h5>
                <span class="designation">Senior Instructor</span>
                <div class="small text-muted mb-2"><i class="bi bi-envelope me-2"></i>fatema@fpi.gov.bd</div>
                
                <div class="teacher-social">
                    <a href="#" class="social-btn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-btn"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="social-btn"><i class="bi bi-chat-dots"></i></a>
                </div>
                <button class="call-btn"><i class="bi bi-telephone me-2"></i>Contact Now</button>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="teacher-card">
                <div class="dept-badge">Electrical Tech</div>
                <div class="profile-wrapper">
                    <img src="https://i.pravatar.cc/150?img=11" class="teacher-img" alt="">
                    <span class="status-indicator"></span>
                </div>
                <h5 class="fw-bold mb-1">Ariful Islam</h5>
                <span class="designation">Junior Instructor</span>
                <div class="small text-muted mb-2"><i class="bi bi-envelope me-2"></i>arif@fpi.gov.bd</div>
                
                <div class="teacher-social">
                    <a href="#" class="social-btn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-btn"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-btn"><i class="bi bi-chat-dots"></i></a>
                </div>
                <button class="call-btn"><i class="bi bi-telephone me-2"></i>Contact Now</button>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="teacher-card">
                <div class="dept-badge">Mechanical Tech</div>
                <div class="profile-wrapper">
                    <img src="https://i.pravatar.cc/150?img=13" class="teacher-img" alt="">
                    <span class="status-indicator"></span>
                </div>
                <h5 class="fw-bold mb-1">Engr. Kamrul Hasan</h5>
                <span class="designation">Instructor</span>
                <div class="small text-muted mb-2"><i class="bi bi-envelope me-2"></i>kamrul@fpi.gov.bd</div>
                
                <div class="teacher-social">
                    <a href="#" class="social-btn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-btn"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="social-btn"><i class="bi bi-chat-dots"></i></a>
                </div>
                <button class="call-btn"><i class="bi bi-telephone me-2"></i>Contact Now</button>
            </div>
        </div>
    </div>
</div>
@endsection