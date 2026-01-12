 <header class="main-header">
        <div class="logo">EduGreen.</div>

        <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
        </div>

        <nav class="nav-links">
            <a href="/">Home</a>
            <a href="{{route('dept')}}">Departments</a>
            <a href="{{route('teacher.list')}}">Teachers</a>
            <a href="{{route('student')}}">Student_list</a>
            <a href="#">Results</a>
            <a href="#">Notice Board</a>
            <a href="{{route('customer.create')}}">Contact</a>
            <a href="{{route('register')}}">Registation</a>
            <a href="{{route('dashboard')}}">Dashboard</a>

        </nav>
        <a href="{{route('login')}}" class="btn btn-portal">Login / Portal</a>
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
            <h1 class="institute-name"><b> EduGreen Polytechnic Institute </b></h1>
            <p class="tagline">Empowering Futures through Technical Excellence.</p>
            <div class="hero-actions">
                <a href="#" class="btn btn-primary">APPLY NOW</a>
                <a href="#" class="btn btn-secondary">EXPLORE DEPARTMENTS</a>
            </div>
        </div>
    </section>
