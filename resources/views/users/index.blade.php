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
                <h1 class="text-uppercase mb-0 fw-bold text-center">Selamat Datang Di Halaman Tracer Study UNISBA Blitar
                </h1>
            </div>
        </div>

        <div class="card card-body mb-3 mb-lg-5">
            <div class="row col-lg-divider gx-lg-6">
                <div class="col-lg-4">
                    <!-- Media -->
                    <div class="d-flex align-items-center" style="min-height: 5em">
                        <div class="flex-grow-1">
                            <h6 class="card-subtitle mb-2">Alumni</h6>
                            <h2 class="card-title display-4">300</h2>
                        </div>

                        <span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
                            <i class="bi-shop"></i>
                        </span>
                    </div>
                    <!-- End Media -->
                </div>
                <!-- End Col -->

                <div class="col-lg-4">
                    <!-- Media -->
                    <div class="d-flex align-items-center" style="min-height: 5em">
                        <div class="flex-grow-1">
                            <h6 class="card-subtitle mb-2">Fakultas</h6>
                            <h2 class="card-title display-4">2</h2>
                        </div>

                        <span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
                            <i class="bi-layout-text-window-reverse"></i>
                        </span>
                    </div>
                    <!-- End Media -->
                </div>
                <!-- End Col -->

                <div class="col-lg-4">
                    <!-- Media -->
                    <div class="d-flex align-items-center" style="min-height: 5em">
                        <div class="flex-grow-1">
                            <h6 class="card-subtitle mb-2">Tracer Study</h6>
                            <h2 class="card-title display-4">200</h2>
                        </div>

                        <span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
                            <i class="bi-percent"></i>
                        </span>
                    </div>
                    <!-- End Media -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>

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
                                <input type="text" class="form-control-plaintext" value="Mahasiswa" readonly>
                            </div>
                        </div>
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
        $(document).on('ready', function() {
            // INITIALIZATION OF CHARTJS
            // =======================================================
        });
    </script>
@endpush
