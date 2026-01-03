@extends('layout.mastaring')

@section('content')
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #abe7b1ff, #90de8bff);
        --deep-green: #1a441b;
        --soft-white: rgba(255, 255, 255, 0.95);
    }

    body { background-color: #f4faf4; }

    /* --- Top Header Design --- */
    .form-top-header {
        background: white;
        padding: 15px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #e0eee0;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.02);
    }

    .reg-wrapper {
        min-height: calc(100vh - 150px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .glass-reg-card {
        background: white;
        border-radius: 40px;
        display: flex;
        width: 1050px;
        max-width: 100%;
        box-shadow: 0 40px 80px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        border: 1px solid #e8f2e8;
    }

    /* --- New Modern Side Design --- */
    .reg-side-banner {
        background: var(--primary-gradient);
        flex: 1;
        padding: 60px;
        color: var(--deep-green);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
    }

    .reg-side-banner::before {
        content: "";
        position: absolute;
        top: -100px;
        left: -100px;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
    }

    .feature-item {
        background: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
        padding: 20px;
        border-radius: 20px;
        margin-bottom: 15px;
        border: 1px solid rgba(255, 255, 255, 0.4);
        transition: 0.3s;
    }

    .feature-item:hover {
        background: rgba(255, 255, 255, 0.5);
        transform: translateX(10px);
    }

    /* --- Form Area --- */
    .reg-form-area {
        flex: 1.2;
        padding: 60px 80px;
    }

    .input-box {
        position: relative;
        margin-bottom: 20px;
    }

    .input-box label {
        font-weight: 600;
        font-size: 0.8rem;
        color: var(--deep-green);
        margin-left: 5px;
        margin-bottom: 5px;
        display: block;
    }

    .input-box input, .input-box select {
        width: 100%;
        padding: 13px 20px 13px 50px;
        border-radius: 18px;
        border: 2px solid #f0f5f0;
        background: #fbfdfb;
        transition: 0.3s;
    }

    .input-box input:focus, .input-box select:focus {
        border-color: #90de8b;
        background: white;
        outline: none;
        box-shadow: 0 8px 20px rgba(144, 222, 139, 0.15);
    }

    .input-box i {
        position: absolute;
        left: 20px;
        top: 38px;
        color: #7ab87f;
        font-size: 1.1rem;
    }

    .submit-btn {
        background: var(--deep-green);
        color: white;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 18px;
        font-weight: 600;
        margin-top: 20px;
        transition: 0.4s;
    }

    .submit-btn:hover {
        background: #2a5c2d;
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
</style>

<div class="form-top-header">
    <div class="d-flex align-items-center">
        <div class="bg-success rounded-circle me-2" style="width: 35px; height: 35px; background: var(--primary-gradient) !important;"></div>
        <h5 class="fw-bold mb-0 text-success">EduGreen Portal</h5>
    </div>
    <div class="d-none d-md-block">
        <a href="#" class="text-muted text-decoration-none small me-4">Help Center</a>
        <a href="#" class="btn btn-outline-success btn-sm rounded-pill px-4">Login</a>
    </div>
</div>

<div class="reg-wrapper">
    <div class="glass-reg-card">
        
        <div class="reg-side-banner d-none d-lg-flex">
            <div>
                <h2 class="fw-bold mb-4">Registration <br> Management</h2>
                
                <div class="feature-item">
                    <h6 class="fw-bold mb-1"><i class="bi bi-shield-check me-2"></i> Role Control</h6>
                    <small>Assign specific roles to users for secure access.</small>
                </div>

                <div class="feature-item">
                    <h6 class="fw-bold mb-1"><i class="bi bi-cloud-arrow-up me-2"></i> Data Sync</h6>
                    <small>Real-time synchronization with institute database.</small>
                </div>

                <div class="feature-item">
                    <h6 class="fw-bold mb-1"><i class="bi bi-graph-up-arrow me-2"></i> Analytics</h6>
                    <small>Get detailed reports of user activities.</small>
                </div>
            </div>

            <div class="mt-auto">
                <p class="small opacity-75 mb-0">© 2026 EduGreen Polytechnic Institute</p>
                <p class="small fw-bold">Design Excellence System</p>
            </div>
        </div>

        <div class="reg-form-area">
            <h3 class="fw-bold mb-1">Create User</h3>
            <p class="text-muted small mb-4">Register a new administrator or staff member.</p>

            @if ($errors->any())
    <div class="alert alert-danger rounded-3 mb-3">
        <ul class="mb-0 small">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


           <form method="POST" action="{{ route('register.save') }}">
    @csrf

                <div class="input-box">
                    <label>USER NAME</label>
                    <i class="bi bi-person-circle"></i>
                    <input type="text"  name="name" placeholder="Enter full name" required>
                </div>

                <div class="input-box">
                    <label>EMAIL ADDRESS</label>
                    <i class="bi bi-envelope-at"></i>
                    <input type="email" name="email" placeholder="example@fpi.gov.bd" required>
                </div>

                <div class="input-box">
                    <label>USER TYPE</label>
                    <i class="bi bi-people"></i>
                    <select name="user_type" required>
                        <option value="" disabled selected>Select user role</option>
                        <option>Admin</option>
                        <option>User</option>
                    </select>
                </div>

                <div class="input-box">
                    <label>PASSWORD</label>
                    <i class="bi bi-lock-fill"></i>
                    <input type="password" name="password" placeholder="Create strong password" required>
                </div>

                <button type="submit"  class="submit-btn">Register Now</button>
            </form>
        </div>
    </div>
</div>
@endsection