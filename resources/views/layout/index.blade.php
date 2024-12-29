<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HESLab Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #0033A0;
            color: white;
            text-align: center;
            position: relative;
        }

        .hero-section h1 {
            font-weight: bold;
        }

        .hero-content img {
            width: 100%;
            height: 508px;
            opacity: 0.8;
            display: block;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            z-index: 1;
        }

        .text-overlay h1 {
            font-size: 3rem;
            margin: 0;
        }

        .text-overlay p {
            font-size: 1.5rem;
        }

        .research-section, .publication-section {
            padding: 60px 0;
        }
        .footer {
            background: #0033A0;
            color: white;
            padding: 30px 0;
        }
        .map {
            height: 300px;
            background-color: #f0f0f0;
        }
        .footer .container {
            text-align: center;
        }
        .footer a {
            color: #fff;
        }

        .custom-card {
            border-radius: 8px;
        }

        .custom-prev img, .custom-next img {
            width: 30px;
            height: 30px;
        }

        .custom-prev, .custom-next {
            background: none;
            border: none;
        }

        .card-img-top {
            width: 130px;
            height: 126px;
            border-radius: 8px;
            object-fit: cover;
            margin: 0 auto;
        }

    </style>
</head>
<body style="padding-top: 70px;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
                <img src="/assets/logo_heslab.svg" alt="HESLab Logo" width="80">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#members-section">Members</a></li>
                    <li class="nav-item"><a class="nav-link" href="#publication-section">Publications</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white text-center d-flex align-items-center justify-content-center position-relative" style="height: 508px; background-image: url('/Assets/invlg-1.png'); background-size: cover; background-position: center;">
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
    <section class="activities-section">
        <div class="container">
            <h2 class="text-center mb-5"><br>Activities</h2>
            <div class="row justify-content-center text-center">
                @foreach ($activity as $act)
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card shadow">
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
                    <a href="/gallery" class="btn btn-primary fw-bold d-flex align-items-center justify-content-center"
                        style="width: 159px; height: 54px; border-radius: 12px; font-size: 16px;">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Members Section -->
    <section id="members-section" class="members-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Members</h2>
            <div class="row justify-content-center text-center">
                @foreach ($member as $mem)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-sm">
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
                <a href="/members" class="btn btn-primary fw-bold d-flex align-items-center justify-content-center" style="width: 159px; height: 54px; border-radius: 12px; font-size: 16px;">
                    View More
                </a>
            </div>
        </div>
    </section>

    <!-- Publications Section -->
    <section id="publication-section" class="publication-section">
        <div class="container">
            <h2 class="text-center mb-5">Publications</h2>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="card custom-card shadow">
                                    <img src="/Assets/embedded-1.png" class="card-img-top my-3"
                                        style="width: 90%; height: auto;" alt="Embedded System">
                                    <div class="card-body text-center">
                                        <h5 class="card-text">Embedded System</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="card custom-card shadow">
                                    <img src="/Assets/iot-1.png" class="card-img-top my-3"
                                        style="width: 90%; height: auto;" alt="Internet of Things">
                                    <div class="card-body text-center">
                                        <h5 class="card-text">IoT</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="card custom-card shadow">
                                    <img src="/Assets/quadrotor-1.png" class="card-img-top my-3"
                                        style="width: 90%; height: auto;" alt="Quadrotor">
                                    <div class="card-body text-center">
                                        <h5 class="card-text">Quadrotor</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev custom-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <img src="/Assets/l-arrow.svg" alt="Previous" aria-hidden="true">
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next custom-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <img src="/Assets/r-arrow.svg" alt="Next" aria-hidden="true">
                    <span class="visually-hidden">Next</span>
                </button>
            <!-- View More Button -->
            <div class="d-flex justify-content-center mt-4">
                <a href="/publication" class="btn btn-primary fw-bold d-flex align-items-center justify-content-center" style="width: 159px; height: 54px; border-radius: 12px; font-size: 16px;">
                    View More
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <img src="/Assets/white-telyu.svg">
            <p>Hardware and Embedded System Laboratorium</p>
            <p>Find us on <a href="#">@heslab</a></p>
            <p>© Copyright 2024, All rights reserved</p>
        </div>
        <!-- Google Maps -->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.4567174397025!2d107.62863989221058!3d-6.97117907951102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e739aef42ad7%3A0x9fb4de87210b8009!2sTelkom%20University%20Landmark%20Tower!5e0!3m2!1sen!2sid!4v1614245835280!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
