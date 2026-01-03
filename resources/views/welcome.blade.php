<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feni Polytechnic Institute - Engineering Excellence</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Color Palette:
        Primary Dark Blue/Cyan: #2D7B8C
        Accent Contrast: #FF9800 (Vibrant Orange)
        Background: #F7F7F7 (Light Gray/Off-white)
        Text Color: #333333
        */

        body {
            background: #F7F7F7;
            font-family: 'Poppins', sans-serif; 
            color: #333333;
            font-size: 0.95rem;
        }

        /* Navbar Enhancements */
        .nav-custom {
             background: linear-gradient( #009c70ff, #15654eff); /* Primary Color */
            padding: 12px 0; 
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Stronger shadow */
        }

        .nav-link {
            color: #10458aff !important; /* Light text on dark background */
            font-weight: 500;
            margin: 0 10px;
            transition: color .2s ease-in-out, transform .2s ease-in-out;
            position: relative;
            font-size: 0.95rem; 
        }

        .nav-link::after { 
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 0;
            height: 2px;
            background-color: #536dec65; /* Orange accent */
            transition: width .3s ease-in-out, left .3s ease-in-out;
        }

        .nav-link:hover {
            color: #3bff73ff !important;
            transform: translateY(-2px); 
        }

        .nav-link:hover::after {
            width: 100%;
            left: 0;
        }

        /* Hero Section */
        .hero-section {
      padding: 90px 0;
      background: linear-gradient(rgba(10, 31, 45, 0.75), rgba(10, 31, 45, 0.75)),
        url("https://feni.polytech.gov.bd/sites/default/files/files/feni.polytech.gov.bd/top_banner/43119aea_fc94_4087_807b_598b6b27842a/2025-02-12-15-56-5e79ceecfcd370589b3afaf3994cb95b.jpeg");
      background-size: cover;
      background-position: center;
      color: white;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

        .hero-circle { /* Accent Color Circles */
            position: absolute;
            border-radius: 50%;
            filter: blur(20px); 
            opacity: 0.3; 
            /* Orange Accent */
        }

        .hero-title {
            font-size: 2.8rem; 
            font-weight: 800;
            margin-bottom: 15px;
        }
        
        /* Utility/Shared Styles */
        .hover-zoom:hover {
            transform: translateY(-5px);
            transition: .3s;
        }

        /* Section Headings */
        .display-5 {
            font-size: 2.5rem !important;
            color: #2D7B8C; /* Primary Color for main titles */
        }
        
        .display-6 {
            font-size: 2rem !important;
            color: #2D7B8C;
        }

        /* Feature Card Enhancement */
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.08); /* Subtle shadow on light background */
            transition: .3s;
            border-bottom: 5px solid transparent; 
            height: 100%; 
        }

        .feature-card:hover {
            transform: translateY(-7px);
            box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.12);
            border-bottom-color: #2D7B8C; /* Primary Color highlight */
        }

        .feature-icon {
            color: #2D7B8C; /* Primary Color for icon color */
            background: #e0f2f5; /* Very light shade of primary color */
            padding: 12px;
            border-radius: 50%;
            display: inline-block;
            margin-bottom: 10px;
            font-size: 2.5rem !important;
        }

        /* Button Enhancement */
        .accent-btn { /* Replaced mint-btn with a more generic name for clarity */
            background: #FF9800; /* Orange Accent */
            color: white; 
            border-radius: 50px; 
            font-weight: 700;
            padding: 10px 25px;
            font-size: 0.95rem;
            transition: .3s;
            border: 2px solid #FF9800;
        }

        .accent-btn:hover {
            background: #2D7B8C; /* Primary color on hover */
            color: #FF9800;
            border-color: #2D7B8C;
            transform: scale(1.05); 
        }

        /* Call-to-Action (CTA) Section */
        .cta-section {
            background: #2D7B8C; /* Solid primary color */
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        
        .cta-section h2 {
            font-size: 2.2rem;
            font-weight: 700;
        }

        /* Footer Cleanup */
        footer {
            background: #2D7B8C; /* Primary Color footer */
            color: #e0f2f5;
            padding: 30px 0;
            border-top: 5px solid #FF9800; /* Orange accent line */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg nav-custom sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-white fs-5" href="#">
            <i class="" style="color:#FF9800;"></i> Feni Polytechnic
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="bi bi-list fs-3 text-white"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Departments</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Teachers</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Notices</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-section">
    <div class="hero-circle" style="
        width:200px; height:200px; top:-80px; left:-80px;
    "></div>
    <div class="hero-circle" style="
        width:250px; height:250px; bottom:-80px; right:-80px;
    "></div>

    <div class="container position-relative">
        <h1 class="hero-title">
            Innovate. Design. Build.
            <br>
            <span style="color:#42f5c5;">Feni Polytechnic Institute</span>
        </h1>

        <p class="mt-3 fs-6" style="max-width:750px; margin:auto; opacity:1;">
            A leading technical institute shaping the future of engineering and innovation with hands-on learning and expert mentorship.
        </p>

        <a href="#" class="btn accent-btn mt-4">Explore Departments</a>
    </div>
</section>

<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold display-5">
            <span style="color:#FF9800;">//</span> About FPI
        </h2>
        <p class="text-muted fs-6">Building skills. Shaping futures. Creating the next generation of engineers.</p>
    </div>

    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="https://i.ibb.co/hWpdL6f/poly.jpg" class="img-fluid rounded-4 shadow-lg hover-zoom" alt="Feni Polytechnic Building">
        </div>
        <div class="col-md-6">
            <h3 class="fw-bold display-6 mb-3">Why Choose FPI?</h3>
            <p class="text-muted fs-6">
                Feni Polytechnic Institute is committed to producing highly skilled professionals equipped for the modern world. Our curriculum blends theoretical knowledge with practical, industry-relevant training.
            </p>
            <ul class="list-unstyled mt-4 fs-6">
                <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color:#2D7B8C;"></i> **Modern Labs** & Rich Digital Library</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color:#2D7B8C;"></i> Highly **Experienced Teachers** and Mentors</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color:#2D7B8C;"></i> Strong **Job Placement** Network Support</li>
            </ul>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold display-5">Our Core Facilities</h2>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-card text-center">
                <i class="feature-icon bi bi-building fs-1"></i>
                <h5 class="fw-bold mt-3" style="color:#2D7B8C;">Modern Campus</h5>
                <p class="text-muted small">A peaceful, green, and student-friendly environment designed for focus and collaboration.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card text-center">
                <i class="feature-icon bi bi-motherboard fs-1"></i>
                <h5 class="fw-bold mt-3" style="color:#2D7B8C;">Updated Labs</h5>
                <p class="text-muted small">State-of-the-art computers, machines, and equipment for hands-on practical training.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card text-center">
                <i class="feature-icon bi bi-people fs-1"></i>
                <h5 class="fw-bold mt-3" style="color:#2D7B8C;">Expert Faculty</h5>
                <p class="text-muted small">Highly trained and supportive teachers who bring real-world industry experience to the classroom.</p>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold display-5">Campus Gallery</h2>
    </div>

    <div class="row g-3">
        <div class="col-md-4"><img src="https://i.ibb.co/Kwm3HkG/campus1.jpg" class="img-fluid rounded-3 shadow-sm hover-zoom w-100" style="aspect-ratio: 4/3; object-fit: cover;"></div>
        <div class="col-md-4"><img src="https://i.ibb.co/3F0bC5f/campus2.jpg" class="img-fluid rounded-3 shadow-sm hover-zoom w-100" style="aspect-ratio: 4/3; object-fit: cover;"></div>
        <div class="col-md-4"><img src="https://i.ibb.co/3vyzPZW/campus3.jpg" class="img-fluid rounded-3 shadow-sm hover-zoom w-100" style="aspect-ratio: 4/3; object-fit: cover;"></div>
    </div>
</section>

<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold display-5">Latest Notices</h2>
    </div>

    <div class="list-group shadow-lg rounded-3">
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
            <div>
                <span class="badge bg-danger me-2">NEW</span>
                **Semester Final Exam Schedule Published**
            </div>
            <small class="text-muted">Dec 01, 2025</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
            <div>
                <span class="badge" style="background-color:#2D7B8C; color:white;">ADMISSION</span>
                **Admission Circular 2025 Released**
            </div>
            <small class="text-muted">Nov 15, 2025</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
            <div>
                <span class="badge bg-warning text-dark me-2">IMPORTANT</span>
                Lab Maintenance Work Next Week
            </div>
            <small class="text-muted">Nov 05, 2025</small>
        </a>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2 class="fw-bold">Ready to Start Your Future in Tech?</h2>
        <p class="fs-6 mt-3 mb-4 opacity-75">
            Join Feni Polytechnic Institute and turn your passion into a profession.
        </p>
        <a href="#" class="btn accent-btn" style="background:#FF9800; color:white; border-color:#FF9800;">Apply Now <i class="bi bi-arrow-right"></i></a>
    </div>
</section>

<footer>
    <div class="container text-center">
        <h5 class="fw-bold fs-5" style="color:#FF9800;">Feni Polytechnic Institute</h5>
        <p class="small">Feni, Bangladesh | <i class="bi bi-envelope"></i> info@fpi.edu.bd</p>
        <div class="mt-2">
            <a href="#" class="text-decoration-none mx-2 fs-6" style="color: #e0f2f5;"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-decoration-none mx-2 fs-6" style="color: #e0f2f5;"><i class="bi bi-youtube"></i></a>
        </div>
        <p class="mt-2 mb-0 opacity-75 small">© 2025 Feni Polytechnic Institute. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>