<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Lab Logo -->
        <img src="/assets/logo_heslab_v2.svg" alt="HES Lab Logo" class="ms-3">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="">HES Lab Admin Page</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <div class="ms-auto me-3">
            @if(session('is_admin_logged_in'))
                <a href="/logout" class="btn btn-warning">Logout</a>
            @endif
        </div>
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
                            <div class="sb-nav-link-icon"><img src="/assets/activities.svg"></div>
                            Activities
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="/datatables-simple-demo.js"></script> 
</body>
</html>