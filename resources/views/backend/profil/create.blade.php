@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-history"></i> Upload Sejarah
                            </h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('sejarah.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="20" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="img">Gambar</label>
                                    <input type="file" name="img" id="img" class="form-control"
                                        accept="image/*" required>
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Simpan
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
