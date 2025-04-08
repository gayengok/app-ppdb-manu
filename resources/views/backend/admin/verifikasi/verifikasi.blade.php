@extends('backend.admin.app.app_siswa')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-lg">
                        <div
                            class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center text-md-left">
                                        <h4
                                            class="card-title mb-0 font-weight-bold d-flex align-items-center justify-content-center justify-content-md-start">
                                            <i class="fas fa-id-card-alt mr-2"></i> STATUS VERIFIKASI DATA
                                        </h4>
                                    </div>
                                </div>
                            </div>


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

                        <div class="card-body py-4">
                            <div class="table-responsive">
                                <table class="table table-hover" id="verification-table">
                                    <thead>
                                        <tr>
                                            <th class="rounded-left border-0 font-weight-bold">No</th>
                                            <th class="border-0 font-weight-bold">Nama Lengkap</th>
                                            <th class="border-0 font-weight-bold">Jenis Kelamin</th>
                                            <th class="border-0 font-weight-bold">Email</th>
                                            <th class="rounded-right border-0 font-weight-bold text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                            <tr class="border-bottom">
                                                <td class="py-3">{{ $loop->iteration }}</td>
                                                <td class="py-3 font-weight-bold">{{ $student->nama_lengkap }}</td>
                                                <td class="py-3">
                                                    @if ($student->jenis_kelamin == 'Laki-laki')
                                                        <span class="text-primary"><i class="fas fa-mars mr-1"></i>
                                                            {{ $student->jenis_kelamin }}</span>
                                                    @else
                                                        <span class="text-danger"><i class="fas fa-venus mr-1"></i>
                                                            {{ $student->jenis_kelamin }}</span>
                                                    @endif
                                                </td>
                                                <td class="py-3">
                                                    <a href="mailto:{{ $student->email }}" class="text-primary">
                                                        <i class="fas fa-envelope mr-1"></i> {{ $student->email }}
                                                    </a>
                                                </td>
                                                <td class="text-center py-3">
                                                    @if ($student->status == 'Terima')
                                                        <div class="badge badge-pill bg-success text-white px-3 py-2">
                                                            <i class="fas fa-check-circle mr-1"></i> TERIMA
                                                        </div>
                                                    @elseif ($student->status == 'Tidak Terima')
                                                        <div class="badge badge-pill bg-danger text-white px-3 py-2">
                                                            <i class="fas fa-times-circle mr-1"></i> TIDAK TERIMA
                                                        </div>
                                                    @else
                                                        <div class="badge badge-pill bg-warning text-white px-3 py-2">
                                                            <i class="fas fa-spinner fa-spin mr-1"></i> PROSES
                                                        </div>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-4">
                                <div class="d-flex justify-content-end">
                                    <div class="badge-legend">
                                        <span class="mr-3"><i class="fas fa-circle text-success mr-1"></i> Terima</span>
                                        <span class="mr-3"><i class="fas fa-circle text-danger mr-1"></i> Tidak
                                            Terima</span>
                                        <span><i class="fas fa-circle text-warning mr-1"></i> Proses</span>
                                    </div>
                                </div>
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
        #verification-table {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }

        #verification-table thead {
            background-color: #f8f9fa;
        }

        #verification-table th {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 16px;
            color: #495057;
        }

        #verification-table td {
            vertical-align: middle;
            font-size: 0.9rem;
        }

        #verification-table tbody tr {
            transition: all 0.2s ease;
        }

        #verification-table tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.03);
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.03);
        }

        .badge {
            font-weight: 500;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.2s ease;
        }

        .badge:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }

        .card-header {
            border-top-left-radius: 10px !important;
            border-top-right-radius: 10px !important;
        }

        .input-group {
            border-radius: 8px;
            overflow: hidden;
        }

        .badge-legend {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            color: #6c757d;
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, #0062cc 0%, #007bff 100%);
        }

        /* Styles for search in header */
        .card-header .input-group {
            background: rgba(255, 255, 255, 0.2);
        }

        .card-header .form-control {
            border-color: #fff;
        }

        .card-header .input-group-text {
            border-color: #fff;
        }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            // Add animation when page loads
            $("#verification-table tbody tr").each(function(index) {
                $(this).css({
                    'opacity': 0,
                    'transform': 'translateY(20px)'
                });

                setTimeout(() => {
                    $(this).css({
                        'opacity': 1,
                        'transform': 'translateY(0px)',
                        'transition': 'all 0.3s ease'
                    });
                }, 50 * index);
            });

            // Auto-focus search input when page loads if search was performed
            @if (request('search'))
                $('input[name="search"]').focus();
            @endif
        });
    </script>
@endpush
