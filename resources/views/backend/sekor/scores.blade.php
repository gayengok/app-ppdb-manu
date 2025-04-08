@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-user-graduate"></i> Data - Hasil Skor Calon Siswa
                            </h4>
                        </div>

                        {{-- Tabel Daftar Siswa --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>Nomor Induk</th>
                                            <th>Skor</th>
                                            <th>Persentase</th>
                                            <th>Status</th>
                                            <th>Notes</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attempts as $attempt)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $attempt->student_name }}</td>
                                                <td>{{ $attempt->student_id ?? '-' }}</td>
                                                <td>{{ $attempt->score }} / {{ $attempt->total_possible }}</td>
                                                <td>{{ number_format($attempt->percentage, 1) }}%</td>
                                                <td>
                                                    @if ($attempt->passed)
                                                        <span class="badge bg-success">LULUS</span>
                                                    @else
                                                        <span class="badge bg-danger">TIDAK LULUS</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($attempt->notes)
                                                        <span
                                                            class="badge bg-warning text-dark">{{ $attempt->notes }}</span>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td>{{ $attempt->created_at->format('d/m/Y H:i') }}</td>

                                                <td class="text-start">
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('quiz.result', $attempt->id) }}"
                                                            class="btn btn-sm btn-info">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <form action="{{ route('quiz.delete', $attempt->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">
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

                            <div class="d-flex justify-content-center mt-4">
                                {{ $attempts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
