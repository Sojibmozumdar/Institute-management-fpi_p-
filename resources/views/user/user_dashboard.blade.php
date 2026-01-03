<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduGreen Pro Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            /* Your Theme Colors */
            --edu-gradient: linear-gradient(135deg, #abe7b1, #90de8b);
            --edu-dark-green: #1b4332;
            --edu-soft-bg: #f0f4f1;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--edu-soft-bg);
            color: #2d3436;
            margin: 0;
        }

        /* --- Top Navbar Styled with Your Color --- */
        .navbar-top {
            background: var(--edu-gradient);
            padding: 12px 25px;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1050;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        /* --- Sidebar Styled with Your Color --- */
        .sidebar {
            width: 260px;
            height: 100vh;
            background: var(--edu-gradient);
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 85px; /* Navbar er niche thakar jonno */
            border-right: 1px solid rgba(0,0,0,0.05);
            z-index: 1000;
        }

        .main-content {
            margin-left: 260px;
            padding: 100px 40px 40px 40px; /* Top and Side spacing */
        }

        .nav-link {
            color: #ffffffff;
            background: #03541eff;
            padding: 14px 22px;
            border-radius: 12px;
            margin: 8px 15px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            font-weight: 600;
            opacity: 0.8;
        }

        .nav-link i {
            font-size: 1.2rem;
            margin-right: 12px;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.4);
            opacity: 1;
            transform: translateX(8px);
        }

        .nav-link.active {
            background: var(--edu-dark-green);
            color: #ffffff !important;
            opacity: 1;
            box-shadow: 0 10px 20px rgba(27, 67, 50, 0.15);
        }

        /* --- UI Elements --- */
        .stat-card {
            border: none;
            border-radius: 24px;
            background: #ffffff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .icon-circle {
            width: 48px;
            height: 48px;
            background: var(--edu-soft-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--edu-dark-green);
        }

        .search-bar {
            background: rgba(255, 255, 255, 0.3);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 6px 15px;
            color: var(--edu-dark-green);
        }

        .profile-chip {
            background: rgba(27, 67, 50, 0.1);
            padding: 5px 15px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            font-weight: 600;
            color: var(--edu-dark-green);
        }

        @media (max-width: 992px) {
            .sidebar { width: 80px; }
            .sidebar span { display: none; }
            .main-content { margin-left: 80px; }
        }
    </style>
</head>
<body>

    <nav class="navbar-top d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <h4 class="mb-0 fw-bold me-5" style="color: var(--edu-dark-green); letter-spacing: -1px;">EduGreen</h4>
            <div class="d-none d-md-block">
                <input type="text" class="search-bar" placeholder="Search courses...">
            </div>
        </div>
        <div class="d-flex align-items-center gap-3">
            <div class="position-relative me-2">
                <i class="bi bi-bell-fill fs-5" style="color: var(--edu-dark-green);"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1"></span>
            </div>
            <div class="profile-chip">
                <span class="me-2 d-none d-sm-inline">Alex J.</span>
                <img src="https://i.pravatar.cc/150?u=alex" alt="profile" style="width: 30px; height: 30px; border-radius: 50%;">
            </div>
        </div>
    </nav>

    <aside class="sidebar">
        <div class="nav flex-column">
            <a href="#" class="nav-link active">
                <i class="bi bi-grid-1x2-fill"></i> <span>Dashboard</span>
            </a>
            <a href="#" class="nav-link">
                <i class="bi bi-book-half"></i> <span>My Courses</span>
            </a>
            <a href="#" class="nav-link">
                <i class="bi bi-calendar-event"></i> <span>Schedule</span>
            </a>
            <a href="#" class="nav-link">
                <i class="bi bi-journal-text"></i> <span>Assignments</span>
            </a>
            <a href="#" class="nav-link">
                <i class="bi bi-credit-card-2-front"></i> <span>Fees</span>
            </a>
            <a href="../" class="nav-link">
                <i class="bi bi-house-fill"></i> <span>Home</span>
            </a>
            <div class="my-4 mx-4 border-top opacity-10"></div>
           
           <a href="#" class="nav-link mt-5 text-danger"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="bi bi-box-arrow-left"></i> Logout
</a>

<form id="logout-form" method="POST" action="{{ route('logout') }}" class="d-none">
    @csrf
</form>
        </div>
    </aside>

    <main class="main-content">
        <div class="row g-4 mb-4">
            <div class="col-12">
                <h3 class="fw-bold">Student Overview</h3>
                <p class="text-muted">Welcome back! Check your latest academic updates.</p>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-3">
                <div class="card stat-card p-4">
                    <div class="icon-circle mb-3"><i class="bi bi-mortarboard-fill fs-4"></i></div>
                    <h6 class="text-muted fw-bold small uppercase">Average GPA</h6>
                    <h3 class="fw-bold mb-0">3.85</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card p-4">
                    <div class="icon-circle mb-3"><i class="bi bi-person-check-fill fs-4"></i></div>
                    <h6 class="text-muted fw-bold small">Attendance</h6>
                    <h3 class="fw-bold mb-0">94%</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card p-4">
                    <div class="icon-circle mb-3"><i class="bi bi-lightning-fill fs-4"></i></div>
                    <h6 class="text-muted fw-bold small">Credits Done</h6>
                    <h3 class="fw-bold mb-0">12/18</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card p-4">
                    <div class="icon-circle mb-3"><i class="bi bi-clipboard-data-fill fs-4"></i></div>
                    <h6 class="text-muted fw-bold small">Assignments</h6>
                    <h3 class="fw-bold mb-0">03 Pending</h3>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm p-4" style="border-radius: 24px;">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold mb-0">Assignments</h5>
                        <button class="btn btn-dark btn-sm rounded-pill px-3">View All</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th class="border-0 rounded-start">Course</th>
                                    <th class="border-0">Due Date</th>
                                    <th class="border-0">Status</th>
                                    <th class="border-0 rounded-end text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-3"><strong>Electronic Circuits</strong></td>
                                    <td>Oct 25, 2023</td>
                                    <td><span class="badge bg-warning text-dark rounded-pill">Pending</span></td>
                                    <td class="text-end"><button class="btn btn-sm btn-outline-dark rounded-3">Upload</button></td>
                                </tr>
                                <tr>
                                    <td class="py-3"><strong>Microcontrollers</strong></td>
                                    <td>Oct 20, 2023</td>
                                    <td><span class="badge bg-success rounded-pill">Submitted</span></td>
                                    <td class="text-end"><button class="btn btn-sm btn-outline-dark rounded-3">Details</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 p-4 shadow-sm" style="background: var(--edu-dark-green); color: white; border-radius: 24px;">
                    <h5 class="fw-bold opacity-75">Upcoming Exam</h5>
                    <h3 class="fw-bold mt-2">Advanced Maths</h3>
                    <p class="small opacity-50">Room 202 • 09:00 AM</p>
                    <div class="py-4 text-center">
                        <h1 class="display-2 fw-bold mb-0">02</h1>
                        <p class="text-uppercase fw-bold">Days to go</p>
                    </div>
                    <button class="btn btn-light w-100 py-3 fw-bold rounded-4" style="background: var(--edu-gradient); border: none; color: var(--edu-dark-green);">
                        Get Hall Ticket
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>