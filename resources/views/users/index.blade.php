@extends('users.layouts.index')

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
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <h1 class="page-header-title">Dashboard</h1>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="card mb-5 mb-lg-3">
            <div class="card-body">
                <h1 class="text-uppercase mb-0 fw-bold text-center">Selamat Datang Di Halaman Tracer Study UNISBA Blitar</h1>
            </div>
        </div>

        <div class="row row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 mb-3">
            <div class="col">
                <a href="javascript:;" class="card card-hover-shadow h-100">
                    <div class="card-body">
                        <h6 class="card-title text-uppercase">Mahasiswa</h6>
                        <div class="d-fle-align-items-center">
                            <h2 class="display-4 mb-0">4.120</h2>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Col -->
            <div class="col">
                <a href="javascript:;" class="card card-hover-shadow h-100">
                    <div class="card-body">
                        <h6 class="card-title text-uppercase">Fakultas</h6>
                        <div class="d-fle-align-items-center">
                            <h2 class="display-4 mb-0">8</h2>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Col -->
            <div class="col">
                <a href="javascript:;" class="card card-hover-shadow h-100">
                    <div class="card-body">
                        <h6 class="card-title text-uppercase">Alumni</h6>
                        <div class="d-fle-align-items-center">
                            <h2 class="display-4 mb-0">120</h2>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->

        <div class="row g-3">
            <div class="col-lg-4 col-md-6">
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
            <div class="col-lg-8 col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="mb-0 text-white text-cap">Statistik Alumni Mahasiswa FTI 2021</h4>
                    </div>
                    <div class="card-body">
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
    <script>
        $(document).on('ready', function () {
            // INITIALIZATION OF CHARTJS
            // =======================================================
        });
    </script>
@endpush
