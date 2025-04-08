<!DOCTYPE html>
<html lang="en">
{{-- 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hasil Seleksi Siswa Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header img {
            width: 80px;
            height: auto;
            margin-bottom: 10px;
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
        }

        .header p {
            margin: 5px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #000;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header dengan logo dan judul -->
        <div class="header">
            <img src="{{ public_path('backend/assets/img/Logo-MA.png') }}" alt="Logo Sekolah">

            <h1>Data Hasil Seleksi Siswa Baru</h1>
            <p>MA NU LUTHFUL ULUM</p>
        </div>

        <!-- Tabel Data Hasil Seleksi -->
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hasilSeleksi as $hasil)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $hasil->nama_lengkap }}</td>
                        <td>{{ $hasil->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; Sekolah MA NU Luthful Ulum. All Rights Reserved.</p>
        </div>
    </div>
</body>

</html> --}}
