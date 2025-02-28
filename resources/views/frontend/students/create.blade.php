@extends('frontend.home.landingpage')

@section('content')
    <section class="news-article-section py-8 bg-light">
        <div class="container mt-5">
            <h2 class="text-center mb-5"
                style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #3A6B56; margin-top: 30px; text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); letter-spacing: 1px; font-size: 28px;">
                <span style="color: #FF9F00;">Lengkapi</span> Data Pendaftaran Siswa Baru MA NU Luthful Ulum
            </h2>
            <div class="bg-light p-3 rounded-3">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Panggilan</label>
                                <input type="text" name="nama_panggilan" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control mt-2" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-select" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat Tempat Tinggal</label>
                                <input type="text" name="alamat" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kabupaten</label>
                                <input type="text" name="kabupaten" class="form-control" required>
                            </div>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email Aktif</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No. HP/WhatsApp</label>
                                <input type="text" name="no_hp" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sekolah Asal</label>
                                <input type="text" name="sekolah_asal" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Ayah</label>
                                <input type="text" name="nama_ayah" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Ibu</label>
                                <input type="text" name="nama_ibu" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No. HP/WhatsApp Orang Tua</label>
                                <input type="text" name="no_hp_ortu" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn mt-6 w-100"
                            style="background-color: #28a745; color: white; font-family: 'Arial', sans-serif; font-weight: bold; margin-top: 20px;">
                            Daftar Siswa Baru
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        // Popup Sukses
        @if (session('success'))
            Swal.fire({
                title: 'Pendaftaran Berhasil!',
                text: "{{ session('success') }}",
                icon: 'success',
                iconColor: '#28A745',
                background: '#ffffff',
                color: '#333',
                confirmButtonText: 'OK',
                confirmButtonColor: '#28A745',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                },
                backdrop: `
                    rgba(0, 0, 0, 0.3)
                `
            });
        @endif

        // Popup Gagal
        @if (session('error'))
            Swal.fire({
                title: 'Pendaftaran Gagal!',
                text: "{{ session('error') }}",
                icon: 'error',
                iconColor: '#DC3545',
                background: '#ffffff',
                color: '#333',
                confirmButtonText: 'Coba Lagi',
                confirmButtonColor: '#DC3545',
                showClass: {
                    popup: 'animate__animated animate__shakeX'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOut'
                },
                backdrop: `
                    rgba(0, 0, 0, 0.3)
                `
            });
        @endif
    </script>
@endsection




<style>
    .form-label {
        font-family: 'Arial', sans-serif;
        font-weight: bold;
    }

    .form-control,
    .form-select {
        font-family: 'Arial', sans-serif;
    }

    .btn {
        font-family: 'Arial', sans-serif;
    }

    .py-8 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
    }
</style>
