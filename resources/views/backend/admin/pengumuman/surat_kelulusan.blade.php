<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Penerimaan Siswa Baru</title>
    <style>
        @page {
            size: A4;
            margin: 1.5cm;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            line-height: 1.3;
            margin: 0;
            padding: 0;
        }

        .kop {
            text-align: center;
            margin-bottom: 0.5cm;
            padding-bottom: 0.3cm;
            border-bottom: 3px solid #000;
        }

        .kop-border {
            border-bottom: 1px solid #000;
            margin-top: 3px;
            margin-bottom: 0.5cm;
        }

        .kop h1 {
            margin: 0;
            font-size: 16pt;
            text-transform: uppercase;
        }

        .kop h2 {
            margin: 0;
            font-size: 14pt;
        }

        .kop p {
            margin: 0;
            font-size: 10pt;
        }

        .judul {
            text-align: center;
            margin-bottom: 0.5cm;
        }

        .judul h3 {
            margin: 0;
            font-size: 14pt;
            text-decoration: underline;
            text-transform: uppercase;
        }

        .judul p {
            margin-top: 0.1cm;
            font-size: 12pt;
        }

        .isi {
            text-align: justify;
        }

        .isi p {
            margin: 0.2cm 0;
        }

        .tabel-data {
            width: 100%;
            margin: 0.3cm 0;
        }

        .tabel-data td {
            padding: 2px 0;
            vertical-align: top;
        }

        .tabel-data td:first-child {
            width: 130px;
        }

        .status-box {
            margin: 0.3cm 0;
            text-align: center;
        }

        .status {
            display: inline-block;
            border: 2px solid black;
            padding: 0.3cm 0.5cm;
            font-weight: bold;
            font-size: 14pt;
        }

        .ttd {
            margin-top: 0.5cm;
            position: relative;
            height: 3cm;
        }

        .ttd-kiri {
            position: absolute;
            left: 0;
            top: 1cm;
            text-align: center;
            width: 5cm;
        }

        .ttd-kanan {
            position: absolute;
            right: 0;
            top: 0;
            text-align: center;
            width: 5cm;
        }

        .ttd-nama {
            /* padding-top: 1cm; */
            margin-top: 1cm;
            font-weight: bold;
            text-decoration: underline;
        }

        .ttd-ortu {
            padding-top: 1.5cm;
            margin-top: 1cm;
            font-weight: bold;
            text-decoration: underline;
        }

        .nomor {
            text-align: left;
            margin-bottom: 0.5cm;
        }

        .catatan {
            font-size: 10pt;
            margin-top: 4.5cm;
            border-top: 1px solid #999;
            padding-top: 0.2cm;
        }

        .compact {
            line-height: 1.2;
        }
    </style>
</head>

<body>
    <div class="kop">
        <h1>MA NU LUTHFUL ULUM</h1>
        <h2>PANITIA PENERIMAAN PESERTA DIDIK BARU</h2>
        <p>Jl. Pendidikan No. 123, Kecamatan Ilmu, Kota Cerdas, Provinsi Utama</p>
        <p>Telp: (021) 1234567 | Email: ppdb@man.sch.id | Website: www.man.sch.id</p>
    </div>

    <div class="kop-border"></div>

    <div class="nomor">
        Nomor: {{ date('Y') }}/PPDB-MA/{{ date('m') }}/{{ $attempt->id }}
    </div>

    <div class="judul">
        <h3>Surat Keterangan Penerimaan Siswa</h3>
        <p>Tahun Pelajaran {{ date('Y') }}/{{ date('Y') + 1 }}</p>
    </div>

    <div class="isi">
        <p class="compact">Panitia Penerimaan Peserta Didik Baru (PPDB) MA NU Luthful Ulum, dengan ini menyatakan
            bahwa:</p>

        <table class="tabel-data">
            <tr>
                <td>Nama</td>
                <td>: <b>{{ $attempt->student_name }}</b></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>: {{ $attempt->student_id ?? '-' }}</td>
            </tr>
        </table>

        <p class="compact">Berdasarkan hasil seleksi Penerimaan Peserta Didik Baru (PPDB) yang telah dilaksanakan,
            dengan ini dinyatakan bahwa calon peserta didik tersebut di atas:</p>

        <div class="status-box">
            <div class="status">{{ $attempt->status }}</div>
        </div>

        <p class="compact">Sebagai calon peserta didik baru MA NU Luthful Ulum tahun pelajaran
            {{ date('Y') }}/{{ date('Y') + 1 }} dengan perolehan nilai seleksi sebagai berikut:</p>

        <table class="tabel-data">
            <tr>
                <td>Skor Seleksi</td>
                <td>: {{ $attempt->score }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: {{ $attempt->status }}</td>
            </tr>
        </table>


        <p class="compact">Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>

        <div class="ttd">
            <div class="ttd-kiri">
                <p>Orang Tua/Wali,</p>
                <p class="ttd-ortu">.........................</p>
            </div>

            <div class="ttd-kanan">
                <p>Pasucen, {{ date('d F Y') }}</p>
                <p>Kepala Sekolah,</p>

                @if (isset($signatureBase64) && !empty($signatureBase64))
                    <div style="height: 80px; margin: 10px 0;">
                        <img src="{{ $signatureBase64 }}" alt="Tanda Tangan Kepala Sekolah" style="height: 80px;">
                    </div>
                @else
                    <div style="height: 80px;"></div>
                @endif

                <p class="ttd-nama">Ahmad Syafiq, S.Pd</p>
            </div>
        </div>

        <div class="catatan">
            <p><b>Catatan:</b> Calon peserta didik wajib membawa surat ini pada saat daftar ulang beserta persyaratan
                lainnya yang telah ditetapkan. Apabila tidak melakukan daftar ulang sesuai jadwal, maka dianggap
                mengundurkan diri.</p>
        </div>
    </div>
</body>

</html>
