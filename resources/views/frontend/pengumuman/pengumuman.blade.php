@extends('frontend.home.landingpage')

@section('content')
    <section class="py-5 bg-light" style="margin-top: 80px; max-height: 100vh; overflow-y: auto;">
        <div class="container my-4">
            @if ($pengumuman->isEmpty())
                <p class="text-center text-muted">Tidak ada data pengumuman saat ini.</p>
            @else
                @foreach ($pengumuman as $key => $item)
                    <div class="text-center mb-4">
                        <h2 class="fw-bold" style="font-family: 'Roboto', sans-serif; color: #2c3e50;">
                            {{ e($item->judul) }}
                        </h2>
                        <p class="lead" style="font-family: 'Roboto', sans-serif;">
                            Selamat kepada seluruh siswa baru MA NU Luthful Ulum yang telah berhasil lulus!
                            Silakan unduh pengumuman kelulusan di bawah ini.
                        </p>
                    </div>

                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">Unduh Pengumuman Kelulusan</h5>
                            <p class="card-text">
                                @if (!empty($item->file_path))
                                    Klik tombol di bawah ini untuk mengunduh dokumen pengumuman kelulusan Anda.
                                @else
                                    File pengumuman belum tersedia saat ini. Silakan cek kembali nanti.
                                @endif
                            </p>

                            @if (!empty($item->file_path))
                                <a href="{{ asset('storage/' . $item->file_path) }}" class="btn btn-success btn-lg"
                                    download>
                                    Unduh Pengumuman
                                </a>
                            @else
                                <button class="btn btn-secondary btn-lg" disabled>
                                    File Belum Tersedia
                                </button>
                            @endif
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <p class="text-muted">
                            Jika Anda mengalami kesulitan dalam mengunduh, silakan hubungi pihak sekolah.
                        </p>
                    </div>
                @endforeach
            @endif
        </div>

    </section>
@endsection
