<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduGreen Polytechnic Institute</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>

    @include('layout.header')

    <main>
        @yield('content')
    </main>

    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const menu = document.querySelector('#mobile-menu');
        const navLinks = document.querySelector('.nav-links');

        if(menu) {
            menu.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        }
    </script>
</body>
</html>


 