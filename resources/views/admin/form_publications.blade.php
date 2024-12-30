@extends('admin.template')
@section('title', "Dashboard - $title Publications")
@section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="my-4">{{$title}} Publication</h1>
                    <form method="post" action="{{ $method === 'PUT' ? route('publications.update', $publication->id) : route('publications.store') }}">
                        @csrf
                        @if($method === 'PUT') 
                            @method('PUT') 
                        @endif
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><label for="title" class="form-label">Title</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                                        placeholder="Enter publication title" value="{{ old('title', $publication->title) }}">
                                        @if($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="author" class="form-label">Author</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author"
                                        placeholder="Enter publication author" value="{{ old('author', $publication->author) }}">
                                        @if($errors->has('author'))
                                            <span class="text-danger">{{ $errors->first('author') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="year" class="form-label">Year</label></td>
                                    <td>
                                        <input type="number" class="form-control @error('year') is-invalid @enderror" id="year" name="year"
                                        placeholder="Enter publication year" value="{{ old('year', $publication->year) }}">
                                        @if($errors->has('year'))
                                            <span class="text-danger">{{ $errors->first('year') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="publisher" class="form-label">Publisher</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" name="publisher"
                                        placeholder="Enter publisher" value="{{ old('publisher', $publication->publisher) }}">
                                        @if($errors->has('publisher'))
                                            <span class="text-danger">{{ $errors->first('publisher') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="link" class="form-label">Link</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link"
                                        placeholder="Enter publication link" value="{{ old('link', $publication->link) }}">
                                        @if($errors->has('link'))
                                            <span class="text-danger">{{ $errors->first('link') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-end">
                                        <button type="submit" class="btn btn-success" onclick="success('publication')">{{$title}} Data</button>
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
@endsection