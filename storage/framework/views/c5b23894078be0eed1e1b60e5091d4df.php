<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
    <style>
        /* Reset margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f1f1f1;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #040504;
            font-size: 30px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .table-header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.5em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #f1f1f1;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        td {
            background-color: #f9f9f9;
            color: #555;
        }

        tr:nth-child(even) td {
            background-color: #f2f2f2;
        }

        tr:hover td {
            background-color: #e1e1e1;
        }

        .table-footer {
            text-align: right;
            font-style: italic;
            color: #777;
        }

        .page-break {
            page-break-before: always;
        }

        /* Media Query untuk Tampilan Layar */
        @media screen and (max-width: 768px) {

            table,
            th,
            td {
                padding: 8px;
            }

            th,
            td {
                font-size: 14px;
            }

            h1 {
                font-size: 24px;
            }
        }

        /* Gaya Khusus untuk Print */
        @media print {
            body {
                background-color: #fff;
                color: #000;
                padding: 0;
            }

            .container {
                width: 100%;
                margin: 0;
                padding: 10px;
                box-shadow: none;
            }

            .table-header {
                font-size: 1.5em;
                background-color: #4CAF50;
                color: white;
                text-align: center;
                margin-top: 0;
                border-radius: 5px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin: 0;
            }

            th,
            td {
                padding: 12px;
                font-size: 14px;
            }

            th {
                background-color: #4CAF50;
                color: white;
            }

            td {
                background-color: #f9f9f9;
                color: #555;
            }

            tr:nth-child(even) td {
                background-color: #f2f2f2;
            }

            tr:hover td {
                background-color: transparent;
            }

            .page-break {
                page-break-before: always;
            }

            h1 {
                font-size: 28px;
                margin-top: 20px;
            }

            .table-footer {
                font-size: 12px;
                text-align: right;
                font-style: italic;
                color: #777;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="table-header">
            <h1>Detail - Siswa Baru</h1>
        </div>
        <div class="table-responsive">
            <table>
                <tr>
                    <th>Nama Lengkap</th>
                    <td><?php echo e($student->nama_lengkap); ?></td>
                </tr>
                <tr>
                    <th>Nama Panggilan</th>
                    <td><?php echo e($student->nama_panggilan); ?></td>
                </tr>
                <tr>
                    <th>Tempat, Tanggal Lahir</th>
                    <td><?php echo e($student->tempat_lahir); ?>, <?php echo e($student->tanggal_lahir); ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo e($student->jenis_kelamin); ?></td>
                </tr>
                <tr>
                    <th>Alamat Tempat Tinggal</th>
                    <td><?php echo e($student->alamat); ?></td>
                </tr>
                <tr>
                    <th>Kabupaten</th>
                    <td><?php echo e($student->kabupaten); ?></td>
                </tr>
                <tr>
                    <th>Email Aktif</th>
                    <td><?php echo e($student->email); ?></td>
                </tr>
                <tr>
                    <th>No. HP/WhatsApp</th>
                    <td><?php echo e($student->no_hp); ?></td>
                </tr>
                <tr>
                    <th>Sekolah Asal</th>
                    <td><?php echo e($student->sekolah_asal); ?></td>
                </tr>
                <tr>
                    <th>Nama Ayah</th>
                    <td><?php echo e($student->nama_ayah); ?></td>
                </tr>
                <tr>
                    <th>Nama Ibu</th>
                    <td><?php echo e($student->nama_ibu); ?></td>
                </tr>
                <tr>
                    <th>No. HP/WhatsApp Orang Tua</th>
                    <td><?php echo e($student->no_hp_ortu); ?></td>
                </tr>
            </table>
        </div>
        <div class="table-footer">
            <p>Dicetak pada: <?php echo e(date('Y-m-d H:i:s')); ?></p>
        </div>
    </div>
</body>

</html>
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/students/pdf.blade.php ENDPATH**/ ?>