@extends('admin.template')
@section('title', 'Admin Dashboard')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="my-4">Activities Dashboard</h1>
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center">
                                <div>
                                    <i class="fas fa-table me-1"></i>
                                    HES Laboratory Activities
                                </div>
                                <a href="{{ route('activities.create') }}"class="btn btn-success ms-auto link-light text-decoration-none">Add activity +</a>
                            </div>
                            <div class="card-body">
                            @if(session('success')) 
                                <div class="alert alert-success">{{ session('success') }}</div> 
                            @endif 
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($activity as $act) 
                                        <tr> 
                                            <td>{{ $act->name }}</td> 
                                            <td>{{ $act->description }}</td>
                                            <td> 
                                                <a href="{{ route('activities.edit', $act->id) }}" class="btn btn-sm btn-warning mb-2">Edit</a> 
                                                <form method="POST" action="{{ route('activities.destroy',$act->id) }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')"> 
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
@endsection
