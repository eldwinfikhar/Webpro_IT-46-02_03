<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HESLab Members</title>
    <link rel="stylesheet" href="/styles.css">
    <link rel="icon" href="{{ asset('assets/Logo_hes.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
                    <li class="nav-item"><a class="nav-link active" href="">Members</a></li> 
                    <li class="nav-item"><a class="nav-link" href="/publication">Publications</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Members Section -->
    <section class="members-section animate-on-scroll">
        <div class="container">
            <h2 class="text-center mt-4">Members of HESLab</h2><br>
            <div class="row justify-content-start">
                @foreach($member as $mem)
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card card-animate">
                    @if($mem->image)
                        <img src="{{ asset('storage/' . $mem->image) }}" class="card-img-top" alt="{{ $mem->name }}">
                    @else
                        <img src="/Assets/member-dummy.png" class="card-img-top" alt="Default Image">
                    @endif
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $mem->name }}</h5>
                            <p class="card-text">{{ $mem->position }}</p>
                            <p class="card-text">{{ $mem->major }}</p>
                            <div class="social-icons">
                                <a href="{{$mem->linked}}" class="btn btn-outline-primary btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="{{ file_get_contents(public_path('assets/linkedin-path.txt')) }}"/>
                                    </svg>
                                    {{-- <img src="/assets/linkedin.svg" alt="LinkedIn" width="16" height="16" /> --}}
                                </a>
                                @if($mem->github !== null) 
                                    <a href="{{$mem->github}}" class="btn btn-outline-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                            <path d="{{ file_get_contents(public_path('assets/github-path.txt')) }}"/>
                                        </svg>
                                        {{-- <img src="/assets/github.svg" alt="GitHub" width="16" height="16" fill="currentColor" class="bi bi-github"/> --}}
                                    </a>    
                                @endif 
                                @if($mem->instagram !== null) 
                                    <a href="{{$mem->instagram}}" class="btn btn-outline-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path d="{{ file_get_contents(public_path('assets/instagram-path.txt')) }}"/>
                                        </svg>
                                        {{-- <img src="/assets/instagram.svg" alt="GitHub" width="16" height="16" fill="currentColor" class="bi bi-instagram"/> --}}
                                    </a>
                                @endif                       
                                <a href="mailto:{{$mem->email}}" class="btn btn-outline-primary btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="{{ file_get_contents(public_path('assets/email-path.txt')) }}"/>
                                    </svg>
                                    {{-- <img src="/assets/email.svg" alt="GitHub" width="16" height="16" fill="currentColor" class="bi bi-envelope"/> --}}
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <br>
    
    <!-- Footer -->
    <footer class="footer animate-on-scroll">
        <div class="container">
            <img src="/Assets/logo_telkom.png" class="img-fluid" style="max-height: 100px;">
            <p>Hardware and Embedded System Laboratorium</p>
            <p>Find us on <a href="#">@heslab</a></p>
            <p>© Copyright 2024, All rights reserved</p>
        </div>
    </footer>
    
    <script src="/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
