@extends('backend.dashboard.dashboard.dashboard')


@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Verifikasi Data Calon Siswa
                            </h4>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $student->nama_lengkap }}</td>
                                                <td>{{ $student->jenis_kelamin }}</td>
                                                <td>{{ $student->email }}</td>


                                                <td class="text-center">
                                                    <span
                                                        class="badge 
                                                        @if ($student->status == 'Terima') bg-success 
                                                        @elseif ($student->status == 'Tidak Terima') bg-danger 
                                                        @else bg-warning text-white @endif"
                                                        style="padding: 10px 15px; font-size: 12px; font-weight: bold;">
                                                        <i
                                                            class="fas 
                                                            @if ($student->status == 'Terima') fa-check-circle 
                                                            @elseif ($student->status == 'Tidak Terima') fa-times-circle 
                                                            @else fa-spinner @endif"></i>
                                                        {{ $student->status ?? 'Proses' }}
                                                    </span>
                                                </td>

                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center flex-wrap gap-2">
                                                        <form action="{{ route('student.updateStatus', $student->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="Terima">
                                                            <button type="submit" class="btn btn-success btn-sm">
                                                                <i class="fas fa-check-circle"></i> Terima
                                                            </button>
                                                        </form>

                                                        <form action="{{ route('student.updateStatus', $student->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="Tidak Terima">
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fas fa-times-circle"></i> Tidak Terima
                                                            </button>
                                                        </form>

                                                        <form action="{{ route('student.updateStatus', $student->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="Proses">
                                                            <button type="submit" class="btn btn-warning btn-sm">
                                                                <i class="fas fa-undo"></i> Reset
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>



                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            {{-- <div class="d-flex justify-content-between">
                                <div>
                                    <span>Showing {{ $hasilSeleksi->firstItem() }} to {{ $hasilSeleksi->lastItem() }} of
                                        {{ $hasilSeleksi->total() }} entries</span>
                                </div>
                                <div>
                                    {{ $hasilSeleksi->links('pagination::bootstrap-4') }}
                                </div>
                            </div> --}}
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
