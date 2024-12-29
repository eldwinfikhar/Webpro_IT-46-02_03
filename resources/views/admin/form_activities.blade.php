<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - {{$title}} Activities</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/styles.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Lab Logo -->
        <img src="/assets/logo_heslab_v2.svg" alt="HES Lab Logo" class="ms-3">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ route('Activity') }}">HES Lab Admin Page</a>
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
                    <h1 class="my-4">{{$title}} Activity</h1>
                    <form method="post" action="{{ $method === 'PUT' ? route('activities.update', $activity->id) : route('activities.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if($method === 'PUT')
                            @method('PUT')
                        @endif
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><label for="name" class="form-label">Name</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                        placeholder="Enter activity name" value="{{ old('name', $activity->name) }}">
                                        @if($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="desc" class="form-label">Description</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('description') is-invalid @enderror" id="desc" name="description"
                                        placeholder="Enter activity description" value="{{ old('description', $activity->description) }}">
                                        @if($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="image" class="form-label">Photo</label>
                                    <td>
                                        @if($activity->image)
                                            <!-- Jika gambar tidak null -->
                                            <img src="{{ asset('storage/' . $activity->image) }}" alt="Current Photo" class="img-thumbnail mb-3" style="width: 150px;">
                                        @endif
                                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                            <h6 class="mt-2 fst-italic fw-normal">*picture ratio must be 4:3</h6>
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-end">
                                        <button type="submit" class="btn btn-success" onclick="success('description')">{{$title}} Data</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
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

