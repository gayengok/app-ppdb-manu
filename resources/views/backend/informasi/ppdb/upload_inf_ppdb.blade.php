@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container-fluid px-4 py-4">
        <div class="row">
            <div class="col-12">
                {{-- Premium Card Container --}}
                <div class="card premium-schedule-card border-0 shadow-lg">
                    <div class="card-header premium-header bg-gradient-primary py-2 px-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="icon-wrapper me-4 bg-white bg-opacity-20 p-3 rounded-circle">
                                    <i class="fas fa-calendar-alt fs-3"></i>
                                </div>
                                <h2 class="mb-0 fw-bold text-md fs-4 fs-md-3 fs-lg-2">Jadwal Pelaksanaan PPDB</h2>
                            </div>
                            <button class="btn btn-light fw-bold rounded-pill px-4 py-2 text-nowrap" data-bs-toggle="modal"
                                data-bs-target="#addScheduleModal">
                                <i class="fas fa-plus me-2"></i>Tambah
                            </button>
                        </div>
                    </div>

                    {{-- Card Body with Elegant Table --}}
                    <div class="card-body p-5">
                        {{-- Alert Sections --}}
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-4 rounded-4" role="alert">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle me-3 fs-4"></i>
                                    <span>{{ session('success') }}</span>
                                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show mb-4 rounded-4" role="alert">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-exclamation-triangle me-3 fs-4"></i>
                                    <span>{{ session('error') }}</span>
                                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
                                </div>
                            </div>
                        @endif

                        {{-- Responsive Table with Premium Styling --}}
                        <div class="table-responsive">
                            <table class="table table-hover premium-table">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="text-center fw-bold">No</th>
                                        <th class="fw-bold">Tahap</th>
                                        <th class="fw-bold">Tanggal</th>
                                        <th class="fw-bold">Deskripsi</th>
                                        <th class="text-center fw-bold">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($informasis as $informasi)
                                        <tr class="schedule-item">
                                            <td class="text-center fw-bold">{{ $loop->iteration }}</td>
                                            <td>
                                                <span class="bg-primary-soft rounded-pill px-3 py-2">
                                                    {{ $informasi->tahap }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-calendar-day me-2 text-primary"></i>
                                                    {{ $informasi->tanggal_formatted }}
                                                </div>
                                            </td>

                                            <td class="text-muted">{{ $informasi->deskripsi }}</td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group">
                                                    <button class="btn btn-soft-primary rounded-pill me-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal-{{ $informasi->id }}">
                                                        <i class="fas fa-edit me-1"></i> Edit
                                                    </button>
                                                    <button class="btn btn-soft-danger rounded-pill" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal-{{ $informasi->id }}">
                                                        <i class="fas fa-trash me-1"></i> Hapus
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>



                                        {{-- Edit Modal --}}
                                        <div class="modal fade" id="editModal-{{ $informasi->id }}" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content rounded-4 border-0 shadow-lg">
                                                    <div class="modal-header bg-gradient-primary border-0 py-4 px-5">
                                                        <h4 class="modal-title fw-bold">
                                                            <i class="fas fa-calendar-edit me-3"></i> Edit Jadwal
                                                        </h4>

                                                        <button type="button" class="btn-close btn-close-white"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body p-5">
                                                        <form action="{{ route('admin.informasi.update', $informasi->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row g-4">
                                                                <div class="col-md-6">
                                                                    <label class="form-label fw-bold">Tahap</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-elegant"
                                                                        name="tahap" value="{{ $informasi->tahap }}"
                                                                        required>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label class="form-label fw-bold">Tanggal</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-elegant"
                                                                        name="tanggal"
                                                                        value="{{ $informasi->tanggal_formatted }}"
                                                                        required>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label fw-bold">Deskripsi</label>
                                                                    <textarea class="form-control form-control-elegant" name="deskripsi" rows="4" required>{{ $informasi->deskripsi }}</textarea>
                                                                </div>
                                                                <div class="col-12 text-end">
                                                                    <button type="submit"
                                                                        class="btn btn-gradient-primary rounded-pill px-4 py-2">
                                                                        <i class="fas fa-save me-2"></i>Simpan
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        {{-- Delete Modal --}}
                                        <div class="modal fade" id="deleteModal-{{ $informasi->id }}" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content rounded-4 border-0 shadow-lg">
                                                    <div
                                                        class="modal-header bg-gradient-danger text-white border-0 py-4 px-5">
                                                        <h4 class="modal-title fw-bold">
                                                            <i class="fas fa-exclamation-triangle me-3"></i>Konfirmasi
                                                            Hapus
                                                        </h4>
                                                        <button type="button" class="btn-close btn-close-white"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body text-center p-5">
                                                        <p class="fs-5 mb-4">
                                                            Apakah Anda yakin ingin menghapus jadwal
                                                            <strong>{{ $informasi->tahap }}</strong>?
                                                        </p>
                                                        <form
                                                            action="{{ route('admin.informasi.destroy', $informasi->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger rounded-pill px-4 me-2">
                                                                <i class="fas fa-check me-2"></i>Hapus
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-secondary rounded-pill px-4"
                                                                data-bs-dismiss="modal">
                                                                <i class="fas fa-times me-2"></i>Batal
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center py-5">
                                                <div class="d-flex flex-column align-items-center">
                                                    <i class="fas fa-calendar-times fs-1 text-muted mb-3"></i>
                                                    <h4 class="text-muted">Tidak Ada Jadwal Tersedia</h4>
                                                    <p class="text-muted">Silakan tambahkan jadwal baru</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Add Schedule Modal --}}
        <div class="modal fade" id="addScheduleModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-4 border-0 shadow-lg">
                    <div class="modal-header bg-gradient-primary border-0 py-4 px-5">
                        <h4 class="modal-title fw-bold">
                            <i class="fas fa-plus-circle me-3"></i>Tambah Jadwal Baru
                        </h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-5">
                        <form action="{{ route('admin.informasi.store') }}" method="POST">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Tahap</label>
                                    <input type="text" class="form-control" name="tahap" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Tanggal</label>
                                    <input type="text" class="form-control" name="tanggal"
                                        placeholder="25 Desember 2025 atau 25 - 26 Desember 2025" required>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" rows="4" required></textarea>
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-gradient-primary rounded-pill px-4 py-2">
                                        <i class="fas fa-save me-2"></i>Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Premium Design Styles */
        :root {
            --primary-color: #3498db;
            --secondary-color: #2ecc71;
            --danger-color: #e74c3c;
            --bg-light: #f8f9fa;
        }

        .premium-schedule-card {
            border-radius: 15px;
            overflow: hidden;
        }

        .premium-header {
            background: linear-gradient(45deg, #3498db, #2980b9) !important;
            position: relative;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .premium-table {
            border-radius: 10px;
            overflow: hidden;
        }

        .premium-table thead {
            background-color: var(--bg-light);
        }

        .premium-table th {
            color: #2c3e50;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-soft-primary {
            background-color: rgba(52, 152, 219, 0.1);
            color: #3498db;
            border: 1px solid transparent;
            transition: all 0.3s ease;
        }

        .btn-soft-primary:hover {
            background-color: rgba(52, 152, 219, 0.2);
            color: #2980b9;
        }

        .btn-soft-danger {
            background-color: rgba(231, 76, 60, 0.1);
            color: #e74c3c;
            border: 1px solid transparent;
            transition: all 0.3s ease;
        }

        .btn-soft-danger:hover {
            background-color: rgba(231, 76, 60, 0.2);
            color: #c0392b;
        }

        .form-control-elegant {
            border: 1px solid #ced4da;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
        }

        .form-control-elegant:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }

        .bg-gradient-primary {
            background: linear-gradient(45deg, #3498db, #2980b9) !important;
        }

        .bg-gradient-danger {
            background: linear-gradient(45deg, #e74c3c, #c0392b) !important;
        }


        .mobile-title {
            font-size: clamp(1rem, 4vw, 1.5rem);
            line-height: 1.2;
        }

        @media (max-width: 768px) {
            .card-header {
                padding: 0.75rem 1rem !important;
            }

            .icon-wrapper {
                display: none;
                /* Optional: hide icon on small screens */
            }

            .premium-header {
                text-align: center;
            }

            .premium-header>div {
                flex-direction: column !important;
                align-items: center !important;
            }

            .btn-text {
                display: inline-block;
            }
        }

        /* Ensure button is always visible and appropriately sized */
        .btn-outline-light {
            white-space: nowrap;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        /* Responsive adjustments for small screens */
        @media (max-width: 576px) {
            .mobile-title {
                text-align: center;
                width: 100%;
            }

            .premium-header>div {
                gap: 0.75rem;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                modal.addEventListener('show.bs.modal', function() {
                    this.classList.add('show-modal');
                });
                modal.addEventListener('hide.bs.modal', function() {
                    this.classList.remove('show-modal');
                });
            });
        });
    </script>
@endpush
