<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HESLab Publication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        .hero-section {
            background-color: #0033A0;
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .hero-section h1 {
            font-weight: bold;
        }
        .research-section, .publication-section {
            padding: 60px 0;
        }
        .footer {
            background-color: #0033A0;
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
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../Assets/logo_heslab.svg" alt="HESLab Logo" width="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/members">Members</a></li>
                    <li class="nav-item"><a class="nav-link active" href="">Publications</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Publication Section -->
    <section class="publication-section">
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

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <img src="/Assets/white-telyu.svg">
            <p>Hardware and Embedded System Laboratorium</p>
            <p>Find us on <a href="#">@heslab</a></p>
            <p>© Copyright 2024, All rights reserved</p>
        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
