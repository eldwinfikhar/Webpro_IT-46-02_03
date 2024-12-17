<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard</title>
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
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="my-4">Publications Dashboard</h1>
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center">
                                <div>
                                    <i class="fas fa-table me-1"></i>
                                    HES Laboratory Publications
                                </div>
                                <a href="{{ route('publications.create') }}"class="btn btn-success ms-auto link-light text-decoration-none">Add publication +</a>
                            </div>
                            <div class="card-body">
                            @if(session('success')) 
                                <div class="alert alert-success">{{ session('success') }}</div> 
                            @endif 
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Year</th>
                                            <th>Publisher</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($publication as $pub) 
                                        <tr> 
                                            <td>{{ $pub->title }}</td> 
                                            <td>{{ $pub->author }}</td>
                                            <td>{{ $pub->year }}</td> 
                                            <td>{{ $pub->publisher }}</td> 
                                            <td> 
                                                <a href="{{ route('publications.edit', $pub->id) }}" class="btn btn-sm btn-warning">Edit</a> 
                                                <form method="POST" action="{{ route('publications.destroy',$pub->id) }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')"> 
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger">Delete</button> 
                                                </form>  
                                            </td> 
                                        </tr>  
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
