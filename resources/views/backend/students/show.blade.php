@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Detail - Siswa Baru
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row" style="width: 30%;">Nama Lengkap</th>
                                        <td>{{ $student->nama_lengkap }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Panggilan</th>
                                        <td>{{ $student->nama_panggilan }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tempat, Tanggal Lahir</th>
                                        <td>{{ $student->tempat_lahir }}, {{ $student->tanggal_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td>{{ $student->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alamat Tempat Tinggal</th>
                                        <td>{{ $student->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kabupaten</th>
                                        <td>{{ $student->kabupaten }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email Aktif</th>
                                        <td>{{ $student->email }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">No. HP/WhatsApp</th>
                                        <td>{{ $student->no_hp }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sekolah Asal</th>
                                        <td>{{ $student->sekolah_asal }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Ayah</th>
                                        <td>{{ $student->nama_ayah }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Ibu</th>
                                        <td>{{ $student->nama_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">No. HP/WhatsApp Orang Tua</th>
                                        <td>{{ $student->no_hp_ortu }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-start">
                            <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>

                            <!-- Tombol download PDF -->
                            <a href="{{ route('students.downloadPdf', $student->id) }}" class="btn btn-primary">
                                <i class="fas fa-download"></i> Download PDF
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
