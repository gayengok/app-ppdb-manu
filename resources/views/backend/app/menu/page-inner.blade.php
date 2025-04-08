<div class="container">
    <div class="dashboard-header">
        <h2 class="fw-bold text-secondary">
            <i class="fas fa-home mr-2"></i> Dashboard
        </h2>
        <span class="date-display">Selasa, 11 Maret 2025</span>
    </div>

    <div class="stats-grid">
        <div class="stat-card primary">
            <div class="stat-icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <div class="stat-content">
                <span class="stat-label">Siswa Baru</span>
                <h3 class="stat-value">{{ $newStudentsCount }}</h3>
            </div>
        </div>

        <div class="stat-card info">
            <div class="stat-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-content">
                <span class="stat-label">Data Seluruh Siswa</span>
                <h3 class="stat-value">{{ $totalSiswa }}</h3>
            </div>
        </div>

        <div class="stat-card success">
            <div class="stat-icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="stat-content">
                <span class="stat-label">Data Jumlah Guru</span>
                <h3 class="stat-value" id="jumlah-guru">{{ $jumlahGuru }}</h3>
            </div>
        </div>

        <div class="stat-card secondary">
            <div class="stat-icon">
                <i class="fas fa-school"></i>
            </div>
            <div class="stat-content">
                <span class="stat-label">Jumlah Data Kelas</span>
                <h3 class="stat-value">3</h3>
            </div>
        </div>
    </div>

    <div class="charts-row">
        <div class="chart-card">
            <div class="chart-header">
                <h3 class="chart-title">
                    <i class="fas fa-chart-line"></i>
                    Statistik Artikel
                </h3>
            </div>
            <div class="chart-body">
                <div class="chart-container">
                    <canvas id="articleStatisticsChart"></canvas>
                </div>
                <div class="articles-summary">
                    <h4>
                        <i class="fas fa-file-alt"></i>
                        Total Artikel Per Bulan
                    </h4>
                    <ul>
                        @foreach ($articlesPerMonth as $article)
                            <li>
                                <i class="fas fa-circle-notch"></i>
                                <span>{{ $article->month }}:</span> <strong>{{ $article->count }}</strong> artikel
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="chart-card students-chart-card">
            <div class="chart-header">
                <h3 class="chart-title">
                    <i class="fas fa-user-graduate"></i>
                    Statistik Siswa Baru
                </h3>
            </div>
            <div class="chart-body">
                <div class="chart-container">
                    <canvas id="newStudentsChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Format hari ini
    const today = new Date();
    const options = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };
    document.querySelector('.date-display').textContent = today.toLocaleDateString('id-ID', options);

    // Article Statistics Chart
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('articleStatisticsChart').getContext('2d');
        const data = @json($articlesPerMonth->pluck('count'));
        const labels = @json($articlesPerMonth->pluck('month'));

        const gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(67, 97, 238, 0.6)');
        gradient.addColorStop(1, 'rgba(67, 97, 238, 0.1)');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Artikel',
                    data: data,
                    backgroundColor: gradient,
                    borderColor: 'rgba(67, 97, 238, 1)',
                    borderWidth: 2,
                    borderRadius: 10,
                    borderSkipped: false,
                    barThickness: 25,
                    maxBarThickness: 30
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            font: {
                                size: 14,
                                weight: 'bold',
                                family: 'Poppins'
                            },
                            color: '#333',
                            padding: 20
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(67, 97, 238, 0.9)',
                        titleFont: {
                            size: 14,
                            weight: 'bold',
                            family: 'Poppins'
                        },
                        bodyFont: {
                            size: 14,
                            family: 'Poppins'
                        },
                        padding: 15,
                        cornerRadius: 8,
                        callbacks: {
                            label: function(context) {
                                return `${context.raw} Artikel`;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(200, 200, 200, 0.2)',
                            drawBorder: false
                        },
                        ticks: {
                            stepSize: 5,
                            font: {
                                size: 12,
                                family: 'Poppins'
                            },
                            color: '#666',
                            padding: 10
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            font: {
                                size: 12,
                                family: 'Poppins'
                            },
                            color: '#666',
                            padding: 10
                        }
                    }
                },
                animation: {
                    duration: 2000,
                    easing: 'easeOutQuart'
                }
            }
        });
    });

    // New Students Chart
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('newStudentsChart').getContext('2d');

        const labels = @json(array_keys($newStudentsPerYear->toArray()));
        const data = @json(array_values($newStudentsPerYear->toArray()));

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Siswa Baru',
                    data: data,
                    backgroundColor: 'rgba(255, 255, 255, 0.7)',
                    borderColor: 'rgba(255, 255, 255, 1)',
                    borderWidth: 2,
                    borderRadius: 8,
                    borderSkipped: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            color: '#fff',
                            font: {
                                family: 'Poppins',
                                size: 14,
                                weight: 'bold'
                            },
                            padding: 20
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(255, 255, 255, 0.9)',
                        titleColor: '#333',
                        bodyColor: '#333',
                        titleFont: {
                            size: 14,
                            weight: 'bold',
                            family: 'Poppins'
                        },
                        bodyFont: {
                            size: 14,
                            family: 'Poppins'
                        },
                        padding: 15,
                        cornerRadius: 8
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)',
                            drawBorder: false
                        },
                        ticks: {
                            color: '#fff',
                            font: {
                                family: 'Poppins',
                                size: 12
                            },
                            padding: 10
                        },
                        title: {
                            display: true,
                            text: 'Jumlah Siswa',
                            color: '#fff',
                            font: {
                                family: 'Poppins',
                                size: 14,
                                weight: 'bold'
                            },
                            padding: {
                                top: 10,
                                bottom: 10
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            color: '#fff',
                            font: {
                                family: 'Poppins',
                                size: 12
                            },
                            padding: 10
                        },
                        title: {
                            display: true,
                            text: 'Tahun',
                            color: '#fff',
                            font: {
                                family: 'Poppins',
                                size: 14,
                                weight: 'bold'
                            },
                            padding: {
                                top: 10,
                                bottom: 10
                            }
                        }
                    }
                },
                animation: {
                    duration: 2000,
                    easing: 'easeOutQuart'
                }
            }
        });
    });
</script>
