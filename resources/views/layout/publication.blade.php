<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HESLab Publication</title>
    <link rel="stylesheet" href="/styles.css">
    <link rel="icon" href="{{ asset('assets/Logo_hes.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../Assets/logo_heslab.svg" alt="HESLab Logo" width="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/members">Members</a></li>
                    <li class="nav-item"><a class="nav-link active" href="">Publications</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://hesvault.site/">Peminjaman Alat Lab</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Publication Section -->
    <section class="publication-section animate-on-scroll">
        <div class="container">
            <h2 class="text-center">Publication</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Year</th>
                        <th>Publisher</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($publication as $pub)
                    <tr>
                        <td><a href="{{ $pub->link }}">{{ $pub->title }}</a></td>
                        <td>{{ $pub->author }}</td>
                        <td>{{ $pub->year }}</td>
                        <td>{{ $pub->publisher }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!-- footer -->
    <footer class="footer animate-on-scroll py-3" style="background-color: #0033A0;">
        <div class="container">
                <div class="col-md-4 text-center text-md-start text-white">
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
</html>
