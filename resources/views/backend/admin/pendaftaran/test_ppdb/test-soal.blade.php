@extends('backend.admin.app.app_siswa')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div
                            class="card-header gradient-header text-white d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0 d-flex align-items-center">
                                <i class="fas fa-newspaper me-2"></i> TEST SOAL - CALON SISWA
                            </h4>
                        </div>

                        <div class="quiz-container p-4">
                            <form action="{{ route('quiz.submit') }}" method="POST">
                                @csrf

                                <!-- Student Information Section -->
                                <div class="student-info-card mb-4">
                                    <div class="form-header">
                                        <h5 class="mb-3"><i class="fas fa-user-graduate me-2"></i>Informasi Peserta</h5>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6 mb-3">
                                            <div class="floating-label-group">
                                                <input type="text" class="form-control custom-input" id="student_name"
                                                    name="student_name" required>
                                                <label for="student_name" class="floating-label">Nama Lengkap</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="floating-label-group">
                                                <input type="text" class="form-control custom-input" id="student_id"
                                                    name="student_id">
                                                <label for="student_id" class="floating-label">NISN
                                                    (Wajib)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Timer Card -->
                                <div class="timer-card mb-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-info-circle text-primary me-2"></i>
                                            <span class="quiz-instructions">Pilih tab subjek dan jawab semua
                                                pertanyaan</span>
                                        </div>
                                        <div id="timer" class="text-end">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-clock me-2"></i>
                                                <span id="countdown" class="countdown-display">15:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Subject Navigation Tabs -->
                                <ul class="nav premium-tabs mb-4" id="subjectTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link premium-tab active" id="indo-tab" data-bs-toggle="tab"
                                            data-bs-target="#indo" type="button" role="tab" aria-controls="indo"
                                            aria-selected="true">
                                            <i class="fas fa-book me-1"></i> Bahasa Indonesia
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link premium-tab" id="mtk-tab" data-bs-toggle="tab"
                                            data-bs-target="#mtk" type="button" role="tab" aria-controls="mtk"
                                            aria-selected="false">
                                            <i class="fas fa-calculator me-1"></i> Matematika
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link premium-tab" id="eng-tab" data-bs-toggle="tab"
                                            data-bs-target="#eng" type="button" role="tab" aria-controls="eng"
                                            aria-selected="false">
                                            <i class="fas fa-globe me-1"></i> Bahasa Inggris
                                        </button>
                                    </li>
                                </ul>

                                <!-- Tab Content -->
                                <div class="tab-content premium-tab-content" id="subjectTabContent">
                                    <!-- Bahasa Indonesia Section -->
                                    <div class="tab-pane fade show active" id="indo" role="tabpanel"
                                        aria-labelledby="indo-tab">
                                        <div class="question-card mb-4">
                                            <div class="subject-header indo-header">
                                                <h4 class="mb-0">Soal B. Indonesia</h4>
                                            </div>
                                            <div class="card-body">
                                                @php
                                                    $indoQuestions = $questions
                                                        ->where('subject', 'B.Indonesia')
                                                        ->values();
                                                    $count = 1;
                                                @endphp

                                                @foreach ($indoQuestions as $question)
                                                    <div class="question-item mb-4">
                                                        <div class="question-number">{{ $count }}</div>
                                                        <div class="question-content">
                                                            <h5 class="question-text">{{ $question->question_text }}</h5>
                                                            <div class="options-container mt-3">
                                                                @php
                                                                    $options = is_string($question->options)
                                                                        ? json_decode($question->options, true)
                                                                        : $question->options;
                                                                    if (!is_array($options)) {
                                                                        $options = [];
                                                                    }
                                                                @endphp

                                                                @foreach ($options as $option)
                                                                    <div class="option-item">
                                                                        <input class="option-input" type="radio"
                                                                            name="{{ $question->question_id }}"
                                                                            id="{{ $question->question_id }}_{{ $option['value'] }}"
                                                                            value="{{ $option['value'] }}" required>
                                                                        <label class="option-label"
                                                                            for="{{ $question->question_id }}_{{ $option['value'] }}">
                                                                            <span
                                                                                class="option-marker">{{ $option['value'] }}</span>
                                                                            <span
                                                                                class="option-text">{{ $option['text'] }}</span>
                                                                        </label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php $count++; @endphp
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Matematika Section -->
                                    <div class="tab-pane fade" id="mtk" role="tabpanel" aria-labelledby="mtk-tab">
                                        <div class="question-card mb-4">
                                            <div class="subject-header mtk-header">
                                                <h4 class="mb-0">Soal Matematika</h4>
                                            </div>
                                            <div class="card-body">
                                                @php
                                                    $mtkQuestions = $questions->where('subject', 'MTK')->values();
                                                    $count = 1;
                                                @endphp

                                                @foreach ($mtkQuestions as $question)
                                                    <div class="question-item mb-4">
                                                        <div class="question-number">{{ $count }}</div>
                                                        <div class="question-content">
                                                            <h5 class="question-text">{{ $question->question_text }}</h5>
                                                            <div class="options-container mt-3">
                                                                @php
                                                                    $options = is_string($question->options)
                                                                        ? json_decode($question->options, true)
                                                                        : $question->options;
                                                                    if (!is_array($options)) {
                                                                        $options = [];
                                                                    }
                                                                @endphp

                                                                @foreach ($options as $option)
                                                                    <div class="option-item">
                                                                        <input class="option-input" type="radio"
                                                                            name="{{ $question->question_id }}"
                                                                            id="{{ $question->question_id }}_{{ $option['value'] }}"
                                                                            value="{{ $option['value'] }}" required>
                                                                        <label class="option-label"
                                                                            for="{{ $question->question_id }}_{{ $option['value'] }}">
                                                                            <span
                                                                                class="option-marker">{{ $option['value'] }}</span>
                                                                            <span
                                                                                class="option-text">{{ $option['text'] }}</span>
                                                                        </label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php $count++; @endphp
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Bahasa Inggris Section -->
                                    <div class="tab-pane fade" id="eng" role="tabpanel" aria-labelledby="eng-tab">
                                        <div class="question-card mb-4">
                                            <div class="subject-header eng-header">
                                                <h4 class="mb-0">Soal B. Inggris</h4>
                                            </div>
                                            <div class="card-body">
                                                @php
                                                    $engQuestions = $questions->where('subject', 'B.Inggris')->values();
                                                    $count = 1;
                                                @endphp

                                                @foreach ($engQuestions as $question)
                                                    <div class="question-item mb-4">
                                                        <div class="question-number">{{ $count }}</div>
                                                        <div class="question-content">
                                                            <h5 class="question-text">{{ $question->question_text }}</h5>
                                                            <div class="options-container mt-3">
                                                                @php
                                                                    $options = is_string($question->options)
                                                                        ? json_decode($question->options, true)
                                                                        : $question->options;
                                                                    if (!is_array($options)) {
                                                                        $options = [];
                                                                    }
                                                                @endphp

                                                                @foreach ($options as $option)
                                                                    <div class="option-item">
                                                                        <input class="option-input" type="radio"
                                                                            name="{{ $question->question_id }}"
                                                                            id="{{ $question->question_id }}_{{ $option['value'] }}"
                                                                            value="{{ $option['value'] }}" required>
                                                                        <label class="option-label"
                                                                            for="{{ $question->question_id }}_{{ $option['value'] }}">
                                                                            <span
                                                                                class="option-marker">{{ $option['value'] }}</span>
                                                                            <span
                                                                                class="option-text">{{ $option['text'] }}</span>
                                                                        </label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php $count++; @endphp
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-submit">
                                        <i class="fas fa-paper-plane me-2"></i> Kirim Jawaban
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const durationMinutes = 30;
            let timeLeft = durationMinutes * 60 * 1000;
            const countdownEl = document.getElementById('countdown');
            const quizForm = document.querySelector('form');
            const startButton = document.querySelector('.start-btn');

            function updateCountdown() {
                const minutes = Math.floor(timeLeft / 60000);
                const seconds = Math.floor((timeLeft % 60000) / 1000);

                countdownEl.textContent =
                    `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

                timeLeft -= 1000;

                if (timeLeft < 30000) {
                    countdownEl.classList.add('countdown-danger');
                } else if (timeLeft < 45000) {
                    countdownEl.classList.add('countdown-warning');
                }

                if (timeLeft < 0) {
                    clearInterval(timerInterval);

                    const timeExpiredField = document.createElement('input');
                    timeExpiredField.type = 'hidden';
                    timeExpiredField.name = 'time_expired';
                    timeExpiredField.value = '1';
                    quizForm.appendChild(timeExpiredField);

                    // Kunci tombol
                    if (startButton) {
                        startButton.disabled = true;
                        startButton.style.pointerEvents = 'none';
                        startButton.style.opacity = '0.5';
                    }

                    localStorage.setItem('quizTimeExpired', '1');


                    window.location.href = 'halaman-petunjuk.html';

                    quizForm.submit();
                }
            }

            updateCountdown();
            const timerInterval = setInterval(updateCountdown, 1000);

            const tabLinks = document.querySelectorAll('button[data-bs-toggle="tab"]');
            tabLinks.forEach(tabLink => {
                tabLink.addEventListener('click', function(event) {
                    const targetId = this.getAttribute('data-bs-target');

                    document.querySelectorAll('.tab-pane').forEach(pane => {
                        pane.classList.remove('show', 'active');
                    });

                    document.querySelectorAll('.nav-link').forEach(link => {
                        link.classList.remove('active');
                        link.setAttribute('aria-selected', 'false');
                    });

                    document.querySelector(targetId).classList.add('show', 'active');

                    this.classList.add('active');
                    this.setAttribute('aria-selected', 'true');

                    sessionStorage.setItem('activeQuizTab', targetId);
                });
            });

            const lastActiveTab = sessionStorage.getItem('activeQuizTab');
            if (lastActiveTab) {
                const tabToActivate = document.querySelector(`button[data-bs-target="${lastActiveTab}"]`);
                if (tabToActivate) {
                    tabToActivate.click();
                }
            }

            const optionItems = document.querySelectorAll('.option-item');
            optionItems.forEach(item => {
                item.addEventListener('click', function() {
                    const input = this.querySelector('input');
                    input.checked = true;

                    const parent = this.parentElement;
                    parent.querySelectorAll('.option-item').forEach(sibling => {
                        sibling.classList.remove('selected');
                    });

                    this.classList.add('selected');
                });
            });

            window.addEventListener('beforeunload', function() {
                localStorage.setItem('quizTimeExpired', timeLeft < 0 ? '1' : '0');
            });

            if (localStorage.getItem('quizTimeExpired') === '1') {
                if (startButton) {
                    startButton.disabled = true;
                    startButton.style.pointerEvents = 'none';
                    startButton.style.opacity = '0.5';
                }

                window.location.href = '/petunjuk';
            }
        });
    </script>

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
        }

        .card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .gradient-header {
            background: linear-gradient(135deg, #4568dc, #b06ab3);
            padding: 1.5rem;
            border-radius: 12px 12px 0 0;
        }

        .student-info-card {
            background-color: #fff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .form-header {
            color: #4568dc;
            border-bottom: 2px solid #eaeaea;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .floating-label-group {
            position: relative;
            margin-bottom: 20px;
        }

        .custom-input {
            height: 50px;
            padding: 12px 15px;
            border: 2px solid #e0e6ed;
            border-radius: 8px;
            background-color: #f9fafc;
            transition: all 0.3s;
        }

        .custom-input:focus {
            border-color: #4568dc;
            box-shadow: 0 0 0 3px rgba(69, 104, 220, 0.2);
            background-color: #fff;
        }

        .floating-label {
            position: absolute;
            top: 15px;
            left: 15px;
            color: #8898aa;
            transition: all 0.3s;
            pointer-events: none;
        }

        .custom-input:focus~.floating-label,
        .custom-input:not(:placeholder-shown)~.floating-label {
            top: -10px;
            left: 10px;
            font-size: 12px;
            font-weight: 600;
            color: #4568dc;
            background-color: #fff;
            padding: 0 5px;
        }

        /* Timer Card */
        .timer-card {
            background-color: #fff;
            border-radius: 12px;
            padding: 15px 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .quiz-instructions {
            color: #4a5568;
            font-size: 14px;
        }

        .countdown-display {
            background-color: #4568dc;
            color: white;
            padding: 8px 15px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 16px;
            display: inline-block;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }

        .countdown-warning {
            background-color: #f59e0b;
            animation: pulse 1.5s infinite;
        }

        .countdown-danger {
            background-color: #ef4444;
            animation: pulse 1s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Premium Tabs */
        .premium-tabs {
            border: none;
            gap: 10px;
        }

        .premium-tab {
            padding: 12px 20px;
            border-radius: 8px !important;
            font-weight: 600;
            color: #4a5568;
            background-color: #edf2f7;
            border: none !important;
            transition: all 0.3s ease;
        }

        .premium-tab:hover {
            background-color: #e2e8f0;
            transform: translateY(-2px);
        }

        .premium-tab.active {
            color: white !important;
            background: linear-gradient(135deg, #4568dc, #b06ab3);
            box-shadow: 0 4px 12px rgba(69, 104, 220, 0.3);
            transform: translateY(-2px);
            border: none !important;
        }

        /* Question Cards Styling */
        .question-card {
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .subject-header {
            padding: 15px 20px;
            color: white;
        }

        .indo-header {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
        }

        .mtk-header {
            background: linear-gradient(135deg, #10b981, #3b82f6);
        }

        .eng-header {
            background: linear-gradient(135deg, #f59e0b, #ef4444);
        }

        /* Question Item Styling */
        .question-item {
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            background-color: #f9fafc;
            border-left: 4px solid #4568dc;
            display: flex;
            gap: 15px;
            transition: all 0.3s;
        }

        .question-item:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transform: translateY(-2px);
            background-color: #fff;
        }

        .question-number {
            background: linear-gradient(135deg, #4568dc, #b06ab3);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .question-content {
            flex-grow: 1;
        }

        .question-text {
            color: #2d3748;
            font-weight: 600;
            font-size: 16px;
            line-height: 1.5;
        }

        /* Option Styling */
        .options-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 12px;
            margin-top: 15px;
        }

        .option-item {
            position: relative;
            padding: 12px;
            border-radius: 10px;
            background-color: #fff;
            border: 2px solid #e2e8f0;
            cursor: pointer;
            transition: all 0.3s;
        }

        .option-item:hover {
            border-color: #4568dc;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }

        .option-item.selected {
            border-color: #4568dc;
            background-color: rgba(69, 104, 220, 0.05);
            box-shadow: 0 3px 10px rgba(69, 104, 220, 0.2);
        }

        .option-input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .option-label {
            display: flex;
            align-items: center;
            margin-bottom: 0;
            cursor: pointer;
            width: 100%;
        }

        .option-marker {
            width: 26px;
            height: 26px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #edf2f7;
            color: #4a5568;
            font-weight: 600;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s;
        }

        .option-item.selected .option-marker {
            background-color: #4568dc;
            color: white;
        }

        .option-text {
            font-size: 14px;
            flex-grow: 1;
            color: #4a5568;
        }

        /* Submit Button */
        .btn-submit {
            background: linear-gradient(135deg, #10b981, #3b82f6);
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 50px;
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
            border: none;
            min-width: 200px;
            margin-top: 20px;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        }

        .btn-submit:active {
            transform: translateY(1px);
        }

        .tab-pane {
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .options-container {
                grid-template-columns: 1fr;
            }

            .question-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .question-number {
                margin-bottom: 10px;
            }
        }
    </style>
@endsection
