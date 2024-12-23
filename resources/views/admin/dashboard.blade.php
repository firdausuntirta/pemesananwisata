@extends('layouts.admin')

@section('charts')
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/chart-pie-demo.js') }}"></script>
@endsection

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Jumlah Pengunjung Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Jumlah Pengunjung</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="jumlahPengunjung">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb -1">Tasks</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->

        <div class="col-xl-12 col-lg-7">

            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Pengunjung Tahunan</h6>
                    <select id="tahunSelect" class="form-control"
                        style="width: auto; display: inline-block; height: 30px; font-size: 14px;">
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <!-- Tambahkan opsi tahun lainnya -->
                    </select>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="tahunanChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Pengunjung Bulanan</h6>
                    <select id="bulanSelect" class="form-control" style="width: auto; display: inline-block;">
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="bulananChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Pengunjung Harian</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="harianChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk memuat data bulanan
        function loadMonthlyData(month) {
            fetch(`/api/pengunjung/charttotalbulanan?month=${month}`)
                .then((response) => response.json())
                .then((data) => {
                    updateChart(data); // Fungsi untuk memperbarui chart
                })
                .catch((error) => {
                    console.error("Error fetching monthly visitor data:", error);
                });
        }
        // Mengambil jumlah pengunjung dari API
        fetch('/api/pengunjung/jumlah')
            .then(response => response.json())
            .then(data => {
                document.getElementById('jumlahPengunjung').innerText = data.jumlah_pengunjung;
            })
            .catch(error => console.error('Error fetching jumlah pengunjung:', error));

        document.getElementById("tahunSelect").addEventListener("change", function() {
            const selectedYear = this.value;

            fetch(`/api/pengunjung/charttotaltahunan?tahun=${selectedYear}`)
                .then((response) => response.json())
                .then((data) => {
                    // Inisialisasi ulang chart setelah data diterima
                    var ctx = document.getElementById("tahunanChart").getContext("2d");

                    if (window.myLineChart) {
                        window.myLineChart.destroy(); // Hapus chart sebelumnya
                    }

                    window.myLineChart = new Chart(ctx, {
                        type: "line",
                        data: {
                            labels: data.labels, // Label bulan dari API
                            datasets: [{
                                label: "Jumlah Pengunjung",
                                lineTension: 0.3,
                                backgroundColor: "rgba(78, 115, 223, 0.05)",
                                borderColor: "rgba(78, 115, 223, 1)",
                                pointRadius: 3,
                                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                pointBorderColor: "rgba(78, 115, 223, 1)",
                                pointHoverRadius: 3,
                                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                pointHitRadius: 10,
                                pointBorderWidth: 2,
                                data: data.data, // Data jumlah pengunjung dari API
                            }],
                        },
                        options: {
                            maintainAspectRatio: false,
                            layout: {
                                padding: {
                                    left: 10,
                                    right: 25,
                                    top: 25,
                                    bottom: 0,
                                },
                            },
                            scales: {
                                xAxes: [{
                                    gridLines: {
                                        display: false,
                                        drawBorder: false,
                                    },
                                    ticks: {
                                        maxTicksLimit: 12,
                                    },
                                }],
                                yAxes: [{
                                    ticks: {
                                        maxTicksLimit: 5,
                                        padding: 10,
                                        callback: function(value) {
                                            return value + " Pengunjung";
                                        },
                                    },
                                    gridLines: {
                                        color: "rgb(234, 236, 244)",
                                        zeroLineColor: "rgb(234, 236, 244)",
                                        drawBorder: false,
                                        borderDash: [2],
                                        zeroLineBorderDash: [2],
                                    },
                                }],
                            },
                            legend: {
                                display: false,
                            },
                            tooltips: {
                                backgroundColor: "rgb(255,255,255)",
                                bodyFontColor: "#858796",
                                titleMarginBottom: 10,
                                titleFontColor: "#6e707e",
                                titleFontSize: 14,
                                borderColor: "#dddfeb",
                                borderWidth: 1,
                                xPadding: 15,
                                yPadding: 15,
                                displayColors: false,
                                intersect: false,
                                mode: "index",
                                caretPadding: 10,
                                callbacks: {
                                    label: function(tooltipItem, chart) {
                                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex]
                                            .label || "";
                                        return datasetLabel + ": " + tooltipItem.yLabel +
                                            " Pengunjung";
                                    },
                                },
                            },
                        },
                    });
                })
                .catch((error) => {
                    console.error("Error fetching visitor data:", error);
                });
        });

        // Trigger fetch for the default year on page load
        document.getElementById("tahunSelect").dispatchEvent(new Event("change"));

        // Fungsi untuk memperbarui chart
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil bulan saat ini (1-12)
            const currentMonth = new Date().getMonth() + 1; // Januari = 0, jadi tambahkan 1

            // Setel nilai default dropdown ke bulan saat ini
            const bulanSelect = document.getElementById("bulanSelect");
            bulanSelect.value = currentMonth;

            // Muat data default untuk bulan ini
            loadMonthlyData(currentMonth);

            // Tambahkan event listener untuk perubahan pilihan bulan
            bulanSelect.addEventListener("change", function() {
                const selectedMonth = this.value;
                loadMonthlyData(selectedMonth);
            });
        });

        // Fungsi untuk memuat data bulanan
        function loadMonthlyData(month) {
            fetch(`/api/pengunjung/charttotalbulanan?month=${month}`)
                .then((response) => response.json())
                .then((data) => {
                    updateChart(data); // Fungsi untuk memperbarui chart
                })
                .catch((error) => {
                    console.error("Error fetching monthly visitor data:", error);
                });
        }
        fetch("/api/pengunjung/charttotalharian")
            .then((response) => response.json())
            .then((data) => {
                var ctx = document.getElementById("harianChart");
                var myLineChart = new Chart(ctx, {
                    type: "line",
                    data: {
                        labels: data.labels, // Label tanggal dari API
                        datasets: [{
                            label: "Jumlah Pengunjung (7 Hari Terakhir)",
                            lineTension: 0.3,
                            backgroundColor: "rgba(78, 115, 223, 0.05)",
                            borderColor: "rgba(78, 115, 223, 1)",
                            pointRadius: 3,
                            pointBackgroundColor: "rgba(78, 115, 223, 1)",
                            pointBorderColor: "rgba(78, 115, 223, 1)",
                            pointHoverRadius: 3,
                            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                            pointHitRadius: 10,
                            pointBorderWidth: 2,
                            data: data.data,
                        }, ],
                    },
                    options: {
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                time: {
                                    unit: "date"
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    callback: (value) => value + " Pengunjung"
                                }
                            }],
                        },
                    },
                });
            })
            .catch((error) => {
                console.error("Error fetching visitor data:", error);
            });
    </script>
    @hasSection('charts')
        @yield('charts')
    @endif
@endsection
