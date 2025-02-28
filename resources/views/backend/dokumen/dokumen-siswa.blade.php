@extends('backend.dashboard.dashboard.dashboard')


@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Data - Document Siswa Baru
                            </h4>

                        </div>
                        <!-- Menampilkan Pesan Sukses -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <form method="GET" action="{{ route('admin.dokumen.index') }}" class="mb-4">
                                <div class="input-group shadow-sm">
                                    <input type="text" name="search" class="form-control rounded-start"
                                        placeholder="Cari nama..." value="{{ request('search') }}"
                                        style="border: 1px solid #ced4da; padding: 10px;">
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
                                            <th>Nama</th>
                                            <th>KK</th>
                                            <th>Akta Kelahiran</th>
                                            <th>KIP/PKH</th>
                                            <th>KTP Orang Tua</th>
                                            <th>Ijazah/SKL</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dokumens as $dokumen)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $dokumen->nama }}</td>
                                                <td>
                                                    <a href="{{ asset('storage/' . $dokumen->kk) }}" download
                                                        class="btn btn-primary" aria-label="Download KK">
                                                        <i class="fas fa-download"></i> KK
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ asset('storage/' . $dokumen->akta_kelahiran) }}" download
                                                        class="btn btn-primary" aria-label="Download Akta Kelahiran">
                                                        <i class="fas fa-download"></i> Akta
                                                    </a>
                                                </td>
                                                <td>
                                                    @if ($dokumen->kip_pkh)
                                                        <a href="{{ asset('storage/' . $dokumen->kip_pkh) }}" download
                                                            class="btn btn-primary" aria-label="Download KIP/PKH">
                                                            <i class="fas fa-download"></i> KIP/PKH
                                                        </a>
                                                    @else
                                                        <span>-</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ asset('storage/' . $dokumen->ktp_ortu) }}" download
                                                        class="btn btn-primary" aria-label="Download KTP Orang Tua">
                                                        <i class="fas fa-download"></i> KTP Ortu
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ asset('storage/' . $dokumen->ijazah_skl) }}" download
                                                        class="btn btn-primary" aria-label="Download Ijazah/SKL">
                                                        <i class="fas fa-download"></i> Ijazah/SKL
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="action-buttons">
                                                        <form action="{{ route('admin.dokumen.delete', $dokumen->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Yakin ingin menghapus dokumen: {{ $dokumen->nama }}?')"
                                                                aria-label="Delete Document">
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

                            <!-- Showing Pagination Information -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    Showing {{ $dokumens->firstItem() }} to {{ $dokumens->lastItem() }} of
                                    {{ $dokumens->total() }} entries
                                </div>
                                <div>
                                    {{ $dokumens->links('pagination::bootstrap-4') }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
