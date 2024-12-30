@extends('admin.template')
@section('title', "Dashboard - $title Members")
@section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="my-4">{{$title}} Member</h1>
                    <form method="post" action="{{ $method === 'PUT' ? route('members.update',$member->id):route('members.store') }}" enctype="multipart/form-data">
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
                                        placeholder="Enter member full name" value="{{ old('name', $member->name) }}">
                                        @if($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="idNumber" class="form-label">ID Number</label></td>
                                    <td>
                                        <input type="number" class="form-control @error('nim') is-invalid @enderror" id="idNumber" name="nim"
                                        placeholder="Enter member NIM" value="{{ old('nim', $member->nim) }}">
                                        @if($errors->has('nim'))
                                            <span class="text-danger">{{ $errors->first('nim') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="major" class="form-label">Major</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('major') is-invalid @enderror" id="major" name="major"
                                        placeholder="Enter member major" value="{{ old('major', $member->major) }}">
                                        @if($errors->has('major'))
                                            <span class="text-danger">{{ $errors->first('major') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="position" class="form-label">Position</label></td>
                                    <td>
                                        <select class="form-control @error('position') is-invalid @enderror" id="position" name="position">
                                            <option value="" disabled selected>Choose a position</option>
                                            @foreach($positions as $position)
                                                <option value="{{ $position }}" {{ old('position', $member->position) == $position ? 'selected' : '' }}>
                                                    {{ $position }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('position'))
                                            <span class="text-danger">{{ $errors->first('position') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="linked" class="form-label">LinkedIn</label></td>
                                    <td>
                                        <input type="text" class="form-control @error('linked') is-invalid @enderror" id="linked" name="linked"
                                        placeholder="https://www.linkedin.com/in/username" value="{{ old('linked', $member->linked) }}">
                                        @if($errors->has('linked'))
                                            <span class="text-danger">{{ $errors->first('linked') }}</span>
                                        @endif
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
                                        placeholder="Enter member email" value="{{ old('email', $member->email) }}">
                                        @if($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="image" class="form-label">Member Photo</label>
                                    <td>
                                        @if($member->image)
                                            <!-- Jika gambar tidak null -->
                                            <img src="{{ asset('storage/' . $member->image) }}" alt="Current Photo" class="img-thumbnail mb-3" style="width: 150px;">
                                        @endif
                                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                            <h6 class="mt-2 fst-italic fw-normal">*picture ratio must be 1:1</h6>
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-end">
                                        <button type="submit" class="btn btn-success" onclick="success('member')">{{$title}} Data</button>
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