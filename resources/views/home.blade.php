{{(session('success'))}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero-section {
            /* background: url('church-IMG-20230529-WA0000'); */
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .features-section, .welcome-section {
            padding: 50px 0;
        }
        .welcome-section h2, .features-section h2 {
            color: #333;
        }
        .bg-img{
            position: absolute;
            width: 60%;
            height:100%;

        }
    </style>
</head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Church Attendance App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#welcome">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('login')}}">login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('registration')}}">Registration</a></li>



@auth
<p>welcome back, {{auth()->user()->name}}!</p>
<a href="{{route('dashboard')}}">Go to dashboard</a>
<form action="{{route('logout')}}" method="POST">
@csrf
<button type="submit">logout</button>
@else


@endauth


</form>
        </ul>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero-section">
    <img src="{{ asset('imge/bg.jpg')}}" alt="" class="bg-img">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>welcome to our website!</h1>
        <h1>Following Jesus Wherever We Are</h1>
        <p>Welcome to our church. Join us as we gather in faith and fellowship.</p>
        <a href="#welcome" class="btn btn-warning mt-3">Learn More</a>
    </div>
</div>

<!-- Welcome Section -->
<section id="welcome" class="welcome-section container text-center">
    <h2>Welcome to Our Church</h2>
    <p>We believe in building a community where everyone can grow and deepen their faith. We invite you to join us and experience a loving, supportive, and faith-filled community.</p>
    <img src="imge/gb.jpg" alt="Church Interior" class="img-fluid mt-3" style="max-height: 300px;">
</section>

<!-- Features Section -->
<section id="features" class="features-section container">
    <div class="text-center mb-5">
        <h2>Our Features</h2>
        <p>Empowering your spiritual journey with helpful tools.</p>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-users fa-3x mb-3"></i>
            <h5>Member Management</h5>
            <p>Manage attendance and member details effortlessly.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-chart-line fa-3x mb-3"></i>
            <h5>Attendance Analytics</h5>
            <p>Track trends in attendance and member engagement.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-calendar-alt fa-3x mb-3"></i>
            <h5>Event Scheduling</h5>
            <p>Organize events and track participation easily.</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
    <p>&copy; 2024 Church Attendance App | All Rights Reserved</p>
</footer>




<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
