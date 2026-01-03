<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FPI-Admin - Institute Management Dashboard</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #abe7b1ff, #90de8bff);
            --deep-green: #1a441b;
            --soft-green: #d4f0d4;
            --sidebar-width: 260px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fbf8;
            overflow-x: hidden;
        }

        /* --- Sidebar Style --- */
        #sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: var(--primary-gradient);
            transition: all 0.3s;
            z-index: 1050; /* Higher z-index for mobile */
            padding: 20px 0;
            box-shadow: 4px 0 10px rgba(0,0,0,0.05);
        }

        .sidebar-header {
            padding: 10px 25px;
            color: var(--deep-green);
            text-align: center;
            margin-bottom: 20px;
        }

        .nav-link {
            color: var(--deep-green) !important;
            padding: 12px 25px !important;
            margin: 5px 15px;
            background-color: #48df6966;
            border-radius: 12px;
            font-weight: 500;
            transition: 0.3s;
            display: flex;
            align-items: center;
        }

        .nav-link i {
            font-size: 1.2rem;
            margin-right: 15px;
        }

        .nav-link:hover, .nav-link.active {
            background-color: rgba(255, 255, 255, 0.4);
            transform: translateX(5px);
        }

        /* --- Main Content --- */
        #content {
            margin-left: var(--sidebar-width);
            width: calc(100% - var(--sidebar-width));
            padding: 30px;
            transition: all 0.3s;
        }

        /* --- Top Navbar --- */
        .top-nav {
            background: #8fe08fff;
            padding: 15px 30px;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.02);
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* --- Welcome Section --- */
        .welcome-box {
            background: var(--primary-gradient);
            border-radius: 25px;
            padding: 40px;
            color: var(--deep-green);
            position: relative;
            box-shadow: 0 10px 30px rgba(171, 231, 177, 0.3);
            margin-bottom: 30px;
        }

        /* --- Creative Cards --- */
        .stat-card {
            border: none;
            border-radius: 20px;
            padding: 20px;
            background: white;
            box-shadow: 0 8px 20px rgba(0,0,0,0.03);
            transition: 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.06);
        }

        .icon-circle {
            width: 55px;
            height: 55px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--soft-green);
            color: var(--deep-green);
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .custom-table-card {
            background: white;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.03);
        }

        .table thead th {
            background-color: #f0fff0;
            border: none;
            color: var(--deep-green);
            padding: 15px;
        }

        .search-bar {
            background: #f1f1f1;
            border-radius: 50px;
            padding: 5px 20px;
            display: flex;
            align-items: center;
            width: 300px;
        }

        .search-bar input {
            border: none;
            background: transparent;
            padding: 8px;
            width: 100%;
            outline: none;
        }

        /* --- Mobile Responsive Updates --- */
        @media (max-width: 768px) {
            #sidebar { 
                margin-left: -260px; /* Hide sidebar initially */
            }
            #sidebar.active { 
                margin-left: 0; /* Show sidebar when active */
            }
            #content { 
                margin-left: 0; 
                width: 100%; 
                padding: 15px;
            }
            .search-bar {
                width: 150px; /* Smaller search bar on mobile */
            }
            .welcome-box {
                padding: 25px;
            }
            /* Backdrop for mobile menu */
            .sidebar-overlay {
                display: none;
                position: fixed;
                width: 100vw;
                height: 100vh;
                background: rgba(0,0,0,0.3);
                z-index: 1040;
                top: 0;
                left: 0;
            }
            .sidebar-overlay.show {
                display: block;
            }
        }
    </style>
</head>
<body>

    <div class="sidebar-overlay" id="overlay"></div>

    <nav id="sidebar">
        <div class="sidebar-header">
            <h4 class="fw-bold"><i class="bi bi-mortarboard-fill"></i> EduGreen Polytechnic</h4>
        </div>
        
        <div class="mt-4">
            <a href="#" class="nav-link active"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
            <a href="{{route('student_info.create')}}" class="nav-link"><i class="bi bi-people-fill"></i> Students</a>
            <a href="#" class="nav-link"><i class="bi bi-person-badge-fill"></i> Teachers</a>
            <a href="#" class="nav-link"><i class="bi bi-calendar2-check-fill"></i> Attendance</a>
            <a href="#" class="nav-link"><i class="bi bi-wallet2"></i> Fees Collection</a>
            <a href="#" class="nav-link"><i class="bi bi-journal-text"></i> Exam Result</a>
            <a href="#" class="nav-link"><i class="bi bi-bell-fill"></i> Notices</a>
            <a href="../" class="nav-link"><i class="bi bi-house-fill"></i> Home</a>

            <a href="#" class="nav-link mt-5 text-danger"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="bi bi-box-arrow-left"></i> Logout
</a>

<form id="logout-form" method="POST" action="{{ route('logout') }}" class="d-none">
    @csrf
</form>


        </div>
    </nav>

    <div id="content">
        
        <div class="top-nav">
            <button class="btn btn-light d-md-none me-2 border-0" id="sidebarToggle" style="background: #ffffff66;">
                <i class="bi bi-list fs-3"></i>
            </button>

            <div class="search-bar">
                <i class="bi bi-search text-muted"></i>
                <input type="text" placeholder="Search...">
            </div>
            
            <div class="d-flex align-items-center">
                <div class="me-3 position-relative">
                    <i class="bi bi-bell fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">3</span>
                </div>
                <div class="d-flex align-items-center">
                    <img src="https://i.pravatar.cc/150?img=12" class="rounded-circle border border-2 border-success" width="40" alt="Profile">
                </div>
            </div>
        </div>

        @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // --- Sidebar Toggle Logic ---
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const overlay = document.getElementById('overlay');

        function toggleSidebar() {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('show');
        }

        sidebarToggle.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar);

        // --- Chart Configuration ---
        const ctx = document.getElementById('performanceChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6'],
                datasets: [{
                    label: 'Attendance',
                    data: [85, 88, 82, 95, 89, 92],
                    borderColor: '#1a441b',
                    backgroundColor: 'rgba(144, 222, 139, 0.2)',
                    fill: true,
                    tension: 0.4,
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: false, grid: { display: false } },
                    x: { grid: { display: false } }
                }
            }
        });
    </script>
</body>
</html>