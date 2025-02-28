<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">
                <span class="fa fa-home"></span> Dashboard
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Siswa Baru</p>
                                <h4 class="card-title">{{ $newStudentsCount }}</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-info bubble-shadow-small">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Data Seluruh Siwa</p>
                                <h4 class="card-title">{{ $totalSiswa }}</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-success bubble-shadow-small">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Data Jumlah Guru</p>
                                <h4 id="jumlah-guru" class="card-title">{{ $jumlahGuru }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                <i class="fas fa-school"></i>
                            </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Jumlah Data Kelas</p>
                                <h4 class="card-title">3</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">

        <div class="col-md-8">
            <div class="card card-round">
                <div class="card-header">
                    <div class="card-head-row d-flex align-items-center">
                        <div class="card-title">
                            <i class="fas fa-chart-line me-2 text-primary"></i>
                            Article Statistics Per Month
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                        <canvas id="articleStatisticsChart"></canvas>
                    </div>
                    <div id="articleStatsTotal">
                        <h4>
                            <i class="fas fa-file-alt me-2 text-info"></i>
                            Total Articles Per Month
                        </h4>
                        <ul>
                            @foreach ($articlesPerMonth as $article)
                                <li>
                                    <i class="fas fa-circle-notch me-2 text-primary"></i>
                                    {{ $article->month }}: {{ $article->count }} articles
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .card-round {
                border-radius: 15px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .card-title {
                font-size: 18px;
                font-weight: bold;
                text-align: center;
                color: #444;
            }

            #articleStatisticsChart {
                margin-top: 15px;
            }
        </style>






        <div class="col-md-4">
            <div class="card card-success card-round">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">
                            <i class="fas fa-user-graduate me-2 text-white"></i> Siswa Baru Masuk
                        </div>
                        {{-- <div class="card-tools">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-label-light dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Download CSV</a>
                                    <a class="dropdown-item" href="#">Print</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div class="pull-in">
                        <canvas id="newStudentsChart" style="height: 400px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- <div class="row">
        <div class="col-md-12">
            <div class="card card-round">
                <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                        <h4 class="card-title">
                            <span class="fa fa-edit"></span> Input Data Pendidikan
                        </h4>
                        <div class="card-tools">
                            <button class="btn btn-icon btn-link btn-primary btn-xs">
                                <span class="fa fa-angle-down"></span>
                            </button>
                            <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card">
                                <span class="fa fa-sync-alt"></span>
                            </button>
                            <button class="btn btn-icon btn-link btn-primary btn-xs">
                                <span class="fa fa-times"></span>
                            </button>
                        </div>
                    </div>
                    <p class="card-category">
                        Masukkan data jumlah siswa, guru, dan kelas
                    </p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <form action="#" method="POST">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center font-weight-bold">Data</th>
                                                <th class="text-center font-weight-bold">Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jumlah Data Siswa Baru</td>
                                                <td>
                                                    <input type="number" class="form-control" name="new_students"
                                                        placeholder="Masukkan jumlah siswa baru" required />
                                                </td>
                                            </tr>




                                            <tr>
                                                <td>Jumlah Data Seluruh Siswa</td>
                                                <td>
                                                    <input type="number" class="form-control" name="total_students"
                                                        placeholder="Masukkan jumlah seluruh siswa" required />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Data Guru</td>
                                                <td>
                                                    <input type="number" class="form-control" name="teachers"
                                                        placeholder="Masukkan jumlah guru" required />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Data Kelas</td>
                                                <td>
                                                    <input type="number" class="form-control" name="classes"
                                                        placeholder="Masukkan jumlah kelas" required />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fa fa-save"></span> Simpan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>


<script>
    // Jumlah Arikel Perbulan

    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('articleStatisticsChart').getContext('2d');
        const data = @json($articlesPerMonth->pluck('count'));
        const labels = @json($articlesPerMonth->pluck('month'));

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Number of Articles',
                    data: data,
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 2,
                    borderRadius: 10,
                    barThickness: 30
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
                                weight: 'bold'
                            },
                            color: '#333'
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return `${context.raw} Articles`;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        ticks: {
                            stepSize: 5,
                            font: {
                                size: 12,
                                family: 'Arial'
                            },
                            color: '#666'
                        },
                        grid: {
                            color: 'rgba(200, 200, 200, 0.2)'
                        },
                        beginAtZero: true
                    },
                    x: {
                        ticks: {
                            font: {
                                size: 12,
                                family: 'Arial'
                            },
                            color: '#666'
                        },
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    });


    // Jumlah Siswa Masuk

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
                    backgroundColor: 'rgba(40, 167, 69, 0.6)',
                    borderColor: 'rgba(40, 167, 69, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Siswa'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Tahun'
                        }
                    }
                }
            }
        });
    });
</script>
