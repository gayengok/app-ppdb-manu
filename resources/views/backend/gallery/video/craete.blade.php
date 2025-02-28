@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="fas fa-video"></i> Tambah Video Baru
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Judul Video</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Masukkan judul" required>
                                </div>
                                <div class="form-group">
                                    <label for="video_link">Link Video YouTube</label>
                                    <input type="url" name="video_link" id="video_link" class="form-control"
                                        placeholder="Masukkan link video YouTube" required>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                                <a href="{{ route('videos.index') }}" class="btn btn-secondary mt-3">
                                    <i class="fas fa-arrow-left"></i> Kembali
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
