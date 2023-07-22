@extends('admins.layouts.index')

@section('content')
    <!-- Content -->
    <div class="content container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Main</a></li>
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Laporan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Statistik Mahasiswa</li>
                        </ol>
                    </nav>
                    <h1 class="page-header-title">Statistik Mahasiswa</h1>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row g-3">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-primary">
                        <h4 class="mb-0 text-white text-cap">Informasi Tracer Study</h4>
                    </div>
                    <div class="card-body">
                        <!-- Pie Chart -->
                        <div class="chartjs-custom mb-3 mb-sm-5" style="height: 14rem;">
                            <canvas id="doughnut-chart" class="js-chart"
                                data-hs-chartjs-options='{
                                        "type": "doughnut",
                                        "data": {
                                            "labels": ["Mengisi", "Belum Mengisi"],
                                            "datasets": [{
                                                "data": [200, 100],
                                                "backgroundColor": ["#00c9a7", "#f5ca99"],
                                                "borderWidth": 1,
                                                "hoverBorderColor": "#fff"
                                            }]
                                        },
                                        "options": {
                                            "cutout": "80%",
                                            "plugins": {
                                                "tooltip": {
                                                    "hasIndicator": true,
                                                    "mode": "index",
                                                    "intersect": false
                                                }
                                            },
                                            "hover": {
                                                "mode": "nearest",
                                                "intersect": true
                                            }
                                        }
                                        }'></canvas>
                        </div>
                        <!-- End Pie Chart -->

                        <!-- Legend Indicators -->
                        <div class="row justify-content-center">
                            <div class="col-auto mb-3 mb-sm-0">
                                <span class="card-title h4">200</span>
                                <span class="legend-indicator bg-success"></span> Mengisi
                            </div>

                            <div class="col-auto mb-3 mb-sm-0">
                                <span class="card-title h4">100</span>
                                <span class="legend-indicator bg-warning"></span> Belum Mengisi
                            </div>
                        </div>
                        <!-- End Legend Indicators -->
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="mb-0 text-white text-cap">Statistik Alumni Mahasiswa FTI 2021</h4>
                    </div>
                    <div class="card-body">

                        <!-- Bar Chart -->
                        <div class="chartjs-custom">
                            <canvas id="ecommerce-sales" class="js-chart" style="height: 20rem;"
                                data-hs-chartjs-options='{
                                        "type": "bar",
                                        "data": {
                                            "labels": ["2018", "2019", "2020", "2021", "2022"],
                                            "datasets": [
                                                {
                                                    "data": [200, 300, 290, 350, 150],
                                                    "backgroundColor": "#377dff",
                                                    "hoverBackgroundColor": "#377dff",
                                                    "borderColor": "#377dff",
                                                    "maxBarThickness": "40"
                                                }
                                            ]
                                        },
                                        "options": {
                                            "scales": {
                                            "y": {
                                                "grid": {
                                                    "color": "#e7eaf3",
                                                    "drawBorder": false,
                                                    "zeroLineColor": "#e7eaf3"
                                                },
                                                "ticks": {
                                                    "beginAtZero": true,
                                                    "stepSize": 100,
                                                    "fontSize": 12,
                                                    "fontColor": "#97a4af",
                                                    "fontFamily": "Open Sans, sans-serif",
                                                    "padding": 10,
                                                    "postfix": "$"
                                                }
                                            },
                                            "x": {
                                                "grid": {
                                                    "display": false,
                                                    "drawBorder": false
                                                },
                                                "ticks": {
                                                "font": {
                                                    "size": 12,
                                                    "family": "Open Sans, sans-serif"
                                                },
                                                "color": "#97a4af",
                                                "padding": 5
                                                },
                                                "categoryPercentage": 0.5
                                            }
                                            },
                                            "cornerRadius": 2,
                                            "plugins": {
                                                "tooltip": {
                                                    "hasIndicator": true
                                                }
                                            },
                                            "hover": {
                                                "mode": "nearest",
                                                "intersect": true
                                            }
                                        }
                                        }'>
                            </canvas>
                        </div>
                        <!-- End Bar Chart -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
@endsection

@push('css')
@endpush

@push('js')
    <script src="/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script>
        $(document).on('ready', function () {
            // INITIALIZATION OF CHARTJS
            // =======================================================
            document.querySelectorAll('.js-chart').forEach(item => {
                HSCore.components.HSChartJS.init(item)
            })
        });
    </script>
@endpush
