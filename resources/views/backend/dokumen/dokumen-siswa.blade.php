@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner py-4">
            <!-- Header Card -->
            <div class="card shadow-lg border-0 rounded-lg mb-4">
                <div class="card-body p-0">
                    <div class="bg-gradient-primary text-white p-4 rounded-top">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="fw-bold mb-0 text-dark">
                                <i class="fas fa-file-alt me-2"></i> Dokumen Calon Siswa
                            </h3>
                            <span class="badge bg-white text-primary fw-bold px-3 py-2 rounded-pill">
                                Total: {{ $dokumens->total() }}
                            </span>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show m-3 border-start border-success border-4"
                            role="alert">
                            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="p-4">
                        <form method="GET" action="{{ route('admin.dokumen.index') }}">
                            <div class="input-group mb-0">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="fas fa-search text-primary"></i>
                                </span>
                                <input type="text" name="search" class="form-control border-start-0 ps-0"
                                    placeholder="Cari berdasarkan nama siswa..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary px-4">
                                    Cari
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Table Card -->
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="py-3 ps-4">No</th>
                                    <th class="py-3">Nama Siswa</th>
                                    <th class="py-3 text-center">Dokumen</th>
                                    <th class="py-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokumens as $dokumen)
                                    <tr class="border-top">
                                        <td class="ps-4">
                                            {{ ($dokumens->currentPage() - 1) * $dokumens->perPage() + $loop->iteration }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="avatar avatar-sm bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center">
                                                    <span
                                                        class="text-white fw-bold">{{ substr($dokumen->nama, 0, 1) }}</span>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 fw-bold">{{ $dokumen->nama }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-2 flex-wrap">
                                                <a href="{{ asset('storage/' . $dokumen->kk) }}" download
                                                    class="btn btn-outline-primary btn-sm position-relative">
                                                    <i class="fas fa-id-card me-1"></i> KK
                                                    <span
                                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                                        <i class="fas fa-check-circle"></i>
                                                    </span>
                                                </a>

                                                <a href="{{ asset('storage/' . $dokumen->akta_kelahiran) }}" download
                                                    class="btn btn-outline-primary btn-sm position-relative">
                                                    <i class="fas fa-file-alt me-1"></i> Akta
                                                    <span
                                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                                        <i class="fas fa-check-circle"></i>
                                                    </span>
                                                </a>

                                                @if ($dokumen->kip_pkh)
                                                    <a href="{{ asset('storage/' . $dokumen->kip_pkh) }}" download
                                                        class="btn btn-outline-primary btn-sm position-relative">
                                                        <i class="fas fa-credit-card me-1"></i> KIP/PKH
                                                        <span
                                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                                            <i class="fas fa-check-circle"></i>
                                                        </span>
                                                    </a>
                                                @else
                                                    <span class="btn btn-outline-secondary btn-sm disabled">
                                                        <i class="fas fa-credit-card me-1"></i> KIP/PKH
                                                    </span>
                                                @endif

                                                <a href="{{ asset('storage/' . $dokumen->ktp_ortu) }}" download
                                                    class="btn btn-outline-primary btn-sm position-relative">
                                                    <i class="fas fa-address-card me-1"></i> KTP
                                                    <span
                                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                                        <i class="fas fa-check-circle"></i>
                                                    </span>
                                                </a>

                                                <a href="{{ asset('storage/' . $dokumen->ijazah_skl) }}" download
                                                    class="btn btn-outline-primary btn-sm position-relative">
                                                    <i class="fas fa-graduation-cap me-1"></i> Ijazah
                                                    <span
                                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                                        <i class="fas fa-check-circle"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end shadow">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-eye text-primary me-2"></i> Lihat Detail
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('admin.dokumen.delete', $dokumen->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item text-danger"
                                                                onclick="return confirm('Yakin ingin menghapus dokumen: {{ $dokumen->nama }}?')">
                                                                <i class="fas fa-trash-alt me-2"></i> Hapus
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Empty State -->
                    @if ($dokumens->count() == 0)
                        <div class="text-center py-5">
                            <img src="{{ asset('assets/images/empty-state.svg') }}" alt="No Data" class="img-fluid mb-3"
                                style="max-width: 200px;">
                            <h5 class="text-muted">Tidak ada data dokumen ditemukan</h5>
                            @if (request('search'))
                                <p>Tidak ada hasil untuk pencarian "{{ request('search') }}"</p>
                                <a href="{{ route('admin.dokumen.index') }}" class="btn btn-outline-primary mt-2">
                                    <i class="fas fa-arrow-left me-1"></i> Kembali
                                </a>
                            @endif
                        </div>
                    @endif

                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center border-top p-4">
                        <div class="text-muted">
                            @if ($dokumens->total() > 0)
                                Menampilkan {{ $dokumens->firstItem() }} hingga {{ $dokumens->lastItem() }} dari
                                {{ $dokumens->total() }} data
                            @else
                                Tidak ada data yang tersedia
                            @endif
                        </div>
                        <div>
                            {{ $dokumens->links('pagination::bootstrap-5') }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #4e73df, #224abe);
        }

        .table th {
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .badge i {
            font-size: 0.7rem;
        }

        .dropdown-item {
            padding: 0.5rem 1rem;
        }

        .pagination {
            margin-bottom: 0;
        }

        .form-control:focus,
        .btn:focus {
            box-shadow: none;
            border-color: #4e73df;
        }
    </style>
@endpush
