@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-user-graduate"></i> Data - Siswa Kelas 11
                            </h4>

                            <a href="{{ route('kelas-11.create') }}" class="btn btn-primary mb-3">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>

                        {{-- Pesan Error --}}
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Oops!</strong> Ada beberapa masalah dengan inputan Anda:
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- Tabel Daftar Siswa --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th style="text-align: center;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($kelasSebelas as $kelasSebelasData)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $kelasSebelasData->nisn }}</td>
                                                <td>{{ $kelasSebelasData->full_name }}</td>
                                                <td>{{ ucfirst($kelasSebelasData->gender) }}</td>
                                                <td>{{ $kelasSebelasData->address }}</td>
                                                <td>
                                                    @if ($kelasSebelasData->status === 'Aktif')
                                                        <span class="badge bg-success"
                                                            style="font-size: 1rem; padding: 0.5rem 1rem;">Aktif</span>
                                                    @else
                                                        <span class="badge bg-danger"
                                                            style="font-size: 1rem; padding: 0.5rem 1rem;">Tidak
                                                            Aktif</span>
                                                    @endif
                                                </td>

                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                                                        <!-- Tombol Edit -->
                                                        <a href="{{ route('kelas-11.edit', $kelasSebelasData->id) }}"
                                                            class="btn btn-warning d-flex align-items-center">
                                                            <i class="fas fa-edit"></i>
                                                        </a>

                                                        <!-- Form Hapus -->
                                                        <form
                                                            action="{{ route('kelas-11.destroy', $kelasSebelasData->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger d-flex align-items-center"
                                                                onclick="return confirm('Anda yakin ingin menghapus data siswa ini?')">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Tidak ada data siswa tersedia.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <script src="{{ asset('siswa/js/siswa.js') }}"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
