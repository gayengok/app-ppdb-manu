@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner py-4">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-gradient-primary text-white">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-user-edit me-2"></i>
                                <h4 class="card-title mb-0 fw-bold">Edit Data Guru</h4>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            {{-- Error messages --}}
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show border-start border-danger border-4"
                                    role="alert">
                                    <div class="d-flex">
                                        <i class="fas fa-exclamation-circle me-2 mt-1"></i>
                                        <div>
                                            <strong>Oops!</strong> There were some problems with your input.
                                            <ul class="mt-2 mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <form action="{{ route('guru.update', $guru->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row g-4">
                                    <!-- Kolom Kiri -->
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="nama" class="form-label fw-bold">
                                                <i class="fas fa-user text-primary me-1"></i> Nama
                                            </label>
                                            <input type="text" name="nama"
                                                class="form-control form-control-lg border-0 bg-light" id="nama"
                                                value="{{ $guru->nama }}" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="alamat" class="form-label fw-bold">
                                                <i class="fas fa-map-marker-alt text-primary me-1"></i> Alamat
                                            </label>
                                            <input type="text" name="alamat"
                                                class="form-control form-control-lg border-0 bg-light" id="alamat"
                                                value="{{ $guru->alamat }}" required>
                                        </div>
                                    </div>

                                    <!-- Kolom Kanan -->
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="email" class="form-label fw-bold">
                                                <i class="fas fa-envelope text-primary me-1"></i> Email
                                            </label>
                                            <input type="email" name="email"
                                                class="form-control form-control-lg border-0 bg-light" id="email"
                                                value="{{ $guru->email }}" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="jabatan" class="form-label fw-bold">
                                                <i class="fas fa-briefcase text-primary me-1"></i> Jabatan
                                            </label>
                                            <input type="text" name="jabatan"
                                                class="form-control form-control-lg border-0 bg-light" id="jabatan"
                                                value="{{ $guru->jabatan }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-4 d-flex justify-content-between">
                                    <a href="{{ route('guru.index') }}" class="btn btn-outline-secondary btn-lg px-4">
                                        <i class="fas fa-arrow-left me-1"></i> Kembali
                                    </a>
                                    <button type="submit" class="btn btn-primary btn-lg px-4">
                                        <i class="fas fa-save me-1"></i> Update Data
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
