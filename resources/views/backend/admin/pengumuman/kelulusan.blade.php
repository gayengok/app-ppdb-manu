@extends('backend.admin.app.app_siswa')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-lg">
                        <div
                            class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-3">
                            <h4 class="card-title mb-0 font-weight-bold">
                                <i class="fas fa-bullhorn mr-2"></i> PENGUMUMAN HASIL
                            </h4>

                            <!-- Search Box Positioned at Top Right -->
                            <div class="w-20">
                                <form action="" method="GET">
                                    <div class="input-group shadow-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-white border-right-0">
                                                <i class="fas fa-search text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control border-left-0" name="search"
                                            placeholder="Cari berdasarkan nama atau email..."
                                            value="{{ request('search') }}">
                                    </div>
                                </form>
                            </div>
                        </div>



                        {{-- Hasil Kelulusan --}}
                        <div class="card-body py-4">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped" id="selection-results">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="rounded-left border-0 font-weight-bold">NO</th>
                                            <th class="border-0 font-weight-bold">Nama</th>
                                            <th class="border-0 font-weight-bold">NISN</th>
                                            <th class="border-0 font-weight-bold">Skor</th>
                                            <th class="rounded-right border-0 font-weight-bold text-center">Status</th>
                                            <th class="rounded-right border-0 font-weight-bold text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attempts as $index => $attempt)
                                            <tr class="border-bottom">
                                                <td class="py-3">{{ $index + 1 }}</td>
                                                <td class="py-3 font-weight-bold">{{ $attempt->student_name }}</td>
                                                <td class="py-3">{{ $attempt->student_id ?? '-' }}</td>
                                                <td class="py-3">
                                                    <div class="d-flex align-items-center">
                                                        {{-- <span class="mr-2">{{ $attempt->score }} /
                                                            {{ $attempt->total_possible }}</span> --}}
                                                        <div class="progress" style="height: 6px; width: 60px;">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: {{ ($attempt->score / $attempt->total_possible) * 100 }}%;"
                                                                aria-valuenow="{{ $attempt->score }}" aria-valuemin="0"
                                                                aria-valuemax="{{ $attempt->total_possible }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center py-3">
                                                    @if ($attempt->status == 'Lolos')
                                                        <div class="badge badge-pill bg-success text-white px-3 py-2">
                                                            <i class="fas fa-check-circle mr-1"></i> LOLOS
                                                        </div>
                                                    @elseif ($attempt->status == 'Tidak Lolos')
                                                        <div class="badge badge-pill bg-danger text-white px-3 py-2">
                                                            <i class="fas fa-times-circle mr-1"></i> TIDAK LOLOS
                                                        </div>
                                                    @else
                                                        <div class="badge badge-pill bg-warning text-white px-3 py-2">
                                                            <i class="fas fa-spinner fa-spin mr-1"></i> PROSES
                                                        </div>
                                                    @endif
                                                </td>

                                                <td class="text-center py-3">
                                                    <a href="{{ route('cetak.pdf', ['id' => $attempt->id]) }}"
                                                        class="btn btn-primary btn-sm" target="_blank">
                                                        <i class="fas fa-print"></i> Cetak
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center mt-4">
                                {{ $attempts->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        #selection-results {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }

        #selection-results thead tr {
            background-color: #f8f9fa;
        }

        #selection-results th {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 16px;
            color: #495057;
        }

        #selection-results td {
            vertical-align: middle;
            font-size: 0.9rem;
        }

        .badge {
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .card {
            border: none;
            border-radius: 10px;
        }

        .card-header {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .input-group {
            border-radius: 8px;
            overflow: hidden;
        }

        .input-group-text {
            border-color: #ced4da;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #ced4da;
        }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            // Make table rows clickable if desired
            $('#selection-results tbody tr').css('cursor', 'pointer');

            // Auto-focus search input when page loads if search was performed
            @if (request('search'))
                $('input[name="search"]').focus();
            @endif
        });
    </script>
@endpush
