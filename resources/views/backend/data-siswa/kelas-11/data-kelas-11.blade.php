@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container-fluid px-4 py-3">
        <div class="row g-3">
            <div class="col-12">
                <div class="card shadow-sm border-0 rounded-lg">
                    <!-- Header with gradient background -->
                    <div
                        class="card-header bg-gradient-primary text-white py-3 d-flex justify-content-between align-items-center rounded-top">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-graduate fa-2x me-2"></i>
                            <h4 class="card-title fw-bold mb-0">Data Siswa Kelas 11</h4>
                        </div>
                        <a href="{{ route('kelas-11.create') }}" class="btn btn-light d-flex align-items-center">
                            <i class="fas fa-plus-circle me-2"></i> Tambah Siswa
                        </a>
                    </div>

                    <!-- Alert Messages -->
                    <div class="p-3">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show border-start border-danger border-4"
                                role="alert">
                                <div class="d-flex">
                                    <i class="fas fa-exclamation-triangle me-2 align-self-center fa-lg"></i>
                                    <div>
                                        <strong>Oops!</strong> Ada beberapa masalah dengan inputan Anda:
                                        <ul class="mb-0 mt-2">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>

                    <!-- Stats cards -->
                    <div class="px-4 py-2">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="card bg-info bg-opacity-10 border-0">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="rounded-circle bg-info p-3 me-3">
                                            <i class="fas fa-users text-white fa-2x"></i>
                                        </div>
                                        <div>
                                            <h6 class="text-muted mb-0">Total Siswa</h6>
                                            <h3 class="mb-0">{{ $kelasSebelas->count() }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-success bg-opacity-10 border-0">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="rounded-circle bg-success p-3 me-3">
                                            <i class="fas fa-user-check text-white fa-2x"></i>
                                        </div>
                                        <div>
                                            <h6 class="text-muted mb-0">Siswa Aktif</h6>
                                            <h3 class="mb-0">{{ $kelasSebelas->where('status', 'Aktif')->count() }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-danger bg-opacity-10 border-0">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="rounded-circle bg-danger p-3 me-3">
                                            <i class="fas fa-user-times text-white fa-2x"></i>
                                        </div>
                                        <div>
                                            <h6 class="text-muted mb-0">Siswa Non-Aktif</h6>
                                            <h3 class="mb-0">{{ $kelasSebelas->where('status', '!=', 'Aktif')->count() }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Search and Filter Controls -->
                    <div class="card-body pt-0">
                        <div class="row mb-3">
                            <div class="col-md-6 mb-2 mb-md-0">
                                <div class="input-group">
                                    <span class="input-group-text bg-light">
                                        <i class="fas fa-search"></i>
                                    </span>
                                    <input type="text" id="searchInput" class="form-control" placeholder="Cari siswa...">
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-md-end">
                                <select class="form-select w-auto" id="statusFilter">
                                    <option value="all">Semua Status</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>

                        <!-- Student Data Table -->
                        <div class="table-responsive">
                            <table class="table table-hover align-middle border-top" id="studentTable">
                                <thead class="table-light">
                                    <tr>
                                        <th class="text-center" width="60">No</th>
                                        <th>NISN</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th class="text-center" width="120">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($kelasSebelas as $kelasSebelasData)
                                        <tr class="student-row">
                                            <td class="text-center fw-bold">{{ $loop->iteration }}</td>
                                            <td>{{ $kelasSebelasData->nisn }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-circle bg-primary text-white me-2">
                                                        {{ substr($kelasSebelasData->full_name, 0, 1) }}
                                                    </div>
                                                    <div>{{ $kelasSebelasData->full_name }}</div>
                                                </div>
                                            </td>
                                            <td>
                                                @if ($kelasSebelasData->gender === 'laki-laki')
                                                    <i class="fas fa-mars text-primary me-1"></i>
                                                @else
                                                    <i class="fas fa-venus text-danger me-1"></i>
                                                @endif
                                                {{ ucfirst($kelasSebelasData->gender) }}
                                            </td>
                                            <td>
                                                <div class="text-truncate" style="max-width: 200px;"
                                                    title="{{ $kelasSebelasData->address }}">
                                                    <i class="fas fa-map-marker-alt text-muted me-1"></i>
                                                    {{ $kelasSebelasData->address }}
                                                </div>
                                            </td>
                                            <td>
                                                @if ($kelasSebelasData->status === 'Aktif')
                                                    <span class="badge bg-success rounded-pill px-3 py-2">
                                                        <i class="fas fa-check-circle me-1"></i> Aktif
                                                    </span>
                                                @else
                                                    <span class="badge bg-danger rounded-pill px-3 py-2">
                                                        <i class="fas fa-times-circle me-1"></i> Tidak Aktif
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a href="{{ route('kelas-11.edit', $kelasSebelasData->id) }}"
                                                        class="btn btn-sm btn-warning rounded-circle"
                                                        data-bs-toggle="tooltip" title="Edit Siswa">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('kelas-12.destroy', $kelasSebelasData->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="btn btn-sm btn-danger rounded-circle delete-btn"
                                                            data-bs-toggle="tooltip" title="Hapus Siswa">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center py-4">
                                                <div class="d-flex flex-column align-items-center">
                                                    <i class="fas fa-user-slash fa-3x text-muted mb-3"></i>
                                                    <h5 class="text-muted">Tidak ada data siswa tersedia</h5>
                                                    <a href="{{ route('kelas-11.create') }}"
                                                        class="btn btn-sm btn-primary mt-2">
                                                        <i class="fas fa-plus-circle me-1"></i> Tambah Siswa Baru
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Pagination if needed -->
                    <div class="card-footer bg-light py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <small class="text-muted">Menampilkan {{ $kelasSebelas->count() }} dari
                                    {{ $kelasSebelas->count() }} siswa</small>
                            </div>
                            <div>
                                <!-- Pagination controls would go here if using pagination -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        Konfirmasi Hapus
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body py-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-trash-alt fa-4x text-danger mb-3"></i>
                        <h4>Anda yakin ingin menghapus?</h4>
                        <p class="text-muted">Data yang dihapus tidak dapat dikembalikan.</p>
                    </div>
                </div>
                <div class="modal-footer justify-content-center border-0">
                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Batal
                    </button>
                    <button type="button" id="confirmDelete" class="btn btn-danger px-4">
                        <i class="fas fa-trash-alt me-2"></i>Hapus
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
        }

        .avatar-circle {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .student-row:hover {
            background-color: rgba(0, 0, 0, 0.02);
        }

        .card {
            transition: all 0.3s ease;
        }

        .delete-btn:hover {
            transform: scale(1.1);
        }
    </style>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });

            // Search functionality
            const searchInput = document.getElementById('searchInput');
            const statusFilter = document.getElementById('statusFilter');
            const rows = document.querySelectorAll('.student-row');

            function filterTable() {
                const searchTerm = searchInput.value.toLowerCase();
                const statusValue = statusFilter.value;

                rows.forEach(row => {
                    const name = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                    const nisn = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                    const status = row.querySelector('td:nth-child(6)').textContent.trim();

                    const matchesSearch = name.includes(searchTerm) || nisn.includes(searchTerm);
                    const matchesStatus = statusValue === 'all' || status.includes(statusValue);

                    row.style.display = (matchesSearch && matchesStatus) ? '' : 'none';
                });
            }

            searchInput.addEventListener('input', filterTable);
            statusFilter.addEventListener('change', filterTable);

            // Delete confirmation modal handling
            const deleteButtons = document.querySelectorAll('.delete-btn');
            const confirmDeleteButton = document.getElementById('confirmDelete');
            let formToSubmit = null;

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    formToSubmit = this.closest('form');
                    const modal = new bootstrap.Modal(document.getElementById(
                        'deleteConfirmModal'));
                    modal.show();
                });
            });

            confirmDeleteButton.addEventListener('click', function() {
                if (formToSubmit) {
                    formToSubmit.submit();
                }
            });

            // Success message popup
            const successMessage = document.querySelector('meta[name="success-message"]');
            if (successMessage) {
                const toast = document.createElement('div');
                toast.className = 'position-fixed bottom-0 end-0 p-3';
                toast.style.zIndex = '5';
                toast.innerHTML = `
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-success text-white">
                <i class="fas fa-check-circle me-2"></i>
                <strong class="me-auto">Sukses</strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                ${successMessage.content}
            </div>
        </div>
    `;
                document.body.appendChild(toast);

                setTimeout(() => {
                    const toastElement = toast.querySelector('.toast');
                    const bsToast = new bootstrap.Toast(toastElement);
                    bsToast.hide();
                }, 5000);
            }
        });
    </script>

    <!-- Load additional JS files -->
    <script src="{{ asset('siswa/js/siswa.js') }}"></script>
    <script src="{{ asset('popup/js/popup.js') }}"></script>
@endsection
