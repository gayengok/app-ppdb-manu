@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Data - Guru
                            </h4>
                            <a href="{{ route('guru.create') }}" class="btn btn-primary">
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
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($gurus as $index => $guru)
                                            <tr>
                                                <td>{{ $gurus->firstItem() + $index }}</td>
                                                <td>{{ $guru->nama }}</td>
                                                <td>{{ $guru->alamat }}</td>
                                                <td>{{ $guru->email }}</td>
                                                <td>{{ $guru->jabatan }}</td>



                                                <td class="text-center">
                                                    <!-- Edit and Delete buttons -->
                                                    <div class="d-flex justify-content-center flex-wrap">
                                                        <a href="{{ route('guru.edit', $guru->id) }}"
                                                            class="btn btn-info btn-icon m-1" title="Edit Guru">
                                                            <i class="fas fa-edit" style="font-size: 1.5rem;"></i>
                                                        </a>

                                                        <form action="{{ route('guru.destroy', $guru->id) }}" method="POST"
                                                            style="display:inline;">
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
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Data Guru Tidak Ditemukan</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <!-- Showing 1 to 10 of X entries -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    Showing {{ $gurus->firstItem() }} to {{ $gurus->lastItem() }} of
                                    {{ $gurus->total() }}
                                    entries
                                </div>
                                <div>
                                    <nav>
                                        {{ $gurus->links('pagination::bootstrap-4') }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('popup/js/popup.js') }}"></script>
    @if (session('success'))
        <meta name="success-message" content="{{ session('success') }}">
    @endif
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tbody = document.querySelector("tbody");
            const jumlahGuru = tbody.querySelectorAll("tr").length;

            const jumlahGuruElement = document.getElementById("jumlah-guru");
            if (jumlahGuruElement) {
                const emptyRow = tbody.querySelector("tr td[colspan]");
                if (emptyRow) {
                    jumlahGuruElement.textContent = "0"; // Tidak ada data
                } else {
                    jumlahGuruElement.textContent = jumlahGuru; // Tampilkan jumlah
                }
            }
        });
    </script>
@endsection


<style>
    .pagination-container {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .pagination-container .entries-info {
        font-size: 14px;
        color: #6c757d;

    }

    .pagination-container nav {
        margin: 0;

    }

    .pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }

    .pagination .page-link {
        color: #007bff;
    }

    .pagination .page-link:hover {
        color: #0056b3;
    }
</style>
