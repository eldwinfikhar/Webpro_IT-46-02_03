<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HESLab Gallery</title>
    <link rel="icon" href="{{ asset('assets/Logo_hes.png') }}" />
    <link rel="stylesheet" href="/styles.css">
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
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/members">Members</a></li>
                    <li class="nav-item"><a class="nav-link" href="/publication">Publications</a></li>
                    <li class="nav-item"><a class="nav-link active" href="">Gallery</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Large Image Section -->
    <section class="text-center animate-on-scroll">
        <img src="../Assets/HES_members.jpeg" alt="AI Lab Group Photo" class="img-fluid" style="width: 100%; max-height: 500px; object-fit: cover;">
    </section>

     <!-- About Section -->
     <section class="py-5 text-center animate-on-scroll">
        <div class="container">
            <h2>About HES Laboratory Telkom University</h2>
            <p class="lead">
                Hardware and Embedded System Laboratory (HES Lab) is a specialized research facility under Communication and Information Technology Infrastructure (CITI).
                Located within the Faculty of Informatics at Telkom University, HES Lab focuses on the development of hardware and embedded system technologies. As a research-based
                laboratory, we conduct severalcore activities, including Research Group, Study Group, and Competition, to support our mission and contribute to the development of
                cutting-edge embedded systems. You can find us at TULT Room 0614, Telkom University Landmark Tower.
            </p>
        </div>
    </section>

    <!-- Activities Section -->
    <section class="py-5 bg-light animate-on-scroll">
        <div class="container">
            <h3 class="text-center mb-4">Our Activities</h3>
            <div class="row justify-content-center text-center">
                @foreach($activity as $act)
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card card-animate shadow">
                        <div class="card-body">
                        @if($act->image)
                            <img src="{{ asset('storage/' . $act->image) }}" class="card-img-top my-3" style="width: 90%; height: auto;" alt="{{ $act->name }}">
                        @else
                            <img src="/Assets/activity-dummy.png" class="card-img-top" alt="Default Image">
                        @endif
                            <h5 class="card-title">{{$act->name}}</h5>
                            <p class="card-text">{{$act->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Partnership Section -->
    <section class="py-5">
        <div class="container text-center animate-on-scroll">
            <h3 class="mb-4">Collaboration</h3>
            <div class="row justify-content-center">
                <div class="col-4 col-md-2 mb-3">
                    <img src="../Assets/fif.png" alt="img 5" class="img-fluid" style="max-height: 100px;">
                </div>
                <div class="col-4 col-md-2 mb-3">
                    <img src="../Assets/logo_telkom.png" alt="img 7" class="img-fluid" style="max-height: 100px;">
                </div>
                <div class="col-4 col-md-2 mb-3">
                    <img src="../Assets/SDG.png" alt="img 9" class="img-fluid" style="max-height: 100px;">
                </div>
                <div class="col-4 col-md-2 mb-3">
                    <img src="../Assets/RnEST-.png" alt="img 5" class="img-fluid" style="max-height: 100px;">
                </div>
            </div>
        </div>
    </section>
    
    <script src="/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>