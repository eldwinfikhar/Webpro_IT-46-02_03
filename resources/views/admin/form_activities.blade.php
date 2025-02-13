@extends('admin.template')
@section('title', "Dashboard - $title Activities")
@section('content')
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
                                        placeholder="Enter activity name" value="{{ old('name', $activity->name) }}" maxlength="120">
                                        @if($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="desc" class="form-label">Description</label></td>
                                    <td>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="desc" name="description"
                                        placeholder="Enter activity description" rows="4" cols="50" maxlength="490">{{ old('description', $activity->description) }}</textarea>
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
@endsection
