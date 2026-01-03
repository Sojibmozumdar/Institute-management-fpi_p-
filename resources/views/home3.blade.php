<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feni Polytechnic Institute - Home (Slider Added)</title>
    <link rel="stylesheet" href="{{asset('css')}}/style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>

    <header class="main-header">
        <div class="logo">FPI.</div>

        <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
        <nav class="nav-links">
            <a href="#">Home</a>
            <a href="#">Departments</a>
            <a href="#">Admission</a>
            <a href="#">Academics</a>
            <a href="#">Results</a>
            <a href="#">Notice Board</a>
            <a href="#">Contact</a>
            <a href="{{route('findlerge')}}">Add number</a>
        </nav>
        <a href="#" class="btn btn-portal">Login / Portal</a>
    </header>

    <section class="hero-section">
        <div class="hero-image-side">
            <div class="hero-overlay"></div>
            <div class="slider-wrapper">
                <div class="slide slide-1"></div>
                <div class="slide slide-2"></div>
                <div class="slide slide-3"></div>
            </div>
        </div>
        
        <div class="hero-cta-side">
            <h1 class="institute-name">Feni Polytechnic Institute</h1>
            <p class="tagline">Empowering Futures through Technical Excellence.</p>
            <div class="hero-actions">
                <a href="#" class="btn btn-primary">APPLY NOW</a>
                <a href="#" class="btn btn-secondary">EXPLORE DEPARTMENTS</a>
            </div>
        </div>
    </section>

    <section class="welcome-section container">
        <div class="welcome-content">
            <h2>Welcome to FPI</h2>
            <p>Feni Polytechnic Institute (FPI) is dedicated to fostering skilled professionals ready to meet the demands of a rapidly changing industrial landscape. We prioritize hands-on learning, innovation, and a supportive academic environment to ensure our graduates are job-ready and future-proof. Our commitment is to produce technical leaders for the nation.</p>
        </div>
        <div class="director-message">
            <img src="{{asset('img')}}/head.jpg" alt="Director of FPI" class="director-img">
            <blockquote>"Invest in your skills; secure your future by choosing Feni Polytechnic Institute."</blockquote>
            <a href="#" class="read-more">Read Full Message $\rightarrow$</a>
        </div>
    </section>

    <!-- ================= Campus Gallery ================= -->
<section class="campus-section">
    <div class="container">
        <h2 class="section-title">Our Campus</h2>

        <div class="campus-grid">
            <img src="../img/campus1.jpg" alt="Campus Image">
            <img src="../img/campus2.jpg" alt="Campus Image">
            <img src="../img/campus3.jpg" alt="Campus Image">
        </div>
    </div>
</section>



    <!-- ================= Our Core Facilities ================= -->
<section class="facilities-section container">
    <h2 class="section-title">Our Core Facilities</h2>

    <div class="facilities-grid">
        <div class="facility-card">
            <img src="../img/lab.png" alt="Modern Labs">
            <h3>Modern Laboratories</h3>
            <p>Well-equipped labs for practical and hands-on technical learning.</p>
        </div>

        <div class="facility-card">
            <img src="../img/library.png" alt="Library">
            <h3>Digital Library</h3>
            <p>Rich collection of books, journals, and digital learning resources.</p>
        </div>

        <div class="facility-card">
            <img src="../img/workshop.png" alt="Workshop">
            <h3>Advanced Workshops</h3>
            <p>Industry-standard workshops for skill development.</p>
        </div>

        <div class="facility-card">
            <img src="../img/hostel.png" alt="Hostel">
            <h3>Student Hostel</h3>
            <p>Safe and comfortable residential facilities for students.</p>
        </div>
    </div>
</section>


   <section class="stats-section">
        <div class="container">
            <h2>FPI at a Glance</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <span class="stat-number">20+</span>
                    <span class="stat-label">Years of Excellence</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">5,000+</span>
                    <span class="stat-label">Successful Alumni</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">10</span>
                    <span class="stat-label">Active Departments</span>
                </div>
            </div>
        </div>
    </section>


<!-- ================= Latest Notices ================= -->
<section class="notice-section container">
    <h2 class="section-title">Latest Notices</h2>

    <ul class="notice-list">
        <li>
            <span class="date">15 Jan 2025</span>
            <a href="#">Semester Final Exam Routine Published</a>
        </li>
        <li>
            <span class="date">10 Jan 2025</span>
            <a href="#">Admission Notice for 2025 Session</a>
        </li>
        <li>
            <span class="date">05 Jan 2025</span>
            <a href="#">Class Schedule Updated</a>
        </li>
        <li>
            <span class="date">01 Jan 2025</span>
            <a href="#">Workshop on Industrial Automation</a>
        </li>
    </ul>
</section>



    <footer class="main-footer">
        <p>&copy; 2024 Feni Polytechnic Institute. All rights reserved. | Developed by Sojib Mozumdar 🌱</p>
    </footer>

</body>
<script>
    const menu = document.querySelector('#mobile-menu');
    const navLinks = document.querySelector('.nav-links');

    menu.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
</script>
</html>