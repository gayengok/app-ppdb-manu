@extends('backend.dashboard.dashboard.dashboard')

@section('content')
    <!-- Main Content Container -->
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Card Utama dengan Desain Premium -->
                <div id="mainResultCard" class="card border-0 overflow-hidden">
                    <!-- Header dengan Background Pattern -->
                    <div class="card-header p-0">
                        <div class="position-relative">
                            <div class="bg-pattern p-3 text-white">
                                <div class="position-relative z-index-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h2 class="mb-0 fw-bold"><i class="fas fa-graduation-cap me-2"></i>Hasil Test</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Profil Siswa dengan Efek Glass Morphism -->
                    <div class="card-body p-0">
                        <div class="glass-panel p-4 position-relative">
                            <div class="floating-shapes"></div>
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <h1 class="fw-bold text-gradient mb-2">{{ $quizAttempt->student_name }}</h1>
                                    <div class="d-flex flex-wrap align-items-center gap-3 mb-2">
                                        @if ($quizAttempt->student_id)
                                            <div class="info-pill">
                                                <i class="fas fa-id-card me-2"></i>{{ $quizAttempt->student_id }}
                                            </div>
                                        @endif
                                        <div class="info-pill">
                                            <i
                                                class="fas fa-calendar me-2"></i>{{ $quizAttempt->created_at->format('d M Y') }}
                                        </div>
                                        <div class="info-pill">
                                            <i class="fas fa-clock me-2"></i>{{ $quizAttempt->created_at->format('H:i') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-4 mt-lg-0">
                                    <div class="score-circle mx-auto">
                                        <div class="score-circle-inner">
                                            <div class="score-value">{{ number_format($quizAttempt->percentage, 0) }}</div>
                                            <div class="score-label">Persen</div>
                                        </div>
                                        <svg class="score-circle-svg" width="160" height="160" viewBox="0 0 160 160">
                                            <circle class="score-circle-bg" cx="80" cy="80" r="70" />
                                            <circle class="score-circle-progress" cx="80" cy="80" r="70"
                                                style="stroke-dashoffset: calc(440 - (440 * {{ $quizAttempt->percentage }}) / 100)" />
                                        </svg>
                                        <div
                                            class="score-status {{ $quizAttempt->passed ? 'status-passed' : 'status-failed' }}">
                                            {{ $quizAttempt->passed ? 'LULUS' : 'TIDAK LULUS' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stats Cards dengan Efek Neon -->
                        <div class="p-4 stats-section">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="stats-card">
                                        <div class="stats-icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="stats-info">
                                            <div class="stats-label">Skor</div>
                                            <div class="stats-value">{{ $quizAttempt->score }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stats-card">
                                        <div class="stats-icon">
                                            <i class="fas fa-tasks"></i>
                                        </div>
                                        <div class="stats-info">
                                            <div class="stats-label">Total Skor</div>
                                            <div class="stats-value">{{ $quizAttempt->total_possible }}</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="stats-card">
                                        <div class="stats-icon">
                                            <i class="fas fa-percentage"></i>
                                        </div>
                                        <div class="stats-info">
                                            <div class="stats-label">Persentase</div>
                                            <div class="stats-value">{{ number_format($quizAttempt->percentage, 1) }}%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Detail Kategori dengan Desain Modern -->
                        <div class="p-4 categories-section">
                            <h4 class="section-title">
                                <i class="fas fa-chart-bar me-2"></i>Perincian Nilai per Kategori
                            </h4>

                            <div class="category-cards">
                                @if (!empty($quizAttempt->category_scores) && is_array($quizAttempt->category_scores))
                                    @foreach ($quizAttempt->category_scores as $category => $data)
                                        @php
                                            $earned = $data['earned'] ?? 0;
                                            $total = $data['total'] ?? 1; // Hindari pembagian oleh nol
                                            $percentage = ($earned / $total) * 100;

                                            $colorClass =
                                                $percentage >= 80
                                                    ? 'excellent'
                                                    : ($percentage >= 60
                                                        ? 'good'
                                                        : ($percentage >= 40
                                                            ? 'average'
                                                            : 'poor'));
                                        @endphp

                                        <div class="category-card">
                                            <div class="category-header">
                                                <h5 class="category-title">{{ $category }}</h5>
                                                <div class="category-score {{ $colorClass }}">
                                                    {{ number_format($percentage, 1) }}%
                                                </div>
                                            </div>
                                            <div class="category-detail">
                                                <div class="category-fraction">{{ $earned }} / {{ $total }}
                                                </div>
                                                <div class="category-progress-container">
                                                    <div class="category-progress {{ $colorClass }}"
                                                        style="width: {{ $percentage }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="alert alert-warning">Tidak ada data kategori tersedia</div>
                                @endif
                            </div>
                        </div>

                        <!-- Footer dengan Tombol Action -->
                        <div class="card-footer p-4">
                            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                                <a href="{{ route('quiz.admin') }}" class="action-btn back-btn">
                                    <i class="fas fa-arrow-left me-2"></i>Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Printable Version (Hidden) -->
    <div id="printableArea" class="d-none">
        <div class="print-container">
            <div class="print-header">
                <div class="print-logo">
                    <img src="/logo.png" alt="Logo Sekolah" class="print-logo-img">
                </div>
                <div class="print-title">
                    <h1>HASIL TEST</h1>
                    <p>{{ $quizAttempt->created_at->format('d F Y') }}</p>
                </div>
            </div>

            <div class="print-student-info">
                <h2>{{ $quizAttempt->student_name }}</h2>
                @if ($quizAttempt->student_id)
                    <p>Nomor Induk: {{ $quizAttempt->student_id }}</p>
                @endif
            </div>

            <div class="print-score-summary">
                <div class="print-score-box">
                    <div class="print-score-value">{{ number_format($quizAttempt->percentage, 1) }}%</div>
                    <div class="print-score-detail">{{ $quizAttempt->score }} / {{ $quizAttempt->total_possible }}</div>
                    <div class="print-status {{ $quizAttempt->passed ? 'print-passed' : 'print-failed' }}">
                        {{ $quizAttempt->passed ? 'LULUS' : 'TIDAK LULUS' }}
                    </div>
                </div>
            </div>

            <div class="print-categories">
                <h3>Perincian Nilai per Kategori</h3>
                <table class="print-table">
                    <thead>
                        <tr>
                            <th>Kategori</th>
                            <th>Skor</th>
                            <th>Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (is_array($quizAttempt->category_scores) || is_object($quizAttempt->category_scores))
                            @foreach ($quizAttempt->category_scores as $category => $data)
                                @php
                                    $percentage = $data['total'] > 0 ? ($data['earned'] / $data['total']) * 100 : 0;
                                @endphp
                                <tr>
                                    <td>{{ $category }}</td>
                                    <td>{{ $data['earned'] }} / {{ $data['total'] }}</td>
                                    <td>{{ number_format($percentage, 1) }}%</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" class="text-center">Tidak ada data kategori tersedia</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="print-footer">
                <p>Dokumen ini dibuat otomatis pada {{ $quizAttempt->created_at->format('d F Y, H:i') }}</p>
            </div>
        </div>
    </div>

    <!-- Styles untuk desain premium -->
    <style>
        /* Styling untuk halaman utama */
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3a0ca3;
            --accent-color: #7209b7;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #38b000;
            --warning-color: #f48c06;
            --danger-color: #d90429;
            --gradient-start: #4361ee;
            --gradient-end: #7209b7;
        }

        /* Background Pattern */
        .bg-pattern {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            position: relative;
            overflow: hidden;
        }

        .bg-pattern::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: 30% 30%;
            z-index: 0;
        }

        .z-index-1 {
            position: relative;
            z-index: 1;
        }

        /* Date Badge */
        .date-badge {
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            padding: 0.5rem 1rem;
            border-radius: 30px;
            font-weight: 500;
        }

        /* Glass Effect */
        .glass-panel {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 0;
        }

        .floating-shapes::before,
        .floating-shapes::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            opacity: 0.1;
        }

        .floating-shapes::before {
            width: 300px;
            height: 300px;
            top: -150px;
            right: -100px;
        }

        .floating-shapes::after {
            width: 200px;
            height: 200px;
            bottom: -100px;
            left: -50px;
        }

        /* Info Pills */
        .info-pill {
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary-color);
            padding: 0.5rem 1rem;
            border-radius: 30px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
        }

        /* Text Gradient */
        .text-gradient {
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
        }

        /* Score Circle */
        .score-circle {
            position: relative;
            width: 160px;
            height: 160px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .score-circle-inner {
            position: absolute;
            z-index: 2;
            text-align: center;
        }

        .score-value {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1;
            color: var(--primary-color);
        }

        .score-label {
            font-size: 0.9rem;
            color: var(--dark-color);
            opacity: 0.7;
        }

        .score-circle-svg {
            position: absolute;
            transform: rotate(-90deg);
        }

        .score-circle-bg {
            fill: none;
            stroke: #e9ecef;
            stroke-width: 8;
        }

        .score-circle-progress {
            fill: none;
            stroke: url(#gradient);
            stroke-width: 8;
            stroke-linecap: round;
            stroke-dasharray: 440;
            transition: stroke-dashoffset 1s ease-in-out;
        }

        .score-status {
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.8rem;
            z-index: 3;
        }

        .status-passed {
            background-color: var(--success-color);
            color: white;
        }

        .status-failed {
            background-color: var(--danger-color);
            color: white;
        }

        /* Stats Cards */
        .stats-section {
            background-color: #f8f9fa;
        }

        .stats-card {
            background-color: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 1rem;
            height: 100%;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .stats-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .stats-info {
            flex-grow: 1;
        }

        .stats-label {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 0.3rem;
        }

        .stats-value {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark-color);
        }

        /* Categories Section */
        .section-title {
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 1.5rem;
            padding-bottom: 0.8rem;
            border-bottom: 2px solid #e9ecef;
        }

        .category-cards {
            display: grid;
            gap: 1rem;
        }

        .category-card {
            background-color: white;
            border-radius: 10px;
            padding: 1.2rem;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s;
        }

        .category-card:hover {
            transform: translateX(5px);
        }

        .category-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .category-title {
            font-weight: 600;
            margin: 0;
        }

        .category-score {
            font-weight: 700;
            padding: 0.3rem 0.8rem;
            border-radius: 6px;
        }

        .category-detail {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .category-fraction {
            font-weight: 500;
            min-width: 60px;
        }

        .category-progress-container {
            flex-grow: 1;
            height: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
            overflow: hidden;
        }

        .category-progress {
            height: 100%;
            border-radius: 5px;
            transition: width 1s ease-in-out;
        }

        /* Color Classes */
        .excellent {
            background-color: var(--success-color);
            color: white;
        }

        .good {
            background-color: #3a86ff;
            color: white;
        }

        .average {
            background-color: var(--warning-color);
            color: white;
        }

        .poor {
            background-color: var(--danger-color);
            color: white;
        }

        /* Action Buttons */
        .card-footer {
            background-color: white;
            border-top: 1px solid #e9ecef;
        }

        .action-btn {
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
        }

        .back-btn {
            background-color: #e9ecef;
            color: var(--dark-color);
        }

        .back-btn:hover {
            background-color: #dee2e6;
        }

        .print-btn {
            background-color: var(--primary-color);
            color: white;
        }

        .print-btn:hover {
            background-color: #3a56dd;
        }

        .share-btn {
            background-color: var(--accent-color);
            color: white;
        }

        .share-btn:hover {
            background-color: #6108a1;
        }

        /* Responsive adjustments */
        @media (min-width: 768px) {
            .category-cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 767px) {
            .score-circle {
                margin-top: 1rem;
            }
        }

        /* Print Styles */
        #printableArea {
            display: none;
        }

        .print-container {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
        }

        .print-header {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #333;
            padding-bottom: 20px;
        }

        .print-logo {
            width: 80px;
            margin-right: 20px;
        }

        .print-logo-img {
            width: 100%;
        }

        .print-title {
            flex-grow: 1;
        }

        .print-title h1 {
            margin: 0;
            font-size: 24px;
        }

        .print-title p {
            margin: 5px 0 0;
            font-size: 14px;
        }

        .print-student-info {
            margin-bottom: 30px;
            text-align: center;
        }

        .print-student-info h2 {
            margin: 0 0 5px;
            font-size: 22px;
        }

        .print-student-info p {
            margin: 0;
            font-size: 14px;
        }

        .print-score-summary {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }

        .print-score-box {
            text-align: center;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
            width: 200px;
        }

        .print-score-value {
            font-size: 36px;
            font-weight: bold;
        }

        .print-score-detail {
            font-size: 18px;
            margin: 5px 0 15px;
        }

        .print-status {
            font-weight: bold;
            padding: 5px 15px;
            border-radius: 15px;
            display: inline-block;
        }

        .print-passed {
            background-color: #38b000;
            color: white;
        }

        .print-failed {
            background-color: #d90429;
            color: white;
        }

        .print-categories {
            margin-bottom: 40px;
        }

        .print-categories h3 {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .print-table {
            width: 100%;
            border-collapse: collapse;
        }

        .print-table th,
        .print-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .print-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .print-footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            #printableArea,
            #printableArea * {
                visibility: visible;
            }

            #printableArea {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
        }
    </style>

    <!-- Script untuk fungsionalitas -->
    <script>
        // Animate progress bars on load
        document.addEventListener('DOMContentLoaded', function() {
            // Add SVG gradient definition for score circle
            const svgNS = "http://www.w3.org/2000/svg";
            const defs = document.createElementNS(svgNS, "defs");
            const gradient = document.createElementNS(svgNS, "linearGradient");
            gradient.setAttribute("id", "gradient");
            gradient.setAttribute("x1", "0%");
            gradient.setAttribute("y1", "0%");
            gradient.setAttribute("x2", "100%");
            gradient.setAttribute("y2", "100%");

            const stop1 = document.createElementNS(svgNS, "stop");
            stop1.setAttribute("offset", "0%");
            stop1.setAttribute("stop-color", "#4361ee");

            const stop2 = document.createElementNS(svgNS, "stop");
            stop2.setAttribute("offset", "100%");
            stop2.setAttribute("stop-color", "#7209b7");

            gradient.appendChild(stop1);
            gradient.appendChild(stop2);
            defs.appendChild(gradient);

            document.querySelector('.score-circle-svg').appendChild(defs);
        });

        // Function to print only the score results
        function printResults() {
            document.getElementById('printableArea').classList.remove('d-none');
            window.print();
            document.getElementById('printableArea').classList.add('d-none');
        }
    </script>
@endsection
