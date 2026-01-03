@extends('layout.mastaring')


@section('content')


    <section class="welcome-section container">
        <div class="welcome-content">
            <h2><b> Welcome to EduGreen </b></h2>
            <p>EduGreen Polytechnic Institute (EduGreen) is dedicated to fostering skilled professionals ready to meet the demands of a rapidly changing industrial landscape. We prioritize hands-on learning, innovation, and a supportive academic environment to ensure our graduates are job-ready and future-proof. Our commitment is to produce technical leaders for the nation.</p>
        </div>
        <div class="director-message">
            <img src="{{asset('img')}}/logo.jpg" alt="Director of FPI" class="director-img">
            <blockquote>"Invest in your skills; secure your future by choosing EduGreen Polytechnic Institute."</blockquote>
            <a href="#" class="read-more">Read Full Message $\rightarrow$</a>
        </div>
    </section>

    <!-- ================= Campus Gallery ================= -->
<section class="campus-section">
    <div class="container">
        <h2 class="section-title"><b>Our Campus</b></h2>

        <div class="campus-grid">
            <img src="{{asset('img')}}/cam3.jpg" alt="Campus Image">
            <img src="{{asset('img')}}/cam2.jpg" alt="Campus Image">
            <img src="{{asset('img')}}/cam1.jpg" alt="Campus Image">
            <img src="{{asset('img')}}/cam3.jpg" alt="Campus Image">
            <img src="{{asset('img')}}/cam2.jpg" alt="Campus Image">
            <img src="{{asset('img')}}/cam1.jpg" alt="Campus Image">
            <img src="{{asset('img')}}/cam2.jpg" alt="Campus Image">
            <img src="{{asset('img')}}/cam1.jpg" alt="Campus Image">
            
        </div>
    </div>
</section>



    <!-- ================= Our Core Facilities ================= -->
<section class="facilities-section container">
    <h2 class="section-title"><b> Our Core Facilities </b></h2>

    <div class="facilities-grid">
        <div class="facility-card">
            <img src="{{asset('img')}}/11276732.png" alt="Modern Labs">
            <h3>Modern Laboratories</h3>
            <p>Well-equipped labs for practical and hands-on technical learning.</p>
        </div>

        <div class="facility-card">
            <img src="{{asset('img')}}/lib.png" alt="Library">
            <h3>Digital Library</h3>
            <p>Rich collection of books, journals, and digital learning resources.</p>
        </div>

        <div class="facility-card">
            <img src="{{asset('img')}}/Workshop.png" alt="Workshop">
            <h3>Advanced Workshops</h3>
            <p>Industry-standard workshops for skill development.</p>
        </div>

        <div class="facility-card">
            <img src="{{asset('img')}}/2379544.png" alt="Hostel">
            <h3>Student Hostel</h3>
            <p>Safe and comfortable residential facilities for students.</p>
        </div>
    </div>
</section>


   <section class="stats-section">
        <div class="container">
            <h2> <b>EduGreen at a Glance </b></h2>
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
    <h2 class="section-title"><b> Latest Notices </b></h2>

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

@endsection    