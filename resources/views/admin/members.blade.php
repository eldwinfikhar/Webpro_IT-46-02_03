@extends('admin.template')
@section('title', 'Admin Dashboard')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="my-4">Members Dashboard</h1>
                        <div class="row">
                            <!-- Tampilan bar chart -->
                            <div class="col-lg-7">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Members Year
                                    </div>
                                    <div class="card-body d-flex justify-content-center align-items-center" style="height: 300px">
                                        <canvas id="myBarChart" width="100%" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- Tampilan pie chart -->
                            <div class="col-lg-5">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Members Major
                                    </div>
                                    <div class="card-body d-flex justify-content-center align-items-center" style="height: 300px">
                                        <canvas id="myPieChart" width="100%" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center">
                                <div>
                                    <i class="fas fa-table me-1"></i>
                                    HES Laboratory Members
                                </div>
                                <a href="{{ route('members.create') }}"class="btn btn-success ms-auto link-light text-decoration-none">Add member +</a>
                            </div>
                            <div class="card-body">
                            @if(session('success')) 
                                <div class="alert alert-success">{{ session('success') }}</div> 
                            @endif 
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>ID Number</th>
                                            <th>Major</th>
                                            <th>Position</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($member as $mem)
                                        <tr> 
                                            <td>{{ $mem->name }}</td> 
                                            <td>{{ $mem->nim }}</td>
                                            <td>{{ $mem->major }}</td> 
                                            <td>{{ $mem->position }}</td> 
                                            <td> 
                                                <a href="{{ route('members.edit', $mem->id) }}" class="btn btn-sm btn-warning">Edit</a> 
                                                <form method="POST" action="{{ route('members.destroy',$mem->id) }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')"> 
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
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script src="{{ asset('charts/major-pie-chart.js') }}"></script>
                <script src="{{ asset('charts/year-bar-chart.js') }}"></script>
                <script>
                    // Pie chart jurusan
                    let categories = {{ Js::from($categories) }};
                    let values = {{ Js::from($values) }};
                    initPieChart(categories, values);

                    // Bar chart angkatan
                    let yearLabels = {{ Js::from($yearLabels) }};
                    let yearValues = {{ Js::from($yearValues) }};
                    initYearBarChart(yearLabels, yearValues);
                </script>
                <script src="/charts/major-pie-chart.js"></script>
                <script src="/charts/year-bar-chart.js"></script>
            </div>
@endsection