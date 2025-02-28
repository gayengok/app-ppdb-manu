@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-camera"></i> Data - Photo
                            </h4>

                            <a href="{{ route('photo.create') }}" class="btn btn-primary mb-3">
                                <i class="fas fa-upload"></i>New Photo
                            </a>
                        </div>

                        {{-- Pesan Error --}}
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Oops!</strong> There were some problems with your input:
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- Tombol Upload --}}
                        <div class="card-body">


                            {{-- Tabel Daftar Foto --}}
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Photo</th>
                                            <th style="text-align: center;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($photos as $photo)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $photo->title }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $photo->photo_path) }}" width="100"
                                                        alt="{{ $photo->title }}">
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                                                        <!-- Tombol Edit -->
                                                        <a href="{{ route('photo.edit', $photo->id) }}"
                                                            class="btn btn-warning d-flex align-items-center">
                                                            <i class="fas fa-edit"></i>
                                                        </a>

                                                        <!-- Form Hapus -->
                                                        <form action="{{ route('photo.destroy', $photo->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger d-flex align-items-center"
                                                                onclick="return confirm('Are you sure you want to delete this photo?')">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">No photos available.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
