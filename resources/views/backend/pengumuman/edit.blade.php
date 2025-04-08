{{-- @extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-edit"></i> Edit - Pengumuman
                            </h4>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="judul">Judul Pengumuman</label>
                                <input type="text" name="judul" class="form-control" id="judul"
                                    value="{{ old('judul', $pengumuman->judul) }}" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" required>{{ old('deskripsi', $pengumuman->deskripsi) }}</textarea>
                            </div>

                            <div class="form-group mt-3">
                                <label for="file">Upload File</label>
                                <input type="file" name="file" class="form-control" id="file">
                                <small class="text-muted">Kosongkan jika tidak ingin mengganti file.</small>
                                @if ($pengumuman->file_path)
                                    <div class="mt-2">
                                        <a href="{{ asset('storage/' . $pengumuman->file_path) }}" target="_blank">
                                            <i class="fas fa-download"></i> Lihat File
                                        </a>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group mt-4 text-end">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save"></i> Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
