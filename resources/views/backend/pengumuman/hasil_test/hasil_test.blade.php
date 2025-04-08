@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-user-graduate"></i> Pengumuman
                            </h4>
                        </div>




                        {{-- Hasil Seleksi --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>NISN</th>
                                            <th>Skor</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attempts as $index => $attempt)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $attempt->student_name }}</td>
                                                <td>{{ $attempt->student_id ?? '-' }}</td>
                                                <td>{{ $attempt->score }} / {{ $attempt->total_possible }}</td>

                                                <td class="text-center">
                                                    <span
                                                        class="badge 
                                                        @if ($attempt->status == 'Lolos') bg-success 
                                                        @elseif ($attempt->status == 'Tidak Lolos') bg-danger 
                                                        @else bg-warning text-white @endif"
                                                        style="padding: 10px 15px; font-size: 12px; font-weight: bold;">
                                                        <i
                                                            class="fas 
                                                            @if ($attempt->status == 'Lolos') fa-check-circle 
                                                            @elseif ($attempt->status == 'Tidak Lolos') fa-times-circle 
                                                            @else fa-spinner @endif"></i>
                                                        {{ $attempt->status ?? 'Proses' }}
                                                    </span>
                                                </td>

                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center flex-wrap gap-2">
                                                        <form action="{{ route('pengumuman.update', $attempt->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="Lolos">
                                                            <button type="submit" class="btn btn-success btn-sm">
                                                                <i class="fas fa-check-circle"></i> Lolos
                                                            </button>
                                                        </form>

                                                        <form action="{{ route('pengumuman.update', $attempt->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="Tidak Lolos">
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fas fa-times-circle"></i> Tidak Lolos
                                                            </button>
                                                        </form>

                                                        <form action="{{ route('pengumuman.update', $attempt->id) }}"
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
