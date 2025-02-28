@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data Pendaftaran</h4>
                        </div>
                        <div class="card-body">
                            <!-- Form untuk menambahkan data -->
                            <form action="{{ route('upload-pendaftaran.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" name="deskripsi" id="deskripsi"
                                        class="form-control @error('deskripsi') is-invalid @enderror"
                                        value="{{ old('deskripsi') }}" placeholder="Masukkan deskripsi">
                                    @error('deskripsi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="image">Gambar</label>
                                    <input type="file" name="image" id="image"
                                        class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group text-end">
                                    <a href="{{ route('upload-pendaftaran.index') }}" class="btn btn-secondary">Batal</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
