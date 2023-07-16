@extends('layouts.index')

@section('content')
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Main</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <h1 class="page-header-title">Dashboard</h1>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->
        <div class="row row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 mb-3">
            <div class="col">
                <div class="card card-border-left border-primary shadow-soft h-100">
                    <div class="card-body d-flex align-items-center">
                        <i class="tio-user-big-outlined tio-xl text-primary mr-3"></i>
                        <div class="info-body">
                            <span class="d-block font-size-sm">Mahasiswa</span>
                            <div class="d-fle-align-items-center">
                                <h3 class="mb-0">4.120</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col -->
            <div class="col">
                <div class="card card-border-left border-primary shadow-soft h-100">
                    <div class="card-body d-flex align-items-center">
                        <i class="tio-user-big-outlined tio-xl text-primary mr-3"></i>
                        <div class="info-body">
                            <span class="d-block font-size-sm">Fakultas</span>
                            <div class="d-fle-align-items-center">
                                <h3 class="mb-0">8</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col -->
            <div class="col">
                <div class="card card-border-left border-primary shadow-soft h-100">
                    <div class="card-body d-flex align-items-center">
                        <i class="tio-user-big-outlined tio-xl text-primary mr-3"></i>
                        <div class="info-body">
                            <span class="d-block font-size-sm">Alumni</span>
                            <div class="d-fle-align-items-center">
                                <h3 class="mb-0">120</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
        <div class="row g-3">
            <div class="col-12">
                <div class="card bg-success">
                    <div class="card-body">
                        <h1 class="text-white text-cap mb-0 font-weight-bolder text-center">Selamat Datang Di Halaman Tracer Study
                            UNISBA Blitar</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="mb-0 text-white text-cap">Informasi Anda</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" value="Dimas Dwi Ichtiarto" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label">NIM</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" value="17104410041" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" value="MA" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="mb-0 text-white text-cap">Statistik Alumni Mahasiswa FTI 2021</h4>
                    </div>
                    <div class="card-body">
                        <!-- Pie Chart -->
                        <div class="chartjs-custom mb-3 mb-sm-5" style="height: 14rem;">
                            <canvas class="js-chart"
                                data-hs-chartjs-options='{
                                "type": "doughnut",
                                "data": {
                                "labels": ["Teknik Informatika", "Sistem Komputer"],
                                "datasets": [{
                                    "data": [100, 50],
                                    "backgroundColor": ["#377dff", "#00c9db"],
                                    "borderWidth": 5,
                                    "hoverBorderColor": "#fff"
                                }]
                                },
                                "options": {
                                    "tooltips": {
                                        "postfix": "%",
                                        "hasIndicator": true,
                                        "mode": "index",
                                        "intersect": false
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
                        <div class="d-flex justify-content-center">
                            <div class="col-auto mb-3 mb-sm-0">
                                <span class="card-title h4">100</span>
                                <span class="legend-indicator bg-primary"></span> Teknik Informatika
                            </div>

                            <div class="col-auto mb-3 mb-sm-0">
                                <span class="card-title h4">50</span>
                                <span class="legend-indicator bg-info"></span> Sistem Komputer
                            </div>
                        </div>
                        <!-- End Legend Indicators -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
@endsection

@push('css')
    <link rel="stylesheet" href="./assets/vendor/chart.js/dist/Chart.min.css">
@endpush
@push('js')
    <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script>
    $(document).on('ready', function () {
        // INITIALIZATION OF CHARTJS
        // =======================================================
        $('.js-chart').each(function () {
            $.HSCore.components.HSChartJS.init($(this));
        });
    });
    </script>
@endpush
