@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Upload - Pendaftaran
                            </h4>
                            <a href="{{ route('upload-pendaftaran.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus-circle"></i> Tambah
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($uploadpendaftarans as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="Gambar"
                                                        width="100">
                                                </td>

                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                                                        <!-- Tombol Edit -->
                                                        <a href="{{ route('upload-pendaftaran.edit', $item->id) }}"
                                                            class="btn btn-warning d-flex align-items-center">
                                                            <i class="fas fa-edit"></i>
                                                        </a>

                                                        <!-- Form Hapus -->
                                                        <form action="{{ route('upload-pendaftaran.destroy', $item->id) }}"
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
                                                <td colspan="4" class="text-center">Tidak ada data</td>
                                            </tr>
                                        @endforelse
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
@endsection
