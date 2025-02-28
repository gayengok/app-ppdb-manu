@extends('backend.dashboard.dashboard.dashboard')


@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Data - Hasil Seleksi Siswa Baru
                            </h4>
                            <div class="d-flex justify-content-between mb-3">
                                <a href="{{ route('hasil_seleksi.printPDF') }}" class="btn btn-danger"
                                    style="margin-right: 10px;">
                                    <i class="fas fa-print"></i> Cetak PDF
                                </a>

                                <!-- Tombol untuk tambah data -->
                                <a href="{{ route('hasil_seleksi.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Tambah
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Status</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hasilSeleksi as $hasil)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $hasil->nama_lengkap }}</td>
                                                <td class="text-center">
                                                    <form action="{{ route('hasil_seleksi.update', $hasil->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit"
                                                            class="btn {{ $hasil->status === 'Lolos' ? 'btn-success' : 'btn-danger' }} 
                                                                        btn-lg 
                                                                        d-flex 
                                                                        align-items-center 
                                                                        justify-content-center 
                                                                        transition-all 
                                                                        hover:scale-105 
                                                                        focus:outline-none 
                                                                        shadow-md"
                                                            style="font-size: 16px; padding: 10px 20px;">
                                                            <i class="fas {{ $hasil->status === 'Lolos' ? 'fa-check-circle' : 'fa-times-circle' }}"
                                                                style="margin-right: 8px;"></i>
                                                            {{ $hasil->status }}
                                                        </button>
                                                    </form>
                                                </td>
                                                <td class="text-center">
                                                    <form action="{{ route('hasil_seleksi.destroy', $hasil->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                            <i class="fas fa-trash-alt" style="font-size: 18px;"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>Showing {{ $hasilSeleksi->firstItem() }} to {{ $hasilSeleksi->lastItem() }} of
                                        {{ $hasilSeleksi->total() }} entries</span>
                                </div>
                                <div>
                                    {{ $hasilSeleksi->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                Swal.fire({
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    iconColor: '#28A745',
                    background: '#ffffff',
                    color: '#333',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#28A745',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    },
                    backdrop: `rgba(0, 0, 0, 0.3)`
                });
            @endif
        });
    </script>
@endsection


<style>
    .pagination {
        display: inline-block;
    }

    .pagination li {
        display: inline;
    }

    .pagination li a,
    .pagination li span {
        border: 1px solid #ddd;
        padding: 8px 16px;
        margin: 0 4px;
        text-decoration: none;
        color: #007bff;
        border-radius: 4px;
        font-weight: bold;
    }

    .pagination li a:hover,
    .pagination li span:hover {
        background-color: #007bff;
        color: white;
    }

    .pagination .active span {
        background-color: #007bff;
        color: white;
        border: 1px solid #007bff;
    }

    .pagination .disabled span {
        background-color: #f1f1f1;
        color: #ccc;
        border: 1px solid #ddd;
    }
</style>
