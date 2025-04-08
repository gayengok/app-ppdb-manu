<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa - MA NU Luthful Ulum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #000;
        }

        .container {
            width: 100%;
            max-width: 210mm;
            margin: 0 auto;
            padding: 0;
        }

        .header {
            text-align: center;
            padding: 20px 0;
            border-bottom: 3px solid #006400;
        }

        .logo-area {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .logo-center {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .logo-center img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
        }

        .school-title {
            text-align: center;
            margin: 0 !important;
            padding: 0 !important;
        }

        .school-title h2 {
            margin: 0 !important;
            padding: 0 !important;
            font-size: 26px;
            font-weight: bold;
            color: #006400;
        }

        h1 {
            margin: 0 !important;
            padding: 0 !important;
            font-size: 20px;
            text-transform: uppercase;
            color: #006400;
        }

        p {
            margin: 2px 0 0;
            font-size: 18px;
        }

        .content {
            padding: 20px;
        }

        .info-section {
            margin-bottom: 20px;
        }

        .section-title {
            background-color: #006400;
            color: white;
            padding: 8px 10px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 8px 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            width: 35%;
            background-color: #f0f0f0;
            font-weight: bold;
        }


        .footer {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
        }

        .print-date {
            font-size: 12px;
            font-style: italic;
        }


        /* Ensure consistent printing */
        @media print {
            body {
                width: 210mm;
                height: 297mm;
                margin: 0;
                padding: 0;
            }

            .section-title {
                background-color: #006400 !important;
                color: white !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            th {
                background-color: #f0f0f0 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            @page {
                size: A4;
                margin: 1cm;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo-area">
                <div class="logo-center">
                    <img src="<?php echo e(public_path('backend/assets/img/logo-MA.png')); ?>" alt="Logo MA NU Luthful Ulum">
                </div>
                <div class="school-title">
                    <h2>MA NU LUTHFUL ULUM</h2>
                    <h1>Data Identitas Siswa Baru <?php echo e(date('Y')); ?>/<?php echo e(date('Y') + 1); ?></h1>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="info-section">
                <div class="section-title">Data Pribadi Siswa</div>
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
                </table>
            </div>

            <div class="info-section">
                <div class="section-title">Data Orang Tua</div>
                <table>
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

            <div class="footer">
                <div class="print-date">
                    Dicetak pada: <?php echo e(date('d-m-Y H:i:s')); ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/students/pdf.blade.php ENDPATH**/ ?>