@extends('frontend.home.landingpage')


@section('content')
    <section class="news-article-section py-8 bg-light">
        <div class="container">
            <h2 class="text-center mb-5"
                style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #3A6B56; margin-top: 30px; text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); letter-spacing: 1px; font-size: 28px;">
                <span style="color: #FF9F00;">Syarat</span> Pendaftaran Siswa Baru MA NU Luthful Ulum
            </h2>

            @if (session('success'))
                <div class="alert alert-success text-center">{{ session('success') }}</div>
            @endif

            <div class="bg-white p-4 rounded-3 shadow-sm">
                <form action="{{ route('upload.syarat') }}" method="POST" enctype="multipart/form-data">
                    @csrf



                    <!-- Judul Upload Dokumen -->
                    <h4 class="text-center mb-4" style="font-weight: bold;">Upload Dokumen Persyaratan</h4>

                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <!-- Kolom Nama -->
                            <div class="mb-4">
                                <label class="form-label" style="font-weight: bold;">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control"
                                    placeholder="Tulis nama lengkap sesuai KTP atau identitas resmi Anda" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label" style="font-weight: bold;">F. C. KK</label>
                                <input type="file" name="kk" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" style="font-weight: bold;">F. C. AKTA KELAHIRAN</label>
                                <input type="file" name="akta_kelahiran" class="form-control" required>
                            </div>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label" style="font-weight: bold;">KARTU KIP/PKH (Jika Ada)</label>
                                <input type="file" name="kip_pkh" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" style="font-weight: bold;">F. C. KTP ORANG TUA</label>
                                <input type="file" name="ktp_ortu" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" style="font-weight: bold;">IJAZAH/SKL</label>
                                <input type="file" name="ijazah_skl" class="form-control" required>
                            </div>
                        </div>
                    </div>


                    <!-- Tombol Kirim -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn w-100"
                            style="background-color: #28a745; color: white; font-family: 'Arial', sans-serif; font-weight: bold; padding: 10px;">
                            Kirim Dokumen
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

<style>
    .py-8 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
    }
</style>
