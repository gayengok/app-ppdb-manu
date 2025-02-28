@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <div class="container">
        <h2 class="text-center mb-4">Absensi Siswa Kelas 10</h2>

        <form action="{{ route('absensi.store') }}" method="POST">
            @csrf

            <!-- Pilih tanggal -->
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>

            <!-- Tabel Absensi Siswa -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Status Kehadiran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $index => $siswaItem)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $siswaItem->nama }}</td>
                            <td>
                                <select name="kehadiran[{{ $siswaItem->id }}]" class="form-select" required>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Sakit">Sakit</option>
                                    <option value="Izin">Izin</option>
                                    <option value="Alpa">Alpa</option>
                                </select>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Tombol Kirim -->
            <button type="submit" class="btn btn-primary">Simpan Absensi</button>
        </form>
    </div>
@endsection
