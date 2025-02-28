@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-edit"></i> Edit Photo
                            </h4>
                        </div>

                        {{-- Pesan Error --}}
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Oops!</strong> Ada beberapa masalah pada input Anda:
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- Form Edit --}}
                        <div class="card-body">
                            <form action="{{ route('photo.update', $photo->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ old('title', $photo->title) }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="photo" class="form-label">Upload New Photo (Optional)</label>
                                    <input type="file" class="form-control" id="photo" name="photo"
                                        accept="image/*">
                                </div>

                                <div class="mb-3">
                                    <label for="currentPhoto" class="form-label">Current Photo</label>
                                    <br>
                                    <img src="{{ asset('storage/' . $photo->photo_path) }}" width="200"
                                        alt="{{ $photo->title }}">
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Update Photo
                                </button>

                                <a href="{{ route('photo.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Back
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
