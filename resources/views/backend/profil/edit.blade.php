@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-edit"></i> Edit Sejarah
                            </h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('sejarah.update', $sejarah->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="20" required>{{ $sejarah->deskripsi }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="img">Gambar (Opsional)</label>

                                    <!-- Tampilkan gambar jika ada -->
                                    @if ($sejarah->img)
                                        <div class="mb-3">
                                            <!-- Pastikan 'storage/' adalah path yang benar menuju gambar -->
                                            <img src="{{ asset('storage/sejarah_images/' . $sejarah->img) }}"
                                                alt="Gambar Sejarah" class="img-thumbnail" style="max-height: 200px;">
                                        </div>
                                    @endif

                                    <input type="file" name="img" id="img" class="form-control"
                                        accept="image/*">
                                    <small>Biarkan kosong jika tidak ingin mengubah gambar</small>
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Update
                                    </button>
                                    <a href="{{ route('sejarah.index') }}" class="btn btn-secondary">
                                        <i class="fas fa-arrow-left"></i> Kembali
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
