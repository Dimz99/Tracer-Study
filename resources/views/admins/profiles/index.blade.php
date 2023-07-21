@extends('admins.layouts.index')

@section('content')
    <div class="content container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Main</a></li>
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Setting</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>

                    <h1 class="page-header-title">Profile</h1>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-lg-6">
                <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title h4">Profil Admin</h2>
                    </div>

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Form -->
                        <form>
                            <!-- Form -->
                            <div class="row mb-4">
                                <label for="nameLabel" class="col-sm-3 col-form-label form-label">Nama Lengkap</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama" id="nameLabel" placeholder="Nama Lengkap" value="Superadmin">
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="row mb-4">
                                <label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" id="emailLabel" placeholder="Email" value="mark@site.com">
                                </div>
                            </div>
                            <!-- End Form -->

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->
            </div>
            <div class="col-lg-6">
                <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ubah password</h4>
                    </div>

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Form -->
                        <form id="changePasswordForm">
                            <!-- Form -->
                            <div class="row mb-4">
                                <label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label">Password Sekarang</label>

                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="currentPassword" id="currentPasswordLabel" placeholder="Masukkan Password Sekarang">
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="row mb-4">
                                <label for="newPassword" class="col-sm-3 col-form-label form-label">Password Baru</label>

                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="Masukkan password baru">
                                </div>
                            </div>
                            <!-- End Form -->

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Row -->
    </div>
@endsection

@push('js')
    <script src="/assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>

    <script>
        (function() {
            window.onload = function() {
                // INITIALIZATION OF SELECT
                // =======================================================
                HSCore.components.HSTomSelect.init('.js-select')
            }
        })()
    </script>
@endpush
