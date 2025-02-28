@extends('backend.dashboard.dashboard.dashboard')


@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Data - Masuk Siswa
                            </h4>
                        </div>
                        <div class="card-body">

                            <form method="GET" action="{{ route('admin.students.index') }}" class="mb-4">
                                <div class="input-group shadow-sm">
                                    <input type="text" name="search" class="form-control rounded-start"
                                        placeholder="Cari nama lengkap atau nama panggilan..."
                                        value="{{ request('search') }}" style="border: 1px solid #ced4da; padding: 10px;">
                                    <button type="submit" class="btn btn-primary rounded-end">
                                        <i class="fas fa-search"></i> Cari
                                    </button>
                                </div>
                            </form>


                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Nama Panggilan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Email</th>
                                            <th>No. HP</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $student->nama_lengkap }}</td>
                                                <td>{{ $student->nama_panggilan }}</td>
                                                <td>{{ $student->jenis_kelamin }}</td>
                                                <td>{{ $student->email }}</td>
                                                <td>{{ $student->no_hp }}</td>
                                                <td>
                                                    <div style="display: flex; gap: 10px; align-items: center;">
                                                        <a href="{{ route('admin.students.show', $student->id) }}"
                                                            class="btn btn-info" title="Detail">
                                                            <i class="fas fa-info-circle"></i>
                                                        </a>

                                                        <form action="{{ route('admin.students.destroy', $student->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <p>Showing {{ $students->firstItem() }} to {{ $students->lastItem() }} of
                                        {{ $students->total() }} entries</p>
                                </div>
                                <div>
                                    {{ $students->links('pagination::bootstrap-4') }}
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
