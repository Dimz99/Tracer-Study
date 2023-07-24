@extends('users.layouts.index')

@section('content')
    <!-- Content -->
    <div class="content container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Main</a></li>
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Data</a></li>
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Alumni</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail</li>
                        </ol>
                    </nav>

                    <h1 class="page-header-title">Detail Alumni</h1>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <!-- Card -->
        <div class="card">
            <div class="card-header">
                <h2 class="card-title h4">Detail Alumni</h2>
            </div>

            <!-- Body -->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Form -->
                        <div class="row mb-4">
                            <label for="nameLabel" class="col-sm-3 col-form-label form-label">Nama Lengkap</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nameLabel" placeholder="Nama Lengkap" value="{{$data[0]->nama}}" readonly>
                            </div>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="row mb-4">
                            <label for="nimLabel" class="col-sm-3 col-form-label form-label">NIM</label>

                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="nimLabel" placeholder="Nomor Induk Mahasiswa" value="{{$data[0]->NIM}}" readonly>
                            </div>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="row mb-4">
                            <label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>

                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="emailLabel" placeholder="Email" value="{{$data[0]->email}}" readonly>
                            </div>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="row mb-4">
                            <label for="phoneLabel" class="col-sm-3 col-form-label form-label">No Telepon</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="phoneLabel" placeholder="No Telepon" value="{{$data[0]->telepon}}" readonly>
                            </div>
                        </div>
                        <!-- End Form -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Form -->
                        <div class="row mb-4">
                            <label for="firstYearLabel" class="col-sm-3 col-form-label form-label">Tahun</label>

                            <div class="col-sm-9">
                                <div class="input-group input-group-sm-vertical">
                                    <input type="number" class="form-control" id="firstYearLabel" placeholder="Tahun Masuk" value="{{$data[0]->thn_masuk}}" readonly>
                                    <input type="number" class="form-control" id="lastYearLabel" placeholder="Tahun Keluar" value="{{$data[0]->thn_keluar}}" readonly>
                                </div>
                            </div>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="row mb-4">
                            <label for="prodiLabel" class="col-sm-3 col-form-label form-label">Program Studi</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="prodiLabel" placeholder="Program Studi" value="{{$data[0]->prodi}}" readonly>
                            </div>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="row mb-4">
                            <label for="fakultasLabel" class="col-sm-3 col-form-label form-label">Fakultas</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fakultasLabel" placeholder="Fakultas" value="{{$data[0]->fakultas}}" readonly>
                            </div>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="row mb-4">
                            <label for="addressLabel" class="col-sm-3 col-form-label form-label">Alamat</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="addressLabel" placeholder="Alamat Saat ini" value="{{$data[0]->alamat}}" readonly>
                            </div>
                        </div>
                        <!-- End Form -->
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="/user/data/alumni" type="submit" class="btn btn-white">Kembali</a>
                </div>
            </div>
            <!-- End Body -->
        </div>
        <!-- End Card -->
    </div>
    <!-- End Content -->
@endsection

@push('js')
    <script src="{{ asset('assets/vendor/tom-select/dist/js/tom-select.complete.js') }}"></script>

    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF SELECT2
            // =======================================================
            HSCore.components.HSTomSelect.init('.js-select')
        });
    </script>
@endpush
