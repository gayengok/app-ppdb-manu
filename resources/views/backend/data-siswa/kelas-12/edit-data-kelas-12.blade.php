@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0"><i class="fas fa-edit"></i> Edit Data Siswa Kelas 12</h4>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card-body">
                            <form action="{{ route('kelas-12.update', $kelasDuaBelas->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="text" class="form-control" id="nisn" name="nisn"
                                        value="{{ old('nisn', $kelasDuaBelas->nisn) }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="full_name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name"
                                        value="{{ old('full_name', $kelasDuaBelas->full_name) }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="gender" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="gender" name="gender" required>
                                        <option value="Laki-laki"
                                            {{ old('gender', $kelasDuaBelas->gender) == 'Laki-laki' ? 'selected' : '' }}>
                                            Laki-laki
                                        </option>
                                        <option value="Perempuan"
                                            {{ old('gender', $kelasDuaBelas->gender) == 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan
                                        </option>
                                    </select>
                                </div>

                                <!-- Input Alamat -->
                                <div class="mb-3">
                                    <label for="address" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="address" name="address" required>{{ old('address', $kelasDuaBelas->address) }}</textarea>
                                </div>

                                <!-- Input Status -->
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="Aktif"
                                            {{ old('status', $kelasDuaBelas->status) == 'Aktif' ? 'selected' : '' }}>
                                            Aktif
                                        </option>
                                        <option value="Tidak Aktif"
                                            {{ old('status', $kelasDuaBelas->status) == 'Tidak Aktif' ? 'selected' : '' }}>
                                            Tidak Aktif
                                        </option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Update
                                </button>

                                <a href="{{ route('kelas-12.index') }}" class="btn btn-secondary">
                                    <i class="fa fa-arrow-left"></i> Kembali
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
