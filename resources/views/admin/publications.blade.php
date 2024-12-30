@extends('admin.template')
@section('title', 'Admin Dashboard')
@section('content')
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
                                                <a href="{{ route('publications.edit', $pub->id) }}" class="btn btn-sm btn-warning mb-2">Edit</a> 
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
@endsection
