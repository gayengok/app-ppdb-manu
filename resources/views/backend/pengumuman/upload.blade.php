{{-- @extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Upload - Pengumuman Hasil Siswa Baru
                            </h4>
                            <a href="{{ route('pengumuman.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus-circle"></i> Tambah
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>File</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengumuman as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ Str::limit($item->deskripsi, 30) }}</td>
                                                <td>
                                                    @if ($item->file_path)
                                                        <a href="{{ asset('storage/' . $item->file_path) }}"
                                                            target="_blank">
                                                            <i class="fas fa-download"></i> Download
                                                        </a>
                                                    @else
                                                        No File
                                                    @endif
                                                </td>

                                                <td class="text-center">
                                                    <!-- Edit and Delete buttons -->
                                                    <div class="d-flex justify-content-center flex-wrap">
                                                        <a href="{{ route('pengumuman.edit', $item->id) }}"
                                                            class="btn btn-info btn-icon m-1" title="Edit Artikel">
                                                            <i class="fas fa-edit" style="font-size: 1.5rem;"></i>
                                                        </a>

                                                        <form action="{{ route('pengumuman.destroy', $item->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-icon m-1"
                                                                title="Hapus Artikel">
                                                                <i class="fas fa-trash-alt" style="font-size: 1.5rem;"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <script src="{{ asset('popup/js/popup.js') }}"></script>
                        @if (session('success'))
                            <meta name="success-message" content="{{ session('success') }}">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
