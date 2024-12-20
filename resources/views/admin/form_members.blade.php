<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - {{$title}} Members</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/styles.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Lab Logo -->
        <img src="/assets/logo_heslab_v2.svg" alt="HES Lab Logo" class="ms-3">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ route('Member') }}">HES Lab Admin Page</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Admin Menu</div>
                        <a class="nav-link" href="{{ route('Member') }}">
                            <div class="sb-nav-link-icon"><img src="/assets/members.svg"></div>
                            Members
                        </a>
                        <a class="nav-link" href="{{ route('Publication') }}">
                            <div class="sb-nav-link-icon"><img src="/assets/publications.svg"></div>
                            Publications
                        </a>
                        <a class="nav-link" href="{{ route('Activity') }}">
                            <div class="sb-nav-link-icon"><img src="/assets/activities.svg"></i></div>
                            Activities
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="my-4">{{$title}} Member</h1>
                    <!-- TAMBAHIN DI BAWAH SINI -->
                    <form method="post" action="{{ $method === 'PUT' ? route('members.update', $member->id): route('members.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if($method === 'PUT') 
                            @method('PUT') 
                        @endif
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><label for="name" class="form-label">Full Name</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                        placeholder="Enter member full name" value="{{ old('name', $member->name) }}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="idNumber" class="form-label">ID Number</label></td>
                                    <td>
                                        <input type="number" class="form-control @error('name') is-invalid @enderror" id="idNumber" name="nim"
                                        placeholder="Enter member NIM or NIP" value="{{ old('nim', $member->nim) }}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="major" class="form-label">Major</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('major') is-invalid @enderror" id="major" name="major"
                                        placeholder="Enter member major" value="{{ old('major', $member->major) }}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="position" class="form-label">Position</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position"
                                        placeholder="Enter member position" value="{{ old('position', $member->position) }}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="linked" class="form-label">LinkedIn</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('linked') is-invalid @enderror" id="linked" name="linked"
                                        placeholder="https://www.linkedin.com/in/username" value="{{ old('linked', $member->linked) }}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="github" class="form-label">Github</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('github') is-invalid @enderror" id="github" name="github"
                                        placeholder="https://github.com/username" value="{{ old('github', $member->github) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="instagram" class="form-label">Instagram</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram"
                                        placeholder="https://www.instagram.com/username" value="{{ old('instagram', $member->instagram) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="email" class="form-label">Email</label></td>
                                    <td>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                        placeholder="Enter member email" value="{{ old('email', $member->email) }}" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="image" class="form-label">Member Photo</label>
                                    <td>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                                        placeholder="Enter member image" value="{{ old('image', $member->image) }}" required>
                                        <h6 class="mt-2 fst-italic fw-normal">*picture ratio must be 1:1</h6>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td><label for="photo" class="form-label">Upload Photo</label></td>
                                    <td><input type="file" class="form-control" id="photo" accept="image/*" placeholder="Choose a photo" required></td>
                                </tr> -->
                                <tr>
                                    <td colspan="2" class="text-end">
                                        <button type="submit" class="btn btn-success" onclick="success('member')">{{$title}} Data</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <!-- TAMBAHIN DI ATAS SINI -->
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; HES Laboratory 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="/datatables-simple-demo.js"></script>
</body>
</html>

