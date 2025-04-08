@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container-fluid px-4 py-5">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
                    <div class="card-header bg-gradient-primary border-0 p-0">
                        <div class="d-flex align-items-center p-4">
                            <div class="icon-circle bg-white bg-opacity-25 me-3 d-flex align-items-center justify-content-center"
                                style="width: 46px; height: 46px; border-radius: 50%;">
                                <i class="fas fa-user-graduate text-white fs-5"></i>
                            </div>
                            <div>
                                <h4 class="text-white fw-bold mb-0"
                                    style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;">
                                    Data Akun Siswa</h4>
                                <p class="text-white text-opacity-75 mb-0"
                                    style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;">
                                    Manajemen data akun siswa terdaftar</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0"
                                style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;">
                                <thead>
                                    <tr class="bg-light">
                                        <th class="py-3 px-4 text-uppercase text-muted small fw-bold border-0">No</th>
                                        <th class="py-3 px-4 text-uppercase text-muted small fw-bold border-0">Nama
                                        </th>
                                        <th class="py-3 px-4 text-uppercase text-muted small fw-bold border-0">NISN</th>
                                        <th class="py-3 px-4 text-uppercase text-muted small fw-bold border-0">Email</th>
                                        <th class="py-3 px-4 text-uppercase text-muted small fw-bold text-center border-0">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="border-top-0">
                                    @foreach ($calon_siswas as $key => $siswa)
                                        <tr class="border-bottom">
                                            <td class="py-3 px-4 fw-medium text-muted">{{ $loop->iteration }}</td>
                                            <td class="py-3 px-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0 fw-semibold">{{ $siswa->name }}</h6>
                                                        <i class="fas fa-check-circle text-success ms-2"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4">{{ $siswa->nisn }}</td>
                                            <td class="py-3 px-4">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-envelope text-muted me-2"></i>
                                                    {{ $siswa->email }}
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 text-center">
                                                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus akun ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex align-items-center justify-content-between p-4 border-top"
                            style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;">
                            <div class="text-muted small">
                                Menampilkan <span class="fw-semibold">{{ $calon_siswas->firstItem() }}</span> hingga
                                <span class="fw-semibold">{{ $calon_siswas->lastItem() }}</span> dari
                                <span class="fw-semibold">{{ $calon_siswas->total() }}</span> siswa
                            </div>
                            <div>
                                {{ $calon_siswas->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
    }

    .icon-circle {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .bg-opacity-10 {
        opacity: 0.1;
    }

    .bg-opacity-15 {
        opacity: 0.15;
    }

    .bg-opacity-25 {
        opacity: 0.25;
    }

    .text-opacity-75 {
        opacity: 0.75;
    }

    .avatar {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.875rem;
    }

    .border-opacity-10 {
        border-color: rgba(255, 255, 255, 0.1) !important;
    }

    .bg-transparent.form-control::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .bg-transparent.form-control:focus {
        box-shadow: none;
        color: #fff;
    }

    .form-select.bg-opacity-15 option {
        background-color: #4e73df;
        color: #fff;
    }

    .table {
        margin-bottom: 0;
    }

    .table thead th {
        font-size: 0.75rem;
        letter-spacing: 0.5px;
    }

    .table tbody tr:hover {
        background-color: rgba(0, 0, 0, 0.01);
    }

    .dropdown-menu {
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        overflow: hidden;
    }

    .dropdown-item {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        font-size: 0.875rem;
    }

    .dropdown-item:hover {
        background-color: rgba(0, 0, 0, 0.04);
    }

    .dropdown-item:active {
        background-color: #4e73df;
    }

    .badge.bg-success.bg-opacity-10 {
        background-color: rgba(40, 167, 69, 0.1) !important;
        font-weight: 500;
    }

    .card {
        border-radius: 0.75rem;
    }

    .card-header {
        border-bottom: 0;
    }

    .pagination {
        margin-bottom: 0;
    }

    .page-link {
        border-radius: 0.25rem;
        margin: 0 0.125rem;
        color: #4e73df;
    }

    .page-item.active .page-link {
        background-color: #4e73df;
        border-color: #4e73df;
    }

    @media (max-width: 768px) {
        .card-header .d-flex {
            flex-direction: column;
            align-items: flex-start !important;
        }

        .card-header .ms-auto {
            margin-top: 1rem;
            margin-left: 0 !important;
        }

        .pagination-info {
            margin-bottom: 1rem;
        }

        .d-flex.align-items-center.justify-content-between {
            flex-direction: column;
            align-items: flex-start !important;
        }
    }
</style>
