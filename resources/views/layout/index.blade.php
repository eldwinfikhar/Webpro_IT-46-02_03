<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HESLab Homepage</title>
    <link rel="icon" href="{{ asset('assets/Logo_hes.png') }}" />
    <!-- <link rel="stylesheet" href="/styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body style="padding-top: 70px;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
                <img src="/assets/logo_heslab.svg" alt="HESLab Logo" width="80">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#members-section">Members</a></li>
                    <li class="nav-item"><a class="nav-link" href="/publication">Publications</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://hesvault.site/">Peminjaman Alat Lab</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white text-center d-flex align-items-center justify-content-center position-relative animate-on-scroll"
        style="height: 508px; background-image: url('/Assets/invlg-1.png'); background-size: cover; background-position: center;">
        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
        <div class="container position-relative" style="z-index: 1;">
            <div class="text-overlay">
                <h1>HARDWARE & EMBEDDED SYSTEM</h1>
                <p>Empowering Innovation, Crafting Excellence</p>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section class="activities-section animate-on-scroll">
        <div class="container">
            <h2 class="text-center py-5"><br>Activities</h2>
            <div class="row justify-content-center text-center">
                @foreach ($activity as $act)
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card card-animate shadow">
                        <img src="{{ asset('storage/' . $act->image) }}" class="card-img-top my-3"
                            style="width: 90%; height: auto;" alt="{{$act->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$act->name}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach    
                <!-- Learn More Button -->
                <div class="d-flex justify-content-center mt-4">
                    <a href="/gallery" class="btn btn-primary fw-bold d-flex align-items-center justify-content-center btn-zoom"
                        style="width: 159px; height: 54px; border-radius: 12px; font-size: 16px;">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Members Section -->
    <section id="members-section" class="members-section animate-on-scroll">
        <div class="container">
            <h2 class="text-center py-5">Members</h2>
            <div class="row justify-content-center text-center">
                @foreach ($member as $mem)
                <div class="col-md-3 mb-4">
                    <div class="card card-animate shadow-sm">
                        <img src="{{ asset('storage/' . $mem->image) }}" class="card-img-top" alt="{{ $mem->name }}"
                            style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="mt-3">
                        <h5 class="mb-1">{{$mem->name}}</h5>
                        <p class="text-muted mb-2">{{$mem->position}}</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="me-3"><i class="bi bi-envelope"></i></a>
                            <a href="#" class="me-3"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            <!-- View More Button -->
            <div class="d-flex justify-content-center mt-4">
                <a href="/members" class="btn btn-primary fw-bold d-flex align-items-center justify-content-center btn-zoom"
                    style="width: 159px; height: 54px; border-radius: 12px; font-size: 16px;">
                    View More
                </a>
            </div>
        </div>
    </section>

    <!-- Field of Research Section -->
    <section id="publication-section" class="publication-section mb-5 animate-on-scroll">
        <div class="container">
            <h2 class="text-center py-5">Field of Research</h2>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card card-animate shadow"> 
                        <img src="/Assets/embedded.png" class="card-img-top my-3"
                            style="width: 90%; height: 250px;" alt="Embedded System">
                        <div class="card-body text-center" style="height: 80px;" >
                            <h5 class="card-text">Innovating Life Through Robotics</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card card-animate shadow">
                        <img src="/Assets/health_IoT.png" class="card-img-top my-3"
                            style="width: 90%; height: 250px;" alt="Internet of Things">
                        <div class="card-body text-center"  style="height: 80px;">
                            <h5 class="card-text">IoT in Healthcare Systems</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card card-animate shadow">
                        <img src="/Assets/drone.png" class="card-img-top my-3"
                            style="width: 90%; height: 250px;" alt="Quadrotor">
                        <div class="card-body text-center"  style="height: 80px;">
                            <h5 class="card-text">Drone Research</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card card-animate shadow">
                        <img src="/Assets/farming.png" class="card-img-top my-3"
                            style="width: 90%; height: 250px;" alt="Quadrotor">
                        <div class="card-body text-center"  style="height: 80px;">
                            <h5 class="card-text">Smart Technology for Sustainable Farming</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card card-animate shadow">
                        <img src="/Assets/hw-ai.png" class="card-img-top my-3"
                            style="width: 90%; height: 250px;" alt="Quadrotor">
                        <div class="card-body text-center"  style="height: 80px;">
                            <h5 class="card-text">Empowering Hardware with Artificial Intelligent </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card card-animate shadow">
                        <img src="/Assets/hw-cv.png" class="card-img-top my-3"
                            style="width: 90%; height: 250px;" alt="Quadrotor">
                        <div class="card-body text-center"  style="height: 80px;">
                            <h5 class="card-text">Embedded Systems with Computer Vision </h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- View More Button -->
            <div class="d-flex justify-content-center mt-4">
                <a href="/publication" class="btn btn-primary fw-bold d-flex align-items-center justify-content-center btn-zoom"
                    style="width: 159px; height: 54px; border-radius: 12px; font-size: 16px;">
                    View More
                </a>
            </div>
        </div>
    </section>

    <footer class="footer py-2" style="background-color: #0033A0;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Google Maps -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div>
                        <iframe class="embed-responsive-item" 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.4567174397025!2d107.62863989221058!3d-6.97117907951102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e739aef42ad7%3A0x9fb4de87210b8009!2sTelkom%20University%20Landmark%20Tower!5e0!3m2!1sen!2sid!4v1614245835280!5m2!1sen!2sid" 
                            style="border:0px; height:230px; width:600px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <!-- Logo and Text -->
                <div class="col-md-6 text-center text-md-start text-white">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <img class="me-1" src="/Assets/telkom_putih.png" class="img-fluid" style="max-height: 100px;" alt="Telkom Logo">
                        <img class="ms-1" src="/Assets/fif.png" class="img-fluid" style="max-height: 100px;" alt="Telkom FIF">
                    </div>
                    <h5 class="fw-bold">Hardware and Embedded System Laboratorium</h5>
                    <p class="mb-1">
                        Find us on:<br>
                        <i class="fab fa-instagram"></i>
                        <a class="text-white text-decoration-none" href="https://www.instagram.com/hes.lab/" target="_blank">@hes.lab</a><br>
                        <i class="fab fa-linkedin"></i>
                        <a class="text-white text-decoration-none" href="https://www.linkedin.com/company/hardware-and-embedded-system/" target="_blank">LinkedIn</a>
                    </p>
                    <p class="mb-0 text-white">© Copyright 2024, All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<style>
    .hero-section {
        background-color: #0033A0;
        color: white;
        text-align: center;
        position: relative;
    }
    .card-img-top {
        width: 130px;
        height: 126px;
        border-radius: 8px;
        object-fit: cover;
        margin: 0 auto;
    }
    .text-white-link {
        color: white !important;
        text-decoration: none;
    }

    .text-white-link:hover {
        color: #ccc; /* Warna saat hover (opsional) */
    }
</style>
</html>

